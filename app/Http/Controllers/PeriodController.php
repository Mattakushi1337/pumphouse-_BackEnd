<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function createPeriod(Request $request)
    {
        $period = new Period();
        $period->begin_date = $request->input('begin_date');
        $period->end_date = $request->input('end_date');
        $period->save();

        return response()->json(['message' => 'Срок успешно создан'], 201);
    }

    public function deletePeriod($id)
    {
        $period = Period::find($id);

        if (!$period) {
            return response()->json(['message' => 'Срок не найден'], 404);
        }

        $period->delete();

        return response()->json(['message' => 'Срок успешно удален'], 200);
    }

    public function getAllPeriods()
    {
        $period = Period::all();

        return response()->json($period, 200);
    }
}