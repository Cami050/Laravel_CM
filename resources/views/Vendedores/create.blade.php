 @extends('layout')

@section('title', 'Crear Vendedor')

@section('contenido')
<div class="container">
    <h1 class="h3 mb-3">Crear Vendedor</h1>

    <form action="{{ route('vendedores.store') }}" method="POST" class="row g-3">
        @csrf
        @include('vendedores.partials.form')
         <!-- @include('vendedores.form') -->
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('vendedores.index') }}" class="btn btn-light">Cancelar</a>
        </div>
    </form>
</div>
@endsection



