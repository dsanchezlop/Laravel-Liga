<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;


class TeamFactory extends Factory
{
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'coach' => $this->faker->name(),
            'category' => $this->faker->name(),
            'budget' => $this->faker->randomFloat(2, 20000, 200000)
        ];
    }
}
