<?php

// CONNECT PHP FILE TO DATABASE
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

// Testing database conection





// SIGN IN FORM

if (isset($_POST['register'])) {
	$game= $_POST['game'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$state=$_POST['state'];
	$informant=$_POST['informant'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	// $fbgroup=$_POST['fbgroup'];
	$bank_transfer=$_POST['bank_transfer'];
	$facebook=$_POST['facebook'];
	$whatsapp=$_POST['whatsapp'];
	$email=$_POST['email'];
	$phone_number=$_POST['phone_number'];
	$qualified=$_POST['qualified'];
	$loyalty=$_POST['loyalty'];
	

	// INSERT DATA INTO DATABASE TABLE

	$php= "INSERT INTO `nefregister` (`game`,`firstname`,`lastname`,`state`,`informant`,`username`,`password`,`bank_transfer`,`facebook`,`whatsapp`,`email`,`phone_number`,`qualified`,`loyalty`)VALUES('$game','$firstname','$lastname','$state','$informant','$username','$password','$bank_transfer','$facebook','$whatsapp','$email','$phone_number','$qualified','$loyalty')";
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
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	
	<meta charset="utf-8">
	<title>NEF REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">

	<style type="text/css">
	body{
		padding: none;
		margin: 0px;
		/*background-image:url(img/pubgl.jpg) ;*/
		background-size: cover;
		background-color: black;
		color: white;
	}
		
	.fn{
		padding: 0.4vw;
		color: black;
		background-color: white;
		border: 0.2vw solid purple;
		padding: 1.3vw;
		border-radius: 10px;
		font-weight: bold;
		/*opacity: 70%;*/
		outline: none;

	}
	.fn input{
		color: black;
		font-family: cursive;
		outline: none;
	}

	h4{
		font-size: 3vw;
		text-align: center;
		font-weight: bold;
		font-family: cursive;
		text-shadow: 1px 3px black;
	}
	.cont{
		background-image: url(img/scorpion2.jpg);
	}
	span{
		font-family: cursive;
		font-weight: bold;
		text-shadow: 0.1vw 0.3vw black;
	}


	</style>
</head>
<body>

	<div class="container-fluid" >
		<div class="row">
			<div class="col-sm-3">
				<div>
					<a href="neflogin.php">
						<button class="btn btn-danger"><i>login</i></button>
					</a>
				</div>
			</div>
			<div class="col-sm-6" class="cont">
				<img src="img/c10.jpg" style="position: absolute;width: 100%;height: 100%;">
				

				<form class="form-group" style="position: relative;" method="post">
					<h1 style="text-align: center;color: white;font-family:cursive;margin-top: 2vw;text-shadow: 0px 4px purple ;font-weight: bolder;font-size: 4.5vw;">REGISTER NOW, EARN NOW..</h1><br>
					

					

					<h4>PERSONAL DETAILS</h4>

					<div class="form-group" style="">
						<span style="color: white;font-family: cursive;font-size: 1.5vw;">WHICH GAME DO YOU PLAY PLAY?</span><br>
					<select  class="form-control" style="padding: 2px;border-radius: 20px;border: 0.3vw solid purple;" name="game" required>
						<option >PUBG MOBILE</option>
						<option>PUBG MOBILE LITE</option>
						<option>MORTAL KOMBAT</option>
						<option>CALL OF DUTY </option>
						<option>FREE FIRE</option>
						<option>ASPHALT</option>
						<option>FIFA</option>
						<option>PUBG NEW STATE</option>

						
					</select><br>

					<div class="form-group">
						<input type="text" name="firstname" placeholder="first name" class="form-control fn" requied>
						
					</div> 
					<div class="form-group">
						<input type="text" name="lastname" placeholder="last name" class="form-control fn">
						
					</div>

					<div class="form-group">
						<input type="text" name="state" placeholder="Gamer BIO (make it cool)" class="form-control fn" requied>
						
					</div>

					<div class="form-group">
						<input type="text" name="informant" placeholder="How did you get to know us" class="form-control fn" requied>
						
					</div>
					<div class="form-group">
						<input type="text" name="username" placeholder="create username" class="form-control fn">
						
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="create password" class="form-control fn">
						
					</div>
					<div class="form-group" style="">
						<span style="color: white;font-family: cursive;font-size: 1.5vw;">WHICH OF THESE GROUPS DO YOU BELONG?</span><br>
					<!-- <select  class="form-control" style="padding: 2px;border-radius: 20px;border: 0.3vw solid purple;" name="fbgroup">
						<option >Pubg Nigeria</option>
						<option>CODM Nigeria</option>
						<option>Gamers lounge</option>
						<option>FF Nigeria</option>
						<option>Nigerian Gamers</option>
						<option>other</option>
					</select><br><br><br>
 -->
					

					<div class="form-group">
						<input type="text" name="bank_transfer" placeholder="can you make bank transfers?" class="form-control fn" required>
						
					</div> <br>


					<h4>HOW DO WE GET BACK TO YOU</h4>

					<span>Facebook?</span><br>
					<div class="form-group">
						<input type="text" name="facebook" placeholder="Facebook Username" class="form-control fn">
						
					</div> 

					<span>Whatsapp?</span><br>
					<div class="form-group">
						<input type="text" name="whatsapp" placeholder="whatsapp number" class="form-control fn">
						
					</div> 

					<span>E-mail?</span><br>
					<div class="form-group">
						<input type="email" name="email" placeholder="enter email" class="form-control fn">
						
					</div> 

					<span>Phone number?</span><br>
					<div class="form-group">
						<input type="text" name="phone_number" placeholder="enter phone number" class="form-control fn" required>
						
					</div> 

					<h6><i style="color: red;font-size: 13px;">Ensure your details are correct before submiting!!<br>
		                   and welcome,to the NEF, make sure u earn...</i></h6>

					<div class="form-group">
						
						<input type="checkbox" name="qualified" requred>
						<span style="font-size: 12px;">I agree to obey all the rules of the federation </span>
					</div><br>

				    <div class="form-group">
				    	<input type="checkbox" name="loyalty" required>
						<span style="font-size: 12px;">I am willing to contribute actively to register my clan for tournaments</span>
						
					</div><br>


					<button class=" btn btn-success btn-block" name="register" type="submit">REGISTER</button>

					


					







				</form>


			</div>
			<div class="col-sm-3"></div>

		</div>
	</div>

</body>
</html>