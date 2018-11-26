@extends('layouts.partials.navbar')

@section('content')
<!-- Header -->
<header class="bg-dark text-white">
        <div class="container text-center">
            <br>
            <br>
            <h2>Bienvenidos a TruequeYa</h2>
            <p class="lead">¡La plataforma online número uno de intercambios en la Argentina!</p>
        </div>
</header>


<!-- Cuerpo principal -->
<section class="bg-home">
    <div class="container">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="images/img1.png" alt="">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="images/img2.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="images/img3.png" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <br>
                <br>
            </div>
            <div class="col-lg-8 mx-auto">
                <h2>¿Quiénes somos?</h2>
                <p class="lead">TruequeYa fue creado en el año 2018, es una página social destinada a apoyar el trueque y el reúso. TruequeYa nace de la idea de que las personas tengan una plataforma libre para poder intercambiar sus cosas, servicios y/o conocimientos a través de la web.  </p>
                <ul>
                    <li>TruequeYa nació con la idea de crear algo para apoyar nuestra economía y ecología actual en Argentina.</li>
                    <li>Mas de un millón de argentinos se registraron ¿Qué esperas para probarlo?</li>
                    <li>¡Publica gratis y conseguí las cosas que siempre buscaste!</li>
                </ul>

                <br>
                <br>

                <h2>Acerca de TruequeYa</h2>

                <br>

                <div>
                    <img class="img-fluid" src="images/trueque.png" >
                </div> 

                <br>
                <br>

                <ol>
                    <li>Registrate en TruequeYa. </li>
                    <li>Subir algo que quieras truequear o reusar a la página y esperar a que te contacten.</li>
                    <li>Y/o buscar algo que te interese y hacer oferta de algo a cambio</li>
                    <li>Ponerse de acuerdo para hacer intercambio en vivo o hacer envio.</li>
                    <br>
                </ol>
                    <h5>Si te quedó alguna duda consultá nuestra sección de  <a href="/faqs">Preguntas frecuentes</a>.</h5>
            </div>
        </div>
    </div> 
</section>
   
@endsection