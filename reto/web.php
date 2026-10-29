<?php

use Illuminate\Support\Facades\Route;
use App\Models\Juguete;


Route::get('/', function () {
    return view('inicio');
});


Route::post('/procesar', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'nombre' => 'required',
        'correo' => 'required|email',
    ]);

    $nombre = $request->input('nombre');
    $correo = $request->input('correo');
    $mensaje = $request->input('mensaje');

    echo "<div style='font-family: Arial; max-width: 600px; margin: 40px auto; padding: 20px; border: 2px solid #222; border-radius: 10px;'>";
    echo "<h2>Mensaje recibido, caserito</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
    echo "</div>";
});

Route::get('/juguetes', function () {
    $juguetes = Juguete::all();
    return view('lista_juguetes', compact('juguetes'));
});

Route::get('/juguetes/nuevo', function () {
    return view('form_juguete');
});

Route::post('/juguetes/nuevo', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
        'stock' => 'required|integer',
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
        'stock.required' => 'Falta decir cuántos juguetes hay en stock.',
        'stock.integer' => 'El stock debe ser un número entero.',
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock')
    ]);

    return redirect('/juguetes');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (\Illuminate\Support\Facades\Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard'); 
    }

    return back()->withErrors([
        'email' => 'Las credenciales no coinciden con nuestros registros.',
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/logout', function (\Illuminate\Http\Request $request) {
    \Illuminate\Support\Facades\Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->middleware('auth')->name('logout');


require __DIR__.'/auth.php';