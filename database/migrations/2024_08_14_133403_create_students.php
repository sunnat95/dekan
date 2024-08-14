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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('patrynomic');
            $table->string('passport');
            $table->date('birth');
            $table->string('phone');
            $table->string('lang');
            $table->string('category_id');
            $table->string('typecourse_id');
            $table->longText('purporse');
            $table->string('qabul')->nullable();
            $table->string('perevod')->nullable();
            $table->string('kurs')->nullable();
            $table->string('tashqi_perevod')->nullable();
            $table->string('guruh_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
