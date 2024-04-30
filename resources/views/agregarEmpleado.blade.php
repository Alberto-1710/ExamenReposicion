<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Empleado</title>
</head>
<body>
    <div class="container">
        <h2>Crear Nuevo Empleado</h2>
        <br>
        <form action="{{ route('empleados.guardar') }} " method="POST">
        @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" />
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" />
            </div>
            <div class="form-group">
                <label for="fechaIngreso">Fecha Ingreso:</label>
                <input type="date" name="fechaIngreso" id="fechaIngreso" class="form-control" />
            </div>
            <div class="form-group">
                <label for="salario">Salario:</label>
                <input type="text" name="salario" id="salario" class="form-control" />
            </div>
            <div class="form-group">
                <a href="{{ route('empleados.home') }}" class="btn btn-warning" >Volver</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div> 
        </form>
        </br>
    </div>
</body>
</html>