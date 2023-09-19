<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\User\UserController;
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

//Auth
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/create-account', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('auth.user');
Route::post('/sign-up', [AuthController::class, 'createUser'])->name('sign-up.user');

//Store
Route::get('/store-list', [StoreController::class, 'index'])->name('store-list');
Route::get('/manage/store/{id}', [StoreController::class, 'show'])->name('store.show');
Route::get('/delete-store/{id}', [StoreController::class, 'delete'])->name('delete-store');
Route::post('/create-store', [StoreController::class, 'store'])->name('store.create');
Route::put('/update-store/{id}', [StoreController::class, 'update'])->name('store.update');

//User
Route::get('/profile/{id}', [UserController::class, 'show'])->name('user.profile');
Route::put('/update-profile/{id}', [UserController::class, 'update'])->name('user.update');
