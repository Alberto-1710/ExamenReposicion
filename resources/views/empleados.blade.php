<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <div class="container">
    <h1>Empleados</h1>
    <br>
    <a href="{{ route('empleados.crear') }}" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID Prestamo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Ingreso</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->idPrestamo }}</td>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellido}}</td>
                <td>{{ $empleado->fechaIngreso }}</td>
                <td>{{ $empleado->salario }}</td>
            </tr>
            @endforeach
        </tbody>
</body>
</html>