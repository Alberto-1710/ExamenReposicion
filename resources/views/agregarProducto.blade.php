<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Producto</title>
</head>
<body>
    <div class="container">
        <h2>Crear Nuevo Producto</h2>
        <br>
        <form action="{{ route('productos.guardar') }} " method="POST">
        @csrf
            <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" />
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" name="precio" id="precio" class="form-control" />
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="text" name="stock" id="stock" class="form-control" />
            </div>
            <div class="form-group">
                <label for="ISV">Paga ISV</label> 
                <select name="ISV">
                    <option value="0">No</option>
                    <option value="1">Sí</option>
                </select>
            </div>
            <div class="form-group">
                <a href="{{ route('productos.home') }}" class="btn btn-warning" >Volver</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
        </br>
    </div>
</body>
</html>