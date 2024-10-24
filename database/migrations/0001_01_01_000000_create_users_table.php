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
            $table->string('uuid')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('status', ['active', 'blocked'])->default('blocked');
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_phone_number')->nullable();
            $table->string('email')->unique();
            $table->enum('account_user_type', ['individual', 'cooperate']);
            $table->enum('user_type', ['seller', 'buyer']);
            $table->integer('successful_sales')->default(0);
            $table->string('badge')->nullable();
            $table->string('phone_number')->unique();
            $table->string('profile_pics')->nullable();
            $table->string('govt_id')->nullable();
            $table->string('cac_document')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_state')->nullable();
            $table->string('location_details')->nullable();
            $table->text('business_description')->nullable();
            $table->boolean('is_active')->default(FALSE);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
