<form name="form1" method="post" action="packagecontentprocess.php" enctype="multipart/form-data">
		
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
				<td><input type="submit" name="package_img" value="Update"></td>
			</tr>






			<tr>
				<td>package content title</td>
				<td><input type="text" name="pac1_title" value="<?php echo $pac1_title;?>"></td>
			</tr>

            <tr>
				<td>package background image</td>
				<td><img src="images/<?php echo $pac1_bg;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_bg"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update_card" value="Update"></td>
			</tr>
			<tr>
				<td>package Day 1 image 1</td>
				<td><img src="images/<?php echo $pac1_d1img1;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_d1img1"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update_card" value="Update"></td>
			</tr>
			<tr>
				<td>package Day 1 image 2</td>
				<td><img src="images/<?php echo $pac1_d1img2;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_d1img2"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update_card" value="Update"></td>
			</tr>
			<tr>
				<td>package Day 1 content</td>
				<td><textarea cols="50" rows="5" input type="text" name="pac1_dc1"><?php echo $pac1_dc1;?></textarea></td>
			</tr>
			<tr>
				<td>package Day 2 image 1</td>
				<td><img src="images/<?php echo $pac1_d2img1;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_d2img1"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update_card" value="Update"></td>
			</tr>
			<tr>
				<td>package Day 2 image 2</td>
				<td><img src="images/<?php echo $pac1_d2img2;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_d2img2"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update_card" value="Update"></td>
			</tr>
			<tr>
				<td>package Day 2 content</td>
				<td><textarea cols="50" rows="5" input type="text" name="pac1_dc2"><?php echo $pac1_dc2;?></textarea></td>
			</tr>
			<tr>
				<td>package Day 3 image 1</td>
				<td><img src="images/<?php echo $pac1_d3img1;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_d3img1"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update_card" value="Update"></td>
			</tr>
			<tr>
				<td>package Day 3 image 2</td>
				<td><img src="images/<?php echo $pac1_d3img2;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_d3img2"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update_card" value="Update"></td>
			</tr>
			<tr>
				<td>package Day 3 content</td>
				<td><textarea cols="50" rows="5" input type="text" name="pac1_dc3"><?php echo $pac1_dc3;?></textarea></td>
			</tr>



			<tr>
				<td>package Day 4 image 1</td>
				<td><img src="images/<?php echo $pac1_d4img1;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_d4img1"></td>
			</tr>
			<tr>
				<td>package Day 4 image 2</td>
				<td><img src="images/<?php echo $pac1_d4img2;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_d4img2"></td>
			</tr>
			<tr>
				<td>package Day 4 content</td>
				<td><textarea cols="50" rows="5" input type="text" name="pac1_dc4"><?php echo $pac1_dc4;?></textarea></td>
			</tr>




			<tr>
				<td>package Day 5 image 1</td>
				<td><img src="images/<?php echo $pac1_d5img1;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_d5img1"></td>
			</tr>
			<tr>
				<td>package Day 5 image 2</td>
				<td><img src="images/<?php echo $pac1_d5img2;?>" style="width:150px"/></td>
				<td><input type="file" class="form-control" name="pac1_d5img2"></td>
			</tr>
			<tr>
				<td>package Day 5 content</td>
				<td><textarea cols="50" rows="5" input type="text" name="pac1_dc5"><?php echo $pac1_dc5;?></textarea></td>
			</tr>



			
            <tr>
				<td>package price</td>
				<td><input type="text" name="pac1_price" value="<?php echo $pac1_price;?>"></td>
			</tr>
            <tr>
				<td>package email</td>
				<td><input type="text" name="pac1_email" value="<?php echo $pac1_email;?>"></td>
			</tr>
            <tr>
				<td>package phone</td>
				<td><input type="text" name="pac1_phone" value="<?php echo $pac1_phone;?>"></td>
			</tr>
			<tr>
				<td>What to expect</td>
				<td><input type="text" name="wate_1" value="<?php echo $wate_1;?>"></td>
			</tr>
			<tr>
				<td>Things you will love</td>
				<td><input type="text" name="taul_1" value="<?php echo $taul_1;?>"></td>
			</tr>
		<table>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update_card" value="Update"></td>
			</tr>
		</table>
	</form>