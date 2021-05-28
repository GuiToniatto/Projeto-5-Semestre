<?php

use App\Http\Controllers\Escopeta\EscopetaController;
use App\Http\Controllers\Faca\FacaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Luva\LuvaController;
use App\Http\Controllers\Pistola\PistolaController;
use App\Http\Controllers\Rifle\RifleController;
use App\Http\Controllers\Sub\SubController;
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

Route::get('/login', [LoginController::class, 'loginView'])->name('loginView');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/registrar', [LoginController::class, 'register'])->name('registrar');
Route::post('/guardar', [LoginController::class, 'guardar'])->name('guardar');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', function () {
        return view('index');
    })->name('home');

    Route::get('/carrinho', function() {
        return view('carrinho');
    })->name('carrinho');

    Route::get('/faleconosco', function () {
        return view('faleconosco');
    })->name('faleconosco');

    Route::get('/quemsomos', function () {
        return view('quemsomos');
    })->name('quemsomos');

    Route::get('/servicos', function () {
        return view('servicos');
    })->name('servicos');

    Route::get('/escopetas', [EscopetaController::class, 'index'])->name('escopeta');
    Route::get('/facas', [FacaController::class, 'index'])->name('facas');
    Route::get('/luvas', [LuvaController::class, 'index'])->name('luvas');
    Route::get('/pistola', [PistolaController::class, 'index'])->name('pistola');
    Route::get('/rifles', [RifleController::class, 'index'])->name('rifles');
    Route::get('/sub', [SubController::class, 'index'])->name('sub');
});
