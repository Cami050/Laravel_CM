@extends('layout')

@section('title', 'Editar categoria')

@section('contenido')
<h1 class="h3 mb-3">Editar categoria</h1>

<form action="{{ route('categorias.update', $categoria) }}" method="POST">
    @csrf
    @method('PUT')

    @include('categorias.partials.form', ['categoria' => $categoria])

    <div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-light">Cancelar</a>
    </div>
</form>
@endsection