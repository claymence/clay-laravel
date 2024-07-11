<div>

    @if (!empty($data))
        <div class="thumbnails">
            @foreach ($data as $item)
                <img src="{{ $item['location'] }}" alt="Thumbnail" width="100" height="100">
            @endforeach
        </div>
        {{-- Livewire Pagination Links --}}
        {{ $data->links() }}
    @else
        <p>No data available.</p>
    @endif

</div>
