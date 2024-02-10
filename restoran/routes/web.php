<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create_table', [App\Http\Controllers\AdminController::class, 'create_table']);
Route::post('/createTable', [App\Http\Controllers\AdminController::class, 'createTable']);
Route::get('/view_table', [App\Http\Controllers\AdminController::class, 'viewTable']);
Route::get('/view_makanan', [App\Http\Controllers\AdminController::class, 'viewMakanan']);
Route::get('/makanan', [App\Http\Controllers\AdminController::class, 'view_makanan']);
Route::post("/pesan", [App\Http\Controllers\HomeController::class, 'pesan']);
Route::post('/createMakanan', [App\Http\Controllers\AdminController::class, 'createMakanan']);
Route::get('/edit_table/{id}', [App\Http\Controllers\AdminController::class, 'editTable']);
Route::post('/editTable/{id}', [App\Http\Controllers\AdminController::class, 'edit_table']);

Route::get('/hapus_table/{id}', [App\Http\Controllers\AdminController::class, 'hapus_table']);

Route::post('/editMakanan/{id}', [App\Http\Controllers\AdminController::class, 'editMakanan']);
Route::get('/edit_makanan/{id}', [App\Http\Controllers\AdminController::class, 'edit_makanan']);
Route::get('/hapus_makanan/{id}', [App\Http\Controllers\AdminController::class, 'hapusMakanan']);
Route::get('/view_order', [App\Http\Controllers\AdminController::class, 'view_order']);
