<?php


use App\Http\Controllers\PeriodController;
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
Route::post('/period', [PeriodController::class, 'createPeriod']);
Route::delete('/period/{id}', [PeriodController::class, 'deletePeriod']);
Route::get('/period', [PeriodController::class, 'getAllPeriods']);