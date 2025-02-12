<div class="shop-products">
  @foreach ($products as $product)
  <article class="product-card-shop">
    <img class="product-card-shop_image"
      src="https://trueshop.co/cdn/shop/files/Cupid-Oversized-T-Shirt---Soft-Pink-1_1800x1800.jpg?v=1724892650"
      alt="{{ $product->ProductName }}" />
    <h3 class="product-card-shop_title">{{ $product->ProductName }}</h3>
    <span class="product-card-shop_brand">{{ $product->OtherAttributes }}</span>
    <div class="product-card-shop_price">
      <span class="product-card-shop_discount-price">{{$product->Price }}</span>
      <span class="product-card-shop_original-price">{{$product->Price}}</span>
    </div>
    <div class="product-card-shop_colors">
      @foreach ($product->ProductVariant as $color)
      <div class="product-card-shop_color bg-{{ $color }}-900"></div>
      @endforeach
    </div>
  </article>
  @endforeach
</div>