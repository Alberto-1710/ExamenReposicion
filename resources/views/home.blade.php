<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Seleccione una opcion:</h1>
        <br>
        <a href="{{route('productos.home')}}" >
        <button type="submit" class="submit" class="btn btn-success">Productos</button></a>
        <a href="{{route('empleados.home')}}" >
        <button type="submit" class="btn btn-success">Empleados</button></a>
        <a href="{{route('proveedores.home')}}" >
        <button type="submit" class="btn btn-success">Proveedores</button></a>
    </div>
</body>
</html>