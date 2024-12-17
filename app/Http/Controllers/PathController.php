<?php

namespace App\Http\Controllers;
use App\Models\Path;

use Dotenv\Store\File\Paths;
use Illuminate\Http\Request;

class PathController extends Controller
{
    
    public function index()
    {
        $path = Path::all();
        return response()->json($path);
    }

    public function show($id)
    {
        //
    }

}
