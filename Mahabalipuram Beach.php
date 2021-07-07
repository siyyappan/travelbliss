<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tour Details</title>
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
                                <li><a href="tour-list.php">Destinations</a>></li>
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
                                <h2 class="bradcaump-title">Destination details</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="home.php">Home</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>
                                    <span class="breadcrumb-item active">Destination details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Tour Details -->
        <section class="ptb-100 bg-white pt0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Start Tour Overview Area -->
                        <div class="tour__overview__wrap">
                            <h2 class="section__title__3">Mahabalipuram Beach</h2>
                            <div class="tour__overview__inner">
                                <!-- Start Single Overview -->
                                <div class="single__overview">
                                    <div class="overview__days">
                                        <span>Overview</span>
                                    </div>
                                    <div class="overview__dewtails">
                                        <h2><a href="#">Overview</a></h2>
                                        <p>Some 58 km south of the Chennai, there lies a spectacular beach in Tamilnadu shored by the Bay of Bengal, Mahabalipuram or locally referred as Mamallapuram. From the 8th century Shore Temple on the seashore to rock-cut sculptures and monuments like Monolithic Rathas and Caves, this bewitching tourist attraction in Tamilnadu is a perfect blend of historical significance and nature resplendence. This charming beach is one of the perfect places in India for sunbath (which is the must-do activity here), and thus, lures larger chunk tourists both domestic as well as overseas. Moreover, If you’re into windsurfing and swimming, don’t hesitate to hit the shores of the beach while playing with the moving tides. The charm of this beautiful place doesn’t end here, it also has wildlife experience to proffer to nature lovers or history buffs as there is crocodile bank and snake venom extracting center situated just a few km away from the beach. Furthermore, what catches the tourists’ eyes more in Mahabalipuram is the special event of Dance Festival which held every year in December or January. However, if you want to give your Tamil Nadu beach holiday a bit touch of pilgrimage, you can also head to various alluring temples from which the beach is surrounded with.</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                        <img src="images/tour-details/33.jpg" alt="overview images">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Overview -->
                                <!-- Start Single Overview -->
                                <div class="single__overview">
                                    <div class="overview__days">
                                        <span>Location</span>
                                    </div>
                                    <div class="overview__dewtails">
                                        <h2><a href="#">Location</a></h2>
                                        <p>Mahabalipuram, also known as Mamallapuram, is a town in Chengalpattu district in the southeastern Indian state of Tamil Nadu, best known for the UNESCO World Heritage Site of 7th- and 8th-century Hindu Group of Monuments at Mahabalipuram. It is one of the famous tourist sites in India.</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/34.jpg" alt="overview images">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Overview -->
                                <!-- Start Single Overview -->
                                <div class="single__overview">
                                    <div class="overview__days">
                                        <span>Distance</span>
                                    </div>
                                    <div class="overview__dewtails">
                                        <h2><a href="#">Distance</a></h2>
                                        <p>The Mahabalipuram temples are in the southeastern Indian state of Tamil Nadu, about 60 kilometres (37 mi) southwest of Chennai on the Coromandel Coast. The monuments are reachable by the four-lane, divided East Coast Road and Rajiv Gandhi Salai (State Highways 49 and 49A). The nearest airport is in Chennai (IATA airport code MAA). The city is connected to the rest of India through a rail network.</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/35.jpg" alt="overview images">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Overview -->
                                <!-- Start Single Overview -->
                                <div class="single__overview">
                                    <div class="overview__days">
                                        <span>Environment</span>
                                    </div>
                                    <div class="overview__dewtails">
                                        <h2><a href="#">Environment</a></h2>
                                        <p>Mahabalipuram has a tropical wet and dry climate. The Köppen-Geiger climate classification is Aw. The average annual temperature is 28.4 °C. The temperatures are highest on average in May, at around 32.6 °C..</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/36.jpg" alt="overview images">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Overview -->
                                <!-- Start Single Overview -->
                                <div class="single__overview">
                                    <div class="overview__days">
                                        <span>History</span>
                                    </div>
                                    <div class="overview__dewtails">
                                        <h2><a href="#">History</a></h2>
                                        <p>Neolithic burial urn, cairn circles and jars with burials dating to the 1st century BCE have been discovered near Mahabalipuram. The Sangam age poem Perumpāṇāṟṟuppaṭai relates the rule of King Thondaiman Ilam Thiraiyar at Kanchipuram of the Tondai Nadu port Nirppeyyaru which scholars identify with the present-day Mahabalipuram. Chinese coins and Roman coins of Theodosius I in the 4th century CE have been found at Mahabalipuram revealing the port as an active hub of global trade in the late classical period. Two Pallava coins bearing legends read as Srihari and Srinidhi have been found at Mahabalipuram. The Pallava kings ruled Mahabalipuram from Kanchipuram; the capital of the Pallava dynasty from the 3rd century to 9th century CE, and used the port to launch trade and diplomatic missions to Sri Lanka and Southeast Asia..</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/37.jpg" alt="overview images">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Overview -->
                            </div>
                        </div>
                        <!-- End Tour Overview Area -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Tour Details -->
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
                                    <p>Copyright © 2021 All Right Reserved | Iyanar</p>
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