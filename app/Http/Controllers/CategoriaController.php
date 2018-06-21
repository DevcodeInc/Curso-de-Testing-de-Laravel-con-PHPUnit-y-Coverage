<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Categoria;


class CategoriaController extends Controller
{
	public function create()
	{
        if (!\Cache::has('Categorias')) {
            $Categorias = Categoria::all();
            \Cache::put('Categorias', $Categorias, 5);
        } else {
            $Categorias = \Cache::get('Categorias');
        }

		return view('pages/categoria', [
            'categorias' => $Categorias
        ]);
	}

	public function store(Request $request)
	{
		$categoria = new Categoria;
    	$categoria->name = $request->get('name');
    	$categoria->comment = $request->get('comment');
    	$categoria->order = $request->get('order');
    	$categoria->save();

    	$parametros = ['msg' => 'Nueva Categoria'];
    	return Redirect::route('home', $parametros);
	}
}