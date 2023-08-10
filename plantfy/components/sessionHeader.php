<?php
include("./php/query.php");
if(!isset($_SESSION['USER'])){
redirectWindow('login.php');
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/plantfy/plantfy/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Aug 2023 20:59:57 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Plants Nest - Plants Store Website</title>

    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Plantfy - Plants Store Website Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet" />

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lastudioicon.css" />

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/nice-select2.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>


<body>
    <!-- Header Start -->
    <header class="header bg-white header-height">
        <!-- Header Top Start -->
        <div class="header__top">
            <div class="container-fluid custom-container">
                <div class="header__top--wrapper justify-content-center">
                    <p>Free shipping order over $150</p>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Middle Start -->
        <div class="header__middle d-flex align-items-center">
            <div class="container-fluid custom-container">
                <div class="row">
                    <div class="col-md-4 d-none d-md-block">
                        <!-- Header Middle Search Start -->
                        <div class="header-mid-search">
                            <form action="#">
                                <div class="meta-search meta-search--dark">
                                    <input type="text" placeholder="Search products…" />
                                    <button aria-label="Search" aria-label="Search">
                                        <i class="lastudioicon-zoom-1"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- Header Middle Search Start -->
                    </div>
                    <div class="col-md-4 col-5">
                        <!-- Header Middle Logo Start -->
                        <div class="header-mid-logo text-md-center">
                            <a href="#">
                                <img src="assets/images/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- Header Middle Logo End -->
                    </div>
                    <div class="col-md-4 col-7">
                        <div class="d-flex justify-content-end align-items-center">
                            <!-- Header Middle Meta Start -->
                            <div class="header-mid-meta">
                                <ul class="header-mid-meta__item justify-content-end">
                                    <li>
                                        <a href="my-account.php" aria-label="My Account">
                                            <i class="lastudioicon-single-01-2"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" aria-label="Wishlist">
                                            <i class="lastudioicon-heart-2"></i>
                                            <span class="badge">03</span>
                                        </a>
                                    </li>
                                    <li>
                                        <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-label="Cart">
                                            <i class="lastudioicon-bag-20"></i>
                                            <span class="badge">03</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Middle Meta End -->

                            <!-- Header Middle Toggle Start -->
                            <div class="header-mid-toggle text-end d-lg-none">
                                <button class="header__main--toggle header__main--toggle-dark" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-label="Menu">
                                    <i class="lastudioicon-menu-4-2"></i>
                                </button>
                            </div>
                            <!-- Header Middle Toggle End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Middle End -->

        <!-- Header Main Start -->
        <div class="header__main-3 d-none d-lg-flex">
            <div class="container-fluid custom-container">
                <!-- Header Main Menu Start -->
                <div class="header__main-2-menu">
                    <!-- Menu Item List Start -->
                    <ul class="menu-items-list menu-items-list--3 menu-items-list--dark justify-content-center d-flex">
                        <li>
                            <!-- <a class="active" href="#">
                                Demos <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                            </a> -->
                                <li><a href="index.php">Home</a></li>
                        </li>
                        <li>
                            <!-- <a class="active" href="#">
                                Demos <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                            </a> -->
                                <li><a href="about.php">About Us</a></li>
                        </li>

                        <li>
                            <!-- <a class="active" href="#">
                                Demos <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                            </a> -->
                                <li><a href="contact-us.php">Contact Us</a></li>
                        </li>

                        <li>
                            <!-- <a class="active" href="#">
                                Demos <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                            </a> -->
                                <li><a href="my-account.php">Profile</a></li>
                        </li>

                        <li>
                            <!-- <a class="active" href="#">
                                Demos <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                            </a> -->
                                <li><a href="faqs.php">FAQs</a></li>
                        </li>

                        <li>
                            <!-- <a class="active" href="#">
                                Demos <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
                            </a> -->
                                <li><a href="term-of-use.php">term of use</a></li>
                        </li>
                                <!-- <li><a href="about.php">About us</a></li>
                                <li><a href="coming-soon.php">Coming Soon</a></li>
                                <li><a href="our-team.php">Our Team</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                                <li><a href="faqs.php">FAQ's</a></li>
                                <li><a href="term-of-use.php">term of use</a></li>
                                <li><a href="404.php">404 Page</a></li>
                                <li><a href="login-register.php">Login & Register</a></li>
                 -->
                        <li class="position-static">
                            <a href="#">Shop <i class="lastudioicon-down-arrow" aria-hidden="true"></i></a>
                            <div class="mega-menu mega-menu-width d-flex flex-wrap">
                                <div class="mega-menu-col">
                                    <h5 class="mega-menu-title">Shop Layout</h5>
                                    <ul class="">
                                        <li><a href="shop-fullwidth.php">Shop Fullwidth</a></li>
                                        <li><a href="shop-sidebar.php">Shop Sidebar</a></li>
                                        <li><a href="shop-masonry.php">Shop Masonry</a></li>
                                        <li><a href="shop-3-columns.php">Shop 03 Columns</a></li>
                                        <li><a href="shop-4-columns.php">Shop 04 Columns</a></li>
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
                                        <li><a href="my-account.php">My Account</a></li>
                                        <li><a href="cart.php">Cart</a></li>
                                        <li><a href="order-tracking.php">Order Tracking</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                        <li><a href="compare.php">Compare</a></li>
                                        <li><a href="empty-cart.php">Cart Empty</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="thank-you.php">Thank You</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <h5 class="mega-menu-title">Product Pages</h5>
                                    <ul class="">
                                        <li><a href="product-single.php">Product Simple</a></li>
                                        <li>
                                            <a href="product-single-variable.php">Product Variable</a>
                                        </li>
                                        <li>
                                            <a href="product-single-carousel.php">Product Carousel</a>
                                        </li>
                                        <li>
                                            <a href="product-single-affiliate.php">
                                                Product Affiliate
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-single-countdown.php">
                                                Product CountDown
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="position-static">
                            <a href="#">Collections <i class="lastudioicon-down-arrow" aria-hidden="true"></i></a>
                            <div class="mega-menu mega-menu--wrapper d-flex flex-wrap">
                                <div class="mega-menu__banner">
                                    <a href="#">
                                        <div class="mega-menu__banner--image">
                                            <img src="assets/images/megamenu-fashion-01.jpg" alt="Fashion Banner" width="470" height="475" />
                                        </div>
                                        <div class="mega-menu__banner--caption">
                                            <h4 class="caption-title">New Arrival</h4>
                                            <p class="caption-desc">Non curabitur gravida</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="mega-menu__content">
                                    <h4 class="mega-menu__content--title">Summer Collection 2023</h4>
                                    <div class="d-flex flex-wrap">
                                        <ul class="mega-menu__content--list">
                                            <li><a href="#">Dresses and jumpsuits</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">T-shirts and tops</a></li>
                                            <li><a href="#">Jackets and Suit Jackets</a></li>
                                            <li><a href="#">Cardigans and sweaters</a></li>
                                            <li><a href="#">Sweatshirts</a></li>
                                            <li><a href="#">Coats</a></li>
                                        </ul>
                                        <ul class="mega-menu__content--list">
                                            <li><a href="#">Trousers</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Skirts</a></li>
                                            <li><a href="#">Shorts</a></li>
                                            <li><a href="#">Bikinis and swimsuits</a></li>
                                            <li><a href="#">Sportswear</a></li>
                                            <li><a href="#">Underwear and lingerie</a></li>
                                            <li><a href="#">Pyjamas</a></li>
                                        </ul>
                                    </div>
                                    <div class="mt-auto">
                                        <ul class="mega-menu__info">
                                            <li><a href="#">info@exmple.com</a></li>
                                            <li><a href="#">(626)997-4298</a></li>
                                        </ul>
                                        <div class="mega-menu__social">
                                            <div class="mega-menu__social--lable">Connect with us</div>
                                            <ul class="mega-menu__social--social">
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
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">Blog <i class="lastudioicon-down-arrow" aria-hidden="true"></i></a>
                            <ul class="sub-menu">
                                <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                <li><a href="blog-left-sidebar.php">Blog Left Sidebar</a></li>
                                <li><a href="blog.php">Blog No Sidebar</a></li>
                                <li><a href="blog-single.php">Single Post</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- Menu Item List End -->
                </div>
                <!-- Header Main Menu Start -->
            </div>
        </div>
        <!-- Header Main End -->
    </header>

    <!-- Header End -->
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
                            <li><a href="about.php">About us</a></li>
                            <li><a href="coming-soon.php">Coming Soon</a></li>
                            <li><a href="our-team.php">Our Team</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li><a href="faqs.php">FAQ's</a></li>
                            <li><a href="term-of-use.php">term of use</a></li>
                            <li><a href="404.php">404 Page</a></li>
                            <li>
                                <a href="login-register.php">Login & Register</a>
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