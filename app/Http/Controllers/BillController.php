<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Cost;
use App\Models\Period;
use App\Models\PumpMeterRecord;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BillController extends Controller
{
    public function bill(Request $request, $period_id)
    {
        $period = Period::findOrFail($period_id);

        $residents = Resident::all();

        $totalArea = $residents->sum('area');

        $totalVolume = PumpMeterRecord::where('period_id', $period_id)->sum('amount_volume');

        
        $totalCost = Cost::where('period_id', $period_id)->sum('water_cost') * $totalVolume;
        
        foreach ($residents as $resident) {
            $areaFraction = $resident->area / $totalArea;
            $waterCost = $totalCost * $areaFraction;

            
            Bill::updateOrCreate([
                'resident_id' => $resident->id,
                'period_id' => $period->id,
            ], [
                'amount_rub' => $waterCost,
            ]);
        }

        return response()->json(['message' => 'Счета успешно выставлены'], 200);
    }
}