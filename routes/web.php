<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalerryController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

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
Route::get('/', [GalerryController::class, 'index']);
Route::get('/category', [GalerryController::class, 'photos']);

//route auth
// Route::get('/login', [loginController::class ,'index'])->name('login');
// Route::post('/login', [loginController::class ,'authenticate']);
// Route::post('/logout', [loginController::class ,'logout']);
// Route::get('/register', [registerController::class ,'index']);
