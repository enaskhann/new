<?php

namespace App\Http\Controllers;

use App\Http\Requests\JamaratSchedulesRequest;
use App\Models\JamaratSchedule;
use Illuminate\Http\Request;

class JamaratSchedulesController extends Controller
{
    
    public function store( JamaratSchedulesRequest $request , JamaratSchedule $jamaratSchedule){
        
        $jamaratSchedule->batch_id= $request['batch_id'];
        $jamaratSchedule->name= $request['name'];
        $jamaratSchedule->day= $request['day'];
        $jamaratSchedule->time= $request['time'];
        $jamaratSchedule->throwing= $request['throwing'];

        $jamaratSchedule->save();
        return response()->json(['message' => 'virtual location created succesfully']);
        
    }
}
