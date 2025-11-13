<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre',$categoria->nombre ?? '') }} "required>
</div>

<div class="mb-3">
    <label for="descripcion" class="form-label">descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion',$categoria->descripcion ?? '') }}"required>
</div>

