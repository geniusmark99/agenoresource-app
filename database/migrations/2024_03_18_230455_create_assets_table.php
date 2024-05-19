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
            $table->string('uid')->unique(); //ok
            $table->string('project_id');
            $table->string('asset_name'); //ok
            $table->string('asset_type'); // sale, lease, partner, or equipment//ok
            $table->string('asset_location_details'); //ok
            $table->string('asset_information'); // greenfield or brownfield//ok
            $table->text('pictures')->nullable(); //ok
            $table->text('video')->nullable(); // restricted//ok
            $table->text('technical_report')->nullable(); // restricted//ok
            $table->double('price')->nullable(); // restricted /ok
            $table->string('coordinates')->nullable(); // restricted //ok
            $table->double('land_size')->nullable(); // in cadastre unit or kilometre (restricted) //ok
            $table->text('mineral_details')->nullable(); // quantity or quality of mineral (restricted) //ok
            $table->text('reserve_deposit')->nullable(); // if listing a mining asset (restricted) //ok
            $table->text('jorc_report')->nullable(); // if available (restricted)
            $table->string('opportunity_type')->nullable(); // JV or partnership, sale, lease //ok
            $table->text('geological_location')->nullable(); // restricted //ok
            $table->text('contact_information')->nullable(); // restricted
            $table->timestamp('date_added')->useCurrent();
            $table->date('duration_date')->nullable();
            $table->integer('times_viewed')->default(0);
            $table->boolean('paid'); // restricted
            $table->boolean('active')->default(false); // restricted
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
