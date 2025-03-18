<?php
require('include/db.php');
$query = "SELECT * FROM top_nav,nav,section_control,about,package,blog,footer,home,pack_card1,pack_card";
$run = mysqli_query($con,$query);
$user_data = mysqli_fetch_array($run);
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM pack_card WHERE id=$id");

while($res = mysqli_fetch_array($result))
{

    $pac1_title =  $res['pac1_title'];
    $pac1_bg = $res['pac1_bg'];
    $pac1_d1img1 = $res['pac1_d1img1'];
    $pac1_d1img2 = $res['pac1_d1img2'];
    $pac1_dc1 = $res['pac1_dc1'];
    $pac1_d2img1 = $res['pac1_d2img1'];
    $pac1_d2img2 = $res['pac1_d2img2'];
    $pac1_dc2 = $res['pac1_dc2'];
    $pac1_d3img1 = $res['pac1_d3img1'];
    $pac1_d3img2 = $res['pac1_d3img2'];
    $pac1_dc3 = $res['pac1_dc3'];
    $pac1_d4img1 = $res['pac1_d4img1'];
    $pac1_d4img2 = $res['pac1_d4img2'];
    $pac1_dc4 = $res['pac1_dc4'];
    $pac1_d5img1 = $res['pac1_d5img1'];
    $pac1_d5img2 = $res['pac1_d5img2'];
    $pac1_dc5 = $res['pac1_dc5'];
    $pac1_d6img1 = $res['pac1_d6img1'];
    $pac1_d6img2 = $res['pac1_d6img2'];
    $pac1_dc6 = $res['pac1_dc6'];
    $pac1_d7img1 = $res['pac1_d7img1'];
    $pac1_d7img2 = $res['pac1_d7img2'];
    $pac1_dc7 = $res['pac1_dc7'];
    $pac1_d8img1 = $res['pac1_d8img1'];
    $pac1_d8img2 = $res['pac1_d8img2'];
    $pac1_dc8 = $res['pac1_dc8'];
    $pac1_d9img1 = $res['pac1_d9img1'];
    $pac1_d9img2 = $res['pac1_d9img2'];
    $pac1_dc9 = $res['pac1_dc9'];
    $pac1_d10img1 = $res['pac1_d10img1'];
    $pac1_d10img2 = $res['pac1_d10img2'];
    $pac1_dc10 = $res['pac1_dc10'];
    $pac1_d11img1 = $res['pac1_d11img1'];
    $pac1_d11img2 = $res['pac1_d11img2'];
    $pac1_dc11 = $res['pac1_dc11'];
    $pac1_d12img1 = $res['pac1_d12img1'];
    $pac1_d12img2 = $res['pac1_d12img2'];
    $pac1_dc12 = $res['pac1_dc12'];
    $pac1_d13img1 = $res['pac1_d13img1'];
    $pac1_d13img2 = $res['pac1_d13img2'];
    $pac1_dc13 = $res['pac1_dc13'];
    $pac1_d14img1 = $res['pac1_d14img1'];
    $pac1_d14img2 = $res['pac1_d14img2'];
    $pac1_dc14 = $res['pac1_dc14'];
    $pac1_d15img1 = $res['pac1_d15img1'];
    $pac1_d15img2 = $res['pac1_d15img2'];
    $pac1_dc15 = $res['pac1_dc15'];
    $pac1_price = $res['pac1_price'];
    $pac1_email = $res['pac1_email'];
    $pac1_phone =   $res['pac1_phone'];
    $wate_1 = $res['wate_1'];
    $taul_1 =$res['taul_1'];
    $day1 =$res['day1'];
    $day2 =$res['day2'];
    $day3 =$res['day3'];
    $day4 =$res['day4'];
    $day5 =$res['day5'];
    $day6 =$res['day6'];
    $day7 =$res['day7'];
    $day8 =$res['day8'];
    $day9 =$res['day9'];
    $day10 =$res['day10'];
    $day11 =$res['day11'];
    $day12 =$res['day12'];
    $day13 =$res['day13'];
    $day14 =$res['day14'];
    $day15 =$res['day15'];

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
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
    <!--fontawesome link-->
    <script src="https://kit.fontawesome.com/0503c26eee.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <style>
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif; 
}

