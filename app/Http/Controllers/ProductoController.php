<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;
use App\Http\Requests\StoreProductoRequest;
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
        echo"Aqui va a ir el catalog de Productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //selescionar marcas para listar
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('productos.create')
        ->with("marcas" , $marcas)
        ->with("categorias" , $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
       

            $p = new Producto();
        $p->nombre = $request->nombre;
        $p->descrpcion = $request->desc;
        $p->precio = $request->Precio;
        $p->marca_id = $request->marca;
        $p->categoria_id = $request->categoria;
        $p->save();
        //redireccionar:a una ruta disponible
        return redirect('productos/create')
        ->with('mensaje' , "Producto Registrado Correctamente");

        
        //crear una estidad producto

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo"Aqui se va a mostrar el detalle de producto"
        
        
        ->with('mensaje' , "Producto Registrado Correctamente");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit( $producto)
    {
        echo"Aqui se va a mostrar el formulario de editar producto";
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
        echo"Aqui se va a guardar el producto guardado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        echo"Aqui se va a eliminar el producto";
    }
}
