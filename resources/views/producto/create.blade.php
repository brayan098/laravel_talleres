@extends('layout.app')
@section('title', 'Formulario de productos')
@section('content')
<section>
<form action="{{ route('producto.store') }}" method="POST" class="form-producto">
        @csrf
        <label class="label-producto" for="nombre">Nombre</label>
        <input class="input-producto" id="nombre" name="nombre" type="text">

        <label class="label-producto" for="descripcion">Descripción</label>
        <input class="input-producto" id="descripcion" name="descripcion" type="text">

        <label class="label-producto" for="presentacion">Presentación</label>
        <input class="input-producto" id="presentacion" name="presentacion" type="text">

        <label class="label-producto" for="pais_origen">País de Origen</label>
        <input class="input-producto" id="pais_origen" name="pais_origen" type="text">

        <label class="label-producto" for="precio">Precio</label>
        <input class="input-producto" id="precio" name="precio" type="number">

        <label class="label-producto" for="stock">Stock</label>
        <input class="input-producto" id="stock" name="stock" type="number">

        <input class="button-producto" type="submit" value="Enviar">
    </form>
</section>
@endsection