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
        Schema::create('graduates', function (Blueprint $table) {
            $table->id();

            // --- Personal Information ---
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birth_date')->nullable();

            // --- Contact Information ---
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();

            // --- Educational Information ---
            $table->string('student_id')->unique(); // Unique so no duplicate student IDs
            $table->foreignId('faculty_id')->constrained('faculties')->cascadeOnDelete();
            $table->foreignId('department_id')->nullable()->constrained('departments')->nullOnDelete();
            $table->string('entry_year')->nullable(); // Used string to support Persian/Arabic numerals if not converted
            $table->string('graduation_year');
            $table->enum('degree', ['bachelor', 'master', 'phd'])->nullable();

            // --- Employment Information ---
            $table->enum('is_employed', ['yes', 'no']);
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('work_location')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graduates');
    }
};
