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
        Schema::create('assets', function (Blueprint $table) {
            $table->id(); //ok
            $table->unsignedBigInteger('user_id');
            $table->string('uid')->unique();
            $table->string('project_id');
            $table->string('asset_name');
            $table->string('asset_type');
            $table->string('slug')->unique();
            $table->text('pictures')->nullable();
            $table->text('video')->nullable();
            $table->string('asset_location_details');
            $table->string('asset_information');
            $table->text('technical_report');
            $table->double('price');
            $table->string('coordinates');
            $table->double('land_size')->nullable();
            $table->text('mineral_details');
            $table->text('reserve_deposit')->nullable();
            $table->string('plan');
            $table->boolean('active')->default(false);
            $table->string('duration');
            $table->text('contact_information');
            $table->text('jorc_report')->nullable();
            $table->string('opportunity_type')->nullable();
            $table->text('geological_location');
            $table->timestamp('date_added')->useCurrent();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
