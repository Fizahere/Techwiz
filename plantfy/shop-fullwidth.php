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
                <?php
                if (isset($_GET['id'])) {
                    $ctg_id = $_GET['id'];
                    // echo $ctg_id;
                    // $product = $authModel->showSingleProduct($ctg_id, $pdo);
                    // print_r($product);
                    $query = $pdo->prepare("Select categoryName from categories where categoryID = :id");
                    $query->bindParam("id",$ctg_id);
                    $query->execute();
                    $categoryTitle = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($categoryTitle as $title) {
                        ?>
                        <h2 class="breadcrumb-wrapper__title">
                            <?php echo $title['categoryName'] ?>
                        </h2>
                        <?php
                    }
                    ?>
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
                <div class="shop-filter align-items-center">
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
                                <form action="" method='post'>
                                <button name='sortByPrice'>Sort by Default</button>
                                </form>
                                <!-- <i class="lastudioicon-down-arrow"></i> -->
                            </div>
                            <!-- <ul class="shop-filter-sort-by__dropdown">
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
                                        <i class="lastudioicon-arrow-up"></i></a>
                                </li>
                                <li>
                                    <a href="#">Sort by Price:
                                        <i class="lastudioicon-arrow-down"></i></a>
                                </li>
                            </ul> -->
                        </div>
                        <!-- Shop Filter Sort By End -->
                    </div>
                    <!-- Shop Filter Default End -->

                    

                    <!-- Shop Filter widget Start -->
                    <div class="shop-filter-widget">
                        <div class="filter-widget-row">
                            <div class="filter-widget-col">
                                <!-- widget Item Start -->
                                <div class="widget-item">
                                    <h4 class="widget-item__title">
                                        Category
                                    </h4>
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

                                                <button class="narrow collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#Baby">
                                                    <i class="lastudioicon-down-arrow"></i>
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

                                                <button class="narrow collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#BigSize">
                                                    <i class="lastudioicon-down-arrow"></i>
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
                            <div class="filter-widget-col">
                                <!-- widget Item Start -->
                                <div class="widget-item">
                                    <h4 class="widget-item__title">
                                        Price
                                    </h4>
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
                            <div class="filter-widget-col">
                                <!-- widget Item Start -->
                                <div class="widget-item">
                                    <h4 class="widget-item__title">
                                        Color
                                    </h4>
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
                                                    <span class="polar-blue"></span>Polar Blue</label>
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
                            <div class="filter-widget-col">
                                <!-- widget Item Start -->
                                <div class="widget-item">
                                    <h4 class="widget-item__title">Size</h4>
                                    <div class="widget-item__filter">
                                        <ul class="widget-item__list-2">
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
                                <!-- widget Item End -->
                            </div>
                            <div class="filter-widget-col">
                                <!-- widget Item Start -->
                                <div class="widget-item">
                                    <h4 class="widget-item__title">
                                        Brand
                                    </h4>
                                    <div class="widget-item__filter">
                                        <ul class="widget-item__list-2">
                                            <li>
                                                <a href="#">Forever 21</a>
                                            </li>
                                            <li><a href="#">Mango</a></li>
                                            <li><a href="#">Omens</a></li>
                                            <li><a href="#">Zara</a></li>
                                            <li>
                                                <a href="#">Plantfy</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- widget Item End -->
                            </div>
                        </div>
                    </div>
                    <!-- Shop Filter widget End -->
                </div>
                <!-- Shop Filter End -->

                <!-- Shop Wrapper Start -->
                <div class="shop-wrapper">
                    <div class="row">
                        <?php
                        if(isset($_POST['sortByPrice'])){
                            $products = $authModel->showSingleProductByPriceSort($ctg_id,$pdo);
                        }
                        else{
                            $products = $authModel->showSingleProduct($ctg_id,$pdo);

                        }
                                              foreach ($products as $item) {
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <a href="product-single.php?id=<?php echo $item['productID'] ?>">
                                        <div class="single-product__thumbnail">
                                            <div>
                                                <a href="#" ></a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.php?id=<?php echo $item['productID'] ?>">
                                                    <img src="assets/images/products/<?php echo $item['productImage'] ?>"
                                                        alt="Product" width="344" height="370" />
                                                </a>
                        </div>
                                        </div>
                                        <div class="single-product__info text-center">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.php?id=<?php echo $item['productID'] ?>">
                                                    <?php echo $item['productName'] ?>
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>
                                                    <?php echo $item['productPrice'] ?>
                                                </ins>
                                            </div>
                                            <div>
                                                <p>
                                                    <?php echo $item['productDescription'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Single product End -->
                            </div>

                            <?php
                        }
                }
                ?>

                </div>
            </div>
            <!-- Shop Wrapper End -->

            <!-- Pagination Start -->
            <div class="paginations">
                <ul class="paginations-list">
                    <li>
                        <a href="#"><i class="lastudioicon-arrow-left"></i></a>
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
                        <a href="#"><i class="lastudioicon-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Pagination End -->
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