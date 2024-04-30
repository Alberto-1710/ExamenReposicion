<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Proveedor</title>
</head>
<body>
    <div class="container">
        <h2>Crear Nuevo Proveedor</h2>
        <br>
        <form action="{{ route('proveedores.guardar') }} " method="POST">
        @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" />
            </div>
            <div class="form-group">
                <label for="fechaRegistro">Fecha Registro:</label>
                <input type="date" name="fechaRegistro" id="fechaRegistro" class="form-control" />
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control" />
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="text" name="correo" id="correo" class="form-control" />
            </div>
            <div class="form-group">
                <a href="{{ route('proveedores.home') }}" class="btn btn-warning" >Volver</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
        </br>
    </div>
</body>
</html>