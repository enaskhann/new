<?php

namespace Database\Seeders;

use App\Models\ResidentialArea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class residentialAreaSeeder extends Seeder
{
    
    public function run()
    
    {
        $area = ResidentialArea::create(
            [ 'id'=>'1',
              'name'=>'mina'
       ]);
    }
}
