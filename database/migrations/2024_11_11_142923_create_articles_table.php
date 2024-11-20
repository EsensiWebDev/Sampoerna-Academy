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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            // $table->enum('article_for', [
            //     'LAVENUE',
            //     'BSD',
            //     'SENTUL',
            //     'SURABAYA',
            //     'MEDAN'
            // ])->default("LAVENUE");
            $table->string('slug', 255)->nullable(false)->unique();
            $table->string('title_indonesia', 255)->nullable(true);
            $table->string('title_english', 255)->nullable(true);
            $table->longText('content_indonesia')->nullable(true);
            $table->longText('content_english')->nullable(true);
            $table->boolean('isPublished');
            $table->string('thumbnail', 255)->nullable(false);
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
