<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontEndController;

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


Route::get('/', [FrontEndController::class, 'Accueil'])->name('accueil');
Route::get('/accueil', [FrontEndController::class, 'Accueil'])->name('accueil');
Route::get('/contact', [FrontEndController::class, 'Contact'])->name('contact');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
