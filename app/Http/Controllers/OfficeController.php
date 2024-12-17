<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index()
    {
        $Office = Office::all();
        return response()->json($Office);
    }

    public function show($id)
    {
        //
    }
}
