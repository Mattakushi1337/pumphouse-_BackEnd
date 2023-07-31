<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    public function cost(Request $request, $period_id)
    {
        $cost = new Cost;
        $cost->period_id = $period_id;
        $cost->water_cost = $request->input('water_cost');
        $cost->save();

        return response()->json(['message' => 'Цена воды за срок установлена'], 201);
    }

    public function showCost($period_id)
    {
        $costs = Cost::where('period_id', $period_id)->get();

        return $costs;
    }
}