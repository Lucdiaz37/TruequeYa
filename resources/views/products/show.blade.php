@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                    <a href="#">{{ $product->name }}</a>
                </h4>
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