<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisation>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $organizations = [
            'Google', 'Microsoft', 'Apple', 'Amazon', 'Facebook',
            'Tesla', 'IBM', 'Intel', 'Oracle', 'Adobe',
            'Spotify', 'Netflix', 'Twitter', 'LinkedIn', 'Samsung'
        ];

        return [
            'name' => $this->faker->randomElement($organizations),
        ];
    }
}
