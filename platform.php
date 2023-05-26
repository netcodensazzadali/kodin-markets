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
                                                        <li class="wow fadeInDown" data-wow-duration="1s">Platforms
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-para">
                                                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                                        MT-5 The perfect choice for your Trading Company. Trade CFDs on Facebook, Google, EURUSD, #USA500 or Gold – all within our award-winning MT5 platform.
                                                    </p>
                                                </div>
                                                <div class="card-links wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">
                                                    <a href="https://client.kodincapital.com/open-demo-account" target="_blank" class="btn-theme">Demo Account</a>
                                                    <a href="https://client.kodincapital.com/open-trading-account" target="_blank" class="btn-theme btn-theme-outline">Live Account
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="card bg-transparent banner-card-img">
                                                <div class="card-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                                    <img src="./img/banner/banner-platforms.png" class="img-fluid gradient-bg" alt="Banner platform" />
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

        <!-- Start mt5 Section -->
        <section class="platform pt-0">
            <div class="container custom-container">
                <section class="row align-items-center pb-0">
                    <div class="col-lg-6">
                        <img src="./img/mt5.png" alt="" class="img-fluid" />
                    </div>
                    <div class="col-lg-6">
                        <div class="title mb-0 mt-5 mt-lg-0 pl-xl-5">
                            <h2 class="">About MT 5</h2>
                            <p class="text-gray">MetaTrader 5 or MT5 is a web-based trading platform which is created to assist forex and stock traders in automating trading using trading robots, signals, and fundamental research. Important features of MT5 includes algorithmic trading, mobile trading, and qualified technical analysis.

                            </p>
                        </div>
                    </div>
                </section>
                <section class="row align-items-center pb-0 flex-lg-row flex-column-reverse">
                    <div class="col-lg-6">
                        <div class="title mb-0 pr-xl-5 mt-5 mt-lg-0">
                            <h2 class="">MT5 Mobile</h2>
                            <p class="text-gray mb-3">Key Features of MT5 Mobile are...<br></p>
                            <ul class="ml-3">
                                <li class="text-gray mb-1">Partial order filling</li>
                                <li class="text-gray mb-1">38 indicators available</li>
                                <li class="text-gray mb-1">Supports 21 time frames</li>
                                <li class="text-gray mb-1">Built-in economic calendar</li>
                                <li class="text-gray mb-1">Updated strategy tester</li>
                                <li class="text-gray mb-1">Embedded MQL5 community chat</li>
                                <li class="text-gray mb-1">6 types of pending orders</li>
                                <li class="text-gray mb-1">Market depth & Hedging option</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="./img/mt5-mobile.png" alt="Mobile" class="img-fluid" />
                    </div>
                </section>
                <section class="row align-items-center pb-0">
                    <div class="col-lg-6">
                        <img src="./img/mt5-desktop.png" alt="Desktop" class="img-fluid" />
                    </div>
                    <div class="col-lg-6">
                        <div class="title mb-0 pl-xl-5 mt-5 mt-lg-0">
                            <h2 class="">MT5 Desktop</h2>
                            <p class="text-gray mb-3">Key Features of MT5 Mobile are...<br></p>
                            <ul class="ml-3">
                                <li class="text-gray mb-1">Partial order filling</li>
                                <li class="text-gray mb-1">38 indicators available</li>
                                <li class="text-gray mb-1">Supports 21 time frames</li>
                                <li class="text-gray mb-1">Built-in economic calendar</li>
                                <li class="text-gray mb-1">Updated strategy tester</li>
                                <li class="text-gray mb-1">Embedded MQL5 community chat</li>
                                <li class="text-gray mb-1">6 types of pending orders</li>
                                <li class="text-gray mb-1">Market depth & Hedging option</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <!-- End mt5 Section -->

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