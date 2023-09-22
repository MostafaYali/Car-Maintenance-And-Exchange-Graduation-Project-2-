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
        Schema::create('oildatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('average_km_per_day');
            $table->string('km_for_oil');
            $table->string('date_oil_changed');
            $table->string('estimated_time_to_change');
            $table->string('km_that_oil_changed_at');
            $table->string('km_at_change');
            $table->timestamp('not_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oildatas');
    }
};
