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
        Schema::create('patient', function (Blueprint $table) {
            $table->id();
            $table->integer('created_by');
            $table->String('first_name');
            $table->String('last_name');
            $table->String('gender');
            $table->String('dob');
            $table->String('email');
            $table->integer('primary_phone_no1');
            $table->integer('secondary_phone_no');
            $table->String('address1');
            $table->String('address2');
            $table->String('city');
            $table->String('postcode');
            $table->String('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
