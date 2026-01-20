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
        Schema::table('news_articles', function (Blueprint $table) {
            // Position to show gallery (paragraph number, null = end of article)
            $table->integer('gallery_position')->nullable()->after('gallery_images');

            // Position to show inline float photo (paragraph number, null = don't show)
            $table->integer('inline_photo_position')->nullable()->after('gallery_position');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news_articles', function (Blueprint $table) {
            $table->dropColumn(['gallery_position', 'inline_photo_position']);
        });
    }
};
