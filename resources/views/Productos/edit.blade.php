@extends('layout')

@section('title', 'Editar producto')

@section('contenido')
<h1 class="h3 mb-3">Editar producto</h1>

<form action="{{ route('productos.update', $producto) }}" method="POST" class="row g-3">
    @csrf
    @method('PUT')

    @include('productos.partials.form')

    <div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-light">Cancelar</a>
    </div>
</form>
@endsection
