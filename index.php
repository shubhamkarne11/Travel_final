<?php
require('include/db.php');
$query = "SELECT * FROM top_nav,nav,section_control,about,home,package,footer";
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
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
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
    <!-- Preloader Start -->
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
                                            <li><a href="<?=$user_data['twitter_link']?>" target="blank"><i class="fab fa-twitter"></i></a></li>
                                            <?php
                                            }
                                            if($user_data['linkedin_section']){
                                            ?>
                                            <li><a href="<?=$user_data['linkedin_link']?>" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            <?php
                                            }
                                            if($user_data['facebook_section']){
                                            ?>
                                            <li><a href="<?=$user_data['facebook_link']?>" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <?php
                                            }
                                            if($user_data['pinterest_section']){
                                            ?>
                                            <li> <a href="<?=$user_data['pinterest_link']?>" target="blank"><i class="fab fa-pinterest-p"></i></a></li>
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
                                            if($user_data['pages_section']){
                                            ?>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
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

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="images/<?=$user_data['home_bg1']?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <h1>Find your <span>Next tour!</span> </h1>
                                    <p>Where would you like to go?</p>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- form -->
                                <!-- <form action="#" class="search-box">
                                    <div class="input-form mb-30">
                                        <input type="text" placeholder="When Would you like to go ?">
                                    </div>
                                    <div class="select-form mb-30">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">When</option>
                                                <option value="">Services-1</option>
                                                <option value="">Services-2</option>
                                                <option value="">Services-3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-form mb-30">
                                        <a href="#">Search</a>
                                    </div>	
                                </form>	 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Our Services Start -->
        <div class="our-services servic-padding">
            <div class="container">
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                                <h5><?=$user_data['about_guide']?> Our Local<br>Guides</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-pay"></span>
                            </div>
                            <div class="services-cap">
                                <h5><?=$user_data['about_trust']?> Trusted Tour<br>Agency</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-experience"></span>
                            </div>
                            <div class="services-cap">
                                <h5><?=$user_data['about_year']?> Years of Travel<br>Experience</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-good"></span>
                            </div>
                            <div class="services-cap">
                                <h5><?=$user_data['about_happy']?> Our Travelers<br>are Happy</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Our Services End -->
        <!-- Favourite Places Start -->
        <div class="favourite-place place-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>FEATURED TOURS Packages</span>
                            <h2>Favourite Places</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    
                    $query5 = "SELECT * FROM pack_card order by 1 desc LIMIT 6";
                    $run5 = mysqli_query($con,$query5);
                    $p = 1;
                    while($card1 = mysqli_fetch_array($run5)){    
                        ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-place mb-30">
                    <div class="place-img">
                        <img src="images/<?=$card1['pack_img']?>" alt="">   
                    </div>
                    
                    <div class="place-cap">
                        <div class="place-cap-top">
                            <span><i class="fas fa-star"></i><span><?=$card1['pack_rate']?></span> </span>
                            <h3><a href="page1.php?id=<?=$card1['id']?>"><?=$card1['pack_title']?></a></h3>
                            <p class="dolor"><?=$card1['pack_price']?><span>/ Per Person</span></p>
                        </div>
                    </div>
                    </div>
                    </div>

                    <?php
                    $p++;
                    }
                    ?>
                </div>
            </div>
        </div>
        
        <!-- Favourite Places End -->
        <!-- Video Start Arera -->
        <div class="video-area video-bg pt-200 pb-200"  data-background="images/<?=$user_data['about_bg2']?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-caption text-center">
                            <div class="video-icon">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU" tabindex="0"><i class="fas fa-play"></i></a>
                            </div>
                            <p class="pera1"><?=$user_data['about_vtitle']?></p>
                            <p class="pera2"><?=$user_data['about_vsubt']?></p>
                            <!-- <p class="pera3"> Tour Booking Platform</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start End -->
        <!-- Support Company Start-->
        <div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img mb-50">
                            <img src="assets/img/service/<?=$user_data['profile_pic']?>" alt="">
                            <div class="support-img-cap">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                
                                <h2><?=$user_data['about_title']?></h2>
                            </div>
                            <div class="support-caption">
                                <p><?=$user_data['about_desc']?></p>
                         
                                <a href="#" class="btn border-btn">About us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
        <!-- Testimonial Start -->
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding" data-background="images/<?=$user_data['home_testmbg']?>">
            <div class="container ">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                        <p><?=$user_data['about_testm']?></p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="images/<?=$user_data['about_pic']?>" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span><?=$user_data['about_name']?></span>
                                            <p><?=$user_data['about_role']?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                        <p>Logisti Group is a representative logistics operator providing full range of ser
                                            of customs clearance and transportation worl.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="assets/img/testmonial/Homepage_testi.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Jessya Inn</span>
                                            <p>Co Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Blog Area Start -->
        <div class="home-blog-area section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Our Recent news</span>
                            <h2>Tourist Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="images/<?=$user_data['home_blog1']?>" alt="">
                                </div>
                                <div class="blog-cap">
                                    <p> |   Traveling</p>
                                    <h3><a href="single-blog.html"><?=$user_data['home_blogt1']?></a></h3>
                                    <a href="#" class="more-btn">Read more »</a>
                                </div>
                            </div>
                            <div class="blog-date text-center">
                                
                                <p><?=$user_data['home_blogd1']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="images/<?=$user_data['home_blog2']?>" alt="">
                                </div>
                                <div class="blog-cap">
                                    <p> |   Traveling</p>
                                    <h3><a href="single-blog.html"><?=$user_data['home_blogt2']?></a></h3>
                                    <a href="#" class="more-btn">Read more »</a>
                                </div>
                            </div>
                            <div class="blog-date text-center">
                                
                                <p><?=$user_data['home_blogd2']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

    </main>
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
                                    <li><a href="#"><?=$user_data['foot_np2']?></a></li>
                                    <li><a href="#"><?=$user_data['foot_np3']?></a></li>
                                    <li><a href="#"><?=$user_data['foot_np4']?></a></li>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i></i><a href="https://colorlib.com" target="_blank"></a>
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
    <form>
        <script src = "https://cdn.razorpay.com/static/widget/payment-button.js"
        data-payment_button_id = "pl_Jpb8JcRT3ITKIQ"
        data-button_text = "Buy Now"
        data-button_theme = "brand-color">
        </script>
    </form>
	
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
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
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