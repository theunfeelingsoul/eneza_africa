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
    <title>Blogs | Eneza Africa</title>
    <?php include 'inc_header.php'; ?>
</head>


<body>

    <!-- header -->
   <?php include 'inc_nav.php'; ?>
    

    <div class="welcome">
    <div class="container">
        <h1 class="main-blog-title">ENEZA BLOGS</h1>
        <hr>
        <div class="blog-container">

            <div class="col-md-8">

                <?php foreach ($blog as $key => $value): ?>
                    
                    <div class="row">
                        <h2 class="blog-title"> <?= strtoupper($value['title']);  ?></h2>
                        <div class="row">
                            <div class="col-md-4 blogs-img-container">
                                <!-- <img src="images/banner6.jpg"  class="blogs-img"> -->
                                <img src="<?='backend/web/'.$value['main_image'] ?>" alt="" />

                            </div>
                            <div class="col-md-8 blogs-content">
                                <?= substr($value['content'], 0, 500).' ...';  ?>
                            </div>
                        </div>
                        <div class="row">
                            <a href="blog.php?id=<?= $value['id'] ?>" class="col-md-2 blogs-readmore pull-right">Read more</a>
                        </div>
                        <div class="row"> <hr></div>
                   </div>
                <?php endforeach ?>


            </div>
            <div class="col-md-4">
                <?php include "blog-sidebar.php" ?>
            </div>

        </div>
    </div>
    </div>

    

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