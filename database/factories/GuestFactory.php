<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Guest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Guest::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'concert' => $this->faker->sentence(2),
            'date' => $this->faker->dateTimeBetween('today', '+30 days')->format('Y-m-d'),
            'image' => 'guests/' . $this->faker->image('public/storage/guests', 400, 300, null, false),
        ];
    }
}
