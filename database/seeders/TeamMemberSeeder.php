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
        // Main Team Members (11)
        $mainTeam = [
            [
                'first_name' => ['ua' => 'Катерина', 'en' => 'Kateryna'],
                'last_name' => ['ua' => 'Луцик', 'en' => 'Lutsyk'],
                'role' => ['ua' => 'Директор', 'en' => 'Director'],
                'photo' => 'team-1.jpg',
                'sort_order' => 1
            ],
            [
                'first_name' => ['ua' => 'Анастасія', 'en' => 'Anastasiia'],
                'last_name' => ['ua' => 'Ярова', 'en' => 'Yarova'],
                'role' => ['ua' => 'Заступник директора', 'en' => 'Deputy Director'],
                'photo' => 'team-2.jpg',
                'sort_order' => 2
            ],
            [
                'first_name' => ['ua' => 'Ольга', 'en' => 'Olha'],
                'last_name' => ['ua' => 'Свіжа', 'en' => 'Svizha'],
                'role' => ['ua' => 'Адміністратор', 'en' => 'Administrator'],
                'photo' => 'team-3.jpg',
                'sort_order' => 3
            ],
            [
                'first_name' => ['ua' => 'Оксана', 'en' => 'Oksana'],
                'last_name' => ['ua' => 'Вітошинська', 'en' => 'Vitoshynska'],
                'role' => ['ua' => 'Кейс-менеджерка', 'en' => 'Case Manager'],
                'photo' => 'team-4.jpg',
                'sort_order' => 4
            ],
            [
                'first_name' => ['ua' => 'Діана', 'en' => 'Diana'],
                'last_name' => ['ua' => 'Черняк', 'en' => 'Cherniak'],
                'role' => ['ua' => 'Кейс-менеджерка', 'en' => 'Case Manager'],
                'photo' => 'team-5.jpg',
                'sort_order' => 5
            ],
            [
                'first_name' => ['ua' => 'Володимир', 'en' => 'Volodymyr'],
                'last_name' => ['ua' => 'Захарчук', 'en' => 'Zakharchuk'],
                'role' => [
                    'ua' => 'Фахівець супроводу ветеранів війни та демобілізованих осіб',
                    'en' => 'Specialist in support of war veterans and demobilized persons'
                ],
                'photo' => 'team-6.jpg',
                'sort_order' => 6
            ],
            [
                'first_name' => ['ua' => 'Марина', 'en' => 'Maryna'],
                'last_name' => ['ua' => 'Чорна', 'en' => 'Chorna'],
                'role' => [
                    'ua' => 'Фахівчиня супроводу ветеранів війни та демобілізованих осіб',
                    'en' => 'Specialist in support of war veterans and demobilized persons'
                ],
                'photo' => 'team-7.jpg',
                'sort_order' => 7
            ],
            [
                'first_name' => ['ua' => 'Дмитро', 'en' => 'Dmytro'],
                'last_name' => ['ua' => 'Шуляк', 'en' => 'Shuliak'],
                'role' => [
                    'ua' => 'Фахівець супроводу ветеранів війни та демобілізованих осіб',
                    'en' => 'Specialist in support of war veterans and demobilized persons'
                ],
                'photo' => 'team-8.jpg',
                'sort_order' => 8
            ],
            [
                'first_name' => ['ua' => 'Анатолій', 'en' => 'Anatolii'],
                'last_name' => ['ua' => 'Яворський', 'en' => 'Yavorskyi'],
                'role' => ['ua' => 'Завідуючий господарською діяльністю', 'en' => 'Head of Economic Activities'],
                'photo' => 'team-9.jpg',
                'sort_order' => 9
            ],
            [
                'first_name' => ['ua' => 'Надія', 'en' => 'Nadiia'],
                'last_name' => ['ua' => 'Захарчук', 'en' => 'Zakharchuk'],
                'role' => ['ua' => 'Бухгалтерка', 'en' => 'Accountant'],
                'photo' => 'team-10.jpg',
                'sort_order' => 10
            ],
            [
                'first_name' => ['ua' => 'Вікторія', 'en' => 'Viktoriia'],
                'last_name' => ['ua' => 'Ковальова', 'en' => 'Kovalova'],
                'role' => ['ua' => 'Діловод', 'en' => 'Clerk'],
                'photo' => 'team-11.jpg',
                'sort_order' => 11
            ],
        ];

        foreach ($mainTeam as $member) {
            $member['photo'] = 'images/team/' . $member['photo'];
            TeamMember::updateOrCreate(
                ['photo' => $member['photo']],
                array_merge($member, ['is_partner' => false])
            );
        }

        // Partner Team Members (13)
        $partnerTeam = [
            [
                'first_name' => ['ua' => 'Леся', 'en' => 'Lesia'],
                'last_name' => ['ua' => 'Стебло', 'en' => 'Steblo'],
                'role' => [
                    'ua' => 'Психологиня, тренерка, експертка з ветеранських політик',
                    'en' => 'Psychologist, trainer, expert on veteran policies'
                ],
                'photo' => 'partner-1.jpg',
                'sort_order' => 1
            ],
            [
                'first_name' => ['ua' => 'Людмила', 'en' => 'Liudmyla'],
                'last_name' => ['ua' => 'Бабенко', 'en' => 'Babenko'],
                'role' => ['ua' => 'Адміністраторка', 'en' => 'Administrator'],
                'photo' => 'partner-2.jpg',
                'sort_order' => 2
            ],
            [
                'first_name' => ['ua' => 'Наталія', 'en' => 'Nataliia'],
                'last_name' => ['ua' => 'Кошай', 'en' => 'Koshai'],
                'role' => ['ua' => 'Медійниця, тренерка', 'en' => 'Media Specialist, Trainer'],
                'photo' => 'partner-3.jpg',
                'sort_order' => 3
            ],
            [
                'first_name' => ['ua' => 'Марина', 'en' => 'Maryna'],
                'last_name' => ['ua' => 'Лукашук', 'en' => 'Lukashuk'],
                'role' => ['ua' => 'Психологиня', 'en' => 'Psychologist'],
                'photo' => 'partner-4.jpg',
                'sort_order' => 4
            ],
            [
                'first_name' => ['ua' => 'Наталія', 'en' => 'Nataliia'],
                'last_name' => ['ua' => 'Чорна', 'en' => 'Chorna'],
                'role' => ['ua' => 'Психологиня', 'en' => 'Psychologist'],
                'photo' => 'partner-5.jpg',
                'sort_order' => 5
            ],
            [
                'first_name' => ['ua' => 'Майя', 'en' => 'Maia'],
                'last_name' => ['ua' => 'Чернова', 'en' => 'Chernova'],
                'role' => ['ua' => 'Психологиня', 'en' => 'Psychologist'],
                'photo' => 'partner-6.jpg',
                'sort_order' => 6
            ],
            [
                'first_name' => ['ua' => 'Інга', 'en' => 'Inha'],
                'last_name' => ['ua' => 'Москалюк', 'en' => 'Moskaliuk'],
                'role' => ['ua' => 'Дитяча психологиня', 'en' => 'Child Psychologist'],
                'photo' => 'partner-7.jpg',
                'sort_order' => 7
            ],
            [
                'first_name' => ['ua' => 'Лілія', 'en' => 'Liliia'],
                'last_name' => ['ua' => 'Аршинова', 'en' => 'Arshynova'],
                'role' => ['ua' => 'Арт-терапевтка', 'en' => 'Art Therapist'],
                'photo' => 'partner-8.jpg',
                'sort_order' => 8
            ],
            [
                'first_name' => ['ua' => 'Павло', 'en' => 'Pavlo'],
                'last_name' => ['ua' => 'Слободянюк', 'en' => 'Slobodianiuk'],
                'role' => ['ua' => 'Юрист', 'en' => 'Lawyer'],
                'photo' => 'partner-9.jpg',
                'sort_order' => 9
            ],
            [
                'first_name' => ['ua' => 'Наталія', 'en' => 'Nataliia'],
                'last_name' => ['ua' => 'Дурдас', 'en' => 'Durdas'],
                'role' => ['ua' => 'Психологиня', 'en' => 'Psychologist'],
                'photo' => 'partner-10.jpg',
                'sort_order' => 10
            ],
            [
                'first_name' => ['ua' => 'Вікторія', 'en' => 'Viktoriia'],
                'last_name' => ['ua' => 'Детцель', 'en' => 'Dettsel'],
                'role' => ['ua' => 'Кінезіотерапевтка', 'en' => 'Kinesiotherapist'],
                'photo' => 'partner-11.jpg',
                'sort_order' => 11
            ],
            [
                'first_name' => ['ua' => 'Олена', 'en' => 'Olena'],
                'last_name' => ['ua' => 'Мельник', 'en' => 'Melnyk'],
                'role' => ['ua' => 'Медична консультантка', 'en' => 'Medical Consultant'],
                'photo' => 'partner-12.jpg',
                'sort_order' => 12
            ],
            [
                'first_name' => ['ua' => 'Юрій', 'en' => 'Yurii'],
                'last_name' => ['ua' => 'Горбатюк', 'en' => 'Horbatiuk'],
                'role' => ['ua' => 'Медичний консультант', 'en' => 'Medical Consultant'],
                'photo' => 'partner-13.jpg',
                'sort_order' => 13
            ],
        ];

        foreach ($partnerTeam as $member) {
            $member['photo'] = 'images/team/' . $member['photo'];
            TeamMember::updateOrCreate(
                ['photo' => $member['photo']],
                array_merge($member, ['is_partner' => true])
            );
        }
    }
}
