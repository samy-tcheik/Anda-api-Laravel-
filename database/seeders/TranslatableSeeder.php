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
            //Languages
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

            //Categories
            ["translation_id" => "a9d5d947-e38e-4eba-afe0-01a1c19b2f56", "translatable_type" => "App\Models\Category", "translatable_id" => "edc5dea7-fb53-4176-ad54-ed8e95ac89f3"],
            ["translation_id" => "387f78a9-f7f9-441d-bd9f-6fcee8ae6d53", "translatable_type" => "App\Models\Category", "translatable_id" => "edc5dea7-fb53-4176-ad54-ed8e95ac89f3"],
            ["translation_id" => "0aef1675-010c-4a0b-9eb4-752166f296dd", "translatable_type" => "App\Models\Category", "translatable_id" => "edc5dea7-fb53-4176-ad54-ed8e95ac89f3"],

            ["translation_id" => "72bf5b7b-0596-4eb7-b929-9c3b76059c61", "translatable_type" => "App\Models\Category", "translatable_id" => "0e8007d0-4554-4878-8501-e4df04522b76"],
            ["translation_id" => "143413e6-cb34-4334-9f18-1dd467549be7", "translatable_type" => "App\Models\Category", "translatable_id" => "0e8007d0-4554-4878-8501-e4df04522b76"],
            ["translation_id" => "e0637990-0617-4316-9d0e-4a7b77d2a7a8", "translatable_type" => "App\Models\Category", "translatable_id" => "0e8007d0-4554-4878-8501-e4df04522b76"],

            ["translation_id" => "841a5bcb-d88d-4f31-80ec-adf49eb8de5e", "translatable_type" => "App\Models\Category", "translatable_id" => "d4afe57a-363a-46ac-af79-a3c1aa2fc9ab"],
            ["translation_id" => "ff92549a-a139-4163-8a30-15ab03558173", "translatable_type" => "App\Models\Category", "translatable_id" => "d4afe57a-363a-46ac-af79-a3c1aa2fc9ab"],
            ["translation_id" => "48a309cd-0024-4a12-9558-ecfe7ed5fa20", "translatable_type" => "App\Models\Category", "translatable_id" => "d4afe57a-363a-46ac-af79-a3c1aa2fc9ab"],

            ["translation_id" => "a4b2c5de-b03b-43e5-88cf-51ab8bdfe274", "translatable_type" => "App\Models\Category", "translatable_id" => "b6c565ae-9ffc-4c56-90d6-6b8ed2357499"],
            ["translation_id" => "a8b69a98-4026-45bc-ab33-93d31a75e367", "translatable_type" => "App\Models\Category", "translatable_id" => "b6c565ae-9ffc-4c56-90d6-6b8ed2357499"],
            ["translation_id" => "c922f97d-268d-4180-9129-0347cc59ea10", "translatable_type" => "App\Models\Category", "translatable_id" => "b6c565ae-9ffc-4c56-90d6-6b8ed2357499"],

            ["translation_id" => "f5d116de-936b-40ca-b34f-1c514b8bf557", "translatable_type" => "App\Models\Category", "translatable_id" => "3fcf9bcb-440a-4f3e-9ac4-7e73befe4763"],
            ["translation_id" => "1b6ac91e-970e-4565-bdd8-0762081fdb2c", "translatable_type" => "App\Models\Category", "translatable_id" => "3fcf9bcb-440a-4f3e-9ac4-7e73befe4763"],
            ["translation_id" => "b6327c46-21b0-4013-bf41-02572b8d7191", "translatable_type" => "App\Models\Category", "translatable_id" => "3fcf9bcb-440a-4f3e-9ac4-7e73befe4763"],

            ["translation_id" => "b4728009-5572-4d75-bee9-d9eae66ebd3a", "translatable_type" => "App\Models\Category", "translatable_id" => "1842872d-c092-4e0c-918b-169815680997"],
            ["translation_id" => "0fe1edfc-e048-4360-aeed-696a7f0845bf", "translatable_type" => "App\Models\Category", "translatable_id" => "1842872d-c092-4e0c-918b-169815680997"],
            ["translation_id" => "3486269e-26bd-436f-8f26-5daa99fe17ae", "translatable_type" => "App\Models\Category", "translatable_id" => "1842872d-c092-4e0c-918b-169815680997"],

            ["translation_id" => "cac3802e-24aa-419d-ba0a-37ae50693142", "translatable_type" => "App\Models\Category", "translatable_id" => "45bc9433-b0af-496d-849a-088d0b8bfe1d"],
            ["translation_id" => "62b5d89e-15af-4a3b-87fa-a458c2085048", "translatable_type" => "App\Models\Category", "translatable_id" => "45bc9433-b0af-496d-849a-088d0b8bfe1d"],
            ["translation_id" => "8fb2fd41-1266-4a1c-ad70-53c117b30d4c", "translatable_type" => "App\Models\Category", "translatable_id" => "45bc9433-b0af-496d-849a-088d0b8bfe1d"],

            //Descriptions
            ["translation_id" => "c5b8f531-5393-464c-93c7-16f3e5e91051", "translatable_type" => "App\Models\Description", "translatable_id" => "e29f8aae-25a6-46a3-b89b-04eae60ffbc5"],
            ["translation_id" => "70de6341-675e-4025-bcb9-0912c6cfb278", "translatable_type" => "App\Models\Description", "translatable_id" => "e29f8aae-25a6-46a3-b89b-04eae60ffbc5"],
            ["translation_id" => "b863e3f1-efd5-408a-81fc-cfc21a072145", "translatable_type" => "App\Models\Description", "translatable_id" => "e29f8aae-25a6-46a3-b89b-04eae60ffbc5"],
            //2
            ["translation_id" => "296bfe64-7adb-4d86-a813-06d23d735c19", "translatable_type" => "App\Models\Description", "translatable_id" => "2fdccc75-3380-498b-96e2-2c7bc9d52ce9"],
            ["translation_id" => "eb3e9900-ed92-4e0e-a3fd-1c34bdb55819", "translatable_type" => "App\Models\Description", "translatable_id" => "2fdccc75-3380-498b-96e2-2c7bc9d52ce9"],
            ["translation_id" => "d40db377-5707-44d0-ac2a-aa98b52841e4", "translatable_type" => "App\Models\Description", "translatable_id" => "2fdccc75-3380-498b-96e2-2c7bc9d52ce9"],
            //3
            ["translation_id" => "009b111c-bce3-4100-a791-0c7592c41d1d", "translatable_type" => "App\Models\Description", "translatable_id" => "560e3e83-1e0a-423d-b509-3198da4c1351"],
            ["translation_id" => "b3bbcda2-bac6-4c38-9d69-701933439d11", "translatable_type" => "App\Models\Description", "translatable_id" => "560e3e83-1e0a-423d-b509-3198da4c1351"],
            ["translation_id" => "e5e7d5fb-6c2d-4960-9499-95351b627110", "translatable_type" => "App\Models\Description", "translatable_id" => "560e3e83-1e0a-423d-b509-3198da4c1351"],
            //4
            ["translation_id" => "dc7ba502-6aed-46f5-bbf1-0abc79d60b7b", "translatable_type" => "App\Models\Description", "translatable_id" => "2f4350b0-b4ac-4e20-8570-1ecdaf060676"],
            ["translation_id" => "4eb6478f-81a3-45cf-a6bc-fa5cfe75267e", "translatable_type" => "App\Models\Description", "translatable_id" => "2f4350b0-b4ac-4e20-8570-1ecdaf060676"],
            ["translation_id" => "ae9a614a-0eb1-41bb-b4d8-454c4960effa", "translatable_type" => "App\Models\Description", "translatable_id" => "2f4350b0-b4ac-4e20-8570-1ecdaf060676"],
            //5
            ["translation_id" => "9e6c826a-1233-4f7e-99e2-59a271e97238", "translatable_type" => "App\Models\Description", "translatable_id" => "df962536-c476-4504-9ddb-6137021096a2"],
            ["translation_id" => "3db36488-c955-4db1-94dc-e8b3ee1952ec", "translatable_type" => "App\Models\Description", "translatable_id" => "df962536-c476-4504-9ddb-6137021096a2"],
            ["translation_id" => "f5d0b06f-7b9f-4f44-82d8-34de924d6623", "translatable_type" => "App\Models\Description", "translatable_id" => "df962536-c476-4504-9ddb-6137021096a2"],
            //6
            ["translation_id" => "cc69c5f3-7b50-4354-91fa-b46a7cc401fa", "translatable_type" => "App\Models\Description", "translatable_id" => "49dae815-3904-4f45-aee3-18da3bc549b5"],
            ["translation_id" => "98de9ded-3f59-4a5b-af01-04280bd1af66", "translatable_type" => "App\Models\Description", "translatable_id" => "49dae815-3904-4f45-aee3-18da3bc549b5"],
            ["translation_id" => "c0e93679-7080-45ba-b76a-54b518460e89", "translatable_type" => "App\Models\Description", "translatable_id" => "49dae815-3904-4f45-aee3-18da3bc549b5"],
            //7
            ["translation_id" => "80870dee-3dc0-4e85-bead-cc8b4910b72b", "translatable_type" => "App\Models\Description", "translatable_id" => "6828f21b-71ae-4722-b613-5d5b88c12735"],
            ["translation_id" => "353180c6-4027-4bd1-8f14-9c459e69d917", "translatable_type" => "App\Models\Description", "translatable_id" => "6828f21b-71ae-4722-b613-5d5b88c12735"],
            ["translation_id" => "6f8da866-4462-4bc0-ab58-0352d938d424", "translatable_type" => "App\Models\Description", "translatable_id" => "6828f21b-71ae-4722-b613-5d5b88c12735"],
            //8
            ["translation_id" => "c5f16d86-efc5-47ae-83d9-8ed60c1f3edf", "translatable_type" => "App\Models\Description", "translatable_id" => "7657bbbb-26a1-454d-a735-5b3cb96fa551"],
            ["translation_id" => "80cf0b50-914d-414e-b419-dcebff9242fa", "translatable_type" => "App\Models\Description", "translatable_id" => "7657bbbb-26a1-454d-a735-5b3cb96fa551"],
            ["translation_id" => "a0f96d78-b668-426c-bca8-68ef580153b9", "translatable_type" => "App\Models\Description", "translatable_id" => "7657bbbb-26a1-454d-a735-5b3cb96fa551"],
            //9
            ["translation_id" => "0a3d287c-79e0-466d-908e-cd38b749a695", "translatable_type" => "App\Models\Description", "translatable_id" => "2dae3f97-ff0b-4d5d-bc0e-fb7ba5e86cec"],
            ["translation_id" => "c78aa17b-4216-4dbc-ab4a-57814a7aed43", "translatable_type" => "App\Models\Description", "translatable_id" => "2dae3f97-ff0b-4d5d-bc0e-fb7ba5e86cec"],
            ["translation_id" => "59bf4f5b-3606-43f5-b6c5-977b017d7ad5", "translatable_type" => "App\Models\Description", "translatable_id" => "2dae3f97-ff0b-4d5d-bc0e-fb7ba5e86cec"],
            //10
            ["translation_id" => "9a4f7a9a-0399-4ec9-bfc8-500f3d3ee81e", "translatable_type" => "App\Models\Description", "translatable_id" => "a9d9da4f-ddea-4782-b792-502743b26866"],
            ["translation_id" => "ffaf8a68-aca6-48c2-870c-9253004c46ce", "translatable_type" => "App\Models\Description", "translatable_id" => "a9d9da4f-ddea-4782-b792-502743b26866"],
            ["translation_id" => "a7265697-a38a-4dcd-aa18-183e32dfb3d4", "translatable_type" => "App\Models\Description", "translatable_id" => "a9d9da4f-ddea-4782-b792-502743b26866"],
            //11
            ["translation_id" => "a9c53f05-216f-450a-a1d5-4fab770bad3d", "translatable_type" => "App\Models\Description", "translatable_id" => "c634ad8e-a405-42de-b658-98d79b257f03"],
            ["translation_id" => "bb0913f9-2e00-4fbd-b541-f7703fc7cae7", "translatable_type" => "App\Models\Description", "translatable_id" => "c634ad8e-a405-42de-b658-98d79b257f03"],
            ["translation_id" => "67989de5-8cc0-40c6-8a3b-926f976f20f7", "translatable_type" => "App\Models\Description", "translatable_id" => "c634ad8e-a405-42de-b658-98d79b257f03"],
            //12
            ["translation_id" => "dbeb85a3-70d2-4857-a87e-8cc1091114cb", "translatable_type" => "App\Models\Description", "translatable_id" => "65878cf6-1083-48f3-ad49-c5367b8a961f"],
            ["translation_id" => "a39d387a-c36d-47ff-bc0b-c0ce81f05211", "translatable_type" => "App\Models\Description", "translatable_id" => "65878cf6-1083-48f3-ad49-c5367b8a961f"],
            ["translation_id" => "713c47fb-7704-4eb2-b22e-62596554183b", "translatable_type" => "App\Models\Description", "translatable_id" => "65878cf6-1083-48f3-ad49-c5367b8a961f"],
            //13
            ["translation_id" => "ce276aa6-626b-4f34-b9e0-ebc3aedb283f", "translatable_type" => "App\Models\Description", "translatable_id" => "628695fb-ef14-4bc1-a012-44ac77edc389"],
            ["translation_id" => "1b632f5c-2b3f-45fb-8317-4b9d8654281e", "translatable_type" => "App\Models\Description", "translatable_id" => "628695fb-ef14-4bc1-a012-44ac77edc389"],
            ["translation_id" => "e4671778-6ca7-4647-a9a8-0a71b3aeb34d", "translatable_type" => "App\Models\Description", "translatable_id" => "628695fb-ef14-4bc1-a012-44ac77edc389"],
            //14
            ["translation_id" => "dea43688-0273-47f3-8215-486cb2385595", "translatable_type" => "App\Models\Description", "translatable_id" => "6a80a1d9-4494-4632-8f2d-de000513dfd1"],
            ["translation_id" => "d6c9b488-4a69-4036-8ef1-1b4a09dd7f21", "translatable_type" => "App\Models\Description", "translatable_id" => "6a80a1d9-4494-4632-8f2d-de000513dfd1"],
            ["translation_id" => "83cb5499-4cf8-4234-890a-65fc35c657e7", "translatable_type" => "App\Models\Description", "translatable_id" => "6a80a1d9-4494-4632-8f2d-de000513dfd1"],
            //15
            ["translation_id" => "5e135ba4-8e5d-46f6-b5dc-76e2ea1262fd", "translatable_type" => "App\Models\Description", "translatable_id" => "5a7b1cdd-7c58-452b-b659-c3a07c7fe916"],
            ["translation_id" => "3544b71a-4037-40d4-9259-cac056461a22", "translatable_type" => "App\Models\Description", "translatable_id" => "5a7b1cdd-7c58-452b-b659-c3a07c7fe916"],
            ["translation_id" => "e45ae4f2-2a02-4d8e-bcd4-4cd063e9c1d8", "translatable_type" => "App\Models\Description", "translatable_id" => "5a7b1cdd-7c58-452b-b659-c3a07c7fe916"],
            //16
            ["translation_id" => "16bf32fa-b132-4ee8-bf30-04f2eab31840", "translatable_type" => "App\Models\Description", "translatable_id" => "c305c1f2-1e6a-4c84-b713-0bacf3fb1b8e"],
            ["translation_id" => "a61be086-d0f0-4268-89ac-bd59ef01fde6", "translatable_type" => "App\Models\Description", "translatable_id" => "c305c1f2-1e6a-4c84-b713-0bacf3fb1b8e"],
            ["translation_id" => "f63b7f7d-0d8c-4dc2-9a7f-f0df92ca1d65", "translatable_type" => "App\Models\Description", "translatable_id" => "c305c1f2-1e6a-4c84-b713-0bacf3fb1b8e"],
            //17
            ["translation_id" => "65377076-2499-415d-8b2d-b0bf6f3b1ac6", "translatable_type" => "App\Models\Description", "translatable_id" => "3d03e49d-e56f-4342-91c1-83d9149d183e"],
            ["translation_id" => "033650cc-6b41-4b6f-b935-71c309dfb5db", "translatable_type" => "App\Models\Description", "translatable_id" => "3d03e49d-e56f-4342-91c1-83d9149d183e"],
            ["translation_id" => "ecd1da90-c5c7-4227-874f-d29feb1577f3", "translatable_type" => "App\Models\Description", "translatable_id" => "3d03e49d-e56f-4342-91c1-83d9149d183e"],
            //18
            ["translation_id" => "ac13646b-b285-4020-b402-5ac8fa987594", "translatable_type" => "App\Models\Description", "translatable_id" => "81d8d227-c6db-4af0-857d-25aba63f857c"],
            ["translation_id" => "09b07b0c-12e2-4b75-9359-16f733908cee", "translatable_type" => "App\Models\Description", "translatable_id" => "81d8d227-c6db-4af0-857d-25aba63f857c"],
            ["translation_id" => "86973b27-331c-4995-8733-4b5c6da40ae6", "translatable_type" => "App\Models\Description", "translatable_id" => "81d8d227-c6db-4af0-857d-25aba63f857c"],
            //19
            ["translation_id" => "a223a990-42bb-43e5-85aa-6ff5ca34e686", "translatable_type" => "App\Models\Description", "translatable_id" => "e9745a42-905c-435d-8642-ee18e6c7ecb5"],
            ["translation_id" => "32dc6372-76a1-4a9e-9713-e47445f6964c", "translatable_type" => "App\Models\Description", "translatable_id" => "e9745a42-905c-435d-8642-ee18e6c7ecb5"],
            ["translation_id" => "ddf99ffd-ef6f-4154-826f-960f8c03af31", "translatable_type" => "App\Models\Description", "translatable_id" => "e9745a42-905c-435d-8642-ee18e6c7ecb5"],
            //20
            ["translation_id" => "96996822-623a-4f58-8936-68716cbbecf1", "translatable_type" => "App\Models\Description", "translatable_id" => "09a80e3e-297e-4a8c-8b5b-160b9430d2b4"],
            ["translation_id" => "8adc59ad-58e6-4144-bfd1-bca687a9bfee", "translatable_type" => "App\Models\Description", "translatable_id" => "09a80e3e-297e-4a8c-8b5b-160b9430d2b4"],
            ["translation_id" => "54225f5e-e3aa-446c-97b6-fc635de001f7", "translatable_type" => "App\Models\Description", "translatable_id" => "09a80e3e-297e-4a8c-8b5b-160b9430d2b4"],
            //21
            ["translation_id" => "5c4b7b19-cf8c-47aa-ac90-f35ca6e312c2", "translatable_type" => "App\Models\Description", "translatable_id" => "e8badb1e-dad8-44c7-bf11-43ad2aae467d"],
            ["translation_id" => "77417309-0c33-4d6d-8d25-e494d6df8a5e", "translatable_type" => "App\Models\Description", "translatable_id" => "e8badb1e-dad8-44c7-bf11-43ad2aae467d"],
            ["translation_id" => "4e8a9a76-4545-41c3-8ff6-be9ccf426630", "translatable_type" => "App\Models\Description", "translatable_id" => "e8badb1e-dad8-44c7-bf11-43ad2aae467d"],
            //22
            ["translation_id" => "2da0a0d0-a886-4e6e-ac29-54f3bc4c3cfe", "translatable_type" => "App\Models\Description", "translatable_id" => "ac157b8e-1cae-4e3a-ad55-5e04c87587d1"],
            ["translation_id" => "b610ce26-ff13-4f7b-9dee-e8b5cfe82c8a", "translatable_type" => "App\Models\Description", "translatable_id" => "ac157b8e-1cae-4e3a-ad55-5e04c87587d1"],
            ["translation_id" => "0bc9f0f8-c23c-4fbf-9dc0-bbdbc1eb5ad9", "translatable_type" => "App\Models\Description", "translatable_id" => "ac157b8e-1cae-4e3a-ad55-5e04c87587d1"],
            //23
            ["translation_id" => "bc677e0b-87c5-4527-8297-8cd946dc6de6", "translatable_type" => "App\Models\Description", "translatable_id" => "c21d5409-1247-4755-87cd-4a7ab5352fca"],
            ["translation_id" => "a58cb551-2ec7-4e87-954d-f5abea8a6680", "translatable_type" => "App\Models\Description", "translatable_id" => "c21d5409-1247-4755-87cd-4a7ab5352fca"],
            ["translation_id" => "e4c4194d-40fe-4116-ad43-422235cd8397", "translatable_type" => "App\Models\Description", "translatable_id" => "c21d5409-1247-4755-87cd-4a7ab5352fca"],
            //24
            ["translation_id" => "9104ee44-a026-4cbd-acc9-5fd46b713adb", "translatable_type" => "App\Models\Description", "translatable_id" => "38468b84-e6d3-4250-9d81-2aacb7f5ac39"],
            ["translation_id" => "906a5407-b575-45d4-9740-91edb152f967", "translatable_type" => "App\Models\Description", "translatable_id" => "38468b84-e6d3-4250-9d81-2aacb7f5ac39"],
            ["translation_id" => "043d0710-2e58-4c82-8929-544863391ea7", "translatable_type" => "App\Models\Description", "translatable_id" => "38468b84-e6d3-4250-9d81-2aacb7f5ac39"],
            //25
            ["translation_id" => "2776bea2-a0be-4343-a860-332a605f6608", "translatable_type" => "App\Models\Description", "translatable_id" => "59d22b8a-e2ff-46d9-a2a3-7658e66d9423"],
            ["translation_id" => "b52d88c4-1b36-464c-acbc-744145166d11", "translatable_type" => "App\Models\Description", "translatable_id" => "59d22b8a-e2ff-46d9-a2a3-7658e66d9423"],
            ["translation_id" => "0114d3bd-0713-4c06-a2b8-477aee739b2b", "translatable_type" => "App\Models\Description", "translatable_id" => "59d22b8a-e2ff-46d9-a2a3-7658e66d9423"],
            //26
            ["translation_id" => "7f5fb324-0a6d-44f0-92f1-b6001e725738", "translatable_type" => "App\Models\Description", "translatable_id" => "66c39d73-6dea-4d9c-b936-2ed3f86ffa8c"],
            ["translation_id" => "88f09a1c-3d70-4a19-8f2c-476a578c635a", "translatable_type" => "App\Models\Description", "translatable_id" => "66c39d73-6dea-4d9c-b936-2ed3f86ffa8c"],
            ["translation_id" => "3713dcf7-1590-4dcb-ac0c-76fd764a50bf", "translatable_type" => "App\Models\Description", "translatable_id" => "66c39d73-6dea-4d9c-b936-2ed3f86ffa8c"],
            //27
            ["translation_id" => "08f791b4-b62a-45bf-9d28-56b11c66f9dd", "translatable_type" => "App\Models\Description", "translatable_id" => "21accf21-6420-4ca6-9f9a-c60612ae07f8"],
            ["translation_id" => "e1dd4737-99c3-4316-bb09-b85547dd9279", "translatable_type" => "App\Models\Description", "translatable_id" => "21accf21-6420-4ca6-9f9a-c60612ae07f8"],
            ["translation_id" => "b55b5117-7a45-4c63-aab3-173ef9c82ec7", "translatable_type" => "App\Models\Description", "translatable_id" => "21accf21-6420-4ca6-9f9a-c60612ae07f8"],
            //28
            ["translation_id" => "d3ada423-c734-4238-be08-773733f717a1", "translatable_type" => "App\Models\Description", "translatable_id" => "4178266b-d0c5-4800-adc7-953cb110e77b"],
            ["translation_id" => "755e4379-24a6-49e0-84bf-65c7582e5d04", "translatable_type" => "App\Models\Description", "translatable_id" => "4178266b-d0c5-4800-adc7-953cb110e77b"],
            ["translation_id" => "b620945f-7916-4486-a193-2128de772a04", "translatable_type" => "App\Models\Description", "translatable_id" => "4178266b-d0c5-4800-adc7-953cb110e77b"],
            //29
            ["translation_id" => "8a61165a-deec-48b7-a38b-b294da213682", "translatable_type" => "App\Models\Description", "translatable_id" => "dec354e2-c6ad-4e88-b7b8-0782d381ef5b"],
            ["translation_id" => "d22d5973-f0ee-4347-aa7a-9276ecca8517", "translatable_type" => "App\Models\Description", "translatable_id" => "dec354e2-c6ad-4e88-b7b8-0782d381ef5b"],
            ["translation_id" => "6c8d0b53-ddad-4dc1-b132-0757194890f3", "translatable_type" => "App\Models\Description", "translatable_id" => "dec354e2-c6ad-4e88-b7b8-0782d381ef5b"],
            //30
            ["translation_id" => "4117ebc8-dc36-4947-8fbc-f65dc9eb32b4", "translatable_type" => "App\Models\Description", "translatable_id" => "a0ed9090-8177-4b48-9eeb-046f58b5aae2"],
            ["translation_id" => "a1667e38-5adf-44f5-9b76-96e3fc3afcd2", "translatable_type" => "App\Models\Description", "translatable_id" => "a0ed9090-8177-4b48-9eeb-046f58b5aae2"],
            ["translation_id" => "15d71f61-4502-464a-ab64-e2e4d57430ee", "translatable_type" => "App\Models\Description", "translatable_id" => "a0ed9090-8177-4b48-9eeb-046f58b5aae2"],
            //31
            ["translation_id" => "c69e76b3-c02b-4cfa-8adc-244a97449a3f", "translatable_type" => "App\Models\Description", "translatable_id" => "3f008c41-6f7c-4c13-854e-3b7c99b8897f"],
            ["translation_id" => "8e394beb-af42-45dc-a908-1460bbcb15c5", "translatable_type" => "App\Models\Description", "translatable_id" => "3f008c41-6f7c-4c13-854e-3b7c99b8897f"],
            ["translation_id" => "08cfcfb1-6d2d-45f5-b1a5-41afc5cd3ed3", "translatable_type" => "App\Models\Description", "translatable_id" => "3f008c41-6f7c-4c13-854e-3b7c99b8897f"],
            //32
            ["translation_id" => "7919e68f-6aac-47f4-b3ee-ee9d5f8638a6", "translatable_type" => "App\Models\Description", "translatable_id" => "c5baeac1-200e-4286-aa20-c3bf08b38631"],
            ["translation_id" => "ae5cf150-5048-4903-a4ff-1491a12efae8", "translatable_type" => "App\Models\Description", "translatable_id" => "c5baeac1-200e-4286-aa20-c3bf08b38631"],
            ["translation_id" => "54eeec01-c7fb-48ad-a39b-d6b8119158b2", "translatable_type" => "App\Models\Description", "translatable_id" => "c5baeac1-200e-4286-aa20-c3bf08b38631"],
            //33
            ["translation_id" => "374b6f0c-0985-41a8-aa58-2c0782fd4f62", "translatable_type" => "App\Models\Description", "translatable_id" => "3768420d-b561-4202-9c14-1e6263ad5048"],
            ["translation_id" => "5d2d7b16-086c-427e-8943-74429c68e187", "translatable_type" => "App\Models\Description", "translatable_id" => "3768420d-b561-4202-9c14-1e6263ad5048"],
            ["translation_id" => "5ee77853-645f-45ca-9308-c43c895e861c", "translatable_type" => "App\Models\Description", "translatable_id" => "3768420d-b561-4202-9c14-1e6263ad5048"],
            //34
            ["translation_id" => "a8125021-cfb4-4025-a056-ef38d04ff6d2", "translatable_type" => "App\Models\Description", "translatable_id" => "024005e6-a08a-4aa9-ae14-d3e270590531"],
            ["translation_id" => "00656038-8673-489b-98af-45c7153dec3c", "translatable_type" => "App\Models\Description", "translatable_id" => "024005e6-a08a-4aa9-ae14-d3e270590531"],
            ["translation_id" => "4dcdcec7-d8eb-4af5-aacc-609658c998df", "translatable_type" => "App\Models\Description", "translatable_id" => "024005e6-a08a-4aa9-ae14-d3e270590531"],
            //35
            ["translation_id" => "7e2bc6a2-6786-4159-9e04-4ec126dae82e", "translatable_type" => "App\Models\Description", "translatable_id" => "c7e90443-5c55-40ce-97f7-6c02493d2236"],
            ["translation_id" => "8626e962-0587-4729-9385-ab350e3903b9", "translatable_type" => "App\Models\Description", "translatable_id" => "c7e90443-5c55-40ce-97f7-6c02493d2236"],
            ["translation_id" => "4d1d8ea9-b148-4ff1-be7a-fca5a0698d76", "translatable_type" => "App\Models\Description", "translatable_id" => "c7e90443-5c55-40ce-97f7-6c02493d2236"],
            //36
            ["translation_id" => "5214ca5c-869f-4563-b71b-75cbbee75cea", "translatable_type" => "App\Models\Description", "translatable_id" => "67105c28-18e1-42f2-ac22-17770f521cb6"],
            ["translation_id" => "4177d38b-9320-498a-b333-1f7900c59af0", "translatable_type" => "App\Models\Description", "translatable_id" => "67105c28-18e1-42f2-ac22-17770f521cb6"],
            ["translation_id" => "bed636b9-0c27-4e7b-818f-e873fb6251d0", "translatable_type" => "App\Models\Description", "translatable_id" => "67105c28-18e1-42f2-ac22-17770f521cb6"],
            //37
            ["translation_id" => "00b3e277-489f-4361-b4bc-9eec35fd445e", "translatable_type" => "App\Models\Description", "translatable_id" => "6e09b001-a602-4fed-b99d-0f06975e097e"],
            ["translation_id" => "a7e7b588-f2ce-4304-b58d-1962733c89a6", "translatable_type" => "App\Models\Description", "translatable_id" => "6e09b001-a602-4fed-b99d-0f06975e097e"],
            ["translation_id" => "01e2b5fb-3681-4179-9dad-a110e9afeb76", "translatable_type" => "App\Models\Description", "translatable_id" => "6e09b001-a602-4fed-b99d-0f06975e097e"],
            //38
            ["translation_id" => "71bb8563-d601-4493-b312-516b864f3c78", "translatable_type" => "App\Models\Description", "translatable_id" => "eec160ab-d3b8-4103-aa54-a8955b84d7ef"],
            ["translation_id" => "456514b9-7e20-41ec-a8e9-0a964251a678", "translatable_type" => "App\Models\Description", "translatable_id" => "eec160ab-d3b8-4103-aa54-a8955b84d7ef"],
            ["translation_id" => "99b3e2d9-9f14-4f12-85a6-c91aee7ddf0f", "translatable_type" => "App\Models\Description", "translatable_id" => "eec160ab-d3b8-4103-aa54-a8955b84d7ef"],
            //39
            ["translation_id" => "7946407c-28c0-474f-8e50-35fc2d8f3525", "translatable_type" => "App\Models\Description", "translatable_id" => "16e0f18d-9faf-48a5-82f4-1bc237b349af"],
            ["translation_id" => "c952053a-1f7f-4123-a976-525fe2f2118e", "translatable_type" => "App\Models\Description", "translatable_id" => "16e0f18d-9faf-48a5-82f4-1bc237b349af"],
            ["translation_id" => "1117f480-f296-4d12-88e7-1e02b852fe55", "translatable_type" => "App\Models\Description", "translatable_id" => "16e0f18d-9faf-48a5-82f4-1bc237b349af"],
            //40
            ["translation_id" => "f4d69e9d-02a4-4860-924c-2fbb2bbd6a4f", "translatable_type" => "App\Models\Description", "translatable_id" => "4c9e21c8-64f9-4923-af90-1d938ec789bb"],
            ["translation_id" => "384077dc-64b1-4525-8a1c-b0104156667e", "translatable_type" => "App\Models\Description", "translatable_id" => "4c9e21c8-64f9-4923-af90-1d938ec789bb"],
            ["translation_id" => "97d9da53-4a13-4aff-b580-2cccad441866", "translatable_type" => "App\Models\Description", "translatable_id" => "4c9e21c8-64f9-4923-af90-1d938ec789bb"],
            //41
            ["translation_id" => "c92c718b-6cfe-43fe-808a-31745248d3ba", "translatable_type" => "App\Models\Description", "translatable_id" => "034edc38-067c-4b59-8cb1-e9176d637a0d"],
            ["translation_id" => "ddef07de-1b6b-47c9-9848-25b496e808dc", "translatable_type" => "App\Models\Description", "translatable_id" => "034edc38-067c-4b59-8cb1-e9176d637a0d"],
            ["translation_id" => "c673a6ff-e503-4721-869f-174f719867db", "translatable_type" => "App\Models\Description", "translatable_id" => "034edc38-067c-4b59-8cb1-e9176d637a0d"],
            //42
            ["translation_id" => "62fbfe12-9cce-448e-afdd-ba629f0fe61d", "translatable_type" => "App\Models\Description", "translatable_id" => "fe9bd32d-0eaa-468b-9b71-7a2f633edf80"],
            ["translation_id" => "36438f1c-0c27-470e-82e2-87c19fdfb88c", "translatable_type" => "App\Models\Description", "translatable_id" => "fe9bd32d-0eaa-468b-9b71-7a2f633edf80"],
            ["translation_id" => "12ca19d7-b72a-436c-9c24-fbd2bd74e35f", "translatable_type" => "App\Models\Description", "translatable_id" => "fe9bd32d-0eaa-468b-9b71-7a2f633edf80"],
            //43
            ["translation_id" => "0567dc27-7677-43aa-895e-44abf6dd1f71", "translatable_type" => "App\Models\Description", "translatable_id" => "892006da-aa19-4274-9666-0c731f5f89de"],
            ["translation_id" => "1e6c9ae5-6084-4d71-8a50-797a77ab593c", "translatable_type" => "App\Models\Description", "translatable_id" => "892006da-aa19-4274-9666-0c731f5f89de"],
            ["translation_id" => "278d38cb-6dc9-4426-9092-9ba0aff444c5", "translatable_type" => "App\Models\Description", "translatable_id" => "892006da-aa19-4274-9666-0c731f5f89de"],
            //44
            ["translation_id" => "9e8f4c43-ece1-4fc9-9398-e15c16a12f2a", "translatable_type" => "App\Models\Description", "translatable_id" => "d6f70a50-6686-40e0-9bc4-df18a0adda10"],
            ["translation_id" => "930f2b8f-e10b-496a-b149-d503a355abcb", "translatable_type" => "App\Models\Description", "translatable_id" => "d6f70a50-6686-40e0-9bc4-df18a0adda10"],
            ["translation_id" => "389c56b8-b207-4eb8-a7b7-1ccdc3178255", "translatable_type" => "App\Models\Description", "translatable_id" => "d6f70a50-6686-40e0-9bc4-df18a0adda10"],
            //45
            ["translation_id" => "a9da9924-bfe5-4e28-93a5-9a4b5c52f8b2", "translatable_type" => "App\Models\Description", "translatable_id" => "6e2a5f09-c51d-4217-8602-daf5b7ca6766"],
            ["translation_id" => "b01dea81-61fd-4b30-9b78-1f34e7ed5f38", "translatable_type" => "App\Models\Description", "translatable_id" => "6e2a5f09-c51d-4217-8602-daf5b7ca6766"],
            ["translation_id" => "63ae5a0f-54c8-4386-8687-e75da1380e95", "translatable_type" => "App\Models\Description", "translatable_id" => "6e2a5f09-c51d-4217-8602-daf5b7ca6766"],
            //46
            ["translation_id" => "e9d86aab-cb89-46c7-b39b-7e684ae45ad0", "translatable_type" => "App\Models\Description", "translatable_id" => "0356ad40-ccbd-4ab1-b4bc-5a8ff185fea0"],
            ["translation_id" => "fcf4660e-f200-4398-a397-a1a1a36d681b", "translatable_type" => "App\Models\Description", "translatable_id" => "0356ad40-ccbd-4ab1-b4bc-5a8ff185fea0"],
            ["translation_id" => "c91486a2-258e-40e1-86ad-e059d93c1bc0", "translatable_type" => "App\Models\Description", "translatable_id" => "0356ad40-ccbd-4ab1-b4bc-5a8ff185fea0"],
            //47
            ["translation_id" => "080246da-d4e3-435a-95f3-458a2efecc43", "translatable_type" => "App\Models\Description", "translatable_id" => "ef678d18-2fb3-4500-8c33-12a8853a9536"],
            ["translation_id" => "91a5fb02-ebe5-4deb-8353-0a82893fb111", "translatable_type" => "App\Models\Description", "translatable_id" => "ef678d18-2fb3-4500-8c33-12a8853a9536"],
            ["translation_id" => "053223ac-bd8f-47ac-a751-e1462ed39671", "translatable_type" => "App\Models\Description", "translatable_id" => "ef678d18-2fb3-4500-8c33-12a8853a9536"],
            //48
            ["translation_id" => "f7b2dbb0-7afa-4646-b333-8e177ffbd52b", "translatable_type" => "App\Models\Description", "translatable_id" => "7c1c722f-4936-4024-9aea-6996185d9c1d"],
            ["translation_id" => "c63ba679-6583-4b63-9e8a-cac11e42ac64", "translatable_type" => "App\Models\Description", "translatable_id" => "7c1c722f-4936-4024-9aea-6996185d9c1d"],
            ["translation_id" => "d1530e34-aa51-491d-b65a-1c3a2363914d", "translatable_type" => "App\Models\Description", "translatable_id" => "7c1c722f-4936-4024-9aea-6996185d9c1d"],
            //49
            ["translation_id" => "e8b8763e-bde8-4dae-bfa1-963d9e10d114", "translatable_type" => "App\Models\Description", "translatable_id" => "0cc8a224-c6ff-4141-bbb1-90f59adf5c44"],
            ["translation_id" => "a7c059ac-c9f8-4dd2-87e6-6ca9ba0d47a5", "translatable_type" => "App\Models\Description", "translatable_id" => "0cc8a224-c6ff-4141-bbb1-90f59adf5c44"],
            ["translation_id" => "3f87cb5d-57aa-45aa-a66d-23e9dcaf6a7e", "translatable_type" => "App\Models\Description", "translatable_id" => "0cc8a224-c6ff-4141-bbb1-90f59adf5c44"],
            //50
            ["translation_id" => "9168356f-24c6-4707-900c-5b82d35cd4e0", "translatable_type" => "App\Models\Description", "translatable_id" => "a567cab7-03da-49a6-a78e-acd63e89ddb3"],
            ["translation_id" => "9af2d513-0c0b-4ed5-a4b0-6da0693e63a5", "translatable_type" => "App\Models\Description", "translatable_id" => "a567cab7-03da-49a6-a78e-acd63e89ddb3"],
            ["translation_id" => "2b3fd94d-84b1-492d-93d6-d2b5ec45a4ff", "translatable_type" => "App\Models\Description", "translatable_id" => "a567cab7-03da-49a6-a78e-acd63e89ddb3"],
            //51
            ["translation_id" => "070bfa70-b554-41e0-955e-909a7c45e03d", "translatable_type" => "App\Models\Description", "translatable_id" => "acf674a2-7ba6-479d-8ff8-1a3c57989487"],
            ["translation_id" => "d5c7302f-f151-4fb0-b4a4-9604998f3410", "translatable_type" => "App\Models\Description", "translatable_id" => "acf674a2-7ba6-479d-8ff8-1a3c57989487"],
            ["translation_id" => "de45644f-03fb-4425-be71-1faa60d334e4", "translatable_type" => "App\Models\Description", "translatable_id" => "acf674a2-7ba6-479d-8ff8-1a3c57989487"],
            //52
            ["translation_id" => "222e49ae-367f-414f-b446-113270ad44ef", "translatable_type" => "App\Models\Description", "translatable_id" => "da169229-76d5-445c-a222-eed9bec8a047"],
            ["translation_id" => "51fcf1de-6c88-41f7-8b90-cbefe5b845ab", "translatable_type" => "App\Models\Description", "translatable_id" => "da169229-76d5-445c-a222-eed9bec8a047"],
            ["translation_id" => "268f666e-1f0d-4b5b-bfdd-092f32ca33a5", "translatable_type" => "App\Models\Description", "translatable_id" => "da169229-76d5-445c-a222-eed9bec8a047"],
            //53
            ["translation_id" => "866ec256-955c-4d19-b92a-d137ccb58316", "translatable_type" => "App\Models\Description", "translatable_id" => "5a976edd-a116-401c-93e4-81dda0585847"],
            ["translation_id" => "f80da111-4789-4ed5-a499-3d08f668faa3", "translatable_type" => "App\Models\Description", "translatable_id" => "5a976edd-a116-401c-93e4-81dda0585847"],
            ["translation_id" => "ddf6dc42-bd15-4838-8853-c749142a1a6c", "translatable_type" => "App\Models\Description", "translatable_id" => "5a976edd-a116-401c-93e4-81dda0585847"],
            //54
            ["translation_id" => "004d0c90-c8b2-4690-aa73-95f571498b62", "translatable_type" => "App\Models\Description", "translatable_id" => "c44f04e2-2f20-4653-b4b5-9f20a51ae77a"],
            ["translation_id" => "1c8a29b3-12bb-4bd6-a8b6-833e5ed771c8", "translatable_type" => "App\Models\Description", "translatable_id" => "c44f04e2-2f20-4653-b4b5-9f20a51ae77a"],
            ["translation_id" => "873ef99e-ad58-4365-8422-214edd3b836f", "translatable_type" => "App\Models\Description", "translatable_id" => "c44f04e2-2f20-4653-b4b5-9f20a51ae77a"],
            //55
            ["translation_id" => "844534d5-d2fd-4bd5-ae97-59319f5495e5", "translatable_type" => "App\Models\Description", "translatable_id" => "39f391e2-5f18-4fe3-a163-f2cf6aed3d29"],
            ["translation_id" => "e5c5afe2-7e93-465d-886a-6505e183b995", "translatable_type" => "App\Models\Description", "translatable_id" => "39f391e2-5f18-4fe3-a163-f2cf6aed3d29"],
            ["translation_id" => "15edf567-3a67-498b-8560-cf065cd6fe35", "translatable_type" => "App\Models\Description", "translatable_id" => "39f391e2-5f18-4fe3-a163-f2cf6aed3d29"],
            //56
            ["translation_id" => "4cec6906-4890-43c2-bf09-7e6b3f545b2f", "translatable_type" => "App\Models\Description", "translatable_id" => "54b18300-c35c-46c9-b9ae-2f9e422a033f"],
            ["translation_id" => "b5441a2c-ef07-467d-a142-609c533c45d3", "translatable_type" => "App\Models\Description", "translatable_id" => "54b18300-c35c-46c9-b9ae-2f9e422a033f"],
            ["translation_id" => "5d33d943-f6a7-4f14-a445-cdb60650e5b6", "translatable_type" => "App\Models\Description", "translatable_id" => "54b18300-c35c-46c9-b9ae-2f9e422a033f"],
            //57
            ["translation_id" => "bc938a5f-dd93-4569-94f4-59ce3b3976ac", "translatable_type" => "App\Models\Description", "translatable_id" => "d35271ee-8729-4c7c-81a7-bb5cb0592d80"],
            ["translation_id" => "e7258a63-db0f-499e-92e0-9a4fd7267f9c", "translatable_type" => "App\Models\Description", "translatable_id" => "d35271ee-8729-4c7c-81a7-bb5cb0592d80"],
            ["translation_id" => "a1063215-82b0-4589-b461-64e811995ede", "translatable_type" => "App\Models\Description", "translatable_id" => "d35271ee-8729-4c7c-81a7-bb5cb0592d80"],
            //58
            ["translation_id" => "b9640999-19b9-460f-93f1-73bac0493c5d", "translatable_type" => "App\Models\Description", "translatable_id" => "6fccd4bf-2059-440d-95cc-3d732f558733"],
            ["translation_id" => "72aab2d6-9f2c-45bf-a1a7-b395b6fcaac3", "translatable_type" => "App\Models\Description", "translatable_id" => "6fccd4bf-2059-440d-95cc-3d732f558733"],
            ["translation_id" => "03ca558e-d852-46d2-996b-a28d54130b54", "translatable_type" => "App\Models\Description", "translatable_id" => "6fccd4bf-2059-440d-95cc-3d732f558733"],
            //59
            ["translation_id" => "64f706b1-0f10-4199-a8eb-dd0b43ed64c4", "translatable_type" => "App\Models\Description", "translatable_id" => "e6e02fde-a8c1-42c4-bee8-81122077b2fb"],
            ["translation_id" => "26e758d2-c6e2-4c8e-aac3-34bc7a18b863", "translatable_type" => "App\Models\Description", "translatable_id" => "e6e02fde-a8c1-42c4-bee8-81122077b2fb"],
            ["translation_id" => "58ad5b1a-4e28-4512-9462-93b9eabbade7", "translatable_type" => "App\Models\Description", "translatable_id" => "e6e02fde-a8c1-42c4-bee8-81122077b2fb"],
            //60
            ["translation_id" => "8590a0c7-f26c-4d56-94a1-3cf9b37e8ac7", "translatable_type" => "App\Models\Description", "translatable_id" => "cfaf64bf-5e11-4455-9cca-6dd5c2d030be"],
            ["translation_id" => "5d9bd1d7-6281-4474-a246-cbf814377655", "translatable_type" => "App\Models\Description", "translatable_id" => "cfaf64bf-5e11-4455-9cca-6dd5c2d030be"],
            ["translation_id" => "60ad46d1-0402-4044-a86d-b2555486b9b5", "translatable_type" => "App\Models\Description", "translatable_id" => "cfaf64bf-5e11-4455-9cca-6dd5c2d030be"],
            //61
            ["translation_id" => "e15ed69f-31de-4725-8a35-8eeab7d96584", "translatable_type" => "App\Models\Description", "translatable_id" => "7c9a8d74-bbf3-4205-8369-1ec6a7ef7a4a"],
            ["translation_id" => "f0a4bc37-f227-4f36-9990-16bfc4a24c62", "translatable_type" => "App\Models\Description", "translatable_id" => "7c9a8d74-bbf3-4205-8369-1ec6a7ef7a4a"],
            ["translation_id" => "72b6cd67-a539-464b-99a9-dca18cf25cb7", "translatable_type" => "App\Models\Description", "translatable_id" => "7c9a8d74-bbf3-4205-8369-1ec6a7ef7a4a"],
            //62
            ["translation_id" => "91141d09-4203-4ee3-a8dd-b3e6f16872f8", "translatable_type" => "App\Models\Description", "translatable_id" => "698c7dda-15d5-411e-a161-8097af3434ba"],
            ["translation_id" => "b1c544a6-55ce-4a95-8519-705e54792a3d", "translatable_type" => "App\Models\Description", "translatable_id" => "698c7dda-15d5-411e-a161-8097af3434ba"],
            ["translation_id" => "8744d23f-8556-44ac-be9b-67dc123d248a", "translatable_type" => "App\Models\Description", "translatable_id" => "698c7dda-15d5-411e-a161-8097af3434ba"],
            //63
            ["translation_id" => "6faf9fb7-4824-4105-b740-7e46c963fb5f", "translatable_type" => "App\Models\Description", "translatable_id" => "63c5444e-b983-4b5a-a9bd-d797f20d2adc"],
            ["translation_id" => "59d5ee16-1c14-4ab8-aeb4-a564441afa55", "translatable_type" => "App\Models\Description", "translatable_id" => "63c5444e-b983-4b5a-a9bd-d797f20d2adc"],
            ["translation_id" => "6207e559-acfe-4878-bbff-a960237266cb", "translatable_type" => "App\Models\Description", "translatable_id" => "63c5444e-b983-4b5a-a9bd-d797f20d2adc"],
            //64
            ["translation_id" => "7161730c-5901-445d-83d2-f7fa62fce1ab", "translatable_type" => "App\Models\Description", "translatable_id" => "c4d0189b-4cae-47e3-94df-db57074caeec"],
            ["translation_id" => "20baaca8-fc8b-439d-9d7e-0c549101090b", "translatable_type" => "App\Models\Description", "translatable_id" => "c4d0189b-4cae-47e3-94df-db57074caeec"],
            ["translation_id" => "cc4644a9-16e1-4013-8e32-3607f583d214", "translatable_type" => "App\Models\Description", "translatable_id" => "c4d0189b-4cae-47e3-94df-db57074caeec"],
            //65
            ["translation_id" => "3c7741d8-dc8e-403f-9577-99d1bb768aac", "translatable_type" => "App\Models\Description", "translatable_id" => "295ac89a-4599-46d3-b4f5-effefc38ffb7"],
            ["translation_id" => "a1b199ee-9abd-4c6e-89f7-6854bc5e899f", "translatable_type" => "App\Models\Description", "translatable_id" => "295ac89a-4599-46d3-b4f5-effefc38ffb7"],
            ["translation_id" => "97029cb4-d6cd-425f-b322-79dec3ae4609", "translatable_type" => "App\Models\Description", "translatable_id" => "295ac89a-4599-46d3-b4f5-effefc38ffb7"],
            //66
            ["translation_id" => "0090b6d3-3364-4dee-9e48-8c7ace2a2e7e", "translatable_type" => "App\Models\Description", "translatable_id" => "0d14419c-58c4-47fa-b4e8-cfc6e206cfa8"],
            ["translation_id" => "a3438229-7694-4473-ae53-062a3aa66a8c", "translatable_type" => "App\Models\Description", "translatable_id" => "0d14419c-58c4-47fa-b4e8-cfc6e206cfa8"],
            ["translation_id" => "5b5d1299-d15a-481c-aa39-220db4d0367e", "translatable_type" => "App\Models\Description", "translatable_id" => "0d14419c-58c4-47fa-b4e8-cfc6e206cfa8"],
            //67
            ["translation_id" => "eb050d1c-1589-4945-833c-5a65e09d2f45", "translatable_type" => "App\Models\Description", "translatable_id" => "9873a9a2-ecb9-4cf4-931a-920f76a12d77"],
            ["translation_id" => "dd6940f1-1194-4ff5-aa73-6b08367a8d61", "translatable_type" => "App\Models\Description", "translatable_id" => "9873a9a2-ecb9-4cf4-931a-920f76a12d77"],
            ["translation_id" => "9ef2261f-c99f-4e70-8a42-350ebfe79914", "translatable_type" => "App\Models\Description", "translatable_id" => "9873a9a2-ecb9-4cf4-931a-920f76a12d77"],
            //68
            ["translation_id" => "944762a7-80e9-4e6f-b64d-e680b1917d3c", "translatable_type" => "App\Models\Description", "translatable_id" => "757cd135-d6f5-49be-8238-ea2c6058c39f"],
            ["translation_id" => "44c6fc71-27f9-461e-9717-2b1401b7f72b", "translatable_type" => "App\Models\Description", "translatable_id" => "757cd135-d6f5-49be-8238-ea2c6058c39f"],
            ["translation_id" => "239f64be-5892-475e-babc-38d194ccf8b0", "translatable_type" => "App\Models\Description", "translatable_id" => "757cd135-d6f5-49be-8238-ea2c6058c39f"],
            //69
            ["translation_id" => "d18055fd-9a97-4e3f-9ce7-d1a31071dd81", "translatable_type" => "App\Models\Description", "translatable_id" => "0d0e8fd1-5b50-4e9e-bf5f-086ef658b446"],
            ["translation_id" => "910a1fb5-fd3a-4874-82b5-84b58957cf9d", "translatable_type" => "App\Models\Description", "translatable_id" => "0d0e8fd1-5b50-4e9e-bf5f-086ef658b446"],
            ["translation_id" => "59b24517-7570-4bee-b9a9-528cb13718ec", "translatable_type" => "App\Models\Description", "translatable_id" => "0d0e8fd1-5b50-4e9e-bf5f-086ef658b446"],
            //70
            ["translation_id" => "9be33a0e-7d45-46ba-a19e-6cba0ffe514a", "translatable_type" => "App\Models\Description", "translatable_id" => "810bc97b-6e25-4bee-b70c-720f72b74074"],
            ["translation_id" => "b51a582c-5649-4cdc-8a36-46b45b2057d7", "translatable_type" => "App\Models\Description", "translatable_id" => "810bc97b-6e25-4bee-b70c-720f72b74074"],
            ["translation_id" => "c0dbf894-24f4-4a3c-81cf-c7fc582bd312", "translatable_type" => "App\Models\Description", "translatable_id" => "810bc97b-6e25-4bee-b70c-720f72b74074"],
            //71
            ["translation_id" => "426bb766-0046-42c1-b23f-57b80dfd3155", "translatable_type" => "App\Models\Description", "translatable_id" => "3fe85fe1-c673-44c2-831f-43fc420f988b"],
            ["translation_id" => "9128eb6b-4667-4a75-9c2d-bde80ebf7783", "translatable_type" => "App\Models\Description", "translatable_id" => "3fe85fe1-c673-44c2-831f-43fc420f988b"],
            ["translation_id" => "8de26602-e525-4e46-9f1e-ff3a58466a87", "translatable_type" => "App\Models\Description", "translatable_id" => "3fe85fe1-c673-44c2-831f-43fc420f988b"],
            //72
            ["translation_id" => "3d52f5f1-0975-4b3e-8155-a8491e492919", "translatable_type" => "App\Models\Description", "translatable_id" => "bd6319da-2b07-4523-a02e-7d739fcd1581"],
            ["translation_id" => "2e21573e-5909-4f15-92de-9780b9739034", "translatable_type" => "App\Models\Description", "translatable_id" => "bd6319da-2b07-4523-a02e-7d739fcd1581"],
            ["translation_id" => "77ab5b19-324e-4529-b59d-df3538797569", "translatable_type" => "App\Models\Description", "translatable_id" => "bd6319da-2b07-4523-a02e-7d739fcd1581"],
            //73
            ["translation_id" => "859f74fc-2961-4735-812d-852d9bc8d8c4", "translatable_type" => "App\Models\Description", "translatable_id" => "f563d06e-0fad-45bf-b238-6b2cdd973716"],
            ["translation_id" => "ff4ed85b-1390-4560-98de-935099112f70", "translatable_type" => "App\Models\Description", "translatable_id" => "f563d06e-0fad-45bf-b238-6b2cdd973716"],
            ["translation_id" => "5dc4f4ec-6343-470e-91c3-d0788b8869f9", "translatable_type" => "App\Models\Description", "translatable_id" => "f563d06e-0fad-45bf-b238-6b2cdd973716"],
            //74
            ["translation_id" => "95e59872-913d-4eea-a834-fd36c78164d3", "translatable_type" => "App\Models\Description", "translatable_id" => "0cf133cc-84ec-4c1d-9a3a-575ed1e7d133"],
            ["translation_id" => "339da06d-ecb8-43a6-8dd9-39ba3550d6f8", "translatable_type" => "App\Models\Description", "translatable_id" => "0cf133cc-84ec-4c1d-9a3a-575ed1e7d133"],
            ["translation_id" => "13d52689-06a8-4f2c-877c-17c144a385da", "translatable_type" => "App\Models\Description", "translatable_id" => "0cf133cc-84ec-4c1d-9a3a-575ed1e7d133"],
            //75
            ["translation_id" => "527a5fbd-7793-4075-b342-10f83e500121", "translatable_type" => "App\Models\Description", "translatable_id" => "36be84c9-72a9-400c-b9e6-417ef5bdc143"],
            ["translation_id" => "311c1b7d-79cc-45d1-83db-5d335bb91881", "translatable_type" => "App\Models\Description", "translatable_id" => "36be84c9-72a9-400c-b9e6-417ef5bdc143"],
            ["translation_id" => "f48ac035-f886-468e-ba1c-b77c4ccf8df9", "translatable_type" => "App\Models\Description", "translatable_id" => "36be84c9-72a9-400c-b9e6-417ef5bdc143"],
            //76
            ["translation_id" => "46fb2f2d-3ad1-4cd9-a1e1-2b5cffaf7b0e", "translatable_type" => "App\Models\Description", "translatable_id" => "15035881-13a8-4ed1-8a28-ebb610619d93"],
            ["translation_id" => "48e77d94-cb66-4405-9294-25ce387affa0", "translatable_type" => "App\Models\Description", "translatable_id" => "15035881-13a8-4ed1-8a28-ebb610619d93"],
            ["translation_id" => "930436e9-b469-4a9c-a3bf-da8e3739f8f4", "translatable_type" => "App\Models\Description", "translatable_id" => "15035881-13a8-4ed1-8a28-ebb610619d93"],
            //77
            ["translation_id" => "6491d504-4e51-4cc3-9d59-1abff347175c", "translatable_type" => "App\Models\Description", "translatable_id" => "5e792e8a-a3be-4c6d-9364-56ee3faa69f8"],
            ["translation_id" => "64d850a8-5791-429a-9a82-27618d0ec718", "translatable_type" => "App\Models\Description", "translatable_id" => "5e792e8a-a3be-4c6d-9364-56ee3faa69f8"],
            ["translation_id" => "9d78074b-b18d-4e36-84a7-3089c4743f0d", "translatable_type" => "App\Models\Description", "translatable_id" => "5e792e8a-a3be-4c6d-9364-56ee3faa69f8"],
            //78
            ["translation_id" => "c5c3510d-bdd0-440c-b0e0-d01f5013d45e", "translatable_type" => "App\Models\Description", "translatable_id" => "8b1f48da-5245-4b04-9d37-6c3ccb93e81e"],
            ["translation_id" => "0efb78d7-8f72-4b1b-87fd-6d2c3eb4780e", "translatable_type" => "App\Models\Description", "translatable_id" => "8b1f48da-5245-4b04-9d37-6c3ccb93e81e"],
            ["translation_id" => "0f98bcfe-00fa-4a9f-8b81-6e321f63450c", "translatable_type" => "App\Models\Description", "translatable_id" => "8b1f48da-5245-4b04-9d37-6c3ccb93e81e"],
            //79
            ["translation_id" => "9ffc45f6-e063-4758-a54c-93492c6712be", "translatable_type" => "App\Models\Description", "translatable_id" => "0f2c946b-c0c7-4d7a-b465-ce8446bd7ed7"],
            ["translation_id" => "dbe0638e-43b0-4d61-9a2d-7179467ca0a3", "translatable_type" => "App\Models\Description", "translatable_id" => "0f2c946b-c0c7-4d7a-b465-ce8446bd7ed7"],
            ["translation_id" => "101846e7-52ff-423e-976b-8d92b3ba3607", "translatable_type" => "App\Models\Description", "translatable_id" => "0f2c946b-c0c7-4d7a-b465-ce8446bd7ed7"],
            //80
            ["translation_id" => "4cc06cfa-4ef6-437e-98bd-428680eb0be1", "translatable_type" => "App\Models\Description", "translatable_id" => "f8581cae-a336-4692-80d1-e51bfa4f3504"],
            ["translation_id" => "e9930df1-5c4a-409b-a935-489033a49471", "translatable_type" => "App\Models\Description", "translatable_id" => "f8581cae-a336-4692-80d1-e51bfa4f3504"],
            ["translation_id" => "c2294703-62dd-4213-9d9a-8a403ae22f5e", "translatable_type" => "App\Models\Description", "translatable_id" => "f8581cae-a336-4692-80d1-e51bfa4f3504"],
            //81
            ["translation_id" => "79cb07fd-cfdd-4b76-bef2-e3940339ad6d", "translatable_type" => "App\Models\Description", "translatable_id" => "e4424b2b-084f-44b2-ae97-1fe72c073243"],
            ["translation_id" => "6c098a86-c3c8-4077-b54f-d54e47a804d8", "translatable_type" => "App\Models\Description", "translatable_id" => "e4424b2b-084f-44b2-ae97-1fe72c073243"],
            ["translation_id" => "2f92d342-b5f3-4612-9e72-e477b70523a7", "translatable_type" => "App\Models\Description", "translatable_id" => "e4424b2b-084f-44b2-ae97-1fe72c073243"],
            //82
            ["translation_id" => "23ba0da4-632c-4e50-a512-b1e5f8cbfebc", "translatable_type" => "App\Models\Description", "translatable_id" => "f79e3321-c2da-4e9a-b8d4-a1994d6d783d"],
            ["translation_id" => "67b60d41-56cd-4e8d-8c16-be839f2f7920", "translatable_type" => "App\Models\Description", "translatable_id" => "f79e3321-c2da-4e9a-b8d4-a1994d6d783d"],
            ["translation_id" => "bcbf232b-1348-46ce-8951-93b6b9cfab51", "translatable_type" => "App\Models\Description", "translatable_id" => "f79e3321-c2da-4e9a-b8d4-a1994d6d783d"],
            //83
            ["translation_id" => "7de10810-8cb3-4ca1-9de8-76b01c646933", "translatable_type" => "App\Models\Description", "translatable_id" => "bd3161dc-3afc-474a-ba2c-2011ac493a9d"],
            ["translation_id" => "93c041f6-1805-4534-927d-94788987020d", "translatable_type" => "App\Models\Description", "translatable_id" => "bd3161dc-3afc-474a-ba2c-2011ac493a9d"],
            ["translation_id" => "c3d5feb5-abc1-4cb0-970a-eeadc0d23c2d", "translatable_type" => "App\Models\Description", "translatable_id" => "bd3161dc-3afc-474a-ba2c-2011ac493a9d"],
            //84
            ["translation_id" => "42a3df23-b26c-473e-bbdc-4e86c8730066", "translatable_type" => "App\Models\Description", "translatable_id" => "5a9152c2-7580-4a89-b392-355cccd67711"],
            ["translation_id" => "74437e35-0038-4a30-8862-207ac5476dd1", "translatable_type" => "App\Models\Description", "translatable_id" => "5a9152c2-7580-4a89-b392-355cccd67711"],
            ["translation_id" => "d5bcae3c-7424-4f4d-a3d8-4288c7f00792", "translatable_type" => "App\Models\Description", "translatable_id" => "5a9152c2-7580-4a89-b392-355cccd67711"],
            //85
            ["translation_id" => "607add0b-eb1e-46b3-976c-eeebfbab8189", "translatable_type" => "App\Models\Description", "translatable_id" => "b9ca6a62-e1ce-476d-a605-af2bcfdf6996"],
            ["translation_id" => "16b5c3a1-b945-40d4-a2c8-6df971c474d0", "translatable_type" => "App\Models\Description", "translatable_id" => "b9ca6a62-e1ce-476d-a605-af2bcfdf6996"],
            ["translation_id" => "f948a895-1212-4cd3-a0db-fc1d58d45195", "translatable_type" => "App\Models\Description", "translatable_id" => "b9ca6a62-e1ce-476d-a605-af2bcfdf6996"],
            //86
            ["translation_id" => "5a330f7e-f74a-49f9-b7c8-da07c9c96096", "translatable_type" => "App\Models\Description", "translatable_id" => "d0ca6271-deda-43a8-bdcc-d588ec9d802a"],
            ["translation_id" => "473be714-fa06-4f43-aeb5-9773e4d3bb6d", "translatable_type" => "App\Models\Description", "translatable_id" => "d0ca6271-deda-43a8-bdcc-d588ec9d802a"],
            ["translation_id" => "2e02cf6c-f6d5-4d35-8424-fe00d83b16cb", "translatable_type" => "App\Models\Description", "translatable_id" => "d0ca6271-deda-43a8-bdcc-d588ec9d802a"],
            //87
            ["translation_id" => "9ca3e6ae-f2ad-491c-91b9-27d908d22e39", "translatable_type" => "App\Models\Description", "translatable_id" => "8a0dba89-47df-4502-ab82-f1a37e131262"],
            ["translation_id" => "afef15c6-c59e-43b9-ad3a-493586071520", "translatable_type" => "App\Models\Description", "translatable_id" => "8a0dba89-47df-4502-ab82-f1a37e131262"],
            ["translation_id" => "774f12bb-d911-4adc-acbf-6c06280f5a85", "translatable_type" => "App\Models\Description", "translatable_id" => "8a0dba89-47df-4502-ab82-f1a37e131262"],
            //88
            ["translation_id" => "a672ade4-d679-476c-8547-8cb595b088d6", "translatable_type" => "App\Models\Description", "translatable_id" => "21e6a0c3-beda-4a61-b750-8d29ce4e2571"],
            ["translation_id" => "3e30bfaa-b780-492f-9238-5820a808f37c", "translatable_type" => "App\Models\Description", "translatable_id" => "21e6a0c3-beda-4a61-b750-8d29ce4e2571"],
            ["translation_id" => "2130f931-9bf1-49f4-94a5-ee991c0fb572", "translatable_type" => "App\Models\Description", "translatable_id" => "21e6a0c3-beda-4a61-b750-8d29ce4e2571"],
            //89
            ["translation_id" => "33e92f35-e15d-4959-9761-11ab538adaa5", "translatable_type" => "App\Models\Description", "translatable_id" => "587b1613-3683-484d-83d3-57eb91d5a3e1"],
            ["translation_id" => "020ce093-d604-409a-8cf0-92141dbac5c7", "translatable_type" => "App\Models\Description", "translatable_id" => "587b1613-3683-484d-83d3-57eb91d5a3e1"],
            ["translation_id" => "e7b62ea9-7ce9-45db-b34b-3441d987bd90", "translatable_type" => "App\Models\Description", "translatable_id" => "587b1613-3683-484d-83d3-57eb91d5a3e1"],
            //90
            ["translation_id" => "03fa27f6-b988-46f1-a895-db3a186f01f1", "translatable_type" => "App\Models\Description", "translatable_id" => "461be5b3-0e3f-42f3-95d6-bf408bb13193"],
            ["translation_id" => "70c3253e-8dfb-4591-9bee-01100e70fea0", "translatable_type" => "App\Models\Description", "translatable_id" => "461be5b3-0e3f-42f3-95d6-bf408bb13193"],
            ["translation_id" => "c682a074-89e9-4cd3-bfab-82764334add5", "translatable_type" => "App\Models\Description", "translatable_id" => "461be5b3-0e3f-42f3-95d6-bf408bb13193"],
            //91
            ["translation_id" => "b3a1e0e4-8fca-4576-9427-3d04a385c63a", "translatable_type" => "App\Models\Description", "translatable_id" => "28359100-0853-4f5b-9b00-4d090bd0f2c2"],
            ["translation_id" => "957bccdc-c814-4bd8-935a-82d86ed8277b", "translatable_type" => "App\Models\Description", "translatable_id" => "28359100-0853-4f5b-9b00-4d090bd0f2c2"],
            ["translation_id" => "ea46c3f7-993d-4cfe-a89d-f143007ea0a0", "translatable_type" => "App\Models\Description", "translatable_id" => "28359100-0853-4f5b-9b00-4d090bd0f2c2"],
            //92
            ["translation_id" => "e4af3777-d42e-40d3-9ef8-edab73360113", "translatable_type" => "App\Models\Description", "translatable_id" => "a4b04faa-4193-4233-9291-4c5c6c7111a7"],
            ["translation_id" => "bbaa03e0-7bdb-4a00-95b7-06fab66b59db", "translatable_type" => "App\Models\Description", "translatable_id" => "a4b04faa-4193-4233-9291-4c5c6c7111a7"],
            ["translation_id" => "f342c381-04dd-478e-a747-de556f170e38", "translatable_type" => "App\Models\Description", "translatable_id" => "a4b04faa-4193-4233-9291-4c5c6c7111a7"],
            //93
            ["translation_id" => "03bef448-e426-4141-832a-354cacddf007", "translatable_type" => "App\Models\Description", "translatable_id" => "ef93d6dc-6e7a-4caf-9ca4-292d378243c9"],
            ["translation_id" => "fc69ea79-56a0-473e-bc86-39e125c4ce35", "translatable_type" => "App\Models\Description", "translatable_id" => "ef93d6dc-6e7a-4caf-9ca4-292d378243c9"],
            ["translation_id" => "dc8f11cf-6c06-44ab-ab38-bd8ac02d33ab", "translatable_type" => "App\Models\Description", "translatable_id" => "ef93d6dc-6e7a-4caf-9ca4-292d378243c9"],
            //94
            ["translation_id" => "0b5a5623-3239-41b8-86f7-60f358124d83", "translatable_type" => "App\Models\Description", "translatable_id" => "bf62cb1a-bcf0-4ae6-91f3-3e9ef39b1e58"],
            ["translation_id" => "e4d103ed-efa7-4d24-98b4-76e533653297", "translatable_type" => "App\Models\Description", "translatable_id" => "bf62cb1a-bcf0-4ae6-91f3-3e9ef39b1e58"],
            ["translation_id" => "9d86daff-f70f-495e-93bc-ca188e5bf458", "translatable_type" => "App\Models\Description", "translatable_id" => "bf62cb1a-bcf0-4ae6-91f3-3e9ef39b1e58"],
            //95
            ["translation_id" => "671f2401-c566-4cec-9373-1ed8d58b2e91", "translatable_type" => "App\Models\Description", "translatable_id" => "6bb11ee2-a18b-4345-bee5-f9aa74b873f2"],
            ["translation_id" => "81490ddc-c5c2-47d3-a6b8-db2dfb940878", "translatable_type" => "App\Models\Description", "translatable_id" => "6bb11ee2-a18b-4345-bee5-f9aa74b873f2"],
            ["translation_id" => "aa4700d5-2008-4ced-ae7a-8ae7c36b0377", "translatable_type" => "App\Models\Description", "translatable_id" => "6bb11ee2-a18b-4345-bee5-f9aa74b873f2"],
            //96
            ["translation_id" => "d6af9cb5-df9b-4ac9-b4e3-8b75f8c2c7cd", "translatable_type" => "App\Models\Description", "translatable_id" => "6c20aab6-4452-4783-8d28-43e150826ea5"],
            ["translation_id" => "e7e029e7-1384-4db0-8b79-c59644f1b400", "translatable_type" => "App\Models\Description", "translatable_id" => "6c20aab6-4452-4783-8d28-43e150826ea5"],
            ["translation_id" => "56de847e-31cc-4087-8540-3fc3773c1711", "translatable_type" => "App\Models\Description", "translatable_id" => "6c20aab6-4452-4783-8d28-43e150826ea5"],
            //97
            ["translation_id" => "9bec8c8a-90a0-44ac-8739-7108c3b10c33", "translatable_type" => "App\Models\Description", "translatable_id" => "ce591098-8a94-48f6-b2e8-37ab0c561804"],
            ["translation_id" => "653590b6-ed91-406f-bbc3-5167745ad9a4", "translatable_type" => "App\Models\Description", "translatable_id" => "ce591098-8a94-48f6-b2e8-37ab0c561804"],
            ["translation_id" => "cf446964-e18c-40f7-b43a-854f064620a5", "translatable_type" => "App\Models\Description", "translatable_id" => "ce591098-8a94-48f6-b2e8-37ab0c561804"],
            //98
            ["translation_id" => "0f6a95c9-739d-4658-a0be-2eaab2f3a557", "translatable_type" => "App\Models\Description", "translatable_id" => "d895a26a-343e-4ec2-88fb-5031847e3e9e"],
            ["translation_id" => "203429f6-0f89-4715-9158-80851eec01a8", "translatable_type" => "App\Models\Description", "translatable_id" => "d895a26a-343e-4ec2-88fb-5031847e3e9e"],
            ["translation_id" => "7b6c0f31-efe9-4082-a5bf-e63409793cdd", "translatable_type" => "App\Models\Description", "translatable_id" => "d895a26a-343e-4ec2-88fb-5031847e3e9e"],
            //99
            ["translation_id" => "3a8a6b6a-cb31-4092-bb9d-f8eb95f1fa63", "translatable_type" => "App\Models\Description", "translatable_id" => "599c4ff2-d572-44e7-a442-3352b3a5af88"],
            ["translation_id" => "8a7e9734-aefb-457e-a888-bbc7e3641b2c", "translatable_type" => "App\Models\Description", "translatable_id" => "599c4ff2-d572-44e7-a442-3352b3a5af88"],
            ["translation_id" => "0565cb21-5c99-435e-adff-0482bf077743", "translatable_type" => "App\Models\Description", "translatable_id" => "599c4ff2-d572-44e7-a442-3352b3a5af88"],
            //100
            ["translation_id" => "dbd2c354-d74d-4d43-971a-f6a08e297317", "translatable_type" => "App\Models\Description", "translatable_id" => "24785533-0f37-4381-b276-ed4ab4baad8a"],
            ["translation_id" => "26a4aae9-7ea1-4992-8786-0af9c43186d7", "translatable_type" => "App\Models\Description", "translatable_id" => "24785533-0f37-4381-b276-ed4ab4baad8a"],
            ["translation_id" => "11eb06a5-c26a-4a1e-82ac-18feef98cbcd", "translatable_type" => "App\Models\Description", "translatable_id" => "24785533-0f37-4381-b276-ed4ab4baad8a"],
            //101
            ["translation_id" => "61c82c2d-ae6c-4ef6-9f40-745f694c18d1", "translatable_type" => "App\Models\Description", "translatable_id" => "60f5224d-c381-4f30-80bd-c4f7ad0ab2e9"],
            ["translation_id" => "bf39efc5-eee9-4af3-a716-3a41435b8bcb", "translatable_type" => "App\Models\Description", "translatable_id" => "60f5224d-c381-4f30-80bd-c4f7ad0ab2e9"],
            ["translation_id" => "212ad3b8-fb09-473a-aa63-6f1fcdece226", "translatable_type" => "App\Models\Description", "translatable_id" => "60f5224d-c381-4f30-80bd-c4f7ad0ab2e9"],
            //102
            ["translation_id" => "dc3afa39-8198-4723-8537-f398ceb0b5d3", "translatable_type" => "App\Models\Description", "translatable_id" => "fa5509b2-40ef-41e4-b6ea-9f3f929bb905"],
            ["translation_id" => "5ac6f230-bc4e-4e04-adc4-017fcf884869", "translatable_type" => "App\Models\Description", "translatable_id" => "fa5509b2-40ef-41e4-b6ea-9f3f929bb905"],
            ["translation_id" => "150545f2-c4d9-4bbe-99e7-b4e2f8e33aac", "translatable_type" => "App\Models\Description", "translatable_id" => "fa5509b2-40ef-41e4-b6ea-9f3f929bb905"],
            //103
            ["translation_id" => "4c1adaa8-0941-4939-80c6-354590fd07fa", "translatable_type" => "App\Models\Description", "translatable_id" => "6619560e-0243-4abb-bd7a-e0fecb597b13"],
            ["translation_id" => "c2ceb880-0a3c-4592-8d0c-c09dbbb1b9f9", "translatable_type" => "App\Models\Description", "translatable_id" => "6619560e-0243-4abb-bd7a-e0fecb597b13"],
            ["translation_id" => "fe8d0233-d022-4d97-b49f-b6eeae20a1a0", "translatable_type" => "App\Models\Description", "translatable_id" => "6619560e-0243-4abb-bd7a-e0fecb597b13"],
            //104
            ["translation_id" => "d39088c2-2071-49e4-b9ea-2a06eab328be", "translatable_type" => "App\Models\Description", "translatable_id" => "dba0fd91-7bac-46b8-a935-7eacccbc0f84"],
            ["translation_id" => "90a2076a-9442-4db8-a4ea-a037a5445d96", "translatable_type" => "App\Models\Description", "translatable_id" => "dba0fd91-7bac-46b8-a935-7eacccbc0f84"],
            ["translation_id" => "cefbccc8-bf24-4c57-a298-5525db0bdfb6", "translatable_type" => "App\Models\Description", "translatable_id" => "dba0fd91-7bac-46b8-a935-7eacccbc0f84"],
            //105
            ["translation_id" => "544ecb7e-7bec-4a22-a2a6-466c2cc7c530", "translatable_type" => "App\Models\Description", "translatable_id" => "e33b6ffe-c3ed-421f-859f-47d8f3ae85fa"],
            ["translation_id" => "72e8d8ec-8d5e-4bde-af3b-a117c4da2ab0", "translatable_type" => "App\Models\Description", "translatable_id" => "e33b6ffe-c3ed-421f-859f-47d8f3ae85fa"],
            ["translation_id" => "e9be067b-dfa0-423c-85cd-59551927d94e", "translatable_type" => "App\Models\Description", "translatable_id" => "e33b6ffe-c3ed-421f-859f-47d8f3ae85fa"],
            //106
            ["translation_id" => "7ecdf4fd-6898-4810-8705-7645bc0e4d6f", "translatable_type" => "App\Models\Description", "translatable_id" => "0a84f12d-3956-43da-b07b-8ac8682ee167"],
            ["translation_id" => "d4d00f1b-663a-4861-83e7-47793c9bda58", "translatable_type" => "App\Models\Description", "translatable_id" => "0a84f12d-3956-43da-b07b-8ac8682ee167"],
            ["translation_id" => "b88bbe15-2065-47bf-aa1f-96be870e6d02", "translatable_type" => "App\Models\Description", "translatable_id" => "0a84f12d-3956-43da-b07b-8ac8682ee167"],
            //107
            ["translation_id" => "72337e73-2346-4442-8906-9bafd271cec1", "translatable_type" => "App\Models\Description", "translatable_id" => "12ba29ed-1d84-419b-b699-9b75f582e911"],
            ["translation_id" => "b9cd5664-fe3f-4498-8d4d-6d9557ebc013", "translatable_type" => "App\Models\Description", "translatable_id" => "12ba29ed-1d84-419b-b699-9b75f582e911"],
            ["translation_id" => "ec28604c-08f7-4b18-98c3-8d9300fc62b8", "translatable_type" => "App\Models\Description", "translatable_id" => "12ba29ed-1d84-419b-b699-9b75f582e911"],
            //108
            ["translation_id" => "9e6fabbe-5511-4418-8632-38a158325975", "translatable_type" => "App\Models\Description", "translatable_id" => "2ddc3253-9105-45fb-a21a-83e90df54eea"],
            ["translation_id" => "d3068c1d-1473-4bc8-986d-f1b6a1ff92e4", "translatable_type" => "App\Models\Description", "translatable_id" => "2ddc3253-9105-45fb-a21a-83e90df54eea"],
            ["translation_id" => "4ba4c339-1abd-4175-b07f-a6c3f31d9f34", "translatable_type" => "App\Models\Description", "translatable_id" => "2ddc3253-9105-45fb-a21a-83e90df54eea"],
            //109
            ["translation_id" => "670ff1a9-865f-49c9-aa98-3d6eaa52d0d5", "translatable_type" => "App\Models\Description", "translatable_id" => "fae2c79b-0a52-4dcf-8576-3e670e3a9fba"],
            ["translation_id" => "88fa06f3-02d2-4dc3-ab8d-1d6fc9eb593f", "translatable_type" => "App\Models\Description", "translatable_id" => "fae2c79b-0a52-4dcf-8576-3e670e3a9fba"],
            ["translation_id" => "2ded2ac4-1e6a-4421-b7b6-b1f2fc1b5e30", "translatable_type" => "App\Models\Description", "translatable_id" => "fae2c79b-0a52-4dcf-8576-3e670e3a9fba"],
            //110
            ["translation_id" => "21bf203c-b587-4b13-b71c-aea65c2264b2", "translatable_type" => "App\Models\Description", "translatable_id" => "0fc5beb6-eb57-48e8-9f11-31eb25b77335"],
            ["translation_id" => "9cb468df-ea9d-4142-bfa8-11f1f7e59184", "translatable_type" => "App\Models\Description", "translatable_id" => "0fc5beb6-eb57-48e8-9f11-31eb25b77335"],
            ["translation_id" => "2bb68b08-cb5d-4a45-a41d-dff565c136b7", "translatable_type" => "App\Models\Description", "translatable_id" => "0fc5beb6-eb57-48e8-9f11-31eb25b77335"],
            //111
            ["translation_id" => "7cf38dcc-2e02-4960-976f-28283f548cc5", "translatable_type" => "App\Models\Description", "translatable_id" => "b6333abd-f536-43b3-b283-8820cc25c5f9"],
            ["translation_id" => "b372bc8b-d462-46d4-9b9d-c47d93cbceda", "translatable_type" => "App\Models\Description", "translatable_id" => "b6333abd-f536-43b3-b283-8820cc25c5f9"],
            ["translation_id" => "2231010e-324a-424c-8489-5549bdc1c2ae", "translatable_type" => "App\Models\Description", "translatable_id" => "b6333abd-f536-43b3-b283-8820cc25c5f9"],
            //112
            ["translation_id" => "2a148805-0629-4578-a911-174df41ee943", "translatable_type" => "App\Models\Description", "translatable_id" => "e093510d-25d4-46cf-990a-edd0b9dc9906"],
            ["translation_id" => "ff2372ec-c34a-4cc2-b1b5-7c82038aa9e2", "translatable_type" => "App\Models\Description", "translatable_id" => "e093510d-25d4-46cf-990a-edd0b9dc9906"],
            ["translation_id" => "553ed5d4-bd19-482f-8aa1-105efdc058cf", "translatable_type" => "App\Models\Description", "translatable_id" => "e093510d-25d4-46cf-990a-edd0b9dc9906"],
            //113
            ["translation_id" => "13a784fe-cc80-476a-a194-a3f7e4a2a356", "translatable_type" => "App\Models\Description", "translatable_id" => "e2ab2ffa-0811-4719-8e77-65ab534acc89"],
            ["translation_id" => "e83aa6b2-3426-4f84-ad0e-7f11237eaa54", "translatable_type" => "App\Models\Description", "translatable_id" => "e2ab2ffa-0811-4719-8e77-65ab534acc89"],
            ["translation_id" => "757a2aac-4c8f-4945-8c13-f4c2a20d3e2f", "translatable_type" => "App\Models\Description", "translatable_id" => "e2ab2ffa-0811-4719-8e77-65ab534acc89"],
            //114
            ["translation_id" => "4b47cdee-acc2-4f0b-93ec-3af3cbaf2900", "translatable_type" => "App\Models\Description", "translatable_id" => "b345d997-dbb0-4105-9fa7-25df8404135c"],
            ["translation_id" => "cd27dc1d-7920-4cd8-bf20-5105db404e37", "translatable_type" => "App\Models\Description", "translatable_id" => "b345d997-dbb0-4105-9fa7-25df8404135c"],
            ["translation_id" => "7bd50dbf-00c5-431f-8c02-7f7ab36e9d15", "translatable_type" => "App\Models\Description", "translatable_id" => "b345d997-dbb0-4105-9fa7-25df8404135c"],
            //115
            ["translation_id" => "a41fb553-fc8c-4d49-9be6-eaae52f3f3de", "translatable_type" => "App\Models\Description", "translatable_id" => "66b3bc45-7aff-441f-b8a3-ddc4e6ff6f2f"],
            ["translation_id" => "afd0c69e-e316-4585-ba2c-ed9ef5f238db", "translatable_type" => "App\Models\Description", "translatable_id" => "66b3bc45-7aff-441f-b8a3-ddc4e6ff6f2f"],
            ["translation_id" => "2f153a99-058d-4ffc-8faf-4d262280a61c", "translatable_type" => "App\Models\Description", "translatable_id" => "66b3bc45-7aff-441f-b8a3-ddc4e6ff6f2f"],
            //116
            ["translation_id" => "7a412a95-6478-442e-bc43-c7c6860bb205", "translatable_type" => "App\Models\Description", "translatable_id" => "27b1fa5c-24c7-481f-a076-9bff7faa4c2d"],
            ["translation_id" => "d07add44-b821-4db8-945d-1959b1b9f92c", "translatable_type" => "App\Models\Description", "translatable_id" => "27b1fa5c-24c7-481f-a076-9bff7faa4c2d"],
            ["translation_id" => "3a4cf53d-8d1c-4dbd-9130-ddb6541dd191", "translatable_type" => "App\Models\Description", "translatable_id" => "27b1fa5c-24c7-481f-a076-9bff7faa4c2d"],
            //117
            ["translation_id" => "23462e91-d106-4037-887f-30b7dd41988a", "translatable_type" => "App\Models\Description", "translatable_id" => "f743b626-f475-41b3-9fc3-dc4754a5b65b"],
            ["translation_id" => "fed7ffe5-f3fd-4174-860b-ba0aeb0a3224", "translatable_type" => "App\Models\Description", "translatable_id" => "f743b626-f475-41b3-9fc3-dc4754a5b65b"],
            ["translation_id" => "c203ba0d-73d7-49d6-abd7-14633f5244d7", "translatable_type" => "App\Models\Description", "translatable_id" => "f743b626-f475-41b3-9fc3-dc4754a5b65b"],
            //118
            ["translation_id" => "dac334df-0ca5-4d3b-acbb-ec0639178511", "translatable_type" => "App\Models\Description", "translatable_id" => "07348d3a-2d77-4bcd-9dc7-d1f8353d1eaf"],
            ["translation_id" => "630812d0-8764-4ba0-b0a8-0f82eaa29878", "translatable_type" => "App\Models\Description", "translatable_id" => "07348d3a-2d77-4bcd-9dc7-d1f8353d1eaf"],
            ["translation_id" => "ae3e6071-3fc4-4e0b-a797-8ee571b80d14", "translatable_type" => "App\Models\Description", "translatable_id" => "07348d3a-2d77-4bcd-9dc7-d1f8353d1eaf"],
            //119
            ["translation_id" => "7d8a5545-3801-4f7d-8a81-645c35a80ac8", "translatable_type" => "App\Models\Description", "translatable_id" => "7682e90d-6140-4ca6-ac08-1e2a5f40868f"],
            ["translation_id" => "8eeff9c4-a0fb-4a05-962f-8af347841be4", "translatable_type" => "App\Models\Description", "translatable_id" => "7682e90d-6140-4ca6-ac08-1e2a5f40868f"],
            ["translation_id" => "5f9cff2b-6230-4b8f-be9a-00fc8743637f", "translatable_type" => "App\Models\Description", "translatable_id" => "7682e90d-6140-4ca6-ac08-1e2a5f40868f"],
            //120
            ["translation_id" => "fbc11de7-db83-40b7-bb42-8afd3e06f9f4", "translatable_type" => "App\Models\Description", "translatable_id" => "28b18139-cc6f-44a0-9131-ef3aa1ed0e39"],
            ["translation_id" => "1f4d7459-9e8d-432b-93ec-b8b1f5920a1b", "translatable_type" => "App\Models\Description", "translatable_id" => "28b18139-cc6f-44a0-9131-ef3aa1ed0e39"],
            ["translation_id" => "4225263a-e034-4025-92d2-f142129d045e", "translatable_type" => "App\Models\Description", "translatable_id" => "28b18139-cc6f-44a0-9131-ef3aa1ed0e39"],
            //121
            ["translation_id" => "7f5e3bd3-5067-4294-a510-24d70d12dfdc", "translatable_type" => "App\Models\Description", "translatable_id" => "a46a7e7e-68de-4a4d-b96f-8b37760b8041"],
            ["translation_id" => "11f743f2-353f-468c-9634-eb70c4162210", "translatable_type" => "App\Models\Description", "translatable_id" => "a46a7e7e-68de-4a4d-b96f-8b37760b8041"],
            ["translation_id" => "4bf9a4d4-1a48-4dcc-a1ec-23dd3d9b0b88", "translatable_type" => "App\Models\Description", "translatable_id" => "a46a7e7e-68de-4a4d-b96f-8b37760b8041"],
            //122
            ["translation_id" => "f189bc20-bfde-4a6d-bd32-e72cc8f2b356", "translatable_type" => "App\Models\Description", "translatable_id" => "43f6d70e-715e-408b-b19b-b0358eb3d40a"],
            ["translation_id" => "0880a932-3559-4cd5-b4cf-c24515780579", "translatable_type" => "App\Models\Description", "translatable_id" => "43f6d70e-715e-408b-b19b-b0358eb3d40a"],
            ["translation_id" => "f2431e55-15f7-4b89-bb9f-04fb8f23cf27", "translatable_type" => "App\Models\Description", "translatable_id" => "43f6d70e-715e-408b-b19b-b0358eb3d40a"],
            //123
            ["translation_id" => "39b5acaa-3f26-4e24-83c1-528406845884", "translatable_type" => "App\Models\Description", "translatable_id" => "acbca925-492e-4853-a49b-de0abc5a2a87"],
            ["translation_id" => "723a0f15-ba0b-4d1d-ae3f-8e17e40b52a8", "translatable_type" => "App\Models\Description", "translatable_id" => "acbca925-492e-4853-a49b-de0abc5a2a87"],
            ["translation_id" => "b9760709-3ea0-4523-b47c-dc8399724c5a", "translatable_type" => "App\Models\Description", "translatable_id" => "acbca925-492e-4853-a49b-de0abc5a2a87"],
            //124
            ["translation_id" => "9bce0698-55f9-4d76-b4b7-8576dd173860", "translatable_type" => "App\Models\Description", "translatable_id" => "203b8e6c-d6f1-4bfd-8455-41f27ae9f7ba"],
            ["translation_id" => "6cfe310b-1304-4f6c-aee2-2503ac3f84b0", "translatable_type" => "App\Models\Description", "translatable_id" => "203b8e6c-d6f1-4bfd-8455-41f27ae9f7ba"],
            ["translation_id" => "7b1d5752-a8a1-43e0-ab7c-977f32ffe31f", "translatable_type" => "App\Models\Description", "translatable_id" => "203b8e6c-d6f1-4bfd-8455-41f27ae9f7ba"],
            //125
            ["translation_id" => "98878194-25c3-486c-9339-dac1be438841", "translatable_type" => "App\Models\Description", "translatable_id" => "ed35907a-3c3e-4ee6-8bbe-5cd8a8a4ea74"],
            ["translation_id" => "2e725c6b-86eb-4863-8b29-b3fc77177819", "translatable_type" => "App\Models\Description", "translatable_id" => "ed35907a-3c3e-4ee6-8bbe-5cd8a8a4ea74"],
            ["translation_id" => "0f73bcd3-b0d8-4347-9128-441c28cd5bd5", "translatable_type" => "App\Models\Description", "translatable_id" => "ed35907a-3c3e-4ee6-8bbe-5cd8a8a4ea74"],
            //126
            ["translation_id" => "546c040e-1098-4853-ba50-7131f694e159", "translatable_type" => "App\Models\Description", "translatable_id" => "efba4993-65e0-4b57-b68a-c9babad88227"],
            ["translation_id" => "20227e51-9b86-4db6-a415-4b5f7c688751", "translatable_type" => "App\Models\Description", "translatable_id" => "efba4993-65e0-4b57-b68a-c9babad88227"],
            ["translation_id" => "ce31ef5e-3ca7-4f7a-a4e7-ce208340689f", "translatable_type" => "App\Models\Description", "translatable_id" => "efba4993-65e0-4b57-b68a-c9babad88227"],
            //127
            ["translation_id" => "0fc6b82d-eec0-4738-bbf5-f1ca8782752f", "translatable_type" => "App\Models\Description", "translatable_id" => "df541fab-5b38-461d-a491-79427ca69099"],
            ["translation_id" => "6bc21e7d-a626-486f-a385-6791bb8065e0", "translatable_type" => "App\Models\Description", "translatable_id" => "df541fab-5b38-461d-a491-79427ca69099"],
            ["translation_id" => "002be11c-e584-4520-8c15-4d9b25c10115", "translatable_type" => "App\Models\Description", "translatable_id" => "df541fab-5b38-461d-a491-79427ca69099"],
            //128
            ["translation_id" => "e932e502-8d03-4f0c-85b9-6fbc6b094290", "translatable_type" => "App\Models\Description", "translatable_id" => "5c69eda3-ca81-4272-a35f-a1b9bd3b5101"],
            ["translation_id" => "38e0dbdf-10f4-4e75-9012-ee5758ff51a5", "translatable_type" => "App\Models\Description", "translatable_id" => "5c69eda3-ca81-4272-a35f-a1b9bd3b5101"],
            ["translation_id" => "c3ebab94-534b-47ad-9473-501243fa1975", "translatable_type" => "App\Models\Description", "translatable_id" => "5c69eda3-ca81-4272-a35f-a1b9bd3b5101"],
            //129
            ["translation_id" => "cd3da9bc-d88e-4908-99fb-3049c85035fb", "translatable_type" => "App\Models\Description", "translatable_id" => "a18dce92-4359-4e67-971e-35ddcaadfe48"],
            ["translation_id" => "d239ced2-6b9c-4fc6-bd8a-8f6d4f087b5f", "translatable_type" => "App\Models\Description", "translatable_id" => "a18dce92-4359-4e67-971e-35ddcaadfe48"],
            ["translation_id" => "41a8f8cb-ad35-46d5-b292-85e4ae626136", "translatable_type" => "App\Models\Description", "translatable_id" => "a18dce92-4359-4e67-971e-35ddcaadfe48"],
            //130
            ["translation_id" => "7f3ca488-70a8-49e6-a60e-6a115b3caadd", "translatable_type" => "App\Models\Description", "translatable_id" => "f5a5d22d-c22d-481a-9034-894c46984e61"],
            ["translation_id" => "6c7271fb-89db-4462-80a5-1f9592850339", "translatable_type" => "App\Models\Description", "translatable_id" => "f5a5d22d-c22d-481a-9034-894c46984e61"],
            ["translation_id" => "fa6989b7-e047-485f-af9d-494cd2994409", "translatable_type" => "App\Models\Description", "translatable_id" => "f5a5d22d-c22d-481a-9034-894c46984e61"],
            //131
            ["translation_id" => "44113137-6103-4882-a7c1-e7b132d71165", "translatable_type" => "App\Models\Description", "translatable_id" => "46ba97cf-fb90-4bfd-bdaa-4f8291084c2b"],
            ["translation_id" => "feeac376-367f-46eb-b542-cbe315793c83", "translatable_type" => "App\Models\Description", "translatable_id" => "46ba97cf-fb90-4bfd-bdaa-4f8291084c2b"],
            ["translation_id" => "8db83cfd-3707-4752-a829-87e9b2253da7", "translatable_type" => "App\Models\Description", "translatable_id" => "46ba97cf-fb90-4bfd-bdaa-4f8291084c2b"],
            //132
            ["translation_id" => "0de13748-27a3-487d-986c-88fb5ea20719", "translatable_type" => "App\Models\Description", "translatable_id" => "e4037681-e827-4cff-a38e-08d7f23b5d5e"],
            ["translation_id" => "ded8483e-18ac-4274-b8a3-9eea328ef548", "translatable_type" => "App\Models\Description", "translatable_id" => "e4037681-e827-4cff-a38e-08d7f23b5d5e"],
            ["translation_id" => "0be0ed2f-66d2-4020-b35b-1930178d6d99", "translatable_type" => "App\Models\Description", "translatable_id" => "e4037681-e827-4cff-a38e-08d7f23b5d5e"],
            //133
            ["translation_id" => "24ed5865-5737-4443-a42a-d2844ddffc2e", "translatable_type" => "App\Models\Description", "translatable_id" => "9485367b-4ec1-44b5-96aa-41b4f461e582"],
            ["translation_id" => "bb998e19-1bd2-4762-9664-c67f296bde14", "translatable_type" => "App\Models\Description", "translatable_id" => "9485367b-4ec1-44b5-96aa-41b4f461e582"],
            ["translation_id" => "564578c2-c583-48ea-a1c8-7fb8a3fc35c5", "translatable_type" => "App\Models\Description", "translatable_id" => "9485367b-4ec1-44b5-96aa-41b4f461e582"],
            //134
            ["translation_id" => "7c4121c6-fd68-42db-b0ef-604cc2be0e69", "translatable_type" => "App\Models\Description", "translatable_id" => "2642ec8f-ca9d-4cc7-96cf-0d1cdbfb6dde"],
            ["translation_id" => "ce916417-6825-44ab-81b7-7927d9020154", "translatable_type" => "App\Models\Description", "translatable_id" => "2642ec8f-ca9d-4cc7-96cf-0d1cdbfb6dde"],
            ["translation_id" => "3d8f66dd-9f48-46a1-8603-b2922471878d", "translatable_type" => "App\Models\Description", "translatable_id" => "2642ec8f-ca9d-4cc7-96cf-0d1cdbfb6dde"],
            //135
            ["translation_id" => "5f273693-a44a-4843-92a5-5e52ed4a58aa", "translatable_type" => "App\Models\Description", "translatable_id" => "203a32b7-00bd-4bf8-b728-081427e7ee9d"],
            ["translation_id" => "dce3dc8e-48c1-49ec-8396-f5820045ecd3", "translatable_type" => "App\Models\Description", "translatable_id" => "203a32b7-00bd-4bf8-b728-081427e7ee9d"],
            ["translation_id" => "2163073d-90e4-41b0-b5b2-fa9fd298a564", "translatable_type" => "App\Models\Description", "translatable_id" => "203a32b7-00bd-4bf8-b728-081427e7ee9d"],
            //136
            ["translation_id" => "b0c1bbf9-ac0e-4c92-8f2a-8f9e1213c6e3", "translatable_type" => "App\Models\Description", "translatable_id" => "6f15f607-17ec-4a53-bc4c-a3bc56fe15f7"],
            ["translation_id" => "dffe1c9c-6016-4e78-b907-2611d617d5a1", "translatable_type" => "App\Models\Description", "translatable_id" => "6f15f607-17ec-4a53-bc4c-a3bc56fe15f7"],
            ["translation_id" => "b76b2f54-579a-42a1-8bf5-c2406958e5fd", "translatable_type" => "App\Models\Description", "translatable_id" => "6f15f607-17ec-4a53-bc4c-a3bc56fe15f7"],
            //137
            ["translation_id" => "42d2bb00-3b97-4b49-b6fc-f795fc84fc7d", "translatable_type" => "App\Models\Description", "translatable_id" => "0de970be-a01a-4472-b0da-e4512c3bd348"],
            ["translation_id" => "9efb5e2e-9517-4472-8886-360ee5f9dad9", "translatable_type" => "App\Models\Description", "translatable_id" => "0de970be-a01a-4472-b0da-e4512c3bd348"],
            ["translation_id" => "d56fa0f5-6002-46a7-b785-8e5d06ec19ad", "translatable_type" => "App\Models\Description", "translatable_id" => "0de970be-a01a-4472-b0da-e4512c3bd348"],
            //138
            ["translation_id" => "98646a94-96c6-4e73-81e1-45b0121497ae", "translatable_type" => "App\Models\Description", "translatable_id" => "924f5694-5ff8-4fbd-b323-907a328e01ec"],
            ["translation_id" => "ea12cb3c-e425-4c4e-b2a5-7a6493d8d4ed", "translatable_type" => "App\Models\Description", "translatable_id" => "924f5694-5ff8-4fbd-b323-907a328e01ec"],
            ["translation_id" => "7cf89e14-1a61-47bd-9036-7e8e49c7f952", "translatable_type" => "App\Models\Description", "translatable_id" => "924f5694-5ff8-4fbd-b323-907a328e01ec"],
            //139
            ["translation_id" => "33d835eb-c4d1-4e4f-a6d8-0b40a7d155b6", "translatable_type" => "App\Models\Description", "translatable_id" => "9d5baf1a-abf2-4202-a253-807e75462df8"],
            ["translation_id" => "c7f58c79-590d-40d0-b14f-ef6de3ef985c", "translatable_type" => "App\Models\Description", "translatable_id" => "9d5baf1a-abf2-4202-a253-807e75462df8"],
            ["translation_id" => "9f4bb12b-0296-48f3-b6d9-ad150c907c06", "translatable_type" => "App\Models\Description", "translatable_id" => "9d5baf1a-abf2-4202-a253-807e75462df8"],
            //140
            ["translation_id" => "5a4fff0e-f7e8-4b03-b225-4817bdb8df42", "translatable_type" => "App\Models\Description", "translatable_id" => "38d65add-2ef5-4a3d-9e8a-a986493fb07c"],
            ["translation_id" => "f705a3e8-eb20-460f-bab7-d49f9213e6be", "translatable_type" => "App\Models\Description", "translatable_id" => "38d65add-2ef5-4a3d-9e8a-a986493fb07c"],
            ["translation_id" => "142c6006-f965-4de9-9006-fad39a6b0c85", "translatable_type" => "App\Models\Description", "translatable_id" => "38d65add-2ef5-4a3d-9e8a-a986493fb07c"],
            //141
            ["translation_id" => "053e7ee1-6fa6-4dcb-bb12-78972e41ab48", "translatable_type" => "App\Models\Description", "translatable_id" => "f1098bd0-4e82-477a-9ed2-dd444a861fb0"],
            ["translation_id" => "f4d6dd79-987a-4e2e-b6a8-563f897c3145", "translatable_type" => "App\Models\Description", "translatable_id" => "f1098bd0-4e82-477a-9ed2-dd444a861fb0"],
            ["translation_id" => "657b897b-cb92-4d73-b770-dbc9ca60220c", "translatable_type" => "App\Models\Description", "translatable_id" => "f1098bd0-4e82-477a-9ed2-dd444a861fb0"],
            //142
            ["translation_id" => "e6ca4338-ffca-4421-9064-ac051f2322fd", "translatable_type" => "App\Models\Description", "translatable_id" => "89d13b05-f7a7-4b49-91b0-11518cabeffe"],
            ["translation_id" => "0790c407-f93c-40dd-8e8f-5222088086c9", "translatable_type" => "App\Models\Description", "translatable_id" => "89d13b05-f7a7-4b49-91b0-11518cabeffe"],
            ["translation_id" => "f715fd26-8b21-4a0f-a150-649be4b67d23", "translatable_type" => "App\Models\Description", "translatable_id" => "89d13b05-f7a7-4b49-91b0-11518cabeffe"],
            //143
            ["translation_id" => "d5ce712d-15b1-46aa-b275-4400901f5ee0", "translatable_type" => "App\Models\Description", "translatable_id" => "c241d9d7-eec9-4b89-aeb7-feeccd211cb1"],
            ["translation_id" => "ca5d60b0-b169-44a6-a625-ead9708f36f7", "translatable_type" => "App\Models\Description", "translatable_id" => "c241d9d7-eec9-4b89-aeb7-feeccd211cb1"],
            ["translation_id" => "9532d707-04c8-4dd6-8a0d-ef7f1dc1e240", "translatable_type" => "App\Models\Description", "translatable_id" => "c241d9d7-eec9-4b89-aeb7-feeccd211cb1"],
            //144
            ["translation_id" => "a23781ce-4bc2-4962-8c57-24b42e719f4a", "translatable_type" => "App\Models\Description", "translatable_id" => "9a8efc86-9848-4efe-8060-13d2eb962885"],
            ["translation_id" => "b8fd02e7-c246-4f0c-80fb-ed50b85d1372", "translatable_type" => "App\Models\Description", "translatable_id" => "9a8efc86-9848-4efe-8060-13d2eb962885"],
            ["translation_id" => "5e0f8059-450f-4a1a-9c13-2460242c5ec8", "translatable_type" => "App\Models\Description", "translatable_id" => "9a8efc86-9848-4efe-8060-13d2eb962885"],
            //145
            ["translation_id" => "b1c89c1e-3c0b-4e4e-9b95-31c75126ef70", "translatable_type" => "App\Models\Description", "translatable_id" => "9843b5c4-91eb-4b3a-ad06-772a4931a4e8"],
            ["translation_id" => "d910205c-526e-4252-8003-ae497dd1f279", "translatable_type" => "App\Models\Description", "translatable_id" => "9843b5c4-91eb-4b3a-ad06-772a4931a4e8"],
            ["translation_id" => "2e4ece87-b8b0-415a-ba3c-66d0282d428e", "translatable_type" => "App\Models\Description", "translatable_id" => "9843b5c4-91eb-4b3a-ad06-772a4931a4e8"],
            //146
            ["translation_id" => "c2938a80-8be7-4bd0-9de0-7faf7f7aff2d", "translatable_type" => "App\Models\Description", "translatable_id" => "df9d949a-85e7-4d6b-97fa-cec01c03bcb0"],
            ["translation_id" => "6075455b-91d3-4ab5-9ff5-e11ae4f3deac", "translatable_type" => "App\Models\Description", "translatable_id" => "df9d949a-85e7-4d6b-97fa-cec01c03bcb0"],
            ["translation_id" => "398db38a-c30c-4f8c-95b0-1c1f2a5e35af", "translatable_type" => "App\Models\Description", "translatable_id" => "df9d949a-85e7-4d6b-97fa-cec01c03bcb0"],
            //147
            ["translation_id" => "625e8c23-d990-4479-b275-6073c2258cd6", "translatable_type" => "App\Models\Description", "translatable_id" => "b4b21960-882e-4b5c-a30f-055e65fcd036"],
            ["translation_id" => "3b86eeac-1645-47d4-8f61-fbca7ae18ea6", "translatable_type" => "App\Models\Description", "translatable_id" => "b4b21960-882e-4b5c-a30f-055e65fcd036"],
            ["translation_id" => "c13e55ec-55d0-40f1-80f6-176b5b3e6e69", "translatable_type" => "App\Models\Description", "translatable_id" => "b4b21960-882e-4b5c-a30f-055e65fcd036"],
            //148
            ["translation_id" => "053c4839-4c65-4a89-9fc4-dd80c810a0c9", "translatable_type" => "App\Models\Description", "translatable_id" => "2e21aa74-18e5-4b0e-bb86-73d8fa0f06f0"],
            ["translation_id" => "b026970c-a37b-47c2-896d-d572c0489298", "translatable_type" => "App\Models\Description", "translatable_id" => "2e21aa74-18e5-4b0e-bb86-73d8fa0f06f0"],
            ["translation_id" => "1fe46734-8cd4-4c94-af76-8f84b6a9d094", "translatable_type" => "App\Models\Description", "translatable_id" => "2e21aa74-18e5-4b0e-bb86-73d8fa0f06f0"],
            //149
            ["translation_id" => "42aa2191-e140-4469-8c4f-16b855dbc57a", "translatable_type" => "App\Models\Description", "translatable_id" => "ef49acdb-e2b4-4b13-844b-949436242977"],
            ["translation_id" => "b123fe65-49f5-4846-b658-fcd903b25bc2", "translatable_type" => "App\Models\Description", "translatable_id" => "ef49acdb-e2b4-4b13-844b-949436242977"],
            ["translation_id" => "fe6040ab-8c69-4c51-9e53-9938ac6fa1ce", "translatable_type" => "App\Models\Description", "translatable_id" => "ef49acdb-e2b4-4b13-844b-949436242977"],
            //150
            ["translation_id" => "d441a796-0650-4a82-9ef9-ac94a14deb32", "translatable_type" => "App\Models\Description", "translatable_id" => "aacd2967-1ee8-45d8-900a-3e1ed6cbaf1d"],
            ["translation_id" => "ad915ed3-c7ea-4fcb-b21e-a696d6f2adc4", "translatable_type" => "App\Models\Description", "translatable_id" => "aacd2967-1ee8-45d8-900a-3e1ed6cbaf1d"],
            ["translation_id" => "7416a370-dd03-46df-a280-7c3aff145c1c", "translatable_type" => "App\Models\Description", "translatable_id" => "aacd2967-1ee8-45d8-900a-3e1ed6cbaf1d"],
            //151
            ["translation_id" => "bf129417-7eb6-4b57-9e5b-c68edcbf3d57", "translatable_type" => "App\Models\Description", "translatable_id" => "8ae5df83-0cb3-4b81-adcc-a928117d0ec2"],
            ["translation_id" => "119e8181-3bc6-4350-8d5d-4a3d6bd499b0", "translatable_type" => "App\Models\Description", "translatable_id" => "8ae5df83-0cb3-4b81-adcc-a928117d0ec2"],
            ["translation_id" => "7d016ee8-16f9-41cf-802a-ba2d71b7b083", "translatable_type" => "App\Models\Description", "translatable_id" => "8ae5df83-0cb3-4b81-adcc-a928117d0ec2"],
            //152
            ["translation_id" => "f7ce2cc8-3ce9-4e53-9f73-4cc80a6233f3", "translatable_type" => "App\Models\Description", "translatable_id" => "9aca9d54-07b4-490d-ab16-1a77a809b938"],
            ["translation_id" => "b3273618-83c6-4f2b-8308-50ac5c988db4", "translatable_type" => "App\Models\Description", "translatable_id" => "9aca9d54-07b4-490d-ab16-1a77a809b938"],
            ["translation_id" => "42ad14b6-b514-45b8-9b93-ebe0a936afd1", "translatable_type" => "App\Models\Description", "translatable_id" => "9aca9d54-07b4-490d-ab16-1a77a809b938"],
            //153
            ["translation_id" => "98e234e3-32d9-4543-90a1-4c507ff800cd", "translatable_type" => "App\Models\Description", "translatable_id" => "5bd56375-bf3a-419a-814c-29989f0be81c"],
            ["translation_id" => "971a6832-c25a-408b-b65b-ff585d7c4ad2", "translatable_type" => "App\Models\Description", "translatable_id" => "5bd56375-bf3a-419a-814c-29989f0be81c"],
            ["translation_id" => "69dbde7a-12db-48d4-abe7-6d19c4c62cdd", "translatable_type" => "App\Models\Description", "translatable_id" => "5bd56375-bf3a-419a-814c-29989f0be81c"],
            //154
            ["translation_id" => "3a599351-1034-449b-b704-413a7a44a594", "translatable_type" => "App\Models\Description", "translatable_id" => "76c4107a-49c5-4d71-9090-67f4750950ca"],
            ["translation_id" => "b58f5652-744c-47c1-b8cd-a156e252576c", "translatable_type" => "App\Models\Description", "translatable_id" => "76c4107a-49c5-4d71-9090-67f4750950ca"],
            ["translation_id" => "570fe3db-f9c0-4f68-8624-fb2eb4b20590", "translatable_type" => "App\Models\Description", "translatable_id" => "76c4107a-49c5-4d71-9090-67f4750950ca"],
            //155
            ["translation_id" => "738066e2-df78-4a7a-b8b9-e833fc8e66fe", "translatable_type" => "App\Models\Description", "translatable_id" => "8c14b961-669a-4b37-9f00-2676e1cce9a1"],
            ["translation_id" => "2faba27f-4137-4f43-a431-c74813e08580", "translatable_type" => "App\Models\Description", "translatable_id" => "8c14b961-669a-4b37-9f00-2676e1cce9a1"],
            ["translation_id" => "dad91575-9c56-42a5-b913-4cd127a0c2f8", "translatable_type" => "App\Models\Description", "translatable_id" => "8c14b961-669a-4b37-9f00-2676e1cce9a1"],
            //156
            ["translation_id" => "58e81a9a-5fbd-47fd-b9bd-96def5ad8c5a", "translatable_type" => "App\Models\Description", "translatable_id" => "1d36f8da-5350-403a-9976-192461848e69"],
            ["translation_id" => "f694eb3e-33c0-4aa0-bda0-763f911d24ca", "translatable_type" => "App\Models\Description", "translatable_id" => "1d36f8da-5350-403a-9976-192461848e69"],
            ["translation_id" => "0cdb4edf-c316-4ddf-96fc-e94df487c817", "translatable_type" => "App\Models\Description", "translatable_id" => "1d36f8da-5350-403a-9976-192461848e69"],
            //157
            ["translation_id" => "f2a211ae-7fa6-4bac-b558-07d60ffd964b", "translatable_type" => "App\Models\Description", "translatable_id" => "274951c7-4d23-41a2-b4b6-5c0152f1151d"],
            ["translation_id" => "c36fdb7c-5c2c-4f88-972c-0d07e89225f7", "translatable_type" => "App\Models\Description", "translatable_id" => "274951c7-4d23-41a2-b4b6-5c0152f1151d"],
            ["translation_id" => "3c95b499-b7a6-4f13-8d43-606adbaf5b41", "translatable_type" => "App\Models\Description", "translatable_id" => "274951c7-4d23-41a2-b4b6-5c0152f1151d"],
            //158
            ["translation_id" => "6a3f5ec9-fe7c-4453-876c-0508864203db", "translatable_type" => "App\Models\Description", "translatable_id" => "05b67270-d675-439f-a2d1-1f720054f848"],
            ["translation_id" => "3b5c0e77-3064-4497-87dc-f83d966235ac", "translatable_type" => "App\Models\Description", "translatable_id" => "05b67270-d675-439f-a2d1-1f720054f848"],
            ["translation_id" => "51b3136e-6641-48cf-b79a-190311be1569", "translatable_type" => "App\Models\Description", "translatable_id" => "05b67270-d675-439f-a2d1-1f720054f848"],
            //159
            ["translation_id" => "f8dfedaf-ceeb-40af-9520-735ad9d17871", "translatable_type" => "App\Models\Description", "translatable_id" => "6c090f5f-30bb-4be0-adec-f10551b57600"],
            ["translation_id" => "febe249d-78a5-4a65-8c5b-b675595cd780", "translatable_type" => "App\Models\Description", "translatable_id" => "6c090f5f-30bb-4be0-adec-f10551b57600"],
            ["translation_id" => "e116421a-09f7-48e8-9284-f31dc4525f5e", "translatable_type" => "App\Models\Description", "translatable_id" => "6c090f5f-30bb-4be0-adec-f10551b57600"],
            //160
            ["translation_id" => "64a4afbd-3d37-4e27-b653-374e7307060f", "translatable_type" => "App\Models\Description", "translatable_id" => "7d69986d-d5c9-4bdd-8a42-3535223d2513"],
            ["translation_id" => "45bb575a-6fc6-4770-ae89-a92aa94c58a9", "translatable_type" => "App\Models\Description", "translatable_id" => "7d69986d-d5c9-4bdd-8a42-3535223d2513"],
            ["translation_id" => "0af88438-f083-407f-a19a-e3892d60ec3c", "translatable_type" => "App\Models\Description", "translatable_id" => "7d69986d-d5c9-4bdd-8a42-3535223d2513"],
            //161
            ["translation_id" => "9aa32f28-cf6a-496c-a943-8613337f5547", "translatable_type" => "App\Models\Description", "translatable_id" => "839602b8-74c3-4908-b061-4fda5f2b33ac"],
            ["translation_id" => "21097890-b43d-40d7-9ba8-c21858992e98", "translatable_type" => "App\Models\Description", "translatable_id" => "839602b8-74c3-4908-b061-4fda5f2b33ac"],
            ["translation_id" => "6c2e3855-9cff-4c5b-b327-797bc9bbc10f", "translatable_type" => "App\Models\Description", "translatable_id" => "839602b8-74c3-4908-b061-4fda5f2b33ac"],
            //162
            ["translation_id" => "44ef8c2a-bc56-45b9-9ad5-8ecda6191b66", "translatable_type" => "App\Models\Description", "translatable_id" => "62065df8-efcd-4dc0-8ed1-cb95ba187782"],
            ["translation_id" => "d374b0f1-fd56-4b06-b2fc-e0855e717903", "translatable_type" => "App\Models\Description", "translatable_id" => "62065df8-efcd-4dc0-8ed1-cb95ba187782"],
            ["translation_id" => "24422de4-eab1-4c57-94c4-d45fbcbd4aa5", "translatable_type" => "App\Models\Description", "translatable_id" => "62065df8-efcd-4dc0-8ed1-cb95ba187782"],
            //163
            ["translation_id" => "fe7520e6-fb45-42fa-a880-f16593868129", "translatable_type" => "App\Models\Description", "translatable_id" => "aa5b90e8-ca92-4b21-b892-5b646b62fc07"],
            ["translation_id" => "9c67af59-2d23-4c6d-a07f-31a3bac169aa", "translatable_type" => "App\Models\Description", "translatable_id" => "aa5b90e8-ca92-4b21-b892-5b646b62fc07"],
            ["translation_id" => "341d9f01-2148-452e-abb2-2ae88faee743", "translatable_type" => "App\Models\Description", "translatable_id" => "aa5b90e8-ca92-4b21-b892-5b646b62fc07"],
            //164
            ["translation_id" => "12557731-7b9c-4c77-a99b-345ba73b4685", "translatable_type" => "App\Models\Description", "translatable_id" => "cbeaae25-0f4b-4409-a566-9337cb2571b1"],
            ["translation_id" => "656fbe0b-617f-4ef4-9514-8ccb7d799cb3", "translatable_type" => "App\Models\Description", "translatable_id" => "cbeaae25-0f4b-4409-a566-9337cb2571b1"],
            ["translation_id" => "63d75947-8015-426c-9e02-5b4d8e288155", "translatable_type" => "App\Models\Description", "translatable_id" => "cbeaae25-0f4b-4409-a566-9337cb2571b1"],
            //165
            ["translation_id" => "4f8749b8-3f86-4efe-8117-991d5f71f666", "translatable_type" => "App\Models\Description", "translatable_id" => "678f7311-ec2a-483d-b39d-511f711b3b5e"],
            ["translation_id" => "518ce83c-5773-4cba-9956-1e787562be03", "translatable_type" => "App\Models\Description", "translatable_id" => "678f7311-ec2a-483d-b39d-511f711b3b5e"],
            ["translation_id" => "017acc89-2dc3-4faf-a96d-cb69e01f2975", "translatable_type" => "App\Models\Description", "translatable_id" => "678f7311-ec2a-483d-b39d-511f711b3b5e"],
            //166
            ["translation_id" => "8ade4bd0-a9ca-41df-a782-51cc0337bec0", "translatable_type" => "App\Models\Description", "translatable_id" => "380bdd36-f3b0-4569-8087-cec394769603"],
            ["translation_id" => "d350682d-2c0d-4543-8029-2eb74c580c68", "translatable_type" => "App\Models\Description", "translatable_id" => "380bdd36-f3b0-4569-8087-cec394769603"],
            ["translation_id" => "f32ddc0d-60db-4212-8197-171b9a5d90d8", "translatable_type" => "App\Models\Description", "translatable_id" => "380bdd36-f3b0-4569-8087-cec394769603"],
            //167
            ["translation_id" => "aefbaab1-dff9-476b-bc0c-5d366f6efa2b", "translatable_type" => "App\Models\Description", "translatable_id" => "6847b932-f1ac-41fa-abb2-db93555dcebf"],
            ["translation_id" => "ad68f3af-95e5-439c-93e3-4f6ed393db09", "translatable_type" => "App\Models\Description", "translatable_id" => "6847b932-f1ac-41fa-abb2-db93555dcebf"],
            ["translation_id" => "bde7e1b2-7982-4b39-936f-4a936607b054", "translatable_type" => "App\Models\Description", "translatable_id" => "6847b932-f1ac-41fa-abb2-db93555dcebf"],
            //168
            ["translation_id" => "01ea766b-6335-464f-a4f9-f00209d8b1cc", "translatable_type" => "App\Models\Description", "translatable_id" => "3fc38ae5-cd5b-4387-85c7-a588d385d505"],
            ["translation_id" => "1e18656a-a9f6-4480-b132-bbdc8398f5de", "translatable_type" => "App\Models\Description", "translatable_id" => "3fc38ae5-cd5b-4387-85c7-a588d385d505"],
            ["translation_id" => "4ed4c330-7def-419a-ad33-821e2b8bf931", "translatable_type" => "App\Models\Description", "translatable_id" => "3fc38ae5-cd5b-4387-85c7-a588d385d505"],
            //169
            ["translation_id" => "6ab27e4e-4ad6-4e25-8563-68e04a981c9c", "translatable_type" => "App\Models\Description", "translatable_id" => "3f68add7-3c14-4165-963a-29ee3e8cfaf2"],
            ["translation_id" => "d3d8f5e4-7616-46c7-9024-f84516d9bec7", "translatable_type" => "App\Models\Description", "translatable_id" => "3f68add7-3c14-4165-963a-29ee3e8cfaf2"],
            ["translation_id" => "8e48a171-a7d8-40b9-9e61-ac6130237da7", "translatable_type" => "App\Models\Description", "translatable_id" => "3f68add7-3c14-4165-963a-29ee3e8cfaf2"],
            //170
            ["translation_id" => "44cd9ad7-13a2-428a-a959-0040889b4018", "translatable_type" => "App\Models\Description", "translatable_id" => "e6ff3e11-921b-483d-8248-2c2c866aec36"],
            ["translation_id" => "407bfa0d-cf3f-4ac3-86bd-bd300f59a7c5", "translatable_type" => "App\Models\Description", "translatable_id" => "e6ff3e11-921b-483d-8248-2c2c866aec36"],
            ["translation_id" => "aca84f85-0dee-49d7-8a88-5628e5168fe8", "translatable_type" => "App\Models\Description", "translatable_id" => "e6ff3e11-921b-483d-8248-2c2c866aec36"],
            //171
            ["translation_id" => "f1e5e8be-0641-49a4-af89-c981f305c147", "translatable_type" => "App\Models\Description", "translatable_id" => "910b64d5-5f38-47a3-a989-6366f75be3ce"],
            ["translation_id" => "655a4669-52b5-415a-9f97-daf02c9d40a4", "translatable_type" => "App\Models\Description", "translatable_id" => "910b64d5-5f38-47a3-a989-6366f75be3ce"],
            ["translation_id" => "e5038404-52a5-4048-9f55-026ef58030ec", "translatable_type" => "App\Models\Description", "translatable_id" => "910b64d5-5f38-47a3-a989-6366f75be3ce"],
            //172
            ["translation_id" => "0a241380-8880-4da8-9502-0d56ea433a85", "translatable_type" => "App\Models\Description", "translatable_id" => "d39ae5b5-9035-44f9-ad32-5e79c2cb5903"],
            ["translation_id" => "ef5b2a24-8af2-4cb6-8a6b-0090624304b8", "translatable_type" => "App\Models\Description", "translatable_id" => "d39ae5b5-9035-44f9-ad32-5e79c2cb5903"],
            ["translation_id" => "ee0ed978-0a01-46c0-a4fd-b68ae2369cb2", "translatable_type" => "App\Models\Description", "translatable_id" => "d39ae5b5-9035-44f9-ad32-5e79c2cb5903"],
            //173
            ["translation_id" => "68839754-83ea-4f72-8369-4688599f89ea", "translatable_type" => "App\Models\Description", "translatable_id" => "00ce577c-c4ae-44a7-bc28-86ad33db1ae6"],
            ["translation_id" => "0da7d366-4a34-46f6-a866-c03a2c7e5c6b", "translatable_type" => "App\Models\Description", "translatable_id" => "00ce577c-c4ae-44a7-bc28-86ad33db1ae6"],
            ["translation_id" => "2120466c-2039-4a31-ae32-29e31b23fce9", "translatable_type" => "App\Models\Description", "translatable_id" => "00ce577c-c4ae-44a7-bc28-86ad33db1ae6"],
            //174
            ["translation_id" => "2db13664-9c7d-4811-9fe5-1f221c055bc1", "translatable_type" => "App\Models\Description", "translatable_id" => "1cc41e3f-8428-416c-a57f-1c3b4592c7bd"],
            ["translation_id" => "9694f00c-1ad7-48f4-aa6d-6c8e19d566a5", "translatable_type" => "App\Models\Description", "translatable_id" => "1cc41e3f-8428-416c-a57f-1c3b4592c7bd"],
            ["translation_id" => "1e181df3-24c0-4b38-ad64-09acaa9a3b6c", "translatable_type" => "App\Models\Description", "translatable_id" => "1cc41e3f-8428-416c-a57f-1c3b4592c7bd"],
            //175
            ["translation_id" => "f4e541e4-bd89-4d23-b946-93d660a5714b", "translatable_type" => "App\Models\Description", "translatable_id" => "0539172e-3bdb-4828-8227-a83594893420"],
            ["translation_id" => "680a3d7a-6838-44f7-9790-4eba7cfa0375", "translatable_type" => "App\Models\Description", "translatable_id" => "0539172e-3bdb-4828-8227-a83594893420"],
            ["translation_id" => "20675375-ffe7-4278-a710-a6c0fdc53941", "translatable_type" => "App\Models\Description", "translatable_id" => "0539172e-3bdb-4828-8227-a83594893420"],
            //176
            ["translation_id" => "f9af1789-1fec-469d-bb52-b6bda8d4af8c", "translatable_type" => "App\Models\Description", "translatable_id" => "3b976799-e30b-4133-a242-ecb4f0b50357"],
            ["translation_id" => "7938bc01-0dc4-4c66-9b77-1d63489daef9", "translatable_type" => "App\Models\Description", "translatable_id" => "3b976799-e30b-4133-a242-ecb4f0b50357"],
            ["translation_id" => "618f92aa-0946-4eab-a087-704cdc5e6a96", "translatable_type" => "App\Models\Description", "translatable_id" => "3b976799-e30b-4133-a242-ecb4f0b50357"],
            //177
            ["translation_id" => "d3a85195-7552-4e2b-936c-0a53ada80699", "translatable_type" => "App\Models\Description", "translatable_id" => "043250f9-66b7-4555-9756-faf7d03e1030"],
            ["translation_id" => "642f0438-fba9-4d97-ab2d-dfdf85de2bc7", "translatable_type" => "App\Models\Description", "translatable_id" => "043250f9-66b7-4555-9756-faf7d03e1030"],
            ["translation_id" => "2c279e9b-51dd-4d0e-9b5a-f473ba29f895", "translatable_type" => "App\Models\Description", "translatable_id" => "043250f9-66b7-4555-9756-faf7d03e1030"],
            //178
            ["translation_id" => "1b823558-590f-44bb-89a9-015c9cc0b9b0", "translatable_type" => "App\Models\Description", "translatable_id" => "be9be518-6352-4df8-b936-ac6a9c1a8154"],
            ["translation_id" => "53b4ccb6-03bf-4972-9ce5-4833411cd308", "translatable_type" => "App\Models\Description", "translatable_id" => "be9be518-6352-4df8-b936-ac6a9c1a8154"],
            ["translation_id" => "af01d477-de0e-44bc-9119-bace3fe2cec9", "translatable_type" => "App\Models\Description", "translatable_id" => "be9be518-6352-4df8-b936-ac6a9c1a8154"],
            //179
            ["translation_id" => "03d0babe-ac3f-406c-8d1d-c3ebfc62a2bc", "translatable_type" => "App\Models\Description", "translatable_id" => "404471e7-505f-4d90-a8af-8ba07bc13ff2"],
            ["translation_id" => "fd34b190-2fa3-4867-9ac9-a24f9c6201d8", "translatable_type" => "App\Models\Description", "translatable_id" => "404471e7-505f-4d90-a8af-8ba07bc13ff2"],
            ["translation_id" => "32cc51de-4a92-4dbd-bfd3-cb35bd6aaf04", "translatable_type" => "App\Models\Description", "translatable_id" => "404471e7-505f-4d90-a8af-8ba07bc13ff2"],
            //180
            ["translation_id" => "cfc59a65-97a4-4f78-8dbd-facd60563b97", "translatable_type" => "App\Models\Description", "translatable_id" => "d2b6f278-ca6a-423b-8a30-2a8eab15e411"],
            ["translation_id" => "34e7bf65-22b9-41ff-a07f-4af4ee220569", "translatable_type" => "App\Models\Description", "translatable_id" => "d2b6f278-ca6a-423b-8a30-2a8eab15e411"],
            ["translation_id" => "84d16022-0d55-4e15-ae4f-99e23526075e", "translatable_type" => "App\Models\Description", "translatable_id" => "d2b6f278-ca6a-423b-8a30-2a8eab15e411"],
            //181
            ["translation_id" => "a04c4af8-1702-44f2-88f9-5307ad71cf1b", "translatable_type" => "App\Models\Description", "translatable_id" => "30512ec7-79a2-47ba-9105-80d4f479a7f6"],
            ["translation_id" => "9901b422-db9e-4a4b-975c-e3faa58cbd05", "translatable_type" => "App\Models\Description", "translatable_id" => "30512ec7-79a2-47ba-9105-80d4f479a7f6"],
            ["translation_id" => "e4453eae-cfad-4a43-a9a9-3a78dbf2ef40", "translatable_type" => "App\Models\Description", "translatable_id" => "30512ec7-79a2-47ba-9105-80d4f479a7f6"],
            //182
            ["translation_id" => "d3f32087-dd25-406b-93c1-08444a7b11ed", "translatable_type" => "App\Models\Description", "translatable_id" => "ad9e0daa-e88b-4f9a-919b-4fbb3fd562d0"],
            ["translation_id" => "44882bf1-9403-409b-ad68-6cc9787c9d43", "translatable_type" => "App\Models\Description", "translatable_id" => "ad9e0daa-e88b-4f9a-919b-4fbb3fd562d0"],
            ["translation_id" => "a614a522-d6f4-4ef5-a972-ab675a0439d5", "translatable_type" => "App\Models\Description", "translatable_id" => "ad9e0daa-e88b-4f9a-919b-4fbb3fd562d0"],
            //183
            ["translation_id" => "ec18db58-4e1d-4d55-ba52-f04564915dee", "translatable_type" => "App\Models\Description", "translatable_id" => "e4cc4514-141a-4cd1-8061-24457034915d"],
            ["translation_id" => "dd8a07a9-3071-4e5d-8c6b-0a07a9cfdda3", "translatable_type" => "App\Models\Description", "translatable_id" => "e4cc4514-141a-4cd1-8061-24457034915d"],
            ["translation_id" => "468c4f76-e826-4e2b-bd58-e4140e8f5a4c", "translatable_type" => "App\Models\Description", "translatable_id" => "e4cc4514-141a-4cd1-8061-24457034915d"],
            //184
            ["translation_id" => "bafcaa05-3042-4abe-a830-cfc22c0b9296", "translatable_type" => "App\Models\Description", "translatable_id" => "f618a5e5-b36f-4a8e-815a-058bdeba295f"],
            ["translation_id" => "26e0c985-65bb-4357-a725-5b81695ef4c5", "translatable_type" => "App\Models\Description", "translatable_id" => "f618a5e5-b36f-4a8e-815a-058bdeba295f"],
            ["translation_id" => "c17eb162-3ce8-4ef2-b72a-fd3322a52ab0", "translatable_type" => "App\Models\Description", "translatable_id" => "f618a5e5-b36f-4a8e-815a-058bdeba295f"],
            //185
            ["translation_id" => "12b97d68-0bdb-4a19-95db-663824edd32d", "translatable_type" => "App\Models\Description", "translatable_id" => "2bfccc90-7fc3-418c-913f-1948ff48500e"],
            ["translation_id" => "f4eddeb6-4753-40b6-924f-8dbe5099ff63", "translatable_type" => "App\Models\Description", "translatable_id" => "2bfccc90-7fc3-418c-913f-1948ff48500e"],
            ["translation_id" => "ff38ff6c-5766-4fe9-a355-7bf186ea7588", "translatable_type" => "App\Models\Description", "translatable_id" => "2bfccc90-7fc3-418c-913f-1948ff48500e"],
            //186
            ["translation_id" => "d7228b00-3498-4957-89ee-02212ed1ce3b", "translatable_type" => "App\Models\Description", "translatable_id" => "8050ab75-dda5-47d5-8a82-2aded970db10"],
            ["translation_id" => "69451a91-8853-44e1-9f84-d6dda80deab6", "translatable_type" => "App\Models\Description", "translatable_id" => "8050ab75-dda5-47d5-8a82-2aded970db10"],
            ["translation_id" => "1c125a65-a6b6-4785-b582-8c415a089adb", "translatable_type" => "App\Models\Description", "translatable_id" => "8050ab75-dda5-47d5-8a82-2aded970db10"],
            //187
            ["translation_id" => "7050d88d-46ca-47fa-99e9-ccefe0b62fdf", "translatable_type" => "App\Models\Description", "translatable_id" => "3f57e46c-3a4e-4086-8950-60774201e570"],
            ["translation_id" => "d31cfbe6-39e7-4e6d-9bf4-4d4ea35cdb4b", "translatable_type" => "App\Models\Description", "translatable_id" => "3f57e46c-3a4e-4086-8950-60774201e570"],
            ["translation_id" => "76c30c90-73f6-4819-aad6-65b9d437930e", "translatable_type" => "App\Models\Description", "translatable_id" => "3f57e46c-3a4e-4086-8950-60774201e570"],
            //188
            ["translation_id" => "9095d098-c9c7-463e-80f7-47beccd78d2a", "translatable_type" => "App\Models\Description", "translatable_id" => "523f3633-d14e-4927-b534-3f2007ad31ca"],
            ["translation_id" => "bdfcc436-4587-42ac-9839-fa7a9dbee3dd", "translatable_type" => "App\Models\Description", "translatable_id" => "523f3633-d14e-4927-b534-3f2007ad31ca"],
            ["translation_id" => "8ec272e3-eac9-4e63-9ead-0332a39d428b", "translatable_type" => "App\Models\Description", "translatable_id" => "523f3633-d14e-4927-b534-3f2007ad31ca"],
            //189
            ["translation_id" => "2d46c3db-70cc-4643-aadf-951ae8334215", "translatable_type" => "App\Models\Description", "translatable_id" => "53cb5bd5-326b-4416-82cc-dca4599886ed"],
            ["translation_id" => "475e1ee6-ad1b-4c69-857b-ae6e57eb8284", "translatable_type" => "App\Models\Description", "translatable_id" => "53cb5bd5-326b-4416-82cc-dca4599886ed"],
            ["translation_id" => "6d30ffb0-e34c-4d9b-bf89-d4a58597f8f9", "translatable_type" => "App\Models\Description", "translatable_id" => "53cb5bd5-326b-4416-82cc-dca4599886ed"],
            //190
            ["translation_id" => "3cd2e6d6-6380-4ea3-a80b-29c0e13ffc0f", "translatable_type" => "App\Models\Description", "translatable_id" => "39c8aea9-83fc-440b-920b-f462fbac995c"],
            ["translation_id" => "86c57af1-f864-4897-b101-31794ad45da8", "translatable_type" => "App\Models\Description", "translatable_id" => "39c8aea9-83fc-440b-920b-f462fbac995c"],
            ["translation_id" => "33ba7f24-c7bf-4c2c-af41-8636d832c582", "translatable_type" => "App\Models\Description", "translatable_id" => "39c8aea9-83fc-440b-920b-f462fbac995c"],
            //191
            ["translation_id" => "f784f85b-f32f-40ec-90a9-24048f15e80e", "translatable_type" => "App\Models\Description", "translatable_id" => "43b95c3f-ae72-465a-9ccf-d1da553f88bc"],
            ["translation_id" => "c168200f-75ca-4eae-a4fb-b72dbf894dc5", "translatable_type" => "App\Models\Description", "translatable_id" => "43b95c3f-ae72-465a-9ccf-d1da553f88bc"],
            ["translation_id" => "6de19335-d803-49b5-958b-dbf20331c30b", "translatable_type" => "App\Models\Description", "translatable_id" => "43b95c3f-ae72-465a-9ccf-d1da553f88bc"],
            //192
            ["translation_id" => "0d0348c9-218e-4640-a7d4-b6ee27d19933", "translatable_type" => "App\Models\Description", "translatable_id" => "228ef9f3-85ab-464f-9eb5-c71f8dee890b"],
            ["translation_id" => "7badab8e-ffad-4937-a9b6-c7fdf6d74703", "translatable_type" => "App\Models\Description", "translatable_id" => "228ef9f3-85ab-464f-9eb5-c71f8dee890b"],
            ["translation_id" => "1bb1b5df-ad66-41c6-aa14-a8ec2d294a8d", "translatable_type" => "App\Models\Description", "translatable_id" => "228ef9f3-85ab-464f-9eb5-c71f8dee890b"],
            //193
            ["translation_id" => "79742978-e7e2-4ac5-8b07-8415338597fe", "translatable_type" => "App\Models\Description", "translatable_id" => "1c5cc2e1-57be-4f90-888b-501765120303"],
            ["translation_id" => "dd5d65d4-343b-4152-b592-3f87bf635d76", "translatable_type" => "App\Models\Description", "translatable_id" => "1c5cc2e1-57be-4f90-888b-501765120303"],
            ["translation_id" => "3c788fff-dd12-4d54-af8a-251a2fafae35", "translatable_type" => "App\Models\Description", "translatable_id" => "1c5cc2e1-57be-4f90-888b-501765120303"],
            //194
            ["translation_id" => "f561864f-0da0-41c7-b222-9e3f06de4c9d", "translatable_type" => "App\Models\Description", "translatable_id" => "43f93d6b-f66c-4827-95d2-bdc86e8d42d9"],
            ["translation_id" => "27cfea81-09e3-4974-b41f-fbbe08a542f2", "translatable_type" => "App\Models\Description", "translatable_id" => "43f93d6b-f66c-4827-95d2-bdc86e8d42d9"],
            ["translation_id" => "c1320d1d-dd79-4b25-9129-8b4e26693db9", "translatable_type" => "App\Models\Description", "translatable_id" => "43f93d6b-f66c-4827-95d2-bdc86e8d42d9"],
            //195
            ["translation_id" => "f13bedb3-f241-4809-82e2-b29aed8386a1", "translatable_type" => "App\Models\Description", "translatable_id" => "5dadc058-1c34-42b7-9d5e-01ffe9b955b6"],
            ["translation_id" => "2d517365-cc02-4052-b549-64d553594f91", "translatable_type" => "App\Models\Description", "translatable_id" => "5dadc058-1c34-42b7-9d5e-01ffe9b955b6"],
            ["translation_id" => "e5452725-7721-4a11-af78-f9875def0293", "translatable_type" => "App\Models\Description", "translatable_id" => "5dadc058-1c34-42b7-9d5e-01ffe9b955b6"],
            //196
            ["translation_id" => "761bb778-f301-471b-b7b8-4facfc0c4400", "translatable_type" => "App\Models\Description", "translatable_id" => "d5731471-c2a1-448a-aaf4-8c7ca666e2d0"],
            ["translation_id" => "2dab80dc-0611-44fa-8ffe-31795bfc0072", "translatable_type" => "App\Models\Description", "translatable_id" => "d5731471-c2a1-448a-aaf4-8c7ca666e2d0"],
            ["translation_id" => "da10faaa-4867-4605-b747-b5f73b39caff", "translatable_type" => "App\Models\Description", "translatable_id" => "d5731471-c2a1-448a-aaf4-8c7ca666e2d0"],
            //197
            ["translation_id" => "17f8415d-cfb5-4fb9-bf48-8832197c86a9", "translatable_type" => "App\Models\Description", "translatable_id" => "b99a8792-2815-46bc-93ef-2466f3a61879"],
            ["translation_id" => "863e87c9-df15-41ce-b9ff-53953023c3cb", "translatable_type" => "App\Models\Description", "translatable_id" => "b99a8792-2815-46bc-93ef-2466f3a61879"],
            ["translation_id" => "815ca859-be57-4b8e-b00d-c54b6760a949", "translatable_type" => "App\Models\Description", "translatable_id" => "b99a8792-2815-46bc-93ef-2466f3a61879"],
            //198
            ["translation_id" => "1548b49a-e4db-4cbb-85bc-438438965b70", "translatable_type" => "App\Models\Description", "translatable_id" => "7e608de1-e490-4659-9185-13337b56b92e"],
            ["translation_id" => "1924d1e2-d2e5-4050-81f5-5e0faced439e", "translatable_type" => "App\Models\Description", "translatable_id" => "7e608de1-e490-4659-9185-13337b56b92e"],
            ["translation_id" => "03a51d8e-3e6a-4224-b524-fd4e341a3576", "translatable_type" => "App\Models\Description", "translatable_id" => "7e608de1-e490-4659-9185-13337b56b92e"],
            //199
            ["translation_id" => "2d9013e7-845c-4bf1-8be7-e881980ad646", "translatable_type" => "App\Models\Description", "translatable_id" => "25949686-a6fa-425b-a3ac-b5e4657cc52d"],
            ["translation_id" => "3702ebe4-c4f2-4423-936b-bc42699ba4b1", "translatable_type" => "App\Models\Description", "translatable_id" => "25949686-a6fa-425b-a3ac-b5e4657cc52d"],
            ["translation_id" => "63bdb8c2-5328-469c-ba15-91ef8912b266", "translatable_type" => "App\Models\Description", "translatable_id" => "25949686-a6fa-425b-a3ac-b5e4657cc52d"],
            //200
            ["translation_id" => "b749a352-025b-49dd-a1cc-19b797a03b68", "translatable_type" => "App\Models\Description", "translatable_id" => "61b2b7aa-14ab-4cf4-8daf-14227def1573"],
            ["translation_id" => "d86f943b-8011-433d-8604-3dcf25db13bb", "translatable_type" => "App\Models\Description", "translatable_id" => "61b2b7aa-14ab-4cf4-8daf-14227def1573"],
            ["translation_id" => "0075b6ff-e8b2-4c62-bcba-a94b40c720f4", "translatable_type" => "App\Models\Description", "translatable_id" => "61b2b7aa-14ab-4cf4-8daf-14227def1573"],
            //201
            ["translation_id" => "4cabc8a4-5ea0-477c-9028-e236e025e51a", "translatable_type" => "App\Models\Description", "translatable_id" => "875f42de-d39f-4c85-80cc-48e1cc4cfa70"],
            ["translation_id" => "799924f3-8a5f-4bba-900c-63343495779c", "translatable_type" => "App\Models\Description", "translatable_id" => "875f42de-d39f-4c85-80cc-48e1cc4cfa70"],
            ["translation_id" => "bd66a07d-e0f0-4ad6-b202-5b8a60bdf8df", "translatable_type" => "App\Models\Description", "translatable_id" => "875f42de-d39f-4c85-80cc-48e1cc4cfa70"],
            //202
            ["translation_id" => "862391c4-5d2f-4e7d-a748-84ef1495eafb", "translatable_type" => "App\Models\Description", "translatable_id" => "5af21e6f-bb32-45e5-b34e-979244f533bc"],
            ["translation_id" => "bda3ef75-423d-4844-8689-778f4bd0ace6", "translatable_type" => "App\Models\Description", "translatable_id" => "5af21e6f-bb32-45e5-b34e-979244f533bc"],
            ["translation_id" => "28ad363c-5f94-48c0-82dc-258e60028674", "translatable_type" => "App\Models\Description", "translatable_id" => "5af21e6f-bb32-45e5-b34e-979244f533bc"],
            //203
            ["translation_id" => "4241d254-ced1-4670-8cd6-471d2e3acce6", "translatable_type" => "App\Models\Description", "translatable_id" => "6dd3f3ea-cb57-41c5-89a0-65b8444664e2"],
            ["translation_id" => "30464782-ca05-4fb3-b4f7-70ed49686ec1", "translatable_type" => "App\Models\Description", "translatable_id" => "6dd3f3ea-cb57-41c5-89a0-65b8444664e2"],
            ["translation_id" => "ed061298-b52a-4fcf-a001-62ba77de6f8b", "translatable_type" => "App\Models\Description", "translatable_id" => "6dd3f3ea-cb57-41c5-89a0-65b8444664e2"],
            //204
            ["translation_id" => "ce387a57-6663-40b9-91a8-b43f72a61044", "translatable_type" => "App\Models\Description", "translatable_id" => "d44eafbe-d35b-4b92-8d2f-29d80ce8f846"],
            ["translation_id" => "b2258515-b1c5-4dae-8158-e8117beece43", "translatable_type" => "App\Models\Description", "translatable_id" => "d44eafbe-d35b-4b92-8d2f-29d80ce8f846"],
            ["translation_id" => "400a4a15-940d-44b0-864f-a02f59950d99", "translatable_type" => "App\Models\Description", "translatable_id" => "d44eafbe-d35b-4b92-8d2f-29d80ce8f846"],
            //205
            ["translation_id" => "81180fc9-2215-4b0b-9972-49bef2f46c9b", "translatable_type" => "App\Models\Description", "translatable_id" => "ed87863a-cbec-4ad0-abb1-5e39cac03329"],
            ["translation_id" => "bd6f30b0-eb3c-4370-ba35-94c533f6a5f1", "translatable_type" => "App\Models\Description", "translatable_id" => "ed87863a-cbec-4ad0-abb1-5e39cac03329"],
            ["translation_id" => "73ac7fc8-a88d-4e24-9fa1-58706c44726c", "translatable_type" => "App\Models\Description", "translatable_id" => "ed87863a-cbec-4ad0-abb1-5e39cac03329"],
            //206
            ["translation_id" => "244b8274-acdf-448e-bb12-5dcad740dd4d", "translatable_type" => "App\Models\Description", "translatable_id" => "5e26b60d-6013-452c-942e-de03abaf395b"],
            ["translation_id" => "0870ddda-6de2-4092-850c-ef837fada1d8", "translatable_type" => "App\Models\Description", "translatable_id" => "5e26b60d-6013-452c-942e-de03abaf395b"],
            ["translation_id" => "2a729fb8-d25d-4f75-9c86-e0ba5d6683fd", "translatable_type" => "App\Models\Description", "translatable_id" => "5e26b60d-6013-452c-942e-de03abaf395b"],
            //207
            ["translation_id" => "6c947f51-e958-4c46-a279-7a3dbc79d8b2", "translatable_type" => "App\Models\Description", "translatable_id" => "2d47cd94-c49c-4818-816c-9bb2cc740799"],
            ["translation_id" => "852c325b-9e53-4442-9251-faf43a6338e3", "translatable_type" => "App\Models\Description", "translatable_id" => "2d47cd94-c49c-4818-816c-9bb2cc740799"],
            ["translation_id" => "e74d9c7d-32b6-42bb-885e-4bc31bf4ec31", "translatable_type" => "App\Models\Description", "translatable_id" => "2d47cd94-c49c-4818-816c-9bb2cc740799"],
            //208
            ["translation_id" => "686b2768-0925-40fe-83a4-0d5ba0f397b0", "translatable_type" => "App\Models\Description", "translatable_id" => "23bf5d57-244a-4d8c-907f-54a40514c3ec"],
            ["translation_id" => "55aa87a3-1b79-473a-868f-13f335963466", "translatable_type" => "App\Models\Description", "translatable_id" => "23bf5d57-244a-4d8c-907f-54a40514c3ec"],
            ["translation_id" => "c0918289-581b-49fb-bec4-69a14b6b1a44", "translatable_type" => "App\Models\Description", "translatable_id" => "23bf5d57-244a-4d8c-907f-54a40514c3ec"],
            //209
            ["translation_id" => "b2979245-6d7d-41cd-aff5-3c4e36d867c8", "translatable_type" => "App\Models\Description", "translatable_id" => "4a2d76ec-e85b-4bae-a021-8728c3bfd853"],
            ["translation_id" => "224573c4-e27f-4cfd-a763-78f0ab034606", "translatable_type" => "App\Models\Description", "translatable_id" => "4a2d76ec-e85b-4bae-a021-8728c3bfd853"],
            ["translation_id" => "94c65497-b7b7-4d65-a6fe-2366288f5849", "translatable_type" => "App\Models\Description", "translatable_id" => "4a2d76ec-e85b-4bae-a021-8728c3bfd853"],
            //210
            ["translation_id" => "6349c43b-4650-44a9-bd1c-be301b8869c9", "translatable_type" => "App\Models\Description", "translatable_id" => "1234a98b-9bfe-41c5-b4c5-b8c38b11208e"],
            ["translation_id" => "1da69de0-6c0f-4260-8666-88e91b151cd2", "translatable_type" => "App\Models\Description", "translatable_id" => "1234a98b-9bfe-41c5-b4c5-b8c38b11208e"],
            ["translation_id" => "6b15b364-2e78-46cb-ba85-b9677d61f535", "translatable_type" => "App\Models\Description", "translatable_id" => "1234a98b-9bfe-41c5-b4c5-b8c38b11208e"],
            //211
            ["translation_id" => "c11b9af9-f23a-493a-8e5c-3468fa97504e", "translatable_type" => "App\Models\Description", "translatable_id" => "8eb491f3-d40c-4d97-aa90-ad6f017a7073"],
            ["translation_id" => "f2006fcd-26de-482d-844a-bad496c79541", "translatable_type" => "App\Models\Description", "translatable_id" => "8eb491f3-d40c-4d97-aa90-ad6f017a7073"],
            ["translation_id" => "3e9388b4-ae62-4b03-a65e-6846e689e882", "translatable_type" => "App\Models\Description", "translatable_id" => "8eb491f3-d40c-4d97-aa90-ad6f017a7073"],
            //212
            ["translation_id" => "1f033589-5338-46cb-884c-464f49504d1d", "translatable_type" => "App\Models\Description", "translatable_id" => "1b337b63-f6f1-43c0-a2c5-20ee4e079ea8"],
            ["translation_id" => "58c5424a-8adb-4437-935d-081c50ac5482", "translatable_type" => "App\Models\Description", "translatable_id" => "1b337b63-f6f1-43c0-a2c5-20ee4e079ea8"],
            ["translation_id" => "c8d3b949-f1ac-4cde-a78e-d3c77a21f3bb", "translatable_type" => "App\Models\Description", "translatable_id" => "1b337b63-f6f1-43c0-a2c5-20ee4e079ea8"],
            //213
            ["translation_id" => "6f9bf555-bcf0-4603-ad90-c10f3307acc5", "translatable_type" => "App\Models\Description", "translatable_id" => "bde18c90-98f7-46e1-842e-80dd285d015b"],
            ["translation_id" => "1c24d523-1828-48e6-a753-340bf555ccbd", "translatable_type" => "App\Models\Description", "translatable_id" => "bde18c90-98f7-46e1-842e-80dd285d015b"],
            ["translation_id" => "2cc4735a-9b95-4047-b3bb-b29245a870f8", "translatable_type" => "App\Models\Description", "translatable_id" => "bde18c90-98f7-46e1-842e-80dd285d015b"],
            //214
            ["translation_id" => "80d3fe06-2a23-4648-9c6b-3e2a238bf731", "translatable_type" => "App\Models\Description", "translatable_id" => "3c78102d-7324-45cf-9509-3343ba8566fe"],
            ["translation_id" => "da051ed2-60e1-464c-9843-feee6a210385", "translatable_type" => "App\Models\Description", "translatable_id" => "3c78102d-7324-45cf-9509-3343ba8566fe"],
            ["translation_id" => "225472db-eb02-46ba-beed-2209e3c245c2", "translatable_type" => "App\Models\Description", "translatable_id" => "3c78102d-7324-45cf-9509-3343ba8566fe"],
            //215
            ["translation_id" => "0660f2f3-2420-4c81-872d-986549f959a4", "translatable_type" => "App\Models\Description", "translatable_id" => "4acb9566-786a-4e26-8cd9-6ddf3bf0fb20"],
            ["translation_id" => "3b7d4c63-acaa-492c-af5f-932cdd65a991", "translatable_type" => "App\Models\Description", "translatable_id" => "4acb9566-786a-4e26-8cd9-6ddf3bf0fb20"],
            ["translation_id" => "ca7dcb8f-6433-4fb4-81d3-47503b990321", "translatable_type" => "App\Models\Description", "translatable_id" => "4acb9566-786a-4e26-8cd9-6ddf3bf0fb20"],
            //216
            ["translation_id" => "dee7840e-e790-4156-867c-fde1ae444da0", "translatable_type" => "App\Models\Description", "translatable_id" => "d5ee91ee-d6c1-47f1-8497-4fad2b8696fe"],
            ["translation_id" => "d28164cb-e09b-4267-bce5-0a3bd24adb4d", "translatable_type" => "App\Models\Description", "translatable_id" => "d5ee91ee-d6c1-47f1-8497-4fad2b8696fe"],
            ["translation_id" => "78ca163e-5d68-4a27-9019-9a3651e696b3", "translatable_type" => "App\Models\Description", "translatable_id" => "d5ee91ee-d6c1-47f1-8497-4fad2b8696fe"],
            //217
            ["translation_id" => "6f2a5f92-a7da-44aa-b7e4-6b35f750a60f", "translatable_type" => "App\Models\Description", "translatable_id" => "2c71d99b-9d96-4aeb-ab1c-bdc840fa1995"],
            ["translation_id" => "b3e48471-6734-4c2d-b07b-c609ea3c1819", "translatable_type" => "App\Models\Description", "translatable_id" => "2c71d99b-9d96-4aeb-ab1c-bdc840fa1995"],
            ["translation_id" => "3da294a4-9072-4e64-b5f9-9cb42d79b064", "translatable_type" => "App\Models\Description", "translatable_id" => "2c71d99b-9d96-4aeb-ab1c-bdc840fa1995"],
            //218
            ["translation_id" => "61033c01-4fa1-4080-84a0-869fbfce32c0", "translatable_type" => "App\Models\Description", "translatable_id" => "36ca306d-8ae3-4d52-9e5a-8a848a84952d"],
            ["translation_id" => "868d5eb9-2008-4d22-87b9-1287dd5cede3", "translatable_type" => "App\Models\Description", "translatable_id" => "36ca306d-8ae3-4d52-9e5a-8a848a84952d"],
            ["translation_id" => "ddc1fd24-1779-44ea-aee5-4e33d821e4ec", "translatable_type" => "App\Models\Description", "translatable_id" => "36ca306d-8ae3-4d52-9e5a-8a848a84952d"],
            //219
            ["translation_id" => "65581d4a-e9b1-47c0-83d2-b0e349643d00", "translatable_type" => "App\Models\Description", "translatable_id" => "03395be3-14df-48cd-a919-334dbf697e74"],
            ["translation_id" => "a3adc980-9ba8-4ffa-89a9-124b41343a0d", "translatable_type" => "App\Models\Description", "translatable_id" => "03395be3-14df-48cd-a919-334dbf697e74"],
            ["translation_id" => "8a547c78-da94-4a91-850b-19cf64861c51", "translatable_type" => "App\Models\Description", "translatable_id" => "03395be3-14df-48cd-a919-334dbf697e74"],
            //220
            ["translation_id" => "8d262c9d-19e0-4ca5-8a09-15fe46f8f919", "translatable_type" => "App\Models\Description", "translatable_id" => "15661029-2e2c-4c1b-b3a2-c5412401acf5"],
            ["translation_id" => "431c830c-b405-4529-a44b-9d41ee884943", "translatable_type" => "App\Models\Description", "translatable_id" => "15661029-2e2c-4c1b-b3a2-c5412401acf5"],
            ["translation_id" => "e687b540-f581-49c4-b772-5c18d0e7b1aa", "translatable_type" => "App\Models\Description", "translatable_id" => "15661029-2e2c-4c1b-b3a2-c5412401acf5"],
            //221
            ["translation_id" => "18501e7a-c04e-4220-95fc-009b70b826c3", "translatable_type" => "App\Models\Description", "translatable_id" => "cf3c918f-74a5-4d81-9156-d40b0cb8bdf1"],
            ["translation_id" => "5f3073b7-e631-478a-aae9-0f530b4e5376", "translatable_type" => "App\Models\Description", "translatable_id" => "cf3c918f-74a5-4d81-9156-d40b0cb8bdf1"],
            ["translation_id" => "1833bf21-4e62-4057-8b3f-5e93155aaa1d", "translatable_type" => "App\Models\Description", "translatable_id" => "cf3c918f-74a5-4d81-9156-d40b0cb8bdf1"],
            //222
            ["translation_id" => "2c532e8a-0cec-400d-a67b-d81d5f151e31", "translatable_type" => "App\Models\Description", "translatable_id" => "fe718f56-c71a-451b-9655-f35b0e7b5546"],
            ["translation_id" => "daf041c0-2a57-4359-9e6a-b8d6710b5ca6", "translatable_type" => "App\Models\Description", "translatable_id" => "fe718f56-c71a-451b-9655-f35b0e7b5546"],
            ["translation_id" => "18142a00-9db8-4187-92b8-ed357feed0be", "translatable_type" => "App\Models\Description", "translatable_id" => "fe718f56-c71a-451b-9655-f35b0e7b5546"],
            //223
            ["translation_id" => "cf302ad7-a453-4a2b-b367-c15869be4b0e", "translatable_type" => "App\Models\Description", "translatable_id" => "18cfab1e-8037-4c73-9d90-f14372a4da43"],
            ["translation_id" => "1b3ec7bd-6631-493d-979d-6f3dcef5a7b5", "translatable_type" => "App\Models\Description", "translatable_id" => "18cfab1e-8037-4c73-9d90-f14372a4da43"],
            ["translation_id" => "cde95d99-5104-4354-b71a-621af84bbb06", "translatable_type" => "App\Models\Description", "translatable_id" => "18cfab1e-8037-4c73-9d90-f14372a4da43"],
            //224
            ["translation_id" => "9857002d-ab4e-4f67-82aa-e0a6b409ab1d", "translatable_type" => "App\Models\Description", "translatable_id" => "1029ad5f-6a71-4f07-afa7-5c98aa9314eb"],
            ["translation_id" => "7cfb1568-cebc-46dd-b2d3-b36ae59322da", "translatable_type" => "App\Models\Description", "translatable_id" => "1029ad5f-6a71-4f07-afa7-5c98aa9314eb"],
            ["translation_id" => "af36e56b-ad21-4593-ae2a-d8d7048d889c", "translatable_type" => "App\Models\Description", "translatable_id" => "1029ad5f-6a71-4f07-afa7-5c98aa9314eb"],
            //225
            ["translation_id" => "ddb4058c-1fd4-4f59-8abf-3a83b7244d82", "translatable_type" => "App\Models\Description", "translatable_id" => "0f4066bb-aada-4cd7-a0ef-3777ec0fb48b"],
            ["translation_id" => "b043a030-2eaf-4019-ba1a-dfacb70d0af6", "translatable_type" => "App\Models\Description", "translatable_id" => "0f4066bb-aada-4cd7-a0ef-3777ec0fb48b"],
            ["translation_id" => "95484065-4d7d-4e34-84ff-f0bffbdb2fec", "translatable_type" => "App\Models\Description", "translatable_id" => "0f4066bb-aada-4cd7-a0ef-3777ec0fb48b"],
            //226
            ["translation_id" => "ad9a61a9-2a33-4b92-86d7-a4e934ed76dd", "translatable_type" => "App\Models\Description", "translatable_id" => "daab8d2c-9385-45ec-ae47-0171da38966b"],
            ["translation_id" => "de4ee6a4-8a5f-4505-a42a-10e4fc8a72b3", "translatable_type" => "App\Models\Description", "translatable_id" => "daab8d2c-9385-45ec-ae47-0171da38966b"],
            ["translation_id" => "63b070b2-a646-41c8-81ed-69b1611e30f0", "translatable_type" => "App\Models\Description", "translatable_id" => "daab8d2c-9385-45ec-ae47-0171da38966b"],
            //227
            ["translation_id" => "5be39ab7-364f-43cf-ae4d-fe99b1e566d3", "translatable_type" => "App\Models\Description", "translatable_id" => "4198e0c5-7b4a-4443-95c0-8c26ce514b0b"],
            ["translation_id" => "fcb85e01-e491-48a6-9c4d-7c2512df3353", "translatable_type" => "App\Models\Description", "translatable_id" => "4198e0c5-7b4a-4443-95c0-8c26ce514b0b"],
            ["translation_id" => "0ff702ef-ff3e-4d0d-9037-f9533e1b61b2", "translatable_type" => "App\Models\Description", "translatable_id" => "4198e0c5-7b4a-4443-95c0-8c26ce514b0b"],
            //228
            ["translation_id" => "9c4b2965-1fe5-4c18-9154-df02e684654d", "translatable_type" => "App\Models\Description", "translatable_id" => "ffafb7b5-92c6-44f4-a428-81bbdcf51104"],
            ["translation_id" => "cad68a66-a77c-4ec1-8a7d-169ae46b5905", "translatable_type" => "App\Models\Description", "translatable_id" => "ffafb7b5-92c6-44f4-a428-81bbdcf51104"],
            ["translation_id" => "f0e6087b-0c4f-4b0d-bdbd-d2bd71fbeeca", "translatable_type" => "App\Models\Description", "translatable_id" => "ffafb7b5-92c6-44f4-a428-81bbdcf51104"],
            //229
            ["translation_id" => "dba19f4c-4cd6-4772-9625-ad12a1a7b4cd", "translatable_type" => "App\Models\Description", "translatable_id" => "79507783-40fa-402f-846e-a816290cdd0d"],
            ["translation_id" => "ad37f258-5566-4857-b4e1-10cd22f76ecb", "translatable_type" => "App\Models\Description", "translatable_id" => "79507783-40fa-402f-846e-a816290cdd0d"],
            ["translation_id" => "4e0bfc26-ddf2-4fbf-b205-c9f8cbf7bccd", "translatable_type" => "App\Models\Description", "translatable_id" => "79507783-40fa-402f-846e-a816290cdd0d"],
            //230
            ["translation_id" => "6c4b6205-7743-49b4-ae94-20e418eeffef", "translatable_type" => "App\Models\Description", "translatable_id" => "7039ad64-5fce-48f4-aab5-353089cd9b9a"],
            ["translation_id" => "9502f4fe-ef58-4820-a466-dd055e7d3a27", "translatable_type" => "App\Models\Description", "translatable_id" => "7039ad64-5fce-48f4-aab5-353089cd9b9a"],
            ["translation_id" => "f608d549-e11f-4c8a-acb8-d3a9a8045d4d", "translatable_type" => "App\Models\Description", "translatable_id" => "7039ad64-5fce-48f4-aab5-353089cd9b9a"],
            //231
            ["translation_id" => "8985befe-fe89-4125-a79d-ea1df878d601", "translatable_type" => "App\Models\Description", "translatable_id" => "7c6546c5-1877-4eaa-b85d-8ad9bd2e287a"],
            ["translation_id" => "2a246864-c8da-426b-8090-0c7497769077", "translatable_type" => "App\Models\Description", "translatable_id" => "7c6546c5-1877-4eaa-b85d-8ad9bd2e287a"],
            ["translation_id" => "dbd104ac-6006-43d5-91b9-002b6524fd70", "translatable_type" => "App\Models\Description", "translatable_id" => "7c6546c5-1877-4eaa-b85d-8ad9bd2e287a"],
            //232
            ["translation_id" => "8e2cfa60-6290-4f83-bf63-ba3061eba1c7", "translatable_type" => "App\Models\Description", "translatable_id" => "6a290103-78a8-4823-9fec-55d0318b5339"],
            ["translation_id" => "6e9dbcda-0a56-457f-9597-9e70b36eb8e5", "translatable_type" => "App\Models\Description", "translatable_id" => "6a290103-78a8-4823-9fec-55d0318b5339"],
            ["translation_id" => "faa7f75e-274a-44c7-9962-b093a5407837", "translatable_type" => "App\Models\Description", "translatable_id" => "6a290103-78a8-4823-9fec-55d0318b5339"],
            //233
            ["translation_id" => "4a2b1f5d-0142-4c4a-8b89-4d747739602a", "translatable_type" => "App\Models\Description", "translatable_id" => "f5d477c7-37a6-4aca-8168-bcd3c3a2a174"],
            ["translation_id" => "eb2fe3bc-b402-4945-aec6-40e0347e8a7b", "translatable_type" => "App\Models\Description", "translatable_id" => "f5d477c7-37a6-4aca-8168-bcd3c3a2a174"],
            ["translation_id" => "cec281a7-44cd-416e-b188-5393c8230abc", "translatable_type" => "App\Models\Description", "translatable_id" => "f5d477c7-37a6-4aca-8168-bcd3c3a2a174"],
            //234
            ["translation_id" => "fad599df-b01b-40d9-be28-7279302339ba", "translatable_type" => "App\Models\Description", "translatable_id" => "8d4e22de-7db9-4748-a8e2-75ccf4f443cc"],
            ["translation_id" => "5569c3c9-3d00-4d2b-9cc3-a7066545723b", "translatable_type" => "App\Models\Description", "translatable_id" => "8d4e22de-7db9-4748-a8e2-75ccf4f443cc"],
            ["translation_id" => "198c7dc2-3d96-40bd-93ec-7424d31c0309", "translatable_type" => "App\Models\Description", "translatable_id" => "8d4e22de-7db9-4748-a8e2-75ccf4f443cc"],
            //235
            ["translation_id" => "9b987131-2d97-4d19-adb8-c4a7710b1186", "translatable_type" => "App\Models\Description", "translatable_id" => "ff2f0e5a-05f5-481a-91ba-5aebd7bde1ac"],
            ["translation_id" => "d60a9d2b-345e-4551-85a1-bde339fc29c8", "translatable_type" => "App\Models\Description", "translatable_id" => "ff2f0e5a-05f5-481a-91ba-5aebd7bde1ac"],
            ["translation_id" => "d7139333-b7c1-42b7-89f1-3c39edcff59c", "translatable_type" => "App\Models\Description", "translatable_id" => "ff2f0e5a-05f5-481a-91ba-5aebd7bde1ac"],
            //236
            ["translation_id" => "c06c3472-f353-49e1-810e-3a2245fc7304", "translatable_type" => "App\Models\Description", "translatable_id" => "baa8cbcc-54dd-409c-8455-7e4f7a0ae38f"],
            ["translation_id" => "1ec055fd-ffbb-4640-8065-859f5cc4d49e", "translatable_type" => "App\Models\Description", "translatable_id" => "baa8cbcc-54dd-409c-8455-7e4f7a0ae38f"],
            ["translation_id" => "1c48e709-5464-46d3-82f3-4794eac2bdf3", "translatable_type" => "App\Models\Description", "translatable_id" => "baa8cbcc-54dd-409c-8455-7e4f7a0ae38f"],
            //237
            ["translation_id" => "b2846e38-cbe4-4280-87b1-12bf348f0520", "translatable_type" => "App\Models\Description", "translatable_id" => "0e89030b-619d-44a5-aa29-6f53e79e2161"],
            ["translation_id" => "4cf31176-c6fd-414d-9c76-9473334c9756", "translatable_type" => "App\Models\Description", "translatable_id" => "0e89030b-619d-44a5-aa29-6f53e79e2161"],
            ["translation_id" => "c824cc15-872e-4c4b-970e-11d436b4eaa4", "translatable_type" => "App\Models\Description", "translatable_id" => "0e89030b-619d-44a5-aa29-6f53e79e2161"],
            //238
            ["translation_id" => "4e286b26-404a-458e-a299-5f2ed24afb69", "translatable_type" => "App\Models\Description", "translatable_id" => "9d719c92-18a5-4eca-906a-e188d7a826b7"],
            ["translation_id" => "29221d24-004a-4087-8033-0a4b5ea0d330", "translatable_type" => "App\Models\Description", "translatable_id" => "9d719c92-18a5-4eca-906a-e188d7a826b7"],
            ["translation_id" => "4f0ddc4e-8455-4123-9136-dd2d21d56101", "translatable_type" => "App\Models\Description", "translatable_id" => "9d719c92-18a5-4eca-906a-e188d7a826b7"],
            //239
            ["translation_id" => "89e96264-e887-4874-a87d-76602940ac5f", "translatable_type" => "App\Models\Description", "translatable_id" => "438b706a-7c34-4747-9147-40cfd5d3df4c"],
            ["translation_id" => "7433eb78-d0b2-4cf7-b864-570192a1b8cf", "translatable_type" => "App\Models\Description", "translatable_id" => "438b706a-7c34-4747-9147-40cfd5d3df4c"],
            ["translation_id" => "9d8bfbeb-e2a8-4a66-bfcd-e15fa2985556", "translatable_type" => "App\Models\Description", "translatable_id" => "438b706a-7c34-4747-9147-40cfd5d3df4c"],
            //240
            ["translation_id" => "a11df0d6-47f3-4ac6-883a-fc215afd4e16", "translatable_type" => "App\Models\Description", "translatable_id" => "705417d5-809d-4056-b1d0-ac578b4e2596"],
            ["translation_id" => "95a0f3b3-9421-4f9d-824f-1d6e042534cb", "translatable_type" => "App\Models\Description", "translatable_id" => "705417d5-809d-4056-b1d0-ac578b4e2596"],
            ["translation_id" => "dc4178b4-c25f-43a3-a861-9d3b8aa10114", "translatable_type" => "App\Models\Description", "translatable_id" => "705417d5-809d-4056-b1d0-ac578b4e2596"],
            //241
            ["translation_id" => "3d7b8c84-83aa-49bf-a6ba-862f6e5635dd", "translatable_type" => "App\Models\Description", "translatable_id" => "ec3af257-c8d8-482c-8f71-6ce1077aa0eb"],
            ["translation_id" => "6cc5866a-d10d-4ae7-ae72-3a759b5ca1c8", "translatable_type" => "App\Models\Description", "translatable_id" => "ec3af257-c8d8-482c-8f71-6ce1077aa0eb"],
            ["translation_id" => "b8cb9645-d8e1-441f-b9eb-c6f93eaac844", "translatable_type" => "App\Models\Description", "translatable_id" => "ec3af257-c8d8-482c-8f71-6ce1077aa0eb"],
            //242
            ["translation_id" => "070905df-e7df-4c60-a6ae-761785c76de2", "translatable_type" => "App\Models\Description", "translatable_id" => "869614a9-038f-4b35-98ea-8d533cdf463b"],
            ["translation_id" => "11d49f8b-eb7e-4045-a2e8-d1e10a1d6962", "translatable_type" => "App\Models\Description", "translatable_id" => "869614a9-038f-4b35-98ea-8d533cdf463b"],
            ["translation_id" => "8a6de49d-2734-47ef-be8e-b928db8b57f2", "translatable_type" => "App\Models\Description", "translatable_id" => "869614a9-038f-4b35-98ea-8d533cdf463b"],
            //243
            ["translation_id" => "7d02df2f-ae4a-4897-af9c-74f48b001216", "translatable_type" => "App\Models\Description", "translatable_id" => "75d91797-2983-4d93-9af7-4b255b0e9ec6"],
            ["translation_id" => "1d53ac03-37b7-452b-99b4-a1b587712151", "translatable_type" => "App\Models\Description", "translatable_id" => "75d91797-2983-4d93-9af7-4b255b0e9ec6"],
            ["translation_id" => "6872ef86-c652-4122-b00e-87b6e7371bac", "translatable_type" => "App\Models\Description", "translatable_id" => "75d91797-2983-4d93-9af7-4b255b0e9ec6"],
            //244
            ["translation_id" => "c2808d6b-5eae-4578-bf93-103cb6e20a19", "translatable_type" => "App\Models\Description", "translatable_id" => "9a80ce22-25b3-4c26-9f22-b832c9f88a79"],
            ["translation_id" => "6a36938f-ddfe-49f3-a9a4-a3351430c419", "translatable_type" => "App\Models\Description", "translatable_id" => "9a80ce22-25b3-4c26-9f22-b832c9f88a79"],
            ["translation_id" => "87671f3e-10d2-4630-874e-9c40f921fea8", "translatable_type" => "App\Models\Description", "translatable_id" => "9a80ce22-25b3-4c26-9f22-b832c9f88a79"],
            //245
            ["translation_id" => "bb3f4b4a-c6f3-4558-b799-464b850fa051", "translatable_type" => "App\Models\Description", "translatable_id" => "64d48894-8684-4f2b-a78d-79e58388429c"],
            ["translation_id" => "3156aa78-020b-4cfd-8691-60b01ad4390c", "translatable_type" => "App\Models\Description", "translatable_id" => "64d48894-8684-4f2b-a78d-79e58388429c"],
            ["translation_id" => "a64d8507-b86a-4714-a1e9-9a0a41619702", "translatable_type" => "App\Models\Description", "translatable_id" => "64d48894-8684-4f2b-a78d-79e58388429c"],
            //246
            ["translation_id" => "323be048-c15d-4e6e-b1a3-ac8f8bfa52f3", "translatable_type" => "App\Models\Description", "translatable_id" => "08a28ace-89ad-4add-afe5-d5b767ce55d1"],
            ["translation_id" => "0d6204b0-4d9b-42d2-a77e-fc05bb6ba77b", "translatable_type" => "App\Models\Description", "translatable_id" => "08a28ace-89ad-4add-afe5-d5b767ce55d1"],
            ["translation_id" => "05612447-1fee-4ed5-b76a-a9ef25e36419", "translatable_type" => "App\Models\Description", "translatable_id" => "08a28ace-89ad-4add-afe5-d5b767ce55d1"],
            //247
            ["translation_id" => "c4cc753a-1816-4feb-878c-231fc744211a", "translatable_type" => "App\Models\Description", "translatable_id" => "964954a6-fe1f-474d-b522-b6d4c078e697"],
            ["translation_id" => "bbac88f2-af74-4424-86d2-0b5d7da0038d", "translatable_type" => "App\Models\Description", "translatable_id" => "964954a6-fe1f-474d-b522-b6d4c078e697"],
            ["translation_id" => "481f042b-9d8f-4d0b-b604-dd24d64b725d", "translatable_type" => "App\Models\Description", "translatable_id" => "964954a6-fe1f-474d-b522-b6d4c078e697"],
            //248
            ["translation_id" => "45838567-861f-4e9e-b93c-0697c883a588", "translatable_type" => "App\Models\Description", "translatable_id" => "0dca9195-485c-4dc1-99bc-793de28544c1"],
            ["translation_id" => "bae7e592-9fde-43ab-a0a9-6edab07f8f38", "translatable_type" => "App\Models\Description", "translatable_id" => "0dca9195-485c-4dc1-99bc-793de28544c1"],
            ["translation_id" => "dd7df35f-da50-4a08-bb53-e1b550987c63", "translatable_type" => "App\Models\Description", "translatable_id" => "0dca9195-485c-4dc1-99bc-793de28544c1"],
            //249
            ["translation_id" => "fba7d617-5bea-40ca-85af-8e4ca88663ad", "translatable_type" => "App\Models\Description", "translatable_id" => "4e2a376c-c977-40bc-b8e6-dfd6b471255e"],
            ["translation_id" => "bd3fe639-ae4a-4aa2-9277-1701089a1861", "translatable_type" => "App\Models\Description", "translatable_id" => "4e2a376c-c977-40bc-b8e6-dfd6b471255e"],
            ["translation_id" => "fdfdd3ed-fa78-44a6-9bd6-939a8541f6a0", "translatable_type" => "App\Models\Description", "translatable_id" => "4e2a376c-c977-40bc-b8e6-dfd6b471255e"],
            //250
            ["translation_id" => "9f389836-2886-4d65-8f42-a6481936b794", "translatable_type" => "App\Models\Description", "translatable_id" => "30efe64d-4316-4d22-9afc-26a2524c0429"],
            ["translation_id" => "ab793972-b7f9-41ce-b8fc-5375e58574b2", "translatable_type" => "App\Models\Description", "translatable_id" => "30efe64d-4316-4d22-9afc-26a2524c0429"],
            ["translation_id" => "cb0d5d88-35f5-45cd-b25d-9147e43cca3a", "translatable_type" => "App\Models\Description", "translatable_id" => "30efe64d-4316-4d22-9afc-26a2524c0429"],
            //251
            ["translation_id" => "5b355862-70ec-4ef1-ae9c-67ac8b72124c", "translatable_type" => "App\Models\Description", "translatable_id" => "5f1948e0-69da-48ea-8285-8ec4423fbd2a"],
            ["translation_id" => "cf235743-b25f-4403-9169-725e492f8e98", "translatable_type" => "App\Models\Description", "translatable_id" => "5f1948e0-69da-48ea-8285-8ec4423fbd2a"],
            ["translation_id" => "56b07e99-bd72-4af2-b703-1ec7020ef54e", "translatable_type" => "App\Models\Description", "translatable_id" => "5f1948e0-69da-48ea-8285-8ec4423fbd2a"],
            //252
            ["translation_id" => "3b03eeb7-b818-4a6a-b641-2350600925f4", "translatable_type" => "App\Models\Description", "translatable_id" => "4a9b101c-ad6d-42f3-83b4-4a9da12f19d4"],
            ["translation_id" => "41ad3b6d-9461-435f-b689-21809696290b", "translatable_type" => "App\Models\Description", "translatable_id" => "4a9b101c-ad6d-42f3-83b4-4a9da12f19d4"],
            ["translation_id" => "5cd77d7b-e078-48b1-abb0-2354b80e28ff", "translatable_type" => "App\Models\Description", "translatable_id" => "4a9b101c-ad6d-42f3-83b4-4a9da12f19d4"],
            //253
            ["translation_id" => "8695aac7-e7e8-4777-83a2-d58c1faced88", "translatable_type" => "App\Models\Description", "translatable_id" => "f3a3d832-2f25-42c3-808a-7b66368cb237"],
            ["translation_id" => "2a9b57fb-e5af-45cf-8ec4-0e4eacff2865", "translatable_type" => "App\Models\Description", "translatable_id" => "f3a3d832-2f25-42c3-808a-7b66368cb237"],
            ["translation_id" => "d84a09ae-4413-49bf-9715-6ecb6b745e95", "translatable_type" => "App\Models\Description", "translatable_id" => "f3a3d832-2f25-42c3-808a-7b66368cb237"],
            //254
            ["translation_id" => "439c9652-746e-4526-aca5-7e888f3b4c17", "translatable_type" => "App\Models\Description", "translatable_id" => "9ee77656-9f49-4723-85c5-a7e1d8b9b235"],
            ["translation_id" => "72700f90-b35e-44f5-8ffa-0cfe02bca0f9", "translatable_type" => "App\Models\Description", "translatable_id" => "9ee77656-9f49-4723-85c5-a7e1d8b9b235"],
            ["translation_id" => "053b5ec1-3116-4b25-9d70-262dd14d5bb2", "translatable_type" => "App\Models\Description", "translatable_id" => "9ee77656-9f49-4723-85c5-a7e1d8b9b235"],
            //255
            ["translation_id" => "a34237f9-bb43-461a-9b12-421cfd0e4849", "translatable_type" => "App\Models\Description", "translatable_id" => "f14b6aba-d124-41f6-a5f2-7a34f9c7a2da"],
            ["translation_id" => "efe2db4d-8cb5-4b6a-b306-2eb6b06bade9", "translatable_type" => "App\Models\Description", "translatable_id" => "f14b6aba-d124-41f6-a5f2-7a34f9c7a2da"],
            ["translation_id" => "f296d523-6f8a-458f-9d65-561aff0e1552", "translatable_type" => "App\Models\Description", "translatable_id" => "f14b6aba-d124-41f6-a5f2-7a34f9c7a2da"],
            //256
            ["translation_id" => "9ff63dc5-4efe-4884-9313-54eba76cb8f0", "translatable_type" => "App\Models\Description", "translatable_id" => "fde4ba20-30f4-41a8-9c7c-3d4d6004c901"],
            ["translation_id" => "c56362d9-b346-493c-ab7f-7d21dac93d25", "translatable_type" => "App\Models\Description", "translatable_id" => "fde4ba20-30f4-41a8-9c7c-3d4d6004c901"],
            ["translation_id" => "86002eb4-f3c6-46fa-a406-1ed626e44dd5", "translatable_type" => "App\Models\Description", "translatable_id" => "fde4ba20-30f4-41a8-9c7c-3d4d6004c901"],
            //257
            ["translation_id" => "e421fba6-61e7-4647-bf70-9181c7648f46", "translatable_type" => "App\Models\Description", "translatable_id" => "8223060f-280b-47a3-80c7-e60393aaf168"],
            ["translation_id" => "88f27c9d-ac9b-421b-8c35-d5df381543d0", "translatable_type" => "App\Models\Description", "translatable_id" => "8223060f-280b-47a3-80c7-e60393aaf168"],
            ["translation_id" => "17c823af-32aa-454b-9bec-dc9ace79f7f8", "translatable_type" => "App\Models\Description", "translatable_id" => "8223060f-280b-47a3-80c7-e60393aaf168"],
            //258
            ["translation_id" => "ff232025-8dcf-49e5-9c81-df624aa1dbb3", "translatable_type" => "App\Models\Description", "translatable_id" => "43354f65-0023-4fdb-9580-3a9f8c8ccbed"],
            ["translation_id" => "770fbf3a-e493-4064-b1b7-93306c125daa", "translatable_type" => "App\Models\Description", "translatable_id" => "43354f65-0023-4fdb-9580-3a9f8c8ccbed"],
            ["translation_id" => "4eae021f-fa48-4f64-89b3-31ec894b4c52", "translatable_type" => "App\Models\Description", "translatable_id" => "43354f65-0023-4fdb-9580-3a9f8c8ccbed"],
            //259
            ["translation_id" => "165f8d3a-64a6-4118-af4b-2302feb8d358", "translatable_type" => "App\Models\Description", "translatable_id" => "a3073f9f-19ac-42c3-9899-bf18ad4f0e53"],
            ["translation_id" => "1b3406c5-297c-4c8f-b348-3dae6d7e3da3", "translatable_type" => "App\Models\Description", "translatable_id" => "a3073f9f-19ac-42c3-9899-bf18ad4f0e53"],
            ["translation_id" => "a335614c-e771-4410-a458-6d51231d09ac", "translatable_type" => "App\Models\Description", "translatable_id" => "a3073f9f-19ac-42c3-9899-bf18ad4f0e53"],
            //260
            ["translation_id" => "9bc861f0-dafb-4610-9aa8-6f3dd88def39", "translatable_type" => "App\Models\Description", "translatable_id" => "8f91007a-7f8d-490a-9ec4-3275f36a765b"],
            ["translation_id" => "d17f1872-3b8a-4007-a93c-b5e30998cb9c", "translatable_type" => "App\Models\Description", "translatable_id" => "8f91007a-7f8d-490a-9ec4-3275f36a765b"],
            ["translation_id" => "353f1546-a9d0-47a4-b139-cddadc435da1", "translatable_type" => "App\Models\Description", "translatable_id" => "8f91007a-7f8d-490a-9ec4-3275f36a765b"],
            //261
            ["translation_id" => "1713a1c8-58d4-4e0a-a511-d55cab7b667c", "translatable_type" => "App\Models\Description", "translatable_id" => "2301b1cd-651c-4319-bcfb-0d9312285227"],
            ["translation_id" => "329d004e-0d19-4def-b9a4-4036a0d25162", "translatable_type" => "App\Models\Description", "translatable_id" => "2301b1cd-651c-4319-bcfb-0d9312285227"],
            ["translation_id" => "d21a28fe-021d-4993-9924-285239a3530d", "translatable_type" => "App\Models\Description", "translatable_id" => "2301b1cd-651c-4319-bcfb-0d9312285227"],
            //262
            ["translation_id" => "a9201ae4-a06d-493d-ac80-ecb394e7561e", "translatable_type" => "App\Models\Description", "translatable_id" => "a530db92-5a11-4497-8d64-83a2a8915415"],
            ["translation_id" => "47f247e4-0c49-455e-bbd5-3a29a39a802e", "translatable_type" => "App\Models\Description", "translatable_id" => "a530db92-5a11-4497-8d64-83a2a8915415"],
            ["translation_id" => "fa9c6697-52bd-44cb-b397-a3da7337edae", "translatable_type" => "App\Models\Description", "translatable_id" => "a530db92-5a11-4497-8d64-83a2a8915415"],
            //263
            ["translation_id" => "9c8a2430-13d4-4281-a359-4f58e8e03f5e", "translatable_type" => "App\Models\Description", "translatable_id" => "3e3a82d0-d282-4823-a68c-b851605af850"],
            ["translation_id" => "f3e0f19e-35d3-4b6f-a595-f5e792337741", "translatable_type" => "App\Models\Description", "translatable_id" => "3e3a82d0-d282-4823-a68c-b851605af850"],
            ["translation_id" => "37a3a38c-ebe6-4b54-99a4-408e9c76bfd2", "translatable_type" => "App\Models\Description", "translatable_id" => "3e3a82d0-d282-4823-a68c-b851605af850"],
            //264
            ["translation_id" => "2ad71320-1c2f-4c4c-883e-9564bcfe39d9", "translatable_type" => "App\Models\Description", "translatable_id" => "a58e9714-9dc5-4214-b994-c423570ca4f3"],
            ["translation_id" => "06b9933d-2d54-49e9-adea-508d5e046bfe", "translatable_type" => "App\Models\Description", "translatable_id" => "a58e9714-9dc5-4214-b994-c423570ca4f3"],
            ["translation_id" => "18d461d1-a037-49d5-af85-12cef1d22a25", "translatable_type" => "App\Models\Description", "translatable_id" => "a58e9714-9dc5-4214-b994-c423570ca4f3"],
            //265
            ["translation_id" => "9fb4b729-ccad-45e8-9e1d-b3b525bfd03a", "translatable_type" => "App\Models\Description", "translatable_id" => "97a7753a-6a21-4ca5-9063-e4bb62fda78f"],
            ["translation_id" => "9dfb89fc-0d0a-4cbc-809f-27fcace1b2f1", "translatable_type" => "App\Models\Description", "translatable_id" => "97a7753a-6a21-4ca5-9063-e4bb62fda78f"],
            ["translation_id" => "be802ac3-a988-411e-bb0b-daccaae73409", "translatable_type" => "App\Models\Description", "translatable_id" => "97a7753a-6a21-4ca5-9063-e4bb62fda78f"],
            //266
            ["translation_id" => "fdd8ef45-136a-40c5-9159-c395aa1801d8", "translatable_type" => "App\Models\Description", "translatable_id" => "3f0603cb-f3e4-441a-ae57-b6992b6c54eb"],
            ["translation_id" => "818aca9d-c404-4717-b622-e2f5eb5eb95e", "translatable_type" => "App\Models\Description", "translatable_id" => "3f0603cb-f3e4-441a-ae57-b6992b6c54eb"],
            ["translation_id" => "1f9e6d51-50e3-407e-8c69-841029725a61", "translatable_type" => "App\Models\Description", "translatable_id" => "3f0603cb-f3e4-441a-ae57-b6992b6c54eb"],
            //267
            ["translation_id" => "94819a79-aabe-4295-91ef-b82d34edc6d8", "translatable_type" => "App\Models\Description", "translatable_id" => "e4ae8197-369f-4998-a352-c682c3970282"],
            ["translation_id" => "a1ca381b-6938-4c01-bd4b-4c291bb1057b", "translatable_type" => "App\Models\Description", "translatable_id" => "e4ae8197-369f-4998-a352-c682c3970282"],
            ["translation_id" => "a91dae3b-aff6-4ebb-9a08-d94331f19d2f", "translatable_type" => "App\Models\Description", "translatable_id" => "e4ae8197-369f-4998-a352-c682c3970282"],
            //268
            ["translation_id" => "4a4f0080-4da8-4837-9114-c2c97dd4c73d", "translatable_type" => "App\Models\Description", "translatable_id" => "5b0bbf82-15d1-42dd-8b48-d0269840622f"],
            ["translation_id" => "60960c04-9a94-47a2-b730-ca8502cb2754", "translatable_type" => "App\Models\Description", "translatable_id" => "5b0bbf82-15d1-42dd-8b48-d0269840622f"],
            ["translation_id" => "1846fb33-1e0b-47c5-9f6b-42ff8c5e352c", "translatable_type" => "App\Models\Description", "translatable_id" => "5b0bbf82-15d1-42dd-8b48-d0269840622f"],
            //269
            ["translation_id" => "c4a39c4e-f4d6-4c1f-a324-07be75818045", "translatable_type" => "App\Models\Description", "translatable_id" => "d5609f6b-5186-475a-99a5-d111204acbf2"],
            ["translation_id" => "e95c6b49-fab5-426c-a702-00d351bb151d", "translatable_type" => "App\Models\Description", "translatable_id" => "d5609f6b-5186-475a-99a5-d111204acbf2"],
            ["translation_id" => "7f812d8f-b31f-41c0-af6e-2d92dd8b48f7", "translatable_type" => "App\Models\Description", "translatable_id" => "d5609f6b-5186-475a-99a5-d111204acbf2"],
            //270
            ["translation_id" => "14155485-e974-4693-a9f0-d205a5d07a9e", "translatable_type" => "App\Models\Description", "translatable_id" => "b79a20ee-c7e7-4bf1-953d-7a1669f002d4"],
            ["translation_id" => "b511ca60-d6a8-4e28-ae34-3c42a5c2bc4c", "translatable_type" => "App\Models\Description", "translatable_id" => "b79a20ee-c7e7-4bf1-953d-7a1669f002d4"],
            ["translation_id" => "d323095d-6a5d-4ec2-86ba-f0c367274ec7", "translatable_type" => "App\Models\Description", "translatable_id" => "b79a20ee-c7e7-4bf1-953d-7a1669f002d4"],
            //271
            ["translation_id" => "38df7e12-2ee7-41cc-85c3-4733730f125d", "translatable_type" => "App\Models\Description", "translatable_id" => "a1d3e58c-f5ff-4646-97b6-1e0438e90b88"],
            ["translation_id" => "02f35bf9-3f26-4baa-ad14-18d6830aef95", "translatable_type" => "App\Models\Description", "translatable_id" => "a1d3e58c-f5ff-4646-97b6-1e0438e90b88"],
            ["translation_id" => "bbc4a66d-4df6-4f0d-931b-802d75e995b8", "translatable_type" => "App\Models\Description", "translatable_id" => "a1d3e58c-f5ff-4646-97b6-1e0438e90b88"],
            //272
            ["translation_id" => "843f3777-25a6-4235-9c28-e3a605d18ff0", "translatable_type" => "App\Models\Description", "translatable_id" => "a3097f85-18f2-46de-9906-ee125eea89e1"],
            ["translation_id" => "5fadfecd-c1e5-4e01-bc88-52d585a811fb", "translatable_type" => "App\Models\Description", "translatable_id" => "a3097f85-18f2-46de-9906-ee125eea89e1"],
            ["translation_id" => "42dd9f2b-c7a6-4a0b-8ce1-0ff330f60875", "translatable_type" => "App\Models\Description", "translatable_id" => "a3097f85-18f2-46de-9906-ee125eea89e1"],
            //273
            ["translation_id" => "90f49cd7-1c77-42f4-b103-df2072252e75", "translatable_type" => "App\Models\Description", "translatable_id" => "76ee4e5b-9ad6-43d3-96d1-1fa0ae3f90a3"],
            ["translation_id" => "2a56cbf2-1e39-4245-9459-3b4d3bd30287", "translatable_type" => "App\Models\Description", "translatable_id" => "76ee4e5b-9ad6-43d3-96d1-1fa0ae3f90a3"],
            ["translation_id" => "d82561dc-8f2f-4e92-86e2-6af624b2fe38", "translatable_type" => "App\Models\Description", "translatable_id" => "76ee4e5b-9ad6-43d3-96d1-1fa0ae3f90a3"],
            //274
            ["translation_id" => "e10f12ac-60a3-4682-8872-6815b07821bd", "translatable_type" => "App\Models\Description", "translatable_id" => "035a2797-fbf9-4975-a511-2c8c0638981e"],
            ["translation_id" => "d9adbc3b-e970-4797-9b8a-89e1dfc754a8", "translatable_type" => "App\Models\Description", "translatable_id" => "035a2797-fbf9-4975-a511-2c8c0638981e"],
            ["translation_id" => "13de2f11-4289-48e2-92c7-410e338463e5", "translatable_type" => "App\Models\Description", "translatable_id" => "035a2797-fbf9-4975-a511-2c8c0638981e"],
            //275
            ["translation_id" => "f6f4def6-621c-4546-945b-534535107e64", "translatable_type" => "App\Models\Description", "translatable_id" => "34703c85-c9c7-4189-be48-5eafbf0fd2dd"],
            ["translation_id" => "2a5a4fc7-82ba-4ab2-8636-4645fe0c4b97", "translatable_type" => "App\Models\Description", "translatable_id" => "34703c85-c9c7-4189-be48-5eafbf0fd2dd"],
            ["translation_id" => "43131cd4-7eb1-4c10-87b1-0a32583b40a1", "translatable_type" => "App\Models\Description", "translatable_id" => "34703c85-c9c7-4189-be48-5eafbf0fd2dd"],
            //276
            ["translation_id" => "61f62da3-4607-461a-a1a8-d44ae01cb393", "translatable_type" => "App\Models\Description", "translatable_id" => "21d1ef4b-a3ad-40c1-9027-e3b2a339a585"],
            ["translation_id" => "f3a131ec-0af9-4094-b0f2-4bda04fc6b68", "translatable_type" => "App\Models\Description", "translatable_id" => "21d1ef4b-a3ad-40c1-9027-e3b2a339a585"],
            ["translation_id" => "a72c5916-a953-4766-a450-e1726119f7b2", "translatable_type" => "App\Models\Description", "translatable_id" => "21d1ef4b-a3ad-40c1-9027-e3b2a339a585"],
            //277
            ["translation_id" => "b4cdfdb9-9965-4009-bd9f-77da2f786a12", "translatable_type" => "App\Models\Description", "translatable_id" => "9db1bf33-0074-439d-9ecb-157508eaad7c"],
            ["translation_id" => "9392ecb5-baf3-4d0c-984e-7666b6a072a8", "translatable_type" => "App\Models\Description", "translatable_id" => "9db1bf33-0074-439d-9ecb-157508eaad7c"],
            ["translation_id" => "961d8ca6-fb83-4365-bbd9-860412e0adaf", "translatable_type" => "App\Models\Description", "translatable_id" => "9db1bf33-0074-439d-9ecb-157508eaad7c"],
            //278
            ["translation_id" => "748eca80-c8f4-4961-8459-5f8cd40c2e84", "translatable_type" => "App\Models\Description", "translatable_id" => "38b0eb07-af60-4e83-a5ee-6c9ce90f0882"],
            ["translation_id" => "f2a4031f-db5b-41d4-aac2-6441cc5bcdea", "translatable_type" => "App\Models\Description", "translatable_id" => "38b0eb07-af60-4e83-a5ee-6c9ce90f0882"],
            ["translation_id" => "bc68f433-92dd-454c-aff3-1396abb3e484", "translatable_type" => "App\Models\Description", "translatable_id" => "38b0eb07-af60-4e83-a5ee-6c9ce90f0882"],
            //279
            ["translation_id" => "1f00e88b-25e8-4105-ba3f-b3e49b9b7eb3", "translatable_type" => "App\Models\Description", "translatable_id" => "8defa9b9-19eb-4503-923e-76b7a9bdedc9"],
            ["translation_id" => "f8ff9489-a521-48e5-a860-1d61b5deba83", "translatable_type" => "App\Models\Description", "translatable_id" => "8defa9b9-19eb-4503-923e-76b7a9bdedc9"],
            ["translation_id" => "e542acb1-8ae2-4e52-88ea-61e0ed0ffffd", "translatable_type" => "App\Models\Description", "translatable_id" => "8defa9b9-19eb-4503-923e-76b7a9bdedc9"],
            //280
            ["translation_id" => "c00a14cc-bcf8-453e-b716-b99de8ba865c", "translatable_type" => "App\Models\Description", "translatable_id" => "08ec040f-0785-4f3f-898a-b29292bd4bf0"],
            ["translation_id" => "3554a1e7-4563-4f5d-8609-f977d38769ad", "translatable_type" => "App\Models\Description", "translatable_id" => "08ec040f-0785-4f3f-898a-b29292bd4bf0"],
            ["translation_id" => "8a445547-5ba3-4a21-b720-2b22e0465d94", "translatable_type" => "App\Models\Description", "translatable_id" => "08ec040f-0785-4f3f-898a-b29292bd4bf0"],
            //281
            ["translation_id" => "4f90d82a-91a2-4a1f-951e-8b87bea57c12", "translatable_type" => "App\Models\Description", "translatable_id" => "506d0a95-bcb0-45de-ba16-1cb69a0f9fc9"],
            ["translation_id" => "08764454-5350-4baa-832c-5bc29de7d05e", "translatable_type" => "App\Models\Description", "translatable_id" => "506d0a95-bcb0-45de-ba16-1cb69a0f9fc9"],
            ["translation_id" => "e8df489d-325f-458a-a5a7-a776f0e4b980", "translatable_type" => "App\Models\Description", "translatable_id" => "506d0a95-bcb0-45de-ba16-1cb69a0f9fc9"],
            //282
            ["translation_id" => "aca14731-4697-47b5-889d-99c7eb4144cf", "translatable_type" => "App\Models\Description", "translatable_id" => "2465348f-70d5-492c-9df0-86f40d66f808"],
            ["translation_id" => "722ebb8f-ce09-4bc6-8fb3-16a564e14380", "translatable_type" => "App\Models\Description", "translatable_id" => "2465348f-70d5-492c-9df0-86f40d66f808"],
            ["translation_id" => "25613c18-2532-48a0-b5e2-57c84b3055bc", "translatable_type" => "App\Models\Description", "translatable_id" => "2465348f-70d5-492c-9df0-86f40d66f808"],
            //283
            ["translation_id" => "1b00dc30-3b1c-4383-8057-c81d11edb9de", "translatable_type" => "App\Models\Description", "translatable_id" => "ec162f8f-dbc0-4be3-8868-3bf8a07a8c63"],
            ["translation_id" => "de061c51-97b2-4c5d-b16f-ab45143f2f05", "translatable_type" => "App\Models\Description", "translatable_id" => "ec162f8f-dbc0-4be3-8868-3bf8a07a8c63"],
            ["translation_id" => "e0914307-1322-4bce-bf03-7b95a4d133fb", "translatable_type" => "App\Models\Description", "translatable_id" => "ec162f8f-dbc0-4be3-8868-3bf8a07a8c63"],
            //284
            ["translation_id" => "7ec82c59-4e58-40ba-b520-66373cdf321b", "translatable_type" => "App\Models\Description", "translatable_id" => "f94580d8-1179-4a4b-ae5f-a08c673727ad"],
            ["translation_id" => "5e1cfcff-f1f4-4924-8f1c-d068b7f3fd58", "translatable_type" => "App\Models\Description", "translatable_id" => "f94580d8-1179-4a4b-ae5f-a08c673727ad"],
            ["translation_id" => "4538a8c8-b1b3-4077-86a7-54929d24726a", "translatable_type" => "App\Models\Description", "translatable_id" => "f94580d8-1179-4a4b-ae5f-a08c673727ad"],
            //285
            ["translation_id" => "d0ed1648-1d84-4139-a4ee-53e00d3f4dd1", "translatable_type" => "App\Models\Description", "translatable_id" => "0802715f-dfcb-46bc-8fc7-611a0245ba2d"],
            ["translation_id" => "6e9a473a-c359-4274-a3bc-4f336a4cd8d0", "translatable_type" => "App\Models\Description", "translatable_id" => "0802715f-dfcb-46bc-8fc7-611a0245ba2d"],
            ["translation_id" => "34030953-6a90-4ac6-be2b-eac59766734b", "translatable_type" => "App\Models\Description", "translatable_id" => "0802715f-dfcb-46bc-8fc7-611a0245ba2d"],
            //286
            ["translation_id" => "57b1daf4-e512-462a-a669-5e250c26900a", "translatable_type" => "App\Models\Description", "translatable_id" => "017b2f70-91b4-44ca-8052-b8953859ceea"],
            ["translation_id" => "7222452e-193f-4b8b-8435-7030908a722f", "translatable_type" => "App\Models\Description", "translatable_id" => "017b2f70-91b4-44ca-8052-b8953859ceea"],
            ["translation_id" => "de09a830-0278-4bdd-a018-674eedb3dacd", "translatable_type" => "App\Models\Description", "translatable_id" => "017b2f70-91b4-44ca-8052-b8953859ceea"],
            //287
            ["translation_id" => "440832af-34b0-4ae3-ab08-de6071ffa083", "translatable_type" => "App\Models\Description", "translatable_id" => "66af8bd8-e0b1-4fc7-88a2-77e9c9308556"],
            ["translation_id" => "350ccafd-28ad-48ab-aeab-5f6367b82b21", "translatable_type" => "App\Models\Description", "translatable_id" => "66af8bd8-e0b1-4fc7-88a2-77e9c9308556"],
            ["translation_id" => "e48bef07-03b7-48a6-a61b-f7aa3726ea32", "translatable_type" => "App\Models\Description", "translatable_id" => "66af8bd8-e0b1-4fc7-88a2-77e9c9308556"],
            //288
            ["translation_id" => "6ffc74b4-a9b7-41da-9a5d-9d11105ccaaf", "translatable_type" => "App\Models\Description", "translatable_id" => "7279e507-8ef3-430d-a419-9e5b89b7dff0"],
            ["translation_id" => "5ea589a9-ac6c-4844-9b6d-c7a364efe779", "translatable_type" => "App\Models\Description", "translatable_id" => "7279e507-8ef3-430d-a419-9e5b89b7dff0"],
            ["translation_id" => "3d700081-8ac4-4fba-8926-5cdaca9a6a60", "translatable_type" => "App\Models\Description", "translatable_id" => "7279e507-8ef3-430d-a419-9e5b89b7dff0"],
            //289
            ["translation_id" => "4f87627b-68a7-4b2c-bd61-f192c5f5a2e1", "translatable_type" => "App\Models\Description", "translatable_id" => "967e85bc-2dd3-4c00-9725-7deb3cbad591"],
            ["translation_id" => "89ff19de-9ae3-45f3-b07d-739da528e246", "translatable_type" => "App\Models\Description", "translatable_id" => "967e85bc-2dd3-4c00-9725-7deb3cbad591"],
            ["translation_id" => "ed63c56b-06a2-4fe7-8c41-ceab8b00006a", "translatable_type" => "App\Models\Description", "translatable_id" => "967e85bc-2dd3-4c00-9725-7deb3cbad591"],
            //290
            ["translation_id" => "ff4b6358-0dee-4b16-8a7e-e8c620ae50e1", "translatable_type" => "App\Models\Description", "translatable_id" => "c8971c04-a662-4665-a261-ec0430a15d95"],
            ["translation_id" => "1caaf8fb-c5cb-4085-823d-1ce095fd16bc", "translatable_type" => "App\Models\Description", "translatable_id" => "c8971c04-a662-4665-a261-ec0430a15d95"],
            ["translation_id" => "703b0d62-5593-4ebd-ad63-37964e82fce5", "translatable_type" => "App\Models\Description", "translatable_id" => "c8971c04-a662-4665-a261-ec0430a15d95"],
            //291
            ["translation_id" => "f2ec949e-10b6-4679-864e-d229dcf3491c", "translatable_type" => "App\Models\Description", "translatable_id" => "d016c3fd-e113-4a82-a3fd-ab97fb6e6ae4"],
            ["translation_id" => "294c8fa0-cbbe-45b2-88a3-b3e3c2ff6652", "translatable_type" => "App\Models\Description", "translatable_id" => "d016c3fd-e113-4a82-a3fd-ab97fb6e6ae4"],
            ["translation_id" => "21f8e747-f45e-4558-9f99-111e8a79c975", "translatable_type" => "App\Models\Description", "translatable_id" => "d016c3fd-e113-4a82-a3fd-ab97fb6e6ae4"],
            //292
            ["translation_id" => "da0d4541-951b-41f1-9fc1-53c79659b885", "translatable_type" => "App\Models\Description", "translatable_id" => "4bd598d6-7d7b-45a3-b2c7-9e661051546c"],
            ["translation_id" => "5614a251-373a-438e-b806-5f89314404b0", "translatable_type" => "App\Models\Description", "translatable_id" => "4bd598d6-7d7b-45a3-b2c7-9e661051546c"],
            ["translation_id" => "c93657ef-0d23-43ce-9342-7f1aa1e390c3", "translatable_type" => "App\Models\Description", "translatable_id" => "4bd598d6-7d7b-45a3-b2c7-9e661051546c"],
            //293
            ["translation_id" => "e30a50f6-0e08-43a8-9121-83dcd0f5929f", "translatable_type" => "App\Models\Description", "translatable_id" => "eade9b2c-f19f-4805-a449-6f4ffb7288ef"],
            ["translation_id" => "d21ad26d-b39d-43ae-a252-80c43c61ed98", "translatable_type" => "App\Models\Description", "translatable_id" => "eade9b2c-f19f-4805-a449-6f4ffb7288ef"],
            ["translation_id" => "676dca6e-a94e-4458-b864-64f06b7294dc", "translatable_type" => "App\Models\Description", "translatable_id" => "eade9b2c-f19f-4805-a449-6f4ffb7288ef"],
            //294
            ["translation_id" => "06a6e171-2416-4895-9849-246b2edadf41", "translatable_type" => "App\Models\Description", "translatable_id" => "41c2bbd2-e8cc-45c7-9307-688e87d5ff5b"],
            ["translation_id" => "3f7bf8a5-61ab-4660-80f3-d7ec74196317", "translatable_type" => "App\Models\Description", "translatable_id" => "41c2bbd2-e8cc-45c7-9307-688e87d5ff5b"],
            ["translation_id" => "6b3530b7-4154-48db-8d7a-1ab526435cc8", "translatable_type" => "App\Models\Description", "translatable_id" => "41c2bbd2-e8cc-45c7-9307-688e87d5ff5b"],
            //295
            ["translation_id" => "79e493c8-2f4c-4af9-94da-3dc282997abe", "translatable_type" => "App\Models\Description", "translatable_id" => "979cecee-5851-4f2f-a38a-170ac033fa26"],
            ["translation_id" => "990f09ab-0472-4cea-b784-213dd79423cd", "translatable_type" => "App\Models\Description", "translatable_id" => "979cecee-5851-4f2f-a38a-170ac033fa26"],
            ["translation_id" => "f8784595-55ba-427e-a473-915fb8a48d24", "translatable_type" => "App\Models\Description", "translatable_id" => "979cecee-5851-4f2f-a38a-170ac033fa26"],
            //296
            ["translation_id" => "d5d05953-d6ae-4e2b-a2fa-63a39513f42d", "translatable_type" => "App\Models\Description", "translatable_id" => "3b773737-487f-4e13-9365-208f0116f024"],
            ["translation_id" => "4d7bcf5a-892f-4612-b843-e6f5e997200e", "translatable_type" => "App\Models\Description", "translatable_id" => "3b773737-487f-4e13-9365-208f0116f024"],
            ["translation_id" => "2756b84a-cc90-4422-a9c4-566a879f81e4", "translatable_type" => "App\Models\Description", "translatable_id" => "3b773737-487f-4e13-9365-208f0116f024"],
            //297
            ["translation_id" => "01f19647-28fc-4fdf-9eef-69f8ac140a50", "translatable_type" => "App\Models\Description", "translatable_id" => "8726db48-15a6-4119-828e-fb28042b1750"],
            ["translation_id" => "09702a99-1619-421c-9bbd-ad1f226313c8", "translatable_type" => "App\Models\Description", "translatable_id" => "8726db48-15a6-4119-828e-fb28042b1750"],
            ["translation_id" => "26d16354-34e3-4d8a-ad7d-84ba28657b9d", "translatable_type" => "App\Models\Description", "translatable_id" => "8726db48-15a6-4119-828e-fb28042b1750"],
            //298
            ["translation_id" => "7304a1a8-dcad-44f8-812a-3510bfe00ff3", "translatable_type" => "App\Models\Description", "translatable_id" => "de4d17c4-45dd-4774-8609-a4e8e33b8ace"],
            ["translation_id" => "d6bbba67-78dc-4f87-9638-93b89e99d458", "translatable_type" => "App\Models\Description", "translatable_id" => "de4d17c4-45dd-4774-8609-a4e8e33b8ace"],
            ["translation_id" => "1f4ab62d-86a3-4a9d-835f-8fc9ff885f69", "translatable_type" => "App\Models\Description", "translatable_id" => "de4d17c4-45dd-4774-8609-a4e8e33b8ace"],
            //299
            ["translation_id" => "2d142e8b-d588-4902-abe9-0a387d11b171", "translatable_type" => "App\Models\Description", "translatable_id" => "a687e433-45b8-4512-bf02-a4fa4156c95f"],
            ["translation_id" => "93f24658-a66f-4de5-b700-7071b282f670", "translatable_type" => "App\Models\Description", "translatable_id" => "a687e433-45b8-4512-bf02-a4fa4156c95f"],
            ["translation_id" => "70dafd6f-73c8-44f2-bb7a-ed7ae1685633", "translatable_type" => "App\Models\Description", "translatable_id" => "a687e433-45b8-4512-bf02-a4fa4156c95f"],
            //300
            ["translation_id" => "ded31c76-697b-495f-8762-afcae417b5bf", "translatable_type" => "App\Models\Description", "translatable_id" => "48e3f743-0d7b-4629-a425-8c974da7aa81"],
            ["translation_id" => "642775e2-a023-4cb4-8a6b-11aeba74fe19", "translatable_type" => "App\Models\Description", "translatable_id" => "48e3f743-0d7b-4629-a425-8c974da7aa81"],
            ["translation_id" => "710ac6b0-88b8-4b1a-a202-fd53a6a7e828", "translatable_type" => "App\Models\Description", "translatable_id" => "48e3f743-0d7b-4629-a425-8c974da7aa81"],
            //301
            ["translation_id" => "af3a187c-e8b3-48a5-b06b-8b00a8d237b5", "translatable_type" => "App\Models\Description", "translatable_id" => "eaaa0700-346b-45fe-b053-5baeaecc667d"],
            ["translation_id" => "98b7a004-c4c6-4842-a971-74e7c797ac72", "translatable_type" => "App\Models\Description", "translatable_id" => "eaaa0700-346b-45fe-b053-5baeaecc667d"],
            ["translation_id" => "a2bff3c0-52f5-463a-b4b2-641fc91b0d9f", "translatable_type" => "App\Models\Description", "translatable_id" => "eaaa0700-346b-45fe-b053-5baeaecc667d"],
            //302
            ["translation_id" => "9909f5b8-3aef-4ace-8dde-7a3f41bb117a", "translatable_type" => "App\Models\Description", "translatable_id" => "3d2411f4-b303-4e3e-ad27-3b3244065e16"],
            ["translation_id" => "3221fccb-78d3-42b0-a77d-2bccb92fe0ff", "translatable_type" => "App\Models\Description", "translatable_id" => "3d2411f4-b303-4e3e-ad27-3b3244065e16"],
            ["translation_id" => "12380df8-e06b-449a-8574-9a36314677c4", "translatable_type" => "App\Models\Description", "translatable_id" => "3d2411f4-b303-4e3e-ad27-3b3244065e16"],
            //303
            ["translation_id" => "bda89024-f392-46a5-b8ed-e98cec9c0646", "translatable_type" => "App\Models\Description", "translatable_id" => "bd0417fe-dedc-46bc-873a-b519817bcdff"],
            ["translation_id" => "59b38ca7-c7f1-4f2b-9ff9-fe3df27a8e29", "translatable_type" => "App\Models\Description", "translatable_id" => "bd0417fe-dedc-46bc-873a-b519817bcdff"],
            ["translation_id" => "ac39bb97-581a-4d70-8439-d70f05680815", "translatable_type" => "App\Models\Description", "translatable_id" => "bd0417fe-dedc-46bc-873a-b519817bcdff"],
            //304
            ["translation_id" => "66a7ba7f-bc0b-4983-a1bd-fa413cf9ea34", "translatable_type" => "App\Models\Description", "translatable_id" => "5cb5a8b2-bac1-4806-8a2c-97c644af3ab6"],
            ["translation_id" => "6cf4d866-89b6-4bdb-9e7f-aa998ceccec7", "translatable_type" => "App\Models\Description", "translatable_id" => "5cb5a8b2-bac1-4806-8a2c-97c644af3ab6"],
            ["translation_id" => "0e91f5ef-33fc-4ab4-88ba-16a34743d1c4", "translatable_type" => "App\Models\Description", "translatable_id" => "5cb5a8b2-bac1-4806-8a2c-97c644af3ab6"],
            //305
            ["translation_id" => "e48cc108-2161-4023-b0b1-640aa8472b5a", "translatable_type" => "App\Models\Description", "translatable_id" => "347b3b64-3288-4cba-8943-650bdd2cf400"],
            ["translation_id" => "a30ce37a-ae79-4d0c-a317-9c1dedff3a31", "translatable_type" => "App\Models\Description", "translatable_id" => "347b3b64-3288-4cba-8943-650bdd2cf400"],
            ["translation_id" => "1450d2f1-3880-43d2-b59b-610779acdb65", "translatable_type" => "App\Models\Description", "translatable_id" => "347b3b64-3288-4cba-8943-650bdd2cf400"],
            //306
            ["translation_id" => "7018ca30-6e38-45a1-8652-dd8c4079a787", "translatable_type" => "App\Models\Description", "translatable_id" => "06b32aeb-c51b-46e8-9ee3-0386ddaac7b6"],
            ["translation_id" => "3c6011d5-cacf-4e9f-967c-82c8272459c8", "translatable_type" => "App\Models\Description", "translatable_id" => "06b32aeb-c51b-46e8-9ee3-0386ddaac7b6"],
            ["translation_id" => "49cea0ed-80b1-4d6d-ab6f-6a84801fab79", "translatable_type" => "App\Models\Description", "translatable_id" => "06b32aeb-c51b-46e8-9ee3-0386ddaac7b6"],
            //307
            ["translation_id" => "64a4e6a3-7787-463b-88a7-2a7751be3843", "translatable_type" => "App\Models\Description", "translatable_id" => "3e2fe439-2868-4155-a051-1e998ba27e47"],
            ["translation_id" => "54916417-2b43-44e5-8af0-adc55f0dd628", "translatable_type" => "App\Models\Description", "translatable_id" => "3e2fe439-2868-4155-a051-1e998ba27e47"],
            ["translation_id" => "cb6e9259-f4bf-475e-b749-ddc3fe127a71", "translatable_type" => "App\Models\Description", "translatable_id" => "3e2fe439-2868-4155-a051-1e998ba27e47"],
            //308
            ["translation_id" => "e0531190-c81f-4ddc-9eff-f784639a9ec2", "translatable_type" => "App\Models\Description", "translatable_id" => "c52fb8b3-3ac0-4329-96e4-dd57bb8c4a2c"],
            ["translation_id" => "f1d5498b-84f6-4040-9752-faf89868478e", "translatable_type" => "App\Models\Description", "translatable_id" => "c52fb8b3-3ac0-4329-96e4-dd57bb8c4a2c"],
            ["translation_id" => "e1a633da-70c5-4ace-9043-e4ac03c0be1e", "translatable_type" => "App\Models\Description", "translatable_id" => "c52fb8b3-3ac0-4329-96e4-dd57bb8c4a2c"],
            //309
            ["translation_id" => "7c224593-3fe6-4a86-a5c6-3135191f0f2d", "translatable_type" => "App\Models\Description", "translatable_id" => "e9ff43f8-3518-4e11-bcdc-1d8374800c20"],
            ["translation_id" => "b0222209-c5a8-4d14-b9ad-747f17b48bb8", "translatable_type" => "App\Models\Description", "translatable_id" => "e9ff43f8-3518-4e11-bcdc-1d8374800c20"],
            ["translation_id" => "d5158b8a-6997-4775-bf31-664167a0b49b", "translatable_type" => "App\Models\Description", "translatable_id" => "e9ff43f8-3518-4e11-bcdc-1d8374800c20"],
            //310
            ["translation_id" => "2379db65-7aaf-4c92-937a-874fa725f1ec", "translatable_type" => "App\Models\Description", "translatable_id" => "4cff25ee-f75e-49fa-a29a-bf64d0cfa5d1"],
            ["translation_id" => "1b0e5177-02e5-4939-abff-5b21c4460c5f", "translatable_type" => "App\Models\Description", "translatable_id" => "4cff25ee-f75e-49fa-a29a-bf64d0cfa5d1"],
            ["translation_id" => "7b4d0603-b1dc-4414-8062-6472355b9fda", "translatable_type" => "App\Models\Description", "translatable_id" => "4cff25ee-f75e-49fa-a29a-bf64d0cfa5d1"],
            //311
            ["translation_id" => "6ae0ba45-1a0f-4a66-a180-14b577848a6b", "translatable_type" => "App\Models\Description", "translatable_id" => "bcd0acfa-deb8-465d-96b7-c89c3103a4bd"],
            ["translation_id" => "7e9c15cd-8f84-4aab-9dd7-f7dd6eb0560d", "translatable_type" => "App\Models\Description", "translatable_id" => "bcd0acfa-deb8-465d-96b7-c89c3103a4bd"],
            ["translation_id" => "87f6a82e-39c9-4544-bf31-7f132acc70e1", "translatable_type" => "App\Models\Description", "translatable_id" => "bcd0acfa-deb8-465d-96b7-c89c3103a4bd"],
            //312
            ["translation_id" => "1e75ef9f-197e-48c3-b4e7-32905ee4471a", "translatable_type" => "App\Models\Description", "translatable_id" => "becd47a0-3a6f-427b-9b80-cbd8e2d1bfb9"],
            ["translation_id" => "15f4164e-09c0-42e6-8ef1-b5231295c6e3", "translatable_type" => "App\Models\Description", "translatable_id" => "becd47a0-3a6f-427b-9b80-cbd8e2d1bfb9"],
            ["translation_id" => "bd46e29e-2c62-478c-ac2c-19e517cbe27e", "translatable_type" => "App\Models\Description", "translatable_id" => "becd47a0-3a6f-427b-9b80-cbd8e2d1bfb9"],
            //313
            ["translation_id" => "ab93bad7-06a1-47f7-a8d6-8922a39dda89", "translatable_type" => "App\Models\Description", "translatable_id" => "e34b9594-0396-4105-a5ba-aa7d837a84c7"],
            ["translation_id" => "7acd17dc-abe5-41a4-ab10-372efe989d5c", "translatable_type" => "App\Models\Description", "translatable_id" => "e34b9594-0396-4105-a5ba-aa7d837a84c7"],
            ["translation_id" => "b52e2acb-d890-4ea3-bee9-e4cbcb3e515f", "translatable_type" => "App\Models\Description", "translatable_id" => "e34b9594-0396-4105-a5ba-aa7d837a84c7"],
            //314
            ["translation_id" => "bd3bab23-5482-4d1f-929a-41bab497dfbf", "translatable_type" => "App\Models\Description", "translatable_id" => "9b08149f-6c24-474a-89ff-67122e232a6d"],
            ["translation_id" => "46e726e8-1a7d-4c90-a7f3-ac5e1daca814", "translatable_type" => "App\Models\Description", "translatable_id" => "9b08149f-6c24-474a-89ff-67122e232a6d"],
            ["translation_id" => "611d2873-f644-4ed6-825b-cf88f7c65a23", "translatable_type" => "App\Models\Description", "translatable_id" => "9b08149f-6c24-474a-89ff-67122e232a6d"],
            //315
            ["translation_id" => "1894e052-9a9b-40ab-994b-481ca457697e", "translatable_type" => "App\Models\Description", "translatable_id" => "70712848-1b3e-4aee-8f25-551f0475c75c"],
            ["translation_id" => "dd2245fe-d1f8-4104-8bad-269ba2de9acc", "translatable_type" => "App\Models\Description", "translatable_id" => "70712848-1b3e-4aee-8f25-551f0475c75c"],
            ["translation_id" => "6bd4dc5b-0a8c-4f16-98ac-b654a673c714", "translatable_type" => "App\Models\Description", "translatable_id" => "70712848-1b3e-4aee-8f25-551f0475c75c"],
            //316
            ["translation_id" => "efb77f9c-061a-49d4-bbe0-6412f40a4fe9", "translatable_type" => "App\Models\Description", "translatable_id" => "fe352def-117d-49c6-ab2c-830b28917625"],
            ["translation_id" => "a7501b4e-1a64-4439-9ef9-483ccbc01815", "translatable_type" => "App\Models\Description", "translatable_id" => "fe352def-117d-49c6-ab2c-830b28917625"],
            ["translation_id" => "0f21b089-5c98-44de-9f13-30d40c7055ad", "translatable_type" => "App\Models\Description", "translatable_id" => "fe352def-117d-49c6-ab2c-830b28917625"],
            //317
            ["translation_id" => "148db0ed-8f16-49e0-948f-3bb3fef3a316", "translatable_type" => "App\Models\Description", "translatable_id" => "258bd032-cf64-4e18-a21b-62356238d6b2"],
            ["translation_id" => "a3c20815-db74-4f94-a116-4bf6022a5d4c", "translatable_type" => "App\Models\Description", "translatable_id" => "258bd032-cf64-4e18-a21b-62356238d6b2"],
            ["translation_id" => "c8e8b977-5006-4eb4-847b-dfb0cf03bd0d", "translatable_type" => "App\Models\Description", "translatable_id" => "258bd032-cf64-4e18-a21b-62356238d6b2"],
            //318
            ["translation_id" => "3ad77928-f231-4164-8235-d00d6f7354fb", "translatable_type" => "App\Models\Description", "translatable_id" => "5bfcae09-4e4f-48d2-98c5-d595ddbc69f2"],
            ["translation_id" => "03436b69-c35a-494f-823d-fc20ccb57442", "translatable_type" => "App\Models\Description", "translatable_id" => "5bfcae09-4e4f-48d2-98c5-d595ddbc69f2"],
            ["translation_id" => "842c4066-34e3-4f34-94ab-019ee8a52df2", "translatable_type" => "App\Models\Description", "translatable_id" => "5bfcae09-4e4f-48d2-98c5-d595ddbc69f2"],
            //319
            ["translation_id" => "90fa206c-1a3d-42bc-8e1b-fb5949ced4a8", "translatable_type" => "App\Models\Description", "translatable_id" => "68763838-d3cb-4c94-b37d-773cd922ba65"],
            ["translation_id" => "e8062b19-d369-4a6e-bafc-84a87e7cb563", "translatable_type" => "App\Models\Description", "translatable_id" => "68763838-d3cb-4c94-b37d-773cd922ba65"],
            ["translation_id" => "054beeaf-b60a-4099-a665-613eda1cf75b", "translatable_type" => "App\Models\Description", "translatable_id" => "68763838-d3cb-4c94-b37d-773cd922ba65"],
            //320
            ["translation_id" => "848a7036-fbc9-4d03-9706-527cec6c3925", "translatable_type" => "App\Models\Description", "translatable_id" => "58621dc3-d043-467f-82f8-809a2245c25d"],
            ["translation_id" => "8f4bc3bb-ccf6-459f-b9e7-8dff353f3169", "translatable_type" => "App\Models\Description", "translatable_id" => "58621dc3-d043-467f-82f8-809a2245c25d"],
            ["translation_id" => "70e9fb21-a13d-4a83-b850-2d7e2a563c22", "translatable_type" => "App\Models\Description", "translatable_id" => "58621dc3-d043-467f-82f8-809a2245c25d"],
            //321
            ["translation_id" => "8f4d884a-e72e-4c73-8912-ba74c6e0cf39", "translatable_type" => "App\Models\Description", "translatable_id" => "e6c97a86-91c4-42ca-9129-1f5bb1ecebc7"],
            ["translation_id" => "03310805-5bb9-4c1c-930d-3136f3f9da21", "translatable_type" => "App\Models\Description", "translatable_id" => "e6c97a86-91c4-42ca-9129-1f5bb1ecebc7"],
            ["translation_id" => "bc09e9fd-ab01-4c7f-8645-69d4c491b4bb", "translatable_type" => "App\Models\Description", "translatable_id" => "e6c97a86-91c4-42ca-9129-1f5bb1ecebc7"],
            //322
            ["translation_id" => "bac5cc4d-49d4-4892-9e3b-42033de54a28", "translatable_type" => "App\Models\Description", "translatable_id" => "5add22e1-3685-43fa-a7ed-5ab8aef8efb7"],
            ["translation_id" => "7f852b53-22d2-4539-82a8-d1d717fec9cd", "translatable_type" => "App\Models\Description", "translatable_id" => "5add22e1-3685-43fa-a7ed-5ab8aef8efb7"],
            ["translation_id" => "dd3eb08b-2e9a-4d26-bd22-03c558d37090", "translatable_type" => "App\Models\Description", "translatable_id" => "5add22e1-3685-43fa-a7ed-5ab8aef8efb7"],
            //323
            ["translation_id" => "01942e59-4549-4596-91eb-b7c6693bc2ed", "translatable_type" => "App\Models\Description", "translatable_id" => "95efcc61-772a-407e-a6ba-f464d968ba8c"],
            ["translation_id" => "7b14c0d6-40e7-4677-8211-1441e23b5bcd", "translatable_type" => "App\Models\Description", "translatable_id" => "95efcc61-772a-407e-a6ba-f464d968ba8c"],
            ["translation_id" => "25bd5f3c-bbc2-485f-93bf-429dfc6e2bad", "translatable_type" => "App\Models\Description", "translatable_id" => "95efcc61-772a-407e-a6ba-f464d968ba8c"],
            //324
            ["translation_id" => "6c4813f7-3fda-43a1-b4cd-364efc01eea7", "translatable_type" => "App\Models\Description", "translatable_id" => "42850d3d-75be-4fc3-9d19-1a987fda7456"],
            ["translation_id" => "fc6f1aea-7aeb-4dc2-9a73-c4c31d0872d2", "translatable_type" => "App\Models\Description", "translatable_id" => "42850d3d-75be-4fc3-9d19-1a987fda7456"],
            ["translation_id" => "0dccec15-d6cd-479a-b797-e2a00e5dcf3c", "translatable_type" => "App\Models\Description", "translatable_id" => "42850d3d-75be-4fc3-9d19-1a987fda7456"],
            //325
            ["translation_id" => "72389ef3-4a15-4de5-b307-cabfaa64c69f", "translatable_type" => "App\Models\Description", "translatable_id" => "cfcf8512-7ef4-4826-8fe1-ff882132d0bc"],
            ["translation_id" => "46efac65-f239-4e38-afb5-0a8b75e94ec9", "translatable_type" => "App\Models\Description", "translatable_id" => "cfcf8512-7ef4-4826-8fe1-ff882132d0bc"],
            ["translation_id" => "9ea75688-920f-4b08-8a3b-c8382ea409ce", "translatable_type" => "App\Models\Description", "translatable_id" => "cfcf8512-7ef4-4826-8fe1-ff882132d0bc"],
            ];
        DB::table("translatables")->insert($translatable);
    }
}
