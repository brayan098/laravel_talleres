@extends('layout.app')
@section('title', 'Lista de productos')
@section('content')

<div class="container-productos">
    <h2 class="h2-productos">Productos</h2>
    <div class="table-responsive">
        <table class="table-productos">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Presentacion</th>
                    <th>Pais de origen</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->presentacion }}</td>
                    <td>{{ $producto->pais_origen }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td class="acciones-productos">
                        <a href="{{ route('producto.edit', $producto->id) }}">Editar</a>
                    </td>
                    <td class="acciones-productos">
                        <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none; background: none; color: #007BFF; cursor: pointer; padding: 0;">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="/producto/create" class="crear-producto">Crear producto</a>
</div>

@endsection