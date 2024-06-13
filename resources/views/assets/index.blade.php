
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Search Results</h1>
    
    <div class="mt-4">
        <h2 class="text-xl font-semibold">Filtered Assets</h2>
        <ul>
            @forelse($assets as $asset)
                <li class="mb-2 border-b border-gray-300 pb-2">
                    <h3 class="text-lg font-bold">{{ $asset->asset_name }}</h3>
                    <p>Type: {{ $asset->asset_type }}</p>
                    <p>Price: ${{ number_format($asset->price, 2) }}</p>
                    <p>Location: {{ $asset->asset_location_details ?? 'N/A' }}</p>
                    <!-- Add other asset details as needed -->
                </li>
            @empty
                <li>No assets available with the selected criteria.</li>
            @endforelse
        </ul>
    </div>
</div>
