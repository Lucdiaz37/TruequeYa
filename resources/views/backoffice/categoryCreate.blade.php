@extends('layouts.master')

@section('content')

<div class="container mat-4">
    <div class="row">
        <div class="col-8 offset-2">
        <form class="form" action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Nombre de la nueva categoria</label>
                
                <input class="form-control" type="text" name="name" value="{{ old("name") }}">
            </div>

            <div>
                    @foreach ($errors->get('name') as $error)
                        <li class="alert alert-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </div>

            <input type="submit" class="btn btn-danger form-control col-6 offset-3" value="Crear">

            
        </form>
        </div>
    </div>
</div>

@endsection