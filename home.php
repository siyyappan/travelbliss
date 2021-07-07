<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travel Bliss</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Template shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Template main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<?php

$userName = "";

session_start();
if (!isset($_SESSION['status'])) {

    echo "<script type='text/javascript'>window.location='index.php'</script>";
} else {

        include("config.php");

    $config = new Config();

    $userName = $config->getUserName();

}

?>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper fixed-newslatter">
        <!-- Start Header Style -->
        <header id="header" class="header">
            <div id="sticky-header-with-topbar" class="container-fluid hidden-xs sticky__header">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-12">
                        <div class="logo">
                            <a href="home.php"><img src="images/logo/ramble.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="header__top">
                            <div class="header__top__left">
                                <!-- <p><span class="text-theme">Contact:</span><a href="#">0088-234-675-827</a></p>
                                <p class="hidden-sm"><span class="text-theme">Opening Hours:</span> Mon - Sat 8.00 - 18.00. Sunday CLOSED</p> -->
                            </div>
                            <div class="header__top__right">
                                <ul class="login__regester">
                                    <li><a href="javascript:void(0);" class="text-capitalize"><i class="zmdi zmdi-account"></i><?php echo trim($userName); ?></a></li>
                                    <li><a href="logout.php" class="text-capitalize"><i class="zmdi zmdi-power-off"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header__bottom">
                            <div class="mainmenu__area">
                                <nav class="mainmenu__nav">
                                    <ul class="main__menu">
                                        <li><a href="home.php">Home</a></li>
                                        <li class="drop"><a href="tour-list.php">Destinations</a>
                                            <ul class="dropdown">
                                                <li><a href="beaches.php">Beaches</a></li>
                                                <li><a href="hillstations.php">Hill stations</a></li>
                                                <li><a href="ecotourism.php">Eco tourism</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact-us.php">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile-menu-area start -->
            <div class="mobile-menu-area hidden-md hidden-lg hidden-sm">
                <div class="fluid-container mobile-menu-container">
                    <div class="mobile-logo"><a href="home.php"><img src="images/logo/ramble.png" alt="Mobile logo"></a></div>
                    <div class="mobile-menu clearfix">
                        <nav id="mobile_dropdown">
                            <ul>
                                <li><a href="home.php">Home</a></li>
                                <li><a href="package-list.php">Destinations</a></li>
                                <li><a href="contact-us.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Mobile-menu-area End -->
        </header>
        <!-- End Header Style -->
        <!-- Start Slider Area -->
        <div class="slider__container slider__full--screen slider__position--relative">
            <div class="slider-activetion-wrap control__style--left  owl-carousel owl-theme">
                <!-- Start Single Slide -->
                <div class="slide slider__bg--1 htc__slider__animation--center" data-black-overlay="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slide__align--center">
                                    <div class="slider__inner">
                                        <h2 class="wow">Find your special tour today</h2>
                                        <h1 class="wow">with travel bliss</h1>
                                        <div class="slider__btn wow">
                                            <a class="rm__btn btn--transparent" href="tour-list.php">view tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__bg--2 htc__slider__animation--center" data-black-overlay="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slide__align--center">
                                    <div class="slider__inner">
                                        <h2 class="wow">Find your special tour today</h2>
                                        <h1 class="wow">with Travel Bliss</h1>
                                        <div class="slider__btn wow">
                                            <a class="rm__btn btn--transparent" href="tour-list.php">view tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__bg--3 htc__slider__animation--center" data-black-overlay="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slide__align--center">
                                    <div class="slider__inner">
                                        <h2 class="wow">Find your special tourtoday</h2>
                                        <h1 class="wow">with Travel Bliss</h1>
                                        <div class="slider__btn wow">
                                            <a class="rm__btn btn--transparent" href="tour-list.php">view tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__bg--4 htc__slider__animation--center" data-black-overlay="6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slide__align--center">
                                    <div class="slider__inner">
                                        <h2 class="wow">Find your special tour today</h2>
                                        <h1 class="wow">with Travel Bliss</h1>
                                        <div class="slider__btn wow">
                                            <a class="rm__btn btn--transparent" href="tour-list.php">view tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
            <!-- End Slider Area -->
            <!-- Start Select Option -->
            <div class="select__option__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="select__option__inner">
                                <div class="single__option col-md-4 p0">
                                    <input type="text" placeholder="tour name" class="w100">
                                </div>
                                <!-- Start Single option -->
                                <div class="single__option col-md-4 p0">
                                    <select class="w100">
                                        <option>Beaches</option>
                                        <option>Hill Statioms</option>
                                        <option>Eco Tourism</option>
                                    </select>
                                </div>
                                <!-- End Single option -->
                                <!-- Start Single option -->
                                <div class="single__option col-md-3 p0" style="background: #ffb300 none repeat scroll 0 0;">
                                    <a class="btn__search w100" href="#">search destination</a>
                                </div>
                                <!-- End Single option -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Welcome Area -->
        <section class="welcome__area bg-gray">
            <div class="welcome__images">
                <div class="info-bg" style="background-image:url(images/others/welcome/1.jpg)"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-6">
                        <div class="welcome__inner">
                            <h2 class="title__line">welcome to <span class="text-theme">Travel Bliss</span></h2>
                            <p>One of the oldest civilisations in the world, India is a mosaic of multicultural experiences. With a rich heritage and myriad attractions, the country is among the most popular tourist destinations in the world.</p>
                            <p>It covers an area of 32, 87,263 sq. km, extending from the snow-covered Himalayan heights to the tropical rain forests of the south.</p>
                            <p>As the 7th largest country in the world, India stands apart from the rest of Asia, marked off as it is by mountains and the sea, which give the country a distinct geographical entity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Welcome Area -->
        <!-- Start Special Packages Area -->
        <section class="special__package ptb-100 bg-4">
            <div class="container">
                <!-- Start Our Section Title area -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">Plan Your <span class="text-theme">Trip</span></h2>
                            <p>Script Your Adventure, Discover the world of a thousand hidden memories!</p>
                        </div>
                    </div>
                </div>
                <!-- End Our Section Title area -->
                <div class="row">
                    <div class="special__package__container clearfix mt-10">
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/beach1.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">Black Sand Beach</a></h4>
                                            <p>The Tilmati beach in Karwar is located in Uttara Kannada district of Karnataka</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="tour-details.php">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Black Sand Beach</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/beach2.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">OM Beach Gokarna</a></h4>
                                            <p>Om beach is 6 kms from Gokarna city centre.</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="OM Beach Gokarna.php">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>OM Beach Gokarna</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/beach3.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">Panambur Beach</a></h4>
                                            <p>The Tilmati beach in Karwar is located in Uttara Kannada district of Karnataka.</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="panambur Beach.php">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Panambur Beach</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/beach4.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">Marina</a></h4>
                                            <p>Marina Beach is a natural urban beach in Chennai, Tamil Nadu, India, along the Bay of Bengal.</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="marina.php">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Marina</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/beach6.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">Auroville</a></h4>
                                            <p>Auroville (/ˈɔːrəvɪl/; City of Dawn) is an experimental township in Viluppuram district mostly in the state of Tamil Nadu, India with some parts in the Union Territory of Puducherry in India.</p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="auroville.php">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Auroville</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                        <!-- Start Single Packages -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="packages">
                                <div class="package__thumb">
                                    <img src="images/special/beach5.jpg" alt="packages images">
                                    <div class="packages__hover__info">
                                        <div class="package__hover__inner">
                                            <h4><a href="#">Mahabalipuram Beach</a></h4>
                                            <p>Some 58 km south of the Chennai,. </p>
                                            <div class="package--rating--btn">
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                                <div class="packages__btn">
                                                    <a class="view__btn" href="Mahabalipuram Beach.php">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__details">
                                    <div class="package__details__inner">
                                        <p>Mahabalipuram Beach</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Packages -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Special Packages Area -->
        <!-- Start Book The Tour -->
        <section class="book__the__tour ptb-100 bg-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="book__the__tour__container ptb-100" data-black-overlay="8">
                            <form action="javascript:void(0);" method="post" class="needs-validation">
                                <!-- Start Title Area -->
                                <div class="section__title text-center">
                                    <h2 class="title__line">Keep <span class="text-theme">in touch</span></h2>
                                    <p>Stay in touch with us to explore the world by yourself</p>
                                </div>
                                <!-- End Title Area -->
                                <!-- Start Book The Tour -->
                                <div class="book__tour__wrap">
                                    <!-- Start Single Bok -->
                                    <div class="single__tour__box name">
                                        <input type="text" placeholder="Your Fast Name" required>
                                        <input type="text" placeholder="Your Last Name" required>
                                    </div>
                                    <!-- End Single Bok -->
                                    <!-- Start Single Bok -->
                                    <div class="single__tour__box email">
                                        <input type="email" placeholder="Your Email" required>
                                        <input type="text" placeholder="Your Phone Number" required>
                                    </div>
                                    <!-- End Single Bok -->
                                    <!-- Start Single Bok -->
                                    <div class="single__tour__box message">
                                        <textarea name="message" placeholder="Type Your Message..." style="background: none; color: #fff;" required></textarea>
                                    </div>
                                    <!-- End Single Bok -->
                                    <!-- End Single Bok -->
                                    <div class="book__tour__btn mt-50 text-center">
                                        <button class="btn btn-primary rm__btn btn--transparent" type="submit">SEND MESSAGE</button>
                                    </div>
                                </div>
                                <!-- End Book The Tour -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Book The Tour -->
        <!-- Start Footer Area -->
        <footer class="footer__area">
            <div class="copyright__arera" data-black-overlay="9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <div class="copyright__inner">
                                <div class="copyright__text">
                                    <p>Copyright © 2021 All Right Reserved | IYYAPPAN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>


    <script type="text/javascript" src="js/validation.js"></script>
    <script type="text/javascript" src="js/jquery-toast-plugin/src/jquery.toast.js"></script>
    <script type="text/javascript" src="js/toast-data.js"></script>

</body>

</html>