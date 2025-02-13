<a href="{{route('product', ['id' => $product->id])}}">
    <article class="product-card-shop">
        <img class="product-card-shop_image"
            src="https://trueshop.co/cdn/shop/files/Cupid-Oversized-T-Shirt---Soft-Pink-1_1800x1800.jpg?v=1724892650"
            alt="{{ $product->ProductName }}" />
        <h3 class="product-card-shop_title">{{ $product->ProductName }}</h3>
        <span class="product-card-shop_brand">{{ $product->Brand }}</span>
        <div class="product-card-shop_price">
            <span class="product-card-shop_discount-price">${{ Number::format($product->Price) }}</span>
            <span class="product-card-shop_original-price">${{ Number::format($product->Price) }}</span>
        </div>
        <div class="product-card-shop_colors">
            @foreach ($product->ProductVariant as $variant)
            <div class="product-card-shop_color"
                style='background-color: {{ str($variant->Color)}}; width: 20px; height: 20px; display: inline-block; border-radius: 100%; border: 1px solid #000;'>
            </div>
            @endforeach
        </div>
    </article>
</a>