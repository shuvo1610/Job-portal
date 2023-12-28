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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('contact');
            $table->string('image')->nullable();
            $table->text('objective');
            $table->text('experience');
            $table->text('qualification');
            $table->text('skill');
            $table->text('language');
            $table->text('references');
            $table->foreignId('user_id')->default(0)->constrained()->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
