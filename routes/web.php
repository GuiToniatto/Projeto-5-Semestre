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
    return view('index');
})->name('home');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/carrinho', function() {
    return view('carrinho');
})->name('carrinho');

Route::get('/escopetas', function() {
    return view('escopeta');
})->name('escopeta');

Route::get('/facas', function() {
    return view('facas');
})->name('facas');

Route::get('/luvas', function() {
    return view('luvas');
})->name('luvas');

Route::get('/pistola', function() {
    return view('pistola');
})->name('pistola');

Route::get('/rifles', function() {
    return view('rifles');
})->name('rifles');

Route::get('/sub', function() {
    return view('sub');
})->name('sub');
