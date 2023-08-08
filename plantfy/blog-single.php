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
        <!-- Breadcrumbs Start -->
        <div class="single-breadcrumbs">
            <div class="container-fluid custom-container">
                <ul class="single-breadcrumbs-list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog-right-sidebar.html">Blog</a></li>
                    <li><a href="blog-right-sidebar.html">Fashion </a></li>
                    <li>
                        <span>
                                Exploring the Joys of Growing Your Own Food
                            </span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Blog Single Start -->
        <div class="blog-section section-padding-1">
            <div class="container-fluid blog-single-container">
                <!-- Blog Single Start -->
                <div class="blog-single">
                    <ul class="blog-single__category justify-content-center">
                        <li><a href="#">Plant</a></li>
                    </ul>
                    <h1 class="blog-single__title text-center">
                        Exploring the Joys of Growing Your Own Food
                    </h1>
                    <ul class="blog-single__meta justify-content-center">
                        <li><span>July 11, 2024</span></li>
                        <li><span>By HasTheme</span></li>
                    </ul>
                    <div class="blog-single__image">
                        <img src="assets/images/blog/blog-5.jpg" alt="Blog" width="1170" height="539" />
                    </div>
                    <div class="blog-single__content blog-single-wrapper">
                        <h2 class="blog-single__heading">
                            1990s fashion: A brief history of what we wore
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Morbi tincidunt ornare massa eget egestas purus
                            viverra. Vel risus commodo viverra maecenas.
                            Eget gravida cum sociis natoque. Donec et odio
                            pellentesque diam volutpat commodo sed.
                            Fringilla urna porttitor rhoncus dolor purus
                            non.
                        </p>
                        <p>
                            Aliquam ut porttitor leo a diam sollicitudin
                            tempor id. Sit amet commodo nulla facilisi
                            nullam vehicula ipsum a arcu. Placerat orci
                            nulla pellentesque dignissim enim sit amet
                            venenatis urna. Mattis nunc sed blandit libero.
                            Magna fermentum iaculis eu non diam phasellus
                            vestibulum. Viverra maecenas accumsan lacus vel
                            facilisis volutpat est.
                        </p>
                        <p>
                            Volutpat commodo sed egestas egestas fringilla
                            phasellus faucibus scelerisque. Aenean vel elit
                            scelerisque mauris pellentesque pulvinar
                            pellentesque habitant morbi.
                        </p>
                        <figure>
                            <img src="assets/images/blog/content-single-post-1a.jpg" alt="Blog" width="1170" height="610" />
                        </figure>
                        <h2 class="blog-single__heading">
                            Metus dictum at tempor commodo
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Morbi tincidunt ornare massa eget egestas purus
                            viverra. Vel risus commodo viverra maecenas.
                            Eget gravida cum sociis natoque. Donec et odio
                            pellentesque diam volutpat commodo sed.
                            Fringilla urna porttitor rhoncus dolor purus
                            non.
                        </p>
                        <p>
                            Aliquam ut porttitor leo a diam sollicitudin
                            tempor id. Sit amet commodo nulla facilisi
                            nullam vehicula ipsum a arcu. Placerat orci
                            nulla pellentesque dignissim enim sit amet
                            venenatis urna. Mattis nunc sed blandit libero.
                            Magna fermentum iaculis eu non diam phasellus
                            vestibulum. Viverra maecenas accumsan lacus vel
                            facilisis volutpat est.
                        </p>

                        <blockquote>
                            <p>
                                Dictumst quisque sagittis purus sit amet
                                volutpat consequat mauris nunc. Quis
                                eleifend quam adipiscing vitae proin
                                sagittis nisl.
                            </p>
                            <cite>Larry Elliot <em>CEO HasTheme</em></cite>
                        </blockquote>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Morbi tincidunt ornare massa eget egestas purus
                            viverra. Vel risus commodo viverra maecenas.
                            Eget gravida cum sociis natoque. Donec et odio
                            pellentesque diam volutpat commodo sed.
                            Fringilla urna porttitor rhoncus dolor purus
                            non.
                        </p>
                        <p>
                            Aliquam ut porttitor leo a diam sollicitudin
                            tempor id. Sit amet commodo nulla facilisi
                            nullam vehicula ipsum a arcu. Placerat orci
                            nulla pellentesque dignissim enim sit amet
                            venenatis urna. Mattis nunc sed blandit libero.
                            Magna fermentum iaculis eu non diam phasellus
                            vestibulum. Viverra maecenas accumsan lacus vel
                            facilisis volutpat est.
                        </p>
                    </div>

                    <div class="blog-single-meta">
                        <div class="blog-single-meta__col">
                            <div class="blog-single-meta__title">
                                Share with
                            </div>
                            <ul class="blog-single-meta__item">
                                <li><a href="#">Facebook </a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">LinkedIn</a></li>
                            </ul>
                        </div>
                        <div class="blog-single-meta__col justify-content-md-end">
                            <div class="blog-single-meta__title">Tags:</div>
                            <ul class="blog-single-meta__item">
                                <li><a href="#">Design,</a></li>
                                <li><a href="#">Fashion,</a></li>
                                <li><a href="#">Lifestyle,</a></li>
                                <li><a href="#">Trend</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="blog-single__comment blog-single-wrapper">
                        <!-- blog Comment Start -->
                        <div class="blog-comment">
                            <h3 class="comment-title">
                                3 review for Product Simple
                            </h3>

                            <!-- Comment Items Start -->
                            <ul class="comment-items">
                                <li>
                                    <!-- Comment Item Start -->
                                    <div class="comment-item">
                                        <div class="comment-item__author">
                                            <img src="assets/images/user/user-1.jpg" alt="Author" width="90" height="90" />
                                        </div>
                                        <div class="comment-item__content">
                                            <p class="comment-item__description">
                                                I have been impressed with
                                                the urgency of doing.
                                                Knowing is not enough; we
                                                must apply. Being willing is
                                                not enough; we must do.
                                            </p>
                                            <p class="comment-item__meta">
                                                <strong>HasTheme</strong>
                                                - June 3, 2024
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Comment Item End -->
                                </li>

                                <li>
                                    <!-- Comment Item Start -->
                                    <div class="comment-item">
                                        <div class="comment-item__author">
                                            <img src="assets/images/user/user-2.jpg" alt="Author" width="90" height="90" />
                                        </div>
                                        <div class="comment-item__content">
                                            <p class="comment-item__description">
                                                Aliquam ut porttitor leo a
                                                diam sollicitudin tempor id.
                                                Sit amet commodo nulla
                                                facilisi nullam vehicula
                                                ipsum a arcu. Placerat orci
                                                nulla pellentesque dignissim
                                                enim sit amet venenatis
                                                urna.
                                            </p>
                                            <p class="comment-item__meta">
                                                <strong>HasTheme</strong>
                                                - June 3, 2024
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Comment Item End -->

                                    <!-- Comment Reply Start -->
                                    <ul class="comment-reply">
                                        <li>
                                            <!-- Comment Item Start -->
                                            <div class="comment-item">
                                                <div class="comment-item__author">
                                                    <img src="assets/images/user/user-3.jpg" alt="Author" width="50" height="50" />
                                                </div>
                                                <div class="comment-item__content">
                                                    <p class="comment-item__description">
                                                        Aliquam ut porttitor
                                                        leo a diam
                                                        sollicitudin tempor
                                                        id. Sit amet commodo
                                                        nulla facilisi
                                                        nullam vehicula
                                                        ipsum a arcu.
                                                        Placerat orci nulla
                                                        pellentesque
                                                        dignissim enim sit
                                                        amet venenatis urna.
                                                    </p>
                                                    <p class="comment-item__meta">
                                                        <strong
                                                                >HasTheme</strong>
                                                        - June 3, 2024
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Comment Item End -->

                                            <!-- Comment Reply Start -->
                                            <ul class="comment-reply">
                                                <li>
                                                    <!-- Comment Item Start -->
                                                    <div class="comment-item">
                                                        <div class="comment-item__author">
                                                            <img src="assets/images/user/user-4.jpg" alt="Author" width="50" height="50" />
                                                        </div>
                                                        <div class="comment-item__content">
                                                            <p class="comment-item__description">
                                                                Aliquam ut
                                                                porttitor
                                                                leo a diam
                                                                sollicitudin
                                                                tempor id.
                                                                Sit amet
                                                                commodo
                                                                nulla
                                                                facilisi
                                                                nullam
                                                                vehicula
                                                                ipsum a
                                                                arcu.
                                                            </p>
                                                            <p class="comment-item__meta">
                                                                <strong
                                                                        >HasTheme</strong>
                                                                - June 3,
                                                                2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- Comment Item End -->
                                                </li>

                                                <li>
                                                    <!-- Comment Item Start -->
                                                    <div class="comment-item">
                                                        <div class="comment-item__author">
                                                            <img src="assets/images/user/user-2.jpg" alt="Author" width="50" height="50" />
                                                        </div>
                                                        <div class="comment-item__content">
                                                            <p class="comment-item__description">
                                                                Aliquam ut
                                                                porttitor
                                                                leo a diam
                                                                sollicitudin
                                                                tempor id.
                                                            </p>
                                                            <p class="comment-item__meta">
                                                                <strong
                                                                        >HasTheme</strong>
                                                                - June 3,
                                                                2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- Comment Item End -->
                                                </li>
                                            </ul>
                                            <!-- Comment Reply End -->
                                        </li>

                                        <li>
                                            <!-- Comment Item Start -->
                                            <div class="comment-item">
                                                <div class="comment-item__author">
                                                    <img src="assets/images/user/user-4.jpg" alt="Author" width="50" height="50" />
                                                </div>
                                                <div class="comment-item__content">
                                                    <p class="comment-item__description">
                                                        Aliquam ut porttitor
                                                        leo a diam
                                                        sollicitudin tempor
                                                        id. Sit amet commodo
                                                        nulla facilisi
                                                        nullam vehicula
                                                        ipsum a arcu.
                                                        Placerat orci nulla
                                                        pellentesque
                                                        dignissim enim sit
                                                        amet venenatis urna.
                                                    </p>
                                                    <p class="comment-item__meta">
                                                        <strong
                                                                >HasTheme</strong>
                                                        - June 3, 2024
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Comment Item End -->
                                        </li>
                                    </ul>
                                    <!-- Comment Reply End -->
                                </li>

                                <li>
                                    <!-- Comment Item Start -->
                                    <div class="comment-item">
                                        <div class="comment-item__author">
                                            <img src="assets/images/user/user-3.jpg" alt="Author" width="90" height="90" />
                                        </div>
                                        <div class="comment-item__content">
                                            <div class="comment-item__rating">
                                                <span class="star-rating">
                                                        <span
                                                            style="width: 80%"
                                                        ></span>
                                                </span>
                                            </div>
                                            <p class="comment-item__description">
                                                Fringed jacquard cardigan
                                            </p>
                                            <p class="comment-item__meta">
                                                <strong>HasTheme</strong>
                                                - June 3, 2024
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Comment Item End -->
                                </li>
                            </ul>
                            <!-- Comment Items End -->
                        </div>
                        <!-- blog Comment End -->

                        <!-- blog Comment Form Start -->
                        <div class="blog-comment-form">
                            <h3 class="comment-title">Leave a Reply</h3>

                            <form action="#">
                                <!-- comment Form Start -->
                                <div class="comment-form">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <textarea class="single-form__input" placeholder="Your Comment Here..."></textarea>
                                    </div>
                                    <!-- Single Form Start -->

                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input type="text" class="single-form__input" placeholder="Name (required)" />
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input type="email" class="single-form__input" placeholder="Email" />
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input type="email" class="single-form__input" placeholder="Website" />
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                    </div>

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="checkbox" name="save" id="save" />
                                        <label class="single-form__label checkbox-label" for="save">
                                            <span></span>
                                            Save my name, email, and website
                                            in this browser for the next
                                            time I comment.
                                        </label>
                                    </div>
                                    <!-- Single Form Start -->

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button class="single-form__btn btn">
                                            Post Comment
                                        </button>
                                    </div>
                                    <!-- Single Form Start -->
                                </div>
                                <!-- comment Form End -->
                            </form>
                        </div>
                        <!-- blog Comment Form End -->
                    </div>
                </div>
                <!-- Blog Single End -->
            </div>
        </div>
        <!-- Blog Single End -->

        <!-- Related Blog Start -->
        <div class="related-blog section-padding">
            <div class="container-fluid related-container">
                <!-- Related Title Start -->
                <div class="related-title text-center">
                    <h2 class="related-title__title">Related Post</h2>
                </div>
                <!-- Related Title End -->

                <div class="related-blog-row">
                    <div class="related-blog-col">
                        <!-- Related Blog Item End -->
                        <div class="related-blog-item">
                            <div class="related-blog-item__image">
                                <a href="blog-single.html">
                                    <img src="assets/images/blog/blog-1.jpg" alt="Blog" width="507" height="304" />
                                </a>
                            </div>
                            <div class="related-blog-item__content">
                                <ul class="related-blog-item__category">
                                    <li><a href="#">Plant</a></li>
                                </ul>
                                <h3 class="related-blog-item__title">
                                    <a href="blog-single.html">
                                        Unveiling Nature's Green Superheroes
                                    </a>
                                </h3>
                                <ul class="related-blog-item__meta">
                                    <li><span>July 20, 2024 </span></li>
                                    <li>
                                        <span>
                                                by
                                                <a href="#">HasTheme</a>
                                            </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Related Blog Item End -->
                    </div>
                    <div class="related-blog-col">
                        <!-- Related Blog Item End -->
                        <div class="related-blog-item">
                            <div class="related-blog-item__image">
                                <a href="blog-single.html">
                                    <img src="assets/images/blog/blog-6.jpg" alt="Blog" width="507" height="304" />
                                </a>
                            </div>
                            <div class="related-blog-item__content">
                                <ul class="related-blog-item__category">
                                    <li><a href="#">Plant</a></li>
                                </ul>
                                <h3 class="related-blog-item__title">
                                    <a href="blog-single.html">
                                        Hardy Beauties for Every Home
                                    </a>
                                </h3>
                                <ul class="related-blog-item__meta">
                                    <li><span>July 20, 2024 </span></li>
                                    <li>
                                        <span>
                                                by
                                                <a href="#">HasTheme</a>
                                            </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Related Blog Item End -->
                    </div>
                    <div class="related-blog-col">
                        <!-- Related Blog Item End -->
                        <div class="related-blog-item">
                            <div class="related-blog-item__image">
                                <a href="blog-single.html">
                                    <img src="assets/images/blog/blog-3.jpg" alt="Blog" width="507" height="304" />
                                </a>
                            </div>
                            <div class="related-blog-item__content">
                                <ul class="related-blog-item__category">
                                    <li>
                                        <a href="#">Plant</a>
                                    </li>
                                </ul>
                                <h3 class="related-blog-item__title">
                                    <a href="blog-single.html">
                                        A Journey Through the Life of a
                                        Plant
                                    </a>
                                </h3>
                                <ul class="related-blog-item__meta">
                                    <li><span>July 20, 2024 </span></li>
                                    <li>
                                        <span>
                                                by
                                                <a href="#">HasTheme</a>
                                            </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Related Blog Item End -->
                    </div>
                </div>

                <!-- Product View all Button Start -->
                <div class="text-center">
                    <a href="#" class="btn product-view-btn">
                        View all products
                    </a>
                </div>
                <!-- Product View all Button End -->
            </div>
        </div>
        <!-- Related Blog End -->
    </main>

    <?php
  include("./components/footer.php");
  ?>