<?php

namespace App\Http\Controllers;

use App\Models\PrimaryRoad;
use Illuminate\Http\Request;

class PrimaryRoadController extends Controller
{
    public function index()
    {
        $road = PrimaryRoad::all();
        return response()->json($road);
    }

    public function show($id)
    {
        //
    }
}
