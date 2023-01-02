<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\ApiController;

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
Route::middleware('isGuest')->group(function(){
Route::get('/', [ApiController::class, 'index'])->name('register');
Route::post('/register', [PpdbController::class, 'inputRegister'])->name('register.post');
Route::get('/login', [PpdbController::class, 'login']);
Route::post('/login', [PpdbController::class, 'auth'])->name('login.auth');
});
Route::get('/logout', [PpdbController::class, 'logout']);
// Route::middleware('isLogin', 'CekRole:admin,user')->group(function(){
Route::get('/dashboard', [PpdbController::class, 'dashboard']);
Route::get('/payment', [PpdbController::class, 'payment']);
// });
Route::get('/admin', [PpdbController::class, 'admin']);
Route::get('/yield', [PpdbController::class, 'yield']);