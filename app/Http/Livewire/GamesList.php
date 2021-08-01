<?php

namespace App\Http\Livewire;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class GamesList extends Component
{
    public $selectedTeam = null;

    public function render()
    {
        $games = Game::query()->with(['homeTeam', 'awayTeam.group'])
            ->whereHas('homeTeam', fn (Builder $query) => $this->selectedTeam ? $query->where('id', $this->selectedTeam) : true)
            ->orWhereHas('awayTeam', fn (Builder $query) => $this->selectedTeam ? $query->where('id', $this->selectedTeam) : true)
            ->get();

        $teams = Team::all(['id', 'country_name']);

        return view('livewire.games-list', ['games' => $games, 'teams' => $teams]);
    }
}
