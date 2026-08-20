<form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="nombre">Nombre del Producto:</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="precio">Precio (Bs.):</label>
    <input type="number" step="0.01" name="precio" id="precio" required>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea>

    <button type="submit">Guardar Producto</button>
</form>