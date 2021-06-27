<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Prediction;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $teams = Team::with('group')->get();

        $games = Game::query()
            ->with('predictions', function ($query) {
                $query->whereUserId(auth()->id());
            })
            ->with(['homeTeam', 'awayTeam'])->get();

        return inertia('Dashboard', [
            'teams' => $teams,
            'games' => $games
        ]);
    }
}
