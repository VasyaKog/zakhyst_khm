<?php

namespace Database\Seeders;

use App\Models\TimelineEvent;
use Illuminate\Database\Seeder;

class TimelineEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'date_display' => ['ua' => '01.07', 'en' => '01.07'],
                'year' => '2019',
                'description' => [
                    'ua' => 'Створення Інформаційно-консультативного центру для родин учасників АТО/ООС',
                    'en' => 'Creation of the Information and Consultative Center for ATO/JFO veteran families',
                ],
                'sort_order' => 1,
            ],
            [
                'date_display' => ['ua' => '24.02', 'en' => '24.02'],
                'year' => '2022',
                'description' => [
                    'ua' => 'Об\'єднання волонтерів під час початку повномасштабного вторгнення рф, створення волонтерського центру «Захист»',
                    'en' => 'Uniting volunteers during the start of the full-scale Russian invasion, creation of the "Zakhyst" volunteer center',
                ],
                'sort_order' => 2,
            ],
            [
                'date_display' => ['ua' => '17.03', 'en' => '17.03'],
                'year' => '2022',
                'description' => [
                    'ua' => 'Реєстрація ГО «Захист - об\'єднання волонтерів»',
                    'en' => 'Registration of NGO "Zakhyst - Volunteer Association"',
                ],
                'sort_order' => 3,
            ],
            [
                'date_display' => ['ua' => '24.06', 'en' => '24.06'],
                'year' => '2022',
                'description' => [
                    'ua' => 'І стратегічна сесія організації, розвиток ветеранських політик в громаді стає стратегічним напрямком.',
                    'en' => '1st strategic session of the organization, development of veteran policies in the community becomes a strategic direction.',
                ],
                'sort_order' => 4,
            ],
            [
                'date_display' => ['ua' => '01.07', 'en' => '01.07'],
                'year' => '2022',
                'description' => [
                    'ua' => 'Початок психо-соціальної підтримки військовослужбовців та їх родин',
                    'en' => 'Start of psychosocial support for military personnel and their families',
                ],
                'sort_order' => 5,
            ],
            [
                'date_display' => ['ua' => '21.11', 'en' => '21.11'],
                'year' => '2023',
                'description' => [
                    'ua' => 'Відкриття ветеранського простору на базі ГО «Захист - об\'єднання волонтерів»',
                    'en' => 'Opening of the veteran space based on NGO "Zakhyst - Volunteer Association"',
                ],
                'sort_order' => 6,
            ],
            [
                'date_display' => ['ua' => '01.03', 'en' => '01.03'],
                'year' => '2024',
                'description' => [
                    'ua' => 'Рішення сесії Хмельницької міської ради про створення Ветеранського простору як комунального закладу',
                    'en' => 'Decision of the Khmelnytskyi City Council session to create the Veteran Space as a municipal institution',
                ],
                'sort_order' => 7,
            ],
            [
                'date_display' => ['ua' => '01.06', 'en' => '01.06'],
                'year' => '2024',
                'description' => [
                    'ua' => 'Старт роботи КЗ «Ветеранський простір» Хмельницької міської ради',
                    'en' => 'Start of operations of the Municipal Institution "Veteran Space" of the Khmelnytskyi City Council',
                ],
                'sort_order' => 8,
            ],
            [
                'date_display' => ['ua' => 'Сьогодення', 'en' => 'Present'],
                'year' => '2025',
                'description' => [
                    'ua' => 'Комунальний заклад «Ветеранський простір» Хмельницької міської ради є установою, утвореною для надання послуг військовим, ветеранам та членам їхніх сімей; членам сімей загиблих (зниклих безвісти), полеглих Захисників та Захисниць.',
                    'en' => 'Municipal Institution "Veteran Space" of Khmelnytskyi City Council is an establishment created to provide services to military personnel, veterans, and their family members; families of fallen (missing) Defenders.',
                ],
                'sort_order' => 9,
            ],
        ];

        foreach ($events as $event) {
            TimelineEvent::updateOrCreate(
                ['sort_order' => $event['sort_order']],
                array_merge($event, ['is_active' => true])
            );
        }
    }
}
