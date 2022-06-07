 @extends ('layouts.menu')

 @section('contenido')

    <div class="row">
        <h1>{{ $producto->nombre }}</h1>
    </div>
    <div class="row">
        <div class="col s8">
            <p>Marca: {{ $producto->marca->nombre }}</p>
            <ul>
                <li>Precio: US{{ $producto->precio }}</li>
                <li>Descripcion: {{ $producto->desc }}</li>
                <li>Categoria: {{ $producto->categoria->nombre }}</li>
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