<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar tarea</h1>

    <form action="/tareas/edit/{{ $id }}" method="POST">
    @csrf
    @method('PUT')

        <textarea name="descripcion" placeholder="Descripcion Tarea">{{ $tarea->descripcion }}</textarea>
        <input type="date" name="fecha_limite" value="{{ $tarea->fecha_limite }}">
        <select name="trabajador_id">
            @foreach ($trabajadores as $trabajador)
                <option value="{{ $trabajador->id }}" @if($trabajador->id == $tarea->trabajador_id) selected @endif>
                    {{ $trabajador->nombre }}, {{ $trabajador->apellido }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Actualizar Tarea">
    </form>
</body>

</html>