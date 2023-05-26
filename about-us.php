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
                                                        <li class="wow fadeInDown" data-wow-duration="1s">Who We Are
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-para">
                                                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                                        Kodin Capital Markets Limited provides trading services on financial markets: Forex, Crypto, commodity markets, and stock indices.We are More than a trading platform.We’re your trading partner.
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
                                                    <img src="./img/banner/banner-about.png" class="img-fluid gradient-bg" alt="Banner platformabout" />
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
        <section class="platform">
            <div class="container custom-container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <img src="./img/company.png" alt="Company" class="img-fluid" />
                    </div>
                    <div class="col-lg-6">
                        <div class="title mb-0 pl-xl-5 mt-5 mt-lg-0">
                            <h2 class="">About Company</h2>
                            <p class="text-gray">Kodin Capital Markets Limited is a leading Forex broker that provides complete trading solutions for all the segments of market, ranging from Currency, Commodities, Global Indices and Individual Stocks. We are known for our transparency, integrity and excellence in all areas of services. Kodin Capital Markets Limited has always strived to bridge the gap between the trading experiences received by retail clients versus that received by institutional clients. Our servers are co-located in Amsterdam, facilitates with Direct FIX connectivity to major liquidity pools that ensures our retail investors have access to same level of speed, liquidity and technology that was only enjoyed by the most sophisticated investors.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-5 flex-lg-row flex-column-reverse">
                    <div class="col-lg-6">
                        <div class="title mb-0 pr-xl-5 mt-5 mt-lg-0">
                            <h2 class="">Our Mission & Vision</h2>
                            <p class="text-gray">Our mission is to provide the Forex trader with the same conditions found by institutional clients, with no complicated account structures and no hurdles. We focus on fast execution and low cost (for example, a spread of 0.5 pips for EURUSD). We support all trading styles and the minimum size for an account is $1 USD.

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="./img/mission.png" alt="Mission & Vision" class="img-fluid" />
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <img src="./img/secure.png" alt="Desktop" class="img-fluid" />
                    </div>
                    <div class="col-lg-6">
                        <div class="title mb-0 pl-xl-5 mt-5 mt-lg-0">
                            <h2 class="">Secured Trading</h2>
                            <p class="text-gray">Kodin Capital Markets Limited has developed a pioneering technology for execution and is constantly introducing new tools for the modern daytrader. These include mobile apps, extended account analysis and your own customer area. With Kodin Capital Markets Limited you should have everything you need and nothing you do not need for a safe and secure trading
                            </p>
                        </div>
                    </div>
                </div>
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