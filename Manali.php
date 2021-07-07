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
                            <h2 class="section__title__3">Manali</h2>
                            <div class="tour__overview__inner">
                                <!-- Start Single Overview -->
                                <div class="single__overview">
                                    <div class="overview__days">
                                        <span>Overview</span>
                                    </div>
                                    <div class="overview__dewtails">
                                        <h2><a href="#">Overview</a></h2>
                                        <p>Manali is a resort and tourist town in the mountains of Himachal Pradesh, India.[2] It is situated in the northern end of the Kullu Valley, formed by the Beas River. The town is located in the Kullu district, approximately 270 kilometres (170 mi) north of the state capital of Shimla and 544 kilometres (338 mi) northeast of the national capital of Delhi. With a population of 8,096 people recorded in the 2011 Indian census, Manali is the beginning of an ancient trade route through the Union territory of Ladakh, over the Karakoram Pass and onto Yarkand and Hotan in the Tarim Basin of China. Manali is a popular tourist destination in India and serves as the gateway to the Lahaul and Spiti district as well as the city of Leh in Ladakh</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                        <img src="images/tour-details/47.jpg" alt="overview images">
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
                                        <p>The Tilmati beach in Karwar is located in Uttara Kannada district of Karnataka. The sand here looks like black sesame, which is why the beach is named Tilmati. The name comes from the Konkani word ‘tillu’ which means sesame seeds and ‘matti’ which means soil.</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/46.jpg" alt="overview images">
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
                                            <img src="images/tour-details/45.jpg" alt="overview images">
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
                                        <p>Manali has witnessed a flurry of activity related to hydroelectric power and tourism. Unplanned and rampant construction has led to severe depletion of forests and pollution of river bodies, along with garbage being disposed of on the side of the mountains. There has been a loss of habitat to various species of fauna, not limited to the Himalayan monal, incidentally the state bird of Uttarakhand.</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/44.jpg" alt="overview images">
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
                                        <p>Manali is named after the Sanātanī lawgiver Manu (see Manusmriti). The name Manali is regarded as the derivative of Manu-Alaya (transl. 'the abode of Manu').[citation needed] In Hindu cosmology, Manu is believed to have stepped off his ark in Manali to recreate human life after a great flood had deluged the world. The Kullu Valley in which Manali is situated is often referred to as the "Valley of the Gods". An old village in the town has an ancient temple dedicated to the sage Manu.[citation needed]

The British introduced apple trees in the area; the first apple orchard was set up near Patlikuhal. Currently, apples along with plums and pears account for the bulk of the agriculture-dominated economy of the town. The British colonial administration also introduced rainbow and brown trouts into the rivers and streams of the area.[citation needed]

Due in part to the rise of an insurgency in neighbouring Indian-administered Jammu and Kashmir, a territory that has been the subject of an international dispute with Pakistan, Manali has had difficulties with its tourism industry, which is interlinked with cities in the Kashmir Valley as well as Ladakh.[4] .</p>
                                    </div>
                                    <div class="overview__thumd">
                                        <div class="overview__inner">
                                            <img src="images/tour-details/43.jpg" alt="overview images">
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