<?php

use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\ContactsController;
use App\Http\Controllers\Pages\CorpController;
use App\Http\Controllers\Pages\FamilyController;
use App\Http\Controllers\Pages\FestivalController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\RetritsController;
use App\Http\Controllers\Pages\SportController;
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
Route::get('/corporate-events', CorpController::class);
Route::get('/festivals', FestivalController::class);
Route::get('/sport-events', SportController::class);
Route::get('/family-celebrations', FamilyController::class);
Route::get('/retreats', RetritsController::class);
Route::get('/contacts', ContactsController::class);
