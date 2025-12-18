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
        Schema::create('news_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');                   // Headline
            $table->string('slug')->unique();          // URL slug
            $table->text('summary');                   // Short description for card
            $table->longText('content');               // Full HTML content
            $table->string('image_url')->nullable();   // Main cover image
            $table->json('gallery_images')->nullable(); // Array of additional images
            $table->string('author')->nullable();      // Author name
            $table->string('video_url')->nullable();   // YouTube/Video link
            $table->timestamp('published_at')->nullable(); // Publication date
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_articles');
    }
};
