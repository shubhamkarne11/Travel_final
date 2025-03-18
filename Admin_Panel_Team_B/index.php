<?php 
require('../include/db.php');
if (!isset($_SESSION['admin_name'])){
  echo "<script>window.location.href = 'login.php';</script>";
}
$query = "SELECT * FROM top_nav,nav,section_control,about,package,blog,contact,home,footer,admin_info,pack_card1,pack_card2,pack_card3,pack_card4,pack_card5,pack_card6,pack_card7,pack_card8,pack_card9,pack_add,pack_card,blog_card";
$run = mysqli_query($con,$query);
$user_data = mysqli_fetch_array($run);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Travel | Admin Panel</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- bootstrap toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <!-- google fonts link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <!-- font-awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.php"><img src="../images/<?=$user_data['admin_logo']?>" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../images/<?=$user_data['admin_logo']?>" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group"> 
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <!-- <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li> -->
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../images/ASSET-USER-ADMIN.png" alt="profile"/>
              <span class="nav-profile-name">Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <!-- <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a> -->
              <a class="dropdown-item" href="../include/logout.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" >
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" >
        <ul class="nav" style="position:fixed;">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
            <i class="fa-sharp fa-solid fa-table-cells-large"></i>
            <span class="menu-title" style="margin-left:5px;">Section Control</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?homesetting=true">
            <i class="fa-sharp fa-solid fa-house-chimney"></i>
              <span class="menu-title" style="margin-left:5px;">Home Setting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?aboutsetting=true">
            <i class="fa-sharp fa-solid fa-circle-question"></i>
              <span class="menu-title" style="margin-left:5px;">About Us Setting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?packagesetting=true">
            <i class="fa-sharp fa-solid fa-box"></i>
              <span class="menu-title" style="margin-left:5px;">Package Setting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?packagecontentsetting=true">
            <i class="fa-sharp fa-solid fa-table-columns"></i>
            <span class="menu-title" style="margin-left:5px;">Package content Setting</span> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?blogsetting=true">
            <i class="fa-sharp fa-solid fa-splotch"></i>
              <span class="menu-title" style="margin-left:5px;">Blog Setting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?blogcontentsetting=true">
            <i class="fa-sharp fa-solid fa-splotch"></i>
              <span class="menu-title" style="margin-left:5px;">Blog Content Setting</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="index.php?pagessetting=true">
            <i class="fa-sharp fa-solid fa-file"></i>
              <span class="menu-title" style="margin-left:5px;">Pages Setting</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="index.php?contactsetting=true">
            <i class="fa-sharp fa-solid fa-address-book"></i>
              <span class="menu-title" style="margin-left:5px;">Contact Us Setting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?footersetting=true">
            <i class="fa-solid fa-check"></i>
            <span class="menu-title" style="margin-left:5px;">Footer Setting</span> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?adminlogosetting=true">
            <i class="fa-sharp fa-solid fa-table-columns"></i>
            <span class="menu-title" style="margin-left:5px;">Admin Panel logo Setting</span> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?usermanual=true">
            <i class="fa-sharp fa-solid fa-file"></i>
            <span class="menu-title" style="margin-left:5px;">User Manual</span> 
            </a>
          </li>
          
        </ul>
      </nav>
      <div>
          <h1 style ="margin-left: 50px; margin-bottom: 50px; font-family: 'Roboto',sans-serif; margin-top:30px;">Manage Site</h1>
          <?php
          if(isset($_GET['homesetting'])){
            ?>
            <div class="card card-primary col-lg-12" style="width:1100px;">
              <div class="card-header" style="background-color:#1796DF;">
                <h3 class="card-title" style="color:white; padding-top:15px">Home Setting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Top Nav E-mail Address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?=$user_data['email'] ?>" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Top Nav Phone</label>
                    <input type="phone" class="form-control" name="phone" id="exampleInputPhoneumber1" value="<?=$user_data['phone'] ?>" placeholder="Enter Phone number ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Top Nav Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputAddress1" value="<?=$user_data['address'] ?>" placeholder="Enter Address">
                  </div>
                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
          <input type="checkbox" name="twitter"  class="custom-control-input" id="customSwitch1"
          <?php
            if($user_data['twitter_section']){
              echo "checked";
            }
          ?>
          >
          
          <label class="custom-control-label" for="customSwitch1">Twitter Section</label>
          </div>
          <!-- update links-->
          <div class="form-group">
              <label for="exampleInputEmail1">Update Twitter Link</label>
              <input type="text" class="form-control"  name="twitter_link" value="<?=$user_data['twitter_link'] ?>" placeholder="Enter Title">
          </div>

          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
          <input type="checkbox" name="linkedin"class="custom-control-input" id="customSwitch2"
          <?php
            if($user_data['linkedin_section']){
              echo "checked";
            }
          ?>
          >
          <label class="custom-control-label" for="customSwitch2">Linkedin Section</label>
          </div>
          <!-- update links-->
          <div class="form-group">
              <label for="exampleInputEmail1">Update Linkedin Link</label>
              <input type="text" class="form-control"  name="linkedin_link" value="<?=$user_data['linkedin_link'] ?>" placeholder="Enter Title">
          </div>

          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
          <input type="checkbox" name="facebook"class="custom-control-input" id="customSwitch3"
          <?php
            if($user_data['facebook_section']){
              echo "checked";
            }
          ?>
          >
          <label class="custom-control-label" for="customSwitch3">Facebook Section</label>
          </div>
          <!-- update links-->
          <div class="form-group">
              <label for="exampleInputEmail1">Update Facebook Link</label>
              <input type="text" class="form-control"  name="facebook_link" value="<?=$user_data['facebook_link'] ?>" placeholder="Enter Title">
          </div>

          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
          <input type="checkbox" name="pinterest" class="custom-control-input" id="customSwitch4"
          <?php
            if($user_data['pinterest_section']){
              echo "checked";
            }
          ?> 
          >
          <label class="custom-control-label" for="customSwitch4">pinterest Section</label>
          </div>
          <!-- update links-->
          <div class="form-group">
              <label for="exampleInputEmail1">Update Pinterest Link</label>
              <input type="text" class="form-control"  name="pinterest_link" value="<?=$user_data['pinterest_link'] ?>" placeholder="Enter Title">
          </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-home" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div> 

            <!-- section for Home Logo Image-->

            <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Change Content For HomePage Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['home_logo1']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image for HomePage Logo</label>
                    <input type="file" class="form-control" name="h_logo" >
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="home-logo" class="btn btn-primary" style:bg-col>Save Changes</button>
                </div>
              </form>
            </div>



            <!-- section for Top Background Image-->

            <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Change Content For Top Background Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['home_bg1']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image for Top Background Image</label>
                    <input type="file" class="form-control" name="h_bg1" >
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="home-bg1" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>

             <!-- section for Home Testimonial Background Image-->

             <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Change Content For Testimonial Background Image </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['home_testmbg']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image for Testimonial Background Image</label>
                    <input type="file" class="form-control" name="h_tbg1" >
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="home-testmbg" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>


            <!-- section for Home Tourist Blog 1-->


              
            <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Change Content For Tourist Blog 1</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['home_blog1']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image for Tourist Blog 1</label>
                    <input type="file" class="form-control" name="hb_pic1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Title</label>
                    <input type="text" class="form-control"  name="home_blogt1" value="<?=$user_data['home_blogt1'] ?>" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Date</label>
                    <input type="text" class="form-control"  name="home_blogd1" value="<?=$user_data['home_blogd1'] ?>" placeholder="Enter Title">
                  </div>
                  

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="home-blog1" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>


            <!-- section for Home Tourist Blog 2-->


              
            <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Change Content For Tourist Blog 2</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['home_blog2']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image for Tourist Blog 2</label>
                    <input type="file" class="form-control" name="hb_pic2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Title</label>
                    <input type="text" class="form-control"  name="home_blogt2" value="<?=$user_data['home_blogt2'] ?>" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Date</label>
                    <input type="text" class="form-control"  name="home_blogd2" value="<?=$user_data['home_blogd2'] ?>" placeholder="Enter Title">
                  </div>
                  

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="home-blog2" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            <?php
          }
          else if(isset($_GET['aboutsetting'])){
            ?>
              <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Update About</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../assets/img/service/<?=$user_data['profile_pic']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Profile pic</label>
                    <input type="file" class="form-control" name="profile" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">About Title</label>
                    <input type="text" class="form-control"  name="about_title" value="<?=$user_data['about_title'] ?>" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label><br>
                    <textarea cols="50" rows="5" name="about_desc" ><?=$user_data['about_desc']?></textarea>
                  </div>
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-about" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div> 


              <!-- section for background  1-->


              
            <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Change Top Background</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['about_bg1']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Profile pic</label>
                    <input type="file" class="form-control" name="bg_1" >
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-top" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>

            <!--section for title and subtitle-->
            <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Change Title & Subtitle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Title</label>
                    <input type="text" class="form-control"  name="about_vtitle" value="<?=$user_data['about_vtitle'] ?>" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Subtitle</label>
                    <input type="text" class="form-control"  name="about_vsubt" value="<?=$user_data['about_vsubt'] ?>" placeholder="Enter Subtitle">
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-vid" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>





            <!--section for background 2-->


  
            <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Change Bottom Background</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['about_bg2']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Profile pic</label>
                    <input type="file" class="form-control" name="bg_2" >
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-bottom" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>


            <!-- update services-->
            <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Update Services</h3>
                <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
              </div>
              <!-- /.card-header -->
              <!-- form start -->

                  <div class="form-group">
                    <label for="exampleInputGuide">No of Local Guides</label>
                    <input type="text" class="form-control" value="<?=$user_data['about_guide']?>"  name="about_guide"  >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputTrust">Percentage of Trust</label>
                    <input type="text" class="form-control" value="<?=$user_data['about_trust']?>"  name="about_trust"  >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputyear">Years of Experience</label>
                    <input type="text" class="form-control" value="<?=$user_data['about_year']?>"  name="about_year"  >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputhappy">Percentage of Happy Customers</label>
                    <input type="text" class="form-control"  value="<?=$user_data['about_happy']?>" name="about_happy"  >
                  </div>
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-features" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div> 



            

            <div class="card card-primary col-lg-12" style="width:1100px;">
              <div class="card-header" style="background-color:#1796DF;">
                <h3 class="card-title" style="color:white; padding-top:15px">Testimonial Setting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <img src="../images/<?=$user_data['about_pic']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    
                    <label for="exampleInputEmail1">Upload Profile pic of the person</label>
                    <input type="file" class="form-control" name="pic-2">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Testimonial of the person</label><br>
                    <textarea cols="50" rows="5" name="about_testm"> <?=$user_data['about_testm']?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" value="<?=$user_data['about_name'] ?>"  name="about_name" id="exampleInputEmail1"  placeholder="Enter person name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Role of the person</label><br>
                    <input type="text" class="form-control" value="<?=$user_data['about_role'] ?>"  name="about_role" id="exampleInputEmail1"  placeholder="Enter role of the person">
                  </div>
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-testm" class="btn btn-primary">Save Changes</button>
                </div>
              </form>

              
            

            <?php 
          } else if(isset($_GET['packagesetting'])){
            ?>














              


              














            





             <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Update Package Section</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['package_bg1']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload background image [size: 678x260]</label>
                    <input type="file" class="form-control" name="profile" >
                  </div>  
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Title of the Webpage</label>
                    <input type="text" class="form-control"  name="package_title" value="<?=$user_data['package_title'] ?>" placeholder="Enter Rating">
                  </div>

                <div class="card-footer">
                  <button type="submit" name="update-package" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div> 

          <?php 
          }
