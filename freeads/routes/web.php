<?php

use App\Http\Controllers\AdAddController;
use App\Http\Controllers\AdAllController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
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

// Route::get('/', [IndexController::class, 'showIndex'])->name('home');
Route::get('/', [SignInController::class, 'indexShow'])->name('sign-in');
Route::post('sign-in/user', [SignInController::class, 'signin'])->name('sign-in.user');
Route::get('user/edit', [SignInController::class, 'editProfile'])->name('user.edit');
Route::post('user/update', [SignInController::class, 'updateProfile'])->name('user.update');
Route::get('user/dash', [SignInController::class, 'dash'])->name('user.dash');
Route::get('logout', [SignInController::class, 'logout'])->name('logout');
Route::get('user/destroy', [SignInController::class, 'destroy'])->name('user.destroy');

Route::get('sign-up', [SignUpController::class, 'create'])->name('sign-up');
Route::post('sign-up-store', [SignUpController::class, 'store'])->name('sign-up.store');

Route::get('ad/add/create', [AdAddController::class, 'create'])->name('ad.add.create');
Route::post('ad/add/store', [AdAddController::class, 'store'])->name('ad.add.store');

Route::get('ad/all/index', [AdAllController::class, 'index'])->name('ad.all.index');
Route::get('ad/all/edit', [AdAllController::class, 'edit'])->name('ad.all.edit');
Route::post('ad/all/update', [AdAllController::class, 'update'])->name('ad.all.update');
Route::get('ad/all/destroy', [AdAllController::class, 'destroy'])->name('ad.all.destroy');

Route::post('ad/photo/upload', [AdAllController::class, 'upload'])->name('ad.photo.upload');

Route::get('search/index', [SearchController::class, 'index'])->name('search.index');
