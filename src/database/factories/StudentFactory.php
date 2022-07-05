<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'lastName' => $this->faker->name(),
            'motherName' => $this->faker->name(),
            'fatherName' => $this->faker->name(),
            'age' => rand(17, 100),
            'telephone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'zip' => rand(1000, 10000),
            'image' => $this->faker->imageUrl(640,480),
            'class' => $this->faker->word(),
            'absent' => rand(1,100),
        ];
    }
}
