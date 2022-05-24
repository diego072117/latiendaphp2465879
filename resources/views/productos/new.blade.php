@extends('layouts.menu')

@section('contenido')

<div class="row">
    <h1 class="deep-purple-text text-darken-1">
        Nuevo producto 
    </h1>
</div>

<div class="row">
    
        <form class="col s8"
                method="POST"
                action="{{ url('productos') }}">
                @csrf
        <div class="row">
            <div class="input-field col s8">
                <input 
                       type="text" 
                       id="nombre"
                       name="nombre"
                       value="{{ old('nombre') }}">
                <label for="nombre">Nombre del producto</label>
                <span class="deep-purple-text text-darken-1">{{ $errors->first('nombre') }}</span>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <textarea 
                class="materialize-textarea" 
                id="desc"
                name="desc"
                >{{ old('desc') }}</textarea>

                <label for="desc">Descripcion</label>
                <span class="deep-purple-text text-darken-1">{{ $errors->first('desc') }}</span>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <input 
                       type="text" 
                       id="precio"
                       name="precio"
                       value="{{ old('precio') }}">
                <label for="precio">Precio</label>
                <span class="deep-purple-text text-darken-1">{{ $errors->first('precio') }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <select name="marca" id="marca">
                <option value="">Seleccione marca</option>
                     @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}">
                            {{ $marca->nombre }}

                        </option>
                     @endforeach   
                </select>
                <label for="marca">Marca</label>
                <span class="deep-purple-text text-darken-1">{{ $errors->first('marca') }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <select name="categoria" id="categoria">
                    <option value="">Seleccione categoria</option>
                     @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">
                            {{ $categoria->nombre }}
                        </option>
                     @endforeach   
                </select>
                <label for="categoria">Categoria</label>
                <span class="deep-purple-text text-darken-1">{{ $errors->first('categoria') }}</span>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s8">
                <div class="btn">
                    <span>Imagen...</span>
                    <input type="file" name="imagen">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <button class="btn waves-effect waves-light  col s8" 
                    type="submit" 
                    name="action">Guardar
             </button>
        </div>
        @if(session('mensaje'))
            <div class="row deep-purple-text text-darken-1">
                {{session('mensaje')}}
            </div>
        @endif
        </form>
    
</div>
@endsection