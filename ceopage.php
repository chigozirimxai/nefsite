<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

  // DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: ceologin.php");
}


 if (isset($_POST['send'])) {
	$message = $_POST['message'];

	if ($message == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `clanchatadmin`(`message`)VALUES('$message')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('message sent to clan leaders')</script>";

		
	}
};


?>

<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

//   // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: ceologin.php");
// }


 if (isset($_POST['send2'])) {
	$message2 = $_POST['message2'];

	if ($message2 == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `sellerchatadmin`(`message2`)VALUES('$message2')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('message sent to sellers')</script>";

		
	}
};


?>


<?php

// CONNECT PHP FILE TO DATABASE
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

// Testing database conection





// SIGN IN FORM
// UPDATE PROFILE PICTURE

if (isset($_POST['upload'])) {
	$answer= $_POST['answer'];
	

	if ($answer=="") {
		echo "<script>alert('choose profile picture')</script>";
	}
	else{
		$php= "UPDATE `odd1a` SET `answer`='$answer'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('TRUE VALUE INSERTED')</script>";
		}
		else{
			echo "<script>alert('UPDATE FAILED')</script>";
		}
	}
};


if (isset($_POST['upload2'])) {
	$answer2= $_POST['answer2'];
	

	if ($answer2=="") {
		echo "<script>alert('insert value!')</script>";
	}
	else{
		$php= "UPDATE `odd1b` SET `answer2`='$answer2'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('TRUE VALUE INSERTED')</script>";
		}
		else{
			echo "<script>alert('UPDATE FAILED')</script>";
		}
	}
};




if (isset($_POST['upload3'])) {
	$answer3= $_POST['answer3'];
	

	if ($answer3=="") {
		echo "<script>alert('insert value!')</script>";
	}
	else{
		$php= "UPDATE `odd1c` SET `answer3`='$answer3'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('TRUE VALUE INSERTED')</script>";
		}
		else{
			echo "<script>alert('UPDATE FAILED')</script>";
		}
	}
};


if (isset($_POST['upload4'])) {
	$answer4= $_POST['answer4'];
	

	if ($answer4=="") {
		echo "<script>alert('insert value!')</script>";
	}
	else{
		$php= "UPDATE `odd2a` SET `answer4`='$answer4'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('TRUE VALUE INSERTED')</script>";
		}
		else{
			echo "<script>alert('UPDATE FAILED')</script>";
		}
	}
};


if (isset($_POST['upload5'])) {
	$answer5= $_POST['answer5'];
	

	if ($answer5=="") {
		echo "<script>alert('insert value!')</script>";
	}
	else{
		$php= "UPDATE `odd2b` SET `answer5`='$answer5'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('TRUE VALUE INSERTED')</script>";
		}
		else{
			echo "<script>alert('UPDATE FAILED')</script>";
		}
	}
};


if (isset($_POST['upload6'])) {
	$answer6= $_POST['answer6'];
	

	if ($answer6=="") {
		echo "<script>alert('insert value!')</script>";
	}
	else{
		$php= "UPDATE `odd2c` SET `answer6`='$answer6'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('TRUE VALUE INSERTED')</script>";
		}
		else{
			echo "<script>alert('UPDATE FAILED')</script>";
		}
	}
};


if (isset($_POST['upload7'])) {
	$answer7= $_POST['answer7'];
	

	if ($answer7=="") {
		echo "<script>alert('insert value!')</script>";
	}
	else{
		$php= "UPDATE `odd3a` SET `answer7`='$answer7'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('TRUE VALUE INSERTED')</script>";
		}
		else{
			echo "<script>alert('UPDATE FAILED')</script>";
		}
	}
};


if (isset($_POST['upload8'])) {
	$answer2= $_POST['answer8'];
	

	if ($answer8=="") {
		echo "<script>alert('insert value!')</script>";
	}
	else{
		$php= "UPDATE `odd3b` SET `answer8`='$answer8'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('TRUE VALUE INSERTED')</script>";
		}
		else{
			echo "<script>alert('UPDATE FAILED')</script>";
		}
	}
};


if (isset($_POST['upload9'])) {
	$answer9= $_POST['answer9'];
	

	if ($answer9=="") {
		echo "<script>alert('insert value!')</script>";
	}
	else{
		$php= "UPDATE `odd3c` SET `answer9`='$answer9'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('TRUE VALUE INSERTED')</script>";
		}
		else{
			echo "<script>alert('UPDATE FAILED')</script>";
		}
	}
};



