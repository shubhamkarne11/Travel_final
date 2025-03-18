<?php
require('include/db.php');
$query = "SELECT * FROM top_nav,nav,section_control,about,package,blog,footer,home";
$run = mysqli_query($con,$query);
$user_data = mysqli_fetch_array($run);
?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travel HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    
  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <style>
    .blog_area .row{
        margin-left: 260px;
    }
  </style>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="images/<?=$user_data['home_logo1']?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="header-info-left">
                                <ul>                          
                                    <li><?=$user_data['email']?></li>
                                    <li><?=$user_data['phone']?></li>
                                    <li><?=$user_data['address']?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-info-right f-right">
                                <ul class="header-social">    
                                <?php
                                            if($user_data['twitter_section']){
                                               ?>                                                                                                                                     
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <?php
                                            }
                                            if($user_data['linkedin_section']){
                                            ?>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <?php
                                            }
                                            if($user_data['facebook_section']){
                                            ?>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <?php
                                            }
                                            if($user_data['pinterest_section']){
                                            ?>
                                            <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <?php
                                            }
                                            ?>
                                </ul>
                            </div>
                        </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                  <a href="index.php"><img src="images/<?=$user_data['home_logo1']?>" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>               
                                        <ul id="navigation">                                                                                                                                     
                                        <?php
                                            if($user_data['home_section']){
                                                ?>                                                                                                                                     
                                            <li><a href="index.php">Home</a></li>
                                            <?php
                                            }
                                            if($user_data['about_section']){
                                            ?>
                                            <li><a href="about.php">About</a></li>
                                            <?php
                                            }
                                            if($user_data['package_section']){
                                            ?>
                                            <li><a href="packages.php">Package</a></li>
                                            <?php
                                            }
                                            if($user_data['blog_section']){
                                            ?>
                                            <li><a href="blog.php">Blog</a>
                                            </li>
                                            <?php
                                            }                                          
                                            if($user_data['contact_section']){
                                            ?>
                                            <li><a href="contact.php">Contact Us</a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
  
     <!-- slider Area Start-->
     <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="images/<?=$user_data['blog_bg1']?>">
            <div class="container">
                <div class="">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Blog Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!-- slider Area End-->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php
                        
                        $query6 = "SELECT * FROM blog_card order by 1 desc";
                        $run6 = mysqli_query($con,$query6);
                        $d =1;
                        while($card2 = mysqli_fetch_array($run6)){    
                            ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="images/<?=$card2['card_img']?>" alt="">
                                <a  class="blog_item_date">
                                    <h3><?=$card2['card_date']?></h3>
                                    
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single_blog1.php?id=<?=$card2['id']?>">
                                    <h2><?=$card2['card_subt']?></h2>
                                </a>
                                <p><?=$card2['card_desc']?></p>
                                <!-- <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul> -->
                            </div>
                        </article>
                        <?php
                        $d++;
                            }
                            ?>


                        
                        <!-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
                    </div>





                </div>
                <!-- <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p><?=$user_data['blog_cate1']?></p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p><?=$user_data['blog_cate2']?></p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p><?=$user_data['blog_cate3']?></p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p><?=$user_data['blog_cate4']?></p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p><?=$user_data['blog_cate5']?></p>
                                        <p>21</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p><?=$user_data['blog_cate6']?></p>
                                        <p>09</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="media post_item">
                                <img src="images/<?=$user_data['blog_rpic1']?>" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3><?=$user_data['blog_rt1']?></h3>
                                    </a>
                                    <p><?=$user_data['blog_rd1']?></p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="images/<?=$user_data['blog_rpic2']?>" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3><?=$user_data['blog_rt2']?></h3>
                                    </a>
                                    <p><?=$user_data['blog_rd2']?></p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="images/<?=$user_data['blog_rpic3']?>" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3><?=$user_data['blog_rt3']?></h3>
                                    </a>
                                    <p><?=$user_data['blog_rd3']?></p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="images/<?=$user_data['blog_rpic4']?>" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3><?=$user_data['blog_rt4']?></h3>
                                    </a>
                                    <p><?=$user_data['blog_rd4']?></p>
                                </div>
                            </div>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#"><?=$user_data['blog_cloud1']?></a>
                                </li>
                                <li>
                                    <a href="#"><?=$user_data['blog_cloud2']?></a>
                                </li>
                                <li>
                                    <a href="#"><?=$user_data['blog_cloud3']?></a>
                                </li>
                                <li>
                                    <a href="#"><?=$user_data['blog_cloud4']?></a>
                                </li>
                                <li>
                                    <a href="#"><?=$user_data['blog_cloud5']?></a>
                                </li>
                                <li>
                                    <a href="#"><?=$user_data['blog_cloud6']?></a>
                                </li>
                                <li>
                                    <a href="#"><?=$user_data['blog_cloud7']?></a>
                                </li>
                                <li>
                                    <a href="#"><?=$user_data['blog_cloud8']?></a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="images/<?=$user_data['blog_feed1']?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="images/<?=$user_data['blog_feed2']?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="images/<?=$user_data['blog_feed3']?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="images/<?=$user_data['blog_feed4']?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="images/<?=$user_data['blog_feed5']?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="images/<?=$user_data['blog_feed6']?>" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding footer-bg" data-background="assets/img/service/footer_bg.jpg">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="index.html"><img src="images/<?=$user_data['foot_logo']?>" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p><?=$user_data['foot_desc']?></p>
                                </div>
                             </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#"><?=$user_data['foot_ql1']?></a></li>
                                    <li><a href="#"><?=$user_data['foot_ql2']?></a></li>
                                    <li><a href="#"><?=$user_data['foot_ql3']?></a></li>
                                    <li><a href="#"><?=$user_data['foot_ql4']?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href="#"><?=$user_data['foot_np1']?></a></li>
                                    <li><a href="#"><?=$user_data['foot_np1']?></a></li>
                                    <li><a href="#"><?=$user_data['foot_np1']?></a></li>
                                    <li><a href="#"><?=$user_data['foot_np1']?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                 <li><a href="#">Frequently Asked Questions</a></li>
                                 <li><a href="#">Terms & Conditions</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Report a Payment Issue</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row pt-padding">
                 <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="footer-copy-right">
                         <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i ></i><a href="https://colorlib.com" target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                 </div>
                  <div class="col-xl-5 col-lg-5 col-md-5">
                        <!-- social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                 </div>
             </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

</body>
</html>