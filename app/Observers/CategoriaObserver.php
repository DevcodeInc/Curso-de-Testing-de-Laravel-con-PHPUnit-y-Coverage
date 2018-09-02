<?php

namespace App\Observers;

use App\User;
use App\Categoria;
use App\Notifications\NuevaCategoriaNotifications;

use Auth;

class CategoriaObserver
{
   public function creating(Categoria $categoria)
   {
      $categoria->comment = strtoupper($categoria->comment);
      $user = Auth::User();
      $user->notify(new NuevaCategoriaNotifications($categoria));
   }
}