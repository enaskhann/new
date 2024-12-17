<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paths = [
            [1,1,1,1,'path1'],
            [2,2,2,2,'path2'],
            [3,3,3,3,'path3'],
            [4,4,4,4,'path4'],
            [5,5,5,5,'path5'],
            [6,6,3,6,'path6'],
            [7,7,2,7,'path7'],
            [8,8,1,8,'path8'],
        ];

        foreach($paths as $data){
            DB::table('paths')->insert(
                ['id'=>$data[0],
                'primary_road_id'=>$data[1],
                'jamarat_level_id'=>$data[2],
                'return_road_id'=>$data[3],
                'name'=>$data[4],
                ]
            );
        }
    }
}
