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
        Schema::create('new_sections', function (Blueprint $table) {
            $table->id();
            //title
            $table->string('t1')->nullable(); //home title

            $table->string('t2')->nullable(); //new benifit
             $table->string('t3')->nullable(); //new benifit 1
              $table->string('t4')->nullable(); //new benifit 2
               $table->string('t5')->nullable(); //new benifit 3

               $table->string('t6')->nullable(); // extra
               $table->string('t7')->nullable(); //extra

               //subtitle
               $table->string('st1')->nullable(); //home subtitle

            $table->string('st2')->nullable(); //new benifit
             $table->string('st3')->nullable(); //new benifit 1
              $table->string('st4')->nullable(); //new benifit 2
               $table->string('st5')->nullable(); //new benifit 3

               $table->string('st6')->nullable(); // extra
               $table->string('st7')->nullable(); //extra

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_sections');
    }
};
