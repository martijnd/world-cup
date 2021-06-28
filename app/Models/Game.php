<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_team_id',
        'away_team_id',
        'home_goals',
        'away_goals',
        'played_at',
    ];

    protected $dates = ['played_at'];

    public function predictions()
    {
        return $this->hasMany(Prediction::class);
    }

    public function prediction()
    {
        return $this->hasMany(Prediction::class)->where('user_id', auth()->id());
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }
}
