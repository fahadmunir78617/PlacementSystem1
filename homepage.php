
<?php
session_start();
include "dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Job Portal</title>
    <link rel="shortcut icon" type="image/png" href="images/razaq.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Slider CS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">


    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/navstyle.css">


    <style type="text/css">
        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .parallax-bg {
            position: absolute;
            left: 0;
            top: 0;
            width: 130%;
            height: 100%;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center;
        }

        .swiper-slide .title {
            font-size: 41px;
            font-weight: 300;
        }

        .swiper-slide .subtitle {
            font-size: 21px;
        }

        .swiper-slide .text {
            font-size: 14px;
            max-width: 400px;
            line-height: 1.3;
        }

        @media only screen and (max-width: 575px) and (min-width: 300px) {
            .playstore-img {
                display: block;
                float: left !important;
                margin-bottom: 8px;

            }

            .playstore-img1 {

                display: block;
            }
        }

        @media only screen and (max-width: 991px) and (min-width: 768px) {
            .playstore-img, .playstore-img1 {
                margin-bottom: 50px;
            }


        }


        @media only screen and (max-width: 767px) {
            .bg-jobs-inner {
                margin-bottom: 18px;
            }

        }


        .bg-jobs-inner{
            overflow: hidden;
        }
        .bg-jobs-inner img{
            position: relative;
            overflow: hidden;
        }
        .bg-jobs-inner .bg-jobs-outer h3{
            position: absolute;
            left: -200;
            bottom: -80px;
            font-size: 20px;
            color: #ffffff;

        }

        .job-btn{
            transition: 0.3s;
            font-size:18px;
            text-align: center;
        }
        .job-btn:hover{
            border-bottom:2px solid black;
        }


    </style>


</head>
<body>

<!-- PRE LOADER -->
<section class="preloader">

    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>


<!-- MENU -->
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/razaq.png" width="50" height="auto"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Job Seeker
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <?php
                            if (isset($_SESSION['fname'])) { ?>
                                <a class="dropdown-item" href="Student/studenthomepage.php">Job Seeker Panel</a>

                                <?php
                            }
                            else {
                                ?>

                                <a class="dropdown-item" href="register.php">Register As Job Seeker</a>
                                <a class="dropdown-item" href="studentlogin.php">Login As Job Seeker</a>
                                <?php
                            }
                            ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Employer Accounts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="adminlogin.php">Employer Login</a>
                            <a class="dropdown-item" href="EmployerRegister.php">Employer Registration</a>

                        </div>
                    </li>

                </ul>

                <a class="nav-link" href="#contact" style=" font-weight: bold!important;"><span><?php



                        if (isset($_SESSION['name']))
                        {
                            echo 'Hello'.' '. $_SESSION['name'];
                            ?>
                            <a href="sessionDestroy.php" class="btn btn-success">Logout</a>

                            <?php
                        }

                        else{

                        }
                        ?></span></a>



            </div>
        </div>
    </nav>
</section>


<!-- Home -->
<section class="img-header-bg">
    <div class="header-upper-content">
        <h1 style="letter-spacing: 3px;">WE HELP YOU TO GET YOUR DREAM COME
            <span class="text-warning" style="border-bottom: 2px solid red;"> TRUE! developer

    </span>
        </h1>
    </div>
</section>
<br><br><br>
<!--=====================
Get our Jobs
===========================-->
<section>









    <div class="text-center">
        <h1>Our Latest Jobs</h1>
        <hr style="background: black;width: 200px;height: 4px;">
    </div>
    <br><br><br><br>

    <div class="container">






        <div class="row">
            <?php


            $sql = "SELECT * FROM company ORDER BY id DESC LIMIT 0, 6";


            $result = $con->query($sql);



            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    ?>
                    <div class="col-md-2 text-center">
                        <?php
                        if (isset($_SESSION['fname'])) {
                            ?>
                            <a href='frontpageclickresult.php?id=<?php echo $row['id'] ?>'> <img
                                        src="images/<?php echo $row['clogo']; ?>" width="100%" height="180"></a>
                            <?php
                        }

                        else {
                            ?>


                            <a href = "javascript:void(0)"onclick="message()"> <img src="images/<?php echo $row['clogo']; ?>" width="100%" height="180"></a>

                            <?php
                        }?>

                        <br>

                        <span class="job-btn"> <?php echo substr($row['cname'],0,15); ?>  </span><br>
                        <span class="job-btn"> <?php echo $row['ccity']; ?>

                    </div>

                    <?php
                }
            }

            ?>
        </div>

    </div>
</section>


