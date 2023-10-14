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
            ['id' => "d83ad795-9c03-4f03-907c-4ba73d866ad5" ,'name' => 'adrar'],
            ['id' => "938e1c93-19d0-4cdd-b46d-698e59141b18" ,'name' => 'chlef'],
            ['id' => "d9e05568-05b7-43ba-b1c9-c44dd5245a19" ,'name' => 'laghouat'],
            ['id' => "95e98117-c509-46bb-9961-845c5c482b29" ,'name' => 'oum_el_bouaghi'],
            ['id' => "38ddfa8b-2438-4654-bb6e-aaf67a75cc42" ,'name' => 'batna'],
            ['id' => "a3804ddc-9fdb-42ff-ac90-8ae9bca71de4" ,'name' => 'bejaia'],
            ['id' => "87e980ab-753f-4b02-9690-b93fe0f4c5fc" ,'name' => 'biskra'],
            ['id' => "46765e0f-b081-41af-9c6d-2b5554d2329b" ,'name' => 'bechar'],
            ['id' => "4ed6f315-0f80-499d-b396-94c0b1608825" ,'name' => 'blida'],
            ['id' => "832a45e9-ae04-494a-b1fe-0b32a04b306e" ,'name' => 'bouira'],
            ['id' => "7cafdf16-738e-4ea7-bc2f-58692a82f304" ,'name' => 'Ttamanrasset'],
            ['id' => "7dd32725-aba2-4bdf-b046-ef848920f16b" ,'name' => 'tebessa'],
            ['id' => "cf031405-a5a4-47ff-90ab-1cf08c585059" ,'name' => 'tlemcen'],
            ['id' => "83ba7bd0-9f28-4766-b9d1-ad0574e549b2" ,'name' => 'tiaret'],
            ['id' => "f3cae724-4c08-43c1-901e-5a0fa6ba087c" ,'name' => 'tizi_ouzou'],
            ['id' => "f114f1d4-22a8-4e77-8c0d-31152c03dc1a" ,'name' => 'alger'],
            ['id' => "3604d9ad-9cf9-44fb-ab31-e0e3242b9d32" ,'name' => 'djelfa'],
            ['id' => "0b4be7c5-de0b-4e1e-af89-19d1f427b9fd" ,'name' => 'jijel'],
            ['id' => "b10b6d2c-4ad2-427f-9121-f5b93f0174bd" ,'name' => 'setif'],
            ['id' => "58533f8a-8a21-497d-b63d-c85981793861" ,'name' => 'saida'],
            ['id' => "1fc96de3-0117-4021-93a2-72f3a747a87d" ,'name' => 'skikda'],
            ['id' => "2cda0286-4e3e-4ec5-8422-c2baaa9c52aa" ,'name' => 'sidi_bel_abbes'],
            ['id' => "a9cfee44-de76-43c7-9164-a8fad10a4ed3" ,'name' => 'annaba'],
            ['id' => "364ace35-5183-4139-90cb-9f3cdb154042" ,'name' => 'guelma'],
            ['id' => "77dc817a-8e6e-4976-bff7-34134e424d16" ,'name' => 'constantine'],
            ['id' => "5fc238e4-2c9b-412d-b459-5ae25734fcef" ,'name' => 'medea'],
            ['id' => "cefe6420-21ed-4d69-a715-a08d0c515686" ,'name' => 'mostaganem'],
            ['id' => "0f99793f-e150-4514-8317-a1050d07912f" ,'name' => 'msila'],
            ['id' => "ae87752e-d0da-4b50-8ee1-9b35c7ea2c4e" ,'name' => 'mascara'],
            ['id' => "43531086-881e-4e8d-a7be-d10a6abd4087" ,'name' => 'ouargla'],
            ['id' => "7942e988-8417-4400-8daf-09f10ea4c9e5" ,'name' => 'oran'],
            ['id' => "314b7207-a705-4f6a-9434-f7c7c05e14e0" ,'name' => 'el_bayadh'],
            ['id' => "a15f7a78-e41c-4387-9c57-0947bf2229ed" ,'name' => 'illizi'],
            ['id' => "588961eb-7ef7-432c-8778-0acab83d0ee6" ,'name' => 'bordj_bou_arreridj'],
            ['id' => "9d192a88-c1b3-4e1c-8325-8f3010039426" ,'name' => 'boumerdes'],
            ['id' => "b87cf2b3-2b40-40aa-86a9-ae6760300b4b" ,'name' => 'el_tarf'],
            ['id' => "380974a1-e06a-4f7a-9e0d-4fbc229f1e05" ,'name' => 'tindouf'],
            ['id' => "df99cb9f-e534-49bc-aeb4-38e319004aca" ,'name' => 'tissemsilt'],
            ['id' => "21ed3bd6-9927-45aa-a66f-5b98cd87031f" ,'name' => 'el_oued'],
            ['id' => "94fc60d1-ba2c-4e3c-94cf-43d81bf98686",'name' => 'khenchela'],
            ['id' => "7b0c974b-31ad-4c6b-a547-81514388ed0d" ,'name' => 'souk_ahras'],
            ['id' => "286bb71c-028d-48bc-b740-a8c57bf93386" ,'name' => 'tipaza'],
            ['id' => "89c7cb3d-ca1e-472f-8ec9-bae2a3cf7a5a" ,'name' => 'mila'],
            ['id' => "0e143ddc-28a8-400a-8bbe-171c86525551" ,'name' => 'ain_defla'],
            ['id' => "543ea808-b978-4584-82b6-86e6fc5feab3" ,'name' => 'naama'],
            ['id' => "dcffb0e2-7e12-44a5-a96b-dbb1428ebbd7" ,'name' => 'ain_temouchent'],
            ['id' => "d8119f8b-303a-46b6-b031-1f4b40b3961b" ,'name' => 'ghardaia'],
            ['id' => "2316d1b9-7124-4770-a38b-7fed1798e307" ,'name' => 'relizane'],
            ['id' => "58e4eedf-d4ad-4ca2-bc9d-425605c46ae8" ,'name' => 'timimoun'],
            ['id' => "b0a7ffa3-60a8-45cd-91e1-9d0e9aadce37" ,'name' => 'bordj_badji_mokhtar'],
            ['id' => "fe0a77fe-4bf3-4e81-8797-761aa2638654" ,'name' => 'ouled_djellal'],
            ['id' => "756b6855-a5c3-4e9a-bc58-34fd1000a181" ,'name' => 'beni_abbes'],
            ['id' => "5ebd3bee-781b-47ab-b710-252c1d278fae" ,'name' => 'in_salah'],
            ['id' => "f0234cc9-ce60-46b9-9685-1f1e59a78783" ,'name' => 'in_guezzam'],
            ['id' => "99afe60c-75c7-429b-bde2-b534b3683dd3" ,'name' => 'touggourt'],
            ['id' => "c3e6bda2-b06a-468d-b6dc-15cc7a3aab6b" ,'name' => 'djanet'],
            ['id' => "b91b66ca-5cf7-4ac1-b15c-265aba914f58" ,'name' => 'el mghair'],
            ['id' => "28ca18ad-c0f0-4603-9173-e4330f6a366d" ,'name' => 'el_meniaa'],
        ];
        DB::table("wilayas")->insert($wilayas);
    }
}
