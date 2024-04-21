<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalerryController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VisitorAlbumController;
use App\Http\Controllers\CommentController;

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
Route::get('/foto/{id}/detail', [GalerryController::class, 'detail']);
Route::post('/foto/{id}',  [GalerryController::class, 'storeComment']);
Route::post('/foto/{FotoID}',[CommentController::class,'store']);
Route::get('/category', [VisitorAlbumController::class, 'album']);
Route::get('/album/{id}/detail', [VisitorAlbumController::class, 'detail']);

// Route::get('/album/{id}/photos', [VisitorAlbumController::class,'showPhotos'])->name('album.photos');


// routes/web.php
Route::post('/photos/{photo}/like', [PhotoController::class, 'likePhoto'])->name('photos.like');



Route::group(['middleware' => 'prevent-back-history'],function(){
    Route::get('/admin/komen', [CommentController::class, 'index'])->name('admin.comments.index')->middleware('auth');
    Route::get('/admin/daftar', [GalerryController::class, 'admin'])->middleware('auth');
    Route::get('/profile', [GalerryController::class, 'profile'])->middleware('auth');
    Route::resource('/admin/foto', PhotoController::class)->middleware('auth');
    // Route::get('/admin/foto', [GalerryController::class, 'foto'])->middleware('auth');
    // Route::get('/admin/foto/create', [GalerryController::class, 'create'])->middleware('auth');
    Route::resource('/admin/album', AlbumController::class)->middleware('auth');
});
// Route::get('/login', [loginController::class, 'index']);
// Route::get('/register', [loginController::class, 'register']);

//route auth
// Route::get('/login', [loginController::class ,'index'])->name('login');
// Route::post('/login', [loginController::class ,'authenticate']);
// Route::post('/logout', [loginController::class ,'logout']);
// Route::get('/register', [registerController::class ,'index']);
