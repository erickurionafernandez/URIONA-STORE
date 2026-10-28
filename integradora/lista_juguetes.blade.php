<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jugueteria El Trompo</title>
</head>
<body>
    <h1>Jugueteria El Trompo</h1>
    <p>Los mejores juguetes para los niños de Oruro.</p>

    <p>Hay {{ count($juguetes) }} juguetes en el estante.</p>

    <ul>
        @foreach($juguetes as $juguete)
            <li>{{ $juguete->nombre }} - Bs {{ $juguete->precio }}</li>
        @endforeach
    </ul>

    <p>Estante atendido por Erick Weimar Uriona Fernandez</p>
    
    <a href="/juguetes/nuevo">Registrar un nuevo juguete</a>
    
    <footer>
        Integradora - Erick Weimar Uriona Fernandez - 27 de octubre de 2026
    </footer>
</body>
</html>
