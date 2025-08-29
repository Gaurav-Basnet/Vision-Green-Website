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
        Schema::create('vacancy_sections', function (Blueprint $table) {
            $table->id();
            $table->string('t1')->nullable();//main title 

            $table->string('t2')->nullable();// why work sub  title 
            $table->string('t3')->nullable();// why work title 1
            $table->string('t4')->nullable();// why work title 2
            $table->string('t5')->nullable();// why work title 3

            $table->string('t6')->nullable();// hiring process  subtitle 

            $table->string('t7')->nullable();// hiring process 1
            $table->string('t8')->nullable();// hiring process 2
            $table->string('t9')->nullable();// hiring process 3

            $table->string('t10')->nullable();// cta section subtitle 

            $table->string('st1')->nullable();//main subtitle 

            $table->string('st2')->nullable();// why work subtitle 
            $table->string('st3')->nullable();// why work title 1
            $table->string('st4')->nullable();// why work title 2
            $table->string('st5')->nullable();// why work title 3

            $table->string('st6')->nullable();// hiring process subtitle 

            $table->string('st7')->nullable();// hiring process 1
            $table->string('st8')->nullable();// hiring process 2
            $table->string('st9')->nullable();// hiring process 3

            $table->string('st10')->nullable();// cta section subtitle 

            $table->string('st13')->nullable();//;ast paragraph
            $table->string('st14')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancy_sections');
    }
};
