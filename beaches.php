<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Beaches</title>
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
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-5" data-black-overlay="7">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Beaches</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="home.php">Home</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>
                                    <span class="breadcrumb-item active">Beaches</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
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

</body>