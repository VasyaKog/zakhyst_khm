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
        // Coded Slide 1: Grid (Who We Are)
        HeroBanner::updateOrCreate(
            ['coded_slide_id' => 'slide1'],
            [
                'image_path' => '',
                'link_url' => null,
                'sort_order' => 1,
                'is_active' => true,
            ]
        );

        // Coded Slide 2: Business (Blue Shape)
        HeroBanner::updateOrCreate(
            ['coded_slide_id' => 'slide2'],
            [
                'image_path' => '',
                'link_url' => null,
                'sort_order' => 2,
                'is_active' => true,
            ]
        );

        // Coded Slide 3: Memorial
        HeroBanner::updateOrCreate(
            ['coded_slide_id' => 'slide3'],
            [
                'image_path' => '',
                'link_url' => null,
                'sort_order' => 3,
                'is_active' => true,
            ]
        );
    }
}
