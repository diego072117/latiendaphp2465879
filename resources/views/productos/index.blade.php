@extends('layouts.menu')

@section('contenido')

    <div class="row">
        <h1 class="deep-purple-text text-darken-1">Catalogo de productos</h1>
    </div>
    @foreach($productos as $producto)
        <di class="row" style="display: inline-block">
            <div class="col grey darken-4">
                <div class="card grey lighten-4" style="height:400px; width:400px">
                    <div class="card-image">
                        @if($producto->imagen===null)
                            <img src="{{ asset('img/not.jpg'  ) }}" alt="">
                        @else
                            <img src="{{ asset('img/'.$producto->imagen) }}" alt="">
                        @endif
                        
                            <span 
                                 class="card-title ">{{ $producto->nombre }}
                            </span>
                    </div>
                    <div class="card-content">
                        <p>{{ $producto->desc }}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('productos.show' , $producto->id) }}" class="deep-purple-text text-darken-1">Ver detalles</a>
                    </div>
                </div>
            </div>
        </di>
    @endforeach

@endsection