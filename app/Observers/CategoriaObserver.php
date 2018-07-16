<?php

namespace App\Observers;
use App\Categoria;

class CategoriaObserver
{
   public function creating(Categoria $categoria)
   {
      $categoria->comment = strtoupper($categoria->comment);
   }
}