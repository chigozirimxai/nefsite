<?php

// CONNECT PHP FILE TO DATABASE
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


// LOGIN FORM


if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

		// SESSION COMMENCE
	$_SESSION['status'] = False;


	// CHECK FOR EMPTY INPUTS
	
	if ($username=="" || $password==""){
		echo "<script>alert('enter username and password')</script>";
		
	}
	// IF INPUT NOT EMPTY
	else{
		$php= "SELECT * FROM `nefregister` WHERE(`username`='$username' and `password`='$password')";
		$query= mysqli_query($connect,$php);
		$count= mysqli_num_rows($query);

		// EXECUTE CODE IF EMAIL AND PASSWORD IS THE SAME WITH DATABASE

		if ($count>0) {
			$row= mysqli_fetch_assoc($query);
			session_start();
	         $_SESSION['status'] = True;
			header("location: landingpage.php");
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
	<title>nef login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="photobook.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	

	<style type="text/css">
	form{
		/*background-color: black;*/
	}
		
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
	background-size:500px;
	

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
	/*padding: 10px;*/
	margin-top: 200px;
	/*background-color: black;*/
	
	

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
.cover{
	background-color: black;
	height: 550px;
	padding: 3vw;
	border-radius: 20px;
	background-image: url(img/dice.jpg);
	/*background-size:cover;*/

	opacity: 90%;
}
@media screen and (max-width: 100px){
	.cover{
	background-color: black;
	height: 550px;
	padding: 3vw;
	border-radius: 20px;
	background-image: url(img/bckk.jpg);
	background-size:cover;

	opacity: 90%;
}
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


	</style>




</head>
<body style="margin: 0px;padding: 0px;text-decoration: none;" class="login_body">

	
		
		<div class="title">
			<h1 class="name">NEF LOGIN</h1>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<!-- <img src="img/coolguy.jpg" style="position: absolute;width: 100%;"> -->
					<div class="cover">
				<form class="login_form" id="loginform" method="POST">
					<div class="form-group">
					<input type="text" name="username" placeholder="username" class="form-control">
				</div>

				<div class="form-group"  class="form-control">
					<div class="wrapper" class="form-control">
						<input type="password" name="password" placeholder="password" class="pass_input" id="password">
						<i class="fa fa-eye" id="fa-eye" onclick="show_password()"></i>
					</div>
					
				</div>

				<button class="btn btn-primary btn-block" type="login" name="login">LOGIN</button><br>
				<p><a href="resetpassword.php">reset password</a></p>
				<p><a href="nefregister.php" style="float: right;background-color: darkgoldenrod;padding: 0.7vw;text-align: center;font-size: 16px;"><i>register here!</i></a></p>

				

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