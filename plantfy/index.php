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
        <!-- Slider Start -->
        <div class="slider-section slider-active">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slider Item Start -->
                    <div class="slider-item home-1-slider-style-1 swiper-slide d-md-flex align-items-center">
                        <!-- Slider Image Start -->
                        <div class="home-1-slider-style-1__image">
                            <img src="assets/images/slider/slider-1.png" alt="slider" width="740" height="744" />
                        </div>
                        <!-- Slider Image End -->

                        <div class="container-fluid custom-container">
                            <!-- Slider Content Start -->
                            <div class="home-1-slider-content-style-1">
                                <h4 class="home-1-slider-content-style-1__sub-title">
                                    Design your home with passion
                                </h4>
                                <h2 class="home-1-slider-content-style-1__title">
                                    House Plant & Office Plant
                                </h2>

                                <ul class="home-1-slider-content-style-1__btns">
                                    <li class="button-01">
                                        <a class="home-1-slider-content-style-1__btn" href="shop-fullwidth.html">
                                            Shop now
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                    <!-- Slider Item End -->

                    <!-- Slider Item Start -->
                    <div class="slider-item home-1-slider-style-1 swiper-slide d-md-flex align-items-center" style="
                                background-image: url(assets/images/slider/slider-bg-1.jpg);
                            ">
                        <div class="container-fluid custom-container">
                            <!-- Slider Content Start -->
                            <div class="home-1-slider-content-style-1">
                                <h4 class="home-1-slider-content-style-1__sub-title">
                                    Design your home with passion
                                </h4>
                                <h2 class="home-1-slider-content-style-1__title">
                                    Make your home green
                                </h2>

                                <ul class="home-1-slider-content-style-1__btns">
                                    <li class="button-01">
                                        <a class="home-1-slider-content-style-1__btn" href="shop-fullwidth.html">
                                            Shop now
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                    <!-- Slider Item End -->

                    <!-- Slider Item Start -->
                    <div class="slider-item home-1-slider-style-2 swiper-slide d-md-flex align-items-center">
                        <!-- Slider Image Start -->
                        <div class="home-1-slider-style-1__image">
                            <img src="assets/images/slider/slider-2.jpg" alt="slider" width="818" height="818" />
                        </div>
                        <!-- Slider Image End -->

                        <div class="container-fluid custom-container">
                            <!-- Slider Content Start -->
                            <div class="home-1-slider-content-style-1">
                                <h4 class="home-1-slider-content-style-1__sub-title">
                                    Design your home with passion
                                </h4>
                                <h2 class="home-1-slider-content-style-1__title">
                                    Make your home green
                                </h2>

                                <ul class="home-1-slider-content-style-1__btns">
                                    <li class="button-01">
                                        <a class="home-1-slider-content-style-1__btn" href="shop-fullwidth.html">
                                            Shop now
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                    <!-- Slider Item End -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- Slider End -->

        <!-- Banner Start -->
        <div class="banner-section section-padding-1">
            <div class="container-fluid custom-container">
                <div class="row gy-4 g-xxl-5">
                    <div class="col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner js-scroll ShortFadeInUp">
                            <a class="single-banner__link" href="shop-fullwidth.html">
                                <div class="single-banner__image">
                                    <img src="assets/images/banner/banner-1.jpg" alt="banner" width="699" height="402" loading="lazy" />
                                </div>
                                <div class="single-banner__content">
                                    <h4 class="single-banner__title">
                                        Plant for office
                                    </h4>
                                    <p class="single-banner__sale">
                                        Sale 40%
                                    </p>
                                    <span class="single-banner__btn">
                                            Shop now
                                        </span>
                                </div>
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner js-scroll ShortFadeInUp">
                            <a class="single-banner__link" href="shop-fullwidth.html">
                                <div class="single-banner__image">
                                    <img src="assets/images/banner/banner-2.jpg" alt="banner" width="699" height="402" loading="lazy" />
                                </div>
                                <div class="single-banner__content">
                                    <h4 class="single-banner__title">
                                        Rose for home
                                    </h4>
                                    <p class="single-banner__sale">
                                        Sale 40%
                                    </p>
                                    <span class="single-banner__btn">
                                            Shop now
                                        </span>
                                </div>
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- New Arrival Start -->
        <div class="product-section section-padding-1">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">New Arrival</h3>
                </div>
                <!-- Section Title End -->

                <!-- Product Tab Menu Start -->
                <div class="product-tab-menu js-scroll ShortFadeInUp">
                    <ul class="nav justify-content-center" role="tablist">
                        <li role="presentation">
                            <button class="active" data-bs-toggle="tab" data-bs-target="#all" role="tab" aria-controls="all">
                                ALL
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#offices" role="tab" aria-controls="offices">
                                OFFICES
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#for-home" role="tab" aria-controls="for-home">
                                FOR HOME
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#outdoor" role="tab" aria-controls="outdoor">
                                OUTDOOR
                            </button>
                        </li>
                    </ul>
                </div>
                <!-- Product Tab Menu End -->

                <!-- Product Wrapper Start -->
                <div class="product-wrapper">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="all">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Vassunda planter
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Plant seeds
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-04.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Syngonium pink spot
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Spathiphyllum domino
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-05.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="offices">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Vassunda planter
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Plant seeds
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-04.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Syngonium pink spot
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Spathiphyllum domino
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-05.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="for-home">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Vassunda planter
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Plant seeds
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-04.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Syngonium pink spot
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Spathiphyllum domino
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-05.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="outdoor">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Vassunda planter
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Plant seeds
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-04.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Syngonium pink spot
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Spathiphyllum domino
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
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
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-05.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Wrapper End -->
            </div>
        </div>
        <!-- New Arrival End -->

        <!-- Trending Start -->
        <div class="trending-section section-padding-1 overflow-hidden">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">Hand pick by staff</h3>
                </div>
                <!-- Section Title End -->

                <!-- Trending Active Start -->
                <div class="trending-active">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Trending Item Start -->
                            <div class="trending-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="trending-item__link" href="shop-fullwidth.html">
                                    <div class="trending-item__image">
                                        <img src="assets/images/trending/trending-1.jpg" alt="Trending" width="708" height="553" loading="lazy" />
                                    </div>
                                    <div class="trending-item__content">
                                        <p class="trending-item__title">
                                            Outdoor Plants
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Trending Item End -->

                            <!-- Trending Item Start -->
                            <div class="trending-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="trending-item__link" href="shop-fullwidth.html">
                                    <div class="trending-item__image">
                                        <img src="assets/images/trending/trending-2.jpg" alt="Trending" width="708" height="553" loading="lazy" />
                                    </div>
                                    <div class="trending-item__content">
                                        <p class="trending-item__title">
                                            Office Plants
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Trending Item End -->

                            <!-- Trending Item Start -->
                            <div class="trending-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="trending-item__link" href="shop-fullwidth.html">
                                    <div class="trending-item__image">
                                        <img src="assets/images/trending/trending-3.jpg" alt="Trending" width="708" height="553" loading="lazy" />
                                    </div>
                                    <div class="trending-item__content">
                                        <p class="trending-item__title">
                                            Low water
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Trending Item End -->

                            <!-- Trending Item Start -->
                            <div class="trending-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="trending-item__link" href="shop-fullwidth.html">
                                    <div class="trending-item__image">
                                        <img src="assets/images/trending/trending-4.jpg" alt="Trending" width="708" height="553" loading="lazy" />
                                    </div>
                                    <div class="trending-item__content">
                                        <p class="trending-item__title">
                                            Home Plants
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Trending Item End -->
                        </div>

                        <div class="swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                                <path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                                <path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Trending Active End -->
            </div>
        </div>
        <!-- Trending End -->

        <!-- Testimonial Start -->
        <div class="testimonial-section section-padding">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">Hand pick by staff</h3>
                </div>
                <!-- Section Title End -->

                <!-- Testimonial Wrapper Start -->
                <div class="testimonial-active js-scroll ShortFadeInUp">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item text-center swiper-slide">
                                <div class="testimonial-item__quote mx-auto">
                                    <div class="quote-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 67 56">
                                            <path d="M0 37.882Q0 25.324 10.04 14T27.046 0l3.073 4.941a33.306 33.306 0 0 0-11.884 10.912A32.278 32.278 0 0 0 12.5 30.676a14.7 14.7 0 0 1 6.557-1.235 8.735 8.735 0 0 1 7.171 3.706q3.072 3.706 3.072 9.882A11.566 11.566 0 0 1 25 52.5 16.65 16.65 0 0 1 14.138 56a13.126 13.126 0 0 1-10.245-4.324Q0 47.147 0 37.882Zm36.881 0q0-12.559 10.04-23.882T63.927 0L67 4.941a33.306 33.306 0 0 0-11.884 10.912 32.278 32.278 0 0 0-5.737 14.824 14.7 14.7 0 0 1 6.557-1.235 8.735 8.735 0 0 1 7.171 3.706q3.073 3.706 3.073 9.882a11.566 11.566 0 0 1-4.3 9.471A16.65 16.65 0 0 1 51.018 56a13.126 13.126 0 0 1-10.245-4.324q-3.892-4.529-3.892-13.794Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="testimonial-item__description">
                                    <p>
                                        The best customer support I have
                                        ever had with themeforest templates.
                                        Thank you so much for your support,
                                        I will buy other themes by you!
                                    </p>
                                    <p>Very goog job!</p>
                                </div>
                                <div class="testimonial-item__image">
                                    <img src="assets/images/author/m2-testimonial-1.jpg" alt="Testimonial" width="80" height="80" loading="lazy" />
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item text-center swiper-slide">
                                <div class="testimonial-item__quote mx-auto">
                                    <div class="quote-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 67 56">
                                            <path d="M0 37.882Q0 25.324 10.04 14T27.046 0l3.073 4.941a33.306 33.306 0 0 0-11.884 10.912A32.278 32.278 0 0 0 12.5 30.676a14.7 14.7 0 0 1 6.557-1.235 8.735 8.735 0 0 1 7.171 3.706q3.072 3.706 3.072 9.882A11.566 11.566 0 0 1 25 52.5 16.65 16.65 0 0 1 14.138 56a13.126 13.126 0 0 1-10.245-4.324Q0 47.147 0 37.882Zm36.881 0q0-12.559 10.04-23.882T63.927 0L67 4.941a33.306 33.306 0 0 0-11.884 10.912 32.278 32.278 0 0 0-5.737 14.824 14.7 14.7 0 0 1 6.557-1.235 8.735 8.735 0 0 1 7.171 3.706q3.073 3.706 3.073 9.882a11.566 11.566 0 0 1-4.3 9.471A16.65 16.65 0 0 1 51.018 56a13.126 13.126 0 0 1-10.245-4.324q-3.892-4.529-3.892-13.794Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="testimonial-item__description">
                                    <p>
                                        The best customer support I have
                                        ever had with themeforest templates.
                                        Thank you so much for your support,
                                        I will buy other themes by you!
                                    </p>
                                    <p>Very goog job!</p>
                                </div>
                                <div class="testimonial-item__image">
                                    <img src="assets/images/author/m2-testimonial-2.jpg" alt="Testimonial" width="80" height="80" loading="lazy" />
                                </div>
                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                    </div>

                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                            <path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                            <path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                </div>
                <!-- Testimonial Wrapper End -->
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Video Promotion Start -->
        <div class="video-promotion-section" style="background-image: url(assets/images/background-1.jpg)">
            <div class="container-fluid custom-container">
                <!-- Video Promotion Content Start -->
                <div class="video-promotion-content text-center js-scroll ShortFadeInUp">
                    <h4 class="video-promotion-content__sub-title">
                        Video promotion
                    </h4>
                    <h2 class="video-promotion-content__title">
                        Let make a Fresh & Green Life
                    </h2>
                    <a class="video-promotion-content__video glightbox" href="https://www.youtube.com/watch?v=haoQM8kCM6U&amp;ab_channel=LAStudio" aria-label="video">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="512" height="512">
                            <path d="M24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13V38.13zM56.34 66.35C51.4 63.33 45.22 63.21 40.17 66.04C35.13 68.88 32 74.21 32 80V432C32 437.8 35.13 443.1 40.17 445.1C45.22 448.8 51.41 448.7 56.34 445.7L344.3 269.7C349.1 266.7 352 261.6 352 256C352 250.4 349.1 245.3 344.3 242.3L56.34 66.35z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
                <!-- Video Promotion Content End -->
            </div>
        </div>
        <!-- Video Promotion End -->

        <!-- About Start -->
        <div class="about-section section-padding">
            <div class="container-fluid about-container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-5">
                        <!-- About Content Start -->
                        <div class="about-content js-scroll ShortFadeInUp">
                            <h4 class="about-content__sub-title">
                                Little about us
                            </h4>
                            <h2 class="about-content__title">
                                Designed to Fit your Home
                            </h2>
                            <div class="about-content__description">
                                <p>
                                    Proin volutpat vitae libero at
                                    tincidunt. Maecenas sapien lectus,
                                    vehicula vel euismod sed, vulputate a
                                    lorem. Integer at tristique libero.
                                    Nullam porta eleifend metus a interdum.
                                    Pellentesque vehicula rutrum gravida.
                                    Maecenas ullamcorper
                                </p>
                            </div>
                            <a class="about-content__btn" href="about.html">
                                Learn more
                            </a>
                        </div>
                        <!-- About Content End -->
                    </div>
                    <div class="col-lg-7">
                        <!-- About Image Start -->
                        <div class="about-image js-scroll ShortFadeInUp">
                            <img src="assets/images/about-bg-2.jpg" alt="About Image" width="1053" height="730" loading="lazy" />
                        </div>
                        <!-- About Image End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Discover Start -->
        <div class="discover-section section-padding">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">Discover more</h3>
                </div>
                <!-- Section Title End -->

                <!-- Discover Wrapper Start -->
                <div class="discover-wrapper discover-active navigation-arrows-style-3">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Discover Item Start -->
                            <div class="discover-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="discover-item__link" href="shop-fullwidth.html">
                                    <div class="discover-item__image">
                                        <img src="assets/images/discover/discover-1.jpg" alt="Discover" width="290" height="240" loading="lazy" />
                                    </div>
                                    <div class="discover-item__content text-center">
                                        Name of item
                                    </div>
                                </a>
                            </div>
                            <!-- Discover Item End -->

                            <!-- Discover Item Start -->
                            <div class="discover-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="discover-item__link" href="shop-fullwidth.html">
                                    <div class="discover-item__image">
                                        <img src="assets/images/discover/discover-2.jpg" alt="Discover" width="290" height="240" loading="lazy" />
                                    </div>
                                    <div class="discover-item__content text-center">
                                        Name of item
                                    </div>
                                </a>
                            </div>
                            <!-- Discover Item End -->

                            <!-- Discover Item Start -->
                            <div class="discover-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="discover-item__link" href="shop-fullwidth.html">
                                    <div class="discover-item__image">
                                        <img src="assets/images/discover/discover-3.jpg" alt="Discover" width="290" height="240" loading="lazy" />
                                    </div>
                                    <div class="discover-item__content text-center">
                                        Name of item
                                    </div>
                                </a>
                            </div>
                            <!-- Discover Item End -->

                            <!-- Discover Item Start -->
                            <div class="discover-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="discover-item__link" href="shop-fullwidth.html">
                                    <div class="discover-item__image">
                                        <img src="assets/images/discover/discover-4.jpg" alt="Discover" width="290" height="240" loading="lazy" />
                                    </div>
                                    <div class="discover-item__content text-center">
                                        Name of item
                                    </div>
                                </a>
                            </div>
                            <!-- Discover Item End -->
                        </div>
                    </div>

                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                            <path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                            <path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                </div>
                <!-- Discover Wrapper End -->
            </div>
        </div>
        <!-- Discover End -->

        <!-- Instagram Start -->
        <div class="instagram-section section-padding">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">
                        #Follow us on Instagram
                    </h3>
                </div>
                <!-- Section Title End -->

                <!-- Instagram Wrapper Start -->
                <div class="instagram-wrapper">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <!-- Instagram Item Start -->
                            <div class="instagram-item js-scroll ShortFadeInUp">
                                <a href="#">
                                    <div class="instagram-item__image">
                                        <img src="assets/images/instagram/instagram-01.jpg" alt="Instagram" width="711" height="716" loading="lazy" />
                                    </div>
                                    <div class="instagram-item__icon">
                                        <i
                                                class="lastudioicon-b-instagram"
                                            ></i>
                                    </div>
                                </a>
                            </div>
                            <!-- Instagram Item End -->
                        </div>
                        <div class="col-md-6">
                            <!-- Instagram Item Start -->
                            <div class="instagram-item js-scroll ShortFadeInUp">
                                <a href="#">
                                    <div class="instagram-item__image">
                                        <img src="assets/images/instagram/instagram-02.jpg" alt="Instagram" width="711" height="342" loading="lazy" />
                                    </div>
                                    <div class="instagram-item__icon">
                                        <i
                                                class="lastudioicon-b-instagram"
                                            ></i>
                                    </div>
                                </a>
                            </div>
                            <!-- Instagram Item End -->

                            <!-- Instagram Item Start -->
                            <div class="instagram-item js-scroll ShortFadeInUp">
                                <a href="#">
                                    <div class="instagram-item__image">
                                        <img src="assets/images/instagram/instagram-03.jpg" alt="Instagram" width="711" height="342" loading="lazy" />
                                    </div>
                                    <div class="instagram-item__icon">
                                        <i
                                                class="lastudioicon-b-instagram"
                                            ></i>
                                    </div>
                                </a>
                            </div>
                            <!-- Instagram Item End -->
                        </div>
                    </div>
                </div>
                <!-- Instagram Wrapper End -->
            </div>
        </div>
        <!-- Instagram End -->
    </main>

    <!-- Footer Start -->
   <?php
