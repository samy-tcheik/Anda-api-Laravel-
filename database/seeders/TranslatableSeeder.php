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
            //=============TEST==============================
            //1
            ["translation_id" => "000c5d5b-1ee2-4c58-b95a-6f76f532317e", "translatable_type" => "App\Models\Place", "translatable_id" => "0bfd96db-ceb8-417f-998f-4818c58e3a8c"],
            ["translation_id" => "0012f4e4-50c4-442c-8332-a9f5ea13e9e1", "translatable_type" => "App\Models\Place", "translatable_id" => "0bfd96db-ceb8-417f-998f-4818c58e3a8c"],
            ["translation_id" => "0020c9cd-efdb-47c1-b678-205b48c0829e", "translatable_type" => "App\Models\Place", "translatable_id" => "0bfd96db-ceb8-417f-998f-4818c58e3a8c"],
            //2
            ["translation_id" => "aed428f4-9f4d-4502-8348-8e0506ad40c0", "translatable_type" => "App\Models\Place", "translatable_id" => "d979f84e-e17f-4177-aed8-df985aadac4c"],
            ["translation_id" => "d985ef68-6a54-4d57-a9d6-da2d72435d2c", "translatable_type" => "App\Models\Place", "translatable_id" => "d979f84e-e17f-4177-aed8-df985aadac4c"],
            ["translation_id" => "7eff27fe-2ad7-4f55-b6b4-411a78ef4d03", "translatable_type" => "App\Models\Place", "translatable_id" => "d979f84e-e17f-4177-aed8-df985aadac4c"],
            //3
            ["translation_id" => "481e676e-02d9-487d-8cfc-27a41121436e", "translatable_type" => "App\Models\Place", "translatable_id" => "423777f6-e3ac-4742-9235-14bf0896b1db"],
            ["translation_id" => "29037da7-6275-4ef9-a4f0-15cc4b1015a9", "translatable_type" => "App\Models\Place", "translatable_id" => "423777f6-e3ac-4742-9235-14bf0896b1db"],
            ["translation_id" => "bc0fd0ee-c37d-4c33-bc11-be19defe8cfc", "translatable_type" => "App\Models\Place", "translatable_id" => "423777f6-e3ac-4742-9235-14bf0896b1db"],
            //4
            ["translation_id" => "59744f08-4a26-4a36-bec2-eed9beebd1ea", "translatable_type" => "App\Models\Place", "translatable_id" => "d5f486e9-6291-437a-b296-8fe045109629"],
            ["translation_id" => "d2bee6dc-fc5e-4b15-bb43-0491daf92df0", "translatable_type" => "App\Models\Place", "translatable_id" => "d5f486e9-6291-437a-b296-8fe045109629"],
            ["translation_id" => "68004b8c-2e4d-46b2-931e-d6e0600640b7", "translatable_type" => "App\Models\Place", "translatable_id" => "d5f486e9-6291-437a-b296-8fe045109629"],
            //5
            ["translation_id" => "b72f4602-5350-41da-b861-fa048f2f2f4c", "translatable_type" => "App\Models\Place", "translatable_id" => "6a6324af-ce3b-4d96-8574-4b307d5d9dd8"],
            ["translation_id" => "e1ffff17-d17b-4837-99aa-883da8b157c5", "translatable_type" => "App\Models\Place", "translatable_id" => "6a6324af-ce3b-4d96-8574-4b307d5d9dd8"],
            ["translation_id" => "2b7a6251-875f-4e01-9d72-b56c079a1d79", "translatable_type" => "App\Models\Place", "translatable_id" => "6a6324af-ce3b-4d96-8574-4b307d5d9dd8"],
            //6
            ["translation_id" => "54b3a759-e3d1-4c66-af20-6ffa86dfbbcc", "translatable_type" => "App\Models\Place", "translatable_id" => "daffb803-5672-4cac-b732-60e07fbc70f6"],
            ["translation_id" => "e90460f7-dce0-4ebf-ba6e-63115fea8110", "translatable_type" => "App\Models\Place", "translatable_id" => "daffb803-5672-4cac-b732-60e07fbc70f6"],
            ["translation_id" => "dc22df23-764c-4e82-b2a7-3ca273cdd25e", "translatable_type" => "App\Models\Place", "translatable_id" => "daffb803-5672-4cac-b732-60e07fbc70f6"],
            //7
            ["translation_id" => "16fd22ac-9da8-466d-9e31-a5f0770c5c17", "translatable_type" => "App\Models\Place", "translatable_id" => "deed0a72-b9b5-4e89-8965-b4136c83ce90"],
            ["translation_id" => "5e5db269-0dd8-4abb-b656-4b553637f015", "translatable_type" => "App\Models\Place", "translatable_id" => "deed0a72-b9b5-4e89-8965-b4136c83ce90"],
            ["translation_id" => "b7f309ba-9e1c-4fff-affc-c0d60d8c1a57", "translatable_type" => "App\Models\Place", "translatable_id" => "deed0a72-b9b5-4e89-8965-b4136c83ce90"],
            //8
            ["translation_id" => "b2531b5c-1d1f-477e-8e50-837a7a6facb8", "translatable_type" => "App\Models\Place", "translatable_id" => "e96afdba-2d3b-4bab-ba6c-81f57b6f2b14"],
            ["translation_id" => "cff9e718-5436-455e-aac5-7681dc16b9fd", "translatable_type" => "App\Models\Place", "translatable_id" => "e96afdba-2d3b-4bab-ba6c-81f57b6f2b14"],
            ["translation_id" => "94b4b228-93f5-4ea4-9a79-204062161660", "translatable_type" => "App\Models\Place", "translatable_id" => "e96afdba-2d3b-4bab-ba6c-81f57b6f2b14"],
            //9
            ["translation_id" => "cdeacc4f-9e69-4295-b847-0b036d141a75", "translatable_type" => "App\Models\Place", "translatable_id" => "2ab59741-26c1-49cc-b32f-318f07bc2bbb"],
            ["translation_id" => "32c58293-cef8-45d9-80d2-80b8d58339bf", "translatable_type" => "App\Models\Place", "translatable_id" => "2ab59741-26c1-49cc-b32f-318f07bc2bbb"],
            ["translation_id" => "e344aafe-5bb4-431d-9509-ffbd8b8060d4", "translatable_type" => "App\Models\Place", "translatable_id" => "2ab59741-26c1-49cc-b32f-318f07bc2bbb"],
            //10
            ["translation_id" => "75a5198c-d9d0-4635-ac0b-e319b43f4409", "translatable_type" => "App\Models\Place", "translatable_id" => "069e0238-89e0-4ba1-b016-e602b8096fc4"],
            ["translation_id" => "3d93f6e4-d7f6-45b2-a0e2-f506ba0d7f6e", "translatable_type" => "App\Models\Place", "translatable_id" => "069e0238-89e0-4ba1-b016-e602b8096fc4"],
            ["translation_id" => "c4324d00-00ea-4299-a14a-2eb8cc20edcd", "translatable_type" => "App\Models\Place", "translatable_id" => "069e0238-89e0-4ba1-b016-e602b8096fc4"],
            //11
            ["translation_id" => "cdfde8ea-d72d-4eb5-b32f-1e8b0032e923", "translatable_type" => "App\Models\Place", "translatable_id" => "e5225d21-7fc9-4771-ae66-0e3c12a6d374"],
            ["translation_id" => "68912a7a-8659-4fb7-aa8f-660d97331644", "translatable_type" => "App\Models\Place", "translatable_id" => "e5225d21-7fc9-4771-ae66-0e3c12a6d374"],
            ["translation_id" => "abaab2f0-dbb7-4bfc-a067-07b04f9c0f24", "translatable_type" => "App\Models\Place", "translatable_id" => "e5225d21-7fc9-4771-ae66-0e3c12a6d374"],
            //12
            ["translation_id" => "55761f01-0e60-440a-a04a-16fe4d5e5d42", "translatable_type" => "App\Models\Place", "translatable_id" => "e00e7f60-b3ee-4e39-a260-863ad1f20880"],
            ["translation_id" => "41083170-32a4-44fd-88ab-fba22e0f463d", "translatable_type" => "App\Models\Place", "translatable_id" => "e00e7f60-b3ee-4e39-a260-863ad1f20880"],
            ["translation_id" => "61c0788d-1fc7-43d0-a6b7-bbc70cb7b4df", "translatable_type" => "App\Models\Place", "translatable_id" => "e00e7f60-b3ee-4e39-a260-863ad1f20880"],
            //13
            ["translation_id" => "9a932e07-864a-42ae-a20d-8def4ef0a346", "translatable_type" => "App\Models\Place", "translatable_id" => "2da17642-e416-4e90-be64-7224f98071f6"],
            ["translation_id" => "1814b1d6-04fa-4fe2-9dc7-51dd8c5618d5", "translatable_type" => "App\Models\Place", "translatable_id" => "2da17642-e416-4e90-be64-7224f98071f6"],
            ["translation_id" => "3ff05b79-2571-49e2-8b12-2f9292d1dc77", "translatable_type" => "App\Models\Place", "translatable_id" => "2da17642-e416-4e90-be64-7224f98071f6"],
            //14
            ["translation_id" => "c0bac270-fdf9-4e27-a312-00876a568a58", "translatable_type" => "App\Models\Place", "translatable_id" => "566fe5f0-3db5-435b-9dab-8aa76f0f3122"],
            ["translation_id" => "247d315b-085e-4fd3-89b4-3856c07b6511", "translatable_type" => "App\Models\Place", "translatable_id" => "566fe5f0-3db5-435b-9dab-8aa76f0f3122"],
            ["translation_id" => "29efdb37-7f46-47a8-b3a1-8d265aef269a", "translatable_type" => "App\Models\Place", "translatable_id" => "566fe5f0-3db5-435b-9dab-8aa76f0f3122"],
            //15
            ["translation_id" => "cf4a28f5-bb6a-4912-8555-96312f8983b8", "translatable_type" => "App\Models\Place", "translatable_id" => "cfe8028e-2089-4dad-98ce-cfa5fe651502"],
            ["translation_id" => "95ec3093-a0c7-488b-ac08-5fb0930d1fff", "translatable_type" => "App\Models\Place", "translatable_id" => "cfe8028e-2089-4dad-98ce-cfa5fe651502"],
            ["translation_id" => "535bbbd6-cacf-4023-a904-b2f74edef5ee", "translatable_type" => "App\Models\Place", "translatable_id" => "cfe8028e-2089-4dad-98ce-cfa5fe651502"],
            //16
            ["translation_id" => "8cea48bb-7ec4-4548-b00f-7640dab7fa28", "translatable_type" => "App\Models\Place", "translatable_id" => "818a16e2-1ebd-4003-b7a0-d29c3fd21bbf"],
            ["translation_id" => "791cfed2-ec3d-4a9e-848b-6a9687b8c509", "translatable_type" => "App\Models\Place", "translatable_id" => "818a16e2-1ebd-4003-b7a0-d29c3fd21bbf"],
            ["translation_id" => "b802b4d7-165b-41cf-8015-16127a99f5ed", "translatable_type" => "App\Models\Place", "translatable_id" => "818a16e2-1ebd-4003-b7a0-d29c3fd21bbf"],
            //17
            ["translation_id" => "46fa66e6-5424-4cb0-8f3f-68793244181b", "translatable_type" => "App\Models\Place", "translatable_id" => "ebb208c4-e226-46ea-a826-0e153e6f7417"],
            ["translation_id" => "c876e29d-d0c0-4789-969f-d1efaa4d7c11", "translatable_type" => "App\Models\Place", "translatable_id" => "ebb208c4-e226-46ea-a826-0e153e6f7417"],
            ["translation_id" => "ba64afef-fa10-407b-9625-be0754cbef29", "translatable_type" => "App\Models\Place", "translatable_id" => "ebb208c4-e226-46ea-a826-0e153e6f7417"],
            //18
            ["translation_id" => "f032fe0d-4fec-49b1-8d9f-f5c4decca147", "translatable_type" => "App\Models\Place", "translatable_id" => "fefda0cc-9bf0-45fc-8ce8-be63b9822df8"],
            ["translation_id" => "dfc041af-e128-4e29-88d6-5cc42c83ab65", "translatable_type" => "App\Models\Place", "translatable_id" => "fefda0cc-9bf0-45fc-8ce8-be63b9822df8"],
            ["translation_id" => "e2dc766b-b810-4656-bc6a-ca552247821b", "translatable_type" => "App\Models\Place", "translatable_id" => "fefda0cc-9bf0-45fc-8ce8-be63b9822df8"],
            //19
            ["translation_id" => "ad78cb8a-4925-48d7-8178-748b8e154027", "translatable_type" => "App\Models\Place", "translatable_id" => "a1fa1ba3-6dad-4786-ad13-c693d1c754c3"],
            ["translation_id" => "96c60459-94e8-4445-8287-0c46975a7c88", "translatable_type" => "App\Models\Place", "translatable_id" => "a1fa1ba3-6dad-4786-ad13-c693d1c754c3"],
            ["translation_id" => "7d386319-f5af-4173-b68a-89ca0134ff7b", "translatable_type" => "App\Models\Place", "translatable_id" => "a1fa1ba3-6dad-4786-ad13-c693d1c754c3"],
            //20
            ["translation_id" => "0084270c-90e1-47ba-a1a0-dda5054038f0", "translatable_type" => "App\Models\Place", "translatable_id" => "0bc39d13-8cc8-451f-9d5a-cfeb100bcbd5"],
            ["translation_id" => "eb54be47-10ab-4422-a552-b3f07244e1a0", "translatable_type" => "App\Models\Place", "translatable_id" => "0bc39d13-8cc8-451f-9d5a-cfeb100bcbd5"],
            ["translation_id" => "e3b9b0ca-33c5-4b18-85b3-3d6a697a975d", "translatable_type" => "App\Models\Place", "translatable_id" => "0bc39d13-8cc8-451f-9d5a-cfeb100bcbd5"],
            //21
            ["translation_id" => "3482acd3-d210-47a9-bde6-3efc84cc7d2a", "translatable_type" => "App\Models\Place", "translatable_id" => "e8d40723-8b3e-4f81-bcf2-08da969592fe"],
            ["translation_id" => "aebd92af-a9ee-49a2-8536-615bcad0332d", "translatable_type" => "App\Models\Place", "translatable_id" => "e8d40723-8b3e-4f81-bcf2-08da969592fe"],
            ["translation_id" => "73fd4cbe-6852-43ef-b63e-23f6582a3dce", "translatable_type" => "App\Models\Place", "translatable_id" => "e8d40723-8b3e-4f81-bcf2-08da969592fe"],
            //22
            ["translation_id" => "0c2c5377-f156-4358-8e82-7d1b2c790b21", "translatable_type" => "App\Models\Place", "translatable_id" => "d9440a7e-329d-4cb9-9ce6-f114faeaa66b"],
            ["translation_id" => "61273f47-e148-4fa5-8ab5-d797168933d4", "translatable_type" => "App\Models\Place", "translatable_id" => "d9440a7e-329d-4cb9-9ce6-f114faeaa66b"],
            ["translation_id" => "9e534dd7-39c8-4b80-b046-0a4db8c35899", "translatable_type" => "App\Models\Place", "translatable_id" => "d9440a7e-329d-4cb9-9ce6-f114faeaa66b"],
            //23
            ["translation_id" => "0bdc60b4-8ae2-49e1-9af4-4d4d04653f09", "translatable_type" => "App\Models\Place", "translatable_id" => "bad64400-3cb4-43e9-b564-59f5f0503629"],
            ["translation_id" => "9b7f2b5a-8164-4b11-ae3f-6a36d39da241", "translatable_type" => "App\Models\Place", "translatable_id" => "bad64400-3cb4-43e9-b564-59f5f0503629"],
            ["translation_id" => "c65fc5e3-a924-4072-94dd-98be6005ce70", "translatable_type" => "App\Models\Place", "translatable_id" => "bad64400-3cb4-43e9-b564-59f5f0503629"],
            //24
            ["translation_id" => "8f1cb82e-e16a-4127-ac66-7f1a3d711a46", "translatable_type" => "App\Models\Place", "translatable_id" => "dd6953ea-c4b9-418f-b008-67248754ef47"],
            ["translation_id" => "a209cc74-c76f-45d2-a04e-28003387a159", "translatable_type" => "App\Models\Place", "translatable_id" => "dd6953ea-c4b9-418f-b008-67248754ef47"],
            ["translation_id" => "db6c75a2-f743-4f0a-9d7c-3411900620c5", "translatable_type" => "App\Models\Place", "translatable_id" => "dd6953ea-c4b9-418f-b008-67248754ef47"],
            //25
            ["translation_id" => "0de3dc4e-ed65-452d-ba21-7936568830a8", "translatable_type" => "App\Models\Place", "translatable_id" => "38d4b72c-38f7-49fa-8433-8ff2e7b265f0"],
            ["translation_id" => "48754f17-0cd1-4776-94d5-108a94ad6c5b", "translatable_type" => "App\Models\Place", "translatable_id" => "38d4b72c-38f7-49fa-8433-8ff2e7b265f0"],
            ["translation_id" => "b670a8e7-efd2-4948-a90b-762118bbd445", "translatable_type" => "App\Models\Place", "translatable_id" => "38d4b72c-38f7-49fa-8433-8ff2e7b265f0"],
            //26
            ["translation_id" => "19237509-4fc1-4a8f-aeff-402304681a75", "translatable_type" => "App\Models\Place", "translatable_id" => "4b77eab2-f355-4378-9067-b7145658bcfa"],
            ["translation_id" => "bcfdc0b9-e277-4b42-9a8f-ec6bb00b4443", "translatable_type" => "App\Models\Place", "translatable_id" => "4b77eab2-f355-4378-9067-b7145658bcfa"],
            ["translation_id" => "73191e69-1c02-40be-a7fd-7223e22c18ff", "translatable_type" => "App\Models\Place", "translatable_id" => "4b77eab2-f355-4378-9067-b7145658bcfa"],
            //27
            ["translation_id" => "04070715-8cdc-4f7c-9284-67a91c7b8288", "translatable_type" => "App\Models\Place", "translatable_id" => "9f393cd4-bc95-4995-b9f1-87ee27ab037a"],
            ["translation_id" => "bbbb3cbc-0d4b-45c6-8563-5c1bcfb21ea6", "translatable_type" => "App\Models\Place", "translatable_id" => "9f393cd4-bc95-4995-b9f1-87ee27ab037a"],
            ["translation_id" => "91b110ec-e3c7-49c9-a677-aa59087446a1", "translatable_type" => "App\Models\Place", "translatable_id" => "9f393cd4-bc95-4995-b9f1-87ee27ab037a"],
            //28
            ["translation_id" => "b92b69c2-5231-4062-b56f-adcd57b44e3e", "translatable_type" => "App\Models\Place", "translatable_id" => "53c3de43-1f63-439c-bb12-5c9dd8fd9cac"],
            ["translation_id" => "9aa02069-e04e-4666-b356-715df58896de", "translatable_type" => "App\Models\Place", "translatable_id" => "53c3de43-1f63-439c-bb12-5c9dd8fd9cac"],
            ["translation_id" => "d758772c-10af-4754-a4e0-b336930d9b91", "translatable_type" => "App\Models\Place", "translatable_id" => "53c3de43-1f63-439c-bb12-5c9dd8fd9cac"],
            //29
            ["translation_id" => "2c662cac-d6cb-42d8-b991-2ee404afe0d8", "translatable_type" => "App\Models\Place", "translatable_id" => "4a0fad9d-c81b-457f-b325-d6737f59b311"],
            ["translation_id" => "9f78736b-468d-4fe0-854a-1d0d0922a469", "translatable_type" => "App\Models\Place", "translatable_id" => "4a0fad9d-c81b-457f-b325-d6737f59b311"],
            ["translation_id" => "f4f56e4b-b956-412b-95b3-bdfbbe27aa0f", "translatable_type" => "App\Models\Place", "translatable_id" => "4a0fad9d-c81b-457f-b325-d6737f59b311"],
            //30
            ["translation_id" => "764b0659-2fed-4a29-bd8b-6cbc19687381", "translatable_type" => "App\Models\Place", "translatable_id" => "f305703a-f99f-4a7c-90ce-533c61b2d2bf"],
            ["translation_id" => "07271b42-1c08-4905-a99a-e94230e1cafd", "translatable_type" => "App\Models\Place", "translatable_id" => "f305703a-f99f-4a7c-90ce-533c61b2d2bf"],
            ["translation_id" => "fe3621ac-08ee-4ea0-9869-e78a13c02d6d", "translatable_type" => "App\Models\Place", "translatable_id" => "f305703a-f99f-4a7c-90ce-533c61b2d2bf"],
            //31
            ["translation_id" => "4a89beb3-87e0-4534-a554-21be34a2070f", "translatable_type" => "App\Models\Place", "translatable_id" => "141b30f7-bffa-4aa1-a6d6-d10028eb6f50"],
            ["translation_id" => "7c30691a-4466-461b-9745-8bd80d2ba372", "translatable_type" => "App\Models\Place", "translatable_id" => "141b30f7-bffa-4aa1-a6d6-d10028eb6f50"],
            ["translation_id" => "866d5796-56f7-4d41-89b0-17b41d3e041d", "translatable_type" => "App\Models\Place", "translatable_id" => "141b30f7-bffa-4aa1-a6d6-d10028eb6f50"],
            //32
            ["translation_id" => "c3d36be3-c809-4b41-a83e-cbde128fefc0", "translatable_type" => "App\Models\Place", "translatable_id" => "e901b98f-479b-4661-9dc0-8d601bbd0959"],
            ["translation_id" => "70b9272b-0bdc-4c30-a6bc-0062d041334b", "translatable_type" => "App\Models\Place", "translatable_id" => "e901b98f-479b-4661-9dc0-8d601bbd0959"],
            ["translation_id" => "f7febc79-93db-4fbd-955c-6d352a1bd38b", "translatable_type" => "App\Models\Place", "translatable_id" => "e901b98f-479b-4661-9dc0-8d601bbd0959"],
            //33
            ["translation_id" => "41cb1515-858d-4e1a-ba48-6ceeb086ffd7", "translatable_type" => "App\Models\Place", "translatable_id" => "001bea67-2c30-4536-beab-3d1c899a1e6b"],
            ["translation_id" => "ac6dd5cc-c766-4136-bc7a-b0490d4e46a7", "translatable_type" => "App\Models\Place", "translatable_id" => "001bea67-2c30-4536-beab-3d1c899a1e6b"],
            ["translation_id" => "f50b590e-1763-450e-91dc-38b09160144a", "translatable_type" => "App\Models\Place", "translatable_id" => "001bea67-2c30-4536-beab-3d1c899a1e6b"],
            //34
            ["translation_id" => "f7f0ea0b-d597-4a28-82c4-a636142e0a3c", "translatable_type" => "App\Models\Place", "translatable_id" => "5f5ff59c-e68e-4e62-bb03-19f13461afcc"],
            ["translation_id" => "365a9ac6-e11c-4662-9573-9e598350461d", "translatable_type" => "App\Models\Place", "translatable_id" => "5f5ff59c-e68e-4e62-bb03-19f13461afcc"],
            ["translation_id" => "c230f33c-3d54-45e0-8ce3-0d37c625034b", "translatable_type" => "App\Models\Place", "translatable_id" => "5f5ff59c-e68e-4e62-bb03-19f13461afcc"],
            //35
            ["translation_id" => "36196fde-9a65-4e98-9f7e-0bf41c07a597", "translatable_type" => "App\Models\Place", "translatable_id" => "4de0b942-d2d7-4a96-917d-a449644d33bb"],
            ["translation_id" => "84bea9f2-7f15-4406-bf32-f29652fb6121", "translatable_type" => "App\Models\Place", "translatable_id" => "4de0b942-d2d7-4a96-917d-a449644d33bb"],
            ["translation_id" => "daddfe1f-55d9-4ec8-a113-3bc89bde43b6", "translatable_type" => "App\Models\Place", "translatable_id" => "4de0b942-d2d7-4a96-917d-a449644d33bb"],
            //36
            ["translation_id" => "3ee1267a-ed96-4811-a621-d3083eee2213", "translatable_type" => "App\Models\Place", "translatable_id" => "772010db-a3d6-4b7e-9ae2-fb9040ecbfcb"],
            ["translation_id" => "f06c6aa4-d7bd-4187-8800-926081288d4f", "translatable_type" => "App\Models\Place", "translatable_id" => "772010db-a3d6-4b7e-9ae2-fb9040ecbfcb"],
            ["translation_id" => "0b3007d8-bbda-453c-8fed-18e58950beee", "translatable_type" => "App\Models\Place", "translatable_id" => "772010db-a3d6-4b7e-9ae2-fb9040ecbfcb"],
            //37
            ["translation_id" => "58ad3b30-8d40-46d4-8df7-a21f7e68e065", "translatable_type" => "App\Models\Place", "translatable_id" => "c0673e89-9c23-435e-8229-7350b1d02e10"],
            ["translation_id" => "95137cb3-4c52-4ac1-8b2d-895d4c3a96b5", "translatable_type" => "App\Models\Place", "translatable_id" => "c0673e89-9c23-435e-8229-7350b1d02e10"],
            ["translation_id" => "5f33d9ca-8b99-49f1-9c98-4f35c59f0395", "translatable_type" => "App\Models\Place", "translatable_id" => "c0673e89-9c23-435e-8229-7350b1d02e10"],
            //38
            ["translation_id" => "9490782e-7e7a-47e8-9fbd-4d1050859b36", "translatable_type" => "App\Models\Place", "translatable_id" => "7049383f-c10a-4d34-8b16-1e15717adef1"],
            ["translation_id" => "cab52902-6f70-44b7-81cb-9f7e977fe176", "translatable_type" => "App\Models\Place", "translatable_id" => "7049383f-c10a-4d34-8b16-1e15717adef1"],
            ["translation_id" => "3541e029-8fe7-4b34-8ffe-ee1f760ec84f", "translatable_type" => "App\Models\Place", "translatable_id" => "7049383f-c10a-4d34-8b16-1e15717adef1"],
            //39
            ["translation_id" => "990d0708-ccd7-4fc4-aa3f-49fc9a97069f", "translatable_type" => "App\Models\Place", "translatable_id" => "af0207e5-db13-484e-9b58-f063834bcb4e"],
            ["translation_id" => "9161dd14-cc6c-405e-961b-958da668b1c6", "translatable_type" => "App\Models\Place", "translatable_id" => "af0207e5-db13-484e-9b58-f063834bcb4e"],
            ["translation_id" => "f8a4558e-ceb7-48d0-81a7-2b716d7324a2", "translatable_type" => "App\Models\Place", "translatable_id" => "af0207e5-db13-484e-9b58-f063834bcb4e"],
            //40
            ["translation_id" => "404b1fe6-1afc-4ee1-8c66-06cf0a25ce99", "translatable_type" => "App\Models\Place", "translatable_id" => "f7af3a17-264b-4028-b49a-b480d075f018"],
            ["translation_id" => "a55dc037-e83c-43f2-bdf8-db43d2e1cf2f", "translatable_type" => "App\Models\Place", "translatable_id" => "f7af3a17-264b-4028-b49a-b480d075f018"],
            ["translation_id" => "6bf516c7-49b4-4fed-bc3e-451b4d7e4224", "translatable_type" => "App\Models\Place", "translatable_id" => "f7af3a17-264b-4028-b49a-b480d075f018"],
            //41
            ["translation_id" => "b0adff61-3057-4453-b73f-2cccb0d0289d", "translatable_type" => "App\Models\Place", "translatable_id" => "41acf915-6afa-40ad-a528-62047a8acf82"],
            ["translation_id" => "51bcfa67-8394-4a0e-b772-08cf2ae7fa9e", "translatable_type" => "App\Models\Place", "translatable_id" => "41acf915-6afa-40ad-a528-62047a8acf82"],
            ["translation_id" => "62023e8d-63bc-4166-945e-058e431e65d1", "translatable_type" => "App\Models\Place", "translatable_id" => "41acf915-6afa-40ad-a528-62047a8acf82"],
            //42
            ["translation_id" => "a105d2e0-a48d-4f46-b492-beca366af61a", "translatable_type" => "App\Models\Place", "translatable_id" => "9bd368c3-5255-4196-bf7d-53e6d666184d"],
            ["translation_id" => "c71b61f2-ba32-42c6-8ede-9d2398ff5b16", "translatable_type" => "App\Models\Place", "translatable_id" => "9bd368c3-5255-4196-bf7d-53e6d666184d"],
            ["translation_id" => "2af8a195-0989-44b8-a806-6037d4941376", "translatable_type" => "App\Models\Place", "translatable_id" => "9bd368c3-5255-4196-bf7d-53e6d666184d"],
            //43
            ["translation_id" => "61ea9087-e1fb-4ae4-9771-50d9a1a0938c", "translatable_type" => "App\Models\Place", "translatable_id" => "383934e4-f782-4e91-9166-0e995eebbc9b"],
            ["translation_id" => "54d9f64e-8634-41b9-a377-f05cf9859e32", "translatable_type" => "App\Models\Place", "translatable_id" => "383934e4-f782-4e91-9166-0e995eebbc9b"],
            ["translation_id" => "c274e91f-5f7f-486c-a635-7c1f3d6bc7fa", "translatable_type" => "App\Models\Place", "translatable_id" => "383934e4-f782-4e91-9166-0e995eebbc9b"],
            //44
            ["translation_id" => "757e7ac5-388c-4833-bbd0-891d0ed9ad79", "translatable_type" => "App\Models\Place", "translatable_id" => "9804a12d-cdf5-4726-a646-66524afcdeaa"],
            ["translation_id" => "96d9c9f1-18d0-4136-a49e-83b58fb53ba7", "translatable_type" => "App\Models\Place", "translatable_id" => "9804a12d-cdf5-4726-a646-66524afcdeaa"],
            ["translation_id" => "98e73629-ad94-4ac4-ba31-5165a6e6e167", "translatable_type" => "App\Models\Place", "translatable_id" => "9804a12d-cdf5-4726-a646-66524afcdeaa"],
            //45
            ["translation_id" => "945ba721-04ec-431c-90fc-84747d87e655", "translatable_type" => "App\Models\Place", "translatable_id" => "f967a080-d6c6-4703-a2eb-0e3d0d047527"],
            ["translation_id" => "f64137a7-1e1e-46b1-b46d-c269728ee5e1", "translatable_type" => "App\Models\Place", "translatable_id" => "f967a080-d6c6-4703-a2eb-0e3d0d047527"],
            ["translation_id" => "86623e46-e379-4b56-8a25-a7c0a6ea4b9c", "translatable_type" => "App\Models\Place", "translatable_id" => "f967a080-d6c6-4703-a2eb-0e3d0d047527"],
            //46
            ["translation_id" => "4dac05fc-7747-4124-846d-3890f3e88f8e", "translatable_type" => "App\Models\Place", "translatable_id" => "a5025830-69ea-43b5-8ebb-23e8da2ab340"],
            ["translation_id" => "3ceb27fc-46bd-4f13-a791-87ca678565c3", "translatable_type" => "App\Models\Place", "translatable_id" => "a5025830-69ea-43b5-8ebb-23e8da2ab340"],
            ["translation_id" => "18ee2eaf-08ae-4f4c-957b-51f843dc7a38", "translatable_type" => "App\Models\Place", "translatable_id" => "a5025830-69ea-43b5-8ebb-23e8da2ab340"],
            //47
            ["translation_id" => "02401c83-21cd-49b7-a881-9c075bb41c6f", "translatable_type" => "App\Models\Place", "translatable_id" => "31727c23-e880-488e-ae4f-5588213b346b"],
            ["translation_id" => "2b599d92-9172-462f-bab7-19ae18e64d20", "translatable_type" => "App\Models\Place", "translatable_id" => "31727c23-e880-488e-ae4f-5588213b346b"],
            ["translation_id" => "80faa027-98d5-48a0-95f2-7b52296ded80", "translatable_type" => "App\Models\Place", "translatable_id" => "31727c23-e880-488e-ae4f-5588213b346b"],
            //48
            ["translation_id" => "0513f1c9-1140-4014-bcbf-3129ff8a3827", "translatable_type" => "App\Models\Place", "translatable_id" => "a489205f-747b-44de-846c-ec31440248c2"],
            ["translation_id" => "f2e5e10e-49f0-4b3c-aa1c-84a3e57b13ac", "translatable_type" => "App\Models\Place", "translatable_id" => "a489205f-747b-44de-846c-ec31440248c2"],
            ["translation_id" => "8b17c8ee-b3d0-4367-a235-77d9f54bbaa6", "translatable_type" => "App\Models\Place", "translatable_id" => "a489205f-747b-44de-846c-ec31440248c2"],
            //49
            ["translation_id" => "5dc10961-63e3-4a05-a6c9-f2d1762ba603", "translatable_type" => "App\Models\Place", "translatable_id" => "9889f0f9-9efa-48ce-b40f-04c710689dcb"],
            ["translation_id" => "543814c7-6944-4961-8fb4-4eed0414ba37", "translatable_type" => "App\Models\Place", "translatable_id" => "9889f0f9-9efa-48ce-b40f-04c710689dcb"],
            ["translation_id" => "b2923de8-facd-4641-9a4f-8c8cfd5a1d7e", "translatable_type" => "App\Models\Place", "translatable_id" => "9889f0f9-9efa-48ce-b40f-04c710689dcb"],
            //50
            ["translation_id" => "ee19cdf8-2b51-4ed7-a6d6-4510fa30e132", "translatable_type" => "App\Models\Place", "translatable_id" => "78bb06d7-9ca3-4c62-96b9-56c6051556e1"],
            ["translation_id" => "1f36568d-2896-4458-ad5b-fc7217774d53", "translatable_type" => "App\Models\Place", "translatable_id" => "78bb06d7-9ca3-4c62-96b9-56c6051556e1"],
            ["translation_id" => "673a8b84-9d27-4854-96b8-2618f345e5d1", "translatable_type" => "App\Models\Place", "translatable_id" => "78bb06d7-9ca3-4c62-96b9-56c6051556e1"],
            //51
            ["translation_id" => "2348339d-f3dd-4d79-a4a4-4a17858c9292", "translatable_type" => "App\Models\Place", "translatable_id" => "cbf689dc-2622-4d35-a01a-27291077c6c1"],
            ["translation_id" => "d01daca0-db73-4d2c-b227-fe31fd57aa95", "translatable_type" => "App\Models\Place", "translatable_id" => "cbf689dc-2622-4d35-a01a-27291077c6c1"],
            ["translation_id" => "aaa193e6-a320-4158-ac2e-6d860b383d91", "translatable_type" => "App\Models\Place", "translatable_id" => "cbf689dc-2622-4d35-a01a-27291077c6c1"],
            //52
            ["translation_id" => "f2b9b292-d60c-4796-99d0-f020833dd821", "translatable_type" => "App\Models\Place", "translatable_id" => "530f000f-82d2-4ddb-acd8-209900fb8caa"],
            ["translation_id" => "82a96364-a0fa-482f-a5a9-eb079d0c292a", "translatable_type" => "App\Models\Place", "translatable_id" => "530f000f-82d2-4ddb-acd8-209900fb8caa"],
            ["translation_id" => "99beff9b-72a2-4a90-a320-be361b314e4f", "translatable_type" => "App\Models\Place", "translatable_id" => "530f000f-82d2-4ddb-acd8-209900fb8caa"],
            //53
            ["translation_id" => "20c0c9f7-0f07-44c1-bc4a-94069e379115", "translatable_type" => "App\Models\Place", "translatable_id" => "78811c70-d741-41d3-8ad5-610687ebd642"],
            ["translation_id" => "aaad0fd3-8c8f-4eb0-887d-355b26ab330c", "translatable_type" => "App\Models\Place", "translatable_id" => "78811c70-d741-41d3-8ad5-610687ebd642"],
            ["translation_id" => "f5c6edfa-cdb9-4448-9c28-3251267fd1b8", "translatable_type" => "App\Models\Place", "translatable_id" => "78811c70-d741-41d3-8ad5-610687ebd642"],
            //54
            ["translation_id" => "61810d48-faf1-4b6a-8c4b-fd287d2e5d5d", "translatable_type" => "App\Models\Place", "translatable_id" => "d3acde91-8408-479e-8f18-09f9cfd053af"],
            ["translation_id" => "0085681d-e7d5-4e3a-bb4a-7776ede0bcc3", "translatable_type" => "App\Models\Place", "translatable_id" => "d3acde91-8408-479e-8f18-09f9cfd053af"],
            ["translation_id" => "a61f5409-6d1c-4904-a1d2-43c64e886882", "translatable_type" => "App\Models\Place", "translatable_id" => "d3acde91-8408-479e-8f18-09f9cfd053af"],
            //55
            ["translation_id" => "8394ab18-e3d5-4785-8624-380fc184770f", "translatable_type" => "App\Models\Place", "translatable_id" => "96cb8d64-9b4e-4b68-bc4b-af7bd7a29e5c"],
            ["translation_id" => "d84537bc-075b-4597-b479-3f06eb6bac56", "translatable_type" => "App\Models\Place", "translatable_id" => "96cb8d64-9b4e-4b68-bc4b-af7bd7a29e5c"],
            ["translation_id" => "8d972ce6-2fca-409e-8994-ad9d7239a63b", "translatable_type" => "App\Models\Place", "translatable_id" => "96cb8d64-9b4e-4b68-bc4b-af7bd7a29e5c"],
            //56
            ["translation_id" => "01d59493-243d-48a1-a1ba-81fd6bf6f6fc", "translatable_type" => "App\Models\Place", "translatable_id" => "42e34a45-70c4-46e8-aca6-587799a3c17e"],
            ["translation_id" => "a212a69f-ede3-4acd-8b3e-1a85abb410ea", "translatable_type" => "App\Models\Place", "translatable_id" => "42e34a45-70c4-46e8-aca6-587799a3c17e"],
            ["translation_id" => "a1d7c569-0fef-4fb3-b4ae-15384ce4489f", "translatable_type" => "App\Models\Place", "translatable_id" => "42e34a45-70c4-46e8-aca6-587799a3c17e"],
            //57
            ["translation_id" => "c573458c-af40-4d29-af14-fbe981e3c156", "translatable_type" => "App\Models\Place", "translatable_id" => "4f877e1a-e70a-48dd-b583-697a3a564b53"],
            ["translation_id" => "1029e162-f29c-4f09-904c-24e97be79450", "translatable_type" => "App\Models\Place", "translatable_id" => "4f877e1a-e70a-48dd-b583-697a3a564b53"],
            ["translation_id" => "e68b6ddd-b7a4-43e8-971f-6c936f7acbfe", "translatable_type" => "App\Models\Place", "translatable_id" => "4f877e1a-e70a-48dd-b583-697a3a564b53"],
            //58
            ["translation_id" => "8ff315e4-9706-44a9-ba46-68307d7d8465", "translatable_type" => "App\Models\Place", "translatable_id" => "bab2d821-5ece-4580-9606-03ef794173df"],
            ["translation_id" => "900b32b1-4a80-4d36-96a2-99da12298c6f", "translatable_type" => "App\Models\Place", "translatable_id" => "bab2d821-5ece-4580-9606-03ef794173df"],
            ["translation_id" => "84a7eda0-6d08-472f-9ad0-8bfc7030aafe", "translatable_type" => "App\Models\Place", "translatable_id" => "bab2d821-5ece-4580-9606-03ef794173df"],
            //59
            ["translation_id" => "093d386a-b0a1-4d33-b099-cda1cbfe2a1a", "translatable_type" => "App\Models\Place", "translatable_id" => "cc5e2248-93c8-4e3e-a52c-a3799c7f4a68"],
            ["translation_id" => "89f78b3c-661e-4014-b61e-94bdc952cbf1", "translatable_type" => "App\Models\Place", "translatable_id" => "cc5e2248-93c8-4e3e-a52c-a3799c7f4a68"],
            ["translation_id" => "163bdad1-345d-4214-8230-8998e96058df", "translatable_type" => "App\Models\Place", "translatable_id" => "cc5e2248-93c8-4e3e-a52c-a3799c7f4a68"],
            //60
            ["translation_id" => "0f6b57c5-60f0-46ea-8d2b-3a3384d1d52a", "translatable_type" => "App\Models\Place", "translatable_id" => "1c7c39ec-7a48-4082-9469-263f81906db7"],
            ["translation_id" => "12db130f-fcfa-4691-b75c-4e5cd2497dd7", "translatable_type" => "App\Models\Place", "translatable_id" => "1c7c39ec-7a48-4082-9469-263f81906db7"],
            ["translation_id" => "f68aa750-1dd4-42c1-a474-a968571a9225", "translatable_type" => "App\Models\Place", "translatable_id" => "1c7c39ec-7a48-4082-9469-263f81906db7"],
            //61
            ["translation_id" => "82d5b86b-cf65-41d4-b0f6-638cefcce1a7", "translatable_type" => "App\Models\Place", "translatable_id" => "4d215654-d079-4628-b444-1fd6c27d0a78"],
            ["translation_id" => "4bcd32c8-3ce5-451b-bd8e-bbf0533db410", "translatable_type" => "App\Models\Place", "translatable_id" => "4d215654-d079-4628-b444-1fd6c27d0a78"],
            ["translation_id" => "968aadc5-41f3-47dc-a332-abcac200528c", "translatable_type" => "App\Models\Place", "translatable_id" => "4d215654-d079-4628-b444-1fd6c27d0a78"],
            //62
            ["translation_id" => "640f9a5c-cfe7-49dd-8ba7-4a592cef9968", "translatable_type" => "App\Models\Place", "translatable_id" => "dcb37db5-5683-450c-9117-af4079d5e20b"],
            ["translation_id" => "46ada071-1282-4b47-b2aa-d67f2367c76b", "translatable_type" => "App\Models\Place", "translatable_id" => "dcb37db5-5683-450c-9117-af4079d5e20b"],
            ["translation_id" => "7cc9b816-ed6c-4482-b02d-46c32d45e8ac", "translatable_type" => "App\Models\Place", "translatable_id" => "dcb37db5-5683-450c-9117-af4079d5e20b"],
            //63
            ["translation_id" => "36cc20f5-eba6-46de-9aea-0a1589bf2f48", "translatable_type" => "App\Models\Place", "translatable_id" => "2f8e55b5-6429-49df-bdd8-6ad2dca6c4e0"],
            ["translation_id" => "0aeb2433-a0b7-4b06-a1ea-5982c8c5e37c", "translatable_type" => "App\Models\Place", "translatable_id" => "2f8e55b5-6429-49df-bdd8-6ad2dca6c4e0"],
            ["translation_id" => "c383cbe1-3cb6-4905-9b06-a68a6e72d034", "translatable_type" => "App\Models\Place", "translatable_id" => "2f8e55b5-6429-49df-bdd8-6ad2dca6c4e0"],
            //64
            ["translation_id" => "12348380-081d-418c-8664-1990e736120e", "translatable_type" => "App\Models\Place", "translatable_id" => "25606144-9344-4b11-937f-842d5abd66e5"],
            ["translation_id" => "7b5a50d1-3fa6-4f20-a82e-95cbac98c53a", "translatable_type" => "App\Models\Place", "translatable_id" => "25606144-9344-4b11-937f-842d5abd66e5"],
            ["translation_id" => "add58726-b9e1-47cf-b69c-1b8b1f25529c", "translatable_type" => "App\Models\Place", "translatable_id" => "25606144-9344-4b11-937f-842d5abd66e5"],
            //65
            ["translation_id" => "8cbea90d-625d-4117-9491-abdc02a14c8b", "translatable_type" => "App\Models\Place", "translatable_id" => "0b28883b-1879-469b-bda4-b4700ff162e1"],
            ["translation_id" => "c26285f0-bf0b-49b2-970c-35cbe1a98dfc", "translatable_type" => "App\Models\Place", "translatable_id" => "0b28883b-1879-469b-bda4-b4700ff162e1"],
            ["translation_id" => "56aa9a9f-3311-43e2-ab49-959c378ec7b3", "translatable_type" => "App\Models\Place", "translatable_id" => "0b28883b-1879-469b-bda4-b4700ff162e1"],
            //66
            ["translation_id" => "9ed0dbf7-95f2-47c5-95a3-56912bb2fa18", "translatable_type" => "App\Models\Place", "translatable_id" => "e89652b8-9bdc-424c-8055-062d7616d5f6"],
            ["translation_id" => "1e51b4c4-ba38-4a14-aa19-0e9d06c7b979", "translatable_type" => "App\Models\Place", "translatable_id" => "e89652b8-9bdc-424c-8055-062d7616d5f6"],
            ["translation_id" => "6883c095-b649-42aa-b523-8836e754f5b7", "translatable_type" => "App\Models\Place", "translatable_id" => "e89652b8-9bdc-424c-8055-062d7616d5f6"],
            //67
            ["translation_id" => "b09576ce-e35b-4146-a8f1-97f5e11ee0fb", "translatable_type" => "App\Models\Place", "translatable_id" => "ac55c377-734c-4a37-963b-2a450d860c3d"],
            ["translation_id" => "824a2be2-a7ab-414b-91a7-81c4350bd689", "translatable_type" => "App\Models\Place", "translatable_id" => "ac55c377-734c-4a37-963b-2a450d860c3d"],
            ["translation_id" => "da49ee48-9842-4d18-b443-515c1265e58c", "translatable_type" => "App\Models\Place", "translatable_id" => "ac55c377-734c-4a37-963b-2a450d860c3d"],
            //68
            ["translation_id" => "ed977c77-4085-484b-8e94-2bdede88ed32", "translatable_type" => "App\Models\Place", "translatable_id" => "7114b73c-474e-4c79-9666-b5decc33dd83"],
            ["translation_id" => "7696ba94-864a-4f73-a9c6-ae2dc0a272f7", "translatable_type" => "App\Models\Place", "translatable_id" => "7114b73c-474e-4c79-9666-b5decc33dd83"],
            ["translation_id" => "41182f87-7a9a-4d7d-8196-9eae01395aa4", "translatable_type" => "App\Models\Place", "translatable_id" => "7114b73c-474e-4c79-9666-b5decc33dd83"],
            //69
            ["translation_id" => "ca1832cd-d0aa-43c6-a532-6ab2057f2aad", "translatable_type" => "App\Models\Place", "translatable_id" => "0d2fa81d-9768-4bcb-8bca-8a9f4e0c59d3"],
            ["translation_id" => "c8c0a6d5-8bd4-4081-9054-0380095a47d6", "translatable_type" => "App\Models\Place", "translatable_id" => "0d2fa81d-9768-4bcb-8bca-8a9f4e0c59d3"],
            ["translation_id" => "613778ff-3c8b-4891-b35e-74f0586c1434", "translatable_type" => "App\Models\Place", "translatable_id" => "0d2fa81d-9768-4bcb-8bca-8a9f4e0c59d3"],
            //70
            ["translation_id" => "3637a6c5-9051-4e4b-84f6-f359c581ac93", "translatable_type" => "App\Models\Place", "translatable_id" => "31177784-67b1-4ae2-9841-44cc79d01a86"],
            ["translation_id" => "5dec4060-8eb8-4dc4-b7fa-b4415e3eb2fe", "translatable_type" => "App\Models\Place", "translatable_id" => "31177784-67b1-4ae2-9841-44cc79d01a86"],
            ["translation_id" => "b540d4dd-3bd9-4fd2-a649-d3247663d481", "translatable_type" => "App\Models\Place", "translatable_id" => "31177784-67b1-4ae2-9841-44cc79d01a86"],
            //71
            ["translation_id" => "82eff320-fea8-4fa0-8823-5cde12ac8212", "translatable_type" => "App\Models\Place", "translatable_id" => "3b0ed076-8aec-4fed-8572-6ff02b37db47"],
            ["translation_id" => "a0e63403-f1f5-4926-80f6-102846ada588", "translatable_type" => "App\Models\Place", "translatable_id" => "3b0ed076-8aec-4fed-8572-6ff02b37db47"],
            ["translation_id" => "03248aed-c4ec-4238-8fb7-281affe801a5", "translatable_type" => "App\Models\Place", "translatable_id" => "3b0ed076-8aec-4fed-8572-6ff02b37db47"],
            //72
            ["translation_id" => "6967e1e4-b4f4-4ffe-bba4-ab04a8663f69", "translatable_type" => "App\Models\Place", "translatable_id" => "518adeeb-7979-456c-9b63-68ae4cf1d158"],
            ["translation_id" => "25ee384f-9168-4496-9f59-688d877de1b8", "translatable_type" => "App\Models\Place", "translatable_id" => "518adeeb-7979-456c-9b63-68ae4cf1d158"],
            ["translation_id" => "167f6859-fb18-4f81-9dfd-dc323704b8f1", "translatable_type" => "App\Models\Place", "translatable_id" => "518adeeb-7979-456c-9b63-68ae4cf1d158"],
            //73
            ["translation_id" => "85dd4bbc-9647-493f-8dfc-3d1c5ec599b6", "translatable_type" => "App\Models\Place", "translatable_id" => "d5e56fd7-51d6-4ce7-bcaa-5881d665cd6d"],
            ["translation_id" => "e700e3c4-b496-4109-bd4d-9b0fb14ab876", "translatable_type" => "App\Models\Place", "translatable_id" => "d5e56fd7-51d6-4ce7-bcaa-5881d665cd6d"],
            ["translation_id" => "d30a4c9e-54af-4dc3-ab7d-978711e823dc", "translatable_type" => "App\Models\Place", "translatable_id" => "d5e56fd7-51d6-4ce7-bcaa-5881d665cd6d"],
            //74
            ["translation_id" => "e111b4b2-7704-4734-8a4b-eccb6579bec1", "translatable_type" => "App\Models\Place", "translatable_id" => "6f84a071-acd6-4417-9f30-f0e42fb4c638"],
            ["translation_id" => "b1ea154f-600f-44b0-9b5d-6567d452cd21", "translatable_type" => "App\Models\Place", "translatable_id" => "6f84a071-acd6-4417-9f30-f0e42fb4c638"],
            ["translation_id" => "ce020a53-35fe-43f5-97d2-2452abb28269", "translatable_type" => "App\Models\Place", "translatable_id" => "6f84a071-acd6-4417-9f30-f0e42fb4c638"],
            //75
            ["translation_id" => "b58dd3b7-9048-48b4-b19e-607611cebab0", "translatable_type" => "App\Models\Place", "translatable_id" => "37b00384-e2bf-4b1a-a87e-f1d0a7909f84"],
            ["translation_id" => "8c0f481b-ba02-4b95-8d38-4a95d1123eab", "translatable_type" => "App\Models\Place", "translatable_id" => "37b00384-e2bf-4b1a-a87e-f1d0a7909f84"],
            ["translation_id" => "369d5c90-ac32-49b9-b7e8-d7445d78da79", "translatable_type" => "App\Models\Place", "translatable_id" => "37b00384-e2bf-4b1a-a87e-f1d0a7909f84"],
            //76
            ["translation_id" => "9fb40834-ad2d-46ab-b68d-bdf89828a37d", "translatable_type" => "App\Models\Place", "translatable_id" => "a9f30494-bfb2-4b17-97c1-6c840ca0e71f"],
            ["translation_id" => "4f4e8709-e484-4c05-846d-19556f1b37ff", "translatable_type" => "App\Models\Place", "translatable_id" => "a9f30494-bfb2-4b17-97c1-6c840ca0e71f"],
            ["translation_id" => "c29f32a2-2553-42af-92ad-78de1be19f5a", "translatable_type" => "App\Models\Place", "translatable_id" => "a9f30494-bfb2-4b17-97c1-6c840ca0e71f"],
            //77
            ["translation_id" => "3b98a065-3b03-4a55-a085-9db8e5684a86", "translatable_type" => "App\Models\Place", "translatable_id" => "8a94d68b-22c7-4053-8c1b-7b79ffbd3505"],
            ["translation_id" => "c9eff1c1-0482-4b70-ab79-60b7ced24738", "translatable_type" => "App\Models\Place", "translatable_id" => "8a94d68b-22c7-4053-8c1b-7b79ffbd3505"],
            ["translation_id" => "d69f3efb-113f-4e8e-9354-efae65d85baf", "translatable_type" => "App\Models\Place", "translatable_id" => "8a94d68b-22c7-4053-8c1b-7b79ffbd3505"],
            //78
            ["translation_id" => "4f2fb861-4adc-42ae-9a45-df3551fa5dac", "translatable_type" => "App\Models\Place", "translatable_id" => "0ab5f527-a472-4cb9-befb-faeed7f57fe1"],
            ["translation_id" => "ed66265e-ae96-4614-8712-e9b1dc56471f", "translatable_type" => "App\Models\Place", "translatable_id" => "0ab5f527-a472-4cb9-befb-faeed7f57fe1"],
            ["translation_id" => "48b9beec-bcaa-4ba9-9b80-263f52502dc9", "translatable_type" => "App\Models\Place", "translatable_id" => "0ab5f527-a472-4cb9-befb-faeed7f57fe1"],
            //79
            ["translation_id" => "a6500283-44af-44c3-b4db-2ce6e5e279e8", "translatable_type" => "App\Models\Place", "translatable_id" => "fa3546cd-7542-498c-a983-4512bae9213e"],
            ["translation_id" => "e7e9a01f-8605-4c2a-86e5-5981fa5bf53e", "translatable_type" => "App\Models\Place", "translatable_id" => "fa3546cd-7542-498c-a983-4512bae9213e"],
            ["translation_id" => "d5203dfc-5fca-4e4a-b452-116871289f11", "translatable_type" => "App\Models\Place", "translatable_id" => "fa3546cd-7542-498c-a983-4512bae9213e"],
            //80
            ["translation_id" => "84ecbe1c-fd95-47f4-b18a-ade0138a4c4f", "translatable_type" => "App\Models\Place", "translatable_id" => "779bbabf-cf85-4e84-b8a5-9ad233b0d1ad"],
            ["translation_id" => "a504a34f-fc9f-4935-a0b2-f2ccad650876", "translatable_type" => "App\Models\Place", "translatable_id" => "779bbabf-cf85-4e84-b8a5-9ad233b0d1ad"],
            ["translation_id" => "b3cf9b04-fb49-41bc-a7e7-075056fb2686", "translatable_type" => "App\Models\Place", "translatable_id" => "779bbabf-cf85-4e84-b8a5-9ad233b0d1ad"],



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
                //326
                ["translation_id" => "6de5c12f-8d72-40cb-9b01-1661e94b971a", "translatable_type" => "App\Models\Description", "translatable_id" => "ab16339b-c1e9-47e7-883f-35c3296a66dc"],
                ["translation_id" => "8a843689-2937-41b4-8879-06d4a8a4f472", "translatable_type" => "App\Models\Description", "translatable_id" => "ab16339b-c1e9-47e7-883f-35c3296a66dc"],
                ["translation_id" => "e892bc9a-8fd5-4866-b3f3-131481e30ebe", "translatable_type" => "App\Models\Description", "translatable_id" => "ab16339b-c1e9-47e7-883f-35c3296a66dc"],
                //327
                ["translation_id" => "27149ca9-a0a9-4c5f-aa3c-dc955e7d059e", "translatable_type" => "App\Models\Description", "translatable_id" => "0cbad103-33f1-48ac-9ae6-6183c7833900"],
                ["translation_id" => "adc00f36-a26c-4ac6-902b-ad7402be7f61", "translatable_type" => "App\Models\Description", "translatable_id" => "0cbad103-33f1-48ac-9ae6-6183c7833900"],
                ["translation_id" => "6b4b31b8-f381-49ff-926b-6716fcd7c8d3", "translatable_type" => "App\Models\Description", "translatable_id" => "0cbad103-33f1-48ac-9ae6-6183c7833900"],
                //328
                ["translation_id" => "aa991979-7724-406e-9f6f-be2840b207c4", "translatable_type" => "App\Models\Description", "translatable_id" => "bf4115c5-4b9e-4e2a-bd9f-0c26b06528a6"],
                ["translation_id" => "7ec789d9-3c9b-4a76-b341-e74fda860bca", "translatable_type" => "App\Models\Description", "translatable_id" => "bf4115c5-4b9e-4e2a-bd9f-0c26b06528a6"],
                ["translation_id" => "be6aa692-a8f1-4a15-bf04-24413ca97ae2", "translatable_type" => "App\Models\Description", "translatable_id" => "bf4115c5-4b9e-4e2a-bd9f-0c26b06528a6"],
                //329
                ["translation_id" => "a2f9bb26-b0a6-458f-9600-089dcd31cc97", "translatable_type" => "App\Models\Description", "translatable_id" => "aab43629-08ef-404f-bdbf-cabe9a34415d"],
                ["translation_id" => "2abe13cf-f5a4-4c61-b182-3e25073a2080", "translatable_type" => "App\Models\Description", "translatable_id" => "aab43629-08ef-404f-bdbf-cabe9a34415d"],
                ["translation_id" => "4aecf4f0-ba2f-4875-b6f9-0d95e695a921", "translatable_type" => "App\Models\Description", "translatable_id" => "aab43629-08ef-404f-bdbf-cabe9a34415d"],
                //330
                ["translation_id" => "a5b20ced-1ae3-4dce-8fee-a8582ce789ed", "translatable_type" => "App\Models\Description", "translatable_id" => "96db9930-898a-4a86-a60c-ed527b675d8e"],
                ["translation_id" => "783893a1-f5e2-423d-9a49-e01c58cc0625", "translatable_type" => "App\Models\Description", "translatable_id" => "96db9930-898a-4a86-a60c-ed527b675d8e"],
                ["translation_id" => "417d7110-967b-48e6-9bbd-a2c0f1e2804a", "translatable_type" => "App\Models\Description", "translatable_id" => "96db9930-898a-4a86-a60c-ed527b675d8e"],
                //331
                ["translation_id" => "91d9f163-fe65-4828-b926-415bf17c3651", "translatable_type" => "App\Models\Description", "translatable_id" => "9dc7faef-634e-4c16-8a05-2c0fd005ae14"],
                ["translation_id" => "0c0c7289-5149-4fbe-affa-7c34c3c04cde", "translatable_type" => "App\Models\Description", "translatable_id" => "9dc7faef-634e-4c16-8a05-2c0fd005ae14"],
                ["translation_id" => "3403ff56-dc85-4fc8-b5f8-173a4ab920b3", "translatable_type" => "App\Models\Description", "translatable_id" => "9dc7faef-634e-4c16-8a05-2c0fd005ae14"],
                //332
                ["translation_id" => "191dac76-0064-46a6-94b6-fdb9ac81223c", "translatable_type" => "App\Models\Description", "translatable_id" => "3b4825fa-9d60-4093-8f11-683b222f96fb"],
                ["translation_id" => "117d34ce-aca0-45c5-aa6b-9e0d3f514357", "translatable_type" => "App\Models\Description", "translatable_id" => "3b4825fa-9d60-4093-8f11-683b222f96fb"],
                ["translation_id" => "983ebd98-d7b8-43a6-aaa2-d4b8feb295c7", "translatable_type" => "App\Models\Description", "translatable_id" => "3b4825fa-9d60-4093-8f11-683b222f96fb"],
                //333
                ["translation_id" => "79998a5d-14c6-499f-b2b5-f0e656d5e0e4", "translatable_type" => "App\Models\Description", "translatable_id" => "3db06cc5-3432-4720-a478-27e03a7ffa7c"],
                ["translation_id" => "729dbdf5-53d4-42ab-b45f-a62bbd4be292", "translatable_type" => "App\Models\Description", "translatable_id" => "3db06cc5-3432-4720-a478-27e03a7ffa7c"],
                ["translation_id" => "e8e2e4d7-3a89-4ca8-bbc2-73e969a21263", "translatable_type" => "App\Models\Description", "translatable_id" => "3db06cc5-3432-4720-a478-27e03a7ffa7c"],
                //334
                ["translation_id" => "b69b3de9-cda9-4a8c-9cb0-6293dcfe3ef9", "translatable_type" => "App\Models\Description", "translatable_id" => "202505eb-7e05-4e91-ae6b-222b1b7cb270"],
                ["translation_id" => "e57deb22-d4bb-44a3-bfa5-e06d20728f73", "translatable_type" => "App\Models\Description", "translatable_id" => "202505eb-7e05-4e91-ae6b-222b1b7cb270"],
                ["translation_id" => "9724625f-5834-4336-ad1b-9216f888f22d", "translatable_type" => "App\Models\Description", "translatable_id" => "202505eb-7e05-4e91-ae6b-222b1b7cb270"],
                //335
                ["translation_id" => "fa1950cc-110a-41ef-8105-cdd79500cc21", "translatable_type" => "App\Models\Description", "translatable_id" => "5d3969c2-002b-42a8-96b3-50a320b3b345"],
                ["translation_id" => "d557a9e0-69ce-4c94-986e-91c44501c2ad", "translatable_type" => "App\Models\Description", "translatable_id" => "5d3969c2-002b-42a8-96b3-50a320b3b345"],
                ["translation_id" => "4410303d-77fe-47f8-8065-b765346491ae", "translatable_type" => "App\Models\Description", "translatable_id" => "5d3969c2-002b-42a8-96b3-50a320b3b345"],
                //336
                ["translation_id" => "f7da74a2-a0f7-4b40-b0aa-e8ff657bcf22", "translatable_type" => "App\Models\Description", "translatable_id" => "b9e11710-7241-48d5-8ac9-def2ec42ccab"],
                ["translation_id" => "c23363ca-57bb-4d43-a816-95c62596338b", "translatable_type" => "App\Models\Description", "translatable_id" => "b9e11710-7241-48d5-8ac9-def2ec42ccab"],
                ["translation_id" => "623ecbaf-b958-420c-a9dd-18a5b4480c1f", "translatable_type" => "App\Models\Description", "translatable_id" => "b9e11710-7241-48d5-8ac9-def2ec42ccab"],
                //337
                ["translation_id" => "3bce89df-7384-4d90-97d2-95b6ec773854", "translatable_type" => "App\Models\Description", "translatable_id" => "99512f20-eed6-4ca1-bf10-f6482d8318b5"],
                ["translation_id" => "9f470cdf-3135-4335-bfd3-cfc4d7ce7af2", "translatable_type" => "App\Models\Description", "translatable_id" => "99512f20-eed6-4ca1-bf10-f6482d8318b5"],
                ["translation_id" => "ba72f71e-3507-414d-99e2-6419d22e0864", "translatable_type" => "App\Models\Description", "translatable_id" => "99512f20-eed6-4ca1-bf10-f6482d8318b5"],
                //338
                ["translation_id" => "ec78a452-2bfc-4e46-a1cc-cdb528e34f5e", "translatable_type" => "App\Models\Description", "translatable_id" => "6db76f65-1d3d-4106-8e18-5f4d412a84ec"],
                ["translation_id" => "0aebc844-784b-40cf-b50b-195d1ab4b444", "translatable_type" => "App\Models\Description", "translatable_id" => "6db76f65-1d3d-4106-8e18-5f4d412a84ec"],
                ["translation_id" => "0436877a-9ad5-464c-a691-3a8ad57161c2", "translatable_type" => "App\Models\Description", "translatable_id" => "6db76f65-1d3d-4106-8e18-5f4d412a84ec"],
                //339
                ["translation_id" => "1e2bf76d-9ef7-4a42-a09f-a9f4afb3b404", "translatable_type" => "App\Models\Description", "translatable_id" => "22247518-0fe6-4c10-ae61-cbfa0cd7e11d"],
                ["translation_id" => "b0110819-64d7-443e-a947-97814a816a5f", "translatable_type" => "App\Models\Description", "translatable_id" => "22247518-0fe6-4c10-ae61-cbfa0cd7e11d"],
                ["translation_id" => "edf06466-da97-43e2-8a55-4beb3f35ca8f", "translatable_type" => "App\Models\Description", "translatable_id" => "22247518-0fe6-4c10-ae61-cbfa0cd7e11d"],
                //340
                ["translation_id" => "6c1b1870-1b51-4c74-8845-98326974c14f", "translatable_type" => "App\Models\Description", "translatable_id" => "047696c2-a69f-43be-b172-f29b2ced98c9"],
                ["translation_id" => "3cd11089-cb1d-4738-bd9a-d995a29de750", "translatable_type" => "App\Models\Description", "translatable_id" => "047696c2-a69f-43be-b172-f29b2ced98c9"],
                ["translation_id" => "ddbf3271-f0c7-4df6-a704-ae18ca7e2b84", "translatable_type" => "App\Models\Description", "translatable_id" => "047696c2-a69f-43be-b172-f29b2ced98c9"],
                //341
                ["translation_id" => "13ff2dde-aa4d-4b8d-92ae-38034e25a11c", "translatable_type" => "App\Models\Description", "translatable_id" => "b280773e-e3b1-4a70-bec5-452c9b38611e"],
                ["translation_id" => "924e1864-e24b-4204-be90-3ddb7d16962c", "translatable_type" => "App\Models\Description", "translatable_id" => "b280773e-e3b1-4a70-bec5-452c9b38611e"],
                ["translation_id" => "a0c28e89-622d-41df-b127-2cb574714b83", "translatable_type" => "App\Models\Description", "translatable_id" => "b280773e-e3b1-4a70-bec5-452c9b38611e"],
                //342
                ["translation_id" => "d466ca02-5d88-4c9a-a69f-a89554705363", "translatable_type" => "App\Models\Description", "translatable_id" => "03f4f7dd-b602-48b8-b4b9-d4710e70bab4"],
                ["translation_id" => "3e740158-673d-471a-bf9c-84c64caeb61b", "translatable_type" => "App\Models\Description", "translatable_id" => "03f4f7dd-b602-48b8-b4b9-d4710e70bab4"],
                ["translation_id" => "8e43d7f4-c384-4f72-9a83-15ac0eaacff9", "translatable_type" => "App\Models\Description", "translatable_id" => "03f4f7dd-b602-48b8-b4b9-d4710e70bab4"],
                //343
                ["translation_id" => "ff414441-024d-4dd2-98aa-2782645eb985", "translatable_type" => "App\Models\Description", "translatable_id" => "7ff02d71-e8b9-45b6-8649-098be0380635"],
                ["translation_id" => "e3c18262-97df-4774-a1a2-1d7a3ed4e93d", "translatable_type" => "App\Models\Description", "translatable_id" => "7ff02d71-e8b9-45b6-8649-098be0380635"],
                ["translation_id" => "60e10ae3-986a-4550-8cbd-c5008cb935cc", "translatable_type" => "App\Models\Description", "translatable_id" => "7ff02d71-e8b9-45b6-8649-098be0380635"],
                //344
                ["translation_id" => "3494a8e7-98c0-4579-8d5e-ddd1a0185bec", "translatable_type" => "App\Models\Description", "translatable_id" => "8029fb62-8149-4bbd-b25d-d8360c5ce4e0"],
                ["translation_id" => "d9c040c4-3bd4-43b7-8ef3-c0697181f3c3", "translatable_type" => "App\Models\Description", "translatable_id" => "8029fb62-8149-4bbd-b25d-d8360c5ce4e0"],
                ["translation_id" => "ada401bf-98cf-4e6e-97a2-2cbb86be8b52", "translatable_type" => "App\Models\Description", "translatable_id" => "8029fb62-8149-4bbd-b25d-d8360c5ce4e0"],
                //345
                ["translation_id" => "820e56dd-b4e1-41f4-8be9-697c844c398d", "translatable_type" => "App\Models\Description", "translatable_id" => "22562a0a-d1a0-47fd-b1df-cebffd9a8e7e"],
                ["translation_id" => "21406b01-3906-4cb4-a737-46387e83b558", "translatable_type" => "App\Models\Description", "translatable_id" => "22562a0a-d1a0-47fd-b1df-cebffd9a8e7e"],
                ["translation_id" => "f9fde6fa-4a3a-4d2b-b2a0-e1e88f583989", "translatable_type" => "App\Models\Description", "translatable_id" => "22562a0a-d1a0-47fd-b1df-cebffd9a8e7e"],
                //346
                ["translation_id" => "e3b443c6-fe88-4e8e-a747-f9aae0f8d2d5", "translatable_type" => "App\Models\Description", "translatable_id" => "11cd0604-af13-435e-9da8-f7b109646f5e"],
                ["translation_id" => "9d7e9bea-0d45-45c7-a8d5-7c51868b5579", "translatable_type" => "App\Models\Description", "translatable_id" => "11cd0604-af13-435e-9da8-f7b109646f5e"],
                ["translation_id" => "0b4b86df-3ec9-4122-820e-2388951918fb", "translatable_type" => "App\Models\Description", "translatable_id" => "11cd0604-af13-435e-9da8-f7b109646f5e"],
                //347
                ["translation_id" => "2955490d-2997-4f65-9909-2d241fc90151", "translatable_type" => "App\Models\Description", "translatable_id" => "a96fc63e-aeb8-45e1-8b5c-e797689438e7"],
                ["translation_id" => "95e804a3-3c99-4851-b14d-8e07d065c930", "translatable_type" => "App\Models\Description", "translatable_id" => "a96fc63e-aeb8-45e1-8b5c-e797689438e7"],
                ["translation_id" => "1b1e02c3-4f80-44f9-897b-8fa23a73ae21", "translatable_type" => "App\Models\Description", "translatable_id" => "a96fc63e-aeb8-45e1-8b5c-e797689438e7"],
                //348
                ["translation_id" => "d1f8af58-c7bc-4798-badd-3b8c9340b387", "translatable_type" => "App\Models\Description", "translatable_id" => "bffc77bc-8055-4617-830b-ef3f7e762f25"],
                ["translation_id" => "ae4a57d0-d101-4991-852b-3970731e0d94", "translatable_type" => "App\Models\Description", "translatable_id" => "bffc77bc-8055-4617-830b-ef3f7e762f25"],
                ["translation_id" => "8debe92a-3a6b-441d-97d2-4eb5d122011c", "translatable_type" => "App\Models\Description", "translatable_id" => "bffc77bc-8055-4617-830b-ef3f7e762f25"],
                //349
                ["translation_id" => "a522c73a-2db1-43bd-8b8b-ba7357794957", "translatable_type" => "App\Models\Description", "translatable_id" => "b7882ff8-62b6-48f4-8bd6-97c1467cb2b7"],
                ["translation_id" => "f3a3c452-9404-4ee6-a02b-17ed5cdc7b4b", "translatable_type" => "App\Models\Description", "translatable_id" => "b7882ff8-62b6-48f4-8bd6-97c1467cb2b7"],
                ["translation_id" => "53f33ad0-0414-4fb0-a04a-c1e1716594d0", "translatable_type" => "App\Models\Description", "translatable_id" => "b7882ff8-62b6-48f4-8bd6-97c1467cb2b7"],
                //350
                ["translation_id" => "c890abac-c141-4808-badb-cdfa9afad5ba", "translatable_type" => "App\Models\Description", "translatable_id" => "43314416-4467-4e11-afbe-84e7447cfdda"],
                ["translation_id" => "b108630c-c939-4311-97ec-b7cb7f6b92fc", "translatable_type" => "App\Models\Description", "translatable_id" => "43314416-4467-4e11-afbe-84e7447cfdda"],
                ["translation_id" => "7fc87078-80b1-4577-bded-b37b4b2202b8", "translatable_type" => "App\Models\Description", "translatable_id" => "43314416-4467-4e11-afbe-84e7447cfdda"],
                //351
                ["translation_id" => "3e19897b-2de3-4421-8428-b80481bbe9b6", "translatable_type" => "App\Models\Description", "translatable_id" => "47072c8a-a445-490f-be9e-dafaf890926e"],
                ["translation_id" => "84e3bcd8-107b-4640-8bce-5048fb5bbf61", "translatable_type" => "App\Models\Description", "translatable_id" => "47072c8a-a445-490f-be9e-dafaf890926e"],
                ["translation_id" => "1165f6eb-8a51-4cbf-9d3d-1b0287073dfc", "translatable_type" => "App\Models\Description", "translatable_id" => "47072c8a-a445-490f-be9e-dafaf890926e"],
                //352
                ["translation_id" => "4496dceb-7d81-45de-9356-317a811fcf22", "translatable_type" => "App\Models\Description", "translatable_id" => "bd8a28fd-a63d-4e28-9390-0b4490fd2e90"],
                ["translation_id" => "baab1cc0-19cb-40ee-9378-955b3c339355", "translatable_type" => "App\Models\Description", "translatable_id" => "bd8a28fd-a63d-4e28-9390-0b4490fd2e90"],
                ["translation_id" => "20f2551e-3e9e-4cdf-9972-8cfac05d4bf2", "translatable_type" => "App\Models\Description", "translatable_id" => "bd8a28fd-a63d-4e28-9390-0b4490fd2e90"],
                //353
                ["translation_id" => "4f4027fb-46ea-4fe1-ab7d-8f1998f4da77", "translatable_type" => "App\Models\Description", "translatable_id" => "5b891b3f-c578-464e-9cc3-a08d49a34de8"],
                ["translation_id" => "1f48e460-a7d9-4563-a71c-7325c5add272", "translatable_type" => "App\Models\Description", "translatable_id" => "5b891b3f-c578-464e-9cc3-a08d49a34de8"],
                ["translation_id" => "4a4cf0b2-3514-45d7-a056-df6b95015d5e", "translatable_type" => "App\Models\Description", "translatable_id" => "5b891b3f-c578-464e-9cc3-a08d49a34de8"],
                //354
                ["translation_id" => "cf092b3d-9a54-4e4c-b3ef-3451a38c0edb", "translatable_type" => "App\Models\Description", "translatable_id" => "eba7e61a-5d3b-4367-82b7-9a4965e479d0"],
                ["translation_id" => "b5165f57-e6f1-41da-8a23-d850e7b1efc8", "translatable_type" => "App\Models\Description", "translatable_id" => "eba7e61a-5d3b-4367-82b7-9a4965e479d0"],
                ["translation_id" => "71f64dd2-c880-4237-9de6-0e066094e668", "translatable_type" => "App\Models\Description", "translatable_id" => "eba7e61a-5d3b-4367-82b7-9a4965e479d0"],
                //355
                ["translation_id" => "14674cd1-ad23-4907-b3e2-3d145cdac11c", "translatable_type" => "App\Models\Description", "translatable_id" => "845eead8-379e-4c9f-9696-f5ca983765ea"],
                ["translation_id" => "986d8262-352d-4f46-8016-525878bc0a95", "translatable_type" => "App\Models\Description", "translatable_id" => "845eead8-379e-4c9f-9696-f5ca983765ea"],
                ["translation_id" => "328eddc9-4b17-4518-a9de-2003961b771e", "translatable_type" => "App\Models\Description", "translatable_id" => "845eead8-379e-4c9f-9696-f5ca983765ea"],
                //356
                ["translation_id" => "869538c7-4756-4de9-a483-17bd0c2c942f", "translatable_type" => "App\Models\Description", "translatable_id" => "38d00ad2-b936-4e33-a88a-078522649612"],
                ["translation_id" => "087ff83e-07aa-47b6-8b94-9c5ef529218d", "translatable_type" => "App\Models\Description", "translatable_id" => "38d00ad2-b936-4e33-a88a-078522649612"],
                ["translation_id" => "fb589d69-d58a-4c95-b1f7-505388073ece", "translatable_type" => "App\Models\Description", "translatable_id" => "38d00ad2-b936-4e33-a88a-078522649612"],
                //357
                ["translation_id" => "52196135-5ff8-410d-a946-ff0137510aac", "translatable_type" => "App\Models\Description", "translatable_id" => "7ea35ca9-a1fc-433e-af8b-9ff9c9b28f97"],
                ["translation_id" => "9323141e-c602-4a33-9593-2ed04fd48c81", "translatable_type" => "App\Models\Description", "translatable_id" => "7ea35ca9-a1fc-433e-af8b-9ff9c9b28f97"],
                ["translation_id" => "d61d3ad6-dead-4911-a98d-734683a2a27a", "translatable_type" => "App\Models\Description", "translatable_id" => "7ea35ca9-a1fc-433e-af8b-9ff9c9b28f97"],
                //358
                ["translation_id" => "81b87a4f-6bf5-402d-926f-73aea2140e5a", "translatable_type" => "App\Models\Description", "translatable_id" => "529a99f3-572f-4e24-b7cb-70e8c01f7ccf"],
                ["translation_id" => "c74a1077-ee8c-42e8-8576-1caefc9967cf", "translatable_type" => "App\Models\Description", "translatable_id" => "529a99f3-572f-4e24-b7cb-70e8c01f7ccf"],
                ["translation_id" => "78684dda-eb76-424f-abe8-53afd1c19448", "translatable_type" => "App\Models\Description", "translatable_id" => "529a99f3-572f-4e24-b7cb-70e8c01f7ccf"],
                //359
                ["translation_id" => "46f0c3bb-a761-4e81-9626-6ab63285b6d4", "translatable_type" => "App\Models\Description", "translatable_id" => "78ec8a5c-ec23-47d0-841f-c6c242a4708a"],
                ["translation_id" => "e28c0560-a726-4178-8c66-0d338f58fb8a", "translatable_type" => "App\Models\Description", "translatable_id" => "78ec8a5c-ec23-47d0-841f-c6c242a4708a"],
                ["translation_id" => "c52e29bf-2d5d-4b15-8a83-2d239a58b505", "translatable_type" => "App\Models\Description", "translatable_id" => "78ec8a5c-ec23-47d0-841f-c6c242a4708a"],
                //360
                ["translation_id" => "b3e69c92-9635-45b1-9337-e14026022ebf", "translatable_type" => "App\Models\Description", "translatable_id" => "2a24e428-d27d-4366-8ab0-74d44ea234c6"],
                ["translation_id" => "8fb05bd6-0266-4234-936c-c68d325bb174", "translatable_type" => "App\Models\Description", "translatable_id" => "2a24e428-d27d-4366-8ab0-74d44ea234c6"],
                ["translation_id" => "6be5d406-af40-4e8a-bced-86817164a09a", "translatable_type" => "App\Models\Description", "translatable_id" => "2a24e428-d27d-4366-8ab0-74d44ea234c6"],
                //361
                ["translation_id" => "56a5c1f2-23ef-44fc-acda-ad233e2e4137", "translatable_type" => "App\Models\Description", "translatable_id" => "843c690d-ca33-4567-8594-01afb90a6755"],
                ["translation_id" => "95c6c345-9543-4eae-9ad8-4e5d54a06d4d", "translatable_type" => "App\Models\Description", "translatable_id" => "843c690d-ca33-4567-8594-01afb90a6755"],
                ["translation_id" => "5bdaf061-43ed-42c3-b6ca-b93c7fb99142", "translatable_type" => "App\Models\Description", "translatable_id" => "843c690d-ca33-4567-8594-01afb90a6755"],
                //362
                ["translation_id" => "7e5d6f5e-9602-4488-8449-5521a69e4cec", "translatable_type" => "App\Models\Description", "translatable_id" => "a26cbf95-90de-45dd-8c09-28d14fa30516"],
                ["translation_id" => "9fae9d3c-599d-4558-97c3-6175ebfcb0d2", "translatable_type" => "App\Models\Description", "translatable_id" => "a26cbf95-90de-45dd-8c09-28d14fa30516"],
                ["translation_id" => "4d91fa17-4ab0-4f7b-98b9-a1c3d9fb0049", "translatable_type" => "App\Models\Description", "translatable_id" => "a26cbf95-90de-45dd-8c09-28d14fa30516"],
                //363
                ["translation_id" => "353ac8c1-0cb7-47d9-9991-63f0e81d77ca", "translatable_type" => "App\Models\Description", "translatable_id" => "6eab853f-e779-4b88-9cb7-a164cce0953d"],
                ["translation_id" => "97ac181e-0bf0-461d-98a8-a51e55ecdb42", "translatable_type" => "App\Models\Description", "translatable_id" => "6eab853f-e779-4b88-9cb7-a164cce0953d"],
                ["translation_id" => "193a302d-5138-4743-9121-5ad6def29bcb", "translatable_type" => "App\Models\Description", "translatable_id" => "6eab853f-e779-4b88-9cb7-a164cce0953d"],
                //364
                ["translation_id" => "03d3f14d-4ed5-49b9-850b-9ae1ef6a439a", "translatable_type" => "App\Models\Description", "translatable_id" => "c077046d-e654-463a-9779-b4f5e65f0904"],
                ["translation_id" => "c7f39213-514f-4e4f-ae5c-5f15916d5c13", "translatable_type" => "App\Models\Description", "translatable_id" => "c077046d-e654-463a-9779-b4f5e65f0904"],
                ["translation_id" => "12b72da3-4017-4b09-ba2a-7216c8541671", "translatable_type" => "App\Models\Description", "translatable_id" => "c077046d-e654-463a-9779-b4f5e65f0904"],
                //365
                ["translation_id" => "87d67074-6efe-4cf4-8e5e-0a184080f931", "translatable_type" => "App\Models\Description", "translatable_id" => "6c656543-5bd5-4629-92dc-e2ac2abb7801"],
                ["translation_id" => "08aa4ab5-96a6-49b3-a075-a9e2149bc42d", "translatable_type" => "App\Models\Description", "translatable_id" => "6c656543-5bd5-4629-92dc-e2ac2abb7801"],
                ["translation_id" => "5fd18722-eb5c-4a92-a1b6-b5a153682788", "translatable_type" => "App\Models\Description", "translatable_id" => "6c656543-5bd5-4629-92dc-e2ac2abb7801"],
                //366
                ["translation_id" => "fd296938-6478-4695-b758-8a8c0471089e", "translatable_type" => "App\Models\Description", "translatable_id" => "a3d9d519-7e93-4bb6-8436-e8c029c7eb8c"],
                ["translation_id" => "a9022eae-9a32-46e5-ab98-6cdad724f213", "translatable_type" => "App\Models\Description", "translatable_id" => "a3d9d519-7e93-4bb6-8436-e8c029c7eb8c"],
                ["translation_id" => "6a92af33-805d-4a0c-be59-2324dfaca368", "translatable_type" => "App\Models\Description", "translatable_id" => "a3d9d519-7e93-4bb6-8436-e8c029c7eb8c"],
                //367
                ["translation_id" => "67ba7045-cd9f-4e52-a481-476d06375aa3", "translatable_type" => "App\Models\Description", "translatable_id" => "68b90b60-0137-42d1-8691-17acc8d8a011"],
                ["translation_id" => "e5f0426c-1be2-4f8c-92d5-a97baf322288", "translatable_type" => "App\Models\Description", "translatable_id" => "68b90b60-0137-42d1-8691-17acc8d8a011"],
                ["translation_id" => "1402d525-a949-43ee-a289-da8cd53a7cbf", "translatable_type" => "App\Models\Description", "translatable_id" => "68b90b60-0137-42d1-8691-17acc8d8a011"],
                //368
                ["translation_id" => "c62e6ca2-fc8b-4101-a181-31f891e02e93", "translatable_type" => "App\Models\Description", "translatable_id" => "9c6e9322-080c-44c4-afb2-66253074bb69"],
                ["translation_id" => "2c7e2bf3-18f4-4bba-a85e-3c2e6526ed4d", "translatable_type" => "App\Models\Description", "translatable_id" => "9c6e9322-080c-44c4-afb2-66253074bb69"],
                ["translation_id" => "62231607-201f-4ba4-a7d5-ab56d74768d6", "translatable_type" => "App\Models\Description", "translatable_id" => "9c6e9322-080c-44c4-afb2-66253074bb69"],
                //369
                ["translation_id" => "46f36e99-049b-4e79-b55e-18032b3d1b94", "translatable_type" => "App\Models\Description", "translatable_id" => "88c8218f-d63c-43b6-ae6a-c10b6fc136ef"],
                ["translation_id" => "091e9193-35f8-4f81-9106-6b71008a8001", "translatable_type" => "App\Models\Description", "translatable_id" => "88c8218f-d63c-43b6-ae6a-c10b6fc136ef"],
                ["translation_id" => "8f46765c-00c3-4c56-8871-03d49cf7ef2b", "translatable_type" => "App\Models\Description", "translatable_id" => "88c8218f-d63c-43b6-ae6a-c10b6fc136ef"],
                //370
                ["translation_id" => "05f99cbd-33ee-4356-86cf-04923829591d", "translatable_type" => "App\Models\Description", "translatable_id" => "6490c5df-0dc2-4547-bf94-04392141112c"],
                ["translation_id" => "01580f95-e507-4120-94bd-dc3c7839f125", "translatable_type" => "App\Models\Description", "translatable_id" => "6490c5df-0dc2-4547-bf94-04392141112c"],
                ["translation_id" => "c4df3c64-2de2-4d96-a98e-5a2ba7765252", "translatable_type" => "App\Models\Description", "translatable_id" => "6490c5df-0dc2-4547-bf94-04392141112c"],
                //371
                ["translation_id" => "d2e59b2c-4c86-4945-a63a-caf79e4efc4b", "translatable_type" => "App\Models\Description", "translatable_id" => "76cb0ef8-c20c-4a9d-995d-1dba582431ce"],
                ["translation_id" => "e53f987c-edfc-40a3-a425-0a1d8127b4cc", "translatable_type" => "App\Models\Description", "translatable_id" => "76cb0ef8-c20c-4a9d-995d-1dba582431ce"],
                ["translation_id" => "f737dd6f-155b-4058-a217-f4362e2c5b44", "translatable_type" => "App\Models\Description", "translatable_id" => "76cb0ef8-c20c-4a9d-995d-1dba582431ce"],
                //372
                ["translation_id" => "2b8e5a01-5a11-43d5-9c24-b62720e41928", "translatable_type" => "App\Models\Description", "translatable_id" => "5ef46412-02a0-4497-855c-c106ff21a671"],
                ["translation_id" => "d30c6597-e238-498f-9882-e8759ecb13a6", "translatable_type" => "App\Models\Description", "translatable_id" => "5ef46412-02a0-4497-855c-c106ff21a671"],
                ["translation_id" => "7ffd2ee7-a07c-4ca1-8a61-19431b5aca9c", "translatable_type" => "App\Models\Description", "translatable_id" => "5ef46412-02a0-4497-855c-c106ff21a671"],
                //373
                ["translation_id" => "752be419-a617-4913-ac49-bfe65477f135", "translatable_type" => "App\Models\Description", "translatable_id" => "176fad08-cc57-432b-9cd4-0a77348a2cb6"],
                ["translation_id" => "022bb650-5432-43e6-800a-48b80d3b63c6", "translatable_type" => "App\Models\Description", "translatable_id" => "176fad08-cc57-432b-9cd4-0a77348a2cb6"],
                ["translation_id" => "1de94215-67f6-4fbc-9482-91e2aae7fc11", "translatable_type" => "App\Models\Description", "translatable_id" => "176fad08-cc57-432b-9cd4-0a77348a2cb6"],
                //374
                ["translation_id" => "44586b38-aa79-4c70-a873-c4032fa97e1d", "translatable_type" => "App\Models\Description", "translatable_id" => "bb036f2e-6cc1-4585-9773-a9deb6250006"],
                ["translation_id" => "7cdbf474-57c2-4855-84e4-d2bdca6817e5", "translatable_type" => "App\Models\Description", "translatable_id" => "bb036f2e-6cc1-4585-9773-a9deb6250006"],
                ["translation_id" => "d1b4c618-f5f2-40c5-8932-d3c670d412d4", "translatable_type" => "App\Models\Description", "translatable_id" => "bb036f2e-6cc1-4585-9773-a9deb6250006"],
                //375
                ["translation_id" => "d160555e-e7cf-426a-84a8-e461a0ed96de", "translatable_type" => "App\Models\Description", "translatable_id" => "283c48bd-9482-4c49-8162-a6cd8e4afc58"],
                ["translation_id" => "a476c8a5-de75-4283-b6c3-fc25e236694b", "translatable_type" => "App\Models\Description", "translatable_id" => "283c48bd-9482-4c49-8162-a6cd8e4afc58"],
                ["translation_id" => "88857539-8952-4e4d-be18-2a597aba8f13", "translatable_type" => "App\Models\Description", "translatable_id" => "283c48bd-9482-4c49-8162-a6cd8e4afc58"],
                //376
                ["translation_id" => "9ea968d6-f724-4a08-bbf6-e10eabbfac90", "translatable_type" => "App\Models\Description", "translatable_id" => "1fff62c7-27cf-400f-b563-768adf6a3512"],
                ["translation_id" => "cdb2e06c-6b51-4f5f-8737-694df5385675", "translatable_type" => "App\Models\Description", "translatable_id" => "1fff62c7-27cf-400f-b563-768adf6a3512"],
                ["translation_id" => "d6278ec6-9afd-440c-8de3-c3871940b8cf", "translatable_type" => "App\Models\Description", "translatable_id" => "1fff62c7-27cf-400f-b563-768adf6a3512"],
                //377
                ["translation_id" => "a558c654-ae53-49d6-8c32-c6738fccf2dd", "translatable_type" => "App\Models\Description", "translatable_id" => "8bce201f-cc57-4716-b6b1-b414cd166030"],
                ["translation_id" => "be98841b-c771-4c3f-80a8-ac3e28da8919", "translatable_type" => "App\Models\Description", "translatable_id" => "8bce201f-cc57-4716-b6b1-b414cd166030"],
                ["translation_id" => "540b1195-6536-41aa-a40c-179f018fc8e1", "translatable_type" => "App\Models\Description", "translatable_id" => "8bce201f-cc57-4716-b6b1-b414cd166030"],
                //378
                ["translation_id" => "4d5cbc89-5a64-404c-a29b-2feaa7651aff", "translatable_type" => "App\Models\Description", "translatable_id" => "8f12bec5-6af2-4fef-a699-ffba6dfc6e0b"],
                ["translation_id" => "7836d43c-1563-4fa0-a305-7fef1572210c", "translatable_type" => "App\Models\Description", "translatable_id" => "8f12bec5-6af2-4fef-a699-ffba6dfc6e0b"],
                ["translation_id" => "04fc86b3-680f-4b6d-adaf-2e72d054b14f", "translatable_type" => "App\Models\Description", "translatable_id" => "8f12bec5-6af2-4fef-a699-ffba6dfc6e0b"],
                //379
                ["translation_id" => "49546de7-f610-4aae-ac43-f6e9aae378cd", "translatable_type" => "App\Models\Description", "translatable_id" => "d5c64d36-bf17-4c76-871b-ba962686008b"],
                ["translation_id" => "715e3af9-5a6f-450d-9a97-78f81f649d6a", "translatable_type" => "App\Models\Description", "translatable_id" => "d5c64d36-bf17-4c76-871b-ba962686008b"],
                ["translation_id" => "b6d70386-2bf0-479f-98a9-62767be543a6", "translatable_type" => "App\Models\Description", "translatable_id" => "d5c64d36-bf17-4c76-871b-ba962686008b"],
                //380
                ["translation_id" => "d2f94534-2cc5-4c60-b51a-d5fa54d79863", "translatable_type" => "App\Models\Description", "translatable_id" => "4b724ad0-0798-44ca-b45b-399c7d8759a7"],
                ["translation_id" => "a0446ebc-1eb3-4a06-9a03-fe2143c2b52f", "translatable_type" => "App\Models\Description", "translatable_id" => "4b724ad0-0798-44ca-b45b-399c7d8759a7"],
                ["translation_id" => "f8b41fbb-51a3-4503-9030-b110bb512b03", "translatable_type" => "App\Models\Description", "translatable_id" => "4b724ad0-0798-44ca-b45b-399c7d8759a7"],
                //381
                ["translation_id" => "91254bc0-0e35-4bce-9b20-e3908c446486", "translatable_type" => "App\Models\Description", "translatable_id" => "7dc4cc74-46b7-423e-89f7-fb5145687a23"],
                ["translation_id" => "a6181106-592f-49bf-8b02-c14c1993f6f3", "translatable_type" => "App\Models\Description", "translatable_id" => "7dc4cc74-46b7-423e-89f7-fb5145687a23"],
                ["translation_id" => "da321086-e33f-4bda-8d4c-37c7186062bd", "translatable_type" => "App\Models\Description", "translatable_id" => "7dc4cc74-46b7-423e-89f7-fb5145687a23"],
                //382
                ["translation_id" => "9d716eda-eb10-49fb-b7ae-56134f22e7e0", "translatable_type" => "App\Models\Description", "translatable_id" => "7595afe3-b73f-4b36-a1c0-cb54b9b6f3b9"],
                ["translation_id" => "b1478cc7-5c3e-4a6e-91ff-4e10670bd009", "translatable_type" => "App\Models\Description", "translatable_id" => "7595afe3-b73f-4b36-a1c0-cb54b9b6f3b9"],
                ["translation_id" => "8cf381ec-fd1b-4102-aa30-b61e13b886bb", "translatable_type" => "App\Models\Description", "translatable_id" => "7595afe3-b73f-4b36-a1c0-cb54b9b6f3b9"],
                //383
                ["translation_id" => "6bd0da56-086f-4e64-ac1f-8cded98a0583", "translatable_type" => "App\Models\Description", "translatable_id" => "439fa440-dd88-4563-aa3f-56bb44a17f6c"],
                ["translation_id" => "e59647f8-3d7b-4b5b-878f-26cf48d06ca0", "translatable_type" => "App\Models\Description", "translatable_id" => "439fa440-dd88-4563-aa3f-56bb44a17f6c"],
                ["translation_id" => "0848ab77-5415-4c61-81e7-5264b72b73f1", "translatable_type" => "App\Models\Description", "translatable_id" => "439fa440-dd88-4563-aa3f-56bb44a17f6c"],
                //384
                ["translation_id" => "496a1a9d-8869-462f-892e-36c241b940e2", "translatable_type" => "App\Models\Description", "translatable_id" => "40142711-951d-4384-a55f-de5d5c13c945"],
                ["translation_id" => "a52fadf8-3090-4f4c-a017-f1930fefc8c6", "translatable_type" => "App\Models\Description", "translatable_id" => "40142711-951d-4384-a55f-de5d5c13c945"],
                ["translation_id" => "e1d160e7-d388-4b55-bdd9-9c54aa1403de", "translatable_type" => "App\Models\Description", "translatable_id" => "40142711-951d-4384-a55f-de5d5c13c945"],
                //385
                ["translation_id" => "990fcaa4-d150-4a2e-9682-b54ab4b97cac", "translatable_type" => "App\Models\Description", "translatable_id" => "29d94e9a-84b7-4323-8741-f8fc8b374c1b"],
                ["translation_id" => "79f7b916-0def-48a2-adc9-562c7c44d3cf", "translatable_type" => "App\Models\Description", "translatable_id" => "29d94e9a-84b7-4323-8741-f8fc8b374c1b"],
                ["translation_id" => "bd075ea1-def8-48b6-961d-26843326cf72", "translatable_type" => "App\Models\Description", "translatable_id" => "29d94e9a-84b7-4323-8741-f8fc8b374c1b"],
                //386
                ["translation_id" => "76677c97-35be-4d42-98d4-1b21e83c8e43", "translatable_type" => "App\Models\Description", "translatable_id" => "1c1f68a4-f2fb-41a0-afc0-a105a9fc6257"],
                ["translation_id" => "eed59b61-e34d-41b5-a1e9-3377b0c1558a", "translatable_type" => "App\Models\Description", "translatable_id" => "1c1f68a4-f2fb-41a0-afc0-a105a9fc6257"],
                ["translation_id" => "0f76e677-cf76-401d-925f-d770672235e0", "translatable_type" => "App\Models\Description", "translatable_id" => "1c1f68a4-f2fb-41a0-afc0-a105a9fc6257"],
                //387
                ["translation_id" => "e2864505-ae24-4688-89f9-4c5caa38a51b", "translatable_type" => "App\Models\Description", "translatable_id" => "1eec3d34-53af-442b-af43-9f4f07f5024f"],
                ["translation_id" => "15348577-79d8-43d8-98a0-75a6b29e29b2", "translatable_type" => "App\Models\Description", "translatable_id" => "1eec3d34-53af-442b-af43-9f4f07f5024f"],
                ["translation_id" => "2ec0e8a4-286a-4536-a46a-725ad1412af6", "translatable_type" => "App\Models\Description", "translatable_id" => "1eec3d34-53af-442b-af43-9f4f07f5024f"],
                //388
                ["translation_id" => "443bd9b0-7279-4959-bd30-3172837de788", "translatable_type" => "App\Models\Description", "translatable_id" => "2b29b233-6b2a-4e7d-b984-9327e46f8d80"],
                ["translation_id" => "7902d55b-84cd-4e73-b535-d58f9804f04b", "translatable_type" => "App\Models\Description", "translatable_id" => "2b29b233-6b2a-4e7d-b984-9327e46f8d80"],
                ["translation_id" => "efc03052-ab7e-4a4c-90b6-3ab3cdf01f13", "translatable_type" => "App\Models\Description", "translatable_id" => "2b29b233-6b2a-4e7d-b984-9327e46f8d80"],
                //389
                ["translation_id" => "abb24b71-893a-4d37-96d7-0b6519bfa680", "translatable_type" => "App\Models\Description", "translatable_id" => "72c4d37c-aa3f-4999-862e-930037452061"],
                ["translation_id" => "be1703d2-05fc-4c1a-946c-d93bb86b68c5", "translatable_type" => "App\Models\Description", "translatable_id" => "72c4d37c-aa3f-4999-862e-930037452061"],
                ["translation_id" => "bfd9b83d-df49-4d01-b96b-c8c1ec7658e1", "translatable_type" => "App\Models\Description", "translatable_id" => "72c4d37c-aa3f-4999-862e-930037452061"],
                //390
                ["translation_id" => "c8da60d5-4924-4ed9-847a-d993d0df924b", "translatable_type" => "App\Models\Description", "translatable_id" => "26076166-e22f-4e65-83de-c48f30fc5ed7"],
                ["translation_id" => "d21ae8ee-6604-4e2c-9ff1-c929e8df5008", "translatable_type" => "App\Models\Description", "translatable_id" => "26076166-e22f-4e65-83de-c48f30fc5ed7"],
                ["translation_id" => "8afa0d14-2b59-420d-b3ee-0f31b70ac493", "translatable_type" => "App\Models\Description", "translatable_id" => "26076166-e22f-4e65-83de-c48f30fc5ed7"],
                //391
                ["translation_id" => "df98f2a2-5847-43a6-9443-bb82b090f594", "translatable_type" => "App\Models\Description", "translatable_id" => "8998ea8a-1dc8-4f22-a9dc-acef629097b8"],
                ["translation_id" => "bebff725-ba50-4ff1-8077-e4a9003f99e5", "translatable_type" => "App\Models\Description", "translatable_id" => "8998ea8a-1dc8-4f22-a9dc-acef629097b8"],
                ["translation_id" => "e84c89fe-32fb-4fa9-bf6d-8507122da761", "translatable_type" => "App\Models\Description", "translatable_id" => "8998ea8a-1dc8-4f22-a9dc-acef629097b8"],
                //392
                ["translation_id" => "0e7dd7a3-a8a2-4af6-9a8d-fda678ee0a1f", "translatable_type" => "App\Models\Description", "translatable_id" => "7bba4d0a-486c-4e7f-9fa2-ec3c2df3437d"],
                ["translation_id" => "ea07769a-40fb-4e28-8797-88a1d4c394cd", "translatable_type" => "App\Models\Description", "translatable_id" => "7bba4d0a-486c-4e7f-9fa2-ec3c2df3437d"],
                ["translation_id" => "70becdd2-206d-44be-9ab5-a74f07a0370b", "translatable_type" => "App\Models\Description", "translatable_id" => "7bba4d0a-486c-4e7f-9fa2-ec3c2df3437d"],
                //393
                ["translation_id" => "a178f297-c7e8-44fb-992f-802dd1af0c5b", "translatable_type" => "App\Models\Description", "translatable_id" => "f33b42b3-a97c-40f0-b5c2-19cc9253bb1e"],
                ["translation_id" => "f90bf478-a4f6-40de-a4f7-999cf9b7526c", "translatable_type" => "App\Models\Description", "translatable_id" => "f33b42b3-a97c-40f0-b5c2-19cc9253bb1e"],
                ["translation_id" => "ebd8472d-6a6a-4e6c-96d1-6b7bd811b06d", "translatable_type" => "App\Models\Description", "translatable_id" => "f33b42b3-a97c-40f0-b5c2-19cc9253bb1e"],
                //394
                ["translation_id" => "ddcd2b67-9b46-4294-beb2-515640d0e7b1", "translatable_type" => "App\Models\Description", "translatable_id" => "bef0c77f-86c3-4460-956c-c558caa5db34"],
                ["translation_id" => "99a7be82-68b7-47f7-bef2-5fac3e2d7a91", "translatable_type" => "App\Models\Description", "translatable_id" => "bef0c77f-86c3-4460-956c-c558caa5db34"],
                ["translation_id" => "f1bcb7a3-2330-4837-976b-8d47d48b68ea", "translatable_type" => "App\Models\Description", "translatable_id" => "bef0c77f-86c3-4460-956c-c558caa5db34"],
                //395
                ["translation_id" => "3dba73fc-53f1-448c-ad8e-61c33d013a00", "translatable_type" => "App\Models\Description", "translatable_id" => "564e080e-1972-4891-80f7-4467a0cdfc85"],
                ["translation_id" => "032bde6a-613a-4d85-961e-a65d58a4de8d", "translatable_type" => "App\Models\Description", "translatable_id" => "564e080e-1972-4891-80f7-4467a0cdfc85"],
                ["translation_id" => "b145f7b2-b52c-482f-b397-85057efed964", "translatable_type" => "App\Models\Description", "translatable_id" => "564e080e-1972-4891-80f7-4467a0cdfc85"],
                //396
                ["translation_id" => "69f6733f-6b24-4cf9-875b-a902ff6457ca", "translatable_type" => "App\Models\Description", "translatable_id" => "c427a17a-0fa8-4190-b5c4-649dd53e4135"],
                ["translation_id" => "85c43b13-ecab-4fa1-b826-9532839f47e8", "translatable_type" => "App\Models\Description", "translatable_id" => "c427a17a-0fa8-4190-b5c4-649dd53e4135"],
                ["translation_id" => "49c3a97e-23c5-4a8b-93ec-184c4b27e373", "translatable_type" => "App\Models\Description", "translatable_id" => "c427a17a-0fa8-4190-b5c4-649dd53e4135"],
                //397
                ["translation_id" => "33e36902-34b3-4384-8028-cc953c66a4c5", "translatable_type" => "App\Models\Description", "translatable_id" => "02b7fa65-19a5-40bd-b43f-bb7047eb97b1"],
                ["translation_id" => "42ff11ef-4e92-4403-9e7e-6be100a66d4a", "translatable_type" => "App\Models\Description", "translatable_id" => "02b7fa65-19a5-40bd-b43f-bb7047eb97b1"],
                ["translation_id" => "af7db014-1f7d-45e5-b996-496014761c04", "translatable_type" => "App\Models\Description", "translatable_id" => "02b7fa65-19a5-40bd-b43f-bb7047eb97b1"],
                //398
                ["translation_id" => "2ecf5495-589b-44e2-bb74-18f4674a337f", "translatable_type" => "App\Models\Description", "translatable_id" => "ef69e4e7-7fd5-4dd2-ba2b-d6bbf935bf63"],
                ["translation_id" => "44f16113-fb81-4a20-915b-a111da5508b6", "translatable_type" => "App\Models\Description", "translatable_id" => "ef69e4e7-7fd5-4dd2-ba2b-d6bbf935bf63"],
                ["translation_id" => "243e2056-1ae4-4b28-a494-080024fe8fcd", "translatable_type" => "App\Models\Description", "translatable_id" => "ef69e4e7-7fd5-4dd2-ba2b-d6bbf935bf63"],
                //399
                ["translation_id" => "841f4dbd-b649-442b-a74c-a7a535c07ed5", "translatable_type" => "App\Models\Description", "translatable_id" => "9583f0d4-64ac-452c-87b0-8d143099b76d"],
                ["translation_id" => "2124b251-8de3-4346-9d24-ccdc2d41a9be", "translatable_type" => "App\Models\Description", "translatable_id" => "9583f0d4-64ac-452c-87b0-8d143099b76d"],
                ["translation_id" => "92281b85-547e-46a1-b236-48a9a6771b92", "translatable_type" => "App\Models\Description", "translatable_id" => "9583f0d4-64ac-452c-87b0-8d143099b76d"],
                //400
                ["translation_id" => "037cde52-e79a-4388-aacf-3104e217f412", "translatable_type" => "App\Models\Description", "translatable_id" => "64f1938e-0ec3-48fd-b43f-66551ad53117"],
                ["translation_id" => "c24867a7-da62-47ef-979d-b11d2c1c121d", "translatable_type" => "App\Models\Description", "translatable_id" => "64f1938e-0ec3-48fd-b43f-66551ad53117"],
                ["translation_id" => "69bcf869-214a-484f-9e43-5c7aabe6f88c", "translatable_type" => "App\Models\Description", "translatable_id" => "64f1938e-0ec3-48fd-b43f-66551ad53117"],
                //401
                ["translation_id" => "c12a96a2-a4a3-4fae-8f69-0ea429fa4a12", "translatable_type" => "App\Models\Description", "translatable_id" => "7a881101-968b-4d61-852e-988270e19f6e"],
                ["translation_id" => "5e9938be-85a9-4482-a058-5e315dff3895", "translatable_type" => "App\Models\Description", "translatable_id" => "7a881101-968b-4d61-852e-988270e19f6e"],
                ["translation_id" => "dbea66b9-57d4-4f59-af04-0618fb2939c3", "translatable_type" => "App\Models\Description", "translatable_id" => "7a881101-968b-4d61-852e-988270e19f6e"],
                //402
                ["translation_id" => "671ae9cf-c466-4985-b0c7-93468335928e", "translatable_type" => "App\Models\Description", "translatable_id" => "42ca6f1a-a1b0-4221-b374-67842ebee79c"],
                ["translation_id" => "325e1e68-c336-4374-85ce-8d28284e72b9", "translatable_type" => "App\Models\Description", "translatable_id" => "42ca6f1a-a1b0-4221-b374-67842ebee79c"],
                ["translation_id" => "7865b0b1-29ba-439c-b141-5aeac8ca25d9", "translatable_type" => "App\Models\Description", "translatable_id" => "42ca6f1a-a1b0-4221-b374-67842ebee79c"],
                //403
                ["translation_id" => "b29dd9ef-4d62-48db-9f86-8f29f887de27", "translatable_type" => "App\Models\Description", "translatable_id" => "ebf38665-a7de-44a0-b23a-cdc783e05f26"],
                ["translation_id" => "191f3684-4dda-4c71-b335-e3f6d976d343", "translatable_type" => "App\Models\Description", "translatable_id" => "ebf38665-a7de-44a0-b23a-cdc783e05f26"],
                ["translation_id" => "e046bb9b-3546-452c-ade2-a7f2d0e951e6", "translatable_type" => "App\Models\Description", "translatable_id" => "ebf38665-a7de-44a0-b23a-cdc783e05f26"],
                //404
                ["translation_id" => "8a6215ed-1899-4ef1-804b-402fa323fab3", "translatable_type" => "App\Models\Description", "translatable_id" => "caf1f1b2-f63a-4fec-9e84-7181de6798d5"],
                ["translation_id" => "6dfe9246-55a8-4479-b904-c6e87c8d8f4b", "translatable_type" => "App\Models\Description", "translatable_id" => "caf1f1b2-f63a-4fec-9e84-7181de6798d5"],
                ["translation_id" => "8719e6d4-9707-48d2-a948-8a098b286388", "translatable_type" => "App\Models\Description", "translatable_id" => "caf1f1b2-f63a-4fec-9e84-7181de6798d5"],
                //405
                ["translation_id" => "81b42289-e1ca-4ab3-8bfc-08fa60e4ac51", "translatable_type" => "App\Models\Description", "translatable_id" => "ec7e6fa9-ad10-4d86-ad7d-c3bda22e7a26"],
                ["translation_id" => "2d11176f-5836-40da-9c99-39e32327d9e8", "translatable_type" => "App\Models\Description", "translatable_id" => "ec7e6fa9-ad10-4d86-ad7d-c3bda22e7a26"],
                ["translation_id" => "600be506-43bf-48e2-b5cb-f74cadfb2a9f", "translatable_type" => "App\Models\Description", "translatable_id" => "ec7e6fa9-ad10-4d86-ad7d-c3bda22e7a26"],
                //406
                ["translation_id" => "a8fa16e5-01fd-4fc6-b59e-c0b1a1fd196d", "translatable_type" => "App\Models\Description", "translatable_id" => "50c35afa-90b1-4cae-b40e-64f8a84803fb"],
                ["translation_id" => "7fb6f73f-50fc-4cd0-bac8-218ddce392d0", "translatable_type" => "App\Models\Description", "translatable_id" => "50c35afa-90b1-4cae-b40e-64f8a84803fb"],
                ["translation_id" => "e8f733bc-9611-455b-926d-fe5b6cf40f3c", "translatable_type" => "App\Models\Description", "translatable_id" => "50c35afa-90b1-4cae-b40e-64f8a84803fb"],
                //407
                ["translation_id" => "e7cf80a7-c8cf-4d82-8dd6-b2c6573b4e17", "translatable_type" => "App\Models\Description", "translatable_id" => "40906ae5-11fc-4db3-8ee6-05e1770a4a00"],
                ["translation_id" => "16e5f3ab-bd81-49ee-b04b-8d1fa5e22e0e", "translatable_type" => "App\Models\Description", "translatable_id" => "40906ae5-11fc-4db3-8ee6-05e1770a4a00"],
                ["translation_id" => "db9d13ec-fd18-4d39-9d91-f46d5081622b", "translatable_type" => "App\Models\Description", "translatable_id" => "40906ae5-11fc-4db3-8ee6-05e1770a4a00"],
                //408
                ["translation_id" => "ef480fc2-8d0e-4a90-81c1-adf4aee72209", "translatable_type" => "App\Models\Description", "translatable_id" => "4a88ee59-7451-47d8-8620-7bcba32e2531"],
                ["translation_id" => "58c596b0-3b13-4c2c-bdc8-27d3bdf620e0", "translatable_type" => "App\Models\Description", "translatable_id" => "4a88ee59-7451-47d8-8620-7bcba32e2531"],
                ["translation_id" => "4a88bc65-5f29-4fa6-8358-7995eaea4e4c", "translatable_type" => "App\Models\Description", "translatable_id" => "4a88ee59-7451-47d8-8620-7bcba32e2531"],
                //409
                ["translation_id" => "7865f86c-aafb-489f-b505-db3fbf55c394", "translatable_type" => "App\Models\Description", "translatable_id" => "07925378-b9ed-4f1e-9ec0-27f3c7f7e6f2"],
                ["translation_id" => "1b132f6a-1085-46e1-86f1-bd031e6d163c", "translatable_type" => "App\Models\Description", "translatable_id" => "07925378-b9ed-4f1e-9ec0-27f3c7f7e6f2"],
                ["translation_id" => "6920cb36-c8a2-4e0e-b3e0-c70cab7a5c8c", "translatable_type" => "App\Models\Description", "translatable_id" => "07925378-b9ed-4f1e-9ec0-27f3c7f7e6f2"],
                //410
                ["translation_id" => "82701443-f109-4dfa-a15c-3d7328c2aa4e", "translatable_type" => "App\Models\Description", "translatable_id" => "6890f560-cb5c-48b6-ba68-f3d8a9e33be7"],
                ["translation_id" => "d182004e-8d2a-4ad2-8181-9dd2e806b23d", "translatable_type" => "App\Models\Description", "translatable_id" => "6890f560-cb5c-48b6-ba68-f3d8a9e33be7"],
                ["translation_id" => "ad724f8a-e34f-4ad2-9af6-fabd5b1f75b5", "translatable_type" => "App\Models\Description", "translatable_id" => "6890f560-cb5c-48b6-ba68-f3d8a9e33be7"],
                //411
                ["translation_id" => "3cd536c5-6277-4df8-ae44-26ac140bc1dd", "translatable_type" => "App\Models\Description", "translatable_id" => "22f9ea5f-4ffd-4dcc-86c1-6e4398894487"],
                ["translation_id" => "c9d8a7ca-02c0-429b-bbe8-a74ae3752dc4", "translatable_type" => "App\Models\Description", "translatable_id" => "22f9ea5f-4ffd-4dcc-86c1-6e4398894487"],
                ["translation_id" => "9dce692b-c871-453e-afe4-1b936abc2cdb", "translatable_type" => "App\Models\Description", "translatable_id" => "22f9ea5f-4ffd-4dcc-86c1-6e4398894487"],
                //412
                ["translation_id" => "da0ac06f-01bd-4d88-8377-0e88c327c4cb", "translatable_type" => "App\Models\Description", "translatable_id" => "92536147-1a9d-4614-80d1-9383ace83b1c"],
                ["translation_id" => "e21d6b4f-c0f1-4d34-b817-c63b1ac36415", "translatable_type" => "App\Models\Description", "translatable_id" => "92536147-1a9d-4614-80d1-9383ace83b1c"],
                ["translation_id" => "8abcb2dd-a39f-428d-b182-7dc74649a224", "translatable_type" => "App\Models\Description", "translatable_id" => "92536147-1a9d-4614-80d1-9383ace83b1c"],
                //413
                ["translation_id" => "16875991-7aa6-4b84-bac2-9a43d5ce5545", "translatable_type" => "App\Models\Description", "translatable_id" => "346384fe-463b-44ed-8b99-6363c05ff8dc"],
                ["translation_id" => "f34f35ab-2aa3-4575-b3fb-19b32290d0e4", "translatable_type" => "App\Models\Description", "translatable_id" => "346384fe-463b-44ed-8b99-6363c05ff8dc"],
                ["translation_id" => "8ccbd2c8-3258-4083-9acd-851c5c624dc0", "translatable_type" => "App\Models\Description", "translatable_id" => "346384fe-463b-44ed-8b99-6363c05ff8dc"],
                //414
                ["translation_id" => "761b8da3-fc14-4c5f-a9eb-4a609ce6bdb0", "translatable_type" => "App\Models\Description", "translatable_id" => "8afb6989-6d9d-4dce-9970-f20e6559b450"],
                ["translation_id" => "ef6dba66-199d-4fa8-8b1f-6f5976a4da05", "translatable_type" => "App\Models\Description", "translatable_id" => "8afb6989-6d9d-4dce-9970-f20e6559b450"],
                ["translation_id" => "ed137086-972a-4cb7-a029-738d8656d46d", "translatable_type" => "App\Models\Description", "translatable_id" => "8afb6989-6d9d-4dce-9970-f20e6559b450"],
                //415
                ["translation_id" => "3a1ffa63-1101-4b60-80fd-c660daa94b37", "translatable_type" => "App\Models\Description", "translatable_id" => "a4ab5730-9ae7-46b4-b961-b915ee20a0c5"],
                ["translation_id" => "cbac9ba8-b4f9-40d5-9c41-f147300ed919", "translatable_type" => "App\Models\Description", "translatable_id" => "a4ab5730-9ae7-46b4-b961-b915ee20a0c5"],
                ["translation_id" => "9b1a563c-517b-453d-a4a0-bb1fb443ee5e", "translatable_type" => "App\Models\Description", "translatable_id" => "a4ab5730-9ae7-46b4-b961-b915ee20a0c5"],
                //416
                ["translation_id" => "d3b00dc4-ee87-4f63-b2f3-4ff6e4805738", "translatable_type" => "App\Models\Description", "translatable_id" => "1f0496ba-59d5-43fd-839d-a983e8f30d24"],
                ["translation_id" => "c319270f-cbe9-4bb1-93e5-2988aaadb497", "translatable_type" => "App\Models\Description", "translatable_id" => "1f0496ba-59d5-43fd-839d-a983e8f30d24"],
                ["translation_id" => "6ad11220-0d50-49b4-bb88-ea7e4986f7f4", "translatable_type" => "App\Models\Description", "translatable_id" => "1f0496ba-59d5-43fd-839d-a983e8f30d24"],
                //417
                ["translation_id" => "19c4b8bd-a63c-4a66-beef-e6d0e1235ad0", "translatable_type" => "App\Models\Description", "translatable_id" => "ca7dcfce-9047-4583-a81c-c30dd97142a3"],
                ["translation_id" => "1c81825f-2f95-49ba-a240-35c04024bdf9", "translatable_type" => "App\Models\Description", "translatable_id" => "ca7dcfce-9047-4583-a81c-c30dd97142a3"],
                ["translation_id" => "6c1efcb8-a7e2-48ab-a7dd-a54e34e044bd", "translatable_type" => "App\Models\Description", "translatable_id" => "ca7dcfce-9047-4583-a81c-c30dd97142a3"],
                //418
                ["translation_id" => "f3b7af1f-92c8-4946-8d1b-c461a0bfe6bf", "translatable_type" => "App\Models\Description", "translatable_id" => "b82ca0c4-f227-4cdd-a5ef-ec6ebbc9bd39"],
                ["translation_id" => "d02bbb70-84f6-4f51-b051-20005b2b3508", "translatable_type" => "App\Models\Description", "translatable_id" => "b82ca0c4-f227-4cdd-a5ef-ec6ebbc9bd39"],
                ["translation_id" => "114a843b-c128-44ad-833d-dcf810328390", "translatable_type" => "App\Models\Description", "translatable_id" => "b82ca0c4-f227-4cdd-a5ef-ec6ebbc9bd39"],
                //419
                ["translation_id" => "b8502131-e5fb-4420-891a-8fdfbb50ec49", "translatable_type" => "App\Models\Description", "translatable_id" => "6bb0e6c3-5ac2-4a65-94e2-213a85a5b4aa"],
                ["translation_id" => "a4fbda93-3bca-40c3-9a8b-06363ec3193a", "translatable_type" => "App\Models\Description", "translatable_id" => "6bb0e6c3-5ac2-4a65-94e2-213a85a5b4aa"],
                ["translation_id" => "f94c1cf4-fdfd-4332-85b2-bd6b09240ce7", "translatable_type" => "App\Models\Description", "translatable_id" => "6bb0e6c3-5ac2-4a65-94e2-213a85a5b4aa"],
                //420
                ["translation_id" => "8542bef1-31b8-4a38-9757-0e48a145f0bc", "translatable_type" => "App\Models\Description", "translatable_id" => "93e6247b-eb50-45ba-8d2f-2c29bcbd9708"],
                ["translation_id" => "9e79e93e-6482-4191-bfca-24fba37ae9eb", "translatable_type" => "App\Models\Description", "translatable_id" => "93e6247b-eb50-45ba-8d2f-2c29bcbd9708"],
                ["translation_id" => "924001b2-1bde-4462-9aef-e6edabcbed1f", "translatable_type" => "App\Models\Description", "translatable_id" => "93e6247b-eb50-45ba-8d2f-2c29bcbd9708"],
                //421
                ["translation_id" => "702de9cd-46b2-4ab9-a7ad-b436e8abcb02", "translatable_type" => "App\Models\Description", "translatable_id" => "fa833659-7ebf-4ac5-8c94-461194a2ff76"],
                ["translation_id" => "af7ec6d2-c719-4886-bf3b-8a573dfdce25", "translatable_type" => "App\Models\Description", "translatable_id" => "fa833659-7ebf-4ac5-8c94-461194a2ff76"],
                ["translation_id" => "30e0b288-2c05-4dbd-868e-862b01625315", "translatable_type" => "App\Models\Description", "translatable_id" => "fa833659-7ebf-4ac5-8c94-461194a2ff76"],
                //422
                ["translation_id" => "1a18c1d9-63a1-43ff-9c3b-4c886903dc13", "translatable_type" => "App\Models\Description", "translatable_id" => "ad5ea8f8-5c8d-47d4-8dc9-f860c5e7fb8d"],
                ["translation_id" => "1f39f56c-c906-4231-bc6a-1cd9349efc6f", "translatable_type" => "App\Models\Description", "translatable_id" => "ad5ea8f8-5c8d-47d4-8dc9-f860c5e7fb8d"],
                ["translation_id" => "13167da4-9028-466b-8c23-11ea816dfcb6", "translatable_type" => "App\Models\Description", "translatable_id" => "ad5ea8f8-5c8d-47d4-8dc9-f860c5e7fb8d"],
                //423
                ["translation_id" => "446d9c97-a463-4982-a9e4-1b2bbcfccb1e", "translatable_type" => "App\Models\Description", "translatable_id" => "c2062835-25da-4dfe-a689-b8e3bd1fb3b9"],
                ["translation_id" => "909b5b48-ad48-4d68-98c1-3f04ba915730", "translatable_type" => "App\Models\Description", "translatable_id" => "c2062835-25da-4dfe-a689-b8e3bd1fb3b9"],
                ["translation_id" => "dd12b02f-2fdc-475d-911e-5374cd94e79f", "translatable_type" => "App\Models\Description", "translatable_id" => "c2062835-25da-4dfe-a689-b8e3bd1fb3b9"],
                //424
                ["translation_id" => "54db27be-105d-48ba-abb4-b502fde8b4f8", "translatable_type" => "App\Models\Description", "translatable_id" => "dfe99bf5-87ca-4e7c-9f24-e10a8f3ff507"],
                ["translation_id" => "3d4a785b-4853-469d-9c3a-4dabf4963d00", "translatable_type" => "App\Models\Description", "translatable_id" => "dfe99bf5-87ca-4e7c-9f24-e10a8f3ff507"],
                ["translation_id" => "c3bbcbb5-7527-486a-836c-b0a09a790e09", "translatable_type" => "App\Models\Description", "translatable_id" => "dfe99bf5-87ca-4e7c-9f24-e10a8f3ff507"],
                //425
                ["translation_id" => "3aedda7c-8d28-4107-bb5a-72a6fc5e94a4", "translatable_type" => "App\Models\Description", "translatable_id" => "a9197469-33dc-4c1f-bed4-1bd157b5e71d"],
                ["translation_id" => "b5b5224b-a156-43be-ae3b-2613d053b36e", "translatable_type" => "App\Models\Description", "translatable_id" => "a9197469-33dc-4c1f-bed4-1bd157b5e71d"],
                ["translation_id" => "2efff32d-5796-4c05-84b0-ca7c3e2e0a94", "translatable_type" => "App\Models\Description", "translatable_id" => "a9197469-33dc-4c1f-bed4-1bd157b5e71d"],
                //426
                ["translation_id" => "5c9dfdfb-a936-4bc8-84cb-a94f284a6aa1", "translatable_type" => "App\Models\Description", "translatable_id" => "ae142e7b-8e89-483f-8ef4-74a0adb74e90"],
                ["translation_id" => "07a4b0a1-3426-49e8-9128-b0d47d446b6b", "translatable_type" => "App\Models\Description", "translatable_id" => "ae142e7b-8e89-483f-8ef4-74a0adb74e90"],
                ["translation_id" => "f89c6e2c-c2ef-48d8-94c6-34bede4083c1", "translatable_type" => "App\Models\Description", "translatable_id" => "ae142e7b-8e89-483f-8ef4-74a0adb74e90"],
                //427
                ["translation_id" => "0e6efdab-dc62-466b-92fd-7ba88c462c86", "translatable_type" => "App\Models\Description", "translatable_id" => "53b89d3f-b3af-4c48-9357-ac165c0b2d92"],
                ["translation_id" => "6e764b69-d526-4904-b35d-d6d3ffed99ca", "translatable_type" => "App\Models\Description", "translatable_id" => "53b89d3f-b3af-4c48-9357-ac165c0b2d92"],
                ["translation_id" => "8475495e-bc4f-4eb6-9b59-b1753f8c02b0", "translatable_type" => "App\Models\Description", "translatable_id" => "53b89d3f-b3af-4c48-9357-ac165c0b2d92"],
                //428
                ["translation_id" => "c119956f-a271-4c89-b43c-7cb00c04b152", "translatable_type" => "App\Models\Description", "translatable_id" => "933a8303-723e-4174-9bdd-5f161c1eede5"],
                ["translation_id" => "6b503948-c84a-4e4d-a692-f52190d3b069", "translatable_type" => "App\Models\Description", "translatable_id" => "933a8303-723e-4174-9bdd-5f161c1eede5"],
                ["translation_id" => "289ab7b9-5df3-4f35-b7de-89a313864287", "translatable_type" => "App\Models\Description", "translatable_id" => "933a8303-723e-4174-9bdd-5f161c1eede5"],
                //429
                ["translation_id" => "a5a149ad-2321-4851-9606-b9ac6b8ad6c4", "translatable_type" => "App\Models\Description", "translatable_id" => "59c84db2-ab43-49d7-a422-99131f2a09b5"],
                ["translation_id" => "70846889-035c-4d48-93be-84900d344dd8", "translatable_type" => "App\Models\Description", "translatable_id" => "59c84db2-ab43-49d7-a422-99131f2a09b5"],
                ["translation_id" => "b2c1d282-feba-437e-a8b9-4996923521eb", "translatable_type" => "App\Models\Description", "translatable_id" => "59c84db2-ab43-49d7-a422-99131f2a09b5"],
                //430
                ["translation_id" => "22ccb291-f49c-49a7-8dce-a1125feaa5c6", "translatable_type" => "App\Models\Description", "translatable_id" => "7722a3b2-5bb8-4d43-9dfe-766797528eb0"],
                ["translation_id" => "30609ee1-f302-4895-b95a-8a29e9acb324", "translatable_type" => "App\Models\Description", "translatable_id" => "7722a3b2-5bb8-4d43-9dfe-766797528eb0"],
                ["translation_id" => "101becb4-cb66-4dc8-af3a-65a627c7dc5f", "translatable_type" => "App\Models\Description", "translatable_id" => "7722a3b2-5bb8-4d43-9dfe-766797528eb0"],
                //431
                ["translation_id" => "d6ab62e9-c2c8-4f9c-a2f9-f9321db6151a", "translatable_type" => "App\Models\Description", "translatable_id" => "e2d50b22-b2e9-4967-bf06-9698731f03ed"],
                ["translation_id" => "7b6f4034-42c8-4059-b5d5-f9e40ba227f4", "translatable_type" => "App\Models\Description", "translatable_id" => "e2d50b22-b2e9-4967-bf06-9698731f03ed"],
                ["translation_id" => "87c8500c-f391-41ce-8590-a538cc889591", "translatable_type" => "App\Models\Description", "translatable_id" => "e2d50b22-b2e9-4967-bf06-9698731f03ed"],
                //432
                ["translation_id" => "3e9d7462-c7f8-40c7-8996-166557c26bc2", "translatable_type" => "App\Models\Description", "translatable_id" => "8c7e9055-0c06-4823-aea3-3fe2964c1615"],
                ["translation_id" => "e07eef4b-4c0c-44cb-8582-5f6376aab56f", "translatable_type" => "App\Models\Description", "translatable_id" => "8c7e9055-0c06-4823-aea3-3fe2964c1615"],
                ["translation_id" => "6e3a2c8d-33de-4e39-8882-8e1f02b1a26e", "translatable_type" => "App\Models\Description", "translatable_id" => "8c7e9055-0c06-4823-aea3-3fe2964c1615"],
                //433
                ["translation_id" => "d4566ee9-658a-42ed-8198-7f97ecd120c0", "translatable_type" => "App\Models\Description", "translatable_id" => "6a5657af-abac-430d-86bb-5e3a10c3b951"],
                ["translation_id" => "2833e07d-17c4-4217-abd5-4b6a94148ed1", "translatable_type" => "App\Models\Description", "translatable_id" => "6a5657af-abac-430d-86bb-5e3a10c3b951"],
                ["translation_id" => "51f00b3b-5246-4f8b-a987-51767abcdb44", "translatable_type" => "App\Models\Description", "translatable_id" => "6a5657af-abac-430d-86bb-5e3a10c3b951"],
                //434
                ["translation_id" => "904a40ba-647b-4f64-8329-c681c0dd371d", "translatable_type" => "App\Models\Description", "translatable_id" => "d737cc3c-bc70-4307-9dbc-4601d538df38"],
                ["translation_id" => "e82742c5-e7aa-4ce7-8add-a6aca306e8d4", "translatable_type" => "App\Models\Description", "translatable_id" => "d737cc3c-bc70-4307-9dbc-4601d538df38"],
                ["translation_id" => "092fd7d9-339d-43af-b777-8dc6a0ba9ea3", "translatable_type" => "App\Models\Description", "translatable_id" => "d737cc3c-bc70-4307-9dbc-4601d538df38"],
                //435
                ["translation_id" => "e6b9c93f-a647-47b0-a8ed-a002e803ea0f", "translatable_type" => "App\Models\Description", "translatable_id" => "7634e3a8-2839-49b1-8760-20c089a6902a"],
                ["translation_id" => "4bb0024e-f4e7-4806-8b26-f12c88f21d96", "translatable_type" => "App\Models\Description", "translatable_id" => "7634e3a8-2839-49b1-8760-20c089a6902a"],
                ["translation_id" => "1a6d2f18-c799-4361-948d-edda0074120d", "translatable_type" => "App\Models\Description", "translatable_id" => "7634e3a8-2839-49b1-8760-20c089a6902a"],
                //436
                ["translation_id" => "0ef68696-f929-4736-b85b-8c241ae51f06", "translatable_type" => "App\Models\Description", "translatable_id" => "286981b6-d674-489d-bca8-3c497e48225a"],
                ["translation_id" => "cbe89775-fa24-47e5-b5c6-253e71466f6d", "translatable_type" => "App\Models\Description", "translatable_id" => "286981b6-d674-489d-bca8-3c497e48225a"],
                ["translation_id" => "7e87c26b-6a6f-43e9-906e-c6c73f9d4678", "translatable_type" => "App\Models\Description", "translatable_id" => "286981b6-d674-489d-bca8-3c497e48225a"],
                //437
                ["translation_id" => "4f12a279-bc79-40d5-a64a-c6be3f5c653a", "translatable_type" => "App\Models\Description", "translatable_id" => "c66e19c2-5235-4bf5-abb9-6fce2eba5205"],
                ["translation_id" => "6225c832-e361-4595-955a-6ce8aa407848", "translatable_type" => "App\Models\Description", "translatable_id" => "c66e19c2-5235-4bf5-abb9-6fce2eba5205"],
                ["translation_id" => "d200e304-e6a6-4456-b02b-267c68baf47f", "translatable_type" => "App\Models\Description", "translatable_id" => "c66e19c2-5235-4bf5-abb9-6fce2eba5205"],
                //438
                ["translation_id" => "e3ca0417-1474-4ad3-9ae6-15c769b11fcb", "translatable_type" => "App\Models\Description", "translatable_id" => "7564e4fa-63ea-403f-a922-c5ce2ebfb557"],
                ["translation_id" => "3f0f3cc3-d0f4-43c2-9010-b951ba52717d", "translatable_type" => "App\Models\Description", "translatable_id" => "7564e4fa-63ea-403f-a922-c5ce2ebfb557"],
                ["translation_id" => "223e80c2-9768-41b1-806c-ed823ce2d5c4", "translatable_type" => "App\Models\Description", "translatable_id" => "7564e4fa-63ea-403f-a922-c5ce2ebfb557"],
                //439
                ["translation_id" => "4cbc2754-e4b2-46a4-9211-170392730aeb", "translatable_type" => "App\Models\Description", "translatable_id" => "019b706a-68cd-4ff5-86fa-f28c2ee9036a"],
                ["translation_id" => "0ee6112f-64ba-42e7-ad4c-33c93b4ca3ff", "translatable_type" => "App\Models\Description", "translatable_id" => "019b706a-68cd-4ff5-86fa-f28c2ee9036a"],
                ["translation_id" => "0ef0fd10-df34-4061-81fe-d47ce8b5b565", "translatable_type" => "App\Models\Description", "translatable_id" => "019b706a-68cd-4ff5-86fa-f28c2ee9036a"],
                //440
                ["translation_id" => "536f8533-24da-4c15-acd7-74980881816e", "translatable_type" => "App\Models\Description", "translatable_id" => "67add967-9784-4aca-8805-a858df34ab09"],
                ["translation_id" => "2f695f60-889e-454f-b58a-acbc6ed045e8", "translatable_type" => "App\Models\Description", "translatable_id" => "67add967-9784-4aca-8805-a858df34ab09"],
                ["translation_id" => "20e7d2d8-847a-4e6d-a45d-f1cf2e333606", "translatable_type" => "App\Models\Description", "translatable_id" => "67add967-9784-4aca-8805-a858df34ab09"],
                //441
                ["translation_id" => "9f51e631-73fe-4221-b1e5-010c059c5360", "translatable_type" => "App\Models\Description", "translatable_id" => "7bd13360-ab06-4255-bec6-24eb045f2951"],
                ["translation_id" => "e4851f6a-8265-48a2-b1d3-f096a687d862", "translatable_type" => "App\Models\Description", "translatable_id" => "7bd13360-ab06-4255-bec6-24eb045f2951"],
                ["translation_id" => "8eeb57ca-2002-4a3a-b88c-ffd1cbef18c9", "translatable_type" => "App\Models\Description", "translatable_id" => "7bd13360-ab06-4255-bec6-24eb045f2951"],
                //442
                ["translation_id" => "f944e28e-bd0c-436a-9d02-b104d8dd2d1f", "translatable_type" => "App\Models\Description", "translatable_id" => "1cff0f15-8c51-44cc-ab6b-a0c9f9373768"],
                ["translation_id" => "713abd31-3acd-4c6b-9c64-4c4eff07b470", "translatable_type" => "App\Models\Description", "translatable_id" => "1cff0f15-8c51-44cc-ab6b-a0c9f9373768"],
                ["translation_id" => "e81c2b3f-36dc-4568-ae0d-a01f0117ae63", "translatable_type" => "App\Models\Description", "translatable_id" => "1cff0f15-8c51-44cc-ab6b-a0c9f9373768"],
                //443
                ["translation_id" => "5b609efd-c7c8-444d-89fb-c3756d591028", "translatable_type" => "App\Models\Description", "translatable_id" => "dd78eec1-ca60-4c0a-ba86-5cfcba13821a"],
                ["translation_id" => "49d6745a-be73-43cd-a2f7-2be3f47cf4b4", "translatable_type" => "App\Models\Description", "translatable_id" => "dd78eec1-ca60-4c0a-ba86-5cfcba13821a"],
                ["translation_id" => "0a56a5ec-eeb0-4557-a23b-13a6173e1bf2", "translatable_type" => "App\Models\Description", "translatable_id" => "dd78eec1-ca60-4c0a-ba86-5cfcba13821a"],
                //444
                ["translation_id" => "2d25d9e0-57d7-4863-9313-1c2bff2b3f82", "translatable_type" => "App\Models\Description", "translatable_id" => "9f4623d6-35a7-4bc9-80df-0496d754ee83"],
                ["translation_id" => "fbec30f5-3307-4a00-80e9-aa0d92f085cd", "translatable_type" => "App\Models\Description", "translatable_id" => "9f4623d6-35a7-4bc9-80df-0496d754ee83"],
                ["translation_id" => "38871b7c-f49d-457c-8823-ae1d51aec7b4", "translatable_type" => "App\Models\Description", "translatable_id" => "9f4623d6-35a7-4bc9-80df-0496d754ee83"],
                //445
                ["translation_id" => "c9be7372-0531-41eb-95aa-379ef577f4cb", "translatable_type" => "App\Models\Description", "translatable_id" => "ff02a5e4-5baf-4234-897f-5f45e1b2d197"],
                ["translation_id" => "0881525b-f055-4291-bded-4697c1dc981f", "translatable_type" => "App\Models\Description", "translatable_id" => "ff02a5e4-5baf-4234-897f-5f45e1b2d197"],
                ["translation_id" => "d98b9f5a-53bf-4a35-98c6-fa390bc1fe0a", "translatable_type" => "App\Models\Description", "translatable_id" => "ff02a5e4-5baf-4234-897f-5f45e1b2d197"],
                //446
                ["translation_id" => "9ac8a2bb-c0ee-49bb-bddf-01d779b2c531", "translatable_type" => "App\Models\Description", "translatable_id" => "fcdf8a4d-43e0-4c9d-9c08-f4af5c8e5e77"],
                ["translation_id" => "2cae993a-2331-4a23-a21f-b6fefeff1233", "translatable_type" => "App\Models\Description", "translatable_id" => "fcdf8a4d-43e0-4c9d-9c08-f4af5c8e5e77"],
                ["translation_id" => "a0dc9480-0e97-414d-872b-302d30c1fbcf", "translatable_type" => "App\Models\Description", "translatable_id" => "fcdf8a4d-43e0-4c9d-9c08-f4af5c8e5e77"],
                //447
                ["translation_id" => "92dc5ffa-1f05-412b-bcd4-d6c276244fd8", "translatable_type" => "App\Models\Description", "translatable_id" => "8406602a-f2fa-4918-9718-a2f6a16dd776"],
                ["translation_id" => "bcec8c44-efe4-4874-a606-f74069023cdb", "translatable_type" => "App\Models\Description", "translatable_id" => "8406602a-f2fa-4918-9718-a2f6a16dd776"],
                ["translation_id" => "27891279-dd53-45e0-b009-be67ef47fd70", "translatable_type" => "App\Models\Description", "translatable_id" => "8406602a-f2fa-4918-9718-a2f6a16dd776"],
                //448
                ["translation_id" => "13e8c85b-ff02-48d5-b787-29df08e2170c", "translatable_type" => "App\Models\Description", "translatable_id" => "b9f4bd55-9b6c-4ac5-941a-d15becf13095"],
                ["translation_id" => "cf0e495f-c0e5-4272-af6c-bfc221f3f4fa", "translatable_type" => "App\Models\Description", "translatable_id" => "b9f4bd55-9b6c-4ac5-941a-d15becf13095"],
                ["translation_id" => "568afa1e-4145-48c4-9fcb-4e65ca104fe9", "translatable_type" => "App\Models\Description", "translatable_id" => "b9f4bd55-9b6c-4ac5-941a-d15becf13095"],
                //449
                ["translation_id" => "4a8c19ed-6430-412c-b707-ffc3a74e48b3", "translatable_type" => "App\Models\Description", "translatable_id" => "750aca90-1287-4794-a166-8fecfc519c5a"],
                ["translation_id" => "c8f30ab9-c80e-46fa-abfa-4c6b25f09fa3", "translatable_type" => "App\Models\Description", "translatable_id" => "750aca90-1287-4794-a166-8fecfc519c5a"],
                ["translation_id" => "92895b1e-b34b-4ea0-9996-24162ddb274f", "translatable_type" => "App\Models\Description", "translatable_id" => "750aca90-1287-4794-a166-8fecfc519c5a"],
                //450
                ["translation_id" => "4cfa6047-03e8-441c-9554-64e401d031f8", "translatable_type" => "App\Models\Description", "translatable_id" => "2cbbd86a-50ba-4775-864c-a644e334f402"],
                ["translation_id" => "a79df666-547c-435e-b866-5234471ad023", "translatable_type" => "App\Models\Description", "translatable_id" => "2cbbd86a-50ba-4775-864c-a644e334f402"],
                ["translation_id" => "99f3f761-b9ac-4547-ba96-a946f4c3103e", "translatable_type" => "App\Models\Description", "translatable_id" => "2cbbd86a-50ba-4775-864c-a644e334f402"],
                //451
                ["translation_id" => "3441f34a-168b-4a0d-9978-e7720039371e", "translatable_type" => "App\Models\Description", "translatable_id" => "69848ab6-9433-408d-921c-4901bad3e12b"],
                ["translation_id" => "b3229307-861a-4c67-ade2-ed35efe2e3d9", "translatable_type" => "App\Models\Description", "translatable_id" => "69848ab6-9433-408d-921c-4901bad3e12b"],
                ["translation_id" => "95be2ce3-a35f-4bdd-8cb6-62ec72167874", "translatable_type" => "App\Models\Description", "translatable_id" => "69848ab6-9433-408d-921c-4901bad3e12b"],
                //452
                ["translation_id" => "4e772a5a-0cbc-43ec-9a92-e4569001e948", "translatable_type" => "App\Models\Description", "translatable_id" => "ce945b15-ced8-46e7-8d42-bd6f83ec0e55"],
                ["translation_id" => "5ce2142b-b0ce-4da8-badb-272817fae4a6", "translatable_type" => "App\Models\Description", "translatable_id" => "ce945b15-ced8-46e7-8d42-bd6f83ec0e55"],
                ["translation_id" => "015c396e-4a72-472d-8895-0c3f0c66329c", "translatable_type" => "App\Models\Description", "translatable_id" => "ce945b15-ced8-46e7-8d42-bd6f83ec0e55"],
                //453
                ["translation_id" => "e8fa0a39-cba6-4a2d-8e5b-55650c7390c2", "translatable_type" => "App\Models\Description", "translatable_id" => "64fdf64c-2eee-4e4e-8c97-eacaaa84a70b"],
                ["translation_id" => "294f3257-47f8-4c0e-9ca5-fd11734f5d36", "translatable_type" => "App\Models\Description", "translatable_id" => "64fdf64c-2eee-4e4e-8c97-eacaaa84a70b"],
                ["translation_id" => "30e01c54-9eb1-4e29-ad18-daa6e83aa813", "translatable_type" => "App\Models\Description", "translatable_id" => "64fdf64c-2eee-4e4e-8c97-eacaaa84a70b"],
                //454
                ["translation_id" => "edbb72fa-2cb3-4d3d-bdf7-ad16f5460e0f", "translatable_type" => "App\Models\Description", "translatable_id" => "d2109b90-5c24-4820-b88c-b9b1c150448b"],
                ["translation_id" => "ad5d2c2e-ea9a-4426-86c5-24fb2e027625", "translatable_type" => "App\Models\Description", "translatable_id" => "d2109b90-5c24-4820-b88c-b9b1c150448b"],
                ["translation_id" => "11686cc6-877b-468a-b776-f6b973b7d6ab", "translatable_type" => "App\Models\Description", "translatable_id" => "d2109b90-5c24-4820-b88c-b9b1c150448b"],
                //455
                ["translation_id" => "ea05ab40-feea-467a-9afa-99abdd40456b", "translatable_type" => "App\Models\Description", "translatable_id" => "e1ddec39-2e66-4fef-a46c-224d7e1151ff"],
                ["translation_id" => "b311fc1f-fcf1-483e-96f2-09ed73dc7773", "translatable_type" => "App\Models\Description", "translatable_id" => "e1ddec39-2e66-4fef-a46c-224d7e1151ff"],
                ["translation_id" => "ec2c7c4f-5fb7-434d-93a0-4f615adb415e", "translatable_type" => "App\Models\Description", "translatable_id" => "e1ddec39-2e66-4fef-a46c-224d7e1151ff"],
                //456
                ["translation_id" => "b153ba16-71e6-431b-820e-511a1d3b6bdd", "translatable_type" => "App\Models\Description", "translatable_id" => "c711f2f5-e895-47cb-9334-1ddd296059e7"],
                ["translation_id" => "29c27e0e-7ec5-41f9-9b2e-0ef555225896", "translatable_type" => "App\Models\Description", "translatable_id" => "c711f2f5-e895-47cb-9334-1ddd296059e7"],
                ["translation_id" => "a6f5d711-ecd7-41ae-bf6f-a7b359450cd9", "translatable_type" => "App\Models\Description", "translatable_id" => "c711f2f5-e895-47cb-9334-1ddd296059e7"],
                //457
                ["translation_id" => "a30ce61b-791b-49b4-9984-f151771bb04e", "translatable_type" => "App\Models\Description", "translatable_id" => "990fc7c3-5eb8-4ca0-85bd-6cc5aff25684"],
                ["translation_id" => "d9dcfff0-8d19-4ccc-9c97-576287910fc4", "translatable_type" => "App\Models\Description", "translatable_id" => "990fc7c3-5eb8-4ca0-85bd-6cc5aff25684"],
                ["translation_id" => "80f0a913-2a2c-4091-be40-5bee8d892c9e", "translatable_type" => "App\Models\Description", "translatable_id" => "990fc7c3-5eb8-4ca0-85bd-6cc5aff25684"],
                //458
                ["translation_id" => "337b152d-70af-4757-8cc9-d667452247e7", "translatable_type" => "App\Models\Description", "translatable_id" => "8a49a8e5-c981-4ed0-9cf6-a22692974b36"],
                ["translation_id" => "078532bf-a58d-4acb-92e9-0ceaf06925ad", "translatable_type" => "App\Models\Description", "translatable_id" => "8a49a8e5-c981-4ed0-9cf6-a22692974b36"],
                ["translation_id" => "64083176-8a65-4a68-8ff3-b14e46137921", "translatable_type" => "App\Models\Description", "translatable_id" => "8a49a8e5-c981-4ed0-9cf6-a22692974b36"],
                //459
                ["translation_id" => "9365bc24-1306-4cff-9130-6422fdd9c620", "translatable_type" => "App\Models\Description", "translatable_id" => "4e010b11-7e92-4c21-9f96-3c982aba5a29"],
                ["translation_id" => "860b61e6-a874-4677-a98a-d0ee392d8f0d", "translatable_type" => "App\Models\Description", "translatable_id" => "4e010b11-7e92-4c21-9f96-3c982aba5a29"],
                ["translation_id" => "bbdb6c9d-4631-4901-a524-337e9048e514", "translatable_type" => "App\Models\Description", "translatable_id" => "4e010b11-7e92-4c21-9f96-3c982aba5a29"],
                //460
                ["translation_id" => "06bc507a-e9cb-4fc6-9865-d8475f097162", "translatable_type" => "App\Models\Description", "translatable_id" => "6ca8e8a2-d673-4dea-9447-fd726535d07c"],
                ["translation_id" => "317c7ece-1efb-424b-bbbe-7968c53346f8", "translatable_type" => "App\Models\Description", "translatable_id" => "6ca8e8a2-d673-4dea-9447-fd726535d07c"],
                ["translation_id" => "dab2961c-a76a-4b1c-ba53-43c07bd2845b", "translatable_type" => "App\Models\Description", "translatable_id" => "6ca8e8a2-d673-4dea-9447-fd726535d07c"],
                //461
                ["translation_id" => "7b5cc048-8bbc-4561-a9c3-493f1cddcc28", "translatable_type" => "App\Models\Description", "translatable_id" => "9c9be577-8cd4-4bb7-a4e3-30fea3c3d141"],
                ["translation_id" => "52e54af9-f521-4f56-a038-d7cc5175d92b", "translatable_type" => "App\Models\Description", "translatable_id" => "9c9be577-8cd4-4bb7-a4e3-30fea3c3d141"],
                ["translation_id" => "b40b8a62-82ad-4a73-b215-1f8c9e39f1dc", "translatable_type" => "App\Models\Description", "translatable_id" => "9c9be577-8cd4-4bb7-a4e3-30fea3c3d141"],
                //462
                ["translation_id" => "efe947bb-4b2c-47ce-9769-b23781673f0e", "translatable_type" => "App\Models\Description", "translatable_id" => "9afe7285-29f3-45f7-bfd1-b24d1f04d80a"],
                ["translation_id" => "89220f54-88f7-465f-a7df-c6c4ac348d4f", "translatable_type" => "App\Models\Description", "translatable_id" => "9afe7285-29f3-45f7-bfd1-b24d1f04d80a"],
                ["translation_id" => "aee8b03c-4c52-4bd7-bfb6-bbcd63d87a82", "translatable_type" => "App\Models\Description", "translatable_id" => "9afe7285-29f3-45f7-bfd1-b24d1f04d80a"],
                //463
                ["translation_id" => "c57f421b-2131-46fe-8eee-fad2d2bff994", "translatable_type" => "App\Models\Description", "translatable_id" => "e4caf813-ce2b-4e7d-9bf2-0ed4efb5cfc6"],
                ["translation_id" => "0bfd7025-35e4-4348-8ef6-d7e5456900d8", "translatable_type" => "App\Models\Description", "translatable_id" => "e4caf813-ce2b-4e7d-9bf2-0ed4efb5cfc6"],
                ["translation_id" => "e571822d-c89d-4deb-a329-e4f7d84a03a2", "translatable_type" => "App\Models\Description", "translatable_id" => "e4caf813-ce2b-4e7d-9bf2-0ed4efb5cfc6"],
                //464
                ["translation_id" => "76e0d621-8dab-40e2-8456-55d95932ecb7", "translatable_type" => "App\Models\Description", "translatable_id" => "942d6de7-30cd-42bf-8801-3e3a3813cb27"],
                ["translation_id" => "14193077-3697-4012-ac94-73ba3d497b07", "translatable_type" => "App\Models\Description", "translatable_id" => "942d6de7-30cd-42bf-8801-3e3a3813cb27"],
                ["translation_id" => "c9698c86-373e-4d22-a6aa-bcf0eb6a05bd", "translatable_type" => "App\Models\Description", "translatable_id" => "942d6de7-30cd-42bf-8801-3e3a3813cb27"],
                //465
                ["translation_id" => "8eafca31-874e-421b-ab4a-86d4be3519c4", "translatable_type" => "App\Models\Description", "translatable_id" => "27bea883-2cb8-4d5a-bfe0-364f72419509"],
                ["translation_id" => "7051b4c6-011d-4bc8-8712-b0bd55c3d69c", "translatable_type" => "App\Models\Description", "translatable_id" => "27bea883-2cb8-4d5a-bfe0-364f72419509"],
                ["translation_id" => "c7256d50-e02d-42fe-b84f-682d303f4bb2", "translatable_type" => "App\Models\Description", "translatable_id" => "27bea883-2cb8-4d5a-bfe0-364f72419509"],
            //466
            ["translation_id" => "655d09af-4f8a-408d-8b84-0de0cad3f2b1", "translatable_type" => "App\Models\Description", "translatable_id" => "3134ab33-d8b3-4ff4-b02e-ce37a5ce2b28"],
            ["translation_id" => "2dc0665d-a81d-4d1c-abdf-42e9fc2df6f6", "translatable_type" => "App\Models\Description", "translatable_id" => "3134ab33-d8b3-4ff4-b02e-ce37a5ce2b28"],
            ["translation_id" => "69383797-835a-4d41-8323-3610ba2c8418", "translatable_type" => "App\Models\Description", "translatable_id" => "3134ab33-d8b3-4ff4-b02e-ce37a5ce2b28"],
            //467
            ["translation_id" => "20846813-d389-4992-bcc1-5fe692b53297", "translatable_type" => "App\Models\Description", "translatable_id" => "563645f1-cac0-47f6-a1d8-414e5a442b03"],
            ["translation_id" => "c5408602-9884-450c-8241-6330de0db173", "translatable_type" => "App\Models\Description", "translatable_id" => "563645f1-cac0-47f6-a1d8-414e5a442b03"],
            ["translation_id" => "eb862a7e-995e-4164-9bf5-d6637ca6f8ef", "translatable_type" => "App\Models\Description", "translatable_id" => "563645f1-cac0-47f6-a1d8-414e5a442b03"],
            //468
            ["translation_id" => "9efa37fd-bb38-445a-9588-05af6f235147", "translatable_type" => "App\Models\Description", "translatable_id" => "625e0928-5cfa-40f6-a16d-c19f8ad369b8"],
            ["translation_id" => "7ad02d4b-7d69-4521-ac08-78313a9ad055", "translatable_type" => "App\Models\Description", "translatable_id" => "625e0928-5cfa-40f6-a16d-c19f8ad369b8"],
            ["translation_id" => "65f6c6f1-00c7-4494-8b31-07778ee9e68c", "translatable_type" => "App\Models\Description", "translatable_id" => "625e0928-5cfa-40f6-a16d-c19f8ad369b8"],
            //469
            ["translation_id" => "79295735-4111-4d0f-b0ba-34f6ac7c29b2", "translatable_type" => "App\Models\Description", "translatable_id" => "caa1dd80-aaa4-4f07-a159-a8ce9034a75d"],
            ["translation_id" => "4532f9d3-3d6a-4224-8274-175198e8cc35", "translatable_type" => "App\Models\Description", "translatable_id" => "caa1dd80-aaa4-4f07-a159-a8ce9034a75d"],
            ["translation_id" => "7f1bbfd3-14fd-491b-a99f-4edf8e7523cd", "translatable_type" => "App\Models\Description", "translatable_id" => "caa1dd80-aaa4-4f07-a159-a8ce9034a75d"],
            //470
            ["translation_id" => "76ac2640-ba26-4c39-ab4c-9ec8c45f02e8", "translatable_type" => "App\Models\Description", "translatable_id" => "da19dbe9-e865-4641-9973-16d78e488a11"],
            ["translation_id" => "5f9c91d7-46a2-4f7c-8f52-72e42fbed352", "translatable_type" => "App\Models\Description", "translatable_id" => "da19dbe9-e865-4641-9973-16d78e488a11"],
            ["translation_id" => "6b86434c-54c3-4fdc-89fa-23766581fa73", "translatable_type" => "App\Models\Description", "translatable_id" => "da19dbe9-e865-4641-9973-16d78e488a11"],
            //471
            ["translation_id" => "80a701db-f8f3-416c-917c-76c97e2a47e1", "translatable_type" => "App\Models\Description", "translatable_id" => "c94cf473-2028-4886-9449-b04c3447e17d"],
            ["translation_id" => "e26b37fd-9a33-46de-a3b8-9948bdf0f46f", "translatable_type" => "App\Models\Description", "translatable_id" => "c94cf473-2028-4886-9449-b04c3447e17d"],
            ["translation_id" => "37b2d478-383d-4e2a-b17b-7d76e9d19256", "translatable_type" => "App\Models\Description", "translatable_id" => "c94cf473-2028-4886-9449-b04c3447e17d"],
            //472
            ["translation_id" => "4f315605-bf4c-4913-b421-83f3f039206b", "translatable_type" => "App\Models\Description", "translatable_id" => "9547f3e5-f507-4149-a528-0319489dc9fd"],
            ["translation_id" => "5296a8c1-969c-4dea-ba11-a13337122953", "translatable_type" => "App\Models\Description", "translatable_id" => "9547f3e5-f507-4149-a528-0319489dc9fd"],
            ["translation_id" => "4618ed1e-1820-419a-8642-efae8825dee6", "translatable_type" => "App\Models\Description", "translatable_id" => "9547f3e5-f507-4149-a528-0319489dc9fd"],
            //473
            ["translation_id" => "5e4408b3-7dbf-453f-a7a5-4ee9a0475087", "translatable_type" => "App\Models\Description", "translatable_id" => "36dbd585-f294-4f92-bdba-eff85c08e089"],
            ["translation_id" => "5d65c0b5-c5fe-452b-91e5-328f63372d8c", "translatable_type" => "App\Models\Description", "translatable_id" => "36dbd585-f294-4f92-bdba-eff85c08e089"],
            ["translation_id" => "5e80b364-56b1-4886-944a-a9dc0b907e27", "translatable_type" => "App\Models\Description", "translatable_id" => "36dbd585-f294-4f92-bdba-eff85c08e089"],
            //474
            ["translation_id" => "a04be468-0405-4447-a3ad-0c77a16d3266", "translatable_type" => "App\Models\Description", "translatable_id" => "291ecb67-9927-4868-ba1d-16bbfdb38579"],
            ["translation_id" => "a715688f-d54f-48b0-b338-7c0120fa9680", "translatable_type" => "App\Models\Description", "translatable_id" => "291ecb67-9927-4868-ba1d-16bbfdb38579"],
            ["translation_id" => "f5866dfd-22d3-4cb3-939b-180f2fb74ce6", "translatable_type" => "App\Models\Description", "translatable_id" => "291ecb67-9927-4868-ba1d-16bbfdb38579"],
            //475
            ["translation_id" => "ecac5bf7-f591-4b8a-b58b-1c71a398ffb6", "translatable_type" => "App\Models\Description", "translatable_id" => "ae45793b-59a4-41fb-9d32-16b7880f8066"],
            ["translation_id" => "85b51cec-a204-41a5-8076-ca5cf113c50a", "translatable_type" => "App\Models\Description", "translatable_id" => "ae45793b-59a4-41fb-9d32-16b7880f8066"],
            ["translation_id" => "7c94ddcd-ccb7-4f51-a68b-36825ce5f314", "translatable_type" => "App\Models\Description", "translatable_id" => "ae45793b-59a4-41fb-9d32-16b7880f8066"],
            //476
            ["translation_id" => "b403bc7c-b3c2-429e-a58e-f2e7fc281887", "translatable_type" => "App\Models\Description", "translatable_id" => "fd9b58c9-6bd6-4562-900d-25c9e7644aa5"],
            ["translation_id" => "fe79f69b-03c4-4d48-9d6a-b056eef3c6c4", "translatable_type" => "App\Models\Description", "translatable_id" => "fd9b58c9-6bd6-4562-900d-25c9e7644aa5"],
            ["translation_id" => "7c0195b0-9caf-4fe9-97dc-ffcb3443374b", "translatable_type" => "App\Models\Description", "translatable_id" => "fd9b58c9-6bd6-4562-900d-25c9e7644aa5"],
            //477
            ["translation_id" => "b92bb969-5abe-47a2-b81b-b37f36c667ca", "translatable_type" => "App\Models\Description", "translatable_id" => "1c4915dd-7839-457a-8596-6d2f6dacb45d"],
            ["translation_id" => "0da7c870-ed35-4b7e-a0e4-65707d42c204", "translatable_type" => "App\Models\Description", "translatable_id" => "1c4915dd-7839-457a-8596-6d2f6dacb45d"],
            ["translation_id" => "d9d8f115-36e5-4019-a5a5-b68d3e6931eb", "translatable_type" => "App\Models\Description", "translatable_id" => "1c4915dd-7839-457a-8596-6d2f6dacb45d"],
            //478
            ["translation_id" => "0d04dc3c-4c55-4ad4-b601-fc74fbdccc84", "translatable_type" => "App\Models\Description", "translatable_id" => "ef7b9c0a-b954-43a1-9a3f-b230af1b82e5"],
            ["translation_id" => "88d27159-5f16-4888-9dac-24c7c2e44c53", "translatable_type" => "App\Models\Description", "translatable_id" => "ef7b9c0a-b954-43a1-9a3f-b230af1b82e5"],
            ["translation_id" => "b0dfdfe3-a236-40f6-a8b3-2fb14358c2d9", "translatable_type" => "App\Models\Description", "translatable_id" => "ef7b9c0a-b954-43a1-9a3f-b230af1b82e5"],
            //479
            ["translation_id" => "47a13419-1bf1-4753-8e56-2ab198537b36", "translatable_type" => "App\Models\Description", "translatable_id" => "2efd17ae-6c1d-4e8d-94fa-a9aa5cdc0865"],
            ["translation_id" => "7c245cdb-d277-419d-81fd-2f62a654fb8a", "translatable_type" => "App\Models\Description", "translatable_id" => "2efd17ae-6c1d-4e8d-94fa-a9aa5cdc0865"],
            ["translation_id" => "d73f3a99-a8a6-46e0-8b6e-37d29fd052b1", "translatable_type" => "App\Models\Description", "translatable_id" => "2efd17ae-6c1d-4e8d-94fa-a9aa5cdc0865"],
            //480
            ["translation_id" => "3b452baf-97cb-4922-b559-85a7304d7c49", "translatable_type" => "App\Models\Description", "translatable_id" => "d6d355ef-478a-4aa9-b793-f696972bf56d"],
            ["translation_id" => "ebda74cd-a0e3-44bd-a7e7-421873e85c3d", "translatable_type" => "App\Models\Description", "translatable_id" => "d6d355ef-478a-4aa9-b793-f696972bf56d"],
            ["translation_id" => "875d58f6-5fed-483a-afb2-3b6456ed6aee", "translatable_type" => "App\Models\Description", "translatable_id" => "d6d355ef-478a-4aa9-b793-f696972bf56d"],
            //481
            ["translation_id" => "0fe247e0-6f88-4d0a-9ab9-ed48f9bf06be", "translatable_type" => "App\Models\Description", "translatable_id" => "7774c5cf-6cb9-41f3-a129-eb6c5f208b68"],
            ["translation_id" => "b3007a3f-0235-4e6f-9215-cc700a4c8e14", "translatable_type" => "App\Models\Description", "translatable_id" => "7774c5cf-6cb9-41f3-a129-eb6c5f208b68"],
            ["translation_id" => "ddf92201-1335-45b9-9886-92d59135559a", "translatable_type" => "App\Models\Description", "translatable_id" => "7774c5cf-6cb9-41f3-a129-eb6c5f208b68"],
            //482
            ["translation_id" => "87d1528e-0c4e-4c4f-b7b6-a0a3a2c773fb", "translatable_type" => "App\Models\Description", "translatable_id" => "e3d40b0f-c326-443f-aaf3-59086724cc46"],
            ["translation_id" => "59d53f06-2fcc-4822-84b6-e689f06f9484", "translatable_type" => "App\Models\Description", "translatable_id" => "e3d40b0f-c326-443f-aaf3-59086724cc46"],
            ["translation_id" => "4926df51-c90e-4dd7-9b9f-80e865b55e56", "translatable_type" => "App\Models\Description", "translatable_id" => "e3d40b0f-c326-443f-aaf3-59086724cc46"],
            //483
            ["translation_id" => "bb0f5906-6775-4b74-b087-8a48fb2fb586", "translatable_type" => "App\Models\Description", "translatable_id" => "e61c269b-3e03-4068-a803-3fc3d56b43b5"],
            ["translation_id" => "2617eeee-0f6e-4432-ac20-85068856473b", "translatable_type" => "App\Models\Description", "translatable_id" => "e61c269b-3e03-4068-a803-3fc3d56b43b5"],
            ["translation_id" => "84261880-9d2a-43ab-a822-83bb0f6249df", "translatable_type" => "App\Models\Description", "translatable_id" => "e61c269b-3e03-4068-a803-3fc3d56b43b5"],
            //484
            ["translation_id" => "44ce36b9-3b15-44b4-8199-e950806767b3", "translatable_type" => "App\Models\Description", "translatable_id" => "1fd2873c-4e09-4f00-8016-7ca7c48c2e26"],
            ["translation_id" => "9c07e9e8-3afb-4db6-bef9-dd9229a86cfa", "translatable_type" => "App\Models\Description", "translatable_id" => "1fd2873c-4e09-4f00-8016-7ca7c48c2e26"],
            ["translation_id" => "3f097282-af23-4922-8653-5c5b6a60dbaa", "translatable_type" => "App\Models\Description", "translatable_id" => "1fd2873c-4e09-4f00-8016-7ca7c48c2e26"],
            //485
            ["translation_id" => "e0b5dcd2-f172-43a3-b712-fdb7b6ce4bfc", "translatable_type" => "App\Models\Description", "translatable_id" => "2210c034-ea9e-49a7-a8e2-c07b13a94a7c"],
            ["translation_id" => "67fc84dc-3d93-4c3c-9816-ef2ada8ac3ae", "translatable_type" => "App\Models\Description", "translatable_id" => "2210c034-ea9e-49a7-a8e2-c07b13a94a7c"],
            ["translation_id" => "9e42ba94-9b26-4248-9a80-4dc6fbffa757", "translatable_type" => "App\Models\Description", "translatable_id" => "2210c034-ea9e-49a7-a8e2-c07b13a94a7c"],
            //486
            ["translation_id" => "73a3265a-8a2a-4de5-a071-62abf3754ae8", "translatable_type" => "App\Models\Description", "translatable_id" => "a47062ef-9354-426e-a50a-a544702746fc"],
            ["translation_id" => "8078c04e-8652-46e1-93e4-f95d82c251c4", "translatable_type" => "App\Models\Description", "translatable_id" => "a47062ef-9354-426e-a50a-a544702746fc"],
            ["translation_id" => "8436a9f2-8213-4340-b785-8dec2c196bb1", "translatable_type" => "App\Models\Description", "translatable_id" => "a47062ef-9354-426e-a50a-a544702746fc"],
            //487
            ["translation_id" => "5dc65f8a-7d0b-4631-a91d-ec189789fcce", "translatable_type" => "App\Models\Description", "translatable_id" => "7c785be0-48d7-40b6-bf03-7bec6798c9f9"],
            ["translation_id" => "2fc577bf-f59f-4537-ab9f-fbc1fd9effeb", "translatable_type" => "App\Models\Description", "translatable_id" => "7c785be0-48d7-40b6-bf03-7bec6798c9f9"],
            ["translation_id" => "df6b53dd-8d63-4009-9052-bf9c5c5a9d3c", "translatable_type" => "App\Models\Description", "translatable_id" => "7c785be0-48d7-40b6-bf03-7bec6798c9f9"],
            //488
            ["translation_id" => "d537818e-9607-4ca0-a1b6-ee2e11043da6", "translatable_type" => "App\Models\Description", "translatable_id" => "29d9db35-298b-4c1e-9620-9509295f1378"],
            ["translation_id" => "a804e141-596e-4fff-acb9-3589b4b34fc3", "translatable_type" => "App\Models\Description", "translatable_id" => "29d9db35-298b-4c1e-9620-9509295f1378"],
            ["translation_id" => "71e3f1f9-cb34-4c29-a20a-3c184f49e69a", "translatable_type" => "App\Models\Description", "translatable_id" => "29d9db35-298b-4c1e-9620-9509295f1378"],
            //489
            ["translation_id" => "2e2414bd-fd1e-46c4-b052-ac8623d4ab6d", "translatable_type" => "App\Models\Description", "translatable_id" => "c9715236-c418-47e8-9d1c-ce1f7004dbe2"],
            ["translation_id" => "fb407f40-fbeb-4be2-b400-b59f38fa5b7a", "translatable_type" => "App\Models\Description", "translatable_id" => "c9715236-c418-47e8-9d1c-ce1f7004dbe2"],
            ["translation_id" => "b7875444-cd40-4d99-a64e-1d6e7525386e", "translatable_type" => "App\Models\Description", "translatable_id" => "c9715236-c418-47e8-9d1c-ce1f7004dbe2"],
            //490
            ["translation_id" => "e107a875-4937-4354-b4c5-5b52cda1382f", "translatable_type" => "App\Models\Description", "translatable_id" => "83384714-2427-4242-93b3-0af4f99d3749"],
            ["translation_id" => "8edf3465-8704-4fc6-807d-df870ed23a26", "translatable_type" => "App\Models\Description", "translatable_id" => "83384714-2427-4242-93b3-0af4f99d3749"],
            ["translation_id" => "accabc36-151e-422f-98cb-38360f93cfd7", "translatable_type" => "App\Models\Description", "translatable_id" => "83384714-2427-4242-93b3-0af4f99d3749"],
            //491
            ["translation_id" => "9ae8f411-668e-4859-a7c3-59920a4025b9", "translatable_type" => "App\Models\Description", "translatable_id" => "31bae7f3-ba66-49a6-942a-889bd4717655"],
            ["translation_id" => "d9803040-8b80-4b32-bee5-42f081d3f273", "translatable_type" => "App\Models\Description", "translatable_id" => "31bae7f3-ba66-49a6-942a-889bd4717655"],
            ["translation_id" => "4e56f8bf-2b1d-4d29-a9f4-d8db12122da0", "translatable_type" => "App\Models\Description", "translatable_id" => "31bae7f3-ba66-49a6-942a-889bd4717655"],
            //492
            ["translation_id" => "10d2c434-68de-4729-bd0f-30d8a4890dab", "translatable_type" => "App\Models\Description", "translatable_id" => "bf3d294e-02eb-42ba-bf50-78fb51830755"],
            ["translation_id" => "0e55f00c-a808-4d58-bdf5-b8c577d991a7", "translatable_type" => "App\Models\Description", "translatable_id" => "bf3d294e-02eb-42ba-bf50-78fb51830755"],
            ["translation_id" => "e39fcbb5-3e5c-4085-9f56-7fb2b6b590f6", "translatable_type" => "App\Models\Description", "translatable_id" => "bf3d294e-02eb-42ba-bf50-78fb51830755"],
            //493
            ["translation_id" => "6f10ec0b-cd31-47b2-ab57-64eddee8f0ef", "translatable_type" => "App\Models\Description", "translatable_id" => "9105f439-de4d-48f4-99e7-c26fa6896d2f"],
            ["translation_id" => "ef5ff480-e8aa-4aaa-ab84-38886cc4ac1c", "translatable_type" => "App\Models\Description", "translatable_id" => "9105f439-de4d-48f4-99e7-c26fa6896d2f"],
            ["translation_id" => "0af1fde3-1599-4bcf-977e-427d8e990be7", "translatable_type" => "App\Models\Description", "translatable_id" => "9105f439-de4d-48f4-99e7-c26fa6896d2f"],
            //494
            ["translation_id" => "133cf97b-2111-4f1a-91ac-0016794d3c77", "translatable_type" => "App\Models\Description", "translatable_id" => "f79f67f9-fe5a-44a0-9783-0bd9ed406c1c"],
            ["translation_id" => "5af66c6b-dc8a-4f65-911b-d51ea3c832ee", "translatable_type" => "App\Models\Description", "translatable_id" => "f79f67f9-fe5a-44a0-9783-0bd9ed406c1c"],
            ["translation_id" => "864a5826-e850-469b-ab75-3713cf356525", "translatable_type" => "App\Models\Description", "translatable_id" => "f79f67f9-fe5a-44a0-9783-0bd9ed406c1c"],
            //495
            ["translation_id" => "71a078c3-eb90-44ee-b3f2-23ca704118ea", "translatable_type" => "App\Models\Description", "translatable_id" => "d5408ab3-4190-46ae-8741-38797f7dee77"],
            ["translation_id" => "37a1caaf-64ca-4bfc-a724-34d883e42307", "translatable_type" => "App\Models\Description", "translatable_id" => "d5408ab3-4190-46ae-8741-38797f7dee77"],
            ["translation_id" => "88d2bc52-fd41-433a-96cc-a8dfbed1fcf6", "translatable_type" => "App\Models\Description", "translatable_id" => "d5408ab3-4190-46ae-8741-38797f7dee77"],
            //496
            ["translation_id" => "92def0b2-3fa8-436a-880b-e45c2851640d", "translatable_type" => "App\Models\Description", "translatable_id" => "039e612d-4ba4-4d26-b5fd-6816ffe4bdda"],
            ["translation_id" => "949654b8-00dc-47f3-94fc-94b93341bc3c", "translatable_type" => "App\Models\Description", "translatable_id" => "039e612d-4ba4-4d26-b5fd-6816ffe4bdda"],
            ["translation_id" => "ebd9a9c8-0d43-430f-acb4-6a94de61403a", "translatable_type" => "App\Models\Description", "translatable_id" => "039e612d-4ba4-4d26-b5fd-6816ffe4bdda"],
            //497
            ["translation_id" => "84aa4c11-8bd2-4035-be3a-cf14d9aefc99", "translatable_type" => "App\Models\Description", "translatable_id" => "bf4e0472-ebb7-4726-8c0c-c26d8e8b3bd2"],
            ["translation_id" => "4bddf851-101b-403e-a7d6-d6faf8e2cf81", "translatable_type" => "App\Models\Description", "translatable_id" => "bf4e0472-ebb7-4726-8c0c-c26d8e8b3bd2"],
            ["translation_id" => "a5b2b6fa-ff52-4108-abb5-f119d53b88ea", "translatable_type" => "App\Models\Description", "translatable_id" => "bf4e0472-ebb7-4726-8c0c-c26d8e8b3bd2"],
            //498
            ["translation_id" => "e4be99eb-7756-408f-ba91-a237d1e13e1b", "translatable_type" => "App\Models\Description", "translatable_id" => "9c7a3c8e-6fbb-4717-ac04-6a269a447e34"],
            ["translation_id" => "82027a47-6d1f-49bf-b9de-20b715312309", "translatable_type" => "App\Models\Description", "translatable_id" => "9c7a3c8e-6fbb-4717-ac04-6a269a447e34"],
            ["translation_id" => "e5b80483-0753-4e65-a22a-20c923543f6d", "translatable_type" => "App\Models\Description", "translatable_id" => "9c7a3c8e-6fbb-4717-ac04-6a269a447e34"],
            //499
            ["translation_id" => "6c988853-b84d-4ed1-b209-0fa45daedbde", "translatable_type" => "App\Models\Description", "translatable_id" => "17a444f9-0032-4481-9cc8-11d12adc4674"],
            ["translation_id" => "69f46d32-f948-4efa-a453-05267c1c28dc", "translatable_type" => "App\Models\Description", "translatable_id" => "17a444f9-0032-4481-9cc8-11d12adc4674"],
            ["translation_id" => "2d8588c0-e130-42c8-97e6-b1a75a186382", "translatable_type" => "App\Models\Description", "translatable_id" => "17a444f9-0032-4481-9cc8-11d12adc4674"],
            //500
            ["translation_id" => "7c7c26db-eac4-4fa5-8cb3-ac481f846b00", "translatable_type" => "App\Models\Description", "translatable_id" => "95bf71c2-561d-47f1-81c0-a78163827aee"],
            ["translation_id" => "24df50f2-ad78-45ac-ad79-aab5dd88aabd", "translatable_type" => "App\Models\Description", "translatable_id" => "95bf71c2-561d-47f1-81c0-a78163827aee"],
            ["translation_id" => "7872b62c-0fa3-4809-8083-4ea696f8683e", "translatable_type" => "App\Models\Description", "translatable_id" => "95bf71c2-561d-47f1-81c0-a78163827aee"],
            //501
            ["translation_id" => "5f1b0409-32bf-42eb-9230-9088a3b217be", "translatable_type" => "App\Models\Description", "translatable_id" => "977cc3b8-48d8-4daf-8fb2-4ad8b50fa558"],
            ["translation_id" => "245f8bee-14f8-4ad3-8064-f6e16912528e", "translatable_type" => "App\Models\Description", "translatable_id" => "977cc3b8-48d8-4daf-8fb2-4ad8b50fa558"],
            ["translation_id" => "3b8b796e-734d-4eb0-be58-ccbd7fd71157", "translatable_type" => "App\Models\Description", "translatable_id" => "977cc3b8-48d8-4daf-8fb2-4ad8b50fa558"],
            //502
            ["translation_id" => "94fdd185-917e-430a-a6ea-8023f8e24c81", "translatable_type" => "App\Models\Description", "translatable_id" => "2aae59db-0a6a-4870-a31f-09d4eb907dd3"],
            ["translation_id" => "fcb726ea-3607-4f13-9214-5946b419ea46", "translatable_type" => "App\Models\Description", "translatable_id" => "2aae59db-0a6a-4870-a31f-09d4eb907dd3"],
            ["translation_id" => "877fe8cf-ce5c-47ea-a355-1c3a3d1a5d7e", "translatable_type" => "App\Models\Description", "translatable_id" => "2aae59db-0a6a-4870-a31f-09d4eb907dd3"],
            //503
            ["translation_id" => "cda861c4-4287-484f-abc8-4f589d6f1cf4", "translatable_type" => "App\Models\Description", "translatable_id" => "b8378f7d-6f6b-4121-8737-36dadfd2c912"],
            ["translation_id" => "f73006b6-a00c-4533-94b7-c20c35233842", "translatable_type" => "App\Models\Description", "translatable_id" => "b8378f7d-6f6b-4121-8737-36dadfd2c912"],
            ["translation_id" => "31b0f194-6f70-4790-ac16-6c71d0d9854f", "translatable_type" => "App\Models\Description", "translatable_id" => "b8378f7d-6f6b-4121-8737-36dadfd2c912"],
            //504
            ["translation_id" => "8296124c-6d46-4e63-abb5-b59ece14a25b", "translatable_type" => "App\Models\Description", "translatable_id" => "1e85e323-5c9b-493c-af1e-2432fa0f703b"],
            ["translation_id" => "51befc56-ea59-46d8-8b54-1a96e7e30a10", "translatable_type" => "App\Models\Description", "translatable_id" => "1e85e323-5c9b-493c-af1e-2432fa0f703b"],
            ["translation_id" => "19342a3c-cda5-4a63-80d8-4d32003ec5c2", "translatable_type" => "App\Models\Description", "translatable_id" => "1e85e323-5c9b-493c-af1e-2432fa0f703b"],
            //505
            ["translation_id" => "1cbd095e-d553-4da1-9e01-3b70e1c598f2", "translatable_type" => "App\Models\Description", "translatable_id" => "049490a4-4b35-459f-b25b-ab82f1463f2a"],
            ["translation_id" => "48838f4a-6797-45f9-bbaf-c217b8a0899c", "translatable_type" => "App\Models\Description", "translatable_id" => "049490a4-4b35-459f-b25b-ab82f1463f2a"],
            ["translation_id" => "c180c4f9-bbe2-4715-be73-d339b41bda96", "translatable_type" => "App\Models\Description", "translatable_id" => "049490a4-4b35-459f-b25b-ab82f1463f2a"],
            //506
            ["translation_id" => "5802d6ac-e2a0-4e37-8a9c-bccadca0b6b7", "translatable_type" => "App\Models\Description", "translatable_id" => "cd299fd1-58fa-41c3-b92d-5e47ccbfbbff"],
            ["translation_id" => "efbc408e-8144-4e37-b49d-deb5b08c7724", "translatable_type" => "App\Models\Description", "translatable_id" => "cd299fd1-58fa-41c3-b92d-5e47ccbfbbff"],
            ["translation_id" => "6c78f04f-2b4e-4f97-99fc-276428bdb5bf", "translatable_type" => "App\Models\Description", "translatable_id" => "cd299fd1-58fa-41c3-b92d-5e47ccbfbbff"],
            //507
            ["translation_id" => "8fd7d98a-a6b3-4f61-ac84-3045188c7297", "translatable_type" => "App\Models\Description", "translatable_id" => "7424dd5e-cd36-4361-9fdc-ddae5cf7f109"],
            ["translation_id" => "6f0ef0d9-e214-444b-88c6-16fc6c165fa8", "translatable_type" => "App\Models\Description", "translatable_id" => "7424dd5e-cd36-4361-9fdc-ddae5cf7f109"],
            ["translation_id" => "4cb65731-7885-4fee-8367-5de77dd8dc22", "translatable_type" => "App\Models\Description", "translatable_id" => "7424dd5e-cd36-4361-9fdc-ddae5cf7f109"],
            //508
            ["translation_id" => "e655930b-b0fb-4b88-a12a-e57ada129c82", "translatable_type" => "App\Models\Description", "translatable_id" => "2869a5e5-68fa-4eb4-aba7-10f01e325e8d"],
            ["translation_id" => "29a71984-c028-443c-97e7-4bc3f6a0ee6d", "translatable_type" => "App\Models\Description", "translatable_id" => "2869a5e5-68fa-4eb4-aba7-10f01e325e8d"],
            ["translation_id" => "939afa37-111c-44af-8c90-68ad9186cba3", "translatable_type" => "App\Models\Description", "translatable_id" => "2869a5e5-68fa-4eb4-aba7-10f01e325e8d"],
            //509
            ["translation_id" => "1b957b1a-c166-4c54-8529-35a60ea4850a", "translatable_type" => "App\Models\Description", "translatable_id" => "047946c4-ef26-47cb-a618-784964bbb061"],
            ["translation_id" => "14f477dc-362f-4bfe-9fa9-79c9052e2060", "translatable_type" => "App\Models\Description", "translatable_id" => "047946c4-ef26-47cb-a618-784964bbb061"],
            ["translation_id" => "9afd4066-b908-4f29-a98d-bb84d33a33d0", "translatable_type" => "App\Models\Description", "translatable_id" => "047946c4-ef26-47cb-a618-784964bbb061"],
            //510
            ["translation_id" => "9cd45d77-9d08-43c1-869f-f9ab2821af48", "translatable_type" => "App\Models\Description", "translatable_id" => "8c5f66e0-7f96-4b5e-bbcd-2863376c6ae7"],
            ["translation_id" => "f1a4fe59-a81e-4e87-82ab-66ca8ee57916", "translatable_type" => "App\Models\Description", "translatable_id" => "8c5f66e0-7f96-4b5e-bbcd-2863376c6ae7"],
            ["translation_id" => "4a1736b7-d640-488d-84b6-679b6f6fd354", "translatable_type" => "App\Models\Description", "translatable_id" => "8c5f66e0-7f96-4b5e-bbcd-2863376c6ae7"],
            //511
            ["translation_id" => "09663fe0-395c-40fb-a2ee-532222188282", "translatable_type" => "App\Models\Description", "translatable_id" => "b8c56084-1923-45bc-b317-87dff8420857"],
            ["translation_id" => "8c74fab6-0c9e-4d80-90ec-1c8d329004a0", "translatable_type" => "App\Models\Description", "translatable_id" => "b8c56084-1923-45bc-b317-87dff8420857"],
            ["translation_id" => "93a2f1ff-ae5d-4a55-b27c-5d37c9f7602a", "translatable_type" => "App\Models\Description", "translatable_id" => "b8c56084-1923-45bc-b317-87dff8420857"],
            //512
            ["translation_id" => "1c19fe9b-d144-4f26-ab9e-f1306b36efab", "translatable_type" => "App\Models\Description", "translatable_id" => "55c07220-2112-416d-8aa0-7f1c766669d8"],
            ["translation_id" => "c5bae4a6-c5a1-47b4-b542-bf85dbea555e", "translatable_type" => "App\Models\Description", "translatable_id" => "55c07220-2112-416d-8aa0-7f1c766669d8"],
            ["translation_id" => "73ac9102-6c07-4561-8322-a61d5287c2a7", "translatable_type" => "App\Models\Description", "translatable_id" => "55c07220-2112-416d-8aa0-7f1c766669d8"],
            //513
            ["translation_id" => "b0e8c9e8-2e67-4205-84a3-aed0ddf65570", "translatable_type" => "App\Models\Description", "translatable_id" => "cc21988a-5bcb-43e4-aa51-835bbbdfee49"],
            ["translation_id" => "b4eae329-23c1-4c0b-977f-c53fabe0fc39", "translatable_type" => "App\Models\Description", "translatable_id" => "cc21988a-5bcb-43e4-aa51-835bbbdfee49"],
            ["translation_id" => "c0aaa2b0-02d2-43b4-a40a-5738a16f0d1d", "translatable_type" => "App\Models\Description", "translatable_id" => "cc21988a-5bcb-43e4-aa51-835bbbdfee49"],
            //514
            ["translation_id" => "918020da-e91c-4fcd-bf51-eaa0282b7c48", "translatable_type" => "App\Models\Description", "translatable_id" => "c5a6a54f-c82d-4d30-a922-30006bb2e0be"],
            ["translation_id" => "2bcb4734-4607-4163-b2c6-2e071e031488", "translatable_type" => "App\Models\Description", "translatable_id" => "c5a6a54f-c82d-4d30-a922-30006bb2e0be"],
            ["translation_id" => "cb033fae-d344-471f-a8b4-fd23f4dbd40a", "translatable_type" => "App\Models\Description", "translatable_id" => "c5a6a54f-c82d-4d30-a922-30006bb2e0be"],
            //515
            ["translation_id" => "63e59289-c686-4167-8a50-353af817c45e", "translatable_type" => "App\Models\Description", "translatable_id" => "d59fb08a-e3f6-41f4-9c1f-cd09890dd0ef"],
            ["translation_id" => "b1d6e0b9-493c-4981-b869-e716abd24c58", "translatable_type" => "App\Models\Description", "translatable_id" => "d59fb08a-e3f6-41f4-9c1f-cd09890dd0ef"],
            ["translation_id" => "89c77401-10e4-48cf-948b-312ab49c76d3", "translatable_type" => "App\Models\Description", "translatable_id" => "d59fb08a-e3f6-41f4-9c1f-cd09890dd0ef"],
            //516
            ["translation_id" => "d9a24bc4-041b-4ae5-be59-e4c8326d1acc", "translatable_type" => "App\Models\Description", "translatable_id" => "c318affb-dcf2-408a-af7f-62919aa4abf5"],
            ["translation_id" => "03c4ff59-a331-4403-8488-4974a423c14b", "translatable_type" => "App\Models\Description", "translatable_id" => "c318affb-dcf2-408a-af7f-62919aa4abf5"],
            ["translation_id" => "5cd3c1e9-c0b4-4e7b-813d-3a0fd5cc958e", "translatable_type" => "App\Models\Description", "translatable_id" => "c318affb-dcf2-408a-af7f-62919aa4abf5"],
            //517
            ["translation_id" => "a4ec99cd-65ae-4649-a580-a06296738bb5", "translatable_type" => "App\Models\Description", "translatable_id" => "d7b7c29f-93e5-4354-9ecb-c116e3659a3b"],
            ["translation_id" => "e1586228-2bd9-488b-af26-aa665546d779", "translatable_type" => "App\Models\Description", "translatable_id" => "d7b7c29f-93e5-4354-9ecb-c116e3659a3b"],
            ["translation_id" => "e4d0bc99-5ef3-4b0a-a4a8-697dc3be7cde", "translatable_type" => "App\Models\Description", "translatable_id" => "d7b7c29f-93e5-4354-9ecb-c116e3659a3b"],
            //518
            ["translation_id" => "e22a4508-152b-4672-821b-57b088d0e135", "translatable_type" => "App\Models\Description", "translatable_id" => "d9be4f4c-4672-43dc-a1bf-e6fe15ce89ad"],
            ["translation_id" => "7224c4da-747d-4c24-9a26-b150826d34d0", "translatable_type" => "App\Models\Description", "translatable_id" => "d9be4f4c-4672-43dc-a1bf-e6fe15ce89ad"],
            ["translation_id" => "6a2201ea-754c-47aa-a78c-72c14f403b03", "translatable_type" => "App\Models\Description", "translatable_id" => "d9be4f4c-4672-43dc-a1bf-e6fe15ce89ad"],
            //519
            ["translation_id" => "875c5408-055e-407f-b709-8c0620cd4ba4", "translatable_type" => "App\Models\Description", "translatable_id" => "4078c741-4ad6-47e4-a6bc-d6ee9cfbe7c5"],
            ["translation_id" => "1d93144d-4e3a-489a-8638-303ee7d70307", "translatable_type" => "App\Models\Description", "translatable_id" => "4078c741-4ad6-47e4-a6bc-d6ee9cfbe7c5"],
            ["translation_id" => "567a47b8-a294-449d-965a-8908a28c75c9", "translatable_type" => "App\Models\Description", "translatable_id" => "4078c741-4ad6-47e4-a6bc-d6ee9cfbe7c5"],
            //520
            ["translation_id" => "2a9dcebd-9721-44bc-a954-96a4e80aa68d", "translatable_type" => "App\Models\Description", "translatable_id" => "2ffe66e3-c93a-4204-a4aa-1ed0540cbc1f"],
            ["translation_id" => "17e8c2b5-bfc0-4e2b-ac70-ad9cc8e15a4f", "translatable_type" => "App\Models\Description", "translatable_id" => "2ffe66e3-c93a-4204-a4aa-1ed0540cbc1f"],
            ["translation_id" => "69e7cfc9-bd74-471b-ae1a-4ec9d9c80b21", "translatable_type" => "App\Models\Description", "translatable_id" => "2ffe66e3-c93a-4204-a4aa-1ed0540cbc1f"],
            //521
            ["translation_id" => "a4f4f5ef-8c4d-41d0-97ff-873e9b6cc692", "translatable_type" => "App\Models\Description", "translatable_id" => "50442ca8-3445-4053-96cc-67203bc87f83"],
            ["translation_id" => "bca41805-0843-43d0-b22a-14aad9b27354", "translatable_type" => "App\Models\Description", "translatable_id" => "50442ca8-3445-4053-96cc-67203bc87f83"],
            ["translation_id" => "50cfed4c-e4b3-4173-8592-674ab5fa2aa6", "translatable_type" => "App\Models\Description", "translatable_id" => "50442ca8-3445-4053-96cc-67203bc87f83"],
            //522
            ["translation_id" => "da6290c4-077c-4da1-b2ec-877a864606dd", "translatable_type" => "App\Models\Description", "translatable_id" => "c361d36b-8cd4-4098-8512-feb6778d4da5"],
            ["translation_id" => "92cc37b9-aaff-452e-a9a3-83cc1104d566", "translatable_type" => "App\Models\Description", "translatable_id" => "c361d36b-8cd4-4098-8512-feb6778d4da5"],
            ["translation_id" => "317da396-da8f-4745-b24a-d0c07dc16d40", "translatable_type" => "App\Models\Description", "translatable_id" => "c361d36b-8cd4-4098-8512-feb6778d4da5"],
            //523
            ["translation_id" => "154ade09-3594-4ed4-bdd4-ce2be60ceae4", "translatable_type" => "App\Models\Description", "translatable_id" => "5e53c846-281c-444c-823e-aebf8772a0e4"],
            ["translation_id" => "c7ef0555-a56a-4853-8f4b-d1597608dd52", "translatable_type" => "App\Models\Description", "translatable_id" => "5e53c846-281c-444c-823e-aebf8772a0e4"],
            ["translation_id" => "5675a92c-59c7-4d56-bd2a-d5355f999059", "translatable_type" => "App\Models\Description", "translatable_id" => "5e53c846-281c-444c-823e-aebf8772a0e4"],
            //524
            ["translation_id" => "9637b68a-e1f2-4d3f-9a5c-949bd04636fc", "translatable_type" => "App\Models\Description", "translatable_id" => "c6236004-92b4-4d57-becb-c8e20c6b0be9"],
            ["translation_id" => "9be469eb-edbe-49e4-aeb9-dd8727ace59d", "translatable_type" => "App\Models\Description", "translatable_id" => "c6236004-92b4-4d57-becb-c8e20c6b0be9"],
            ["translation_id" => "2884ff45-4b30-4acc-8591-6a56e0f68091", "translatable_type" => "App\Models\Description", "translatable_id" => "c6236004-92b4-4d57-becb-c8e20c6b0be9"],
            //525
            ["translation_id" => "43b716da-8333-4e2a-9b35-f0c45e031ddf", "translatable_type" => "App\Models\Description", "translatable_id" => "5886a952-25cb-481d-9154-a141fdf71252"],
            ["translation_id" => "3a085c94-0dff-43f8-b784-be215cdbdc0c", "translatable_type" => "App\Models\Description", "translatable_id" => "5886a952-25cb-481d-9154-a141fdf71252"],
            ["translation_id" => "99c70276-31c0-4223-b74b-3d237fb0aa2b", "translatable_type" => "App\Models\Description", "translatable_id" => "5886a952-25cb-481d-9154-a141fdf71252"],
            //526
            ["translation_id" => "7b8085f2-2af7-4663-a2da-139712382497", "translatable_type" => "App\Models\Description", "translatable_id" => "57cae0e6-139c-4a90-87c1-a38780f8c84e"],
            ["translation_id" => "b3c2e61b-9d66-4397-80d4-a4f4ab4038d0", "translatable_type" => "App\Models\Description", "translatable_id" => "57cae0e6-139c-4a90-87c1-a38780f8c84e"],
            ["translation_id" => "9ef40719-4027-4684-960c-2e4164f9bb53", "translatable_type" => "App\Models\Description", "translatable_id" => "57cae0e6-139c-4a90-87c1-a38780f8c84e"],
            //527
            ["translation_id" => "9359f82c-d26d-4fee-86d6-e34945da4d0e", "translatable_type" => "App\Models\Description", "translatable_id" => "e42859bf-b2b2-4e3a-bff2-2473c2adf64a"],
            ["translation_id" => "7b374d10-1b17-422b-b27b-406e4b7e0da8", "translatable_type" => "App\Models\Description", "translatable_id" => "e42859bf-b2b2-4e3a-bff2-2473c2adf64a"],
            ["translation_id" => "776903c1-55c6-4c13-be06-3ba7952fb704", "translatable_type" => "App\Models\Description", "translatable_id" => "e42859bf-b2b2-4e3a-bff2-2473c2adf64a"],
            //528
            ["translation_id" => "2594e8e2-bb3c-4862-8bda-c439d829eb9c", "translatable_type" => "App\Models\Description", "translatable_id" => "27c3d35f-629f-477c-8918-0b3faa2cdb6d"],
            ["translation_id" => "08eda1a6-e27f-46a5-a372-878978070fff", "translatable_type" => "App\Models\Description", "translatable_id" => "27c3d35f-629f-477c-8918-0b3faa2cdb6d"],
            ["translation_id" => "183568ff-3f2d-4053-81ea-fb97f709082d", "translatable_type" => "App\Models\Description", "translatable_id" => "27c3d35f-629f-477c-8918-0b3faa2cdb6d"],
            //529
            ["translation_id" => "e9e054cf-807e-42de-96d6-4fef45df2ca5", "translatable_type" => "App\Models\Description", "translatable_id" => "13d4471c-2ec4-4db7-b256-09b751b8aee2"],
            ["translation_id" => "4057ff5a-5d63-4a13-b6f3-4bb9f050a750", "translatable_type" => "App\Models\Description", "translatable_id" => "13d4471c-2ec4-4db7-b256-09b751b8aee2"],
            ["translation_id" => "e370d007-16bd-4ec3-a53c-f81f6b161787", "translatable_type" => "App\Models\Description", "translatable_id" => "13d4471c-2ec4-4db7-b256-09b751b8aee2"],
            //530
            ["translation_id" => "4ec71394-dced-4667-a2d0-10ab1985a28f", "translatable_type" => "App\Models\Description", "translatable_id" => "03b4904c-1eb6-4317-bcd5-80b3665aa975"],
            ["translation_id" => "0f31dd3e-f9e0-4463-93f0-d8368f344dae", "translatable_type" => "App\Models\Description", "translatable_id" => "03b4904c-1eb6-4317-bcd5-80b3665aa975"],
            ["translation_id" => "d7877946-05c6-4886-b476-30a2f728cdc1", "translatable_type" => "App\Models\Description", "translatable_id" => "03b4904c-1eb6-4317-bcd5-80b3665aa975"],
            //531
            ["translation_id" => "067e7308-eb96-4b04-bd11-8bbf1cbde0c6", "translatable_type" => "App\Models\Description", "translatable_id" => "1ad75832-cbde-464d-afa9-7056f45cec8a"],
            ["translation_id" => "124b1d15-c309-4cfe-8d62-5522eb3635d0", "translatable_type" => "App\Models\Description", "translatable_id" => "1ad75832-cbde-464d-afa9-7056f45cec8a"],
            ["translation_id" => "099b2218-a2e2-48ea-b5b5-7a49f3923593", "translatable_type" => "App\Models\Description", "translatable_id" => "1ad75832-cbde-464d-afa9-7056f45cec8a"],
            //532
            ["translation_id" => "b9166d2a-e694-4f1f-8e33-45f64399d63d", "translatable_type" => "App\Models\Description", "translatable_id" => "0bc01b64-b8bb-499e-b7bd-2a200931f76b"],
            ["translation_id" => "12f137d2-66d5-44b9-8059-54915b180557", "translatable_type" => "App\Models\Description", "translatable_id" => "0bc01b64-b8bb-499e-b7bd-2a200931f76b"],
            ["translation_id" => "03ab6353-edcc-4f3b-b09b-356f10ef1afd", "translatable_type" => "App\Models\Description", "translatable_id" => "0bc01b64-b8bb-499e-b7bd-2a200931f76b"],
            //533
            ["translation_id" => "655b13c8-8bab-4c40-bc43-854e8811955a", "translatable_type" => "App\Models\Description", "translatable_id" => "bf5d6d35-72cd-4ed4-baed-ff06f8010625"],
            ["translation_id" => "551eb76e-ad4a-414f-8a51-b5735fbdf65e", "translatable_type" => "App\Models\Description", "translatable_id" => "bf5d6d35-72cd-4ed4-baed-ff06f8010625"],
            ["translation_id" => "bb2c9175-19c4-4229-a807-79cc85a9d54c", "translatable_type" => "App\Models\Description", "translatable_id" => "bf5d6d35-72cd-4ed4-baed-ff06f8010625"],
            //534
            ["translation_id" => "9585e657-cbcc-4eea-bed4-f73a2c81e077", "translatable_type" => "App\Models\Description", "translatable_id" => "31a11754-4079-453f-b756-e4fa44c69e4d"],
            ["translation_id" => "3db752df-6ba1-4867-be58-0a289919f7f3", "translatable_type" => "App\Models\Description", "translatable_id" => "31a11754-4079-453f-b756-e4fa44c69e4d"],
            ["translation_id" => "13e482d5-54ce-428a-bc4f-23f6f9142b9e", "translatable_type" => "App\Models\Description", "translatable_id" => "31a11754-4079-453f-b756-e4fa44c69e4d"],
            //535
            ["translation_id" => "189bd447-52b2-432c-b0d5-a9a1c21bd1e2", "translatable_type" => "App\Models\Description", "translatable_id" => "51e2d55e-9a1d-4674-8a9b-87271617ee07"],
            ["translation_id" => "4896cf61-5443-4265-b227-8015c895bde2", "translatable_type" => "App\Models\Description", "translatable_id" => "51e2d55e-9a1d-4674-8a9b-87271617ee07"],
            ["translation_id" => "18085c91-7669-487b-a3c8-568239ebdf2f", "translatable_type" => "App\Models\Description", "translatable_id" => "51e2d55e-9a1d-4674-8a9b-87271617ee07"],
            //536
            ["translation_id" => "09f7f317-3e37-4824-8c50-922b4f26d12d", "translatable_type" => "App\Models\Description", "translatable_id" => "796c3252-0bb0-4959-ac8b-33ba4a1fc731"],
            ["translation_id" => "46fe95d2-9501-4ea5-8004-4a6183953194", "translatable_type" => "App\Models\Description", "translatable_id" => "796c3252-0bb0-4959-ac8b-33ba4a1fc731"],
            ["translation_id" => "d7e6ee85-e783-4cf3-9811-43017dad5cd3", "translatable_type" => "App\Models\Description", "translatable_id" => "796c3252-0bb0-4959-ac8b-33ba4a1fc731"],
            //537
            ["translation_id" => "6c31d233-12f8-41f9-8806-f9322a8ad128", "translatable_type" => "App\Models\Description", "translatable_id" => "ad94d56c-e249-4e9b-9c88-c196d72d5a5d"],
            ["translation_id" => "cb8bde6d-74d4-4483-9f1d-5dee56b5f465", "translatable_type" => "App\Models\Description", "translatable_id" => "ad94d56c-e249-4e9b-9c88-c196d72d5a5d"],
            ["translation_id" => "aee438bc-862e-46a7-881e-233f249f1fa0", "translatable_type" => "App\Models\Description", "translatable_id" => "ad94d56c-e249-4e9b-9c88-c196d72d5a5d"],
            //538
            ["translation_id" => "ef4cfdeb-7783-4044-9454-99e5cb1d0c47", "translatable_type" => "App\Models\Description", "translatable_id" => "50c8f029-4571-4b8a-9a67-196dd9befcc7"],
            ["translation_id" => "18b64cd9-4d16-4ab7-8b97-678cd7cf564f", "translatable_type" => "App\Models\Description", "translatable_id" => "50c8f029-4571-4b8a-9a67-196dd9befcc7"],
            ["translation_id" => "25c12f02-1c3f-4388-a869-ca9f91bd432f", "translatable_type" => "App\Models\Description", "translatable_id" => "50c8f029-4571-4b8a-9a67-196dd9befcc7"],
            //539
            ["translation_id" => "1db38d70-4ddd-4c65-b85e-a91bb2d1d47e", "translatable_type" => "App\Models\Description", "translatable_id" => "29aa3689-90a7-45a1-bbc7-6e9010502b52"],
            ["translation_id" => "89865b3f-6362-40bd-8d7f-67a6d73cbc88", "translatable_type" => "App\Models\Description", "translatable_id" => "29aa3689-90a7-45a1-bbc7-6e9010502b52"],
            ["translation_id" => "33724197-37f4-4cfb-b7c3-e3fb52b207f0", "translatable_type" => "App\Models\Description", "translatable_id" => "29aa3689-90a7-45a1-bbc7-6e9010502b52"],
            //540
            ["translation_id" => "26e9eb6c-fb96-4b6d-b9b7-78469e0d0c09", "translatable_type" => "App\Models\Description", "translatable_id" => "0535f17a-56a2-4ea0-8dca-92482b50aa5a"],
            ["translation_id" => "cbfe385c-f3ee-48d6-b5a1-4558a123344b", "translatable_type" => "App\Models\Description", "translatable_id" => "0535f17a-56a2-4ea0-8dca-92482b50aa5a"],
            ["translation_id" => "ad29fce0-e900-4d3e-a235-7daeb1c8a64b", "translatable_type" => "App\Models\Description", "translatable_id" => "0535f17a-56a2-4ea0-8dca-92482b50aa5a"],
            //541
            ["translation_id" => "58bb26d7-a777-485a-a227-a01f061bb7f6", "translatable_type" => "App\Models\Description", "translatable_id" => "b2df2922-e5b4-451e-8886-ed508dee2a75"],
            ["translation_id" => "842dc97f-0e19-420c-a4be-7d85ad896311", "translatable_type" => "App\Models\Description", "translatable_id" => "b2df2922-e5b4-451e-8886-ed508dee2a75"],
            ["translation_id" => "477b8b11-c8fe-48cb-8423-27a766a91a8a", "translatable_type" => "App\Models\Description", "translatable_id" => "b2df2922-e5b4-451e-8886-ed508dee2a75"],
            //542
            ["translation_id" => "5d23b441-9042-4f4e-9400-428bbcc589a2", "translatable_type" => "App\Models\Description", "translatable_id" => "87db2cc8-d832-4ee3-8c2f-ebd89e62558a"],
            ["translation_id" => "3846c164-cd6d-4cf2-8e35-ced34b9fbb74", "translatable_type" => "App\Models\Description", "translatable_id" => "87db2cc8-d832-4ee3-8c2f-ebd89e62558a"],
            ["translation_id" => "c422b29b-6abe-4a87-aa51-29643ddaff8a", "translatable_type" => "App\Models\Description", "translatable_id" => "87db2cc8-d832-4ee3-8c2f-ebd89e62558a"],
            //543
            ["translation_id" => "53f5e579-8c29-44ab-b1ee-22edbb7566f8", "translatable_type" => "App\Models\Description", "translatable_id" => "2c6202e4-db20-4df2-b997-db373a3ff6e1"],
            ["translation_id" => "25a76509-b6d8-449d-998e-12f4c3fdff1f", "translatable_type" => "App\Models\Description", "translatable_id" => "2c6202e4-db20-4df2-b997-db373a3ff6e1"],
            ["translation_id" => "2cedff53-2686-48ed-85bd-e1c73172afab", "translatable_type" => "App\Models\Description", "translatable_id" => "2c6202e4-db20-4df2-b997-db373a3ff6e1"],
            //544
            ["translation_id" => "ed38e02a-aaa8-4bbe-a127-a6dd4a1c13a5", "translatable_type" => "App\Models\Description", "translatable_id" => "e338e208-3673-42e0-992c-6e4849561760"],
            ["translation_id" => "214ad8a0-056d-4a87-9d09-a4f51e9a04a7", "translatable_type" => "App\Models\Description", "translatable_id" => "e338e208-3673-42e0-992c-6e4849561760"],
            ["translation_id" => "1381db45-5ae6-466d-abc2-dcefd806cdc2", "translatable_type" => "App\Models\Description", "translatable_id" => "e338e208-3673-42e0-992c-6e4849561760"],
            //545
            ["translation_id" => "f2916227-e2e6-4b3a-88f5-dd0e23b93a75", "translatable_type" => "App\Models\Description", "translatable_id" => "66635cfb-77b0-477f-b717-83ab91d34710"],
            ["translation_id" => "3111a07a-f566-4467-a2e2-e070485caf32", "translatable_type" => "App\Models\Description", "translatable_id" => "66635cfb-77b0-477f-b717-83ab91d34710"],
            ["translation_id" => "74586371-8c61-406b-9baf-cb1e7a52b725", "translatable_type" => "App\Models\Description", "translatable_id" => "66635cfb-77b0-477f-b717-83ab91d34710"],
            //546
            ["translation_id" => "5e00025c-0f56-40ed-9497-0e7bef7658fe", "translatable_type" => "App\Models\Description", "translatable_id" => "00478077-57dd-4bd6-933a-7bd04fc42e88"],
            ["translation_id" => "39a56c19-e0d4-4a53-8d27-f52c0af15075", "translatable_type" => "App\Models\Description", "translatable_id" => "00478077-57dd-4bd6-933a-7bd04fc42e88"],
            ["translation_id" => "6b8688c8-3bd1-44d2-8b19-c28d2178b3ad", "translatable_type" => "App\Models\Description", "translatable_id" => "00478077-57dd-4bd6-933a-7bd04fc42e88"],
            //547
            ["translation_id" => "ff4f38ef-12f7-44ac-8dd6-f588b1129a94", "translatable_type" => "App\Models\Description", "translatable_id" => "46163e14-f11a-4ddc-bd1b-24af7708d952"],
            ["translation_id" => "a28be0a5-40b5-45ed-a5a0-afea53ecfa21", "translatable_type" => "App\Models\Description", "translatable_id" => "46163e14-f11a-4ddc-bd1b-24af7708d952"],
            ["translation_id" => "21c9f928-ea32-4b5a-bdd0-0d01ed436761", "translatable_type" => "App\Models\Description", "translatable_id" => "46163e14-f11a-4ddc-bd1b-24af7708d952"],
            //548
            ["translation_id" => "498b1bc1-6cf5-49ff-9a0b-d7dc027d73c5", "translatable_type" => "App\Models\Description", "translatable_id" => "4f997a42-b94b-494c-926c-4e46ca49879e"],
            ["translation_id" => "795ba822-1a66-4ac8-be43-6aa6a163682b", "translatable_type" => "App\Models\Description", "translatable_id" => "4f997a42-b94b-494c-926c-4e46ca49879e"],
            ["translation_id" => "a61ab5a4-7c89-4542-ba90-0ac6105faf89", "translatable_type" => "App\Models\Description", "translatable_id" => "4f997a42-b94b-494c-926c-4e46ca49879e"],
            //549
            ["translation_id" => "f9c29caf-d3fc-473a-9fe1-a259ac84ba7c", "translatable_type" => "App\Models\Description", "translatable_id" => "c41642e2-3f16-4374-8e93-777420c86e55"],
            ["translation_id" => "02b73dcc-c960-4b57-9d96-32eb1fc3b62e", "translatable_type" => "App\Models\Description", "translatable_id" => "c41642e2-3f16-4374-8e93-777420c86e55"],
            ["translation_id" => "a0360497-8923-49e7-92e3-540db439692a", "translatable_type" => "App\Models\Description", "translatable_id" => "c41642e2-3f16-4374-8e93-777420c86e55"],
            //550
            ["translation_id" => "04063d35-988a-42b1-99a2-335b427da871", "translatable_type" => "App\Models\Description", "translatable_id" => "5eee442e-720c-4f0a-a06a-ebf9c89f54f7"],
            ["translation_id" => "40abeca3-3c0d-4d67-8513-2099575605cd", "translatable_type" => "App\Models\Description", "translatable_id" => "5eee442e-720c-4f0a-a06a-ebf9c89f54f7"],
            ["translation_id" => "904ab807-aeb8-40ab-ab83-d426714fcd45", "translatable_type" => "App\Models\Description", "translatable_id" => "5eee442e-720c-4f0a-a06a-ebf9c89f54f7"],
            //551
            ["translation_id" => "28fff5ce-7554-41f5-a2eb-4d22814fb9fd", "translatable_type" => "App\Models\Description", "translatable_id" => "f29c20e5-9a60-478f-9fa9-59ea03f10557"],
            ["translation_id" => "08b2da03-9d26-478e-a058-c7ffac9a71a7", "translatable_type" => "App\Models\Description", "translatable_id" => "f29c20e5-9a60-478f-9fa9-59ea03f10557"],
            ["translation_id" => "f375d990-df8a-471e-8e93-9bf241e7fcaf", "translatable_type" => "App\Models\Description", "translatable_id" => "f29c20e5-9a60-478f-9fa9-59ea03f10557"],
            //552
            ["translation_id" => "39caa47a-a259-4796-a319-73faa4b5b1a0", "translatable_type" => "App\Models\Description", "translatable_id" => "4ffc6e31-fc6b-4adc-a2c2-5e8a6e88899a"],
            ["translation_id" => "08a03233-4405-4bbc-9388-9af1ff10d74c", "translatable_type" => "App\Models\Description", "translatable_id" => "4ffc6e31-fc6b-4adc-a2c2-5e8a6e88899a"],
            ["translation_id" => "574f0ccd-14fd-4ae9-8241-bc5cbeb5b0d3", "translatable_type" => "App\Models\Description", "translatable_id" => "4ffc6e31-fc6b-4adc-a2c2-5e8a6e88899a"],
            //553
            ["translation_id" => "10b0b6f8-f547-4f74-a44f-9740f2246355", "translatable_type" => "App\Models\Description", "translatable_id" => "dbdb26e5-951f-4e3c-aa92-c39a15db3d2e"],
            ["translation_id" => "4e0b3c26-88cb-491d-ae58-5fc752c851ad", "translatable_type" => "App\Models\Description", "translatable_id" => "dbdb26e5-951f-4e3c-aa92-c39a15db3d2e"],
            ["translation_id" => "d83b9529-0c3e-4036-b87b-e445af42e308", "translatable_type" => "App\Models\Description", "translatable_id" => "dbdb26e5-951f-4e3c-aa92-c39a15db3d2e"],
            //554
            ["translation_id" => "76c79004-76c6-4fe3-b46c-4bae01dc06fa", "translatable_type" => "App\Models\Description", "translatable_id" => "61a73c80-45e2-42e5-8aa7-8152de53053d"],
            ["translation_id" => "1b570a2f-17a6-47e0-8e39-072fd2c88dc6", "translatable_type" => "App\Models\Description", "translatable_id" => "61a73c80-45e2-42e5-8aa7-8152de53053d"],
            ["translation_id" => "124aae26-6a2b-4e42-9e3e-6f1fc14d2ce3", "translatable_type" => "App\Models\Description", "translatable_id" => "61a73c80-45e2-42e5-8aa7-8152de53053d"],
            //555
            ["translation_id" => "c6259660-804a-47ee-9c1f-1ea9beb796d3", "translatable_type" => "App\Models\Description", "translatable_id" => "ede5d507-82e1-45d5-84fc-5b60f267f6bb"],
            ["translation_id" => "859bb843-3b61-48f2-a020-a4f6e4351f27", "translatable_type" => "App\Models\Description", "translatable_id" => "ede5d507-82e1-45d5-84fc-5b60f267f6bb"],
            ["translation_id" => "8abbc4f4-5718-4a26-84ce-f97481c2d5e8", "translatable_type" => "App\Models\Description", "translatable_id" => "ede5d507-82e1-45d5-84fc-5b60f267f6bb"],
            //556
            ["translation_id" => "e1c5749c-999d-4dd2-b1b7-03e9b83b6b81", "translatable_type" => "App\Models\Description", "translatable_id" => "db773c55-8bf2-4211-be03-1a0a625492cc"],
            ["translation_id" => "248b1da7-3046-4c8a-9c6f-5e37f8e4d5bb", "translatable_type" => "App\Models\Description", "translatable_id" => "db773c55-8bf2-4211-be03-1a0a625492cc"],
            ["translation_id" => "2411b96f-832f-4c38-a8a8-3c96fec10d02", "translatable_type" => "App\Models\Description", "translatable_id" => "db773c55-8bf2-4211-be03-1a0a625492cc"],
            //557
            ["translation_id" => "372f4084-ff29-4823-8154-4e2b9241dec8", "translatable_type" => "App\Models\Description", "translatable_id" => "2358a8b7-6a57-4f0b-b95d-86ec07ee4df4"],
            ["translation_id" => "8c5921dc-fa73-404a-974c-0cc3dcd6e1af", "translatable_type" => "App\Models\Description", "translatable_id" => "2358a8b7-6a57-4f0b-b95d-86ec07ee4df4"],
            ["translation_id" => "bc257df6-0982-49f4-b80e-79294ab78c73", "translatable_type" => "App\Models\Description", "translatable_id" => "2358a8b7-6a57-4f0b-b95d-86ec07ee4df4"],
            //558
            ["translation_id" => "8fb654fc-5680-4e4b-a167-5d924112afbd", "translatable_type" => "App\Models\Description", "translatable_id" => "bc99d7c9-6c95-450e-86ae-58c2bd96f5b5"],
            ["translation_id" => "be607186-af47-45cd-81ea-4a6273434a51", "translatable_type" => "App\Models\Description", "translatable_id" => "bc99d7c9-6c95-450e-86ae-58c2bd96f5b5"],
            ["translation_id" => "b917fb1d-5d3f-4679-a569-57f7a8a64214", "translatable_type" => "App\Models\Description", "translatable_id" => "bc99d7c9-6c95-450e-86ae-58c2bd96f5b5"],
            //559
            ["translation_id" => "4540bf4e-67d1-4486-a376-cd9547b26579", "translatable_type" => "App\Models\Description", "translatable_id" => "227eb487-1d69-49a0-884e-bf12cb170a80"],
            ["translation_id" => "44e3fc40-ebbf-45ae-9888-5624e235dec1", "translatable_type" => "App\Models\Description", "translatable_id" => "227eb487-1d69-49a0-884e-bf12cb170a80"],
            ["translation_id" => "e738e1bd-1aee-4528-bedd-e8b4d417a43e", "translatable_type" => "App\Models\Description", "translatable_id" => "227eb487-1d69-49a0-884e-bf12cb170a80"],
            //560
            ["translation_id" => "edd7840a-3914-4d1f-8c0a-892184bf5d67", "translatable_type" => "App\Models\Description", "translatable_id" => "3d772e2c-3a7a-4743-99e3-ae140ad1f4f0"],
            ["translation_id" => "fd9141a3-82c8-424e-ac1c-1de31ce7af62", "translatable_type" => "App\Models\Description", "translatable_id" => "3d772e2c-3a7a-4743-99e3-ae140ad1f4f0"],
            ["translation_id" => "327d6b8b-440c-4b72-899f-ce89aab6c850", "translatable_type" => "App\Models\Description", "translatable_id" => "3d772e2c-3a7a-4743-99e3-ae140ad1f4f0"],
            //561
            ["translation_id" => "1fa8e678-a7e2-462d-9216-ce6d89151b83", "translatable_type" => "App\Models\Description", "translatable_id" => "4a45dce7-8c48-4675-bb92-dcfe6cf6ae37"],
            ["translation_id" => "4b48cd14-8055-4297-97ee-a1d9d6a69bf3", "translatable_type" => "App\Models\Description", "translatable_id" => "4a45dce7-8c48-4675-bb92-dcfe6cf6ae37"],
            ["translation_id" => "8755d668-545e-40de-885b-40fa5f70d6c0", "translatable_type" => "App\Models\Description", "translatable_id" => "4a45dce7-8c48-4675-bb92-dcfe6cf6ae37"],
            //562
            ["translation_id" => "42a2e0f7-fa02-4ca0-b615-0cfb257dc268", "translatable_type" => "App\Models\Description", "translatable_id" => "6973637f-5a43-4118-be5c-9dce6e78462b"],
            ["translation_id" => "419ce3f5-f922-48ff-a799-2edf453eecc1", "translatable_type" => "App\Models\Description", "translatable_id" => "6973637f-5a43-4118-be5c-9dce6e78462b"],
            ["translation_id" => "8109cdec-0ee1-4da3-9b0b-21ee2dc792e9", "translatable_type" => "App\Models\Description", "translatable_id" => "6973637f-5a43-4118-be5c-9dce6e78462b"],
            //563
            ["translation_id" => "3f0bbbf3-2cf6-4b6f-944d-aa4709a56ccc", "translatable_type" => "App\Models\Description", "translatable_id" => "7dac303b-29a8-473d-ba62-1b03116be35c"],
            ["translation_id" => "ca61a50b-ccb6-4bfe-90ef-857ce9cb5e7d", "translatable_type" => "App\Models\Description", "translatable_id" => "7dac303b-29a8-473d-ba62-1b03116be35c"],
            ["translation_id" => "ac5b56f7-f667-4cac-9989-a6ba8afec318", "translatable_type" => "App\Models\Description", "translatable_id" => "7dac303b-29a8-473d-ba62-1b03116be35c"],
            //564
            ["translation_id" => "f1eff007-df04-4a34-ac43-42fdfb321028", "translatable_type" => "App\Models\Description", "translatable_id" => "6ad26f23-e479-4a4b-867d-9e61ec21ab42"],
            ["translation_id" => "8e649df3-d333-43f2-af1f-6bc6ca026d69", "translatable_type" => "App\Models\Description", "translatable_id" => "6ad26f23-e479-4a4b-867d-9e61ec21ab42"],
            ["translation_id" => "c0af34c3-3b18-4fba-895e-49585d3854fd", "translatable_type" => "App\Models\Description", "translatable_id" => "6ad26f23-e479-4a4b-867d-9e61ec21ab42"],
            //565
            ["translation_id" => "6886ce1c-07f6-46d6-9ef1-70441ac9ccdd", "translatable_type" => "App\Models\Description", "translatable_id" => "9bb79180-73d7-4120-b69e-1bf8b13e4f30"],
            ["translation_id" => "a4a1be10-b973-482f-96c4-5e071ad1be94", "translatable_type" => "App\Models\Description", "translatable_id" => "9bb79180-73d7-4120-b69e-1bf8b13e4f30"],
            ["translation_id" => "b6559a85-f7a6-4d8b-95db-c4de54c72133", "translatable_type" => "App\Models\Description", "translatable_id" => "9bb79180-73d7-4120-b69e-1bf8b13e4f30"],
            //566
            ["translation_id" => "8b922cda-ef87-4ed5-b656-6cd9671bfe4d", "translatable_type" => "App\Models\Description", "translatable_id" => "722f68de-3dfb-43ab-9ed0-1b44bd447cec"],
            ["translation_id" => "8fb97782-edd9-4563-a6c9-9640b1c2d90b", "translatable_type" => "App\Models\Description", "translatable_id" => "722f68de-3dfb-43ab-9ed0-1b44bd447cec"],
            ["translation_id" => "e344fb15-8e9a-451a-bb12-5b583b2d8b42", "translatable_type" => "App\Models\Description", "translatable_id" => "722f68de-3dfb-43ab-9ed0-1b44bd447cec"],
            //567
            ["translation_id" => "ef79e570-4bb7-4536-897f-bdd497ce7e00", "translatable_type" => "App\Models\Description", "translatable_id" => "52ec22a0-4a81-4b8d-ba38-bf4be7a4ddd6"],
            ["translation_id" => "6906de97-ccb6-48b6-8d18-be64df1a6eb0", "translatable_type" => "App\Models\Description", "translatable_id" => "52ec22a0-4a81-4b8d-ba38-bf4be7a4ddd6"],
            ["translation_id" => "b47c5a8e-310e-4852-ad5e-be4a0d36b746", "translatable_type" => "App\Models\Description", "translatable_id" => "52ec22a0-4a81-4b8d-ba38-bf4be7a4ddd6"],
            //568
            ["translation_id" => "50b99f3b-a4c9-4dad-84df-306e3d57f269", "translatable_type" => "App\Models\Description", "translatable_id" => "b77ee241-7187-4a1b-8ce4-cac971f43e28"],
            ["translation_id" => "324b5929-89dc-4396-8491-4dbbef6a176e", "translatable_type" => "App\Models\Description", "translatable_id" => "b77ee241-7187-4a1b-8ce4-cac971f43e28"],
            ["translation_id" => "91beb79e-8648-4326-8183-88b0cb1c7684", "translatable_type" => "App\Models\Description", "translatable_id" => "b77ee241-7187-4a1b-8ce4-cac971f43e28"],
            //569
            ["translation_id" => "cecb21ad-ed6a-40d5-ac9a-23304fa601e2", "translatable_type" => "App\Models\Description", "translatable_id" => "fb05f8fa-412d-4456-bfac-03a47b7f95d9"],
            ["translation_id" => "7b701c13-172c-44fc-a030-2f81d6bf00fe", "translatable_type" => "App\Models\Description", "translatable_id" => "fb05f8fa-412d-4456-bfac-03a47b7f95d9"],
            ["translation_id" => "60c1723f-9de3-420d-8feb-c79d8e1e012b", "translatable_type" => "App\Models\Description", "translatable_id" => "fb05f8fa-412d-4456-bfac-03a47b7f95d9"],
            //570
            ["translation_id" => "2cb3aa22-bf1d-49b3-8de6-0560cf99b73e", "translatable_type" => "App\Models\Description", "translatable_id" => "193a0bdf-43ce-42f0-9ef2-f2188e0a2e61"],
            ["translation_id" => "b0c98fb6-5292-4fbf-b611-e66e8000a822", "translatable_type" => "App\Models\Description", "translatable_id" => "193a0bdf-43ce-42f0-9ef2-f2188e0a2e61"],
            ["translation_id" => "d2ef3c59-237d-4fd6-a5e5-590a15f1ee54", "translatable_type" => "App\Models\Description", "translatable_id" => "193a0bdf-43ce-42f0-9ef2-f2188e0a2e61"],
            //571
            ["translation_id" => "2831ef62-62c4-44ed-ad62-3cc7fde6ecab", "translatable_type" => "App\Models\Description", "translatable_id" => "f58f0f10-531d-483f-9518-a9347bb725d0"],
            ["translation_id" => "e80c5da8-3a4e-48cd-8df4-bbc22f2780ea", "translatable_type" => "App\Models\Description", "translatable_id" => "f58f0f10-531d-483f-9518-a9347bb725d0"],
            ["translation_id" => "347a3d0c-6592-46ed-a18d-e2f57f121a05", "translatable_type" => "App\Models\Description", "translatable_id" => "f58f0f10-531d-483f-9518-a9347bb725d0"],
            //572
            ["translation_id" => "48fe3e59-04da-4827-95a8-21d661e36f87", "translatable_type" => "App\Models\Description", "translatable_id" => "045cbe54-47a3-4b84-b5a3-747766512e84"],
            ["translation_id" => "5dff9795-0ec0-41b2-a04a-3cba69bc75f7", "translatable_type" => "App\Models\Description", "translatable_id" => "045cbe54-47a3-4b84-b5a3-747766512e84"],
            ["translation_id" => "8d0dc6f3-4733-4bb6-b9ec-43be39cf5ba7", "translatable_type" => "App\Models\Description", "translatable_id" => "045cbe54-47a3-4b84-b5a3-747766512e84"],
            //573
            ["translation_id" => "adf919db-c3da-4ab3-9a08-fa0abb33f48e", "translatable_type" => "App\Models\Description", "translatable_id" => "29263c35-9238-4cf4-91df-0c26300899d6"],
            ["translation_id" => "461f1df7-61eb-4c23-aa7e-5a1aad0a2006", "translatable_type" => "App\Models\Description", "translatable_id" => "29263c35-9238-4cf4-91df-0c26300899d6"],
            ["translation_id" => "00bd193e-b7d6-4b17-a4f1-77435ef0bae6", "translatable_type" => "App\Models\Description", "translatable_id" => "29263c35-9238-4cf4-91df-0c26300899d6"],
            //574
            ["translation_id" => "9b0b1b46-b157-4c4f-8022-1a038aae355d", "translatable_type" => "App\Models\Description", "translatable_id" => "b4449810-7caf-4875-bfda-189ea2c16311"],
            ["translation_id" => "c330a469-c040-4dff-8981-79826f84d911", "translatable_type" => "App\Models\Description", "translatable_id" => "b4449810-7caf-4875-bfda-189ea2c16311"],
            ["translation_id" => "6f6d91c7-c85d-4e19-b3b3-a4502cc6a6f0", "translatable_type" => "App\Models\Description", "translatable_id" => "b4449810-7caf-4875-bfda-189ea2c16311"],
            //575
            ["translation_id" => "e33b4e0f-857f-4e6f-89cf-f152a5e6f32f", "translatable_type" => "App\Models\Description", "translatable_id" => "f1afc2c2-409c-4ea3-970d-d7f993659cea"],
            ["translation_id" => "b10360ed-5955-485c-9ad0-81e2bc989667", "translatable_type" => "App\Models\Description", "translatable_id" => "f1afc2c2-409c-4ea3-970d-d7f993659cea"],
            ["translation_id" => "bf342672-eb78-4239-8393-c883496c3bed", "translatable_type" => "App\Models\Description", "translatable_id" => "f1afc2c2-409c-4ea3-970d-d7f993659cea"],
            //576
            ["translation_id" => "ead526a0-21d4-4755-a9e2-331621f69332", "translatable_type" => "App\Models\Description", "translatable_id" => "236818ed-a2d8-4efa-9a08-c2df7810ce5b"],
            ["translation_id" => "68c319ba-efff-4bb5-9b42-10bfbbeb1236", "translatable_type" => "App\Models\Description", "translatable_id" => "236818ed-a2d8-4efa-9a08-c2df7810ce5b"],
            ["translation_id" => "0f2f1a26-d258-45d7-9c4d-53e0532ad2b4", "translatable_type" => "App\Models\Description", "translatable_id" => "236818ed-a2d8-4efa-9a08-c2df7810ce5b"],
            //577
            ["translation_id" => "ab5ac347-8541-45fa-a299-04690a4f94b9", "translatable_type" => "App\Models\Description", "translatable_id" => "e8aa9a7c-7fc7-4659-86fe-c98508bdcd82"],
            ["translation_id" => "7722485b-6e3f-4138-b4a7-1979972e6351", "translatable_type" => "App\Models\Description", "translatable_id" => "e8aa9a7c-7fc7-4659-86fe-c98508bdcd82"],
            ["translation_id" => "9f06380c-048b-466d-a838-75be79732ad3", "translatable_type" => "App\Models\Description", "translatable_id" => "e8aa9a7c-7fc7-4659-86fe-c98508bdcd82"],
            //578
            ["translation_id" => "8be9b895-b416-4a74-8428-5910dbbb7581", "translatable_type" => "App\Models\Description", "translatable_id" => "5b61bfdc-283e-49af-b049-4019eaf321b5"],
            ["translation_id" => "1b8df08a-d4b0-4db2-ab83-365f4a0e5610", "translatable_type" => "App\Models\Description", "translatable_id" => "5b61bfdc-283e-49af-b049-4019eaf321b5"],
            ["translation_id" => "37d4cc9f-755e-4a01-9188-ec069683fd80", "translatable_type" => "App\Models\Description", "translatable_id" => "5b61bfdc-283e-49af-b049-4019eaf321b5"],
            //579
            ["translation_id" => "4aad1bea-8394-4ec4-bfb2-0158d57d2ae7", "translatable_type" => "App\Models\Description", "translatable_id" => "675c6599-b732-425f-aca6-019e65b54152"],
            ["translation_id" => "d44a298f-eb24-47a1-943e-3253668aa67f", "translatable_type" => "App\Models\Description", "translatable_id" => "675c6599-b732-425f-aca6-019e65b54152"],
            ["translation_id" => "4b88b681-0529-469d-9289-9ec61fa5f84d", "translatable_type" => "App\Models\Description", "translatable_id" => "675c6599-b732-425f-aca6-019e65b54152"],
            //580
            ["translation_id" => "f308b0e6-deb3-443c-840e-66e5ba1103ac", "translatable_type" => "App\Models\Description", "translatable_id" => "43680e8b-68a3-47c6-88af-5b467f9003c2"],
            ["translation_id" => "22907063-238f-4459-b16d-c75140a7f9dc", "translatable_type" => "App\Models\Description", "translatable_id" => "43680e8b-68a3-47c6-88af-5b467f9003c2"],
            ["translation_id" => "4aa3433b-75b8-48b0-86ff-f25a83d4cdd4", "translatable_type" => "App\Models\Description", "translatable_id" => "43680e8b-68a3-47c6-88af-5b467f9003c2"],
            //581
            ["translation_id" => "567044a9-b1ab-445b-8090-88d0ece116f7", "translatable_type" => "App\Models\Description", "translatable_id" => "b44beb4e-29c0-4d67-88aa-0a5c804a9321"],
            ["translation_id" => "8257a7d1-69ec-4fd8-be94-831d2d1866d1", "translatable_type" => "App\Models\Description", "translatable_id" => "b44beb4e-29c0-4d67-88aa-0a5c804a9321"],
            ["translation_id" => "deab31a0-dad3-4edc-8387-b3d53e30a27f", "translatable_type" => "App\Models\Description", "translatable_id" => "b44beb4e-29c0-4d67-88aa-0a5c804a9321"],
            //582
            ["translation_id" => "f1ca1918-9055-45bf-b55b-5adf468f46ad", "translatable_type" => "App\Models\Description", "translatable_id" => "6301ae70-1523-43f8-b93f-f24e16ce43f6"],
            ["translation_id" => "2a11afd9-a583-4a3b-892f-5bc06d9953a8", "translatable_type" => "App\Models\Description", "translatable_id" => "6301ae70-1523-43f8-b93f-f24e16ce43f6"],
            ["translation_id" => "f3f493b0-ce4a-46a5-9ec9-a7f34eb29111", "translatable_type" => "App\Models\Description", "translatable_id" => "6301ae70-1523-43f8-b93f-f24e16ce43f6"],
            //583
            ["translation_id" => "1d19103f-5db4-400d-8a9d-fa2e19d3a368", "translatable_type" => "App\Models\Description", "translatable_id" => "bfceb1e5-328f-4473-830e-9f1efefec61a"],
            ["translation_id" => "a10d2b22-5a5e-469a-b131-f534a447c097", "translatable_type" => "App\Models\Description", "translatable_id" => "bfceb1e5-328f-4473-830e-9f1efefec61a"],
            ["translation_id" => "c0d1925d-b00e-4886-ac33-173cdfb02651", "translatable_type" => "App\Models\Description", "translatable_id" => "bfceb1e5-328f-4473-830e-9f1efefec61a"],
            //584
            ["translation_id" => "4e06d3d8-f6e7-425a-b971-b7c3f401ca09", "translatable_type" => "App\Models\Description", "translatable_id" => "8dc1b3fb-fdc5-400b-8298-1247e04844f6"],
            ["translation_id" => "74a0a08a-7533-463a-ba38-9e1ce97a73f1", "translatable_type" => "App\Models\Description", "translatable_id" => "8dc1b3fb-fdc5-400b-8298-1247e04844f6"],
            ["translation_id" => "4e05991e-40c2-4e4a-b927-ee4f8a181ea5", "translatable_type" => "App\Models\Description", "translatable_id" => "8dc1b3fb-fdc5-400b-8298-1247e04844f6"],
            //585
            ["translation_id" => "309145a0-9cdc-4ee7-af2a-0d0b8213689d", "translatable_type" => "App\Models\Description", "translatable_id" => "d2a65cd7-857b-47da-b82b-631350742ead"],
            ["translation_id" => "176e3f42-dac1-4756-9efa-e2e5a0f22c72", "translatable_type" => "App\Models\Description", "translatable_id" => "d2a65cd7-857b-47da-b82b-631350742ead"],
            ["translation_id" => "3656c9b4-1d3e-46cf-8749-49f9c13cb544", "translatable_type" => "App\Models\Description", "translatable_id" => "d2a65cd7-857b-47da-b82b-631350742ead"],
            //586
            ["translation_id" => "4111c188-4649-419a-b75c-c6df05563c17", "translatable_type" => "App\Models\Description", "translatable_id" => "fe6a1787-3e48-47aa-a87d-ba16183c4e40"],
            ["translation_id" => "e47d6f64-f70d-4a32-96fd-f8dad0c8a746", "translatable_type" => "App\Models\Description", "translatable_id" => "fe6a1787-3e48-47aa-a87d-ba16183c4e40"],
            ["translation_id" => "b962b434-f472-4703-bb26-1f7ceb396a86", "translatable_type" => "App\Models\Description", "translatable_id" => "fe6a1787-3e48-47aa-a87d-ba16183c4e40"],
            //587
            ["translation_id" => "4a74278e-0ceb-4e5b-836a-9cddd37d4687", "translatable_type" => "App\Models\Description", "translatable_id" => "67b5c16a-ce7e-40a8-a58e-6f77ff8f3890"],
            ["translation_id" => "f6dcb96e-77f5-4022-b2fd-13d7463deec4", "translatable_type" => "App\Models\Description", "translatable_id" => "67b5c16a-ce7e-40a8-a58e-6f77ff8f3890"],
            ["translation_id" => "ba79abd5-462a-4baf-b9da-8ceb242f8ab3", "translatable_type" => "App\Models\Description", "translatable_id" => "67b5c16a-ce7e-40a8-a58e-6f77ff8f3890"],
            //588
            ["translation_id" => "18bf475d-674d-41f4-8a71-eaefee35dbb5", "translatable_type" => "App\Models\Description", "translatable_id" => "04c04d6e-8499-47c2-9ae3-4c125e1d3d89"],
            ["translation_id" => "1258601d-6ea7-4b47-9b2d-1964e80e136e", "translatable_type" => "App\Models\Description", "translatable_id" => "04c04d6e-8499-47c2-9ae3-4c125e1d3d89"],
            ["translation_id" => "547f0e37-e152-4e75-b3d3-91558a4e1004", "translatable_type" => "App\Models\Description", "translatable_id" => "04c04d6e-8499-47c2-9ae3-4c125e1d3d89"],
            //589
            ["translation_id" => "5fd60ef5-92bd-4d80-af5f-3fdcdc880526", "translatable_type" => "App\Models\Description", "translatable_id" => "7e1879ea-b5d6-4c3f-8207-057c1705ae9b"],
            ["translation_id" => "1e37aeec-d4e5-4ce7-bd88-74bbad216e59", "translatable_type" => "App\Models\Description", "translatable_id" => "7e1879ea-b5d6-4c3f-8207-057c1705ae9b"],
            ["translation_id" => "2e56acb4-5da1-459b-b6b1-422154a4724e", "translatable_type" => "App\Models\Description", "translatable_id" => "7e1879ea-b5d6-4c3f-8207-057c1705ae9b"],
            //590
            ["translation_id" => "32f6acc6-0c67-4ca9-8c4e-f39f1349751a", "translatable_type" => "App\Models\Description", "translatable_id" => "34e517cd-7f9c-4180-8001-1d0fafe585a9"],
            ["translation_id" => "9628a12c-a20a-4f93-9797-6a3d03e2618b", "translatable_type" => "App\Models\Description", "translatable_id" => "34e517cd-7f9c-4180-8001-1d0fafe585a9"],
            ["translation_id" => "da0cf32a-d218-4d94-9d7d-85b96c5bd792", "translatable_type" => "App\Models\Description", "translatable_id" => "34e517cd-7f9c-4180-8001-1d0fafe585a9"],
            //591
            ["translation_id" => "47da47d1-e249-4d37-aa3b-6818bafa130c", "translatable_type" => "App\Models\Description", "translatable_id" => "13bb9df0-1374-455d-b813-6eff991cf35f"],
            ["translation_id" => "dbb0338d-f9a1-4c13-a853-8a2422fb396f", "translatable_type" => "App\Models\Description", "translatable_id" => "13bb9df0-1374-455d-b813-6eff991cf35f"],
            ["translation_id" => "06b488cf-2eab-4d0f-baf0-63dbd098e7df", "translatable_type" => "App\Models\Description", "translatable_id" => "13bb9df0-1374-455d-b813-6eff991cf35f"],
            //592
            ["translation_id" => "e7e1f757-d2a1-4374-a164-198c2c18060d", "translatable_type" => "App\Models\Description", "translatable_id" => "a4c65221-bee0-4908-8826-d252a687b844"],
            ["translation_id" => "cd207784-6418-4c2c-9cc3-7bc279ef60b5", "translatable_type" => "App\Models\Description", "translatable_id" => "a4c65221-bee0-4908-8826-d252a687b844"],
            ["translation_id" => "3c596cb2-bab0-4ccf-91a2-5d8eb25840f7", "translatable_type" => "App\Models\Description", "translatable_id" => "a4c65221-bee0-4908-8826-d252a687b844"],
            //593
            ["translation_id" => "be26a78c-37a6-4ee8-b0be-8db1167d48a2", "translatable_type" => "App\Models\Description", "translatable_id" => "dd715b9c-1c49-4395-a9f3-018899df5f76"],
            ["translation_id" => "cba25401-0a6a-457e-8e20-8f04d1aa618e", "translatable_type" => "App\Models\Description", "translatable_id" => "dd715b9c-1c49-4395-a9f3-018899df5f76"],
            ["translation_id" => "040d1b1f-3951-4e71-adb4-90ce1b650fac", "translatable_type" => "App\Models\Description", "translatable_id" => "dd715b9c-1c49-4395-a9f3-018899df5f76"],
            //594
            ["translation_id" => "5253c0fa-f3e1-43a0-924a-5030ea75a032", "translatable_type" => "App\Models\Description", "translatable_id" => "8e797c79-fff5-41ed-8774-1c544c97ef9b"],
            ["translation_id" => "ea886433-49e4-42be-a682-59236cc4f9bf", "translatable_type" => "App\Models\Description", "translatable_id" => "8e797c79-fff5-41ed-8774-1c544c97ef9b"],
            ["translation_id" => "7e6ba4bc-7d91-4675-a7f1-ab915c572deb", "translatable_type" => "App\Models\Description", "translatable_id" => "8e797c79-fff5-41ed-8774-1c544c97ef9b"],
            //595
            ["translation_id" => "9d2abdd2-ae29-4db1-bd4e-600c2cc41302", "translatable_type" => "App\Models\Description", "translatable_id" => "3a128b96-de3c-455f-97d6-6f7426c331e7"],
            ["translation_id" => "ec2304d5-8778-4439-ba76-1520a694deda", "translatable_type" => "App\Models\Description", "translatable_id" => "3a128b96-de3c-455f-97d6-6f7426c331e7"],
            ["translation_id" => "75c15274-3b86-4b6b-aec1-9fe47f05e026", "translatable_type" => "App\Models\Description", "translatable_id" => "3a128b96-de3c-455f-97d6-6f7426c331e7"],
            //596
            ["translation_id" => "a69f7bf6-7515-4dee-9e50-d735a629ae5a", "translatable_type" => "App\Models\Description", "translatable_id" => "e9014ffe-da7f-40b1-a918-d31f2610fee5"],
            ["translation_id" => "a16c13cd-0a3b-4d6a-b17a-c21bc3ae4f46", "translatable_type" => "App\Models\Description", "translatable_id" => "e9014ffe-da7f-40b1-a918-d31f2610fee5"],
            ["translation_id" => "b21e2857-f268-4e79-9466-a1b512de41bc", "translatable_type" => "App\Models\Description", "translatable_id" => "e9014ffe-da7f-40b1-a918-d31f2610fee5"],
            //597
            ["translation_id" => "87e141a4-46bb-430f-b92b-d146ed0d52df", "translatable_type" => "App\Models\Description", "translatable_id" => "d05a427e-c070-4d9b-b74e-245884b3a461"],
            ["translation_id" => "bc0eff9b-955e-4553-941a-94395e753ede", "translatable_type" => "App\Models\Description", "translatable_id" => "d05a427e-c070-4d9b-b74e-245884b3a461"],
            ["translation_id" => "177bc663-f69e-4824-a700-8e38594632da", "translatable_type" => "App\Models\Description", "translatable_id" => "d05a427e-c070-4d9b-b74e-245884b3a461"],
            //598
            ["translation_id" => "f701f8cf-3169-48f8-a10f-bc3d1816bb02", "translatable_type" => "App\Models\Description", "translatable_id" => "b751ce1a-3722-49e0-b048-2a16bd609834"],
            ["translation_id" => "47c8f911-9073-43cf-826b-84a8c11a8db5", "translatable_type" => "App\Models\Description", "translatable_id" => "b751ce1a-3722-49e0-b048-2a16bd609834"],
            ["translation_id" => "cb9a4fac-59e6-40c2-8dd5-c52afb0db8f4", "translatable_type" => "App\Models\Description", "translatable_id" => "b751ce1a-3722-49e0-b048-2a16bd609834"],
            //599
            ["translation_id" => "6f5866ba-a87b-411a-9fb2-03cc1b66935a", "translatable_type" => "App\Models\Description", "translatable_id" => "3e4284b9-66c3-4761-98e5-d9e0df9a2ee3"],
            ["translation_id" => "d6ed509f-d4d5-4f85-8c65-486215b6d1e7", "translatable_type" => "App\Models\Description", "translatable_id" => "3e4284b9-66c3-4761-98e5-d9e0df9a2ee3"],
            ["translation_id" => "d8ea0456-fee5-43d0-bd57-eb181250cfd1", "translatable_type" => "App\Models\Description", "translatable_id" => "3e4284b9-66c3-4761-98e5-d9e0df9a2ee3"],
            //600
            ["translation_id" => "64964951-8d5c-40bd-954f-1daeffd09aae", "translatable_type" => "App\Models\Description", "translatable_id" => "c67f99c6-40ee-4bc1-ba8f-bcf7c391f6eb"],
            ["translation_id" => "8e823ab8-b23c-4c18-ac06-d30f95d80d43", "translatable_type" => "App\Models\Description", "translatable_id" => "c67f99c6-40ee-4bc1-ba8f-bcf7c391f6eb"],
            ["translation_id" => "4a93494f-9564-4c81-bbd4-d8c4d065a670", "translatable_type" => "App\Models\Description", "translatable_id" => "c67f99c6-40ee-4bc1-ba8f-bcf7c391f6eb"],
            //601
            ["translation_id" => "f202bbc3-4aa1-48ef-99e7-9c7d66ac89d6", "translatable_type" => "App\Models\Description", "translatable_id" => "91863990-2175-48bc-b0ec-b65220c3feef"],
            ["translation_id" => "cb5d430b-0f5d-46bf-9e7c-bdbb75a5e83a", "translatable_type" => "App\Models\Description", "translatable_id" => "91863990-2175-48bc-b0ec-b65220c3feef"],
            ["translation_id" => "7bf1b17e-09cc-4ea4-8c05-35d8beec29f9", "translatable_type" => "App\Models\Description", "translatable_id" => "91863990-2175-48bc-b0ec-b65220c3feef"],
            //602
            ["translation_id" => "2d042cdf-c0b6-47f2-8746-b1cbfec79ad7", "translatable_type" => "App\Models\Description", "translatable_id" => "27a95d82-2391-46c0-ae41-8ed6a002af9e"],
            ["translation_id" => "05cb3461-5aab-4256-88e7-e74cc4499ea0", "translatable_type" => "App\Models\Description", "translatable_id" => "27a95d82-2391-46c0-ae41-8ed6a002af9e"],
            ["translation_id" => "b41db7cb-acf8-4a27-9ed9-f037490b267e", "translatable_type" => "App\Models\Description", "translatable_id" => "27a95d82-2391-46c0-ae41-8ed6a002af9e"],
            //603
            ["translation_id" => "4720405e-53ad-4112-aeff-4553093b857b", "translatable_type" => "App\Models\Description", "translatable_id" => "5125f4ed-820a-4321-b3fa-1698e18e2a20"],
            ["translation_id" => "0559b156-3f29-4bf1-a208-2ddc2d6bc6d2", "translatable_type" => "App\Models\Description", "translatable_id" => "5125f4ed-820a-4321-b3fa-1698e18e2a20"],
            ["translation_id" => "203f2b44-b097-41d8-aafa-4ea0c979b4b1", "translatable_type" => "App\Models\Description", "translatable_id" => "5125f4ed-820a-4321-b3fa-1698e18e2a20"],
            //604
            ["translation_id" => "7437e90e-7095-4241-9e5a-99f3af3e013e", "translatable_type" => "App\Models\Description", "translatable_id" => "d3a0ef28-c9b1-46a8-ae8d-bb4bb372d933"],
            ["translation_id" => "e2e5d733-495f-422e-a166-edaa1cc8bd69", "translatable_type" => "App\Models\Description", "translatable_id" => "d3a0ef28-c9b1-46a8-ae8d-bb4bb372d933"],
            ["translation_id" => "d6e82654-67d5-4ffb-8091-a65a11dccc9c", "translatable_type" => "App\Models\Description", "translatable_id" => "d3a0ef28-c9b1-46a8-ae8d-bb4bb372d933"],
            //605
            ["translation_id" => "e1072d09-2c35-4485-a6ed-25c0164e2c6c", "translatable_type" => "App\Models\Description", "translatable_id" => "37819af6-e065-4978-a263-349393625af4"],
            ["translation_id" => "8d763615-9505-4658-9961-4029e1335b24", "translatable_type" => "App\Models\Description", "translatable_id" => "37819af6-e065-4978-a263-349393625af4"],
            ["translation_id" => "81193aed-8ebf-4122-b2ad-7ca0347cfb9b", "translatable_type" => "App\Models\Description", "translatable_id" => "37819af6-e065-4978-a263-349393625af4"],
            //606
            ["translation_id" => "6c1637a3-9f2e-4feb-8ade-3440456c04b1", "translatable_type" => "App\Models\Description", "translatable_id" => "d8ced050-ebbf-44e0-a00e-7791999bfb5d"],
            ["translation_id" => "e9b9f5e1-abeb-4642-889e-6851573340c5", "translatable_type" => "App\Models\Description", "translatable_id" => "d8ced050-ebbf-44e0-a00e-7791999bfb5d"],
            ["translation_id" => "be747d59-7136-4092-8761-e23e8782ce6e", "translatable_type" => "App\Models\Description", "translatable_id" => "d8ced050-ebbf-44e0-a00e-7791999bfb5d"],
            //607
            ["translation_id" => "5732a4b8-ac1b-424b-981c-89e5ff04cb45", "translatable_type" => "App\Models\Description", "translatable_id" => "0ac925be-b09b-4dc1-80fd-978ccc8d4fea"],
            ["translation_id" => "42fd515b-9aca-43ef-bd7e-b242688bc322", "translatable_type" => "App\Models\Description", "translatable_id" => "0ac925be-b09b-4dc1-80fd-978ccc8d4fea"],
            ["translation_id" => "39bd82d5-d746-4e9f-bbd4-06cfd6e207cd", "translatable_type" => "App\Models\Description", "translatable_id" => "0ac925be-b09b-4dc1-80fd-978ccc8d4fea"],
            //608
            ["translation_id" => "32c6c6c3-340f-4443-ba40-e44b29e93039", "translatable_type" => "App\Models\Description", "translatable_id" => "f7278867-a781-47bc-a2da-e5079726cf58"],
            ["translation_id" => "1e0070f7-50e5-4368-8364-5d838aee89b3", "translatable_type" => "App\Models\Description", "translatable_id" => "f7278867-a781-47bc-a2da-e5079726cf58"],
            ["translation_id" => "62cbbba3-3ca8-4d00-a81b-24ea2a5a4980", "translatable_type" => "App\Models\Description", "translatable_id" => "f7278867-a781-47bc-a2da-e5079726cf58"],
            //609
            ["translation_id" => "c768f686-c3fd-43c5-9e0e-6c6a5dc440e0", "translatable_type" => "App\Models\Description", "translatable_id" => "9bece740-5e8d-444a-9056-bc36cadef804"],
            ["translation_id" => "b6ab81a4-654f-440b-8c89-3b0243d20998", "translatable_type" => "App\Models\Description", "translatable_id" => "9bece740-5e8d-444a-9056-bc36cadef804"],
            ["translation_id" => "7deaa540-08a0-4fe5-b680-09c2bf2a28b5", "translatable_type" => "App\Models\Description", "translatable_id" => "9bece740-5e8d-444a-9056-bc36cadef804"],
            //610
            ["translation_id" => "d9609614-564c-4923-8c5c-9215bc77798a", "translatable_type" => "App\Models\Description", "translatable_id" => "466e8de2-96fd-479f-bcc8-9c9de7e65dd2"],
            ["translation_id" => "d1cdea32-2f3d-4d47-ad14-cc49a63754a6", "translatable_type" => "App\Models\Description", "translatable_id" => "466e8de2-96fd-479f-bcc8-9c9de7e65dd2"],
            ["translation_id" => "81859c28-376f-4ac5-bfed-5003f95ebaa6", "translatable_type" => "App\Models\Description", "translatable_id" => "466e8de2-96fd-479f-bcc8-9c9de7e65dd2"],
            //611
            ["translation_id" => "5860061d-6f78-409a-afe9-e69c219ed091", "translatable_type" => "App\Models\Description", "translatable_id" => "c5c007e1-d059-4111-9aa7-7c5c0743aa3e"],
            ["translation_id" => "fd522f60-9d43-450e-8514-683ff3e52fc3", "translatable_type" => "App\Models\Description", "translatable_id" => "c5c007e1-d059-4111-9aa7-7c5c0743aa3e"],
            ["translation_id" => "f4ecff67-5c01-46ac-8fce-f251696d4f9a", "translatable_type" => "App\Models\Description", "translatable_id" => "c5c007e1-d059-4111-9aa7-7c5c0743aa3e"],
            //612
            ["translation_id" => "b73e9c6a-dd55-4494-a1d5-984650fcc50d", "translatable_type" => "App\Models\Description", "translatable_id" => "6cab462f-9c0a-4fa6-87ab-46c65679e99a"],
            ["translation_id" => "f5decdd5-0705-40ff-aed3-907e037a17fb", "translatable_type" => "App\Models\Description", "translatable_id" => "6cab462f-9c0a-4fa6-87ab-46c65679e99a"],
            ["translation_id" => "128928e6-7b72-4ccf-a2eb-9b36052d578f", "translatable_type" => "App\Models\Description", "translatable_id" => "6cab462f-9c0a-4fa6-87ab-46c65679e99a"],
            //613
            ["translation_id" => "38fe8478-0d04-490d-8826-5233078cf0c4", "translatable_type" => "App\Models\Description", "translatable_id" => "e4795924-ab76-4e30-9683-e72df971e247"],
            ["translation_id" => "1c15b940-ee35-40f7-b825-71973547b80b", "translatable_type" => "App\Models\Description", "translatable_id" => "e4795924-ab76-4e30-9683-e72df971e247"],
            ["translation_id" => "1b7b6084-1a61-40b9-a89a-c780d34b9dcd", "translatable_type" => "App\Models\Description", "translatable_id" => "e4795924-ab76-4e30-9683-e72df971e247"],
            //614
            ["translation_id" => "97d3a04a-13eb-489e-911e-ba4b9fcba8cb", "translatable_type" => "App\Models\Description", "translatable_id" => "eb3c34cd-5833-4978-8c6f-bb6b6d0e4567"],
            ["translation_id" => "1e5d9697-d1b6-46e9-b913-18f827f8babf", "translatable_type" => "App\Models\Description", "translatable_id" => "eb3c34cd-5833-4978-8c6f-bb6b6d0e4567"],
            ["translation_id" => "3069baa6-2ab4-4b66-885e-c18ebce72596", "translatable_type" => "App\Models\Description", "translatable_id" => "eb3c34cd-5833-4978-8c6f-bb6b6d0e4567"],
            //615
            ["translation_id" => "96ca8bfb-936a-49a7-860b-b16a13030849", "translatable_type" => "App\Models\Description", "translatable_id" => "6ae29b30-4a49-4367-a99a-6a26580a3284"],
            ["translation_id" => "680ed5c0-16f6-419b-a6c5-6c17021d440e", "translatable_type" => "App\Models\Description", "translatable_id" => "6ae29b30-4a49-4367-a99a-6a26580a3284"],
            ["translation_id" => "bdfa8274-b580-4e52-8791-6febccb3d650", "translatable_type" => "App\Models\Description", "translatable_id" => "6ae29b30-4a49-4367-a99a-6a26580a3284"],
            //616
            ["translation_id" => "e74eedf1-f82d-4ccb-85f2-16d3d5914e38", "translatable_type" => "App\Models\Description", "translatable_id" => "337d243f-9cf7-4c52-892e-f655100a1187"],
            ["translation_id" => "ed5815c4-149d-4749-9edb-96cceb00f1ae", "translatable_type" => "App\Models\Description", "translatable_id" => "337d243f-9cf7-4c52-892e-f655100a1187"],
            ["translation_id" => "e6b25abd-e519-41cc-838f-1422cd9fe992", "translatable_type" => "App\Models\Description", "translatable_id" => "337d243f-9cf7-4c52-892e-f655100a1187"],
            //617
            ["translation_id" => "ae4e8c53-f011-41d5-ac59-7e6cf8139d17", "translatable_type" => "App\Models\Description", "translatable_id" => "28fcdd46-fd4d-43bf-8459-6f0fc336a934"],
            ["translation_id" => "a3c653f9-5f4b-46ea-8d93-1233cdc2a0a6", "translatable_type" => "App\Models\Description", "translatable_id" => "28fcdd46-fd4d-43bf-8459-6f0fc336a934"],
            ["translation_id" => "9032947e-19e6-42b8-8ef1-9029fbe56ce9", "translatable_type" => "App\Models\Description", "translatable_id" => "28fcdd46-fd4d-43bf-8459-6f0fc336a934"],
            //618
            ["translation_id" => "f7db4aac-7f91-4c30-81b1-b476aeec7940", "translatable_type" => "App\Models\Description", "translatable_id" => "97d2eb02-cd2d-4e07-934a-220b1be223c5"],
            ["translation_id" => "0a8faf2d-5926-4b5d-8392-91333f852d6f", "translatable_type" => "App\Models\Description", "translatable_id" => "97d2eb02-cd2d-4e07-934a-220b1be223c5"],
            ["translation_id" => "a72dae35-3003-4ccd-9979-c2e3d5ab62be", "translatable_type" => "App\Models\Description", "translatable_id" => "97d2eb02-cd2d-4e07-934a-220b1be223c5"],
            //619
            ["translation_id" => "8935b491-5c36-46a8-a47f-0f59dce094da", "translatable_type" => "App\Models\Description", "translatable_id" => "aaa54ddb-73ca-462a-ac21-41080795cc47"],
            ["translation_id" => "2735354e-9a1c-4c05-82e3-34f9733338f5", "translatable_type" => "App\Models\Description", "translatable_id" => "aaa54ddb-73ca-462a-ac21-41080795cc47"],
            ["translation_id" => "b581ac12-91a8-47a9-a469-4d16adcd5687", "translatable_type" => "App\Models\Description", "translatable_id" => "aaa54ddb-73ca-462a-ac21-41080795cc47"],
            //620
            ["translation_id" => "55f0f7dc-b496-4133-a703-26cfc84fc2c8", "translatable_type" => "App\Models\Description", "translatable_id" => "a465ad83-c39f-493b-88f3-5260c0a63f1b"],
            ["translation_id" => "48b29f14-5c92-4d0c-af8e-9c25480395ce", "translatable_type" => "App\Models\Description", "translatable_id" => "a465ad83-c39f-493b-88f3-5260c0a63f1b"],
            ["translation_id" => "ed7633f4-51a1-4878-a8fc-3fa179503574", "translatable_type" => "App\Models\Description", "translatable_id" => "a465ad83-c39f-493b-88f3-5260c0a63f1b"],
            //621
            ["translation_id" => "dc489eb6-0f6d-43db-8644-0013aa00b65d", "translatable_type" => "App\Models\Description", "translatable_id" => "60dceaf6-7dd2-493b-aeed-05eaea908818"],
            ["translation_id" => "3db3ef77-34d1-470b-8e27-9c7ba4e66678", "translatable_type" => "App\Models\Description", "translatable_id" => "60dceaf6-7dd2-493b-aeed-05eaea908818"],
            ["translation_id" => "007553ab-9134-45f1-a75d-e25c70ef8a59", "translatable_type" => "App\Models\Description", "translatable_id" => "60dceaf6-7dd2-493b-aeed-05eaea908818"],
            //622
            ["translation_id" => "91cf7c97-0a3b-4042-959a-e49e368c746d", "translatable_type" => "App\Models\Description", "translatable_id" => "b9ce4622-ab4e-4d10-891a-beca439e8b7e"],
            ["translation_id" => "3f0342e9-1820-45bf-bc58-7d44a6d3434e", "translatable_type" => "App\Models\Description", "translatable_id" => "b9ce4622-ab4e-4d10-891a-beca439e8b7e"],
            ["translation_id" => "48a1b023-25e0-4375-a77e-be10bd4dd92f", "translatable_type" => "App\Models\Description", "translatable_id" => "b9ce4622-ab4e-4d10-891a-beca439e8b7e"],
            //623
            ["translation_id" => "fde95685-effc-4360-9350-fbbf1285c843", "translatable_type" => "App\Models\Description", "translatable_id" => "ee867304-f89c-4208-988a-d827eb95594c"],
            ["translation_id" => "5a64a11f-0797-4d79-b829-a8a09fe20c53", "translatable_type" => "App\Models\Description", "translatable_id" => "ee867304-f89c-4208-988a-d827eb95594c"],
            ["translation_id" => "70858f22-ff0f-4981-b878-587af1f48fdb", "translatable_type" => "App\Models\Description", "translatable_id" => "ee867304-f89c-4208-988a-d827eb95594c"],
            //624
            ["translation_id" => "063bf98a-e5a1-4c8f-a4ca-2e42a2427fed", "translatable_type" => "App\Models\Description", "translatable_id" => "86008b6c-3958-4cc4-b16e-c27486432529"],
            ["translation_id" => "ebad2f67-01c1-4a51-99ed-f85a368fe5ba", "translatable_type" => "App\Models\Description", "translatable_id" => "86008b6c-3958-4cc4-b16e-c27486432529"],
            ["translation_id" => "d3404f7e-f484-468a-b9fe-bd084fb23eae", "translatable_type" => "App\Models\Description", "translatable_id" => "86008b6c-3958-4cc4-b16e-c27486432529"],
            //625
            ["translation_id" => "fa0dd753-6455-44c1-817a-60b149ab7e6d", "translatable_type" => "App\Models\Description", "translatable_id" => "ed266833-2d2a-4464-b4c3-7451098d3c56"],
            ["translation_id" => "fa50f559-04ce-45d2-b187-be5f54f9861d", "translatable_type" => "App\Models\Description", "translatable_id" => "ed266833-2d2a-4464-b4c3-7451098d3c56"],
            ["translation_id" => "4dbb21ef-2f3d-49ea-8479-02334a6647aa", "translatable_type" => "App\Models\Description", "translatable_id" => "ed266833-2d2a-4464-b4c3-7451098d3c56"],
            //626
            ["translation_id" => "6f7c6e04-82cb-4c18-b614-4be5ed0fa0a6", "translatable_type" => "App\Models\Description", "translatable_id" => "807d216a-df8c-4ec5-95be-7d6a4b1d4be2"],
            ["translation_id" => "53bb1f53-ea10-4062-886d-7997d1fdbaf3", "translatable_type" => "App\Models\Description", "translatable_id" => "807d216a-df8c-4ec5-95be-7d6a4b1d4be2"],
            ["translation_id" => "b6e8cb7b-d58f-401a-a058-6790c4ab3329", "translatable_type" => "App\Models\Description", "translatable_id" => "807d216a-df8c-4ec5-95be-7d6a4b1d4be2"],
            //627
            ["translation_id" => "d1563b0a-3fc6-4823-ac7c-73719c126b61", "translatable_type" => "App\Models\Description", "translatable_id" => "100167e9-82ab-48fa-8bf0-93d28f8751d1"],
            ["translation_id" => "8b3cf865-562b-4b7b-a1e3-34b332a70bc1", "translatable_type" => "App\Models\Description", "translatable_id" => "100167e9-82ab-48fa-8bf0-93d28f8751d1"],
            ["translation_id" => "4b8528a2-51bb-4f12-beda-c6be335a7622", "translatable_type" => "App\Models\Description", "translatable_id" => "100167e9-82ab-48fa-8bf0-93d28f8751d1"],
            //628
            ["translation_id" => "44994828-9853-442a-96e0-4084c20114e6", "translatable_type" => "App\Models\Description", "translatable_id" => "6adfd4bb-84d1-4c6e-af51-2c1da489d6f2"],
            ["translation_id" => "90b7c5d5-3c55-4ab5-ac40-d5d62692d2bc", "translatable_type" => "App\Models\Description", "translatable_id" => "6adfd4bb-84d1-4c6e-af51-2c1da489d6f2"],
            ["translation_id" => "52ec72bd-5c89-4a5d-9b5d-149b8308e989", "translatable_type" => "App\Models\Description", "translatable_id" => "6adfd4bb-84d1-4c6e-af51-2c1da489d6f2"],
            //629
            ["translation_id" => "99eaccf4-495b-4e38-9086-831ad38a8703", "translatable_type" => "App\Models\Description", "translatable_id" => "104a29a9-e779-40fc-a2f5-494975add475"],
            ["translation_id" => "74038d3f-a7e3-4754-865a-a96b5c701c31", "translatable_type" => "App\Models\Description", "translatable_id" => "104a29a9-e779-40fc-a2f5-494975add475"],
            ["translation_id" => "33feeaba-d8ff-4541-8727-ca79361a4ef7", "translatable_type" => "App\Models\Description", "translatable_id" => "104a29a9-e779-40fc-a2f5-494975add475"],
            //630
            ["translation_id" => "8c0fee36-d951-4f73-9a6e-7606b4a25680", "translatable_type" => "App\Models\Description", "translatable_id" => "fe7d93c2-723e-42d0-a340-7634c30ecc74"],
            ["translation_id" => "11ff168d-f940-4657-8c00-7ac32dccd166", "translatable_type" => "App\Models\Description", "translatable_id" => "fe7d93c2-723e-42d0-a340-7634c30ecc74"],
            ["translation_id" => "62e14f56-8fcf-49de-a38c-4a7d5fa13fdb", "translatable_type" => "App\Models\Description", "translatable_id" => "fe7d93c2-723e-42d0-a340-7634c30ecc74"],
            //631
            ["translation_id" => "9b6da60c-57a2-44ff-8cba-1c706b907c7c", "translatable_type" => "App\Models\Description", "translatable_id" => "9ce4da5d-95da-4746-8685-4bc519264d4e"],
            ["translation_id" => "336928eb-b54e-40cb-b7f5-99cdf190f86b", "translatable_type" => "App\Models\Description", "translatable_id" => "9ce4da5d-95da-4746-8685-4bc519264d4e"],
            ["translation_id" => "650e3116-5aa3-44dd-812e-33206d557a00", "translatable_type" => "App\Models\Description", "translatable_id" => "9ce4da5d-95da-4746-8685-4bc519264d4e"],
            //632
            ["translation_id" => "73c891d0-9771-4174-aa70-5ffdf07a93e4", "translatable_type" => "App\Models\Description", "translatable_id" => "3d6b05f9-5cbc-4e65-887a-cd39b7456320"],
            ["translation_id" => "38ebc6b9-c70f-418e-b343-38382794dd45", "translatable_type" => "App\Models\Description", "translatable_id" => "3d6b05f9-5cbc-4e65-887a-cd39b7456320"],
            ["translation_id" => "5d35244c-8323-44d1-95ce-4cbbee110264", "translatable_type" => "App\Models\Description", "translatable_id" => "3d6b05f9-5cbc-4e65-887a-cd39b7456320"],
            //633
            ["translation_id" => "6718a18e-1dc4-483a-be80-4dc62a7ec1c5", "translatable_type" => "App\Models\Description", "translatable_id" => "c78cb827-90bb-4e6f-bffc-2dd24ef3cc06"],
            ["translation_id" => "b13c0c4b-2154-49ae-9f1f-0758b2574a4a", "translatable_type" => "App\Models\Description", "translatable_id" => "c78cb827-90bb-4e6f-bffc-2dd24ef3cc06"],
            ["translation_id" => "11f4a7b5-2913-4d7f-97ae-06a045e1e85a", "translatable_type" => "App\Models\Description", "translatable_id" => "c78cb827-90bb-4e6f-bffc-2dd24ef3cc06"],
            //634
            ["translation_id" => "285b340d-1468-4cb5-b4b8-002102c5aadd", "translatable_type" => "App\Models\Description", "translatable_id" => "9e62d54c-63b3-4379-bbe5-41632c471545"],
            ["translation_id" => "014230bc-94c9-4463-9a60-e215aca4ac36", "translatable_type" => "App\Models\Description", "translatable_id" => "9e62d54c-63b3-4379-bbe5-41632c471545"],
            ["translation_id" => "613d2e6c-2e98-43a2-aaa3-7f73333c4541", "translatable_type" => "App\Models\Description", "translatable_id" => "9e62d54c-63b3-4379-bbe5-41632c471545"],
            //635
            ["translation_id" => "00056a60-b86d-4d51-8c8f-c4d9c4fc4606", "translatable_type" => "App\Models\Description", "translatable_id" => "5d53363d-788d-4ea5-95b4-e102c1ca0faf"],
            ["translation_id" => "d10a0f17-f2b2-4508-a6e7-89d7c11f8491", "translatable_type" => "App\Models\Description", "translatable_id" => "5d53363d-788d-4ea5-95b4-e102c1ca0faf"],
            ["translation_id" => "d113bcb8-0e94-4a03-91cd-e9771e0c8c04", "translatable_type" => "App\Models\Description", "translatable_id" => "5d53363d-788d-4ea5-95b4-e102c1ca0faf"],
            //636
            ["translation_id" => "df4cb304-92cf-4c62-879a-71221a66edd0", "translatable_type" => "App\Models\Description", "translatable_id" => "cd79f7f2-48b6-43b5-b8db-31f16324f182"],
            ["translation_id" => "8d96cdf9-dfe4-4e17-a0d9-4cfba41b07da", "translatable_type" => "App\Models\Description", "translatable_id" => "cd79f7f2-48b6-43b5-b8db-31f16324f182"],
            ["translation_id" => "85246471-398f-4261-bc12-dc95d72234bf", "translatable_type" => "App\Models\Description", "translatable_id" => "cd79f7f2-48b6-43b5-b8db-31f16324f182"],
            //637
            ["translation_id" => "252bc313-d485-4808-80cd-33af9ce0dc8e", "translatable_type" => "App\Models\Description", "translatable_id" => "844c7d64-6443-48d7-b8db-2f4f2b64dbd7"],
            ["translation_id" => "a6b01488-d445-43cb-9a39-7fd43f096c09", "translatable_type" => "App\Models\Description", "translatable_id" => "844c7d64-6443-48d7-b8db-2f4f2b64dbd7"],
            ["translation_id" => "4a8a1b4f-46af-4056-99b7-f136aa9468c4", "translatable_type" => "App\Models\Description", "translatable_id" => "844c7d64-6443-48d7-b8db-2f4f2b64dbd7"],
            //638
            ["translation_id" => "2d0b2967-e1ff-4f54-99dc-34b8efd9ba5c", "translatable_type" => "App\Models\Description", "translatable_id" => "b1865bc2-caa7-4af2-8cd8-a03a6c0a87cf"],
            ["translation_id" => "e16c7e1f-ead9-4ec0-b68f-4d5c5d9ad5c3", "translatable_type" => "App\Models\Description", "translatable_id" => "b1865bc2-caa7-4af2-8cd8-a03a6c0a87cf"],
            ["translation_id" => "e828f3de-fd82-47be-924c-2e100dd64f05", "translatable_type" => "App\Models\Description", "translatable_id" => "b1865bc2-caa7-4af2-8cd8-a03a6c0a87cf"],
            //639
            ["translation_id" => "6fe89b5f-1b97-4654-a676-f6a697163b55", "translatable_type" => "App\Models\Description", "translatable_id" => "f11772e2-9a84-4532-be7b-e3657c57a0f1"],
            ["translation_id" => "1ab8c0c8-e78f-4de8-97a5-d11ddfcac7a1", "translatable_type" => "App\Models\Description", "translatable_id" => "f11772e2-9a84-4532-be7b-e3657c57a0f1"],
            ["translation_id" => "db1f6637-a3c6-40e1-b702-96567904cba5", "translatable_type" => "App\Models\Description", "translatable_id" => "f11772e2-9a84-4532-be7b-e3657c57a0f1"],
            //640
            ["translation_id" => "e2fa0792-1e90-46e4-a2fc-429e11b8bd5e", "translatable_type" => "App\Models\Description", "translatable_id" => "aac44de2-4b9b-4f80-a25a-632585749672"],
            ["translation_id" => "42749234-bf59-48e8-aaf1-cf4bb6be0b31", "translatable_type" => "App\Models\Description", "translatable_id" => "aac44de2-4b9b-4f80-a25a-632585749672"],
            ["translation_id" => "3921c422-3d4c-4e40-bd62-57e7f7b8d7c1", "translatable_type" => "App\Models\Description", "translatable_id" => "aac44de2-4b9b-4f80-a25a-632585749672"],
            //641
            ["translation_id" => "ac827f7d-f0c9-44f3-b11f-efcfea096925", "translatable_type" => "App\Models\Description", "translatable_id" => "3be9942d-2561-4516-8132-e33ba7906b26"],
            ["translation_id" => "6d502879-af7e-48da-afec-8ef03dcdeeb0", "translatable_type" => "App\Models\Description", "translatable_id" => "3be9942d-2561-4516-8132-e33ba7906b26"],
            ["translation_id" => "681bd985-9463-4225-8d79-343f57ad7e83", "translatable_type" => "App\Models\Description", "translatable_id" => "3be9942d-2561-4516-8132-e33ba7906b26"],
            //642
            ["translation_id" => "9b321287-ee00-42ca-913c-d50642deb1af", "translatable_type" => "App\Models\Description", "translatable_id" => "2a1dd13a-1ba5-4389-9727-eb58f7b027ca"],
            ["translation_id" => "c9dce777-341c-4f3b-a423-9649be4a6fff", "translatable_type" => "App\Models\Description", "translatable_id" => "2a1dd13a-1ba5-4389-9727-eb58f7b027ca"],
            ["translation_id" => "120447da-d682-4b15-a72d-b9e223a04344", "translatable_type" => "App\Models\Description", "translatable_id" => "2a1dd13a-1ba5-4389-9727-eb58f7b027ca"],
            //643
            ["translation_id" => "0b0710f8-ad77-4f6a-b958-376e6d3d2291", "translatable_type" => "App\Models\Description", "translatable_id" => "3020ca98-51ad-420c-aea9-8856efc70f38"],
            ["translation_id" => "d68d3188-6f41-4771-afb3-c41277850ef0", "translatable_type" => "App\Models\Description", "translatable_id" => "3020ca98-51ad-420c-aea9-8856efc70f38"],
            ["translation_id" => "9fbc4849-340c-4aca-9f59-0ceebda0fd11", "translatable_type" => "App\Models\Description", "translatable_id" => "3020ca98-51ad-420c-aea9-8856efc70f38"],
            //644
            ["translation_id" => "918f0d4e-00f0-4bf8-9d55-feea1308a06b", "translatable_type" => "App\Models\Description", "translatable_id" => "b290c078-5847-4543-a780-acd48287c32a"],
            ["translation_id" => "f176d8ce-912a-4b72-ae8a-e1e94b7529b4", "translatable_type" => "App\Models\Description", "translatable_id" => "b290c078-5847-4543-a780-acd48287c32a"],
            ["translation_id" => "f16e0714-0ee4-4cf0-b0ee-ff06a36b9151", "translatable_type" => "App\Models\Description", "translatable_id" => "b290c078-5847-4543-a780-acd48287c32a"],
            //645
            ["translation_id" => "cc9fd599-d789-45e6-a56e-5aeddb2edaee", "translatable_type" => "App\Models\Description", "translatable_id" => "0f65c2e3-7a40-411b-83f1-e77e99b88395"],
            ["translation_id" => "d4e41f40-a5c0-49a2-94c4-1c0604e80ec9", "translatable_type" => "App\Models\Description", "translatable_id" => "0f65c2e3-7a40-411b-83f1-e77e99b88395"],
            ["translation_id" => "5ea058ce-b967-4620-91e1-d57c8daeb25d", "translatable_type" => "App\Models\Description", "translatable_id" => "0f65c2e3-7a40-411b-83f1-e77e99b88395"],
            //646
            ["translation_id" => "a279897d-0f1e-40b2-896a-bbf758bd5700", "translatable_type" => "App\Models\Description", "translatable_id" => "1d79b44f-d40a-48a5-a9af-97847f99da32"],
            ["translation_id" => "98b12770-9814-4ca3-a9da-691476a6cd52", "translatable_type" => "App\Models\Description", "translatable_id" => "1d79b44f-d40a-48a5-a9af-97847f99da32"],
            ["translation_id" => "f804a82e-917f-4f78-b02d-9db4b8bcc7fe", "translatable_type" => "App\Models\Description", "translatable_id" => "1d79b44f-d40a-48a5-a9af-97847f99da32"],
            //647
            ["translation_id" => "5dfc0e82-c7e7-4dd9-a0b5-0c9002d0e596", "translatable_type" => "App\Models\Description", "translatable_id" => "fa6584c6-7685-4db9-975d-23e566dbbd26"],
            ["translation_id" => "b39c649b-15e1-45bc-9a38-3eaef91f1ba7", "translatable_type" => "App\Models\Description", "translatable_id" => "fa6584c6-7685-4db9-975d-23e566dbbd26"],
            ["translation_id" => "51391c2b-15e4-4eb0-aeb3-4b64efbf6cf6", "translatable_type" => "App\Models\Description", "translatable_id" => "fa6584c6-7685-4db9-975d-23e566dbbd26"],
            //648
            ["translation_id" => "948d672f-7128-429f-a760-d4ddc8c99b84", "translatable_type" => "App\Models\Description", "translatable_id" => "5775f772-a85f-470a-a776-6ed8cbee2fb6"],
            ["translation_id" => "d00ec9f2-140e-4a26-9078-1f3c66294358", "translatable_type" => "App\Models\Description", "translatable_id" => "5775f772-a85f-470a-a776-6ed8cbee2fb6"],
            ["translation_id" => "863fc01f-efee-4ac0-90ee-3cbdda09b775", "translatable_type" => "App\Models\Description", "translatable_id" => "5775f772-a85f-470a-a776-6ed8cbee2fb6"],
            //649
            ["translation_id" => "c2780f75-ffda-4143-b027-cf817b1e4a28", "translatable_type" => "App\Models\Description", "translatable_id" => "73c52553-0560-4575-b6ae-45e5c57defe5"],
            ["translation_id" => "29c6f069-68ea-47de-a48f-f582cbb3605f", "translatable_type" => "App\Models\Description", "translatable_id" => "73c52553-0560-4575-b6ae-45e5c57defe5"],
            ["translation_id" => "94750876-c22a-48ea-8f0e-8bf2b3b23cd8", "translatable_type" => "App\Models\Description", "translatable_id" => "73c52553-0560-4575-b6ae-45e5c57defe5"],
            //650
            ["translation_id" => "178c770d-3e1b-4f04-b318-5dff8f3773e8", "translatable_type" => "App\Models\Description", "translatable_id" => "e284475b-f653-4722-bc38-736878e7fab5"],
            ["translation_id" => "60f320c0-a905-459f-b69b-be21a491ddef", "translatable_type" => "App\Models\Description", "translatable_id" => "e284475b-f653-4722-bc38-736878e7fab5"],
            ["translation_id" => "4896e01e-21c5-4939-aace-8ddaf3d02aaf", "translatable_type" => "App\Models\Description", "translatable_id" => "e284475b-f653-4722-bc38-736878e7fab5"],
            //651
            ["translation_id" => "8973fe93-b1c7-4c7b-9feb-46e0c8695e52", "translatable_type" => "App\Models\Description", "translatable_id" => "4568e812-e8f8-4e7c-8ef6-d67976ebba62"],
            ["translation_id" => "08a91807-ef29-4103-bc7e-d33fa3bbf611", "translatable_type" => "App\Models\Description", "translatable_id" => "4568e812-e8f8-4e7c-8ef6-d67976ebba62"],
            ["translation_id" => "1d1de9c4-47fa-439d-a7a4-7888750b8d2c", "translatable_type" => "App\Models\Description", "translatable_id" => "4568e812-e8f8-4e7c-8ef6-d67976ebba62"],
            //652
            ["translation_id" => "573c6cf9-e7b1-425a-b3a3-3a7c517b8d66", "translatable_type" => "App\Models\Description", "translatable_id" => "58651b06-9ff1-4150-b30d-b3818097a6e7"],
            ["translation_id" => "bfe045b9-c54e-4786-bcf7-b6a715b2f337", "translatable_type" => "App\Models\Description", "translatable_id" => "58651b06-9ff1-4150-b30d-b3818097a6e7"],
            ["translation_id" => "32c78341-2e7b-41e9-b483-47beda3057fa", "translatable_type" => "App\Models\Description", "translatable_id" => "58651b06-9ff1-4150-b30d-b3818097a6e7"],
            //653
            ["translation_id" => "64b59c06-a3b0-4667-983e-73ba366b4f10", "translatable_type" => "App\Models\Description", "translatable_id" => "2747987d-3daf-444f-82bf-4646138f257c"],
            ["translation_id" => "09f21e6f-cfd6-4b68-840a-1a8b52943b08", "translatable_type" => "App\Models\Description", "translatable_id" => "2747987d-3daf-444f-82bf-4646138f257c"],
            ["translation_id" => "97ce87a1-e430-486d-b730-cc461089f700", "translatable_type" => "App\Models\Description", "translatable_id" => "2747987d-3daf-444f-82bf-4646138f257c"],
            //654
            ["translation_id" => "862062d3-aa8b-4231-b463-d0a719a41c3a", "translatable_type" => "App\Models\Description", "translatable_id" => "b41ab909-ac07-45d9-a731-946cca65ba62"],
            ["translation_id" => "934b40fd-3c17-415c-badc-66487a00bd15", "translatable_type" => "App\Models\Description", "translatable_id" => "b41ab909-ac07-45d9-a731-946cca65ba62"],
            ["translation_id" => "d94349a9-038e-4c23-82b6-64530e36d9b1", "translatable_type" => "App\Models\Description", "translatable_id" => "b41ab909-ac07-45d9-a731-946cca65ba62"],
            //655
            ["translation_id" => "fc41a6c7-cb52-4d99-8251-a50de0ed5567", "translatable_type" => "App\Models\Description", "translatable_id" => "13793395-f80a-4de1-b825-39f6179ec398"],
            ["translation_id" => "014bec87-e798-4af4-8cff-d3511a3f52a2", "translatable_type" => "App\Models\Description", "translatable_id" => "13793395-f80a-4de1-b825-39f6179ec398"],
            ["translation_id" => "c52fa409-8663-48d1-b259-7a7142ed64c1", "translatable_type" => "App\Models\Description", "translatable_id" => "13793395-f80a-4de1-b825-39f6179ec398"],
            //656
            ["translation_id" => "66a16a7f-e307-40e4-a859-8f7602e0dc1d", "translatable_type" => "App\Models\Description", "translatable_id" => "f5fb9012-f2c0-4aba-8eef-7a38a0e09521"],
            ["translation_id" => "8eb32022-7ebc-447e-ac46-576cd5922152", "translatable_type" => "App\Models\Description", "translatable_id" => "f5fb9012-f2c0-4aba-8eef-7a38a0e09521"],
            ["translation_id" => "31988ab3-695d-4bfe-87f4-9ddbd47f91a1", "translatable_type" => "App\Models\Description", "translatable_id" => "f5fb9012-f2c0-4aba-8eef-7a38a0e09521"],
            //657
            ["translation_id" => "8a4be2d7-c0a4-4c6c-a812-b6a4c9b730b1", "translatable_type" => "App\Models\Description", "translatable_id" => "8b0c17d2-bf3e-4901-abe2-3fb73f7e6cd9"],
            ["translation_id" => "f587b4c6-dee7-471f-9b65-5cedbbb22a1b", "translatable_type" => "App\Models\Description", "translatable_id" => "8b0c17d2-bf3e-4901-abe2-3fb73f7e6cd9"],
            ["translation_id" => "53efa944-3832-41fd-aa5d-dc373ddeb8e8", "translatable_type" => "App\Models\Description", "translatable_id" => "8b0c17d2-bf3e-4901-abe2-3fb73f7e6cd9"],
            //658
            ["translation_id" => "0995ee9e-9a5b-4ca9-b548-356abfd2e8de", "translatable_type" => "App\Models\Description", "translatable_id" => "b48da155-fcc1-45de-a774-88aede8c63c0"],
            ["translation_id" => "aba3a27c-de33-4eed-89c8-8f862c239891", "translatable_type" => "App\Models\Description", "translatable_id" => "b48da155-fcc1-45de-a774-88aede8c63c0"],
            ["translation_id" => "e5443003-1354-42a0-9ee5-4061e7623193", "translatable_type" => "App\Models\Description", "translatable_id" => "b48da155-fcc1-45de-a774-88aede8c63c0"],
            //659
            ["translation_id" => "277a8bec-16d7-41ed-b8f8-860eb8414c57", "translatable_type" => "App\Models\Description", "translatable_id" => "4ff2e4db-badd-4f8b-98eb-b3d5318b2f9b"],
            ["translation_id" => "2592712e-fff5-44ce-a4f1-85f06b3c5a87", "translatable_type" => "App\Models\Description", "translatable_id" => "4ff2e4db-badd-4f8b-98eb-b3d5318b2f9b"],
            ["translation_id" => "92597897-63ce-4f94-9969-40ae2ce601f3", "translatable_type" => "App\Models\Description", "translatable_id" => "4ff2e4db-badd-4f8b-98eb-b3d5318b2f9b"],
            //660
            ["translation_id" => "1f953f1d-cd5f-4a43-b79e-48faef05f6e3", "translatable_type" => "App\Models\Description", "translatable_id" => "5d90a4ce-b0be-4c8c-a769-ba84a73a0bb9"],
            ["translation_id" => "e98bcfe0-313e-4dc7-b71a-b4e072e6fec7", "translatable_type" => "App\Models\Description", "translatable_id" => "5d90a4ce-b0be-4c8c-a769-ba84a73a0bb9"],
            ["translation_id" => "7099569d-5395-40cc-b010-1c16d18e0181", "translatable_type" => "App\Models\Description", "translatable_id" => "5d90a4ce-b0be-4c8c-a769-ba84a73a0bb9"],
            //661
            ["translation_id" => "db4390e6-838b-4653-8923-c00acfe58649", "translatable_type" => "App\Models\Description", "translatable_id" => "4bc1353c-6215-427c-8c10-69e007f4e9f0"],
            ["translation_id" => "fa0f9cc5-937e-4876-aa22-d0072d3727a8", "translatable_type" => "App\Models\Description", "translatable_id" => "4bc1353c-6215-427c-8c10-69e007f4e9f0"],
            ["translation_id" => "8245d596-f888-4557-ab95-6a50b9f5abdb", "translatable_type" => "App\Models\Description", "translatable_id" => "4bc1353c-6215-427c-8c10-69e007f4e9f0"],
            //662
            ["translation_id" => "c46c6ff5-2c73-4b0c-b5b4-47d4fdbb7695", "translatable_type" => "App\Models\Description", "translatable_id" => "14266490-1e70-4484-97c5-6b9da7bb4fbd"],
            ["translation_id" => "2b75a0e9-536f-4f12-8fae-ba3efa6aeeef", "translatable_type" => "App\Models\Description", "translatable_id" => "14266490-1e70-4484-97c5-6b9da7bb4fbd"],
            ["translation_id" => "0843255a-d61d-41c2-8d28-d62384c04bc4", "translatable_type" => "App\Models\Description", "translatable_id" => "14266490-1e70-4484-97c5-6b9da7bb4fbd"],
            //663
            ["translation_id" => "93e39c8d-a0ce-4362-a8e7-ac65f66b0f7b", "translatable_type" => "App\Models\Description", "translatable_id" => "f28b337c-b1df-4d26-af77-2feddf9b0bc7"],
            ["translation_id" => "89f14bdc-b3ec-49c0-8150-a2c5b73839b9", "translatable_type" => "App\Models\Description", "translatable_id" => "f28b337c-b1df-4d26-af77-2feddf9b0bc7"],
            ["translation_id" => "00333141-f878-4015-b12b-92c27e6f1ef2", "translatable_type" => "App\Models\Description", "translatable_id" => "f28b337c-b1df-4d26-af77-2feddf9b0bc7"],
            //664
            ["translation_id" => "55acd8a8-6764-4811-b6c0-c7f185253c6a", "translatable_type" => "App\Models\Description", "translatable_id" => "3f46ef36-9a1b-456b-8d5b-0fe373d390ef"],
            ["translation_id" => "e7d2f4aa-059c-46b0-aeee-8d31707548a2", "translatable_type" => "App\Models\Description", "translatable_id" => "3f46ef36-9a1b-456b-8d5b-0fe373d390ef"],
            ["translation_id" => "e6b01c5a-1404-4e0a-b8b6-187ddc2ab709", "translatable_type" => "App\Models\Description", "translatable_id" => "3f46ef36-9a1b-456b-8d5b-0fe373d390ef"],
            //665
            ["translation_id" => "208b9c1d-9a12-478d-8e8f-9cfd981d2daa", "translatable_type" => "App\Models\Description", "translatable_id" => "0c0990c9-3784-4fba-97a6-0eb8151de268"],
            ["translation_id" => "b44349af-41af-4351-9f0d-01f2f9498eea", "translatable_type" => "App\Models\Description", "translatable_id" => "0c0990c9-3784-4fba-97a6-0eb8151de268"],
            ["translation_id" => "8d670d30-db14-42a2-8276-0a1674c4bd14", "translatable_type" => "App\Models\Description", "translatable_id" => "0c0990c9-3784-4fba-97a6-0eb8151de268"],
            //666
            ["translation_id" => "5f47df57-54ef-4b0f-9f81-645f63d499b9", "translatable_type" => "App\Models\Description", "translatable_id" => "567aa53a-48a6-44ec-b9de-58dcd3dfcf1f"],
            ["translation_id" => "fadd8775-9e72-4e3e-9d3e-0eb60206e321", "translatable_type" => "App\Models\Description", "translatable_id" => "567aa53a-48a6-44ec-b9de-58dcd3dfcf1f"],
            ["translation_id" => "6e3c08f1-59ef-430b-9b77-f1e681641a1d", "translatable_type" => "App\Models\Description", "translatable_id" => "567aa53a-48a6-44ec-b9de-58dcd3dfcf1f"],
            //667
            ["translation_id" => "750441d5-5224-46c2-a507-552cf38a55cd", "translatable_type" => "App\Models\Description", "translatable_id" => "06f3d284-e562-41fe-ac5a-0dd16bc1ff24"],
            ["translation_id" => "7c439775-ddc5-48ed-ad8f-5e1809ca595a", "translatable_type" => "App\Models\Description", "translatable_id" => "06f3d284-e562-41fe-ac5a-0dd16bc1ff24"],
            ["translation_id" => "3318b10e-1faf-417d-8e4b-215ee4039f0b", "translatable_type" => "App\Models\Description", "translatable_id" => "06f3d284-e562-41fe-ac5a-0dd16bc1ff24"],
            //668
            ["translation_id" => "8af9df33-f34a-481b-9d02-f5c37fc058ae", "translatable_type" => "App\Models\Description", "translatable_id" => "032293a4-7165-46bd-b3a4-e2e32cd35ae7"],
            ["translation_id" => "fdfc6409-e531-41d8-a7ad-93cf2f969b38", "translatable_type" => "App\Models\Description", "translatable_id" => "032293a4-7165-46bd-b3a4-e2e32cd35ae7"],
            ["translation_id" => "f3ffd283-603c-4baf-97b0-f3e7a72839c7", "translatable_type" => "App\Models\Description", "translatable_id" => "032293a4-7165-46bd-b3a4-e2e32cd35ae7"],
            //669
            ["translation_id" => "1256daee-01aa-4c66-8e52-1ca08e1a182d", "translatable_type" => "App\Models\Description", "translatable_id" => "b30c4a97-2719-40f6-95bd-351b4af57778"],
            ["translation_id" => "728c7320-1790-4714-93a2-6d13d32afd5d", "translatable_type" => "App\Models\Description", "translatable_id" => "b30c4a97-2719-40f6-95bd-351b4af57778"],
            ["translation_id" => "f3d56557-9fb8-4208-af24-f346b84be18c", "translatable_type" => "App\Models\Description", "translatable_id" => "b30c4a97-2719-40f6-95bd-351b4af57778"],
            //670
            ["translation_id" => "2ad20dfb-a99c-47d8-ad19-afd47f128805", "translatable_type" => "App\Models\Description", "translatable_id" => "9110fe90-da5c-4d94-82eb-ebcd9025d400"],
            ["translation_id" => "1bd9b6c6-f5ea-4ebf-9408-caa13c7a235c", "translatable_type" => "App\Models\Description", "translatable_id" => "9110fe90-da5c-4d94-82eb-ebcd9025d400"],
            ["translation_id" => "8ed795af-b93c-40f3-bb15-0fcd5237c0fa", "translatable_type" => "App\Models\Description", "translatable_id" => "9110fe90-da5c-4d94-82eb-ebcd9025d400"],
            //671
            ["translation_id" => "fda8c01a-d6de-4364-9de1-9a5ef443ad09", "translatable_type" => "App\Models\Description", "translatable_id" => "c87bfcea-89c5-4ccd-88ce-6daf3af16c82"],
            ["translation_id" => "5167c176-d682-4ec4-b7a9-4c273e8d7fb6", "translatable_type" => "App\Models\Description", "translatable_id" => "c87bfcea-89c5-4ccd-88ce-6daf3af16c82"],
            ["translation_id" => "b65dd005-ae85-463e-84a0-7eca94924221", "translatable_type" => "App\Models\Description", "translatable_id" => "c87bfcea-89c5-4ccd-88ce-6daf3af16c82"],
            //672
            ["translation_id" => "2414f34a-a08e-4c45-816e-47e8270b7cc6", "translatable_type" => "App\Models\Description", "translatable_id" => "34e5e44b-ea14-4a44-aca8-d0fef514b67d"],
            ["translation_id" => "ad1e2d31-a374-45e6-8ca0-ef9d173e0f96", "translatable_type" => "App\Models\Description", "translatable_id" => "34e5e44b-ea14-4a44-aca8-d0fef514b67d"],
            ["translation_id" => "cfbf4d4b-71c6-4249-a8d0-967510fc40fa", "translatable_type" => "App\Models\Description", "translatable_id" => "34e5e44b-ea14-4a44-aca8-d0fef514b67d"],
            //673
            ["translation_id" => "fe59f641-c6f4-4cbb-9cb1-a1ae6c7dfcc3", "translatable_type" => "App\Models\Description", "translatable_id" => "373df6d5-1448-4e81-be45-07b485272b55"],
            ["translation_id" => "b3f95413-0702-493a-bbf1-5eb1e57c648f", "translatable_type" => "App\Models\Description", "translatable_id" => "373df6d5-1448-4e81-be45-07b485272b55"],
            ["translation_id" => "a1b23733-53db-4109-b0e7-8575abc378c3", "translatable_type" => "App\Models\Description", "translatable_id" => "373df6d5-1448-4e81-be45-07b485272b55"],
            //674
            ["translation_id" => "5439f9a2-6e34-4c30-8044-a09833dfa515", "translatable_type" => "App\Models\Description", "translatable_id" => "0f55210c-1caf-4d99-a357-88a1aea18d9f"],
            ["translation_id" => "7b1e6655-d02f-4c81-8ae3-877fe7b8968b", "translatable_type" => "App\Models\Description", "translatable_id" => "0f55210c-1caf-4d99-a357-88a1aea18d9f"],
            ["translation_id" => "831afd4f-8f9d-41fd-8450-e942d5e28a94", "translatable_type" => "App\Models\Description", "translatable_id" => "0f55210c-1caf-4d99-a357-88a1aea18d9f"],
            //675
            ["translation_id" => "ee1830a1-a064-48b7-86fe-78b79dd846e7", "translatable_type" => "App\Models\Description", "translatable_id" => "2621e987-3450-4b2f-87f9-f2f7d4ebe430"],
            ["translation_id" => "9e87d646-b094-4a76-954b-5dbb392ea5da", "translatable_type" => "App\Models\Description", "translatable_id" => "2621e987-3450-4b2f-87f9-f2f7d4ebe430"],
            ["translation_id" => "9424ebd9-fbc9-4d11-a3fb-6550cf17d869", "translatable_type" => "App\Models\Description", "translatable_id" => "2621e987-3450-4b2f-87f9-f2f7d4ebe430"],
            //676
            ["translation_id" => "cb5c2428-6f2b-49ab-965e-128c10e96279", "translatable_type" => "App\Models\Description", "translatable_id" => "7f19001a-4927-4ba6-ac9f-5d6b82583ed8"],
            ["translation_id" => "a663ec58-aa19-4cc2-a30f-25af57a0bfa7", "translatable_type" => "App\Models\Description", "translatable_id" => "7f19001a-4927-4ba6-ac9f-5d6b82583ed8"],
            ["translation_id" => "b7c6186b-6c5b-4d40-8af6-df21506952eb", "translatable_type" => "App\Models\Description", "translatable_id" => "7f19001a-4927-4ba6-ac9f-5d6b82583ed8"],
            //677
            ["translation_id" => "bfb4100f-ddfd-49c3-b728-82bb7467ebbd", "translatable_type" => "App\Models\Description", "translatable_id" => "cdabb887-7e4c-4672-9830-835e1d339a0c"],
            ["translation_id" => "17cc4328-6e23-4517-96c8-5ecbd7815a0d", "translatable_type" => "App\Models\Description", "translatable_id" => "cdabb887-7e4c-4672-9830-835e1d339a0c"],
            ["translation_id" => "8c09c7a8-3add-4959-a38a-0722cb3aecb6", "translatable_type" => "App\Models\Description", "translatable_id" => "cdabb887-7e4c-4672-9830-835e1d339a0c"],
            //678
            ["translation_id" => "b091f166-8c71-48bc-be41-2e2300a92318", "translatable_type" => "App\Models\Description", "translatable_id" => "0a0752d7-73c3-4da8-a378-a4e9e931667d"],
            ["translation_id" => "a440b4e6-168c-4224-bcf2-d0095c168f47", "translatable_type" => "App\Models\Description", "translatable_id" => "0a0752d7-73c3-4da8-a378-a4e9e931667d"],
            ["translation_id" => "014fc87c-ceac-4eb8-8a55-0a809cadcf9a", "translatable_type" => "App\Models\Description", "translatable_id" => "0a0752d7-73c3-4da8-a378-a4e9e931667d"],
            //679
            ["translation_id" => "17e54b2f-164d-4712-b7d2-9618c2c288dd", "translatable_type" => "App\Models\Description", "translatable_id" => "5f3667ae-3c42-45d5-a6d2-c885d532b60f"],
            ["translation_id" => "9dc0f0d3-cdfa-4265-a08b-8b8e62f311cf", "translatable_type" => "App\Models\Description", "translatable_id" => "5f3667ae-3c42-45d5-a6d2-c885d532b60f"],
            ["translation_id" => "fc1a96b2-db9d-4ca9-97aa-f7c850c740b1", "translatable_type" => "App\Models\Description", "translatable_id" => "5f3667ae-3c42-45d5-a6d2-c885d532b60f"],
            //680
            ["translation_id" => "baaea546-44b9-495d-8d0b-5e338ce31ff8", "translatable_type" => "App\Models\Description", "translatable_id" => "edca7f3b-7933-424d-8bce-a84d489ef44b"],
            ["translation_id" => "bebb78bc-72e6-45a2-a034-7f2cf6ddb320", "translatable_type" => "App\Models\Description", "translatable_id" => "edca7f3b-7933-424d-8bce-a84d489ef44b"],
            ["translation_id" => "5a30f5e0-9039-4546-9c6b-23ff00ac03ac", "translatable_type" => "App\Models\Description", "translatable_id" => "edca7f3b-7933-424d-8bce-a84d489ef44b"],
            //681
            ["translation_id" => "b157f20a-aedd-48a3-83a6-08ac00f0a3dc", "translatable_type" => "App\Models\Description", "translatable_id" => "7902946e-6670-42ab-b4f8-916dfa1493be"],
            ["translation_id" => "0596c1f2-2b59-4622-a864-b209900c7e5e", "translatable_type" => "App\Models\Description", "translatable_id" => "7902946e-6670-42ab-b4f8-916dfa1493be"],
            ["translation_id" => "062613c1-62e9-40f3-a616-68eb0e87f8eb", "translatable_type" => "App\Models\Description", "translatable_id" => "7902946e-6670-42ab-b4f8-916dfa1493be"],
            //682
            ["translation_id" => "c1fb13e5-682e-4612-8bdc-62b2a921446e", "translatable_type" => "App\Models\Description", "translatable_id" => "021c5085-9041-4d99-aff4-ce2cafbcafe7"],
            ["translation_id" => "f45c20c2-87ec-4cf2-b656-9e0f191dce44", "translatable_type" => "App\Models\Description", "translatable_id" => "021c5085-9041-4d99-aff4-ce2cafbcafe7"],
            ["translation_id" => "8628be11-e0c8-4979-9cc0-3bb81b5cddc9", "translatable_type" => "App\Models\Description", "translatable_id" => "021c5085-9041-4d99-aff4-ce2cafbcafe7"],
            //683
            ["translation_id" => "b49695e7-0eff-4536-9195-60b89227603f", "translatable_type" => "App\Models\Description", "translatable_id" => "724e7d94-7d73-4b8e-af71-006777dedfd8"],
            ["translation_id" => "965c3354-1cd0-40e1-a1b4-ca3376809462", "translatable_type" => "App\Models\Description", "translatable_id" => "724e7d94-7d73-4b8e-af71-006777dedfd8"],
            ["translation_id" => "ac84b73f-0be8-4d13-824a-09726362000e", "translatable_type" => "App\Models\Description", "translatable_id" => "724e7d94-7d73-4b8e-af71-006777dedfd8"],
            //684
            ["translation_id" => "f8a9b708-09bd-426c-bd9b-3377d6f1f53b", "translatable_type" => "App\Models\Description", "translatable_id" => "6d210f10-b02b-48eb-8c41-cc0ff461820a"],
            ["translation_id" => "8e8237c6-841d-43d9-956f-e731ffdb243d", "translatable_type" => "App\Models\Description", "translatable_id" => "6d210f10-b02b-48eb-8c41-cc0ff461820a"],
            ["translation_id" => "8bf3b4e6-f361-405a-84d2-8d5aaa8a2cc9", "translatable_type" => "App\Models\Description", "translatable_id" => "6d210f10-b02b-48eb-8c41-cc0ff461820a"],
            //685
            ["translation_id" => "05623b8f-688d-44d0-89fb-eb2e07263b5b", "translatable_type" => "App\Models\Description", "translatable_id" => "8b8e797c-cf7b-4448-b746-ad827eded548"],
            ["translation_id" => "effb7cc8-8f17-46be-b810-b427e8c73f06", "translatable_type" => "App\Models\Description", "translatable_id" => "8b8e797c-cf7b-4448-b746-ad827eded548"],
            ["translation_id" => "85f7fbef-da8f-41ff-8038-6b44af37dd44", "translatable_type" => "App\Models\Description", "translatable_id" => "8b8e797c-cf7b-4448-b746-ad827eded548"],
            //686
            ["translation_id" => "a83f1ac1-c8f5-4ded-bf51-2b7544bfa785", "translatable_type" => "App\Models\Description", "translatable_id" => "81fb8c9d-299c-43e7-b85f-0df60272f0de"],
            ["translation_id" => "138588cf-d8d1-4292-8ffc-d9910cdffeea", "translatable_type" => "App\Models\Description", "translatable_id" => "81fb8c9d-299c-43e7-b85f-0df60272f0de"],
            ["translation_id" => "10f34675-7e9b-46c1-93e2-da12edfde4f4", "translatable_type" => "App\Models\Description", "translatable_id" => "81fb8c9d-299c-43e7-b85f-0df60272f0de"],
            //687
            ["translation_id" => "81cc3256-3d95-4cb0-a659-2770eebd77e4", "translatable_type" => "App\Models\Description", "translatable_id" => "cc9b7213-f42a-475f-af3f-8c8cf3ae31e6"],
            ["translation_id" => "23499721-4aa9-48f0-9d5f-7056d363d5e4", "translatable_type" => "App\Models\Description", "translatable_id" => "cc9b7213-f42a-475f-af3f-8c8cf3ae31e6"],
            ["translation_id" => "2e43c5df-3905-4a45-b390-f4b17ca4cb5f", "translatable_type" => "App\Models\Description", "translatable_id" => "cc9b7213-f42a-475f-af3f-8c8cf3ae31e6"],
            //688
            ["translation_id" => "3813742d-1b77-45e5-88da-acb4f22a47e1", "translatable_type" => "App\Models\Description", "translatable_id" => "0d01e7c5-62b4-48d8-ae78-70c92151f6c8"],
            ["translation_id" => "5645c083-fc27-4702-b244-2507d5d33037", "translatable_type" => "App\Models\Description", "translatable_id" => "0d01e7c5-62b4-48d8-ae78-70c92151f6c8"],
            ["translation_id" => "a05c0fb5-16ed-4d7c-85f3-4e5ff817e325", "translatable_type" => "App\Models\Description", "translatable_id" => "0d01e7c5-62b4-48d8-ae78-70c92151f6c8"],
            //689
            ["translation_id" => "33d54b35-1eea-4337-a909-6c6930be7888", "translatable_type" => "App\Models\Description", "translatable_id" => "88809269-adbd-4a40-9b75-5c7d26ea0556"],
            ["translation_id" => "6ef6e3d1-8820-4e1d-932d-08fbf623d35d", "translatable_type" => "App\Models\Description", "translatable_id" => "88809269-adbd-4a40-9b75-5c7d26ea0556"],
            ["translation_id" => "dc7d182f-7121-46e9-87ee-3467a6af82aa", "translatable_type" => "App\Models\Description", "translatable_id" => "88809269-adbd-4a40-9b75-5c7d26ea0556"],
            //690
            ["translation_id" => "1113ebb1-a77a-46e0-9efa-dae6940ea904", "translatable_type" => "App\Models\Description", "translatable_id" => "b44cb300-e6d0-4569-aaf7-578f66828f90"],
            ["translation_id" => "bc8b4d2f-6c3b-4b12-b1a4-52e007309e76", "translatable_type" => "App\Models\Description", "translatable_id" => "b44cb300-e6d0-4569-aaf7-578f66828f90"],
            ["translation_id" => "902ab638-82f9-4966-97c5-b5d0627acba5", "translatable_type" => "App\Models\Description", "translatable_id" => "b44cb300-e6d0-4569-aaf7-578f66828f90"],
            //691
            ["translation_id" => "8f2a9e4f-3eb7-42f0-a260-96084c9434cb", "translatable_type" => "App\Models\Description", "translatable_id" => "cf2931c5-d712-485c-9c50-770360c57d89"],
            ["translation_id" => "485c9ef3-ca94-4867-885b-181f2831e756", "translatable_type" => "App\Models\Description", "translatable_id" => "cf2931c5-d712-485c-9c50-770360c57d89"],
            ["translation_id" => "58d99d28-ace3-46dc-bedb-6c7533283d6a", "translatable_type" => "App\Models\Description", "translatable_id" => "cf2931c5-d712-485c-9c50-770360c57d89"],
            //692
            ["translation_id" => "a6b04579-06be-4f58-a532-852d7962d222", "translatable_type" => "App\Models\Description", "translatable_id" => "94dffa3a-3700-4561-9875-2300f94d96d0"],
            ["translation_id" => "c44b47b2-7cb2-4b43-95fa-a26c2ace095b", "translatable_type" => "App\Models\Description", "translatable_id" => "94dffa3a-3700-4561-9875-2300f94d96d0"],
            ["translation_id" => "a16aa27c-f2b3-4758-b294-01c41f1acac7", "translatable_type" => "App\Models\Description", "translatable_id" => "94dffa3a-3700-4561-9875-2300f94d96d0"],
            //693
            ["translation_id" => "a15e64a2-193b-414f-8954-f033c1e44fc4", "translatable_type" => "App\Models\Description", "translatable_id" => "ffe9dde4-8d19-436e-9575-04d57415cd96"],
            ["translation_id" => "7eb299dc-b92a-4ce5-ab3a-b3c110f9ad9b", "translatable_type" => "App\Models\Description", "translatable_id" => "ffe9dde4-8d19-436e-9575-04d57415cd96"],
            ["translation_id" => "5cc0956a-84c7-41b9-b737-51602dab5900", "translatable_type" => "App\Models\Description", "translatable_id" => "ffe9dde4-8d19-436e-9575-04d57415cd96"],
            //694
            ["translation_id" => "232e4b81-6bda-435d-979a-ee8facceaf69", "translatable_type" => "App\Models\Description", "translatable_id" => "03a08772-c7f6-4441-80d0-57dad4f38748"],
            ["translation_id" => "45ebd11c-fee4-4c42-82aa-f36501e743fb", "translatable_type" => "App\Models\Description", "translatable_id" => "03a08772-c7f6-4441-80d0-57dad4f38748"],
            ["translation_id" => "9afbd8c6-2ed7-4a5b-a9f0-28b7895d0072", "translatable_type" => "App\Models\Description", "translatable_id" => "03a08772-c7f6-4441-80d0-57dad4f38748"],
            //695
            ["translation_id" => "7d95e099-bc66-473a-9a69-91e739d63775", "translatable_type" => "App\Models\Description", "translatable_id" => "c826eb56-2c95-48a7-9f80-3d22d0c7ec44"],
            ["translation_id" => "669c3305-33a0-4204-a5eb-f5ff39dea4f0", "translatable_type" => "App\Models\Description", "translatable_id" => "c826eb56-2c95-48a7-9f80-3d22d0c7ec44"],
            ["translation_id" => "3df7d199-e2f1-4f2a-9b24-25493daf3837", "translatable_type" => "App\Models\Description", "translatable_id" => "c826eb56-2c95-48a7-9f80-3d22d0c7ec44"],
            //696
            ["translation_id" => "ebf0b1ad-13ae-4ab4-bd2e-4b1d6ab91269", "translatable_type" => "App\Models\Description", "translatable_id" => "b7974ff1-42b6-467a-8dd6-ccae72c6a156"],
            ["translation_id" => "56a0c017-faba-421a-b929-5f8db4ac348a", "translatable_type" => "App\Models\Description", "translatable_id" => "b7974ff1-42b6-467a-8dd6-ccae72c6a156"],
            ["translation_id" => "9a696064-2822-49ae-8b01-6610705969bb", "translatable_type" => "App\Models\Description", "translatable_id" => "b7974ff1-42b6-467a-8dd6-ccae72c6a156"],
            //697
            ["translation_id" => "188e46f5-3265-487b-a05d-92bc3fe68b80", "translatable_type" => "App\Models\Description", "translatable_id" => "dc83ad85-2172-46df-b792-9218a41d6ba2"],
            ["translation_id" => "b6a035c4-f5f9-45df-b812-84ad4a75dab2", "translatable_type" => "App\Models\Description", "translatable_id" => "dc83ad85-2172-46df-b792-9218a41d6ba2"],
            ["translation_id" => "eb8c0dc4-551c-414d-a61f-97bbd85d11f5", "translatable_type" => "App\Models\Description", "translatable_id" => "dc83ad85-2172-46df-b792-9218a41d6ba2"],
            //698
            ["translation_id" => "e07f6f6b-1e3e-48a8-92b8-c3f045c56626", "translatable_type" => "App\Models\Description", "translatable_id" => "db5b111a-af18-4db1-8152-5b94b56dff0e"],
            ["translation_id" => "50488248-2677-4cda-bafc-aadd02c3507c", "translatable_type" => "App\Models\Description", "translatable_id" => "db5b111a-af18-4db1-8152-5b94b56dff0e"],
            ["translation_id" => "4b9fec32-521b-406f-8b66-139905f9dcff", "translatable_type" => "App\Models\Description", "translatable_id" => "db5b111a-af18-4db1-8152-5b94b56dff0e"],
            //699
            ["translation_id" => "9d787a9e-0c6b-4cec-9d37-8760a14e1802", "translatable_type" => "App\Models\Description", "translatable_id" => "66db65b4-c0f0-417c-86c7-bf5ce8e3e1d0"],
            ["translation_id" => "0cbcd053-0d14-4b1b-89ae-cf6f0599be57", "translatable_type" => "App\Models\Description", "translatable_id" => "66db65b4-c0f0-417c-86c7-bf5ce8e3e1d0"],
            ["translation_id" => "fda0258f-1d02-470f-a093-f42ff0701e6b", "translatable_type" => "App\Models\Description", "translatable_id" => "66db65b4-c0f0-417c-86c7-bf5ce8e3e1d0"],
            //700
            ["translation_id" => "5d77a37d-44b8-4d66-a367-7e141be77c79", "translatable_type" => "App\Models\Description", "translatable_id" => "9b8bb394-84e5-431b-a2b5-035d2b7b2dc7"],
            ["translation_id" => "4d1d8d96-93be-48b6-811f-c1b917844111", "translatable_type" => "App\Models\Description", "translatable_id" => "9b8bb394-84e5-431b-a2b5-035d2b7b2dc7"],
            ["translation_id" => "7cc18c80-c925-4b00-9fdf-026c776f96ad", "translatable_type" => "App\Models\Description", "translatable_id" => "9b8bb394-84e5-431b-a2b5-035d2b7b2dc7"],
            //701
            ["translation_id" => "eedd6731-584a-4044-a208-2eb43522109b", "translatable_type" => "App\Models\Description", "translatable_id" => "97590106-ee0a-4b39-afd1-cfc1c6221b5b"],
            ["translation_id" => "67b5f994-6c31-4ea4-9a51-b6cf50647d38", "translatable_type" => "App\Models\Description", "translatable_id" => "97590106-ee0a-4b39-afd1-cfc1c6221b5b"],
            ["translation_id" => "b5c2f24b-20e4-463e-9cfa-3becb6de0e59", "translatable_type" => "App\Models\Description", "translatable_id" => "97590106-ee0a-4b39-afd1-cfc1c6221b5b"],
            //702
            ["translation_id" => "a8138ad5-2acd-431e-9def-510656cd45cb", "translatable_type" => "App\Models\Description", "translatable_id" => "16d366dd-236d-491b-80a2-d8465aa8f5fa"],
            ["translation_id" => "bccd5e5b-36e2-4872-8f40-dbbd4a6b822d", "translatable_type" => "App\Models\Description", "translatable_id" => "16d366dd-236d-491b-80a2-d8465aa8f5fa"],
            ["translation_id" => "17015b78-6493-4dce-bcff-b5b82577f89c", "translatable_type" => "App\Models\Description", "translatable_id" => "16d366dd-236d-491b-80a2-d8465aa8f5fa"],
            //703
            ["translation_id" => "50780256-3998-4bf9-84e6-fb576f32057b", "translatable_type" => "App\Models\Description", "translatable_id" => "6e0a5aa7-f4b8-42fe-8585-5a17891acc37"],
            ["translation_id" => "9b6fb2c8-eef2-4bcb-9230-8c1d11a30253", "translatable_type" => "App\Models\Description", "translatable_id" => "6e0a5aa7-f4b8-42fe-8585-5a17891acc37"],
            ["translation_id" => "5a79445b-5db1-42cb-b6bc-6b3fda25152e", "translatable_type" => "App\Models\Description", "translatable_id" => "6e0a5aa7-f4b8-42fe-8585-5a17891acc37"],
            //704
            ["translation_id" => "b205b547-010f-41e2-9799-561d2d6fbf88", "translatable_type" => "App\Models\Description", "translatable_id" => "4795e98a-efe5-4c73-bd65-827acf94a7cb"],
            ["translation_id" => "c25094c9-ed9f-4829-9482-6e9930c37b7d", "translatable_type" => "App\Models\Description", "translatable_id" => "4795e98a-efe5-4c73-bd65-827acf94a7cb"],
            ["translation_id" => "d8c5e345-23f4-4781-8b5c-bc7b25da4a7c", "translatable_type" => "App\Models\Description", "translatable_id" => "4795e98a-efe5-4c73-bd65-827acf94a7cb"],
            //705
            ["translation_id" => "8c3fccf5-3fc0-4686-bce8-8cd3fc85dd95", "translatable_type" => "App\Models\Description", "translatable_id" => "9d11de0f-eb28-42e6-9ffa-f59025f430e7"],
            ["translation_id" => "b8e60978-b49c-4999-b449-9fb233c1fe23", "translatable_type" => "App\Models\Description", "translatable_id" => "9d11de0f-eb28-42e6-9ffa-f59025f430e7"],
            ["translation_id" => "5f320923-15c3-47ea-9ca6-463c93aa0127", "translatable_type" => "App\Models\Description", "translatable_id" => "9d11de0f-eb28-42e6-9ffa-f59025f430e7"],
            //706
            ["translation_id" => "bcc31d96-f543-4b39-9f84-b68439760b99", "translatable_type" => "App\Models\Description", "translatable_id" => "44b525eb-74ea-4aae-b66f-fefd188267d2"],
            ["translation_id" => "cc12b8cf-8a21-407e-868e-74426e3dcddf", "translatable_type" => "App\Models\Description", "translatable_id" => "44b525eb-74ea-4aae-b66f-fefd188267d2"],
            ["translation_id" => "b26aa04a-0927-4baf-aa0d-14a536aabadd", "translatable_type" => "App\Models\Description", "translatable_id" => "44b525eb-74ea-4aae-b66f-fefd188267d2"],
            //707
            ["translation_id" => "c650dc04-efe1-4aaa-b12d-4e690c1bba3b", "translatable_type" => "App\Models\Description", "translatable_id" => "96f7f6e7-eeee-44c2-b5f3-ff0f9c5f8427"],
            ["translation_id" => "08aa0c88-28d4-4021-8ca3-b80da90c566c", "translatable_type" => "App\Models\Description", "translatable_id" => "96f7f6e7-eeee-44c2-b5f3-ff0f9c5f8427"],
            ["translation_id" => "94a664d1-5a29-4f3d-818c-513e21b5eb82", "translatable_type" => "App\Models\Description", "translatable_id" => "96f7f6e7-eeee-44c2-b5f3-ff0f9c5f8427"],
            //708
            ["translation_id" => "2ba40004-313f-4dce-b438-63d9f00ec61e", "translatable_type" => "App\Models\Description", "translatable_id" => "3f436ca2-b090-422a-a5b2-41d81b2f5038"],
            ["translation_id" => "d08d1099-82b7-4bc7-9171-fa8722fc3d1e", "translatable_type" => "App\Models\Description", "translatable_id" => "3f436ca2-b090-422a-a5b2-41d81b2f5038"],
            ["translation_id" => "82c0793a-3672-4f70-ac11-c9a3f3de391d", "translatable_type" => "App\Models\Description", "translatable_id" => "3f436ca2-b090-422a-a5b2-41d81b2f5038"],
            //709
            ["translation_id" => "0f09db1f-87c3-49e6-9b45-ef339ccc2275", "translatable_type" => "App\Models\Description", "translatable_id" => "962eff3c-aa3c-420e-a360-4eeec07ff7e8"],
            ["translation_id" => "a1306d96-594e-42a7-a26d-823d2fc9bbe6", "translatable_type" => "App\Models\Description", "translatable_id" => "962eff3c-aa3c-420e-a360-4eeec07ff7e8"],
            ["translation_id" => "c3b2f1c8-c83d-4006-a15d-187a62682631", "translatable_type" => "App\Models\Description", "translatable_id" => "962eff3c-aa3c-420e-a360-4eeec07ff7e8"],
            //710
            ["translation_id" => "00531af4-3261-4892-85c7-b64383d479c5", "translatable_type" => "App\Models\Description", "translatable_id" => "01902d58-9285-4d06-8b68-8047534840d0"],
            ["translation_id" => "4552c926-1a49-4dc4-820d-58bcdd36cb21", "translatable_type" => "App\Models\Description", "translatable_id" => "01902d58-9285-4d06-8b68-8047534840d0"],
            ["translation_id" => "951f250f-0039-49b5-b020-ac4bdfac009d", "translatable_type" => "App\Models\Description", "translatable_id" => "01902d58-9285-4d06-8b68-8047534840d0"],
            //711
            ["translation_id" => "2c84a0d2-ccc0-41b9-ad9a-7f56385072d5", "translatable_type" => "App\Models\Description", "translatable_id" => "581a7dfa-8030-48a9-ad28-337d411d6ef0"],
            ["translation_id" => "95c4d033-ba83-4846-9152-0d92d1cbe10d", "translatable_type" => "App\Models\Description", "translatable_id" => "581a7dfa-8030-48a9-ad28-337d411d6ef0"],
            ["translation_id" => "4d00d67d-5dba-4bf3-8198-93b893831001", "translatable_type" => "App\Models\Description", "translatable_id" => "581a7dfa-8030-48a9-ad28-337d411d6ef0"],
            //712
            ["translation_id" => "2d75c0df-8ab9-482f-9eec-4416bec75d06", "translatable_type" => "App\Models\Description", "translatable_id" => "5df493c1-3e6c-40fe-92fe-16c0237106e4"],
            ["translation_id" => "1026658b-4900-4520-a92b-2ffbe164ad12", "translatable_type" => "App\Models\Description", "translatable_id" => "5df493c1-3e6c-40fe-92fe-16c0237106e4"],
            ["translation_id" => "1ff51731-f516-4fe1-b0a7-6efb869b1612", "translatable_type" => "App\Models\Description", "translatable_id" => "5df493c1-3e6c-40fe-92fe-16c0237106e4"],
            //713
            ["translation_id" => "cc588afc-c019-4ec7-923c-1de9060514c7", "translatable_type" => "App\Models\Description", "translatable_id" => "f7caacb3-a154-4831-9935-cd5f48c8c115"],
            ["translation_id" => "b56a9747-f8f4-41f0-89de-3619f18be75f", "translatable_type" => "App\Models\Description", "translatable_id" => "f7caacb3-a154-4831-9935-cd5f48c8c115"],
            ["translation_id" => "1475e832-c850-41d5-a09a-967a5d3836b9", "translatable_type" => "App\Models\Description", "translatable_id" => "f7caacb3-a154-4831-9935-cd5f48c8c115"],
            //714
            ["translation_id" => "2f0d6e52-eab9-447e-bba1-3c4af961b869", "translatable_type" => "App\Models\Description", "translatable_id" => "a9cbfc65-a4f5-4d30-9294-21bd64e004da"],
            ["translation_id" => "3edcaa90-590c-4767-8f14-b942b5b0f0f3", "translatable_type" => "App\Models\Description", "translatable_id" => "a9cbfc65-a4f5-4d30-9294-21bd64e004da"],
            ["translation_id" => "f08c4492-d5a5-4843-ac15-00d250391702", "translatable_type" => "App\Models\Description", "translatable_id" => "a9cbfc65-a4f5-4d30-9294-21bd64e004da"],
            //715
            ["translation_id" => "c8555ead-71a8-48db-a011-d846731aa2d4", "translatable_type" => "App\Models\Description", "translatable_id" => "b7ad1ba5-8f32-4fa9-a7ef-e43627ca1d1e"],
            ["translation_id" => "8c2e0a83-ccc8-4f0c-8805-bff1e68f9899", "translatable_type" => "App\Models\Description", "translatable_id" => "b7ad1ba5-8f32-4fa9-a7ef-e43627ca1d1e"],
            ["translation_id" => "d3921217-3698-499d-90a2-b038633f6648", "translatable_type" => "App\Models\Description", "translatable_id" => "b7ad1ba5-8f32-4fa9-a7ef-e43627ca1d1e"],
            //716
            ["translation_id" => "4ccffecd-ae9f-4aac-b28d-2ce178c26422", "translatable_type" => "App\Models\Description", "translatable_id" => "3406f6e3-f03d-4d6f-a306-2bcbf0afca5b"],
            ["translation_id" => "08859983-9b28-4769-9e4c-b8541a88ad03", "translatable_type" => "App\Models\Description", "translatable_id" => "3406f6e3-f03d-4d6f-a306-2bcbf0afca5b"],
            ["translation_id" => "ffa0c069-625d-442e-8ddc-bef87d26e204", "translatable_type" => "App\Models\Description", "translatable_id" => "3406f6e3-f03d-4d6f-a306-2bcbf0afca5b"],
            //717
            ["translation_id" => "52a41fbc-0a35-425f-9dd5-53fa161ae217", "translatable_type" => "App\Models\Description", "translatable_id" => "08ddbf4a-36dc-414f-a7ba-c83686cba7e7"],
            ["translation_id" => "a7d0d079-e877-4076-820d-234f24034f18", "translatable_type" => "App\Models\Description", "translatable_id" => "08ddbf4a-36dc-414f-a7ba-c83686cba7e7"],
            ["translation_id" => "9d6d61f9-a1e3-4980-87c1-fb180b7478f8", "translatable_type" => "App\Models\Description", "translatable_id" => "08ddbf4a-36dc-414f-a7ba-c83686cba7e7"],
            //718
            ["translation_id" => "92a8e350-6a2c-4b51-818c-4c081ae00f90", "translatable_type" => "App\Models\Description", "translatable_id" => "d487db9f-ad41-4256-80b8-133356d4fe9a"],
            ["translation_id" => "cf052c1f-0003-48fa-8e5f-a5892db7d679", "translatable_type" => "App\Models\Description", "translatable_id" => "d487db9f-ad41-4256-80b8-133356d4fe9a"],
            ["translation_id" => "156264b0-ae10-4e81-9e82-bffc20f641ff", "translatable_type" => "App\Models\Description", "translatable_id" => "d487db9f-ad41-4256-80b8-133356d4fe9a"],
            //719
            ["translation_id" => "043bc218-57a7-41d2-ba03-66ebe0afdad8", "translatable_type" => "App\Models\Description", "translatable_id" => "05f5973d-a4a4-4e27-9a10-1342fcac2aaa"],
            ["translation_id" => "3995f238-f585-49e1-807d-13c5602740cf", "translatable_type" => "App\Models\Description", "translatable_id" => "05f5973d-a4a4-4e27-9a10-1342fcac2aaa"],
            ["translation_id" => "52d2f542-3dff-47ff-9a5e-68e42e5c123e", "translatable_type" => "App\Models\Description", "translatable_id" => "05f5973d-a4a4-4e27-9a10-1342fcac2aaa"],
            //720
            ["translation_id" => "5615a5f6-0b63-4354-a738-3d5953dd4e4f", "translatable_type" => "App\Models\Description", "translatable_id" => "9e4fc564-1af7-4abb-bb6a-248983738bc1"],
            ["translation_id" => "aab311f1-7fcb-4661-b0ce-4268c66791bf", "translatable_type" => "App\Models\Description", "translatable_id" => "9e4fc564-1af7-4abb-bb6a-248983738bc1"],
            ["translation_id" => "0e8132a3-a212-494c-8bff-60750288d473", "translatable_type" => "App\Models\Description", "translatable_id" => "9e4fc564-1af7-4abb-bb6a-248983738bc1"],
            //721
            ["translation_id" => "cc4b298d-4eaa-46c9-9dad-2cfbc2b281d6", "translatable_type" => "App\Models\Description", "translatable_id" => "2d9a4501-7391-4b9e-af7d-f7ab3e2c98e6"],
            ["translation_id" => "0766672b-dc3c-4bad-8191-66ca588c6580", "translatable_type" => "App\Models\Description", "translatable_id" => "2d9a4501-7391-4b9e-af7d-f7ab3e2c98e6"],
            ["translation_id" => "0ed65277-a951-4992-890d-0f478911941b", "translatable_type" => "App\Models\Description", "translatable_id" => "2d9a4501-7391-4b9e-af7d-f7ab3e2c98e6"],
            //722
            ["translation_id" => "fbbe8de4-6a90-47e5-9cbe-c9d81499d35f", "translatable_type" => "App\Models\Description", "translatable_id" => "2f21092c-536a-4a0a-a955-69aca1bc3b8d"],
            ["translation_id" => "4724860d-33b9-4c6a-9b5d-bad3c0629c4d", "translatable_type" => "App\Models\Description", "translatable_id" => "2f21092c-536a-4a0a-a955-69aca1bc3b8d"],
            ["translation_id" => "972128e4-33be-4d99-91e2-92e7dce643f7", "translatable_type" => "App\Models\Description", "translatable_id" => "2f21092c-536a-4a0a-a955-69aca1bc3b8d"],
            //723
            ["translation_id" => "b1140d20-7eb0-4c55-9795-6d7931918220", "translatable_type" => "App\Models\Description", "translatable_id" => "cd5f1d5b-d5ed-481a-90d4-609d684cc837"],
            ["translation_id" => "1575ce05-7f95-41c1-9d3e-441b589711d8", "translatable_type" => "App\Models\Description", "translatable_id" => "cd5f1d5b-d5ed-481a-90d4-609d684cc837"],
            ["translation_id" => "d626a0d7-a544-48f5-9746-2574bf48a59b", "translatable_type" => "App\Models\Description", "translatable_id" => "cd5f1d5b-d5ed-481a-90d4-609d684cc837"],
            //724
            ["translation_id" => "e739c692-eb63-40ed-ab5b-3669a3a22572", "translatable_type" => "App\Models\Description", "translatable_id" => "9cefb0d7-0870-499e-b2fc-e2f7b2e44597"],
            ["translation_id" => "184645c5-7d94-4f00-b610-6c07b4406e68", "translatable_type" => "App\Models\Description", "translatable_id" => "9cefb0d7-0870-499e-b2fc-e2f7b2e44597"],
            ["translation_id" => "912d0f26-e7d6-4064-a332-1b428d063c04", "translatable_type" => "App\Models\Description", "translatable_id" => "9cefb0d7-0870-499e-b2fc-e2f7b2e44597"],
            //725
            ["translation_id" => "ec29cde0-4b6e-467e-af1e-0e53b7ee2765", "translatable_type" => "App\Models\Description", "translatable_id" => "79938b2b-b34c-47d6-a661-6a149b4878eb"],
            ["translation_id" => "1e6fed53-bc56-4778-a5d6-debf398ce7d0", "translatable_type" => "App\Models\Description", "translatable_id" => "79938b2b-b34c-47d6-a661-6a149b4878eb"],
            ["translation_id" => "834da110-3edb-4868-845f-71f63623ba49", "translatable_type" => "App\Models\Description", "translatable_id" => "79938b2b-b34c-47d6-a661-6a149b4878eb"],
            //726
            ["translation_id" => "eff51e0c-8d57-4d9b-86ea-8e360582da49", "translatable_type" => "App\Models\Description", "translatable_id" => "29417c1f-1342-47dd-ab55-08ebf149d10c"],
            ["translation_id" => "4e91ce6d-48e8-4729-9ddf-82befdd42317", "translatable_type" => "App\Models\Description", "translatable_id" => "29417c1f-1342-47dd-ab55-08ebf149d10c"],
            ["translation_id" => "ec11d112-2670-4803-a05b-18e3a1985b1a", "translatable_type" => "App\Models\Description", "translatable_id" => "29417c1f-1342-47dd-ab55-08ebf149d10c"],
            //727
            ["translation_id" => "380f3cc3-7e57-4258-b633-762d6e275776", "translatable_type" => "App\Models\Description", "translatable_id" => "8b7a99b6-b07d-459d-9cab-eabb1b569abf"],
            ["translation_id" => "7911b7c8-9066-477c-8162-abfb08e7853d", "translatable_type" => "App\Models\Description", "translatable_id" => "8b7a99b6-b07d-459d-9cab-eabb1b569abf"],
            ["translation_id" => "cf8bf7a6-16c6-4a0b-b97b-13b6ecfaf4a4", "translatable_type" => "App\Models\Description", "translatable_id" => "8b7a99b6-b07d-459d-9cab-eabb1b569abf"],
            //728
            ["translation_id" => "41402ca4-5d71-401d-951a-f302949724c6", "translatable_type" => "App\Models\Description", "translatable_id" => "cd7163c6-979f-4b19-8889-772638250a52"],
            ["translation_id" => "506fe249-e56e-4cda-9131-f2b286fce3bd", "translatable_type" => "App\Models\Description", "translatable_id" => "cd7163c6-979f-4b19-8889-772638250a52"],
            ["translation_id" => "28feb889-c21c-4122-8aa0-67801e8cda35", "translatable_type" => "App\Models\Description", "translatable_id" => "cd7163c6-979f-4b19-8889-772638250a52"],
            //729
            ["translation_id" => "86aebbd7-5f30-44c7-9a47-24ee708b7e67", "translatable_type" => "App\Models\Description", "translatable_id" => "aec1cae6-ac04-4964-b80e-a3aed4520c6a"],
            ["translation_id" => "ddf7b9df-ca8c-445a-9a20-b1194bcda3e3", "translatable_type" => "App\Models\Description", "translatable_id" => "aec1cae6-ac04-4964-b80e-a3aed4520c6a"],
            ["translation_id" => "052b9d2e-8633-4e47-a435-ddc3b06a440d", "translatable_type" => "App\Models\Description", "translatable_id" => "aec1cae6-ac04-4964-b80e-a3aed4520c6a"],
            //730
            ["translation_id" => "08701f5c-6d1f-40e4-b8ff-2b8f85dd7cb2", "translatable_type" => "App\Models\Description", "translatable_id" => "d7649c16-4399-4076-ac0b-01a7fda8ead2"],
            ["translation_id" => "0cad87cd-09aa-42d2-a8c9-2cee7f81495b", "translatable_type" => "App\Models\Description", "translatable_id" => "d7649c16-4399-4076-ac0b-01a7fda8ead2"],
            ["translation_id" => "34cd72b1-2518-44ea-84ab-b3d1ac443399", "translatable_type" => "App\Models\Description", "translatable_id" => "d7649c16-4399-4076-ac0b-01a7fda8ead2"],
            //731
            ["translation_id" => "32938683-8c99-4745-bca7-da70630047d1", "translatable_type" => "App\Models\Description", "translatable_id" => "bfebf853-4709-4f8c-8b7a-dfdcde2a94d6"],
            ["translation_id" => "0f026f1a-9c66-4d2b-8334-d254f2f9e2b5", "translatable_type" => "App\Models\Description", "translatable_id" => "bfebf853-4709-4f8c-8b7a-dfdcde2a94d6"],
            ["translation_id" => "0fb52de6-8359-429a-8b4a-89bb17acb6a0", "translatable_type" => "App\Models\Description", "translatable_id" => "bfebf853-4709-4f8c-8b7a-dfdcde2a94d6"],
            //732
            ["translation_id" => "28cb7fd2-a108-416a-a830-b094f074e80e", "translatable_type" => "App\Models\Description", "translatable_id" => "bdd93f1d-5b84-49cf-8b96-c2b330999b66"],
            ["translation_id" => "114604cb-1d24-4d93-9883-2c25edccb24e", "translatable_type" => "App\Models\Description", "translatable_id" => "bdd93f1d-5b84-49cf-8b96-c2b330999b66"],
            ["translation_id" => "ab23b57e-2780-4b7f-aac0-66bd672d69ab", "translatable_type" => "App\Models\Description", "translatable_id" => "bdd93f1d-5b84-49cf-8b96-c2b330999b66"],
            //733
            ["translation_id" => "b3d9ae69-b654-4623-bbaf-6240bd2dd319", "translatable_type" => "App\Models\Description", "translatable_id" => "c64773a7-5ca1-4219-a5d8-997c51fda56c"],
            ["translation_id" => "55ce724f-081a-4f0a-b560-d75ec922184c", "translatable_type" => "App\Models\Description", "translatable_id" => "c64773a7-5ca1-4219-a5d8-997c51fda56c"],
            ["translation_id" => "ffd7421a-02a1-4b78-af10-5c9f650c6013", "translatable_type" => "App\Models\Description", "translatable_id" => "c64773a7-5ca1-4219-a5d8-997c51fda56c"],
            //734
            ["translation_id" => "894cfa0b-4733-42ca-a134-6afecd233bd6", "translatable_type" => "App\Models\Description", "translatable_id" => "7071a496-5258-4f4c-892d-9abfe958804c"],
            ["translation_id" => "8059cf8d-8244-46a9-96b5-d6029b0fe84e", "translatable_type" => "App\Models\Description", "translatable_id" => "7071a496-5258-4f4c-892d-9abfe958804c"],
            ["translation_id" => "77775a70-c871-494d-8300-703724eabc8e", "translatable_type" => "App\Models\Description", "translatable_id" => "7071a496-5258-4f4c-892d-9abfe958804c"],
            //735
            ["translation_id" => "48d87d27-a50c-4aa4-b359-8604f9897996", "translatable_type" => "App\Models\Description", "translatable_id" => "31e5e2fa-58dc-4ecc-9939-562f46abe902"],
            ["translation_id" => "e1d462d9-c7f9-47e6-9296-c1aa16e4856b", "translatable_type" => "App\Models\Description", "translatable_id" => "31e5e2fa-58dc-4ecc-9939-562f46abe902"],
            ["translation_id" => "30860227-39f6-4d26-a755-1235f153fa17", "translatable_type" => "App\Models\Description", "translatable_id" => "31e5e2fa-58dc-4ecc-9939-562f46abe902"],
            //736
            ["translation_id" => "94be2cdb-bcf9-45e8-b0a4-e36281be848a", "translatable_type" => "App\Models\Description", "translatable_id" => "7e123f20-bfd6-4912-b65f-8a895ee36021"],
            ["translation_id" => "17ec3a86-821e-4825-97cc-eb9152f46d2f", "translatable_type" => "App\Models\Description", "translatable_id" => "7e123f20-bfd6-4912-b65f-8a895ee36021"],
            ["translation_id" => "b39f87f3-7f12-40be-9191-195696f76675", "translatable_type" => "App\Models\Description", "translatable_id" => "7e123f20-bfd6-4912-b65f-8a895ee36021"],
            //737
            ["translation_id" => "00cfcf4b-c969-4edf-8558-9f9cd2a8dd46", "translatable_type" => "App\Models\Description", "translatable_id" => "42da4762-f4a7-4dd0-8644-85ab72029dfc"],
            ["translation_id" => "98051ada-9d2b-4a6b-82de-3f83114dd72e", "translatable_type" => "App\Models\Description", "translatable_id" => "42da4762-f4a7-4dd0-8644-85ab72029dfc"],
            ["translation_id" => "effdb9cb-7714-410e-82d3-c8388b15cdab", "translatable_type" => "App\Models\Description", "translatable_id" => "42da4762-f4a7-4dd0-8644-85ab72029dfc"],
            //738
            ["translation_id" => "8c7f8d10-8fdb-480d-824a-a1b385e3f91d", "translatable_type" => "App\Models\Description", "translatable_id" => "6563fde9-3a52-46b1-aeaa-6c674e8b1a57"],
            ["translation_id" => "d10262d6-89a5-4ebc-a342-374b7a451d44", "translatable_type" => "App\Models\Description", "translatable_id" => "6563fde9-3a52-46b1-aeaa-6c674e8b1a57"],
            ["translation_id" => "facd4721-212d-4316-92ff-cff1bea1fa8d", "translatable_type" => "App\Models\Description", "translatable_id" => "6563fde9-3a52-46b1-aeaa-6c674e8b1a57"],
            //739
            ["translation_id" => "7ecf13e7-c418-459b-b46b-daa015b559e9", "translatable_type" => "App\Models\Description", "translatable_id" => "3bfc8d47-bac0-4b5b-90c9-7c40e675dba4"],
            ["translation_id" => "b1f441ce-f1d5-48fa-8916-37015f703d52", "translatable_type" => "App\Models\Description", "translatable_id" => "3bfc8d47-bac0-4b5b-90c9-7c40e675dba4"],
            ["translation_id" => "d9473499-183d-46e4-98b2-8dd0c0e3cd3a", "translatable_type" => "App\Models\Description", "translatable_id" => "3bfc8d47-bac0-4b5b-90c9-7c40e675dba4"],
            //740
            ["translation_id" => "73150b5c-82f0-4fea-85aa-540752c0016b", "translatable_type" => "App\Models\Description", "translatable_id" => "4f6385aa-af95-445b-b73c-a3347ed857ab"],
            ["translation_id" => "138d7853-2965-4a1a-8fa0-8946d8766f16", "translatable_type" => "App\Models\Description", "translatable_id" => "4f6385aa-af95-445b-b73c-a3347ed857ab"],
            ["translation_id" => "3104dca6-63b9-4eaf-b917-939d29fd8663", "translatable_type" => "App\Models\Description", "translatable_id" => "4f6385aa-af95-445b-b73c-a3347ed857ab"],
            //741
            ["translation_id" => "6f74add0-cfac-4d87-a289-77b9fd5bf287", "translatable_type" => "App\Models\Description", "translatable_id" => "8f51951a-d669-48ad-be9c-5e1325740181"],
            ["translation_id" => "8bf10e8d-6771-4660-9a44-b3a97800c716", "translatable_type" => "App\Models\Description", "translatable_id" => "8f51951a-d669-48ad-be9c-5e1325740181"],
            ["translation_id" => "82f4dcad-64ff-41ed-85a7-332a89b5caa6", "translatable_type" => "App\Models\Description", "translatable_id" => "8f51951a-d669-48ad-be9c-5e1325740181"],
            //742
            ["translation_id" => "6a3f62d7-1ddd-4629-a31d-63f16ad4fc96", "translatable_type" => "App\Models\Description", "translatable_id" => "23dc2d8f-c69b-47dd-9066-c3fedec5f013"],
            ["translation_id" => "809230e9-f2df-409c-8d96-d51d947a3214", "translatable_type" => "App\Models\Description", "translatable_id" => "23dc2d8f-c69b-47dd-9066-c3fedec5f013"],
            ["translation_id" => "89562154-ac0f-42e5-bafa-c49b129d6da2", "translatable_type" => "App\Models\Description", "translatable_id" => "23dc2d8f-c69b-47dd-9066-c3fedec5f013"],
            //743
            ["translation_id" => "5ebe0e12-06b6-495a-9eac-d581d7fdfa14", "translatable_type" => "App\Models\Description", "translatable_id" => "6376bc97-4ed8-4bd3-8515-b56d3144f9be"],
            ["translation_id" => "4a6f9d6e-cedf-4f9b-8d1a-f51604bab377", "translatable_type" => "App\Models\Description", "translatable_id" => "6376bc97-4ed8-4bd3-8515-b56d3144f9be"],
            ["translation_id" => "3ed5b0bf-eeef-4801-8b58-a2fc83480eab", "translatable_type" => "App\Models\Description", "translatable_id" => "6376bc97-4ed8-4bd3-8515-b56d3144f9be"],
            //744
            ["translation_id" => "1f5c1413-c9fc-49b7-8fa0-81a1b93abe89", "translatable_type" => "App\Models\Description", "translatable_id" => "8ed2c228-5508-4260-9601-9899cf12a2ae"],
            ["translation_id" => "7e02fee8-756b-4c45-b78c-71cfcabaa23f", "translatable_type" => "App\Models\Description", "translatable_id" => "8ed2c228-5508-4260-9601-9899cf12a2ae"],
            ["translation_id" => "113fa08c-c0dd-4bd2-84ce-a7302f71628b", "translatable_type" => "App\Models\Description", "translatable_id" => "8ed2c228-5508-4260-9601-9899cf12a2ae"],
            //745
            ["translation_id" => "815c622a-a11b-45c0-935f-19c23fc25e7f", "translatable_type" => "App\Models\Description", "translatable_id" => "f6ed92dc-f280-4654-be65-9d06951e4f1d"],
            ["translation_id" => "4ae8cac2-891b-4074-92bf-2a54752f833b", "translatable_type" => "App\Models\Description", "translatable_id" => "f6ed92dc-f280-4654-be65-9d06951e4f1d"],
            ["translation_id" => "519d399f-60b7-42ac-ae3b-344407a34440", "translatable_type" => "App\Models\Description", "translatable_id" => "f6ed92dc-f280-4654-be65-9d06951e4f1d"],
            //746
            ["translation_id" => "8ba9edcc-e67b-414b-ab08-c992303e3251", "translatable_type" => "App\Models\Description", "translatable_id" => "f4660151-a0db-4c7f-ac20-133254b858e6"],
            ["translation_id" => "3e8c77b4-df3e-43bf-8da5-89629bc9115a", "translatable_type" => "App\Models\Description", "translatable_id" => "f4660151-a0db-4c7f-ac20-133254b858e6"],
            ["translation_id" => "22a2f85f-f697-4a90-a3db-e729d64e147c", "translatable_type" => "App\Models\Description", "translatable_id" => "f4660151-a0db-4c7f-ac20-133254b858e6"],
            //747
            ["translation_id" => "6f689b57-fe16-4df7-aa3b-c3908b2ae131", "translatable_type" => "App\Models\Description", "translatable_id" => "e46522b1-e409-43c8-b1fd-4d233324752d"],
            ["translation_id" => "042ace41-cb96-4081-a648-74120877e495", "translatable_type" => "App\Models\Description", "translatable_id" => "e46522b1-e409-43c8-b1fd-4d233324752d"],
            ["translation_id" => "0556d63e-088c-4fe6-b587-725092a81b66", "translatable_type" => "App\Models\Description", "translatable_id" => "e46522b1-e409-43c8-b1fd-4d233324752d"],
            //748
            ["translation_id" => "73398229-1a9f-41bb-9bbb-635f1a3fb74a", "translatable_type" => "App\Models\Description", "translatable_id" => "7eeef683-bfe7-40d4-bcd3-892a51a4c25c"],
            ["translation_id" => "4af8b630-d77f-45d1-ac0f-b09a91d72e55", "translatable_type" => "App\Models\Description", "translatable_id" => "7eeef683-bfe7-40d4-bcd3-892a51a4c25c"],
            ["translation_id" => "7aa52935-19ea-44b1-99ae-29f99b08fa25", "translatable_type" => "App\Models\Description", "translatable_id" => "7eeef683-bfe7-40d4-bcd3-892a51a4c25c"],
            //749
            ["translation_id" => "eb9ae6b7-1b67-4229-8dec-70560bbc8a86", "translatable_type" => "App\Models\Description", "translatable_id" => "271cf16f-1d42-45d0-a40a-d9b444041b93"],
            ["translation_id" => "1e702820-9bd4-494d-8a2e-0c05bbd6c4c0", "translatable_type" => "App\Models\Description", "translatable_id" => "271cf16f-1d42-45d0-a40a-d9b444041b93"],
            ["translation_id" => "a3237c96-d4ed-4524-b869-9b4b872c0a78", "translatable_type" => "App\Models\Description", "translatable_id" => "271cf16f-1d42-45d0-a40a-d9b444041b93"],
            //750
            ["translation_id" => "cacbe96f-2613-4358-ae7d-39380a094cf9", "translatable_type" => "App\Models\Description", "translatable_id" => "3576219c-8db6-40d9-b397-e163f2dcbf92"],
            ["translation_id" => "cb2b6912-96f5-4b69-b105-36bf47a67a32", "translatable_type" => "App\Models\Description", "translatable_id" => "3576219c-8db6-40d9-b397-e163f2dcbf92"],
            ["translation_id" => "2767fe04-0e1c-4a50-ae91-56987bc7d01f", "translatable_type" => "App\Models\Description", "translatable_id" => "3576219c-8db6-40d9-b397-e163f2dcbf92"],
            //751
            ["translation_id" => "134f6422-ccb8-4f1e-9552-550e4f47d7b8", "translatable_type" => "App\Models\Description", "translatable_id" => "0e70e723-0f2a-471e-a0ea-148885acf08c"],
            ["translation_id" => "10cecdc1-90d0-4fdd-86a3-06de3293a0fb", "translatable_type" => "App\Models\Description", "translatable_id" => "0e70e723-0f2a-471e-a0ea-148885acf08c"],
            ["translation_id" => "243752d5-2914-407d-8e5b-2bf67179915f", "translatable_type" => "App\Models\Description", "translatable_id" => "0e70e723-0f2a-471e-a0ea-148885acf08c"],
            //752
            ["translation_id" => "2b9d0f5a-99c8-43e9-befe-b15cf419ebbd", "translatable_type" => "App\Models\Description", "translatable_id" => "35db2e4c-44e3-41b3-be36-65ef129a8617"],
            ["translation_id" => "0d14f0b8-bd7c-45cd-8e9e-cf030fbd0602", "translatable_type" => "App\Models\Description", "translatable_id" => "35db2e4c-44e3-41b3-be36-65ef129a8617"],
            ["translation_id" => "8d1895db-a85c-40b6-bdad-1991d7f7c16d", "translatable_type" => "App\Models\Description", "translatable_id" => "35db2e4c-44e3-41b3-be36-65ef129a8617"],
            //753
            ["translation_id" => "e9fbf0a2-3077-4fd4-9879-5489e1883a57", "translatable_type" => "App\Models\Description", "translatable_id" => "fb2881a4-75f6-45fc-b602-da386ed692b7"],
            ["translation_id" => "969a4e60-52fb-464d-b733-2e6059a8d54e", "translatable_type" => "App\Models\Description", "translatable_id" => "fb2881a4-75f6-45fc-b602-da386ed692b7"],
            ["translation_id" => "abd806f7-501c-4429-8511-8a8bd93d46b3", "translatable_type" => "App\Models\Description", "translatable_id" => "fb2881a4-75f6-45fc-b602-da386ed692b7"],
            //754
            ["translation_id" => "ed3dc4eb-df18-471e-b616-4323a5b10e05", "translatable_type" => "App\Models\Description", "translatable_id" => "e47c5d09-ffea-4d9d-8d6c-afcef1b2bccb"],
            ["translation_id" => "243aaa9b-ac53-42dc-9c43-dd071fee38b5", "translatable_type" => "App\Models\Description", "translatable_id" => "e47c5d09-ffea-4d9d-8d6c-afcef1b2bccb"],
            ["translation_id" => "5598a6e5-773a-4224-8be9-1991d003d669", "translatable_type" => "App\Models\Description", "translatable_id" => "e47c5d09-ffea-4d9d-8d6c-afcef1b2bccb"],
            //755
            ["translation_id" => "07b7705e-7a00-4da0-afaf-74df81822c51", "translatable_type" => "App\Models\Description", "translatable_id" => "17f1fc4b-6c6f-46e1-a03b-a2b04684331c"],
            ["translation_id" => "ce756082-9f73-4549-845b-98b715d71d43", "translatable_type" => "App\Models\Description", "translatable_id" => "17f1fc4b-6c6f-46e1-a03b-a2b04684331c"],
            ["translation_id" => "9f4b6ef3-a093-4902-bf4d-95451efde8f4", "translatable_type" => "App\Models\Description", "translatable_id" => "17f1fc4b-6c6f-46e1-a03b-a2b04684331c"],
            //756
            ["translation_id" => "509433b9-f14c-452a-a9d8-3d0fbf543843", "translatable_type" => "App\Models\Description", "translatable_id" => "36ead1c4-4c1e-4046-bed0-76c2ec3fca78"],
            ["translation_id" => "c5a37d89-57a1-40f7-9957-3625d85151a1", "translatable_type" => "App\Models\Description", "translatable_id" => "36ead1c4-4c1e-4046-bed0-76c2ec3fca78"],
            ["translation_id" => "14ae9efe-66b9-4f1d-bd7d-1307b1de1b85", "translatable_type" => "App\Models\Description", "translatable_id" => "36ead1c4-4c1e-4046-bed0-76c2ec3fca78"],
            //757
            ["translation_id" => "048d9fad-80b8-46c0-b62f-e0d5e4734e98", "translatable_type" => "App\Models\Description", "translatable_id" => "622c2a3a-0d0f-4f43-9488-ea68891732cc"],
            ["translation_id" => "266d0805-b2b9-40c8-aa7d-31e5bda21706", "translatable_type" => "App\Models\Description", "translatable_id" => "622c2a3a-0d0f-4f43-9488-ea68891732cc"],
            ["translation_id" => "1b85229d-3af2-462f-a84d-578f672e82fb", "translatable_type" => "App\Models\Description", "translatable_id" => "622c2a3a-0d0f-4f43-9488-ea68891732cc"],
            //758
            ["translation_id" => "ea076df9-9ff9-4847-8554-fce3b04b5cf2", "translatable_type" => "App\Models\Description", "translatable_id" => "60210146-a0d2-4a0d-99d2-0caa052dc4ac"],
            ["translation_id" => "4b643e9a-9994-4331-b928-957fe6ea0370", "translatable_type" => "App\Models\Description", "translatable_id" => "60210146-a0d2-4a0d-99d2-0caa052dc4ac"],
            ["translation_id" => "0472fa8a-34e8-46e7-a1b8-c9d3dd0e6c5d", "translatable_type" => "App\Models\Description", "translatable_id" => "60210146-a0d2-4a0d-99d2-0caa052dc4ac"],
            //759
            ["translation_id" => "060d858c-8a45-4a78-842b-ae8010fbc841", "translatable_type" => "App\Models\Description", "translatable_id" => "80427885-e49a-4b74-8232-3dc7c8118afb"],
            ["translation_id" => "af94683c-a5aa-493e-9b2e-7a80bee03d47", "translatable_type" => "App\Models\Description", "translatable_id" => "80427885-e49a-4b74-8232-3dc7c8118afb"],
            ["translation_id" => "7db160cf-4bfe-46d5-ab06-bb7678bf423f", "translatable_type" => "App\Models\Description", "translatable_id" => "80427885-e49a-4b74-8232-3dc7c8118afb"],
            //760
            ["translation_id" => "7e36b5f4-023f-4c65-b82b-942e25d23acc", "translatable_type" => "App\Models\Description", "translatable_id" => "8f95b60c-c2e1-4a43-ab64-9b3c2a63b1c9"],
            ["translation_id" => "ef242619-51f9-450f-8e9a-848ff012fedf", "translatable_type" => "App\Models\Description", "translatable_id" => "8f95b60c-c2e1-4a43-ab64-9b3c2a63b1c9"],
            ["translation_id" => "5d193fd9-d692-4d72-9865-bb268afd4799", "translatable_type" => "App\Models\Description", "translatable_id" => "8f95b60c-c2e1-4a43-ab64-9b3c2a63b1c9"],
            //761
            ["translation_id" => "bc714661-9cb8-467d-930c-b715b2be7238", "translatable_type" => "App\Models\Description", "translatable_id" => "14e9e4f6-ec66-49ca-8cbe-2b7cf68703ba"],
            ["translation_id" => "ca31ad55-11cf-42cc-8c05-1dc619641df8", "translatable_type" => "App\Models\Description", "translatable_id" => "14e9e4f6-ec66-49ca-8cbe-2b7cf68703ba"],
            ["translation_id" => "247f9b2e-d9e4-4279-9f43-82a6acb8b50f", "translatable_type" => "App\Models\Description", "translatable_id" => "14e9e4f6-ec66-49ca-8cbe-2b7cf68703ba"],
            //762
            ["translation_id" => "8ca1cd80-7e25-4306-8837-badc9d66b687", "translatable_type" => "App\Models\Description", "translatable_id" => "5bf5462a-24d3-4290-80e1-458886730abc"],
            ["translation_id" => "eb4f7cca-55b3-41f9-9214-33f11d27e172", "translatable_type" => "App\Models\Description", "translatable_id" => "5bf5462a-24d3-4290-80e1-458886730abc"],
            ["translation_id" => "cf1a269b-ee02-4071-883d-17489fe9342e", "translatable_type" => "App\Models\Description", "translatable_id" => "5bf5462a-24d3-4290-80e1-458886730abc"],
            //763
            ["translation_id" => "87ebc602-93d3-4193-babb-e0b0cf8ca0e7", "translatable_type" => "App\Models\Description", "translatable_id" => "894c7c0c-457b-4918-bf3a-6df7e1ecc015"],
            ["translation_id" => "7bc01ce5-01c5-4df4-9f66-1c423ac74f65", "translatable_type" => "App\Models\Description", "translatable_id" => "894c7c0c-457b-4918-bf3a-6df7e1ecc015"],
            ["translation_id" => "571fddea-0f5f-4423-a500-1937372ba773", "translatable_type" => "App\Models\Description", "translatable_id" => "894c7c0c-457b-4918-bf3a-6df7e1ecc015"],
            //764
            ["translation_id" => "9ce068f0-46fe-4f7a-93f6-51fe9f80029b", "translatable_type" => "App\Models\Description", "translatable_id" => "3982d496-541a-4b34-8668-a469af52c2f1"],
            ["translation_id" => "73ac6204-7118-4b30-a382-bb6c3c325625", "translatable_type" => "App\Models\Description", "translatable_id" => "3982d496-541a-4b34-8668-a469af52c2f1"],
            ["translation_id" => "bd7d5d33-f109-46ce-8187-964ee4f00b12", "translatable_type" => "App\Models\Description", "translatable_id" => "3982d496-541a-4b34-8668-a469af52c2f1"],
            //765
            ["translation_id" => "8c0bc103-ae54-4415-8904-fa98c24e5484", "translatable_type" => "App\Models\Description", "translatable_id" => "7e57c116-826a-44dd-ae79-ad49a88c8ecb"],
            ["translation_id" => "b2764df8-3f74-45f0-ad7c-3d928d16cd9d", "translatable_type" => "App\Models\Description", "translatable_id" => "7e57c116-826a-44dd-ae79-ad49a88c8ecb"],
            ["translation_id" => "c73b30bb-3a38-4244-bcde-9d918f16dad6", "translatable_type" => "App\Models\Description", "translatable_id" => "7e57c116-826a-44dd-ae79-ad49a88c8ecb"],
            //766
            ["translation_id" => "58618477-dd4f-4471-9141-c3d28aba9ba0", "translatable_type" => "App\Models\Description", "translatable_id" => "86fa1a07-49a5-4a13-90ab-f5a6f9947f24"],
            ["translation_id" => "ef5269f2-f4bd-41b8-8349-4fff27aa9826", "translatable_type" => "App\Models\Description", "translatable_id" => "86fa1a07-49a5-4a13-90ab-f5a6f9947f24"],
            ["translation_id" => "ee744a5d-8d56-4fc4-bdff-09baca90d56c", "translatable_type" => "App\Models\Description", "translatable_id" => "86fa1a07-49a5-4a13-90ab-f5a6f9947f24"],
            //767
            ["translation_id" => "8bb755e9-a0a7-4c7f-a349-f6348e6f74b4", "translatable_type" => "App\Models\Description", "translatable_id" => "444b3d1d-a833-4bcc-b733-df5fb60984aa"],
            ["translation_id" => "80d96262-c57f-433c-b424-5140aed3a4a4", "translatable_type" => "App\Models\Description", "translatable_id" => "444b3d1d-a833-4bcc-b733-df5fb60984aa"],
            ["translation_id" => "722f0ff2-59d8-4b1f-a7b5-c2f319593daa", "translatable_type" => "App\Models\Description", "translatable_id" => "444b3d1d-a833-4bcc-b733-df5fb60984aa"],
            //768
            ["translation_id" => "269cb08d-2e72-46c0-8fa0-8e8f6b108a4d", "translatable_type" => "App\Models\Description", "translatable_id" => "ad511146-801c-4211-8d8c-799cd051d1af"],
            ["translation_id" => "2efdfd22-9ac6-4381-a903-53f009d94b73", "translatable_type" => "App\Models\Description", "translatable_id" => "ad511146-801c-4211-8d8c-799cd051d1af"],
            ["translation_id" => "998d3abe-4f9c-4eda-a5e3-3776721a3921", "translatable_type" => "App\Models\Description", "translatable_id" => "ad511146-801c-4211-8d8c-799cd051d1af"],
            //769
            ["translation_id" => "f933e5a6-6075-4e12-afa4-72388ea87731", "translatable_type" => "App\Models\Description", "translatable_id" => "a357f0cc-34ea-406f-9703-f63e1adc2853"],
            ["translation_id" => "e3099ce3-7223-42a6-aa88-c7ab4b41a77e", "translatable_type" => "App\Models\Description", "translatable_id" => "a357f0cc-34ea-406f-9703-f63e1adc2853"],
            ["translation_id" => "93a4c30e-d0eb-4613-8eae-b69d4919b83e", "translatable_type" => "App\Models\Description", "translatable_id" => "a357f0cc-34ea-406f-9703-f63e1adc2853"],
            //770
            ["translation_id" => "2fbb54a4-df85-4b60-9e45-4cf4cda15c09", "translatable_type" => "App\Models\Description", "translatable_id" => "5ad08914-fd73-400e-bc36-846d8a936f0b"],
            ["translation_id" => "f55fd46f-8585-42fa-a81e-b62f2f96951f", "translatable_type" => "App\Models\Description", "translatable_id" => "5ad08914-fd73-400e-bc36-846d8a936f0b"],
            ["translation_id" => "215df4f2-5151-4c2b-9d4b-94b8ff449bf5", "translatable_type" => "App\Models\Description", "translatable_id" => "5ad08914-fd73-400e-bc36-846d8a936f0b"],
            //771
            ["translation_id" => "c9645357-f77f-4f1f-a2cd-2a7412052479", "translatable_type" => "App\Models\Description", "translatable_id" => "0f8887d0-dd01-47ba-baa9-e83d5b07635c"],
            ["translation_id" => "c2238083-c8c6-481e-a8f1-3bbf84b4c9fa", "translatable_type" => "App\Models\Description", "translatable_id" => "0f8887d0-dd01-47ba-baa9-e83d5b07635c"],
            ["translation_id" => "5214bfa5-e93d-4d76-be38-2786faa5577a", "translatable_type" => "App\Models\Description", "translatable_id" => "0f8887d0-dd01-47ba-baa9-e83d5b07635c"],
            //772
            ["translation_id" => "69bc852b-06e3-4c2e-a851-2a9abc247675", "translatable_type" => "App\Models\Description", "translatable_id" => "281fc6e2-fcd8-479a-8b80-2e222c817249"],
            ["translation_id" => "3d83289e-785e-4b9d-a7c6-414cba1ae227", "translatable_type" => "App\Models\Description", "translatable_id" => "281fc6e2-fcd8-479a-8b80-2e222c817249"],
            ["translation_id" => "fb712d79-2455-47b2-8ec4-cf731393cabe", "translatable_type" => "App\Models\Description", "translatable_id" => "281fc6e2-fcd8-479a-8b80-2e222c817249"],
            //773
            ["translation_id" => "09d9f055-eb16-41e1-a95b-17c656f0ff25", "translatable_type" => "App\Models\Description", "translatable_id" => "79360bef-a4cd-4389-9c02-6426cd4b00d5"],
            ["translation_id" => "58031f15-d8a0-4b2b-84ba-4ad18c015335", "translatable_type" => "App\Models\Description", "translatable_id" => "79360bef-a4cd-4389-9c02-6426cd4b00d5"],
            ["translation_id" => "e3801cd5-3431-4bd6-8b0c-26ac6e1db1ce", "translatable_type" => "App\Models\Description", "translatable_id" => "79360bef-a4cd-4389-9c02-6426cd4b00d5"],
            //774
            ["translation_id" => "efcd9b02-032b-4f1b-a6c0-5cda18f7b6af", "translatable_type" => "App\Models\Description", "translatable_id" => "3088178b-8c44-45a8-84ac-9a685fa4c5f9"],
            ["translation_id" => "2d3dccaa-8718-48b8-a8a7-c0ae9e6899d6", "translatable_type" => "App\Models\Description", "translatable_id" => "3088178b-8c44-45a8-84ac-9a685fa4c5f9"],
            ["translation_id" => "8bb30bfe-505a-4b6d-8432-fe2b56a57403", "translatable_type" => "App\Models\Description", "translatable_id" => "3088178b-8c44-45a8-84ac-9a685fa4c5f9"],
            //775
            ["translation_id" => "c96e9f04-bcca-4f67-8163-aa237e7cdd56", "translatable_type" => "App\Models\Description", "translatable_id" => "3cb32ab5-8547-4c07-a738-45ebc82def09"],
            ["translation_id" => "d0175f16-5bf2-49fd-845c-6d4f31a813c9", "translatable_type" => "App\Models\Description", "translatable_id" => "3cb32ab5-8547-4c07-a738-45ebc82def09"],
            ["translation_id" => "db620ef6-d603-43e2-827b-e6bdeef9f3fd", "translatable_type" => "App\Models\Description", "translatable_id" => "3cb32ab5-8547-4c07-a738-45ebc82def09"],
            //776
            ["translation_id" => "fd1aa779-43e7-4ab8-a407-b124a852b235", "translatable_type" => "App\Models\Description", "translatable_id" => "1fc4cab5-68be-4914-9225-fd5c1e67fffb"],
            ["translation_id" => "ad7e2869-cd1c-4ae1-bd8b-cb1120e02db7", "translatable_type" => "App\Models\Description", "translatable_id" => "1fc4cab5-68be-4914-9225-fd5c1e67fffb"],
            ["translation_id" => "e1e119cc-15bc-46df-82e9-7fa88bd134e2", "translatable_type" => "App\Models\Description", "translatable_id" => "1fc4cab5-68be-4914-9225-fd5c1e67fffb"],
            //777
            ["translation_id" => "c0317e37-2a6a-4f86-a7e6-88b94314b5be", "translatable_type" => "App\Models\Description", "translatable_id" => "d45047e7-c389-4389-b6f6-8602c2dfc0ab"],
            ["translation_id" => "e9f31bdd-c54b-4ae6-97a1-1bc07819066c", "translatable_type" => "App\Models\Description", "translatable_id" => "d45047e7-c389-4389-b6f6-8602c2dfc0ab"],
            ["translation_id" => "c9a2d6c6-98c3-4d5d-b9f7-54e6e38f240d", "translatable_type" => "App\Models\Description", "translatable_id" => "d45047e7-c389-4389-b6f6-8602c2dfc0ab"],
            //778
            ["translation_id" => "e17caa22-f53b-4e9c-9d50-9602100b2f0a", "translatable_type" => "App\Models\Description", "translatable_id" => "fb09f807-072e-4ef0-8bba-e65aa6e641fe"],
            ["translation_id" => "efd3b013-37d5-4ea9-b78a-e3b1b1bbba2e", "translatable_type" => "App\Models\Description", "translatable_id" => "fb09f807-072e-4ef0-8bba-e65aa6e641fe"],
            ["translation_id" => "f40388ec-d1f0-4b9d-8b96-f04ce3f484a0", "translatable_type" => "App\Models\Description", "translatable_id" => "fb09f807-072e-4ef0-8bba-e65aa6e641fe"],
            //779
            ["translation_id" => "cb6e89cd-f4c1-4b75-8146-c1b09e473825", "translatable_type" => "App\Models\Description", "translatable_id" => "ab2231dd-40ed-4cad-97e6-8f5998dec425"],
            ["translation_id" => "2bada1e0-4739-4998-9eb7-76b1373f8ea8", "translatable_type" => "App\Models\Description", "translatable_id" => "ab2231dd-40ed-4cad-97e6-8f5998dec425"],
            ["translation_id" => "93294ab4-4aae-4bbd-8da3-8757f8a5b434", "translatable_type" => "App\Models\Description", "translatable_id" => "ab2231dd-40ed-4cad-97e6-8f5998dec425"],
            //780
            ["translation_id" => "4c6698cc-ba1a-4f1e-abb2-2392645ae556", "translatable_type" => "App\Models\Description", "translatable_id" => "3181bf74-dcbd-4389-a6b2-1edaab8d1695"],
            ["translation_id" => "a6f70fd5-af52-4ed5-82a4-f253256d85ba", "translatable_type" => "App\Models\Description", "translatable_id" => "3181bf74-dcbd-4389-a6b2-1edaab8d1695"],
            ["translation_id" => "5ae7b2b6-9df0-4429-9479-e8adb3d650d9", "translatable_type" => "App\Models\Description", "translatable_id" => "3181bf74-dcbd-4389-a6b2-1edaab8d1695"],
            //781
            ["translation_id" => "5c004624-d568-4bfb-8fd3-217520793983", "translatable_type" => "App\Models\Description", "translatable_id" => "d711a7ea-f6cd-487b-bc7b-dda934bc4736"],
            ["translation_id" => "b0828e06-9316-494b-b43c-375770631133", "translatable_type" => "App\Models\Description", "translatable_id" => "d711a7ea-f6cd-487b-bc7b-dda934bc4736"],
            ["translation_id" => "853afdc4-09f8-428b-9240-10fb800b529d", "translatable_type" => "App\Models\Description", "translatable_id" => "d711a7ea-f6cd-487b-bc7b-dda934bc4736"],
            //782
            ["translation_id" => "179a4c80-88dc-493c-b3c5-feeb72c2845a", "translatable_type" => "App\Models\Description", "translatable_id" => "ae3ef7ea-48cd-4e90-b261-91fbc2caecec"],
            ["translation_id" => "2aa63bf7-7113-4cbb-9d00-e3561f650326", "translatable_type" => "App\Models\Description", "translatable_id" => "ae3ef7ea-48cd-4e90-b261-91fbc2caecec"],
            ["translation_id" => "4b6a49e1-bec1-4b7e-a517-9f5fb054fbf7", "translatable_type" => "App\Models\Description", "translatable_id" => "ae3ef7ea-48cd-4e90-b261-91fbc2caecec"],
            //783
            ["translation_id" => "836c051e-32c5-423c-aff8-cf6757c49164", "translatable_type" => "App\Models\Description", "translatable_id" => "ec3dd059-dcd2-4f64-87d0-f68a62cb5f05"],
            ["translation_id" => "df09f580-bba4-4ce3-af17-ecf2e9dff3e3", "translatable_type" => "App\Models\Description", "translatable_id" => "ec3dd059-dcd2-4f64-87d0-f68a62cb5f05"],
            ["translation_id" => "20409f91-63a0-4082-b636-5ab7f0841e2a", "translatable_type" => "App\Models\Description", "translatable_id" => "ec3dd059-dcd2-4f64-87d0-f68a62cb5f05"],
            //784
            ["translation_id" => "0a579203-e377-4253-8b78-59260a40bb5f", "translatable_type" => "App\Models\Description", "translatable_id" => "a9690477-5e4c-465a-b83c-f8f18dcb39cb"],
            ["translation_id" => "373824fa-cac4-43d1-a727-3daad64aa4e0", "translatable_type" => "App\Models\Description", "translatable_id" => "a9690477-5e4c-465a-b83c-f8f18dcb39cb"],
            ["translation_id" => "2b08e181-1226-4595-90eb-db0e5e5742be", "translatable_type" => "App\Models\Description", "translatable_id" => "a9690477-5e4c-465a-b83c-f8f18dcb39cb"],
            //785
            ["translation_id" => "ebcc1599-6be3-406d-a156-1826f5abd02c", "translatable_type" => "App\Models\Description", "translatable_id" => "f9f64be1-802f-4ceb-8166-dfc3036cb178"],
            ["translation_id" => "8b9027c6-2b9b-48fe-90da-4ae2795f73a4", "translatable_type" => "App\Models\Description", "translatable_id" => "f9f64be1-802f-4ceb-8166-dfc3036cb178"],
            ["translation_id" => "f3387e87-4722-4b90-b0cc-d184c6175de6", "translatable_type" => "App\Models\Description", "translatable_id" => "f9f64be1-802f-4ceb-8166-dfc3036cb178"],
            //786
            ["translation_id" => "b620d66a-cc9c-42c5-8408-e4fb13a08529", "translatable_type" => "App\Models\Description", "translatable_id" => "045b69f2-ce7d-45af-b634-9a68421e5438"],
            ["translation_id" => "157ca2b9-bee2-4a5d-9504-beed304ff3d6", "translatable_type" => "App\Models\Description", "translatable_id" => "045b69f2-ce7d-45af-b634-9a68421e5438"],
            ["translation_id" => "04ba258a-1d17-4b9c-8d2c-0723e1dc4d02", "translatable_type" => "App\Models\Description", "translatable_id" => "045b69f2-ce7d-45af-b634-9a68421e5438"],
            //787
            ["translation_id" => "c05c38dd-9a5a-43ce-8688-e25e0b0b70dd", "translatable_type" => "App\Models\Description", "translatable_id" => "63e748f1-5427-40dc-a612-2dc504d9d51e"],
            ["translation_id" => "3f7f9197-7548-4a62-b396-501aab1f80a6", "translatable_type" => "App\Models\Description", "translatable_id" => "63e748f1-5427-40dc-a612-2dc504d9d51e"],
            ["translation_id" => "16e746be-8818-41cd-9c52-c833fbed07ee", "translatable_type" => "App\Models\Description", "translatable_id" => "63e748f1-5427-40dc-a612-2dc504d9d51e"],
            //788
            ["translation_id" => "e3c2f72f-1bfb-45f3-9029-4d17f408faee", "translatable_type" => "App\Models\Description", "translatable_id" => "0ce2280b-9353-412a-b59b-86ae140aa095"],
            ["translation_id" => "6d410bb7-8781-4f28-97c5-936b4b85d6e7", "translatable_type" => "App\Models\Description", "translatable_id" => "0ce2280b-9353-412a-b59b-86ae140aa095"],
            ["translation_id" => "7e2abd19-b37f-401e-98ef-c80c746aedbe", "translatable_type" => "App\Models\Description", "translatable_id" => "0ce2280b-9353-412a-b59b-86ae140aa095"],
            //789
            ["translation_id" => "2e491941-7c12-432e-97d8-d1a38940db46", "translatable_type" => "App\Models\Description", "translatable_id" => "96f53612-c413-48f4-9b8a-c7319a19f4fe"],
            ["translation_id" => "92b50d63-c5fd-4d6c-ae37-80804c002eeb", "translatable_type" => "App\Models\Description", "translatable_id" => "96f53612-c413-48f4-9b8a-c7319a19f4fe"],
            ["translation_id" => "fb10187e-e347-44a8-817d-8506ccac6112", "translatable_type" => "App\Models\Description", "translatable_id" => "96f53612-c413-48f4-9b8a-c7319a19f4fe"],
            //790
            ["translation_id" => "dcb25570-30a2-4803-bc6b-45747d749cb0", "translatable_type" => "App\Models\Description", "translatable_id" => "159d6492-f13b-4b20-bec6-03dcb3774ec8"],
            ["translation_id" => "af056be8-24c0-4d66-9088-52f9fe9a0c4d", "translatable_type" => "App\Models\Description", "translatable_id" => "159d6492-f13b-4b20-bec6-03dcb3774ec8"],
            ["translation_id" => "7ced564e-9399-43c7-8905-695bbbd2abb7", "translatable_type" => "App\Models\Description", "translatable_id" => "159d6492-f13b-4b20-bec6-03dcb3774ec8"],
            //791
            ["translation_id" => "f6126ed5-b8f4-40cf-b463-bbeeeebeaaff", "translatable_type" => "App\Models\Description", "translatable_id" => "1f57db6b-b7b7-4849-ada4-9c8d8e0f3a6f"],
            ["translation_id" => "dd03f512-816a-4f8b-8a35-f82811807f7f", "translatable_type" => "App\Models\Description", "translatable_id" => "1f57db6b-b7b7-4849-ada4-9c8d8e0f3a6f"],
            ["translation_id" => "989696ea-3250-4bee-bdbb-9023e0e5cad5", "translatable_type" => "App\Models\Description", "translatable_id" => "1f57db6b-b7b7-4849-ada4-9c8d8e0f3a6f"],
            //792
            ["translation_id" => "41b69209-c98d-4c8b-ac90-dce0c18ac9a8", "translatable_type" => "App\Models\Description", "translatable_id" => "04fbcf5b-75c1-42d6-baf3-e8cb00f99333"],
            ["translation_id" => "34102c82-6a4d-4bb9-bb59-676bdef43353", "translatable_type" => "App\Models\Description", "translatable_id" => "04fbcf5b-75c1-42d6-baf3-e8cb00f99333"],
            ["translation_id" => "06932f9f-6e0b-4648-9473-2f301cda59b8", "translatable_type" => "App\Models\Description", "translatable_id" => "04fbcf5b-75c1-42d6-baf3-e8cb00f99333"],
            //793
            ["translation_id" => "06a4f2b7-79fb-4b5c-9c00-2a8ddb70e8a9", "translatable_type" => "App\Models\Description", "translatable_id" => "51e13864-1940-4868-aabd-18ee0b819c92"],
            ["translation_id" => "b41d1e4a-af07-4b95-a13a-c9e616125abe", "translatable_type" => "App\Models\Description", "translatable_id" => "51e13864-1940-4868-aabd-18ee0b819c92"],
            ["translation_id" => "507e6f6b-1b75-4bd2-8fc1-7f0faa8bb58c", "translatable_type" => "App\Models\Description", "translatable_id" => "51e13864-1940-4868-aabd-18ee0b819c92"],
            //794
            ["translation_id" => "e4193b94-729c-43e5-a4bb-c92099b2b24d", "translatable_type" => "App\Models\Description", "translatable_id" => "a083652f-d3be-43cf-b248-c15aa1814d22"],
            ["translation_id" => "407fad37-f6e9-44c2-9b15-76824252ba1d", "translatable_type" => "App\Models\Description", "translatable_id" => "a083652f-d3be-43cf-b248-c15aa1814d22"],
            ["translation_id" => "095ffbf6-a496-4e2c-a0c2-d6aa1421da13", "translatable_type" => "App\Models\Description", "translatable_id" => "a083652f-d3be-43cf-b248-c15aa1814d22"],
            //795
            ["translation_id" => "317ddc81-ddde-428b-9746-8785dd63fd95", "translatable_type" => "App\Models\Description", "translatable_id" => "56af4370-099b-4d8f-9230-2721f58bf794"],
            ["translation_id" => "befa0671-1e6f-4b90-b163-2c324d7154f3", "translatable_type" => "App\Models\Description", "translatable_id" => "56af4370-099b-4d8f-9230-2721f58bf794"],
            ["translation_id" => "548cef94-473a-4f96-907c-3a532ef18d86", "translatable_type" => "App\Models\Description", "translatable_id" => "56af4370-099b-4d8f-9230-2721f58bf794"],
            //796
            ["translation_id" => "34acfa95-5186-460d-8e1b-7eab5170b88e", "translatable_type" => "App\Models\Description", "translatable_id" => "ba871331-2f35-4398-8825-1aeaaaca47a6"],
            ["translation_id" => "9cd7e84a-9c68-4cd6-93a7-2ff22cf64061", "translatable_type" => "App\Models\Description", "translatable_id" => "ba871331-2f35-4398-8825-1aeaaaca47a6"],
            ["translation_id" => "fa941a63-f9a9-4aba-b984-35bcd240a763", "translatable_type" => "App\Models\Description", "translatable_id" => "ba871331-2f35-4398-8825-1aeaaaca47a6"],
            //797
            ["translation_id" => "c0b456f3-7b80-45b8-bfb1-3203a5d9f458", "translatable_type" => "App\Models\Description", "translatable_id" => "96bbc1b2-f162-4a66-9dd6-4126cbbbe378"],
            ["translation_id" => "917a9fbc-60a8-4e2a-b84f-3285cf19bf35", "translatable_type" => "App\Models\Description", "translatable_id" => "96bbc1b2-f162-4a66-9dd6-4126cbbbe378"],
            ["translation_id" => "0e170da4-8709-4de4-b346-98350c3eb7e0", "translatable_type" => "App\Models\Description", "translatable_id" => "96bbc1b2-f162-4a66-9dd6-4126cbbbe378"],
            //798
            ["translation_id" => "24a30d07-9430-440c-94ad-a60c92d8553e", "translatable_type" => "App\Models\Description", "translatable_id" => "60081f8b-8076-4814-a899-4d72dd582ce7"],
            ["translation_id" => "05783e16-3568-4e71-aa0d-9a755d19a3dd", "translatable_type" => "App\Models\Description", "translatable_id" => "60081f8b-8076-4814-a899-4d72dd582ce7"],
            ["translation_id" => "f1548317-1185-4fad-898d-ef473fc65ed1", "translatable_type" => "App\Models\Description", "translatable_id" => "60081f8b-8076-4814-a899-4d72dd582ce7"],
            //799
            ["translation_id" => "e247d481-a0db-4fcb-a4b9-486bc8424a9e", "translatable_type" => "App\Models\Description", "translatable_id" => "0f6f06cc-85e6-40c7-88be-6129f1b017c7"],
            ["translation_id" => "d69b44fe-032e-46e5-941a-bd61b01278df", "translatable_type" => "App\Models\Description", "translatable_id" => "0f6f06cc-85e6-40c7-88be-6129f1b017c7"],
            ["translation_id" => "ff317231-f67e-4148-8077-02a45d77f766", "translatable_type" => "App\Models\Description", "translatable_id" => "0f6f06cc-85e6-40c7-88be-6129f1b017c7"],
            //800
            ["translation_id" => "9c213290-f870-49c9-b643-dc96193f9731", "translatable_type" => "App\Models\Description", "translatable_id" => "e1f652bb-f035-459a-b2ea-72a4f286595c"],
            ["translation_id" => "34a116a3-15e9-485f-ac2c-c85466571bca", "translatable_type" => "App\Models\Description", "translatable_id" => "e1f652bb-f035-459a-b2ea-72a4f286595c"],
            ["translation_id" => "af380c2f-a2e6-496e-a666-8d6a0b74715b", "translatable_type" => "App\Models\Description", "translatable_id" => "e1f652bb-f035-459a-b2ea-72a4f286595c"],
            //801
            ["translation_id" => "f41bb9db-55f0-42d1-ad3d-df65e02ffd0f", "translatable_type" => "App\Models\Description", "translatable_id" => "7abec4e1-27b8-41a4-95fa-56fdbc58a18e"],
            ["translation_id" => "2e380187-7b83-4ddd-81ab-53d7f2ab8dd6", "translatable_type" => "App\Models\Description", "translatable_id" => "7abec4e1-27b8-41a4-95fa-56fdbc58a18e"],
            ["translation_id" => "f92ae711-1582-4efa-b26a-cc64a47bbc4b", "translatable_type" => "App\Models\Description", "translatable_id" => "7abec4e1-27b8-41a4-95fa-56fdbc58a18e"],
            //802
            ["translation_id" => "4464d2bd-379e-47ac-88b4-e84e2f2d479f", "translatable_type" => "App\Models\Description", "translatable_id" => "065a4d1c-064a-4d04-a3eb-399cde8eb74a"],
            ["translation_id" => "7700967a-5bf0-4212-b742-d9dffde85c1b", "translatable_type" => "App\Models\Description", "translatable_id" => "065a4d1c-064a-4d04-a3eb-399cde8eb74a"],
            ["translation_id" => "c9f4e66f-901e-4313-9720-120d597aa5fa", "translatable_type" => "App\Models\Description", "translatable_id" => "065a4d1c-064a-4d04-a3eb-399cde8eb74a"],
            //803
            ["translation_id" => "738cf876-234d-4f77-868c-78235609281f", "translatable_type" => "App\Models\Description", "translatable_id" => "5f8d6d09-e581-4263-bf06-8b9a4555bb82"],
            ["translation_id" => "d2709819-e629-4549-ade9-5dd7a392b7fc", "translatable_type" => "App\Models\Description", "translatable_id" => "5f8d6d09-e581-4263-bf06-8b9a4555bb82"],
            ["translation_id" => "cc134974-a49f-4e4b-b6f2-3dc37637503c", "translatable_type" => "App\Models\Description", "translatable_id" => "5f8d6d09-e581-4263-bf06-8b9a4555bb82"],
            //804
            ["translation_id" => "d2ebd870-5a63-482a-9368-1facdc0df8c7", "translatable_type" => "App\Models\Description", "translatable_id" => "2d16b40c-9950-445b-82fc-db27825ab5e8"],
            ["translation_id" => "accb61c1-690b-4182-be83-d7ad302ff695", "translatable_type" => "App\Models\Description", "translatable_id" => "2d16b40c-9950-445b-82fc-db27825ab5e8"],
            ["translation_id" => "51a891f0-fe65-4f71-a9b6-77708d81cc82", "translatable_type" => "App\Models\Description", "translatable_id" => "2d16b40c-9950-445b-82fc-db27825ab5e8"],
            //805
            ["translation_id" => "e1a583b5-ae64-4151-a1ed-753d8a7a11ff", "translatable_type" => "App\Models\Description", "translatable_id" => "b3724c12-9099-46c2-a80a-0daf45abba4e"],
            ["translation_id" => "537ac64c-ed87-436e-a92d-a0e52bb9a994", "translatable_type" => "App\Models\Description", "translatable_id" => "b3724c12-9099-46c2-a80a-0daf45abba4e"],
            ["translation_id" => "4917b067-6b3d-4027-95b0-ddcab4e3f477", "translatable_type" => "App\Models\Description", "translatable_id" => "b3724c12-9099-46c2-a80a-0daf45abba4e"],
            //806
            ["translation_id" => "f15183bc-e4fc-4735-9399-d18fee3e0b20", "translatable_type" => "App\Models\Description", "translatable_id" => "0c3e883b-c9a3-4bd4-9706-8101efc7beb9"],
            ["translation_id" => "bcad03e3-60f8-408b-997c-8396a2d34149", "translatable_type" => "App\Models\Description", "translatable_id" => "0c3e883b-c9a3-4bd4-9706-8101efc7beb9"],
            ["translation_id" => "47d9fc29-7aa2-40a3-bc45-40bb4caace4b", "translatable_type" => "App\Models\Description", "translatable_id" => "0c3e883b-c9a3-4bd4-9706-8101efc7beb9"],
            //807
            ["translation_id" => "04b40b8c-c618-41fa-80f9-017c41a2e5ab", "translatable_type" => "App\Models\Description", "translatable_id" => "98eb4fa6-95f3-44e8-ad3d-9085619e9750"],
            ["translation_id" => "d1d51bd0-328c-4eb2-a4f2-cd17792a4b8f", "translatable_type" => "App\Models\Description", "translatable_id" => "98eb4fa6-95f3-44e8-ad3d-9085619e9750"],
            ["translation_id" => "eb37b61d-56df-494b-bd31-72b242da11e0", "translatable_type" => "App\Models\Description", "translatable_id" => "98eb4fa6-95f3-44e8-ad3d-9085619e9750"],
            //808
            ["translation_id" => "fdb1810b-377a-4d00-bb5c-1e5cab4e3832", "translatable_type" => "App\Models\Description", "translatable_id" => "b4fb0c22-189a-4214-9d73-6550f7b6bc15"],
            ["translation_id" => "99ea671d-b25f-48ad-b305-32379fe431db", "translatable_type" => "App\Models\Description", "translatable_id" => "b4fb0c22-189a-4214-9d73-6550f7b6bc15"],
            ["translation_id" => "98db1779-ae62-4488-857e-b2967d46268d", "translatable_type" => "App\Models\Description", "translatable_id" => "b4fb0c22-189a-4214-9d73-6550f7b6bc15"],
            //809
            ["translation_id" => "746937b0-f249-4c55-9925-1535f878dc6f", "translatable_type" => "App\Models\Description", "translatable_id" => "d55483af-54bb-44d2-8e21-98c7f6075ff4"],
            ["translation_id" => "1a48521a-90e4-4532-ab0f-c81356721f68", "translatable_type" => "App\Models\Description", "translatable_id" => "d55483af-54bb-44d2-8e21-98c7f6075ff4"],
            ["translation_id" => "48d2ea4c-bbca-411a-8b76-f02bfc95bb21", "translatable_type" => "App\Models\Description", "translatable_id" => "d55483af-54bb-44d2-8e21-98c7f6075ff4"],
            //810
            ["translation_id" => "0745792a-2045-4753-af27-d605a9aa0995", "translatable_type" => "App\Models\Description", "translatable_id" => "201bb6d3-178e-415b-af10-9fdc6c872ae0"],
            ["translation_id" => "cd275066-413c-4074-8de5-6de04c453367", "translatable_type" => "App\Models\Description", "translatable_id" => "201bb6d3-178e-415b-af10-9fdc6c872ae0"],
            ["translation_id" => "c5815c6b-9ff5-44ba-96d6-fafd566e4a54", "translatable_type" => "App\Models\Description", "translatable_id" => "201bb6d3-178e-415b-af10-9fdc6c872ae0"],
            //811
            ["translation_id" => "fdd279df-d425-4864-9f34-5009967c4478", "translatable_type" => "App\Models\Description", "translatable_id" => "8dd78ecc-3a63-4b58-a748-ef3b8e42812d"],
            ["translation_id" => "baacaaf5-9ba9-4fb7-aa76-d2194e54a133", "translatable_type" => "App\Models\Description", "translatable_id" => "8dd78ecc-3a63-4b58-a748-ef3b8e42812d"],
            ["translation_id" => "3f920856-a295-4d7f-8aba-df1bc25234f7", "translatable_type" => "App\Models\Description", "translatable_id" => "8dd78ecc-3a63-4b58-a748-ef3b8e42812d"],
            //812
            ["translation_id" => "26d9914e-637b-4bf7-a7b3-ac98065c288b", "translatable_type" => "App\Models\Description", "translatable_id" => "1b603c21-ba5c-42ed-a1fd-452021999e3c"],
            ["translation_id" => "2827e1bf-5af7-4f4b-87c5-ddc413424165", "translatable_type" => "App\Models\Description", "translatable_id" => "1b603c21-ba5c-42ed-a1fd-452021999e3c"],
            ["translation_id" => "da07abc3-1493-4088-a25d-b0f1e0b5548a", "translatable_type" => "App\Models\Description", "translatable_id" => "1b603c21-ba5c-42ed-a1fd-452021999e3c"],
            //813
            ["translation_id" => "9365b327-01b8-4c2e-8cee-800dcd70fea9", "translatable_type" => "App\Models\Description", "translatable_id" => "435c5b04-064d-480c-838a-6048ecaa5876"],
            ["translation_id" => "db54ca09-fb4d-4487-8b25-8448877391d0", "translatable_type" => "App\Models\Description", "translatable_id" => "435c5b04-064d-480c-838a-6048ecaa5876"],
            ["translation_id" => "dffc6582-b652-4f2b-b904-8e377b7471ad", "translatable_type" => "App\Models\Description", "translatable_id" => "435c5b04-064d-480c-838a-6048ecaa5876"],
            //814
            ["translation_id" => "e5ffe18d-8b70-482a-a70b-61818c85d1da", "translatable_type" => "App\Models\Description", "translatable_id" => "49fa72f9-bb35-4a73-8677-497eb291e226"],
            ["translation_id" => "35bacbc7-6a80-4482-9e5d-505fdb6a5695", "translatable_type" => "App\Models\Description", "translatable_id" => "49fa72f9-bb35-4a73-8677-497eb291e226"],
            ["translation_id" => "177c22f3-16f9-473f-9f6e-5fbbe7463d55", "translatable_type" => "App\Models\Description", "translatable_id" => "49fa72f9-bb35-4a73-8677-497eb291e226"],
            //815
            ["translation_id" => "0c0b5cc3-a01a-44e3-baeb-c538514de78d", "translatable_type" => "App\Models\Description", "translatable_id" => "81e7140a-a4cb-4174-beef-b14030fb3a95"],
            ["translation_id" => "b7b0a959-f4d6-46df-8360-60cfd76af27e", "translatable_type" => "App\Models\Description", "translatable_id" => "81e7140a-a4cb-4174-beef-b14030fb3a95"],
            ["translation_id" => "d7f2178b-bb63-4c88-afd0-56e8e9cd968a", "translatable_type" => "App\Models\Description", "translatable_id" => "81e7140a-a4cb-4174-beef-b14030fb3a95"],
            //816
            ["translation_id" => "60f01008-560c-4812-bf64-0f17c0e65488", "translatable_type" => "App\Models\Description", "translatable_id" => "f7425a43-d87a-4715-826f-8612d1457c2d"],
            ["translation_id" => "9ea21ba5-664f-4825-ac81-2bb219a5550f", "translatable_type" => "App\Models\Description", "translatable_id" => "f7425a43-d87a-4715-826f-8612d1457c2d"],
            ["translation_id" => "8ac071e5-4f6f-49f6-b250-e465251f6fbb", "translatable_type" => "App\Models\Description", "translatable_id" => "f7425a43-d87a-4715-826f-8612d1457c2d"],
            //817
            ["translation_id" => "4d635e28-fd62-47b4-a403-590a14c41101", "translatable_type" => "App\Models\Description", "translatable_id" => "94756c59-8652-484b-a832-92411152df71"],
            ["translation_id" => "4c26bc0c-f9d2-49c9-8cb5-2de7a9611b61", "translatable_type" => "App\Models\Description", "translatable_id" => "94756c59-8652-484b-a832-92411152df71"],
            ["translation_id" => "2d2600d2-80a2-4ff3-9a10-fe450c6fc8e4", "translatable_type" => "App\Models\Description", "translatable_id" => "94756c59-8652-484b-a832-92411152df71"],
            //818
            ["translation_id" => "352cd487-2ad9-49e1-bd72-6d13b885711f", "translatable_type" => "App\Models\Description", "translatable_id" => "393cc29b-f34b-44ec-b2e6-8eed9ef80a18"],
            ["translation_id" => "33d9266e-838a-4d39-8a4f-97a7191c026a", "translatable_type" => "App\Models\Description", "translatable_id" => "393cc29b-f34b-44ec-b2e6-8eed9ef80a18"],
            ["translation_id" => "9d62628f-03a4-41fb-924e-350636b6a284", "translatable_type" => "App\Models\Description", "translatable_id" => "393cc29b-f34b-44ec-b2e6-8eed9ef80a18"],
            //819
            ["translation_id" => "9d644f80-0756-4d3f-b99e-1762320b2a2c", "translatable_type" => "App\Models\Description", "translatable_id" => "eb218d43-4ade-4f3d-8362-fcbf0a5e0989"],
            ["translation_id" => "f7ae2507-2466-42be-8325-a30b11f68905", "translatable_type" => "App\Models\Description", "translatable_id" => "eb218d43-4ade-4f3d-8362-fcbf0a5e0989"],
            ["translation_id" => "356e095c-13bc-4aff-894d-2a6f190f69bd", "translatable_type" => "App\Models\Description", "translatable_id" => "eb218d43-4ade-4f3d-8362-fcbf0a5e0989"],
            //820
            ["translation_id" => "48fc2479-fbde-46e5-8a46-7f4d79045e44", "translatable_type" => "App\Models\Description", "translatable_id" => "f48f5aea-1725-44f9-b75e-18ab7ca36942"],
            ["translation_id" => "25e6a5f3-3b8f-4c69-a257-34d91da7189c", "translatable_type" => "App\Models\Description", "translatable_id" => "f48f5aea-1725-44f9-b75e-18ab7ca36942"],
            ["translation_id" => "0bb1c77b-ee2d-4ae1-b0ae-1e44a7010f8c", "translatable_type" => "App\Models\Description", "translatable_id" => "f48f5aea-1725-44f9-b75e-18ab7ca36942"],
            //821
            ["translation_id" => "6b7b50cd-e772-4fa6-ae24-06652bc040b4", "translatable_type" => "App\Models\Description", "translatable_id" => "5329254a-05d2-403e-8394-434ad055103a"],
            ["translation_id" => "a22f99f8-d4b7-4af2-b5d0-e7820e093b39", "translatable_type" => "App\Models\Description", "translatable_id" => "5329254a-05d2-403e-8394-434ad055103a"],
            ["translation_id" => "abd7526b-d141-4f02-a330-af95f1801304", "translatable_type" => "App\Models\Description", "translatable_id" => "5329254a-05d2-403e-8394-434ad055103a"],
            //822
            ["translation_id" => "fe709854-a9ce-4b4a-ad3e-1cb4899581fd", "translatable_type" => "App\Models\Description", "translatable_id" => "16965714-874f-418f-b269-f55017f868c5"],
            ["translation_id" => "9376b33b-d3fb-4fba-8398-832b0c2532c1", "translatable_type" => "App\Models\Description", "translatable_id" => "16965714-874f-418f-b269-f55017f868c5"],
            ["translation_id" => "55509743-71a7-4850-869e-b29ea8106b3c", "translatable_type" => "App\Models\Description", "translatable_id" => "16965714-874f-418f-b269-f55017f868c5"],
            //823
            ["translation_id" => "093704fc-2967-4ca7-a9d0-709133e24acc", "translatable_type" => "App\Models\Description", "translatable_id" => "87a46c05-6689-4180-ac43-e2fdca621825"],
            ["translation_id" => "3da9dffc-389b-4831-b3f3-0cc62e2058a0", "translatable_type" => "App\Models\Description", "translatable_id" => "87a46c05-6689-4180-ac43-e2fdca621825"],
            ["translation_id" => "ba633dea-c6f1-4492-979f-88fefccc87fe", "translatable_type" => "App\Models\Description", "translatable_id" => "87a46c05-6689-4180-ac43-e2fdca621825"],
            //824
            ["translation_id" => "202b5233-db36-4868-b9b3-194d7e91e87a", "translatable_type" => "App\Models\Description", "translatable_id" => "62e569e8-5707-43cf-8c6b-0028962f86c0"],
            ["translation_id" => "ab94d811-8e4e-43c5-8c0c-2e8e121bd8b4", "translatable_type" => "App\Models\Description", "translatable_id" => "62e569e8-5707-43cf-8c6b-0028962f86c0"],
            ["translation_id" => "5d406dc6-b408-4944-8e18-5e751cf0a5fb", "translatable_type" => "App\Models\Description", "translatable_id" => "62e569e8-5707-43cf-8c6b-0028962f86c0"],
            //825
            ["translation_id" => "4ad8b92f-d475-454c-bc5a-da515711029f", "translatable_type" => "App\Models\Description", "translatable_id" => "96182e4c-bdf3-41bc-b3b8-a86439440c57"],
            ["translation_id" => "c60e36dc-c233-4fdf-952c-50eb4bbfe764", "translatable_type" => "App\Models\Description", "translatable_id" => "96182e4c-bdf3-41bc-b3b8-a86439440c57"],
            ["translation_id" => "5aede68a-2858-4b59-820b-cdf076d78b2b", "translatable_type" => "App\Models\Description", "translatable_id" => "96182e4c-bdf3-41bc-b3b8-a86439440c57"],
            //826
            ["translation_id" => "1c098801-e3bd-4938-adb6-0d9d7a2da746", "translatable_type" => "App\Models\Description", "translatable_id" => "4528c734-a041-4de8-853d-e009469d600c"],
            ["translation_id" => "a36dc3aa-8f35-475b-a698-83e17c872fc2", "translatable_type" => "App\Models\Description", "translatable_id" => "4528c734-a041-4de8-853d-e009469d600c"],
            ["translation_id" => "87d26d7f-b79b-46a7-bb43-d8de0e1a9bee", "translatable_type" => "App\Models\Description", "translatable_id" => "4528c734-a041-4de8-853d-e009469d600c"],
            //827
            ["translation_id" => "0bd0f88b-3741-4c6a-b7b8-e811b9bbed36", "translatable_type" => "App\Models\Description", "translatable_id" => "f9319798-8b88-4731-a0dc-9c1b5ccb17d1"],
            ["translation_id" => "73174905-8f60-44a9-8247-b4e9fbbbe91f", "translatable_type" => "App\Models\Description", "translatable_id" => "f9319798-8b88-4731-a0dc-9c1b5ccb17d1"],
            ["translation_id" => "43980442-3314-4506-ae97-54b015431980", "translatable_type" => "App\Models\Description", "translatable_id" => "f9319798-8b88-4731-a0dc-9c1b5ccb17d1"],
            //828
            ["translation_id" => "8e9b1ddc-2d1f-4342-a280-5e67490d0844", "translatable_type" => "App\Models\Description", "translatable_id" => "7d4e2232-4261-4f53-aa38-5ba1d5403edf"],
            ["translation_id" => "d43a54d7-3f4b-4f05-b8e1-4df47f086b4d", "translatable_type" => "App\Models\Description", "translatable_id" => "7d4e2232-4261-4f53-aa38-5ba1d5403edf"],
            ["translation_id" => "3e0fa004-735e-44d9-ac72-f1ec9baf2d76", "translatable_type" => "App\Models\Description", "translatable_id" => "7d4e2232-4261-4f53-aa38-5ba1d5403edf"],
            //829
            ["translation_id" => "882567c8-f00b-48cb-a665-39230dff8f9b", "translatable_type" => "App\Models\Description", "translatable_id" => "5ac75733-6e69-4fed-a2a2-b93ff374549b"],
            ["translation_id" => "af6cb89b-0cf2-4bbb-843a-4d81e19089a0", "translatable_type" => "App\Models\Description", "translatable_id" => "5ac75733-6e69-4fed-a2a2-b93ff374549b"],
            ["translation_id" => "43c19b6e-26c3-4d4c-a555-d1fc157eb896", "translatable_type" => "App\Models\Description", "translatable_id" => "5ac75733-6e69-4fed-a2a2-b93ff374549b"],
            //830
            ["translation_id" => "03b91d3e-d503-442c-97ba-ede864736793", "translatable_type" => "App\Models\Description", "translatable_id" => "774be912-ebe9-4077-9adc-c354f20dc410"],
            ["translation_id" => "d85d9a82-9384-43c4-8b3e-fc5684a56096", "translatable_type" => "App\Models\Description", "translatable_id" => "774be912-ebe9-4077-9adc-c354f20dc410"],
            ["translation_id" => "01e679a6-dfd0-461f-bb28-ddaca5f8c44d", "translatable_type" => "App\Models\Description", "translatable_id" => "774be912-ebe9-4077-9adc-c354f20dc410"],
            //831
            ["translation_id" => "62c7ab0b-0620-4779-90af-72c99c65e410", "translatable_type" => "App\Models\Description", "translatable_id" => "dee633a2-5248-4133-9042-ed1af3411d2d"],
            ["translation_id" => "59af7a9e-76ce-4741-b872-6d813b686a58", "translatable_type" => "App\Models\Description", "translatable_id" => "dee633a2-5248-4133-9042-ed1af3411d2d"],
            ["translation_id" => "93005059-8d67-493b-9f3a-53f1564498d0", "translatable_type" => "App\Models\Description", "translatable_id" => "dee633a2-5248-4133-9042-ed1af3411d2d"],
            //832
            ["translation_id" => "caf8c632-55b1-47fd-8c02-a28b1538b085", "translatable_type" => "App\Models\Description", "translatable_id" => "24290f18-46d8-4702-b06d-a5eb38079d95"],
            ["translation_id" => "53e206a2-d520-44b1-8848-cd3cf02ac317", "translatable_type" => "App\Models\Description", "translatable_id" => "24290f18-46d8-4702-b06d-a5eb38079d95"],
            ["translation_id" => "49d62a86-4ce9-4f77-a57f-edd70e4ef25a", "translatable_type" => "App\Models\Description", "translatable_id" => "24290f18-46d8-4702-b06d-a5eb38079d95"],
            //833
            ["translation_id" => "d12c3aa6-44e5-44ea-89ee-fa80f08bbc58", "translatable_type" => "App\Models\Description", "translatable_id" => "45814432-1664-40df-9525-bc968eb850e6"],
            ["translation_id" => "9d10011a-68d5-437d-8337-d41d83baccee", "translatable_type" => "App\Models\Description", "translatable_id" => "45814432-1664-40df-9525-bc968eb850e6"],
            ["translation_id" => "94ff2d95-3aba-454c-8671-a4dbb8f7de4c", "translatable_type" => "App\Models\Description", "translatable_id" => "45814432-1664-40df-9525-bc968eb850e6"],
            //834
            ["translation_id" => "5d8c03dd-885f-4d2a-8dfe-18ae9d243b03", "translatable_type" => "App\Models\Description", "translatable_id" => "c7ee5d26-be3e-41b8-ae24-6e4bd7ff1cf6"],
            ["translation_id" => "d29622a4-86b2-4095-8747-9decc8f99ddc", "translatable_type" => "App\Models\Description", "translatable_id" => "c7ee5d26-be3e-41b8-ae24-6e4bd7ff1cf6"],
            ["translation_id" => "79a64634-043b-4d8e-86e5-84c3d0c37647", "translatable_type" => "App\Models\Description", "translatable_id" => "c7ee5d26-be3e-41b8-ae24-6e4bd7ff1cf6"],
            //835
            ["translation_id" => "62e67615-d4da-49f3-a34a-64a16d7a1bcb", "translatable_type" => "App\Models\Description", "translatable_id" => "561fc7fa-5c5e-487b-ba25-b39e1b5e724a"],
            ["translation_id" => "4cba7fb2-12ee-40ef-aad2-96b281c4611e", "translatable_type" => "App\Models\Description", "translatable_id" => "561fc7fa-5c5e-487b-ba25-b39e1b5e724a"],
            ["translation_id" => "0116e995-7834-4cf2-9316-32d663d81d09", "translatable_type" => "App\Models\Description", "translatable_id" => "561fc7fa-5c5e-487b-ba25-b39e1b5e724a"],
            //836
            ["translation_id" => "9f03b129-6c12-4959-95b7-c7e24f46be0c", "translatable_type" => "App\Models\Description", "translatable_id" => "627bae02-b9fc-4f7c-8ef8-a4ac862f83fa"],
            ["translation_id" => "c26ea91a-ea46-4ef1-85c9-999424c6144e", "translatable_type" => "App\Models\Description", "translatable_id" => "627bae02-b9fc-4f7c-8ef8-a4ac862f83fa"],
            ["translation_id" => "175a1de7-7c1d-4887-9467-fa237a20cbda", "translatable_type" => "App\Models\Description", "translatable_id" => "627bae02-b9fc-4f7c-8ef8-a4ac862f83fa"],
            //837
            ["translation_id" => "4582e006-915b-446e-a1b8-906bf2d5d247", "translatable_type" => "App\Models\Description", "translatable_id" => "01b6696b-2bf4-4586-a17a-f540f6852617"],
            ["translation_id" => "344f8bc2-2045-4d10-aca6-3f50b1baa61a", "translatable_type" => "App\Models\Description", "translatable_id" => "01b6696b-2bf4-4586-a17a-f540f6852617"],
            ["translation_id" => "0a632790-2dac-46b6-8f46-1752dd677b77", "translatable_type" => "App\Models\Description", "translatable_id" => "01b6696b-2bf4-4586-a17a-f540f6852617"],
            //838
            ["translation_id" => "4834d500-7137-4bda-92f7-dd218d4907ac", "translatable_type" => "App\Models\Description", "translatable_id" => "068deed1-3903-422e-bf7a-5f25dece1d36"],
            ["translation_id" => "2e758dc8-89da-438d-8f37-d2311d8e0980", "translatable_type" => "App\Models\Description", "translatable_id" => "068deed1-3903-422e-bf7a-5f25dece1d36"],
            ["translation_id" => "eb88b5f6-e731-4513-822e-8e23cdbf326b", "translatable_type" => "App\Models\Description", "translatable_id" => "068deed1-3903-422e-bf7a-5f25dece1d36"],
            //839
            ["translation_id" => "8c7e24b3-47cb-4a3f-8dfc-b4fb94cfc39f", "translatable_type" => "App\Models\Description", "translatable_id" => "5a6e4cb2-2ee5-4d92-bd03-75b3c379fd67"],
            ["translation_id" => "b5f6aeb9-c26b-4843-a7db-073f2ee42b3f", "translatable_type" => "App\Models\Description", "translatable_id" => "5a6e4cb2-2ee5-4d92-bd03-75b3c379fd67"],
            ["translation_id" => "54ff655b-3930-4ff8-b183-217806fbc754", "translatable_type" => "App\Models\Description", "translatable_id" => "5a6e4cb2-2ee5-4d92-bd03-75b3c379fd67"],
            //840
            ["translation_id" => "877d31af-5902-4314-85b4-c91251044e3e", "translatable_type" => "App\Models\Description", "translatable_id" => "aec3b77a-5489-4754-b5d4-7f7edb9d9abd"],
            ["translation_id" => "9801b7ab-a5f1-43da-94d6-4ec597ee26d7", "translatable_type" => "App\Models\Description", "translatable_id" => "aec3b77a-5489-4754-b5d4-7f7edb9d9abd"],
            ["translation_id" => "55d078d2-82aa-4443-9186-170bf5b97583", "translatable_type" => "App\Models\Description", "translatable_id" => "aec3b77a-5489-4754-b5d4-7f7edb9d9abd"],
            //841
            ["translation_id" => "2e186a7e-235e-4c96-b970-3804d561a30d", "translatable_type" => "App\Models\Description", "translatable_id" => "5414882e-af89-45b9-8b9f-4e8dfb069cf0"],
            ["translation_id" => "167ccc04-eb4e-4a7b-9bed-d7b9afd1fb00", "translatable_type" => "App\Models\Description", "translatable_id" => "5414882e-af89-45b9-8b9f-4e8dfb069cf0"],
            ["translation_id" => "ab8ab4d5-3476-4533-ba21-73aa8c28842e", "translatable_type" => "App\Models\Description", "translatable_id" => "5414882e-af89-45b9-8b9f-4e8dfb069cf0"],
            //842
            ["translation_id" => "3d54856b-0b73-4a43-948d-b20b38c39206", "translatable_type" => "App\Models\Description", "translatable_id" => "0c5b16ef-2afe-48a9-b8f7-0831c1562659"],
            ["translation_id" => "c804b8fa-6bfa-4eb3-8cf9-795df2be6c35", "translatable_type" => "App\Models\Description", "translatable_id" => "0c5b16ef-2afe-48a9-b8f7-0831c1562659"],
            ["translation_id" => "41764e15-81be-49b7-a78a-221dddbc3a15", "translatable_type" => "App\Models\Description", "translatable_id" => "0c5b16ef-2afe-48a9-b8f7-0831c1562659"],
            //843
            ["translation_id" => "18c739fd-f354-4432-b375-7a635c8ae8db", "translatable_type" => "App\Models\Description", "translatable_id" => "aef5d268-cc93-4315-9f69-623f99c3a0ae"],
            ["translation_id" => "115c538d-85b2-43be-85b9-6931ade8784c", "translatable_type" => "App\Models\Description", "translatable_id" => "aef5d268-cc93-4315-9f69-623f99c3a0ae"],
            ["translation_id" => "d3ca1006-4981-4198-b35b-b9e9412edc4d", "translatable_type" => "App\Models\Description", "translatable_id" => "aef5d268-cc93-4315-9f69-623f99c3a0ae"],
            //844
            ["translation_id" => "b832f450-4162-40cb-9be8-26cfc2032bbc", "translatable_type" => "App\Models\Description", "translatable_id" => "f83f986d-054c-498b-a600-65c4e8aff210"],
            ["translation_id" => "ef9e8ba8-7fe9-4dca-800b-05a280d9e97e", "translatable_type" => "App\Models\Description", "translatable_id" => "f83f986d-054c-498b-a600-65c4e8aff210"],
            ["translation_id" => "4dd79126-5966-4c5b-a27e-230e4fd042d6", "translatable_type" => "App\Models\Description", "translatable_id" => "f83f986d-054c-498b-a600-65c4e8aff210"],
            //845
            ["translation_id" => "a6883afc-3fbd-4d9e-8a41-2f7404f015b6", "translatable_type" => "App\Models\Description", "translatable_id" => "a352c401-b774-4db2-866a-10aa96578711"],
            ["translation_id" => "8b0ce0ac-3d7c-4e45-b67e-a28db6fc6b09", "translatable_type" => "App\Models\Description", "translatable_id" => "a352c401-b774-4db2-866a-10aa96578711"],
            ["translation_id" => "8a71600f-38e5-491a-9de9-09314c94d1ee", "translatable_type" => "App\Models\Description", "translatable_id" => "a352c401-b774-4db2-866a-10aa96578711"],
            //846
            ["translation_id" => "315f7502-0927-4dd4-ad4e-5f916f4395a8", "translatable_type" => "App\Models\Description", "translatable_id" => "d794cdf8-25ea-44ea-90ae-3be3b2e89565"],
            ["translation_id" => "a9e19fda-46d7-4718-93e2-1c9108d6104d", "translatable_type" => "App\Models\Description", "translatable_id" => "d794cdf8-25ea-44ea-90ae-3be3b2e89565"],
            ["translation_id" => "55724b17-99fe-4d68-9e70-2bd9976b8063", "translatable_type" => "App\Models\Description", "translatable_id" => "d794cdf8-25ea-44ea-90ae-3be3b2e89565"],
            //847
            ["translation_id" => "be5738b7-a91e-4d8f-bfa6-559f29005c82", "translatable_type" => "App\Models\Description", "translatable_id" => "492caf6f-9c1c-4fac-8834-bc03aa91d9ab"],
            ["translation_id" => "2dec5676-77b4-4100-8552-eb62542bd98b", "translatable_type" => "App\Models\Description", "translatable_id" => "492caf6f-9c1c-4fac-8834-bc03aa91d9ab"],
            ["translation_id" => "de49d7c2-25dc-43c5-bda2-2bc1f7bc1a5a", "translatable_type" => "App\Models\Description", "translatable_id" => "492caf6f-9c1c-4fac-8834-bc03aa91d9ab"],
            //848
            ["translation_id" => "b763efaa-12eb-4cff-9278-b6368b215255", "translatable_type" => "App\Models\Description", "translatable_id" => "1971241c-b73b-4b93-abbb-46ad32e7f7a1"],
            ["translation_id" => "b9476eea-de65-483c-82a5-fa6f6eb760f2", "translatable_type" => "App\Models\Description", "translatable_id" => "1971241c-b73b-4b93-abbb-46ad32e7f7a1"],
            ["translation_id" => "7b766adb-f3a4-476d-b3eb-8e9101716d17", "translatable_type" => "App\Models\Description", "translatable_id" => "1971241c-b73b-4b93-abbb-46ad32e7f7a1"],
            //849
            ["translation_id" => "8864091c-f88b-47e8-887b-62b5fbfcec57", "translatable_type" => "App\Models\Description", "translatable_id" => "fb6f0769-3e95-4b6c-bca2-b3c4bd2085cd"],
            ["translation_id" => "1a9e4697-966b-4d72-928c-c5692927bfdb", "translatable_type" => "App\Models\Description", "translatable_id" => "fb6f0769-3e95-4b6c-bca2-b3c4bd2085cd"],
            ["translation_id" => "01e71625-5124-41b7-a66c-a395ab3fb723", "translatable_type" => "App\Models\Description", "translatable_id" => "fb6f0769-3e95-4b6c-bca2-b3c4bd2085cd"],
            //850
            ["translation_id" => "1e2fea05-3dfe-485d-8377-415e35fbc94a", "translatable_type" => "App\Models\Description", "translatable_id" => "e98285c8-2b51-4666-a347-aa447935da64"],
            ["translation_id" => "49f883a6-fa6d-413e-96bf-816aac8d26f6", "translatable_type" => "App\Models\Description", "translatable_id" => "e98285c8-2b51-4666-a347-aa447935da64"],
            ["translation_id" => "afb0830c-b273-487c-9bb8-9d0954b5b9df", "translatable_type" => "App\Models\Description", "translatable_id" => "e98285c8-2b51-4666-a347-aa447935da64"],
            //851
            ["translation_id" => "34e27732-08e3-4b4a-9336-0999acc9b44d", "translatable_type" => "App\Models\Description", "translatable_id" => "ed38520e-1135-4ac0-a4f4-d226227ec6d9"],
            ["translation_id" => "a971baee-2417-42b4-a57c-d615bf0b9d58", "translatable_type" => "App\Models\Description", "translatable_id" => "ed38520e-1135-4ac0-a4f4-d226227ec6d9"],
            ["translation_id" => "c7149d16-27ef-4721-b7fe-458c97299d07", "translatable_type" => "App\Models\Description", "translatable_id" => "ed38520e-1135-4ac0-a4f4-d226227ec6d9"],
            //852
            ["translation_id" => "0b2fd5c3-d425-4fc3-baed-fdbc55034701", "translatable_type" => "App\Models\Description", "translatable_id" => "a228aeca-11ca-497c-a076-152fd78fe478"],
            ["translation_id" => "d1afde49-735d-49cb-bb8f-1215d856a41c", "translatable_type" => "App\Models\Description", "translatable_id" => "a228aeca-11ca-497c-a076-152fd78fe478"],
            ["translation_id" => "3eb37a57-b681-45b1-8743-9fa61f4244e2", "translatable_type" => "App\Models\Description", "translatable_id" => "a228aeca-11ca-497c-a076-152fd78fe478"],
            //853
            ["translation_id" => "cddd8b25-0d55-43de-b34b-22c8806f539d", "translatable_type" => "App\Models\Description", "translatable_id" => "8c24f9fc-70fd-4530-a76d-7c89b4afd10f"],
            ["translation_id" => "c48f6709-8fd1-4750-a991-42fe038a52e7", "translatable_type" => "App\Models\Description", "translatable_id" => "8c24f9fc-70fd-4530-a76d-7c89b4afd10f"],
            ["translation_id" => "d88e8913-ea8d-4f78-89cd-d95355c0d442", "translatable_type" => "App\Models\Description", "translatable_id" => "8c24f9fc-70fd-4530-a76d-7c89b4afd10f"],
            //854
            ["translation_id" => "265b5213-d52d-4f2c-ad44-8e21f74a1ea6", "translatable_type" => "App\Models\Description", "translatable_id" => "b351b67f-0c73-4fd2-b5d6-c5977a0a7060"],
            ["translation_id" => "17edf35f-a876-4a59-bf98-4303d06ca4e5", "translatable_type" => "App\Models\Description", "translatable_id" => "b351b67f-0c73-4fd2-b5d6-c5977a0a7060"],
            ["translation_id" => "188aa2a9-b4c5-4046-b747-d0209d34c53c", "translatable_type" => "App\Models\Description", "translatable_id" => "b351b67f-0c73-4fd2-b5d6-c5977a0a7060"],
            //855
            ["translation_id" => "06b5b4a7-8bb7-4436-9e61-28c4e43a42bb", "translatable_type" => "App\Models\Description", "translatable_id" => "bde9606c-13c2-4ebc-ab81-f491aa532c9d"],
            ["translation_id" => "2692f561-2e4b-4642-96af-d346d5c5fd6b", "translatable_type" => "App\Models\Description", "translatable_id" => "bde9606c-13c2-4ebc-ab81-f491aa532c9d"],
            ["translation_id" => "1d0da2b3-266e-49af-bf53-f3c910f8dcc2", "translatable_type" => "App\Models\Description", "translatable_id" => "bde9606c-13c2-4ebc-ab81-f491aa532c9d"],
            //856
            ["translation_id" => "767ceeb4-367f-4fa2-85d7-4b597ed54e15", "translatable_type" => "App\Models\Description", "translatable_id" => "c862da99-1b71-4262-b322-603fb4d60dea"],
            ["translation_id" => "4aeba854-eb97-46df-921e-4e8f6a899a53", "translatable_type" => "App\Models\Description", "translatable_id" => "c862da99-1b71-4262-b322-603fb4d60dea"],
            ["translation_id" => "0dac4b6d-3c28-42fa-aeb3-62c61772e6ea", "translatable_type" => "App\Models\Description", "translatable_id" => "c862da99-1b71-4262-b322-603fb4d60dea"],
            //857
            ["translation_id" => "5d1e6408-9b07-4356-8931-d03859cae1da", "translatable_type" => "App\Models\Description", "translatable_id" => "350e6024-fb6a-48d7-ad29-0a6472a9921c"],
            ["translation_id" => "fed1aea9-9da7-469b-9e47-b8412f785733", "translatable_type" => "App\Models\Description", "translatable_id" => "350e6024-fb6a-48d7-ad29-0a6472a9921c"],
            ["translation_id" => "f8a091c2-a4b2-4935-847a-c26de63165de", "translatable_type" => "App\Models\Description", "translatable_id" => "350e6024-fb6a-48d7-ad29-0a6472a9921c"],
            //858
            ["translation_id" => "37209304-ebec-4262-adfb-89fa6b285c32", "translatable_type" => "App\Models\Description", "translatable_id" => "02b65c91-ef3a-4d2a-8759-62caa128a544"],
            ["translation_id" => "3dcc614c-0917-426e-a006-5a53a2acfc50", "translatable_type" => "App\Models\Description", "translatable_id" => "02b65c91-ef3a-4d2a-8759-62caa128a544"],
            ["translation_id" => "0621a291-77b8-4847-8f29-4caa501cc117", "translatable_type" => "App\Models\Description", "translatable_id" => "02b65c91-ef3a-4d2a-8759-62caa128a544"],
            //859
            ["translation_id" => "c881c14a-3794-40d4-b2fd-1fc513ebc59e", "translatable_type" => "App\Models\Description", "translatable_id" => "3e721d15-f8a2-42b9-a1eb-ba9bf6f45d4a"],
            ["translation_id" => "c2830202-9c5a-4383-8887-108c111e991f", "translatable_type" => "App\Models\Description", "translatable_id" => "3e721d15-f8a2-42b9-a1eb-ba9bf6f45d4a"],
            ["translation_id" => "fc706f2f-6f79-49e4-a4fe-f66f0dc817bc", "translatable_type" => "App\Models\Description", "translatable_id" => "3e721d15-f8a2-42b9-a1eb-ba9bf6f45d4a"],
            //860
            ["translation_id" => "53c85179-f3d2-443e-a437-fcb5135951ab", "translatable_type" => "App\Models\Description", "translatable_id" => "13574fb0-9e7c-4636-b013-2aaf9739afa8"],
            ["translation_id" => "ae1c8ea3-8691-4f15-8a81-15dd08f15372", "translatable_type" => "App\Models\Description", "translatable_id" => "13574fb0-9e7c-4636-b013-2aaf9739afa8"],
            ["translation_id" => "388a3abc-53d9-40b1-a23e-736f74486def", "translatable_type" => "App\Models\Description", "translatable_id" => "13574fb0-9e7c-4636-b013-2aaf9739afa8"],
            //861
            ["translation_id" => "fe2cb50d-a85c-4b5a-9c77-eba3933ef45e", "translatable_type" => "App\Models\Description", "translatable_id" => "24cf35f3-01c4-42c7-af8d-df6187d45bc9"],
            ["translation_id" => "aa2de3d1-fe28-4b93-ba9d-300d71209d08", "translatable_type" => "App\Models\Description", "translatable_id" => "24cf35f3-01c4-42c7-af8d-df6187d45bc9"],
            ["translation_id" => "76333bc2-7e39-40c7-9ebc-1dd175ccab81", "translatable_type" => "App\Models\Description", "translatable_id" => "24cf35f3-01c4-42c7-af8d-df6187d45bc9"],
            //862
            ["translation_id" => "a125031e-1b2d-4a39-a1e1-1dcefb5e32c1", "translatable_type" => "App\Models\Description", "translatable_id" => "4a92f5d0-26bc-4849-8e39-97e3664c3df5"],
            ["translation_id" => "74e01d98-1039-4cb8-a40c-ad389e9ee6fd", "translatable_type" => "App\Models\Description", "translatable_id" => "4a92f5d0-26bc-4849-8e39-97e3664c3df5"],
            ["translation_id" => "f2e9542c-36c4-4d47-8721-06af3b9d55c7", "translatable_type" => "App\Models\Description", "translatable_id" => "4a92f5d0-26bc-4849-8e39-97e3664c3df5"],
            //863
            ["translation_id" => "6e1f17e4-98b3-4cfb-bc38-b30ac7db9765", "translatable_type" => "App\Models\Description", "translatable_id" => "0e2dd368-4b29-4696-982e-463fdded6ca0"],
            ["translation_id" => "6c5181dd-4801-455a-af15-853864cada6c", "translatable_type" => "App\Models\Description", "translatable_id" => "0e2dd368-4b29-4696-982e-463fdded6ca0"],
            ["translation_id" => "c26b17b2-1d32-4b80-aa67-db56a0ab6bfb", "translatable_type" => "App\Models\Description", "translatable_id" => "0e2dd368-4b29-4696-982e-463fdded6ca0"],
            //864
            ["translation_id" => "82771472-baa6-4e7d-a89a-68360ceb172d", "translatable_type" => "App\Models\Description", "translatable_id" => "cddd6831-cbc3-46ef-ad50-484bfeea4e46"],
            ["translation_id" => "2b5693e0-93ac-446b-905e-766f62fa9c23", "translatable_type" => "App\Models\Description", "translatable_id" => "cddd6831-cbc3-46ef-ad50-484bfeea4e46"],
            ["translation_id" => "71a2bddd-4f4b-4c0e-93e0-19acb8b568c0", "translatable_type" => "App\Models\Description", "translatable_id" => "cddd6831-cbc3-46ef-ad50-484bfeea4e46"],
            //865
            ["translation_id" => "f73df07d-47ff-4352-a335-f3f6a2497c63", "translatable_type" => "App\Models\Description", "translatable_id" => "0bdae54f-641f-459f-a37c-0f8c812c6b77"],
            ["translation_id" => "841d5e51-185f-4a27-bae7-d2c75540ee37", "translatable_type" => "App\Models\Description", "translatable_id" => "0bdae54f-641f-459f-a37c-0f8c812c6b77"],
            ["translation_id" => "a5ce8b13-73dd-495f-aabe-790dc09be235", "translatable_type" => "App\Models\Description", "translatable_id" => "0bdae54f-641f-459f-a37c-0f8c812c6b77"],
            //866
            ["translation_id" => "340ff073-1de8-481a-835e-7cf36bcdb582", "translatable_type" => "App\Models\Description", "translatable_id" => "e8dca082-0b78-428b-b0a3-f7357abb585f"],
            ["translation_id" => "4b78c0ad-ed42-45be-9899-6dc39eddaab6", "translatable_type" => "App\Models\Description", "translatable_id" => "e8dca082-0b78-428b-b0a3-f7357abb585f"],
            ["translation_id" => "5b59ddf0-1b96-4327-86f0-2a328452eeae", "translatable_type" => "App\Models\Description", "translatable_id" => "e8dca082-0b78-428b-b0a3-f7357abb585f"],
            //867
            ["translation_id" => "d0383e77-15af-4931-997d-5271c689ba23", "translatable_type" => "App\Models\Description", "translatable_id" => "c50609f6-4f32-4565-a633-b67ab680c6be"],
            ["translation_id" => "3ba192ee-7f78-43d0-a8fb-3ba27c7c6447", "translatable_type" => "App\Models\Description", "translatable_id" => "c50609f6-4f32-4565-a633-b67ab680c6be"],
            ["translation_id" => "b1c2139c-b95e-470e-a3d8-b75d853d0489", "translatable_type" => "App\Models\Description", "translatable_id" => "c50609f6-4f32-4565-a633-b67ab680c6be"],
            //868
            ["translation_id" => "9b2cf173-e1e5-4f8d-a3cb-f01110c6320b", "translatable_type" => "App\Models\Description", "translatable_id" => "91ae4752-e7dd-48ca-9f8f-28751cdb3883"],
            ["translation_id" => "c1ead512-4913-400d-bd15-52b5784d0cd8", "translatable_type" => "App\Models\Description", "translatable_id" => "91ae4752-e7dd-48ca-9f8f-28751cdb3883"],
            ["translation_id" => "4b2a1bc1-8bfe-4404-9175-3b8dee52196e", "translatable_type" => "App\Models\Description", "translatable_id" => "91ae4752-e7dd-48ca-9f8f-28751cdb3883"],
            //869
            ["translation_id" => "d40a850e-52cc-4b72-b434-c7d6990800cf", "translatable_type" => "App\Models\Description", "translatable_id" => "f4f5a39b-3235-464f-a39b-a5359275a61b"],
            ["translation_id" => "9c35d2bc-2bb7-4b36-a855-2eed758d9a5b", "translatable_type" => "App\Models\Description", "translatable_id" => "f4f5a39b-3235-464f-a39b-a5359275a61b"],
            ["translation_id" => "76c7350a-5e78-4479-a124-b405277eb5ce", "translatable_type" => "App\Models\Description", "translatable_id" => "f4f5a39b-3235-464f-a39b-a5359275a61b"],
            //870
            ["translation_id" => "30b6e301-7bd4-44f4-be9e-f2f4e1a6db52", "translatable_type" => "App\Models\Description", "translatable_id" => "698afb7f-40e8-49b9-a1f3-503db2c20e78"],
            ["translation_id" => "aa7498b4-af84-4940-abde-786141552617", "translatable_type" => "App\Models\Description", "translatable_id" => "698afb7f-40e8-49b9-a1f3-503db2c20e78"],
            ["translation_id" => "0e1ffd22-574d-49e5-9b0c-9aca4e8851ad", "translatable_type" => "App\Models\Description", "translatable_id" => "698afb7f-40e8-49b9-a1f3-503db2c20e78"],
            //871
            ["translation_id" => "a8ea5e9f-a5c6-4c5b-b985-ff668575044a", "translatable_type" => "App\Models\Description", "translatable_id" => "9c19f8ef-dd20-4683-9068-372bc3312e47"],
            ["translation_id" => "a5da1c99-c143-4b90-8803-6406e79e10ed", "translatable_type" => "App\Models\Description", "translatable_id" => "9c19f8ef-dd20-4683-9068-372bc3312e47"],
            ["translation_id" => "a1c30356-6b76-4e77-9a75-de1fbaa4ae51", "translatable_type" => "App\Models\Description", "translatable_id" => "9c19f8ef-dd20-4683-9068-372bc3312e47"],
            //872
            ["translation_id" => "b8d6e0c8-2ae5-4cc9-bbb0-8e4aba00b517", "translatable_type" => "App\Models\Description", "translatable_id" => "8f48de08-2d82-4316-a86b-2d2a15844b94"],
            ["translation_id" => "45dd0a36-ea22-49d6-a186-c706e86936c4", "translatable_type" => "App\Models\Description", "translatable_id" => "8f48de08-2d82-4316-a86b-2d2a15844b94"],
            ["translation_id" => "ec745897-f914-4b57-b224-af229be2e69e", "translatable_type" => "App\Models\Description", "translatable_id" => "8f48de08-2d82-4316-a86b-2d2a15844b94"],
            //873
            ["translation_id" => "24f96173-ecfe-449f-a345-8afb2fd090f5", "translatable_type" => "App\Models\Description", "translatable_id" => "aefb6841-5ed6-45d6-8bfb-c24c9380bb6f"],
            ["translation_id" => "5df95fc6-d78a-4662-9624-49272f5cb94b", "translatable_type" => "App\Models\Description", "translatable_id" => "aefb6841-5ed6-45d6-8bfb-c24c9380bb6f"],
            ["translation_id" => "7eca1127-ee45-40cf-b7b0-6252c587cb94", "translatable_type" => "App\Models\Description", "translatable_id" => "aefb6841-5ed6-45d6-8bfb-c24c9380bb6f"],
            //874
            ["translation_id" => "1929deeb-a3dc-45d1-bfef-fa5e2170835d", "translatable_type" => "App\Models\Description", "translatable_id" => "94d99a05-ec30-406f-89b8-dd8e59975592"],
            ["translation_id" => "07e21e18-7cbc-40a4-a9b3-ece3e72f32fb", "translatable_type" => "App\Models\Description", "translatable_id" => "94d99a05-ec30-406f-89b8-dd8e59975592"],
            ["translation_id" => "5278e782-3158-4e81-b55a-39a0b54aff10", "translatable_type" => "App\Models\Description", "translatable_id" => "94d99a05-ec30-406f-89b8-dd8e59975592"],
            //875
            ["translation_id" => "6d928990-e1d1-44ac-8c38-aa5ea271efa4", "translatable_type" => "App\Models\Description", "translatable_id" => "0478f4bc-5587-44d5-8a42-ca339468b36f"],
            ["translation_id" => "f5a2eb4e-37b6-4fab-8b12-03bbaf5eb96f", "translatable_type" => "App\Models\Description", "translatable_id" => "0478f4bc-5587-44d5-8a42-ca339468b36f"],
            ["translation_id" => "489c0603-40ce-4541-81d8-069f2cedd937", "translatable_type" => "App\Models\Description", "translatable_id" => "0478f4bc-5587-44d5-8a42-ca339468b36f"],
            //876
            ["translation_id" => "c6651a52-3161-4a56-acc8-cfad57a16581", "translatable_type" => "App\Models\Description", "translatable_id" => "04d188a4-0dd5-4d8c-88b1-3fd56c5c8638"],
            ["translation_id" => "64c77915-f460-4f03-b454-1db37b2ac5d8", "translatable_type" => "App\Models\Description", "translatable_id" => "04d188a4-0dd5-4d8c-88b1-3fd56c5c8638"],
            ["translation_id" => "c183d048-8be9-41e5-bfab-082f6a394ab6", "translatable_type" => "App\Models\Description", "translatable_id" => "04d188a4-0dd5-4d8c-88b1-3fd56c5c8638"],
            //877
            ["translation_id" => "58655289-5179-4977-ba82-10c5c33fa890", "translatable_type" => "App\Models\Description", "translatable_id" => "96a36987-4678-4b6f-a69c-826891a73b80"],
            ["translation_id" => "289f13dd-a2aa-4cf8-992b-cac4670455af", "translatable_type" => "App\Models\Description", "translatable_id" => "96a36987-4678-4b6f-a69c-826891a73b80"],
            ["translation_id" => "1c9c76ff-f4da-427e-a0ba-32544198e153", "translatable_type" => "App\Models\Description", "translatable_id" => "96a36987-4678-4b6f-a69c-826891a73b80"],
            //878
            ["translation_id" => "e77cdeb5-2137-4ca9-9c82-20805659b0e2", "translatable_type" => "App\Models\Description", "translatable_id" => "7284d14e-69ad-4a34-8343-20581428382d"],
            ["translation_id" => "f0508ef3-5dd7-4e51-aecf-89bf5fa7a973", "translatable_type" => "App\Models\Description", "translatable_id" => "7284d14e-69ad-4a34-8343-20581428382d"],
            ["translation_id" => "41759051-ffbb-4c24-86e8-4b7bbb90d1e3", "translatable_type" => "App\Models\Description", "translatable_id" => "7284d14e-69ad-4a34-8343-20581428382d"],
            //879
            ["translation_id" => "322f6d00-3119-4b40-9750-a6f23761e33e", "translatable_type" => "App\Models\Description", "translatable_id" => "0939e52d-dc31-4850-a88c-76918274dcd9"],
            ["translation_id" => "db07ff96-d587-43b8-9a4e-e09c46e2a830", "translatable_type" => "App\Models\Description", "translatable_id" => "0939e52d-dc31-4850-a88c-76918274dcd9"],
            ["translation_id" => "8b5ac7df-e89c-4201-845f-3dfc0cddd8c0", "translatable_type" => "App\Models\Description", "translatable_id" => "0939e52d-dc31-4850-a88c-76918274dcd9"],
            //880
            ["translation_id" => "2baabf09-2dcc-4ff5-9e7a-2805c8890b19", "translatable_type" => "App\Models\Description", "translatable_id" => "b5380de8-5e4b-468c-bde7-56d716a173bb"],
            ["translation_id" => "9d52cfb6-64ea-4710-b003-bff209dbe1c3", "translatable_type" => "App\Models\Description", "translatable_id" => "b5380de8-5e4b-468c-bde7-56d716a173bb"],
            ["translation_id" => "9b92d7ea-0d1e-46c6-9b37-114a5c5da7ff", "translatable_type" => "App\Models\Description", "translatable_id" => "b5380de8-5e4b-468c-bde7-56d716a173bb"],
            //881
            ["translation_id" => "ad176ad8-417e-4990-819f-dcbabeac4fd9", "translatable_type" => "App\Models\Description", "translatable_id" => "53c89c5f-c12a-4db3-a9b4-50cf46d959f8"],
            ["translation_id" => "b068403b-fd50-45c8-b912-816ac414bb59", "translatable_type" => "App\Models\Description", "translatable_id" => "53c89c5f-c12a-4db3-a9b4-50cf46d959f8"],
            ["translation_id" => "5e898d92-ff92-46dd-8942-ed80b8a01d4e", "translatable_type" => "App\Models\Description", "translatable_id" => "53c89c5f-c12a-4db3-a9b4-50cf46d959f8"],
            //882
            ["translation_id" => "3400bed6-d67e-4857-8218-be697aadde18", "translatable_type" => "App\Models\Description", "translatable_id" => "24d8cff9-a205-40df-b75d-f82f3a0fe566"],
            ["translation_id" => "02e663ce-6e25-488c-a1b3-2ef8021e827e", "translatable_type" => "App\Models\Description", "translatable_id" => "24d8cff9-a205-40df-b75d-f82f3a0fe566"],
            ["translation_id" => "befb0aeb-926b-4c17-b266-a5ff7fea0796", "translatable_type" => "App\Models\Description", "translatable_id" => "24d8cff9-a205-40df-b75d-f82f3a0fe566"],
            //883
            ["translation_id" => "6f405d40-96ef-461a-8354-994f82a86b18", "translatable_type" => "App\Models\Description", "translatable_id" => "99089ae2-58e7-43c7-aa50-cad605bca174"],
            ["translation_id" => "625c4441-b28f-4e7d-8428-1afd36ec17c1", "translatable_type" => "App\Models\Description", "translatable_id" => "99089ae2-58e7-43c7-aa50-cad605bca174"],
            ["translation_id" => "02351f05-0616-416e-b5a9-3f67bdb62725", "translatable_type" => "App\Models\Description", "translatable_id" => "99089ae2-58e7-43c7-aa50-cad605bca174"],
            //884
            ["translation_id" => "8219a4a9-1347-4bcf-9d87-a8da79af8675", "translatable_type" => "App\Models\Description", "translatable_id" => "f7c490f9-3c02-48c1-8811-4e69629e2453"],
            ["translation_id" => "07e4dce5-58f6-4498-a54d-0fd2cb6f60c3", "translatable_type" => "App\Models\Description", "translatable_id" => "f7c490f9-3c02-48c1-8811-4e69629e2453"],
            ["translation_id" => "f51f4ee7-4bba-43d6-8649-21dd8aa80426", "translatable_type" => "App\Models\Description", "translatable_id" => "f7c490f9-3c02-48c1-8811-4e69629e2453"],
            //885
            ["translation_id" => "d1871f78-1a33-47eb-853a-7f6c7b538deb", "translatable_type" => "App\Models\Description", "translatable_id" => "09bea919-7850-44ff-8cd5-ef88ac79d7f8"],
            ["translation_id" => "35a6e0ed-3cc2-4841-92ec-9d405e1b1a05", "translatable_type" => "App\Models\Description", "translatable_id" => "09bea919-7850-44ff-8cd5-ef88ac79d7f8"],
            ["translation_id" => "94cc8cc4-24b2-4bc7-a2a6-2edeaec68a99", "translatable_type" => "App\Models\Description", "translatable_id" => "09bea919-7850-44ff-8cd5-ef88ac79d7f8"],
            //886
            ["translation_id" => "efe5f076-6589-4265-b9ef-bf92dc7e69ec", "translatable_type" => "App\Models\Description", "translatable_id" => "73b9c536-2f82-44cd-b19a-83436687e8f6"],
            ["translation_id" => "4672ccfb-4012-4b94-84b0-c1fa4153ba6b", "translatable_type" => "App\Models\Description", "translatable_id" => "73b9c536-2f82-44cd-b19a-83436687e8f6"],
            ["translation_id" => "f82e9c98-591d-475c-aab7-f80b4a23194a", "translatable_type" => "App\Models\Description", "translatable_id" => "73b9c536-2f82-44cd-b19a-83436687e8f6"],
            //887
            ["translation_id" => "2ffbedfb-2414-434b-9b80-ccb42cbcdefa", "translatable_type" => "App\Models\Description", "translatable_id" => "e4a3f1b2-a366-4ef0-8c24-47b2c4f07afb"],
            ["translation_id" => "53d565af-21c3-45d6-91e0-c6341ed6eede", "translatable_type" => "App\Models\Description", "translatable_id" => "e4a3f1b2-a366-4ef0-8c24-47b2c4f07afb"],
            ["translation_id" => "2154458d-b75d-4771-b31d-e41fb2cd3de8", "translatable_type" => "App\Models\Description", "translatable_id" => "e4a3f1b2-a366-4ef0-8c24-47b2c4f07afb"],
            //888
            ["translation_id" => "6eaf5c0d-ee80-4998-8104-9bd9ec967f51", "translatable_type" => "App\Models\Description", "translatable_id" => "6b6d8364-4d36-4c27-b0ce-7a86acb3b875"],
            ["translation_id" => "fdc83e89-edde-4d5f-9b80-703ee3625398", "translatable_type" => "App\Models\Description", "translatable_id" => "6b6d8364-4d36-4c27-b0ce-7a86acb3b875"],
            ["translation_id" => "946a3430-2741-4c11-80c4-c135fcf90831", "translatable_type" => "App\Models\Description", "translatable_id" => "6b6d8364-4d36-4c27-b0ce-7a86acb3b875"],
            //889
            ["translation_id" => "789b61e9-bfb4-45b3-bc30-54a5a4dcdd1c", "translatable_type" => "App\Models\Description", "translatable_id" => "da7d382e-dcf1-4536-b0e8-b1289e7ca08f"],
            ["translation_id" => "4a9c1d79-52e7-46e0-9789-2e4f80e11856", "translatable_type" => "App\Models\Description", "translatable_id" => "da7d382e-dcf1-4536-b0e8-b1289e7ca08f"],
            ["translation_id" => "5572d6ec-a3ba-4976-b938-c17621195a70", "translatable_type" => "App\Models\Description", "translatable_id" => "da7d382e-dcf1-4536-b0e8-b1289e7ca08f"],
            //890
            ["translation_id" => "d83aaca5-eaa9-4009-9beb-18ba33cd10fc", "translatable_type" => "App\Models\Description", "translatable_id" => "fca3596d-727e-4d8b-ac7c-5c4a1ea18b0f"],
            ["translation_id" => "4e3ad139-c005-4fc9-84e5-f7ba87ebe3d3", "translatable_type" => "App\Models\Description", "translatable_id" => "fca3596d-727e-4d8b-ac7c-5c4a1ea18b0f"],
            ["translation_id" => "85bf6084-801b-467b-b1f9-9a0e5e64ac2a", "translatable_type" => "App\Models\Description", "translatable_id" => "fca3596d-727e-4d8b-ac7c-5c4a1ea18b0f"],
            //891
            ["translation_id" => "0e3fcd98-77e8-4fb9-808c-eb9d3f33d4b7", "translatable_type" => "App\Models\Description", "translatable_id" => "c4bef75f-9b38-40e1-a32f-fee171069dd5"],
            ["translation_id" => "17d61319-599f-4061-946e-83a3bdf85534", "translatable_type" => "App\Models\Description", "translatable_id" => "c4bef75f-9b38-40e1-a32f-fee171069dd5"],
            ["translation_id" => "5d351c2c-7db3-497b-8801-15552cf24c25", "translatable_type" => "App\Models\Description", "translatable_id" => "c4bef75f-9b38-40e1-a32f-fee171069dd5"],
            //892
            ["translation_id" => "539e808f-19aa-41f8-88d9-b1a03cc8614e", "translatable_type" => "App\Models\Description", "translatable_id" => "b73e929b-b5f1-4e6d-80c5-bba2809b0a7f"],
            ["translation_id" => "2fd83d10-296d-459a-aa70-05ca56d86fac", "translatable_type" => "App\Models\Description", "translatable_id" => "b73e929b-b5f1-4e6d-80c5-bba2809b0a7f"],
            ["translation_id" => "1a6da5d5-6366-464d-99af-31dad28e2cc9", "translatable_type" => "App\Models\Description", "translatable_id" => "b73e929b-b5f1-4e6d-80c5-bba2809b0a7f"],
            //893
            ["translation_id" => "55b8752b-75a7-4cce-9ccc-1f0ece439be4", "translatable_type" => "App\Models\Description", "translatable_id" => "b52794d7-1290-4a26-b7d3-fb713f1825c1"],
            ["translation_id" => "aecb958e-3ee4-4417-8c64-ec27032dbb9b", "translatable_type" => "App\Models\Description", "translatable_id" => "b52794d7-1290-4a26-b7d3-fb713f1825c1"],
            ["translation_id" => "7a38ed05-807f-413e-91d6-523556c62518", "translatable_type" => "App\Models\Description", "translatable_id" => "b52794d7-1290-4a26-b7d3-fb713f1825c1"],
            //894
            ["translation_id" => "ce04edd7-9189-46a9-998e-4ecac690c6e1", "translatable_type" => "App\Models\Description", "translatable_id" => "7b0f5ef6-90cb-4ef9-b638-d8e6b3de4225"],
            ["translation_id" => "0deee3d4-afca-4851-8a68-999cb1d01f8d", "translatable_type" => "App\Models\Description", "translatable_id" => "7b0f5ef6-90cb-4ef9-b638-d8e6b3de4225"],
            ["translation_id" => "bfa4db6a-87c7-4d34-b713-feb0692fd72c", "translatable_type" => "App\Models\Description", "translatable_id" => "7b0f5ef6-90cb-4ef9-b638-d8e6b3de4225"],
            //895
            ["translation_id" => "8d1a506c-f39d-4bfa-9bcb-a0df995705b9", "translatable_type" => "App\Models\Description", "translatable_id" => "b4e307d0-0031-43ff-addd-66a8d28787bb"],
            ["translation_id" => "9d41e9ce-5630-4ccd-833b-1a9d140fcb87", "translatable_type" => "App\Models\Description", "translatable_id" => "b4e307d0-0031-43ff-addd-66a8d28787bb"],
            ["translation_id" => "d7ffb381-b54e-4cb6-a914-be22e91af42c", "translatable_type" => "App\Models\Description", "translatable_id" => "b4e307d0-0031-43ff-addd-66a8d28787bb"],
            //896
            ["translation_id" => "156d5231-433f-4065-b5f6-88046d3a5f4b", "translatable_type" => "App\Models\Description", "translatable_id" => "97a3268a-6a3c-4c93-bd6b-61c6c21639c5"],
            ["translation_id" => "c60a19bb-cd3b-4538-bcbc-5821d08e2f2b", "translatable_type" => "App\Models\Description", "translatable_id" => "97a3268a-6a3c-4c93-bd6b-61c6c21639c5"],
            ["translation_id" => "297b291c-5b4c-4918-8d59-c2492d7eddca", "translatable_type" => "App\Models\Description", "translatable_id" => "97a3268a-6a3c-4c93-bd6b-61c6c21639c5"],
            //897
            ["translation_id" => "c2612cae-82f5-48dc-b86b-118dca1cef69", "translatable_type" => "App\Models\Description", "translatable_id" => "4f494d3e-7282-49a9-a64a-66cadf276244"],
            ["translation_id" => "0dda957b-bc12-42c1-b143-6194842119e1", "translatable_type" => "App\Models\Description", "translatable_id" => "4f494d3e-7282-49a9-a64a-66cadf276244"],
            ["translation_id" => "cf2acd5a-f0f5-4333-ac31-3f6cf7d8aa3c", "translatable_type" => "App\Models\Description", "translatable_id" => "4f494d3e-7282-49a9-a64a-66cadf276244"],
            //898
            ["translation_id" => "178f75b3-3069-451e-9344-99017407cf91", "translatable_type" => "App\Models\Description", "translatable_id" => "eb9cccc9-0ba9-42f4-812c-76a32c976319"],
            ["translation_id" => "bd70fa44-f931-494e-a2ca-d43c0e746a97", "translatable_type" => "App\Models\Description", "translatable_id" => "eb9cccc9-0ba9-42f4-812c-76a32c976319"],
            ["translation_id" => "69baf6d6-d3a0-440f-bed0-dcd40b590fda", "translatable_type" => "App\Models\Description", "translatable_id" => "eb9cccc9-0ba9-42f4-812c-76a32c976319"],
            //899
            ["translation_id" => "31a1f27f-626c-41a9-abff-c51b4ec6e437", "translatable_type" => "App\Models\Description", "translatable_id" => "9ee285c1-9db8-48ed-987b-11b61e6482ea"],
            ["translation_id" => "18abfc0b-5a47-4c7b-86c3-2e25f39a7e96", "translatable_type" => "App\Models\Description", "translatable_id" => "9ee285c1-9db8-48ed-987b-11b61e6482ea"],
            ["translation_id" => "eeec766e-e493-48a9-adee-2b5bf9cafce8", "translatable_type" => "App\Models\Description", "translatable_id" => "9ee285c1-9db8-48ed-987b-11b61e6482ea"],
            //900
            ["translation_id" => "268d7811-2699-4f6f-b4e9-564a627a8adb", "translatable_type" => "App\Models\Description", "translatable_id" => "9e35a8a3-812b-4ecf-a175-88124aa24e19"],
            ["translation_id" => "e868f74a-761d-4d06-98e3-e754d12cd7b6", "translatable_type" => "App\Models\Description", "translatable_id" => "9e35a8a3-812b-4ecf-a175-88124aa24e19"],
            ["translation_id" => "d73de89f-64b1-46c0-b985-75d6842eac27", "translatable_type" => "App\Models\Description", "translatable_id" => "9e35a8a3-812b-4ecf-a175-88124aa24e19"],
            //901
            ["translation_id" => "f30152ef-029f-4364-83f9-b5cfec82a4a9", "translatable_type" => "App\Models\Description", "translatable_id" => "4e060c56-9dbe-4c9b-920c-fdb00aa57d16"],
            ["translation_id" => "383a4566-ea48-4a00-8751-800ca1915b45", "translatable_type" => "App\Models\Description", "translatable_id" => "4e060c56-9dbe-4c9b-920c-fdb00aa57d16"],
            ["translation_id" => "63a89eb4-c560-4ec6-b759-3d8e75086f18", "translatable_type" => "App\Models\Description", "translatable_id" => "4e060c56-9dbe-4c9b-920c-fdb00aa57d16"],
            //902
            ["translation_id" => "92701843-627c-444b-b919-253f1c5482a1", "translatable_type" => "App\Models\Description", "translatable_id" => "15f25a24-d5f5-4d61-aa35-f520a23ef253"],
            ["translation_id" => "7dbc11e4-ad64-4f6d-9111-b81171a75563", "translatable_type" => "App\Models\Description", "translatable_id" => "15f25a24-d5f5-4d61-aa35-f520a23ef253"],
            ["translation_id" => "bde50e2c-f7c2-46a6-894a-fce46497ff83", "translatable_type" => "App\Models\Description", "translatable_id" => "15f25a24-d5f5-4d61-aa35-f520a23ef253"],
            //903
            ["translation_id" => "3af7f62b-2dbe-4bcb-b81d-551ea6c2222a", "translatable_type" => "App\Models\Description", "translatable_id" => "1d893b46-846c-4f36-b2c8-779e747da7c1"],
            ["translation_id" => "dd550e17-a1a8-4675-b048-068d60c3bae9", "translatable_type" => "App\Models\Description", "translatable_id" => "1d893b46-846c-4f36-b2c8-779e747da7c1"],
            ["translation_id" => "97cd67ba-6eef-4c7b-bc34-1c904c207378", "translatable_type" => "App\Models\Description", "translatable_id" => "1d893b46-846c-4f36-b2c8-779e747da7c1"],
            //904
            ["translation_id" => "69200cdf-3086-4582-9fbd-003c460db626", "translatable_type" => "App\Models\Description", "translatable_id" => "4ac98f97-98d3-4598-bae8-86c8db8eccc5"],
            ["translation_id" => "dcd3e13f-79b3-459e-b227-d9ae0c3e966d", "translatable_type" => "App\Models\Description", "translatable_id" => "4ac98f97-98d3-4598-bae8-86c8db8eccc5"],
            ["translation_id" => "c7ede4b4-9d90-42c9-8e83-74d563afffaf", "translatable_type" => "App\Models\Description", "translatable_id" => "4ac98f97-98d3-4598-bae8-86c8db8eccc5"],
            //905
            ["translation_id" => "41bbd24d-3a13-46b4-a061-62e3d98c00d3", "translatable_type" => "App\Models\Description", "translatable_id" => "0fef0a73-189e-4f85-8cbd-f46637c06084"],
            ["translation_id" => "dcc300ab-9367-4825-b0a7-c85cfeb6ee5d", "translatable_type" => "App\Models\Description", "translatable_id" => "0fef0a73-189e-4f85-8cbd-f46637c06084"],
            ["translation_id" => "a09ae260-0b75-4432-a2bc-fa723a3c223b", "translatable_type" => "App\Models\Description", "translatable_id" => "0fef0a73-189e-4f85-8cbd-f46637c06084"],
            //906
            ["translation_id" => "38583627-739d-428e-880b-1d9b438d4b1d", "translatable_type" => "App\Models\Description", "translatable_id" => "1f467e0e-7678-42ec-bfad-6837af3406e0"],
            ["translation_id" => "293cbe6b-d741-4ba5-88bd-d4720ad54efb", "translatable_type" => "App\Models\Description", "translatable_id" => "1f467e0e-7678-42ec-bfad-6837af3406e0"],
            ["translation_id" => "9acf1caf-8850-4e9f-a030-2a8400adaac6", "translatable_type" => "App\Models\Description", "translatable_id" => "1f467e0e-7678-42ec-bfad-6837af3406e0"],
            //907
            ["translation_id" => "869060ce-1d6b-4ea5-948c-a924bc2dc2d3", "translatable_type" => "App\Models\Description", "translatable_id" => "d5bfbcfc-333a-44d0-b381-20009557200f"],
            ["translation_id" => "c984b635-212a-43b2-983f-1fe7c021a565", "translatable_type" => "App\Models\Description", "translatable_id" => "d5bfbcfc-333a-44d0-b381-20009557200f"],
            ["translation_id" => "73e79a2d-c9cc-44af-99a7-a9dfa2e2044d", "translatable_type" => "App\Models\Description", "translatable_id" => "d5bfbcfc-333a-44d0-b381-20009557200f"],
            //908
            ["translation_id" => "1980c8b6-6504-4e36-88ce-4a18255ac581", "translatable_type" => "App\Models\Description", "translatable_id" => "39e89255-9862-4c07-a826-485aa1d0a2ae"],
            ["translation_id" => "3917fae2-9733-4bc3-92e4-d877cd9751e4", "translatable_type" => "App\Models\Description", "translatable_id" => "39e89255-9862-4c07-a826-485aa1d0a2ae"],
            ["translation_id" => "ae1a1589-2620-4725-a0a2-a50661392d5d", "translatable_type" => "App\Models\Description", "translatable_id" => "39e89255-9862-4c07-a826-485aa1d0a2ae"],
            //909
            ["translation_id" => "2ddfab13-8712-4226-aa4d-a77648d2060a", "translatable_type" => "App\Models\Description", "translatable_id" => "15480050-a526-45bc-838a-95e474db83b0"],
            ["translation_id" => "083c6428-df97-4f7b-84cc-2e8ecab9bf47", "translatable_type" => "App\Models\Description", "translatable_id" => "15480050-a526-45bc-838a-95e474db83b0"],
            ["translation_id" => "715df451-9c9c-41d4-8207-09fc5987ac29", "translatable_type" => "App\Models\Description", "translatable_id" => "15480050-a526-45bc-838a-95e474db83b0"],
            //910
            ["translation_id" => "8bd75983-1933-417d-b99e-5e416e1a2e0e", "translatable_type" => "App\Models\Description", "translatable_id" => "59ee0ee2-0f0e-49a7-bdd3-654a8dc536db"],
            ["translation_id" => "92deb837-ba62-40aa-88b1-e4fd24a69005", "translatable_type" => "App\Models\Description", "translatable_id" => "59ee0ee2-0f0e-49a7-bdd3-654a8dc536db"],
            ["translation_id" => "f70af9ad-3c61-4f38-a73f-e44ab624f198", "translatable_type" => "App\Models\Description", "translatable_id" => "59ee0ee2-0f0e-49a7-bdd3-654a8dc536db"],
            //911
            ["translation_id" => "a5bd8d15-c2a4-4d62-a433-6d2f3dacaf76", "translatable_type" => "App\Models\Description", "translatable_id" => "4f02f280-165f-4ac8-b89a-7873840421e9"],
            ["translation_id" => "198bcb49-8378-4a17-8820-e39b40850b62", "translatable_type" => "App\Models\Description", "translatable_id" => "4f02f280-165f-4ac8-b89a-7873840421e9"],
            ["translation_id" => "17c58489-43df-407c-bcf6-f8b327a0069c", "translatable_type" => "App\Models\Description", "translatable_id" => "4f02f280-165f-4ac8-b89a-7873840421e9"],
            //912
            ["translation_id" => "7d5ad2ba-a189-4136-b96e-bf7af58db452", "translatable_type" => "App\Models\Description", "translatable_id" => "c82001b8-edec-427a-b738-3fbfa9bfef69"],
            ["translation_id" => "29489959-a6c2-422a-b3e1-5999fdd15c3e", "translatable_type" => "App\Models\Description", "translatable_id" => "c82001b8-edec-427a-b738-3fbfa9bfef69"],
            ["translation_id" => "ccdee6c4-675d-4c1c-84e1-830475457ba2", "translatable_type" => "App\Models\Description", "translatable_id" => "c82001b8-edec-427a-b738-3fbfa9bfef69"],
            //913
            ["translation_id" => "8e9ae01f-1197-4431-916a-65c2e0dc1cac", "translatable_type" => "App\Models\Description", "translatable_id" => "286f4bbf-24f9-413e-b597-1f673c4a0165"],
            ["translation_id" => "0b67a4be-f31c-46f4-a1f8-ec1d9c4867de", "translatable_type" => "App\Models\Description", "translatable_id" => "286f4bbf-24f9-413e-b597-1f673c4a0165"],
            ["translation_id" => "2b48e068-16a4-44f0-a67f-3573ac78a7fc", "translatable_type" => "App\Models\Description", "translatable_id" => "286f4bbf-24f9-413e-b597-1f673c4a0165"],
            //914
            ["translation_id" => "1a8de1b1-0d09-4d39-98cd-d6fe8c8c939e", "translatable_type" => "App\Models\Description", "translatable_id" => "dbd6c4e6-5158-4e58-b1d5-c8c513149a06"],
            ["translation_id" => "70e4058a-912a-44e8-8c90-f0863040c8d6", "translatable_type" => "App\Models\Description", "translatable_id" => "dbd6c4e6-5158-4e58-b1d5-c8c513149a06"],
            ["translation_id" => "02947fe7-13d3-449f-9e02-84ea01efba38", "translatable_type" => "App\Models\Description", "translatable_id" => "dbd6c4e6-5158-4e58-b1d5-c8c513149a06"],
            //915
            ["translation_id" => "feeb66d9-0edf-40be-8b7c-f5784417a015", "translatable_type" => "App\Models\Description", "translatable_id" => "d6bd5588-3f6a-4794-9c00-4a3b4b02df1c"],
            ["translation_id" => "ccd6414b-538c-430e-ae82-ff31c7fbee25", "translatable_type" => "App\Models\Description", "translatable_id" => "d6bd5588-3f6a-4794-9c00-4a3b4b02df1c"],
            ["translation_id" => "c5603db8-0878-4562-89f6-467df689a3cc", "translatable_type" => "App\Models\Description", "translatable_id" => "d6bd5588-3f6a-4794-9c00-4a3b4b02df1c"],
            //916
            ["translation_id" => "75eab4d8-ef1e-408b-8180-342af37feab3", "translatable_type" => "App\Models\Description", "translatable_id" => "e18b7c17-ba08-48ad-9441-c62cd608d559"],
            ["translation_id" => "507515a3-bb28-47b3-8e98-02f8482928fd", "translatable_type" => "App\Models\Description", "translatable_id" => "e18b7c17-ba08-48ad-9441-c62cd608d559"],
            ["translation_id" => "5259b0f1-f2d0-45dd-bca7-17ff9bd1fada", "translatable_type" => "App\Models\Description", "translatable_id" => "e18b7c17-ba08-48ad-9441-c62cd608d559"],
            //917
            ["translation_id" => "a3af43e0-212b-4e16-b885-cf6932d5d1e2", "translatable_type" => "App\Models\Description", "translatable_id" => "78dd6889-1378-4dea-bae9-96c0df7c1416"],
            ["translation_id" => "09762c02-0bf1-4ff9-8a19-95fb9f347dc1", "translatable_type" => "App\Models\Description", "translatable_id" => "78dd6889-1378-4dea-bae9-96c0df7c1416"],
            ["translation_id" => "5510a5ce-ee1d-4b0d-801b-c4e3ed83b1a2", "translatable_type" => "App\Models\Description", "translatable_id" => "78dd6889-1378-4dea-bae9-96c0df7c1416"],
            //918
            ["translation_id" => "9efee064-10d5-47b9-9f25-5e05c5dbc2d1", "translatable_type" => "App\Models\Description", "translatable_id" => "ab0e529e-e5de-43ca-800b-21ba28387cc3"],
            ["translation_id" => "29ebd263-06a8-4fbe-90a1-ba13a46b88f0", "translatable_type" => "App\Models\Description", "translatable_id" => "ab0e529e-e5de-43ca-800b-21ba28387cc3"],
            ["translation_id" => "23bf0db3-a4b9-4eeb-b28d-6656aa6d6d04", "translatable_type" => "App\Models\Description", "translatable_id" => "ab0e529e-e5de-43ca-800b-21ba28387cc3"],
            //919
            ["translation_id" => "ba2a1906-116b-4fc6-9554-604ef280019a", "translatable_type" => "App\Models\Description", "translatable_id" => "f0519ba4-9066-4c52-9759-11d2f25e4c31"],
            ["translation_id" => "855bdbe1-b47f-4039-9e0f-c63b33bf8c3b", "translatable_type" => "App\Models\Description", "translatable_id" => "f0519ba4-9066-4c52-9759-11d2f25e4c31"],
            ["translation_id" => "4b8ee62c-03ca-4371-b217-3382ee098d7c", "translatable_type" => "App\Models\Description", "translatable_id" => "f0519ba4-9066-4c52-9759-11d2f25e4c31"],
            //920
            ["translation_id" => "834e6aa8-d4f5-46ac-b8f4-835cd6a16692", "translatable_type" => "App\Models\Description", "translatable_id" => "d7514e8a-f9b0-4c42-bdf9-88a91f49b2d1"],
            ["translation_id" => "25266eb1-6183-40fc-98a4-e46742f13954", "translatable_type" => "App\Models\Description", "translatable_id" => "d7514e8a-f9b0-4c42-bdf9-88a91f49b2d1"],
            ["translation_id" => "afdc59a2-205a-4afe-9e6c-07cc9faffdb9", "translatable_type" => "App\Models\Description", "translatable_id" => "d7514e8a-f9b0-4c42-bdf9-88a91f49b2d1"],
            //921
            ["translation_id" => "e387b65e-ac05-4e15-917e-6be08cb11e21", "translatable_type" => "App\Models\Description", "translatable_id" => "621f0e89-4403-48dd-8a71-a3c335977a29"],
            ["translation_id" => "3aa9bb66-e0e3-45cb-8203-7fa710647905", "translatable_type" => "App\Models\Description", "translatable_id" => "621f0e89-4403-48dd-8a71-a3c335977a29"],
            ["translation_id" => "6ad542c4-f341-47b3-a889-8fb3e1eca2fb", "translatable_type" => "App\Models\Description", "translatable_id" => "621f0e89-4403-48dd-8a71-a3c335977a29"],
            //922
            ["translation_id" => "378b00d1-2bf7-4046-94e6-2577beaf076a", "translatable_type" => "App\Models\Description", "translatable_id" => "e67ed69a-36b1-4c0f-885a-a6e32b85a04d"],
            ["translation_id" => "9bc8e7cc-d5d3-455d-8430-8a563ff3a4fa", "translatable_type" => "App\Models\Description", "translatable_id" => "e67ed69a-36b1-4c0f-885a-a6e32b85a04d"],
            ["translation_id" => "6b5015b4-0f4e-46b1-8a14-a92d2d3cee7e", "translatable_type" => "App\Models\Description", "translatable_id" => "e67ed69a-36b1-4c0f-885a-a6e32b85a04d"],
            //923
            ["translation_id" => "a84443c8-013e-47a6-ae9a-2d2856ff2e81", "translatable_type" => "App\Models\Description", "translatable_id" => "d46f46b8-e0d7-4fbc-81a3-f6f0bda39011"],
            ["translation_id" => "aeb3972f-2491-46df-a5ce-562304b77232", "translatable_type" => "App\Models\Description", "translatable_id" => "d46f46b8-e0d7-4fbc-81a3-f6f0bda39011"],
            ["translation_id" => "8e98ff4f-3a34-4937-ab84-e8d2ac94c1ea", "translatable_type" => "App\Models\Description", "translatable_id" => "d46f46b8-e0d7-4fbc-81a3-f6f0bda39011"],
            //924
            ["translation_id" => "05493238-c577-4258-99f5-d4e3cd577721", "translatable_type" => "App\Models\Description", "translatable_id" => "db1e171c-b327-47ec-bf17-63a4393440ea"],
            ["translation_id" => "3ab6ac11-ed78-4570-8fde-3947508acda6", "translatable_type" => "App\Models\Description", "translatable_id" => "db1e171c-b327-47ec-bf17-63a4393440ea"],
            ["translation_id" => "5079287b-e90d-4f10-b1fd-065f8c2842bc", "translatable_type" => "App\Models\Description", "translatable_id" => "db1e171c-b327-47ec-bf17-63a4393440ea"],
            //925
            ["translation_id" => "bc2a93e8-e451-4f58-93a5-d1077742866e", "translatable_type" => "App\Models\Description", "translatable_id" => "8ec7c8ee-ec9e-46f7-8aa5-ca3261bbb6b1"],
            ["translation_id" => "64e5a8e2-330d-4153-b4fc-a3e19a0fb089", "translatable_type" => "App\Models\Description", "translatable_id" => "8ec7c8ee-ec9e-46f7-8aa5-ca3261bbb6b1"],
            ["translation_id" => "0e88da6b-98c4-485d-8eec-de8cc210e2c5", "translatable_type" => "App\Models\Description", "translatable_id" => "8ec7c8ee-ec9e-46f7-8aa5-ca3261bbb6b1"],
            //926
            ["translation_id" => "d5983971-622d-4c8c-a598-fe6c6aacf0d8", "translatable_type" => "App\Models\Description", "translatable_id" => "efc1c31c-2231-41dc-ae0d-518fa8439309"],
            ["translation_id" => "64758bd6-5b3c-4435-80ec-3c0a513cc1b6", "translatable_type" => "App\Models\Description", "translatable_id" => "efc1c31c-2231-41dc-ae0d-518fa8439309"],
            ["translation_id" => "1a9f0f16-78c7-4545-b32d-fec6fe4b85e7", "translatable_type" => "App\Models\Description", "translatable_id" => "efc1c31c-2231-41dc-ae0d-518fa8439309"],
            //927
            ["translation_id" => "b80ad974-8c69-4984-a1a6-7dd2bae34a12", "translatable_type" => "App\Models\Description", "translatable_id" => "b2df2b86-5fb5-460f-bc97-2912fffb5e3b"],
            ["translation_id" => "c62dc489-5ad5-437b-a166-f9d6d7d54d0b", "translatable_type" => "App\Models\Description", "translatable_id" => "b2df2b86-5fb5-460f-bc97-2912fffb5e3b"],
            ["translation_id" => "aad26b5e-31d2-43fd-8c07-c7d50201c50b", "translatable_type" => "App\Models\Description", "translatable_id" => "b2df2b86-5fb5-460f-bc97-2912fffb5e3b"],
            //928
            ["translation_id" => "580bad74-44a3-4f06-95a0-f9f537d58331", "translatable_type" => "App\Models\Description", "translatable_id" => "0e25a604-003a-445d-b4c9-cbe1f2346598"],
            ["translation_id" => "58e20c9b-623e-49da-8ea1-f1afc90bccb6", "translatable_type" => "App\Models\Description", "translatable_id" => "0e25a604-003a-445d-b4c9-cbe1f2346598"],
            ["translation_id" => "e013350b-0bb2-46be-a4ce-97ca473d2c29", "translatable_type" => "App\Models\Description", "translatable_id" => "0e25a604-003a-445d-b4c9-cbe1f2346598"],
            //929
            ["translation_id" => "ce7f7fcb-c409-4e51-8eb8-69b129ae7930", "translatable_type" => "App\Models\Description", "translatable_id" => "a1a3e037-d6cc-410a-9dc1-140be32eb19f"],
            ["translation_id" => "019191b3-22a4-49d5-bcdd-82bccb829abf", "translatable_type" => "App\Models\Description", "translatable_id" => "a1a3e037-d6cc-410a-9dc1-140be32eb19f"],
            ["translation_id" => "bd23738f-776f-4964-98df-244373118a4b", "translatable_type" => "App\Models\Description", "translatable_id" => "a1a3e037-d6cc-410a-9dc1-140be32eb19f"],
            //930
            ["translation_id" => "adb888eb-7fb9-49ae-8aa5-31292b30126b", "translatable_type" => "App\Models\Description", "translatable_id" => "87dad1fc-0e2e-448c-a69a-d40d07299521"],
            ["translation_id" => "03e869aa-d28c-4897-8856-36c132bca7b8", "translatable_type" => "App\Models\Description", "translatable_id" => "87dad1fc-0e2e-448c-a69a-d40d07299521"],
            ["translation_id" => "b6b7bce0-4784-4fa1-9c64-6c4a9ebc6b1b", "translatable_type" => "App\Models\Description", "translatable_id" => "87dad1fc-0e2e-448c-a69a-d40d07299521"],
            //931
            ["translation_id" => "37f2076a-5f32-4423-a07c-ae6ac1f3250f", "translatable_type" => "App\Models\Description", "translatable_id" => "da85413b-8b74-4021-9b2e-a8b3e624a10d"],
            ["translation_id" => "4769276d-7e3e-4b14-b588-cbff59785715", "translatable_type" => "App\Models\Description", "translatable_id" => "da85413b-8b74-4021-9b2e-a8b3e624a10d"],
            ["translation_id" => "5c16f006-5433-4cc7-8cc1-1debc908b6fc", "translatable_type" => "App\Models\Description", "translatable_id" => "da85413b-8b74-4021-9b2e-a8b3e624a10d"],
            //932
            ["translation_id" => "a5002dda-5da7-489e-bd20-1b34a4d9b56d", "translatable_type" => "App\Models\Description", "translatable_id" => "835ba5c2-7342-49c4-aee4-83490b727d0a"],
            ["translation_id" => "84db0cd8-79de-472d-b462-bd76a75bab4b", "translatable_type" => "App\Models\Description", "translatable_id" => "835ba5c2-7342-49c4-aee4-83490b727d0a"],
            ["translation_id" => "19c29f2b-74f5-46da-a9fa-85e6eb45a56d", "translatable_type" => "App\Models\Description", "translatable_id" => "835ba5c2-7342-49c4-aee4-83490b727d0a"],
            //933
            ["translation_id" => "2d3fec11-aa48-4c01-9515-574ae1dfffa9", "translatable_type" => "App\Models\Description", "translatable_id" => "aacee926-b57e-4157-81bd-139622c48a93"],
            ["translation_id" => "8b47022e-4ca5-490c-b10b-c61bfd6101ab", "translatable_type" => "App\Models\Description", "translatable_id" => "aacee926-b57e-4157-81bd-139622c48a93"],
            ["translation_id" => "d429af8a-729e-4b08-a46f-4f61b592522b", "translatable_type" => "App\Models\Description", "translatable_id" => "aacee926-b57e-4157-81bd-139622c48a93"],
            //934
            ["translation_id" => "7704dec3-30e6-46f5-a1ac-435b51681e21", "translatable_type" => "App\Models\Description", "translatable_id" => "63150af5-224f-4d71-9d1a-6b3004f1cecc"],
            ["translation_id" => "6a42c948-595a-447f-9bd2-495cf3e91789", "translatable_type" => "App\Models\Description", "translatable_id" => "63150af5-224f-4d71-9d1a-6b3004f1cecc"],
            ["translation_id" => "0abafe26-ab7d-45df-acdf-1f30c0c6bfbd", "translatable_type" => "App\Models\Description", "translatable_id" => "63150af5-224f-4d71-9d1a-6b3004f1cecc"],
            //935
            ["translation_id" => "c761608f-8589-4fb1-b61a-d5ba03ea089d", "translatable_type" => "App\Models\Description", "translatable_id" => "5c9415af-c376-4393-ae2c-fa39a31b086c"],
            ["translation_id" => "d093a074-7e1f-4fbe-b446-a277e5d4c4ec", "translatable_type" => "App\Models\Description", "translatable_id" => "5c9415af-c376-4393-ae2c-fa39a31b086c"],
            ["translation_id" => "fa0080e6-508d-4e91-ad80-fa521d6efdd5", "translatable_type" => "App\Models\Description", "translatable_id" => "5c9415af-c376-4393-ae2c-fa39a31b086c"],
            //936
            ["translation_id" => "a7bcffb4-d3fd-4b74-a9c7-659437ca0a5f", "translatable_type" => "App\Models\Description", "translatable_id" => "25da2a99-d953-4da9-9652-8abed0ba23d3"],
            ["translation_id" => "6ea08170-01dc-432f-9b2e-4e4b5745cf42", "translatable_type" => "App\Models\Description", "translatable_id" => "25da2a99-d953-4da9-9652-8abed0ba23d3"],
            ["translation_id" => "261151ac-6c75-47ea-904a-904191039085", "translatable_type" => "App\Models\Description", "translatable_id" => "25da2a99-d953-4da9-9652-8abed0ba23d3"],
            //937
            ["translation_id" => "683fc2a4-7fad-4732-82e4-f4c5f94b074f", "translatable_type" => "App\Models\Description", "translatable_id" => "6477c64c-53fe-4e81-9bdf-b19d09a6136a"],
            ["translation_id" => "cae1bab8-571c-4191-90b8-e03faad34e87", "translatable_type" => "App\Models\Description", "translatable_id" => "6477c64c-53fe-4e81-9bdf-b19d09a6136a"],
            ["translation_id" => "e037b0bc-6a95-41d9-a96a-cc6633f9944d", "translatable_type" => "App\Models\Description", "translatable_id" => "6477c64c-53fe-4e81-9bdf-b19d09a6136a"],
            //938
            ["translation_id" => "7d73f1fb-f4c8-46d8-86cf-144d8e0c1f10", "translatable_type" => "App\Models\Description", "translatable_id" => "d1a98ff1-baf0-412b-953c-3b108cd96dc2"],
            ["translation_id" => "02c06e55-79f3-4725-8ec5-03056f19dd54", "translatable_type" => "App\Models\Description", "translatable_id" => "d1a98ff1-baf0-412b-953c-3b108cd96dc2"],
            ["translation_id" => "88312604-f840-483a-a289-b8a6d15cbca8", "translatable_type" => "App\Models\Description", "translatable_id" => "d1a98ff1-baf0-412b-953c-3b108cd96dc2"],
            //939
            ["translation_id" => "160272b9-a0f9-4cd6-a567-3766cf488f07", "translatable_type" => "App\Models\Description", "translatable_id" => "eb3d448c-345b-49c3-891f-f0e329e95eec"],
            ["translation_id" => "f55fb83e-c557-4b73-9f16-86c91890ed89", "translatable_type" => "App\Models\Description", "translatable_id" => "eb3d448c-345b-49c3-891f-f0e329e95eec"],
            ["translation_id" => "451caca8-a116-4dbd-b581-137e4eea16c6", "translatable_type" => "App\Models\Description", "translatable_id" => "eb3d448c-345b-49c3-891f-f0e329e95eec"],
            //940
            ["translation_id" => "c8981213-4722-4391-aa49-41a062538a12", "translatable_type" => "App\Models\Description", "translatable_id" => "0ff28ec2-6f83-4787-b05c-1b038837b6d9"],
            ["translation_id" => "c68eed7f-2971-4668-9566-2469ee0bf49b", "translatable_type" => "App\Models\Description", "translatable_id" => "0ff28ec2-6f83-4787-b05c-1b038837b6d9"],
            ["translation_id" => "cf25c9e9-5d1b-4eac-85b0-6d90e5cc7668", "translatable_type" => "App\Models\Description", "translatable_id" => "0ff28ec2-6f83-4787-b05c-1b038837b6d9"],
            //941
            ["translation_id" => "efe18a5b-f762-4406-8272-a902170be809", "translatable_type" => "App\Models\Description", "translatable_id" => "6195f235-9c6d-4f17-97bd-67e14219cd6c"],
            ["translation_id" => "2ea49799-17a4-4122-a215-a5d556d563ad", "translatable_type" => "App\Models\Description", "translatable_id" => "6195f235-9c6d-4f17-97bd-67e14219cd6c"],
            ["translation_id" => "13b19f9b-0dd5-49d4-8f38-8797daa68758", "translatable_type" => "App\Models\Description", "translatable_id" => "6195f235-9c6d-4f17-97bd-67e14219cd6c"],
            //942
            ["translation_id" => "104259a8-97e5-4fa3-ba99-b8d39b9f6f9c", "translatable_type" => "App\Models\Description", "translatable_id" => "0942a32d-37dc-4520-90cf-32b528815ef1"],
            ["translation_id" => "0b6a2a98-0a5f-4736-83ce-41d487377611", "translatable_type" => "App\Models\Description", "translatable_id" => "0942a32d-37dc-4520-90cf-32b528815ef1"],
            ["translation_id" => "3ef3ec0c-704f-40e9-9e21-302136436ba3", "translatable_type" => "App\Models\Description", "translatable_id" => "0942a32d-37dc-4520-90cf-32b528815ef1"],
            //943
            ["translation_id" => "274a0650-5721-4a0b-9ebc-8a8c3f41e946", "translatable_type" => "App\Models\Description", "translatable_id" => "5589a3c2-ab6a-4f44-a435-3c0c04724de9"],
            ["translation_id" => "247dc850-5f45-41f4-8801-51d4c33d6828", "translatable_type" => "App\Models\Description", "translatable_id" => "5589a3c2-ab6a-4f44-a435-3c0c04724de9"],
            ["translation_id" => "cd8f5657-86ce-45cc-9590-17277ffc94a6", "translatable_type" => "App\Models\Description", "translatable_id" => "5589a3c2-ab6a-4f44-a435-3c0c04724de9"],
            //944
            ["translation_id" => "5a8e8597-0629-4c35-9cb7-2409e04ef61a", "translatable_type" => "App\Models\Description", "translatable_id" => "559325e9-bbbc-4b10-8e53-8c4c01e89ca2"],
            ["translation_id" => "3aa0fa71-6771-4e90-96f0-135ef125a075", "translatable_type" => "App\Models\Description", "translatable_id" => "559325e9-bbbc-4b10-8e53-8c4c01e89ca2"],
            ["translation_id" => "bf46c781-6b41-4e94-a675-bae82ea1f57a", "translatable_type" => "App\Models\Description", "translatable_id" => "559325e9-bbbc-4b10-8e53-8c4c01e89ca2"],
            //945
            ["translation_id" => "b885b02e-81a0-4f20-aad4-19e62db7e9df", "translatable_type" => "App\Models\Description", "translatable_id" => "e0eef1ad-cb95-419d-aeaa-843c18e64078"],
            ["translation_id" => "3444e0e8-8549-44ee-9566-6cf7fd1d124f", "translatable_type" => "App\Models\Description", "translatable_id" => "e0eef1ad-cb95-419d-aeaa-843c18e64078"],
            ["translation_id" => "b1133cfd-b225-4824-baec-61d42fd72fee", "translatable_type" => "App\Models\Description", "translatable_id" => "e0eef1ad-cb95-419d-aeaa-843c18e64078"],
            //946
            ["translation_id" => "754f9f21-8b25-4687-82aa-a2f271c431d9", "translatable_type" => "App\Models\Description", "translatable_id" => "cf4bf0b5-bc28-46b1-8e13-a6a8a6cf537a"],
            ["translation_id" => "da0ee390-448a-4e9e-9dd6-4d8c0e1d3ef0", "translatable_type" => "App\Models\Description", "translatable_id" => "cf4bf0b5-bc28-46b1-8e13-a6a8a6cf537a"],
            ["translation_id" => "5fe2ffd4-7f0a-4d4c-a04a-ca181522e546", "translatable_type" => "App\Models\Description", "translatable_id" => "cf4bf0b5-bc28-46b1-8e13-a6a8a6cf537a"],
            //947
            ["translation_id" => "ae9c7c87-af51-471f-9cba-41589ad660fb", "translatable_type" => "App\Models\Description", "translatable_id" => "8b9edbef-4a8e-4fe1-9ca5-4ca1c3fdf543"],
            ["translation_id" => "55ea6069-1f01-4d83-9dc9-24d30f655e9c", "translatable_type" => "App\Models\Description", "translatable_id" => "8b9edbef-4a8e-4fe1-9ca5-4ca1c3fdf543"],
            ["translation_id" => "7228c50b-6ad5-44d5-9ae0-a9549aecf091", "translatable_type" => "App\Models\Description", "translatable_id" => "8b9edbef-4a8e-4fe1-9ca5-4ca1c3fdf543"],
            //948
            ["translation_id" => "0c417d6a-3f41-49bd-ad2d-ade20b3caea0", "translatable_type" => "App\Models\Description", "translatable_id" => "f07b26dc-999f-48b3-8cbf-2a16b7c90171"],
            ["translation_id" => "0b6eb043-4a54-40af-bef9-eaa0d5e8aa15", "translatable_type" => "App\Models\Description", "translatable_id" => "f07b26dc-999f-48b3-8cbf-2a16b7c90171"],
            ["translation_id" => "f02be6a8-e6fd-4083-a793-9a7ea5a48a12", "translatable_type" => "App\Models\Description", "translatable_id" => "f07b26dc-999f-48b3-8cbf-2a16b7c90171"],
            //949
            ["translation_id" => "afc74cdb-e8e3-4643-a4a2-1544c2924747", "translatable_type" => "App\Models\Description", "translatable_id" => "3a026613-1b90-4e3f-8914-8cbeefb60ca5"],
            ["translation_id" => "86648031-c736-411d-adf5-c41bc54ed5b9", "translatable_type" => "App\Models\Description", "translatable_id" => "3a026613-1b90-4e3f-8914-8cbeefb60ca5"],
            ["translation_id" => "8ad5639d-f955-4e16-bd71-8649e72b7256", "translatable_type" => "App\Models\Description", "translatable_id" => "3a026613-1b90-4e3f-8914-8cbeefb60ca5"],
            //950
            ["translation_id" => "4e00967e-a7fe-4d4a-aa9d-abd686a6555d", "translatable_type" => "App\Models\Description", "translatable_id" => "fc0e4266-123e-4c02-b6a7-d658b7bb74ad"],
            ["translation_id" => "52c59a23-fea7-440f-bd2a-e99474d10a2e", "translatable_type" => "App\Models\Description", "translatable_id" => "fc0e4266-123e-4c02-b6a7-d658b7bb74ad"],
            ["translation_id" => "7d10ea25-b4c7-46e6-a748-273054e32fb1", "translatable_type" => "App\Models\Description", "translatable_id" => "fc0e4266-123e-4c02-b6a7-d658b7bb74ad"],
            //951
            ["translation_id" => "07e79753-0963-4490-bb1b-85e754e04371", "translatable_type" => "App\Models\Description", "translatable_id" => "695a8753-5e5e-43b7-9544-f923d373c275"],
            ["translation_id" => "aad8c35e-1b70-4ea5-8584-672728ed02bc", "translatable_type" => "App\Models\Description", "translatable_id" => "695a8753-5e5e-43b7-9544-f923d373c275"],
            ["translation_id" => "ed4e07b7-b5ae-4378-9507-ee6a40d8386a", "translatable_type" => "App\Models\Description", "translatable_id" => "695a8753-5e5e-43b7-9544-f923d373c275"],
            //952
            ["translation_id" => "13d1ffd7-eb13-478f-88b7-7b2163dd2b2c", "translatable_type" => "App\Models\Description", "translatable_id" => "feba3d53-864f-4e19-a4f2-d6e25f5b624d"],
            ["translation_id" => "721e6e84-4e3d-4b50-8694-68a0e50c45a8", "translatable_type" => "App\Models\Description", "translatable_id" => "feba3d53-864f-4e19-a4f2-d6e25f5b624d"],
            ["translation_id" => "edb1cf98-2dbd-420d-aae2-a9a55f9ce174", "translatable_type" => "App\Models\Description", "translatable_id" => "feba3d53-864f-4e19-a4f2-d6e25f5b624d"],
            //953
            ["translation_id" => "114bd491-5eeb-49f3-8601-932928a01053", "translatable_type" => "App\Models\Description", "translatable_id" => "cba56047-f2d3-4be8-8ce4-4c2a649d0623"],
            ["translation_id" => "28b49f52-07ef-49d3-aa76-e6f2f61869e7", "translatable_type" => "App\Models\Description", "translatable_id" => "cba56047-f2d3-4be8-8ce4-4c2a649d0623"],
            ["translation_id" => "34bcbca9-15ed-4267-a4e4-70a44e9299e2", "translatable_type" => "App\Models\Description", "translatable_id" => "cba56047-f2d3-4be8-8ce4-4c2a649d0623"],
            //954
            ["translation_id" => "7b0152cc-21de-48ba-9a22-6c2d10f05c18", "translatable_type" => "App\Models\Description", "translatable_id" => "2737bb64-1af0-48a3-8cb4-735b92edf8f4"],
            ["translation_id" => "dd73792e-3ac7-496f-a4fb-f085b21f67db", "translatable_type" => "App\Models\Description", "translatable_id" => "2737bb64-1af0-48a3-8cb4-735b92edf8f4"],
            ["translation_id" => "21b258bc-a394-44ea-ab3a-61f8ac7eca62", "translatable_type" => "App\Models\Description", "translatable_id" => "2737bb64-1af0-48a3-8cb4-735b92edf8f4"],
            //955
            ["translation_id" => "21b52282-eee7-4f02-adc2-5ec315c71fad", "translatable_type" => "App\Models\Description", "translatable_id" => "8776d75e-7263-4da2-9079-efe7ea6825a7"],
            ["translation_id" => "1ad80c65-f818-40d8-ab99-561b0a75764b", "translatable_type" => "App\Models\Description", "translatable_id" => "8776d75e-7263-4da2-9079-efe7ea6825a7"],
            ["translation_id" => "8f08eda0-2b8f-4caf-866f-4bd4e0e2aa19", "translatable_type" => "App\Models\Description", "translatable_id" => "8776d75e-7263-4da2-9079-efe7ea6825a7"],
            //956
            ["translation_id" => "b06fc53a-5ef8-429c-9bf1-e83d82b228ad", "translatable_type" => "App\Models\Description", "translatable_id" => "3c24e3f9-9562-4229-a6b5-7ef8b6c50868"],
            ["translation_id" => "31458fd8-e57a-4d8e-9b52-3fddd6d395a7", "translatable_type" => "App\Models\Description", "translatable_id" => "3c24e3f9-9562-4229-a6b5-7ef8b6c50868"],
            ["translation_id" => "bd26eb06-0541-4bed-9a70-510d3e35b1ab", "translatable_type" => "App\Models\Description", "translatable_id" => "3c24e3f9-9562-4229-a6b5-7ef8b6c50868"],
            //957
            ["translation_id" => "aa1f6acc-f957-4efc-870d-38389a7a5dbd", "translatable_type" => "App\Models\Description", "translatable_id" => "a7653953-24cc-4e05-bcd1-4d33e2df5dae"],
            ["translation_id" => "f4392690-6784-4ad5-9e17-bd9dfb17d5b3", "translatable_type" => "App\Models\Description", "translatable_id" => "a7653953-24cc-4e05-bcd1-4d33e2df5dae"],
            ["translation_id" => "74a8d893-785f-4a8e-a117-ef8f7112ed85", "translatable_type" => "App\Models\Description", "translatable_id" => "a7653953-24cc-4e05-bcd1-4d33e2df5dae"],
            //958
            ["translation_id" => "d29e1d8b-cca6-46fb-9676-f69194de22bc", "translatable_type" => "App\Models\Description", "translatable_id" => "68f67e0d-c0b9-4cd0-bff3-d979b2c1fa8d"],
            ["translation_id" => "002142e1-8ab9-4f18-9547-f815eb69c41d", "translatable_type" => "App\Models\Description", "translatable_id" => "68f67e0d-c0b9-4cd0-bff3-d979b2c1fa8d"],
            ["translation_id" => "47116016-3a0a-4606-b78d-ac459cff6842", "translatable_type" => "App\Models\Description", "translatable_id" => "68f67e0d-c0b9-4cd0-bff3-d979b2c1fa8d"],
            //959
            ["translation_id" => "3ccb9ead-c309-4148-87bf-b80c7ab56c4b", "translatable_type" => "App\Models\Description", "translatable_id" => "580199d6-3143-4c33-99d5-8ae9ae0d986e"],
            ["translation_id" => "1c270d1e-da5e-4353-90fc-dde1267845e7", "translatable_type" => "App\Models\Description", "translatable_id" => "580199d6-3143-4c33-99d5-8ae9ae0d986e"],
            ["translation_id" => "d8af2fe7-f043-4ac0-a92f-75f41c34a576", "translatable_type" => "App\Models\Description", "translatable_id" => "580199d6-3143-4c33-99d5-8ae9ae0d986e"],
            //960
            ["translation_id" => "b7d84e1c-ac82-4419-9dee-4440b65556cb", "translatable_type" => "App\Models\Description", "translatable_id" => "7f9a9259-10de-4181-9b28-44255c91044b"],
            ["translation_id" => "4ae236b6-ce3f-4e81-afe3-8b7ab00e7462", "translatable_type" => "App\Models\Description", "translatable_id" => "7f9a9259-10de-4181-9b28-44255c91044b"],
            ["translation_id" => "f0f4ca9e-e6c5-43a8-abe3-3b596bf0d59a", "translatable_type" => "App\Models\Description", "translatable_id" => "7f9a9259-10de-4181-9b28-44255c91044b"],
            //961
            ["translation_id" => "b7e06bab-a281-4c6e-89f6-f9ec7c0a2a91", "translatable_type" => "App\Models\Description", "translatable_id" => "3a3e6a80-beca-4684-8fbc-e4c7c3d3cabd"],
            ["translation_id" => "b93b49fc-6866-459b-9821-226e84106b15", "translatable_type" => "App\Models\Description", "translatable_id" => "3a3e6a80-beca-4684-8fbc-e4c7c3d3cabd"],
            ["translation_id" => "0ce10ef1-d8d5-42e7-84a1-10c8a596f203", "translatable_type" => "App\Models\Description", "translatable_id" => "3a3e6a80-beca-4684-8fbc-e4c7c3d3cabd"],
            //962
            ["translation_id" => "bded1298-fcc9-44c1-840a-3b2b31c255cd", "translatable_type" => "App\Models\Description", "translatable_id" => "3a6a5a83-33a7-4771-aed4-31d8a03f1de0"],
            ["translation_id" => "6f8ffdf9-6f55-4cbe-b5ae-ffc79ac13891", "translatable_type" => "App\Models\Description", "translatable_id" => "3a6a5a83-33a7-4771-aed4-31d8a03f1de0"],
            ["translation_id" => "8e2cc629-ff03-4997-b3a4-8e2db7b56d15", "translatable_type" => "App\Models\Description", "translatable_id" => "3a6a5a83-33a7-4771-aed4-31d8a03f1de0"],
            //963
            ["translation_id" => "de80a69a-e775-492c-b10d-47c9bf481af0", "translatable_type" => "App\Models\Description", "translatable_id" => "d19e79ff-79d2-4133-9527-87bbd84545eb"],
            ["translation_id" => "7b2feff4-45f8-48f8-98fd-08f7dce35674", "translatable_type" => "App\Models\Description", "translatable_id" => "d19e79ff-79d2-4133-9527-87bbd84545eb"],
            ["translation_id" => "b8bd7030-43a4-40e9-a1d1-5790b8d5e6dc", "translatable_type" => "App\Models\Description", "translatable_id" => "d19e79ff-79d2-4133-9527-87bbd84545eb"],
            //964
            ["translation_id" => "d2a05dfd-b8da-4e9f-9123-dbfb96c896e8", "translatable_type" => "App\Models\Description", "translatable_id" => "a32bd92f-fe59-4379-8399-3a3919ee2f14"],
            ["translation_id" => "4aff4757-ef0f-4753-9eb0-0b49cf9e4f7a", "translatable_type" => "App\Models\Description", "translatable_id" => "a32bd92f-fe59-4379-8399-3a3919ee2f14"],
            ["translation_id" => "d5353591-e712-47be-a85b-ab354e981853", "translatable_type" => "App\Models\Description", "translatable_id" => "a32bd92f-fe59-4379-8399-3a3919ee2f14"],
            //965
            ["translation_id" => "912555a5-55f5-46ef-af63-89585009ea98", "translatable_type" => "App\Models\Description", "translatable_id" => "5e506ec0-e1ca-4cac-a72a-533fcc0a5a2b"],
            ["translation_id" => "bf40db21-5e8f-43e6-be36-0a7373f6e734", "translatable_type" => "App\Models\Description", "translatable_id" => "5e506ec0-e1ca-4cac-a72a-533fcc0a5a2b"],
            ["translation_id" => "4ffc0918-9245-47e1-9f08-cbae11e84b44", "translatable_type" => "App\Models\Description", "translatable_id" => "5e506ec0-e1ca-4cac-a72a-533fcc0a5a2b"],
            //966
            ["translation_id" => "ace0a5bf-3985-45c8-afea-c9b369af8435", "translatable_type" => "App\Models\Description", "translatable_id" => "7ed6b1b9-afd3-4885-b796-9429f60973cd"],
            ["translation_id" => "789bc978-2a4f-49fc-902d-1cce4963985c", "translatable_type" => "App\Models\Description", "translatable_id" => "7ed6b1b9-afd3-4885-b796-9429f60973cd"],
            ["translation_id" => "ca61fdbf-75a5-4cbb-8bc9-67bf7e52f7c7", "translatable_type" => "App\Models\Description", "translatable_id" => "7ed6b1b9-afd3-4885-b796-9429f60973cd"],
            //967
            ["translation_id" => "65228b39-b01f-4472-ba46-972ee5a204b4", "translatable_type" => "App\Models\Description", "translatable_id" => "88158043-d32c-43a6-a024-12a6eeb7bdb4"],
            ["translation_id" => "6c172334-ba1c-4ce9-99b8-c2901fa41cf9", "translatable_type" => "App\Models\Description", "translatable_id" => "88158043-d32c-43a6-a024-12a6eeb7bdb4"],
            ["translation_id" => "ad709bd8-f26e-496a-b23b-5b3e2e9076fe", "translatable_type" => "App\Models\Description", "translatable_id" => "88158043-d32c-43a6-a024-12a6eeb7bdb4"],
            //968
            ["translation_id" => "bcb373c0-78bd-40b8-b1ba-317313aca7f2", "translatable_type" => "App\Models\Description", "translatable_id" => "acfda820-d385-4d0a-804e-938f61cebbfd"],
            ["translation_id" => "46934c34-388f-4300-afc2-c5ff841e5cdd", "translatable_type" => "App\Models\Description", "translatable_id" => "acfda820-d385-4d0a-804e-938f61cebbfd"],
            ["translation_id" => "d7164dbb-2b1e-453e-a994-d9692da0aee9", "translatable_type" => "App\Models\Description", "translatable_id" => "acfda820-d385-4d0a-804e-938f61cebbfd"],
            //969
            ["translation_id" => "81c0872f-db81-4573-9caa-3aa51c86f11b", "translatable_type" => "App\Models\Description", "translatable_id" => "bd5aa533-59c6-49eb-8b5a-54342bb29460"],
            ["translation_id" => "5d073fc2-644f-44cc-a000-1ad735c1339c", "translatable_type" => "App\Models\Description", "translatable_id" => "bd5aa533-59c6-49eb-8b5a-54342bb29460"],
            ["translation_id" => "23ac4fe0-a662-467c-b2e2-6e2039a134b1", "translatable_type" => "App\Models\Description", "translatable_id" => "bd5aa533-59c6-49eb-8b5a-54342bb29460"],
            //970
            ["translation_id" => "63c45274-85ac-4a95-8516-57e24ae90ab7", "translatable_type" => "App\Models\Description", "translatable_id" => "0f33bd9d-870a-416b-8ba2-bfa6e80081a7"],
            ["translation_id" => "4459aea2-2fbf-4df8-a744-686bad272c29", "translatable_type" => "App\Models\Description", "translatable_id" => "0f33bd9d-870a-416b-8ba2-bfa6e80081a7"],
            ["translation_id" => "b8e73b48-d482-42cc-a7aa-97a8b5955053", "translatable_type" => "App\Models\Description", "translatable_id" => "0f33bd9d-870a-416b-8ba2-bfa6e80081a7"],
            //971
            ["translation_id" => "56da8e55-b8f4-4bb1-bbe0-e780f2b779a2", "translatable_type" => "App\Models\Description", "translatable_id" => "1351db34-f53b-472f-91cf-4d095fff1feb"],
            ["translation_id" => "1e98eff5-a361-4b64-ab0d-abd62938f332", "translatable_type" => "App\Models\Description", "translatable_id" => "1351db34-f53b-472f-91cf-4d095fff1feb"],
            ["translation_id" => "b37e005a-5216-4022-b59a-c862ae88aefc", "translatable_type" => "App\Models\Description", "translatable_id" => "1351db34-f53b-472f-91cf-4d095fff1feb"],
            //972
            ["translation_id" => "1c9d5b95-37e4-46fc-85c8-7026fca29615", "translatable_type" => "App\Models\Description", "translatable_id" => "67e7174b-3acb-4ed9-90ba-88fce028b810"],
            ["translation_id" => "02322087-a097-4deb-904c-efd6af647174", "translatable_type" => "App\Models\Description", "translatable_id" => "67e7174b-3acb-4ed9-90ba-88fce028b810"],
            ["translation_id" => "c001a2fe-cf94-4d68-8355-e129cffb5a6e", "translatable_type" => "App\Models\Description", "translatable_id" => "67e7174b-3acb-4ed9-90ba-88fce028b810"],
            //973
            ["translation_id" => "79b61c94-faa4-41fa-ab8b-a168bcf62f41", "translatable_type" => "App\Models\Description", "translatable_id" => "9387faa3-02de-4426-b819-bfb16d434d62"],
            ["translation_id" => "dab5a031-20af-4a50-a6b6-40af74659492", "translatable_type" => "App\Models\Description", "translatable_id" => "9387faa3-02de-4426-b819-bfb16d434d62"],
            ["translation_id" => "6833e3de-8d31-4836-8ee5-0d5cf8b788c1", "translatable_type" => "App\Models\Description", "translatable_id" => "9387faa3-02de-4426-b819-bfb16d434d62"],
            //974
            ["translation_id" => "1eeab81f-afdf-42a0-8577-82d4eb053e93", "translatable_type" => "App\Models\Description", "translatable_id" => "27b912b3-01b6-42e5-9251-cff79f0057d2"],
            ["translation_id" => "486d08b6-eb14-4466-b4f4-416e994d6356", "translatable_type" => "App\Models\Description", "translatable_id" => "27b912b3-01b6-42e5-9251-cff79f0057d2"],
            ["translation_id" => "9941c8f1-f8cc-4f9d-b767-7d4fb4dd44d5", "translatable_type" => "App\Models\Description", "translatable_id" => "27b912b3-01b6-42e5-9251-cff79f0057d2"],
            //975
            ["translation_id" => "bebdf9a2-06ee-4ffa-aa4b-20d60232be96", "translatable_type" => "App\Models\Description", "translatable_id" => "2a2cb7f0-c9dd-4ed3-9f6a-9d4eb249b478"],
            ["translation_id" => "cfbb3b25-06c6-47ea-b011-64dbf18d0684", "translatable_type" => "App\Models\Description", "translatable_id" => "2a2cb7f0-c9dd-4ed3-9f6a-9d4eb249b478"],
            ["translation_id" => "77f4e521-f38c-4261-83a2-e1da16f3394f", "translatable_type" => "App\Models\Description", "translatable_id" => "2a2cb7f0-c9dd-4ed3-9f6a-9d4eb249b478"],
            //976
            ["translation_id" => "45715897-0bc5-4a75-bd6f-75f6bb81329f", "translatable_type" => "App\Models\Description", "translatable_id" => "cb79a5c5-e0b7-49c0-9a51-bc6f3bd35d3b"],
            ["translation_id" => "8d1ec483-27eb-48a2-be44-e3511056079b", "translatable_type" => "App\Models\Description", "translatable_id" => "cb79a5c5-e0b7-49c0-9a51-bc6f3bd35d3b"],
            ["translation_id" => "91f8431c-a7bd-4a01-a1d0-facc3f6745b2", "translatable_type" => "App\Models\Description", "translatable_id" => "cb79a5c5-e0b7-49c0-9a51-bc6f3bd35d3b"],
            //977
            ["translation_id" => "f35a0d7a-ec73-4e98-a3ff-467c413bb0cd", "translatable_type" => "App\Models\Description", "translatable_id" => "00295ab0-7169-41f0-987f-eb73457768f6"],
            ["translation_id" => "0932f742-4041-4f07-bd81-1b79be375a7d", "translatable_type" => "App\Models\Description", "translatable_id" => "00295ab0-7169-41f0-987f-eb73457768f6"],
            ["translation_id" => "7caf0789-05fb-4f4c-95e9-225f78c30e13", "translatable_type" => "App\Models\Description", "translatable_id" => "00295ab0-7169-41f0-987f-eb73457768f6"],
            //978
            ["translation_id" => "1469871f-921c-45cb-94f1-03adf901c769", "translatable_type" => "App\Models\Description", "translatable_id" => "9e287c22-5801-4c82-bd56-aea03934e2f6"],
            ["translation_id" => "006eba03-724b-416d-b9fb-645533f7cbca", "translatable_type" => "App\Models\Description", "translatable_id" => "9e287c22-5801-4c82-bd56-aea03934e2f6"],
            ["translation_id" => "b2156b3c-1df8-4757-8d14-8ffdcb5b36d0", "translatable_type" => "App\Models\Description", "translatable_id" => "9e287c22-5801-4c82-bd56-aea03934e2f6"],
            //979
            ["translation_id" => "6a956d3c-012c-4a17-a554-14a525a8e20b", "translatable_type" => "App\Models\Description", "translatable_id" => "bd5007d7-d6f4-47ab-9ad9-ec58addb9b08"],
            ["translation_id" => "190e403b-c891-485c-bbd9-5dc31e7da1f3", "translatable_type" => "App\Models\Description", "translatable_id" => "bd5007d7-d6f4-47ab-9ad9-ec58addb9b08"],
            ["translation_id" => "491f7375-81f6-4028-987f-c8f2631c96a8", "translatable_type" => "App\Models\Description", "translatable_id" => "bd5007d7-d6f4-47ab-9ad9-ec58addb9b08"],
            //980
            ["translation_id" => "ad6567bb-1a78-4f9f-b1a9-13a2e55818aa", "translatable_type" => "App\Models\Description", "translatable_id" => "447c29ae-deb8-4c24-8e29-f09aa10545e7"],
            ["translation_id" => "bf962565-ab4f-4fdb-8300-90ad5f025ed1", "translatable_type" => "App\Models\Description", "translatable_id" => "447c29ae-deb8-4c24-8e29-f09aa10545e7"],
            ["translation_id" => "52b5ec57-8773-4e7a-8640-a7abd8bf52fa", "translatable_type" => "App\Models\Description", "translatable_id" => "447c29ae-deb8-4c24-8e29-f09aa10545e7"],
            //981
            ["translation_id" => "8ee24012-019b-413d-a1dd-eb7af42ea643", "translatable_type" => "App\Models\Description", "translatable_id" => "9ed4f3ff-b734-4a96-8aee-84d4cf3d4333"],
            ["translation_id" => "51e06f4a-3030-4f59-800b-89367a82c721", "translatable_type" => "App\Models\Description", "translatable_id" => "9ed4f3ff-b734-4a96-8aee-84d4cf3d4333"],
            ["translation_id" => "a5630e59-5920-4bc8-8e97-3af4b7675a55", "translatable_type" => "App\Models\Description", "translatable_id" => "9ed4f3ff-b734-4a96-8aee-84d4cf3d4333"],
            //982
            ["translation_id" => "ab9542d1-64dc-4106-a11f-69f1a687a61d", "translatable_type" => "App\Models\Description", "translatable_id" => "3060583b-04e7-467a-833c-ba195a2b2150"],
            ["translation_id" => "2e98be3d-caf3-4d9f-bd69-e11d767a4c68", "translatable_type" => "App\Models\Description", "translatable_id" => "3060583b-04e7-467a-833c-ba195a2b2150"],
            ["translation_id" => "bcdd89b1-bffc-458f-8e01-3fb32ef1e60c", "translatable_type" => "App\Models\Description", "translatable_id" => "3060583b-04e7-467a-833c-ba195a2b2150"],
            //983
            ["translation_id" => "dbe43c2b-30a1-4ced-884a-b7e795f76ebe", "translatable_type" => "App\Models\Description", "translatable_id" => "523fba09-b1b4-4c18-84b4-ac6357efb734"],
            ["translation_id" => "813ffd49-5c03-496b-a452-32ea5428eb89", "translatable_type" => "App\Models\Description", "translatable_id" => "523fba09-b1b4-4c18-84b4-ac6357efb734"],
            ["translation_id" => "f79f335c-3571-46c1-a4e9-920c0635b148", "translatable_type" => "App\Models\Description", "translatable_id" => "523fba09-b1b4-4c18-84b4-ac6357efb734"],
            //984
            ["translation_id" => "d8a5f26b-5477-4de6-8c1f-eba0fbd9149f", "translatable_type" => "App\Models\Description", "translatable_id" => "05a94d52-a39d-4871-a8fd-555892d1bf2a"],
            ["translation_id" => "06076c90-b953-4ad3-b405-47951108bf87", "translatable_type" => "App\Models\Description", "translatable_id" => "05a94d52-a39d-4871-a8fd-555892d1bf2a"],
            ["translation_id" => "af6ccff4-704f-4253-a0a9-de48b1fd77a5", "translatable_type" => "App\Models\Description", "translatable_id" => "05a94d52-a39d-4871-a8fd-555892d1bf2a"],
            //985
            ["translation_id" => "6bf7fa53-3483-4571-b166-b7c689d74b58", "translatable_type" => "App\Models\Description", "translatable_id" => "f275fa54-96b4-4d2e-8302-2308d40b2369"],
            ["translation_id" => "289cb1ca-8e27-40d7-b59d-b9f26c75706e", "translatable_type" => "App\Models\Description", "translatable_id" => "f275fa54-96b4-4d2e-8302-2308d40b2369"],
            ["translation_id" => "0bdfb2d3-d28b-4d5b-99d3-8540b64bf396", "translatable_type" => "App\Models\Description", "translatable_id" => "f275fa54-96b4-4d2e-8302-2308d40b2369"],
            //986
            ["translation_id" => "546e7574-1e17-4d9a-be6d-9bde4c366c61", "translatable_type" => "App\Models\Description", "translatable_id" => "802db98a-57ac-498b-88a5-6f487cf009c7"],
            ["translation_id" => "8bcd5332-6536-4399-a90a-89f8477ba004", "translatable_type" => "App\Models\Description", "translatable_id" => "802db98a-57ac-498b-88a5-6f487cf009c7"],
            ["translation_id" => "868a382c-0e17-491f-99dd-d6058e0ccf0b", "translatable_type" => "App\Models\Description", "translatable_id" => "802db98a-57ac-498b-88a5-6f487cf009c7"],
            //987
            ["translation_id" => "710052e1-384b-4055-8d68-439853147703", "translatable_type" => "App\Models\Description", "translatable_id" => "36eb07d8-816c-439e-a8cb-d2257c740a6c"],
            ["translation_id" => "0200cb83-3c09-4e3e-9988-1e0c3c7d3aeb", "translatable_type" => "App\Models\Description", "translatable_id" => "36eb07d8-816c-439e-a8cb-d2257c740a6c"],
            ["translation_id" => "43017e13-e2da-4fea-96b7-0e4628362005", "translatable_type" => "App\Models\Description", "translatable_id" => "36eb07d8-816c-439e-a8cb-d2257c740a6c"],
            //988
            ["translation_id" => "a8dd0984-55e2-4d2f-b082-2df026c4468e", "translatable_type" => "App\Models\Description", "translatable_id" => "1a5d6982-44e7-4713-a0b7-0e216465019c"],
            ["translation_id" => "5ca89f01-211a-46b4-837d-b6deb229177b", "translatable_type" => "App\Models\Description", "translatable_id" => "1a5d6982-44e7-4713-a0b7-0e216465019c"],
            ["translation_id" => "006c2c74-92d4-4a07-8d95-f85d97d76081", "translatable_type" => "App\Models\Description", "translatable_id" => "1a5d6982-44e7-4713-a0b7-0e216465019c"],
            //989
            ["translation_id" => "27e96d94-d514-4b3b-a051-14c8a45a9140", "translatable_type" => "App\Models\Description", "translatable_id" => "882c25ca-c97b-45a2-816a-573aab183754"],
            ["translation_id" => "ac656445-11bf-43c0-872e-3ef8bace65b8", "translatable_type" => "App\Models\Description", "translatable_id" => "882c25ca-c97b-45a2-816a-573aab183754"],
            ["translation_id" => "4bb7c34f-172f-48b9-81a6-492f31c13d92", "translatable_type" => "App\Models\Description", "translatable_id" => "882c25ca-c97b-45a2-816a-573aab183754"],
            //990
            ["translation_id" => "6eadcc59-5aa7-43e2-84bf-4e6c726e5939", "translatable_type" => "App\Models\Description", "translatable_id" => "ef2c310c-4512-447e-a78f-60069dde015d"],
            ["translation_id" => "2c531aab-0e1a-40fb-b98b-0ee6165dcdca", "translatable_type" => "App\Models\Description", "translatable_id" => "ef2c310c-4512-447e-a78f-60069dde015d"],
            ["translation_id" => "57a122ff-909e-4915-b7eb-c8780f461123", "translatable_type" => "App\Models\Description", "translatable_id" => "ef2c310c-4512-447e-a78f-60069dde015d"],
            //991
            ["translation_id" => "3e9cd197-07cf-4698-9956-cb9c9c178d42", "translatable_type" => "App\Models\Description", "translatable_id" => "2f9f573b-e164-464a-9d2b-06674160406c"],
            ["translation_id" => "d45fb3da-ee6e-46cc-b72c-7c0aed2808c6", "translatable_type" => "App\Models\Description", "translatable_id" => "2f9f573b-e164-464a-9d2b-06674160406c"],
            ["translation_id" => "db9cdbdd-4a93-4f6c-a3c2-90d24694ac2e", "translatable_type" => "App\Models\Description", "translatable_id" => "2f9f573b-e164-464a-9d2b-06674160406c"],
            //992
            ["translation_id" => "683195fb-b2c6-40be-99fb-c261db842524", "translatable_type" => "App\Models\Description", "translatable_id" => "343116a4-a879-456e-8431-d4a72025c2bd"],
            ["translation_id" => "a43d9570-50d6-44c2-b8ed-8dcdda15f75c", "translatable_type" => "App\Models\Description", "translatable_id" => "343116a4-a879-456e-8431-d4a72025c2bd"],
            ["translation_id" => "ffb8f0c9-28ed-4fc0-99e9-5dcef1cbc92c", "translatable_type" => "App\Models\Description", "translatable_id" => "343116a4-a879-456e-8431-d4a72025c2bd"],
            //993
            ["translation_id" => "c3c42e70-5866-405e-8bd9-3cfbb820c7ca", "translatable_type" => "App\Models\Description", "translatable_id" => "ac595841-3c17-492a-8c17-ffff9ed0bc64"],
            ["translation_id" => "35307e57-3cd8-4855-be66-4697a7c1d7e1", "translatable_type" => "App\Models\Description", "translatable_id" => "ac595841-3c17-492a-8c17-ffff9ed0bc64"],
            ["translation_id" => "73fc136d-c77a-463e-b560-035572634b7a", "translatable_type" => "App\Models\Description", "translatable_id" => "ac595841-3c17-492a-8c17-ffff9ed0bc64"],
            //994
            ["translation_id" => "34b42f9e-97c2-4935-806a-ad12ac365caa", "translatable_type" => "App\Models\Description", "translatable_id" => "791d484b-498e-4458-a7e0-846016bcca50"],
            ["translation_id" => "31b81319-e8ed-41da-9198-c738ab69728f", "translatable_type" => "App\Models\Description", "translatable_id" => "791d484b-498e-4458-a7e0-846016bcca50"],
            ["translation_id" => "35056172-e9f4-4eb0-bb40-e225a00dd762", "translatable_type" => "App\Models\Description", "translatable_id" => "791d484b-498e-4458-a7e0-846016bcca50"],
            //995
            ["translation_id" => "3900c08b-1aaf-4d5c-ae8d-ed7e514c5747", "translatable_type" => "App\Models\Description", "translatable_id" => "b12eaef7-58a1-4a34-bb03-e3ec5a6de166"],
            ["translation_id" => "0313398c-9728-4fd0-aefc-4bfa854d7b8b", "translatable_type" => "App\Models\Description", "translatable_id" => "b12eaef7-58a1-4a34-bb03-e3ec5a6de166"],
            ["translation_id" => "b72c740b-5bc9-4dd2-a306-7713b8f0a56e", "translatable_type" => "App\Models\Description", "translatable_id" => "b12eaef7-58a1-4a34-bb03-e3ec5a6de166"],
            //996
            ["translation_id" => "c2014ab6-1992-4beb-ac72-e4b7f582d5a5", "translatable_type" => "App\Models\Description", "translatable_id" => "86d8796c-de4b-4068-bf69-ece577f0c05a"],
            ["translation_id" => "d22deccb-b06c-4020-ae77-aa19659438ff", "translatable_type" => "App\Models\Description", "translatable_id" => "86d8796c-de4b-4068-bf69-ece577f0c05a"],
            ["translation_id" => "6abb64ff-fdcf-423c-af48-a7dd55b45fd3", "translatable_type" => "App\Models\Description", "translatable_id" => "86d8796c-de4b-4068-bf69-ece577f0c05a"],
            //997
            ["translation_id" => "662e30c2-ac5c-462f-8274-6700cf496341", "translatable_type" => "App\Models\Description", "translatable_id" => "cbc4f055-ee1e-4a26-b0b5-a0e716604a84"],
            ["translation_id" => "08406720-2e83-4804-9085-3cb23702d57c", "translatable_type" => "App\Models\Description", "translatable_id" => "cbc4f055-ee1e-4a26-b0b5-a0e716604a84"],
            ["translation_id" => "b4f9bf42-5a22-4424-899c-677d3e922e96", "translatable_type" => "App\Models\Description", "translatable_id" => "cbc4f055-ee1e-4a26-b0b5-a0e716604a84"],
            //998
            ["translation_id" => "180ad266-1f6f-4621-8201-3d8473e442d8", "translatable_type" => "App\Models\Description", "translatable_id" => "d41f6f6d-670e-4214-bdb9-ba4372fb4689"],
            ["translation_id" => "67414c10-d772-4c67-8351-5a9f08b6599e", "translatable_type" => "App\Models\Description", "translatable_id" => "d41f6f6d-670e-4214-bdb9-ba4372fb4689"],
            ["translation_id" => "74d4023a-a81b-468d-8b02-c49e4cd444c4", "translatable_type" => "App\Models\Description", "translatable_id" => "d41f6f6d-670e-4214-bdb9-ba4372fb4689"],
            //999
            ["translation_id" => "31a72874-627e-48e4-be43-49f7dc3b718f", "translatable_type" => "App\Models\Description", "translatable_id" => "9f79c11c-a1a2-4708-b7ef-befb702a86c5"],
            ["translation_id" => "060edf1e-80c6-4060-a06f-b9abbd92d507", "translatable_type" => "App\Models\Description", "translatable_id" => "9f79c11c-a1a2-4708-b7ef-befb702a86c5"],
            ["translation_id" => "8f0b7f9b-a1e2-43ad-b052-d2580cd0d30e", "translatable_type" => "App\Models\Description", "translatable_id" => "9f79c11c-a1a2-4708-b7ef-befb702a86c5"],
            //1000
            ["translation_id" => "6f67d75b-7ffa-43df-afda-1a06a77d7962", "translatable_type" => "App\Models\Description", "translatable_id" => "44da8a6d-533a-47e6-8d20-d83468ef956f"],
            ["translation_id" => "970639d0-3bc8-4599-b5ca-d35fc9b60a5c", "translatable_type" => "App\Models\Description", "translatable_id" => "44da8a6d-533a-47e6-8d20-d83468ef956f"],
            ["translation_id" => "f9ee614c-77d7-4d96-b30c-f0b8463aab8e", "translatable_type" => "App\Models\Description", "translatable_id" => "44da8a6d-533a-47e6-8d20-d83468ef956f"],
            ];
        DB::table("translatables")->insert($translatable);
    }
}
