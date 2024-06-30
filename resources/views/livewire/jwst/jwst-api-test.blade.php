<div>
    <button wire:click="fetchData">Fetch Data</button>
    @if($error)
        <div>Error: {{ $error }}</div>
    @else
        <ul>
            @foreach($data as $item)
                <li>
                    <h2>{{ $item['mission'] }}</h2>
                    <p>{{ $item['description'] }}</p>
                    <p>Suffix: {{ $item['suffix'] }}</p>
                    <p>Instruments: {{ implode(', ', array_column($item['instruments'], 'instrument')) }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
