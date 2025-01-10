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
        Schema::table('leads', function (Blueprint $table) {
            // Add the comment column as a nullable longText type
            $table->longText('comment')->nullable()->after('timeframe_visit'); // Replace 'some_column' with the column after which you want to add the new column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            // Drop the comment column if it exists
            $table->dropColumn('comment');
        });
    }
};
