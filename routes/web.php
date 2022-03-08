<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\InstructureController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
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



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);

Route::get('/training-certification', [TrainingController::class, 'index'])->name('training');
Route::get('/training/{slug}', [TrainingController::class, 'show'])->name('training.detail');
Route::get('/training-create', [TrainingController::class, 'create'])->name('training.create')->middleware('auth');
Route::post('/training-store', [TrainingController::class, 'store'])->name('training.store')->middleware('auth');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us-store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/instructure', [InstructureController::class, 'index'])->name('instructure');
Route::get('/instructure-create', [InstructureController::class, 'create'])->name('instructure.create')->middleware('auth');
Route::post('/instructure-store', [InstructureController::class, 'store'])->name('instructure.store')->middleware('auth');
Route::get('/instructure/{id}', [InstructureController::class, 'show'])->name('instructure.detail');