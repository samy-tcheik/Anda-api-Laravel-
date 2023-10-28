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
            //languages
            ["id" => "843c5d5b-1ee2-4c58-b95a-6f76f532317e", "translation" => "english", "language_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["id" => "0302f4e4-50c4-442c-8332-a9f5ea13e9e1", "translation" => "anglais" , "language_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["id" => "de70c9cd-efdb-47c1-b678-205b48c0829e", "translation" => "إنجليزي", "language_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],
            ["id" => "5549ee78-b142-4619-8817-0b13ae3555b1", "translation" => "frensh", "language_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["id" => "f6497388-30f8-4367-b5de-d120c0a1d035", "translation" => "français", "language_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["id" => "f0fbc629-47a8-4869-a99a-702e7696b414", "translation" => "الفرنسية", "language_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],
            ["id" => "a134e009-9a46-47c3-b099-418b4b621192", "translation" => "arabic", "language_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["id" => "deab2578-b912-4085-a0a1-30e37a753e2b", "translation" => "arabe", "language_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["id" => "bf04844c-dc90-4673-bea0-f5a1b643c88c", "translation" => "عربي", "language_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],

            //Descriptions
            ["id" => "c5b8f531-5393-464c-93c7-16f3e5e91051", "translation" => "The Church of Saint-Cyprien in El Kala is a remarkable religious building and an architectural and spiritual testament to the history and cultural richness of the region.", "language_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["id" => "70de6341-675e-4025-bcb9-0912c6cfb278", "translation" => "L'église Saint-Cyprien d'El Kala est un édifice religieux remarquable. et un témoignage architectural et spirituel de l'histoire et de la richesse culturelle de la région", "language_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["id" => "b863e3f1-efd5-408a-81fc-cfc21a072145", "translation" => "تعد كنيسة القديس سيبريان في القالة مبنى دينيًا رائعًا. وشهادة معمارية وروحية على تاريخ المنطقة وثرائها الثقافي", "language_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],
            //
            ["id" => "296bfe64-7adb-4d86-a813-06d23d735c19", "translation" => "The Moulin Fort is a fascinating historical site. Located in the town of El Kala, this fort provides insight into the region's tumultuous past. With its sturdy stone walls and defensive towers, it boasts robust and imposing architecture. Not to mention the panoramic views from the ramparts that provide a magnificent spectacle of the surroundings.", "language_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["id" => "eb3e9900-ed92-4e0e-a3fd-1c34bdb55819", "translation" => "Le Fort Moulin est un site historique fascinant. Situé dans la ville d'El Kala, ce fort offre un aperçu du passé tumultueux de la région. Avec ses murs solides en pierre et ses tours de défense, il présente une architecture robuste et imposante. Sans oublier les vues panoramiques depuis les remparts qui offrent un spectacle magnifique sur les environs.", "language_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["id" => "d40db377-5707-44d0-ac2a-aa98b52841e4", "translation" => "قلعة مولان هي موقع تاريخي رائع. تقع في مدينة القالة، وتقدم هذه القلعة نظرة على الماضي العريق للمنطقة. بجدرانها الصلبة المبنية من الحجر وأبراجها الدفاعية، تقدم هندسة متينة ومهيبة. دون نسيان المناظر البانورامية من الأسوار التي تقدم منظرًا رائعًا للمناطق المحيطة بها.", "language_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],
            //
            ["id" => "009b111c-bce3-4100-a791-0c7592c41d1d", "translation" => "The Brabtia zoological park is an ideal place for a family day out, offering both an educational experience, interaction with animals, and fun water activities. It's a place where you can connect with nature and learn more about the diversity of animal life while having an enjoyable and entertaining time.", "language_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["id" => "b3bbcda2-bac6-4c38-9d69-701933439d11", "translation" => "Le parc zoologique de Brabtia est un lieu idéal pour une journée en famille, offrant à la fois une expérience éducative, une interaction avec les animaux et des activités aquatiques amusantes. C'est un endroit où l'on peut se connecter à la nature et en apprendre davantage sur la diversité de la vie animale tout en passant un moment agréable et divertissant.", "language_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["id" => "e5e7d5fb-6c2d-4960-9499-95351b627110", "translation" => "حديقة الحيوانات برابطية هي مكان مثالي لقضاء يوم مع العائلة، حيث تقدم تجربة تعليمية، تفاعل مع الحيوانات، وأنشطة مائية ممتعة. إنها مكان يمكنك فيه التواصل مع الطبيعة والتعرف على المزيد عن تنوع الحياة الحيوانية بينما تقضي وقتًا ممتعًا ومسليًا.", "language_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],
            //
            ["id" => "dc7ba502-6aed-46f5-bbf1-0abc79d60b7b", "translation" => "Lake Mellah is a breathtaking natural wonder. This lake offers a picturesque landscape surrounded by lush vegetation. Its calm waters reflect the beauty of its natural surroundings. The shores of Lake Mellah are lined with green trees and a variety of aquatic plants, creating a biodiversity-rich ecosystem.", "language_id" => "871d73c9-c65d-476a-97f0-929fff2707c3"],
            ["id" => "4eb6478f-81a3-45cf-a6bc-fa5cfe75267e", "translation" => "Le lac Mellah est une merveille naturelle à couper le souffle. Ce lac offre un paysage pittoresque entouré d'une végétation luxuriante. Ses eaux calmes reflètent la beauté de son environnement naturel. Les rives du lac Mellah sont bordées d'arbres verdoyants et d'une variété de plantes aquatiques, créant un écosystème riche en biodiversité.", "language_id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f"],
            ["id" => "ae9a614a-0eb1-41bb-b4d8-454c4960effa", "translation" => "بحيرة ملاح هي عجب طبيعي يأسر الألباب. تقدم هذه البحيرة منظرًا خلابًا محاطًا بنبات غني. مياهها الهادئة تعكس جمال بيئتها الطبيعية. يتميز شاطئ بحيرة ملاح بأشجار خضراء ومجموعة متنوعة من النباتات المائية، مما يخلق نظامًا بيئيًا غنيًا بالتنوع البيولوجي.", "language_id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73"],

            ];
        DB::table("translations")->insert($translations);
    }
}
