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
                                                        <li class="wow fadeInDown" data-wow-duration="1s">Our Advantages
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-para">
                                                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                                        Start trading with Kodin Capital Markets Limited to get large bonuses, flexible spreads and margins, the best leverage, and a whole lot more!
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
                                                    <img src="./img/banner/banner-advantage.png" class="img-fluid gradient-bg" alt="Banner platformabout" />
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

        <!-- Start Advantage Section -->
        <section class="stepper">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title">
                            <h2 class="text-center">Advantages</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-1.png" alt="Step-1" />
                        <h3>Forex Leader</h3>
                        <p class="text-gray">Smooth and uninterrupted since there are no re-quotes when executing orders at Kodin.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-2.png" alt="Step-2" />
                        <h3>Trading Strategies</h3>
                        <p class="text-gray">Enjoy the complete freedom and convenience when trading, regardless of their strategies.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-3.png" alt="iStep-3" />
                        <h3>24/7 Support</h3>
                        <p class="text-gray">You may receive prompt at any time, as our professional team acts in the best interests of the clients.</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/icons/icon-4.png" alt="Step-1" />
                        <h3>Leverage 1:500</h3>
                        <p class="text-gray">You may choose the most suitable leverage value . Depending on a trading strategy, leverage varies from 1:1 to 1:500.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/icons/icon-5.png" alt="Step-2" />
                        <h3>Deep liquidity</h3>
                        <p class="text-gray">The Forex market is quite large and very liquid as a result. you can instantly purchase and sell at will with the click of a mouse.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/icons/icon-6.png" alt="iStep-3" />
                        <h3>Tier-1 Bank Liquidity</h3>
                        <p class="text-gray">We offer its clients transparent access to Tier-1 bank liquidity online at competitive rates and with low margin.</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/icons/icon-7.png" alt="Step-1" />
                        <h3>Segregated Accounts</h3>
                        <p class="text-gray">Kodin Capital Markets Limited provides its clients with an exceptional service of segregated accounts to Clients.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/icons/icon-8.png" alt="Step-2" />
                        <h3>Secure Trading</h3>
                        <p class="text-gray">Robust security measures to ensure your money is as safe and secure when transacting online.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/icons/icon-9.png" alt="iStep-3" />
                        <h3>Low Transaction Costs</h3>
                        <p class="text-gray">low transaction costs as compared to other markets.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Advantage Section -->



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