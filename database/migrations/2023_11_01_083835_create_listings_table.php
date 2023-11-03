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
        Schema::create('listings', function (Blueprint $table) {
            $table->id('pet_id');
            $table->string('pet_name');
            $table->string('pet_image')->nullable();
            $table->string('pet_type');
            $table->string('tags');
            $table->string('shelter_name');
            $table->string('pet_age');
            $table->string('pet_gender');
            $table->string('pet_status');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
