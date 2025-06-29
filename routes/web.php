<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

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

Route::get('/', [ApplicationController::class, 'index'])->name('home');
Route::get('/about', [ApplicationController::class, 'about'])->name('about');
Route::get('/contact', [ApplicationController::class, 'contact'])->name('contact');
Route::post('/contact', [ApplicationController::class, 'contactAction'])->name('contactAction');


