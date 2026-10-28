<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jugueteria El Trompo</title>
</head>
<body>
    <h1>Jugueteria El Trompo</h1>
    
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/juguetes/nuevo" method="POST">
        @csrf
        <label for="nombre">Nombre del juguete:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="precio">Precio en Bs:</label>
        <input type="number" id="precio" name="precio">

        <button type="submit">Registrar juguete</button>
    </form>

    <footer>
        Integradora - Erick Weimar Uriona Fernandez - 27 de octubre de 2026
    </footer>
</body>
</html>
