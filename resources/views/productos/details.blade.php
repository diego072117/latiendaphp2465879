 @extends ('layouts.menu')

 @section('contenido')

    <div class="row">
        <h1 class="deep-purple-text text-darken-1">{{ $producto->nombre }}</h1>
    </div>
    <div class="row">
        <div class="col s8">
            <h5 class="deep-purple-text text-darken-1">Marca</h5>
            <p>{{ $producto->marca->nombre }}</p>
            <ul>
                <h5 class="deep-purple-text text-darken-1">Precio</h5>
                    <li>US {{ $producto->precio }}</li>
                <h5 class="deep-purple-text text-darken-1">Descripcion</h5>
                    <li>{{ $producto->desc }}</li>
                <h5 class="deep-purple-text text-darken-1">Categoria</h5>
                    <li>{{ $producto->categoria->nombre }}</li><br><br>
                    <li><img src="{{ asset('img/'.$producto->imagen) }}" alt="" width="500px"></li>
            </ul>
        </div>
        <div class="col s4">
                <div class="row">
                    <h3>Añadir al carrito</h3>
                </div>
                
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="prod_id" value="{{ $producto->id }}">
                        <input type="hidden" name="prod_nom" value="{{ $producto->nombre }}">
                        <input type="hidden" name="precio" value="{{ $producto->precio }}">
                        <div class="row">
                            <div class="col s4 input-field">
                                <select name="cantidad" id="cantidad">
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                </select>
                                <label for="cantidad">Cantidad</label>
                            </div><br><br><br><br>
                            <div>
                                <button class="btn waves-effect waves-light  col s3" 
                                        type="submit" 
                                        name="action">Añadir
                                </button>
                            </div>
                        </div>
                    </form>
                
        </div>
    </div>


 @endsection