<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\SuggestionsController;

//to allow use email code; Added to its controller
//use App\Mail\SendSuggest;
//use Illuminate\Suppost\Facades\Mail;
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

Route::get('/', InicioController::class);
Route::get('/cars', CarsController::class);
Route::get('/about', AboutController::class);
Route::get('/sugerencias', SuggestionsController::class);
//mail
Route::get('/mail', MailController::class);
