<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslatableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translatable = [
            //English
            ["translation_id" => "843c5d5b-1ee2-4c58-b95a-6f76f532317e", "translatable_type" => "App\Models\Language", "translatable_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["translation_id" => "0302f4e4-50c4-442c-8332-a9f5ea13e9e1", "translatable_type" => "App\Models\Language", "translatable_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["translation_id" => "de70c9cd-efdb-47c1-b678-205b48c0829e", "translatable_type" => "App\Models\Language", "translatable_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            //French
            ["translation_id" => "5549ee78-b142-4619-8817-0b13ae3555b1", "translatable_type" => "App\Models\Language", "translatable_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["translation_id" => "f6497388-30f8-4367-b5de-d120c0a1d035", "translatable_type" => "App\Models\Language", "translatable_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["translation_id" => "f0fbc629-47a8-4869-a99a-702e7696b414", "translatable_type" => "App\Models\Language", "translatable_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            //Arabic
            ["translation_id" => "a134e009-9a46-47c3-b099-418b4b621192", "translatable_type" => "App\Models\Language", "translatable_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],
            ["translation_id" => "deab2578-b912-4085-a0a1-30e37a753e2b", "translatable_type" => "App\Models\Language", "translatable_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],
            ["translation_id" => "bf04844c-dc90-4673-bea0-f5a1b643c88c", "translatable_type" => "App\Models\Language", "translatable_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],

            //Descriptions
            ["translation_id" => "c5b8f531-5393-464c-93c7-16f3e5e91051", "translatable_type" => "App\Models\Description", "translatable_id" => "e29f8aae-25a6-46a3-b89b-04eae60ffbc5"],
            ["translation_id" => "70de6341-675e-4025-bcb9-0912c6cfb278", "translatable_type" => "App\Models\Description", "translatable_id" => "e29f8aae-25a6-46a3-b89b-04eae60ffbc5"],
            ["translation_id" => "b863e3f1-efd5-408a-81fc-cfc21a072145", "translatable_type" => "App\Models\Description", "translatable_id" => "e29f8aae-25a6-46a3-b89b-04eae60ffbc5"],
            //
            ["translation_id" => "296bfe64-7adb-4d86-a813-06d23d735c19", "translatable_type" => "App\Models\Description", "translatable_id" => "2fdccc75-3380-498b-96e2-2c7bc9d52ce9"],
            ["translation_id" => "eb3e9900-ed92-4e0e-a3fd-1c34bdb55819", "translatable_type" => "App\Models\Description", "translatable_id" => "2fdccc75-3380-498b-96e2-2c7bc9d52ce9"],
            ["translation_id" => "d40db377-5707-44d0-ac2a-aa98b52841e4", "translatable_type" => "App\Models\Description", "translatable_id" => "2fdccc75-3380-498b-96e2-2c7bc9d52ce9"],
            //
            ["translation_id" => "009b111c-bce3-4100-a791-0c7592c41d1d", "translatable_type" => "App\Models\Description", "translatable_id" => "560e3e83-1e0a-423d-b509-3198da4c1351"],
            ["translation_id" => "b3bbcda2-bac6-4c38-9d69-701933439d11", "translatable_type" => "App\Models\Description", "translatable_id" => "560e3e83-1e0a-423d-b509-3198da4c1351"],
            ["translation_id" => "e5e7d5fb-6c2d-4960-9499-95351b627110", "translatable_type" => "App\Models\Description", "translatable_id" => "560e3e83-1e0a-423d-b509-3198da4c1351"],
            //
            ["translation_id" => "dc7ba502-6aed-46f5-bbf1-0abc79d60b7b", "translatable_type" => "App\Models\Description", "translatable_id" => "2f4350b0-b4ac-4e20-8570-1ecdaf060676"],
            ["translation_id" => "4eb6478f-81a3-45cf-a6bc-fa5cfe75267e", "translatable_type" => "App\Models\Description", "translatable_id" => "2f4350b0-b4ac-4e20-8570-1ecdaf060676"],
            ["translation_id" => "ae9a614a-0eb1-41bb-b4d8-454c4960effa", "translatable_type" => "App\Models\Description", "translatable_id" => "2f4350b0-b4ac-4e20-8570-1ecdaf060676"],
            ];

        DB::table("translatables")->insert($translatable);
    }
}
