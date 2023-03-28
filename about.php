<!DOCTYPE html>
<html>


<?php 


include 'init.php';

$about   = $eneza->get_about();
$blog   = $eneza->get_blog();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 ?>

<head>

    <title>Eneza Africa | About</title>
    <?php include 'inc_header.php'; ?>

</head>



<body>

    <!-- Begin Navigation -->
    <?php include"inc_nav.php"; ?>
    <!-- End Navigation -->

    <!-- banner -->
    <div class="banner">
        <h2>About Us</h2>
        <p><a href="index.html">Home »</a> About us </p>
    </div>
    <!--//banner -->

    <!-- banner bottom -->
    <!-- <div class="welcome">
        <div class="container">
            <div class="col-md-6 welcome_left">
                <div class="layer1">
                    <div class="welcome_left_info">
                        <h3>We offer best services</h3>
                        <p>Lorem ipsum dolor sit amet aueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus. Etiam malesuada tellus quis posuere eleifend. Donec varius nisi at</p>
                        <div class="read">
                            <a href="about.html">Read more »</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 welcome_right">
                <div class="inner_grid1">
                    <div class="col-md-2 icon color1">
                        <span class="fa fa-file-o" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 grid_info">
                        <h3>Financial Executive</h3>
                        <p>Lorem ipsum dolor sit amet aueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus. Etiam malesuada tellus quis posuere eleifend. Donec varius nisi at</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="inner_grid1">
                    <div class="col-md-2 icon color2">
                        <span class="fa fa-diamond" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 grid_info">
                        <h3>Management System</h3>
                        <p>Lorem ipsum dolor sit amet aueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus. Etiam malesuada tellus quis posuere eleifend. Donec varius nisi at</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="inner_grid1">
                    <div class="col-md-2 icon color3">
                        <span class="fa fa-line-chart" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 grid_info">
                        <h3>Business Analytics</h3>
                        <p>Lorem ipsum dolor sit amet aueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus. Etiam malesuada tellus quis posuere eleifend. Donec varius nisi at</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div> -->
    <!-- 
        //banner bottom -->

    <!-- Who we are -->
    <div class="who" id="about">
        <div class="layer">
            <h3 class="heading">About Us</h3>
            <div class="container">
                <div class="who_grids">
                    <div class="col-md-12 who_grid_left">
                        <h3 style="color: #3555dd;">Who we are</h3>
                         <?= $about['about'];  ?>
                        
                    </div>
                   <!--  <div class="col-md-6 who_grid_right">
                        <p>We believe that while formal education is essential in imparting knowledge, a gap exists within Kenya when it comes to the teaching and acquisition of life skills necessary to navigate the 21st century and beyond.</p>

                        <p style="color: white; font-weight: 500; font-size: 1.1em;">At Eneza Afrika we believe that knowledge acquisition is best achieved through experiential and interactive learning.</p>

                        <p>We endeavor to create Activity-based experiences for the children.</p>

                        <img src="images/banner5.jpg" alt="" style="padding-top: 20px; opacity: 0.6; width: 100%">
                        <div class="bar-grids">
                            <h6>Management<span> 90% </span></h6>
                            <div class="progress">
                                <div class="progress-bar bar1 progress-bar-striped active" style="width: 90%">
                                </div>
                            </div>
                            <div class="mid-bar">
                                <h6>Marketing<span> 75% </span></h6>
                                <div class="progress">
                                    <div class="progress-bar bar2 progress-bar-striped active" style="width: 75%">
                                    </div>
                                </div>
                            </div>
                            <div class="mid-bar">
                                <h6>Strategy<span>80% </span></h6>
                                <div class="progress">
                                    <div class="progress-bar bar3 progress-bar-striped active" style="width: 80%">
                                    </div>
                                </div>
                            </div>
                            <h6>Deployment<span>95% </span></h6>
                            <div class="progress">
                                <div class="progress-bar bar4 progress-bar-striped active" style="width: 95%">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Who we are -->

    <!-- Why we are different -->

   <!--  <div class="welcome">
        <div class="container">
            <h3 class="heading">Why we are different</h3>
            <div class="col-md-12 welcome_right">
                <div class="inner_grid1">
                    <div class="col-md-2 icon color1">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="color:#5555cc; font-size: 40px;
						text-align: center;"></span>
                    </div>
                    <div class="col-md-10 grid_info">
                        <h3>Thematic Approach</h3>
                        <p>Each of our camps are arranged around a theme. This theme is derived from an internal curriculum developed by our able team. Each theme represents a module within the curriculum which is intended to teach life skills. The April
                            2018 Camp is based on our first module which is self awareness. The theme is “You and your place in the your world” We hope that at the end of the four days the young people will have a better understanding, of who they are
                            and their talents. The curriculum is delivered in a constructive, experiential way. Most of it is activity based, The child does the work, Individually or in groups. </p>
                        <br>
                        <p>There are over arching themes that must be present in every module these are:
                            <ul>
                                <li>
                                    <b>Responsibility</b> - During the camps the children will be expected to take responsibility for their areas, chores and selves. They will sign contracts to that effect and will be trusted to keep their word.
                                </li>
                                <li>
                                    <b>Team work</b> - They will be divided into teams each led by a pair of young leaders. They will be expected to be collectively responds for each other. The team wins or fails based on how they work together.
                                </li>
                                <li>
                                    <b>Communication</b> - Communication is the conduit for effective socialisation. Children today are facing challenges with effective, courteous communication. Effort will be made to include aspects of learning to effectively
                                    communicate in every activity.
                                </li>
                                <li>
                                    <b>Leadership</b> - This refers to personal as well as team leadership.
                                </li>
                            </ul>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="inner_grid1">
                    <div class="col-md-2 icon color2">
                        <span class="fa fa-user-o" aria-hidden="true"></span><span class="fa fa-long-arrow-right" aria-hidden="true"></span><span class="fa fa-users" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 grid_info">
                        <h3>‘I’ – ‘We’ Model</h3>
                        <p>We hope to empower our young people to recognise that sharpening of self and skills is an ongoing process. However “self” is never an isolated concept, a person does not exist in isolation. We co-exist, work together to achieve
                            common goals. We have developed a model based the concepts <b>‘I’</b> and <b>‘WE’</b>. ‘I’ and ‘WE’ must be empowered and must complement each other.</p><br>
                        <p>
                            <ul>
                                <li>
                                    <b>‘I’</b> This stands for the Individual. Change must come from the person first. the ‘I’ modules cover individual growth.
                                </li>
                                <li>
                                    <b>‘WE’</b> In ‘WE' we endeavour to teach team skills. Team skills are important in the 21st century skill set.
                                </li>
                                <li>
                                    <b>‘I-WE’</b> Knowledge learnt under the “I” modules is then transferred to ‘WE’. Learning to work together to achieve success. Learners expected to analyze how the “WE” enhanced their “I” and the cycle continues.
                                </li>
                            </ul>
                        </p>

                        <br>
                        <p>

                            Each program is guided by this concept. First the person then the world.

                        </p>
                        <br>

                        <p>

                            <blockquote>“Your own Self-Realisation is the greatest service you can render the world.” <br>― Ramana Maharshi</blockquote>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="inner_grid1">
					<div class="col-md-2 icon color3">
						<span class="fa fa-line-chart" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 grid_info">
						<h3>Business Analytics</h3>
						<p>Lorem ipsum dolor sit amet aueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus. Etiam malesuada tellus quis posuere eleifend. Donec varius nisi at</p>
					</div>
					<div class="clearfix"></div>
				</div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
 -->
    <!-- //Why we are different -->


    <!-- pricing plans -->
    <!-- <div class="pricing">
        <h3 class="heading">Why we are different</h3>
        <div class="container">
            <div class="w3l-pricing-grids">
                <div class="agileits-pricing-grid first">
                    <div class="pricing_grid">
                        <div class="pricing-top">
                            <h3>Corporate</h3>
                        </div>
                        <div class="wthree-pricing-info">
                            <p>$<span>50</span>/month</p>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-bottom-bottom">
                                <p><span>Unlimited</span> Email Addresses</p>
                                <p><span>65GB </span> of Storage</p>
                                <p><span>1</span> Website</p>
                                <p><span>Unlimited</span> Bandwidth</p>
                                <p class="text"><span>24/7</span> Customer Support</p>
                            </div>
                            <div class="buy-button">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Sign Up »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agileits-pricing-grid second">
                    <div class="pricing_grid">
                        <div class="pricing-top blue-top">
                            <h3>Personal</h3>
                        </div>
                        <div class="wthree-pricing-info blue-top">
                            <p>$<span>35</span>/month</p>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-bottom-bottom blue-pricing-bottom-top">
                                <p><span>Unlimited</span> Email Addresses</p>
                                <p><span>50GB </span> of Storage</p>
                                <p><span>1</span> Website</p>
                                <p><span>Unlimited</span> Bandwidth</p>
                                <p class="text"><span>24/7</span> Customer Support</p>
                            </div>
                            <div class="buy-button">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Sign Up »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agileits-pricing-grid third">
                    <div class="pricing_grid">
                        <div class="pricing-top green-top">
                            <h3>Professional</h3>
                        </div>
                        <div class="wthree-pricing-info green-top">
                            <p>$<span>70</span>/month</p>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-bottom-bottom green-pricing-bottom-top">
                                <p><span>Unlimited</span> Email Addresses</p>
                                <p><span>85GB </span> of Storage</p>
                                <p><span>1</span> Website</p>
                                <p><span>Unlimited</span> Bandwidth</p>
                                <p class="text"><span>24/7</span> Customer Support</p>
                            </div>
                            <div class="buy-button">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Sign Up »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div> -->
    <!-- //pricing plans -->


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