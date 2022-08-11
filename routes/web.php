<?php

use Illuminate\Support\Facades\Route;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\BoletaPController;
use App\Http\Controllers\BoletaTController;
use App\Http\Controllers\BoletaQController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\MateriasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('auth/login');
});

Route::get('docen', function(){
    return view('admin/docentes');
});
Route::get('home', function(){
    return view('admin/home');
});
Route::get('alumn', function(){
    return view('admin/alumnos');
});
Route::get('mate', function(){
    return view('admin/materias');
});

Route::get('/boleta', [BoletaPController::class, 'Boleta1']);
Route::get('/bol', [BoletaTController::class, 'Boleta3']);
Route::get('/bole', [BoletaQController::class, 'Boleta5']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
