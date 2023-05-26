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
                                                        <li class="wow fadeInDown" data-wow-duration="1s">CFD’s Trading
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-para">
                                                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                                        A financial instrument known as a contract for differences (CFD) is used to pay the variations in settlement prices between open and closing deals. CFDs are particularly popular in forex and commodities markets since they effectively let investors trade the direction of assets over extremely short time frames.
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
                                                    <img src="./img/banner/banner-cfds.png" class="img-fluid gradient-bg" alt="Banner cfds" />
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

        <!-- Start Trading Market Section -->
        <section class="bg-darken">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title">
                            <h2 class="text-center">Worldwide Brands</h2>
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
                                        "showFloatingTooltip": false,
                                        "width": "100%",
                                        "height": "660",
                                        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                        "gridLineColor": "rgba(42, 46, 57, 0)",
                                        "scaleFontColor": "rgba(134, 137, 147, 1)",
                                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                        "tabs": [{
                                            "title": "cfd",
                                            "symbols": [{
                                                    "s": "SKILLING:NASDAQ"
                                                },
                                                {
                                                    "s": "GLOBALPRIME:NAS100"
                                                },
                                                {
                                                    "s": "VANTAGE:SP500"
                                                },
                                                {
                                                    "s": "GLOBALPRIME:GER30"
                                                },
                                                {
                                                    "s": "GLOBALPRIME:US30"
                                                },
                                                {
                                                    "s": "VANTAGE:DAX40"
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
                            <h2 class="text-center mb-5">About CFD’s Trading</h2>
                            <p class="text-gray">
                                Commodity CFDs are contracts that mirror the performance of the underlying commodity with the futures prices calculated as the difference between the purchase price and the selling price, hence the term contract for difference.<br><br>

                                Market trading hours are an important factor when trading CFDs. If you have an open position when the markets close, this means you will not be able to close your trade until the market re-opens again the next trading day. <br><br>
                                Just like many of the traded markets, volatility is also present in the commodity markets. This means that the opening price at the start of the next trading session can be vastly different from the closing price in the previous trading session and as a result you can see large swings in profit and loss. Please see contract specifications for more details.
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
                                <img src="./img/why-cfds.png" class="img-fluid" alt="why-cfds">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card content-card bg-transparent border-0">
                            <div class="card-text">
                                <h5>Why Trade CFD’s <br> With Kodin Capital?</h5>
                                <ul>
                                    <li>
                                        Allows traders to open positions and profit in both rising and falling markets
                                    </li>
                                    <li>
                                        Efficient capital management
                                    </li>
                                    <li>
                                        Transaction cost is very low
                                    </li>
                                    <li>
                                        24/7 trading experience
                                    </li>
                                    <li>
                                        Fast Execution
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
                        <h3>Trade on Leverage</h3>
                        <p class="text-gray">with a relatively small initial deposit get a larger market exposure.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-2.png" alt="Step-2" />
                        <h3>Risk Free Trading </h3>
                        <p class="text-gray">Try demo account before actual trading to experience risk free trading.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-3.png" alt="iStep-3" />
                        <h3>24/7 Trading</h3>
                        <p class="text-gray">Round the clock trading experience for our clients and partners.</p>
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