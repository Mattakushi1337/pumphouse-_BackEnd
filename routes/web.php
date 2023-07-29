<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;

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

Route::post('/residents', [ResidentController::class, 'createResident']);
Route::get('/residents', [ResidentController::class, 'getAllResidents']);
Route::delete('/residents/{id}', [ResidentController::class, 'deleteResident']);
Route::put('/residents/{id}', [ResidentController::class, 'updateResident']);