<?php

namespace App\Http\Controllers;

use App\Http\Requests\VirtualLocationsRequest;
use App\Models\VirtualLocation;
use Illuminate\Http\Request;

class VirtualLocationController extends Controller
{
    public function index()
    {
        $VirtualLocation = VirtualLocation::all();
        return response()->json($VirtualLocation);
    }

    public function store( VirtualLocationsRequest $request , VirtualLocation $vlocation){

        
        $vlocation->actual_location_id= $request['actual_location_id'];
        $vlocation->hajj_office_id= $request['hajj_office_id'];
        $vlocation->company_id= $request['company_id'];
        $vlocation->office_id= $request['office_id'];
        $vlocation->name= $request['name'];
        $vlocation->pilgrims= $request['pilgrims'];

        
        $vlocation->save();
        return response()->json(['message' => 'virtual location created succesfully']);
        
    }

    public function show($id)
    {
        
    }
}
