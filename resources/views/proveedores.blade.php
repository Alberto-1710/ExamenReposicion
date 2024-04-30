<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
</head>
<body>
    <div class="container">
    <h1>Proveedores</h1>
    <br>
    <a href="{{ route('proveedores.crear') }}" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID Proveedor</th>
                <th>Nombre</th>
                <th>Fecha Registro</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->idProveedor}}</td>
                <td>{{ $proveedor->nombre}}</td>
                <td>{{ $proveedor->fechaRegistro}}</td>
                <td>{{ $proveedor->telefono}}</td>
                <td>{{ $proveedor->correo}}</td>
            </tr>
            @endforeach
        </tbody>
</body>
</html>