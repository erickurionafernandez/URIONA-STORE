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
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
    ]);


    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio')
    ]);

  
    return redirect('/juguetes');
});
