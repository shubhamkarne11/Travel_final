<?php
require('include/db.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "DELETE FROM blog_card WHERE id=$id";
    $run=mysqli_query($con,$query);
    if($run){
        echo "<script>window.location.href='Admin_Panel_Team_B/index.php?blogcontentsetting=true';</script>";                       
      
          }
}
?>