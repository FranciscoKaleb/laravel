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
        Schema::create('user_info', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->default('first name');
            $table->string('last_name')->default('last name');
            $table->string('middle_name')->default('middle name');
            $table->date('birth_date')->nullable();
            $table->string('gender', 15)->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->string('language', 20)->default('English');
            $table->string('address_code', 255)->nullable();
            $table->string('country', 45)->default('Philippines');
            $table->string('address_string', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_info');
    }
};
