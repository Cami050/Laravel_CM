<div class="col-md-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input 
        type="text" 
        name="nombre" 
        id="nombre" 
        class="form-control" 
        value="{{ old('nombre', $categoria->nombre ?? '') }}" 
        required>
</div>

<div class="col-md-6">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input 
        type="text" 
        name="descripcion" 
        id="descripcion" 
        class="form-control" 
        value="{{ old('descripcion', $categoria->descripcion ?? '') }}" 
        required>
</div>

