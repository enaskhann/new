<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class actualLocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camp = [
        [1,1,1,'3/13',2000],
        [2,1,1,'3/113',2000],
        [3,2,1,'1/113',2000],
        [4,3,1,'2/112',2000],
        [5,4,1,'5/115',2000],
        [6,4,1,'6/116',2000],
        [7,5,1,'7/116',2000],
        [8,5,1,'8/118',2000],
        [9,5,1,'9/118',2000],
        [10,6,1,'3/118',2000],
        [11,7,1,'4/117',2000],
        [12,8,1,'1/111',2000],
        [13,9,1,'3/112',2000],
        [14,10,1,'3/113',2000],
        [15,10,1,'3/113',2000],
        [16,1,1,'5/116',2000],
        [17,2,1,'3/11',2000],
        [18,3,1,'2/14',2000],
        [19,4,1,'1/11',2000],
        [20,5,1,'2/12',2000],
        ];
     
        foreach($camp as $data){

            DB::table('actual_locations')->insert(
                [
            
            'id' => $data[0],
            'plot_id' => $data[1],
            'residential_area_id'=> $data[2],
            'label' => $data[3],
            'capacity' => $data[4],
                ]
                );

        }

    }
}
