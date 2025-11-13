@extends('layout')

@section('title', 'Editar categoria')

@section('contenido')
<h1 class="h3 mb-3">Editar categoria</h1>

<form action="{{ route('categoria.update', ['categoria'=>categoria]) }}" method="POST">
    
    @csrf
    @method('PUT')

     @include('categoria.form', ['categoria'=>$categoria])

    <div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('categoria.index') }}" class="btn btn-light">Cancelar</a>
    </div>
</form>
@endsection
