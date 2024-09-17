<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Borrower's user id
            $table->foreignId('book_id')->constrained()->onDelete('cascade'); // Book id
            $table->date('borrowed_at')->default(now()); // Borrowed date
            $table->date('due_date'); // Due date
            $table->date('returned_at')->nullable(); // Optional, only filled if book is returned
            $table->enum('status', ['borrowed', 'returned', 'overdue'])->default('borrowed');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