include_once('components/footer.php')
   ?>

    <!-- Footer End -->

    <!-- Quick View Start -->
    <!-- Modal Start -->
    <div class="modal quickview-modal fade" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal Content Start -->
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="remove">
                    <i class="lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <!-- Product Single image Start -->
                            <div class="product-single-image">
                                <div class="quick-view-product-slide navigation-arrows-style-2">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="assets/images/products/product-single-01.png" width="742" height="778" loading="lazy" />
                                            </div>
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="assets/images/products/product-single-02.png" width="742" height="778" loading="lazy" />
                                            </div>
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="assets/images/products/product-single-03.png" width="742" height="778" loading="lazy" />
                                            </div>
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="assets/images/products/product-single-04.png" width="742" height="778" loading="lazy" />
                                            </div>
                                        </div>
                                        <div class="swiper-button-next" aria-label="arrow-right">
                                            <i class="lastudioicon-arrow-right"></i>
                                        </div>
                                        <div class="swiper-button-prev" aria-label="arrow-left">
                                            <i class="lastudioicon-arrow-left"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Single image End -->
                        </div>
                        <div class="col-md-6">
                            <!-- Product Single Content Start -->
                            <div class="product-single-content quick-view-product-content">
                                <h2 class="product-single-content__title">
                                    Product Simple
                                </h2>
                                <div class="product-single-content__price-stock">
                                    <div class="product-single-content__price">
                                        <ins>$36.99</ins>
                                    </div>
                                    <div class="product-single-content__stock">
                                        <span
                                        class="stock-icon"
                                        aria-label="check-circle"
                                    >
                                        <i
                                            class="dlicon ui-1_check-circle-08"
                                        ></i>
                                    </span>
                                        <span class="stock-text">97 in stock</span>
                                    </div>
                                </div>
                                <div class="product-single-content__short-description">
                                    <p>
                                        Proin volutpat vitae libero at tincidunt.
                                        Maecenas sapien lectus, vehicula vel euismod
                                        sed, vulputate a lorem. Integer at tristique
                                        libero. Nullam porta eleifend metus a
                                        interdum.
                                    </p>
                                </div>
                                <div class="product-single-content__add-to-cart-wrapper">
                                    <div class="product-single-content__quantity-add-to-cart">
                                        <div class="product-single-content__quantity product-quantity">
                                            <button type="button" class="decrease" aria-label="delete">
                                                <i
                                                class="lastudioicon-i-delete-2"
                                            ></i>
                                            </button>
                                            <input class="quantity-input" type="text" value="1" />
                                            <button type="button" class="increase" aria-label="add">
                                                <i class="lastudioicon-i-add-2"></i>
                                            </button>
                                        </div>
                                        <button class="product-single-content__add-to-cart btn">
                                            Add to cart
                                        </button>
                                    </div>

                                    <a href="#" class="product-add-compare">Add to Compare</a>
                                    <a href="#" class="product-add-wishlist">Add to Wishlist</a>
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
                            </div>
                            <!-- Product Single Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Content End -->
        </div>
    </div>
    <!-- Modal End -->

    <!-- Quick View End -->

    <!-- Popup Modal Start -->
    <!-- Popup Modal Start -->
    <div class="popup-modal">
        <div class="popup-modal-overlay"></div>
        <div class="popup-modal-content">
            <div class="popup-modal-row flex-row-reverse">
                <div class="popup-modal-col-2">
                    <!-- Popup Discount Background Start -->
                    <div class="popup-discount-background" style="background-image: url(assets/images/popup-bg.jpg)"></div>
                    <!-- Popup Discount Background End -->
                </div>
                <div class="popup-modal-col-1">
                    <!-- Popup Discount Content Start -->
                    <div class="popup-discount-content">
                        <h3 class="popup-discount-content__title">
                            Get 7% discount
                        </h3>
                        <p class="popup-discount-content__sub-title">
                            Register and get a discount on your first purchase!
                        </p>

                        <form action="#">
                            <div class="popup-discount-content__form">
                                <input type="text" placeholder="Email address..." />
                                <button type="button">Subscribe</button>
                            </div>
                        </form>
                        <p class="popup-discount-content__text">
                            *Limited time offer. Free USPS shipping only. Only
                            available for US
                        </p>

                        <div class="popup-discount-content__wrapper">
                            <div class="popup-discount-content__dont-show">
                                <a href="#">Don’t show this popup again</a>
                            </div>
                            <ul class="popup-discount-content__social">
                                <li>
                                    <a href="#" aria-label="twitter">
                                        <i class="lastudioicon-b-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="facebook">
                                        <i class="lastudioicon-b-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="instagram">
                                        <i class="lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="youtube">
                                        <i class="lastudioicon-b-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Popup Discount Content End -->
                </div>
            </div>

            <div class="popup-close">
                <button class="popup-close__btn" aria-label="close">
                    <svg viewBox="0 0 1000 1000" class="eicon-close">
                        <path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Popup Modal End -->

    <!-- Popup Modal End -->

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/nice-select2.js"></script>

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from htmldemo.net/plantfy/plantfy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Aug 2023 21:00:48 GMT -->
</html>