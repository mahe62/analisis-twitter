<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index5']);
Route::get('/dataset', [MainController::class, 'index']);
// Route::get('/datauji', [MainController::class, 'index4']);
Route::get('/prediction', [MainController::class, 'index2']);
Route::get('/crawl', [MainController::class, 'index3']);
Route::get('/query', [MainController::class, 'index3']);

Route::post('/upload/proses', [MainController::class, 'upload']);
Route::post('/query', [MainController::class, 'crawl']);
