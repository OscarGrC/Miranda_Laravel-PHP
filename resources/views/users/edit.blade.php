<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>

    <h1>Editar Usuario</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required><br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder="Dejar vacío si no deseas cambiarla"><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('users.index') }}">Volver al listado</a>

</body>
</html>
