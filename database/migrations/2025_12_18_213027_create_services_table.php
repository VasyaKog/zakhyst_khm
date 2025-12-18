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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('number', 10);           // Display number like "01", "02"
            $table->string('title');                 // Service title
            $table->text('left_content');            // HTML content for left column
            $table->text('right_content')->nullable(); // HTML content for right column (optional)
            $table->integer('sort_order')->default(0); // For ordering services
            $table->boolean('is_active')->default(true); // To hide/show services
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
