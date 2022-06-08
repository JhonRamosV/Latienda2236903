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
        //seleciona todos los productos es un arreglo
        $productos = Producto::all();
        //mostrar la vista de catalogo lleando los productos
        return view('productos.index')
        ->with('productos' , $productos);
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
       
        //froma para crear y cargar la imagen
        $archivo = $request -> Imagen;

        $p -> Imagen= $archivo -> getClientOriginalName();

        $ruta = public_path()."/img";
        $archivo->move($ruta,$archivo -> getClientOriginalName());

        $p->save();
        return redirect('productos/create')
        ->with('mensaje' , "Producto Registrado Correctamente");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        $p = Producto::find($producto);
        return view('productos.details')
                   ->with('producto' , $p);       
        
        
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
