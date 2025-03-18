<?php
include_once("include/db.php");
if(isset($_POST['update_add'])){

    $id = mysqli_real_escape_string($con,$_POST['id']);
    $pack_title = mysqli_real_escape_string($con,$_POST['pack_title']);
    $pack_rate = mysqli_real_escape_string($con,$_POST['pack_rate']);
    $pack_subtitle = mysqli_real_escape_string($con,$_POST['pack_subtitle']);
    $pack_price = mysqli_real_escape_string($con,$_POST['pack_price']);
    $pack_img = time().$_FILES['pack_img']['name'];
    move_uploaded_file($_FILES['pack_img']['tmp_name'],"images/$pack_img");
    $result = mysqli_query($con, "UPDATE pack_card SET pack_title='$pack_title',pack_rate='$pack_rate',pack_subtitle='$pack_subtitle',pack_price='$pack_price',pack_img='$pack_img' WHERE id=$id");
    // echo "<script>window.location.href = 'Admin_Panel_Team_B/index.php?packagesetting=true';</script>";
    header("Location: Admin_Panel_Team_B/index.php");

    

}
?>