.container-page{
    display:flex;
    justify-content: space-around;
    margin-top:15px;
}

.group-2{
    box-shadow: 5px 10px 18px #888888;
    width: 375px;
    height:600px;
    border-radius: 20px;
    margin-top: 100px;
}

.person-con button{
    display:block;
    align-items: center;
}

.person-con{
    margin-top: 15px;
    margin-left: 45px;
}

.person-con h4{
    margin-top:20px;
    margin-bottom: 5px;
}

.person-con span{
    margin-top:15px;
    font-size: 20px;
}

.person-con button{
    margin-top:5px;
    background-color: rgb(21, 102, 252);
    color:white;
    border:none;
    padding:10px 20px;
    border-radius: 8px;
    cursor:pointer;
    margin-bottom: 20px;
    margin-left: 70px;
    margin-top: 50px;
    font-weight: bold;
    height: 50px;
}

.person-con button:hover{
    background-color: rgb(44, 118, 255);
    transition: .3s;
}

.topper-bg{
    height: 30px;
    background-color: rgb(21, 102, 252);
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
}

.contact-con h2{
    margin-top: 10px;
    margin-bottom: 20px;
    text-align: center;

}

.contact-con a{
    margin-top: 80px;
    text-align: center;
    text-decoration: none;
    color: black;
}

.contact-con p{
    margin-top: 0px;
    margin-bottom: 20px;
    text-align: center;
    color:#888888;
    font-size: 15px;

}

.contact-con{
    margin-top: 80px;
}

.line {
    margin: 50px 0;
    height: 5px;
    background: repeating-linear-gradient(
      to right,
      transparent,
      transparent 10px,
      black 10px,
      black 20px
    );
    /*10px transparent then 10px black -> repeat this!*/
}

.img1{
    width: 320px;
    height:200px;
    display: inline;
}

.img1-1{
    width:320px;
    height:200px;

}

.plan h2{
    margin-top: 60px;
    margin-bottom: 20px;
}

.group-1 .plan p{
    width: 700px;
    margin-top: 15px;
    margin-bottom: 30px;
}

.img-main img{
    height:400px;
    width: 700px;
    margin-top: 30px;
}

/* .bot-bg{
    height: 39px;
    background-color: rgb(21, 102, 252);
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    margin-top:20px;
} */

.plan h2{
    background-color: rgb(21, 102, 252);
    color:white;
    width: 90px;
    border-radius: 10px;
    padding-left: 8px;
    padding-top: 10px;
    padding-bottom: 10px;   
}

.group-1 .title{
    font-size:30px;
}

.desc-con .info1{
    width: 300px;
    color:#5a5a5a;
}

.desc-con .info2{
    width: 300px;
    color:#5a5a5a;
}


.desc-con{
    display:flex;
    justify-content: space-around;
}

.desc-con{
    margin-top: 20px;
}

.desc-con .desc-titl{
    font-weight:bold;
    font-size: 20px;
    display:inline;
    margin-bottom: 10px;
}

