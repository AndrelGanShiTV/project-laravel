<x-layouts.app>
    <x-slot:title>
        Nombre del Producto - SQ1 Store
    </x-slot:title>
    <main class="product-main">
        <section class="product-presentation">
            <div class="product-thumbnails-images">
                <img src="./assets/images/product-1.png" alt="Product 1" class="product-thumbnail" />
                <img src="./assets/images/product-1.png" alt="Product 1" class="product-thumbnail" />
                <img src="./assets/images/product-1.png" alt="Product 1" class="product-thumbnail" />
                <img src="./assets/images/product-1.png" alt="Product 1" class="product-thumbnail" />
                <img src="./assets/images/product-1.png" alt="Product 1" class="product-thumbnail" />
                <img src="./assets/images/product-1.png" alt="Product 1" class="product-thumbnail" />
                <img src="./assets/images/product-1.png" alt="Product 1" class="product-thumbnail" />
            </div>
            <div class="product-main-image">
                <img src="./assets/images/product-1.png" alt="Product 1" class="product-image" />
            </div>
        </section>
        <section class="product-info">
            <p class="brand-name">{{$product->Brand}}</p>
            <div class="product-info-header">
                <h2 class="product-name">{{$product->ProductName}}</h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="header-star">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
            </div>

            <div class="product-info-qualification">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="stars">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="stars">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="stars">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="stars">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="stars" style="fill: none">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <p class="question">(3)</p>
            </div>

            <div class="producto-info-prices">
                <h3 class="current-price">${{Number::format($product->Price)}}</h3>
                <p class="original-price">${{Number::format($discountedPrice)}}</p>
                <div class="box-discount">
                    <p class="discount">SAVE {{$discountPercentage}}%</p>
                </div>
            </div>

            <div class="product-info-views">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="eye-icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" fill="currentColor"
                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <span class="info-views">24 people are viewing this right now</span>
            </div>

            <div class="product-info-alert">
                <p class="alert-info">Hurry up! Sale ends in:</p>
                <p class="alert-time">00 : 05 : 59 : 47</p>
            </div>

            <div class="product-info-stock">
                <p class="stock-info">Only <b>{{$stock}}</b> item(s) left in stock!</p>
                <div class="stock-bar">
                    <div class="stock-progress"></div>
                </div>
            </div>

            <div class="producto-info-size">
                <p class="size-label">Size: M</p>
                <div class="group-size">
                    <div class="size-option">M</div>
                    <div class="size-option">L</div>
                    <div class="size-option">XL</div>
                    <div class="size-option">XXL</div>
                </div>
            </div>

            <div class="product-info-color">
                <p class="color-label">Color: Blue</p>
                <div class="group-color">
                    <div class="color-option" style="background-color: #8db4d2"></div>
                    <div class="color-option" style="background-color: var(--color-black)"></div>
                    <div class="color-option" style="background-color: #ffd1dc"></div>
                </div>
            </div>

            <div class="product-info-buy">
                <p class="quantity-label">Quantity</p>
                <div class="quantity-control">
                    <div class="group-quantity">
                        <button class="quantity-btn">-</button>
                        <input type="text" value="1" class="quantity-input" />
                        <button class="quantity-btn">+</button>
                    </div>
                    <button class="add-to-cart-btn" id="cart-btn">Add to Cart</button>
                </div>
            </div>

            <nav class="product-info-links">
                <a href="#" class="nav-item">Compare</a>
                <a href="#" class="nav-item">Ask Question</a>
                <a href="#" class="nav-item">Share</a>
            </nav>

            <div class="product-info-delivery">
                <span class="delivery-icon"></span>
                <p>
                    Estimated Delivery:
                    <span class="delivery-value"> Jul 30 - Aug 03</span>
                </p>
            </div>
            <div class="product-info-shipping">
                <span class="shipping-icon"></span>
                <p>
                    Free Shipping & Returns:
                    <span class="shipping-value">On all orders over $75</span>
                </p>
            </div>

            <div class="product-info-payment_method">
                <div class="payment-method"></div>
                <div class="payment-method"></div>
                <div class="payment-method"></div>
                <div class="payment-method"></div>
                <div class="payment-method"></div>
                <div class="payment-method"></div>
                <div class="payment-method"></div>
            </div>

            <p class="secure-checkout">Guarantee safe & Secure Checkout</p>
        </section>

        <!--Drop-down Cart-->
        <section class="dropdown-cart" id="dropdown-cart">
            <button class="dropdown-cart_close-btn" id="close-cart-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <h2 class="dropdown-cart_title">Shopping Cart</h2>
            <p class="dropdown-cart_info">
                Buy <span class="dropdown-cart_amount">$122.35</span> More And Get
                <span class="dropdown-cart_free-shipping">Free Shipping</span>
            </p>
            <div class="dropdown-cart_product">
                <img src="./assets/images/product-1.png" alt="Product Image" class="dropdown-cart_product-image" />
                <div class="dropdown-cart_product-info">
                    <h3 class="dropdown-cart_product-name">Denim Jacket</h3>
                    <p class="dropdown-cart_product-color">Color: Red</p>
                    <p class="dropdown-cart_product-price">$14.80</p>
                    <div class="dropdown-cart_quantity-control">
                        <button class="dropdown-cart_quantity-btn">-</button>
                        <input type="text" value="1" class="dropdown-cart_quantity-input" />
                        <button class="dropdown-cart_quantity-btn">+</button>
                    </div>
                </div>
            </div>
            <hr />
            <div class="dropdown-cart_wrap-option">
                <input type="checkbox" class="dropdown-cart_wrap-checkbox" />
                <span class="custom-checkbox_box"></span>
                <label class="dropdown-cart_wrap-label">For <span>$10.00</span> please wrap the product</label>
            </div>
            <hr />
            <div class="dropdown-cart_subtotal">
                <p class="dropdown-cart_subtotal-label">Subtotal:</p>
                <span class="dropdown-cart_subtotal-amount">$100.00</span>
            </div>
            <button class="dropdown-cart_checkout-btn">Checkout</button>
            <a href="#" class="dropdown-cart_view-cart">View Cart</a>
        </section>
    </main>
</x-layouts.app>