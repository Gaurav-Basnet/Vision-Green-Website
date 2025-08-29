<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');               // Project Name
            $table->text('description')->nullable(); // Project description
            $table->string('category');           // e.g. Reforestation, Education, Community
            $table->string('status');             // Ongoing, Completed, Upcoming
            $table->string('location')->nullable();
            $table->string('image')->nullable();  // Path for project image
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
