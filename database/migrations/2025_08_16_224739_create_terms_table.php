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
        Schema::create('terms', function (Blueprint $table) {
            $table->id();

            // Headings (h1 to h10)
            $table->string('h1')->default('Dummy Heading 1');
            $table->string('h2')->default('Dummy Heading 2');
            $table->string('h3')->default('Dummy Heading 3');
            $table->string('h4')->default('Dummy Heading 4');
            $table->string('h5')->default('Dummy Heading 5');
            $table->string('h6')->default('Dummy Heading 6');
            $table->string('h7')->default('Dummy Heading 7');
            $table->string('h8')->default('Dummy Heading 8');
            $table->string('h9')->default('Dummy Heading 9');
            $table->string('h10')->default('Dummy Heading 10');

            // Subheadings (sh1 to sh30)
            for ($i = 1; $i <= 30; $i++) {
                $table->string("sh$i")->default("Dummy Subheading $i");
            }

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};
