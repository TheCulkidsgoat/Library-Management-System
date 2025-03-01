<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('borrows', function (Blueprint $table) {
            $table->string('borrower_name');
            $table->string('borrower_mail');
            //$table->string('borrower_name')->default(''); // or some default value

        });
    }

    public function down(): void
    {
        Schema::table('borrows', function (Blueprint $table) {
            $table->dropColumn(['borrower_name', 'borrower_mail']);
        });
    }
};
