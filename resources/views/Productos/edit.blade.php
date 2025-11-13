@extends('layout')

@section('title', 'Editar producto')

@section('contenido')
<h1 class="h3 mb-3">Editar producto</h1>

<form action="{{ route('productos.update', $producto) }}" method="POST" class="row g-3">
    @csrf
    @method('PUT')

    {{-- Solo una vez, pasando $categorias --}}
    @include('productos.partials.form', [
        'categorias' => $categorias,
        'producto' => $producto // si el partial lo necesita
    ])

    <div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-light">Cancelar</a>
    </div>
</form>
@endsection