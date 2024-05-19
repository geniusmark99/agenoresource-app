<?php

namespace App\View\Components\Widgets;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;


class AssetWidget extends Component
{

    public $assets;
    /**
     * Create a new component instance.
     */
    public function __construct($assets)
    {
        $this->assets = $assets;
    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widgets.asset-widget');
    }
}
