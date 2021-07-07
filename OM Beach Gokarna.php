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
                            <h2 class="section__title__3">OM Beach Gokarna</h2>
                            <div class="tour__overview__inner">
                                <!-- Start Single Overview -->
                                <div class="single__overview">
                                    <div class="overview__days">
                                        <span>Overview</span>
                                    </div>
                                    <div class="overview__dewtails">
                                        <h2><a href="#">Overview</a></h2>
                                        <p>Om Beach is a major tourist attraction in the coastal city of Gokarna, located in North Canara district. One of the acclaimed beaches in the country, Om Beach takes the shape of an ‘Om’, a Hindu spiritual symbol. In the shape of two crescents joined together to form an Om, the beach offers a breathtaking view of the sunset. The long stretch of white sandy beach adjoining the rocky terrain appeals to travellers from around the world.</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/17.jpg" alt="overview images">
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
                                        <p>Om beach is 6 kms from Gokarna city centre. Gokarna is 500 kms from Bengaluru and 230 kms from Mangaluru. Goa is the nearest airport (150 kms from Gokarna). Ankola is the nearest railway station (19 kms). From Gokarna city, auto or taxi can be hired to reach Om Beach. .</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/16.jpg" alt="overview images">
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
                                        <p>The black sand at the 150 metre shoreline is in complete contrast to the shimmering cream coloured sands that dot the rest of the beaches located on either side of Tilmati.
                                            This beach is at a distance of 13km from Karwar bus stand and around 2.5km from Majali bus stop. There is also a short trek to reach the beach from Majali.</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/15.jpg" alt="overview images">
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
                                        <p>Om beach in Gokarna offers innumerable adventurous water activities for every single visitor who steps in here – 

1) Banana Boat Ride: 
With a favorable climate and crystal clear water, Om Beach is perfect for enjoying a banana boat ride adventure. Be at your ease with this water activity as there are lifeguards to guide you correctly. 

2) Bumper Boat Ride:
The thrashing waves of the Om Beach are best to go for a bumper boat riding adventure. A complete beach bumper boat ride will last for around 15 minutes. Before riding, you will have to undergo safety lessons here.

3) Dolphin Spotting: 
Bluish waters of the Om Beach are renowned as the hot spots to watch the mischievous activities of dolphins here. You can capture many pictures of the dolphins darting in and out of the sea. 

4) Jet Skiing: 
Speed through the azure waters of Om beach and curate some of the best memories for your beguiling vacation. 

5) Speed Boating: 
A round trip with a speed boat will let you click some precious moments of the coastline. .</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/14.jpg" alt="overview images">
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
                                        <p>Gokarna is a small temple town on the western coast of India in the Kumta taluk of Uttara Kannada district of the state of Karnataka.[1] The main temple and deity is Shiva, who is also known as Mahabaleshwara. This temple houses what is believed to be original image of Shiva's linga (Atmalinga). There are many other temples all over this small town. Ankola and Kumta on NH66 are the main towns where as Bhatkal and Karwar are the main small cities near Gokarna where almost all trains have halts and are connected to major cities like Chennai, Bangalore, Hyderabad, Mangalore and Mumbai through bus service.

Gokarna is known as one of the seven important Hindu pilgrimage centers. It is on what was once an unspoiled beach near the estuary of the river Aghanashini. Recently, due to the influx of tourists, the character of the town has changed; it is no longer just a centre of pilgrimage, though large numbers of devotees visit to offer prayers and worship to Shiva.

Due to its laid-back, unspoiled and rustic nature many younger western tourists started visiting Gokarna about a decade ago. The beaches around Gokarna were hardly used by the locals until these mainly western tourists started coming.[2] Enterprising locals started stores and restaurants, and now the resorts also cater to wealthier tourists..</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/13.jpg" alt="overview images">
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