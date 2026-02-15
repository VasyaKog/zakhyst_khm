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
        Schema::create('path_documents', function (Blueprint $table) {
            $table->id();
            $table->string('name');                    // Document name (translatable)
            $table->text('description')->nullable();   // Document description (translatable)
            $table->string('file_path');                // Uploaded file path
            $table->integer('sort_order')->default(0);  // Display order
            $table->boolean('is_active')->default(true); // To hide/show documents
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('path_documents');
    }
};
