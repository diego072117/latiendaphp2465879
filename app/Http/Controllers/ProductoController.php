<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aqui va a ir el catalogo de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //seleccionar categorias y marcas
        $marcas = Marca::all();
        $categorias = Categoria::all();

        return view('productos.new')
                ->with('marcas', $marcas)
                ->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //reglas de validacion
        $reglas = [
            "nombre" => 'required|alpha',
            "desc" => 'required|min:5|max:50',
            "precio" => 'required|numeric',
            "marca" => 'required',
            "categoria" => 'required'
        ];
        //mensajes personalizados por regla 
        $mensajes =[
            "required" => "Campo obligatorio",
            "min" => "minimo 5 caracteres",
            "max" => "maximo 50 caracteres",
            "numeric" => "solo numeros",
            "alpha" => "solo letras"
        ];
        //crear el objeto validadir 
        $v = Validator::make($r->all(), $reglas, $mensajes );
        //validar los datos : metodo fails()
        //metodo fails() : retorna true, en caso de que la validacon falle y retorna falso en caso de validacion correcta 
        if($v->fails()){
                //validacion falla 
                //redirecciono a formulario nuevo producto  
                return redirect('productos/create')
                    ->withErrors($v)
                    ->withInput();
        }else{
        //validacion correcta 

        //crear entidad producto:
        $p = new Producto;
       //asignar valores a atributos
       //le nuevo producto: 
       $p->nombre = $r->nombre;
       $p->desc = $r->desc;
       $p->precio = $r->precio;
       $p->marca_id = $r->marca;
       $p->categoria_id = $r->categoria;
       //grabar en base de datos el nuevo producto 
       $p->save();
      // redireccionar a la ruta : create 
      //levando datos de sesion
      return redirect('productos/create')
                        ->with('mensaje', 'Producto registrado');
        
        }

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "aqui va la informacion del producto cuyo id es: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "aqui va a ir el formulario de edicion del producto cuyo id es : $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
