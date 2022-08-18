<?php

use Illuminate\Support\Facades\Route;

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

// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/driver', [App\Http\Controllers\DriverController::class, 'index'])->name('driver');

Route::get('/commuter', [App\Http\Controllers\CommuterController::class, 'index'])->name('commuter');

Route::get('/van', [App\Http\Controllers\VanController::class, 'index'])->name('van');

Route::get('/transaction', [App\Http\Controllers\TransactionController::class, 'index'])->name('transaction');

Route::get('/route', [App\Http\Controllers\RouteController::class, 'index'])->name('route');

// Route::get('/setting')->name('setting');

//logout
Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('');
 });