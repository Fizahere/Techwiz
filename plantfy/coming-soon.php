<?php
include("./components/header.php");
?>


    <!-- Cart Sidebar Start -->
    <!-- Cart Offcanvas Start -->
    <?php
include_once('components/addtocart.php')
 ?>
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
        <!-- Coming Soon Start -->
        <div class="coming-soon-section section-padding">
            <div class="container-fluid coming-soon-container">
                <!-- Coming Soon Wrapper Start -->
                <div class="coming-soon-wrapper">
                    <div class="row gy-5 align-items-center">
                        <div class="col-md-5">
                            <!-- Coming Soon Image Start -->
                            <div class="coming-soon-image">
                                <img src="assets/images/coming-soon.png" alt="Coming Soon" width="440" height="553" />
                            </div>
                            <!-- Coming Soon Image End -->
                        </div>
                        <div class="col-md-7">
                            <!-- Coming Soon Image Start -->
                            <div class="coming-soon-content text-center">
                                <h4 class="coming-soon-content__title">
                                    We’re Building Something New
                                </h4>

                                <div class="countdown-content__countdown countdown justify-content-center" data-countdown="2023/11/20 23:59:59">
                                    <div class="countdown-content__timer-item">
                                        <div class="countdown-content__timer-item--value days">
                                            05
                                        </div>
                                        <div class="countdown-content__timer-item--label">
                                            days
                                        </div>
                                    </div>
                                    <div class="countdown-content__timer-item">
                                        <div class="countdown-content__timer-item--value hours">
                                            06
                                        </div>
                                        <div class="countdown-content__timer-item--label">
                                            hours
                                        </div>
                                    </div>
                                    <div class="countdown-content__timer-item">
                                        <div class="countdown-content__timer-item--value minutes">
                                            38
                                        </div>
                                        <div class="countdown-content__timer-item--label">
                                            minutes
                                        </div>
                                    </div>
                                    <div class="countdown-content__timer-item">
                                        <div class="countdown-content__timer-item--value seconds">
                                            48
                                        </div>
                                        <div class="countdown-content__timer-item--label">
                                            seconds
                                        </div>
                                    </div>
                                </div>

                                <a href="#" class="coming-soon-content__btn btn">Get Notification</a>
                            </div>
                            <!-- Coming Soon Image End -->
                        </div>
                    </div>
                </div>
                <!-- Coming Soon Wrapper End -->
            </div>
        </div>
        <!-- Coming Soon End -->

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

    <!-- Footer Start -->
    <footer class="footer-section-2 footer-dark">
        <div class="container-fluid custom-container">
            <!-- Footer Main Start -->
            <div class="footer-main footer-padding align-items-center">
                <div class="footer-left">
                    <div class="footer-about text-lg-start text-center">
                        <a class="footer-about__logo" href="#">
                            <img src="assets/images/logo-white.png" alt="Logo" loading="lazy" />
                        </a>
                        <p>
                            Proin volutpat vitae libero at tincidunt. Maecenas sapie
                        </p>
                    </div>
                </div>
                <div class="footer-right">
                    <div class="footer-link">
                        <div class="footer-link__wrapper">
                            <h4 class="footer-title text-white">Company links</h4>

                            <ul class="footer-link__list">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="shop-fullwidth.html">Shop</a></li>
                                <li><a href="term-of-use.html">Help Center</a></li>
                                <li>
                                    <a href="term-of-use.html">Policy & Privacy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-link__wrapper">
                            <h4 class="footer-title text-white">Category</h4>

                            <ul class="footer-link__list">
                                <li><a href="shop-fullwidth.html">Man</a></li>
                                <li><a href="shop-fullwidth.html">Woman</a></li>
                                <li><a href="shop-fullwidth.html">Kids</a></li>
                                <li>
                                    <a href="shop-fullwidth.html">Accessories</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-link__wrapper">
                            <h4 class="footer-title text-white">Contact</h4>

                            <ul class="footer-link__list">
                                <li>
                                    <span>
                                    4517 Washington Ave. Manchester, Kentucky
                                    39495
                                </span>
                                </li>
                                <li>
                                    <a href="mailto:info@example.com">
                                        info@example.com
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:626997-4298">(626)997-4298</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Main End -->

            <!-- Footer CopyRight Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="text-center text-md-start">
                            <p>
                                &copy;
                                <span class="current-year">2023</span>
                                <span> Plantfy </span> Made with
                                <i class="lastudioicon-heart-1"></i>
                                by
                                <a href="https://hasthemes.com/">HasThemes</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="d-flex justify-content-center justify-content-md-end">
                            <li><a href="term-of-use.html">Term of user</a></li>
                            <li><a href="#">Payment refund</a></li>
                            <li><a href="#">Accessibility</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer CopyRight End -->
        </div>
    </footer>

    <!-- Footer End -->

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


<!-- Mirrored from htmldemo.net/plantfy/plantfy/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Aug 2023 21:00:52 GMT -->
</html>