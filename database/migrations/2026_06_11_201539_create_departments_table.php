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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();

            // --- Basic Information (اطلاعات پایه) ---
            $table->string('name'); // نام دپارتمان (Required)
            $table->string('code')->unique(); // کد دپارتمان (Required)

            $table->foreignId('faculty_id')->constrained('faculties')->cascadeOnDelete(); // دانشکده مربوطه (Required)

            $table->string('head_name'); // نام و تخلص رئیس (Required)
            $table->string('head_degree')->nullable(); // مدرک تحصیلی رئیس
            $table->string('head_specialization')->nullable(); // تخصص
            $table->string('head_phone')->nullable(); // شماره تماس رئیس
            $table->string('head_email')->nullable(); // ایمیل رئیس
            $table->string('start_year', 10)->nullable(); // سال شروع فعالیت 

            $table->string('location')->nullable(); // موقعیت / اتاق
            $table->string('phone')->nullable(); // شماره تماس دپارتمان
            $table->string('email')->nullable(); // ایمیل دپارتمان

            $table->text('description')->nullable(); // توضیحات دپارتمان (Max 500 chars)

            $table->boolean('status')->default(true); // وضعیت (Default: Active/فعال)
            $table->boolean('show_on_homepage')->default(false); // نمایش در صفحه اصلی (Default: false)

            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
