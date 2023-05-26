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
                                                        <li class="wow fadeInDown" data-wow-duration="1s">Crypto Trading
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-para">
                                                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                                        The process of buying and selling cryptocurrencies for trading purposes is called Crypto trading. Most popular cryptocurrencies for is Bitcoin, Ethereum, Litecoin. Crypto trading has gained more and more general acceptance.
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
                                                    <img src="./img/banner/banner-crypto.png" class="img-fluid gradient-bg" alt="Banner crypto" />
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
                            <h2 class="text-center">Trade Crypto With Kodin Capital</h2>
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
                                            "title": "Crypto",
                                            "symbols": [{
                                                    "s": "BINANCE:XRPUSDT"
                                                },
                                                {
                                                    "s": "BINANCE:GMTUSDT"
                                                },
                                                {
                                                    "s": "BINANCE:LUNCBUSD"
                                                },
                                                {
                                                    "s": "BINANCE:ETHUSDT"
                                                },
                                                {
                                                    "s": "BINANCE:BTCUSDT"
                                                },
                                                {
                                                    "s": "COINBASE:BTCUSD"
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
                            <h2 class="text-center mb-5">About Crypto Trading</h2>
                            <p class="text-gray">
                                Cryptocurrency markets are decentralised, which means they are not issued or backed by a central authority such as a government. Instead, they run across a network of computers. However, cryptocurrencies can be bought and sold via exchanges and stored in ‘wallets’. Unlike traditional currencies, cryptocurrencies exist only as a shared digital record of ownership, stored on a blockchain. <br><br>When a user wants to send cryptocurrency units to another user, they send it to that user’s digital wallet. The transaction isn’t considered final until it has been verified and added to the blockchain through a process called mining. This is also how new cryptocurrency tokens are usually created.

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
                                <img src="./img/why-crypto.png" class="img-fluid" alt="why-crypto">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card content-card bg-transparent border-0">
                            <div class="card-text">
                                <h5>Why Trade Crypto<br> With Kodin Capital?</h5>
                                <ul>
                                    <li>
                                        Secure and easy transactions
                                    </li>
                                    <li>
                                        Decentralized transactions for secure trading
                                    </li>
                                    <li>
                                        Multiple top rated payment gateway integration
                                    </li>
                                    <li>
                                        Best cryptocurrency exchange rate with lowest fees
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
                        <h3>100% Secure</h3>
                        <p class="text-gray">Secure and fast transactions process for crypto traders.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-2.png" alt="Step-2" />
                        <h3>Easy Integration</h3>
                        <p class="text-gray">Easy integration with top rated payment gateway system.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 text-center text-md-left mb-lg-0">
                        <img src="./img/home/icon-3.png" alt="iStep-3" />
                        <h3>Stable Alternative</h3>
                        <p class="text-gray">Cryptocurrencies are the stable alternation for regular currencies.</p>
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