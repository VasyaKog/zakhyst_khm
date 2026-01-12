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
        // 1. News Articles
        Schema::table('news_articles', function (Blueprint $table) {
            // Postgres supports converting text/string to json directly with 'USING column::json'
            // But Laravel migration abstraction often needs DB::statement for type variations.
            // However, starting fresh or assuming data is simple string, we can try change()
            // But strict type conversion might fail if data isn't valid JSON (which it isn't yet).
            // A safer strategy for existing data is:
            // 1. Rename old column
            // 2. Create new JSON column
            // 3. Migrate data: {"ua": old_value}
            // 4. Drop old column

            // OR using DB::statement for Postgres cast:
            // DB::statement('ALTER TABLE news_articles ALTER COLUMN title TYPE json USING title::json'); 
            // ^ This fails if 'title' contains "My Title" (not valid JSON).
            // It needs: USING json_build_object('ua', title)
        });

        $this->convertColumnToJson('news_articles', 'title');
        $this->convertColumnToJson('news_articles', 'summary');
        $this->convertColumnToJson('news_articles', 'content');

        $this->convertColumnToJson('services', 'title');
        $this->convertColumnToJson('services', 'left_content');
        $this->convertColumnToJson('services', 'right_content');

        $this->convertColumnToJson('team_members', 'first_name');
        $this->convertColumnToJson('team_members', 'last_name');
        $this->convertColumnToJson('team_members', 'role');

        $this->convertColumnToJson('timeline_events', 'description');
        $this->convertColumnToJson('timeline_events', 'date_display');

        Schema::table('hero_banners', function (Blueprint $table) {
            // Link URL might be simple string or null.
            // Also adding new columns
            $table->json('title')->nullable();
            $table->json('text')->nullable();
        });

        // Convert link_url separately if needed, but it's often language-neutral. 
        // Plan said "link_url" translatable.
        $this->convertColumnToJson('hero_banners', 'link_url');
    }

    /**
     * Helper to safely convert string/text column to Translatable JSON
     */
    protected function convertColumnToJson(string $table, string $column): void
    {
        // 1. Rename column
        $tempColumn = $column . '_temp_old';
        Schema::table($table, function (Blueprint $table) use ($column, $tempColumn) {
            $table->renameColumn($column, $tempColumn);
        });

        // 2. Create new JSON column
        Schema::table($table, function (Blueprint $table) use ($column) {
            $table->json($column)->nullable(); // Make nullable temporarily to allow creation
        });

        // 3. Migrate Data: {"ua": "Old Value"}
        // Using raw SQL for efficiency
        \Illuminate\Support\Facades\DB::table($table)->orderBy('id')->chunk(100, function ($rows) use ($table, $column, $tempColumn) {
            foreach ($rows as $row) {
                $oldValue = $row->$tempColumn;
                if ($oldValue) {
                    $newValue = json_encode(['ua' => $oldValue], JSON_UNESCAPED_UNICODE);
                    \Illuminate\Support\Facades\DB::table($table)
                        ->where('id', $row->id)
                        ->update([$column => $newValue]);
                }
            }
        });

        // 4. Drop temp column
        Schema::table($table, function (Blueprint $table) use ($tempColumn) {
            $table->dropColumn($tempColumn);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverting JSON to Text is lossy (we lose EN), but okay for rollback.

        // News
        $this->convertJsonTcpString('news_articles', 'title');
        $this->convertJsonTcpString('news_articles', 'summary');
        $this->convertJsonTcpString('news_articles', 'content');

        // Services
        $this->convertJsonTcpString('services', 'title');
        $this->convertJsonTcpString('services', 'left_content');
        $this->convertJsonTcpString('services', 'right_content');

        // Team
        $this->convertJsonTcpString('team_members', 'first_name');
        $this->convertJsonTcpString('team_members', 'last_name');
        $this->convertJsonTcpString('team_members', 'role');

        // Timeline
        $this->convertJsonTcpString('timeline_events', 'description');
        $this->convertJsonTcpString('timeline_events', 'date_display');

        // Hero Banners
        Schema::table('hero_banners', function (Blueprint $table) {
            $table->dropColumn(['title', 'text']);
        });
        $this->convertJsonTcpString('hero_banners', 'link_url');
    }

    protected function convertJsonTcpString(string $table, string $column): void
    {
        $tempColumn = $column . '_json_temp';
        Schema::table($table, function (Blueprint $table) use ($column, $tempColumn) {
            $table->renameColumn($column, $tempColumn);
        });

        Schema::table($table, function (Blueprint $table) use ($column) {
            $table->text($column)->nullable();
        });

        \Illuminate\Support\Facades\DB::table($table)->orderBy('id')->chunk(100, function ($rows) use ($table, $column, $tempColumn) {
            foreach ($rows as $row) {
                $json = json_decode($row->$tempColumn, true);
                $val = $json['ua'] ?? ($json['en'] ?? null); // Fallback to UA then EN
                if ($val) {
                    \Illuminate\Support\Facades\DB::table($table)
                        ->where('id', $row->id)
                        ->update([$column => $val]);
                }
            }
        });

        Schema::table($table, function (Blueprint $table) use ($tempColumn) {
            $table->dropColumn($tempColumn);
        });
    }
};
