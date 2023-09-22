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
        Schema::create('rent_ads', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('brand');
            $table->string('car_model');
            $table->string('body_type');
            $table->string('transmission_type');
            $table->string('year');
            $table->string('engine_capacity');
            $table->string('fuel_type');
            $table->string('location');
            $table->string('color');
            $table->string('images');
            $table->string('rental_option');
            $table->string('rental_period');
            $table->integer('price');
            $table->string('description');
            $table->timestamps();
            $table->SoftDeletes();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_ads');
    }
};
