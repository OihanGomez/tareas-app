<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de tareas</h1>
    <br>
    <a href="/tareas/create">Formulario para añadir tarea</a>
    <br>
    @foreach ($tareas as $tarea)
    <br>
    <li> <a href="/tareas/update/{{  $tarea -> id }}"> {{ $tarea->descripcion }}, {{ $tarea -> fecha_limite }}  </a>
    <form action="/tareas/destroy/{{ $tarea -> id }}" method="POST">
    @method('DELETE')

    <button type="submit">Eliminar</button>
    </form>
    </li>
    <br>
    º   
        
    @endforeach
</body>
</html>