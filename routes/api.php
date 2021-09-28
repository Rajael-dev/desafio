<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\LivroController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Filmes
Route::get('filmes', [FilmeController::class, 'index']);

Route::get('filme/{id}', [FilmeController::class, 'show']);

Route::post('filme', [FilmeController::class, 'store']);

Route::put('filme/{id}', [FilmeController::class, 'update']);

Route::delete('filme/{id}', [FilmeController::class,'destroy']);

//Livros
Route::get('livros', [LivroController::class, 'index']);

Route::get('livro/{id}', [LivroController::class, 'show']);

Route::post('livro', [LivroController::class, 'store']);

Route::put('livro/{id}', [LivroController::class, 'update']);

Route::delete('livro/{id}', [LivroController::class,'destroy']);
