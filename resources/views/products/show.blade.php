@extends('layouts.master')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-4 col-md-6 mb-4">
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
                <form class="form" action="/solicitudes/product/{{ $product->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="recipient_id" id="" value="{{ $product->user->id }}" hidden>
                    <input type="text" name="sender_id" id="" value="{{ auth()->user()->id }}" hidden>
                    <input type="text" name="product_id" id="" value="{{ $product->id }}" hidden>
                    <input type="submit" class="btn btn-md btn-block bg-purple font-white" value="Solicitar Trueque">
                </form>
            </div>
        </div>
  </div>

@endsection