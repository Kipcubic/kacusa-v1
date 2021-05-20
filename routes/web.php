<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadershipController;
use App\Http\Controllers\ProfileController;

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
    return redirect('/login');
});

Route::get('/home',[HomeController::class,'index'])->name('home')->middleware(['verified','detailsfilled']);

Route::resource('user', UserController::class)->middleware(['verified']);
Route::resource('leadership', LeadershipController::class)->middleware('verified');

Route::get('/user/membership/details',[ProfileController::class,'index'])->name('details');
Route::post('/user/membership/details/update',[ProfileController::class,'update'])->name('details.save');

Route::get('/dashboard', DashboardController::class)->name('dashboard')->middleware(['verified','ensureisaleader']);

