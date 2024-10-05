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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code');
            $table->string('name');
            $table->text('description');
            $table->text('faulty');
            $table->text('passcode');
            $table->text('phone');
            $table->string('belongings');
            $table->integer('prepaid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
