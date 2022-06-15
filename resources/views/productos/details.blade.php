@extends('layouts.principal')

@section('contenido')
<div class="row">
    <h1>{{ $producto -> nombre}}
</div>

<div class="row">
    <div class="col s8">
        <div clas="row">
        <img src="{{asset('img/'.$producto ->imagen)}}" width="450px" height="290px" >
        </div>
</div>
<div class="row">
    <div class="col s8">
        <ul>
            <li><strong> Marca:</strong>{{$producto -> marca->nombre}} </li>
            <li><strong> Categoria:</strong>{{$producto -> categoria->nombre}} </li>
            <li><strong> Precio:</strong>{{$producto -> precio}} </li>
            <li><strong> Descripcion:</strong>{{$producto -> descrpcion}} </li>
        </ul>
    </div>
</div>
</div>
<div class="col s4">
        <form action="{{ url('cart') }}" method="POST">
            @csrf
            <div class="row">
                <h3>Añadir al carrito</h3>
            </div>
            <input type="hidden" name="prod_id" value="{{ $producto -> id }}">
            <input type="hidden" name="precio" value="{{ $producto -> precio }}">
            <div class="row">
                <div class="col s4 input-field">
                    <select name="cantidad" id="cantidad">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                    </select>
                    <label for="Cantidad">Cantidad:</label>
                </div>
            </div>
            <div class="row">
      <button class="btn waves-effect waves-light"
      type="submit">
      Añadir
      </button>
        </div>
            </div>
        </form>
    </div>
</div>
@endsection