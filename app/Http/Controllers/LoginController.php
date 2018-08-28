<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class LoginController extends Controller
{
    public function redirectToSocial($SocialRed) 
    {
    	return Socialite::driver($SocialRed)->redirect();
    }

    public function handleSocialCallback($SocialRed)
    {
    	$SocialUser = Socialite::driver($SocialRed)->user();
    	$appUser = User::where('email', $SocialUser->getEmail())->first();

    	if ($appUser == null) {
            $email = $SocialRed == 'twitter' ? $SocialUser->getName() : $SocialUser->getEmail();

    		$appUser = User::create([
    			'email' => $email,
    			'name' => $SocialUser->getName(),
    			'password' => md5(date('Y-m-d H:i:s')),
    			'from' => $SocialRed
    		]);
    	}
    	
    	auth()->login($appUser);

    	return redirect('/');
    }
}
