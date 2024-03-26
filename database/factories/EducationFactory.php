<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label' => $this->faker->name,
            'classes' => $this->faker->name,
            'price' => $this->faker->numberBetween(5000, 15000),
            'description_price' => $this->faker->numberBetween(16000, 50000),
        ];
    }
}
