<?php

// CONNECT PHP FILE TO DATABASE
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');



 // DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: neflogin.php");
}





// SIGN IN FORM

if (isset($_POST['register'])) {
	$clanleader = $_POST['clanleader'];
	$name = $_POST['name'];
	$clan_name = $_POST['clan_name'];
	$active_members = $_POST['active_members'];
	$ace_players = $_POST['ace_players'];
	$email = $_POST['email'];
	$phone_num = $_POST['phone_num'];
	$rules = $_POST['rules'];
	$profile = $_POST['profile'];
	$requirements = $_POST['requirements'];

	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "clanlogo/".$image;

	// INSERT DATA INTO DATABASE TABLE

	$php = "INSERT INTO `clanreg` (`clanleader`,`name`,`clan_name`,`active_members`,`ace_players`,`email`,`phone_num`,`rules`,`profile`,`requirements`,`image`)VALUES('$clanleader','$name','$clan_name','$active_members','$ace_players','$email','$phone_num','$rules','$profile','$requirements','$image')";
	$query=mysqli_query($connect,$php);
	// $count= mysqli_num_rows($query);
	if ($query){
		echo "<script>alert('Registration successful')</script>";
	}
	else{
		echo "<script>alert('Registration failed')</script>";
	}	 

};


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>clan reg form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<style type="text/css">
		
		
	
	body{
		background-color: black;
		margin: 20px;
		background-image: url(img/dice.jpg);
	}
	form{
		background-color:black ;
		padding: 2vw;
		border-radius: 20px;
		border: 2px solid gold;
	}
	form input{
		background-color: black;
		color: white;
		border: 1px solid darkgoldenrod;
	}
	.st{
		font-size: 20px;
		color: white;
		font-family: cursive;
		font-weight: bolder;
	}
	.mt{
		color: black;
		background-color: darkgoldenrod;
		font-family: cursive;
		font-weight: bolder;
	}
	.header{
		color: gold;
		background-color: black;
		padding: none;
		border-radius: 0px;

	}
	.note{
		color: white;
		background-color: darkgoldenrod;
		border-radius: 20px;
		padding: 1vw;
	}
	.warning{
		color: red;
	}
	.return{
		background-color: red;
		color: white;
		padding: 0.5vw;
		border-radius: 10px;
	}
	label{
		color: gold;
		font-weight: bolder;
		font-family: cursive;
	}


	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row form" style="margin-top:vw;">
		<div class="col-md-4">
			<center style="color: white;" class="note">
				<p class="note" style="color: white;">
					<h5>HOW TO?</h5>
				Make sure to fill the form correctly, and provide all the details 
				specified. create your clan logo, make sure it has a black background and
				has a different color from the other clans, in order to make your clan stand out.
				
				</p>
			<a href="pubgm.php"><button class="return">RETURN</button></a>

			</center>
		</div>
		<div class="col-md-4">

			<br><br><form id="form" method="post" action="regform.php" enctype="multipart/form-data">
				<center><h2 class="header">CLAN REGISTRATION</h2></center>
				<center><p class="warning">NOTE: the NEF is not responsible for any mistake incured due to the customer's wrong
				data,endeavour to FILL THE FORM WITH CARE</p></center>
				<title>NAME</title>
				
				<div class="form-group">
					<input type="text" name="clanleader" class="form-control" placeholder="are you a clan leader?">
				</div><div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="full name">
				</div><div class="form-group">
					<input type="text" name="clan_name" class="form-control" placeholder="clan name">
				</div><div class="form-group">
					<input type="text" name="active_members" class="form-control" placeholder="number of active members">
				</div><div class="form-group">
					<input type="text" name="ace_players" class="form-control" placeholder="no. of ace players and above">
				</div>
				<!-- <div class="form-group">
					<input type="text" name="address" class="form-control" placeholder="">
				</div> -->

				
				<center><h3 class="mt">HOW DO WE CONTACT YOU?</h3></center>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="email">
				</div>
				<div class="form-group">
					<input type="text" name="phone_num" class="form-control" placeholder="phone number">
				</div><br>
				<center><h3 class="mt">CLAN DETAILS</h3></center>

				<center><h6 class="st" >clan rules</h6></center>
				<textarea style="width: 100%;" name="rules"></textarea><br>


				<center><h6 class="st" >clan profile (achievements and popularity)</h6></center>
				<textarea style="width: 100%;" name="profile"></textarea><br>



				<center><h6 class="st" >clan requirements</h6></center>
				<textarea style="width: 100%;" name="requirements"></textarea><br>

					<div class="form-group">
					<label>clan logo</label>
					<input type="file" name="image" class="form-control" placeholder="clan logo">
				</div><br>
				<button class="btn btn-success btn-block" type="submit" name="register">REGISTER</button><br>

				<p><u><i><h6 style="color: gold;">your clan logo must have black background and have a differnt color from other clans!!!</h6></i></u></p>




			</form>

		</div>
		<div class="col-md-4">
		</div>

	</div>
</div>	

</body>
</html>

