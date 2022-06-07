@extends('layouts.menu')

@section('contenido')

    <div class="row">
        <h1>Catalogo de productos</h1>
    </div>
    @foreach($productos as $producto)
        <di class="row">
            <div class="col s3 grey darken-4">
                <div class="card grey lighten-4">
                    <div class="card-image">
                        @if($producto->imagen===null)
                            <img src="{{ asset('img/not.jpg'  ) }}" alt="">
                        @else
                            <img src="{{ asset('img/'.$producto->imagen) }}" alt="">
                        @endif
                        
                            <span 
                                 class="card-title">{{ $producto->nombre }}
                            </span>
                    </div>
                    <div class="card-content">
                        <p>{{ $producto->desc }}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('productos.show' , $producto->id) }}">Ver detalles</a>
                    </div>
                </div>
            </div>
        </di>
    @endforeach

@endsection