<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empresa</title>
</head>
<body>

    <h1>Registrar Empresa</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" required>
        
        <label for="email">Correo:</label>
        <input type="email" name="email" required>
        
        <button type="submit">Registrar</button>
    </form>

</body>
</html>
