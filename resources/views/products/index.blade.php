@extends('layouts.master')

@section('content')
    <header class="bg-dark text-white">
            <div class="container text-center">
                <br>
                <p class="lead">¡Los mejores trueques los encontras aca!</p>
            </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Trueques Disponibles</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Productos</a>
            <a href="#" class="list-group-item">Servicios</a>
            <a href="#" class="list-group-item">Otro</a>
          </div>

        </div>

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            @foreach ($products as $product)
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="" alt=""></a>
                        <div class="card-body">
                        <h4 class="card-title">
                        <a href="products/{{ $product->name }}">{{ $product->name }}</a>
                        </h4>
                      <h5>{{ $product->location }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                        </div>
                         @if(Auth::user()) 
                         @if(Auth::user()->role === 7)
                <div class="row">
                    <div class="">
                        <a href="/products/{{ $product->id }}/edit" class="btn btn-primary">Editar</a>
                    </div>
                    <div class="">
                        <form action="products/delete/{{ $product->id }}" method="post">
                            {{ csrf_field() }} 
                            {{ method_field('delete') }}
                            <input type="submit" class="btn btn-danger" name="delete" value="Eliminar">
                        </form>
                    </div>
                </div>
                @endif
                @endif
                    </div>
                </div>
            @endforeach

          </div>
          <!-- /.row -->
          <div class="offset-4">
            {{ $products->links() }}
          </div>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
