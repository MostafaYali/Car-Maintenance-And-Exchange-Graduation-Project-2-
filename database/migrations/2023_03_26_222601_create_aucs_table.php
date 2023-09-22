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
        Schema::create('aucs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('auction_image');
            $table->string('manufacturer');
            $table->string('description');
            $table->string('model');
            $table->string('year');
            $table->timestamp('start_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->integer('price')->nullable();
            $table->integer('number_of_pids')->default(0);
            $table->integer('last_user_make_apid')->nullable();
            $table->string('ad_state')->default('notapproved');
            $table->timestamp('delet_at')->nullable();
            $table->integer('chat_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aucs');
    }
};
