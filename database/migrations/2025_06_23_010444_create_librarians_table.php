<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('librarians', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 👈 Required!
            $table->string('email')->unique();
            $table->string('phone');
            $table->foreignId('library_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }



    public function down(): void
    {
        Schema::dropIfExists('librarians');
    }
};
