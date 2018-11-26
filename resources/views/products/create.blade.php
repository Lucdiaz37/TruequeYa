@extends('layouts.partials.navbar') 
@section('content')

<div class="container">

    @if(count($errors) > 0)
    <div class="row col-6 offset-3">
        <ul clasS="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-8 offset-2">
        <form class="form" action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input class="form-control" type="text" name="description">
            </div>
            <div class="form-group">
                <label for="location">Zona</label>
                <input class="form-control" type="text" name="location">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Selecciona Categoria</label>
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-6">
                <label for="photopath">Foto del producto(opcional)</label>
                <input class="form-control" type="file" name="photopath">
            </div>

            <div class="form-group">
                <label for="price">Precio Estimado del producto</label>
                <input class="form-control" type="number" name="price">
            </div>

                <input type="submit" class="btn btn-danger form-control col-6 offset-3">
        </form>
        </div>
    </div>
</div>

@endsection