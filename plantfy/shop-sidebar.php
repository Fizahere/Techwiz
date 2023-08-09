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
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">Shop Sidebar</h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Shop</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Shop Start -->
        <div class="shop-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Shop Wrapper Start -->
                <div class="shop-wrapper">
                    <div class="row gy-5">
                        <div class="col-lg-9">
                            <!-- Shop Filter Start -->
                            <div class="shop-filter">
                                <!-- Shop Filter Default Start -->
                                <div class="shop-filter-default justify-content-between align-items-center">
                                    <!-- Shop Filter Count Start -->
                                    <div class="shop-filter-count d-none d-sm-block">
                                        Showing 1–12 of 90 results
                                    </div>
                                    <!-- Shop Filter Count End -->

                                    <!-- Shop Filter Sort By Start -->
                                    <div class="shop-filter-sort-by">
                                        <div class="shop-filter-sort-by__label">
                                            <span>Sort by Default</span>
                                            <i
                                                    class="lastudioicon-down-arrow"
                                                ></i>
                                        </div>
                                        <ul class="shop-filter-sort-by__dropdown">
                                            <li class="active">
                                                <a href="#">Sort by Default</a>
                                            </li>
                                            <li>
                                                <a href="#">Sort by Popularity</a>
                                            </li>
                                            <li>
                                                <a href="#">Sort by Rated</a>
                                            </li>
                                            <li>
                                                <a href="#">Sort by Latest</a>
                                            </li>
                                            <li>
                                                <a href="#">Sort by Price:
                                                    <i
                                                            class="lastudioicon-arrow-up"
                                                        ></i></a>
                                            </li>
                                            <li>
                                                <a href="#">Sort by Price:
                                                    <i
                                                            class="lastudioicon-arrow-down"
                                                        ></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Shop Filter Sort By End -->
                                </div>
                                <!-- Shop Filter Default End -->
                            </div>
                            <!-- Shop Filter End -->

                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" />
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-02.png" alt="Product" width="344" height="370" />
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" />
                                                    <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" />
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-04.png" alt="Product" width="344" height="370" />
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-05.png" alt="Product" width="344" height="370" />
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" />
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" />
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
                                                    Spathiphyllum domino
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$19.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" />
                                                    <img class="product-hover" src="assets/images/products/product-06.png" alt="Product" width="344" height="370" />
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
                                                    Syngonium pink spot
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$79.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-09.png" alt="Product" width="344" height="370" />
                                                    <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" />
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
                                                <ins>$55.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--badge out-of-stock">
                                                Out of stock
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-11.png" alt="Product" width="344" height="370" />
                                                    <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" width="344" height="370" />
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
                                                    Vassunda planter
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$45.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" />
                                                    <img class="product-hover" src="assets/images/products/product-08.png" alt="Product" width="344" height="370" />
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" />
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
                                                    Spathiphyllum domino
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$19.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" />
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" />
                                                    <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" />
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" />
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                            class="lastudioicon-heart-2"
                                                        ></i></a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" />
                                                    <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" width="344" height="370" />
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
                                                    Syngonium pink spot
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$79.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                            </div>

                            <!-- Pagination Start -->
                            <div class="paginations">
                                <ul class="paginations-list">
                                    <li>
                                        <a href="#"><i
                                                    class="lastudioicon-arrow-left"
                                                ></i></a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a class="active" href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">...</a>
                                    </li>
                                    <li>
                                        <a href="#">10</a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                    class="lastudioicon-arrow-right"
                                                ></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Pagination End -->
                        </div>
                        <div class="col-lg-3">
                            <!-- Sidebar Shop Filter widget Start -->
                            <div class="sidebar-shop-filter-widget">
                                <!-- Sidebar widget Item Start -->
                                <div class="sidebar-widget-item">
                                    <h4 class="sidebar-widget-item__title">
                                        Category
                                    </h4>
                                    <div class="sidebar-widget-item__filter category-filter">
                                        <ul class="sidebar-widget-item__list category">
                                            <li>
                                                <input type="checkbox" id="category-1" />
                                                <label for="category-1">
                                                    <span></span>Accessories</label>
                                            </li>
                                            <li class="">
                                                <input type="checkbox" id="category-2" />
                                                <label for="category-2">
                                                    <span></span>Baby</label>

                                                <button class="narrow collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Baby" aria-label="down-arrow">
                                                    <i
                                                            class="lastudioicon-down-arrow"
                                                        ></i>
                                                </button>

                                                <div id="Baby" class="collapse" data-bs-parent="#accordionCategory">
                                                    <ul class="children">
                                                        <li>
                                                            <input type="checkbox" id="category-2-1" />
                                                            <label for="category-2-1">
                                                                <span></span>Accessories</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="category-2-2" />
                                                            <label for="category-2-2">
                                                                <span></span>Clothing</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="category-2-3" />
                                                            <label for="category-2-3">
                                                                <span></span>Learning</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="category-2-4" />
                                                            <label for="category-2-4">
                                                                <span></span>New-born</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="category-2-5" />
                                                            <label for="category-2-5">
                                                                <span></span>Toys</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-3" />
                                                <label for="category-3">
                                                    <span></span>Bag</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-4" />
                                                <label for="category-4">
                                                    <span></span>Big
                                                    Size</label>

                                                <button class="narrow collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BigSize" aria-label="down-arrow">
                                                    <i
                                                            class="lastudioicon-down-arrow"
                                                        ></i>
                                                </button>

                                                <div id="BigSize" class="collapse" data-bs-parent="#accordionCategory">
                                                    <ul class="children">
                                                        <li>
                                                            <input type="checkbox" id="category-4-1" />
                                                            <label for="category-4-1">
                                                                <span></span>Man</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="category-4-2" />
                                                            <label for="category-4-2">
                                                                <span></span>On
                                                                Sale</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="category-4-3" />
                                                            <label for="category-4-3">
                                                                <span></span>Women</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-5" />
                                                <label for="category-5">
                                                    <span></span>Burger</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-6" />
                                                <label for="category-6">
                                                    <span></span>Cake</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-7" />
                                                <label for="category-7">
                                                    <span></span>Candles</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-8" />
                                                <label for="category-8">
                                                    <span></span>Cosmetic</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-9" />
                                                <label for="category-9">
                                                    <span></span>Furniture</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-10" />
                                                <label for="category-10">
                                                    <span></span>Kids</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-11" />
                                                <label for="category-11">
                                                    <span></span>Men</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-12" />
                                                <label for="category-12">
                                                    <span></span>Organic</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-13" />
                                                <label for="category-13">
                                                    <span></span>Plant</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-14" />
                                                <label for="category-14">
                                                    <span></span>Shoes</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-15" />
                                                <label for="category-15">
                                                    <span></span>Watch</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-16" />
                                                <label for="category-16">
                                                    <span></span>Wines</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="category-17" />
                                                <label for="category-17">
                                                    <span></span>Women</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar widget Item End -->

                                <!-- Sidebar widget Item Start -->
                                <div class="sidebar-widget-item">
                                    <h4 class="sidebar-widget-item__title">
                                        Price
                                    </h4>
                                    <div class="sidebar-widget-item__filter price-range-filter">
                                        <form action="#">
                                            <div class="filter-slider">
                                                <div class="filter-progress"></div>
                                            </div>
                                            <div class="filter-range-input">
                                                <input type="range" class="range-min" min="0" max="500" value="10" step="10" />
                                                <input type="range" class="range-max" min="0" max="500" value="90" step="10" />
                                            </div>
                                            <p class="filter-price-value">
                                                Price:
                                                <input type="text" class="input-min" value="$10" />
                                                <span>—</span>
                                                <input type="text" class="input-max" value="$90" />
                                            </p>
                                            <button type="button" class="filter-price-btn">
                                                Filter
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Sidebar widget Item End -->

                                <!-- Sidebar widget Item Start -->
                                <div class="sidebar-widget-item">
                                    <h4 class="sidebar-widget-item__title">
                                        Size
                                    </h4>
                                    <div class="sidebar-widget-item__filter">
                                        <ul class="sidebar-widget-item__list-2">
                                            <li>
                                                <input type="checkbox" id="size-1" />
                                                <label for="size-1">
                                                    09</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="size-2" />
                                                <label for="size-2">
                                                    10</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="size-3" />
                                                <label for="size-3">
                                                    12</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="size-4" />
                                                <label for="size-4">
                                                    14</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="size-5" />
                                                <label for="size-5">
                                                    18</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="size-6" />
                                                <label for="size-6">
                                                    M</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="size-7" />
                                                <label for="size-7">
                                                    S</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="size-8" />
                                                <label for="size-8">
                                                    X</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar widget Item End -->

                                <!-- Sidebar widget Item Start -->
                                <div class="sidebar-widget-item">
                                    <h4 class="sidebar-widget-item__title">
                                        Color
                                    </h4>
                                    <div class="sidebar-widget-item__filter">
                                        <ul class="sidebar-widget-item__color">
                                            <li>
                                                <input type="checkbox" id="blue" />
                                                <label for="blue">
                                                    <span
                                                            class="blue"
                                                        ></span>Blue</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="bronze" />
                                                <label for="bronze">
                                                    <span
                                                            class="bronze"
                                                        ></span>Bronze</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="green" />
                                                <label for="green">
                                                    <span
                                                            class="green"
                                                        ></span>Green</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="pink" />
                                                <label for="pink">
                                                    <span
                                                            class="pink"
                                                        ></span>Pink</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="polar-blue" />
                                                <label for="polar-blue">
                                                    <span
                                                            class="polar-blue"
                                                        ></span>Polar Blue</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="red" />
                                                <label for="red">
                                                    <span class="red"></span>Red</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="white" />
                                                <label for="white">
                                                    <span
                                                            class="white"
                                                        ></span>White</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="yellow" />
                                                <label for="yellow">
                                                    <span
                                                            class="yellow"
                                                        ></span>Yellow</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar widget Item End -->

                                <!-- Sidebar widget Banner Start -->
                                <div class="sidebar-widget-banner" style="
                                            background-image: url(assets/images/shop-sidebar-banner.jpg);
                                        ">
                                    <h2 class="sidebar-widget-banner__title">
                                        NEW NOW
                                    </h2>
                                    <h4 class="sidebar-widget-banner__sub-title">
                                        WARM WOOL PREMIUM COAT
                                    </h4>
                                    <a href="#" class="sidebar-widget-banner__btn">Add to bag</a>
                                </div>
                                <!-- Sidebar widget Banner End -->
                            </div>
                            <!-- Sidebar Shop Filter widget End -->
                        </div>
                    </div>
                </div>
                <!-- Shop Wrapper End -->
            </div>
        </div>
        <!-- Shop End -->

        <!-- Newsletter Start -->
        <div class="newsletter-section">
            <div class="newsletter-left" style="
                        background-image: url(assets/images/newsletter-bg-1.jpg);
                    ">
                <div class="newsletter-social">
                    <h4 class="newsletter-social__label">Follow us on</h4>
                    <ul class="newsletter-social__list">
                        <li>
                            <a href="#" aria-label="facebook"><i class="lastudioicon-b-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" aria-label="twitter"><i class="lastudioicon-b-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" aria-label="instagram"><i class="lastudioicon-b-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" aria-label="vimeo"><i class="lastudioicon-b-vimeo"></i></a>
                        </li>
                        <li>
                            <a href="#" aria-label="envato"><i class="lastudioicon-envato"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="newsletter-right" style="
                        background-image: url(assets/images/newsletter-bg-2.jpg);
                    ">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper text-center">
                    <h4 class="newsletter-wrapper__title-2">
                        10% off when you sign up
                    </h4>
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
    </main>

    <?php
   include("./components/footer.php");
   ?>