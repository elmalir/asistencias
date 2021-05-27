<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LIstado de Habilidades</h1>
    <a href="{{ Route('habilidades.create') }}">Nuevo</a>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Porcetaje</td>
            <td>Orden</td>
            <td>Acciones</td>
        </tr>
        @foreach ($habilidades as $h)
        <tr>
            <td>{{ $h->nombre }}</td>
            <td>{{ $h->porcentaje }}</td>
            <td>{{ $h->orden }}</td>
            <td>
            <a href="{{route('habilidades.edit', $h->id)}}">Editar</a>
            <form action="{{ route('habilidades.destroy', $h->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>