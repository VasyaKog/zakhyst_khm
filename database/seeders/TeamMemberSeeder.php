<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Main Team Members (11)
        $mainTeam = [
            ['first_name' => 'Катерина', 'last_name' => 'Луцик', 'role' => 'Директор', 'photo' => 'team-1.jpg', 'sort_order' => 1],
            ['first_name' => 'Анастасія', 'last_name' => 'Ярова', 'role' => 'Заступник директора', 'photo' => 'team-2.jpg', 'sort_order' => 2],
            ['first_name' => 'Ольга', 'last_name' => 'Свіжа', 'role' => 'Адміністратор', 'photo' => 'team-3.jpg', 'sort_order' => 3],
            ['first_name' => 'Оксана', 'last_name' => 'Вітошинська', 'role' => 'Кейс-менеджерка', 'photo' => 'team-4.jpg', 'sort_order' => 4],
            ['first_name' => 'Діана', 'last_name' => 'Черняк', 'role' => 'Кейс-менеджерка', 'photo' => 'team-5.jpg', 'sort_order' => 5],
            ['first_name' => 'Володимир', 'last_name' => 'Захарчук', 'role' => 'Фахівець супроводу ветеранів війни та демобілізованих осіб', 'photo' => 'team-6.jpg', 'sort_order' => 6],
            ['first_name' => 'Марина', 'last_name' => 'Чорна', 'role' => 'Фахівчиня супроводу ветеранів війни та демобілізованих осіб', 'photo' => 'team-7.jpg', 'sort_order' => 7],
            ['first_name' => 'Дмитро', 'last_name' => 'Шуляк', 'role' => 'Фахівець супроводу ветеранів війни та демобілізованих осіб', 'photo' => 'team-8.jpg', 'sort_order' => 8],
            ['first_name' => 'Анатолій', 'last_name' => 'Яворський', 'role' => 'Завідуючий господарською діяльністю', 'photo' => 'team-9.jpg', 'sort_order' => 9],
            ['first_name' => 'Надія', 'last_name' => 'Захарчук', 'role' => 'Бухгалтерка', 'photo' => 'team-10.jpg', 'sort_order' => 10],
            ['first_name' => 'Вікторія', 'last_name' => 'Ковальова', 'role' => 'Діловод', 'photo' => 'team-11.jpg', 'sort_order' => 11],
        ];

        foreach ($mainTeam as $member) {
            TeamMember::create(array_merge($member, ['is_partner' => false]));
        }

        // Partner Team Members (13)
        $partnerTeam = [
            ['first_name' => 'Леся', 'last_name' => 'Стебло', 'role' => 'Психологиня, тренерка, експертка з ветеранських політик', 'photo' => 'partner-1.jpg', 'sort_order' => 1],
            ['first_name' => 'Людмила', 'last_name' => 'Бабенко', 'role' => 'Адміністраторка', 'photo' => 'partner-2.jpg', 'sort_order' => 2],
            ['first_name' => 'Наталія', 'last_name' => 'Кошай', 'role' => 'Медійниця, тренерка', 'photo' => 'partner-3.jpg', 'sort_order' => 3],
            ['first_name' => 'Марина', 'last_name' => 'Лукашук', 'role' => 'Психологиня', 'photo' => 'partner-4.jpg', 'sort_order' => 4],
            ['first_name' => 'Наталія', 'last_name' => 'Чорна', 'role' => 'Психологиня', 'photo' => 'partner-5.jpg', 'sort_order' => 5],
            ['first_name' => 'Майя', 'last_name' => 'Чернова', 'role' => 'Психологиня', 'photo' => 'partner-6.jpg', 'sort_order' => 6],
            ['first_name' => 'Інга', 'last_name' => 'Москалюк', 'role' => 'Дитяча психологиня', 'photo' => 'partner-7.jpg', 'sort_order' => 7],
            ['first_name' => 'Лілія', 'last_name' => 'Аршинова', 'role' => 'Арт-терапевтка', 'photo' => 'partner-8.jpg', 'sort_order' => 8],
            ['first_name' => 'Павло', 'last_name' => 'Слободянюк', 'role' => 'Юрист', 'photo' => 'partner-9.jpg', 'sort_order' => 9],
            ['first_name' => 'Наталія', 'last_name' => 'Дурдас', 'role' => 'Психологиня', 'photo' => 'partner-10.jpg', 'sort_order' => 10],
            ['first_name' => 'Вікторія', 'last_name' => 'Детцель', 'role' => 'Кінезіотерапевтка', 'photo' => 'partner-11.jpg', 'sort_order' => 11],
            ['first_name' => 'Олена', 'last_name' => 'Мельник', 'role' => 'Медична консультантка', 'photo' => 'partner-12.jpg', 'sort_order' => 12],
            ['first_name' => 'Юрій', 'last_name' => 'Горбатюк', 'role' => 'Медичний консультант', 'photo' => 'partner-13.jpg', 'sort_order' => 13],
        ];

        foreach ($partnerTeam as $member) {
            TeamMember::create(array_merge($member, ['is_partner' => true]));
        }
    }
}
