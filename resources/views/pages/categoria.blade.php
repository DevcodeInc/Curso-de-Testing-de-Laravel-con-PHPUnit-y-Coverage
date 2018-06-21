@extends('layouts.default')
@section('title')
    Nueva Categoria
@stop

@section('categorias')
    @foreach($categorias as $categoria)
        <li><a href="#">{{ $categoria->name }}</a></li>
    @endforeach
@stop

@section('content')
    <h1>Devcodela</h1>
    <h2>Laravel - conceptos avanzados</h2>
	<form method="post" action=" {{ action('CategoriaController@store')}}">
    	{{csrf_field()}}
        <div class="form-group">
        	<label class="col-md-4">Nombre Categoria</label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <div class="form-group">
        	<label class="col-md-4">Comentario Categoria</label>
            <input type="text" class="form-control" name="comment"/>
        </div>
        <div class="form-group">
        	<label class="col-md-4">Ordeb Categoria</label>
            <input type="text" class="form-control" name="order"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>    
@stop
