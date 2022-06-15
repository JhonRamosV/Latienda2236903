@extends('layouts.principal')

@section('contenido')

   <div class="row">

   <h1 class="cyan-text text-lighten-1"> Catalago de Produtos </h1>
   </div>
   @if(session('mensajito'))
   <dib>
       <p>{{ session('mensajito')}} 
           <a href="{{url('cart')}} ">
                Ir al carrito
           </a></p>
   </div>
   @endif
@foreach($productos as $producto)
<div class="row container">
    <div class="col s6">
      <div class="card">
            <div class="card-image">
            
                <img  src="{{asset('img/'.$producto ->imagen)}}" >
                <span class="#dd2c00 deep-orange-text text-accent-4" class="card-title">Nombre:{{$producto -> nombre}}</span>
            </div>
            <div class="card-content">
                <ul>
                <li> Descripcion: {{ $producto-> descrpcion}}</li>
                <li> Precio:{{$producto -> precio}}</li>
                </ul>
            </div>
                <a href="{{ url('productos/'.$producto ->id) }}">Ver Detalles</a>
                <br>
                <a href="{{ url('productos/create')}}" >Crear producto</a>
    
            
            </div>
        </div>
    </div>
  
</div>
@endforeach
@endsection