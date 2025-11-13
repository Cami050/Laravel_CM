<div class="col-md-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input 
        type="text" 
        class="form-control" 
        id="nombre" 
        name="nombre"
        value="{{ old('nombre', $producto->nombre ?? '') }}"
        required>
</div>

<div class="col-md-6">
    <label for="precio" class="form-label">Precio</label>
    <input 
        type="number" 
        class="form-control" 
        id="precio" 
        name="precio"
        value="{{ old('precio', $producto->precio ?? '') }}" 
        step="0.01" 
        min="0"
        required>
</div>

<div class="col-md-6">
    <label for="cantidad" class="form-label">cantidad</label>
    <input 
        type="number" 
        class="form-control" 
        id="cantidad" 0
        name="cantidad"
        value="{{ old('cantidad', $producto->cantidad ?? '') }}" 
        min="0"
        required>
</div>

<div class="col-12">
    <label for="descripcion" class="form-label">Descripción</label>
    <textarea 
        class="form-control" 
        id="descripcion" 
        name="descripcion">{{ old('descripcion', $producto->descripcion ?? '') }}</textarea>
</div>



<div class="col">
<label class="form-label">Categoría</label>
<select name="categoria_id" class="form-select @error('categoria_id') is-invalid
@enderror" required>
<option value="">Seleccione categoria...</option>
@foreach($categorias as $c)
<option value="{{ $c->id }}" {{ old('categoria id', $producto->categoria_id ?? '')
$c->id? 'selected': '' }}>
{{ $c->nombre }}
</option>
@endforeach
</select>
@error('categoria_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
</div>
