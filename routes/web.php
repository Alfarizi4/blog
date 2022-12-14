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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('content',[
    'konten'=>[]
    ]);
});

// Routing CRUD konten 
Route::get('/crud/index',[KontenController::class, 'index'])->name('crud.index');
Route::get('/crud/create',[KontenController::class, 'create'])->name('crud.create');
Route::get('/crud/store',[KontenController::class, 'store'])->name('crud.create');
Route::get('/crud/edit/{konten}',[KontenController::class, 'edit'])->name('crud.edit');
Route::get('/crud/update/{konten}',[KontenController::class, 'update'])->name('crud.update');
Route::get('/crud/delete/{konten}',[KontenController::class, 'delete'])->name('crud.delete');