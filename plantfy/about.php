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
        <!-- About Start -->
        <div class="about-section section-padding">
            <div class="container-fluid custom-container">
                <!-- About Title Start -->
                <div class="about-title text-center js-scroll ShortFadeInUp">
                    <h2 class="about-title__title">We Love Plant</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Morbi tincidunt ornare massa
                        eget egestas purus viverra.
                    </p>
                </div>
                <!-- About Title End -->

                <!-- About Items Start -->
                <div class="about-items">
                    <div class="about-col">
                        <!-- About Item Start -->
                        <div class="about-item js-scroll ShortFadeInUp">
                            <div class="about-item__top">
                                <div class="about-item__top--image">
                                    <img src="assets/images/about/about-img-1.jpg" alt="About" width="391" height="510" />
                                </div>
                                <h3 class="about-item__top--title">
                                    Trending
                                </h3>
                            </div>
                            <div class="about-item__bottom">
                                <div class="about-item__bottom--count">
                                    01
                                </div>
                                <p class="about-item__bottom--description">
                                    Volutpat commodo sed egestas egestas
                                    fringilla phasellus faucibus scelerisque
                                    enean
                                </p>
                            </div>
                        </div>
                        <!-- About Item End -->
                    </div>

                    <div class="about-col">
                        <!-- About Item Start -->
                        <div class="about-item js-scroll ShortFadeInUp">
                            <div class="about-item__top">
                                <div class="about-item__top--image">
                                    <img src="assets/images/about/about-img-2.jpg" alt="About" width="391" height="510" />
                                </div>
                                <h3 class="about-item__top--title">
                                    Design
                                </h3>
                            </div>
                            <div class="about-item__bottom">
                                <div class="about-item__bottom--count">
                                    02
                                </div>
                                <p class="about-item__bottom--description">
                                    Volutpat commodo sed egestas egestas
                                    fringilla phasellus faucibus scelerisque
                                    enean
                                </p>
                            </div>
                        </div>
                        <!-- About Item End -->
                    </div>

                    <div class="about-col">
                        <!-- About Item Start -->
                        <div class="about-item js-scroll ShortFadeInUp">
                            <div class="about-item__top">
                                <div class="about-item__top--image">
                                    <img src="assets/images/about/about-img-3.jpg" alt="About" width="391" height="510" />
                                </div>
                                <h3 class="about-item__top--title">
                                    Insight
                                </h3>
                            </div>
                            <div class="about-item__bottom">
                                <div class="about-item__bottom--count">
                                    03
                                </div>
                                <p class="about-item__bottom--description">
                                    Volutpat commodo sed egestas egestas
                                    fringilla phasellus faucibus scelerisque
                                    enean
                                </p>
                            </div>
                        </div>
                        <!-- About Item End -->
                    </div>
                </div>
                <!-- About Items End -->
            </div>
        </div>
        <!-- About End -->

        <!-- About Video Start -->
        <div class="about-video js-scroll ShortFadeInUp" style="background-image: url(assets/images/background-2.jpg)">
            <div class="container-fluid custom-container">
                <!-- About Video Content Start -->
                <div class="about-video__content js-scroll ShortFadeInUp">
                    <h3 class="about-video__title">
                        Breathing Life into Ideas
                    </h3>
                    <a class="about-video__play glightbox" href="https://www.youtube.com/watch?v=haoQM8kCM6U&amp;ab_channel=LAStudio">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="512" height="512">
                            <path d="M24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13V38.13zM56.34 66.35C51.4 63.33 45.22 63.21 40.17 66.04C35.13 68.88 32 74.21 32 80V432C32 437.8 35.13 443.1 40.17 445.1C45.22 448.8 51.41 448.7 56.34 445.7L344.3 269.7C349.1 266.7 352 261.6 352 256C352 250.4 349.1 245.3 344.3 242.3L56.34 66.35z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
                <!-- About Video Content End -->
            </div>
        </div>
        <!-- About Video End -->

        <!-- Testimonial Start -->
        <div class="testimonial-section-2 section-padding">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title-3 text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title-3__title">Testimonial</h3>
                </div>
                <!-- Section Title End -->

                <!-- Testimonial Active Start -->
                <div class="testimonial-active testimonial-wrapper js-scroll ShortFadeInUp">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Testimonial Item Start -->
                                <div class="testimonial-item-2 text-center">
                                    <div class="testimonial-item-2__title">
                                        Design Quality
                                    </div>
                                    <p class="testimonial-item-2__description">
                                        “Excellent Theme with an impressive
                                        customer support. Always responsive
                                        and very helpful.”
                                    </p>
                                    <div class="testimonial-item-2__author">
                                        <img class="testimonial-item-2__image" src="assets/images/author/m2-testimonial-1.jpg" alt="Testimonial" width="55" height="55" loading="lazy" />
                                        <p class="testimonial-item-2__name">
                                            Charlotte Carton
                                        </p>
                                    </div>
                                </div>
                                <!-- Testimonial Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Testimonial Item Start -->
                                <div class="testimonial-item-2 text-center">
                                    <div class="testimonial-item-2__title">
                                        Design Quality
                                    </div>
                                    <p class="testimonial-item-2__description">
                                        “Excellent Theme with an impressive
                                        customer support. Always responsive
                                        and very helpful.”
                                    </p>
                                    <div class="testimonial-item-2__author">
                                        <img class="testimonial-item-2__image" src="assets/images/author/m2-testimonial-2.jpg" alt="Testimonial" width="55" height="55" loading="lazy" />
                                        <p class="testimonial-item-2__name">
                                            Johnny Hart
                                        </p>
                                    </div>
                                </div>
                                <!-- Testimonial Item End -->
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next">
                        <i class="lastudioicon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="lastudioicon-left-arrow"></i>
                    </div>
                </div>
                <!-- Testimonial Active End -->
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Instagram Start -->
        <div class="instagram-section overflow-hidden">
            <!-- Instagram Wrapper Start -->
            <div class="instagram-wrapper-2 grid">
                <div class="instagram-col grid-item">
                    <!-- Instagram item Start -->
                    <div class="instagram-item instagram-item-4 js-scroll ShortFadeInUp">
                        <a href="#">
                            <div class="instagram-item__image">
                                <img src="assets/images/instagram/about-instagram-1.jpg" alt="Instagram" width="946" height="525" loading="lazy" />
                            </div>
                            <div class="instagram-item__icon">
                                <i class="lastudioicon-b-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <!-- Instagram item End -->
                </div>
                <div class="instagram-col grid-item">
                    <!-- Instagram item Start -->
                    <div class="instagram-item instagram-item-4 js-scroll ShortFadeInUp">
                        <a href="#">
                            <div class="instagram-item__image">
                                <img src="assets/images/instagram/about-instagram-2.jpg" alt="Instagram" width="946" height="396" loading="lazy" />
                            </div>
                            <div class="instagram-item__icon">
                                <i class="lastudioicon-b-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <!-- Instagram item End -->
                </div>
                <div class="instagram-col grid-item">
                    <!-- Instagram item Start -->
                    <div class="instagram-item instagram-item-4 js-scroll ShortFadeInUp">
                        <a href="#">
                            <div class="instagram-item__image">
                                <img src="assets/images/instagram/about-instagram-4.jpg" alt="Instagram" width="946" height="655" loading="lazy" />
                            </div>
                            <div class="instagram-item__icon">
                                <i class="lastudioicon-b-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <!-- Instagram item End -->
                </div>
                <div class="instagram-col grid-item">
                    <!-- Instagram item Start -->
                    <div class="instagram-item instagram-item-4 js-scroll ShortFadeInUp">
                        <a href="#">
                            <div class="instagram-item__image">
                                <img src="assets/images/instagram/about-instagram-3.jpg" alt="Instagram" width="946" height="525" loading="lazy" />
                            </div>
                            <div class="instagram-item__icon">
                                <i class="lastudioicon-b-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <!-- Instagram item End -->
                </div>
            </div>
            <!-- Instagram Wrapper End -->
        </div>
        <!-- Instagram End -->

        <!-- Contact Start -->
        <div class="contact-section section-padding">
            <div class="container-fluid custom-container">
                <!-- Contact Wrapper Start -->
                <div class="contact-wrapper js-scroll ShortFadeInUp">
                    <h2 class="contact-wrapper__title">
                        Let’s talk about your project
                    </h2>
                    <form action="#">
                        <div class="contact-form-style-1">
                            <!-- Contact Form Style Input Start -->
                            <div class="contact-form-style-1__input">
                                <input type="text" placeholder="Your name" />
                            </div>
                            <!-- Contact Form Style Input End -->

                            <!-- Contact Form Style Input Start -->
                            <div class="contact-form-style-1__input">
                                <input type="text" placeholder="Email address" />
                            </div>
                            <!-- Contact Form Style Input End -->

                            <!-- Contact Form Style Input Start -->
                            <div class="contact-form-style-1__btn">
                                <button class="btn">Send message</button>
                            </div>
                            <!-- Contact Form Style Input End -->
                        </div>
                    </form>

                    <div class="contact-social">
                        <h2 class="contact-wrapper__title">
                            Connect with us
                        </h2>
                        <ul class="contact-social__social">
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
                </div>
                <!-- Contact Wrapper End -->
            </div>
        </div>
        <!-- Contact End -->
    </main>

    <?php
  include("./components/footer.php");
  ?>