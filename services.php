<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<?php 


include 'init.php';
$blog   = $eneza->get_blog();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 ?>
<head>

    <title>Services | Eneza Africa</title>
    <?php include 'inc_header.php'; ?>

</head>



<body>
    <!-- header -->
    <?php include 'inc_nav.php'; ?>
  
    <!-- //header -->
    <!-- banner -->
    <div class="banner">
        <h2>Services</h2>
        <p><a href="index.html">Home »</a> Services </p>
    </div>
    <!--//banner -->

    <!-- Services -->
    <div class="services">
        <div class="container">
            <h3 class="heading">Services</h3>
            <div class="service_grids">
                <div class="col-md-3 service_grid1">
                    <img src="images/camp.jpg" alt="service1" />
                </div>
                <div class="col-md-3 service_grid2">
                    <h3>Camps</h3>
                    <p></p>
                    <div class="read">
                        <a href="#" data-toggle="modal" data-target="#myModal">Read more »</a>
                    </div>
                </div>
                <div class="col-md-3 service_grid1">
                    <img src="images/serv3.jpg" alt="service2" />
                </div>
                <div class="col-md-3 service_grid2">
                    <h3>Workshops</h3>
                    <p></p>
                    <div class="read">
                        <a href="#" data-toggle="modal" data-target="#myModal">Read more »</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3 col-sm-0"></div>
                <div class="col-md-3 service_grid1">
                    <img src="images/serv2.jpg" alt="service1" />
                </div>
                <div class="col-md-3 service_grid2">
                    <h3>Seminars</h3>
                    <p></p>
                    <div class="read">
                        <a href="#" data-toggle="modal" data-target="#myModal">Read more »</a>
                    </div>
                </div>

                <!-- <div class="col-md-3 service_grid2">
                    <h3>24/7 Support</h3>
                    <p>Nulla facilisi. Proin vel commodo leo. Ut mauris tortor, cursus ut massa vitae, iaculis vehicula turpis. Nam libero tempor.</p>
                    <div class="read">
                        <a href="#" data-toggle="modal" data-target="#myModal">Read more »</a>
                    </div>
                </div>
                <div class="col-md-3 service_grid1">
                    <img src="images/serv4.jpg" alt="service2" />
                </div> -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //Services -->


    <!-- counter -->
    <div class="services-bottom stats" style="display: none;">
        <div class="banner-dott1">
            <div class="container" style="opacity: 0;">
                <h3 class="heading">Our Statistics</h3>
                <div class="wthree-agile-counter">
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-tent" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">2</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>Successful Camps</h4>
                        </div>
                    </div>
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">40</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>Enrolled Youths</h4>
                        </div>
                    </div>
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">4</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>Workshops Arranged</h4>
                        </div>
                    </div>
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">234</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>Seminars Held</h4>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //counter -->

    <!-- /newsletter-->
    <div class="newsletter_w3layouts_agile">
        <div class="col-sm-6 newsleft">
            <h3>Sign up for Newsletter !</h3>
        </div>
        <div class="col-sm-6 newsright">
            <form action="#" method="post">
                <input type="email" placeholder="Enter your email..." name="email" required="">
                <input type="submit" value="Submit">
            </form>
        </div>

        <div class="clearfix"></div>
    </div>
    <!-- //newsletter-->

    <!-- footer -->
    <?php include "inc_footer.php"; ?>
    <!-- //footer -->


    

</body>

</html>