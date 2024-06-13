<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Asset;

class AssetFilter extends Component
{

    public $minPrice;
    public $maxPrice;
    public $assetType;
    public $search;

    public function search()
    {
        $query = Asset::query();

        if ($this->minPrice) {
            $query->where('price', '>=', $this->minPrice);
        }

        if ($this->maxPrice) {
            $query->where('price', '<=', $this->maxPrice);
        }

        if ($this->assetType) {
            $query->where('asset_type', $this->assetType);
        }

        if ($this->search) {
            $query->where('asset_name', 'like', '%' . $this->search . '%');
        }

        $assets = $query->get();

        return view('livewire.asset-filter', compact('assets'));
    }

    public function render()
    {


        $assets = Asset::all();
        return view('livewire.asset-filter', compact('assets'));
    }
}
