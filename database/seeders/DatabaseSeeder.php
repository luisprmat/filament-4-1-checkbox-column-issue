<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'is_active' => true,
            'is_admin' => true,
        ]);

        User::factory()->create([
            'name' => 'Test User 1',
            'email' => 'test1@example.com',
            'is_active' => false,
            'is_admin' => false,
        ]);

        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test1@example.com',
            'is_active' => true,
            'is_admin' => false,
        ]);
    }
}
