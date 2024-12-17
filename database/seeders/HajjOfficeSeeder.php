<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HajjOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $OfficesData = [
[13, 'روسيا', 'Russia', 'RU', 10],
[14, 'موريتانيا', 'Mauritania', 'MR', 9],
[15, 'ماليزيا', 'Malaysia', 'MY', 22],
[17, 'مصر', 'Egypt', 'EG', 8],
[22, 'قطر', 'Qatar', 'QA', 17],
[25, 'باكستان', 'Pakistan', 'PK', 5],
[26, 'السودان', 'Sudan', 'SD', 23],
[34, 'تركيا', 'Turkey', 'TR', 13],
[35, 'سيراليون', 'Sierra-Leone', 'SL', 7],
[36, 'فلسطين', 'Palestine', 'PS', 18],
[43, 'تركمانستان', 'Turkmenistan', 'TM', 12],
[46, 'الصومال', 'Somalia', 'SO', 15],
[47, 'النيجر', 'Niger', 'NE', 21],
[51, 'توجو', 'Togo', 'TG', 14],
[54, 'نيجيريا', 'Nigeria', 'NG', 20],
[57, 'اليمن', 'Yemen', 'YE', 11],
[61, 'عمان', 'Oman', 'OM', 19],
[64, 'الفلبين', 'Philippines', 'PH', 6],
[65, 'جمهورية جزر القمر', 'Republic-of-Comoros', 'KM', 16],
[86, 'المجلس التنسيقي لحجاج الداخل', 'internal', 'SA', 4],
[88, 'مجاملة', 'mojamala', 'MJ', 3],
[97, 'مصر - السياحة', 'Egypt-Tourism', 'EG', 8],
[100, 'مكتب شؤون حجاج السودان شركات', 'sudan_company', 'SD', 23],
[107, 'بعثة اختبار1', 'test1', 'CC', 5],
[108, 'بعثة اختبار 2', 'test2', 'CC2', 3],
[119, 'تركيا -', 'TR-test', 'TR-test', 13]
            ];
    
    foreach( $OfficesData as $data){
    
        DB::table('hajj_offices')->insert([
            'id' => $data[0],
            'name' => $data[1],
            'nationality_id'=> $data[4]
        ]);
    }
    }
}
