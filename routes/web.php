<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::prefix('admin')->middleware(['IsAdmin'])->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    
    Route::resource('users',AdminController::class);
    Route::resource('lectures',AdminController::class);
    Route::resource('partners',AdminController::class);
    Route::resource('partners-features',AdminController::class);
    Route::resource('partners-links',AdminController::class);
    Route::resource('courses',AdminController::class);
    Route::resource('videos',AdminController::class);

});