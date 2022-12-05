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
use App\Http\Controllers\SettingController;

use App\Http\Controllers\DriverHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SidebarController;

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
    return view('auth/login');
});

Route::get('/welcome', function () {
    return view('welcome');
});


// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('is_admin');

Route::get('/driver/{dvr_id?}', [DriverController::class, 'index'])->name('driver');
Route::get('/create/driver', [DriverController::class, 'create'])->name('driver.create');
Route::post('/store/driver', [DriverController::class, 'store'])->name('driver.store');
Route::get('/update/driver', [DriverController::class, 'update'])->name('driver.update');
Route::get('/delete/driver', [DriverController::class, 'destroy'])->name('driver.destroy');

// Route::resource('driver', DriverController::class);

// Route::delete('', [DriverController::class, 'destroy'])->name('driver.delete');

Route::get('/commuter/{comm_id?}', [CommuterController::class, 'index'])->name('commuter');
Route::get('/update/commuter', [CommuterController::class, 'update'])->name('commuter.edit');

// Route::get('/commuter/{comm_id?}', [CommuterController::class, 'show'])->name('commuter.show');

Route::get('/van/{van_id?}', [VanController::class, 'index'])->name('van');
Route::post('/store/van', [VanController::class, 'store'])->name('van.store');
Route::get('/update/van', [VanController::class, 'update'])->name('van.update');
Route::get('/delete/van', [VanController::class, 'destroy'])->name('van.destroy');

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');

Route::get('/route', [RouteController::class, 'index'])->name('route');
Route::post('/store/route', [RouteController::class, 'store'])->name('route.store');
Route::get('/update/route', [RouteController::class, 'update'])->name('route.update');
Route::get('/delete/route', [RouteController::class, 'destroy'])->name('route.destroy');

Route::get('/settings', [SettingController::class, 'index'])->name('settings');

// Route::get('/setting')->name('setting');

Route::get('/home/driver', [DriverHomeController::class, 'index'])->name('driverhome');

//logout
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('');
});
