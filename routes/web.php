<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');
Route::resource('cursos', CursoController::class);
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('contactanos', [EmailController::class, 'index'])->name('email.show');


Route::post('contactanos', [EmailController::class, 'store'])->name('email.store');
