<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('ALTER TABLE offers ALTER COLUMN phone_countries TYPE TEXT');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE offers ALTER COLUMN phone_countries TYPE VARCHAR(120)');
    }
};
