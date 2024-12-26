<?php

namespace App\Http\Controllers;

use App\Http\Requests\BatchesRequest;
use App\Models\Batch;
use App\Models\Company;
use App\Models\VirtualLocation;
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
        $batch->pilgrims= $request['pilgrims'];
        $batch->save();
        return response()->json(['message' => 'virtual location created succesfully']);
        
    }

    public function create(){
        $vl = VirtualLocation::all();
        $lastBatch = VirtualLocation::where('virtual_location_id')->first();
            
            dd($lastBatch);
            
            
        }
    

    public function createbtches()
        {   
            $vl = VirtualLocation::all();
             foreach ($vl as $vl) {
             $virtualpilgrims = (int)($vl->pilgrims / 188); 
                 for ($i = 1; $i <= $virtualpilgrims; $i++) {
                    $officeIDcode = VirtualLocation::where('id', $vl->id)->first()?->office_id ?? null;
                    $companyIDcode = Company::where('id', $vl->company_id)->first()?->code ?? null;
                 Batch::create([
                         'virtual_location_id' => $vl->id,
                         'pilgrims'=> 188 ,
                         'code'=> $officeIDcode . ' ' .$companyIDcode,
                     ]);}
                 
            $remainPilgrims = $vl->pilgrims % 188;
            if($remainPilgrims > 0 && $remainPilgrims >12){
                Batch::create([
                            'virtual_location_id' => $vl->id,
                            'pilgrims' => $remainPilgrims,
                            'code' => 1,
                                 ]);
            }
            elseif ($remainPilgrims> 0 && $remainPilgrims<= 12){
            $lastBatch = Batch::where('virtual_location_id', $vl->id)->orderBy('id', 'desc')->first(); 
            $lastBatch->pilgrims = $remainPilgrims;
            $lastBatch->save();
           }
            }
         }

    public function show($id)
    {//
    }
}
