<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->integer('starting_year');
            $table->integer('year_ends');
            $table->string('field');
            $table->string('company');
            $table->string('address');
            $table->string('description', 2000);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
