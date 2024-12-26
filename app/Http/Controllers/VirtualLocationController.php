<?php

namespace App\Http\Controllers;

use App\Http\Requests\VirtualLocationsRequest;
use App\Models\ActualLocation;
use App\Models\HajjOffice;
use App\Models\Office;
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

        public function createVirtualLocations()
        {  
            $actualLocations = ActualLocation::all();
            $hajjOffice = HajjOffice::get()->pluck('id');
            $Office = Office::all();
            foreach ($actualLocations as $actualLocation) {
                $VirtualLocations = rand(3,4);
                for ($i = 1; $i <= $VirtualLocations; $i++) {
                    $vLCapacity = ceil($actualLocation->capacity / $VirtualLocations);
                    //$hajjOfficeindex = rand(0,count($hajjOffice));
                    $hajjOfficeindex = rand(0, $hajjOffice->count() - 1);
                   $Officeindex = rand(0, $Office->count() - 1);
                   $selectedOffice= $Office[$Officeindex];
                  //dd($Office->id ,$Office->company_id );
                    VirtualLocation::create([
                        'actual_location_id' => $actualLocation->id,
                        'hajj_office_id'=> $hajjOffice[$hajjOfficeindex],
                        'office_id'=> $selectedOffice->id ,
                        'company_id' => $selectedOffice->company_id,
                        'name'=> 'enas',
                        'pilgrims'=> $vLCapacity,
                    ]);
                }
            }
        }
}
