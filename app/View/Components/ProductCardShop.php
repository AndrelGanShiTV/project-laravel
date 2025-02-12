<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;

class ProductCardShop extends Component
{
    public $products;
    /**
     * Create a new component instance.
     */


    public function __construct(Product $product)
    {
        $perPage = 10;
        $this->products = $product::with('ProductVariant')->paginate($perPage);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card-shop');
    }
}
