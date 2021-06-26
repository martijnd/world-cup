<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'home_team_id' => Team::all()->random(),
            'away_team_id' => Team::all()->random(),
            'home_goals' => rand(0, 4),
            'away_goals' => rand(0, 4),
            'played_at' => $this->faker->dateTimeBetween('21 november 2022', '2 december 2022'),
        ];
    }
}
