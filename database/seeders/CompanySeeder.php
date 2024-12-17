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
            [2, 'ضيوف البيت لخدمات الحجاج', 'Duof Albat', 'DUA'],
            [3, 'شركة إكرام الضيف للسياحة', 'Ekram Aldef', 'EKA'],
            [4, 'شركة رحلات ومنافع للسياحة', 'Rehlat w Mnafea', 'RWM'],
            [5, 'شركة إثراء الخير', 'Ethra Alker', 'ETK'],
            [6, 'شركة مناسك المشاعر', 'Mnasek Almashaer', 'MWM'],
            [7, 'شركة دليل الزوار', 'Dlel Aloar', 'DAZ'],
            [8, 'شركة رفاد لخدمات الحجاج', 'Refad', 'RFD'],
            [9, 'شركة الرفادة لخدمات الحجاج', 'Alrefada', 'ARF'],
            [10, 'شركة رواف منى لخدمات الحجاج', 'Rawaf Mina', 'RWF'],
            [11, 'شركة مشارق الماسية', 'Mashreq Almaseia', 'MAS'],
            [12, 'شركة مشارق المتميزة', 'Mashreq Almotamaeza', 'MAT'],
            [13, 'دور الضيافة', 'Dor Aldeafa', 'DOR'],
            [14, 'مكة للإنشاء و التعمير', 'Makka Lelinsha', 'MLT'],
            [15, 'مجموعة سيرا القابضة', 'Sair Alqabeda', 'GSA'],
            [16, 'الراجحي للخدمات التجارية المساندة', 'Alrajehe', 'ARJ'],
            [17, 'شركة عبداللطيف جميل للاستثمارات العقارية', 'Abdullatef Jamel', 'ADB'],
            [18, 'شركة البرج العالمية', 'Alborj Alalamea', 'ABJ'],
            [19, 'شركة الاسناد المتكامل', 'Alisnad Almotakamel', 'ESC'],
            [20, 'شركة بشرى الضيافة لخدمات الحجاج والمعتمرين', 'Bshra Aldeifa', 'BDC'],
          
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