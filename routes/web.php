<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalerryController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;

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
// auth 
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin\layouts\dashboard\index');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


Route::get('/photos', [GalerryController::class, 'index']);
Route::get('/category', [GalerryController::class, 'photos']);

Route::group(['middleware' => 'prevent-back-history'],function(){
    Route::get('/admin/daftar', [GalerryController::class, 'admin'])->middleware('auth');
    Route::get('/admin/foto', [GalerryController::class, 'foto'])->middleware('auth');
    Route::get('/admin/foto/create', [GalerryController::class, 'create'])->middleware('auth');
    Route::get('/admin/kategori', [AlbumController::class])->name('/admin/kategori')->middleware('auth');
});
// Route::get('/login', [loginController::class, 'index']);
// Route::get('/register', [loginController::class, 'register']);

//route auth
// Route::get('/login', [loginController::class ,'index'])->name('login');
// Route::post('/login', [loginController::class ,'authenticate']);
// Route::post('/logout', [loginController::class ,'logout']);
// Route::get('/register', [registerController::class ,'index']);
