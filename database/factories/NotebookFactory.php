<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notebook>
 */
class NotebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'updated_at' => now(),
            'created_at' => now(),
            'company' => fake()->name(),
            'number' => fake()->phoneNumber(),
            'image' => fake()->imageUrl(),
            'date_of_birth' => fake()->date()
        ];
    }
}
