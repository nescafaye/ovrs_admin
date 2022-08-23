<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CommuterController;
use App\Http\Controllers\VanController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\RouteController;

use App\Http\Controllers\DriverHomeController;

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

// Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('admin.home')->middleware('is_admin');

// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('is_admin');

Route::get('/driver', [DriverController::class, 'index'])->name('driver');

Route::get('/commuter', [CommuterController::class, 'index'])->name('commuter');

Route::get('/commuter/{comm_id?}', [CommuterController::class, 'show'])->name('commuter.show');

// Route::resource('commuter', CommuterController::class);

Route::get('/van', [VanController::class, 'index'])->name('van');

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');

Route::get('/route', [RouteController::class, 'index'])->name('route');

// Route::get('/setting')->name('setting');

Route::get('/home/driver', [DriverHomeController::class, 'index'])->name('driverhome');

//logout
Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [LoginController::class, 'logout'])->name('');
 });

 