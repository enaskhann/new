<?php

namespace App\Http\Controllers;

use App\Models\JamaratLevel;
use Illuminate\Http\Request;

class JamaratLevelController extends Controller
{
    public function index()
    {
        $level = JamaratLevel::all();
        return response()->json($level);
    }


    public function show($id)
    {
        //
    }
}