<!-- ABOUT -->
<br><br><br><br><br><br>
<div class="container" id="about">
    <div class="text-center">
        <h1>About Us</h1>
        <hr style="background: black;width: 150px;height: 4px;">
    </div>
    <br><br><br><br>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-md-3">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/O3-irUSBfkE"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/O3-irUSBfkE"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/O3-irUSBfkE"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/O3-irUSBfkE"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>

            </div>
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-md-3">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/O3-irUSBfkE"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/O3-irUSBfkE"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/O3-irUSBfkE"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/O3-irUSBfkE"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <!-- Wrapper for slides -->

    <br><br>
    <!-- ===============================

    JOBS ACCORDING TO CITY:


    ===================================== -->
    <section>
        <div class="text-center">
            <h1>Jobs According to Cities</h1>
            <hr style="background: black;width: 200px;height: 4px;">
        </div>
        <br><br>
        <div class="container">
            <!-- portion 1 -->
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">
                        <?php
                        if (isset($_SESSION['fname'])) {
                            ?>

                            <a href="frontpagecityresult.php?city=Gujranwala"><img src="images/Gujranwala.jpg" width="100%" class="rounded" height="150"></a>
                            <?php
                        }

                        else {
                            ?>
                            <a href="javascript:void(0)"onclick="message()"><img src="images/Gujranwala.jpg"
                                                                                 width="100%" class="rounded"
                                                                                 height="150"></a>
                            <?php
                        }
                        ?>
                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <a href="#"><h3>Gujranwala</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">

                        <?php
                        if (isset($_SESSION['fname'])) {
                            ?>

                            <a href="frontpagecityresult.php?city=Faisalabad"><img src="images/fsd-8-bazar-780x405.jpg" width="100%" class="rounded" height="150"></a>
                            <?php
                        }

                        else {
                            ?>
                            <a href="javascript:void(0)"onclick="message()"><img src="images/fsd-8-bazar-780x405.jpg"
                                                                                 width="100%" class="rounded"
                                                                                 height="150"></a>
                            <?php
                        }
                        ?>


                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <a href="#"><h3>Faisalabad</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">

                        <?php
                        if (isset($_SESSION['fname'])) {
                            ?>

                            <a href="frontpagecityresult.php?city=Karachi"><img src="images/karachi.jpg" width="100%" class="rounded" height="150"></a>
                            <?php
                        }

                        else {
                            ?>
                            <a href="javascript:void(0)"onclick="message()"><img src="images/karachi.jpg"
                                                                                 width="100%" class="rounded"
                                                                                 height="150"></a>
                            <?php
                        }
                        ?>


                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <a href="#"><h3>Karachi</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">

                        <?php
                        if (isset($_SESSION['fname'])) {
                            ?>

                            <a href="frontpagecityresult.php?city=Lahore"><img src="images/mosque.jpg" width="100%" class="rounded" height="150"></a>
                            <?php
                        }

                        else {
                            ?>
                            <a href="javascript:void(0)"onclick="message()"><img src="images/mosque.jpg"
                                                                                 width="100%" class="rounded"
                                                                                 height="150"></a>
                            <?php
                        }
                        ?>


                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <a href="#"><h3>Lahore</h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- portion 2 -->
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">

                        <?php
                        if (isset($_SESSION['fname'])) {
                            ?>

                            <a href="frontpagecityresult.php?city=Multan"><img src="images/multan.jpg" width="100%" class="rounded" height="150"></a>
                            <?php
                        }

                        else {
                            ?>
                            <a href="javascript:void(0)"onclick="message()"><img src="images/multan.jpg"
                                                                                 width="100%" class="rounded"
                                                                                 height="150"></a>
                            <?php
                        }
                        ?>
                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <a href="#"><h3>Multan</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">
                        <?php
                        if (isset($_SESSION['fname'])) {
                            ?>

                            <a href="frontpagecityresult.php?city=Islamabad"><img src="images/Shah-Faisal-Masjid.jpg" width="100%" class="rounded" height="150"></a>
                            <?php
                        }

                        else {
                            ?>
                            <a href="javascript:void(0)"onclick="message()"><img src="images/Shah-Faisal-Masjid.jpg"
                                                                                 width="100%" class="rounded"
                                                                                 height="150"></a>
                            <?php
                        }
                        ?>

                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <a href="#"><h3>Isalamabad</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">
                        <?php
                        if (isset($_SESSION['fname'])) {
                            ?>

                            <a href="frontpagecityresult.php?city=sargodha"><img src="images/sargodha.jpg" width="100%" class="rounded" height="150"></a>
                            <?php
                        }

                        else {
                            ?>
                            <a href="javascript:void(0)"onclick="message()"><img src="images/sargodha.jpg"
                                                                                 width="100%" class="rounded"
                                                                                 height="150"></a>
                            <?php
                        }
                        ?>

                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <a href="#"><h3>Sargodha</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">
                        <?php
                        if (isset($_SESSION['fname'])) {
                            ?>

                            <a href="frontpagecityresult.php?city=Quetta"><img src="images/Quetta.jpg" width="100%" class="rounded" height="150"></a>
                            <?php
                        }

                        else {
                            ?>
                            <a href="javascript:void(0)"onclick="message()"><img src="images/Quetta.jpg"
                                                                                 width="100%" class="rounded"
                                                                                 height="150"></a>
                            <?php
                        }
                        ?>

                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <a href="#"><h3>Quetta</h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =========== -->
        </div>
    </section>

    <br><br>
    <!-- ======================
    Jobs By Industry

    ============================ -->
    <section>
        <div class="text-center">
            <h1>Jobs by industry</h1>
            <hr style="background: black;width: 200px;height: 4px;">
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">
                        <a href="#"><img src="images/Marketing-strategy.jpg" width="100%" class="rounded"></a>
                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <h3>Marketing</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">
                        <a href="#"><img src="images/web.jpg" width="100%" class="rounded"></a>
                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <h3 style="font-size: 22px;">Web Development</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">
                        <a href="#"><img src="images/android-development-services.jpg" width="100%" class="rounded"></a>
                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <h3 style="font-size: 22px;">Android Development</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-jobs-inner" style="position: relative;">
                        <a href="#"><img src="images/seo.jpg" width="100%" class="rounded"></a>
                        <div class="bg-jobs-outer" style="position: absolute;
    top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            <h3>SEO</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <!-- ===========================================

    DOWNLOAD OUR APPb
    ==================================================== -->
    <section class="download-1" style="background: #F9F9F9;">
        <div class="text-center">
            <h1>Get Our App</h1>

        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Download the food you love</h4>
                    <p>It's all at your fingertips -- the restaurants you love. Find the right food to suit your mood,
                        and make the first bite last. Go ahead, download us.</p>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#"><img src="images/playstore.png"
                                             class="img-fluid float-right rounded playstore-img" width="50%"></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#"><img src="images/applestore.png"
                                             class="img-fluid float-left rounded playstore-img1" width="50%"></a>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 mobile-app2" style="margin-top: 20px;">
                    <img src="images/mobile-app.png" width="100%" height="auto">
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <!-- ========================================================================= -->

    <section class="feed-back" style="background:#39495D;">
        <div class="container">
            <div class="text-center text-white pt-4">
                <h1>What Our Clients Says</h1>

            </div>
            <br><br>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="display-2 user-icon">
                                    <i class="fa fa-user text-white" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="text-white">One of the best telehealth apps i have ever come across.Very easy
                                    to operate and the process is also very smooth and quick.</p>
                                <br><br>
                                <h4 class="text-white">-Taimoor</h4>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="display-2 user-icon">
                                    <i class="fa fa-user text-white" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="text-white">One of the best telehealth apps i have ever come across.Very easy
                                    to operate and the process is also very smooth and quick.</p>
                                <br><br>
                                <h4 class="text-white">-Hamza</h4>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="display-2 user-icon">
                                    <i class="fa fa-user text-white" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="text-white">One of the best telehealth apps i have ever come across.Very easy
                                    to operate and the process is also very smooth and quick.</p>
                                <br><br>
                                <h4 class="text-white">-Fahad Munir</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="" aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="" aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    <br><br><br>
    <!-- FOOTER -->
    <footer class="" style="background: #000000;>

        <br><br><br>
        <br>

        <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="footer-ul">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <ul class="footer-social-1" style="list-style: none;">
                <li><a href="#"><i class="fa fa-map-marker pr-4 text-danger" aria-hidden="true"></i></a><span>Khokar Chownk Near Imporium Mall, Lahore</span>
                </li>
                <li><a href="#"><i class="fa fa-phone pr-4 text-danger" aria-hidden="true"></i>+9234645454</a>
                </li>
            </ul>
            <div class="ml-5">
                        <span class="pr-3"><a href="#"><i class="fa fa-whatsapp text-danger"
                                                          aria-hidden="true"></i></a></li></span>
                <span class="pr-3"><a href="#"><i class="fa fa-youtube-play text-danger" aria-hidden="true"></i></a></span>

                <span class="pr-3"><a href="#"><i class="fa fa-facebook text-danger" aria-hidden="true"></i></a></span>
            </div>

        </div>
    </div>
    <div class="text-center">
        <p style="color:#fff;">&copy; All reserved by Raazaq</p>
    </div>
</div>
</footer>


<!-- <script src="js/custom.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--  -->

<script>

    function message()
    {
        var message = "you are not loged in";
        alert(message);


    }


</script>
</body>
</html>
