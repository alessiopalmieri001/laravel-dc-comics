<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ComicController;

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

Route::resource('comics', ComicController::class);

/* //read
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');

//create
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::post('/comics/add', [ComicController::class, 'store'])->name('comics.store');

//update
Route::get('/comics/{id}/update', [ComicController::class, 'edit'])->name('comics.edit');
Route::put('/comics/{request}/{id}/update', [ComicController::class, 'update'])->name('comics.update');

//delete
Route::delete('/comics/{id}/delete', [ComicController::class, 'destroy'])->name('comics.destroy'); */
