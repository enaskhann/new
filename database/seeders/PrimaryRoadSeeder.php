<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PrimaryRoadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $roads = [
        [1, 'محطة منى 2', 'MIN2', 15000],
        [2, 'محطة منى 1', 'MIN1', 15000],
        [3, 'طريق المشاة الجنوبي المظلل', 'Almoshah Almozalal Aljanobe', 39000],
        [4, 'انفاق الشعبين', 'Anfaq Alsheabain', 40000],
        [5, 'شارع الرابطة', 'Alrabta Street', 15000],
        [6, 'محطة مزدلفة 3', 'MUZ3', 15000],
        [7, 'شارع 126', 'Street 126', 16000],
        [8, 'طريق الملك فهد 68', 'King Fahad Road', 37500],
        [9, 'شارع 128', 'Street 128', 10000],
        [10, 'طريق الجوهرة 56', 'Algohara Road 56', 28750],
        [11, 'طريق سوق العرب 62', 'Souq Alarab Rouad 62', 35500],
        [12, 'طريق رقم 15', 'Road 15', 39000],
        [13, 'شارع الجديد 204', 'Aljaded Roud 204', 35500],
        [14, 'شارع 124', 'Street 124', 6000],
        [15, 'طريق الملك عبدالعزيز 38', 'King Abdulaziz Road 38', 2000],
        [16, 'شارع 206', 'Street 206', 30000],
        [17, 'الكبش', 'Alkabsh', 31500],
        [18, 'محطة منى 3', 'MIN3', 45000],
        [19, 'طريق الملك فيصل 50', 'King Faisal Road 50', 110000],
        [20, 'طريق القصر الملكي', 'Royal Palace Road', 30000],
            ];
    
    foreach( $roads as $data){
    
        DB::table('primary_roads')->insert([
            'id' => $data[0],
            'name' => $data[1],
            'capacity'=> $data[3]
        ]);
    }
    }
        
    }
