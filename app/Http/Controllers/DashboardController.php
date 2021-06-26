<?php

namespace App\Http\Controllers;

use App\Models\Prediction;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $teams = Team::with('group')->get();
        $predictions = Prediction::query()
            ->with(['game.homeTeam', 'game.awayTeam'])
            ->whereUserId(auth()->id())
            ->get();

        return inertia('Dashboard', [
            'teams' => $teams,
            'predictions' => $predictions
        ]);
    }
}
