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
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br><br>
	
	<form name="form1" method="post" action="packageprocess.php" enctype="multipart/form-data">
		<table border="0">
			<tr>
				<td>package title</td>
				<td><input type="text" name="pack_title" value="<?php echo $pack_title;?>"></td>
			</tr>
            <tr>
				<td>package rate</td>
				<td><input type="text" name="pack_rate" value="<?php echo $pack_rate;?>"></td>
			</tr>
            <tr>
				<td>package subtitle</td>
				<td><input type="text" name="pack_subtitle" value="<?php echo $pack_subtitle;?>"></td>
			</tr>
            <tr>
				<td>package price</td>
				<td><input type="text" name="pack_price" value="<?php echo $pack_price;?>"></td>
			</tr>
			<tr>
				<td>package image</td>
				<td><img src="images/<?php echo $pack_img;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pack_img"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update_add" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>