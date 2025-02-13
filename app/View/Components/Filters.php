<?php

namespace App\View\Components;

use App\Models\Product;
use App\Models\ProductVariant;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Filters extends Component
{
    public $products;
    public $colors;
    /**
     * Create a new component instance.
     */


    public function __construct(Product $product)
    {
        $this->products = $product::with('ProductVariant');
        $this->colors = ProductVariant::select('Color')->distinct()->get();
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filters');
    }
}
