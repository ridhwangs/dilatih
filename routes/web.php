<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\InstructureController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/training-certification', [TrainingController::class, 'index'])->name('training');
Route::get('/instructure', [InstructureController::class, 'index'])->name('instructure');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
