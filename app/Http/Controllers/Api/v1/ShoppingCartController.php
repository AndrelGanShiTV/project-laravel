<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $cart = Auth::user()->shoppingCart->load('cartItems.productVariant');
            return response()->json($cart, 200);
        } catch (\Exception $e) {
            Log::error('Error fetching cart: ' . $e->getMessage());
            return response()->json(['error' => 'Error fetching cart'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'variant_id' => 'required|exists:product_variants,id',
                'quantity' => 'required|integer|min:1',
            ]);

            $cart = Auth::user()->shoppingCart;
            $productVariant = ProductVariant::find($request->input('variant_id'));
            $product = Product::findOrFail($productVariant->product_id);

            $cartItem = $cart->cartItems()->create([
                'shopping_cart_id' => $cart->id,
                'product_variant_id' => $request->input('variant_id'),
                'Quantity' => $request->input('quantity'),
                'UnitPrice' => $product->Price,
            ]);

            return response()->json($cartItem, 201);
        } catch (\Exception $e) {
            Log::error('Error adding to cart: ' . $e->getMessage());
            return response()->json(['error' => 'Error adding to cart'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $cartItemId)
    {
        try {
            $request->validate([
                'Quantity' => 'required|integer|min:1',
            ]);

            $cartItem = CartItem::findOrFail($cartItemId);
            $cartItem->update([
                'Quantity' => $request->input('Quantity'),
            ]);

            return response()->json($cartItem, 200);
        } catch (\Exception $e) {
            Log::error('Error updating cart item: ' . $e->getMessage());
            return response()->json(['error' => 'Error updating cart item'], 500);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Cart item not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $cartItemId)
    {
        try {
            $cartItem = CartItem::findOrFail($cartItemId);
            $cartItem->delete();

            return response()->noContent();
        } catch (\Exception $e) {
            Log::error('Error removing cart item: ' . $e->getMessage());
            return response()->json(['error' => 'Error removing cart item'], 500);
        }
    }
}
