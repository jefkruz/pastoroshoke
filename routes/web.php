<?php

use App\Http\Controllers\MainController;
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


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('tributes', [MainController::class, 'tributes'])->name('tributes');
Route::post('tributes', [MainController::class, 'submitTribute'])->name('submitTribute');
Route::get('read/tribute/{id}', [MainController::class, 'readTributes'])->name('readTributes');
Route::post('upload/images', [MainController::class, 'uploadImages'])->name('uploadImages');
Route::post('upload/videos', [MainController::class, 'uploadVideo'])->name('uploadVideos');

