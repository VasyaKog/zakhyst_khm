<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Remove real_date from timeline_events
        Schema::table('timeline_events', function (Blueprint $table) {
            $table->dropColumn('real_date');
        });

        // Simplify hero_banners - remove complex fields, add coded_slide_id for the 3 coded slides
        Schema::table('hero_banners', function (Blueprint $table) {
            $table->dropColumn(['title', 'subtitle', 'button_text', 'button_url', 'template']);
            $table->string('link_url')->nullable()->after('image_path');
            $table->string('coded_slide_id')->nullable()->after('link_url'); // 'slide1', 'slide2', 'slide3' for coded slides
        });

        // Update existing banners - clear the table and add coded slide toggles
        DB::table('hero_banners')->truncate();

        // Insert toggle entries for the 3 coded slides
        DB::table('hero_banners')->insert([
            [
                'image_path' => '',
                'link_url' => null,
                'coded_slide_id' => 'slide1',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => '',
                'link_url' => null,
                'coded_slide_id' => 'slide2',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => '',
                'link_url' => null,
                'coded_slide_id' => 'slide3',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('timeline_events', function (Blueprint $table) {
            $table->date('real_date')->nullable()->after('date_display');
        });

        Schema::table('hero_banners', function (Blueprint $table) {
            $table->dropColumn(['link_url', 'coded_slide_id']);
            $table->string('title')->after('id');
            $table->text('subtitle')->nullable()->after('title');
            $table->string('button_text')->nullable()->after('image_path');
            $table->string('button_url')->nullable()->after('button_text');
            $table->string('template')->default('default')->after('button_url');
        });
    }
};
