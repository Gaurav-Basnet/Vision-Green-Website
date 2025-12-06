<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cdetails', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('email2')->nullable();
            $table->string('email3')->nullable();
            $table->string('email4')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('swc_number')->nullable();
            $table->string('reg_number')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cdetails');
    }
};
