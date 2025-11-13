@extends('layout')

@section('title', 'Lista de Vendedores')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Vendedores</h1>
    <a href="{{ route('vendedores.create') }}" class="btn btn-primary">Nuevo</a>
</div>

@if($vendedores->count())
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendedores as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td><a href="{{ route('vendedores.show', $v) }}">{{ $v->nombre }}</a></td>
                    <td>{{ $v->cargo }}</td>
                    <td>{{ $v->telefono }}</td>
                    <td class="d-flex gap-2">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('vendedores.edit', $v) }}">Editar</a>
                        <form action="{{ route('vendedores.destroy', $v) }}" method="POST" onsubmit="return confirm('¿Eliminar este vendedo: {{ $v->nombre }}?')">
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
    <p class="text-muted">No hay vendedores aún.</p>
@endif

<p>Impresión ejemplo</p>
@endsection
