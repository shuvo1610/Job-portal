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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('department');
            $table->string('designation');
            $table->string('startMonth');
            $table->string('startYear');
            $table->string('salary');
            $table->enum('currentlyWorking', ['yes', 'no']);
            $table->string('endMonth')->nullable();
            $table->string('endYear')->nullable();
            $table->text('jobResponsibilities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
