<?php

use App\Http\Controllers\ListUserController;
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

Route::get('listusers', [ListUserController::class, 'index'])->name('listusers.index');
Route::get('registerusers', [ListUserController::class, 'registerusers'])->name('registerusers.index');
Route::get('registerusers', [ListUserController::class, 'registerusers'])->name('registerusers.index');
Route::get('userswin', [ListUserController::class, 'userswin'])->name('userswin.index');
Route::get('userstime', [ListUserController::class, 'userstime'])->name('userstime.index');


