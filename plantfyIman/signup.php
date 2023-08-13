<?php

include_once('components/header.php')

?>

<style>
    #mainSignup{
    margin-top: -2rem!important;
    }
</style>

    <main id="mainSignup">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">
                        LogIn OR SignUp
                    </h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Log In / Sign Up to Continue</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Log In & Register Start -->
        <div class="login-register-section section-padding-2">
            <div class="container custom-container">
                <div class="row mb-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <!-- Log In & Register Box Start -->
                        <div class="login-register">
                            <h3 class="login-register__title">Sign Up</h3>

                            <form action="#" method='post'>
                                <div class="login-register__form">
                                    <div class="single-form">
                                        <input class="single-form__input" id="username" name="username" type="text" placeholder="Username *" required/>
                                    <span id="errorFirstName"></span>
                                    </div>
                                    <div class="single-form">
                                        <input class="single-form__input" id="lastname" name="fullname" type="text" placeholder="Fullname *" required/>
                                        <span id="errorLastName"></span>
                                    </div>
                                    <div class="single-form">
                                        <input class="single-form__input" id="email" name="email" type="email" placeholder="Email address *" required/>
                                        <span id="errorEmail"></span>
                                    </div>
                                   
                                    <div class="single-form">
                                        <input class="single-form__input" id="password" type="password" name="password" placeholder="Password *" required/>
                                        <span id="errorPassword"></span>
                                    </div>
                                    <p class="text-danger">
                             <?= isset($_REQUEST['error']) ? $_REQUEST['error'] : "" ?>
                            </p>
                                    <div class="single-form">
                                    <div class="single-form">
                                        <p class="lost-password">
                                            <span>already have an account?
                                            <a href="login.php" class='text-primary'>Log in</a>
                                            </span>
                                        </p>
                                    </div>
                                    
                                        <button type="submit" id="signup" name="signup" class="single-form__btn btn">
                                            Sign Up
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

   
    <?php
    include_once('components/footer.php')
        ?>

    <!-- Footer End -->

    <!-- JS Vendor, Plugins & Activation Script Files -->


<script src="assets/js/app.js"></script>
</body>
</html>