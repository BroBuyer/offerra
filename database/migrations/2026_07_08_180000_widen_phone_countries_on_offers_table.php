<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * SQLite ignores column length and rejects ALTER COLUMN ... TYPE, so the
     * widening only has to happen on the PostgreSQL panel.
     */
    public function up(): void
    {
        if (DB::connection()->getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement('ALTER TABLE offers ALTER COLUMN phone_countries TYPE TEXT');
    }

    public function down(): void
    {
        if (DB::connection()->getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement('ALTER TABLE offers ALTER COLUMN phone_countries TYPE VARCHAR(120)');
    }
};
