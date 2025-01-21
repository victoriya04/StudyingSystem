<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $subjects = [
            'Mathematics', 'Physics', 'Chemistry', 'Biology', 'History',
            'Geography', 'Literature', 'Computer Science', 'Art', 'Music',
            'Philosophy', 'Psychology', 'Sociology', 'Economics', 'Political Science'
        ];

        return [
            'name' => $this->faker->randomElement($subjects),
            'date' => $this->faker->date,
            'duration' => $this->faker->randomDigitNotNull,
            'teacher_id' => \App\Models\Teacher::factory(), // Create a teacher with each course
            'organization_id' => \App\Models\Organization::factory(), // Create an organization with each course
            'location_id' => \App\Models\Location::factory(), // Create a location with each course
        ];
    }
}
