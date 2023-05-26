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
                                    <div class="row align-items-center pb-5">
                                        <div class="col-xl-6 col-lg-6 col-md-6 order-sm-last order-last order-md-first">
                                            <div class="card title-card bg-transparent">
                                                <div class="card-text">
                                                    <ul>
                                                        <li class="wow fadeInDown" data-wow-duration="1s">Forex Trading
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-para">
                                                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                                        The act of purchasing and selling currencies with the intention of profiting is known as forex trading, sometimes it also known as the foreign exchange trading or currency trading. The largest and most liquid financial market worldwide is the FX market.
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
                                                    <img src="./img/banner/banner-forex.png" class="img-fluid gradient-bg" alt="Banner Forex" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Section -->

        <!-- Start Trading Market Section -->
        <section class="bg-darken">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title">
                            <h2 class="text-center">Trade Forex With Kodin Capital</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-transparent border-0 mb-0">
                            <div class="tradingview-widget-container">
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                    {
                                        "colorTheme": "dark",
                                        "dateRange": "12M",
                                        "showChart": true,
                                        "locale": "en",
                                        "largeChartUrl": "",
                                        "isTransparent": true,
                                        "showSymbolLogo": true,
                                        "showFloatingTooltip": true,
                                        "width": "100%",
                                        "height": "580",
                                        "plotLineColorGrowing": "rgba(77, 222, 196, 1)",
                                        "plotLineColorFalling": "rgba(77, 222, 196, 1)",
                                        "gridLineColor": "rgba(42, 46, 57, 0)",
                                        "scaleFontColor": "rgba(134, 137, 147, 1)",
                                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                        "tabs": [{
                                            "title": "Forex",
                                            "symbols": [{
                                                    "s": "FX:EURUSD",
                                                    "d": "EUR/USD"
                                                },
                                                {
                                                    "s": "FX:GBPUSD",
                                                    "d": "GBP/USD"
                                                },
                                                {
                                                    "s": "FX:USDJPY",
                                                    "d": "USD/JPY"
                                                },
                                                {
                                                    "s": "FX:USDCHF",
                                                    "d": "USD/CHF"
                                                },
                                                {
                                                    "s": "FX:AUDUSD",
                                                    "d": "AUD/USD"
                                                },
                                                {
                                                    "s": "FX:USDCAD",
                                                    "d": "USD/CAD"
                                                }
                                            ]

                                        }]
                                    }
                                </script>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Trading Market Section -->

        <!-- Start About Forex Section -->
        <section class="about-forex">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title mb-0">
                            <h2 class="text-center mb-5">About Forex Trading</h2>
                            <p class="text-gray">
                                The Foreign Exchange Market is the largest financial market in the world, by daily volume and by value, averaging 7.5 trillion USD in exchanges per day. It’s fast-paced and highly liquid, providing a consistent platform for all traders.<br><br>

                                This massive, fast-paced and lucrative market is available to you through Kodin Capital Markets Limited’ MetaTrader 5 application, which you can use to implement your strategies for profits. The Forex market is traded 24/6 opening Sunday 22:00 GMT and Closing Friday evening at 22:00 GMT.
                                <br><br>
                                Kodin Capital Markets Limited offers system access and total customer support throughout these hours, free of charge to our clients. This is the only market which is open for 24 hours a day throughout the week, providing you with the opportunity to find the most suitable conditions for your personal trading system or strategy.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start About Forex Section -->

        <!-- Start Why Trade Forex -->
        <section class="why-trade intro-broker">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card bg-transparent earn-image-card">
                            <div class="image-box wow zoomIn" data-wow-duration="3s">
                                <img src="./img/why-trade.png" class="img-fluid" alt="why-trade">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card content-card bg-transparent border-0">
                            <div class="card-text">
                                <h5>Why Trade Forex <br>With Kodin Capital?</h5>
                                <ul>
                                    <li>
                                        Lowest transaction cost
                                    </li>
                                    <li>
                                        24/7 trading option
                                    </li>
                                    <li>
                                        Leverage up to 1:500
                                    </li>
                                    <li>
                                        Spread as low as .01
                                    </li>
                                    <li>
                                        Invest low , Gain maximum result
                                    </li>

                                </ul>
                                <a href="https://client.kodincapital.com/open-trading-account" target="_blank" class="btn-theme">
                                    start trading
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Trade Forex -->

        <!-- Start Stepper Section -->
        <section class="stepper bg-transparent">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title">
                            <h2 class="text-center">Advantages</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-1.png" alt="Step-1" />
                        <h3>Free Demo for Beginners</h3>
                        <p class="text-gray">Free demo accounts for the newcomers to hone their knowledge in Forex trading before opening a live trading account and risking real money.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-2.png" alt="Step-2" />
                        <h3>Deep liquidity</h3>
                        <p class="text-gray">The Forex market is quite large and very liquid as a result. you can instantly purchase and sell at will with the click of a mouse.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-3.png" alt="iStep-3" />
                        <h3>24/7 Support</h3>
                        <p class="text-gray">Round the clock support for our clients and partners, even when the market is closed.</p>
                    </div>
                </div>
            </div>
        </section>
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