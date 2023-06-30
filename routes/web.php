<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahConttroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sampah', [SampahConttroller::class, 'index']);
Route::get('/sampah/create', [SampahConttroller::class, 'create']);
Route::post('/sampah/store', [SampahConttroller::class, 'store']);

Route::get('/sampah/show/{id}', [SampahConttroller::class, 'show']);

Route::get('/sampah/edit/{id}', [SampahConttroller::class, 'edit']);
Route::patch('/sampah/update/{id}', [SampahConttroller::class, 'update']);


Route::delete('/sampah/delete/{id}', [SampahConttroller::class, 'destroy']);
Route::get('/sampah/trash/all', [SampahConttroller::class, 'trashed']);

Route::get('/sampah/restore/{id}', [SampahConttroller::class, 'restore']);
Route::get('/sampah/deletePermanent/{id}', [SampahConttroller::class, 'deletePermanent']);


