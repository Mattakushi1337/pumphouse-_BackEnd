<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Resident;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResidentController extends Controller
{

    public function createResident(Request $request)
    {


        $resident = new Resident();
        $resident->fio = $request->input('fio');
        $resident->area = $request->input('area');
        $resident->start_date = $request->input('start_date');
        $resident->save();


        return response()->json(['message' => 'Дачник успешно создан'], 201);
    }


    public function getAllResidents()
    {
        $residents = Resident::all();

        return response()->json($residents, 200);
    }
    public function deleteResident($id)
    {
        $resident = Resident::find($id);

        if (!$resident) {
            return response()->json(['message' => 'Дачник не найден'], 404);
        }

        $resident->delete();

        return response()->json(['message' => 'Дачник успешно удален'], 200);
    }

    public function updateResident(Request $request, $id)
{

    $resident = Resident::find($id);

    if (!$resident) {
        return response()->json(['message' => 'Дачник не найден'], 404);
    }

    $resident->fio = $request->input('fio');
    $resident->area = $request->input('area');
    $resident->start_date = $request->input('start_date');
    $resident->save();

    return response()->json(['message' => 'Дачник успешно обновлен'], 200);
}
}