?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX TDM TOURNAMENTS XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");
// UPDATE PROFILE PICTURE
if (isset($_POST['upload1'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "tdm_image/".$image;

	if ($image=="") {
		echo "<script>alert('choose profile picture')</script>";
	}
	else{
		// $php= "INSERT INTO `tdm` (`slot1`)VALUES('$image')";
		$php= "UPDATE `tdm` SET `slot1`='$image'";
		$query=mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
		echo "<script>alert('team image uploaded')</script>";

		}
		else{
		echo "<script>alert('Failed to update image')</script>";

		}
	}
};
?>
<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");
// UPDATE PROFILE PICTURE
if (isset($_POST['upload2t'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "tdm_image/".$image;

	if ($image=="") {
		echo "<script>alert('choose profile picture')</script>";
	}
	else{
		// $php= "INSERT INTO `tdm` (`slot1`)VALUES('$image')";
		$php= "UPDATE `tdm` SET `slot2`='$image'";
		$query=mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
		echo "<script>alert('team image uploaded')</script>";

		}
		else{
		echo "<script>alert('Failed to update image')</script>";

		}
	}
};
?>
<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");
// UPDATE PROFILE PICTURE
if (isset($_POST['upload3t'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "tdm_image/".$image;

	if ($image=="") {
		echo "<script>alert('choose profile picture')</script>";
	}
	else{
		// $php= "INSERT INTO `tdm` (`slot1`)VALUES('$image')";
		$php= "UPDATE `tdm` SET `slot3`='$image'";
		$query=mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
		echo "<script>alert('team image uploaded')</script>";

		}
		else{
		echo "<script>alert('Failed to update image')</script>";

		}
	}
};
?>
<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");
// UPDATE PROFILE PICTURE
if (isset($_POST['upload4t'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "tdm_image/".$image;

	if ($image=="") {
		echo "<script>alert('choose profile picture')</script>";
	}
	else{
		// $php= "INSERT INTO `tdm` (`slot1`)VALUES('$image')";
		$php= "UPDATE `tdm` SET `slot4`='$image'";
		$query=mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
		echo "<script>alert('team image uploaded')</script>";

		}
		else{
		echo "<script>alert('Failed to update image')</script>";

		}
	}
};
?>
<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");
// UPDATE PROFILE PICTURE
if (isset($_POST['upload5t'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "tdm_image/".$image;

	if ($image=="") {
		echo "<script>alert('choose profile picture')</script>";
	}
	else{
		// $php= "INSERT INTO `tdm` (`slot1`)VALUES('$image')";
		$php= "UPDATE `tdm` SET `slot5`='$image'";
		$query=mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
		echo "<script>alert('team image uploaded')</script>";

		}
		else{
		echo "<script>alert('Failed to update image')</script>";

		}
	}
};
?>
<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");
// UPDATE PROFILE PICTURE
if (isset($_POST['upload6t'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "tdm_image/".$image;

	if ($image=="") {
		echo "<script>alert('choose profile picture')</script>";
	}
	else{
		// $php= "INSERT INTO `tdm` (`slot1`)VALUES('$image')";
		$php= "UPDATE `tdm` SET `slot6`='$image'";
		$query=mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
		echo "<script>alert('team image uploaded')</script>";

		}
		else{
		echo "<script>alert('Failed to update image')</script>";

		}
	}
};
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX  THIS IS THE END XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX BATTLE ROYALE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

		<?php
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');
// UPLOAD IMAGES AND CAPTION

// DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: bloglogin.php");
// }

if (isset($_POST['uploadbr'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "br_image/".$image;
	


	if ($image=="") {
		echo "<script>alert('The image, headline or news content is missing')</script>";
	}
	else{
		$php= "INSERT INTO `battleroyale` (`image`)VALUES('$image')";
		$query= mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
			echo "<script>alert('IMAGE UPLOADED!')</script>";
		}
		else{
			echo "<script>alert('failed to upload IMAGE')</script>";

		}
	}
};




if (isset($_POST['post'])) {
	$airtime = $_POST['airtime'];

	if ($airtime == "") {
		echo "<script>alert('Fill feilds')</script>";

	}
	else{
		$php = "INSERT INTO `sub` (`airtime`)VALUES('$airtime')";
		$query = mysqli_query($connect, $php);
		if ($query) {
			echo "<script>alert('airtime uploaded')</script>";

		}
		else{
			echo "<script>alert('failed to send')</script>";

		}
	}


}


?>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXX AI XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
	<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");

if (isset($_POST['statusb'])) {
	$status= $_POST['status'];
	if ($status=="") {
		echo "<script>alert('fill fields')</script>";

	}
	else{
		$php= "UPDATE `battleroyale` SET `status`='$status'";
		$query= mysqli_query($connect,$php);
		if ($query) {
		echo "<script>alert('clans status updated')</script>";

		}
		else{
		echo "<script>alert('Failed to update clans status')</script>";

		}
	}
}

?>
<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");

if (isset($_POST['timeb'])) {
	$time= $_POST['time'];
	if ($time=="") {
		echo "<script>alert('fill fields')</script>";

	}
	else{
		$php= "UPDATE `battleroyale` SET `time`='$time'";
		$query= mysqli_query($connect,$php);
		if ($query) {
		echo "<script>alert('match time updated')</script>";

		}
		else{
		echo "<script>alert('Failed to update match time')</script>";

		}
	}
}

?>
<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");

if (isset($_POST['mstatusb'])) {
	$mstatus= $_POST['mstatus'];
	if ($mstatus=="") {
		echo "<script>alert('fill fields')</script>";

	}
	else{
		$php= "UPDATE `battleroyale` SET `mstatus`='$mstatus'";
		$query= mysqli_query($connect,$php);
		if ($query) {
		echo "<script>alert('match status updated')</script>";

		}
		else{
		echo "<script>alert('Failed to update match status')</script>";

		}
	}
}

?>
<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");

if (isset($_POST['map'])) {
	$map= $_POST['map'];
	if ($map=="") {
		echo "<script>alert('fill fields')</script>";

	}
	else{
		$php= "UPDATE `battleroyale` SET `map`='$map'";
		$query= mysqli_query($connect,$php);
		if ($query) {
		echo "<script>alert('map status updated')</script>";

		}
		else{
		echo "<script>alert('Failed to update map status')</script>";

		}
	}
}

?>
<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");

if (isset($_POST['ppc'])) {
	$ppc= $_POST['ppc'];
	if ($ppc=="") {
		echo "<script>alert('fill fields')</script>";

	}
	else{
		$php= "UPDATE `battleroyale` SET `ppc`='$ppc'";
		$query= mysqli_query($connect,$php);
		if ($query) {
		echo "<script>alert('PPC updated')</script>";

		}
		else{
		echo "<script>alert('Failed to update PPC status')</script>";

		}
	}
}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">

	<title>CEO PAGE</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
	.top_nav{
	background-color: black;
	text-align: right;
	padding: px;
	overflow: hidden;
	position: fixed;
		top: 0;
		width: 100%;
		z-index: 10;
		margin-bottom: 10px;
		border-bottom: 2px solid gold;
		border-radius: 20px;
}
.top_nav a{
	text-decoration: none;
	color: gold;
	font-weight: bold;
	text-transform: uppercase;
	font-size: 18px;
	padding: 5px 20px;
	display: inline-block;
	transition: 1s;
	margin: 0px;

}
.top_nav a i{
	color: white;
	font-size: 10px;
	margin-top: 10px;
	
}
.top_nav a.home{
	float: left;
}
.top_nav a.icon{
	display: none;
}

 .top_nav a:hover:not(:first-child){
 	background-color: darkgrey;
 }
 	@media screen and (max-width: 1000px){
    		.top_nav a:not(:first-child){display: none;}
    		.top_nav a.icon{display: block; position: relative; float: right;}

    	}
    	@media screen and (max-width: 1000px){
    		.top_nav.responsive{
    			position: relative;
    				position: fixed;
				top: 0;
				width: 50%;
				z-index: 10;
				border-radius: 10px;
				/*border: 2px solid gold;*/
				border-left: 2px solid gold;
				border-right: 2px solid gold;
				border-bottom: 2px solid gold;

    		}
    		.top_nav.responsive a.icon{position: absolute; top: 0; right: 0; margin: 7px;}
    		.top_nav.responsive a{display: block; float: none; text-align: left;}
    		.part1{background-color: gold;}
    	}

.body{
	
	background-color:black;
	
}



















		body{
			background-color: black;
		}
		form{
			margin-top: 3vw;
			background-color: #191919;
			padding: 3vw;
			border-radius: 1vw;
			box-shadow: 2px 2px #2B2B2B;
			position: relative;
		}
		h3{
			color: gold;
			font-family: cursive;
			background-color: black;
			padding: 0.8vw;
			border-radius: 5px;
		}
		.form-control{
			background-color:black;
			color: gold;
			border: 2px solid #2B2B2B;
		}
		button{
			background-color: silver;
		}
		.btn-block{
			background-color: darkgoldenrod;
			color: black;
			font-family: cursive;
			font-weight: bolder;
			font-size: 20px;
			outline: none;
			border: 2px solid #2B2B2B;

		}


		table{
		border-collapse: collapse;
		border: 2px solid black;
		background-color: black;
		color: white;
		width: 100%;
		height: 100%;
		padding: 50px;
		border-radius: 10px;
	}
	td{
		border: 2px solid grey;
		padding: 7px;
	}
	td img{
		width: 20vw;
		height: 10vw;
	}
	td a i{
		font size: 2vw;
		padding-left: 10px;
		color: red;
	}
	td a i:hover{
	
		color: darkred;
	}

		table{
			border-collapse: collapse;
			border:  ;
			background-color: black;
			width: 1vw;
			padding: 5px;
			text-align: center;
			display: ;
			height: 200px;

		}
		th{
			border: 2px solid black;
			padding: 8px;
			color: gold;
			background-color: #171717;
			border-radius: 5px;
		}
		td{
			border: 2px solid #1C1C1C;
			padding: 8px;
			color: white;
		}
		td a{
			text-decoration: none;
		}
		td a .fa-trash{
			font-size: 35px;
			color: red;
			padding-left: 10px;
		}
		td a .fa-trash:hover{
			color: darkred;
	
		}
		td a .fa-envelope{
			font-size: 35px;
			padding-left: 6px;
		}
		td a .fa-envelope:hover{
			color: skyblue;
		}
		tr{
			width: 800px;
		}
		.seemore{
			width: 50%;
			background-color: black;
			padding: 0.3vw;
			color: gold;
			border-radius: 5px;
			position: relative;
			margin-top: -2vw;
			border-top: 2px solid darkgoldenrod;
			border-left: 2px solid darkgoldenrod;
			border-right: 2px solid darkgoldenrod;


		}
		.seemore2{
			width: 50%;
			background-color: black;
			padding: 0.3vw;
			color: gold;
			border-radius: 5px;
			position: relative;
			margin-top: -2vw;
			border-top: 2px solid darkgoldenrod;
			border-left: 2px solid darkgoldenrod;
			border-right: 2px solid darkgoldenrod;
			


		}
			.seeless{
			width: 50%;
			background-color: black;
			padding: 0.3vw;
			color: gold;
			border-radius: 5px;
			position: relative;
			margin-top: -4vw;
			display: none;
		}
		.seeless2{
			width: 50%;
			background-color: black;
			padding: 0.3vw;
			color: gold;
			border-radius: 5px;
			position: relative;
			margin-top: -4vw;
			display: none;
		}
		.nc{
			height: 300px;
			background-color:  #171717;
			overflow: auto;
			white-space: nowrap;
			border-radius: 20px;
		}
		.nch{
			color: orange;
			border-bottom: 2px solid white;
		}
		.ncb{
			background-color: darkgoldenrod;
			color: black;
			font-weight: bolder;
			border-radius: 5px;
		}
				.ncbx{
			background-color: darkgoldenrod;
			color: black;
			font-weight: bolder;
			border-radius: 5px;
		}
		.ncb2{
			background-color: darkgoldenrod;
			color: black;
			font-weight: bolder;
			border-radius: 5px;
			display: none;
		}
		.ncb33{
			background-color: darkgoldenrod;
			color: black;
			font-weight: bolder;
			border-radius: 5px;
		}
		.ncb3{
			background-color: darkgoldenrod;
			color: black;
			font-weight: bolder;
			border-radius: 5px;
			display: none;
		}
		.players{
			background-color: black;
		}
		.submit{
			color: gold;
			background-color: black;
			border: 2px solid white;
			border-radius: 5px;
			font-weight: bold;
		}
		h6{
			color: white;
		}
		.msg{
			background-color: #171717;
			height: 100px;
			border-radius: 20px;
		}
	
		.d1{
			width: 11vw;
			height: 7vw;
			background-color:#171717 ;
			text-align: center;
			border-radius: 0.5vw;
			/*padding: 1vw;*/
			/*margin-top: -3vw;*/
			border: 1px solid white;
		}
		.h1{
			background-color: transparent;
			font-size: 2vw;
			background-color: black;
		}
		.p1{
			color: white;
			font-size: 2vw;
			margin-top: -2vw;
		}
		.d2{
			width: 15vw;
			height: 7vw;
			background-color:#171717 ;
			text-align: center;
			border-radius: 0.5vw;
			/*padding: 1vw;*/
			/*margin-top: -3vw;*/
			border: 1px solid white;
			margin-left: 25vw;
			margin-top: -7vw;
		}
		.d3{
			width: 15vw;
			height: 7vw;
			background-color:#171717 ;
			text-align: center;
			border-radius: 0.5vw;
			/*padding: 1vw;*/
			/*margin-top: -3vw;*/
			border: 1px solid white;
			margin-left: 50vw;
			margin-top: -7vw;
		}
		.d4{
			width: 15vw;
			height: 7vw;
			background-color:#171717 ;
			text-align: center;
			border-radius: 0.5vw;
			/*padding: 1vw;*/
			/*margin-top: -3vw;*/
			border: 1px solid white;
			float: right;
			margin-top: -7vw;
		}
		.betb{
			width: 100%;
			background-color: black;
			border-top: 2px solid darkgoldenrod;
			color: green;
			font-weight: bolder;
			text-align: center;
			font-family: cursive;
			margin-top: 2vw;
			border-radius: 1vw;
			padding: 1vw;
		}
		.betc{
			width: 100%;
			background-color: black;
			border-top: 2px solid darkgoldenrod;
			color: red;
			font-weight: bolder;
			text-align: center;
			font-family: cursive;
			margin-top: 2vw;
			border-radius: 1vw;
			padding: 1vw;
		}
		.betcon{
			display: none;
		}
		.match{
			display: none;
		}
		.brs1{
			width: 80%;
			padding: 0.5vw;
			background-color: darkgoldenrod;
			color: black;
			font-weight: bolder;
			font-family: cursive;
			border-radius: 1vw;
			border: 2px solid white;
		}
		.brs{
			width: 80%;
			padding: 0.5vw;
			background-color: darkgoldenrod;
			color: red;
			font-weight: bolder;
			font-family: cursive;
			border-radius: 1vw;
			border: 2px solid white;
			margin-top: 2vw;
		}


	</style>
</head>
<body>
<?php
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

// SIGN IN FORM

if (isset($_POST['add'])) {
	
	$email= $_POST['email'];
	
	$password=$_POST['password'];

	// INSERT DATA INTO DATABASE TABLE

	$php= "INSERT INTO `adminlogin` (`email`,`password`)VALUES('$email','$password')";
	$query=mysqli_query($connect,$php);
	// $count= mysqli_num_rows($query);
	if ($query){
		echo ('sign in succesful');
	}
	else{
		echo ('failed to sign in');
	}

};


?>

<?php
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


// $php= "SELECT * FROM `profile`";
// $query= mysqli_query($connect,$php);
// $count= mysqli_num_rows($query);

// if ($count>0) {
// 	$row= mysqli_fetch_assoc($query);
// }

// COUNT THE NUMEBER OF ALBUM
$php1 = "SELECT count(`id`) FROM `nefregister`";
$query1 = mysqli_query($connect,$php1);
if ($query1) {
	$id = mysqli_fetch_row($query1);
	$count1 = $id[0];
}

// COUNT THE NUMEBER messages in feedback
$php2 = "SELECT count(`id`) FROM `clanreg`";
$query2 = mysqli_query($connect,$php2);
if ($query2) {
	$id = mysqli_fetch_row($query2);
	$count2 = $id[0];
}
$php2 = "SELECT count(`id`) FROM `orders`";
$query2 = mysqli_query($connect,$php2);
if ($query2) {
	$id = mysqli_fetch_row($query2);
	$count3 = $id[0];
}
$php2 = "SELECT count(`id`) FROM `tournaments`";
$query2 = mysqli_query($connect,$php2);
if ($query2) {
	$id = mysqli_fetch_row($query2);
	$count4 = $id[0];
}


// SIGN IN FORM

if (isset($_POST['seller'])) {
	
	$email= $_POST['email'];
	
	$password=$_POST['password'];

	// INSERT DATA INTO DATABASE TABLE

	$php= "INSERT INTO `shoplogin` (`email`,`password`)VALUES('$email','$password')";
	$query=mysqli_query($connect,$php);
	// $count= mysqli_num_rows($query);
	if ($query){
		echo ('sign in succesful');
	}
	else{
		echo ('failed to sign in');
	}

};

// SIGN IN FORM

if (isset($_POST['streamer'])) {
	
	$email= $_POST['email'];
	
	$password=$_POST['password'];

	// INSERT DATA INTO DATABASE TABLE

	$php= "INSERT INTO `streamers` (`email`,`password`)VALUES('$email','$password')";
	$query=mysqli_query($connect,$php);
	// $count= mysqli_num_rows($query);
	if ($query){
		echo ('sign in succesful');
	}
	else{
		echo ('failed to sign in');
	}

};


?>

<?php
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

// SIGN IN FORM

if (isset($_POST['clan'])) {
	
	$email= $_POST['email'];
	
	$password=$_POST['password'];

	// INSERT DATA INTO DATABASE TABLE

	$php= "INSERT INTO `clanlogin` (`email`,`password`)VALUES('$email','$password')";
	$query=mysqli_query($connect,$php);
	// $count= mysqli_num_rows($query);
	if ($query){
		echo ('sign in succesful');
	}
	else{
		echo ('failed to sign in');
	}

};


?>


<?php
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

// SIGN IN FORM

if (isset($_POST['verify'])) {


	// INSERT DATA INTO DATABASE TABLE

	$php= "INSERT INTO `orders` FROM `orders`ORDER BY `id` DESC";
	$query=mysqli_query($connect,$php);
	$count= mysqli_num_rows($query);
	if ($query){
		echo ('verification successful');
	}
	else{
		echo ('verification failed');
	}

};


?>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX TOURRNAMENTS XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<?php
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

// SIGN IN FORM

if (isset($_POST['BRb'])) {
	
	$br= $_POST['br'];
	


	// INSERT DATA INTO DATABASE TABLE

	$php= "INSERT INTO `br` (`br`)VALUES('$br')";
	$query=mysqli_query($connect,$php);
	// $count= mysqli_num_rows($query);
	if ($query){
		echo "<script>alert('BATTLE ROYALE UPDATED')</script>";
		
	}
	else{
		echo "<script>alert('UPDATE FAILED')</script>";
		
	}

};


?>



	<body>
	<nav class="top_nav" id="top_nav">
		<a href="landingpage.php" class="home"><div style="width:50px ;height: 50px;background-color: gold;margin: 0px;padding: none;">
			<img src="img/neflogo.jpeg" style="width: 100%;opacity: 100%;height: 100%;">
		</div></a>
		<a href="blog.php">BLOG<br><h6><i>trending!!</i></h6></a>
		<a href="mobile.php">mobile<br><h6><i>trending now!</i></h6></a>
		<a href="">CONSOLE<br><h6><i>coming soon</i></h6></a>
		<a href="">STREAMS<br><h6><i>coming soon</i></h6></a>
		<a href="shop.php">SHOP<br><h6><i>coming soon</i></h6></a>
		<a href="about.php">ABOUT US<br><h6><i>know us!</i></h6></a>
		<a href="" class="icon" onclick="return toggle_navbar()">
			<i class="fa fa-bars"></i>
		</a>
	</nav><br><br><br>



<script type="text/javascript">
	
	function toggle_navbar(){
			var top_nav= document.getElementById('top_nav');
			if(top_nav.className== "top_nav"){
				top_nav.className+= " responsive";
				return false;
            }
            else{
            	top_nav.className= "top_nav";
            }
		}

</script>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="d1">
				<h3 class="h1"><i>players</i></h3>
				<p class="p1"><i><?php echo $count1 ?></i></p>
			</div>
			<div class="d2">
				<h3 class="h1"><i>new clans</i></h3>
				<p class="p1"><i><?php echo $count2 ?></i></p>
			</div>
			<div class="d3">
				<h3 class="h1"><i>customers</i></h3>
				<p class="p1"><i><?php echo $count3 ?></i></p>
			</div>
			<div class="d4">
				<h3 class="h1"><i>tnmt rqst</i></h3>
				<p class="p1"><i><?php echo $count4 ?></i></p>
			</div>
		</div>
	</div>
</div>




<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<form style="margin-top: 5vw;" method="post">

				<h3><center> ADD BLOGGER</center></h3>

				<div class="form-group">
					<input type="email" name="email" placeholder="email" class="form-control">
				</div>

				<div class="form-group">
					<input type="password" name="password" placeholder="password" class="form-control">
				</div>

				<center><button class=" btn btn-success btn-block" type="submit" name="add">ADD</button></center>

			</form>
			<!-- <center><button class="seemore">view data</button></center> -->

		</div>
		<div class="col-md-3">
			<form style="margin-top: 5vw;" method="post">

				<h3><center> STREAMERS</center></h3>

				<div class="form-group">
					<input type="email" name="email" placeholder="email" class="form-control">
				</div>

				<div class="form-group">
					<input type="password" name="password" placeholder="password" class="form-control">
				</div>

				<center><button class=" btn btn-success btn-block" type="submit" name="streamer">ADD</button></center>

			</form>
			<!-- <center><button class="seemore">view data</button></center> -->

		</div>
		<div class="col-md-3">

			<form style="margin-top: 5vw;" method="post">

				<h3><center> ADD SELLER</center></h3>

				<div class="form-group">
					<input type="email" name="email" placeholder="email" class="form-control">
				</div>

				<div class="form-group">
					<input type="password" name="password" placeholder="password" class="form-control">
				</div>

				<center><button class=" btn btn-success btn-block" type="submit" name="seller">ADD</button></center>

			</form>
			<center><button class="seemore">view data</button></center>
			<center><button class="seeless">close</button></center>

				<!-- <center><h1>CUSTOMER REQUESTS</h1></center> -->
				<table class="table-responsive sellers"  style="display: none;" method="post">
					<tr>
						<th>ID</th>
						<th>product name</th><
						<th>acct name</th>
						<th>acct num </th>
						<th>amt paid</th>
						<th>bank name</th>
						<th>email</th>
						<th>phone number</th>
						<th>delete</th>
						<th>email</th>
						<th>evidence</th>

						<!-- <th>verify</th> -->


						<!-- <th>whatsapp</th>
						<th>email</th>
						<th>phone number</th>
						<th>qualified</th>
						<th>loyalty</th> -->


						

					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");
                         // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: clanlogin.php");
// }

                         // DELETING MESSAGES
                         
                         if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `orders` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
					//        if (isset($_GET['verify'])) {
					// 	$id = $_GET['verify'];
					// 	$php = "INSERT INTO `verified` WHERE `id`='$id'";
					// 	$query = mysqli_query($connect,$php);
					// }



					
					$php = "SELECT * FROM `orders`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name']?></td>
								<td><?php echo $row['acct_name']?></td>
								<td><?php echo $row['acct_num']?></td>
								<td><?php echo $row['amt_paid']?></td>
								<td><?php echo $row['bank']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['phone_num']?></td>
								
								<td>
									<a href="ceopage.php? delete=<?,php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email'] ?>">    
										<i class="fa fa-envelope"></i>
									</a>
								</td>
								<td style=""><img src="shop_image/<?php echo $row['image']?>"></td>
								


								<!-- <td><i class="fa fa-check" style="color: red;"></i></td> -->
								<!-- <td><button class="verify" name="verify">verify</button></td> -->


							</tr>
							<?php
						}
					}


					
					?>
			<!-- <center><button class="seeless">close</button></center> -->

				</table>
		</div>
		<div class="col-md-3">
			<form style="margin-top: 5vw;" method="post">

				<h3><center> CLAN LEADER</center></h3>

				<div class="form-group">
					<input type="email" name="email" placeholder="email" class="form-control">
				</div>

				<div class="form-group">
					<input type="password" name="password" placeholder="password" class="form-control">
				</div>

				<center><button class=" btn btn-success btn-block" type="submit" name="clan">ADD</button></center>

			</form>
			<center><button class="seemore2">view data</button></center>
			<table class="table-responsive clan" style="display: none;">
					<tr>
						<th>ID</th>
						<th>clan</th>
						<th>tournament</th>
						<!-- <th>team_consent</th> -->
						<th>acct_name</th>
						<th>acct_num</th>
						<th>amt_paid</th>
						<th>bank</th>
						<th>email</th>
						<th>delete</th>
						<th>reply</th>

						
						

						

					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");
                         // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: clanlogin.php");
// }

                         // DELETING MESSAGES
                         
                         if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `tournaments` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}



					
					$php = "SELECT * FROM `tournaments`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['clan']?></td>
								<td><?php echo $row['tournament']?></td>
								<!-- <td><?php echo $row['team_consent']?></td> -->
								<td><?php echo $row['acct_name']?></td>
								<td><?php echo $row['acct_num']?></td>
								<td><?php echo $row['amt_paid']?></td>
								<td><?php echo $row['bank']?></td>
								<td><?php echo $row['email']?></td>
								<td><img src="tournament_image/<?php echo $row['image']?>"></td>



								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
			<center><button class="seeless2">close</button></center>

				</table>

		</div>

	</div>
</div><br>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 nc mt-3">
				<center><h3 class="nch">NEW CLANS</h3></center>
				<center><button class="ncb"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>clan leader</th>
						<th>name</th>
						<th>clan name</th>
						<th>active players</th>
						<th>ace players</th>
						<th>email</th>
						<th>number</th>
						<th>rules</th>
						<th>profile</th>
						<th>requirements</th>
						<th>clan logo</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");
                         // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: clanlogin.php");
// }

                         // DELETING MESSAGES
                         
                         if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `clanreg` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}



					
					$php = "SELECT * FROM `clanreg`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['clanleader']?></td>
								<td><?php echo $row['name']?></td>
								<td><?php echo $row['clan_name']?></td>
								<td><?php echo $row['active_members']?></td>
								<td><?php echo $row['ace_players']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['phone_num']?></td>
								<td><?php echo $row['rules']?></td>
								<td><?php echo $row['profile']?></td>
								<td><?php echo $row['requirements']?></td>
								<td><img src="clanlogo/<?php echo $row['image']?>"></td>



								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
			<div class="col-md-6 mt-3">
				<form method="post">
					<div class="form-group msg">
						<center><h6><i><u>speak with the clan leaders..</u></i></h6></center>
					<input type="text" name="message" class="form-control" placeholder="message to clan leaders"> 
				</div>
				<button type="submit" name="send" class="submit"><i>submit</i></button>
				<div class="form-group">
						<center><input type="text" name="airtime" placeholder="insert airtime" class="form-control"></center>
						<center><button class="ncbx" type="submit" name="post">upload</button></center>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 mt-5">
				<form method="post">
				<div class="form-group msg">
						<center><h6><i><u>speak with the sellers..</u></i></h6></center>
					<input type="text" name="message2" class="form-control" placeholder="message to clan leaders"> 
				</div>
				<button type="submit" name="send2" class="submit"><i>submit</i></button>
				</form>
			</div>
			<div class="col-md-6 nc mt-3">
				<center><h3 class="nch">ALL PLAYERS</h3></center>
				<center><button class="ncb33"><i>analyze data</i></button></center>
				<table class="table-responsive players" style="display: none;height: 200px;margin-top: 2vw;">
					<tr>
						<th>ID</th>
						<th><i>username</i></th>
						<th>email</th>
						<th>delete</th>
						<th>reply</th>
					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");
                         // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: clanlogin.php");
// }

                         // DELETING MESSAGES
                         
                         if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `nefregister` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}



					
					$php = "SELECT * FROM `nefregister`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['username']?></td>
								<td><?php echo $row['email']?></td>

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb3"><i>close table</i></button></center>
			

				</table>

			</div>
		</div><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form method="post">
					<div class="form-group">
						<center><input type="text" name="airtime" placeholder="insert airtime" class="form-control"></center>
						<center><button class="ncbx" type="submit" name="post">upload</button></center>
					</div>
					</form>
				</div>
			</div>
		</div>
		<div class="container ">
			<div class="row">
				<div class="col-md-12">
					<center><button class="betb"><i>BETTING ANALYSIS</i></button></center>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 betcon">
				<div class="form-group">
					<form method="post" style="background-color:#8E8E8E;">
						<input type="text" name="br" placeholder="battle royale" class="form-control"><br>
					<center><button type="submit" name="BRb" class="submit">POST</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 betcon">
				<div class="form-group bet">
					<form method="post">
						<input type="text" name="answer" placeholder="odd1 form1" class="form-control"><br>
					<center><button type="submit" name="upload" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 betcon">
				<div class="form-group bet">
					<form method="post">
						<input type="text" name="answer2" placeholder="odd1 form2" class="form-control"><br>
					<center><button type="submit" name="upload2" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 betcon">
				<div class="form-group bet">
					<form method="post">
						<input type="text" name="answer3" placeholder="odd1 form3" class="form-control"><br>
					<center><button type="submit" name="upload3" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 betcon">
				<div class="form-group bet">
					<form method="post">
						<input type="text" name="answer4" placeholder="odd2 form1" class="form-control"><br>
					<center><button type="submit" name="upload4" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 betcon">
				<div class="form-group bet">
					<form method="post">
						<input type="text" name="answer5" placeholder="odd2 form2" class="form-control"><br>
					<center><button type="submit" name="upload5" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 betcon">
				<div class="form-group bet">
					<form method="post">
						<input type="text" name="answer6" placeholder="odd2 form3" class="form-control"><br>
					<center><button type="submit" name="upload6" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 betcon">
				<div class="form-group bet">
					<form method="post">
						<input type="text" name="answer7" placeholder="odd3 form1" class="form-control"><br>
					<center><button type="submit" name="upload7" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 betcon">
				<div class="form-group bet">
					<form method="post">
						<input type="text" name="answer8" placeholder="odd3 form2" class="form-control"><br>
					<center><button type="submit" name="upload8" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 betcon">
				<div class="form-group bet ">
					<form method="post">
						<input type="text" name="answer9" placeholder="odd3 form3" class="form-control"><br>
					<center><button type="submit" name="upload9" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-6 nc mt-3 betcon">
				<center><h3 class="nch">TRUE BETS 1</h3></center>
				<center><button class="ncb" name="analyze"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>prediction</th>
						<th>acct name</th>
						<th>acct number</th>
						<th>bank name</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");
                         // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: clanlogin.php");
// }

                         // DELETING MESSAGES
                         
                         if (isset($_GET['analyze'])) {
						$answer = $_GET['answer'];
					}
					  if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `odd1a` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
				
					
						
					


					
					$php = "SELECT * FROM `odd1a` WHERE `prediction`=`answer`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['prediction']?></td>
								<td><?php echo $row['acct_name']?></td>
								<td><?php echo $row['acct_num']?></td>
								<td><?php echo $row['bank']?></td>
								


								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
			
		</div>
	</div><br><br>
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-4 betcon">
				<center><h3 class="nch">TRUE BETS 2</h3></center>
				<center><button class="ncb" name="analyze"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>prediction</th>
						<th>acct name</th>
						<th>acct number</th>
						<th>bank name</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");
                         // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: clanlogin.php");
// }

                         // DELETING MESSAGES
                         
                         if (isset($_GET['analyze2'])) {
						$answer = $_GET['answer2'];
					}
					  if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `odd1b` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
				
					
						
					


					
					$php = "SELECT * FROM `odd1b` WHERE `prediction2`=`answer2`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name2']?></td>
								<td><?php echo $row['email2']?></td>
								<td><?php echo $row['prediction2']?></td>
								<td><?php echo $row['acct_name2']?></td>
								<td><?php echo $row['acct_num2']?></td>
								<td><?php echo $row['bank2']?></td>
								


								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email2'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
			
			<div class="col-md-4 betcon">
				<center><h3 class="nch">TRUE BETS 3</h3></center>
				<center><button class="ncb" name="analyze3"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>prediction</th>
						<th>acct name</th>
						<th>acct number</th>
						<th>bank name</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");
                         // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: clanlogin.php");
// }

                         // DELETING MESSAGES
                         
                         if (isset($_GET['analyze3'])) {
						$answer = $_GET['answer3'];
					}
					  if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `odd1c` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
				
					
						
					


					
					$php = "SELECT * FROM `odd1c` WHERE `prediction3`=`answer3`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name3']?></td>
								<td><?php echo $row['email3']?></td>
								<td><?php echo $row['prediction3']?></td>
								<td><?php echo $row['acct_name3']?></td>
								<td><?php echo $row['acct_num3']?></td>
								<td><?php echo $row['bank3']?></td>
								


								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email3'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
			
			<div class="col-md-4 betcon">
				<center><h3 class="nch">TRUE BETS 4</h3></center>
				<center><button class="ncb" name="analyze"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>prediction</th>
						<th>acct name</th>
						<th>acct number</th>
						<th>bank name</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");


                         // DELETING MESSAGES
                         
                         if (isset($_GET['analyze4'])) {
						$answer = $_GET['answer4'];
					}
					  if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `odd2a` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
				
					
						
					


					
					$php = "SELECT * FROM `odd2a` WHERE `prediction4`=`answer4`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name4']?></td>
								<td><?php echo $row['email4']?></td>
								<td><?php echo $row['prediction4']?></td>
								<td><?php echo $row['acct_name4']?></td>
								<td><?php echo $row['acct_num4']?></td>
								<td><?php echo $row['bank4']?></td>
								


								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email4'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
			<div class="col-md-4 betcon">
				<center><h3 class="nch">TRUE BETS 5</h3></center>
				<center><button class="ncb" name="analyze"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>prediction</th>
						<th>acct name</th>
						<th>acct number</th>
						<th>bank name</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");


                         // DELETING MESSAGES
                         
                         if (isset($_GET['analyze5'])) {
						$answer = $_GET['answer5'];
					}
					  if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `odd2b` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
				
					
						
					


					
					$php = "SELECT * FROM `odd2b` WHERE `prediction5`=`answer5`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name5']?></td>
								<td><?php echo $row['email5']?></td>
								<td><?php echo $row['prediction5']?></td>
								<td><?php echo $row['acct_name5']?></td>
								<td><?php echo $row['acct_num5']?></td>
								<td><?php echo $row['bank5']?></td>
								


								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email5'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
			<div class="col-md-4 betcon">
				<center><h3 class="nch">TRUE BETS 6</h3></center>
				<center><button class="ncb" name="analyze6"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>prediction</th>
						<th>acct name</th>
						<th>acct number</th>
						<th>bank name</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");


                         // DELETING MESSAGES
                         
                         if (isset($_GET['analyze6'])) {
						$answer = $_GET['answer6'];
					}
					  if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `odd1b` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
				
					
						
					


					
					$php = "SELECT * FROM `odd2c` WHERE `prediction6`=`answer6`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name6']?></td>
								<td><?php echo $row['email6']?></td>
								<td><?php echo $row['prediction6']?></td>
								<td><?php echo $row['acct_name6']?></td>
								<td><?php echo $row['acct_num6']?></td>
								<td><?php echo $row['bank6']?></td>
								


								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email6'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
			<div class="col-md-4 betcon">
				<center><h3 class="nch">TRUE BETS 7</h3></center>
				<center><button class="ncb" name="analyze7"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>prediction</th>
						<th>acct name</th>
						<th>acct number</th>
						<th>bank name</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");


                         // DELETING MESSAGES
                         
                         if (isset($_GET['analyze7'])) {
						$answer = $_GET['answer7'];
					}
					  if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `odd3a` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
				
					
						
					


					
					$php = "SELECT * FROM `odd3a` WHERE `prediction7`=`answer7`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name7']?></td>
								<td><?php echo $row['email7']?></td>
								<td><?php echo $row['prediction7']?></td>
								<td><?php echo $row['acct_name7']?></td>
								<td><?php echo $row['acct_num7']?></td>
								<td><?php echo $row['bank7']?></td>
								


								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email7'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
		</div>
		<div class="row">
			<div class="col-md-4 betcon">
				<center><h3 class="nch">TRUE BETS 8</h3></center>
				<center><button class="ncb" name="analyze"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>prediction</th>
						<th>acct name</th>
						<th>acct number</th>
						<th>bank name</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");


                         // DELETING MESSAGES
                         
                         if (isset($_GET['analyze8'])) {
						$answer = $_GET['answer8'];
					}
					  if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `odd3b` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
				
					
						
					


					
					$php = "SELECT * FROM `odd3b` WHERE `prediction8`=`answer8`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name8']?></td>
								<td><?php echo $row['email8']?></td>
								<td><?php echo $row['prediction8']?></td>
								<td><?php echo $row['acct_name8']?></td>
								<td><?php echo $row['acct_num8']?></td>
								<td><?php echo $row['bank8']?></td>
								


								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email8'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
			<div class="col-md-4 betcon">
				<center><h3 class="nch">TRUE BETS 9</h3></center>
				<center><button class="ncb" name="analyze"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>prediction</th>
						<th>acct name</th>
						<th>acct number</th>
						<th>bank name</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");


                         // DELETING MESSAGES
                         
                         if (isset($_GET['analyze9'])) {
						$answer = $_GET['answer9'];
					}
					  if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `odd3c` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
				
					
						
					


					
					$php = "SELECT * FROM `odd3c` WHERE `prediction9`=`answer9`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name9']?></td>
								<td><?php echo $row['email9']?></td>
								<td><?php echo $row['prediction9']?></td>
								<td><?php echo $row['acct_name9']?></td>
								<td><?php echo $row['acct_num9']?></td>
								<td><?php echo $row['bank9']?></td>
								


								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email9'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
			<div class="col-md-4 betcon">
				<center><h3 class="nch">TDM BETS</h3></center>
				<center><button class="ncb" name="analyze"><i>analyze data</i></button></center>
				<table class="table-responsive newclan" style="display: none;height: 200px;">
					<tr>
						<th>ID</th>
						<th>winner</th>
						<th>MVP</th>
						<th>SCORE</th>
						<th>bank name</th>
						<th>acct number</th>
						<th>acct name</th>
						<th>delete</th>
						<th>reply</th>








					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");


                         // DELETING MESSAGES
                         
                         if (isset($_GET['analyze9'])) {
						$answer = $_GET['answer9'];
					}
					  if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `tdmbet` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
				
					
						
					


					
					$php = "SELECT * FROM `tdmbet`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['winner']?></td>
								<td><?php echo $row['mvp']?></td>
								<td><?php echo $row['score']?></td>
								<td><?php echo $row['bank']?></td>
								<td><?php echo $row['acct_num']?></td>
								<td><?php echo $row['acct_name']?></td>
								<td><?php echo $row['email']?></td>

								


								

								<td>

									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td>
									<a href="mailto:<?php echo $row['email'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				<center><button class="ncb2"><i>close table</i></button></center>
			

				</table>

			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
				<center><button class="betc" style="display: none;"><i>END ANALYSIS</i></button></center>
			</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<center><button class="brs1"><i>INITIATE MATCH SETUP</i></button></center>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 match">
				<div class="form-group bet">
					<form method="post" enctype="multipart/form-data">
						<center><h6><i>TDM CLAN1</i></h6></center>
						<input type="file" name="image" placeholder="tdm clan 1" class="form-control"><br>
					<center><button type="submit" name="upload1" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 match">
				<div class="form-group bet">
					<form method="post" enctype="multipart/form-data">
						<center><h6><i>TDM CLAN2</i></h6></center>
						<input type="file" name="image" placeholder="tdm clan 2" class="form-control"><br>
					<center><button type="submit" name="upload2t" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 match">
				<div class="form-group bet">
					<form method="post" enctype="multipart/form-data">
						<center><h6><i>TDM CLAN3</i></h6></center>
						<input type="file" name="image" placeholder="tdm clan 3" class="form-control"><br>
					<center><button type="submit" name="upload3t" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 match">
				<div class="form-group bet">
					<form method="post" enctype="multipart/form-data">
						<center><h6><i>TDM CLAN4</i></h6></center>
						<input type="file" name="image" placeholder="tdm clan 4" class="form-control"><br>
					<center><button type="submit" name="upload4t" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 match">
				<div class="form-group bet">
					<form method="post" enctype="multipart/form-data">
						<center><h6><i>TDM CLAN5</i></h6></center>
						<input type="file" name="image" placeholder="tdm clan 5" class="form-control"><br>
					<center><button type="submit" name="upload5t" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 match">
				<div class="form-group bet">
					<form method="post" enctype="multipart/form-data">
						<center><h6><i>TDM CLAN6</i></h6></center>
						<input type="file" name="image" placeholder="tdm clan 6" class="form-control"><br>
					<center><button type="submit" name="upload6t" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 match">
				<div class="form-group bet">
					<form method="post" enctype="multipart/form-data">
						<center><h6><i>BATTLE ROYALE</i></h6></center>
						<input type="file" name="image" placeholder="battle royale image" class="form-control"><br>
					<center><button type="submit" name="uploadbr" class="submit">INSERT</button></center>
					</form>
				</div>
			</div>
			<div class="col-md-4 match">
				
				<form method="post">
					<div class="form-group">
						<input type="text" name="mstatus" placeholder="insert match status" class="form-control"><br>
					<center><button type="submit" name="mstatusb" class="submit">INSERT</button></center>
					</div>
				</form>
				<form method="post">
					<div class="form-group">
						<input type="text" name="map" placeholder="insert map" class="form-control"><br>
					<center><button type="submit" name="mapb" class="submit">INSERT</button></center>
					</div>
				</form>
				<form method="post">
					<div class="form-group">
						<input type="text" name="ppc" placeholder="insert PPC" class="form-control">
					<center><button type="submit" name="ppcb" class="submit">INSERT</button></center>
					</div>
				</form>
			</div>
			<div class="col-md-4 match">
				<form method="post">
					<div class="form-group">
						<input type="text" name="status" placeholder="insert clan status" class="form-control"><br>
					<center><button type="submit" name="statusb" class="submit">INSERT</button></center>
					</div>
				</form>
				<form method="post">
					<div class="form-group">
						<input type="text" name="time" placeholder="insert match time" class="form-control"><br>
					<center><button type="submit" name="timeb" class="submit">INSERT</button></center>
					</div>
				</form>
				<div class="table-responsive sellers" style="width: 100%;height: 20vw;">
				<table>
					<tr>
						<th>image</th>
						<th>delete</th>

						

					</tr>
					<?php
					$connect= mysqli_connect("localhost","root","","nefdb");
						
					// DELETE PHOTOS FROM DATABASE

					if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `battleroyale` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
					// RETRIEVE PHOTOS FROM ALBUM AND DELETE BUTTON
					$php = "SELECT * FROM `battleroyale`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								
								<td><img src="img/<?php echo $row['image']?>"></td>
								<td>
									<a href="ceopage.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							<?php
						}
					}

					?>
				</table>
			</div> 
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center><button class="brs" style="display: none;"><i>END MATCH SETUP</i></button></center><br><br>
			</div>
		</div>
	</div>

















	  <script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
		

		$(function(){
				$(".seemore").click(function(){
					
					$(".seeless").show(200);
					
					$(".sellers").show(200);
					$(".seemore").hide(200);


				})
				$(".seeless").click(function(){
					
					$(".seemore").show(200);
					
					$(".sellers").hide(200);
					$(".seeless").hide(200);


				})
			})

		$(function(){
				$(".seemore2").click(function(){
					
					$(".seeless2").show(200);
					
					$(".clan").show(200);
					$(".seemore2").hide(200);


				})
				$(".seeless2").click(function(){
					
					$(".seemore2").show(200);
					
					$(".clan").hide(200);
					$(".seeless2").hide(200);


				})
			})
			$(function(){
				$(".ncb").click(function(){
					
					$(".ncb2").show(500);
					
					$(".newclan").show(500);
					$(".ncb").hide(500);


				})
				$(".ncb2").click(function(){
					
					$(".ncb").show(500);
					
					$(".newclan").hide(500);
					$(".ncb2").hide(500);


				})
			})


			$(function(){
				$(".ncb33").click(function(){
					
					$(".ncb3").show(500);
					
					$(".players").show(500);
					$(".ncb33").hide(500);


				})
				$(".ncb3").click(function(){
					
					$(".ncb33").show(500);
					
					$(".players").hide(500);
					$(".ncb3").hide(500);


				})
			})

			// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
				$(function(){
				$(".verify").dblclick(function(){
					
					$(".fa-check").css("color","green");
					
					$(".newclan").show(500);
					$(".ncb").hide(500);


				})
				$(".ncb2").click(function(){
					
					$(".ncb").show(500);
					
					$(".newclan").hide(500);
					$(".ncb2").hide(500);


				})
			})

		$(function(){
				$(".betb").click(function(){
					
					$(".betcon").show(200);
					
					$(".betc").show(200);
					$(".betb").hide(200);


				})
				$(".betc").click(function(){
					
					$(".betb").show(200);
					
					$(".betcon").hide(200);
					$(".betc").hide(200);


				})
			})
		// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
		$(function(){
				$(".brs1").click(function(){
					
					$(".match").show(200);
					
					$(".brs").show(200);
					$(".brs1").hide(200);


				})
				$(".brs").click(function(){
					
					$(".brs1").show(200);
					
					$(".match").hide(200);
					$(".brs").hide(200);


				})
			})
	</script>
</body>
</html>