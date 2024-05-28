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
        Schema::create('personal_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_record_id');
            $table->string('pInfo_fName')->nullable();
            $table->string('pInfo_lName')->nullable();
            $table->string('pInfo_email')->nullable();
            $table->string('pInfo_phoneNumber')->nullable();
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_info');
    }
};
