<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Path to your SQL file
        $sqlFile = database_path('seeders/update_data.sql');

        // Check if the file exists
        if (File::exists($sqlFile)) {
            // Read the SQL file content
            $sql = File::get($sqlFile);

            // Execute the SQL query
            DB::unprepared($sql);

            $this->command->info('Database updated with SQL file.');
        } else {
            $this->command->error('SQL file not found.');
        }
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
