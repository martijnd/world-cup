<?php

namespace Database\Seeders;

use App\Models\Prediction;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(GroupSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(GameSeeder::class);

        User::factory()
            ->create([
                'name' => 'Martijn',
                'email' => 'martijn.dorsman@gmail.com',
                'password' => Hash::make('password')
            ]);

        // $this->call(PredictionSeeder::class);
    }
}
