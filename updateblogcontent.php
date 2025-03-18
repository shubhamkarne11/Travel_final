<?php
// including the database connection file
include_once("include/db.php");

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

<html>
<head>  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <link rel="stylesheet" href="Admin_Panel_Team_B/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="Admin_Panel_Team_B/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="Admin_Panel_Team_B/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="Admin_Panel_Team_B/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="Admin_Panel_Team_B/images/favicon.png" />
  <!-- bootstrap toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <!-- google fonts link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <!-- font-awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br><br>

                

       <div class="card card-primary" style="width:1090px; padding-top:15px;">
            <div class="card-header" style="background-color:#1796DF";>
              <h3 class="card-title" style="color:white; padding-top:15px">Change Card</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form role="form" method="post" action="blogcontentprocess.php" style="padding-bottom:100px;">
                    <div class="card-body">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Update Date</label>
                  <input type="text" class="form-control"  name="card_date" value="<?php echo $card_date;?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Update Subtitle</label>
                  <input type="text" class="form-control"  name="card_subt"  value="<?php echo $card_subt;?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label><br>
                  <textarea cols="50" rows="5" name="card_desc" ><?php echo $card_desc;?></textarea>
                </div>  

                <div class="form-group">
                  <label for="exampleInputPassword1">Description 2</label><br>
                  <textarea cols="50" rows="5" name="card_desc2" ><?php echo $card_desc2;?></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Description 3</label><br>
                  <textarea cols="50" rows="5" name="card_desc3" ><?php echo $card_desc3;?></textarea>
                </div>
                    
                    </div>
                    <!-- /.card-body -->
                    <table>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                        <td><input type="submit" name="blog_card" class="btn btn-primary" value="Update"></td>
                    </tr>
                    </table>
                </form>


            

     <!-- image section starts -->

                
     <div class="card-header" style="background-color:#1796DF";>
                    <h3 class="card-title" style="color:white; padding-top:15px">Change Blog Card image</h3>
                </div>
                <img src="images/<?php echo $card_img;?>" class="col-2">
                <form role="form1" method="post" action="blogcontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Upload Image for Blog Card image</label>
                            <input type="file" class="form-control" name="card_img">
                        </div>
                    </div>

                    <!-- /.card-body -->

                    <table>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                        <td><input type="submit" name="card_img" class="btn btn-primary" value="Update"></td>
                    </tr>
                    </table>
                </form>





                






        </div> 








    
    
</body>
</html>