.desc-con i{
    display: inline;
    margin-bottom: 10px;
    margin-right: 10px;
}
    </style>




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
                                        
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                            </ul>
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
    <div class="container-page">
        <div class="group-1">
            <div class="title">
                <h1><?php echo $pac1_title;?></h1>
            </div>
            <div class="img-main">
                <img src="images/<?php echo $pac1_bg;?>" alt="">
            </div>
            <div class="desc-con">
                <div class="desc1">
                    <i class="fa-solid fa-person-walking-luggage"></i> 
                    <p class="desc-titl">WHAT TO EXPECT</p>
                    <p class="info1"><?php echo $wate_1;?></p>
                </div>
                <div class="desc2">
                    <i class="fa-solid fa-star"></i>
                    <p class="desc-titl">THINGS YOU WILL LOVE</p>
                    <p class="info2"><?php echo $taul_1;?></p>
                </div>
            </div>




            <div class="plan">
                <?php
                   if($day1){
                    ?>
                    <h2>Day 1</h2>
                    <img class="img1" src="images/<?php echo $pac1_d1img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d1img2;?>" alt="">
                    <p><?php echo $pac1_dc1;?></p>
                    <?php
                    }
                    if($day2){
                    ?>
                    <h2>Day 2</h2>
                    <img class="img1" src="images/<?php echo $pac1_d2img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d2img2;?>" alt="">
                    <p><?php echo $pac1_dc2;?></p>
                    <?php
                    }
                    if($day3){
                    ?>
                    <h2>Day 3</h2>
                    <img class="img1" src="images/<?php echo $pac1_d3img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d3img2;?>" alt="">
                    <p><?php echo $pac1_dc3;?></p>
                    <?php
                    }
                    if($day4){
                    ?>
                    <h2>Day 4</h2>
                    <img class="img1" src="images/<?php echo $pac1_d4img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d4img2;?>" alt="">
                    <p><?php echo $pac1_dc4;?></p>
                    <?php
                    }
                    if($day5){
                    ?>
                    <h2>Day 5</h2>
                    <img class="img1" src="images/<?php echo $pac1_d5img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d5img2;?>" alt="">
                    <p><?php echo $pac1_dc5;?></p>
                    <?php
                    }
                    if($day6){
                    ?>
                    <h2>Day 6</h2>
                    <img class="img1" src="images/<?php echo $pac1_d6img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d6img2;?>" alt="">
                    <p><?php echo $pac1_dc6;?></p>
                    <?php
                    }
                    if($day7){
                    ?>
                    <h2>Day 7</h2>
                    <img class="img1" src="images/<?php echo $pac1_d7img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d7img2;?>" alt="">
                    <p><?php echo $pac1_dc7;?></p>
                    <?php
                    }
                    if($day8){
                    ?>
                    <h2>Day 8</h2>
                    <img class="img1" src="images/<?php echo $pac1_d8img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d8img2;?>" alt="">
                    <p><?php echo $pac1_dc8;?></p>
                    <?php
                    }
                    if($day9){
                    ?>
                    <h2>Day 9</h2>
                    <img class="img1" src="images/<?php echo $pac1_d9img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d9img2;?>" alt="">
                    <p><?php echo $pac1_dc9;?></p>
                    <?php
                    }
                    if($day10){
                    ?>
                    <h2>Day 10</h2>
                    <img class="img1" src="images/<?php echo $pac1_d10img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d10img2;?>" alt="">
                    <p><?php echo $pac1_dc10;?></p>
                    <?php
                    }
                    if($day11){
                    ?>
                    <h2>Day 11</h2>
                    <img class="img1" src="images/<?php echo $pac1_d11img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d11img2;?>" alt="">
                    <p><?php echo $pac1_dc11;?></p>
                    <?php
                    }
                    if($day12){
                    ?>
                    <h2>Day 12</h2>
                    <img class="img1" src="images/<?php echo $pac1_d12img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d12img2;?>" alt="">
                    <p><?php echo $pac1_dc12;?></p>
                    <?php
                    }
                    if($day13){
                    ?>
                    <h2>Day 13</h2>
                    <img class="img1" src="images/<?php echo $pac1_d13img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d13img2;?>" alt="">
                    <p><?php echo $pac1_dc13;?></p>
                    <?php
                    }
                    if($day14){
                    ?>
                    <h2>Day 14</h2>
                    <img class="img1" src="images/<?php echo $pac1_d14img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d14img2;?>" alt="">
                    <p><?php echo $pac1_dc14;?></p>
                    <?php
                    }
                    if($day15){
                    ?>
                    <h2>Day 15</h2>
                    <img class="img1" src="images/<?php echo $pac1_d15img1;?>" alt="">
                    <img class="img1-1" src="images/<?php echo $pac1_d15img2;?>" alt="">
                    <p><?php echo $pac1_dc15;?></p>
                    <?php
                    }
                    ?>
            </div>






        </div>
        <div class="group-2">
            <div class="topper-bg">

            </div>
            <div class="person-con">
                <h4>Price</h4>
                <span>$<?php echo $pac1_price;?></span><span>/per person.</span>
                <button>proceed booking</button>
            </div>
            <div class="line"></div>
            <div  class="contact-con">
                <h2>Contact us</h2>
                <a href="#"><h4><?php echo $pac1_email;?></h4></a>
                <p>Our email-id</p>
                <a href="#"><h4 class="no"><?php echo $pac1_phone;?></h4></a>
                <p>Call Us</p>
            </div>  
            <div class="bot-bg">

            </div>
        </div>
    </div>
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