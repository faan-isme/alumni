<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HalamanController::class, 'home']);
Route::get('/loker', [HalamanController::class, 'loker']);
Route::get('/berita', [HalamanController::class, 'berita']);
Route::get('/login', [SessionController::class, 'login']);
Route::post('/login/auth', [SessionController::class, 'auth']);