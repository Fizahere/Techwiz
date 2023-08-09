<?php
include("./components/header.php");
?>


    <!-- Cart Sidebar Start -->
    <!-- Cart Offcanvas Start -->
    <div class="offcanvas offcanvas-end cart-offcanvas" id="cartSidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">My Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="remove">
                <i class="lastudioicon-e-remove"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <ul class="offcanvas-cart-list">
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="assets/images/products/product-02.png" width="70" height="84" alt="product" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Princess set</a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × $69.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="assets/images/products/product-04.png" width="70" height="84" alt="product" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Senecio stapeliiformis </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × $89.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="assets/images/products/product-05.png" width="70" height="84" alt="product" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Hoya burtoniae </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × $35.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
            </ul>
        </div>
        <div class="offcanvas-footer">
            <!-- Free Shipping Goal Start-->
            <div class="free-shipping-goal">
                <div class="free-shipping-goal__label text-center">
                    Buy $3.03 more to enjoy
                    <strong>FREE Shipping</strong>
                </div>
                <div class="free-shipping-goal__loading-bar">
                    <div class="load-percent" style="width: 98.49%"></div>
                </div>
            </div>
            <!-- Free Shipping Goal End-->

            <!-- Cart Meta Start-->
            <ul class="cart-meta">
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <path d="m9.5 2.5 3 3M1.5 10.5l3 3M11.5.5l3 3-10 10-4 1 1-4Z"></path>
                            </g>
                        </svg>
                        <span>Note</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.313" height="16" viewBox="0 0 15.313 16">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m.656 3.5 7 3 7-3M7.656 15.5v-9"></path>
                                <path d="m.656 12.5 7 3 7-3v-9l-7-3-7 3Z"></path>
                            </g>
                        </svg>
                        <span>Shipping</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <path d="M5.5 4.5h5M5.5 9.5h5M13.5 7.5a2 2 0 0 1 2-2v-4a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1V5a2 2 0 0 1 0 4v3.5a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-3a2 2 0 0 1-2-2Z"></path>
                            </g>
                        </svg>
                        <span>Coupon</span>
                    </a>
                </li>
            </ul>
            <!-- Cart Meta End-->

            <!-- Cart Totals Table Start-->
            <div class="cart-totals-table">
                <table class="table">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td>
                                <span>$195.97</span>
                            </td>
                        </tr>

                        <tr class="cart-shipping-totals">
                            <th>Shipping</th>
                            <td>
                                <ul class="shipping-methods">
                                    <li class="single-form">
                                        <input type="radio" name="shipping" id="flat-rate" />
                                        <label for="flat-rate" class="single-form__label radio-label">
                                            <span></span>
                                            Flat rate:
                                            <strong class="price">$20.00</strong>
                                        </label>
                                    </li>
                                    <li class="single-form">
                                        <input type="radio" name="shipping" id="local-pickup" />
                                        <label for="local-pickup" class="single-form__label radio-label">
                                            <span></span>
                                            Local pickup</label>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total">
                                <strong><span>$215.97</span></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Cart Totals Table End-->

            <!-- Cart Buttons End-->
            <div class="cart-buttons">
                <a href="#" class="cart-buttons__btn-1 btn">Checkout</a>
                <a href="#" class="cart-buttons__btn-2 btn">View Cart</a>
            </div>
            <!-- Cart Buttons End-->
        </div>
    </div>
    <!-- Cart Offcanvas End -->

    <!-- Cart Sidebar End -->

    <!-- Search Start -->
    <div class="search-modal modal fade" id="SearchModal">
        <!-- Search Close Start -->
        <button class="search-modal__close" data-bs-dismiss="modal" aria-label="remove">
            <i class="lastudioicon-e-remove"></i>
        </button>
        <!-- Search Close End  -->

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Search Form Start  -->
                <div class="search-modal__form">
                    <form action="#">
                        <input type="text" placeholder="Search product…" />
                        <button class="" aria-label="search">
                            <i class="lastudioicon-zoom-1"></i>
                        </button>
                    </form>
                </div>
                <!-- Search Form End  -->
            </div>
        </div>
    </div>

    <!-- Search End -->

    <!-- Offcanvas Menu Start -->
    <div class="offcanvas offcanvas-end offcanvas-sidebar" tabindex="-1" id="offcanvasSidebar">
        <button type="button" class="offcanvas-sidebar__close" data-bs-dismiss="offcanvas" aria-label="remove">
            <i class="lastudioicon-e-remove"></i>
        </button>
        <div class="offcanvas-body">
            <!-- Off Canvas Sidebar Menu Start -->
            <div class="offcanvas-sidebar__menu">
                <ul class="offcanvas-menu-list">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="blog.html">News & Events</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Menu End -->

            <!-- Off Canvas Sidebar Banner Start -->
            <div class="offcanvas-sidebar__banner" style="
                background-image: url(assets/images/shop-sidebar-banner.jpg);
            ">
                <h3 class="banner-title">NEW NOW</h3>
                <h4 class="banner-sub-title">WARM WOOL PREMIUM COAT</h4>
                <a href="#" class="banner-btn">Discover</a>
            </div>
            <!-- Off Canvas Sidebar Banner End -->

            <!-- Off Canvas Sidebar Info Start -->
            <div class="offcanvas-sidebar__info">
                <ul class="offcanvas-info-list">
                    <li><a href="tel:+61225315600">(+612) 2531 5600</a></li>
                    <li><a href="mailto:info@exmple.com">info@exmple.com</a></li>
                    <li>
                        <span>
                        PO Box 1622 Colins Street West Victoria 8077 Australia
                    </span>
                    </li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Info End -->

            <!-- Off Canvas Sidebar Social Start -->
            <div class="offcanvas-sidebar__social">
                <ul class="offcanvas-social">
                    <li>
                        <a href="#" aria-label="facebook">
                            <i class="lastudioicon-b-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="twitter">
                            <i class="lastudioicon-b-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="instagram">
                            <i class="lastudioicon-b-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Social End -->

            <!-- Off Canvas Sidebar Social End -->
            <div class="offcanvas-sidebar__copyright">
                <p>
                    &copy;
                    <span class="current-year">2023</span>
                    <span> Plantfy </span> Made with by
                    <a href="https://hasthemes.com/">HasThemes</a>
                </p>
            </div>
            <!-- Off Canvas Sidebar Social End -->
        </div>
    </div>

    <!-- Offcanvas Menu End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
        <!-- offcanvas-header Start -->
        <div class="offcanvas-header">
            <button type="button" class="mobile-menu__close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="lastudioicon-e-remove"></i>
            </button>
        </div>
        <!-- offcanvas-header End -->

        <!-- offcanvas-body Start -->
        <div class="offcanvas-body">
            <nav class="navbar-mobile-menu">
                <ul class="mobile-menu-items">
                    <li>
                        <a href="#">
                            Demos
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Plant 01</a></li>
                            <li><a href="index-2.html">Plant 02</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Pages
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="faqs.html">FAQ's</a></li>
                            <li><a href="term-of-use.html">term of use</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li>
                                <a href="login-register.html">Login & Register</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Shop
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <div class="mega-menu">
                            <div class="mega-menu-col">
                                <h5 class="mega-menu-title">Shop Layout</h5>
                                <ul class="">
                                    <li>
                                        <a href="shop-fullwidth.html">Shop Fullwidth</a>
                                    </li>
                                    <li>
                                        <a href="shop-sidebar.html">Shop Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop-masonry.html">Shop Masonry</a>
                                    </li>
                                    <li>
                                        <a href="shop-3-columns.html">Shop 03 Columns</a>
                                    </li>
                                    <li>
                                        <a href="shop-4-columns.html">Shop 04 Columns</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="">
                                    <li><a href="#">Featured Banner</a></li>
                                    <li class="mega-menu-title">Hover Style</li>
                                    <li><a href="#">Hover Style 01</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <h5 class="mega-menu-title">Shop Pages</h5>
                                <ul class="">
                                    <li>
                                        <a href="my-account.html">My Account</a>
                                    </li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li>
                                        <a href="order-tracking.html">Order Tracking</a>
                                    </li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li>
                                        <a href="empty-cart.html">Cart Empty</a>
                                    </li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="thank-you.html">Thank You</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <h5 class="mega-menu-title">Product Pages</h5>
                                <ul class="">
                                    <li>
                                        <a href="product-single.html">
                                            Product Simple
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product-single-variable.html">
                                            Product Variable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product-single-carousel.html">
                                            Product Carousel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product-single-affiliate.html">
                                            Product Affiliate
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product-single-countdown.html">
                                            Product CountDown
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            Collections
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <div class="mega-menu">
                            <div class="mega-menu__banner">
                                <a href="#">
                                    <div class="mega-menu__banner--image">
                                        <img src="assets/images/megamenu-fashion-01.jpg" alt="Fashion Banner" width="269" height="271" />
                                    </div>
                                    <div class="mega-menu__banner--caption">
                                        <h4 class="caption-title">New Arrival</h4>
                                        <p class="caption-desc">
                                            Non curabitur gravida
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="mega-menu__content">
                                <h4 class="mega-menu__content--title">
                                    Summer Collection 2023
                                </h4>
                                <div class="d-flex flex-wrap">
                                    <ul class="mega-menu__content--list">
                                        <li>
                                            <a href="#">Dresses and jumpsuits</a>
                                        </li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">T-shirts and tops</a></li>
                                        <li>
                                            <a href="#">Jackets and Suit Jackets</a>
                                        </li>
                                        <li>
                                            <a href="#">Cardigans and sweaters</a>
                                        </li>
                                        <li><a href="#">Sweatshirts</a></li>
                                        <li><a href="#">Coats</a></li>
                                    </ul>
                                    <ul class="mega-menu__content--list">
                                        <li><a href="#">Trousers</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Skirts</a></li>
                                        <li><a href="#">Shorts</a></li>
                                        <li>
                                            <a href="#">Bikinis and swimsuits</a>
                                        </li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li>
                                            <a href="#">Underwear and lingerie</a>
                                        </li>
                                        <li><a href="#">Pyjamas</a></li>
                                    </ul>
                                </div>
                                <div class="mt-auto">
                                    <ul class="mega-menu__info">
                                        <li><a href="#">info@exmple.com</a></li>
                                        <li><a href="#">(626)997-4298</a></li>
                                    </ul>
                                    <div class="mega-menu__social">
                                        <div class="mega-menu__social--lable">
                                            Connect with us
                                        </div>
                                        <ul class="mega-menu__social--social">
                                            <li>
                                                <a href="#" aria-label="facebook">
                                                    <i
                                                    class="lastudioicon-b-facebook"
                                                ></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="twitter">
                                                    <i
                                                    class="lastudioicon-b-twitter"
                                                ></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="instagram">
                                                    <i
                                                    class="lastudioicon-b-instagram"
                                                ></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="blog-right-sidebar.html">
                                    Blog Right Sidebar
                                </a>
                            </li>
                            <li>
                                <a href="blog-left-sidebar.html">
                                    Blog Left Sidebar
                                </a>
                            </li>
                            <li><a href="blog.html">Blog No Sidebar</a></li>
                            <li><a href="blog-single.html">Single Post</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- offcanvas-body end -->
    </div>

    <!-- Mobile Menu End -->

    <!-- Mobile Meta Start -->
    <div class="mobile-meta d-md-none">
        <ul class="mobile-meta-items">
            <li>
                <button data-bs-toggle="modal" data-bs-target="#SearchModal" aria-label="search">
                    <i class="lastudioicon-zoom-1"></i>
                </button>
            </li>
            <li>
                <a href="wishlist.html" aria-label="wishlist">
                    <i class="lastudioicon-heart-1"></i>
                    <span class="badge">03</span>
                </a>
            </li>
            <li>
                <a href="compare.html" aria-label="compare">
                    <i class="lastudioicon-ic_compare_arrows_24px"> </i>
                    <span class="badge">03</span>
                </a>
            </li>
            <li>
                <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-label="cart">
                    <i class="lastudioicon-shopping-cart-1"></i>
                    <span class="badge">03</span>
                </button>
            </li>
        </ul>
    </div>

    <!-- Mobile Meta End -->

    <main>
        <!-- Breadcrumbs Start -->
        <div class="single-breadcrumbs">
            <div class="container-fluid custom-container">
                <ul class="single-breadcrumbs-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Fashion </a></li>
                    <li><span>Product Countdown</span></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Product Single Start -->
        <div class="product-single-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Product Single Wrapper Start -->
                <div class="product-single-wrapper">
                    <div class="product-single-col-1">
                        <!-- Product Single image Start -->
                        <div class="product-single-image">
                            <div class="product-single-slide navigation-arrows-style-3">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="assets/images/products/product-single-01.png" width="694" height="728" />
                                        </div>
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="assets/images/products/product-single-02.png" width="694" height="728" />
                                        </div>
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="assets/images/products/product-single-03.png" width="694" height="728" />
                                        </div>
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="assets/images/products/product-single-04.png" width="694" height="728" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next">
                                        <i
                                                class="lastudioicon-arrow-right"
                                            ></i>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <i
                                                class="lastudioicon-arrow-left"
                                            ></i>
                                    </div>
                                    <div class="product-single-zoom">
                                        <div class="zoom">
                                            <a class="product-glightbox" href="assets/images/products/product-single-01.png"></a>
                                            <a class="product-glightbox" href="assets/images/products/product-single-02.png"></a>
                                            <a class="product-glightbox" href="assets/images/products/product-single-03.png"></a>
                                            <a class="product-glightbox" href="assets/images/products/product-single-04.png"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-single-thumb">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="product-single-thumb-item swiper-slide">
                                            <img src="assets/images/products/product-single-01.png" width="144" height="155" />
                                        </div>
                                        <div class="product-single-thumb-item swiper-slide">
                                            <img src="assets/images/products/product-single-02.png" width="144" height="155" />
                                        </div>
                                        <div class="product-single-thumb-item swiper-slide">
                                            <img src="assets/images/products/product-single-03.png" width="144" height="155" />
                                        </div>
                                        <div class="product-single-thumb-item swiper-slide">
                                            <img src="assets/images/products/product-single-04.png" width="144" height="155" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Single image End -->
                    </div>

                    <div class="product-single-col-2">
                        <!-- Product Single content Start -->
                        <div class="product-single-content">
                            <h2 class="product-single-content__title">
                                Product Countdown
                            </h2>
                            <div class="product-single-content__price-stock">
                                <div class="product-single-content__price">
                                    <ins>$36.99</ins>
                                    <del>$46.99</del>
                                </div>
                                <div class="product-single-content__stock">
                                    <span class="stock-icon">
                                            <i
                                                class="dlicon ui-1_check-circle-08"
                                            ></i>
                                        </span>
                                    <span class="stock-text">
                                            97 in stock
                                        </span>
                                </div>
                            </div>
                            <div class="product-single-content__short-description">
                                <p>
                                    Proin volutpat vitae libero at
                                    tincidunt. Maecenas sapien lectus,
                                    vehicula vel euismod sed, vulputate a
                                    lorem. Integer at tristique libero.
                                    Nullam porta eleifend metus a interdum.
                                </p>
                            </div>
                            <div class="product-single-content__countdown">
                                <h4 class="product-single-content__countdown--title">
                                    Offer end soon! Hurry up!
                                </h4>

                                <div class="product-single-countdown countdown" data-countdown="2023/11/20 23:59:59">
                                    <div class="product-single-countdown-item">
                                        <div class="product-single-countdown-item__value days">
                                            05
                                        </div>
                                        <div class="product-single-countdown-item__label">
                                            days
                                        </div>
                                    </div>
                                    <div class="product-single-countdown-item">
                                        <div class="product-single-countdown-item__value hours">
                                            06
                                        </div>
                                        <div class="product-single-countdown-item__label">
                                            hours
                                        </div>
                                    </div>
                                    <div class="product-single-countdown-item">
                                        <div class="product-single-countdown-item__value minutes">
                                            38
                                        </div>
                                        <div class="product-single-countdown-item__label">
                                            minutes
                                        </div>
                                    </div>
                                    <div class="product-single-countdown-item">
                                        <div class="product-single-countdown-item__value seconds">
                                            48
                                        </div>
                                        <div class="product-single-countdown-item__label">
                                            seconds
                                        </div>
                                    </div>
                                </div>

                                <div class="product-single-content__countdown--progress">
                                    <div class="product-progress">
                                        <div class="product-progress__bar" style="width: 70%"></div>
                                    </div>
                                </div>

                                <div class="product-single-content__countdown--stock">
                                    <span class="stock-text"
                                            >Sold items</span>
                                    <span class="stock-text"
                                            >70/97 Sold</span>
                                </div>
                            </div>
                            <div class="product-single-content__add-to-cart-wrapper">
                                <div class="product-single-content__quantity-add-to-cart">
                                    <div class="product-single-content__quantity product-quantity">
                                        <button type="button" class="decrease">
                                            <i
                                                    class="lastudioicon-i-delete-2"
                                                ></i>
                                        </button>
                                        <input class="quantity-input" type="text" value="1" />
                                        <button type="button" class="increase">
                                            <i
                                                    class="lastudioicon-i-add-2"
                                                ></i>
                                        </button>
                                    </div>
                                    <button class="product-single-content__add-to-cart btn">
                                        Add to cart
                                    </button>
                                </div>

                                <a href="#" class="product-add-compare">
                                    Add to Compare
                                </a>
                                <a href="#" class="product-add-wishlist">
                                    Add to Wishlist
                                </a>
                            </div>
                            <div class="product-single-content__meta">
                                <div class="product-single-content__meta--item">
                                    <div class="label">SKU:</div>
                                    <div class="content">REF. HT-5732</div>
                                </div>
                                <div class="product-single-content__meta--item">
                                    <div class="label">Categories:</div>
                                    <div class="content">
                                        <a href="#">Fashion</a>
                                        <a href="#">Women</a>
                                    </div>
                                </div>
                                <div class="product-single-content__meta--item">
                                    <div class="label">Tag:</div>
                                    <div class="content">
                                        <a href="#">Teen</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-single-content__social">
                                <div class="label">Share</div>
                                <ul class="socail-icon">
                                    <li>
                                        <a href="#" aria-label="facebook"><i
                                                    class="lastudioicon-b-facebook"
                                                ></i></a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="twitter"><i
                                                    class="lastudioicon-b-twitter"
                                                ></i></a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="linkedin"><i
                                                    class="lastudioicon-b-linkedin"
                                                ></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product Single content End -->
                    </div>
                </div>
                <!-- Product Single Wrapper End -->
            </div>
        </div>
        <!-- Product Single End -->

        <!-- Product Single Tabs Start -->
        <div class="product-single-tabs-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Product Single Tabs Start -->
                <div class="product-single-tabs">
                    <ul class="nav justify-content-center">
                        <li>
                            <button class="active" data-bs-toggle="pill" data-bs-target="#description" type="button">
                                Description
                            </button>
                        </li>
                        <li>
                            <button data-bs-toggle="pill" data-bs-target="#additionalInformation " type="button">
                                Additional information
                            </button>
                        </li>
                        <li>
                            <button data-bs-toggle="pill" data-bs-target="#reviews" type="button">
                                Reviews (03)
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-6">
                                    <!-- Product Single Tab Description Start -->
                                    <div class="product-single-tab-description">
                                        <!-- Product Single Tab Description Item Start -->
                                        <div class="product-single-tab-description-item">
                                            <h4 class="product-single-tab-description-item__title">
                                                + USEFUL INFORMATION
                                            </h4>
                                            <p>
                                                Cotton-blend fabric.
                                                Textured fabric. Long
                                                design. Evasé design. Wrap
                                                collar. Puffed short sleeve.
                                                Front slit. Knot detail. Bow
                                                closing on the back. Button
                                                fastening at back.
                                            </p>
                                        </div>
                                        <!-- Product Single Tab Description Item End -->

                                        <!-- Product Single Tab Description Item Start -->
                                        <div class="product-single-tab-description-item">
                                            <h4 class="product-single-tab-description-item__title">
                                                + MATERIAL AND WASHING
                                                INSTRUCTIONS
                                            </h4>
                                            <p>
                                                Composition: 70% viscose,30%
                                                cotton
                                            </p>
                                            <p>
                                                <img src="assets/images/content-single-product-image-2.png" alt="Product Icon" width="150" height="33" />
                                            </p>
                                        </div>
                                        <!-- Product Single Tab Description Item End -->
                                    </div>
                                    <!-- Product Single Tab Description End -->
                                </div>
                                <div class="col-lg-5">
                                    <!-- Product Single Tab Image Start -->
                                    <div class="product-single-tab-image">
                                        <h5 class="product-single-tab-image__title">
                                            Video review product
                                        </h5>
                                        <div class="product-single-tab-image__image">
                                            <a class="glightbox" href="https://www.youtube.com/watch?v=I2P22HzEVjs&amp;ab_channel=LAStudio"></a>
                                            <img src="assets/images/content-single-product-image-1.jpg" alt="product-image" width="320" height="218" />
                                        </div>
                                    </div>
                                    <!-- Product Single Tab Image End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="additionalInformation">
                            <!-- Product Single Table Start -->
                            <div class="product-single-table">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <tbody>
                                            <tr>
                                                <th>Color</th>
                                                <td>
                                                    <p>Blue, Green, Red</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Product Single Table End -->
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <!-- Product Single Review Start -->
                            <div class="product-single-review">
                                <!-- Product Comment Start -->
                                <div class="product-comment">
                                    <h3 class="comment-title">
                                        3 review for Product Simple
                                    </h3>

                                    <!-- Comment Items Start -->
                                    <ul class="comment-items">
                                        <!-- Comment Item Start -->
                                        <li class="comment-item">
                                            <div class="comment-item__author">
                                                <img src="assets/images/user/user-1.jpg" alt="Author" width="90" height="90" />
                                            </div>
                                            <div class="comment-item__content">
                                                <div class="comment-item__rating">
                                                    <span
                                                            class="star-rating"
                                                        >
                                                            <span
                                                                style="
                                                                    width: 80%;
                                                                "
                                                            ></span>
                                                    </span>
                                                </div>
                                                <p class="comment-item__description">
                                                    Fringed jacquard
                                                    cardigan
                                                </p>
                                                <p class="comment-item__meta">
                                                    <strong
                                                            >HasTheme</strong>
                                                    - June 3, 2024
                                                </p>
                                            </div>
                                        </li>
                                        <!-- Comment Item End -->

                                        <!-- Comment Item Start -->
                                        <li class="comment-item">
                                            <div class="comment-item__author">
                                                <img src="assets/images/user/user-2.jpg" alt="Author" width="90" height="90" />
                                            </div>
                                            <div class="comment-item__content">
                                                <div class="comment-item__rating">
                                                    <span
                                                            class="star-rating"
                                                        >
                                                            <span
                                                                style="
                                                                    width: 80%;
                                                                "
                                                            ></span>
                                                    </span>
                                                </div>
                                                <p class="comment-item__description">
                                                    Fringed jacquard
                                                    cardigan
                                                </p>
                                                <p class="comment-item__meta">
                                                    <strong
                                                            >HasTheme</strong>
                                                    - June 3, 2024
                                                </p>
                                            </div>
                                        </li>
                                        <!-- Comment Item End -->

                                        <!-- Comment Item Start -->
                                        <li class="comment-item">
                                            <div class="comment-item__author">
                                                <img src="assets/images/user/user-3.jpg" alt="Author" width="90" height="90" />
                                            </div>
                                            <div class="comment-item__content">
                                                <div class="comment-item__rating">
                                                    <span
                                                            class="star-rating"
                                                        >
                                                            <span
                                                                style="
                                                                    width: 80%;
                                                                "
                                                            ></span>
                                                    </span>
                                                </div>
                                                <p class="comment-item__description">
                                                    Fringed jacquard
                                                    cardigan
                                                </p>
                                                <p class="comment-item__meta">
                                                    <strong
                                                            >HasTheme</strong>
                                                    - June 3, 2024
                                                </p>
                                            </div>
                                        </li>
                                        <!-- Comment Item End -->
                                    </ul>
                                    <!-- Comment Items End -->
                                </div>
                                <!-- Product Comment End -->

                                <!-- Product Comment Form Start -->
                                <div class="product-comment-form">
                                    <h3 class="comment-title">
                                        Add a review
                                    </h3>

                                    <form action="#">
                                        <!-- Comment Form Start -->
                                        <div class="comment-form">
                                            <div class="comment-form__notes">
                                                Your email address will not
                                                be published.
                                            </div>
                                            <div class="comment-form__rating">
                                                <div class="label">
                                                    Your rating *
                                                </div>
                                                <span class="star-rating">
                                                        <span
                                                            style="width: 80%"
                                                        ></span>
                                                </span>
                                            </div>
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label">Your review *</label>
                                                <textarea class="single-form__input"></textarea>
                                            </div>
                                            <!-- Single Form Start -->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- Single Form Start -->
                                                    <div class="single-form">
                                                        <label class="single-form__label">Name *
                                                        </label>
                                                        <input type="text" class="single-form__input" />
                                                    </div>
                                                    <!-- Single Form Start -->
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Single Form Start -->
                                                    <div class="single-form">
                                                        <label class="single-form__label">Email *</label>
                                                        <input type="email" class="single-form__input" />
                                                    </div>
                                                    <!-- Single Form Start -->
                                                </div>
                                            </div>

                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input type="checkbox" name="save" id="save" />
                                                <label class="single-form__label checkbox-label" for="save">
                                                    <span></span>
                                                    Save my name, email, and
                                                    website in this browser
                                                    for the next time I
                                                    comment.
                                                </label>
                                            </div>
                                            <!-- Single Form Start -->

                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <button class="single-form__btn btn">
                                                    Submit
                                                </button>
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                        <!-- Comment Form End -->
                                    </form>
                                </div>
                                <!-- Product Comment Form End -->
                            </div>
                            <!-- Product Single Review End -->
                        </div>
                    </div>
                </div>
                <!-- Product Single Tabs End -->
            </div>
        </div>

        <!-- Related Product Start -->
        <div class="related-product-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Related Title Start -->
                <div class="related-title text-center">
                    <h2 class="related-title__title">Related Products</h2>
                </div>
                <!-- Related Title End -->

                <!-- Related Product Start -->
                <div class="related-product-active swiper-dot-style-1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge onsale">
                                            Sale
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-01.png" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="single-product__thumbnail--meta-2">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                            class="lastudioicon-shopping-cart-3"
                                        ></i></a>
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                            class="lastudioicon-ic_compare_arrows_24px"
                                        ></i></a>
                                            <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                <i
                                            class="lastudioicon-search-zoom-in"
                                        ></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="single-product__info text-center">
                                        <div class="single-product__info--tags">
                                            <a href="#">Plant</a>
                                        </div>
                                        <h3 class="single-product__info--title">
                                            <a href="product-single.html">
                                                Viksberg planter
                                            </a>
                                        </h3>
                                        <div class="single-product__info--price">
                                            <del>$39.99</del>
                                            <ins>$29.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single product End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge onsale">
                                            Sale
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-02.png" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="single-product__thumbnail--meta-2">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                            class="lastudioicon-shopping-cart-3"
                                        ></i></a>
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                            class="lastudioicon-ic_compare_arrows_24px"
                                        ></i></a>
                                            <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                <i
                                            class="lastudioicon-search-zoom-in"
                                        ></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="single-product__info text-center">
                                        <div class="single-product__info--tags">
                                            <a href="#">Plant</a>
                                        </div>
                                        <h3 class="single-product__info--title">
                                            <a href="product-single.html">
                                                Princess set
                                            </a>
                                        </h3>
                                        <div class="single-product__info--price">
                                            <ins>$39.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single product End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-03.png" alt="Product" />
                                                <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="single-product__thumbnail--meta-2">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                            class="lastudioicon-shopping-cart-3"
                                        ></i></a>
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                            class="lastudioicon-ic_compare_arrows_24px"
                                        ></i></a>
                                            <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                <i
                                            class="lastudioicon-search-zoom-in"
                                        ></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="single-product__info text-center">
                                        <div class="single-product__info--tags">
                                            <a href="#">Plant</a>
                                        </div>
                                        <h3 class="single-product__info--title">
                                            <a href="product-single.html">
                                                Senecio stapeliiformis
                                            </a>
                                        </h3>
                                        <div class="single-product__info--price">
                                            <ins>$49.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single product End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge onsale">
                                            Sale
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-04.png" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="single-product__thumbnail--meta-2">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                            class="lastudioicon-shopping-cart-3"
                                        ></i></a>
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                            class="lastudioicon-ic_compare_arrows_24px"
                                        ></i></a>
                                            <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                <i
                                            class="lastudioicon-search-zoom-in"
                                        ></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="single-product__info text-center">
                                        <div class="single-product__info--tags">
                                            <a href="#">Plant</a>
                                        </div>
                                        <h3 class="single-product__info--title">
                                            <a href="product-single.html">
                                                Outlet bundles
                                            </a>
                                        </h3>
                                        <div class="single-product__info--price">
                                            <del>$59.99</del>
                                            <ins>$39.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single product End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-05.png" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="single-product__thumbnail--meta-2">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                            class="lastudioicon-shopping-cart-3"
                                        ></i></a>
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                            class="lastudioicon-ic_compare_arrows_24px"
                                        ></i></a>
                                            <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                <i
                                            class="lastudioicon-search-zoom-in"
                                        ></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="single-product__info text-center">
                                        <div class="single-product__info--tags">
                                            <a href="#">Plant</a>
                                        </div>
                                        <h3 class="single-product__info--title">
                                            <a href="product-single.html">
                                                Hoya burtoniae
                                            </a>
                                        </h3>
                                        <div class="single-product__info--price">
                                            <ins>$29.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single product End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge onsale">
                                            Sale
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-06.png" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="single-product__thumbnail--meta-2">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                            class="lastudioicon-shopping-cart-3"
                                        ></i></a>
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                            class="lastudioicon-ic_compare_arrows_24px"
                                        ></i></a>
                                            <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                <i
                                            class="lastudioicon-search-zoom-in"
                                        ></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="single-product__info text-center">
                                        <div class="single-product__info--tags">
                                            <a href="#">Plant</a>
                                        </div>
                                        <h3 class="single-product__info--title">
                                            <a href="product-single.html">
                                                Parodia chrysacanthion
                                            </a>
                                        </h3>
                                        <div class="single-product__info--price">
                                            <ins>$46.99</ins>
                                            <ins>$36.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single product End -->
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Related Product End -->
            </div>
        </div>

        <!-- Related Product End -->

        <!-- Newsletter Start -->
        <!-- Newsletter Start -->
        <div class="newsletter-section">
            <div class="newsletter-left" style="background-image: url(assets/images/newsletter-bg-1.jpg)">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper text-center">
                    <h4 class="newsletter-wrapper__title">Follow us on</h4>
                    <p>
                        Proin volutpat vitae libero at tincidunt. Maecenas sapien
                        lectus, vehicula vel euismod sed, vulputate
                    </p>

                    <div class="newsletter-social">
                        <ul class="newsletter-social__list">
                            <li>
                                <a href="#" aria-label="facebook">
                                    <i class="lastudioicon-b-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="twitter">
                                    <i class="lastudioicon-b-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="instagram">
                                    <i class="lastudioicon-b-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="vimeo">
                                    <i class="lastudioicon-b-vimeo"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="envato">
                                    <i class="lastudioicon-envato"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Newsletter Wrapper End -->
            </div>
            <div class="newsletter-right" style="background-image: url(assets/images/newsletter-bg-2.jpg)">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper text-center">
                    <h4 class="newsletter-wrapper__title">10% off when you sign up</h4>
                    <p>
                        Proin volutpat vitae libero at tincidunt. Maecenas sapien
                        lectus, vehicula vel euismod sed, vulputate
                    </p>
                    <form action="#">
                        <div class="newsletter-form-style-1">
                            <input type="text" placeholder="Enter your email address..." />
                            <button>Subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Newsletter Wrapper End -->
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- Newsletter End -->
    </main>

   <?php
   include("./components/footer.php");
   ?>