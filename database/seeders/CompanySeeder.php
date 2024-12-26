<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    public function run()
    {
        $companiesData = [
            [1, 'ضيوف البيت لخدمات الحجاج', 'Duof Albat', 'DUA'],
            [2, 'شركة إكرام الضيف للسياحة', 'Ekram Aldef', 'EKA'],
            [3, 'شركة رحلات ومنافع للسياحة', 'Rehlat w Mnafea', 'RWM'],
            [4, 'شركة إثراء الخير', 'Ethra Alker', 'ETK'],
            [5, 'شركة مناسك المشاعر', 'Mnasek Almashaer', 'MWM'],
            [6, 'شركة دليل الزوار', 'Dlel Aloar', 'DAZ'],
            [7, 'شركة رفاد لخدمات الحجاج', 'Refad', 'RFD'],
            [8, 'شركة الرفادة لخدمات الحجاج', 'Alrefada', 'ARF'],
            [9, 'شركة رواف منى لخدمات الحجاج', 'Rawaf Mina', 'RWF'],
            [10, 'شركة مشارق الماسية', 'Mashreq Almaseia', 'MAS'],
            [11, 'شركة مشارق المتميزة', 'Mashreq Almotamaeza', 'MAT'],
            [12, 'دور الضيافة', 'Dor Aldeafa', 'DOR'],
            [13, 'مكة للإنشاء و التعمير', 'Makka Lelinsha', 'MLT'],
            [14, 'مجموعة سيرا القابضة', 'Sair Alqabeda', 'GSA'],
            [15, 'الراجحي للخدمات التجارية المساندة', 'Alrajehe', 'ARJ'],
            [16, 'شركة عبداللطيف جميل للاستثمارات العقارية', 'Abdullatef Jamel', 'ADB'],
            [17, 'شركة البرج العالمية', 'Alborj Alalamea', 'ABJ'],
            [18, 'شركة الاسناد المتكامل', 'Alisnad Almotakamel', 'ESC'],
            [19, 'شركة بشرى الضيافة لخدمات الحجاج والمعتمرين', 'Bshra Aldeifa', 'BDC'],
          
        ];

        foreach ($companiesData as $data) {
            DB::table('companies')->insert([
                'id' => $data[0],
                'name_ar' => $data[1],
                'name_en' => $data[2],
                'code' => $data[3],
            ]);
        }
    }
}