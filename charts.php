<?php
include 'core/init.php';

if(not_logged_in() === TRUE){
    header('location: index.php');
}

$student = get_student_data($_SESSION['user_id']);

if(isset($_POST['logout']))
{
    logout();
}
?>
<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="gtco-loader"></div>

<div id="page">


    <div class="page-inner">
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="gtco-logo"><a href="student_dashboard.php">Hello <?php echo $student['student_name'];;?> <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <li>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <input type="submit" class="btn btn-primary" name="logout" value="Log Out">
                        </li>
                    </div>
                </div>

            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_6.jpg)">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">
                        <div class="row row-mt-15em">

                            <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                                <span class="intro-text-small">Watch your</span>
                                <h1>GROWTH CHART</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </header>



        <div class="gtco-section border-bottom">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>WARDS GROWTH RATE</h2>
                        <p>Compare your wards growth rate with ideal growth rate of a healthy student of that age group.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="price-box">
                        <h2 class="pricing-plan">YOUR OWN CHART</h2>

                        <div class="thumbnail">
                            <img src="images/img_1.jpg" alt="Lights" style="width:100% height: 200px;">
                            <div class="caption">
                                <p>Here the pie chart of nutrition % containment in ward will be demonstrated </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="price-box popular">
                        <div class="popular-text">Your goal to achieve</div>
                        <h2 class="pricing-plan">IDEAL CHART</h2>
                        <div class="thumbnail">
                            <img src="images/chart1.jpg" alt="Lights" style="width:100%; height: 340px;" >
                            <div class="caption">
                                <p>Nutritional pie chart </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gtco-section">
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                            <h2>*SOME BASIC QUERIES*</h2>
                            <p>Few general questions asked</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <ul class="fh5co-faq-list">
                                <li class="animate-box">
                                    <h2>What role does vitamin D play in my overall health?</h2>
                                    <p>Vitamin D helps your body absorb calcium, and it’s needed for bone growth, according to the National Institutes of HealthOff Site Icon.

                                        Vitamin D also helps:
                                        Muscles to move
                                        Nerves to carry messages from the brain throughout the body
                                        Support the immune system in fighting bacteria and viruses</p>
                                </li>
                                <li class="animate-box">
                                    <h2>What foods or drinks contain caffeine??</h2>
                                    <p>Caffeine is naturally found in many seeds, leaves and more than 60 types of plants, according to the National Institutes of HealthOff Site Icon (NIH).
                                        Plants that naturally contain caffeine, according to the NIH, include:
                                        Coffee
                                        Cocoa beans (used in chocolate)
                                        Kola nuts (used in many sodas)
                                        Tea leaves.</p>
                                </li>
                                <li class="animate-box">
                                    <h2>What are the health benefits of eating fish?</h2>
                                    <p> Fish are an important part of a healthy diet.

                                        Along with other seafood, fish provide you with protein, vitamin D, and healthy omega-3 fats, according to the Harvard School of Public HealthOff Site Icon (HSPH).</p>
                                </li>
                                <li class="animate-box">
                                    <h2>What is added sugar, and why is it not healthy in food?</h2>
                                    <p>Added sugar is sugar added during the making of processed food and drinks, just like you might add sugar to foods you make at home, according to the American Academy of Family PhysiciansOff Site Icon (AAFP).

                                        It is not healthy to consume too much added sugar in foods and drinks because it can cause serious health issues, including out–of-control diabetes, tooth decay, obesity, heart disease, high triglyceride levels and low HDL (good) cholesterol levels, according to the AAFP.</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<?php include 'core/footer.php'; ?>

        </div>


    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>
</html>
