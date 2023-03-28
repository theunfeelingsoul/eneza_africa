<!DOCTYPE html>
<html>

<?php 


include 'init.php';
$blog           = $eneza->get_blog();
 ?>
<head>
    <title>Contact | Eneza Africa</title>
    <?php include 'inc_header.php'; ?>
</head>


<body>
       <!-- header -->
    <?php include 'inc_nav.php'; ?>
    <!-- //header -->

    <!-- banner -->
    <div class="banner">
        <h2>Contact Us</h2>
        <p><a href="index.html">Home »</a> Contact us </p>
    </div>
    <!--//banner -->


    <!-- contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact-heading">
                <h3 class="heading">Contact us</h3>
            </div>
            <div class="contact-grids">
                <div class=" col-md-5 contact-form">
                    <h4 class="heading">Get In Touch</h4>
                    <form action="#" method="post">
                        <input type="text" placeholder="Full Name" required="" />
                        <input type="email" placeholder="Your Mail" required />
                        <input type="text" placeholder="Mobile Number" required="" />
                        <textarea placeholder="Message" required></textarea>
                        <div class="submit1">
                            <input type="submit" value="send">
                        </div>
                    </form>
                </div>
                <div class=" col-md-7 map">
                    <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=-1.2920659,36.82194619999996&amp;q=Nairobi+(Ebeneza%20afrika)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0">Eneza Afrika</iframe>
                    <div class="col-md-4 contact-grid1">
                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                        <div class="contact-right">
                            <p>Address</p>
                            <span><?=$contact['address'] ?></span>
                        </div>
                    </div>
                    <div class="col-md-4 contact-grid1">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="contact-right">
                            <p>Phone</p>
                            <span><?=$contact['phone']; ?></span>
                        </div>
                    </div>
                    <div class="col-md-4 contact-grid1">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="contact-right">
                            <p>Email</p>
                            <a href="#"><?= $contact['email'] ?></a>
                            <!-- <a href="mailto:info@example1.com">enezaafrika@gmail.com</a> -->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->


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