@extends('layouts.default')
@section('title')
    Home Page
@stop

@section('categorias')
    @foreach($categorias as $categoria)
        <li><a href="#">{{ $categoria->name }}</a></li>
    @endforeach
@stop

@section('content')
    <h1>Devcodela</h1>
    <b>{{ $msg }}</b>
    <h2>Laravel - conceptos avanzados</h2>
@stop
