@extends('layout')

@section('title', 'Lista de Categorias)

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Categorias</h1>
    <a href="{{ route('categorias.create') }}" class="btn btn-primary">Nueva</a>
</div>

@if($productos->count())
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td><a href="{{ route('categorias.show', $c) }}">{{ $c->nombre }}</a></td>
                    <td>{{ $c->descripcion }}</td>
                    <td class="d-flex gap-2">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('categoria.edit', $c) }}">Editar</a>
                        <form action="{{ route('categoria.destroy', $c) }}" method="POST" onsubmit="return confirm('¿Eliminar Categoria llamada: {{ $c->nombre }}?')">
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
    <p class="text-muted">No hay Categorias ahora.</p>
@endif

<p>Impresión ejemplo</p>
@endsection
