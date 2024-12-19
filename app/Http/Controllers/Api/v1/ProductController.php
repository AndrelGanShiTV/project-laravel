<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * GET Method: Get all Products
     */
    public function index(Request $request)
    {
        $perPage = $request->query('per_page', 10);
        $products = Product::with('ProductVariant')->paginate($perPage);



        $products->transform(function ($product) {
            $product->OtherAttributes = json_decode($product->OtherAttributes, true);
            return $product;
        });

        return response()->json($products, 200);
    }
    /**
     * Get Method: Get a Product
     */
    public function show(int $id)
    {
        $product = Product::find($id);
        $product->OtherAttributes = json_decode($product->OtherAttributes, true);

        return response()->json($product, 200);
    }
    /**
     * POST Method: Create a Product
     */
    public function store(Request $request)
    {
        $request['OtherAttributes'] = json_encode($request->OtherAttributes);
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }
    /**
     * PUT Method: Update a Product
     */
    public function update(Request $request, int $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }
    /**
     * DELETE Method: Delete a Product
     */
    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->noContent();
    }

    public function search(Request $request)
    {
        $query = Product::with('ProductVariant');

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('min_price')) {
            $query->where('Price', '>=', $request->input('min_price'));
        }

        if ($request->has('max_price')) {
            $query->where('Price', '<=', $request->input('max_price'));
        }

        if ($request->has('attributes') && $request->has('value')) {
            $attributes = $request->input('attributes');
            $values = $request->input('value');

            $query->whereJsonContains('OtherAttributes->' . $attributes, $values);
        }

        if ($request->has('color')) {
            $color = $request->input('color');
            $query->whereHas('ProductVariant', function (Builder $q) use ($color) {
                $q->where('color', $color);
            });
        }

        $products = $query->paginate();

        return response()->json($products, 200);
    }
}
