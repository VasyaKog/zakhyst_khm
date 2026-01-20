<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('hero_banners', function (Blueprint $table) {
            // Mobile version of banner (Ukrainian)
            $table->string('image_path_mobile')->nullable()->after('image_path');

            // English versions
            $table->string('image_path_en')->nullable()->after('image_path_mobile');
            $table->string('image_path_mobile_en')->nullable()->after('image_path_en');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hero_banners', function (Blueprint $table) {
            $table->dropColumn([
                'image_path_mobile',
                'image_path_en',
                'image_path_mobile_en',
            ]);
        });
    }
};
