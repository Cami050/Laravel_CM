@extends('layout')

@section('title', 'Lista de Productos')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Productos</h1>
    <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo</a>
</div>

@if($productos->count())
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td><a href="{{ route('productos.show', $p) }}">{{ $p->nombre }}</a></td>
                    <td>${{ number_format($p->precio, 2) }}</td>
                    <td>{{ $p->cantidad }}</td>
                    <td>{{ $p->descripcion }}</td>
                    <td>{{ $p->categoria->nombre }}</td>
                    <td class="d-flex gap-2">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('productos.edit', $p) }}">Editar</a>
                        <form action="{{ route('productos.destroy', $p) }}" method="POST" onsubmit="return confirm('¿Eliminar: {{ $p->nombre }}?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p class="text-muted">No hay productos aún.</p>
@endif


@endsection
