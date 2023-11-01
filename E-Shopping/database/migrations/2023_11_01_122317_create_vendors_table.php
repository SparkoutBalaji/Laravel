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
        Schema::create('vendors', function (Blueprint $table) { //name, email, password, shop_name, address, city, postal_code, profile_picture, is_verified, created_at, updated_at
            $table->uuid('id');
            $table->string('name');
            $table->unique('email');
            $table->string('password');
            $table->string('shop_name');
            $table->string('address');
            $table->string('city');
            $table->bigInteger('postal_code');
            $table->string('profile_picture',255);
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
