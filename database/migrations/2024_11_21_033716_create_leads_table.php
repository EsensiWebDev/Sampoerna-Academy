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
        Schema::create('leads', function (Blueprint $table) {
            $table->id('leads_id');
            $table->string("parents_name");
            $table->string("kids_name");
            $table->bigInteger("phone_number");
            $table->string("email");
            $table->string("province");
            $table->string("prev_curriculum");
            $table->string("school_choice");
            $table->string("grade_interested");
            $table->string("timeframe_visit");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
