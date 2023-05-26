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
                                                        <li class="wow fadeInDown" data-wow-duration="1s">Indices
                                                            Trading
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-para">
                                                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                                        Equity indices, or stock indices as they are also commonly known, are actual stock market indexes, which measure the value of a specific section of a stock market. They are calculated based on a weighted average of the prices of selected stocks
                                                        which belong to the actual category that they represent.
                                                    </p>
                                                </div>
                                                <div class="card-links wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">
                                                    <a href="#" target="_blank" class="btn-theme">Demo Account</a>
                                                    <a href="#" target="_blank" class="btn-theme btn-theme-outline">Live
                                                        Account
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="card bg-transparent banner-card-img">
                                                <div class="card-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                                    <img src="./img/banner/banner-indices.png" class="img-fluid gradient-bg" alt="Banner indices" />
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
                            <h2 class="text-center">S&P 500, FTSE 100, NIKKEI 225 etc.</h2>
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
                                            "title": "Indicies",
                                            "symbols": [{
                                                    "s": "CURRENCYCOM:US30"
                                                },
                                                {
                                                    "s": "SP:SPX"
                                                },
                                                {
                                                    "s": "TVC:DXY"
                                                },
                                                {
                                                    "s": "NSE:NIFTY"
                                                },
                                                {
                                                    "s": "NSE:BANKNIFTY"
                                                },
                                                {
                                                    "s": "NSE:CNXCOMMODITIES"
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
                            <h2 class="text-center mb-5">About Indices Trading</h2>
                            <p class="text-gray">
                                When you trade indices, you are assuming a position on a stock index, which is a gauge of the performance of a number of different businesses. Trading indices can let you gain exposure to an entire industry or economy at once without having to initiate positions on several equities.<br><br>

                                Stock indices can represent a specific stock market such as NASDAQ, or they can represent a specific set of the largest companies of a nation such as the American S&P 500, the British FTSE 100, or the Japanese Nikkei 225. <br><br>
                                The purpose of the indices is to show the general direction of a specific stock market or of the general economy of a nation. However, since stock indices are composed of a basket of companies they can be very much affected by a big move of a specific company or by a big move of a specific sector of trade.<br><br>
                                The actual weight given to a stock index from the underlying basket of stocks varies amongst the various indices, which means that not all use the same criteria to derive the end result. The two main ways to calculate the actual weight a specific underlying stock produces to the index itself is price weighting and capitalization weighting.
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
                                <img src="./img/why-indices.png" class="img-fluid" alt="why-indices">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card content-card bg-transparent border-0">
                            <div class="card-text">
                                <h5>Why Trade Indices <br> With Kodin Capital?</h5>
                                <ul>
                                    <li>
                                        Can take a consolidated view to avoid stock risk
                                    </li>
                                    <li>
                                        Can hedge your risk with index futures
                                    </li>
                                    <li>
                                        Can trade in index futures with lower margins
                                    </li>
                                    <li>
                                        Limited liquidity risk
                                    </li>
                                    <li>
                                        Cost of trading index futures is much lower
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
                        <h3>Low Cost of Fees</h3>
                        <p class="text-gray">Because there is no active management, the costs for the index funds are low.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-2.png" alt="Step-2" />
                        <h3>Limited Liquidity Risk </h3>
                        <p class="text-gray">As index futures are chosen by institutional investors, liquidity risk is rarely an issue.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-3.png" alt="iStep-3" />
                        <h3>Little Financial Knowledge</h3>
                        <p class="text-gray">Index investing is relatively easy so It takes a little financial knowledge.</p>
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