//package content setting
          else if(isset($_GET['packagecontentsetting'])){
            ?>













<div class="card card-primary col-lg-12" style="width:1090px;">
              <!-- <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px; padding-right:80px;">Update Package content</h3>
              </div> -->







              <div class="card" style="width:1090px;">
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px; padding-right:80px;">Update Package card</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" style="width:1090px;">
                <table class="table" style="width:1090px;">
                  <thead>
                    <tr>
                      <th style="width: 10px">sr no</th>  
                      <th>Package Title</th>
                      <th>Package Image</th>
                      <th>Package Rate</th>
                      <th>Package Subtitle</th>
                      <th>Package Price</th>
                      <th style="width: 40px">Action</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from pack_card";
$r=mysqli_query($con,$q);
$c =1;
while($packs=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$packs['pack_title']?></td>
                      <td><img src="../images/<?=$packs['pack_img']?>" style="width:150px"/></td>
                      <td><?=$packs['pack_rate']?></td>
                      <td><?=$packs['pack_subtitle']?></td>
                      <td><?=$packs['pack_price']?></td>
                      <td>
                      <a href="../updatepackagecontent.php?id=<?=$packs['id']?>">Update</a>
                      </td>
                      <td>
                      <a href="../deletepackagecontent.php?id=<?=$packs['id']?>">Delete</a>
                      </td>
                    </tr>
 <?php
 $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>








              <!-- /.card-header -->
              <!-- form start -->
              <div class="card" style="width:1090px;">
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px; padding-right:80px;">Update Package card content</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" style="width:1090px;">
                <table class="table" style="margin-bottom:80px;" style="width:1090px;">
                  <thead>
                    <tr>
                      <th style="width: 10px">sr no</th>  
                      <th>Package Title</th>
                      <th>Package <br> Background Image</th>
                      <th>Package <br> Price</th>
                      <th>Package <br> Email</th>
                      <th>Package <br> Phone</th>
                      <th>What To <br> Expect Title</th>
                      <th>Thing You <br> Love Title</th>
                      <th style="width: 40px">Action</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                    <?php
$q1 = "SELECT * from pack_card";
$r1=mysqli_query($con,$q1);
$c1 =1;
while($packd=mysqli_fetch_array($r1)){
  ?>
<tr>
                      <td><?=$c1?></td>
                      <td><?=$packd['pac1_title']?></td>
                      <td><img src="../images/<?=$packd['pac1_bg']?>" style="width:110px"/></td>
                      <td><?=$packd['pac1_price']?></td>
                      <td><?=$packd['pac1_email']?></td>
                      <td><?=$packd['pac1_phone']?></td>
                      <td><?=$packd['wate_1']?></td>
                      <td><?=$packd['taul_1']?></td>
                      <td>
                      <a href="../updatepackagecontent.php?id=<?=$packd['id']?>">Update</a>
                      </td>
                      <td>
                      <a href="../deletepackagecontent.php?id=<?=$packd['id']?>">Delete</a>
                      </td>
                    </tr>
 <?php
 $c1++;
}
                    ?>


                    
                    
                  </tbody>
                </table>

              </div>
              <!-- /.card-body -->
              <div class="card card-primary" style="width:1090px;">
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px; padding-right:80px;">Add Package Card</h3>
              </div>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data" style="width:1090px;">
                <div class="card-body">
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Package Title</label>
                    <input type="text" class="form-control"  name="pack_title">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Pack Image</label>
                    <input type="file" class="form-control"  name="pack_img">   
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Package Rate</label>
                    <input type="text" class="form-control"  name="pack_rate">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Package Subtitle</label>
                    <input type="text" class="form-control"  name="pack_subtitle">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Package Price</label>
                    <input type="text" class="form-control"  name="pack_price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Background Image</label>
                    <input type="file" class="form-control" name="pac1_bg" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Title</label>
                    <input type="text" class="form-control"  name="pac1_title" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Update What To Expect</label>
                    <input type="text" class="form-control"  name="wate_1"  placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Things you will love</label>
                    <input type="text" class="form-control"  name="taul_1"  placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 1 Image 1</label><br>
                    <input type="file" class="form-control" name="pac1_d1img1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 1 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d1img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 1 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc1" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 2 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d2img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 2 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d2img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 2 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc2" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 3 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d3img1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 3 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d3img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 3 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc3" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 4 Image 1</label><br> 
                    <input type="file" class="form-control" name="pac1_d4img1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 4 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d4img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 4 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc4" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 5 Image 1</label><br> 
                    <input type="file" class="form-control" name="pac1_d5img1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 5 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d5img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 5 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc5" ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 6 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d6img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 6 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d6img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 6 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc6" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 7 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d7img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 7 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d7img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 7 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc7" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 8 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d8img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 8 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d8img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 8 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc8" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 9 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d9img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 9 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d9img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 9 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc9" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 10 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d10img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 10 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d10img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 10 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc10" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 11 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d11img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 11 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d11img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 11 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc11" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 12 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d12img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 12 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d12img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 12 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc12" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 13 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d13img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 13 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d13img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 13 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc13" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 14 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d14img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 14 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d14img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 14 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc14" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 15 Image 1</label><br>  
                    <input type="file" class="form-control" name="pac1_d15img1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Day 15 Image 2</label><br>
                    <input type="file" class="form-control" name="pac1_d15img2" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload Day 15 content</label><br>
                    <textarea cols="50" rows="5" name="pac1_dc15" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Price</label>
                    <input type="text" class="form-control"  name="pac1_price"  placeholder="Enter Price">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Email</label>
                    <input type="email" class="form-control"  name="pac1_email"  placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Update Phone</label>
                    <input type="text" class="form-control"  name="pac1_phone"  placeholder="Enter Phone">
                  </div>


                  <div class="form-group">
                  <label for="exampleInputEmail1">Section Control For Days</label>
                  </div>





                  

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day1"  class="custom-control-input" id="customSwitch1"
                  <?php
                    if($user_data['day1']){
                      echo "checked";
                    }
                  ?>
                  >
                  
                  <label class="custom-control-label" for="customSwitch1">Day 1</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day2"class="custom-control-input" id="customSwitch2"
                  <?php
                    if($user_data['day2']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch2">Day 2</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day3"class="custom-control-input" id="customSwitch3"
                  <?php
                    if($user_data['day3']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch3">Day 3</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day4" class="custom-control-input" id="customSwitch4"
                  <?php
                    if($user_data['day4']){
                      echo "checked";
                    }
                  ?> 
                  >
                  <label class="custom-control-label" for="customSwitch4">Day 4</label>
                  </div>


                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day5"  class="custom-control-input" id="customSwitch5"
                  <?php
                    if($user_data['day5']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch5">Day 5</label>
                  </div>
                  
                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day6"  class="custom-control-input" id="customSwitch6"
                  <?php
                    if($user_data['day6']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch6">Day 6</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day7"  class="custom-control-input" id="customSwitch7"
                  <?php
                    if($user_data['day7']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch7">Day 7</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day8"  class="custom-control-input" id="customSwitch8"
                  <?php
                    if($user_data['day8']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch8">Day 8</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day9"  class="custom-control-input" id="customSwitch9"
                  <?php
                    if($user_data['day9']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch9">Day 9</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day10"  class="custom-control-input" id="customSwitch10"
                  <?php
                    if($user_data['day10']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch10">Day 10</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day11"  class="custom-control-input" id="customSwitch11"
                  <?php
                    if($user_data['day11']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch11">Day 11</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day12"  class="custom-control-input" id="customSwitch12"
                  <?php
                    if($user_data['day12']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch12">Day 12</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day13"  class="custom-control-input" id="customSwitch13"
                  <?php
                    if($user_data['day13']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch13">Day 13</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day14"  class="custom-control-input" id="customSwitch14"
                  <?php
                    if($user_data['day14']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch14">Day 14</label>
                  </div>

                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="day15"  class="custom-control-input" id="customSwitch15"
                  <?php
                    if($user_data['day15']){
                      echo "checked";
                    }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch15">Day 15</label>
                  </div>




 




























                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="p_card" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
              </div> 
            </div>
            









            <?php 
          }



          
          
          else if(isset($_GET['blogsetting'])){
              ?>

              <!-- change the background setting -->
              <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Update Blog Section</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['blog_bg1']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload background image</label>
                    <input type="file" class="form-control" name="b_bg1" >
                  </div>  
                  
                  

                <div class="card-footer">
                  <button type="submit" name="update-blogbg" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>




              <?php
          }



















//vlog setting

          else if(isset($_GET['blogcontentsetting'])){
            ?>




<div class="card card-primary col-lg-12" style="width:1090px;">
              <!-- <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px; padding-right:80px;">Update Package content</h3>
              </div> -->







              <div class="card" style="width:1090px;">
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px; padding-right:80px;">Update Blog card</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" style="width:1090px;">
                <table class="table" style="width:1090px;">
                  <thead>
                    <tr>
                      <th style="width: 10px">sr no</th>  
                      <th>Blog Card Image</th>
                      <th>Blog Card Date</th>
                      <th>Blog Card Subtitle</th>
                      <th style="width: 40px">Action</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q1 = "SELECT * from blog_card";
$r1=mysqli_query($con,$q1);
$c1 =1;
while($packs1=mysqli_fetch_array($r1)){
  ?>
<tr>
                      <td><?=$c1?></td>
                      <td><img src="../images/<?=$packs1['card_img']?>" style="width:150px"/></td>
                      <td><?=$packs1['card_date']?></td>
                      <td><?=$packs1['card_subt']?></td>
                      <td>
                      <a href="../updateblogcontent.php?id=<?=$packs1['id']?>">Update</a>
                      </td>
                      <td>
                      <a href="../deleteblogcontent.php?id=<?=$packs1['id']?>">Delete</a>
                      </td>
                    </tr>
 <?php
 $c1++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            










          <div class="card card-primary" style="width:1090px; padding-top:15px;" style="width:1090px;">
            <div class="card-header" style="background-color:#1796DF";>
              <h3 class="card-title" style="color:white; padding-top:15px">Change Card</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data" style="width:1090px;">
              <div class="card-body" style="width:1090px;">

                <div class="form-group">
                  <label for="exampleInputEmail1">Upload Image for Card</label>
                  <input type="file" class="form-control" name="card_img" >
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Update Date</label>
                  <input type="text" class="form-control"  name="card_date" placeholder="Enter Date">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Update Subtitle</label>
                  <input type="text" class="form-control"  name="card_subt" placeholder="Enter Subtitle">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Enter Description 1</label><br>
                  <textarea cols="50" rows="5" name="card_desc" ></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Enter Description 2</label><br>
                  <textarea cols="50" rows="5" name="card_desc2" ></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Enter Description 3</label><br>
                  <textarea cols="50" rows="5" name="card_desc3" ></textarea>
                </div>

                

                

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" name="blog_card" class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>





            <?php
        }
          else if(isset($_GET['contactsetting'])){
            ?>
              <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h1 class="card-title" style="color:white; padding-top:15px">Update Contact_Us Page </h1>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['contact_bg1']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload background image of Contact_Us Page </label>
                    <input type="file" class="form-control" name="bg_3" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Contact Address</label>
                    <input type="text" class="form-control"  name="contact_address" value="<?=$user_data['contact_address']?>" placeholder="Enter Title">
                  </div>


                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Contact Phone no</label>
                    <input type="text" class="form-control"  name="contact_phone" value="<?=$user_data['contact_phone']?>" placeholder="Enter Phone">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Contact Time </label>
                    <input type="text" class="form-control"  name="contact_time" value="<?=$user_data['contact_time']?>" placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Contact Email</label>
                    <input type="text" class="form-control"  name="contact_email" value="<?=$user_data['contact_email']?>" placeholder="Enter Email">
                  </div>

                <div class="card-footer">
                  <button type="submit" name="update-contact" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>

          <?php
          }
          else if(isset($_GET['footersetting'])){
            ?>
             <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Change footer settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['foot_logo']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Upload logo of your website </label>
                    <input type="file" class="form-control" name="flg_1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Footer description</label>
                    <input type="text" class="form-control"  name="foot_desc" value="<?=$user_data['foot_desc'] ?>" placeholder="Enter Tag 1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Footer first Quick link name</label>
                    <input type="text" class="form-control"  name="foot_ql1" value="<?=$user_data['foot_ql1'] ?>" placeholder="Enter Tag 1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Footer second Quick link name</label>
                    <input type="text" class="form-control"  name="foot_ql2" value="<?=$user_data['foot_ql2'] ?>" placeholder="Enter Tag 1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Footer Third Quick link name</label>
                    <input type="text" class="form-control"  name="foot_ql3" value="<?=$user_data['foot_ql3'] ?>" placeholder="Enter Tag 1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Footer Fourth Quick link name</label>
                    <input type="text" class="form-control"  name="foot_ql4" value="<?=$user_data['foot_ql4'] ?>" placeholder="Enter Tag 1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Footer new product First link name</label>
                    <input type="text" class="form-control"  name="foot_np1" value="<?=$user_data['foot_np1'] ?>" placeholder="Enter Tag 1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Footer new product Second link name</label>
                    <input type="text" class="form-control"  name="foot_np2" value="<?=$user_data['foot_np2'] ?>" placeholder="Enter Tag 1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Footer new product Third link name</label>
                    <input type="text" class="form-control"  name="foot_np3" value="<?=$user_data['foot_np2'] ?>" placeholder="Enter Tag 1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Footer New Product Fourth link name</label>
                    <input type="text" class="form-control"  name="foot_np4" value="<?=$user_data['foot_np2'] ?>" placeholder="Enter Tag 1">
                  </div>
                  

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="foot-update" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            
            <?php
          }

          else if(isset($_GET['adminlogosetting'])){
            ?>
             <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">Change Admin Panel logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['admin_logo']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Upload logo of your website </label>
                    <input type="file" class="form-control" name="a_lg" >
                  </div>

                  <div class="card-footer">
                  <button type="submit" name="admin-logo" class="btn btn-primary">Save Changes</button>
                </div>
                  </form>
            </div>
            <?php
          }
          else if(isset($_GET['usermanual'])){
            ?>
             <div class="card card-primary" style="width:1100px";>
              <div class="card-header" style="background-color:#1796DF";>
                <h3 class="card-title" style="color:white; padding-top:15px">User Manual For This Site</h3>
              </div>

                <div class="card-footer">
                  <button class="btn btn-primary"><a href="../user_manual/index.html"  style="color:white; text-decoration:none;">User Manual</a></button>
                </div>
              
              
            </div>
            <?php
          }

          else{
            ?>
          

          <form method="post" action="../include/admin.php">

          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
          <input type="checkbox" name="home"  class="custom-control-input" id="customSwitch1"
          <?php
            if($user_data['home_section']){
              echo "checked";
            }
          ?>
          >
          
          <label class="custom-control-label" for="customSwitch1">Home Section</label>
          </div>

          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
          <input type="checkbox" name="about"class="custom-control-input" id="customSwitch2"
          <?php
            if($user_data['about_section']){
              echo "checked";
            }
          ?>
          >
          <label class="custom-control-label" for="customSwitch2">About Us Section</label>
          </div>

          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
          <input type="checkbox" name="package"class="custom-control-input" id="customSwitch3"
          <?php
            if($user_data['package_section']){
              echo "checked";
            }
          ?>
          >
          <label class="custom-control-label" for="customSwitch3">Package Section</label>
          </div>

          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
          <input type="checkbox" name="blog" class="custom-control-input" id="customSwitch4"
          <?php
            if($user_data['blog_section']){
              echo "checked";
            }
          ?> 
          >
          <label class="custom-control-label" for="customSwitch4">Blog Section</label>
          </div>

          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
          <input type="checkbox" name="contact"  class="custom-control-input" id="customSwitch6"
          <?php
            if($user_data['contact_section']){
              echo "checked";
            }
          ?>
          >
          <label class="custom-control-label" for="customSwitch6">Contact Us Section</label>
          </div>

          <input type="submit" class="btn btn-primary"  name="update-section" value="Save changes" style="margin-top:10px; margin-left:10px;">
</form>
<?php
          }
?>
      </div>
      
       
        

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
  <!-- bootstrap toggle -->
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- font-awesome link -->
  <script src="https://kit.fontawesome.com/8d1cf5b23d.js" crossorigin="anonymous"></script>
  <!-- font awesome link 2nd-->
  <script src="https://kit.fontawesome.com/0503c26eee.js" crossorigin="anonymous"></script>

</body>

</html>

