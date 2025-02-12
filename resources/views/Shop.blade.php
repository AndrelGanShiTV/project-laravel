<x-layouts.app>
    <x-slot:title>
        Shop - SQ1 Store
    </x-slot:title>
    <main class="shop-main">
        <section class="shop-filters">
            <h2 class="shop-filters-title">Filters</h2>
            <section class="shop-filters-size">
                <h3 class="shop-filters-size-title">Size</h3>
                <div class="shop-filters-size-list">
                    @foreach (['S','M','L','XL'] as $item)
                    <div class="shop-filters-size-item">{{ $item }}</div>
                    @endforeach
                </div>
            </section>
            <section class="shop-filters-colors">
                <h3 class="shop-filters-colors-title">Colors</h3>
                <div class="shop-filters-colors-list">
                    <div class="shop-filters-colors-item" style="background-color: red"></div>
                    <div class="shop-filters-colors-item" style="background-color: blue"></div>
                    <div class="shop-filters-colors-item" style="background-color: green"></div>
                    <div class="shop-filters-colors-item" style="background-color: yellow"></div>
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
        <section class="shop-content">
            <div class="shop-content-header">
                <h2 class="shop-content-title">Best Selling</h2>
                <div class="shop-sort-buttons">
                    <button class="sort-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <button class="sort-button" style="transform: rotate(90deg)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                        </svg>
                    </button>

                    <button class="sort-button" style="transform: rotate(90deg)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <button class="sort-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </button>

                    <button class="sort-button" style="transform: rotate(90deg)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <x-product-card-shop />
            <nav class="shop-nav-icons">
                <a href="" class="shop-nav-item">1</a>
                <a href="" class="shop-nav-item">2</a>
                <a href="" class="shop-nav-item">3</a>
                <a href="" class="shop-nav-item">></a>
            </nav>
        </section>
    </main>
</x-layouts.app>