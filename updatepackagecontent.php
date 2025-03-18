<?php
// including the database connection file
include_once("include/db.php");

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM pack_card WHERE id=$id");

while($res = mysqli_fetch_array($result))
{

	$pack_title = $res['pack_title'];
	$pack_rate = $res['pack_rate'];
	$pack_subtitle = $res['pack_subtitle'];
    $pack_price = $res['pack_price'];
	$pack_img = $res['pack_img'];
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
	$day1 = $res['day1'];
    $day2 = $res['day2'];
    $day3 = $res['day3'];
    $day4 = $res['day4'];
    $day5 =  $res['day5'];
	$day6 = $res['day6'];
    $day7 = $res['day7'];
    $day8 = $res['day8'];
    $day9 = $res['day9'];
    $day10 =  $res['day10'];
	$day11 =  $res['day11'];
	$day12 = $res['day12'];
    $day13 = $res['day13'];
    $day14 = $res['day14'];
    $day15 = $res['day15'];
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




	
        <div class="card card-primary col-lg-12" style="width:1100px;">
              <div class="card-header" style="background-color:#1796DF;">
                <h3 class="card-title" style="color:white; padding-top:15px">Package Card Content Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
				<form role="form" method="post" action="packagecontentprocess.php" style="padding-bottom:100px;">
					<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">package title</label>
						<input type="text" class="form-control" name="pack_title" id="exampleInputEmail1" value="<?php echo $pack_title;?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package rate</label>
						<input type="text" class="form-control" name="pack_rate" id="exampleInputEmail1" value="<?php echo $pack_rate;?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package subtitle</label>
						<input type="text" class="form-control" name="pack_subtitle" id="exampleInputEmail1" value="<?php echo $pack_subtitle;?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package price</label>
						<input type="text" class="form-control" name="pack_price" id="exampleInputEmail1" value="<?php echo $pack_price;?>">
					</div>




					<!--section 2 for package content-->
					<div class="form-group">
						<label for="exampleInputEmail1">package content title</label>
						<input type="text" class="form-control" name="pac1_title" id="exampleInputEmail1" value="<?php echo $pac1_title;?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 1 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc1"><?php echo $pac1_dc1;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 2 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc2"><?php echo $pac1_dc2;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 3 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc3"><?php echo $pac1_dc3;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 4 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc4"><?php echo $pac1_dc4;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 5 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc5"><?php echo $pac1_dc5;?></textarea>
					</div>
						
					<!-- day 6 to day 10 -->
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 6 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc6"><?php echo $pac1_dc6;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 7 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc7"><?php echo $pac1_dc7;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 8 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc8"><?php echo $pac1_dc8;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 9 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc9"><?php echo $pac1_dc9;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 10 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc10"><?php echo $pac1_dc10;?></textarea>
					</div>

					<!-- day 10 to day 15 -->
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 11 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc11"><?php echo $pac1_dc11;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 12 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc12"><?php echo $pac1_dc12;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 13 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc13"><?php echo $pac1_dc13;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 14 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc14"><?php echo $pac1_dc14;?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package Day 15 content</label><br>
						<textarea cols="50" rows="5" input type="text" name="pac1_dc15"><?php echo $pac1_dc15;?></textarea>
					</div>


					<div class="form-group">
						<label for="exampleInputEmail1">package price</label>
						<input type="text" class="form-control" name="pac1_price" id="exampleInputEmail1" value="<?php echo $pac1_price;?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package email</label>
						<input type="text" class="form-control" name="pac1_email" id="exampleInputEmail1" value="<?php echo $pac1_email;?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">package phone</label>
						<input type="text" class="form-control" name="pac1_phone" id="exampleInputEmail1" value="<?php echo $pac1_phone;?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">What to expect</label>
						<input type="text" class="form-control" name="wate_1" id="exampleInputEmail1" value="<?php echo $wate_1;?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Things you will love</label>
						<input type="text" class="form-control" name="taul_1" id="exampleInputEmail1" value="<?php echo $taul_1;?>">
					</div>
					
					</div>
					<!-- /.card-body -->
					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="update_card" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>


				

   <!-- image section starts -->

				
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">Change package image</h3>
				</div>
				<img src="images/<?php echo $pack_img;?>" class="col-2">
				<form role="form1" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package image</label>
							<input type="file" class="form-control" name="pack_img">
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pack_img" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>







				<!-- for the 2-->


                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">Change package content background image</h3>
				</div>
				<img src="images/<?php echo $pac1_bg;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package background image</label>
							<input type="file" class="form-control" name="pac1_bg">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_bg" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>














				<!-- for the 2-->
                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 1 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d1img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 1 image 1</label>
							<input type="file" class="form-control" name="pac1_d1img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d1img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>




				<!-- for the 2-->
                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 1 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d1img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 1 image 2</label>
							<input type="file" class="form-control" name="pac1_d1img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d1img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>



				<!-- for the 2-->
                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 2 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d2img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 2 image 1</label>
							<input type="file" class="form-control" name="pac1_d2img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d2img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>



				<!-- for the 2-->
                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 2 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d2img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 2 image 2</label>
							<input type="file" class="form-control" name="pac1_d2img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d2img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>




				<!-- for the 2-->
                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 3 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d3img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 3 image 1</label>
							<input type="file" class="form-control" name="pac1_d3img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d3img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>



				<!-- for the 2-->
                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 3 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d3img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 3 image 2</label>
							<input type="file" class="form-control" name="pac1_d3img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d3img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>



				<!-- for the 2-->
                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 4 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d4img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 4 image 1</label>
							<input type="file" class="form-control" name="pac1_d4img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d4img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>



				<!-- for the 2-->
                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 4 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d4img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 4 image 2</label>
							<input type="file" class="form-control" name="pac1_d4img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d4img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>




				<!-- for the 2-->
                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 5 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d5img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 5 image 1</label>
							<input type="file" class="form-control" name="pac1_d5img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d5img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>




				<!-- for the 2-->
                <div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 5 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d5img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 5 image 2</label>
							<input type="file" class="form-control" name="pac1_d5img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d5img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 6 1 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 6 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d6img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 6 image 1</label>
							<input type="file" class="form-control" name="pac1_d6img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d6img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 6 2 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 6 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d6img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 6 image 2</label>
							<input type="file" class="form-control" name="pac1_d6img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d6img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 7 1 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 7 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d7img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 7 image 1</label>
							<input type="file" class="form-control" name="pac1_d7img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d7img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 7 2 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 7 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d7img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 7 image 2</label>
							<input type="file" class="form-control" name="pac1_d7img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d7img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 8 1 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 8 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d8img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 8 image 1</label>
							<input type="file" class="form-control" name="pac1_d8img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d8img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>


				<!-- day 8 2 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 8 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d8img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 8 image 2</label>
							<input type="file" class="form-control" name="pac1_d8img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d8img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 9 1 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 9 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d9img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 9 image 1</label>
							<input type="file" class="form-control" name="pac1_d9img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d9img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 9 2 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 9 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d9img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 9 image 2</label>
							<input type="file" class="form-control" name="pac1_d9img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d9img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 10 1 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 10 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d10img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 10 image 1</label>
							<input type="file" class="form-control" name="pac1_d10img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d10img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 10 2 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 10 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d10img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 10 image 2</label>
							<input type="file" class="form-control" name="pac1_d10img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d10img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 11 1 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 11 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d11img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 11 image 1</label>
							<input type="file" class="form-control" name="pac1_d11img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d11img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 11 2 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 11 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d11img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 11 image 2</label>
							<input type="file" class="form-control" name="pac1_d11img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d11img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 12 1 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 12 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d12img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 12 image 1</label>
							<input type="file" class="form-control" name="pac1_d12img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d12img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 12 2 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 12 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d12img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 12 image 2</label>
							<input type="file" class="form-control" name="pac1_d12img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d12img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 13 1 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 13 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d13img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 13 image 1</label>
							<input type="file" class="form-control" name="pac1_d13img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d13img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 13 2 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 13 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d13img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 13 image 2</label>
							<input type="file" class="form-control" name="pac1_d13img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d13img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 14 1 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 14 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d14img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 14 image 1</label>
							<input type="file" class="form-control" name="pac1_d14img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d14img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 14 2 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 14 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d14img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 14 image 2</label>
							<input type="file" class="form-control" name="pac1_d14img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d14img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 15 1 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 15 image 1</h3>
				</div>
				<img src="images/<?php echo $pac1_d15img1;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 15 image 1</label>
							<input type="file" class="form-control" name="pac1_d15img1">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d15img1" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>

				<!-- day 15 2 -->
				<div class="card-header" style="background-color:#1796DF";>
					<h3 class="card-title" style="color:white; padding-top:15px">package Day 15 image 2</h3>
				</div>
				<img src="images/<?php echo $pac1_d15img2;?>" class="col-2">
				<form role="form" method="post" action="packagecontentprocess.php" enctype="multipart/form-data" style="padding-bottom:100px;">
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Upload Image for package Day 15 image 2</label>
							<input type="file" class="form-control" name="pac1_d15img2">	
						</div>
					</div>

					<!-- /.card-body -->

					<table>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="pac1_d15img2" class="btn btn-primary" value="Update"></td>
					</tr>
		            </table>
				</form>





















				<div class="card-header" style="background-color:#1796DF;">
            <h3 class="card-title" style="color:white; padding-top:15px">Package Card Content Days</h3>
          </div>
          <form role="form" method="post" action="packagecontentprocess.php" style="padding-bottom:100px;">

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day1"  class="custom-control-input" id="customSwitch1"
                          <?php
                            if($day1){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch1">Day 1</label>
                          </div>


                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day2"  class="custom-control-input" id="customSwitch2"
                          <?php
                            if($day2){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch2">Day 2</label>
                          </div>

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day3"  class="custom-control-input" id="customSwitch3"
                          <?php
                            if($day3){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch3">Day 3</label>
                          </div>

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day4"  class="custom-control-input" id="customSwitch4"
                          <?php
                            if($day4){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch4">Day 4</label>
                          </div>

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day5"  class="custom-control-input" id="customSwitch5"
                          <?php
                            if($day5){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch5">Day 5</label>
                          </div>

					<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day6"  class="custom-control-input" id="customSwitch6"
                          <?php
                            if($day6){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch6">Day 6</label>
                          </div>

					<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day7"  class="custom-control-input" id="customSwitch7"
                          <?php
                            if($day7){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch7">Day 7</label>
                          </div>

					<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day8"  class="custom-control-input" id="customSwitch8"
                          <?php
                            if($day8){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch8">Day 8</label>
                          </div>

					<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day9"  class="custom-control-input" id="customSwitch9"
                          <?php
                            if($day9){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch9">Day 9</label>
                          </div>

					<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day10"  class="custom-control-input" id="customSwitch10"
                          <?php
                            if($day10){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch10">Day 10</label>
                          </div>

					<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day11"  class="custom-control-input" id="customSwitch11"
                          <?php
                            if($day11){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch11">Day 11</label>
                          </div>

					<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day12"  class="custom-control-input" id="customSwitch12"
                          <?php
                            if($day12){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch12">Day 12</label>
                          </div>

					<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day13"  class="custom-control-input" id="customSwitch13"
                          <?php
                            if($day13){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch13">Day 13</label>
                          </div>

					<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day14"  class="custom-control-input" id="customSwitch14"
                          <?php
                            if($day14){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch14">Day 14</label>
                          </div>

					<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" name="day15"  class="custom-control-input" id="customSwitch15"
                          <?php
                            if($day15){
                              echo "checked";
                            }
                          ?>
                          >
                          <label class="custom-control-label" for="customSwitch15">Day 15</label>
                          </div>



                          <!-- /.card-body -->
                          <table>
                          <tr>
                            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                            <td><input type="submit" name="update_days" class="btn btn-primary" value="Update"></td>
                          </tr>
                          </table>
          </form>




		  














				






        </div> 








	
	
</body>
</html>