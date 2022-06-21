@extends ('layouts.menu')

@section('contenido')

<div class="row">
    <h1 class="deep-purple-text text-darken-1">Carrito de compras</h1>
</div>
@if(session('cart'))

<div class="tow">
    <div class="col s8">
        <table class="striped light-blue lighten-4">
            <thead>
                <tr>
                    <th class="light-blue lighten-3">ID</th>
                    <th class="light-blue lighten-3">Producto</th>
                    <th class="light-blue lighten-3">Cantidad</th>
                    <th class="light-blue lighten-3">Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $producto)
                <tr>
                    <td>{{ $producto[0]["id"] }}</</td>
                    <td>{{ $producto[0]["nombre"] }}</td>
                    <td>{{ $producto[0]["cantidad"] }}</td>
                    <td>{{ $producto[0]["precio"] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div><br>

@else
<h5> No hay items en el carrito.</h5>   

@endif
<div class="row">
    <form method="POST" action="{{ route('cart.destroy' , 1) }}">
        @method('DELETE')
        @csrf 
        <button class="btn waves-effect waves-light" 
                        type="submit" >Remove cart
        </button>
    </form>
</div>

@endsection