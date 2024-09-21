<?php

use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\HomeController;
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

Route::get('/', HomeController::class);
Route::get('/corporate-events', AboutController::class);
Route::get('/festivals', AboutController::class);
Route::get('/sport-events', AboutController::class);
Route::get('/family-celebrations', AboutController::class);
Route::get('/retreats', AboutController::class);
Route::get('/contacts', AboutController::class);
