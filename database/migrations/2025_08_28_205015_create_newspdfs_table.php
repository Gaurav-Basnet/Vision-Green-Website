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
        Schema::create('newspdfs', function (Blueprint $table) {
            $table->id();
            $table->string('title');        // PDF Title
            $table->string('subtitle')->nullable(); // Subtitle (optional)
            $table->string('image')->nullable();    // Image path
            $table->string('pdf')->nullable();      // PDF file path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newspdfs');
    }
};
