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
            $table->enum('status', ['0', '1'])->default('0')->comment("0 inactive 1 active");
            $table->enum('hold', ['0', '1', '2'])->default(1)->comment("0 cancelled 1 completed 2 pending");
            $table->unsignedBigInteger('price')->nullable();
            $table->string('currency')->nullable();
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
