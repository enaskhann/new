<?php

namespace App\Http\Controllers;

use App\Models\ActualLocation;
use Illuminate\Http\Request;

class ActualLocationController extends Controller
{
    
    public function index()
    {
        $actual = ActualLocation::all();
        return response()->json($actual);
    } 

    

    public function show($id)
    {
        //
    }


}
