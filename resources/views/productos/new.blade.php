@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1 class="deep-purple-text text-darken-1">
        Nuevo producto 
    </h1>
</div>

<div class="row">
    <form class="row">
        <form class="col s8"
                method="POST"
                accion="">
        <div class="row">
            <div class="input-field col s8">
                <input 
                       type="text" 
                       id="nombre"
                       name="nombre">
                       
                <label for="nombre">Nombre del producto</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <textarea 
                class="materialize-textarea" 
                id="desc"
                name="desc"></textarea>

                <label for="desc">Descripcion</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <input 
                       type="text" 
                       id="precio"
                       name="precio">
                <label for="precio">Precio</label>
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
            <button class="btn waves-effect waves-light  col s2" 
                    type="submit" 
                    name="action">Guardar
             </button>
        </div>

        </form>
    </form>
</div>
@endsection