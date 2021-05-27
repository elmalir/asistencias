<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear nuevo</h1>
    <form action="{{ route('habilidades.store') }}" method="post">
    @csrf
    <div>
        <label for="nombre">Persona *</label>
        <input type="text" name="persona_id" required>

    </div>
    <div>
        <label for="nombre">Nombre *</label>
        <input type="text" name="nombre" required>
    </div>
    <div>
        <label for="nombre">Porcentaje *</label>
        <input type="number" name="porcentaje" required>
    </div>
    <div>
    <label for="nombre">Orden *</label>
        <input type="text" name="orden" required>
    </div>
    <div>
        <button type="submit">Guardar</button>
    </div>
    </form>
</body>
</html>