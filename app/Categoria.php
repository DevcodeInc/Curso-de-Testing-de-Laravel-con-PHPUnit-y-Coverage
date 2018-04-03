<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'Categorias';
    public $timestamps = true;
    protected $fillable = [
            'name',
            'comment',
            'orden'
        ];
}
