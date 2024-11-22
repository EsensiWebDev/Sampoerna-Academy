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
        // Schema::create('articles', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('slug', 255)->nullable(false)->unique();
        //     $table->string('title_indonesia', 255)->nullable(true);
        //     $table->string('title_english', 255)->nullable(true);
        //     $table->longText('content_indonesia')->nullable(true);
        //     $table->longText('content_english')->nullable(true);
        //     $table->string('thumbnail', 255)->nullable(false);
        //     $table->timestamps();
        // });

        Schema::create('articles', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->string('slug');
            $table->string('title_indonesia')->nullable();
            $table->string('title_english')->nullable();
            $table->longText('content_indonesia')->nullable();
            $table->longText('content_english')->nullable();
            $table->string('thumbnail', 2083)->nullable();
            $table->string('lang');
            $table->boolean('isPublished');
            $table->string('link')->unique(); // Cegah duplikasi berdasarkan link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
