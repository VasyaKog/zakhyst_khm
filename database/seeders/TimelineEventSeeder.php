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
                'date_display' => '01.07',
                'year' => '2019',
                'description' => 'Створення Інформаційно-консультативного центру для родин учасників АТО/ООС',
                'sort_order' => 1,
            ],
            [
                'date_display' => '24.02',
                'year' => '2022',
                'description' => 'Об\'єднання волонтерів під час початку повномасштабного вторгнення рф, створення волонтерського центру «Захист»',
                'sort_order' => 2,
            ],
            [
                'date_display' => '17.03',
                'year' => '2022',
                'description' => 'Реєстрація ГО «Захист - об\'єднання волонтерів»',
                'sort_order' => 3,
            ],
            [
                'date_display' => '24.06',
                'year' => '2022',
                'description' => 'І стратегічна сесія організації, розвиток ветеранських політик в громаді стає стратегічним напрямком.',
                'sort_order' => 4,
            ],
            [
                'date_display' => '01.07',
                'year' => '2022',
                'description' => 'Початок психо-соціальної підтримки військовослужбовців та їх родин',
                'sort_order' => 5,
            ],
            [
                'date_display' => '21.11',
                'year' => '2023',
                'description' => 'Відкриття ветеранського простору на базі ГО «Захист - об\'єднання волонтерів»',
                'sort_order' => 6,
            ],
            [
                'date_display' => '01.03',
                'year' => '2024',
                'description' => 'Рішення сесії Хмельницької міської ради про створення Ветеранського простору як комунального закладу',
                'sort_order' => 7,
            ],
            [
                'date_display' => '01.06',
                'year' => '2024',
                'description' => 'Старт роботи КЗ «Ветеранський простір» Хмельницької міської ради',
                'sort_order' => 8,
            ],
            [
                'date_display' => 'Сьогодення',
                'year' => '2025',
                'description' => 'Комунальний заклад «Ветеранський простір» Хмельницької міської ради є установою, утвореною для надання послуг військовим, ветеранам та членам їхніх сімей; членам сімей загиблих (зниклих безвісти), полеглих Захисників та Захисниць.',
                'sort_order' => 9,
            ],
        ];

        foreach ($events as $event) {
            TimelineEvent::create(array_merge($event, ['is_active' => true]));
        }
    }
}
