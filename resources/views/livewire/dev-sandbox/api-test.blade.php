<div>
    <button wire:click="fetchPlayerData">Fetch top 10 leaderboards from lichess.org API</button>
    @foreach($playerData as $category => $players)
        @if(!empty($players))
        <article class="bg-white shadow-lg p-4 mb-4">
            <h2>{{ ucfirst($category) }}</h2>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Rating</th>
                        <th>Progress</th>
                        <th>Title</th>
                        <th>Online</th>
                        <th>History</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($players as $player)
                        <tr>
                            <td>{{ $player['username'] }}</td>
                            <td>{{ $player['perfs'][$category]['rating'] ?? 'N/A' }}</td>
                            <td>{{ $player['perfs'][$category]['progress'] ?? 'N/A' }}</td>
                            <td>{{ $player['title'] ?? '' }}</td>
                            <td>{{ $player['online'] ?? '' }}</td>
                            <td>button</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </article>
        @endif
    @endforeach
</div>
