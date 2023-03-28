<div class="footer_top_agileits">

        <div class="container-fluid">

            <div class="col-md-4 footer_grid">

                <h3>About Us</h3>

                <p>As a Company we believe that while formal education is essential in imparting knowledge, a gap exists within Kenya when it comes to the teaching and acquisition of life skills necessary to navigate the 21st century.</p>

                <div class="read">

                    <a href="about.php">Read more »</a>

                </div>

            </div>

            <div class="col-md-4 footer_grid">

                <h3>Recent Posts</h3>

                <ul class="footer_grid_list">
                    <?php foreach ($blog as $key => $value): ?>
        
                        <div class="row sidebar-item">
                            <div class="col-md-4 blogs-sidebar-img">
                                <img src="<?='backend/web/'.$value['main_image'] ?>" alt=""/>
                            </div>
                            <div class="col-md-8 sidebar-link-title">
                                <a href="blog.php?id=<?= $value['id'] ?>" class=""><?=$value['title'] ?></a>
                            </div>
                        </div>
                        <!-- <hr> -->   
                    <?php endforeach ?>
                </ul>

            </div>

            <div class="col-md-4 footer_grid">

                <h3>Contact Info</h3>

                <ul class="address">

                    <!-- <li><i class="fa fa-map-marker" aria-hidden="true"></i>3241 USA, Collection building, <span>New York City.</span></li> -->

                    <!-- <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">enezaafrika@gmail.com</a></li> -->

                    <li><i class="fa fa-phone" aria-hidden="true"></i>(+254) 704 172745 / 736 681158</li>

                    <li><i class="fa fa-globe" aria-hidden="true"></i><a href="#"><?=$contact['email'] ?></a></li>
                    <li><i class="fa fa-facebook" aria-hidden="true"></i>
                        <a href="<?= $contact['facebook'] ?>">Facebook</a>
                    </li>
                    <li><i class="fa fa-twitter" aria-hidden="true"></i>
                        <a href="<?= $contact['twitter'] ?>">Twitter</a>
                    </li>

                </ul>

            </div>



            <div class="clearfix"> </div>

        </div>

    </div>

    <div class="footer_w3ls">

        <div class="container">

            <div class="footer_bottom1">

                <!-- <p>© 2018 Corporation. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->

                <p>Eneza Africa</p>

            </div>

        </div>

    </div>

    <!-- bootstrap-modal-pop-up -->

    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    TEENS CAMP

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>

                <div class="modal-body">

                    <img src="images/banner1.jpg" alt=" " class="img-responsive" />

                    <p>The April 2018 Camp is based on our first module which is self awareness. The theme is <i>“You and your place in the your world”</i> We hope that at the end of the four days the young people will have a better understanding, of who

                        they are and their talents. The curriculum is delivered in a constructive, experiential way. Most of it is activity based, The child does the work, Individually or in groups.</p>



                    <div class="download-button" style="height: 50px; padding-right: 30px;">

                        <a class="btn btn-primary sbtn-lg" href="docs/Camp-Registration Form 2018.docx" download="Camp-Registration Form 2018.docx">Download Registration Form &downarrow;</a>

                    </div>

                </div>



            </div>

        </div>

    </div>

    <!-- //bootstrap-modal-pop-up -->



    <!-- js -->

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>



    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>



    <!-- stats -->

    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.countup.js"></script>

    <script>

        $('.counter').countUp();

    </script>

    <!-- //stats -->

 <!-- Popup -->
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- //Popup -->


    <!-- owl carousel -->

    <script src="js/owl.carousel.js"></script>

    <script>

        $(document).ready(function() {

            $("#owl-demo").owlCarousel({



                autoPlay: 3000, //Set AutoPlay to 3 seconds

                autoPlay: true,

                items: 4,

                itemsDesktop: [991, 2],

                itemsDesktopSmall: [414, 4]



            });

        });

    </script>

    <!-- //owl carousel -->



    <!-- Responsive slider  -->

    <script src="js/responsiveslides.min.js"></script>

    <script>

        $(function() {

            $("#slider4").responsiveSlides({

                auto: true,

                pager: true,

                nav: true,

                speed: 1000,

                namespace: "callbacks",

                before: function() {

                    $('.events').append("<li>before event fired.</li>");

                },

                after: function() {

                    $('.events').append("<li>after event fired.</li>");

                }

            });

        });

    </script>

    <!-- //Responsive slider  -->



    <!-- Flex slider-script -->

    <script defer src="js/jquery.flexslider.js"></script>

    <script type="text/javascript">

        $(window).load(function() {

            $('.flexslider').flexslider({

                animation: "slide",

                start: function(slider) {

                    $('body').removeClass('loading');

                }

            });

        });

    </script>

    <!-- //Flex slider-script -->



    <!-- start-smooth-scrolling -->

    <script src="js/move-top.js"></script>

    <script src="js/easing.js"></script>

    <script>

        jQuery(document).ready(function($) {

            $(".scroll").click(function(event) {

                event.preventDefault();



                $('html,body').animate({

                    scrollTop: $(this.hash).offset().top

                }, 1000);

            });

        });

    </script>

    <!-- //end-smooth-scrolling -->



    <!-- smooth-scrolling-of-move-up -->

    <script>

        $(document).ready(function() {

            /*

            var defaults = {

                containerID: 'toTop', // fading element id

                containerHoverID: 'toTopHover', // fading element hover id

                scrollSpeed: 1200,

                easingType: 'linear' 

            };

            */



            $().UItoTop({

                easingType: 'easeOutQuart'

            });



        });

    </script>

    <!-- //smooth-scrolling-of-move-up -->



    <!-- smooth scrolling js -->

    <script src="js/SmoothScroll.min.js"></script>

    <!-- //smooth scrolling js -->

