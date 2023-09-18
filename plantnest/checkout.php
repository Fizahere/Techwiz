<?php
include("./components/header.php");
?>
<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">Checkout</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="index.html">Home</a></li>
                    <li><span>checkout</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div class="login-register-section section-padding-2">
        <div class="container custom-container">
            <div class="row mb-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- Log In & Register Box Start -->
                    <div class="login-register">
                        <h4 class="h4">Basic Information</h4>

                        <form action="#" method='post'>
                            <div class="login-register__form">
                                <div class="single-form">
                                    <input class="single-form__input" id="username" name="username" type="text"
                                        placeholder="Full name *" required />
                                    <span id="errorFirstName"></span>
                                </div>

                                <div class="single-form">
                                    <input class="single-form__input" id="email" name="email" type="email"
                                        placeholder="Email address *" required />
                                    <span id="errorEmail"></span>
                                </div>
                                <div class="single-form">
                                    <input class="single-form__input" id="email" name="email" type="email"
                                        placeholder="Address *" required />
                                    <span id="errorEmail"></span>
                                </div>

                                <p class="text-danger">
                                    <?= isset($_REQUEST['error']) ? $_REQUEST['error'] : "" ?>
                                </p>
                                <div class="single-form">
                                    <button type="submit" id="signup" name="signup" class="single-form__btn btn">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <div class="col-md-3"></div>

            </div>
        </div>
    </div>

    <!-- Newsletter Start -->
    <div class="newsletter-section">
        <div class="newsletter-left" style="background-image: url(assets/images/newsletter-bg-1.jpg)">
            <!-- Newsletter Wrapper Start -->
            <div class="newsletter-wrapper text-center">
                <h4 class="newsletter-wrapper__title">Follow us on</h4>


                <div class="newsletter-social">
                    <ul class="newsletter-social__list">
                        <li>
                            <a href="https://facebook.com" target="_blank" aria-label="facebook">
                                <i class="lastudioicon-b-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com" target="_blank" aria-label="twitter">
                                <i class="lastudioicon-b-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com" target="_blank" aria-label="instagram">
                                <i class="lastudioicon-b-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://vimeo.com" target="_blank" aria-label="vimeo">
                                <i class="lastudioicon-b-vimeo"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://envato.com" target="_blank" aria-label="envato">
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
                    Our online nursery is accessible 24/7, allowing
                    you to
                    shop whenever it's convenient for you. Whether you're an early bird or a night owl, we're always
                    open.
                </p>
            </div>
            <!-- Newsletter Wrapper End -->
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Newsletter End -->
</main>

<?php
include("./components/footer.php");
?>