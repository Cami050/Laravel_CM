@extends('layout')

@section('title', 'Crear Categoria')

@section('contenido')
<h1 class="h3 mb-3">Crear Categoria</h1>

<form action="{{ route('categorias.store') }}" method="POST" class="row g-3">
    @csrf

    @include('categorias.partials.form')

    <div>
        <button class="btn btn-primary">Guardar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-light">Cancelar</a>
    </div>
</form>
@endsection