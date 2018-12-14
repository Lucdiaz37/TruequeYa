@extends('layouts.master')

@section('content')

<br>
<br>

<ul>
@foreach($users as $user)
<li> <a class="" href="/users/{{ $user->id }}">{{ $user->name }}</a></li>
<form action="/backoffice/user/delete/{{ $user->id }}" method="post">
    {{ csrf_field() }} 
    {{ method_field('delete') }}
    <input type="submit" class="btn btn-danger" name="delete" value="Eliminar">
</form>

@endforeach
</ul>
@endsection