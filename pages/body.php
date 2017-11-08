<!DOCTYPE html>
<html>
<head>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="container">
		<?php
		require '../index1.php';
		?>
		<div class="row" style="position: relative;z-index: -100;">
			<div class="col-lg-11 col-md-11 bodies">
				<table>
			<tr>
				<td><label>Search By Name: </label></td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td><label>Category: </label></td>
				<td><select name="Category">
					<option>-----</option>
					<option>Classical</option>
					<option>Pop</option>
					<option>Jazz</option>
				</select></td>
			</tr>
			<tr>
				<td><label>Release Date: </label></td>
				<td><input type="date" name=""></td>
			</tr>
			<tr>
				<td><label>Languages: </label></td>
				<td><select name="Languages">
					<option>-----</option>
					<option>English</option>
					<option>Hindi</option>
					<option>Bengali</option>
					<option>Punjabi</option>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" name="Search" value="Search" style="font-family: Comic Sans MS;" class="search1"></td>
			</tr>
			</table>
			</div>
		</div><hr>

		<div class="row" style="position: relative;z-index: -100;">
			<div class="col-lg-8 col-md-8">
				<div class="marquee" id="mycrawler2">
					<a href="#"><img src="../Assets/images/img1.jpg" height="300"></a>
					<a href="#"><img src="../Assets/images/img2.jpg" height="300"></a>
					<a href="#"><img src="../Assets/images/img3.jpg" height="300"></a>
					<a href="#"><img src="../Assets/images/img4.jpg" height="300"></a>
					<a href="#"><img src="../Assets/images/img5.jpg" height="300"></a>
					<a href="#"><img src="../Assets/images/img6.jpg" height="300"></a>
				</div>
				<script type="text/javascript">
				marqueeInit({
					uniqueid: 'mycrawler2',
					style: {
						'padding': '2px',
						'width': '100%',
						'height': '300px',
						'border':'solid 1px black',
						'border-right':'solid 20px black',
						'border-left':'solid 20px black',
						'border-radius':'20px'
					},
					inc: 5, //speed - pixel increment for each iteration of this marquee's movement
					mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
					moveatleast: 2,
					neutral: 150,
					savedirection: true,
					random: true
				});
				</script>
			</div>
			
			<div class="col-lg-4 col-md-4">
				<div class="login">
					<h4>Want to save songs in your device as well?</h4>
					<h5>Hurry and SignUp here to be able to download songs for <strong>free</strong></h5><hr>
					<form>
						<h5>Already Registered? <br>Then<strong> Log In</strong> here : </h5>
						<input type="text" name="" placeholder="Enter Username Here"><br>
						<input type="Password" name="" placeholder="Enter Password Here" style="margin-top: 5px;"><br>	
						<input type="submit" name="" value="Sign In" style="margin-top: 5px;">	
					</form>
				</div>
			</div>
		</div>
		<hr>
	</div>
	

</body>
</html>

