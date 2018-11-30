@extends('layouts.master')

@section('content')

<div class="col-7 offset-1">
    <h3 class="">Editando Perfil:</h3>
    <h2>{{ $user->name }}</h2>
   
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form class="" action="" method="POST" enctype="multipart/form-data">
{{ method_field('PATCH') }}
{{ csrf_field() }}
<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{ $user->email }}" class="form-control">
</div>
        <div class="form-group">
            <input type="submit" class="btn btn-danger" value="Confirmar Cambios">
        </div>
    </form>






@endsection