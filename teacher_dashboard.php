<?php
include 'core/init.php';

if(not_logged_in() === TRUE){
    header('location: index.php');
}
$teacher = get_teacher_data($_SESSION['user_id']);

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Student DashBoard</title>
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
    <link rel="stylesheet" href="css/authorlist.css">

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
                        <div id="gtco-logo"><a href="student_dashboard.php">Hello <?php echo $teacher['teacher_name']?> <em>.</em></a></div>
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

        <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_2.jpg)">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">
                        <div class="row row-mt-15em">
                            <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                                <span class="intro-text-small">Welcome to your</span>
                                <h1>PORTAL</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div id="gtco-features" class="border-bottom">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                        <h2>MANAGING CARDS</h2>
                    </div>
                </div>

                <div class="container-fluid" style="padding-top: 2rem; padding-bottom: 4rem; ">
                    <div class="row my-3 row_margin">

                        <div class="col-lg-6 col-md-12 col-sm-12 my-2">

                            <div onclick="location.href='charts.php'" class="card img-fluid" style="color: white; cursor: pointer;">
                                <div class="hello">
                                    <img class="card-img-top hello" id="my-image" src="images/img_5.jpg" alt="Card image" style="width:100% height: 100%;">
                                    <div class="black-masking"></div>
                                </div>
                                <div class="lol">
                                    <img class="card-img-top" id="my-image" src="images/img_5.jpg" alt="Card image" style="width:100%">
                                    <div class="white"></div>
                                </div>
                                <div class="card-img-overlay">
                                    <div class="overlay1 text-center">
                                        <img src="images/logo1.png" id="author-img">
                                        <div class="author-name">PROFILE MAINTENANCE</div>
                                        <h5>Update information about your ward</h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 my-2">

                            <div onclick="location.href='charts.php'" class="card img-fluid" style="color: white; cursor: pointer;">
                                <div class="hello">
                                    <img class="card-img-top hello" id="my-image" src="images/img_5.jpg" alt="Card image" style="width:100% height: 100%;">
                                    <div class="black-masking"></div>
                                </div>
                                <div class="lol">
                                    <img class="card-img-top" id="my-image" src="images/img_5.jpg" alt="Card image" style="width:100%">
                                    <div class="white"></div>
                                </div>
                                <div class="card-img-overlay">
                                    <div class="overlay1 text-center">
                                        <img src="images/logo4.png" id="author-img">
                                        <div class="author-name">NOTIFICATION</div>
                                        <h5>Check messages from parents and students</h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div></div>

            </div>
        </div>
        <footer id="gtco-footer" role="contentinfo">
            <div class="gtco-container">
                <div class="row row-p	b-md">

                    <div class="col-md-6">
                        <div class="gtco-widget">
                            <h3>ABOUT <span class="footer-logo">Healthy School<span>.<span></span></h3>
                            <p> Your good health has just taken a turn for the better. Through this portal you can now take advantage of engaging, proactive programs designed to maintain your wards health and wellbeing. And if the need ever arises, you have 24/7 access to a comprehensive network of our faculty with suggestions. Because nothing is more important than your health.
                            </p>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="gtco-widget">
                            <div class="col-lg-pull-12" style="padding-left: 4rem;">
                                <h3>Get In Touch</h3>
                                <ul class="gtco-quick-contact">
                                    <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                                    <li><a href="#"><i class="icon-mail2"></i> info@abstractevolution.co</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                            <small class="block">&copy; All Rights Reserved.</small>
                            <small class="block">Designed by <a href="index.php" target="_blank">Abstract Evolution</a> </small>
                        </p>
                        <p class="pull-right">
                        <ul class="gtco-social-icons pull-right">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
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

