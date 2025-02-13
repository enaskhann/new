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
        [2,1,1,'4/14',2000],
        [3,2,1,'5/15',2000],
        [4,3,1,'6/16',2000],
        [5,4,1,'7/17',2000],
        [6,4,1,'8/18',2000],
        [7,5,1,'9/19',2000],
        [8,5,1,'20/20',2000],
        [9,5,1,'1/21',2000],
        [10,6,1,'2/22',2000],
        [11,7,1,'3/23',2000],
        [12,8,1,'4/24',2000],
        [13,9,1,'5/25',2000],
        [14,10,1,'6/26',2000],
        [15,10,1,'7/27',2000],
        [16,1,1,'8/28',2000],
        [17,2,1,'9/29',2000],
        [18,3,1,'30/30',2000],
        [19,4,1,'1/31',2000],
        [20,5,1,'2/32',2000],
        [21,1,1,'3/33',2000],
        [22,1,1,'4/34',2000],
        [23,2,1,'5/35',2000],
        [24,3,1,'6/36',2000],
        [25,4,1,'7/37',2000],
        [26,4,1,'8/38',2000],
        [27,5,1,'9/39',2000],
        [28,5,1,'40/40',2000],
        [29,5,1,'1/41',2000],
        [30,6,1,'2/42',2000],
        [31,7,1,'3/43',2000],
        [32,8,1,'4/44',2000],
        [33,9,1,'5/45',2000],
        [34,10,1,'6/46',2000],
        [35,10,1,'7/47',2000],
        [36,1,1,'8/48',2000],
        [37,2,1,'9/49',2000],
        [38,3,1,'50/50',2000],
        [39,4,1,'1/51',2000],
        [40,5,1,'2/52',2000],
        [41,1,1,'3/53',2000],
        [42,1,1,'4/54',2000],
        [43,2,1,'5/55',2000],
        [44,3,1,'6/56',2000],
        [45,4,1,'7/57',2000],
        [46,4,1,'8/58',2000],
        [47,5,1,'9/59',2000],
        [48,5,1,'60/60',2000],
        [49,5,1,'1/61',2000],
        [50,6,1,'2/62',2000],
        [51,7,1,'3/63',2000],
        [52,8,1,'4/64',2000],
        [53,9,1,'5/65',2000],
        [54,10,1,'6/66',2000],
        [55,10,1,'7/67',2000],
        [56,1,1,'8/68',2000],
        [57,2,1,'9/69',2000],
        [58,3,1,'70/70',2000],
        [59,4,1,'1/71',2000],
        [60,5,1,'2/72',2000],
        [61,1,1,'3/73',2000],
        [62,1,1,'4/74',2000],
        [63,2,1,'5/75',2000],
        [64,3,1,'6/76',2000],
        [65,4,1,'7/77',2000],
        [66,4,1,'8/78',2000],
        [67,5,1,'9/79',2000],
        [68,5,1,'80/80',2000],
        [69,5,1,'1/81',2000],
        [70,6,1,'2/82',2000],
        [71,7,1,'3/83',2000],
        [72,8,1,'4/84',2000],
        [73,9,1,'5/85',2000],
        [74,10,1,'6/86',2000],
        [75,10,1,'7/87',2000],
        [76,1,1,'8/88',2000],
        [77,2,1,'9/89',2000],
        [78,3,1,'90/90',2000],
        [79,4,1,'1/91',2000],
        [80,5,1,'2/92',2000],
        [81,1,1,'3/93',2000],
        [82,1,1,'4/94',2000],
        [83,2,1,'5/95',2000],
        [84,3,1,'6/96',2000],
        [85,4,1,'7/97',2000],
        [86,4,1,'8/98',2000],
        [87,5,1,'9/99',2000],
        [88,5,1,'10/100',2000],
        [89,5,1,'1/101',2000],
        [90,6,1,'2/102',2000],
        [91,7,1,'3/103',2000],
        [92,8,1,'4/104',2000],
        [93,9,1,'5/105',2000],
        [94,10,1,'6/106',2000],
        [95,10,1,'7/107',2000],
        [96,1,1,'8/108',2000],
        [97,2,1,'9/109',2000],
        [98,3,1,'10/110',2000],
        [99,4,1,'11/111',2000],
        [100,5,1,'12/112',2000],
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
