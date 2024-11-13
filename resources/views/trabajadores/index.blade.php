<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de trabajadores</h1>
    <br>
    <a href="/trabajador/create">Formulario para añadir trabajadores</a>
    <br>
    @foreach ($trabajadores as $trabajador)
    <br>
    {{ $trabajador->nombre }}, {{ $trabajador -> apellido }}
    <br>
        
    @endforeach
</body>
</html>