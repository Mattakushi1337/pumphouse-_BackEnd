<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PumpMeterRecord;
use Illuminate\Http\Request;

class PumpMeterRecordController extends Controller
{
    public function createVolume(Request $request, $period_id)
    {
        $volume = new PumpMeterRecord();
        $volume->period_id = $period_id;
        $volume->amount_volume = $request->input('amount_volume');
        $volume->save();

        return response()->json(['message' => 'Показания счётчика успешно добавлены'], 201);
    }
}