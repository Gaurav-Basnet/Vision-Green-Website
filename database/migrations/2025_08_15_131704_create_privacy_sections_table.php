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
        Schema::create('privacy_sections', function (Blueprint $table) {
            $table->id();
            $table->string('t1')->nullable; // main title

            $table->string('t2')->nullable; // Policy Overview  title
            $table->string('t3')->nullable; // Policy Overview  1
            $table->string('t4')->nullable; // Policy Overview 2
            $table->string('t5')->nullable; // Policy Overview  3

            $table->string('t6')->nullable; // main policy title 
            $table->string('t7')->nullable; // main ploicy title 1
            $table->string('t8')->nullable; // main policy title 2
            $table->string('t9')->nullable; // main policy title 3
            $table->string('t10')->nullable; // main title 4

            $table->string('t11')->nullable; // main environment title
            $table->string('t12')->nullable; // main title 1
            $table->string('t13')->nullable; // main title 2
            $table->string('t14')->nullable; // main title 3

            $table->string('t15')->nullable; // main donor title
            $table->string('t16')->nullable; // main title 1
            $table->string('t17')->nullable; // main title 2
            $table->string('t18')->nullable; // main title 3

            $table->string('t19')->nullable; // main code of conduct title
            $table->string('t20')->nullable; // main title 1
            $table->string('t21')->nullable; // main title 2
            $table->string('t22')->nullable; // main title 3
            
            $table->string('t23')->nullable; // main policy update  title
            $table->string('t24')->nullable; // main title
            $table->string('t25')->nullable; // main title
            $table->string('t26')->nullable; // main title

            //subtitle
            $table->string('st1')->nullable; // main subtitle

            $table->string('st2')->nullable; // Policy Overview  subtitle
            $table->string('st3')->nullable; // Policy Overview  1
            $table->string('st4')->nullable; // Policy Overview 2
            $table->string('st5')->nullable; // Policy Overview  3

            $table->string('st6')->nullable; // main policy title 
            $table->string('st7')->nullable; // main ploicy title 1
            $table->string('st8')->nullable; // main policy title 2
            $table->string('st9')->nullable; // main policy title 3
            $table->string('st10')->nullable; // main title 4
            $table->string('st11')->nullable;
            $table->string('st12')->nullable;


            $table->string('st13')->nullable; // main environment subtitle
            $table->string('st14')->nullable; // main title 1
            $table->string('st15')->nullable; // main title 2

            $table->string('st16')->nullable; // main donor subtitle
            $table->string('st17')->nullable; // main title 1
            $table->string('st18')->nullable; // main title 2
            $table->string('st19')->nullable; // main title 3
             $table->string('st20')->nullable; // main title 4


            $table->string('st21')->nullable; // main code of conduct subtitle
            $table->string('st22')->nullable; // main title 1
            $table->string('st23')->nullable; // main title 2
            $table->string('st24')->nullable; // main title 3
            
            $table->string('st25')->nullable; // main policy update  subtitle
            $table->string('st26')->nullable; // main title
            $table->string('st27')->nullable; // main title
            $table->string('st28')->nullable; // main title

            $table->string('st29')->nullable;//Cta

             $table->string('st30')->nullable;//extra

             $table->string('st31')->nullable;//extra
             $table->string('st33')->nullable;//extra
             $table->string('st34')->nullable;//extra
             $table->string('st35')->nullable;//extra
             $table->string('st36')->nullable;//extra
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            Schema::table('privacy_sections', function (Blueprint $table) {
        $table->dropColumn(['st30','st31','st32','st33','st34','st35']);
    });

    }
};
