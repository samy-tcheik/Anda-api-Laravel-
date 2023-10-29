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
            ];

        DB::table("translatables")->insert($translatable);
    }
}
