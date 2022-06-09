<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstContro;

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

/***************************** */
/***************************** */

Route::get('/home', [FirstContro::class, 'GetVal'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/sign', function () {
    return view('sign');
})->name('sign');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Route::get('/candy', function () {
//     return view('candy', [FirstContro::class, 'GetVal']);
// });