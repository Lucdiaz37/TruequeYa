@extends('layouts.master')

@section('content')

<div class="mat-4">
<ul>
@foreach($categories as $category)
<li> {{ $category->name }}</li>
<form action="/backoffice/category/delete/{{ $category->id }}" method="post">
    {{ csrf_field() }} 
    {{ method_field('delete') }}
    <input type="submit" class="btn btn-danger" name="delete" value="Eliminar">
</form>

@endforeach
</ul>
</div>
@endsection