<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WilayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wilayas = [
            ['id' => Str::uuid() ,'name' => 'Adrar', 'name_ar' => 'أدرار'],
            ['id' => Str::uuid() ,'name' => 'Chlef', 'name_ar' => 'الشلف'],
            ['id' => Str::uuid() ,'name' => 'Laghouat', 'name_ar' => 'الأغواط'],
            ['id' => Str::uuid() ,'name' => 'Oum El Bouaghi', 'name_ar' => 'أم البواقي'],
            ['id' => Str::uuid() ,'name' => 'Batna', 'name_ar' => 'باتنة'],
            ['id' => Str::uuid() ,'name' => 'Béjaïa', 'name_ar' => 'بجاية'],
            ['id' => Str::uuid() ,'name' => 'Biskra', 'name_ar' => 'بسكرة'],
            ['id' => Str::uuid() ,'name' => 'Béchar', 'name_ar' => 'بشار'],
            ['id' => Str::uuid() ,'name' => 'Blida', 'name_ar' => 'البليدة'],
            ['id' => Str::uuid() ,'name' => 'Bouira', 'name_ar' => 'البويرة'],
            ['id' => Str::uuid() ,'name' => 'Tamanrasset', 'name_ar' => 'تمنراست'],
            ['id' => Str::uuid() ,'name' => 'Tébessa', 'name_ar' => 'تبسة'],
            ['id' => Str::uuid() ,'name' => 'Tlemcen', 'name_ar' => 'تلمسان'],
            ['id' => Str::uuid() ,'name' => 'Tiaret', 'name_ar' => 'تيارت'],
            ['id' => Str::uuid() ,'name' => 'Tizi Ouzou', 'name_ar' => 'تيزي وزو'],
            ['id' => Str::uuid() ,'name' => 'Alger', 'name_ar' => 'الجزائر'],
            ['id' => Str::uuid() ,'name' => 'Djelfa', 'name_ar' => 'الجلفة'],
            ['id' => Str::uuid() ,'name' => 'Jijel', 'name_ar' => 'جيجل'],
            ['id' => Str::uuid() ,'name' => 'Sétif', 'name_ar' => 'سطيف'],
            ['id' => Str::uuid() ,'name' => 'Saïda', 'name_ar' => 'سعيدة'],
            ['id' => Str::uuid() ,'name' => 'Skikda', 'name_ar' => 'سكيكدة'],
            ['id' => Str::uuid() ,'name' => 'Sidi Bel Abbès', 'name_ar' => 'سيدي بلعباس'],
            ['id' => Str::uuid() ,'name' => 'Annaba', 'name_ar' => 'عنابة'],
            ['id' => Str::uuid() ,'name' => 'Guelma', 'name_ar' => 'قالمة'],
            ['id' => Str::uuid() ,'name' => 'Constantine', 'name_ar' => 'قسنطينة'],
            ['id' => Str::uuid() ,'name' => 'Médéa', 'name_ar' => 'المدية'],
            ['id' => Str::uuid() ,'name' => 'Mostaganem', 'name_ar' => 'مستغانم'],
            ['id' => Str::uuid() ,'name' => 'M\'sila', 'name_ar' => 'المسيلة'],
            ['id' => Str::uuid() ,'name' => 'Mascara', 'name_ar' => 'معسكر'],
            ['id' => Str::uuid() ,'name' => 'Ouargla', 'name_ar' => 'ورقلة'],
            ['id' => Str::uuid() ,'name' => 'Oran', 'name_ar' => 'وهران'],
            ['id' => Str::uuid() ,'name' => 'El Bayadh', 'name_ar' => 'البيض'],
            ['id' => Str::uuid() ,'name' => 'Illizi', 'name_ar' => 'إليزي'],
            ['id' => Str::uuid() ,'name' => 'Bordj Bou Arreridj', 'name_ar' => 'برج بوعريريج'],
            ['id' => Str::uuid() ,'name' => 'Boumerdes', 'name_ar' => 'بومرداس'],
            ['id' => Str::uuid() ,'name' => 'El Tarf', 'name_ar' => 'الطارف'],
            ['id' => Str::uuid() ,'name' => 'Tindouf', 'name_ar' => 'تندوف'],
            ['id' => Str::uuid() ,'name' => 'Tissemsilt', 'name_ar' => 'تيسمسيلت'],
            ['id' => Str::uuid() ,'name' => 'El Oued', 'name_ar' => 'الوادي'],
            ['id' => Str::uuid() ,'name' => 'Khenchela', 'name_ar' => 'خنشلة'],
            ['id' => Str::uuid() ,'name' => 'Souk Ahras', 'name_ar' => 'سوق أهراس'],
            ['id' => Str::uuid() ,'name' => 'Tipaza', 'name_ar' => 'تيبازة'],
            ['id' => Str::uuid() ,'name' => 'Mila', 'name_ar' => 'ميلة'],
            ['id' => Str::uuid() ,'name' => 'Aïn Defla', 'name_ar' => 'عين الدفلى'],
            ['id' => Str::uuid() ,'name' => 'Naâma', 'name_ar' => 'النعامة'],
            ['id' => Str::uuid() ,'name' => 'Aïn Témouchent', 'name_ar' => 'عين تموشنت'],
            ['id' => Str::uuid() ,'name' => 'Ghardaïa', 'name_ar' => 'غرداية'],
            ['id' => Str::uuid() ,'name' => 'Relizane', 'name_ar' => 'غليزان'],
            ['id' => Str::uuid() ,'name' => 'Timimoun', 'name_ar' => 'تيميمون'],
            ['id' => Str::uuid() ,'name' => 'Bordj Badji Mokhtar', 'name_ar' => 'برج باجي مختار'],
            ['id' => Str::uuid() ,'name' => 'Ouled Djellal', 'name_ar' => 'أولاد جلال'],
            ['id' => Str::uuid() ,'name' => 'Béni Abbès', 'name_ar' => 'بني عباس'],
            ['id' => Str::uuid() ,'name' => 'In Salah', 'name_ar' => 'إن صالح'],
            ['id' => Str::uuid() ,'name' => 'In Guezzam', 'name_ar' => 'إن قزام'],
            ['id' => Str::uuid() ,'name' => 'Touggourt', 'name_ar' => 'تقرت'],
            ['id' => Str::uuid() ,'name' => 'Djanet', 'name_ar' => 'جانت'],
            ['id' => Str::uuid() ,'name' => 'El M\'Ghair', 'name_ar' => 'المغير'],
            ['id' => Str::uuid() ,'name' => 'El Meniaa', 'name_ar' => 'المنيعة'],
        ];
        DB::table("wilayas")->insert($wilayas);
    }
}
