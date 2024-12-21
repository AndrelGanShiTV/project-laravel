<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * GET Method: Get all Products
     */
    public function index(Request $request)
    {
        try {
            $perPage = $request->query('per_page', 10);
            $products = Product::with('ProductVariant')->paginate($perPage);

            if ($products->isEmpty()) {
                return response()->json(['message' => 'Products Not Found'], 404);
            }

            return response()->json($products, 200);
        } catch (\Throwable $tr) {

            Log::error('Error Getting Products: ' . $tr->getMessage(), [
                'stack' => $tr->getTraceAsString(),
            ]);

            return response()->json([
                'error' => 'Error Getting Products',
                'message' => $tr->getMessage()
            ], 500);
        }
    }
    /**
     * Get Method: Get a Product
     */
    public function show(int $id)
    {
        try {
            $product = Product::findOrFail($id);
            return response()->json($product, 200);
        } catch (ModelNotFoundException $e) {

            Log::error('Error Getting Product: ' . $e->getMessage(), [
                'product_id' => $id,
                'stack' => $e->getTraceAsString(),
            ]);

            return response()->json([
                'error' => 'Product Not Found',
                'message' => $e->getMessage()
            ], 404);
        }
    }
    /**
     * POST Method: Create a Product
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $productData = $request->only(['name', 'description', 'price', 'other_attributes']);
            $product = Product::create($productData);

            if ($request->has('variants')) {
                $variants = $request->input('variants');
                $product->ProductVariant()->createMany($variants);
                foreach ($variants as $variant) {
                    $variant['product_id'] = $product->id;
                    ProductVariant::create($variant);
                }
            }

            DB::commit();

            return response()->json($product->load('variants'), 201);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error Creating Product and Variants: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'input' => $request->all(),
            ]);

            return response()->json(['error' => 'Failed to Create Product'], 500);
        }
    }
    /**
     * PUT Method: Update a Product
     */
    public function update(Request $request, int $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->update($request->all());
            return response()->json($product, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Product Not Found',
                'message' => $e->getMessage()
            ], 404);
        } catch (\Throwable $tr) {
            return response()->json([
                'error' => 'Failed to Update Product',
                'message' => $tr->getMessage()
            ], 500);
        }
    }
    /**
     * DELETE Method: Delete a Product
     */
    public function destroy(int $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return response()->noContent();
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Product Not Found',
                'message' => $e->getMessage()
            ], 404);
        } catch (\Throwable $tr) {
            return response()->json([
                'error' => 'Failed to Delete Product',
                'message' => $tr->getMessage()
            ], 500);
        }
    }
    /**
     * GET Method: Search a Product
     */
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
