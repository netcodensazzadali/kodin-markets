<?php @include("./view/header.php") ?>

<body>

    <?php @include("./view/navbar.php") ?>
    <!-- Start Main Section -->
    <main>
        <!-- Start Banner Section -->
        <div class="banner">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 px-3 px-sm-3 px-md-0">
                        <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-lg-6 col-md-6 order-sm-last order-last order-md-first">
                                            <div class="card title-card bg-transparent">
                                                <div class="card-text">
                                                    <ul>
                                                        <li class="wow fadeInDown" data-wow-duration="1s">Account Types
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-para">
                                                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                                        Choose your plan among our Flexible Account Type.
                                                        We have experience working with large and small businesses and are ready to develop a targeted strategy and plan that’s just right for you.
                                                    </p>
                                                </div>
                                                <div class="card-links wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">
                                                    <a href="https://client.kodincapital.com/login" target="_blank" class="btn-theme">Demo Account</a>
                                                    <a href="https://client.kodincapital.com/open-trading-account" target="_blank" class="btn-theme btn-theme-outline">Live Account
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="card bg-transparent banner-card-img">
                                                <div class="card-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                                    <img src="./img/banner/banner-accounts.png" class="img-fluid gradient-bg" alt="Banner accounts" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Section -->

        <!-- Start Account Types Section -->
        <section class="account-types">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title">
                            <h2 class="text-center">Type Of Accounts</h2>
                        </div>
                    </div>
                </div>
                <?php @include("./view/account-statement.php") ?>
            </div>
        </section>

        <!-- Start Account Types Section -->

        <!-- Start Stepper Section -->
        <?php @include("./view/advantages.php") ?>
        <!-- Start Stepper Section -->

        <!-- Start trading-apps Section -->
        <?php @include("./view/trading-apps.php") ?>
        <!-- End trading-apps Section -->

        <!-- Start trading Section -->
        <?php @include("./view/start-trading.php") ?>
        <!-- End trading Section -->

        <!-- Start Payment Methods Section -->
        <?php @include("./view/payment-method.php") ?>

    </main>
    <!-- End Main Section -->
    <?php @include("./view/footer.php") ?>

</body>

</html>