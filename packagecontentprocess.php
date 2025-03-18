<?php
    include_once("include/db.php");
    if(isset($_POST['update_card'])){

        $id = mysqli_real_escape_string($con,$_POST['id']);
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


        $result = mysqli_query($con, "UPDATE pack_card SET pack_title='$pack_title',pack_rate='$pack_rate',pack_subtitle='$pack_subtitle',pack_price='$pack_price',pac1_title='$pac1_title',wate_1='$wate_1',taul_1='$taul_1',pac1_dc1='$pac1_dc1',pac1_dc2='$pac1_dc2',pac1_dc3='$pac1_dc3',pac1_dc4='$pac1_dc4',pac1_dc5='$pac1_dc5',pac1_dc6='$pac1_dc6',pac1_dc7='$pac1_dc7',pac1_dc8='$pac1_dc8',pac1_dc9='$pac1_dc9',pac1_dc10='$pac1_dc10',pac1_dc11='$pac1_dc11',pac1_dc12='$pac1_dc12',pac1_dc13='$pac1_dc13',pac1_dc14='$pac1_dc14',pac1_dc15='$pac1_dc15',pac1_price='$pac1_price',pac1_email='$pac1_email',pac1_phone='$pac1_phone' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }



    //for card 1
    if(isset($_POST['pack_img'])){

        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pack_img = time().$_FILES['pack_img']['name'];

        move_uploaded_file($_FILES['pack_img']['tmp_name'],"images/$pack_img");

        $result = mysqli_query($con, "UPDATE pack_card SET pack_img='$pack_img' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }










    //for card 1
    if(isset($_POST['pac1_bg'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_bg= time().$_FILES['pac1_bg']['name'];

        move_uploaded_file($_FILES['pac1_bg']['tmp_name'],"images/$pac1_bg");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_bg='$pac1_bg' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }












    //for card 1
    if(isset($_POST['pac1_d1img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d1img1 = time().$_FILES['pac1_d1img1']['name'];

        move_uploaded_file($_FILES['pac1_d1img1']['tmp_name'],"images/$pac1_d1img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d1img1='$pac1_d1img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }













    //for card 1
    if(isset($_POST['pac1_d1img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d1img2 = time().$_FILES['pac1_d1img2']['name'];

        move_uploaded_file($_FILES['pac1_d1img2']['tmp_name'],"images/$pac1_d1img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d1img2='$pac1_d1img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }












    //for card 1
    if(isset($_POST['pac1_d2img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d2img1 = time().$_FILES['pac1_d2img1']['name'];

        move_uploaded_file($_FILES['pac1_d2img1']['tmp_name'],"images/$pac1_d2img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d2img1='$pac1_d2img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }













    //for card 1
    if(isset($_POST['pac1_d2img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d2img2 = time().$_FILES['pac1_d2img2']['name'];

        move_uploaded_file($_FILES['pac1_d2img2']['tmp_name'],"images/$pac1_d2img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d2img2='$pac1_d2img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }








    //for card 1
    if(isset($_POST['pac1_d3img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d3img1 = time().$_FILES['pac1_d3img1']['name'];

        move_uploaded_file($_FILES['pac1_d3img1']['tmp_name'],"images/$pac1_d3img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d3img1='$pac1_d3img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }











    //for card 1
    if(isset($_POST['pac1_d3img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d3img2 = time().$_FILES['pac1_d3img2']['name'];

        move_uploaded_file($_FILES['pac1_d3img2']['tmp_name'],"images/$pac1_d3img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d3img2='$pac1_d3img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }











    //for card 1
    if(isset($_POST['pac1_d4img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d4img1 = time().$_FILES['pac1_d4img1']['name'];

        move_uploaded_file($_FILES['pac1_d4img1']['tmp_name'],"images/$pac1_d4img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d4img1='$pac1_d4img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }













    //for card 1
    if(isset($_POST['pac1_d4img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d4img2 = time().$_FILES['pac1_d4img2']['name'];

        move_uploaded_file($_FILES['pac1_d4img2']['tmp_name'],"images/$pac1_d4img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d4img2='$pac1_d4img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }













    //for card 1
    if(isset($_POST['pac1_d5img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d5img1 = time().$_FILES['pac1_d5img1']['name'];

        move_uploaded_file($_FILES['pac1_d5img1']['tmp_name'],"images/$pac1_d5img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d5img1='$pac1_d5img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }












    //for card 1
    if(isset($_POST['pac1_d5img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d5img2 = time().$_FILES['pac1_d5img2']['name'];

        move_uploaded_file($_FILES['pac1_d5img2']['tmp_name'],"images/$pac1_d5img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d5img2='$pac1_d5img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d6img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d6img1 = time().$_FILES['pac1_d6img1']['name'];

        move_uploaded_file($_FILES['pac1_d6img1']['tmp_name'],"images/$pac1_d6img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d6img1='$pac1_d6img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d6img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d6img2 = time().$_FILES['pac1_d6img2']['name'];

        move_uploaded_file($_FILES['pac1_d6img2']['tmp_name'],"images/$pac1_d6img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d6img2='$pac1_d6img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d7img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d7img1 = time().$_FILES['pac1_d7img1']['name'];

        move_uploaded_file($_FILES['pac1_d7img1']['tmp_name'],"images/$pac1_d7img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d7img1='$pac1_d7img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d7img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d7img2 = time().$_FILES['pac1_d7img2']['name'];

        move_uploaded_file($_FILES['pac1_d7img2']['tmp_name'],"images/$pac1_d7img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d7img2='$pac1_d7img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d8img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d8img1 = time().$_FILES['pac1_d8img1']['name'];

        move_uploaded_file($_FILES['pac1_d8img1']['tmp_name'],"images/$pac1_d8img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d8img1='$pac1_d8img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }


    if(isset($_POST['pac1_d8img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d8img2 = time().$_FILES['pac1_d8img2']['name'];

        move_uploaded_file($_FILES['pac1_d8img2']['tmp_name'],"images/$pac1_d8img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d8img2='$pac1_d8img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d9img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d9img1 = time().$_FILES['pac1_d9img1']['name'];

        move_uploaded_file($_FILES['pac1_d9img1']['tmp_name'],"images/$pac1_d9img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d9img1='$pac1_d9img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d9img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d9img2 = time().$_FILES['pac1_d9img2']['name'];

        move_uploaded_file($_FILES['pac1_d9img2']['tmp_name'],"images/$pac1_d9img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d9img2='$pac1_d9img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d10img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d10img1 = time().$_FILES['pac1_d10img1']['name'];

        move_uploaded_file($_FILES['pac1_d10img1']['tmp_name'],"images/$pac1_d10img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d10img1='$pac1_d10img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d10img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d10img2 = time().$_FILES['pac1_d10img2']['name'];

        move_uploaded_file($_FILES['pac1_d10img2']['tmp_name'],"images/$pac1_d10img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d10img2='$pac1_d10img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d11img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d11img1 = time().$_FILES['pac1_d11img1']['name'];

        move_uploaded_file($_FILES['pac1_d11img1']['tmp_name'],"images/$pac1_d11img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d11img1='$pac1_d11img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d11img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d11img2 = time().$_FILES['pac1_d11img2']['name'];

        move_uploaded_file($_FILES['pac1_d11img2']['tmp_name'],"images/$pac1_d11img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d11img2='$pac1_d11img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d12img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d12img1 = time().$_FILES['pac1_d12img1']['name'];

        move_uploaded_file($_FILES['pac1_d12img1']['tmp_name'],"images/$pac1_d12img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d12img1='$pac1_d12img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d12img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d12img2 = time().$_FILES['pac1_d12img2']['name'];

        move_uploaded_file($_FILES['pac1_d12img2']['tmp_name'],"images/$pac1_d12img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d12img2='$pac1_d12img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d13img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d13img1 = time().$_FILES['pac1_d13img1']['name'];

        move_uploaded_file($_FILES['pac1_d13img1']['tmp_name'],"images/$pac1_d13img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d13img1='$pac1_d13img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d13img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d13img2 = time().$_FILES['pac1_d13img2']['name'];

        move_uploaded_file($_FILES['pac1_d13img2']['tmp_name'],"images/$pac1_d13img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d13img2='$pac1_d13img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d14img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d14img1 = time().$_FILES['pac1_d14img1']['name'];

        move_uploaded_file($_FILES['pac1_d14img1']['tmp_name'],"images/$pac1_d14img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d14img1='$pac1_d14img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d14img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d14img2 = time().$_FILES['pac1_d14img2']['name'];

        move_uploaded_file($_FILES['pac1_d14img2']['tmp_name'],"images/$pac1_d14img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d14img2='$pac1_d14img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d15img1'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d15img1 = time().$_FILES['pac1_d15img1']['name'];

        move_uploaded_file($_FILES['pac1_d15img1']['tmp_name'],"images/$pac1_d15img1");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d15img1='$pac1_d15img1' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

    if(isset($_POST['pac1_d15img2'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $pac1_d15img2 = time().$_FILES['pac1_d15img2']['name'];

        move_uploaded_file($_FILES['pac1_d15img2']['tmp_name'],"images/$pac1_d15img2");

        $result = mysqli_query($con, "UPDATE pack_card SET pac1_d15img2='$pac1_d15img2' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }






    if(isset($_POST['update_days'])){

        $id = mysqli_real_escape_string($con,$_POST['id']);
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

        $result = mysqli_query($con, "UPDATE pack_card SET day1='$day1',day2='$day2',day3='$day3',day4='$day4',day5='$day5',day6='$day6',day7='$day7',day8='$day8',day9='$day9',day10='$day10',day11='$day11',day12='$day12',day13='$day13',day14='$day14',day15='$day15' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagecontentsetting=true';</script>";

        

    }

?>