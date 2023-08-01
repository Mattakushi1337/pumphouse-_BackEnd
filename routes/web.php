<?php


use App\Http\Controllers\BillController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\PumpMeterRecordController;
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
Route::get('/residents/{id}', [ResidentController::class, 'oneResident']);
Route::post('/period', [PeriodController::class, 'createPeriod']);
Route::delete('/period/{id}', [PeriodController::class, 'deletePeriod']);
Route::get('/period', [PeriodController::class, 'getAllPeriods']);
Route::post('/period/{period_id}/volume', [PumpMeterRecordController::class, 'createVolume']);
Route::post('/period/{period_id}/bill', [BillController::class, 'bill']);
Route::post('/period/{period_id}/cost', [CostController::class, 'cost']);
Route::get('/period/{period_id}/cost', [CostController::class, 'showCost']);
Route::get('/bill', [BillController::class, 'allBills']);
Route::get('/period/{period_id}/volume', [PumpMeterRecordController::class, 'showVolume']);