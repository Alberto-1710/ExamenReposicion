<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <div class="container">
    <h1>Productos</h1>
    <br>
    <a href="{{ route('productos.crear') }}" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID Producto</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>PagaISV</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio}}</td>
                <td>{{ $producto->stock }}</td>
                <td>{{ $producto->pagaIsv }}</td>
            </tr>
            @endforeach
        </tbody>
</body>
</html>