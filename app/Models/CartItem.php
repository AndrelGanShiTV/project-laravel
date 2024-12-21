<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    /** @use HasFactory<\Database\Factories\CartItemFactory> */
    use HasFactory;

    protected $fillable = [
        'shopping_cart_id',
        'product_variant_id',
        'Quantity',
        'UnitPrice',
    ];

    public function ShoppingCart()
    {
        return $this->belongsTo(ShoppingCart::class);
    }

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
