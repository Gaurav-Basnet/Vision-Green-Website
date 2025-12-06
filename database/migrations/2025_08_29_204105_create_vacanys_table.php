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
        Schema::create('vacanys', function (Blueprint $table) {
               $table->id();
            $table->string('title'); // Job title
            $table->string('employment_type')->nullable(); // Full-time / Part-time
            $table->string('location')->nullable(); // e.g., Kathmandu
            $table->string('education')->nullable(); // e.g., Kathmandu
            $table->string('skills')->nullable(); // e.g., Kathmandu
            $table->string('category')->nullable(); // e.g., Management
            $table->string('experience')->nullable(); // e.g., 5+ yrs
            $table->longText('description')->nullable(); // Detailed Job Description
            $table->date('deadline')->nullable(); // Deadline

            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacanys');
    }
};
