<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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

// Autentikasi

Route::get('/', [BookController::class, 'index'])->name('home');

Route::get('/login', function ()  {
    return view('login');
});
Route::get('/register', function ()  {
    return view('register');
});
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::post('/loginprocess', [LoginController::class, 'authenticate']);
Route::post('/registerprocess', [RegisterController::class, 'register']);

// Otorisasi
Route::resource('book', BookController::class)->parameters([
    "book" => "book_id",
]);
