<?php

namespace App\Http\Controllers;

use App\Models\ResidentialArea;
use Illuminate\Http\Request;

class ResidentialAreaController extends Controller
{
    public function index()
    {
        $area = ResidentialArea::all();
        return response()->json($area);
    }

    public function show($id)
    {
        //
    }
}
