<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$nombre}}</title>
</head>
<body>
    <p>{{$nombre}}</p>
    <h1>VISTA</h1>

    <a href="{{ route('ruta.users.create') }}">Crear un usuario</a>
    <br>
    <a href="{{ route('ruta.users.show') }}">Ver un usuario</a>
    <br>
    <a href="{{ route('ruta.users.edit') }}">Editar un usuario</a>
    <br>
    <a href="{{ route('ruta.users.detele') }}">Eliminar un usuario</a>
    
</body>
</html>