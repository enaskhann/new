<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use Illuminate\Http\Request;

class NationalityController extends Controller
{
    public function index()
    {
        $area = Nationality::all();
        return response()->json($area);
    }

    public function show($id)
    {
        //
    }
}
