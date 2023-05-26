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
                                                        <li class="wow fadeInDown" data-wow-duration="1s">Commodities
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-para">
                                                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                                        The commodity market is a market where traders buy and sell commodities like Raw materials or basic agricultural goods. So basically goods produced or extracted by farmers, mining firms, and oil and gas businesses are called commodities.
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
                                                    <img src="./img/banner/banner-commodities.png" class="img-fluid gradient-bg" alt="Banner commodities" />
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
                            <h2 class="text-center">Gold, Silver, Crude Oil & More</h2>
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
                                            "title": "Commodities",
                                            "symbols": [{
                                                    "s": "FRED:PALLFNFINDEXQ"
                                                },
                                                {
                                                    "s": "FRED:IQ"
                                                },
                                                {
                                                    "s": "HAM:UNO5"
                                                },
                                                {
                                                    "s": "LSE:OGLD"
                                                },
                                                {
                                                    "s": "NSE:CNXCOMMODITIES"
                                                },
                                                {
                                                    "s": "MIL:AIGC"
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
                            <h2 class="text-center mb-5">About Commodities Trading</h2>
                            <p class="text-gray">
                                Along with the global currency exchange markets, commodity markets offer various investment opportunities for retail traders worldwide. Soft commodities such as sugar, wheat or corn have been traded for centuries, and investors preference for these financial derivatives is attributed to the major role they play in portfolio diversification and risk management.<br><br>

                                Investing in contract-based tradable goods is a reliable means of risk mitigation even during times of inflation or economic uncertainty, ensuring both the contract buyer and seller against drastic price movements that may cause increased losses.
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
                                <img src="./img/why-commodities.png" class="img-fluid" alt="why-commodities">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card content-card bg-transparent border-0">
                            <div class="card-text">
                                <h5>Why Trade Commodities <br> With Kodin Capital?</h5>
                                <ul>
                                    <li>
                                        High leverage facility
                                    </li>
                                    <li>
                                        Get Protection against inflation
                                    </li>
                                    <li>
                                        Maintenance of transparency of the market to eliminate any risk of manipulation
                                    </li>
                                    <li>
                                        Great diversifying options for a portfolio
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
                        <h3>Inflation protection</h3>
                        <p class="text-gray">Get high return against an uncertain inflation or stock crash.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-2.png" alt="Step-2" />
                        <h3>High Leverage </h3>
                        <p class="text-gray">Get higher leverage facility by investing in the commodity market.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-3.png" alt="iStep-3" />
                        <h3>Diversified Portfolio</h3>
                        <p class="text-gray">Commodities allow investors to diversify their portfolio.</p>
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