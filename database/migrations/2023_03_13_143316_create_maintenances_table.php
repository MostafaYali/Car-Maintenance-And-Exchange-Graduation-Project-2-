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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('brand_car');
            $table->string('model_car');
            $table->integer('km_from');
            $table->integer('km_to');
            $table->string('oil');
            $table->integer('oil_km');
            $table->string('battery');
            $table->string('battery_time');
            $table->string('tire');
            $table->string('tire_model');
            $table->string('asisstan');
            $table->string('belts');
            $table->integer('belts_km_from');
            $table->integer('belts_km_to');
            $table->integer('car_year');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
