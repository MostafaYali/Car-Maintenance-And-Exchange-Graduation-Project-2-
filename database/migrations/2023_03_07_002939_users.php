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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('logusername');
            $table->string('name');
            $table->string('logemail');
            $table->string('password');
            $table->integer('phone');
            $table->string('address');
            $table->string('UserType');
            $table->string('activity');
            $table->string('route')->nullable();
            $table->timestamps();
            $table->string('CarMan')->nullable();
            $table->string('CarModel')->nullable();
            $table->string('CardNumber')->nullable();
            $table->string('Ccv')->nullable();
            $table->string('ExpireDate')->nullable();
            $table->string('Balance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
