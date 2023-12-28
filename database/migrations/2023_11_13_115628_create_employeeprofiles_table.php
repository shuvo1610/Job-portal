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
        Schema::create('employeeprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('website');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin')->nullable();
            $table->string('companySize');
            $table->string('tin')->nullable();
            $table->text('tradeLicense')->nullable();
            $table->text('address');
            $table->text('description');
            $table->string('contactFullName');
            $table->string('contactDesignation');
            $table->string('contactNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeeprofiles');
    }
};
