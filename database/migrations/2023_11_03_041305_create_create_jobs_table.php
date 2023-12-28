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
        Schema::create('create_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('jobTitle');
            $table->integer('vacancies');
            $table->integer('category_id');
            $table->string('companyName');
            $table->string('location');
            $table->string('status')->default('pending');
            $table->text('responsibilities');
            $table->text('requirements');
            $table->text('benefits');
            $table->string('workingDaysHours');
            $table->string('employmentStatus');
            $table->string('salaryRange');
            $table->date('deadline');
            $table->text('howToApply');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_jobs');
    }
};
