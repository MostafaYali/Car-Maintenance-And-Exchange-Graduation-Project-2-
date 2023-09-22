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
        Schema::create('tboa_ads', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('type');
            $table->string('brand');
            $table->string('model');
            $table->string('condition');
            $table->string('location');
            $table->string('images');
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
        Schema::dropIfExists('tboa_ads');
    }
};
