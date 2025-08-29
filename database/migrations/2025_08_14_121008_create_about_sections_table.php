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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            //title
            $table->string('t1')->nullable(); //home title

            $table->string('t2')->nullable(); //core value title 
            $table->string('t3')->nullable(); //core value mini title
            $table->string('t4')->nullable(); //core value mini title
            $table->string('t5')->nullable(); //core value mini title
            $table->string('t6')->nullable(); //core value mini title

            $table->string('t7')->nullable(); //our beginning title

            $table->string('t8')->nullable(); //our milestones title
            $table->string('t9')->nullable(); //our milestone date 1 title
            $table->string('t10')->nullable(); //our milestone date 2 title
            $table->string('t11')->nullable(); //our milestone date 3 title
            $table->string('t12')->nullable(); //our milestone date 4 title

            $table->string('t13')->nullable(); //creating Measurable change title
            $table->string('t14')->nullable(); //creating measurable 1 title
            $table->string('t15')->nullable(); //creating measurable 2 title
            $table->string('t16')->nullable(); //creating measurable 3 title
            $table->string('t17')->nullable(); //creating measurable 4 title

           $table->string('t18')->nullable(); //our patner title

           $table->string('t19')->nullable(); //join our movement title

          
           // subtitle 
            $table->string('st1')->nullable();// home subtitle

            $table->string('st2')->nullable();//core value subtitle
            $table->string('st3')->nullable();//core value subtitle 1
            $table->string('st4')->nullable();//core value subtitle 2
            $table->string('st5')->nullable();//core value subtitle 3
            $table->string('st6')->nullable();//core value subtitle 4

            $table->string('st7')->nullable();// our begineing

            $table->string('st8')->nullable();// milestione subtitle
            $table->string('st9')->nullable();// milestione date 1 subtitle
            $table->string('st10')->nullable();// milestione date 2
            $table->string('st11')->nullable();// milestione date 3
            $table->string('st12')->nullable();// milestione date 4

            $table->string('st13')->nullable(); //creating measurable 1 subtitle
            $table->string('st14')->nullable(); //creating measurable 2 subtitle
            $table->string('st15')->nullable(); //creating measurable 3 subtitle
            $table->string('st16')->nullable(); //creating measurable 4 subtitle

           $table->string('st17')->nullable(); //our patner subtitle
           $table->string('st18')->nullable(); //join our movement title


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
