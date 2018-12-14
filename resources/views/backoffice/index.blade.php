@extends('layouts.master')

@section('content')
<main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Hola! Que hacemos hoy?</h1>
        <p>Selecciona una de estas opciones</p>
        <p><a class="btn btn-primary btn-lg" href="backoffice/users/" role="button">Usarios</a></p>
        <p><a class="btn btn-primary btn-lg" href="backoffice/products" role="button">Productos</a></p>
        <p><a class="btn btn-primary btn-lg" href="backoffice/categories" role="button">Categorias</a></p>
        <p><a class="btn btn-primary btn-lg" href="backoffice/transactions" role="button">Ver Trueques</a></p>
        
    </div>
    </div>

</main>

@endsection