<x-layouts.app>
    <x-slot:title>
        Home - SQ1 Store
    </x-slot:title>
    <main class="main">
        <section class="hot-sales-banner">
            <img class="hot-sales-banner_image" src="{{asset('images/hot-sales-banner.png')}}" alt="hot-model" />
            <div class="hot-sales-banner_info">
                <p class="hot-sales-banner_info_description">HOT DEALS THIS WEEK</p>
                <h2 class="hot-sales-banner_info_title">
                    SALE UP 50% <br />
                    MODERN FURNITURE
                </h2>
                <a href="{{route('shop', ['category'=>'discount deals'])}}" class="hot-sales-banner_btn"><button>View
                        More</button></a>
            </div>
        </section>
        <section class="brands">
            <img class="brand-image" src="{{asset('images/chanel-logo.svg')}}" alt="chanel logo" />
            <img class="brand-image" src="{{asset('images/louis-vuitton.svg')}}" alt="louis vuitton logo" />
            <img class="brand-image" src="{{asset('images/prada-logo.svg')}}" alt="prada logo" />
            <img class="brand-image" src="{{asset('images/calvin-klein.svg')}}" alt="calvin klein" />
            <img class="brand-image" src="{{asset('images/denim.svg')}}" alt="denim logo" />
        </section>
        <section class="new-arrivals">
            <div class="new-arrivals-top">
                <div class="new-arrivals-header">
                    <h2 class="title">New Arrivals</h2>
                    <p class="description">
                        Discover our exciting new arrivals, featuring the latest trends
                        and styles to refresh your wardrobe this season.
                    </p>
                </div>
                <nav class="new-arrivals-filters">
                    <button class="filter-btn" data-value="all">All</button>
                    <button class="filter-btn active" data-value="womens fashion">
                        Women's Fashion
                    </button>
                    <button class="filter-btn" data-value="mens fashion">
                        Men's Fashion
                    </button>
                    <button class="filter-btn" data-value="discount deals">
                        Discount Deals
                    </button>
                </nav>
                <div class="new-arrivals-filters-select">
                    <label for="new-arrivals-filter">Selecciona una catergoría</label>
                    <select id="new-arrivals-filter">
                        <option disabled>Selecciona una catergoría</option>
                        <option>All</option>
                        <option>Women's Fashion</option>
                        <option>Men's Fashion</option>
                        <option>Discount Deals</option>
                    </select>
                </div>
            </div>
            <div class="new-arrivals-bottom">
                <article class="product-card">
                    <img class="product-card_image"
                        src="https://trueshop.co/cdn/shop/files/Cupid-Oversized-T-Shirt---Soft-Pink-1_1800x1800.jpg?v=1724892650"
                        alt="Cupid Oversized T-Shirt - Rosewood" />
                    <h3 class="product-card_title">Chaqueta de lana</h3>
                    <span class="product-card_brand">Gucci</span>
                    <div class="product-card_price">
                        <span class="product-card_discount-price">$95.50</span>
                        <span class="product-card_original-price">$95.50</span>
                    </div>
                    <div class="product-card_colors">
                        <div class="product-color" style="background-color: red"></div>
                        <div class="product-color" style="background-color: blue"></div>
                        <div class="product-color" style="background-color: green"></div>
                        <div class="product-color" style="background-color: yellow"></div>
                    </div>
                    <button class="product-card_buy">Comprar</button>
                </article>
            </div>
            <a href="{{route('shop')}}" class="new-arrivals-bottom-btn"><button>View More</button></a>
            <button></button>
        </section>
        <section class="banner-season">
            <div class="overlay"></div>
            <div class="banner-season_info">
                <p class="banner-season_info_discount">Extra 30% Off Online</p>
                <h2 class="banner-season_info_title">Summer Season Sale</h2>
                <p class="banner-season_info_description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    vel dolor pellentesque, varius elit quis, malesuada quam.
                </p>
                <a href="{{route('shop', ['category'=>'discount deals'])}}" class="banner-season_btn"><button>Shop
                        Now</button></a>
            </div>
        </section>
        <section class="benefits">
            <article class="benefits-item">
                <img src="{{asset('images/highQuality.png')}}" alt="High Quality" class="benefits-icon" />
                <div class="benefits-info">
                    <h3 class="benefits-info-title">High Quality</h3>
                    <p class="benefits-info-description">Crafted from top materials</p>
                </div>
            </article>
            <article class="benefits-item">
                <img src="{{asset('images/warranyProtection.png')}}" alt="Warrany Protection" class="benefits-icon" />
                <div class="benefits-info">
                    <h3 class="benefits-info-title">Warrany Protection</h3>
                    <p class="benefits-info-description">Over 2 years</p>
                </div>
            </article>
            <article class="benefits-item">
                <img src="{{asset('images/freeShipping.png')}}" alt="Free Shipping" class="benefits-icon" />
                <div class="benefits-info">
                    <h3 class="benefits-info-title">Free Shipping</h3>
                    <p class="benefits-info-description">Order over 150$</p>
                </div>
            </article>
            <article class="benefits-item">
                <img src="{{asset('images/support.png')}}" alt="24/7 Support" class="benefits-icon" />
                <div class="benefits-info">
                    <h3 class="benefits-info-title">24/7 Support</h3>
                    <p class="benefits-info-description">Dedicated support</p>
                </div>
            </article>
        </section>
    </main>
</x-layouts.app>