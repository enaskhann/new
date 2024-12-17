<?php

namespace App\Http\Controllers;
use App\Models\Plot;

use Illuminate\Http\Request;

class PlotController extends Controller
{
    public function index()
    {
        $plot = Plot::all();
        return response()->json($plot);
    }

    public function show($id)
    {
        //
    }
}
