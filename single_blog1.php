<?php
require('include/db.php');
$query = "SELECT * FROM top_nav,nav,section_control,about,package,blog,footer,home,pack_card1,pack_card,blog_card";
$run = mysqli_query($con,$query);
$user_data = mysqli_fetch_array($run);
?>
<?php
    
    include 'db.php';

    if (isset($_POST['post_comment'])) {

        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO demo (name, comment, email)
        VALUES ('$name', '$comment', '$email')";

        if ($con->query($sql) === TRUE) {
          echo "";
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

?>

<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id 
$result = mysqli_query($con, "SELECT * FROM blog_card WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $card_img = $res['card_img'];
    $card_date = $res['card_date'];
    $card_subt = $res['card_subt']; 
    $card_desc = $res['card_desc'];
    $card_desc2 = $res['card_desc2'];
    $card_desc3 =  $res['card_desc3'];
}
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
                  <img src="assets/img/logo/logo.png" alt="">
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
                                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                 <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
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
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
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
                                                    <li><a href="elements.php">Element</a></li>
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
   <!-- slider Area Start-->
   <div class="slider-area ">
      <!-- Mobile Menu -->
      <div class="single-slider slider-height2 d-flex align-items-center" data-background="images/<?=$user_data['blog_bg1']?>">
          <div class="container">
              <div class="">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Single Blog</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- slider Area End-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
            <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="images/<?php echo $card_img;?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>
                          <?php echo $card_subt;?>
                     </h2>
                     <p class="excert">
                           <?php echo $card_desc;?>
                     </p>
                     <p>
                            <?php echo $card_desc2;?>
                     </p>
                     <p>
                            <?php echo $card_desc3;?>
                     </p>
                  </div>
               </div>
               <!-- <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p>
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="images/<?=$user_data['sblog_ntbg1']?>" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4> <?=$user_data['sblog_t1']?> </h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4> <?=$user_data['sblog_t2']?> </h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="images/<?=$user_data['sblog_ntbg2']?>" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               <!-- <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="images/<?=$user_data['sblog_cnp1']?>" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4><?=$user_data['sblog_cn1']?></h4>
                        </a>
                        <p> 
                        <?=$user_data['sblog_c1']?>
                        </p>
                     </div>
                  </div>
               </div> -->










               <!-- <div class="comments-area">
                  <h4>05 Comments</h4>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="images/<?=$user_data['sblog_cnp2']?>" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                  <?=$user_data['sblog_cn2']?>
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#"><?=$user_data['sblog_c2']?></a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="images/<?=$user_data['sblog_cnp3']?>" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                   <?=$user_data['sblog_cn3']?>
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#"><?=$user_data['sblog_c3']?></a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="images/<?=$user_data['sblog_cnp4']?>" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                   <?=$user_data['sblog_cn4']?>
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#"><?=$user_data['sblog_c4']?></a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->














               <!-- <div class="comments-area">
                  <h4>Comments Here</h4>
                  <div class="comment-list">
                  <?php
                     
                     $sql = "SELECT * FROM demo";
                     $result = $con->query($sql);


                     if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {

                        ?>

                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="desc" style="margin-bottom: 30px;">
                              <p class="comment">
                              <?php echo $row['comment']; ?>
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#"><?php echo $row['name']; ?></a>
                                    </h5>
                                 </div>
                              </div>
                              <?php echo date("D-M-Y");?>
                           </div>
                           <script>
                              if ( window.history.replaceState ) {
                                 window.history.replaceState( null, null, window.location.href );
                              }
                           </script>
                        </div>
                     </div>
                     <?php } } ?>
                  </div>
               </div> -->

















               <!-- <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form action="" method="post" class="form">
                        <div class="">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>

                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn" name="post_comment">Send Message</button>
                     </div>
                  </form>
               </div>
            </div> -->
            <div class="col-lg-4">
               <!-- <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
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
                              <p>(21)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                           <p><?=$user_data['blog_cate6']?></p>
                              <p>(21)</p>
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <div class="media post_item">
                     <img src="images/<?=$user_data['blog_rpic1']?>" alt="post">
                        <div class="media-body">
                           <a href="single-blog.php">
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
               </div> -->  
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

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
                                 <a href="index.php"> <img src="images/<?=$user_data['foot_logo']?>" alt=""></a>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
      <!-- Date Picker -->
      <script src="./assets/js/gijgo.min.js"></script>
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