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
        Schema::create('courses_models', function (Blueprint $table) {
            $table->id();
            $table->string('course_title');
            $table->longText('course_description');
            $table->string('course_instructor');
            $table->string('instructor_subject');
            $table->string('total_exams');
            $table->string('class');
            $table->integer('price');
            $table->string('currency',5);
            $table->binary('course_cover');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_models');
    }
};
