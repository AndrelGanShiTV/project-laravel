<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;
use Illuminate\Http\Request;

class Shop extends Component
{
    public $products;
    public $category;
    public Request $request;
    /** 
     * Create a new component instance.
     */


    public function __construct(Product $product)
    {
        $perPage = 10;
        $this->products = $product::with('ProductVariant')->paginate($perPage);
        // $this->category = $request->query('category', 'Best Selling'); // Default to 'Shop' if no category is provided
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('Shop', compact('request'));
    }
}
