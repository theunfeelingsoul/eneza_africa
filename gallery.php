<!DOCTYPE html>
<html>

<?php 

include 'init.php';


$gallery        = $eneza->get_gallery();
$gallery_cat    = $eneza->get_gallery_cat();
$blog           = $eneza->get_blog();


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



 ?>

<head>
    <title>Gallery | Eneza Africa</title>
    <?php include 'inc_header.php'; ?>
</head>

<body>
    <!-- Begin Navigation -->
    <?php include"inc_nav.php"; ?>
    <!-- End Navigation -->

    <!-- banner -->
    <div class="banner">
        <h2>Gallery</h2>
        <p><a href="index.html">Home »</a> Gallery </p>
    </div>
    <!--//banner -->

    <!-- Gallery -->
    <div class="portfolio w3layouts agileits" id="portfolio">
        <div class="container">

            <h3 class="heading">Gallery</h3>
            <ul class="portfolio-categ filter">
                <li class="port-filter all active">
                    <a href="#">All</a>
                </li>
                <?php foreach ($gallery_cat as $key => $cat): ?>
                    <li class="cat-item-<?=$cat['id']?>">
                        <a href="#" title="Camps"><?=$cat['category']?></a>
                    </li>
                <?php endforeach ?>

              
            </ul>


            <ul class="portfolio-area">

                    <?php $x=1 ?>
                <?php foreach ($gallery as $key => $g): ?>
                    
                    <li class="portfolio-item2" data-id="id-<?=$x?>" data-type="cat-item-<?=$g['category']?>">
                        <div>
                            <span class="image-block">
    							<a class="image-zoom" href="<?='backend/web/'.$g['img_path'] ?>" rel="prettyPhoto[gallery]">
    								<figure>
    									<!-- <img src="images/banner5.jpg" class="img-responsive w3layouts agileits" alt="Corporation"> -->
                                        <img src="<?='backend/web/'.$g['img_path'] ?>" class="img-responsive w3layouts agileits" alt="Corporation" />
    									<figcaption>
    										<h3><?= $g['caption'] ?></h3>
    									</figcaption>
    								</figure>
    							</a>
    						</span>
                        </div>
                    </li>
                    <?php $x++; ?>
                <?php endforeach ?>


               
                <div class="column-clear"></div>
            </ul>
            <!--end portfolio-area -->
        </div>
    </div>
    <!-- //Gallery -->


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


    



    <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
    <script src="js/jquery.quicksand.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>

</html>