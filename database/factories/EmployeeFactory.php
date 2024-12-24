<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name'=>fake()->name(),
            'Email'=>fake()->safeEmail(),
            'Address'=>fake()->streetAddress(),
            'Department'=>fake()->word(),
            'Age'=>fake()->numberBetween(18,45),
            'City'=>fake()->city(),
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}
