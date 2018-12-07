@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <br>
            <br>
            <div class="card">
                <img class="card-img-top" src="{{ asset( 'storage/' . $product->photopath)}}" alt="">
                <div class="card-body">
                    <h3 class="card-title">
                    {{ $product->name }}
                </h3>
                <h5>{{ $product->location }}</h5>
                <p class="card-text">{{ $product->description }}</p>
            <h5>Precio Estimado ${{ $product->price }}</h5>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-md btn-block bg-purple font-white">Solicitar Trueque</button>
                </div>
            </div>
        </div>
  </div>

@endsection