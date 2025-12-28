<?php

namespace Database\Seeders;

use App\Models\NewsArticle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsArticleSeeder extends Seeder
{
    public function run(): void
    {
        $longContent = '
            <p>Не відкладайте зміни на потім – дійте! Український ветеранський фонд Мінветеранів запустив 3 конкурсну програму на підтримку ветеранського бізнесу у 2023 році.</p>
            <p>Ветерани, ветеранки, члени сімей загиблих захисників і захисниць можуть отримати від 500 тисяч до 3 мільйонів гривень. Останній день приймання заявок – 13 липня 2023 року (до 23:59 за київським часом).</p>
            <p>Не відкладайте зміни на потім – дійте! Український ветеранський фонд Мінветеранів запустив 3 конкурсну програму на підтримку ветеранського бізнесу у 2023 році. Ветерани, ветеранки, члени сімей загиблих захисників і захисниць можуть отримати від 500 тисяч до 3 мільйонів гривень.</p>
            <p>Детальніше про умови конкурсу читайте на офіційному сайті фонду.</p>
        ';

        // 1. Full Package Article (Video + Gallery) - The specific requested sample
        NewsArticle::create([
            'title' => 'Підтримка ветеранського бізнесу та допомога в його розвиткові',
            'slug' => Str::slug('Підтримка ветеранського бізнесу та допомога в його розвиткові'),
            'summary' => 'Громадська організація «Ветеранс ХАБ ОДЕСА» створює умови для розвитку ветеранського бізнесу...',
            'content' => $longContent,
            'image_url' => 'images/backgrounds/news-3.jpg',
            'gallery_images' => ['images/backgrounds/news-1.jpg', 'images/backgrounds/news-2.jpg', 'images/backgrounds/news-3.jpg', 'images/team/team-1.jpg'],
            'video_url' => 'images/backgrounds/test-video.mp4',
            'author' => 'Наталія Кошай',
            'published_at' => now(),
        ]);

        // 2. Video Only Article
        NewsArticle::create([
            'title' => 'Відео-звіт про діяльність фонду за 2024 рік',
            'slug' => Str::slug('Відео-звіт про діяльність фонду за 2024 рік'),
            'summary' => 'Перегляньте наше підсумкове відео про досягнення та виклики минулого року. Ми пишаємося нашими захисниками.',
            'content' => '<p>Дивіться відео-звіт нижче.</p>' . $longContent,
            'image_url' => 'images/backgrounds/news-1.jpg',
            'gallery_images' => null,
            'video_url' => 'images/backgrounds/test-video.mp4',
            'author' => 'Медіа Відділ',
            'published_at' => now()->subDay(),
        ]);

        // 3. Gallery Only Article
        NewsArticle::create([
            'title' => 'Фоторепортаж з відкриття нового простору',
            'slug' => Str::slug('Фоторепортаж з відкриття нового простору'),
            'summary' => 'Вчора відбулося урочисте відкриття нашого нового ветеранського простору. Багато гостей та емоцій.',
            'content' => '<p>Перегляньте фотографії з події.</p>' . $longContent,
            'image_url' => 'images/backgrounds/news-2.jpg',
            'gallery_images' => ['images/team/team-1.jpg', 'images/team/team-2.png', 'images/team/team-3.jpg', 'images/backgrounds/news-1.jpg', 'images/backgrounds/news-2.jpg'],
            'video_url' => null,
            'author' => 'Ольга Фотограф',
            'published_at' => now()->subDays(2),
        ]);

        // 4. Fillers to reach 15 articles for pagination
        for ($i = 4; $i <= 15; $i++) {
            $hasVideo = $i % 3 === 0;
            $hasGallery = $i % 2 === 0;

            NewsArticle::create([
                'title' => "Новина №{$i}: Важливі події та оновлення",
                'slug' => Str::slug("Новина {$i} Важливі події та оновлення"),
                'summary' => 'Короткий опис новини, який має зацікавити читача перейти на сторінку та прочитати повний текст...',
                'content' => $longContent,
                'image_url' => $i % 2 === 0 ? 'images/backgrounds/news-bg-1.png' : 'images/backgrounds/news-bg-2.png',
                'gallery_images' => $hasGallery ? ['images/backgrounds/news-1.jpg', 'images/backgrounds/news-2.jpg'] : null,
                'video_url' => $hasVideo ? 'images/backgrounds/test-video.mp4' : null,
                'author' => 'Редакція',
                'published_at' => now()->subDays($i),
            ]);
        }
    }
}
