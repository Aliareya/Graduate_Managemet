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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();

            // اطلاعات پایه
            $table->string('name');
            $table->string('code')->unique();
            $table->year('established_year')->nullable();

            // لوگو
            $table->string('logo')->nullable();

            // اطلاعات رئیس دانشکده
            $table->string('head_name')->nullable();
            $table->string('head_phone')->nullable();
            $table->string('head_email')->nullable();

            // اطلاعات تماس دانشکده
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();

            // توضیحات
            $table->text('description')->nullable();

            // تنظیمات
            $table->boolean('show_on_homepage')->default(false);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
