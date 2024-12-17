<?php

namespace App\Http\Controllers;

use App\Models\Shape;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    public function index()
    {
        $shape = Shape::all();
        return response()->json($shape);
    }

    public function show($id)
    {
        //
    }
}
