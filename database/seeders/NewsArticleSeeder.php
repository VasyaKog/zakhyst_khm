<?php

namespace Database\Seeders;

use App\Models\NewsArticle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsArticleSeeder extends Seeder
{
    public function run(): void
    {
        $longContentUa = '
            <p>Не відкладайте зміни на потім – дійте! Український ветеранський фонд Мінветеранів запустив 3 конкурсну програму на підтримку ветеранського бізнесу у 2023 році.</p>
            <p>Ветерани, ветеранки, члени сімей загиблих захисників і захисниць можуть отримати від 500 тисяч до 3 мільйонів гривень. Останній день приймання заявок – 13 липня 2023 року (до 23:59 за київським часом).</p>
            <p>Не відкладайте зміни на потім – дійте! Український ветеранський фонд Мінветеранів запустив 3 конкурсну програму на підтримку ветеранського бізнесу у 2023 році. Ветерани, ветеранки, члени сімей загиблих захисників і захисниць можуть отримати від 500 тисяч до 3 мільйонів гривень.</p>
            <p>Детальніше про умови конкурсу читайте на офіційному сайті фонду.</p>
        ';
        $longContentEn = '
            <p>Do not postpone changes for later – act! The Ukrainian Veterans Foundation of the Ministry of Veterans Affairs has launched the 3rd competition program to support veteran business in 2023.</p>
            <p>Veterans, female veterans, family members of fallen defenders can receive from 500 thousand to 3 million hryvnias. The deadline for applications is July 13, 2023 (until 23:59 Kyiv time).</p>
            <p>Do not postpone changes for later – act! The Ukrainian Veterans Foundation of the Ministry of Veterans Affairs has launched the 3rd competition program to support veteran business in 2023. Veterans, female veterans, family members of fallen defenders can receive from 500 thousand to 3 million hryvnias.</p>
            <p>Read more about the competition conditions on the official website of the foundation.</p>
        ';

        $articles = [
            [
                'title' => [
                    'ua' => 'Підтримка ветеранського бізнесу та допомога в його розвиткові',
                    'en' => 'Support for veteran business and assistance in its development'
                ],
                'slug' => Str::slug('Підтримка ветеранського бізнесу та допомога в його розвиткові'),
                'summary' => [
                    'ua' => 'Громадська організація «Ветеранс ХАБ ОДЕСА» створює умови для розвитку ветеранського бізнесу...',
                    'en' => 'NGO "Veterans HUB ODESA" creates conditions for the development of veteran business...'
                ],
                'content' => [
                    'ua' => $longContentUa,
                    'en' => $longContentEn
                ],
                'image_url' => 'images/backgrounds/news-3.jpg',
                'gallery_images' => json_encode(['images/backgrounds/news-1.jpg', 'images/backgrounds/news-2.jpg', 'images/backgrounds/news-3.jpg', 'images/team/team-1.jpg']),
                'video_url' => 'images/backgrounds/test-video.mp4',
                'author' => 'Наталія Кошай',
                'published_at' => now(),
            ],
            [
                'title' => [
                    'ua' => 'Відео-звіт про діяльність фонду за 2024 рік',
                    'en' => 'Video report on the foundation\'s activities for 2024'
                ],
                'slug' => Str::slug('Відео-звіт про діяльність фонду за 2024 рік'),
                'summary' => [
                    'ua' => 'Перегляньте наше підсумкове відео про досягнення та виклики минулого року. Ми пишаємося нашими захисниками.',
                    'en' => 'Watch our summary video about the achievements and challenges of the past year. We are proud of our defenders.'
                ],
                'content' => [
                    'ua' => '<p>Дивіться відео-звіт нижче.</p>' . $longContentUa,
                    'en' => '<p>Watch the video report below.</p>' . $longContentEn
                ],
                'image_url' => 'images/backgrounds/news-1.jpg',
                'gallery_images' => null,
                'video_url' => 'images/backgrounds/test-video.mp4',
                'author' => 'Медіа Відділ',
                'published_at' => now()->subDay(),
            ],
            [
                'title' => [
                    'ua' => 'Фоторепортаж з відкриття нового простору',
                    'en' => 'Photo report from the opening of the new space'
                ],
                'slug' => Str::slug('Фоторепортаж з відкриття нового простору'),
                'summary' => [
                    'ua' => 'Вчора відбулося урочисте відкриття нашого нового ветеранського простору. Багато гостей та емоцій.',
                    'en' => 'Yesterday, the solemn opening of our new veteran space took place. Many guests and emotions.'
                ],
                'content' => [
                    'ua' => '<p>Перегляньте фотографії з події.</p>' . $longContentUa,
                    'en' => '<p>View photos from the event.</p>' . $longContentEn
                ],
                'image_url' => 'images/backgrounds/news-2.jpg',
                'gallery_images' => json_encode(['images/team/team-1.jpg', 'images/team/team-2.png', 'images/team/team-3.jpg', 'images/backgrounds/news-1.jpg', 'images/backgrounds/news-2.jpg']),
                'video_url' => null,
                'author' => 'Ольга Фотограф',
                'published_at' => now()->subDays(2),
            ],
        ];

        // Fillers
        for ($i = 4; $i <= 15; $i++) {
            $hasVideo = $i % 3 === 0;
            $hasGallery = $i % 2 === 0;
            $articles[] = [
                'title' => [
                    'ua' => "Новина №{$i}: Важливі події та оновлення",
                    'en' => "News #{$i}: Important events and updates"
                ],
                'slug' => Str::slug("Новина {$i} Важливі події та оновлення"),
                'summary' => [
                    'ua' => 'Короткий опис новини, який має зацікавити читача перейти на сторінку та прочитати повний текст...',
                    'en' => 'A short description of the news that should interest the reader to go to the page and read the full text...'
                ],
                'content' => [
                    'ua' => $longContentUa,
                    'en' => $longContentEn
                ],
                'image_url' => $i % 2 === 0 ? 'images/backgrounds/news-bg-1.png' : 'images/backgrounds/news-bg-2.png',
                'gallery_images' => $hasGallery ? json_encode(['images/backgrounds/news-1.jpg', 'images/backgrounds/news-2.jpg']) : null,
                'video_url' => $hasVideo ? 'images/backgrounds/test-video.mp4' : null,
                'author' => 'Редакція',
                'published_at' => now()->subDays($i),
            ];
        }

        foreach ($articles as $article) {
            NewsArticle::updateOrCreate(
                ['slug' => $article['slug']],
                $article
            );
        }
    }
}
