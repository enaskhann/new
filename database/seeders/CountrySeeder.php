<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countriesData = [
        [4, 'المجلس التنسيقي لحجاج الداخل', 'internal', 'SA'],
        [5, 'باكستان', 'Pakistan', 'PK'],
        [6, 'الفلبين', 'Philippines', 'PH'],
        [7, 'سيراليون', 'Sierra Leone', 'SL'],
        [8, 'مصر', 'Egypt', 'EG'],
        [9, 'موريتانيا', 'Mauritania', 'MR'],
        [10, 'روسيا الإتحادية', 'Russian Federation', 'RU'],
        [11, 'اليمن', 'Yemen', 'YE'],
        [12, 'تركمانستان', 'Turkmenistan', 'TM'],
        [13, 'تركيا', 'Turkey', 'TR'],
        [14, 'توجو', 'Togo', 'TG'],
        [15, 'الصومال', 'Somalia', 'SO'],
        [16, 'جزر القمر', 'Comoros', 'KM'],
        [17, 'قطر', 'Qatar', 'QA'],
        [18, 'دولة فلسطين', 'Palestine, State of', 'PS'],
        [19, 'عمان', 'Oman', 'OM'],
        [20, 'نيجيريا', 'Nigeria', 'NG'],
        [21, 'النيجر', 'Niger', 'NE'],
        [22, 'ماليزيا', 'Malaysia', 'MY'],
        [23, 'السودان', 'Sudan', 'SD'],
        ];

foreach( $countriesData as $data){

    DB::table('nationalities')->insert([
        'id' => $data[0],
        'name' => $data[1],
    ]);

}
    }
}
