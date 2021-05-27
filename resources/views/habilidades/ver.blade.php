<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ver la Habilidad</h1>
    <form action="{{ route('habilidades.update', $habilidad->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <div>
        <label for="nombre">Persona *</label>
        <input type="text" name="persona_id" value="{{ $habilidad->persona_id }}" required>

    </div>
    <div>
        <label for="nombre">Nombre *</label>
        <input type="text" name="nombre" value="{{ $habilidad->nombre }}" required>
    </div>
    <div>
        <label for="nombre">Porcentaje *</label>
        <input type="number" name="porcentaje" value="{{ $habilidad->porcentaje }}" required>
    </div>
    <div>
    <label for="nombre">Orden *</label>
        <input type="text" name="orden" value="{{ $habilidad->orden }}" required>
    </div>
    </form>
</body>
</html>