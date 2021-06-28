<div>
    <select name="country" wire:model="selectedTeam" id="team">
        <option value="">Select a country</option>
        @foreach ($teams as $team)
            <option value="{{ $team->id }}">{{ $team->country_name }}</option>
        @endforeach
    </select>
    <ul>
        @foreach ($games as $game)
            <li>{{ $game->homeTeam->country_name }} vs {{ $game->awayTeam->country_name }}</li>
        @endforeach
    </ul>
</div>
