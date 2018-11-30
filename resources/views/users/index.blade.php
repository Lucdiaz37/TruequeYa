@extends('layouts.master')

@section('content')

<br>
<br>

<ul>
@foreach($users as $user)
<li> <a class="" href="/users/{{ $user->id }}">{{ $user->name }}</a></li>

@endforeach
</ul>
@endsection