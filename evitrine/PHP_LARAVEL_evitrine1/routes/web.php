<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';*/

Auth::routes();
Route::get('/categorie', [App\Http\Controllers\categorieController::class, 'categorie'])->name('categorie');
Route::get('/createCat', [App\Http\Controllers\categorieController::class, 'createCat'])->name('createCat');
Route::post('/save', [App\Http\Controllers\categorieController::class, 'save'])->name('save');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\articleController::class, 'index'])->name('index');
Route::get('/create', [App\Http\Controllers\articleController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\articleController::class, 'store'])->name('store');
Route::get('/show', [App\Http\Controllers\articleController::class, 'show'])->name('show');
Route::get('/edit', [App\Http\Controllers\articleController::class, 'edit'])->name('edit');
Route::put('/update', [App\Http\Controllers\articleController::class, 'update'])->name('update');
Route::get('/delete', [App\Http\Controllers\articleController::class, 'delete'])->name('delete');



