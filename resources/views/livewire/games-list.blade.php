<div>
    <select name="country" wire:model="selectedTeam" id="team">
        <option value="">Select a country</option>
        @foreach ($teams as $team)
            <option value="{{ $team->id }}">{{ $team->country_name }}</option>
        @endforeach
    </select>
    <table class="table-fixed w-full">
        <thead>
            <tr class="text-left">
                <th>Date</th>
                <th>Home</th>
                <th>Away</th>
                <th>Group</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($games as $game)
                <tr>
                    <td>{{ $game->played_at->format('d-m-Y') }}</td>
                    <td>{{ $game->homeTeam->country_name }}</td>
                    <td>{{ $game->awayTeam->country_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
