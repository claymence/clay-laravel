<div>
    <div>
        jwstapi.com API
    </div>

    <div>
        <button wire:click="fetchSuffixList">Fetch Suffix List</button>
        @if ($data2 && $data2->isNotEmpty())
            @if ($error)
                <div>Error: {{ $error }}</div>
            @else
                <ul>
                    @foreach ($data2 as $item2)
                        <li>
                            <h2>{{ $item2['mission'] }}</h2>
                            <p>{{ $item2['description'] }}</p>
                            <p>Suffix: {{ $item2['suffix'] }}</p>
                            <p>Instruments: {{ implode(', ', array_column($item2['instruments'], 'instrument')) }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>

    <div>
        <button wire:click="fetchThumbnails">Fetch Thumbnails</button>
        @if ($data && $data->isNotEmpty())
            @if ($error)
                <div>Error: {{ $error }}</div>
            @else
                <div class="thumbnails">
                    @foreach ($data as $item)
                        <img src="{{ $item['location'] }}" alt="Thumbnail" width="100" height="100">
                    @endforeach
                </div>
                {{-- Livewire Pagination Links --}}
                {{ $data->links() }}
            @endif
        @else
            <p>No data available.</p>
        @endif
    </div>
</div>
