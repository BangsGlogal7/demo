<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Bangoura',
            'last_name' => 'Abdoulaye',
            'email'=> 'bangoura.abdoulaye@example.com',
        ]);

        $this->call(JobSeeder::class);
    }
}
