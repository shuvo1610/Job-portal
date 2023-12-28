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
        Schema::create('eduinfos', function (Blueprint $table) {
            $table->id();
            $table->string('level_of_education');
            $table->string('degree');
            $table->string('start_month')->nullable();
            $table->string('start_year')->nullable();
            $table->string('result_system')->nullable();
            $table->string('result_achieved')->nullable();
            $table->string('school_college_university');
            $table->string('major_concentration')->nullable();
            $table->string('end_month')->nullable();
            $table->string('end_year')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('result_out_of')->nullable();
            $table->string('duration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eduinfos');
    }
};
