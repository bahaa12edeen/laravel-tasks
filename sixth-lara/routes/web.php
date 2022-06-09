<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Route::get('/', [MovieController::class, 'show']);

Route::get('/update/id/{id}', [MovieController::class, 'viewUpdate']);

Route::get('/delete/id/{id}', [MovieController::class, 'delete']);


Route::get('/admin', [MovieController::class, 'showin']);

Route::get('/admin/{id}', [MovieController::class, 'update']);

Route::view('/add', 'add');

Route::get('/added', [MovieController::class, 'added']);
