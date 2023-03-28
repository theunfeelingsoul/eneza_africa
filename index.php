<!DOCTYPE html>

<html>



<?php 


include 'init.php';


$vision = $eneza->get_vision();
$team   = $eneza->get_team();
$blog   = $eneza->get_blog();



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 ?>
<head>
    <title>Home | Eneza Africa</title>
    <?php include 'inc_header.php'; ?>
</head>

<body>



    <!-- header -->
    <?php include 'inc_nav.php'; ?>
    <!-- //header -->



    <!-- banner -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->

        <ol class="carousel-indicators">

            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

            <li data-target="#myCarousel" data-slide-to="1" class=""></li>

            <!-- <li data-target="#myCarousel" data-slide-to="2" class=""></li>

            <li data-target="#myCarousel" data-slide-to="3" class=""></li>

            <li data-target="#myCarousel" data-slide-to="4" class=""></li> -->

        </ol>

        <div class="carousel-inner" role="listbox">

            <!-- <div class="item active">

                <div class="container">

                    <div class="carousel-caption">

                        <div class="col-md-6 banner_left">

                            <h3>Eneza africa TEENS CAMP <span>April 2018</span></h3>

                            <h4>Theme: SELF AWARENESS</h4>

                        </div>

                        <div class="col-md-6 banner_right">

                            <p>Your Talent and It’s Place in your World.</p>

                            <div class="agileits-button top_ban_agile">

                                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>

                            </div>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                </div>

			</div> -->

            <div class="item active">

                <div class="container">

                    <div class="carousel-caption">

                        <h3>Eneza africa TEENS CAMP <br><span>August 2018</span></h3>

                        <h4>Theme: TEAM WORK</h4>



                        <p>Your Talent and It’s Place in your World.</p>

                      <!--   <div class="agileits-button top_ban_agile">

                            <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>

                        </div>
 -->


                    </div>

                </div>

            </div>

            <div class="item item2">

                <div class="container">

                    <div class="carousel-caption text-center">

                        <h3>Eneza africa TEENS CAMP <span>August 2018</span></h3>

                        <p>In an ever changing world, we must change how we train children and be intentional in their learning.</p>

                        <!-- <div class="agileits-button top_ban_agile">

                            <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>

                        </div> -->

                    </div>

                </div>

            </div>

            <!-- <div class="item item3">

                <div class="container">

                    <div class="carousel-caption">

                        <h3>Business Analytics <span>Course.</span></h3>

                        <p>sagittis quis turpis vel, facilisis posuere erat. Nulla facilisi. Proin vel commodo leo. Ut mauris tortor, cursus ut massa vitae, iaculis vehicula turpis. Pellentesque blandit egestas risus, in porttitor mi sagittis sed. Vestibulum

                            vestibulum quis metus vitae tincidunt. </p>

                        <div class="agileits-button top_ban_agile">

                            <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="item item4">

                <div class="container">

                    <div class="carousel-caption text-right">

                        <h3>Strength Strategy <span>Solutions.</span></h3>

                        <p>sagittis quis turpis vel, facilisis posuere erat. Nulla facilisi. Proin vel commodo leo. Ut mauris tortor, cursus ut massa vitae, iaculis vehicula turpis. Pellentesque blandit egestas risus, in porttitor mi sagittis sed. Vestibulum

                            vestibulum quis metus vitae tincidunt. </p>

                        <div class="agileits-button top_ban_agile">

                            <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="item item5">

                <div class="container">

                    <div class="carousel-caption">

                        <h3>Support Management <span>Service.</span></h3>

                        <p>sagittis quis turpis vel, facilisis posuere erat. Nulla facilisi. Proin vel commodo leo. Ut mauris tortor, cursus ut massa vitae, iaculis vehicula turpis. Pellentesque blandit egestas risus, in porttitor mi sagittis sed. Vestibulum

                            vestibulum quis metus vitae tincidunt. </p>

                        <div class="agileits-button top_ban_agile">

                            <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>

                        </div>

                    </div>

                </div>

            </div> -->

        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

            <span class="fa fa-chevron-left" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

            <span class="fa fa-chevron-right" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>

        <!-- The Modal -->

    </div>

    <!-- //banner -->



    <!-- banner bottom -->

    <div class="welcome">

        <div class="container">

            <div class="col-md-6 welcome_left">

                <div class="layer1">

                    <div class="welcome_left_info">

                        <h3>Eneza Africa</h3>

                        <p>Eneza Africa is an organisation dedicated to providing unique, educational, out of class experiences for young people and children.</p>

                        <div class="read">

                            <a href="about.php">Read more »</a>

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

                        <h3><?= $vision ['vision_title'] ?></h3>

                        <p><?= $vision ['vision_statement'] ?></p>

                    </div>

                    <div class="clearfix"></div>

                </div>

                <div class="inner_grid1">

                    <div class="col-md-2 icon color2">

                        <span class="fa fa-file-o" aria-hidden="true"></span>

                    </div>

                    <div class="col-md-10 grid_info">

                        
                         <h3><?= $vision ['mission_title'] ?></h3>

                        <p><?= $vision ['mission_statement'] ?></p>

                    </div>

                    <div class="clearfix"></div>

                </div>

                <!-- <div class="inner_grid1">

                    <div class="col-md-2 icon color3">

                        <span class="fa fa-line-chart" aria-hidden="true"></span>

                    </div>

                    <div class="col-md-10 grid_info">

                        <h3>Business Analytics</h3>

                        <p>Lorem ipsum dolor sit amet aueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus. Etiam malesuada tellus quis posuere eleifend. Donec varius nisi at</p>

                    </div>

                    <div class="clearfix"></div>

                </div> -->

            </div>

            <div class="clearfix"></div>

        </div>

    </div>

    <!-- //banner bottom -->



    <!-- Team -->

    <div class="team" id="team">

        <h3 class="heading">The Team</h3>

        <div class="container">

            <div class="flexslider-info">

                <section class="slider">

                    <div class="flexslider">

                        <ul class="slides">

                            <li>

                                <div class="w3l-info1">

                                	<!-- _____________________________ -->

                                	<?php foreach ($team as $key => $value): ?>

										<div class="col-md-6">
	                                        <div class="col-md-5 team-grid-1">
	                                            <img src="<?='backend/web/'.$value['img'] ?>" alt="" />
	                                        </div>

	                                        <div class="col-md-7 team-grid-2">

	                                            <h4><?= $value['name'] ;?></h4>

	                                            <h5> <?= $value['title']; ?></h5>

	                                            <p>
	                                            	<?= $value['intro']; ?>

	                                            </p>

	                                            <!-- <div class="w3ls-social-icons text-left">

	                                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>

	                                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>

	                                                <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>

	                                                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>

	                                            </div> -->

	                                        </div>

	                                        <a href="team.php">View full Profile</a>

	                                        <div class="clearfix"></div>



	                                    </div>
                                    <?php endforeach ?>
                                	<!-- ************************** -->


                                    <div class="clearfix"></div>

                                </div>

                            </li>



                        </ul>

                    </div>

                </section>

            </div>

        </div>

    </div>

    <!-- //Team -->





    <!-- testimonials free consulting -->

    <div class="test_consultant">

        <div class="container">

            <!-- Testimonials Slider-->

            <div class="slider col-md-6">

                <h3 class="heading">Young Leaders</h3>

                <div class="callbacks_container">

                    <ul class="rslides callbacks callbacks1" id="slider4">

                        <li>

                            <div class="testimonial">

                                <div class="col-md-3 test_img">

                                    <img src="images/child1.png" alt="client1" />

                                </div>

                                <div class="col-md-9 test_info">

                                    <h4>Francis</h4>

                                    <h5>Young Leader</h5>

                                    <ul class="rating">

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star-half-o" aria-hidden="true"></span></li>

                                    </ul>

                                </div>

                                <div class="clearfix"></div>

                                <p>Awesome time, A great learning experience for me. I hope I get to do this again.</p>

                            </div>

                        </li>

                        <li>

                            <div class="testimonial">

                                <div class="col-md-3 test_img">

                                    <img src="images/child2.png" alt="client1" />

                                </div>

                                <div class="col-md-9 test_info">

                                    <h4>Njeke</h4>

                                    <h5>Young Leader</h5>

                                    <ul class="rating">

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star-half-o" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star-o" aria-hidden="true"></span></li>

                                    </ul>

                                </div>

                                <div class="clearfix"></div>

                                <p>Fun activities, Awesome Friendships, Beautiful People... What more can I say! </p>

                            </div>

                        </li>

                        <li>

                            <div class="testimonial">

                                <div class="col-md-3 test_img">

                                    <img src="images/child3.png" alt="client1" />

                                </div>

                                <div class="col-md-9 test_info">

                                    <h4>James</h4>

                                    <h5>Young Leader</h5>

                                    <ul class="rating">

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star-o" aria-hidden="true"></span></li>

                                    </ul>

                                </div>

                                <div class="clearfix"></div>

                                <p>A wholesome experience that even time cannnot fade.</p>

                            </div>

                        </li>

                        <li>

                            <div class="testimonial">

                                <div class="col-md-3 test_img">

                                    <img src="images/child4.png" alt="client1" />

                                </div>

                                <div class="col-md-9 test_info">

                                    <h4>Michelle</h4>

                                    <h5>Young Leader</h5>

                                    <ul class="rating">

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star-o" aria-hidden="true"></span></li>

                                    </ul>

                                </div>

                                <div class="clearfix"></div>

                                <p>This is the most lit program anywhere in Kenya for children and the youth especially. </p>

                            </div>

                        </li>

                        <li>

                            <div class="testimonial">

                                <div class="col-md-3 test_img">

                                    <img src="images/child5.jpg" alt="client1" />

                                </div>

                                <div class="col-md-9 test_info">

                                    <h4>Kyama</h4>

                                    <h5>Young Leader</h5>

                                    <ul class="rating">

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star" aria-hidden="true"></span></li>

                                        <li><span class="fa fa-star-o" aria-hidden="true"></span></li>

                                    </ul>

                                </div>

                                <div class="clearfix"></div>

                                <p>I got to do what I love most, share my love for music with the teens. Learnt stuff too, like teamwork, reponsibility and improved my cooking skills! </p>

                            </div>

                        </li>

                    </ul>

                    <div class="clearfix"> </div>

                </div>

            </div>

            <!-- //Testimonials Slider-->



            <!-- Free consulting -->

            <div class="consulting col-md-6">

                <h3 class="heading">Get In Touch</h3>

                <div class="wthree-contact-form">

                    <form action="#" method="post">

                        <input type="text" name="Name" placeholder="Name" required="">

                        <input type="email" class="email" name="Email" placeholder="Email" required="">

                        <div class="clearfix"></div>

                        <input type="text" class="number" name="number" placeholder="Phone Number" required="">

                        <textarea name="Message" placeholder="Message" required=""></textarea>

                        <input type="submit" value="SUBMIT">

                    </form>

                </div>

            </div>

            <!-- //Free consulting -->

            <div class="clearfix"> </div>

        </div>

    </div>




    <!-- footer -->

    <?php include "inc_footer.php"; ?>

    <!-- //footer -->






    



</body>



</html>