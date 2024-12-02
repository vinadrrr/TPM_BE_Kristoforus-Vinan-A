<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'CategoryName' => 'Dog'
        ]);

        Category::create([
            'CategoryName' => 'Cat'
        ]);

        Category::create([
            'CategoryName' => 'Bird'
        ]);

        Category::create([
            'CategoryName' => 'Frog'
        ]);

        Category::create([
            'CategoryName' => 'Hamster'
        ]);
    }
}
