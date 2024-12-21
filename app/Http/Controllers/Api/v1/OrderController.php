<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Gate;
use \Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Auth::user()->orders;
        return response()->json($orders, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $user = $request->user();

        // Obtener el carrito del usuario con sus ítems
        $shoppingCart = ShoppingCart::with('cartItems')
            ->where('user_id', $user->id)
            // ->where('status', 'active') // Solo procesar carritos activos
            ->first();

        if (!$shoppingCart || $shoppingCart->cartItems->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot create an order. The shopping cart is empty or not active.'
            ], 400);
        }

        DB::beginTransaction();

        try {
            // Calcular el total de la orden
            $totalAmount = $shoppingCart->cartItems->sum(function ($item) {
                return $item->UnitPrice * $item->Quantity;
            });

            // Crear la orden
            $order = Order::create([
                'user_id' => $user->id,
                'TotalAmount' => $totalAmount,
                'OrderStatus' => 'Pending',
                'PaymentMethod' => $request->input('PaymentMethod', 'Not Specified'),
                'ShippingAddress' => $request->input('ShippingAddress', 'Not Specified'),
            ]);

            // Crear los OrderItems
            foreach ($shoppingCart->cartItems as $cartItem) {
                // Verificar que haya suficiente stock
                // if ($cartItem->productVariant->stock_quantity < $cartItem->quantity) {
                //     throw new \Exception("Insufficient stock for product variant ID {$cartItem->product_variant_id}");
                // }

                // Registrar el OrderItem
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_variant_id' => $cartItem->product_variant_id,
                    'Quantity' => $cartItem->Quantity,
                    'UnitPrice' => $cartItem->UnitPrice,
                ]);

                // Reducir el stock del producto
                // $cartItem->productVariant->decrement('stock_quantity', $cartItem->quantity);
            }

            // Cambiar el estado del carrito a 'completed'
            $shoppingCart->update(['Status' => 'completed']);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Order created successfully.',
                'data' => $order->load('orderItems.productVariant.product')
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to create the order. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::with('orderItems')->find($id);

        if (! Gate::allows('user-view-order', $order)) {
            return response()->json(['message' => "Sorry, you don't have access to this resource"], 403);
        }
        return response()->json($order, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
