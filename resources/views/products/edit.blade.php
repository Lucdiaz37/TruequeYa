@extends('layouts.partials.navbar')

@section('content')

<div class="col-7 offset-1">
    <h3 class="">Editando Productos:</h3>
    <h2>{{ $product->name }}</h2>
   
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
    <input type="text" name="name" value="{{ $product->name }}" class="form-control">
</div>
<div class="form-group">
    <label for="Descripcion">Descripcion</label>
    <input type="text" name="description" value="{{ $product->description }}" class="form-control">
</div>
<div class="form-group">
    <label for="Zona">Zona</label>
    <input type="text" name="location" value="{{ $product->location }}" class="form-control">
</div>
<div class="form-group">
    <label for="Precio Estimado">Precio Estimadoo</label>
    <input type="text" name="price" value="{{ $product->price }}" class="form-control">
</div>
<div class="form-group">
    <label for="Categoria">Categoria</label>
    <select class="form-control" name="category_id">
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
    @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>
</div>

        <div class="form-group">
            <input type="submit" class="btn btn-danger" value="Confirmar Cambios">
        </div>
    </form>






@endsection
