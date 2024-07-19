<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('text_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->string('title_2');
            $table->string('title_3');
            $table->string('title_4');
            $table->string('title_5');
            $table->string('title_6');
            $table->string('title_logo');
            $table->string('file_Document');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('text_profiles');
    }
};
