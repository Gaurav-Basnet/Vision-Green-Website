<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('publication_sections', function (Blueprint $table) {
            $table->id();
            //title
            $table->string('t1')->nullable(); //home title

            $table->string('t2')->nullable();//publication intro
            $table->string('t3')->nullable();//publication intro 1
            $table->string('t4')->nullable();//publication intro 2
            $table->string('t5')->nullable();//publication intro 3

            $table->string('t6')->nullable();//policy brief title
            $table->string('t7')->nullable();//policy brief title 1
            $table->string('t8')->nullable();//policy brief title 2
            $table->string('t9')->nullable();//policy brief title 3

            $table->string('t10')->nullable();//CTA title

            $table->string('t11')->nullable();//extra

            //subtitle
            $table->string('st1')->nullable();// home subtitle

            $table->string('st2')->nullable();// publication intro subtitle
            $table->string('st3')->nullable();// publication intro subtitle 1
            $table->string('st4')->nullable();// publication intro subtitle 2
            $table->string('st5')->nullable();// publication intro subtitle 3

            $table->string('st6')->nullable();//policy brief subtitle
            $table->string('st7')->nullable();//policy brief 1
            $table->string('st8')->nullable();//policy brief 2
            $table->string('st9')->nullable();//policy brief 3

            $table->string('st10')->nullable();// cta subtitle

            $table->string('st11')->nullable(); //extra

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication_sections');
    }
};
