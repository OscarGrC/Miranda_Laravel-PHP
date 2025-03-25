<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Usuario</title>
</head>
<body>

    <h1>Detalles del Usuario</h1>

    <p><strong>Nombre:</strong> {{ $user->name }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $user->email }}</p>
    <p><strong>Fecha de Creación:</strong> {{ \Carbon\Carbon::parse($user->created_at)->format('d-m-Y H:i') }}</p>
    <p><strong>Última Actualización:</strong> {{ \Carbon\Carbon::parse($user->updated_at)->format('d-m-Y H:i') }}</p>

    <br>

    <a href="{{ route('users.index') }}">
        <button style="padding: 5px 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Volver al listado de usuarios
        </button>
    </a>

</body>
</html>
