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
                                                        <li class="wow fadeInDown" data-wow-duration="1s">Feel Free to Contact
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-para">
                                                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                                        Get in touch with us & feel free to ask for details.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="card bg-transparent banner-card-img">
                                                <div class="card-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                                    <img src="./img/banner/banner-contact.png" class="img-fluid gradient-bg" alt="Banner contact" />
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
        <section class="stepper" style="background: #0A090D;">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title">
                            <h2 class="text-center">Contact Options</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-lg-4 col-xl-4 mb-5 text-center text-md-left mb-lg-0 pb-0 pb-sm-5">
                        <img src="./img/icons/phone-blue.svg" alt="Step-1" />
                        <h3>Client Enquiries</h3>
                        <p class="text-gray">+91 9626300017</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4 col-xl-4 mb-5 text-center text-md-left mb-lg-0 pb-0 pb-sm-5">
                        <img src="./img/icons/mail-blue.svg" alt="Step-2" />
                        <h3>Email</h3>
                        <p class="text-gray">
                            support@kodincapital.com</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4 col-xl-4 mb-5 text-center text-md-left mb-lg-0 pb-0 pb-sm-5">
                        <img src="./img/icons/phone-blue.svg" alt="Step-1" />
                        <h3>Accounts Department</h3>
                        <p class="text-gray">+971 52 732 8702</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-xl-4 mb-5 text-center text-md-left mb-lg-0 pb-0 pb-sm-5">
                        <img src="./img/icons/location-blue.svg" alt="iStep-3" />
                        <h3>Legal Address</h3>
                        <p class="text-gray">20, Edith Cavell Street Port-Louis Level 6 Ken Lee Building Port-Louis MAURITIUS </p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-4 col-xl-4 mb-5 text-center text-md-left mb-lg-0 pb-0 pb-sm-5">
                        <img src="./img/icons/location-blue.svg" alt="iStep-3" />
                        <h3>Physical Address</h3>
                        <p class="text-gray">Kodin Capital Markets Limited, <br> A8/1, Ground Floor, 11th Cross, Thillainagar, Trichy, Tamilnadu - 620018, India..</p>
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