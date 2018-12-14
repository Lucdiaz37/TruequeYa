@extends('layouts.master')

@section('content')
<main role="main">
    
    <div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Administrador</h1>
        <p>Selecciona una de estas opciones</p>
        <p><a class="btn btn-primary btn-lg" href="/backoffice/users/" role="button">Usarios</a></p>
        <p><a class="btn btn-primary btn-lg" href="/backoffice/categories" role="button">Eliminar Categorias</a></p>
        <p><a class="btn btn-primary btn-lg" href="/backoffice/category/create" role="button">Crear Categoria</a></p>
        <p><a class="btn btn-primary btn-lg" href="/backoffice/transactions" role="button">Ver Trueques</a></p>
        
    </div>
    </div>

</main>

@endsection