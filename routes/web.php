<?php

use App\Http\Controllers\JogosController;
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
//PADRAO
// Route::get('/', function () {
//     return view('welcome');
// });

//Route::view('/leticia', 'jogos');

// Route::get('/motivo', function(){
//     return 'ciumes';
// });

// Route::view('motivo', 'jogos', ['name'=> 'GTA']);

// Route::get('/jogos/{id?}/{name?}', function($id=null, $name=null){
//     return view('jogos', ['idJogo'=>$id, 'nomeJogo'=>$name]);
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

// Route::get('/iphone', [JogosController::class, 'index']);
// Route::get('/samsung', [JogosController::class, 'index']);

// Route::get('/lingua', function () {
//     return view('welcome');
// })->name('home-index');

Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');


});

//TRATAR ERRO
Route::fallback(function(){
    return 'erro';
});