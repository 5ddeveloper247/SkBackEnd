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
        Schema::create('property_record_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_record_id');
            $table->string('image_uri'); // Changed the arrow function to a string method call
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_record_files'); // Added the dropIfExists method
    }
};
