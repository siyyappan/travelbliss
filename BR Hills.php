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

    echo "<script type='text/javascript'>window.location='login.html'</script>";
} else {

    if (isset($_SESSION['status']) && $_SESSION['status'] == 'loggedin') {

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'tour';
        $conn = mysqli_connect($servername, $username, $password, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $email = $_SESSION['user_email'];
        $sql = "SELECT FirstName FROM user WHERE Email='" . $email . "'";
        $fname = mysqli_query($conn, $sql);
        while ($row = $fname->fetch_assoc()) {

            $userName = $row['FirstName'];
        }
    }
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
                                                <li><a href="hillestations.php">Hill stations</a></li>
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
                            <h2 class="section__title__3">BR Hills</h2>
                            <div class="tour__overview__inner">
                                <!-- Start Single Overview -->
                                <div class="single__overview">
                                    <div class="overview__days">
                                        <span>Overview</span>
                                    </div>
                                    <div class="overview__dewtails">
                                        <h2><a href="#">Overview</a></h2>
                                        <p>The hills are located at the north-west of the Western Ghats and the westernmost edge of the Eastern Ghats. Thus this area supports a diverse flora and fauna in view of the various habitat types present. A wildlife sanctuary of 322.4 square kilometres (124.5 sq mi) was created around the temple on 27 June 1974, and enlarged to 539.52 square kilometres (208.31 sq mi) on 14 January 1987. The sanctuary derives its name Biligiri (white hill in Kannada) from the white rock face that constitutes the major hill crowned with the temple of Lord Ranganathaswamy (Lord Vishnu) or from the white mist and the silver clouds that cover these hills for a greater part of the year. An annual festival of Lord Vishnu, held in the month of April, draws pilgrims from far and wide. Once in two years, the Soliga Tribals present a 1-foot and 9 inches slipper, made of skin, to the deity in Biligiriranga Hills.

The hills are in the Yelandur, Kollegal and Chamarajanagar talukas of Chamarajanagar District of Karnataka. They are contiguous with hills in Sathyamangalam Wildlife Sanctuary in Erode District of Tamil Nadu to the south. By road, they are about 90 kilometres (56 mi) from Mysore and 160 kilometres (99 mi) from Bangalore. The road leading to the village on top of the hills may be approached either from Yelandur or Chamarajanagar. Kyathadevara Gudi or K Gudi is located close to BR Hills, where safari is conducted. </p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                        <img src="images/tour-details/031.jpg" alt="overview images">
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
                                        <p>The hills are located at the north-west of the Western Ghats and the westernmost edge of the Eastern Ghats. .</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/030.jpg" alt="overview images">
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
                                        <p>The BR hills along with the Male Mahadeshwara Hills (MM Hills) range forms a distinctly unusual ridge running north–south amidst the plains of Bangalore (~900 m), Mysore (~800 m) and Krishnagiri(~450 m). The peaks of these lofty ranges rise as high as 1800 m (BR hills 1400-1800 m; MM Hills 1000-1200 m). The highest hill is Kattari Betta, at 1800 metres. Various observations point to a possible biogeographic link between BR hills and Nilgiri ranges. .</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/029.jpg" alt="overview images">
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
                                        <p>The sanctuary, ~35 km long north–south and ~15 km wide east–west, is spread over an area of 540 km2 with a wide variation in mean temperature (9 °C to 16 °C minimum and 20 °C to 38 °C maximum) and annual rainfall (600 mm at the base and 3000 mm at the top of the hills) The hill ranges, within the sanctuary raise as high as 1200 m above the basal plateau of 600 m and run north–south in two ridges. The wide range of climatic conditions along with the altitude variations within the small area of the sanctuary have translated it into a highly heterogeneous mosaic of habitats such that we find almost all major forest vegetation types – scrub, deciduous, riparian, evergreen, sholas and grasslands. .</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/028.jpg" alt="overview images">
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
                                        <p>The hills are located at the north-west of the Western Ghats and the westernmost edge of the Eastern Ghats. Thus this area supports a diverse flora and fauna in view of the various habitat types present. A wildlife sanctuary of 322.4 square kilometres (124.5 sq mi) was created around the temple on 27 June 1974, and enlarged to 539.52 square kilometres (208.31 sq mi) on 14 January 1987. The sanctuary derives its name Biligiri (white hill in Kannada) from the white rock face that constitutes the major hill crowned with the temple of Lord Ranganathaswamy (Lord Vishnu) or from the white mist and the silver clouds that cover these hills for a greater part of the year. An annual festival of Lord Vishnu, held in the month of April, draws pilgrims from far and wide. Once in two years, the Soliga Tribals present a 1-foot and 9 inches slipper, made of skin, to the deity in Biligiriranga Hills.

The hills are in the Yelandur, Kollegal and Chamarajanagar talukas of Chamarajanagar District of Karnataka. They are contiguous with hills in Sathyamangalam Wildlife Sanctuary in Erode District of Tamil Nadu to the south. By road, they are about 90 kilometres (56 mi) from Mysore and 160 kilometres (99 mi) from Bangalore. The road leading to the village on top of the hills may be approached either from Yelandur or Chamarajanagar. Kyathadevara Gudi or K Gudi is located close to BR Hills, where safari is conducted. .</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/027.jpg" alt="overview images">
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