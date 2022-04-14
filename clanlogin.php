<?php

// CONNECT PHP FILE TO DATABASE
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

// Testing database conection

// if ($connect) {
// 	echo "connected";

// }
// else{
// 	echo "not connected";
// }

// SUBMIT INPUTS

// LOGIN FORM


if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

		// SESSION COMMENCE
	$_SESSION['status'] = False;

	// CHECK FOR EMPTY INPUTS
	
	if ($email=="" || $password==""){
		echo "enter email and password";
	}
	// IF INPUT NOT EMPTY
	else{
		$php= "SELECT * FROM `clanlogin` WHERE(`email`='$email' and `password`='$password')";
		$query= mysqli_query($connect,$php);
		$count= mysqli_num_rows($query);


		// EXECUTE CODE IF EMAIL AND PASSWORD IS THE SAME WITH DATABASE

		if ($count>0) {
			$row= mysqli_fetch_assoc($query);
			session_start();
	         $_SESSION['status'] = True;
			header("location: clanleaders.php");
		}

		// EXECUTE ELSE STATEMENTS FOR WRONG INPUT
		else{
			echo "<script>alert('incorrect email or password')</script>";
		}
	}
};




?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>clan login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="photobook.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">

	<style type="text/css">
		
		.camera{
	width: 300px;
	height: 300px;
	transform: rotate(5deg);
	float: left;
	margin-left: -10px;
	margin-top: -10px;
	position: absolute;
	border-radius: 50%;

}
.login_body{
	margin: 0px;
	background: linear-gradient(to top right,silver 30%,gold  transparent );
	height: 100vh;
	background-image: url(img/pores.jpg);
	

}

.name{
	text-align: center;
	font-family: cursive;
	font-style: comic sans;
	font-weight: bolder;
	font-size: 50px;
	position: relative;
	color: black;
	text-shadow: 0px 2px gold;
}
.name h1{
	font-size: 80px;
	padding-top: 200px;
	font-family: cursive;
	font-style: comic sans;
	font-weight: bolder;
	text-transform: capitalize;
	margin-top: 200px;

}

.login_form{
	padding: 10px;
	margin-top: 200px;
	
	

}
.login_form input{
	border: 3px solid gold;
	border-radius: 20px;
	padding: 5px;
	background-color: transparent ;
	color: gold;


}
.login_form input::placeholder{
	
	color: gold;


}
.login_form .wrapper{
	border-radius: 20px;
	border: 2px solid skyblue;
	background-color: transparent;

}
.login_form .pass_input{
	border: 0px;
	outline: none;
}
.login_form i{
	float: right;
	font-size: 25px;
	margin-top: 4px;
}
.login_form .btn-primary{
	font-size: 18px;
	font-weight: bold;
	position: relative;

}
.login_form p a{
	text-decoration: none;
	padding: 6px 20px;
	background-color: gold;
	border-radius: 20px;
	color: black;
	font-size: 5vwpx;
	font-weight: bold;
	text-transform: capitalize;
	position: relative;
}
.form-group{
	position: relative;
}
.cover{
	background-color: black;
	height: 550px;
	padding: 3vw;
	border-radius: 20px;
	background-image: url(img/dice.jpg);
	/*background-size:cover;*/

	opacity: 90%;
}

	</style>


</head>
<body style="margin: 0px;padding: 0px;text-decoration: none;" class="login_body">

	
		
		<div class="title">
			<h1 class="name">CLAN LEADERS</h1>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<!-- <img src="img/coolguy.jpg" style="position: absolute;width: 100%;"> -->
					<div class="cover">
				<form class="login_form" id="loginform" method="POST">
					<div class="form-group">
					<input type="email" name="email" placeholder="email" class="form-control">
				</div>

				<div class="form-group"  class="form-control">
					<div class="wrapper" class="form-control">
						<input type="password" name="password" placeholder="password" class="pass_input" id="password">
						<i class="fa fa-eye" id="fa-eye" onclick="show_password()"></i>
					</div>
					
				</div>

				<button class="btn btn-primary btn-block" type="login" name="login">LOGIN</button><br>
				<p><a href="resetpasswordshop.php">reset password</a></p>

				

				</form>
			</div>
				<div class="col-md-3"></div>
			</div>
		</div>







				



<script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>

		<script type="text/javascript">
			
			// JS SHOW AND HIDE PASSWORD
			function show_password(){
				var input=document.getElementById("password");
				if (input.type=="password"){
					input.type="text";
				}
				else{
					input.type="password"
				}
			}


			

		</script>
	

		
</body>
</html>