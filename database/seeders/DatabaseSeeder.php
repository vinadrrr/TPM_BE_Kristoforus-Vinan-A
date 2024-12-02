<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pets;
use Database\Factories\PetsFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        Pets::factory(10)->create();
    }
}
