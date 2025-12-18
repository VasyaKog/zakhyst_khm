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
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');              // First name (Катерина)
            $table->string('last_name');               // Last name (Луцик)
            $table->string('role');                    // Position/role
            $table->string('photo')->nullable();       // Photo filename
            $table->boolean('is_partner')->default(false); // true = partner team, false = main team
            $table->integer('sort_order')->default(0); // For ordering
            $table->boolean('is_active')->default(true); // To hide/show
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
