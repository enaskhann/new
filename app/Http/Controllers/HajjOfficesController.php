<?php

namespace App\Http\Controllers;

use App\Models\HajjOffice;
use Illuminate\Http\Request;

class HajjOfficesController extends Controller
{
    public function index()
    {
        $hajjOffice = HajjOffice::all();
        return response()->json($hajjOffice);
    }

    public function show($id)
    {
        //
    }
}
