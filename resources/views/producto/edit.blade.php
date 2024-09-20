@extends('layout.app')
@section('title', 'Editar productos')
@section('content')
<section>
    <form action="{{ route('producto.update', $producto->id) }}" method="POST" class="form-producto">
        @csrf
        @method('PUT')
        <label class="label-producto" for="nombre">Nombre</label>
        <input class="input-producto" id="nombre" name="nombre" type="text" value="{{ $producto->nombre }}">

        <label class="label-producto" for="descripcion">Descripción</label>
        <input class="input-producto" id="descripcion" name="descripcion" type="text" value="{{ $producto->descripcion }}">

        <label class="label-producto" for="presentacion">Presentación</label>
        <input class="input-producto" id="presentacion" name="presentacion" type="text" value="{{ $producto->presentacion }}">

        <label class="label-producto" for="pais_origen">País de Origen</label>
        <input class="input-producto" id="pais_origen" name="pais_origen" type="text" value="{{ $producto->pais_origen }}">

        <label class="label-producto" for="precio">Precio</label>
        <input class="input-producto" id="precio" name="precio" type="number" value="{{ $producto->precio }}">

        <label class="label-producto" for="stock">Stock</label>
        <input class="input-producto" id="stock" name="stock" type="number" value="{{ $producto->stock }}">

        <input class="button-producto" type="submit" value="Actualizar">
    </form>
</section>
@endsection