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
        Schema::create('hom_sections', function (Blueprint $table) {
            $table->id();
            $table->string('t1')->nullable(); //home title 
            $table->string('st1')->nullable(); //home sub title
            $table->string('fst2')->nullable(); //mission subtitle
            $table->string('sst2')->nullable(); //vission subtitle
            $table->string('mst3')->nullable(); //main subtitle  focus area

            $table->string('icon1')->nullable();
            $table->string('icon2')->nullable();
            $table->string('icon3')->nullable();
            $table->string('icon4')->nullable();
            $table->string('icon5')->nullable();
            $table->string('icon6')->nullable();

            $table->string('t3')->nullable();
            $table->string('t4')->nullable();
            $table->string('t5')->nullable();
            $table->string('t6')->nullable();
            $table->string('t7')->nullable();
            $table->string('t8')->nullable();


            $table->string('st3')->nullable();
            $table->string('st4')->nullable();
            $table->string('st5')->nullable();
            $table->string('st6')->nullable();
            $table->string('st7')->nullable();
            $table->string('st8')->nullable();

            $table->string('t9')->nullable();//project
            $table->string('st10')->nullable();//projects

            $table->string('st9')->nullable();//Impact

            $table->string('t10')->nullable();
            $table->string('st11')->nullable();//joint movement

            $table->string('st12')->nullable();//volunteer
            $table->string('st13')->nullable();//donate
            $table->string('st14')->nullable();//advocate

            $table->string('t11')->nullable();
            $table->string('st15')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_settings');
    }
};
