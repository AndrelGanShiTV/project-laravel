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
            @foreach ($sizes as $size)
            <a href="{{ route('shop', ['size' => $size->Size]) }}">
                <div class="shop-filters-size-item">{{ $size->Size }}</div>
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
            @for ($i = 0; $i < 400000; $i=$i+100000) <a
                href="{{ route('shop', ['min_price' => $i, 'max_price' => $i+100000]) }}">
                <li class="shop-filters-prices-item">{{'$'.str($i).' - '.'$'.str($i+100000)}}</li>
                </a>
                @endfor
        </ul>
    </section>
    <section class="shop-filters-brands">
        <h3 class="shop-filters-brands-title">Brands</h3>
        <ul class="shop-filters-brands-list">
            @foreach ($brands as $brand)
            <a href="{{ route('shop', ['brand' => $brand->Brand]) }}">
                <li class="shop-filters-brands-item">{{$brand->Brand}}</li>
            </a>
            @endforeach
        </ul>
    </section>
    <section class="shop-filters-collections">
        <h3 class="shop-filters-collections-title">Categories</h3>
        <ul class="shop-filters-collections-list">
            @foreach ($categories as $category)
            <a href="{{ route('shop', ['category' => $category->Category]) }}">
                <li class="shop-filters-collections-item">{{$category->Category}}</li>
            </a>
            @endforeach
        </ul>
    </section>
    {{-- <section class="shop-filters-tags">
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
    </section> --}}
</section>