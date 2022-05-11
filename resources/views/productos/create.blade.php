@extends('layouts.principal')

@section('contenido')
<div class="row">
  <h1 class="#00bfa5 teal-text text-accent-4"> Nuevo Producto</h1>
    <form method="POST"
    action="{{ route('productos.store') }}" 
    class="col s12">
    @csrf
      <div class="row">
        <div class ="input-field col s8">
          <input placeholder="Nombre de Producto" id="Nombre" type="text" class="validate" name="nombre">
          <label for="nombre">Nombre del Producto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <textarea class="materialize-textarea" id="descripcion"  name="descripcion"></textarea>
          <label for="descripcion">descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="Precio" type="text" class="validate" name="Precio">
          <label for="Precio">Precio</label>
        </div>
      </div>
      <div class="row">
      <div class="file-field input-field col s8">
      <div class="btn">
        <span>Imagen de Producto</span>
        <input type="file" name="Imagen">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="input-field col s8">
          <select name="categoria">
          <option value="" disabled selected>Eliga Categoria</option>
          @foreach($categorias as $categoria)
          <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
          @endforeach
          </select>
          <label>Categorias</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <select name="marca">
          <option value="" disabled selected>Eliga Marca</option>
          @foreach($marcas as $marca)
          <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
          @endforeach
          </select>
          <label>Marcas</label>
        </div>
      </div>
      <div class="row">
      <button class="btn waves-effect waves-light"
      type="submit">
      Guardar
    
      </button>
        </div>
      </div>
    </form>
  </div>
  @endsection