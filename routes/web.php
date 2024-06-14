<?php

// routes/web.php

use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quem-somos', function () {
    return view('quem_somos');
});

Route::get('/contato', [ContatoController::class, 'showForm'])->name('contato');
Route::post('/contato', [ContatoController::class, 'processForm'])->name('processar.contato');
