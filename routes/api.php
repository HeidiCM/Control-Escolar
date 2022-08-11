<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\MateriasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('apiDocente', [DocenteController::class]);
Route::get('/apiDocente',[App\Http\Controllers\DocenteController::class, 'index']);
Route::post('/apiDocente',[App\Http\Controllers\DocenteController::class, 'store']);
Route::put('/apiDocente/{id_docente}',[App\Http\Controllers\DocenteController::class, 'update']); 
Route::delete('/apiDocente/{id_docente}',[App\Http\Controllers\DocenteController::class, 'destroy']); 

Route::apiResource('apiAlumno', [AlumnosController::class]);
Route::get('/apiAlumno',[App\Http\Controllers\AlumnosController::class, 'index']);
Route::post('/apiAlumno',[App\Http\Controllers\AlumnosController::class, 'store']);
Route::put('/apiAlumno/{id}',[App\Http\Controllers\AlumnosController::class, 'update']); 
Route::delete('/apiAlumno/{id}',[App\Http\Controllers\AlumnosController::class, 'destroy']); 

Route::apiResource('apiMateria', [MateriasController::class]);
Route::get('/apiMateria',[App\Http\Controllers\MateriasController::class, 'index']);
Route::post('/apiMateria',[App\Http\Controllers\MateriasController::class, 'store']);
Route::put('/apiMateria/{id_materia}',[App\Http\Controllers\MateriasController::class, 'update']); 
Route::delete('/apiMateria/{id_materia}',[App\Http\Controllers\MateriasController::class, 'destroy']); 

