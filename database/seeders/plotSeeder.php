<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class plotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plots = [
        [1, 'A5'],
        [2, 'A4'],
        [3, 'A3'],
        [4, 'B1'],
        [5, 'B6'],
        [6, 'B2'],
        [7, 'MS'],
        [8, 'M2'],
        [9, 'M6'],
        [10,'A2']];
    

    foreach($plots as $data){
        DB::table('plots')->insert([
            'id' => $data[0],
            'name' => $data[1],
        ]);
    }
}
}