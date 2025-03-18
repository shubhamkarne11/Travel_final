<?php
    require('../include/db.php');

    if(isset($_POST['update-section'])){
        $home = $_POST['home'] ?? 0;
        $about = $_POST['about'] ?? 0;
        $package = $_POST['package'] ?? 0;
        $blog = $_POST['blog'] ?? 0;
        // $pages = $_POST['pages'] ?? 0;
        $contact = $_POST['contact'] ?? 0;

        $query = "UPDATE section_control SET ";
        $query.= "home_section='$home',";
        $query.= "about_section='$about',";
        $query.= "package_section='$package',";
        $query.= "blog_section='$blog',";
        // $query.= "pages_section='$pages',";
        $query.= "contact_section='$contact' WHERE id=1";   

        $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php';</script>";
        }

    }


    if(isset($_POST['update-home'])){
        print_r($_POST);
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $twitter = $_POST['twitter'] ?? 0;
        $linkedin = $_POST['linkedin'] ?? 0;
        $facebook = $_POST['facebook'] ?? 0;
        $pinterest = $_POST['pinterest'] ?? 0;
        $twitter_l = mysqli_real_escape_string($con,$_POST['twitter_link']);
        $linkedin_l = mysqli_real_escape_string($con,$_POST['linkedin_link']);
        $facebook_l = mysqli_real_escape_string($con,$_POST['facebook_link']);
        $pinterest_l = mysqli_real_escape_string($con,$_POST['pinterest_link']);
        


     $query = "UPDATE top_nav SET ";
     $query.= "email='$email',";
     $query.= "phone='$phone',";
     $query.= "address='$address',";
     $query.= "twitter_section='$twitter',";
     $query.= "linkedin_section='$linkedin',";
     $query.= "facebook_section='$facebook',";
     $query.= "pinterest_section='$pinterest',";
     $query.= "twitter_link='$twitter_l',";
     $query.= "linkedin_link='$linkedin_l',";
     $query.= "facebook_link='$facebook_l',";
     $query.= "pinterest_link='$pinterest_l' WHERE id=1";


     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?homesetting=true';</script>";
       }

    }


    //For Homepage logo
    if(isset($_POST['home-logo'])){
 

        $hlogo= time().$_FILES['h_logo']['name'];
        $hlogotemp= $_FILES['h_logo']['tmp_name'];

        if($hlogotemp==''){
            $hq1 = "SELECT * FROM home WHERE 1";
            $hr1 = mysqli_query($con,$hq1);
            $hd1 = mysqli_fetch_array($hr1);
            $hlogo = $hd1['home_logo1'];
        }
     
        move_uploaded_file($hlogotemp,"../images/$hlogo");

        
     $query = "UPDATE home SET ";    
     $query.= "home_logo1='$hlogo'WHERE id=1";

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?homesetting=true';</script>";
       }
        

    }


    //For Homepage Background image
    if(isset($_POST['home-bg1'])){
 

        $hbg1= time().$_FILES['h_bg1']['name'];
        $hbg1temp= $_FILES['h_bg1']['tmp_name'];

        if($hbg1temp==''){
            $hbgq1 = "SELECT * FROM home WHERE 1";
            $hbgr1 = mysqli_query($con,$hbgq1);
            $hbgd1 = mysqli_fetch_array($hbgr1);
            $hbg1 = $hbgd1['home_logo1'];
        }
     
        move_uploaded_file($hbg1temp,"../images/$hbg1");

        
     $query = "UPDATE home SET ";    
     $query.= "home_bg1='$hbg1'WHERE id=1";

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?homesetting=true';</script>";
       }
        

    }

    //For Homepage Testm Background image
    if(isset($_POST['home-testmbg'])){
 

        $htbg1= time().$_FILES['h_tbg1']['name'];
        $htbg1temp= $_FILES['h_tbg1']['tmp_name'];

        if($htbg1temp==''){
            $htbgq1 = "SELECT * FROM home WHERE 1";
            $htbgr1 = mysqli_query($con,$htbgq1);
            $htbgd1 = mysqli_fetch_array($htbgr1);
            $htbg1 = $htbgd1['home_testmbg'];
        }
     
        move_uploaded_file($htbg1temp,"../images/$htbg1");

        
     $query = "UPDATE home SET ";    
     $query.= "home_testmbg='$htbg1'WHERE id=1";

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?homesetting=true';</script>";
       }
        

    }


    //For Homepage Blog 1
        if(isset($_POST['home-blog1'])){
 
        $hbtitle1 = mysqli_real_escape_string($con,$_POST['home_blogt1']);
        $hbdate1 = mysqli_real_escape_string($con,$_POST['home_blogd1']);

        $hbpic1= time().$_FILES['hb_pic1']['name'];
        $hbpic1temp= $_FILES['hb_pic1']['tmp_name'];

        if($hbpic1temp==''){
            $hbq1 = "SELECT * FROM package WHERE 1";
            $hbr1 = mysqli_query($con,$hbq1);
            $hbd1 = mysqli_fetch_array($hbr1);
            $hbpic1 = $hbd1['home_blog1'];
        }
     
        move_uploaded_file($hbpic1temp,"../images/$hbpic1");

        
     $query = "UPDATE home SET ";
     $query.= "home_blogt1='$hbtitle1',";
     $query.= "home_blogd1='$hbdate1',";     
     $query.= "home_blog1='$hbpic1'WHERE id=1";

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?homesetting=true';</script>";
       }
        

    }

    //For Homepage Blog 2
    if(isset($_POST['home-blog2'])){
 
        $hbtitle2 = mysqli_real_escape_string($con,$_POST['home_blogt2']);
        $hbdate2 = mysqli_real_escape_string($con,$_POST['home_blogd2']);

        $hbpic2= time().$_FILES['hb_pic2']['name'];
        $hbpic2temp= $_FILES['hb_pic2']['tmp_name'];

        if($hbpic2temp==''){
            $hbq2 = "SELECT * FROM package WHERE 1";
            $hbr2 = mysqli_query($con,$hbq2);
            $hbd2 = mysqli_fetch_array($hbr2);
            $hbpic2 = $hbd2['home_blog2'];
        }
     
        move_uploaded_file($hbpic2temp,"../images/$hbpic2");

        
     $query = "UPDATE home SET ";
     $query.= "home_blogt2='$hbtitle2',";
     $query.= "home_blogd2='$hbdate2',";     
     $query.= "home_blog2='$hbpic2'WHERE id=1";

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?homesetting=true';</script>";
       }
        

    }


    if(isset($_POST['update-about'])){
 
        $title = mysqli_real_escape_string($con,$_POST['about_title']);
        $desc = mysqli_real_escape_string($con,$_POST['about_desc']);
        $imagename= time().$_FILES['profile']['name'];
        $imgtemp= $_FILES['profile']['tmp_name'];

        if($imgtemp==''){
            $q = "SELECT * FROM about WHERE 1";
            $r = mysqli_query($con,$q);
            $d = mysqli_fetch_array($r);
            $imagename = $d['profile_pic'];
        }
     
        move_uploaded_file($imgtemp,"../assets/img/service/$imagename");

        
     $query = "UPDATE about SET ";
     $query.= "about_title='$title',";
     $query.= "profile_pic='$imagename',";  
    
    $query.= "about_desc='$desc' WHERE id=1";

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?aboutsetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-top'])){
        print_r($user_data);

        $imagename1= time().$_FILES['bg_1']['name'];
        $imgtemp1= $_FILES['bg_1']['tmp_name'];

        if($imgtemp1==''){
            $q1 = "SELECT * FROM about WHERE 1";
            $r1 = mysqli_query($con,$q1);
            $d1 = mysqli_fetch_array($r1);
            $imagename1 = $d1['about_bg1'];
        }
     
        move_uploaded_file($imgtemp1,"../images/$imagename1");

        
     $query = "UPDATE about SET ";
     $query.= "about_bg1='$imagename1'  WHERE id=1";  
    
    

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?aboutsetting=true';</script>";
       }
        

    }


    if(isset($_POST['update-vid'])){
 
        $title = mysqli_real_escape_string($con,$_POST['about_vtitle']);
        $subtitle = mysqli_real_escape_string($con,$_POST['about_vsubt']);
        
        
     $query = "UPDATE about SET ";
     $query.= "about_vtitle='$title',";
     $query.= "about_vsubt='$subtitle' WHERE id=1";  

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?aboutsetting=true';</script>";
       }
        

    }


    if(isset($_POST['update-bottom'])){
 
        
        $imagename2= time().$_FILES['bg_2']['name'];
        $imgtemp2= $_FILES['bg_2']['tmp_name'];

        if($imgtemp2==''){
            $q2 = "SELECT * FROM about WHERE 1";
            $r2 = mysqli_query($con,$q2);
            $d2 = mysqli_fetch_array($r2);
            $imagename = $d2['about_bg2'];
        }
     
        move_uploaded_file($imgtemp2,"../images/$imagename2");

        
     $query = "UPDATE about SET ";
     
     $query.= "about_bg2='$imagename2' WHERE id=1";  
    
   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?aboutsetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-features'])){
 
        $guide = mysqli_real_escape_string($con,$_POST['about_guide']);
        $trust = mysqli_real_escape_string($con,$_POST['about_trust']);
        $year = mysqli_real_escape_string($con,$_POST['about_year']);
        $happy = mysqli_real_escape_string($con,$_POST['about_happy']);
        
        
     $query = "UPDATE about SET ";
     $query.= "about_guide='$guide',";
     $query.= "about_trust='$trust',";
     $query.= "about_year='$year',";
     $query.= "about_happy='$happy' WHERE id=1";  

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?aboutsetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-testm'])){
 
        $testm = mysqli_real_escape_string($con,$_POST['about_testm']);
        $name = mysqli_real_escape_string($con,$_POST['about_name']);
        $role = mysqli_real_escape_string($con,$_POST['about_role']);

        $imagename3= time().$_FILES['pic-2']['name'];
        $imgtemp3= $_FILES['pic-2']['tmp_name'];

        if($imgtemp3==''){
            $q3 = "SELECT * FROM about WHERE 1";
            $r3 = mysqli_query($con,$q3);
            $d3 = mysqli_fetch_array($r3);
            $imagename3 = $d3['about_pic'];
        }
     
        move_uploaded_file($imgtemp3,"../images/$imagename3");

        
     $query = "UPDATE about SET ";
     $query.= "about_testm='$testm',";
     $query.= "about_name='$name',";
     $query.= "about_pic='$imagename3',";   
    
    $query.= "about_role='$role' WHERE id=1";

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?aboutsetting=true';</script>";
       }
        

    }


    if(isset($_POST['update-package'])){
 
        
        $ptitle = mysqli_real_escape_string($con,$_POST['package_title']);
       

        $pbg= time().$_FILES['profile']['name'];
        $pbgtemp= $_FILES['profile']['tmp_name'];

        if($pbgtemp==''){
            $pbq = "SELECT * FROM package WHERE 1";
            $pbr = mysqli_query($con,$pbq);
            $pbd = mysqli_fetch_array($pbr);
            $pbg = $pbd['package_bg1'];
        }
     
        move_uploaded_file($pbgtemp,"../images/$pbg");

        
     $query = "UPDATE package SET ";
     $query.= "package_title='$ptitle',";
     $query.= "package_bg1='$pbg'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-card1'])){
 
        
        $pctitle1 = mysqli_real_escape_string($con,$_POST['package_subt1']);
        $pcrate1 = mysqli_real_escape_string($con,$_POST['package_rate1']);
        $pcprice1 = mysqli_real_escape_string($con,$_POST['package_price1']);
       

        $pcpic1= time().$_FILES['p_pic1']['name'];
        $pcpic1temp= $_FILES['p_pic1']['tmp_name'];

        if($pcpic1temp==''){
            $pcq1 = "SELECT * FROM package WHERE 1";
            $pcr1 = mysqli_query($con,$pcq1);
            $pcd1 = mysqli_fetch_array($pcr1);
            $pcpic1 = $pcd1['package_pic1'];
        }
     
        move_uploaded_file($pcpic1temp,"../images/$pcpic1");

        
     $query = "UPDATE package SET ";
     $query.= "package_subt1='$pctitle1',";
     $query.= "package_rate1='$pcrate1',";
     $query.= "package_price1='$pcprice1',";
     $query.= "package_pic1='$pcpic1'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-card2'])){
 
        
        $pctitle2 = mysqli_real_escape_string($con,$_POST['package_subt2']);
        $pcrate2 = mysqli_real_escape_string($con,$_POST['package_rate2']);
        $pcprice2 = mysqli_real_escape_string($con,$_POST['package_price2']);
       

        $pcpic2= time().$_FILES['p_pic2']['name'];
        $pcpic2temp= $_FILES['p_pic2']['tmp_name'];

        if($pcpic2temp==''){
            $pcq2 = "SELECT * FROM package WHERE 1";
            $pcr2 = mysqli_query($con,$pcq2);
            $pcd2 = mysqli_fetch_array($pcr2);
            $pcpic2 = $pcd1['package_pic2'];
        }
     
        move_uploaded_file($pcpic2temp,"../images/$pcpic2");

        
     $query = "UPDATE package SET ";
     $query.= "package_subt2='$pctitle2',";
     $query.= "package_rate2='$pcrate2',";
     $query.= "package_price2='$pcprice2',";
     $query.= "package_pic2='$pcpic2'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-card3'])){
 
        
        $pctitle3 = mysqli_real_escape_string($con,$_POST['package_subt3']);
        $pcrate3 = mysqli_real_escape_string($con,$_POST['package_rate3']);
        $pcprice3 = mysqli_real_escape_string($con,$_POST['package_price3']);
       

        $pcpic3= time().$_FILES['p_pic3']['name'];
        $pcpic3temp= $_FILES['p_pic3']['tmp_name'];

        if($pcpic3temp==''){
            $pcq3 = "SELECT * FROM package WHERE 1";
            $pcr3 = mysqli_query($con,$pcq3);
            $pcd3 = mysqli_fetch_array($pcr3);
            $pcpic3 = $pcd3['package_pic3'];
        }
     
        move_uploaded_file($pcpic3temp,"../images/$pcpic3");

        
     $query = "UPDATE package SET ";
     $query.= "package_subt3='$pctitle3',";
     $query.= "package_rate3='$pcrate3',";
     $query.= "package_price3='$pcprice3',";
     $query.= "package_pic3='$pcpic3'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-card4'])){
 
        
        $pctitle4 = mysqli_real_escape_string($con,$_POST['package_subt4']);
        $pcrate4 = mysqli_real_escape_string($con,$_POST['package_rate4']);
        $pcprice4 = mysqli_real_escape_string($con,$_POST['package_price4']);
       

        $pcpic4= time().$_FILES['p_pic4']['name'];
        $pcpic4temp= $_FILES['p_pic4']['tmp_name'];

        if($pcpic4temp==''){
            $pcq4 = "SELECT * FROM package WHERE 1";
            $pcr4 = mysqli_query($con,$pcq4);
            $pcd4 = mysqli_fetch_array($pcr4);
            $pcpic4 = $pcd4['package_pic4'];
        }
     
        move_uploaded_file($pcpic4temp,"../images/$pcpic4");

        
     $query = "UPDATE package SET ";
     $query.= "package_subt4='$pctitle4',";
     $query.= "package_rate4='$pcrate4',";
     $query.= "package_price4='$pcprice4',";
     $query.= "package_pic4='$pcpic4'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-card5'])){
 
        
        $pctitle5 = mysqli_real_escape_string($con,$_POST['package_subt5']);
        $pcrate5 = mysqli_real_escape_string($con,$_POST['package_rate5']);
        $pcprice5 = mysqli_real_escape_string($con,$_POST['package_price5']);
       

        $pcpic5= time().$_FILES['p_pic5']['name'];
        $pcpic5temp= $_FILES['p_pic5']['tmp_name'];

        if($pcpic5temp==''){
            $pcq5 = "SELECT * FROM package WHERE 1";
            $pcr5 = mysqli_query($con,$pcq5);
            $pcd5 = mysqli_fetch_array($pcr5);
            $pcpic5 = $pcd5['package_pic5'];
        }
     
        move_uploaded_file($pcpic5temp,"../images/$pcpic5");

        
     $query = "UPDATE package SET ";
     $query.= "package_subt5='$pctitle5',";
     $query.= "package_rate5='$pcrate5',";
     $query.= "package_price5='$pcprice5',";
     $query.= "package_pic5='$pcpic5'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-card6'])){
 
        
        $pctitle6 = mysqli_real_escape_string($con,$_POST['package_subt6']);
        $pcrate6 = mysqli_real_escape_string($con,$_POST['package_rate6']);
        $pcprice6 = mysqli_real_escape_string($con,$_POST['package_price6']);
       

        $pcpic6= time().$_FILES['p_pic6']['name'];
        $pcpic6temp= $_FILES['p_pic6']['tmp_name'];

        if($pcpic6temp==''){
            $pcq6 = "SELECT * FROM package WHERE 1";
            $pcr6 = mysqli_query($con,$pcq6);
            $pcd6 = mysqli_fetch_array($pcr6);
            $pcpic6 = $pcd6['package_pic6'];
        }
     
        move_uploaded_file($pcpic6temp,"../images/$pcpic6");

        
     $query = "UPDATE package SET ";
     $query.= "package_subt6='$pctitle6',";
     $query.= "package_rate6='$pcrate6',";
     $query.= "package_price6='$pcprice6',";
     $query.= "package_pic6='$pcpic6'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-card7'])){
 
        
        $pctitle7 = mysqli_real_escape_string($con,$_POST['package_subt7']);
        $pcrate7 = mysqli_real_escape_string($con,$_POST['package_rate7']);
        $pcprice7 = mysqli_real_escape_string($con,$_POST['package_price7']);
       

        $pcpic7= time().$_FILES['p_pic7']['name'];
        $pcpic7temp= $_FILES['p_pic7']['tmp_name'];

        if($pcpic7temp==''){
            $pcq7 = "SELECT * FROM package WHERE 1";
            $pcr7 = mysqli_query($con,$pcq7);
            $pcd7 = mysqli_fetch_array($pcr7);
            $pcpic7 = $pcd7['package_pic7'];
        }
     
        move_uploaded_file($pcpic7temp,"../images/$pcpic7");

        
     $query = "UPDATE package SET ";
     $query.= "package_subt7='$pctitle7',";
     $query.= "package_rate7='$pcrate7',";
     $query.= "package_price7='$pcprice7',";
     $query.= "package_pic7='$pcpic7'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-card8'])){
 
        
        $pctitle8 = mysqli_real_escape_string($con,$_POST['package_subt8']);
        $pcrate8 = mysqli_real_escape_string($con,$_POST['package_rate8']);
        $pcprice8 = mysqli_real_escape_string($con,$_POST['package_price8']);
       

        $pcpic8= time().$_FILES['p_pic8']['name'];
        $pcpic8temp= $_FILES['p_pic8']['tmp_name'];

        if($pcpic8temp==''){
            $pcq8 = "SELECT * FROM package WHERE 1";
            $pcr8 = mysqli_query($con,$pcq8);
            $pcd8 = mysqli_fetch_array($pcr8);
            $pcpic8 = $pcd8['package_pic8'];
        }
     
        move_uploaded_file($pcpic8temp,"../images/$pcpic8");

        
     $query = "UPDATE package SET ";
     $query.= "package_subt8='$pctitle8',";
     $query.= "package_rate8='$pcrate8',";
     $query.= "package_price8='$pcprice8',";
     $query.= "package_pic8='$pcpic8'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-card9'])){
 
        
        $pctitle9 = mysqli_real_escape_string($con,$_POST['package_subt9']);
        $pcrate9 = mysqli_real_escape_string($con,$_POST['package_rate9']);
        $pcprice9 = mysqli_real_escape_string($con,$_POST['package_price9']);
       

        $pcpic9= time().$_FILES['p_pic9']['name'];
        $pcpic9temp= $_FILES['p_pic9']['tmp_name'];

        if($pcpic9temp==''){
            $pcq9 = "SELECT * FROM package WHERE 1";
            $pcr9 = mysqli_query($con,$pcq9);
            $pcd9 = mysqli_fetch_array($pcr9);
            $pcpic9 = $pcd9['package_pic9'];
        }
     
        move_uploaded_file($pcpic9temp,"../images/$pcpic9");

        
     $query = "UPDATE package SET ";
     $query.= "package_subt9='$pctitle9',";
     $query.= "package_rate9='$pcrate9',";
     $query.= "package_price9='$pcprice9',";
     $query.= "package_pic9='$pcpic9'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
       }
        

    }

    if(isset($_POST['update-blogbg'])){
        
        $bbg= time().$_FILES['b_bg1']['name'];
        $bbgtemp= $_FILES['b_bg1']['tmp_name'];

        if($bbgtemp==''){
            $bbgq = "SELECT * FROM blog WHERE 1";
            $bbgr = mysqli_query($con,$bbgq);
            $bbgd = mysqli_fetch_array($bbgr);
            $bbg = $bbgd['blog_bg1'];
        }
     
        move_uploaded_file($bbgtemp,"../images/$bbg");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_bg1='$bbg'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    }

    if(isset($_POST['blog-card1'])){

        $bc1title = mysqli_real_escape_string($con,$_POST['blog_subt1']);
        $bc1desc = mysqli_real_escape_string($con,$_POST['blog_desc1']);
        $bc1date = mysqli_real_escape_string($con,$_POST['blog_date1']);
        
        $bc1pic= time().$_FILES['b_pic1']['name'];
        $bc1temp= $_FILES['b_pic1']['tmp_name'];

        if($bc1temp==''){
            $bc1q = "SELECT * FROM blog WHERE 1";
            $bc1r = mysqli_query($con,$bc1q);
            $bc1d = mysqli_fetch_array($bc1r);
            $bc1pic = $bc1d['blog_pic1'];
        }
     
        move_uploaded_file($bc1temp,"../images/$bc1pic");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_subt1='$bc1title',";
     $query.= "blog_desc1='$bc1desc',";
     $query.= "blog_date1='$bc1date',";
     $query.= "blog_pic1='$bc1pic'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    }

    if(isset($_POST['blog-card2'])){

        $bc2title = mysqli_real_escape_string($con,$_POST['blog_subt2']);
        $bc2desc = mysqli_real_escape_string($con,$_POST['blog_desc2']);
        $bc2date = mysqli_real_escape_string($con,$_POST['blog_date2']);
        
        $bc2pic= time().$_FILES['b_pic2']['name'];
        $bc2temp= $_FILES['b_pic2']['tmp_name'];

        if($bc2temp==''){
            $bc2q = "SELECT * FROM blog WHERE 1";
            $bc2r = mysqli_query($con,$bc2q);
            $bc2d = mysqli_fetch_array($bc2r);
            $bc2pic = $bc1d['blog_pic2'];
        }
     
        move_uploaded_file($bc2temp,"../images/$bc2pic");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_subt2='$bc2title',";
     $query.= "blog_desc2='$bc2desc',";
     $query.= "blog_date2='$bc2date',";
     $query.= "blog_pic2='$bc2pic'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    }

    if(isset($_POST['blog-card3'])){

        $bc3title = mysqli_real_escape_string($con,$_POST['blog_subt3']);
        $bc3desc = mysqli_real_escape_string($con,$_POST['blog_desc3']);
        $bc3date = mysqli_real_escape_string($con,$_POST['blog_date3']);
        
        $bc3pic= time().$_FILES['b_pic3']['name'];
        $bc3temp= $_FILES['b_pic3']['tmp_name'];

        if($bc3temp==''){
            $bc3q = "SELECT * FROM blog WHERE 1";
            $bc3r = mysqli_query($con,$bc3q);
            $bc3d = mysqli_fetch_array($bc3r);
            $bc3pic = $bc3d['blog_pic3'];
        }
     
        move_uploaded_file($bc3temp,"../images/$bc3pic");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_subt3='$bc3title',";
     $query.= "blog_desc3='$bc3desc',";
     $query.= "blog_date3='$bc3date',";
     $query.= "blog_pic3='$bc3pic'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    } 

    if(isset($_POST['blog-card4'])){

        $bc4title = mysqli_real_escape_string($con,$_POST['blog_subt4']);
        $bc4desc = mysqli_real_escape_string($con,$_POST['blog_desc4']);
        $bc4date = mysqli_real_escape_string($con,$_POST['blog_date4']);
        
        $bc4pic= time().$_FILES['b_pic4']['name'];
        $bc4temp= $_FILES['b_pic4']['tmp_name'];

        if($bc4temp==''){
            $bc4q = "SELECT * FROM blog WHERE 1";
            $bc4r = mysqli_query($con,$bc4q);
            $bc4d = mysqli_fetch_array($bc4r);
            $bc4pic = $bc4d['blog_pic4'];
        }
     
        move_uploaded_file($bc4temp,"../images/$bc4pic");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_subt4='$bc4title',";
     $query.= "blog_desc4='$bc4desc',";
     $query.= "blog_date4='$bc4date',";
     $query.= "blog_pic4='$bc4pic'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    } 

    if(isset($_POST['blog-card5'])){

        $bc5title = mysqli_real_escape_string($con,$_POST['blog_subt5']);
        $bc5desc = mysqli_real_escape_string($con,$_POST['blog_desc5']);
        $bc5date = mysqli_real_escape_string($con,$_POST['blog_date5']);
        
        $bc5pic= time().$_FILES['b_pic5']['name'];
        $bc5temp= $_FILES['b_pic5']['tmp_name'];

        if($bc5temp==''){
            $bc5q = "SELECT * FROM blog WHERE 1";
            $bc5r = mysqli_query($con,$bc5q);
            $bc5d = mysqli_fetch_array($bc5r);
            $bc5pic = $bc5d['blog_pic5'];
        }
     
        move_uploaded_file($bc5temp,"../images/$bc5pic");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_subt5='$bc5title',";
     $query.= "blog_desc5='$bc5desc',";
     $query.= "blog_date5='$bc5date',";
     $query.= "blog_pic5='$bc5pic'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    } 

    if(isset($_POST['blog-cate'])){

        $bcate1 = mysqli_real_escape_string($con,$_POST['blog_cate1']);
        $bcate2 = mysqli_real_escape_string($con,$_POST['blog_cate2']);
        $bcate3 = mysqli_real_escape_string($con,$_POST['blog_cate3']);
        $bcate4 = mysqli_real_escape_string($con,$_POST['blog_cate4']);
        $bcate5 = mysqli_real_escape_string($con,$_POST['blog_cate5']);
        $bcate6 = mysqli_real_escape_string($con,$_POST['blog_cate6']);


        
        $query = "UPDATE blog SET ";
        $query.= "blog_cate1='$bcate1',";
        $query.= "blog_cate2='$bcate2',";
        $query.= "blog_cate3='$bcate3',";
        $query.= "blog_cate4='$bcate4',";
        $query.= "blog_cate5='$bcate5',";
        $query.= "blog_cate6='$bcate6'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    } 

    if(isset($_POST['blog-feed'])){
        
        $bi1pic= time().$_FILES['b_feed1']['name'];
        $bi1temp= $_FILES['b_feed1']['tmp_name'];

        $bi2pic= time().$_FILES['b_feed2']['name'];
        $bi2temp= $_FILES['b_feed2']['tmp_name'];

        $bi3pic= time().$_FILES['b_feed3']['name'];
        $bi3temp= $_FILES['b_feed3']['tmp_name'];

        $bi4pic= time().$_FILES['b_feed4']['name'];
        $bi4temp= $_FILES['b_feed4']['tmp_name'];

        $bi5pic= time().$_FILES['b_feed5']['name'];
        $bi5temp= $_FILES['b_feed5']['tmp_name'];

        $bi6pic= time().$_FILES['b_feed6']['name'];
        $bi6temp= $_FILES['b_feed6']['tmp_name'];

        if($bi1temp==''){
            $bi1q = "SELECT * FROM blog WHERE 1";
            $bi1r = mysqli_query($con,$bi1q);
            $bi1d = mysqli_fetch_array($bi1r);
            $bi1pic = $bi1d['blog_feed1'];
        }if($bi2temp==''){
            $bi2q = "SELECT * FROM blog WHERE 1";
            $bi2r = mysqli_query($con,$bi2q);
            $bi2d = mysqli_fetch_array($bi2r);
            $bi2pic = $bi2d['blog_feed2'];
        }if($bi3temp==''){
            $bi3q = "SELECT * FROM blog WHERE 1";
            $bi3r = mysqli_query($con,$bi3q);
            $bi3d = mysqli_fetch_array($bi3r);
            $bi3pic = $bi3d['blog_feed3'];
        }if($bi4temp==''){
            $bi4q = "SELECT * FROM blog WHERE 1";
            $bi4r = mysqli_query($con,$bi4q);
            $bi4d = mysqli_fetch_array($bi4r);
            $bi4pic = $bi4d['blog_feed4'];
        }if($bi5temp==''){
            $bi5q = "SELECT * FROM blog WHERE 1";
            $bi5r = mysqli_query($con,$bi5q);
            $bi5d = mysqli_fetch_array($bi5r);
            $bi5pic = $bi5d['blog_feed5'];
        }if($bi6temp==''){
            $bi6q = "SELECT * FROM blog WHERE 1";
            $bi6r = mysqli_query($con,$bi6q);
            $bi6d = mysqli_fetch_array($bi6r);
            $bi6pic = $bi6d['blog_feed6'];
        }
     
        move_uploaded_file($bi1temp,"../images/$bi1pic");
        move_uploaded_file($bi2temp,"../images/$bi2pic");
        move_uploaded_file($bi3temp,"../images/$bi3pic");
        move_uploaded_file($bi4temp,"../images/$bi4pic");
        move_uploaded_file($bi5temp,"../images/$bi5pic");
        move_uploaded_file($bi6temp,"../images/$bi6pic");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_feed1='$bi1pic',";
     $query.= "blog_feed2='$bi2pic',";
     $query.= "blog_feed3='$bi3pic',";
     $query.= "blog_feed4='$bi4pic',";
     $query.= "blog_feed5='$bi5pic',";
     $query.= "blog_feed6='$bi6pic'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    } 

    if(isset($_POST['blog-cloud'])){

        $bcloud1 = mysqli_real_escape_string($con,$_POST['blog_cloud1']);
        $bcloud2 = mysqli_real_escape_string($con,$_POST['blog_cloud2']);
        $bcloud3 = mysqli_real_escape_string($con,$_POST['blog_cloud3']);
        $bcloud4 = mysqli_real_escape_string($con,$_POST['blog_cloud4']);
        $bcloud5 = mysqli_real_escape_string($con,$_POST['blog_cloud5']);
        $bcloud6 = mysqli_real_escape_string($con,$_POST['blog_cloud6']);
        $bcloud7 = mysqli_real_escape_string($con,$_POST['blog_cloud7']);
        $bcloud8 = mysqli_real_escape_string($con,$_POST['blog_cloud8']);


        
        $query = "UPDATE blog SET ";
        $query.= "blog_cloud1='$bcloud1',";
        $query.= "blog_cloud2='$bcloud2',";
        $query.= "blog_cloud3='$bcloud3',";
        $query.= "blog_cloud4='$bcloud4',";
        $query.= "blog_cloud5='$bcloud5',";
        $query.= "blog_cloud6='$bcloud6',";
        $query.= "blog_cloud7='$bcloud7',";
        $query.= "blog_cloud8='$bcloud8'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    }

    if(isset($_POST['blog-rpost1'])){

        $brp1title = mysqli_real_escape_string($con,$_POST['blog_rt1']);
        $brp1date = mysqli_real_escape_string($con,$_POST['blog_rd1']);
        
        
        $brp1pic= time().$_FILES['b_rpic1']['name'];
        $brp1temp= $_FILES['b_rpic1']['tmp_name'];

        if($brp1temp==''){
            $brp1q = "SELECT * FROM blog WHERE 1";
            $brp1r = mysqli_query($con,$brp1q);
            $brp1d = mysqli_fetch_array($brp1r);
            $brp1pic = $brp1d['blog_rpic1'];
        }
     
        move_uploaded_file($brp1temp,"../images/$brp1pic");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_rt1='$brp1title',";
     $query.= "blog_rd1='$brp1date',";
     $query.= "blog_rpic1='$brp1pic'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    } 

    if(isset($_POST['blog-rpost2'])){

        $brp2title = mysqli_real_escape_string($con,$_POST['blog_rt2']);
        $brp2date = mysqli_real_escape_string($con,$_POST['blog_rd2']);
        
        
        $brp2pic= time().$_FILES['b_rpic2']['name'];
        $brp2temp= $_FILES['b_rpic2']['tmp_name'];

        if($brp2temp==''){
            $brp2q = "SELECT * FROM blog WHERE 1";
            $brp2r = mysqli_query($con,$brp2q);
            $brp2d = mysqli_fetch_array($brp2r);
            $brp2pic = $brp2d['blog_rpic2'];
        }
     
        move_uploaded_file($brp2temp,"../images/$brp2pic");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_rt2='$brp2title',";
     $query.= "blog_rd2='$brp2date',";
     $query.= "blog_rpic2='$brp2pic'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    } 

    if(isset($_POST['blog-rpost3'])){

        $brp3title = mysqli_real_escape_string($con,$_POST['blog_rt3']);
        $brp3date = mysqli_real_escape_string($con,$_POST['blog_rd3']);
        
        
        $brp3pic= time().$_FILES['b_rpic3']['name'];
        $brp3temp= $_FILES['b_rpic3']['tmp_name'];

        if($brp3temp==''){
            $brp3q = "SELECT * FROM blog WHERE 1";
            $brp3r = mysqli_query($con,$brp3q);
            $brp3d = mysqli_fetch_array($brp3r);
            $brp3pic = $brp3d['blog_rpic3'];
        }
     
        move_uploaded_file($brp3temp,"../images/$brp3pic");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_rt3='$brp3title',";
     $query.= "blog_rd3='$brp3date',";
     $query.= "blog_rpic3='$brp3pic'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    } 

    if(isset($_POST['blog-rpost4'])){

        $brp4title = mysqli_real_escape_string($con,$_POST['blog_rt4']);
        $brp4date = mysqli_real_escape_string($con,$_POST['blog_rd4']);
        
        
        $brp4pic= time().$_FILES['b_rpic4']['name'];
        $brp4temp= $_FILES['b_rpic4']['tmp_name'];

        if($brp4temp==''){
            $brp4q = "SELECT * FROM blog WHERE 1";
            $brp4r = mysqli_query($con,$brp4q);
            $brp4d = mysqli_fetch_array($brp4r);
            $brp4pic = $brp4d['blog_rpic4'];
        }
     
        move_uploaded_file($brp4temp,"../images/$brp4pic");

        
     $query = "UPDATE blog SET ";
     $query.= "blog_rt4='$brp4title',";
     $query.= "blog_rd4='$brp4date',";
     $query.= "blog_rpic4='$brp4pic'WHERE id=1";   

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogsetting=true';</script>";
       }
        

    } 

    if(isset($_POST['update-contact'])){
        $contact_address = mysqli_real_escape_string($con,$_POST['contact_address']);
        $contact_phone = mysqli_real_escape_string($con,$_POST['contact_phone']);
        $contact_email = mysqli_real_escape_string($con,$_POST['contact_email']);
        $contact_time = mysqli_real_escape_string($con,$_POST['contact_time']);
 
         $contact_pic= time().$_FILES['bg_3']['name'];
         $imgtemp4 = $_FILES['bg_3']['tmp_name'];
 
         if($imgtemp4==''){
             $q4 = "SELECT * FROM contact WHERE 1";
             $r4 = mysqli_query($con,$q4);
             $d4 = mysqli_fetch_array($r4);
             $imagename4 = $d4['contact_bg1'];
         }
      
         move_uploaded_file($imgtemp4,"../images/$contact_pic");
 
         
      $query = "UPDATE contact SET ";
      $query.= "contact_address='$contact_address',";
      $query.= "contact_phone='$contact_phone',";
      $query.= "contact_time='$contact_time',";
      $query.= "contact_bg1='$contact_pic',";   
     
     $query.= "contact_email='$contact_email' WHERE id=1";
 
     echo "$query";
 
      $run = mysqli_query($con,$query);
         if($run){
             echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?contactsetting=true';</script>";
        }
     }

     if(isset($_POST['foot-update'])){
        $fdesc = mysqli_real_escape_string($con,$_POST['foot_desc']);
        $fql1 = mysqli_real_escape_string($con,$_POST['foot_ql1']);
        $fql2 = mysqli_real_escape_string($con,$_POST['foot_ql2']);
        $fql3 = mysqli_real_escape_string($con,$_POST['foot_ql3']);
        $fql4 = mysqli_real_escape_string($con,$_POST['foot_ql4']);
        $fnp1 = mysqli_real_escape_string($con,$_POST['foot_np1']);
        $fnp2 = mysqli_real_escape_string($con,$_POST['foot_np2']);
        $fnp3 = mysqli_real_escape_string($con,$_POST['foot_np3']);
        $fnp4 = mysqli_real_escape_string($con,$_POST['foot_np4']);
        
 
         $flg= time().$_FILES['flg_1']['name'];
         $flgtemp = $_FILES['flg_1']['tmp_name'];

        //  $fbg= time().$_FILES['fbg_1']['name'];
        //  $fbgtemp = $_FILES['fbg_1']['tmp_name'];
 
         if($flgtemp==''){
             $flgq = "SELECT * FROM footer WHERE 1";
             $flgr = mysqli_query($con,$flgq);
             $flgd = mysqli_fetch_array($flgr);
             $flg = $flgd['foot_logo'];
         }
        //  if($fbgtemp==''){
        //     $fbgq = "SELECT * FROM footer WHERE 1";
        //     $fbgr = mysqli_query($con,$fbgq);
        //     $fbgd = mysqli_fetch_array($fbgr);
        //  $fbg = $fbgd['foot_bg'];
        // }

      
         move_uploaded_file($flgtemp,"../images/$flg");
        //  move_uploaded_file($fbgtemp,"../images/$fbg");
 
         
      $query = "UPDATE footer SET ";
      $query.= "foot_desc='$fdesc',";
      $query.= "foot_ql1='$fql1',";
      $query.= "foot_ql2='$fql2',";
      $query.= "foot_ql3='$fql3',";
      $query.= "foot_ql4='$fql4',";   
      $query.= "foot_np1='$fnp1',";
      $query.= "foot_np2='$fnp2',"; 
      $query.= "foot_np3='$fnp3',"; 
      $query.= "foot_np4='$fnp4',";       
      // $query.= "foot_bg='$fbg',";
     $query.= "foot_logo='$flg' WHERE id=1";
 
     echo "$query";
 
      $run = mysqli_query($con,$query);
         if($run){
             echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?footersetting=true';</script>";
        }
     }

     if(isset($_POST['admin-logo'])){
        
 
         $a_l= time().$_FILES['a_lg']['name'];
         $a_ltemp = $_FILES['a_lg']['tmp_name'];
 
         if($a_ltemp==''){
             $a_lq = "SELECT * FROM admin_info WHERE 1";
             $a_lr = mysqli_query($con,$a_lq);
             $a_ld = mysqli_fetch_array($a_lr);
             $a_l = $a_ld['admin_logo'];
         }
      
         move_uploaded_file($a_ltemp,"../images/$a_l");
 
         
      $query = "UPDATE admin_info SET ";
     $query.= "admin_logo='$a_l' WHERE id=1";
 
     echo "$query";
 
      $run = mysqli_query($con,$query);
         if($run){
             echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?adminlogosetting=true';</script>";
        }
     }







     if(isset($_POST['pcard1'])){


        $pc1_title = mysqli_real_escape_string($con,$_POST['pc1_title']);
        $wte_1 = mysqli_real_escape_string($con,$_POST['wte_1']);
        $tul_1 = mysqli_real_escape_string($con,$_POST['tul_1']);
        $pc1_dc1 = mysqli_real_escape_string($con,$_POST['pc1_dc1']);
        $pc1_dc2 = mysqli_real_escape_string($con,$_POST['pc1_dc2']);
        $pc1_dc3 = mysqli_real_escape_string($con,$_POST['pc1_dc3']);
        $pc1_dc4 = mysqli_real_escape_string($con,$_POST['pc1_dc4']);
        $pc1_dc5 = mysqli_real_escape_string($con,$_POST['pc1_dc5']);
        $pc1_price = mysqli_real_escape_string($con,$_POST['pc1_price']);
        $pc1_email = mysqli_real_escape_string($con,$_POST['pc1_email']);
        $pc1_phone = mysqli_real_escape_string($con,$_POST['pc1_phone']);

        $pc1bgpic= time().$_FILES['pc1_bg']['name'];
        $pc1bgtemp= $_FILES['pc1_bg']['tmp_name'];
        $pd1img1pic= time().$_FILES['d1_img1']['name'];
        $pd1img1temp= $_FILES['d1_img1']['tmp_name'];
        $pd1img2pic= time().$_FILES['d1_img2']['name'];
        $pd1img2temp= $_FILES['d1_img2']['tmp_name'];
        $pd2img1pic= time().$_FILES['d2_img1']['name'];
        $pd2img1temp= $_FILES['d2_img1']['tmp_name'];
        $pd2img2pic= time().$_FILES['d2_img2']['name'];
        $pd2img2temp= $_FILES['d2_img2']['tmp_name'];
        $pd3img1pic= time().$_FILES['d3_img1']['name'];
        $pd3img1temp= $_FILES['d3_img1']['tmp_name'];
        $pd3img2pic= time().$_FILES['d3_img2']['name'];
        $pd3img2temp= $_FILES['d3_img2']['tmp_name'];
        $pd4img1pic= time().$_FILES['d4_img1']['name'];
        $pd4img1temp= $_FILES['d4_img1']['tmp_name'];
        $pd4img2pic= time().$_FILES['d4_img2']['name'];
        $pd4img2temp= $_FILES['d4_img2']['tmp_name'];
        $pd5img1pic= time().$_FILES['d5_img1']['name'];
        $pd5img1temp= $_FILES['d5_img1']['tmp_name'];
        $pd5img2pic= time().$_FILES['d5_img2']['name'];
        $pd5img2temp= $_FILES['d5_img2']['tmp_name'];

        if($pc1bgtemp==''){
            $pc1bgq = "SELECT * FROM pack_card1 WHERE 1";
            $pc1bgr = mysqli_query($con,$pc1bgq);
            $pc1bgd = mysqli_fetch_array($pc1bgr);
            $pc1bgpic = $pc1bgd['pc1_bg'];
        }if($pd1img1temp==''){
            $pd1img1q = "SELECT * FROM pack_card1 WHERE 1";
            $pd1img1r = mysqli_query($con,$pd1img1q);
            $pd1img1d = mysqli_fetch_array($pd1img1r);
            $pd1img1pic = $pd1img1d['pc1_d1img1'];
        }if($pd1img2temp==''){
            $pd1img2q = "SELECT * FROM pack_card1 WHERE 1";
            $pd1img2r = mysqli_query($con,$pd1img2q);
            $pd1img2d = mysqli_fetch_array($pd1img2r);
            $pd1img2pic = $pd1img2d['pc1_d1img2'];
        }if($pd2img1temp==''){
            $pd2img1q = "SELECT * FROM pack_card1 WHERE 1";
            $pd2img1r = mysqli_query($con,$pd2img1q);
            $pd2img1d = mysqli_fetch_array($pd2img1r);
            $pd2img1pic = $pd2img1d['pc1_d2img1'];
        }if($pd2img2temp==''){
            $pd2img2q = "SELECT * FROM pack_card1 WHERE 1";
            $pd2img2r = mysqli_query($con,$pd2img2q);
            $pd2img2d = mysqli_fetch_array($pd2img2r);
            $pd2img2pic = $pd2img2d['pc1_d2img2'];
        }if($pd3img1temp==''){
            $pd3img1q = "SELECT * FROM pack_card1 WHERE 1";
            $pd3img1r = mysqli_query($con,$pd3img1q);
            $pd3img1d = mysqli_fetch_array($pd3img1r);
            $pd3img1pic = $pd3img1d['pc1_d3img1'];
        }if($pd3img2temp==''){
            $pd3img2q = "SELECT * FROM pack_card1 WHERE 1";
            $pd3img2r = mysqli_query($con,$pd3img2q);
            $pd3img2d = mysqli_fetch_array($pd3img2r);
            $pd3img2pic = $pd3img2d['pc1_d3img2'];
        }if($pd4img1temp==''){
            $pd4img1q = "SELECT * FROM pack_card1 WHERE 1";
            $pd4img1r = mysqli_query($con,$pd4img1q);
            $pd4img1d = mysqli_fetch_array($pd4img1r);
            $pd4img1pic = $pd4img1d['pc1_d4img1'];
        }if($pd4img2temp==''){
            $pd4img2q = "SELECT * FROM pack_card1 WHERE 1";
            $pd4img2r = mysqli_query($con,$pd4img2q);
            $pd4img2d = mysqli_fetch_array($pd4img2r);
            $pd4img2pic = $pd4img2d['pc1_d4img2'];
        }if($pd5img1temp==''){
            $pd5img1q = "SELECT * FROM pack_card1 WHERE 1";
            $pd5img1r = mysqli_query($con,$pd5img1q);
            $pd5img1d = mysqli_fetch_array($pd5img1r);
            $pd5img1pic = $pd5img1d['pc1_d5img1'];
        }if($pd5img2temp==''){
            $pd5img2q = "SELECT * FROM pack_card1 WHERE 1";
            $pd5img2r = mysqli_query($con,$pd5img2q);
            $pd5img2d = mysqli_fetch_array($pd5img2r);
            $pd5img2pic = $pd5img2d['pc1_d5img2'];
        }



     
        move_uploaded_file($pc1bgtemp,"../images/$pc1bgpic");
        move_uploaded_file($pd1img1temp,"../images/$pd1img1pic");
        move_uploaded_file($pd1img2temp,"../images/$pd1img2pic");
        move_uploaded_file($pd2img1temp,"../images/$pd2img1pic");
        move_uploaded_file($pd2img2temp,"../images/$pd2img2pic");
        move_uploaded_file($pd3img1temp,"../images/$pd3img1pic");
        move_uploaded_file($pd3img2temp,"../images/$pd3img2pic");
        move_uploaded_file($pd4img1temp,"../images/$pd4img1pic");
        move_uploaded_file($pd4img2temp,"../images/$pd4img2pic");
        move_uploaded_file($pd5img1temp,"../images/$pd5img1pic");
        move_uploaded_file($pd5img2temp,"../images/$pd5img2pic");


        
     $query = "UPDATE pack_card1 SET ";
     $query.= "pc1_title='$pc1_title',";
     $query.= "wte_1='$wte_1',";
     $query.= "tul_1='$tul_1',";
     $query.= "pc1_dc1='$pc1_dc1',";
     $query.= "pc1_dc2='$pc1_dc2',";
     $query.= "pc1_dc3='$pc1_dc3',";
     $query.= "pc1_dc4='$pc1_dc4',";
     $query.= "pc1_dc5='$pc1_dc5',";
     $query.= "pc1_price='$pc1_price',";
     $query.= "pc1_email='$pc1_email',";
     $query.= "pc1_phone='$pc1_phone',";

     $query.= "pc1_bg='$pc1bgpic',";
     $query.= "pc1_d1img1='$pd1img1pic',";
     $query.= "pc1_d1img2='$pd1img2pic',";
     $query.= "pc1_d2img1='$pd2img1pic',";
     $query.= "pc1_d2img2='$pd2img2pic',";
     $query.= "pc1_d3img1='$pd3img1pic',";
     $query.= "pc1_d3img2='$pd3img2pic',";
     $query.= "pc1_d4img1='$pd4img1pic',";
     $query.= "pc1_d4img2='$pd4img2pic',";
     $query.= "pc1_d5img1='$pd5img1pic',";
     $query.= "pc1_d5img2='$pd5img2pic'WHERE id=1";
      

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";
       }
        

    }



    if(isset($_POST['pcard2'])){


        $pc2_title = mysqli_real_escape_string($con,$_POST['pc2_title']);
        $wte_2 = mysqli_real_escape_string($con,$_POST['wte_2']);
        $tul_2 = mysqli_real_escape_string($con,$_POST['tul_2']);
        $pc2_dc1 = mysqli_real_escape_string($con,$_POST['pc2_dc1']);
        $pc2_dc2 = mysqli_real_escape_string($con,$_POST['pc2_dc2']);
        $pc2_dc3 = mysqli_real_escape_string($con,$_POST['pc2_dc3']);
        $pc2_dc4 = mysqli_real_escape_string($con,$_POST['pc2_dc4']);
        $pc2_dc5 = mysqli_real_escape_string($con,$_POST['pc2_dc5']);
        $pc2_price = mysqli_real_escape_string($con,$_POST['pc2_price']);
        $pc2_email = mysqli_real_escape_string($con,$_POST['pc2_email']);
        $pc2_phone = mysqli_real_escape_string($con,$_POST['pc2_phone']);

        $pc2bgpic= time().$_FILES['pc2_bg']['name'];
        $pc2bgtemp= $_FILES['pc2_bg']['tmp_name'];
        $p2d1img1pic= time().$_FILES['pc2_d1img1']['name'];
        $p2d1img1temp= $_FILES['pc2_d1img1']['tmp_name'];
        $p2d1img2pic= time().$_FILES['pc2_d1img2']['name'];
        $p2d1img2temp= $_FILES['pc2_d1img2']['tmp_name'];
        $p2d2img1pic= time().$_FILES['pc2_d2img1']['name'];
        $p2d2img1temp= $_FILES['pc2_d2img1']['tmp_name'];
        $p2d2img2pic= time().$_FILES['pc2_d2img2']['name'];
        $p2d2img2temp= $_FILES['pc2_d2img2']['tmp_name'];
        $p2d3img1pic= time().$_FILES['pc2_d3img1']['name'];
        $p2d3img1temp= $_FILES['pc2_d3img1']['tmp_name'];
        $p2d3img2pic= time().$_FILES['pc2_d3img2']['name'];
        $p2d3img2temp= $_FILES['pc2_d3img2']['tmp_name'];
        $p2d4img1pic= time().$_FILES['pc2_d4img1']['name'];
        $p2d4img1temp= $_FILES['pc2_d4img1']['tmp_name'];
        $p2d4img2pic= time().$_FILES['pc2_d4img2']['name'];
        $p2d4img2temp= $_FILES['pc2_d4img2']['tmp_name'];
        $p2d5img1pic= time().$_FILES['pc2_d5img1']['name'];
        $p2d5img1temp= $_FILES['pc2_d5img1']['tmp_name'];
        $p2d5img2pic= time().$_FILES['pc2_d5img2']['name'];
        $p2d5img2temp= $_FILES['pc2_d5img2']['tmp_name'];

        if($pc2bgtemp==''){
            $pc2bgq = "SELECT * FROM pack_card2 WHERE 1";
            $pc2bgr = mysqli_query($con,$pc2bgq);
            $pc2bgd = mysqli_fetch_array($pc2bgr);
            $pc2bgpic = $pc2bgd['pc2_bg'];
        }if($p2d1img1temp==''){
            $p2d1img1q = "SELECT * FROM pack_card2 WHERE 1";
            $p2d1img1r = mysqli_query($con,$p2d1img1q);
            $p2d1img1d = mysqli_fetch_array($p2d1img1r);
            $p2d1img1pic = $p2d1img1d['pc2_d1img1'];
        }if($p2d1img2temp==''){
            $p2d1img2q = "SELECT * FROM pack_card2 WHERE 1";
            $p2d1img2r = mysqli_query($con,$p2d1img2q);
            $p2d1img2d = mysqli_fetch_array($p2d1img2r);
            $p2d1img2pic = $p2d1img2d['pc2_d1img2'];
        }if($p2d2img1temp==''){
            $p2d2img1q = "SELECT * FROM pack_card2 WHERE 1";
            $p2d2img1r = mysqli_query($con,$p2d2img1q);
            $p2d2img1d = mysqli_fetch_array($p2d2img1r);
            $p2d2img1pic = $p2d2img1d['pc2_d2img1'];
        }if($p2d2img2temp==''){
            $p2d2img2q = "SELECT * FROM pack_card2 WHERE 1";
            $p2d2img2r = mysqli_query($con,$p2d2img2q);
            $p2d2img2d = mysqli_fetch_array($p2d2img2r);
            $p2d2img2pic = $p2d2img2d['pc2_d2img2'];
        }if($p2d3img1temp==''){
            $p2d3img1q = "SELECT * FROM pack_card2 WHERE 1";
            $p2d3img1r = mysqli_query($con,$p2d3img1q);
            $p2d3img1d = mysqli_fetch_array($p2d3img1r);
            $p2d3img1pic = $p2d3img1d['pc2_d3img1'];
        }if($p2d3img2temp==''){
            $p2d3img2q = "SELECT * FROM pack_card2 WHERE 1";
            $p2d3img2r = mysqli_query($con,$p2d3img2q);
            $p2d3img2d = mysqli_fetch_array($p2d3img2r);
            $p2d3img2pic = $p2d3img2d['pc2_d3img2'];
        }if($p2d4img1temp==''){
            $p2d4img1q = "SELECT * FROM pack_card2 WHERE 1";
            $p2d4img1r = mysqli_query($con,$p2d4img1q);
            $p2d4img1d = mysqli_fetch_array($p2d4img1r);
            $p2d4img1pic = $p2d4img1d['pc2_d4img1'];
        }if($p2d4img2temp==''){
            $p2d4img2q = "SELECT * FROM pack_card2 WHERE 1";
            $p2d4img2r = mysqli_query($con,$p2d4img2q);
            $p2d4img2d = mysqli_fetch_array($p2d4img2r);
            $p2d4img2pic = $p2d4img2d['pc2_d4img2'];
        }if($p2d5img1temp==''){
            $p2d5img1q = "SELECT * FROM pack_card2 WHERE 1";
            $p2d5img1r = mysqli_query($con,$p2d5img1q);
            $p2d5img1d = mysqli_fetch_array($p2d5img1r);
            $p2d5img1pic = $p2d5img1d['pc2_d5img1'];
        }if($p2d5img2temp==''){
            $p2d5img2q = "SELECT * FROM pack_card2 WHERE 1";
            $p2d5img2r = mysqli_query($con,$p2d5img2q);
            $p2d5img2d = mysqli_fetch_array($p2d5img2r);
            $p2d5img2pic = $p2d5img2d['pc2_d5img2'];
        }



     
        move_uploaded_file($pc2bgtemp,"../images/$pc2bgpic");
        move_uploaded_file($p2d1img1temp,"../images/$p2d1img1pic");
        move_uploaded_file($p2d1img2temp,"../images/$p2d1img2pic");
        move_uploaded_file($p2d2img1temp,"../images/$p2d2img1pic");
        move_uploaded_file($p2d2img2temp,"../images/$p2d2img2pic");
        move_uploaded_file($p2d3img1temp,"../images/$p2d3img1pic");
        move_uploaded_file($p2d3img2temp,"../images/$p2d3img2pic");
        move_uploaded_file($p2d4img1temp,"../images/$p2d4img1pic");
        move_uploaded_file($p2d4img2temp,"../images/$p2d4img2pic");
        move_uploaded_file($p2d5img1temp,"../images/$p2d5img1pic");
        move_uploaded_file($p2d5img2temp,"../images/$p2d5img2pic");


        
     $query = "UPDATE pack_card2 SET ";
     $query.= "pc2_title='$pc2_title',";
     $query.= "wte_2='$wte_2',";
     $query.= "tul_2='$tul_2',";
     $query.= "pc2_dc1='$pc2_dc1',";
     $query.= "pc2_dc2='$pc2_dc2',";
     $query.= "pc2_dc3='$pc2_dc3',";
     $query.= "pc2_dc4='$pc2_dc4',";
     $query.= "pc2_dc5='$pc2_dc5',";
     $query.= "pc2_price='$pc2_price',";
     $query.= "pc2_email='$pc2_email',";
     $query.= "pc2_phone='$pc2_phone',";

     $query.= "pc2_bg='$pc2bgpic',";
     $query.= "pc2_d1img1='$p2d1img1pic',";
     $query.= "pc2_d1img2='$p2d1img2pic',";
     $query.= "pc2_d2img1='$p2d2img1pic',";
     $query.= "pc2_d2img2='$p2d2img2pic',";
     $query.= "pc2_d3img1='$p2d3img1pic',";
     $query.= "pc2_d3img2='$p2d3img2pic',";
     $query.= "pc2_d4img1='$p2d4img1pic',";
     $query.= "pc2_d4img2='$p2d4img2pic',";
     $query.= "pc2_d5img1='$p2d5img1pic',";
     $query.= "pc2_d5img2='$p2d5img2pic'WHERE id=1";
      

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";
       }
        

    }


    if(isset($_POST['pcard3'])){


        $pc3_title = mysqli_real_escape_string($con,$_POST['pc3_title']);
        $wte_3 = mysqli_real_escape_string($con,$_POST['wte_3']);
        $tul_3 = mysqli_real_escape_string($con,$_POST['tul_3']);
        $pc3_dc1 = mysqli_real_escape_string($con,$_POST['pc3_dc1']);
        $pc3_dc2 = mysqli_real_escape_string($con,$_POST['pc3_dc2']);
        $pc3_dc3 = mysqli_real_escape_string($con,$_POST['pc3_dc3']);
        $pc3_dc4 = mysqli_real_escape_string($con,$_POST['pc3_dc4']);
        $pc3_dc5 = mysqli_real_escape_string($con,$_POST['pc3_dc5']);
        $pc3_price = mysqli_real_escape_string($con,$_POST['pc3_price']);
        $pc3_email = mysqli_real_escape_string($con,$_POST['pc3_email']);
        $pc3_phone = mysqli_real_escape_string($con,$_POST['pc3_phone']);

        $pc3bgpic= time().$_FILES['pc3_bg']['name'];
        $pc3bgtemp= $_FILES['pc3_bg']['tmp_name'];
        $p3d1img1pic= time().$_FILES['pc3_d1img1']['name'];
        $p3d1img1temp= $_FILES['pc3_d1img1']['tmp_name'];
        $p3d1img2pic= time().$_FILES['pc3_d1img2']['name'];
        $p3d1img2temp= $_FILES['pc3_d1img2']['tmp_name'];
        $p3d2img1pic= time().$_FILES['pc3_d2img1']['name'];
        $p3d2img1temp= $_FILES['pc3_d2img1']['tmp_name'];
        $p3d2img2pic= time().$_FILES['pc3_d2img2']['name'];
        $p3d2img2temp= $_FILES['pc3_d2img2']['tmp_name'];
        $p3d3img1pic= time().$_FILES['pc3_d3img1']['name'];
        $p3d3img1temp= $_FILES['pc3_d3img1']['tmp_name'];
        $p3d3img2pic= time().$_FILES['pc3_d3img2']['name'];
        $p3d3img2temp= $_FILES['pc3_d3img2']['tmp_name'];
        $p3d4img1pic= time().$_FILES['pc3_d4img1']['name'];
        $p3d4img1temp= $_FILES['pc3_d4img1']['tmp_name'];
        $p3d4img2pic= time().$_FILES['pc3_d4img2']['name'];
        $p3d4img2temp= $_FILES['pc3_d4img2']['tmp_name'];
        $p3d5img1pic= time().$_FILES['pc3_d5img1']['name'];
        $p3d5img1temp= $_FILES['pc3_d5img1']['tmp_name'];
        $p3d5img2pic= time().$_FILES['pc3_d5img2']['name'];
        $p3d5img2temp= $_FILES['pc3_d5img2']['tmp_name'];

        if($pc3bgtemp==''){
            $pc3bgq = "SELECT * FROM pack_card3 WHERE 1";
            $pc3bgr = mysqli_query($con,$pc3bgq);
            $pc3bgd = mysqli_fetch_array($pc3bgr);
            $pc3bgpic = $pc3bgd['pc3_bg'];
        }if($p3d1img1temp==''){
            $p3d1img1q = "SELECT * FROM pack_card3 WHERE 1";
            $p3d1img1r = mysqli_query($con,$p3d1img1q);
            $p3d1img1d = mysqli_fetch_array($p3d1img1r);
            $p3d1img1pic = $p3d1img1d['pc3_d1img1'];
        }if($p3d1img2temp==''){
            $p3d1img2q = "SELECT * FROM pack_card3 WHERE 1";
            $p3d1img2r = mysqli_query($con,$p3d1img2q);
            $p3d1img2d = mysqli_fetch_array($p3d1img2r);
            $p3d1img2pic = $p3d1img2d['pc3_d1img2'];
        }if($p3d2img1temp==''){
            $p3d2img1q = "SELECT * FROM pack_card3 WHERE 1";
            $p3d2img1r = mysqli_query($con,$p3d2img1q);
            $p3d2img1d = mysqli_fetch_array($p3d2img1r);
            $p3d2img1pic = $p3d2img1d['pc3_d2img1'];
        }if($p3d2img2temp==''){
            $p3d2img2q = "SELECT * FROM pack_card3 WHERE 1";
            $p3d2img2r = mysqli_query($con,$p3d2img2q);
            $p3d2img2d = mysqli_fetch_array($p3d2img2r);
            $p3d2img2pic = $p3d2img2d['pc3_d2img2'];
        }if($p3d3img1temp==''){
            $p3d3img1q = "SELECT * FROM pack_card3 WHERE 1";
            $p3d3img1r = mysqli_query($con,$p3d3img1q);
            $p3d3img1d = mysqli_fetch_array($p3d3img1r);
            $p3d3img1pic = $p3d3img1d['pc3_d3img1'];
        }if($p3d3img2temp==''){
            $p3d3img2q = "SELECT * FROM pack_card3 WHERE 1";
            $p3d3img2r = mysqli_query($con,$p3d3img2q);
            $p3d3img2d = mysqli_fetch_array($p3d3img2r);
            $p3d3img2pic = $p3d3img2d['pc3_d3img2'];
        }if($p3d4img1temp==''){
            $p3d4img1q = "SELECT * FROM pack_card3 WHERE 1";
            $p3d4img1r = mysqli_query($con,$p3d4img1q);
            $p3d4img1d = mysqli_fetch_array($p3d4img1r);
            $p3d4img1pic = $p3d4img1d['pc3_d4img1'];
        }if($p3d4img2temp==''){
            $p3d4img2q = "SELECT * FROM pack_card3 WHERE 1";
            $p3d4img2r = mysqli_query($con,$p3d4img2q);
            $p3d4img2d = mysqli_fetch_array($p3d4img2r);
            $p3d4img2pic = $p3d4img2d['pc3_d4img2'];
        }if($p3d5img1temp==''){
            $p3d5img1q = "SELECT * FROM pack_card3 WHERE 1";
            $p3d5img1r = mysqli_query($con,$p3d5img1q);
            $p3d5img1d = mysqli_fetch_array($p3d5img1r);
            $p3d5img1pic = $p3d5img1d['pc3_d5img1'];
        }if($p3d5img2temp==''){
            $p3d5img2q = "SELECT * FROM pack_card3 WHERE 1";
            $p3d5img2r = mysqli_query($con,$p3d5img2q);
            $p3d5img2d = mysqli_fetch_array($p3d5img2r);
            $p3d5img2pic = $p3d5img2d['pc3_d5img2'];
        }



     
        move_uploaded_file($pc3bgtemp,"../images/$pc3bgpic");
        move_uploaded_file($p3d1img1temp,"../images/$p3d1img1pic");
        move_uploaded_file($p3d1img2temp,"../images/$p3d1img2pic");
        move_uploaded_file($p3d2img1temp,"../images/$p3d2img1pic");
        move_uploaded_file($p3d2img2temp,"../images/$p3d2img2pic");
        move_uploaded_file($p3d3img1temp,"../images/$p3d3img1pic");
        move_uploaded_file($p3d3img2temp,"../images/$p3d3img2pic");
        move_uploaded_file($p3d4img1temp,"../images/$p3d4img1pic");
        move_uploaded_file($p3d4img2temp,"../images/$p3d4img2pic");
        move_uploaded_file($p3d5img1temp,"../images/$p3d5img1pic");
        move_uploaded_file($p3d5img2temp,"../images/$p3d5img2pic");


        
     $query = "UPDATE pack_card3 SET ";
     $query.= "pc3_title='$pc3_title',";
     $query.= "wte_3='$wte_3',";
     $query.= "tul_3='$tul_3',";
     $query.= "pc3_dc1='$pc3_dc1',";
     $query.= "pc3_dc2='$pc3_dc2',";
     $query.= "pc3_dc3='$pc3_dc3',";
     $query.= "pc3_dc4='$pc3_dc4',";
     $query.= "pc3_dc5='$pc3_dc5',";
     $query.= "pc3_price='$pc3_price',";
     $query.= "pc3_email='$pc3_email',";
     $query.= "pc3_phone='$pc3_phone',";

     $query.= "pc3_bg='$pc3bgpic',";
     $query.= "pc3_d1img1='$p3d1img1pic',";
     $query.= "pc3_d1img2='$p3d1img2pic',";
     $query.= "pc3_d2img1='$p3d2img1pic',";
     $query.= "pc3_d2img2='$p3d2img2pic',";
     $query.= "pc3_d3img1='$p3d3img1pic',";
     $query.= "pc3_d3img2='$p3d3img2pic',";
     $query.= "pc3_d4img1='$p3d4img1pic',";
     $query.= "pc3_d4img2='$p3d4img2pic',";
     $query.= "pc3_d5img1='$p3d5img1pic',";
     $query.= "pc3_d5img2='$p3d5img2pic'WHERE id=1";
      

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";
       }
        

    }

    if(isset($_POST['pcard4'])){


        $pc4_title = mysqli_real_escape_string($con,$_POST['pc4_title']);
        $wte_4 = mysqli_real_escape_string($con,$_POST['wte_4']);
        $tul_4 = mysqli_real_escape_string($con,$_POST['tul_4']);
        $pc4_dc1 = mysqli_real_escape_string($con,$_POST['pc4_dc1']);
        $pc4_dc2 = mysqli_real_escape_string($con,$_POST['pc4_dc2']);
        $pc4_dc3 = mysqli_real_escape_string($con,$_POST['pc4_dc3']);
        $pc4_dc4 = mysqli_real_escape_string($con,$_POST['pc4_dc4']);
        $pc4_dc5 = mysqli_real_escape_string($con,$_POST['pc4_dc5']);
        $pc4_price = mysqli_real_escape_string($con,$_POST['pc4_price']);
        $pc4_email = mysqli_real_escape_string($con,$_POST['pc4_email']);
        $pc4_phone = mysqli_real_escape_string($con,$_POST['pc4_phone']);

        $pc4bgpic= time().$_FILES['pc4_bg']['name'];
        $pc4bgtemp= $_FILES['pc4_bg']['tmp_name'];
        $p4d1img1pic= time().$_FILES['pc4_d1img1']['name'];
        $p4d1img1temp= $_FILES['pc4_d1img1']['tmp_name'];
        $p4d1img2pic= time().$_FILES['pc4_d1img2']['name'];
        $p4d1img2temp= $_FILES['pc4_d1img2']['tmp_name'];
        $p4d2img1pic= time().$_FILES['pc4_d2img1']['name'];
        $p4d2img1temp= $_FILES['pc4_d2img1']['tmp_name'];
        $p4d2img2pic= time().$_FILES['pc4_d2img2']['name'];
        $p4d2img2temp= $_FILES['pc4_d2img2']['tmp_name'];
        $p4d3img1pic= time().$_FILES['pc4_d3img1']['name'];
        $p4d3img1temp= $_FILES['pc4_d3img1']['tmp_name'];
        $p4d3img2pic= time().$_FILES['pc4_d3img2']['name'];
        $p4d3img2temp= $_FILES['pc4_d3img2']['tmp_name'];
        $p4d4img1pic= time().$_FILES['pc4_d4img1']['name'];
        $p4d4img1temp= $_FILES['pc4_d4img1']['tmp_name'];
        $p4d4img2pic= time().$_FILES['pc4_d4img2']['name'];
        $p4d4img2temp= $_FILES['pc4_d4img2']['tmp_name'];
        $p4d5img1pic= time().$_FILES['pc4_d5img1']['name'];
        $p4d5img1temp= $_FILES['pc4_d5img1']['tmp_name'];
        $p4d5img2pic= time().$_FILES['pc4_d5img2']['name'];
        $p4d5img2temp= $_FILES['pc4_d5img2']['tmp_name'];

        if($pc4bgtemp==''){
            $pc4bgq = "SELECT * FROM pack_card4 WHERE 1";
            $pc4bgr = mysqli_query($con,$pc4bgq);
            $pc4bgd = mysqli_fetch_array($pc4bgr);
            $pc4bgpic = $pc4bgd['pc4_bg'];
        }if($p4d1img1temp==''){
            $p4d1img1q = "SELECT * FROM pack_card4 WHERE 1";
            $p4d1img1r = mysqli_query($con,$p4d1img1q);
            $p4d1img1d = mysqli_fetch_array($p4d1img1r);
            $p4d1img1pic = $p4d1img1d['pc4_d1img1'];
        }if($p4d1img2temp==''){
            $p4d1img2q = "SELECT * FROM pack_card4 WHERE 1";
            $p4d1img2r = mysqli_query($con,$p4d1img2q);
            $p4d1img2d = mysqli_fetch_array($p4d1img2r);
            $p4d1img2pic = $p4d1img2d['pc4_d1img2'];
        }if($p4d2img1temp==''){
            $p4d2img1q = "SELECT * FROM pack_card4 WHERE 1";
            $p4d2img1r = mysqli_query($con,$p4d2img1q);
            $p4d2img1d = mysqli_fetch_array($p4d2img1r);
            $p4d2img1pic = $p4d2img1d['pc4_d2img1'];
        }if($p4d2img2temp==''){
            $p4d2img2q = "SELECT * FROM pack_card4 WHERE 1";
            $p4d2img2r = mysqli_query($con,$p4d2img2q);
            $p4d2img2d = mysqli_fetch_array($p4d2img2r);
            $p4d2img2pic = $p4d2img2d['pc4_d2img2'];
        }if($p4d3img1temp==''){
            $p4d3img1q = "SELECT * FROM pack_card4 WHERE 1";
            $p4d3img1r = mysqli_query($con,$p4d3img1q);
            $p4d3img1d = mysqli_fetch_array($p4d3img1r);
            $p4d3img1pic = $p4d3img1d['pc4_d3img1'];
        }if($p4d3img2temp==''){
            $p4d3img2q = "SELECT * FROM pack_card4 WHERE 1";
            $p4d3img2r = mysqli_query($con,$p4d3img2q);
            $p4d3img2d = mysqli_fetch_array($p4d3img2r);
            $p4d3img2pic = $p4d3img2d['pc4_d3img2'];
        }if($p4d4img1temp==''){
            $p4d4img1q = "SELECT * FROM pack_card4 WHERE 1";
            $p4d4img1r = mysqli_query($con,$p4d4img1q);
            $p4d4img1d = mysqli_fetch_array($p4d4img1r);
            $p4d4img1pic = $p4d4img1d['pc4_d4img1'];
        }if($p4d4img2temp==''){
            $p4d4img2q = "SELECT * FROM pack_card4 WHERE 1";
            $p4d4img2r = mysqli_query($con,$p4d4img2q);
            $p4d4img2d = mysqli_fetch_array($p4d4img2r);
            $p4d4img2pic = $p4d4img2d['pc4_d4img2'];
        }if($p4d5img1temp==''){
            $p4d5img1q = "SELECT * FROM pack_card4 WHERE 1";
            $p4d5img1r = mysqli_query($con,$p4d5img1q);
            $p4d5img1d = mysqli_fetch_array($p4d5img1r);
            $p4d5img1pic = $p4d5img1d['pc4_d5img1'];
        }if($p4d5img2temp==''){
            $p4d5img2q = "SELECT * FROM pack_card4 WHERE 1";
            $p4d5img2r = mysqli_query($con,$p4d5img2q);
            $p4d5img2d = mysqli_fetch_array($p4d5img2r);
            $p4d5img2pic = $p4d5img2d['pc4_d5img2'];
        }



     
        move_uploaded_file($pc4bgtemp,"../images/$pc4bgpic");
        move_uploaded_file($p4d1img1temp,"../images/$p4d1img1pic");
        move_uploaded_file($p4d1img2temp,"../images/$p4d1img2pic");
        move_uploaded_file($p4d2img1temp,"../images/$p4d2img1pic");
        move_uploaded_file($p4d2img2temp,"../images/$p4d2img2pic");
        move_uploaded_file($p4d3img1temp,"../images/$p4d3img1pic");
        move_uploaded_file($p4d3img2temp,"../images/$p4d3img2pic");
        move_uploaded_file($p4d4img1temp,"../images/$p4d4img1pic");
        move_uploaded_file($p4d4img2temp,"../images/$p4d4img2pic");
        move_uploaded_file($p4d5img1temp,"../images/$p4d5img1pic");
        move_uploaded_file($p4d5img2temp,"../images/$p4d5img2pic");


        
     $query = "UPDATE pack_card4 SET ";
     $query.= "pc4_title='$pc4_title',";
     $query.= "wte_4='$wte_4',";
     $query.= "tul_4='$tul_4',";
     $query.= "pc4_dc1='$pc4_dc1',";
     $query.= "pc4_dc2='$pc4_dc2',";
     $query.= "pc4_dc3='$pc4_dc3',";
     $query.= "pc4_dc4='$pc4_dc4',";
     $query.= "pc4_dc5='$pc4_dc5',";
     $query.= "pc4_price='$pc4_price',";
     $query.= "pc4_email='$pc4_email',";
     $query.= "pc4_phone='$pc4_phone',";

     $query.= "pc4_bg='$pc4bgpic',";
     $query.= "pc4_d1img1='$p4d1img1pic',";
     $query.= "pc4_d1img2='$p4d1img2pic',";
     $query.= "pc4_d2img1='$p4d2img1pic',";
     $query.= "pc4_d2img2='$p4d2img2pic',";
     $query.= "pc4_d3img1='$p4d3img1pic',";
     $query.= "pc4_d3img2='$p4d3img2pic',";
     $query.= "pc4_d4img1='$p4d4img1pic',";
     $query.= "pc4_d4img2='$p4d4img2pic',";
     $query.= "pc4_d5img1='$p4d5img1pic',";
     $query.= "pc4_d5img2='$p4d5img2pic'WHERE id=1";
      

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";
       }
        

    }








    //for card 5
    if(isset($_POST['pcard5'])){


        $pc5_title = mysqli_real_escape_string($con,$_POST['pc5_title']);
        $wte_5 = mysqli_real_escape_string($con,$_POST['wte_5']);
        $tul_5 = mysqli_real_escape_string($con,$_POST['tul_5']);
        $pc5_dc1 = mysqli_real_escape_string($con,$_POST['pc5_dc1']);
        $pc5_dc2 = mysqli_real_escape_string($con,$_POST['pc5_dc2']);
        $pc5_dc3 = mysqli_real_escape_string($con,$_POST['pc5_dc3']);
        $pc5_dc4 = mysqli_real_escape_string($con,$_POST['pc5_dc4']);
        $pc5_dc5 = mysqli_real_escape_string($con,$_POST['pc5_dc5']);
        $pc5_price = mysqli_real_escape_string($con,$_POST['pc5_price']);
        $pc5_email = mysqli_real_escape_string($con,$_POST['pc5_email']);
        $pc5_phone = mysqli_real_escape_string($con,$_POST['pc5_phone']);

        $pc5bgpic= time().$_FILES['pc5_bg']['name'];
        $pc5bgtemp= $_FILES['pc5_bg']['tmp_name'];
        $p5d1img1pic= time().$_FILES['pc5_d1img1']['name'];
        $p5d1img1temp= $_FILES['pc5_d1img1']['tmp_name'];
        $p5d1img2pic= time().$_FILES['pc5_d1img2']['name'];
        $p5d1img2temp= $_FILES['pc5_d1img2']['tmp_name'];
        $p5d2img1pic= time().$_FILES['pc5_d2img1']['name'];
        $p5d2img1temp= $_FILES['pc5_d2img1']['tmp_name'];
        $p5d2img2pic= time().$_FILES['pc5_d2img2']['name'];
        $p5d2img2temp= $_FILES['pc5_d2img2']['tmp_name'];
        $p5d3img1pic= time().$_FILES['pc5_d3img1']['name'];
        $p5d3img1temp= $_FILES['pc5_d3img1']['tmp_name'];
        $p5d3img2pic= time().$_FILES['pc5_d3img2']['name'];
        $p5d3img2temp= $_FILES['pc5_d3img2']['tmp_name'];
        $p5d4img1pic= time().$_FILES['pc5_d4img1']['name'];
        $p5d4img1temp= $_FILES['pc5_d4img1']['tmp_name'];
        $p5d4img2pic= time().$_FILES['pc5_d4img2']['name'];
        $p5d4img2temp= $_FILES['pc5_d4img2']['tmp_name'];
        $p5d5img1pic= time().$_FILES['pc5_d5img1']['name'];
        $p5d5img1temp= $_FILES['pc5_d5img1']['tmp_name'];
        $p5d5img2pic= time().$_FILES['pc5_d5img2']['name'];
        $p5d5img2temp= $_FILES['pc5_d5img2']['tmp_name'];

        if($pc5bgtemp==''){
            $pc5bgq = "SELECT * FROM pack_card5 WHERE 1";
            $pc5bgr = mysqli_query($con,$pc5bgq);
            $pc5bgd = mysqli_fetch_array($pc5bgr);
            $pc5bgpic = $pc5bgd['pc5_bg'];
        }if($p5d1img1temp==''){
            $p5d1img1q = "SELECT * FROM pack_card5 WHERE 1";
            $p5d1img1r = mysqli_query($con,$p5d1img1q);
            $p5d1img1d = mysqli_fetch_array($p5d1img1r);
            $p5d1img1pic = $p5d1img1d['pc5_d1img1'];
        }if($p5d1img2temp==''){
            $p5d1img2q = "SELECT * FROM pack_card5 WHERE 1";
            $p5d1img2r = mysqli_query($con,$p5d1img2q);
            $p5d1img2d = mysqli_fetch_array($p5d1img2r);
            $p5d1img2pic = $p5d1img2d['pc5_d1img2'];
        }if($p5d2img1temp==''){
            $p5d2img1q = "SELECT * FROM pack_card5 WHERE 1";
            $p5d2img1r = mysqli_query($con,$p5d2img1q);
            $p5d2img1d = mysqli_fetch_array($p5d2img1r);
            $p5d2img1pic = $p5d2img1d['pc5_d2img1'];
        }if($p5d2img2temp==''){
            $p5d2img2q = "SELECT * FROM pack_card5 WHERE 1";
            $p5d2img2r = mysqli_query($con,$p5d2img2q);
            $p5d2img2d = mysqli_fetch_array($p5d2img2r);
            $p5d2img2pic = $p5d2img2d['pc5_d2img2'];
        }if($p5d3img1temp==''){
            $p5d3img1q = "SELECT * FROM pack_card5 WHERE 1";
            $p5d3img1r = mysqli_query($con,$p5d3img1q);
            $p5d3img1d = mysqli_fetch_array($p5d3img1r);
            $p5d3img1pic = $p5d3img1d['pc5_d3img1'];
        }if($p5d3img2temp==''){
            $p5d3img2q = "SELECT * FROM pack_card5 WHERE 1";
            $p5d3img2r = mysqli_query($con,$p5d3img2q);
            $p5d3img2d = mysqli_fetch_array($p5d3img2r);
            $p5d3img2pic = $p5d3img2d['pc5_d3img2'];
        }if($p5d4img1temp==''){
            $p5d4img1q = "SELECT * FROM pack_card5 WHERE 1";
            $p5d4img1r = mysqli_query($con,$p5d4img1q);
            $p5d4img1d = mysqli_fetch_array($p5d4img1r);
            $p5d4img1pic = $p5d4img1d['pc5_d4img1'];
        }if($p5d4img2temp==''){
            $p5d4img2q = "SELECT * FROM pack_card5 WHERE 1";
            $p5d4img2r = mysqli_query($con,$p5d4img2q);
            $p5d4img2d = mysqli_fetch_array($p5d4img2r);
            $p5d4img2pic = $p5d4img2d['pc5_d4img2'];
        }if($p5d5img1temp==''){
            $p5d5img1q = "SELECT * FROM pack_card5 WHERE 1";
            $p5d5img1r = mysqli_query($con,$p5d5img1q);
            $p5d5img1d = mysqli_fetch_array($p5d5img1r);
            $p5d5img1pic = $p5d5img1d['pc5_d5img1'];
        }if($p5d5img2temp==''){
            $p5d5img2q = "SELECT * FROM pack_card5 WHERE 1";
            $p5d5img2r = mysqli_query($con,$p5d5img2q);
            $p5d5img2d = mysqli_fetch_array($p5d5img2r);
            $p5d5img2pic = $p5d5img2d['pc5_d5img2'];
        }



     
        move_uploaded_file($pc5bgtemp,"../images/$pc5bgpic");
        move_uploaded_file($p5d1img1temp,"../images/$p5d1img1pic");
        move_uploaded_file($p5d1img2temp,"../images/$p5d1img2pic");
        move_uploaded_file($p5d2img1temp,"../images/$p5d2img1pic");
        move_uploaded_file($p5d2img2temp,"../images/$p5d2img2pic");
        move_uploaded_file($p5d3img1temp,"../images/$p5d3img1pic");
        move_uploaded_file($p5d3img2temp,"../images/$p5d3img2pic");
        move_uploaded_file($p5d4img1temp,"../images/$p5d4img1pic");
        move_uploaded_file($p5d4img2temp,"../images/$p5d4img2pic");
        move_uploaded_file($p5d5img1temp,"../images/$p5d5img1pic");
        move_uploaded_file($p5d5img2temp,"../images/$p5d5img2pic");


        
     $query = "UPDATE pack_card5 SET ";
     $query.= "pc5_title='$pc5_title',";
     $query.= "wte_5='$wte_5',";
     $query.= "tul_5='$tul_5',";
     $query.= "pc5_dc1='$pc5_dc1',";
     $query.= "pc5_dc2='$pc5_dc2',";
     $query.= "pc5_dc3='$pc5_dc3',";
     $query.= "pc5_dc4='$pc5_dc4',";
     $query.= "pc5_dc5='$pc5_dc5',";
     $query.= "pc5_price='$pc5_price',";
     $query.= "pc5_email='$pc5_email',";
     $query.= "pc5_phone='$pc5_phone',";

     $query.= "pc5_bg='$pc5bgpic',";
     $query.= "pc5_d1img1='$p5d1img1pic',";
     $query.= "pc5_d1img2='$p5d1img2pic',";
     $query.= "pc5_d2img1='$p5d2img1pic',";
     $query.= "pc5_d2img2='$p5d2img2pic',";
     $query.= "pc5_d3img1='$p5d3img1pic',";
     $query.= "pc5_d3img2='$p5d3img2pic',";
     $query.= "pc5_d4img1='$p5d4img1pic',";
     $query.= "pc5_d4img2='$p5d4img2pic',";
     $query.= "pc5_d5img1='$p5d5img1pic',";
     $query.= "pc5_d5img2='$p5d5img2pic'WHERE id=1";
      

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";
       }
        

    }









    //for card 6
    if(isset($_POST['pcard6'])){


        $pc6_title = mysqli_real_escape_string($con,$_POST['pc6_title']);
        $wte_6 = mysqli_real_escape_string($con,$_POST['wte_6']);
        $tul_6 = mysqli_real_escape_string($con,$_POST['tul_6']);
        $pc6_dc1 = mysqli_real_escape_string($con,$_POST['pc6_dc1']);
        $pc6_dc2 = mysqli_real_escape_string($con,$_POST['pc6_dc2']);
        $pc6_dc3 = mysqli_real_escape_string($con,$_POST['pc6_dc3']);
        $pc6_dc4 = mysqli_real_escape_string($con,$_POST['pc6_dc4']);
        $pc6_dc5 = mysqli_real_escape_string($con,$_POST['pc6_dc5']);
        $pc6_price = mysqli_real_escape_string($con,$_POST['pc6_price']);
        $pc6_email = mysqli_real_escape_string($con,$_POST['pc6_email']);
        $pc6_phone = mysqli_real_escape_string($con,$_POST['pc6_phone']);

        $pc6bgpic= time().$_FILES['pc6_bg']['name'];
        $pc6bgtemp= $_FILES['pc6_bg']['tmp_name'];
        $p6d1img1pic= time().$_FILES['pc6_d1img1']['name'];
        $p6d1img1temp= $_FILES['pc6_d1img1']['tmp_name'];
        $p6d1img2pic= time().$_FILES['pc6_d1img2']['name'];
        $p6d1img2temp= $_FILES['pc6_d1img2']['tmp_name'];
        $p6d2img1pic= time().$_FILES['pc6_d2img1']['name'];
        $p6d2img1temp= $_FILES['pc6_d2img1']['tmp_name'];
        $p6d2img2pic= time().$_FILES['pc6_d2img2']['name'];
        $p6d2img2temp= $_FILES['pc6_d2img2']['tmp_name'];
        $p6d3img1pic= time().$_FILES['pc6_d3img1']['name'];
        $p6d3img1temp= $_FILES['pc6_d3img1']['tmp_name'];
        $p6d3img2pic= time().$_FILES['pc6_d3img2']['name'];
        $p6d3img2temp= $_FILES['pc6_d3img2']['tmp_name'];
        $p6d4img1pic= time().$_FILES['pc6_d4img1']['name'];
        $p6d4img1temp= $_FILES['pc6_d4img1']['tmp_name'];
        $p6d4img2pic= time().$_FILES['pc6_d4img2']['name'];
        $p6d4img2temp= $_FILES['pc6_d4img2']['tmp_name'];
        $p6d5img1pic= time().$_FILES['pc6_d5img1']['name'];
        $p6d5img1temp= $_FILES['pc6_d5img1']['tmp_name'];
        $p6d5img2pic= time().$_FILES['pc6_d5img2']['name'];
        $p6d5img2temp= $_FILES['pc6_d5img2']['tmp_name'];

        if($pc6bgtemp==''){
            $pc6bgq = "SELECT * FROM pack_card6 WHERE 1";
            $pc6bgr = mysqli_query($con,$pc6bgq);
            $pc6bgd = mysqli_fetch_array($pc6bgr);
            $pc6bgpic = $pc6bgd['pc6_bg'];
        }if($p6d1img1temp==''){
            $p6d1img1q = "SELECT * FROM pack_card6 WHERE 1";
            $p6d1img1r = mysqli_query($con,$p6d1img1q);
            $p6d1img1d = mysqli_fetch_array($p6d1img1r);
            $p6d1img1pic = $p6d1img1d['pc6_d1img1'];
        }if($p6d1img2temp==''){
            $p6d1img2q = "SELECT * FROM pack_card6 WHERE 1";
            $p6d1img2r = mysqli_query($con,$p6d1img2q);
            $p6d1img2d = mysqli_fetch_array($p6d1img2r);
            $p6d1img2pic = $p6d1img2d['pc6_d1img2'];
        }if($p6d2img1temp==''){
            $p6d2img1q = "SELECT * FROM pack_card6 WHERE 1";
            $p6d2img1r = mysqli_query($con,$p6d2img1q);
            $p6d2img1d = mysqli_fetch_array($p6d2img1r);
            $p6d2img1pic = $p6d2img1d['pc6_d2img1'];
        }if($p6d2img2temp==''){
            $p6d2img2q = "SELECT * FROM pack_card6 WHERE 1";
            $p6d2img2r = mysqli_query($con,$p6d2img2q);
            $p6d2img2d = mysqli_fetch_array($p6d2img2r);
            $p6d2img2pic = $p6d2img2d['pc6_d2img2'];
        }if($p6d3img1temp==''){
            $p6d3img1q = "SELECT * FROM pack_card6 WHERE 1";
            $p6d3img1r = mysqli_query($con,$p6d3img1q);
            $p6d3img1d = mysqli_fetch_array($p6d3img1r);
            $p6d3img1pic = $p6d3img1d['pc6_d3img1'];
        }if($p6d3img2temp==''){
            $p6d3img2q = "SELECT * FROM pack_card6 WHERE 1";
            $p6d3img2r = mysqli_query($con,$p6d3img2q);
            $p6d3img2d = mysqli_fetch_array($p6d3img2r);
            $p6d3img2pic = $p6d3img2d['pc6_d3img2'];
        }if($p6d4img1temp==''){
            $p6d4img1q = "SELECT * FROM pack_card6 WHERE 1";
            $p6d4img1r = mysqli_query($con,$p6d4img1q);
            $p6d4img1d = mysqli_fetch_array($p6d4img1r);
            $p6d4img1pic = $p6d4img1d['pc6_d4img1'];
        }if($p6d4img2temp==''){
            $p6d4img2q = "SELECT * FROM pack_card6 WHERE 1";
            $p6d4img2r = mysqli_query($con,$p6d4img2q);
            $p6d4img2d = mysqli_fetch_array($p6d4img2r);
            $p6d4img2pic = $p6d4img2d['pc6_d4img2'];
        }if($p6d5img1temp==''){
            $p6d5img1q = "SELECT * FROM pack_card6 WHERE 1";
            $p6d5img1r = mysqli_query($con,$p6d5img1q);
            $p6d5img1d = mysqli_fetch_array($p6d5img1r);
            $p6d5img1pic = $p6d5img1d['pc6_d5img1'];
        }if($p6d5img2temp==''){
            $p6d5img2q = "SELECT * FROM pack_card6 WHERE 1";
            $p6d5img2r = mysqli_query($con,$p6d5img2q);
            $p6d5img2d = mysqli_fetch_array($p6d5img2r);
            $p6d5img2pic = $p6d5img2d['pc6_d5img2'];
        }



     
        move_uploaded_file($pc6bgtemp,"../images/$pc6bgpic");
        move_uploaded_file($p6d1img1temp,"../images/$p6d1img1pic");
        move_uploaded_file($p6d1img2temp,"../images/$p6d1img2pic");
        move_uploaded_file($p6d2img1temp,"../images/$p6d2img1pic");
        move_uploaded_file($p6d2img2temp,"../images/$p6d2img2pic");
        move_uploaded_file($p6d3img1temp,"../images/$p6d3img1pic");
        move_uploaded_file($p6d3img2temp,"../images/$p6d3img2pic");
        move_uploaded_file($p6d4img1temp,"../images/$p6d4img1pic");
        move_uploaded_file($p6d4img2temp,"../images/$p6d4img2pic");
        move_uploaded_file($p6d5img1temp,"../images/$p6d5img1pic");
        move_uploaded_file($p6d5img2temp,"../images/$p6d5img2pic");


        
     $query = "UPDATE pack_card6 SET ";
     $query.= "pc6_title='$pc6_title',";
     $query.= "wte_6='$wte_6',";
     $query.= "tul_6='$tul_6',";
     $query.= "pc6_dc1='$pc6_dc1',";
     $query.= "pc6_dc2='$pc6_dc2',";
     $query.= "pc6_dc3='$pc6_dc3',";
     $query.= "pc6_dc4='$pc6_dc4',";
     $query.= "pc6_dc5='$pc6_dc5',";
     $query.= "pc6_price='$pc6_price',";
     $query.= "pc6_email='$pc6_email',";
     $query.= "pc6_phone='$pc6_phone',";

     $query.= "pc6_bg='$pc6bgpic',";
     $query.= "pc6_d1img1='$p6d1img1pic',";
     $query.= "pc6_d1img2='$p6d1img2pic',";
     $query.= "pc6_d2img1='$p6d2img1pic',";
     $query.= "pc6_d2img2='$p6d2img2pic',";
     $query.= "pc6_d3img1='$p6d3img1pic',";
     $query.= "pc6_d3img2='$p6d3img2pic',";
     $query.= "pc6_d4img1='$p6d4img1pic',";
     $query.= "pc6_d4img2='$p6d4img2pic',";
     $query.= "pc6_d5img1='$p6d5img1pic',";
     $query.= "pc6_d5img2='$p6d5img2pic'WHERE id=1";
      

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";
       }
        

    }








    //for card 7
    if(isset($_POST['pcard7'])){


        $pc7_title = mysqli_real_escape_string($con,$_POST['pc7_title']);
        $wte_7 = mysqli_real_escape_string($con,$_POST['wte_7']);
        $tul_7 = mysqli_real_escape_string($con,$_POST['tul_7']);
        $pc7_dc1 = mysqli_real_escape_string($con,$_POST['pc7_dc1']);
        $pc7_dc2 = mysqli_real_escape_string($con,$_POST['pc7_dc2']);
        $pc7_dc3 = mysqli_real_escape_string($con,$_POST['pc7_dc3']);
        $pc7_dc4 = mysqli_real_escape_string($con,$_POST['pc7_dc4']);
        $pc7_dc5 = mysqli_real_escape_string($con,$_POST['pc7_dc5']);
        $pc7_price = mysqli_real_escape_string($con,$_POST['pc7_price']);
        $pc7_email = mysqli_real_escape_string($con,$_POST['pc7_email']);
        $pc7_phone = mysqli_real_escape_string($con,$_POST['pc7_phone']);

        $pc7bgpic= time().$_FILES['pc7_bg']['name'];
        $pc7bgtemp= $_FILES['pc7_bg']['tmp_name'];
        $p7d1img1pic= time().$_FILES['pc7_d1img1']['name'];
        $p7d1img1temp= $_FILES['pc7_d1img1']['tmp_name'];
        $p7d1img2pic= time().$_FILES['pc7_d1img2']['name'];
        $p7d1img2temp= $_FILES['pc7_d1img2']['tmp_name'];
        $p7d2img1pic= time().$_FILES['pc7_d2img1']['name'];
        $p7d2img1temp= $_FILES['pc7_d2img1']['tmp_name'];
        $p7d2img2pic= time().$_FILES['pc7_d2img2']['name'];
        $p7d2img2temp= $_FILES['pc7_d2img2']['tmp_name'];
        $p7d3img1pic= time().$_FILES['pc7_d3img1']['name'];
        $p7d3img1temp= $_FILES['pc7_d3img1']['tmp_name'];
        $p7d3img2pic= time().$_FILES['pc7_d3img2']['name'];
        $p7d3img2temp= $_FILES['pc7_d3img2']['tmp_name'];
        $p7d4img1pic= time().$_FILES['pc7_d4img1']['name'];
        $p7d4img1temp= $_FILES['pc7_d4img1']['tmp_name'];
        $p7d4img2pic= time().$_FILES['pc7_d4img2']['name'];
        $p7d4img2temp= $_FILES['pc7_d4img2']['tmp_name'];
        $p7d5img1pic= time().$_FILES['pc7_d5img1']['name'];
        $p7d5img1temp= $_FILES['pc7_d5img1']['tmp_name'];
        $p7d5img2pic= time().$_FILES['pc7_d5img2']['name'];
        $p7d5img2temp= $_FILES['pc7_d5img2']['tmp_name'];

        if($pc7bgtemp==''){
            $pc7bgq = "SELECT * FROM pack_card7 WHERE 1";
            $pc7bgr = mysqli_query($con,$pc7bgq);
            $pc7bgd = mysqli_fetch_array($pc7bgr);
            $pc7bgpic = $pc7bgd['pc7_bg'];
        }if($p7d1img1temp==''){
            $p7d1img1q = "SELECT * FROM pack_card7 WHERE 1";
            $p7d1img1r = mysqli_query($con,$p7d1img1q);
            $p7d1img1d = mysqli_fetch_array($p7d1img1r);
            $p7d1img1pic = $p7d1img1d['pc7_d1img1'];
        }if($p7d1img2temp==''){
            $p7d1img2q = "SELECT * FROM pack_card7 WHERE 1";
            $p7d1img2r = mysqli_query($con,$p7d1img2q);
            $p7d1img2d = mysqli_fetch_array($p7d1img2r);
            $p7d1img2pic = $p7d1img2d['pc7_d1img2'];
        }if($p7d2img1temp==''){
            $p7d2img1q = "SELECT * FROM pack_card7 WHERE 1";
            $p7d2img1r = mysqli_query($con,$p7d2img1q);
            $p7d2img1d = mysqli_fetch_array($p7d2img1r);
            $p7d2img1pic = $p7d2img1d['pc7_d2img1'];
        }if($p7d2img2temp==''){
            $p7d2img2q = "SELECT * FROM pack_card7 WHERE 1";
            $p7d2img2r = mysqli_query($con,$p7d2img2q);
            $p7d2img2d = mysqli_fetch_array($p7d2img2r);
            $p7d2img2pic = $p7d2img2d['pc7_d2img2'];
        }if($p7d3img1temp==''){
            $p7d3img1q = "SELECT * FROM pack_card7 WHERE 1";
            $p7d3img1r = mysqli_query($con,$p7d3img1q);
            $p7d3img1d = mysqli_fetch_array($p7d3img1r);
            $p7d3img1pic = $p7d3img1d['pc7_d3img1'];
        }if($p7d3img2temp==''){
            $p7d3img2q = "SELECT * FROM pack_card7 WHERE 1";
            $p7d3img2r = mysqli_query($con,$p7d3img2q);
            $p7d3img2d = mysqli_fetch_array($p7d3img2r);
            $p7d3img2pic = $p7d3img2d['pc7_d3img2'];
        }if($p7d4img1temp==''){
            $p7d4img1q = "SELECT * FROM pack_card7 WHERE 1";
            $p7d4img1r = mysqli_query($con,$p7d4img1q);
            $p7d4img1d = mysqli_fetch_array($p7d4img1r);
            $p7d4img1pic = $p7d4img1d['pc7_d4img1'];
        }if($p7d4img2temp==''){
            $p7d4img2q = "SELECT * FROM pack_card7 WHERE 1";
            $p7d4img2r = mysqli_query($con,$p7d4img2q);
            $p7d4img2d = mysqli_fetch_array($p7d4img2r);
            $p7d4img2pic = $p7d4img2d['pc7_d4img2'];
        }if($p7d5img1temp==''){
            $p7d5img1q = "SELECT * FROM pack_card7 WHERE 1";
            $p7d5img1r = mysqli_query($con,$p7d5img1q);
            $p7d5img1d = mysqli_fetch_array($p7d5img1r);
            $p7d5img1pic = $p7d5img1d['pc7_d5img1'];
        }if($p7d5img2temp==''){
            $p7d5img2q = "SELECT * FROM pack_card7 WHERE 1";
            $p7d5img2r = mysqli_query($con,$p7d5img2q);
            $p7d5img2d = mysqli_fetch_array($p7d5img2r);
            $p7d5img2pic = $p7d5img2d['pc7_d5img2'];
        }



     
        move_uploaded_file($pc7bgtemp,"../images/$pc7bgpic");
        move_uploaded_file($p7d1img1temp,"../images/$p7d1img1pic");
        move_uploaded_file($p7d1img2temp,"../images/$p7d1img2pic");
        move_uploaded_file($p7d2img1temp,"../images/$p7d2img1pic");
        move_uploaded_file($p7d2img2temp,"../images/$p7d2img2pic");
        move_uploaded_file($p7d3img1temp,"../images/$p7d3img1pic");
        move_uploaded_file($p7d3img2temp,"../images/$p7d3img2pic");
        move_uploaded_file($p7d4img1temp,"../images/$p7d4img1pic");
        move_uploaded_file($p7d4img2temp,"../images/$p7d4img2pic");
        move_uploaded_file($p7d5img1temp,"../images/$p7d5img1pic");
        move_uploaded_file($p7d5img2temp,"../images/$p7d5img2pic");


        
     $query = "UPDATE pack_card7 SET ";
     $query.= "pc7_title='$pc7_title',";
     $query.= "wte_7='$wte_7',";
     $query.= "tul_7='$tul_7',";
     $query.= "pc7_dc1='$pc7_dc1',";
     $query.= "pc7_dc2='$pc7_dc2',";
     $query.= "pc7_dc3='$pc7_dc3',";
     $query.= "pc7_dc4='$pc7_dc4',";
     $query.= "pc7_dc5='$pc7_dc5',";
     $query.= "pc7_price='$pc7_price',";
     $query.= "pc7_email='$pc7_email',";
     $query.= "pc7_phone='$pc7_phone',";

     $query.= "pc7_bg='$pc7bgpic',";
     $query.= "pc7_d1img1='$p7d1img1pic',";
     $query.= "pc7_d1img2='$p7d1img2pic',";
     $query.= "pc7_d2img1='$p7d2img1pic',";
     $query.= "pc7_d2img2='$p7d2img2pic',";
     $query.= "pc7_d3img1='$p7d3img1pic',";
     $query.= "pc7_d3img2='$p7d3img2pic',";
     $query.= "pc7_d4img1='$p7d4img1pic',";
     $query.= "pc7_d4img2='$p7d4img2pic',";
     $query.= "pc7_d5img1='$p7d5img1pic',";
     $query.= "pc7_d5img2='$p7d5img2pic'WHERE id=1";
      

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";
       }
        

    }










    //for card 8
    if(isset($_POST['pcard8'])){


        $pc8_title = mysqli_real_escape_string($con,$_POST['pc8_title']);
        $wte_8 = mysqli_real_escape_string($con,$_POST['wte_8']);
        $tul_8 = mysqli_real_escape_string($con,$_POST['tul_8']);
        $pc8_dc1 = mysqli_real_escape_string($con,$_POST['pc8_dc1']);
        $pc8_dc2 = mysqli_real_escape_string($con,$_POST['pc8_dc2']);
        $pc8_dc3 = mysqli_real_escape_string($con,$_POST['pc8_dc3']);
        $pc8_dc4 = mysqli_real_escape_string($con,$_POST['pc8_dc4']);
        $pc8_dc5 = mysqli_real_escape_string($con,$_POST['pc8_dc5']);
        $pc8_price = mysqli_real_escape_string($con,$_POST['pc8_price']);
        $pc8_email = mysqli_real_escape_string($con,$_POST['pc8_email']);
        $pc8_phone = mysqli_real_escape_string($con,$_POST['pc8_phone']);

        $pc8bgpic= time().$_FILES['pc8_bg']['name'];
        $pc8bgtemp= $_FILES['pc8_bg']['tmp_name'];
        $p8d1img1pic= time().$_FILES['pc8_d1img1']['name'];
        $p8d1img1temp= $_FILES['pc8_d1img1']['tmp_name'];
        $p8d1img2pic= time().$_FILES['pc8_d1img2']['name'];
        $p8d1img2temp= $_FILES['pc8_d1img2']['tmp_name'];
        $p8d2img1pic= time().$_FILES['pc8_d2img1']['name'];
        $p8d2img1temp= $_FILES['pc8_d2img1']['tmp_name'];
        $p8d2img2pic= time().$_FILES['pc8_d2img2']['name'];
        $p8d2img2temp= $_FILES['pc8_d2img2']['tmp_name'];
        $p8d3img1pic= time().$_FILES['pc8_d3img1']['name'];
        $p8d3img1temp= $_FILES['pc8_d3img1']['tmp_name'];
        $p8d3img2pic= time().$_FILES['pc8_d3img2']['name'];
        $p8d3img2temp= $_FILES['pc8_d3img2']['tmp_name'];
        $p8d4img1pic= time().$_FILES['pc8_d4img1']['name'];
        $p8d4img1temp= $_FILES['pc8_d4img1']['tmp_name'];
        $p8d4img2pic= time().$_FILES['pc8_d4img2']['name'];
        $p8d4img2temp= $_FILES['pc8_d4img2']['tmp_name'];
        $p8d5img1pic= time().$_FILES['pc8_d5img1']['name'];
        $p8d5img1temp= $_FILES['pc8_d5img1']['tmp_name'];
        $p8d5img2pic= time().$_FILES['pc8_d5img2']['name'];
        $p8d5img2temp= $_FILES['pc8_d5img2']['tmp_name'];

        if($pc8bgtemp==''){
            $pc8bgq = "SELECT * FROM pack_card8 WHERE 1";
            $pc8bgr = mysqli_query($con,$pc8bgq);
            $pc8bgd = mysqli_fetch_array($pc8bgr);
            $pc8bgpic = $pc8bgd['pc8_bg'];
        }if($p8d1img1temp==''){
            $p8d1img1q = "SELECT * FROM pack_card8 WHERE 1";
            $p8d1img1r = mysqli_query($con,$p8d1img1q);
            $p8d1img1d = mysqli_fetch_array($p8d1img1r);
            $p8d1img1pic = $p8d1img1d['pc8_d1img1'];
        }if($p8d1img2temp==''){
            $p8d1img2q = "SELECT * FROM pack_card8 WHERE 1";
            $p8d1img2r = mysqli_query($con,$p8d1img2q);
            $p8d1img2d = mysqli_fetch_array($p8d1img2r);
            $p8d1img2pic = $p8d1img2d['pc8_d1img2'];
        }if($p8d2img1temp==''){
            $p8d2img1q = "SELECT * FROM pack_card8 WHERE 1";
            $p8d2img1r = mysqli_query($con,$p8d2img1q);
            $p8d2img1d = mysqli_fetch_array($p8d2img1r);
            $p8d2img1pic = $p8d2img1d['pc8_d2img1'];
        }if($p8d2img2temp==''){
            $p8d2img2q = "SELECT * FROM pack_card8 WHERE 1";
            $p8d2img2r = mysqli_query($con,$p8d2img2q);
            $p8d2img2d = mysqli_fetch_array($p8d2img2r);
            $p8d2img2pic = $p8d2img2d['pc8_d2img2'];
        }if($p8d3img1temp==''){
            $p8d3img1q = "SELECT * FROM pack_card8 WHERE 1";
            $p8d3img1r = mysqli_query($con,$p8d3img1q);
            $p8d3img1d = mysqli_fetch_array($p8d3img1r);
            $p8d3img1pic = $p8d3img1d['pc8_d3img1'];
        }if($p8d3img2temp==''){
            $p8d3img2q = "SELECT * FROM pack_card8 WHERE 1";
            $p8d3img2r = mysqli_query($con,$p8d3img2q);
            $p8d3img2d = mysqli_fetch_array($p8d3img2r);
            $p8d3img2pic = $p8d3img2d['pc8_d3img2'];
        }if($p8d4img1temp==''){
            $p8d4img1q = "SELECT * FROM pack_card8 WHERE 1";
            $p8d4img1r = mysqli_query($con,$p8d4img1q);
            $p8d4img1d = mysqli_fetch_array($p8d4img1r);
            $p8d4img1pic = $p8d4img1d['pc8_d4img1'];
        }if($p8d4img2temp==''){
            $p8d4img2q = "SELECT * FROM pack_card8 WHERE 1";
            $p8d4img2r = mysqli_query($con,$p8d4img2q);
            $p8d4img2d = mysqli_fetch_array($p8d4img2r);
            $p8d4img2pic = $p8d4img2d['pc8_d4img2'];
        }if($p8d5img1temp==''){
            $p8d5img1q = "SELECT * FROM pack_card8 WHERE 1";
            $p8d5img1r = mysqli_query($con,$p8d5img1q);
            $p8d5img1d = mysqli_fetch_array($p8d5img1r);
            $p8d5img1pic = $p8d5img1d['pc8_d5img1'];
        }if($p8d5img2temp==''){
            $p8d5img2q = "SELECT * FROM pack_card8 WHERE 1";
            $p8d5img2r = mysqli_query($con,$p8d5img2q);
            $p8d5img2d = mysqli_fetch_array($p8d5img2r);
            $p8d5img2pic = $p8d5img2d['pc8_d5img2'];
        }



     
        move_uploaded_file($pc8bgtemp,"../images/$pc8bgpic");
        move_uploaded_file($p8d1img1temp,"../images/$p8d1img1pic");
        move_uploaded_file($p8d1img2temp,"../images/$p8d1img2pic");
        move_uploaded_file($p8d2img1temp,"../images/$p8d2img1pic");
        move_uploaded_file($p8d2img2temp,"../images/$p8d2img2pic");
        move_uploaded_file($p8d3img1temp,"../images/$p8d3img1pic");
        move_uploaded_file($p8d3img2temp,"../images/$p8d3img2pic");
        move_uploaded_file($p8d4img1temp,"../images/$p8d4img1pic");
        move_uploaded_file($p8d4img2temp,"../images/$p8d4img2pic");
        move_uploaded_file($p8d5img1temp,"../images/$p8d5img1pic");
        move_uploaded_file($p8d5img2temp,"../images/$p8d5img2pic");


        
     $query = "UPDATE pack_card8 SET ";
     $query.= "pc8_title='$pc8_title',";
     $query.= "wte_8='$wte_8',";
     $query.= "tul_8='$tul_8',";
     $query.= "pc8_dc1='$pc8_dc1',";
     $query.= "pc8_dc2='$pc8_dc2',";
     $query.= "pc8_dc3='$pc8_dc3',";
     $query.= "pc8_dc4='$pc8_dc4',";
     $query.= "pc8_dc5='$pc8_dc5',";
     $query.= "pc8_price='$pc8_price',";
     $query.= "pc8_email='$pc8_email',";
     $query.= "pc8_phone='$pc8_phone',";

     $query.= "pc8_bg='$pc8bgpic',";
     $query.= "pc8_d1img1='$p8d1img1pic',";
     $query.= "pc8_d1img2='$p8d1img2pic',";
     $query.= "pc8_d2img1='$p8d2img1pic',";
     $query.= "pc8_d2img2='$p8d2img2pic',";
     $query.= "pc8_d3img1='$p8d3img1pic',";
     $query.= "pc8_d3img2='$p8d3img2pic',";
     $query.= "pc8_d4img1='$p8d4img1pic',";
     $query.= "pc8_d4img2='$p8d4img2pic',";
     $query.= "pc8_d5img1='$p8d5img1pic',";
     $query.= "pc8_d5img2='$p8d5img2pic'WHERE id=1";
      

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";
       }
        

    }




    //update card 9
    if(isset($_POST['pcard9'])){


        $pc9_title = mysqli_real_escape_string($con,$_POST['pc9_title']);
        $wte_9 = mysqli_real_escape_string($con,$_POST['wte_9']);
        $tul_9 = mysqli_real_escape_string($con,$_POST['tul_9']);
        $pc9_dc1 = mysqli_real_escape_string($con,$_POST['pc9_dc1']);
        $pc9_dc2 = mysqli_real_escape_string($con,$_POST['pc9_dc2']);
        $pc9_dc3 = mysqli_real_escape_string($con,$_POST['pc9_dc3']);
        $pc9_dc4 = mysqli_real_escape_string($con,$_POST['pc9_dc4']);
        $pc9_dc5 = mysqli_real_escape_string($con,$_POST['pc9_dc5']);
        $pc9_price = mysqli_real_escape_string($con,$_POST['pc9_price']);
        $pc9_email = mysqli_real_escape_string($con,$_POST['pc9_email']);
        $pc9_phone = mysqli_real_escape_string($con,$_POST['pc9_phone']);

        $pc9bgpic= time().$_FILES['pc9_bg']['name'];
        $pc9bgtemp= $_FILES['pc9_bg']['tmp_name'];

        $p9d1img1pic= time().$_FILES['pc9_d1img1']['name'];
        $p9d1img1temp= $_FILES['pc9_d1img1']['tmp_name'];

        $p9d1img2pic= time().$_FILES['pc9_d1img2']['name'];
        $p9d1img2temp= $_FILES['pc9_d1img2']['tmp_name'];

        $p9d2img1pic= time().$_FILES['pc9_d2img1']['name'];
        $p9d2img1temp= $_FILES['pc9_d2img1']['tmp_name'];
        $p9d2img2pic= time().$_FILES['pc9_d2img2']['name'];
        $p9d2img2temp= $_FILES['pc9_d2img2']['tmp_name'];
        $p9d3img1pic= time().$_FILES['pc9_d3img1']['name'];
        $p9d3img1temp= $_FILES['pc9_d3img1']['tmp_name'];
        $p9d3img2pic= time().$_FILES['pc9_d3img2']['name'];
        $p9d3img2temp= $_FILES['pc9_d3img2']['tmp_name'];
        $p9d4img1pic= time().$_FILES['pc9_d4img1']['name'];
        $p9d4img1temp= $_FILES['pc9_d4img1']['tmp_name'];
        $p9d4img2pic= time().$_FILES['pc9_d4img2']['name'];
        $p9d4img2temp= $_FILES['pc9_d4img2']['tmp_name'];
        $p9d5img1pic= time().$_FILES['pc9_d5img1']['name'];
        $p9d5img1temp= $_FILES['pc9_d5img1']['tmp_name'];
        $p9d5img2pic= time().$_FILES['pc9_d5img2']['name'];
        $p9d5img2temp= $_FILES['pc9_d5img2']['tmp_name'];

        if($pc9bgtemp==''){
            $pc9bgq = "SELECT * FROM pack_card9 WHERE 1";
            $pc9bgr = mysqli_query($con,$pc9bgq);
            $pc9bgd = mysqli_fetch_array($pc9bgr);
            $pc9bgpic = $pc9bgd['pc9_bg'];
        }if($p9d1img1temp==''){
            $p9d1img1q = "SELECT * FROM pack_card9 WHERE 1";
            $p9d1img1r = mysqli_query($con,$p9d1img1q);
            $p9d1img1d = mysqli_fetch_array($p9d1img1r);
            $p9d1img1pic = $p9d1img1d['pc9_d1img1'];
        }if($p9d1img2temp==''){
            $p9d1img2q = "SELECT * FROM pack_card9 WHERE 1";
            $p9d1img2r = mysqli_query($con,$p9d1img2q);
            $p9d1img2d = mysqli_fetch_array($p9d1img2r);
            $p9d1img2pic = $p9d1img2d['pc9_d1img2'];
        }if($p9d2img1temp==''){
            $p9d2img1q = "SELECT * FROM pack_card9 WHERE 1";
            $p9d2img1r = mysqli_query($con,$p9d2img1q);
            $p9d2img1d = mysqli_fetch_array($p9d2img1r);
            $p9d2img1pic = $p9d2img1d['pc9_d2img1'];
        }if($p9d2img2temp==''){
            $p9d2img2q = "SELECT * FROM pack_card9 WHERE 1";
            $p9d2img2r = mysqli_query($con,$p9d2img2q);
            $p9d2img2d = mysqli_fetch_array($p9d2img2r);
            $p9d2img2pic = $p9d2img2d['pc9_d2img2'];
        }if($p9d3img1temp==''){
            $p9d3img1q = "SELECT * FROM pack_card9 WHERE 1";
            $p9d3img1r = mysqli_query($con,$p9d3img1q);
            $p9d3img1d = mysqli_fetch_array($p9d3img1r);
            $p9d3img1pic = $p9d3img1d['pc9_d3img1'];
        }if($p9d3img2temp==''){
            $p9d3img2q = "SELECT * FROM pack_card9 WHERE 1";
            $p9d3img2r = mysqli_query($con,$p9d3img2q);
            $p9d3img2d = mysqli_fetch_array($p9d3img2r);
            $p9d3img2pic = $p9d3img2d['pc9_d3img2'];
        }if($p9d4img1temp==''){
            $p9d4img1q = "SELECT * FROM pack_card9 WHERE 1";
            $p9d4img1r = mysqli_query($con,$p9d4img1q);
            $p9d4img1d = mysqli_fetch_array($p9d4img1r);
            $p9d4img1pic = $p9d4img1d['pc9_d4img1'];
        }if($p9d4img2temp==''){
            $p9d4img2q = "SELECT * FROM pack_card9 WHERE 1";
            $p9d4img2r = mysqli_query($con,$p9d4img2q);
            $p9d4img2d = mysqli_fetch_array($p9d4img2r);
            $p9d4img2pic = $p9d4img2d['pc9_d4img2'];
        }if($p9d5img1temp==''){
            $p9d5img1q = "SELECT * FROM pack_card9 WHERE 1";
            $p9d5img1r = mysqli_query($con,$p9d5img1q);
            $p9d5img1d = mysqli_fetch_array($p9d5img1r);
            $p9d5img1pic = $p9d5img1d['pc9_d5img1'];
        }if($p9d5img2temp==''){
            $p9d5img2q = "SELECT * FROM pack_card9 WHERE 1";
            $p9d5img2r = mysqli_query($con,$p9d5img2q);
            $p9d5img2d = mysqli_fetch_array($p9d5img2r);
            $p9d5img2pic = $p9d5img2d['pc9_d5img2'];
        }



     
        move_uploaded_file($pc9bgtemp,"../images/$pc9bgpic");
        move_uploaded_file($p9d1img1temp,"../images/$p9d1img1pic");
        move_uploaded_file($p9d1img2temp,"../images/$p9d1img2pic");
        move_uploaded_file($p9d2img1temp,"../images/$p9d2img1pic");
        move_uploaded_file($p9d2img2temp,"../images/$p9d2img2pic");
        move_uploaded_file($p9d3img1temp,"../images/$p9d3img1pic");
        move_uploaded_file($p9d3img2temp,"../images/$p9d3img2pic");
        move_uploaded_file($p9d4img1temp,"../images/$p9d4img1pic");
        move_uploaded_file($p9d4img2temp,"../images/$p9d4img2pic");
        move_uploaded_file($p9d5img1temp,"../images/$p9d5img1pic");
        move_uploaded_file($p9d5img2temp,"../images/$p9d5img2pic");


        
     $query = "UPDATE pack_card9 SET ";
     $query.= "pc9_title='$pc9_title',";
     $query.= "wte_9='$wte_9',";
     $query.= "tul_9='$tul_9',";
     $query.= "pc9_dc1='$pc9_dc1',";
     $query.= "pc9_dc2='$pc9_dc2',";
     $query.= "pc9_dc3='$pc9_dc3',";
     $query.= "pc9_dc4='$pc9_dc4',";
     $query.= "pc9_dc5='$pc9_dc5',";
     $query.= "pc9_price='$pc9_price',";
     $query.= "pc9_email='$pc9_email',";
     $query.= "pc9_phone='$pc9_phone',";

     $query.= "pc9_bg='$pc9bgpic',";
     $query.= "pc9_d1img1='$p9d1img1pic',";
     $query.= "pc9_d1img2='$p9d1img2pic',";
     $query.= "pc9_d2img1='$p9d2img1pic',";
     $query.= "pc9_d2img2='$p9d2img2pic',";
     $query.= "pc9_d3img1='$p9d3img1pic',";
     $query.= "pc9_d3img2='$p9d3img2pic',";
     $query.= "pc9_d4img1='$p9d4img1pic',";
     $query.= "pc9_d4img2='$p9d4img2pic',";
     $query.= "pc9_d5img1='$p9d5img1pic',";
     $query.= "pc9_d5img2='$p9d5img2pic'WHERE id=1";
      

    echo "$query";

     $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";
       }
        

    }








        if(isset($_POST['add_pack'])){

            $pack_title = mysqli_real_escape_string($con,$_POST['pack_title']);
            $pack_rate = mysqli_real_escape_string($con,$_POST['pack_rate']);
            $pack_subtitle = mysqli_real_escape_string($con,$_POST['pack_subtitle']);
            $pack_price = mysqli_real_escape_string($con,$_POST['pack_price']);
            $pack_img = time().$_FILES['pack_img']['name'];

            move_uploaded_file($_FILES['pack_img']['tmp_name'],"../images/$pack_img");


            $query = "INSERT INTO pack_card (pack_title,pack_img,pack_rate,pack_subtitle,pack_price) VALUES('$pack_title','$pack_img','$pack_rate','$pack_subtitle','$pack_price') ";
    
    
            
            // $query = "UPDATE pack_add SET ";
            // $query.= "pack_title='$pack_title',";
            // $query.= "pack_rate='$pack_rate',";
            // $query.= "pack_subtitle='$pack_subtitle',";
            // $query.= "pack_price='$pack_price'WHERE id=1";   
    
    
         $run = mysqli_query($con,$query);
            if($run){
                echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
           }
            
    
        }







        if(isset($_POST['p_card'])){

            $pack_title = mysqli_real_escape_string($con,$_POST['pack_title']);
            $pack_rate = mysqli_real_escape_string($con,$_POST['pack_rate']);
            $pack_subtitle = mysqli_real_escape_string($con,$_POST['pack_subtitle']);
            $pack_price = mysqli_real_escape_string($con,$_POST['pack_price']);
            $pac1_title = mysqli_real_escape_string($con,$_POST['pac1_title']);
            $wate_1 = mysqli_real_escape_string($con,$_POST['wate_1']);
            $taul_1 = mysqli_real_escape_string($con,$_POST['taul_1']);
            $pac1_dc1 = mysqli_real_escape_string($con,$_POST['pac1_dc1']);
            $pac1_dc2 = mysqli_real_escape_string($con,$_POST['pac1_dc2']);
            $pac1_dc3 = mysqli_real_escape_string($con,$_POST['pac1_dc3']);
            $pac1_dc4 = mysqli_real_escape_string($con,$_POST['pac1_dc4']);
            $pac1_dc5 = mysqli_real_escape_string($con,$_POST['pac1_dc5']);
            $pac1_dc6 = mysqli_real_escape_string($con,$_POST['pac1_dc6']);
            $pac1_dc7 = mysqli_real_escape_string($con,$_POST['pac1_dc7']);
            $pac1_dc8 = mysqli_real_escape_string($con,$_POST['pac1_dc8']);
            $pac1_dc9 = mysqli_real_escape_string($con,$_POST['pac1_dc9']);
            $pac1_dc10 = mysqli_real_escape_string($con,$_POST['pac1_dc10']);
            $pac1_dc11 = mysqli_real_escape_string($con,$_POST['pac1_dc11']);
            $pac1_dc12 = mysqli_real_escape_string($con,$_POST['pac1_dc12']);
            $pac1_dc13 = mysqli_real_escape_string($con,$_POST['pac1_dc13']);
            $pac1_dc14 = mysqli_real_escape_string($con,$_POST['pac1_dc14']);
            $pac1_dc15 = mysqli_real_escape_string($con,$_POST['pac1_dc15']);
            $pac1_price = mysqli_real_escape_string($con,$_POST['pac1_price']);
            $pac1_email = mysqli_real_escape_string($con,$_POST['pac1_email']);
            $pac1_phone = mysqli_real_escape_string($con,$_POST['pac1_phone']);
            $day1 = $_POST['day1'] ?? 0;
            $day2 = $_POST['day2'] ?? 0;
            $day3 = $_POST['day3'] ?? 0;
            $day4 = $_POST['day4'] ?? 0;
            $day5 = $_POST['day5'] ?? 0;
            $day6 = $_POST['day6'] ?? 0;
            $day7 = $_POST['day7'] ?? 0;
            $day8 = $_POST['day8'] ?? 0;
            $day9 = $_POST['day9'] ?? 0;
            $day10 = $_POST['day10'] ?? 0;
            $day11 = $_POST['day11'] ?? 0;
            $day12 = $_POST['day12'] ?? 0;
            $day13 = $_POST['day13'] ?? 0;
            $day14 = $_POST['day14'] ?? 0;
            $day15 = $_POST['day15'] ?? 0;
     
            $pack_img = time().$_FILES['pack_img']['name'];
            $pac1_bg= time().$_FILES['pac1_bg']['name'];
            $pac1_d1img1= time().$_FILES['pac1_d1img1']['name'];
            $pac1_d1img2= time().$_FILES['pac1_d1img2']['name'];
            $pac1_d2img1= time().$_FILES['pac1_d2img1']['name'];
            $pac1_d2img2= time().$_FILES['pac1_d2img2']['name'];
            $pac1_d3img1= time().$_FILES['pac1_d3img1']['name'];
            $pac1_d3img2= time().$_FILES['pac1_d3img2']['name'];
            $pac1_d4img1= time().$_FILES['pac1_d4img1']['name'];
            $pac1_d4img2= time().$_FILES['pac1_d4img2']['name'];
            $pac1_d5img1= time().$_FILES['pac1_d5img1']['name'];
            $pac1_d5img2= time().$_FILES['pac1_d5img2']['name'];
            $pac1_d6img1= time().$_FILES['pac1_d6img1']['name'];
            $pac1_d6img2= time().$_FILES['pac1_d6img2']['name'];
            $pac1_d7img1= time().$_FILES['pac1_d7img1']['name'];
            $pac1_d7img2= time().$_FILES['pac1_d7img2']['name'];
            $pac1_d8img1= time().$_FILES['pac1_d8img1']['name'];
            $pac1_d8img2= time().$_FILES['pac1_d8img2']['name'];
            $pac1_d9img1= time().$_FILES['pac1_d9img1']['name'];
            $pac1_d9img2= time().$_FILES['pac1_d9img2']['name'];
            $pac1_d10img1= time().$_FILES['pac1_d10img1']['name'];
            $pac1_d10img2= time().$_FILES['pac1_d10img2']['name'];
            $pac1_d11img1= time().$_FILES['pac1_d11img1']['name'];
            $pac1_d11img2= time().$_FILES['pac1_d11img2']['name'];
            $pac1_d12img1= time().$_FILES['pac1_d12img1']['name'];
            $pac1_d12img2= time().$_FILES['pac1_d12img2']['name'];
            $pac1_d13img1= time().$_FILES['pac1_d13img1']['name'];
            $pac1_d13img2= time().$_FILES['pac1_d13img2']['name'];
            $pac1_d14img1= time().$_FILES['pac1_d14img1']['name'];
            $pac1_d14img2= time().$_FILES['pac1_d14img2']['name'];
            $pac1_d15img1= time().$_FILES['pac1_d15img1']['name'];
            $pac1_d15img2= time().$_FILES['pac1_d15img2']['name'];
    
            
            move_uploaded_file($_FILES['pack_img']['tmp_name'],"../images/$pack_img");
            move_uploaded_file($_FILES['pac1_bg']['tmp_name'],"../images/$pac1_bg");
            move_uploaded_file($_FILES['pac1_d1img1']['tmp_name'],"../images/$pac1_d1img1");
            move_uploaded_file($_FILES['pac1_d1img2']['tmp_name'],"../images/$pac1_d1img2");
            move_uploaded_file($_FILES['pac1_d2img1']['tmp_name'],"../images/$pac1_d2img1");
            move_uploaded_file($_FILES['pac1_d2img2']['tmp_name'],"../images/$pac1_d2img2");
            move_uploaded_file($_FILES['pac1_d3img1']['tmp_name'],"../images/$pac1_d3img1");
            move_uploaded_file($_FILES['pac1_d3img2']['tmp_name'],"../images/$pac1_d3img2");
            move_uploaded_file($_FILES['pac1_d4img1']['tmp_name'],"../images/$pac1_d4img1");
            move_uploaded_file($_FILES['pac1_d4img2']['tmp_name'],"../images/$pac1_d4img2");
            move_uploaded_file($_FILES['pac1_d5img1']['tmp_name'],"../images/$pac1_d5img1");
            move_uploaded_file($_FILES['pac1_d5img2']['tmp_name'],"../images/$pac1_d5img2");
            move_uploaded_file($_FILES['pac1_d6img1']['tmp_name'],"../images/$pac1_d6img1");
            move_uploaded_file($_FILES['pac1_d6img2']['tmp_name'],"../images/$pac1_d6img2");
            move_uploaded_file($_FILES['pac1_d7img1']['tmp_name'],"../images/$pac1_d7img1");
            move_uploaded_file($_FILES['pac1_d7img2']['tmp_name'],"../images/$pac1_d7img2");
            move_uploaded_file($_FILES['pac1_d8img1']['tmp_name'],"../images/$pac1_d8img1");
            move_uploaded_file($_FILES['pac1_d8img2']['tmp_name'],"../images/$pac1_d8img2");
            move_uploaded_file($_FILES['pac1_d9img1']['tmp_name'],"../images/$pac1_d9img1");
            move_uploaded_file($_FILES['pac1_d9img2']['tmp_name'],"../images/$pac1_d9img2");
            move_uploaded_file($_FILES['pac1_d10img1']['tmp_name'],"../images/$pac1_d10img1");
            move_uploaded_file($_FILES['pac1_d10img2']['tmp_name'],"../images/$pac1_d10img2");
            move_uploaded_file($_FILES['pac1_d11img1']['tmp_name'],"../images/$pac1_d11img1");
            move_uploaded_file($_FILES['pac1_d11img2']['tmp_name'],"../images/$pac1_d11img2");
            move_uploaded_file($_FILES['pac1_d12img1']['tmp_name'],"../images/$pac1_d12img1");
            move_uploaded_file($_FILES['pac1_d12img2']['tmp_name'],"../images/$pac1_d12img2");
            move_uploaded_file($_FILES['pac1_d13img1']['tmp_name'],"../images/$pac1_d13img1");
            move_uploaded_file($_FILES['pac1_d13img2']['tmp_name'],"../images/$pac1_d13img2");
            move_uploaded_file($_FILES['pac1_d14img1']['tmp_name'],"../images/$pac1_d14img1");
            move_uploaded_file($_FILES['pac1_d14img2']['tmp_name'],"../images/$pac1_d14img2");
            move_uploaded_file($_FILES['pac1_d15img1']['tmp_name'],"../images/$pac1_d15img1");
            move_uploaded_file($_FILES['pac1_d15img2']['tmp_name'],"../images/$pac1_d15img2");


            $query = "INSERT INTO pack_card (pack_title,pack_img,pack_rate,pack_subtitle,pack_price,pac1_title,wate_1,taul_1,pac1_dc1,pac1_dc2,pac1_dc3,pac1_dc4,pac1_dc5,pac1_dc6,pac1_dc7,pac1_dc8,pac1_dc9,pac1_dc10,pac1_dc11,pac1_dc12,pac1_dc13,pac1_dc14,pac1_dc15,pac1_price,pac1_email,pac1_phone,pac1_bg,pac1_d1img1,pac1_d1img2,pac1_d2img1,pac1_d2img2,pac1_d3img1,pac1_d3img2,pac1_d4img1,pac1_d4img2,pac1_d5img1,pac1_d5img2,pac1_d6img1,pac1_d6img2,pac1_d7img1,pac1_d7img2,pac1_d8img1,pac1_d8img2,pac1_d9img1,pac1_d9img2,pac1_d10img1,pac1_d10img2,pac1_d11img1,pac1_d11img2,pac1_d12img1,pac1_d12img2,pac1_d13img1,pac1_d13img2,pac1_d14img1,pac1_d14img2,pac1_d15img1,pac1_d15img2,day1,day2,day3,day4,day5,day6,day7,day8,day9,day10,day11,day12,day13,day14,day15) VALUES('$pack_title','$pack_img','$pack_rate','$pack_subtitle','$pack_price','$pac1_title','$wate_1','$taul_1','$pac1_dc1','$pac1_dc2','$pac1_dc3','$pac1_dc4','$pac1_dc5','$pac1_dc6','$pac1_dc7','$pac1_dc8','$pac1_dc9','$pac1_dc10','$pac1_dc11','$pac1_dc12','$pac1_dc13','$pac1_dc14','$pac1_dc15','$pac1_price','$pac1_email','$pac1_phone','$pac1_bg','$pac1_d1img1','$pac1_d1img2','$pac1_d2img1','$pac1_d2img2','$pac1_d3img1','$pac1_d3img2','$pac1_d4img1','$pac1_d4img2','$pac1_d5img1','$pac1_d5img2' ,'$pac1_d6img1','$pac1_d6img2' ,'$pac1_d7img1','$pac1_d7img2' ,'$pac1_d8img1','$pac1_d8img2' ,'$pac1_d9img1','$pac1_d9img2' ,'$pac1_d10img1','$pac1_d10img2' ,'$pac1_d11img1','$pac1_d11img2' ,'$pac1_d12img1','$pac1_d12img2' ,'$pac1_d13img1','$pac1_d13img2' ,'$pac1_d14img1','$pac1_d14img2' ,'$pac1_d15img1','$pac1_d15img2' ,'$day1','$day2','$day3','$day4','$day5','$day6','$day7','$day8','$day9','$day10','$day11','$day12','$day13','$day14','$day15') ";
                                           

         $run = mysqli_query($con,$query);
            if($run){
                echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";
           }
            
    
        }



        if(isset($_POST['blog_card'])){

            $card_date = mysqli_real_escape_string($con,$_POST['card_date']);
            $card_subt = mysqli_real_escape_string($con,$_POST['card_subt']);
            $card_desc = mysqli_real_escape_string($con,$_POST['card_desc']);
            $card_desc2 = mysqli_real_escape_string($con,$_POST['card_desc2']);
            $card_desc3 = mysqli_real_escape_string($con,$_POST['card_desc3']);
            
            $card_img= time().$_FILES['card_img']['name'];
         
            move_uploaded_file($_FILES['card_img']['tmp_name'],"../images/$card_img");
    
            
            $query = "INSERT INTO blog_card (card_date,card_img,card_subt,card_desc,card_desc2,card_desc3) VALUES('$card_date','$card_img','$card_subt','$card_desc','$card_desc2','$card_desc3') ";
    
         $run = mysqli_query($con,$query);
            if($run){
                echo "<script>window.location.href = '../Admin_Panel_Team_B/index.php?blogcontentsetting=true';</script>";
           }
            
    
        }

        if (isset($_POST['post_comment'])) {

            $name = $_POST['name'];
            $message = $_POST['message'];
            
            $sql = "INSERT INTO demo (name, message)
            VALUES ('$name', '$message')";
    
            if ($con->query($sql) === TRUE) {
              echo "";
            } else {
              echo "Error: " . $sql . "<br>" . $con->error;
            }
        }



    
?>