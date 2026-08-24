<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

// Redirigir cualquier ruta inexistente al home (/)
Route::fallback(function () {
    return redirect('/');
});
