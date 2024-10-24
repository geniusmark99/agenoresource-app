<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //done
            $table->string('uid')->unique(); //done
            $table->string('project_id'); //done
            $table->integer('likes')->default(0); //done
            $table->integer('dislikes')->default(0); //done
            $table->string('asset_type'); //done
            $table->string('asset_type_value'); //done
            $table->string('asset_qty'); //done
            $table->string('slug')->unique(); //done
            $table->text('pictures')->nullable(); //done
            $table->string('asset_location_details');  //done
            $table->string('asset_information'); //done
            $table->string('price'); //done
            $table->double('land_size')->nullable(); //done
            $table->text('mineral_details'); //done
            $table->text('reserve_deposit')->nullable(); //done
            $table->enum('plan', ['bronze', 'silver', 'gold', 'diamond', 'platinum']); //done
            $table->integer('duration'); //done
            $table->text('jorc_report')->nullable(); //done
            $table->text('geological_location'); //done
            $table->text('contact_information'); //done
            $table->timestamp('date_added')->useCurrent(); //done
            $table->float('click_rate')->default(0);
            $table->boolean('active')->default(false);
            $table->integer('view_count')->default(0);
            $table->timestamp('date_activated')->nullable();
            $table->timestamp('date_deactivated')->nullable();
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
