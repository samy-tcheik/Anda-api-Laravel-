<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            ["id" => "843c5d5b-1ee2-4c58-b95a-6f76f532317e", "translation" => "english", "language_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["id" => "0302f4e4-50c4-442c-8332-a9f5ea13e9e1", "translation" => "anglais" , "language_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["id" => "de70c9cd-efdb-47c1-b678-205b48c0829e", "translation" => "إنجليزي", "language_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],
            ["id" => "5549ee78-b142-4619-8817-0b13ae3555b1", "translation" => "frensh", "language_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["id" => "f6497388-30f8-4367-b5de-d120c0a1d035", "translation" => "français", "language_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["id" => "f0fbc629-47a8-4869-a99a-702e7696b414", "translation" => "الفرنسية", "language_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],
            ["id" => "a134e009-9a46-47c3-b099-418b4b621192", "translation" => "arabic", "language_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["id" => "deab2578-b912-4085-a0a1-30e37a753e2b", "translation" => "arabe", "language_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["id" => "bf04844c-dc90-4673-bea0-f5a1b643c88c", "translation" => "عربي", "language_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],
        ];
        DB::table("translations")->insert($translations);
    }
}
