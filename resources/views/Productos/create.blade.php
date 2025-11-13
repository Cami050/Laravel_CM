@extends('layout')
@section('title', 'Crear producto')
@section('contenido')

<h1 class="h3 mb-3">Crear producto</h1>
    <form action="{{ route('productos.store') }}" method="POST" class="row g-3"> 
    @csrf

    {{-- Enviamos $categorias al partial --}}
        @include('productos.partials.form', [
            'categorias' => $categorias
        ])
        
    <div>
        <button class="btn btn-primary">Guardar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-light">Cancelar</a>
    </div>
    </form>
@endsection

