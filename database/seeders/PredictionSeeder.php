<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Prediction;
use App\Models\User;
use Illuminate\Database\Seeder;

class PredictionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        foreach(Game::all() as $game) {
            Prediction::factory()->create([
                'user_id' => $user,
                'game_id' => $game,
                'home_goals' => rand(0, 4),
                'away_goals' => rand(0, 4)
            ]);
        }
    }
}
