@extends('layouts.master')

@section('content')

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
        <form class="form" action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label for="name">Nombre</label>
                <div>
                    @foreach ($errors->get('name') as $error)
                        <li class="alert alert-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
                <input class="form-control" type="text" name="name" value="{{ old("name") }}">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <div>
                    @foreach ($errors->get('description') as $error)
                        <li class="alert alert-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
                <input class="form-control" type="text" name="description" value="{{ old("description") }}">
            </div>
            <div class="form-group">
                <label for="location">Zona</label>
                <div>
                    @foreach ($errors->get('location') as $error)
                        <li class="alert alert-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
                <input class="form-control" type="text" name="location" value="{{ old("location") }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Selecciona Categoria</label>
                <div>
                    @foreach ($errors->get('category_id') as $error)
                        <li class="alert alert-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
                <select class="form-control" name="category_id">
                    <option value=""></option>
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
                <div>
                    @foreach ($errors->get('price') as $error)
                        <li class="alert alert-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
                <input class="form-control" type="number" name="price" value="{{ old("price") }}">
            </div>

            <input type="submit" class="btn btn-danger form-control col-6 offset-3">
        </form>
        </div>
    </div>
</div>

@endsection