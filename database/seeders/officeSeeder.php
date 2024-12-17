<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class officeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $office = [ [1, '2', 'Russia', 'RU', 10],
                   [2, '3', 'Mauritania', 'MR', 9],
                   [3, '4', 'Malaysia', 'MY', 22],
                   [4, '5', 'Egypt', 'EG', 8],
                   [5, '6', 'Qatar', 'QA', 17],
                   [6, '7', 'Pakistan', 'PK', 5],
                   [7, '8', 'Sudan', 'SD', 23],
                   [8, '9', 'Turkey', 'TR', 13],
                   [9, '10', 'Sierra-Leone', 'SL', 7],
                   [10, '11', 'Palestine', 'PS', 18],
                   [11, '12', 'Turkmenistan', 'TM', 12],
                   [12, '13', 'Somalia', 'SO', 15],
                   [13, '14', 'Niger', 'NE', 21],
                   [14, '15', 'Togo', 'TG', 14],
                   [15, '16', 'Nigeria', 'NG', 20],
                   [16, '17', 'Yemen', 'YE', 11],
                   [17, '18', 'Oman', 'OM', 19]];


        foreach($office as $data){
            DB::table('offices')->insert(
            [   'id'=> $data[0],
                'company_id'=> $data[1],
                'name'=> $data[2],                
                ]
            );
        }
    }
}
