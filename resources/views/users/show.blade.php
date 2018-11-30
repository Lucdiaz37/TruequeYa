@extends('layouts.master')

@section('content')
<body>
<section class="d-flex flex-direction-row col-10 offset-1">
    <article class="col-6 offset-1">
        <div class="">
            <br>
            <br>
            <br>

            <div class="card-body"> 
                    <h6 class="card-title">Bienvenido {{ $user->name }}!</h6>
                    <h4>{{ $user->email }}</h4>
                    <p>Miembro desde: {{ $user->created_at }}</p>
                <p><a class="btn btn-warning" href="#">Editar perfil</a></p>
            </div>
        </div>
        
    </article>
    
</section>



@endsection