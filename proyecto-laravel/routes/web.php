<?php

use Illuminate\Support\Facades\Route;

// Ruta para mostrar tu página de inicio (¡Esta es la que faltaba!)
Route::get('/', function () {
    return view('inicio');
});

// Esta es tu "procesar.php" adaptado a Laravel CON VALIDACIÓN
Route::post('/procesar', function (\Illuminate\Http\Request $request) {
    
    // 1. Tercera muralla: Validación en el servidor
    $request->validate([
        'nombre' => 'required',
        'correo' => 'required|email',
    ]);

    // 2. Si pasa la validación, tomamos los datos
    $nombre = $request->input('nombre');
    $correo = $request->input('correo');
    $mensaje = $request->input('mensaje');

    // 3. Mostramos los datos
    echo "<div style='font-family: Arial; max-width: 600px; margin: 40px auto; padding: 20px; border: 2px solid #222; border-radius: 10px;'>";
    echo "<h2>Mensaje recibido, caserito</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
    echo "</div>";
});