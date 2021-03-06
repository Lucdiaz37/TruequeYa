@extends('layouts.master')
 @section('content')
 <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                     <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-primary" value="Cambiar" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">{{ $user->name }}</h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Tu Informacion</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Tus Productos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab" aria-controls="notifications" aria-selected="false">Tus Notificaciones</a>
                                    </li>
                                    
                                    @if(Auth::user()->id === $user->id)
                                    <li class="nav-item">
                                        <a class="nav-link" href="/products/create">Publicar Producto Nuevo</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="/users/{{$user->id}}/edit">Editar Tu Perfil</a>
                                    </li>
                                    @endif
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nombre</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$user->name}}
                                            </div>
                                        </div>
                                        <hr />
                                         <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$user->email}}
                                            </div>
                                        </div>
                                        <hr />
                                     </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                        @foreach ($user->products as $product)
                                             <h6>Nombre del producto</h6>
                                             <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
                                             <h6>Descripcion</h6>
                                             {{ $product->description }} 

                                             @if(Auth::user()->id === $user->id || Auth::user()->role === 4))
                                            <div class="row">
                                                    <div class="">
                                                        <a href="/products/{{ $product->id }}/edit" class="btn btn-primary">Editar</a>
                                                    </div>
                                                    <div class="">
                                                        <form action="/products/delete/{{ $product->id }}" method="post">
                                                            {{ csrf_field() }} 
                                                            {{ method_field('delete') }}
                                                            <input type="submit" class="btn btn-danger" name="delete" value="Eliminar">
                                                        </form>
                                                    </div>
                                                </div>
                                                @endif
                                                
                                            <hr />
                                         
                                            
                                        @endforeach
                                    </div>
                                    <div class="tab-pane fade show active" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                                        
                                        <div class="row">
                                           <div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Todas las notificaciones</label>
                                           </div>
                                           
                                       <hr />
                                        <div class="row">
    
                                            @foreach ($notifications as $notification)
                                                
                                                <div class="alert alert-success">
                                                    <h6>Tienes una solicitud de trueque de {{ $notification->findSender($notification->sender_id)->name }} por el producto {{ $notification->findProduct($notification->product_id)->name }}</h6>
                                            @endforeach
                                       </div>
                                       <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
 @endsection