<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class SendSlack extends Controller
{
    public function send()
    {
        if (Auth::check()) {
            $user = Auth::User();
            $user->notify(new Newslack());
            echo "A slack notification has been send";
        }
    }
}
