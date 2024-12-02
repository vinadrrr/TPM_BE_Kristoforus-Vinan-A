<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pets>
 */
class PetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            "PetsName" =>fake()->name(),
            "PetsAge" =>fake()->randomNumber(1),
            "PetsImage"=>fake()->imageURL(),
            "CategoryId"=>random_int(1, 5)
        ];
    }
}
