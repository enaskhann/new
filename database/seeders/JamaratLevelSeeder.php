<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JamaratLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levelname = [ 

            [1, 'جسر الجمرات - الطابق الارضي', 'جسر الجمرات - الطابق الارضي', 100000],
            [2, 'جسر الجمرات - الطابق الأول', 'جسر الجمرات - الطابق الأول', 100000],
            [3, 'جسر الجمرات - الطابق الثاني', 'جسر الجمرات - الطابق الثاني', 100000],
            [4, 'جسر الجمرات - الطابق الثالث', 'جسر الجمرات - الطابق الثالث', 100000],
            [5, 'جسر الجمرات - الطابق الرابع', 'جسر الجمرات - الطابق الرابع', 100000]
        ];

        foreach($levelname as  $data){

            DB::table('jamarat_levels')->insert([
                'id' => $data[0],
                'name' => $data[1],
                'capacity'=> $data[3]
            ]);
    }
}
}
