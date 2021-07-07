<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tour List</title>
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
                                <a href="tour-list.php">Destinations</a>
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
                                <h2 class="bradcaump-title">Destination list</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="home.php">Home</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>
                                    <span class="breadcrumb-item active">Destinations</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Package List Area -->
        <section class="package__list__area pb-100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-lg-12 col-xs-12">
                        <div class="pacgage__list__wrap">
                            <!-- Start Single List -->
                            <div class="package__list">
                                <div class="package__list__thumb">
                                    <img src="images/package-list/007.jpg" alt="package list images">
                                </div>
                                <div class="package__list__details">
                                    <div class="package__list__inner">
                                        <h4>Beaches</h4>
                                        <p>Relax ypur soul with the sound of the waves</p>
                                    </div>
                                </div>
                                <div class="package__list__hover__info">
                                    <div class="package__list__hover__details">
                                        <h4><a href="#">Beaches</a></h4>
                                        <h6>Relax your soul with the sound of the waves</h6>
                                        <p>A beach is a landform alongside a body of water which consists of loose particles. The particles composing a beach are typically made from rock, such as sand, gravel, shingle, pebbles, etc., or biological sources, such as mollusc shells or coralline algae. Sediments settle in different densities and structures, depending on the local wave action and weather, creating different textures, colors and gradients or layers of material. </p>
                                        <div class="package--rating--btn">
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                            <div class="packages__btn">
                                                <a class="view__btn" href="beaches.php">view more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single List -->
                            <!-- Start Single List -->
                            <div class="package__list">
                                <div class="package__list__thumb">
                                    <img src="images/package-list/hill station.jpg" alt="package list images">
                                </div>
                                <div class="package__list__details">
                                    <div class="package__list__inner">
                                        <h4>Hill stations</h4>
                                        <p>The higher you go the more happier you are</p>
                                    </div>
                                </div>
                                <div class="package__list__hover__info">
                                    <div class="package__list__hover__details">
                                        <h4><a href="#">Hill stations</a></h4>
                                        <h6>The higher you go the more happier you are</h6>
                                        <p>a village or government post (as in India) situated in the hills or low mountain ranges and serving usually as a health resort in the hot season
</p>
                                        <div class="package--rating--btn">
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                            <div class="packages__btn">
                                                <a class="view__btn" href="hillstations.php">view more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single List -->
                            <!-- Start Single List -->
                            <div class="package__list">
                                <div class="package__list__thumb">
                                    <img src="images/package-list/eco tourism.jpg" alt="package list images">
                                </div>
                                <div class="package__list__details">
                                    <div class="package__list__inner">
                                        <h4>Eco Tourism</h4>
                                        <p>Love yourself by loving the nature</p>
                                    </div>
                                </div>
                                <div class="package__list__hover__info">
                                    <div class="package__list__hover__details">
                                        <h4><a href="#">Eco Tourism</a></h4>
                                        <h6>Love yourself by loving the nature</h6>
                                        <p>Ecotourism is all about conserving and preserving nature and the environment. It offers economic incentives mainly for the purpose of conservation and enhancement of bio-cultural diversity.</p>
                                        <div class="package--rating--btn">
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                            <div class="packages__btn">
                                                <a class="view__btn" href="ecotourism.php">view more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single List -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Package List Area -->
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