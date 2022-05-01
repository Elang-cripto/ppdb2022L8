<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/logincek', [AuthController::class, 'logincek'])->name('logincek');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registeradd', [AuthController::class, 'registeradd'])->name('registeradd');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'akses:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/jumlah', [AdminController::class, 'jumlah'])->name('jumlah');
    Route::get('/admin/formulir', [AdminController::class, 'formulir'])->name('formulir');
    Route::post('/admin/insertformulir', [AdminController::class, 'insertformulir'])->name('insertformulir');
    Route::get('/admin/pendaftar', [AdminController::class, 'pendaftar'])->name('pendaftar');
    Route::get('/admin/valid', [AdminController::class, 'valid'])->name('valid');
    Route::get('/admin/invalid', [AdminController::class, 'invalid'])->name('invalid');
    Route::get('/admin/manage', [AdminController::class, 'manage'])->name('manage');
    Route::post('/admin/manageadd', [AdminController::class, 'manageadd'])->name('manageadd');
    Route::get('/admin/manageedit/{id}', [AdminController::class, 'manageedit'])->name('manageedit');
    Route::get('/admin/managedel/{id}', [AdminController::class, 'managedel'])->name('managedel');
    Route::post('/admin/manageupdate/{id}', [AdminController::class, 'manageupdate'])->name('manageupdate');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/admin/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('delete');
});

// route::group(['Middleware'=>['auth','satpam:admin']], function(){

// });