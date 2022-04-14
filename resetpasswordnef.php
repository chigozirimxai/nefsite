<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb" );
// if ($connect) {
// 	echo "<script>alert('connected')</script>";

// }
// else{
// 	echo "<script>alert('not connected')</script>";
// }

if (isset($_POST['reset'])) {
	$username= $_POST['username'];
	$password1= $_POST['password1'];
	$password2= $_POST['password2'];

		// SESSION COMMENCE
	$_SESSION['status'] = False;


	if ($username=="" || $password1=="" || $password2==""){
		echo "<script>alert('enter all feilds')</script>";
	}

	else if ($password1 != $password2) {
		echo "<script>alert('passwords do not match')</script>";
	}
	else{
		$php= "SELECT * FROM `nefregister` WHERE(`username`='$username')";
		$query= mysqli_query($connect,$php);
		$count= mysqli_num_rows($query);

		if($count>0) {
			$php= "UPDATE `nefregister` SET `password`='$password1' WHERE(`username`='$username')";
			$query= mysqli_query($connect,$php);
			if ($query) {
				echo "<script>alert('Your password has changed')</script>";
			}
		}
		else{
				echo "<script>alert('Unregistered email')</script>";
	    }
	}

};













?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALL PLAYERS RESET PASSWORD</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="photobook.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">
	<style type="text/css">
		.col-md-6 p a{
			text-decoration: none;
			font-size: 18px;
			color: black;
			border-radius: 20px;
			background-color: steelblue;
			padding: 10px;
			margin: x;
			margin-top: 10px;
			box-shadow: 0px 2px black;
		}


		.resetpassword_body{
	margin: 0px;
	/*background: linear-gradient(to top right,red 50%, transparent );*/
	height: 100vh;
	background-color: black;
}
.resetpassword_form{
	padding: 10px;
	
	position: relative;
}
.resetpassword_form input{
	width: 95%;
	height: 35px;
	border-width: 0px 0px 2px;
	border-color: skyblue;
	outline: none;
	background-color: transparent;
}
.resetpassword_form button{
	text-transform: capitalize;
	font-size: 18px;
	font-weight: bold;
}
.resetpassword_form input::placeholder{
	color: gold;
	text-align: center;
	font-weight: bolder;
}
.shape{
	width: 380px;
	height: 380px;
	border-radius: 50%;
	background: linear-gradient(to top right, gold 50%, silver 0);
	float: right;
	position: relative;
	margin-top: -380px;
	margin-right: 160px;
	z-index: -10;
	animation-name: shape;
	animation-duration: 1s;
	animation-timing-function: linear;
	animation-iteration-count: infinite;

}
@keyframes shape{
	0%{
		transform: rotate(360deg);
	}

}
.name{
	color: black;
	text-shadow: 0px 2px gold;
	font-family: cursive;
	position: relative;
	text-align: center;
	font-family: 7vw;
}

	</style>
</head>
<body class="resetpassword_body">

	<div class="container-fluid">
		<div class="title">
		</div>
	</div>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="title">
			
		</div>
				<img src="img/coolguy.jpg" style="position: absolute;width: 100%;">
				<form class="resetpassword_form" method="post">
						<div class="title">
			<h1 class="name">RESET PASSWORD</h1>
		</div>
					<div class="form-group">
						<input type="text" name="username" placeholder="enter username" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="password1" placeholder="enter new password" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="password2" placeholder="repeat password" class="form-control">
					</div>
					<button class="btn btn-primary btn-block" type="submit" name="reset">RESET</button><br><br>
					
					<p><a href="neflogin.php">login</a></p>
				</form><br>
			</div>
			<div class="col-md-3"></div>

		</div>
	</div>

	<!-- <div class="shape"></div> -->
	

</body>
</html>