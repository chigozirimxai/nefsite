<?php
$connect= mysqli_connect("localhost", "root", "", "photobookdb");

// deny session without login
session_start();
if ($_SESSION['status'] !=  true) {
	header("location: neflogin.php");
}





$php= "SELECT * FROM `profile`";
$query= mysqli_query($connect,$php);
$count= mysqli_num_rows($query);

if ($count>0) {
	$row= mysqli_fetch_assoc($query);
}

// COUNT THE NUMEBER OF ALBUM
$php1 = "SELECT count(`id`) FROM `album`";
$query1 = mysqli_query($connect,$php1);
if ($query1) {
	$id = mysqli_fetch_row($query1);
	$count1 = $id[0];
}

// COUNT THE NUMEBER messages in feedback
$php2 = "SELECT count(`id`) FROM `feedback`";
$query2 = mysqli_query($connect,$php2);
if ($query2) {
	$id = mysqli_fetch_row($query2);
	$count2 = $id[0];
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<style type="text/css">
		.profle_body{
			margin: 0px;
			padding: 0px;
			background: linear-gradient(to bottom right, skyblue 30% 40%, white 50% 70%, turquoise 80% 100% );
		}
		.username{
			text-transform: capitalize;
			font-family: sans-serif;
			font-size: 60px;
			padding-top: 50px;
		}
		.profile_cover{
			padding-top: 20px;
			background: linear-gradient(to bottom left, white 10%, skyblue 10% 20%, hotpink 20% 30%, turquoise 30% 40%, orange 40% 50%, white 50% 60%, orange 60% 70%,turquoise 70% 80%, hotpink 80% 90%,white 0 );
		}
		.upload_profile{
			padding: none;
			/*width: 100px;*/
			height: 300px;
			width: 100%;
		}
		.upload_profile1{
			color: transparent;
			text-decoration: none;
			outline: none;
		}
		.upload_profile img{
			/*width: 300px;*/
			width: 100%;

			height: 350px;
			border-radius: 20px;
		}
		.col-4 .album{
			text-decoration: none;
			color: black;
			text-transform: capitalize;
			font-size: 18px;
			padding: 10px;
		}
		.col-4 .album h4:hover{
			background-color: skyblue;
		}
		.col-4 .message{
			text-decoration: none;
			color: black;
			text-transform: capitalize;
			font-size: 18px;
			padding: 10px;
		}
		.col-4 .message h4:hover{
			background-color: skyblue;
		}
		.col-4 .edit{
			text-decoration: none;
			color: blue;
			background-color: grey;
			padding: 6px 15px;
			font-size: 18px;
			margin-top: 100px;
		}
		.col-2 a .fa-camera{
			text-decoration: none;
			color: black;
			font-size: 40px;
			margin-top: 140px;
		}
		@media screen and (max-width: 700px){
			.col-8 .upload_profile{
				width: 100%;
			}
			.col-8 .upload_profile img{
				width: 100%;
			}
		}

	</style>
</head>
<body class="profle_body">

	<div class="container text-center">
		<div class="row">
			<div class="col-12 username">
				<h2> <?php echo $row['username']; ?></h2>
			</div>
		</div>

		<div class="row profile_cover">
			<div class="col-2"></div>
			<div class="col-8">
				<center>
				<form class="upload_profile">
					<img src="profile_image/<?php echo $row['profile_pic']; ?>">
					<!-- <input type="file" name="" class="upload_profile1">
					<button><i class="fa fa-upload"></i></button> -->
				</form>
				</center>
			</div>
			<div class="col-2">
				<a href="update.php">
					<i class="fa fa-camera"></i>
				</a>
			</div>
		</div>
		 <div class="row">
			<div class="col-md-12">
				<p class="bio" style="font-size: 2vw; text-align: center; margin-top: 55px;"><?php echo $row['bio']; ?></p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-4">
			<a href="album.php" class="album">
				<h4>album<br>
					<p ><?php echo $count1 ?></p>
				</h4>
			</a>
			</div>
			<div class="col-4">
			<a href="message.php" class="message">
				<h4>message<br>
					<p><?php echo $count2 ?></p>
				</h4>
			</a>
			</div>
			<div class="col-4">
			<a href="edit.php" class="edit">Edit
			</a>
			</div>
			

		</div>
			
			
		</div>
	</div>

</body>
</html>