<?php

namespace Database\Seeders;

use App\Models\HeroBanner;
use Illuminate\Database\Seeder;

class HeroBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Creates entries for the 3 coded slides (can be toggled on/off in admin)
     */
    public function run(): void
    {
        $banners = [
            [
                'coded_slide_id' => 'slide1',
                'image_path' => '',
                'link_url' => null,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'coded_slide_id' => 'slide2',
                'image_path' => '',
                'link_url' => null,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'coded_slide_id' => 'slide3',
                'image_path' => '',
                'link_url' => null,
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        // Assuming 'coded_slide_id' is unique. If not, we might need to rely on existing updateOrCreate logic
        // But for upsert we need a unique index. 
        // If coded_slide_id is NOT unique in DB schema, upsert will fail unless we use ID.
        // Let's stick to updateOrCreate for this one if we aren't sure about the schema index, 
        // BUT strict idempotent behavior is safer.
        // I will assume coded_slide_id is intended to be unique, but checking recent changes:
        // Conversation 74bee... "Simplify Hero Banners".
        // Let's use updateOrCreate for this one to be safe as I haven't seen the migration for it.

        foreach ($banners as $banner) {
            HeroBanner::updateOrCreate(
                ['coded_slide_id' => $banner['coded_slide_id']],
                $banner
            );
        }
    }
}
