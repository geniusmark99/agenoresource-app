<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container" x-data="searchComponent()">
        <h1 class="text-2xl font-bold mb-4">Assets List</h1>
        <form @submit.prevent="search">
            <div class="relative">
                <input type="text" class="form-input w-full rounded-md" placeholder="Search assets..." x-model="query" @input="filterAssets" @keydown.arrow-down.prevent="highlightNext" @keydown.arrow-up.prevent="highlightPrev" @keydown.enter.prevent="selectHighlighted">
                <div class="absolute w-full bg-white border rounded-md mt-1" x-show="filteredAssets.length > 0">
                    <ul>
                        <template x-for="(asset, index) in filteredAssets" :key="asset.id">
                            <li :class="{'bg-gray-200': index === highlightedIndex}" class="px-4 py-2 hover:bg-gray-200 cursor-pointer" @click="selectAsset(asset)" @mouseover="highlightIndex(index)">
                                <span x-text="asset.asset_name"></span> - <span x-text="asset.asset_type"></span>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </form>
        <ul class="mt-4">
            @foreach($assets as $asset)
                <li class="mb-2">
                    <a href="{{ route('assets.show', $asset->slug) }}" class="text-blue-500">{{ $asset->asset_name }}</a>
                    <p class="text-sm">Type: {{ $asset->asset_type }}</p>
                </li>
            @endforeach
        </ul>
    </div>
    
    <script>
        function searchComponent() {
            return {
                query: '',
                assets: @json($assets),
                filteredAssets: [],
                highlightedIndex: -1,
                filterAssets() {
                    if (this.query.length > 0) {
                        this.filteredAssets = this.assets.filter(asset => 
                            asset.asset_name.toLowerCase().includes(this.query.toLowerCase()) || 
                            asset.asset_type.toLowerCase().includes(this.query.toLowerCase())
                        );
                    } else {
                        this.filteredAssets = [];
                    }
                    this.highlightedIndex = -1;
                },
                highlightNext() {
                    if (this.highlightedIndex < this.filteredAssets.length - 1) {
                        this.highlightedIndex++;
                        this.query = this.filteredAssets[this.highlightedIndex].asset_name;
                    }
                },
                highlightPrev() {
                    if (this.highlightedIndex > 0) {
                        this.highlightedIndex--;
                        this.query = this.filteredAssets[this.highlightedIndex].asset_name;
                    }
                },
                highlightIndex(index) {
                    this.highlightedIndex = index;
                    this.query = this.filteredAssets[index].asset_name;
                },
                selectHighlighted() {
                    if (this.highlightedIndex >= 0 && this.highlightedIndex < this.filteredAssets.length) {
                        this.selectAsset(this.filteredAssets[this.highlightedIndex]);
                    }
                },
                selectAsset(asset) {
                    this.query = asset.asset_name;
                    this.filteredAssets = [];
                    window.location.href = `/assets/${asset.slug}`;
                },
                search() {
                    // Search functionality can be enhanced if needed
                }
            }
        }
    </script>
</body>
</html>