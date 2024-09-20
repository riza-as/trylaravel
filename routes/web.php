<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'teks';
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/teks', function () {
    return 'ini teks';
});

// Route::get('/pplg', function () {
//     return view('pplg');
// });

Route::get('/pplg', [SiswaController::class, 'index']);

