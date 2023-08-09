<?php
include("./components/header.php");
?>


    <!-- Cart Sidebar Start -->
    <!-- Cart Offcanvas Start -->
   
    <!-- Cart Offcanvas End -->

    <!-- Cart Sidebar End -->
    <main>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">
                        Shop 03 Columns
                    </h2>
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
                <!-- Shop Filter Start -->
                <div class="shop-filter">
                    <!-- Shop Filter Default Start -->
                    <div class="shop-filter-default justify-content-center">
                        <!-- Shop Filter Dropdown Start -->
                        <div class="shop-filter-dropdown dropdown">
                            <button class="shop-filter-dropdown__btn" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <span class="text">Category</span>
                                <span class="icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="10"
                                            viewBox="0 0 10 6"
                                        >
                                            <path
                                                d="m0 0 5 6 5-6Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                            </button>
                            <!-- widget Item Start -->
                            <div class="widget-item dropdown-menu">
                                <div class="widget-item__filter category-filter">
                                    <ul class="widget-item__list category" id="accordionCategory">
                                        <li>
                                            <input type="checkbox" id="category-1" />
                                            <label for="category-1">
                                                <span></span>Accessories</label>
                                        </li>
                                        <li class="">
                                            <input type="checkbox" id="category-2" />
                                            <label for="category-2">
                                                <span></span>Baby</label>

                                            <button class="narrow collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Baby">
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
                                                <span></span>Big Size</label>

                                            <button class="narrow collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#BigSize">
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
                            <!-- widget Item End -->
                        </div>
                        <!-- Shop Filter Dropdown End -->

                        <!-- Shop Filter Dropdown Start -->
                        <div class="shop-filter-dropdown dropdown">
                            <button class="shop-filter-dropdown__btn" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <span class="text">By Brand</span>
                                <span class="icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="10"
                                            viewBox="0 0 10 6"
                                        >
                                            <path
                                                d="m0 0 5 6 5-6Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                            </button>
                            <!-- widget Item Start -->
                            <div class="widget-item dropdown-menu">
                                <div class="widget-item__filter">
                                    <ul class="widget-item__list-2">
                                        <li>
                                            <a href="#">Forever 21</a>
                                        </li>
                                        <li><a href="#">Mango</a></li>
                                        <li><a href="#">Omens</a></li>
                                        <li><a href="#">Zara</a></li>
                                        <li><a href="#">Plantfy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget Item End -->
                        </div>
                        <!-- Shop Filter Dropdown End -->

                        <!-- Shop Filter Dropdown Start -->
                        <div class="shop-filter-dropdown dropdown">
                            <button class="shop-filter-dropdown__btn" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <span class="text">By Price</span>
                                <span class="icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="10"
                                            viewBox="0 0 10 6"
                                        >
                                            <path
                                                d="m0 0 5 6 5-6Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                            </button>
                            <!-- widget Item Start -->
                            <div class="widget-item dropdown-menu">
                                <div class="widget-item__filter">
                                    <ul class="widget-item__list price">
                                        <li>
                                            <input type="checkbox" id="price-1" />
                                            <label for="price-1">
                                                <span></span>$10.00 -
                                                $30.00</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="price-2" />
                                            <label for="price-2">
                                                <span></span>$30.00 -
                                                $50.00</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="price-3" />
                                            <label for="price-3">
                                                <span></span>$50.00 -
                                                $70.00</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="price-4" />
                                            <label for="price-4">
                                                <span></span>$70.00 -
                                                $100.00</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget Item End -->
                        </div>
                        <!-- Shop Filter Dropdown End -->

                        <!-- Shop Filter Dropdown Start -->
                        <div class="shop-filter-dropdown dropdown">
                            <button class="shop-filter-dropdown__btn" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <span class="text">By Color</span>
                                <span class="icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="10"
                                            viewBox="0 0 10 6"
                                        >
                                            <path
                                                d="m0 0 5 6 5-6Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                            </button>
                            <!-- widget Item Start -->
                            <div class="widget-item dropdown-menu">
                                <div class="widget-item__filter">
                                    <ul class="widget-item__color">
                                        <li>
                                            <input type="checkbox" id="blue" />
                                            <label for="blue">
                                                <span class="blue"></span>Blue</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="bronze" />
                                            <label for="bronze">
                                                <span class="bronze"></span>Bronze</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="green" />
                                            <label for="green">
                                                <span class="green"></span>Green</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="pink" />
                                            <label for="pink">
                                                <span class="pink"></span>Pink</label>
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
                                                <span class="white"></span>White</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="yellow" />
                                            <label for="yellow">
                                                <span class="yellow"></span>Yellow</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget Item End -->
                        </div>
                        <!-- Shop Filter Dropdown End -->

                        <!-- Shop Filter Dropdown Start -->
                        <div class="shop-filter-dropdown dropdown">
                            <button class="shop-filter-dropdown__btn" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <span class="text">Bu Size</span>
                                <span class="icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="10"
                                            viewBox="0 0 10 6"
                                        >
                                            <path
                                                d="m0 0 5 6 5-6Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                            </button>
                            <!-- widget Item Start -->
                            <div class="widget-item dropdown-menu">
                                <div class="widget-item__filter">
                                    <ul class="widget-item__list-2">
                                        <li>
                                            <input type="checkbox" id="size-1" />
                                            <label for="size-1"> 09</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-2" />
                                            <label for="size-2"> 10</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-3" />
                                            <label for="size-3"> 12</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-4" />
                                            <label for="size-4"> 14</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-5" />
                                            <label for="size-5"> 18</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-6" />
                                            <label for="size-6"> M</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-7" />
                                            <label for="size-7"> S</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-8" />
                                            <label for="size-8"> X</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget Item End -->
                        </div>
                        <!-- Shop Filter Dropdown End -->
                    </div>
                    <!-- Shop Filter Default End -->
                </div>
                <!-- Shop Filter End -->

                <!-- Shop Wrapper Start -->
                <div class="shop-wrapper">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                    </div>
                </div>
                <!-- Shop Wrapper End -->

                <!-- Load More Button Start -->
                <div class="text-center">
                    <a href="#" class="btn product-view-btn">
                        Load More Products
                    </a>
                </div>
                <!-- Load More Button End -->
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