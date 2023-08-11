<?php
include("./components/header.php");
 ?>

    <main>
        <!-- Slider Start -->
        <div class="slider-section home-2-slider-navigation slider-active">
            <div class="container-fluid custom-container">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <!-- Slider Item Start -->
                        <div class="slider-item home-2-slider-style swiper-slide d-flex align-items-center" style="
                                    background-image: url(assets/images/slider/slider-bg-2.jpg);
                                ">
                            <!-- Slider Content Start -->
                            <div class="home-2-slider-content-style-1">
                                <h4 class="home-2-slider-content-style-1__sub-title text-white">
                                    Design your home with passion
                                </h4>
                                <h2 class="home-2-slider-content-style-1__title text-white">
                                    Make your home green
                                </h2>
                                <ul class="home-1-slider-content-style-1__btns">
                                    <li class="button-01">
                                        <a class="home-2-slider-content-style-1__btn" href="allProducts.php">
                                            Shop now
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                        <!-- Slider Item End -->

                        <!-- Slider Item Start -->
                        <div class="slider-item home-2-slider-style swiper-slide d-flex align-items-center" style="
                                    background-image: url(assets/images/slider/slider-bg-3.jpg);
                                ">
                            <!-- Slider Content Start -->
                            <div class="home-2-slider-content-style-1">
                                <h4 class="home-2-slider-content-style-1__sub-title">
                                    Design your home with passion
                                </h4>
                                <h2 class="home-2-slider-content-style-1__title">
                                    House Plant & Office Plant
                                </h2>
                                <ul class="home-1-slider-content-style-1__btns">
                                    <li class="button-01">
                                        <a class="home-2-slider-content-style-1__btn" href="shop-fullwidth.html">
                                            Shop now
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                        <!-- Slider Item End -->
                    </div>

                    <div class="swiper-button-next">
                        <i class="lastudioicon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="lastudioicon-left-arrow"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider End -->

        <!-- Quick Shop End -->
        <div class="quick-shop-section section-padding-1">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">Quick Shop</h3>
                </div>
                <!-- Section Title End -->

                <!-- Quick Shop Wrapper Start -->
                <div class="quick-shop-wrapper quick-shop-active">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Quick Shop Item Start -->
                            <?php
                             $query = $pdo->query("Select * from categories");
                             $result = $query->fetchAll(PDO::FETCH_ASSOC);
                             foreach($result as $categories){
                            ?>
                            <a href="shop-fullwidth.php?id=<?php echo $categories['categoryID'] ?>">
                                   <div class="quick-shop-item swiper-slide js-scroll ShortFadeInUp">
                                <div class="quick-shop-item__image">
                                    <a href="shop-fullwidth.php?id=<?php echo $categories['categoryID'] ?>">
                                        <img src="assets/images/quick-shop/<?php echo $categories['categoryImage'] ?>" alt="Quick Shop" width="203" height="226" loading="lazy" />
                                    </a>
                                </div>
                                <div class="quick-shop-item__content">
                                    <h4 class="quick-shop-item__title">
                                        <a href="shop-fullwidth.php?id=<?php echo $categories['categoryID'] ?>">
                                            <?php echo $categories['categoryName'] ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            </a>
                                <?php
                            }
                            ?>
                         
                            <!-- Quick Shop Item End -->
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
                <!-- Quick Shop Wrapper End -->
            </div>
        </div>
        <!-- Quick Shop End -->

        <!-- Popular Product Start -->
        <div class="popular-product-section section-padding-1">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">Some of our products</h3>
                </div>
                <!-- Section Title End -->

                <!-- Product Wrapper Start -->
                <!-- <div class="product-wrapper"> -->
                    <div class="row">
                       
                            <!-- Single product Start -->
                            <?php
                            $query = $pdo->query("Select * from products limit 4");
                            $result = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach($result as $plants){
                                ?>
                                 <div class="col-lg-3 col-sm-6">
                                <div class="single-product js-scroll ShortFadeInUp scrolled">
                                    <a href="product-single.php?id=<?php echo $plants['productID'] ?>">
                                <div class="single-product__thumbnail">
                                    <div class="single-product__thumbnail--meta-3">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                            <!-- <i
                                                    class="lastudioicon-heart-2"
                                                ></i> -->
                                        </a>
                                    </div>
                                    <!-- <div class="single-product__thumbnail--badge onsale">
                                        Sale
                                    </div> -->
                                    <div class="single-product__thumbnail--holder">
                                        <a href="product-single.php?id=<?php echo $plants['productID'] ?>">
                                            
                                            <img src="assets/images/products/<?php echo $plants['productImage'] ?>" alt="Product" width="344" height="370" loading="lazy" />
                                            <!-- <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" loading="lazy" /> -->
                                        </a>
                                    </div>
                                    <div class="single-product__thumbnail--meta-2">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                            <i
                                                    class="lastudioicon-shopping-cart-3"
                                                ></i>
                                        </a>
                                        <!-- <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                            <i
                                                    class="lastudioicon-ic_compare_arrows_24px"
                                                ></i>
                                        </a> -->
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
                                        <a href="product-single.php?id=<?php echo $plants['productID'] ?>">
                                            <?php echo $plants['productName'] ?>
                                        </a>
                                    </h3>
                                    <div class="single-product__info--price">
                                        <ins>$<?php echo $plants['productPrice'] ?></ins>
                                    </div>
                                </div>
                                </a>
                            </div>
                            </div>
                                <?php
                            }
                            ?>
                            
                            <!-- Single product End -->
                  
                            
                        </div>
                    <!-- </div> -->
                </div>
                <!-- Product Wrapper End -->

                <!-- Product btn End -->
                <div class="text-center js-scroll ShortFadeInUp">
                    <a href="allProducts.php" class="btn product-view-btn">
                        View More Items
                        </a>
                    
                </div>
                <!-- Product btn End -->
            </div>
        </div>
        <!-- Show Some Product End -->
        <hr style="color:white"></hr>
        <!-- Video Promotion Start -->
        <div class="video-promotion-section" style="background-image: url(assets/images/background-2.jpg)">
            <div class="container-fluid custom-container">
                <!-- Video Promotion Content Start -->
                <div class="video-promotion-content text-center js-scroll ShortFadeInUp">
                    <h4 class="video-promotion-content__sub-title">
                        Video promotion
                    </h4>
                    <h2 class="video-promotion-content__title">
                        Let make a Fresh & Green Life
                    </h2>
                    <a class="video-promotion-content__video glightbox" href="https://www.youtube.com/watch?v=a4nZvjscLRE">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="512" height="512">
                            <path d="M24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13V38.13zM56.34 66.35C51.4 63.33 45.22 63.21 40.17 66.04C35.13 68.88 32 74.21 32 80V432C32 437.8 35.13 443.1 40.17 445.1C45.22 448.8 51.41 448.7 56.34 445.7L344.3 269.7C349.1 266.7 352 261.6 352 256C352 250.4 349.1 245.3 344.3 242.3L56.34 66.35z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
                <!-- Video Promotion Content End -->
            </div>
        </div>
        <!-- Video Promotion End -->

        <!-- Blog Start -->
        <div class="blog-section section-padding">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <hr class="section-title__title"></hr>
                </div>
                <!-- Section Title End -->

                <!-- Blog Wrapper Start -->
                <div class="blog-wrapper blog-active">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Blog Item Start -->
                            <div class="blog-item-3 swiper-slide js-scroll ShortFadeInUp">
                                <div class="blog-item-3__image">
                                    <a href="about.php">
                                        <img src="assets/images/blog/blog-1.jpg" alt="Blog" width="462" height="531" loading="lazy" />
                                    </a>
                                </div>
                                <div class="blog-item-3__content">
                                    <div class="blog-item-3__inner">

                                        <h2 class="blog-item-3__content--title">
                                            <a href="about.php">
                                                About Us
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Item End -->

                            <!-- Blog Item Start -->
                            <div class="blog-item-3 swiper-slide js-scroll ShortFadeInUp">
                                <div class="blog-item-3__image">
                                    <a href="contact-us.php">
                                        <img src="assets/images/blog/blog-2.jpg" alt="Blog" width="462" height="531" loading="lazy" />
                                    </a>
                                </div>
                                <div class="blog-item-3__content">
                                    <div class="blog-item-3__inner">
                                        <h4 class="blog-item-3__content--title">
                                            <a href="contact-us.php">
                                                Contact US
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Item End -->

                            <!-- Blog Item Start -->
                            <div class="blog-item-3 swiper-slide js-scroll ShortFadeInUp">
                                <div class="blog-item-3__image">
                                    <a href="faqs.php">
                                        <img src="assets/images/blog/blog-3.jpg" alt="Blog" width="462" height="531" loading="lazy" />
                                    </a>
                                </div>
                                <div class="blog-item-3__content">
                                    <div class="blog-item-3__inner">
                                        <h4 class="blog-item-3__content--title">
                                            <a href="faqs.php">
                                                FAQ's
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Item End -->
                        </div>
                    </div>
                </div>
                <!-- Blog Wrapper End -->           
            </div>
        </div>
        <!-- Blog End -->

        <!-- our info Start -->
        <div class="our-info-section section-padding">
            <div class="container-fluid custom-container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-md-4 col-sm-6">
                        <!-- our Info Item Start -->
                        <div class="our-info-item text-center js-scroll ShortFadeInUp">
                            <h3 class="our-info-item__title">
                                Opening Hour
                            </h3>
                            <p class="our-info-item__info">
                                9:00 AM - 18:00 PM | Mon - Sat
                            </p>
                        </div>
                        <!-- our Info Item End -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- our Info Item Start -->
                        <div class="our-info-item text-center js-scroll ShortFadeInUp">
                            <h3 class="our-info-item__title">
                                Our location
                            </h3>
                            <p class="our-info-item__info">
                                4517 Washington Ave. Manchester, Kentucky
                                39495
                            </p>
                        </div>
                        <!-- our Info Item End -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- our Info Item Start -->
                        <div class="our-info-item text-center js-scroll ShortFadeInUp">
                            <h3 class="our-info-item__title">Hotline</h3>
                            <p class="our-info-item__info">(626)997-4298</p>
                        </div>
                        <!-- our Info Item End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- our info End -->
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


<!-- Mirrored from htmldemo.net/plantfy/plantfy/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Aug 2023 21:00:32 GMT -->
</html>