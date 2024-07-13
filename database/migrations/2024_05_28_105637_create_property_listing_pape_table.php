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
        Schema::create('property_listing_pape', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_record_id');
            $table->string('purpose_purpose')->nullable();
            $table->string('pupose_home')->nullable();
            $table->string('purpose_plot')->nullable();
            $table->string('purpose_commercial')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_area')->nullable();
            $table->string('address_phase')->nullable();
            $table->string('address_sector')->nullable();
            $table->string('address_location')->nullable();
            $table->string('address_map_location')->nullable();
            $table->string('address_address')->nullable();
            $table->string('propertyDetail_plot_num')->nullable();
            $table->string('propertyDetail_area')->nullable();
            $table->string('propertyDetail_area_unit')->nullable();
            $table->string('propertyDetail_bedrooms')->nullable();
            $table->string('propertyDetail_bathrooms')->nullable();
            $table->string('extra_info_title')->nullable();
            $table->string('extra_info_postingas')->nullable();
            $table->string('extra_info_mobile')->nullable();
            $table->string('extra_info_landline')->nullable();
            $table->text('extra_info_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_listing_pape');
    }
};
