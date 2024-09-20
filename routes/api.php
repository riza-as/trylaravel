<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//index list siswa
Route::get('/student', [StudentController::class, 'index']);

//show /show siswa
Route::get('/student/{nis}', [StudentController::class, 'show']);

//Create Siswa
Route::post('/student', [StudentController::class, 'create']);

//edit siswa
Route::put('/student/{id}', [StudentController::class, 'update']);

//hapus siswa
Route::delete('/student/{id}', [StudentController::class, 'destroy']);