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
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section" style="
                    background-image: url(assets/images/blog-page-header.jpg);
                ">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper breadcrumb-white text-center">
                    <h2 class="breadcrumb-wrapper__title">
                        Blog Right Sidebar
                    </h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Blog</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog Start -->
        <div class="blog-section section-padding">
            <div class="container-fluid custom-container">
                <div class="blog-row">
                    <div class="blog-col-1">
                        <!-- Blog Items Start -->
                        <div class="blog-items">
                            <!-- Blog Item Start -->
                            <div class="blog-item-2">
                                <div class="blog-item-2__image">
                                    <a href="blog-single.html">
                                        <img src="assets/images/blog/blog-1.jpg" alt="Blog" width="1012" height="557" />
                                    </a>
                                </div>
                                <div class="blog-item-2__content">
                                    <ul class="blog-item-2__content--meta">
                                        <li><span>May 25, 2023</span></li>
                                        <li>
                                            <span
                                                    >By
                                                    <a href="#">HasTheme</a>
                                                </span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-item-2__content--title">
                                        <a href="blog-single.html">
                                            Unveiling Nature's Green
                                            Superheroes
                                        </a>
                                    </h4>
                                    <p class="blog-item-2__content--description">
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Morbi
                                        tincidunt ornare massa eget egestas
                                        purus viverra. Vel risus commodo
                                        viverra maecenas.
                                    </p>
                                    <a class="blog-item-2__content--btn btn" href="blog-single.html">
                                        Read more
                                    </a>
                                </div>
                            </div>
                            <!-- Blog Item End -->

                            <!-- Blog Item Start -->
                            <div class="blog-item-2">
                                <div class="blog-item-2__image">
                                    <a href="blog-single.html">
                                        <img src="assets/images/blog/blog-2.jpg" alt="Blog" width="1012" height="557" />
                                    </a>
                                </div>
                                <div class="blog-item-2__content">
                                    <ul class="blog-item-2__content--meta">
                                        <li><span>May 25, 2023</span></li>
                                        <li>
                                            <span
                                                    >By
                                                    <a href="#"> HasTheme </a>
                                                </span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-item-2__content--title">
                                        <a href="blog-single.html">
                                            How Plants Can Boost Your
                                            Well-being
                                        </a>
                                    </h4>
                                    <p class="blog-item-2__content--description">
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Morbi
                                        tincidunt ornare massa eget egestas
                                        purus viverra. Vel risus commodo
                                        viverra maecenas.
                                    </p>
                                    <a class="blog-item-2__content--btn btn" href="blog-single.html">
                                        Read more
                                    </a>
                                </div>
                            </div>
                            <!-- Blog Item End -->

                            <!-- Blog Item Start -->
                            <div class="blog-item-2">
                                <div class="blog-item-2__image">
                                    <a href="blog-single.html">
                                        <img src="assets/images/blog/blog-3.jpg" alt="Blog" width="1012" height="557" />
                                    </a>
                                </div>
                                <div class="blog-item-2__content">
                                    <ul class="blog-item-2__content--meta">
                                        <li><span>May 25, 2023</span></li>
                                        <li>
                                            <span
                                                    >By <a href="#">HasTheme</a>
                                                </span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-item-2__content--title">
                                        <a href="blog-single.html">
                                            Exploring Exotic Plants from
                                            Around the World
                                        </a>
                                    </h4>
                                    <p class="blog-item-2__content--description">
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Morbi
                                        tincidunt ornare massa eget egestas
                                        purus viverra. Vel risus commodo
                                        viverra maecenas.
                                    </p>
                                    <a class="blog-item-2__content--btn btn" href="blog-single.html">
                                        Read more
                                    </a>
                                </div>
                            </div>
                            <!-- Blog Item End -->

                            <!-- Blog Item Start -->
                            <div class="blog-item-2">
                                <div class="blog-item-2__image">
                                    <a href="blog-single.html">
                                        <img src="assets/images/blog/blog-4.jpg" alt="Blog" width="1012" height="557" />
                                    </a>
                                </div>
                                <div class="blog-item-2__content">
                                    <ul class="blog-item-2__content--meta">
                                        <li><span>May 25, 2023</span></li>
                                        <li>
                                            <span
                                                    >By
                                                    <a href="#">HasTheme</a>
                                                </span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-item-2__content--title">
                                        <a href="blog-single.html">
                                            A Journey Through the Life of a
                                            Plant
                                        </a>
                                    </h4>
                                    <p class="blog-item-2__content--description">
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Morbi
                                        tincidunt ornare massa eget egestas
                                        purus viverra. Vel risus commodo
                                        viverra maecenas.
                                    </p>
                                    <a class="blog-item-2__content--btn btn" href="blog-single.html">
                                        Read more
                                    </a>
                                </div>
                            </div>
                            <!-- Blog Item End -->
                        </div>
                        <!-- Blog Items End -->

                        <!-- Pagination Start -->
                        <div class="paginations">
                            <ul class="paginations-list-2">
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
                                    <a href="#">11</a>
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

                    <div class="blog-col-2">
                        <!-- Widget Wrapper Start -->
                        <div class="blog-widget-wrapper">
                            <!-- Search Widget Start -->
                            <div class="blog-widget-item">
                                <form action="#">
                                    <div class="blog-widget-search">
                                        <input type="text" placeholder="Search post..." />
                                        <button aria-label="Search">
                                            <i
                                                    class="lastudioicon-zoom-1"
                                                ></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- Search Widget End -->

                            <!-- Author Widget Start -->
                            <div class="blog-widget-item">
                                <h4 class="blog-widget-item__title">
                                    About the author
                                </h4>
                                <div class="blog-widget-author-box">
                                    <div class="blog-widget-author-box__image">
                                        <img src="assets/images/user/user-1.jpg" alt="User" width="70" height="70" />
                                    </div>
                                    <div class="blog-widget-author-box__content">
                                        <p>
                                            Proin volutpat vitae libero at
                                            tincidunt. Maecenas sapien
                                            lectus, vehicula vel euismod sed
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Author Widget End -->

                            <!-- Categories Widget Start -->
                            <div class="blog-widget-item">
                                <h4 class="blog-widget-item__title">
                                    Categories
                                </h4>
                                <div class="blog-widget-list">
                                    <ul class="blog-widget-list__categories">
                                        <li><a href="#"> Big Size </a></li>
                                        <li><a href="#">Cake</a></li>
                                        <li><a href="#">Candles</a></li>
                                        <li><a href="#">Cosmetic</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Organic</a></li>
                                        <li><a href="#">Plant</a></li>
                                        <li><a href="#">Watch</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Categories Widget End -->

                            <!-- Popular Posts Widget Start -->
                            <div class="blog-widget-item">
                                <h4 class="blog-widget-item__title">
                                    Popular Posts
                                </h4>

                                <div class="blog-widget-post">
                                    <ul class="blog-widget-post__list">
                                        <!-- Blog Widget Post Item Start -->
                                        <li class="blog-widget-post-item">
                                            <div class="blog-widget-post-item__thumbnail">
                                                <a href="blog-single.html">
                                                    <img src="assets/images/blog/blog-2.jpg" alt="Blog" width="70" height="81" />
                                                </a>
                                            </div>
                                            <div class="blog-widget-post-item__content">
                                                <p class="blog-widget-post-item__meta">
                                                    July 20, 2024
                                                </p>
                                                <h4 class="blog-widget-post-item__title">
                                                    <a href="blog-single.html">
                                                        How Plants Can Boost
                                                        Your Well-being
                                                    </a>
                                                </h4>
                                            </div>
                                        </li>
                                        <!-- Blog Widget Post Item End -->

                                        <!-- Blog Widget Post Item Start -->
                                        <li class="blog-widget-post-item">
                                            <div class="blog-widget-post-item__thumbnail">
                                                <a href="blog-single.html">
                                                    <img src="assets/images/blog/blog-5.jpg" alt="Blog" width="70" height="81" />
                                                </a>
                                            </div>
                                            <div class="blog-widget-post-item__content">
                                                <p class="blog-widget-post-item__meta">
                                                    July 20, 2024
                                                </p>
                                                <h4 class="blog-widget-post-item__title">
                                                    <a href="blog-single.html">
                                                        Exploring the Joys
                                                        of Growing Your Own
                                                        Food
                                                    </a>
                                                </h4>
                                            </div>
                                        </li>
                                        <!-- Blog Widget Post Item End -->

                                        <!-- Blog Widget Post Item Start -->
                                        <li class="blog-widget-post-item">
                                            <div class="blog-widget-post-item__thumbnail">
                                                <a href="blog-single.html">
                                                    <img src="assets/images/blog/blog-6.jpg" alt="Blog" width="70" height="81" />
                                                </a>
                                            </div>
                                            <div class="blog-widget-post-item__content">
                                                <p class="blog-widget-post-item__meta">
                                                    July 20, 2024
                                                </p>
                                                <h4 class="blog-widget-post-item__title">
                                                    <a href="blog-single.html">
                                                        Hardy Beauties for
                                                        Every Home
                                                    </a>
                                                </h4>
                                            </div>
                                        </li>
                                        <!-- Blog Widget Post Item End -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Popular Posts Widget End -->

                            <!-- Instagram Widget Start -->
                            <div class="blog-widget-item">
                                <h4 class="blog-widget-item__title">
                                    Instagram
                                </h4>
                                <div class="blog-widget-instagram">
                                    <div class="row g-2 g-xxl-4">
                                        <div class="col-4">
                                            <div class="blog-widget-instagram-item">
                                                <a href="#">
                                                    <div class="blog-widget-instagram-item__image">
                                                        <img src="assets/images/instagram/instagram-01.jpg" alt="Instagram" width="90" height="90" />
                                                    </div>
                                                    <div class="blog-widget-instagram-item__icon">
                                                        <i
                                                                class="lastudioicon-b-instagram"
                                                            ></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="blog-widget-instagram-item">
                                                <a href="#">
                                                    <div class="blog-widget-instagram-item__image">
                                                        <img src="assets/images/instagram/instagram-02.jpg" alt="Instagram" width="90" height="90" />
                                                    </div>
                                                    <div class="blog-widget-instagram-item__icon">
                                                        <i
                                                                class="lastudioicon-b-instagram"
                                                            ></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="blog-widget-instagram-item">
                                                <a href="#">
                                                    <div class="blog-widget-instagram-item__image">
                                                        <img src="assets/images/instagram/instagram-03.jpg" alt="Instagram" width="90" height="90" />
                                                    </div>
                                                    <div class="blog-widget-instagram-item__icon">
                                                        <i
                                                                class="lastudioicon-b-instagram"
                                                            ></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="blog-widget-instagram-item">
                                                <a href="#">
                                                    <div class="blog-widget-instagram-item__image">
                                                        <img src="assets/images/instagram/about-instagram-1.jpg" alt="Instagram" width="90" height="90" />
                                                    </div>
                                                    <div class="blog-widget-instagram-item__icon">
                                                        <i
                                                                class="lastudioicon-b-instagram"
                                                            ></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="blog-widget-instagram-item">
                                                <a href="#">
                                                    <div class="blog-widget-instagram-item__image">
                                                        <img src="assets/images/instagram/about-instagram-4.jpg" alt="Instagram" width="90" height="90" />
                                                    </div>
                                                    <div class="blog-widget-instagram-item__icon">
                                                        <i
                                                                class="lastudioicon-b-instagram"
                                                            ></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="blog-widget-instagram-item">
                                                <a href="#">
                                                    <div class="blog-widget-instagram-item__image">
                                                        <img src="assets/images/instagram/about-instagram-2.jpg" alt="Instagram" width="90" height="90" />
                                                    </div>
                                                    <div class="blog-widget-instagram-item__icon">
                                                        <i
                                                                class="lastudioicon-b-instagram"
                                                            ></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Instagram Widget End -->

                            <!-- Social Widget Start -->
                            <div class="blog-widget-item">
                                <h4 class="blog-widget-item__title">
                                    Follow us
                                </h4>
                                <ul class="blog-widget-social">
                                    <li>
                                        <a href="#" aria-label="twitter">
                                            <i
                                                    class="lastudioicon-b-twitter"
                                                ></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="facebook">
                                            <i
                                                    class="lastudioicon-b-facebook"
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
                            <!-- Social Widget End -->
                        </div>
                        <!-- Widget Wrapper End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
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


<!-- Mirrored from htmldemo.net/plantfy/plantfy/blog-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Aug 2023 21:01:02 GMT -->
</html>