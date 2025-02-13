<section class="shop-filters">
    <h2 class="shop-filters-title">Filters</h2>
    @if (request()->has('size') || request()->has('color') || request()->has('price') || request()->has('brand') ||
    request()->has('collection') || request()->has('tag'))
    <div class="clear-filters">
        <a href="{{ route('shop') }}"
            class="p-3 rounded text-primary transition-all hover:bg-red-600 hover:text-white ">Clear
            All
            Filters</a>
    </div>
    @endif
    <section class="shop-filters-size">
        <h3 class="shop-filters-size-title">Size</h3>
        <div class="shop-filters-size-list">
            @foreach (['S','M','L','XL'] as $item)
            <a href="{{ route('shop', ['size' => $item]) }}">
                <div class="shop-filters-size-item">{{ $item }}</div>
            </a>
            @endforeach
        </div>
    </section>
    <section class="shop-filters-colors">
        <h3 class="shop-filters-colors-title">Colors</h3>
        <div class="shop-filters-colors-list">
            @foreach ($colors as $color)
            <a href="{{ route('shop', ['color' => $color->Color]) }}">
                <div class="shop-filters-colors-item rounded-full border- hover:border-2 hover:border-black"
                    style="background-color: {{ str($color->Color) }};; width: 20px; height: 20px; ">
                </div>
            </a>
            @endforeach
        </div>
    </section>
    <section class="shop-filters-prices">
        <h3 class="shop-filters-prices-title">Prices</h3>
        <ul class="shop-filters-prices-list">
            <li class="shop-filters-prices-item">$0-$50</li>
            <li class="shop-filters-prices-item">$50-$100</li>
            <li class="shop-filters-prices-item">$100-$200</li>
            <li class="shop-filters-prices-item">$200-$400</li>
        </ul>
    </section>
    <section class="shop-filters-brands">
        <h3 class="shop-filters-brands-title">Brands</h3>
        <ul class="shop-filters-brands-list">
            <li class="shop-filters-brands-item">Minimog</li>
            <li class="shop-filters-brands-item">Retrolie</li>
            <li class="shop-filters-brands-item">Brook</li>
            <li class="shop-filters-brands-item">Learts</li>
            <li class="shop-filters-brands-item">Vagabond</li>
            <li class="shop-filters-brands-item">Abby</li>
        </ul>
    </section>
    <section class="shop-filters-collections">
        <h3 class="shop-filters-collections-title">Collections</h3>
        <ul class="shop-filters-collections-list">
            <li class="shop-filters-collections-item">All products</li>
            <li class="shop-filters-collections-item">Best sellers</li>
            <li class="shop-filters-collections-item">New arrivals</li>
            <li class="shop-filters-collections-item">Accesories</li>
        </ul>
    </section>
    <section class="shop-filters-tags">
        <h3 class="shop-filters-tags-title">Tags</h3>
        <ul class="shop-filters-tags-list">
            <li class="shop-filters-tags-item">Fashion</li>
            <li class="shop-filters-tags-item">Hats</li>
            <li class="shop-filters-tags-item">Sandal</li>
            <li class="shop-filters-tags-item">Belt</li>
            <li class="shop-filters-tags-item">Bags</li>
            <li class="shop-filters-tags-item">Snacker</li>
            <li class="shop-filters-tags-item">Denim</li>
            <li class="shop-filters-tags-item">Minimog</li>
            <li class="shop-filters-tags-item">Vagabond</li>
            <li class="shop-filters-tags-item">Sunglasses</li>
            <li class="shop-filters-tags-item">Beachwear</li>
        </ul>
    </section>
</section>