<?php

// CONNECT PHP FILE TO DATABASE
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

 // DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: neflogin.php");
}

// Testing database conection





// SIGN IN FORM

if (isset($_POST['register'])) {
	$clan= $_POST['clan'];
	$firstname=$_POST['lastname'];
	$lastname=$_POST['lastname'];
	$pubgtype=$_POST['pubgtype'];
	$game_name=$_POST['game_name'];
	$game_id=$_POST['game_id'];
	$current_rank=$_POST['current_rank'];
	$highest_rank=$_POST['highest_rank'];
	$gaming_hour=$_POST['gaming_hour'];
	$play_time=$_POST['play_time'];
	$bank_transfer=$_POST['bank_transfer'];
	$skill=$_POST['skill'];
	$facebook=$_POST['facebook'];
	$whatsapp=$_POST['whatsapp'];
	$email=$_POST['email'];
	$phone_number=$_POST['phone_number'];
	$qualified=$_POST['qualified'];
	$loyalty=$_POST['loyalty'];
	

	// INSERT DATA INTO DATABASE TABLE

	$php= "INSERT INTO `pubgclanform` (`clan`,`firstname`,`lastname`,`pubgtype`,`game_name`,`game_id`,`current_rank`,`highest_rank`,`gaming_hour`,`play_time`,`bank_transfer`,`skill`,`facebook`,`whatsapp`,`email`,`phone_number`,`qualified`,`loyalty`)VALUES('$clan','$firstname','$lastname','$pubgtype','$game_name','$game_id','$current_rank','$highest_rank','$gaming_hour','$play_time','$bank_transfer','$skill','$facebook','$whatsapp','$email','$phone_number','$qualified','$loyalty')";
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
	<title>clanform</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">

	<style type="text/css">
	body{
		padding: none;
		margin: 0px;
		/*background-image:url(img/pubgl.jpg) ;
		background-size: cover;*/
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
					<a href="pubg.php">
						<button class="btn btn-danger">return</button>
					</a>
				</div>
			</div>
			<div class="col-sm-6" class="cont">
				<img src="img/c10.jpg" style="position: absolute;width: 100%;height: 100%;">
				

				<form class="form-group" style="position: relative;" method="post">
					<h1 style="text-align: center;color: white;font-family:cursive;margin-top: 2vw;text-shadow: 0px 4px purple ;font-weight: bolder;font-size: 4.5vw;">JOIN A CLAN,EARN A TON</h1><br>
					<div class="form-group" style="">
						<span style="color: white;font-family: cursive;font-size: 1.5vw;">SELECT YOUR CHOSEN CLAN</span><br>
					<select  class="form-control" style="padding: 2px;border-radius: 20px;border: 0.3vw solid purple;outline: none;" name="clan" required>
						<option >SELECT CLAN</option>
						<option>/NEF/SQUAD WIPE</option>
						<option>/NEF/SQUAD WIPE</option>
						<option>/NEF/SQUAD WIPE</option>
						<option>/NEF/SQUAD WIPE</option>
						<option>/NEF/SQUAD WIPE</option>
					</select>

					</div>

					
					<div class="form-group">
						<input type="text" name="firstname" placeholder="Firstname" class="form-control fn" required>
						
					</div> 

					<div class="form-group">
						<input type="text" name="lastname" placeholder="Lastname" class="form-control fn" >
						
					</div>

					

					<h4>GAME DETAILS</h4>

					<div class="form-group" style="">
						<span style="color: white;font-family: cursive;font-size: 1.5vw;">WHICH OF THE PUBG DO YOU PLAY?</span><br>
					<select  class="form-control" style="padding: 2px;border-radius: 20px;border: 0.3vw solid purple;" name="pubgtype" required>
						<option >PUBG MOBILE</option>
						<option>PUBG MOBILE LITE</option>
						<option>PUBG NEW STATE</option>
						
					</select><br>

					<div class="form-group">
						<input type="text" name="game_name" placeholder="in-game Name" class="form-control fn" required>
						
					</div> 
					<div class="form-group">
						<input type="text" name="game_id" placeholder="Game ID" class="form-control fn">
						
					</div>

					<div class="form-group">
						<input type="text" name="current_rank" placeholder="current season rank" class="form-control fn" required>
						
					</div>

					<div class="form-group">
						<input type="text" name="highest_rank" placeholder="Highest ranked reached" class="form-control fn" required>
						
					</div>
					<div class="form-group" style="">
						<span style="color: white;font-family: cursive;font-size: 1.5vw;">MINIMUM GAMING HOURS</span><br>
					<select  class="form-control" style="padding: 2px;border-radius: 20px;border: 0.3vw solid purple;" name="gaming_hour">
						<option >1hr</option>
						<option>2hrs</option>
						<option>3hrs</option>
						<option>4hrs</option>
						<option>5hrs</option>
						<option>other</option>
					</select><br>

					<div class="form-group" style="">
						<span style="color: white;font-family: cursive;font-size: 1.5vw;">WHEN DO YOU MOSTLY PLAY?</span><br>
					<select class="form-control" style="padding: 2px;border-radius: 20px;border: 0.3vw solid purple;" name="play_time" required>
						<option >DAY</option>
						<option>NIGHT</option>
						
					</select><br><br><br>

					<div class="form-group">
						<input type="text" name="bank_transfer" placeholder="can you make bank transfers?" class="form-control fn" required>
						
					</div> <br>

					<div class="form-group">
						<input type="text" name="skill" placeholder="What are you best at, in game?" class="form-control fn" required>
						
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

					<h6><i style="color: red;font-size: 13px;">Ensure your details are correct before submiting,The leader of your chosen clan will review your game stats with the game name you provided, so ensure it is correct.<br>
					once you are confirmed to have met the requirements, you will get a feedback through the contact you provided us.</i></h6>

					<div class="form-group">
						
						<input type="checkbox" name="qualified" requred>
						<span style="font-size: 12px;">I have met the rquirements of the clan i chose</span>
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