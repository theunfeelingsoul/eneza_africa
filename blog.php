<!DOCTYPE html>
<html>


<?php 


include 'init.php';

$single_blog   = $eneza->get_single_blog($_GET["id"]);
$blog   = $eneza->get_blog();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 ?>
<head>
    <title>Blog | Eneza Africa</title>
    <?php include 'inc_header.php'; ?>
</head>


<body>


    <!-- header -->
    <?php include 'inc_nav.php'; ?>
    <!-- //header -->
    

    <div class="container">
        <div class="welcome">
            <div class="blog-container">
                <div class="col-md-8">
                    <div class="row">
                         <h3 class="blog-title"> <?= strtoupper($single_blog['title']);  ?></h3>
                    </div>
                    <div class="row">
                        <div class="single-blogs-img-container">
                            <!-- <img src="images/banner6.jpg"  class="blogs-img"> -->
                            <img src="<?='backend/web/'.$single_blog['main_image'] ?>" alt="" />

                        </div>
                    </div>
                    <div class="row">
                        <div class="blogs-content">
                            <?= $single_blog['content'];  ?>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php include "blog-sidebar.php" ?>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php include "inc_footer.php"; ?>
    <!-- //footer -->

    

</body>

</html>