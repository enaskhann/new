<?php

namespace App\Http\Controllers;

use App\Http\Requests\BatchesRequest;
use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        $batch = Batch::all();
        return response()->json($batch);
    }

    public function store( BatchesRequest $request , Batch $batch){
        
        $batch->virtual_location_id= $request['virtual_location_id'];
        $batch->code= $request['code'];
        $batch->name= $request['name'];
        $batch->pilgrims= $request['pilgrims'];
        $batch->save();
        return response()->json(['message' => 'virtual location created succesfully']);
        
    }

    public function show($id)
    {
        //
    }
}
