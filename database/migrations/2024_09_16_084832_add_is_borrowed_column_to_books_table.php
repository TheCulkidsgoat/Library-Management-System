<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Add the 'is_borrowed' column
            $table->boolean('is_borrowed')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Remove the 'is_borrowed' column if rolling back
            $table->dropColumn('is_borrowed');
        });
    }
};
