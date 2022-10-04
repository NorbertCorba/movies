<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movies;
use App\Http\Controllers\MoviesController;

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

Route::get('/movies', [MoviesController::class, 'index']);

Route::get('/movies/{id}', [MoviesController::class, 'show']);

Route::get('/create', [MoviesController::class, 'create']);
Route::post('/create', [MoviesController::class, 'store']);


