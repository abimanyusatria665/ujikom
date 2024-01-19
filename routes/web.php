<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/log-in', [userController::class, 'login'])->name('getLogin');
Route::get('/register', [StudentController::class, 'create']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::post('/student', [StudentController::class, 'store'])->name('registerPost');
Route::post('/login/post', [userController::class, 'auth'])->name('inputLogin');
Route::get('/logout', [userController::class, 'logout']);
Route::get('/student/{gender}', [StudentController::class, 'getDataByGender']);