<?php
    include_once("include/db.php");
    if(isset($_POST['blog_card'])){

        $id = mysqli_real_escape_string($con,$_POST['id']);
        $card_date = mysqli_real_escape_string($con,$_POST['card_date']);
        $card_subt = mysqli_real_escape_string($con,$_POST['card_subt']);
        $card_desc = mysqli_real_escape_string($con,$_POST['card_desc']);
        $card_desc2 = mysqli_real_escape_string($con,$_POST['card_desc2']);
        $card_desc3 = mysqli_real_escape_string($con,$_POST['card_desc3']);

        $result = mysqli_query($con, "UPDATE blog_card SET card_date='$card_date',card_subt='$card_subt',card_desc='$card_desc',card_desc2='$card_desc2',card_desc3='$card_desc3' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?blogcontentsetting=true';</script>";

        

    }










    //for card 1
    if(isset($_POST['card_img'])){
        $id = mysqli_real_escape_string($con,$_POST['id']);
        $card_img= time().$_FILES['card_img']['name'];

        move_uploaded_file($_FILES['card_img']['tmp_name'],"images/$card_img");

        $result = mysqli_query($con, "UPDATE blog_card SET card_img='$card_img' WHERE id=$id");
        // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
        echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?blogcontentsetting=true';</script>";

        

    }





?>
