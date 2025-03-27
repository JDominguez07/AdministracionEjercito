
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Cuerpos de Ejército</title>
</head>
<body>
    <h1>Cuerpos de Ejército</h1>
    <ul>
        @foreach ($armyCorps as $corps)
            <li>{{ $corps->name }}</li>
        @endforeach
    </ul>
</body>
</html>
