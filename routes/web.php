<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/admin', [AdminController::class, 'index'])->name('login');
Route::get('/admin/jumlah', [AdminController::class, 'jumlah'])->name('jumlah');
Route::get('/admin/formulir', [AdminController::class, 'formulir'])->name('formulir');
Route::post('/admin/insertformulir', [AdminController::class, 'insertformulir'])->name('insertformulir');
Route::get('/admin/pendaftar', [AdminController::class, 'pendaftar'])->name('pendaftar');
Route::get('/admin/valid', [AdminController::class, 'valid'])->name('valid');
Route::get('/admin/invalid', [AdminController::class, 'invalid'])->name('invalid');
Route::get('/admin/manage', [AdminController::class, 'manage'])->name('manage');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::post('/admin/update/{id}', [AdminController::class, 'update'])->name('update');
Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('delete');
