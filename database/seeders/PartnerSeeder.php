<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            ['name' => 'Хмельницька міська рада', 'logo_path' => 'khm.png'],
            ['name' => 'Ветеранський Фонд', 'logo_path' => 'veterans-fond.png'],
            ['name' => 'Ветеранський Простір', 'logo_path' => 'veterans-space.png'],
            ['name' => 'IREX', 'logo_path' => 'irex.png'],
            ['name' => 'Укрнафта', 'logo_path' => 'ukrnafta.png'],
            ['name' => 'Український Ветеранський Фонд', 'logo_path' => 'uwf.png'],
            ['name' => 'ПУМБ', 'logo_path' => 'pumb.png'],
            ['name' => 'Відродження', 'logo_path' => 'vidro.png'],
            ['name' => 'Разом', 'logo_path' => 'razom.png'],
        ];

        foreach ($partners as $index => $partner) {
            Partner::create([
                'name' => $partner['name'],
                'logo_path' => 'images/logos/' . $partner['logo_path'],
                'sort_order' => $index,
                'is_active' => true,
            ]);
        }
    }
}
