<?php

namespace Database\Seeders;

use App\Models\Task;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// TaskSeeder.php was autgenerated as all option was chosen while making a model. Just deleted as it's not needed.
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Task::factory(10)->create();
    }
}
