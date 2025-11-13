@extends('layout')

@section('title', 'Editar Vendedor')

@section('contenido')
<div class="container">
    <h1 class="h3 mb-3">Formulario editar Vendedor</h1>

    <!-- <form action="{{ route('vendedores.update', $vendedor->id) }}" method="POST" class="row g-3"> -->
        <form action="{{ route('vendedores.update', ['vendedore'=>$vendedor]) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- @include('vendedores.partials.form') -->
         @include('vendedores.form', ['vendedore'=>$vendedor])
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('vendedores.index') }}" class="btn btn-light">Cancelar</a>
        </div>
    </form>
</div>
@endsection


