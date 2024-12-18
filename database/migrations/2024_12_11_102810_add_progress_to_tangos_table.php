<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_book_progress', function (Blueprint $table) {
            $table->id();  // Primary key for this table

            // Foreign keys
            $table->unsignedBigInteger('tangos_id');
            $table->unsignedBigInteger('user_id');

            // Foreign key constraints
            $table->foreign('tangos_id')->references('id')->on('tangos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Additional fields
            $table->integer('progress')->default(0);
            $table->timestamps();  // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_book_progress', function (Blueprint $table) {
            $table->dropForeign(['tangos_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('user_book_progress');
    }
};
