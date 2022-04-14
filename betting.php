
	<?php

 $connect = mysqli_connect("localhost","root","","nefdb");
 
 // DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: neflogin.php");
}


//  DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
 if (isset($_POST['bet1'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$prediction = $_POST['prediction'];
	$acct_name = $_POST['acct_name'];
	$acct_num = $_POST['acct_num'];
	$bank = $_POST['bank'];


	if ($name == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `odd1a`(`name`,`email`,`prediction`,`acct_name`,`acct_num`,`bank`)VALUES('$name','$email','$prediction','$acct_name','$acct_num','$bank')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('UR BET HAS BEEN PLACED!!')</script>";

		
	}

};
?>

	<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
 if (isset($_POST['bet2'])) {
	$name2 = $_POST['name2'];
	$email2 = $_POST['email2'];
	$prediction2 = $_POST['prediction2'];
	$acct_name2 = $_POST['acct_name2'];
	$acct_num2 = $_POST['acct_num2'];
	$bank2 = $_POST['bank2'];


	if ($name2 == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `odd1b`(`name2`,`email2`,`prediction2`,`acct_name2`,`acct_num2`,`bank2`)VALUES('$name2','$email2','$prediction2','$acct_name2','$acct_num2','$bank2')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('UR BET HAS BEEN PLACED!!')</script>";

		
	}

};
?>

	<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
 if (isset($_POST['bet3'])) {
	$name3 = $_POST['name3'];
	$email3 = $_POST['email3'];
	$prediction3 = $_POST['prediction3'];
	$acct_name3 = $_POST['acct_name3'];
	$acct_num3 = $_POST['acct_num3'];
	$bank3 = $_POST['bank3'];


	if ($name3 == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `odd1c`(`name3`,`email3`,`prediction3`,`acct_name3`,`acct_num3`,`bank3`)VALUES('$name3','$email3','$prediction3','$acct_name3','$acct_num3','$bank3')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('UR BET HAS BEEN PLACED!!')</script>";

		
	}

};
?>

	<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
 if (isset($_POST['bet4'])) {
	$name4 = $_POST['name4'];
	$email4 = $_POST['email4'];
	$prediction4 = $_POST['prediction4'];
	$acct_name4 = $_POST['acct_name4'];
	$acct_num4 = $_POST['acct_num4'];
	$bank4 = $_POST['bank4'];


	if ($name4 == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `odd2a`(`name4`,`email4`,`prediction4`,`acct_name4`,`acct_num4`,`bank4`)VALUES('$name4','$email4','$prediction4','$acct_name4','$acct_num4','$bank4')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('UR BET HAS BEEN PLACED!!')</script>";

		
	}

};
?>

	<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
 if (isset($_POST['bet5'])) {
	$name5 = $_POST['name5'];
	$email5 = $_POST['email5'];
	$prediction5 = $_POST['prediction5'];
	$acct_name5 = $_POST['acct_name5'];
	$acct_num5 = $_POST['acct_num5'];
	$bank5 = $_POST['bank5'];


	if ($name5 == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `odd2b`(`name5`,`email5`,`prediction5`,`acct_name5`,`acct_num5`,`bank5`)VALUES('$name5','$email5','$prediction5','$acct_name5','$acct_num5','$bank5')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('UR BET HAS BEEN PLACED!!')</script>";

		
	}

};
?>

	<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
 if (isset($_POST['bet6'])) {
	$name6 = $_POST['name6'];
	$email6 = $_POST['email6'];
	$prediction6 = $_POST['prediction6'];
	$acct_name6 = $_POST['acct_name6'];
	$acct_num6 = $_POST['acct_num6'];
	$bank6 = $_POST['bank6'];


	if ($name6 == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `odd2c`(`name6`,`email6`,`prediction6`,`acct_name6`,`acct_num6`,`bank6`)VALUES('$name6','$email6','$prediction6','$acct_name6','$acct_num6','$bank6')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('UR BET HAS BEEN PLACED!!')</script>";

		
	}

};
?>

	<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
 if (isset($_POST['bet7'])) {
	$name7 = $_POST['name7'];
	$email7 = $_POST['email7'];
	$prediction7 = $_POST['prediction7'];
	$acct_name7 = $_POST['acct_name7'];
	$acct_num7 = $_POST['acct_num7'];
	$bank7 = $_POST['bank7'];


	if ($name7 == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `odd3a`(`name7`,`email7`,`prediction7`,`acct_name7`,`acct_num7`,`bank7`)VALUES('$name7','$email7','$prediction7','$acct_name7','$acct_num7','$bank7')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('UR BET HAS BEEN PLACED!!')</script>";

		
	}

};
?>

	<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
 if (isset($_POST['bet8'])) {
	$name8 = $_POST['name8'];
	$email8 = $_POST['email8'];
	$prediction8 = $_POST['prediction8'];
	$acct_name8 = $_POST['acct_name8'];
	$acct_num8 = $_POST['acct_num8'];
	$bank8 = $_POST['bank8'];


	if ($name8 == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `odd3b`(`name8`,`email8`,`prediction8`,`acct_name8`,`acct_num8`,`bank8`)VALUES('$name8','$email8','$prediction8','$acct_name8','$acct_num8','$bank8')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('UR BET HAS BEEN PLACED!!')</script>";

		
	}

};
?>

	<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
 if (isset($_POST['bet9'])) {
	$name9 = $_POST['name9'];
	$email9 = $_POST['email9'];
	$prediction9 = $_POST['prediction9'];
	$acct_name9 = $_POST['acct_name9'];
	$acct_num9 = $_POST['acct_num9'];
	$bank9= $_POST['bank9'];


	if ($name9 == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `odd3c`(`name9`,`email9`,`prediction9`,`acct_name9`,`acct_num9`,`bank9`)VALUES('$name9','$email9','$prediction9','$acct_name9','$acct_num9','$bank9')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('UR BET HAS BEEN PLACED!!')</script>";

		
	}

};
?>

<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
 if (isset($_POST['tdmbet'])) {
	$winner = $_POST['winner'];
	$mvp = $_POST['mvp'];
	$score = $_POST['score'];
	$bank = $_POST['bank'];
	$acct_num = $_POST['acct_num'];
	$acct_name= $_POST['acct_name'];
	$email= $_POST['email'];



	if ($bank == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `tdmbet`(`winner`,`mvp`,`score`,`bank`,`acct_num`,`acct_name`,`email`)VALUES('$winner','$mvp','$score','$bank','$acct_num','$acct_name','$email')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('UR BET HAS BEEN PLACED!!')</script>";

		
	}

};
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>betting page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="pubg.css">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<style type="text/css">
		.bri{
			width: 100%;
			/*padding: 2vw;*/
		}
		.brh{
			padding: 2vw;
		}
		h1{
			/*height: 100%;*/
		}
		.br{
			color: #171717;
			background-color: black;
			position: relative;
			margin-top: -48.2vw;
			height: 10vw;
			font-family: cursive;
			width: 80%;
			font-size: 5vw;
			color: white;
			text-shadow: 2px 0px pink;
			font-weight: bolder;
			border-radius: 10px;
		}
		.b{
			font-size: 7vw;
			color: purple;
			/*margin-bottom: 3vw;*/
			font-family: serif;

		}
		.r{
			font-size: 7vw;
			color: purple;
			/*margin-bottom: 3vw;*/
			font-family: serif;


		}
		.brn{
			color: darkgoldenrod;
			background-color: black;
			position: relative;
			padding: 0.5vw;
			font-size: 4vw;
			border-top: 1px solid white;
			border-bottom: 1px solid white;
			margin-top: 7vw;

		}
		.brodd{
			position: relative;
			background-color: darkgoldenrod;
			width: 30vw;
			color: black;
			font-weight: bolder;
			font-size: 3vw;
			border-radius: 15px;
			outline: none;
			border: 0px;
			border-top: 0.2vw solid black;
			/*box-shadow: 0px 2px grey;*/
			font-family: cursive;
			margin-top: 22vw;

		}
		.br2o{
			width: 80vw;
			font-size: 2vw;
			font-weight: bolder;
			background-color: darkgoldenrod;
			color: black;
			border-radius: 20px;
			display: none;

		}
		.cbr2o{
			width: 80vw;
			font-size: 2.2vw;
			font-weight: bolder;
			background-color: darkgoldenrod;
			color: black;
			border-radius: 20px;
			display: none;

		}
		.b12oa{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;

		}
		.b12ob{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;

		}
		.b12oc{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;

		}
		.b12od{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;
		}
		form{
			background-color: #171717;
			border-radius: 10px;
			padding: 2vw;
			/*position: relative;*/
			/*margin-top: -2vw;*/
			/*z-index: -10;*/

		}
		.form-control{
			width: 80%;
			background-color: black;
			border: 2px solid darkgoldenrod;
			color: gold;
			font-family: cursive;
		}
		.bo2a{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			/*position: relative;*/
			margin-top: 6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}
		.bo2b{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: -6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}.bo2c{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: 3vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}.bo2d{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: -6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}
		/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/
























		.Abr2o{
			width: 80vw;
			font-size: 2vw;
			font-weight: bolder;
			background-color: darkgoldenrod;
			color: black;
			border-radius: 20px;
			display: none;
			margin-top: 4vw;

		}
		.Acbr2o{
			width: 80vw;
			font-size: 2.2vw;
			font-weight: bolder;
			background-color: darkgoldenrod;
			color: black;
			border-radius: 20px;
			display: none;
			margin-top: 3vw;


		}
		.Ab12oa{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;

		}
		.Ab12ob{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;

		}
		.Ab12oc{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;

		}
		.Ab12od{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;
		}
		
		.Aform-control{
			width: 80%;
			background-color: black;
			border: 2px solid darkgoldenrod;
			color: gold;
			font-family: cursive;
		}
		.Abo2a{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: -6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}
		.Abo2b{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: -6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}.Abo2c{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: -6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}.Abo2d{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: -6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}
		/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/


			































.BAbr2o{
			width: 80vw;
			font-size: 2vw;
			font-weight: bolder;
			background-color: darkgoldenrod;
			color: black;
			border-radius: 20px;
			display: none;
			margin-top: -0.3vw;

		}
		@media screen and(max-width: 700px){
			.BAbr2o{
			/*width: 80vw;
			font-size: 2vw;
			font-weight: bolder;
			background-color: darkgoldenrod;
			color: black;
			border-radius: 20px;
			display: none;*/
			margin-bottom: 10px;

		}
		}
		.BAcbr2o{
			width: 80vw;
			font-size: 2.2vw;
			font-weight: bolder;
			background-color: darkgoldenrod;
			color: black;
			border-radius: 20px;
			display: none;
			margin-top: 1vw;
			

		}
		.BAb12oa{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;

		}
		.BAb12ob{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;

		}
		.BAb12oc{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;

		}
		.BAb12od{
			width: 90%;
			background-color: black;
			color:darkgoldenrod;
			font-weight: bolder;
			font-size: 2.2vw;
			border-radius: 5px;
			/*position: absolute;*/
			z-index: 10;
			margin-top: 2vw;
			font-family: cursive;
			display: none;
		}
		
		.BAform-control{
			width: 80%;
			background-color: black;
			border: 2px solid darkgoldenrod;
			color: gold;
			font-family: cursive;
		}
		.BAbo2a{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: -6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}
		.BAbo2b{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: -6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}.BAbo2c{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: -6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}.BAbo2d{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: -6vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
		}
		button{
			margin-top: 5vw;
		}
		/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/
		.tdm{
			background-image: url(img/coolguy.jpg);
		}





	</style>
</head>
<body>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="brh">
					<img src="img/br.jpg" class="bri">
					<center><h1 class="br"><span class="b">B</span><i>ATTLE</i> <span class="r">R</span><i>OYALES</i></h1></center>
					<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `br` ORDER BY `id` DESC";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?>
				
						<center><h2 class="brn"><i><b><?php echo $row['br']?><GOLD></b></i></h2></center>

							<?php


            }

			?>
			<center><button class="brodd"><i>SEE ALL ODDS</i></button></center>
			<center><label style="background-color: #171717;"><i><h5>Here it is adviced you bet on one probability under each odd,BET on all the ODDS and predictions with one payment at your own risk,as if one of your predictions isn't true, you lose your entire BET</h5></i></label></center>

			<center><label style="background-color: #171717;"><i><h5 style="color: red;">
				PLEASE WRITE UR PREDICTIONS IN ALL SMALL LETTERS WITH NO SPACING AT ALL OR ELSE THE SORTING ALGORITHM WONT PICK UR BET IF IT'S CORRECT...THE NEF WONT BE RESPONSIBLE FOR ANY LOST BET IF YOU FAIL TO HEED!!
			</h5></i></label></center>
				</div>
			</div>
		</div>
	
		<div class="row">
			<div class="col-md-12">
				<center><button class="br2o"><i>1.3 ODDS</i></button></center>
				<center><button class="cbr2o"><i>CLOSE</i></button></center>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<center><button class="b12oa">who will win?..</button></center>

				<form class="form1br" style="display: none;" method="post">

					<div class="form-group mt-3">
						<center><input type="text" name="name" placeholder="what is your username?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="email" placeholder="email" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="prediction" placeholder="what is your prediction?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_name" placeholder="acct_name" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_num" placeholder="acct_num" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="bank" placeholder="bank name" class="form-control"></center>
					</div>
				
						<div>
							<center><button class="bo2a mt-1" style="display: none;" name="bet1" type="submit" ><i>BET</i></button></center>
					</div>
				</form>

					<!-- <center><button class="bo2a mt-1" style="display: none;cursor: pointer;" name="bet" type="submit" ><i>BET</i></button></center> -->

			</div>
			<div class="col-md-4">
				<center><button class="b12ob">2nd Place..</button></center>
				<form class="form2br" style="display: none;" method="post">
					<div class="form-group mt-3">
						<center><input type="text" name="name2" placeholder="what is your username?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="email2" placeholder="email" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="prediction2" placeholder="what is your prediction?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_name2" placeholder="acct_name" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_num2" placeholder="acct_num" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="bank2" placeholder="bank name" class="form-control"></center>
					</div>
					<div>
						<center><button class="bo2b mt-1" style="display: none;" type="submit" name="bet2"><i>BET</i></button></center>
					</div>
				</form>
					
			</div>
			<div class="col-md-4">
				<center><button class="b12oc">Highest kill..</button></center>
				<form class="form3br" style="display: none;" method="post">
					<div class="form-group mt-3">
						<center><input type="text" name="name3" placeholder="what is your username?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="email3" placeholder="email" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="prediction3" placeholder="what is your prediction?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_name3" placeholder="acct_name" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_num3" placeholder="acct_num" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="bank3" placeholder="bank name" class="form-control"></center>
					</div>
					<div>
							<center><button class="bo2c mt-1" style="display: none;" type="submit" name="bet3"><i>BET</i></button></center>
					</div>
				</form>
				
			</div>
		</div>

		<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx/ -->























		<div class="row">
			<div class="col-md-12">
				<center><button class="Abr2o"><i>1.5 ODDS</i></button></center>
				<center><button class="Acbr2o"><i>CLOSE</i></button></center>
			</div>
		</div>
	</div>
	<div class="row">
			<div class="col-md-4">
				<center><button class="Ab12oa">who will win?..</button></center>
				<form class="Aform1br" style="display: none;" method="post">
					<div class="form-group mt-3">
						<center><input type="text" name="name4" placeholder="what is your username?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="email4" placeholder="email" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="prediction4" placeholder="what is your prediction?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_name4" placeholder="acct_name" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_num4" placeholder="acct_num" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="bank4" placeholder="bank name" class="form-control"></center>
					</div>
					<div>
						<center><button class="Abo2a mt-1" style="display: none;" type="submit" name="bet4"><i>BET</i></button></center>
					</div>
				</form>
					

			</div>
			<div class="col-md-4">
				<center><button class="Ab12ob">2nd Place..</button></center>
				<form class="Aform2br" style="display: none;" method="post">
					<div class="form-group mt-3">
						<center><input type="text" name="name5" placeholder="what is your username?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="email5" placeholder="email" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="prediction5" placeholder="what is your prediction?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_name5" placeholder="acct_name" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_num5" placeholder="acct_num" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="bank5" placeholder="bank name" class="form-control"></center>
					</div>
					<div>
						<center><button class="Abo2b mt-1" style="display: none;" type="submit" name="bet5"><i>BET</i></button></center>
					</div>
				</form>
					
			</div>
			<div class="col-md-4">
				<center><button class="Ab12oc">Highest kill..</button></center>
				<form class="Aform3br" style="display: none;" method="post">
					<div class="form-group mt-3">
						<center><input type="text" name="name6" placeholder="what is your username?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="email6" placeholder="email" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="prediction6" placeholder="what is your prediction?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_name6" placeholder="acct_name" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_num6" placeholder="acct_num" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="bank6" placeholder="bank name" class="form-control"></center>
					</div>
					<div>
						<center><button class="Abo2c mt-1" style="display: none;" type="submit" name="bet6"><i>BET</i></button></center>
					</div>
				</form>
					
			</div>
		</div>
		<hr>






























		<div class="row">
			<div class="col-md-12">
				<center><button class="BAbr2o"><i>2.00 ODDS</i></button></center>
				<center><button class="BAcbr2o"><i>CLOSE</i></button></center>
			</div>
		</div>
	</div>
	<div class="row">
			<div class="col-md-4">
				<center><button class="BAb12oa">who will win?..</button></center>
				<form class="BAform1br" style="display: none;" method="post">
					<div class="form-group mt-3">
						<center><input type="text" name="name7" placeholder="what is your username?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="email7" placeholder="email" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="prediction7" placeholder="what is your prediction?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_name7" placeholder="acct_name" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_num7" placeholder="acct_num" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="bank7" placeholder="bank name" class="form-control"></center>
					</div>
					<div>
						<center><button class="BAbo2a mt-1" style="display: none;" type="submit" name="bet7"><i>BET</i></button></center>
					</div>
				</form>
					

			</div>
			<div class="col-md-4">
				<center><button class="BAb12ob">2nd Place..</button></center>
				<form class="BAform2br" style="display: none;" method="post">
					<div class="form-group mt-3">
						<center><input type="text" name="name8" placeholder="what is your username?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="email8" placeholder="email" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="prediction8" placeholder="what is your prediction?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_name8" placeholder="acct_name" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_num8" placeholder="acct_num" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="bank8" placeholder="bank name" class="form-control"></center>
					</div>
					<div>
						<center><button class="BAbo2b mt-1" style="display: none;" type="submit" name="bet8"><i>BET</i></button></center>
					</div>
				</form>
					
			</div>
			<div class="col-md-4">
				<center><button class="BAb12oc">Highest kill..</button></center>
				<form class="BAform3br" style="display: none;" method="post">
					<div class="form-group mt-3">
						<center><input type="text" name="name9" placeholder="what is your username?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="email9" placeholder="email" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="prediction9" placeholder="what is your prediction?" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_name9" placeholder="acct_name" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="acct_num9" placeholder="acct_num" class="form-control"></center>
					</div>
					<div class="form-group  mt-1">
						<center><input type="text" name="bank9" placeholder="bank name" class="form-control"></center>
					</div>
					<div>
						<center><button class="BAbo2c mt-1" style="display: none;" type="submit" name="bet9"><i>BET</i></button></center>
					</div>
				</form>
					
			</div>
		</div>
		<style type="text/css">
			.tdm{
			background-image: url(img/scorpion2.jpg);
		}
		.match1{
			background-color:#171717;
			padding: 2vw;
			border-radius: 10px;

		}
		label{
			text-decoration: none;
			color: gold;
			font-family: serif;
			font-weight: bolder;
			background-color: black;
			padding: 5px;
			font-size: 2.3vw;
			border-radius: 10px;
		}
		center h5{
			color: darkgoldenrod;
			font-family: cursive;
			font-weight: bolder;
			background-color: black;
			padding: 2vw;
		}
		.tdmb{
			background-color: black;
			color: darkgoldenrod;
			font-size: 2vw;
			width: 50%;
			font-weight: bolder;
			font-family: cursive;
			position: relative;
			margin-top: vw;
			margin-bottom: 3vw;
			border-radius: 10px;
			padding: 1vw;
			display: none;
		}
		.betd{
			display: none;
		}
		.bet{
			width: 80%;
			background-color: black;
			color: darkgoldenrod;
			font-weight: bolder;
			border-radius: 10px;
			padding: 1vw;
			font-size: ;
		}
		</style>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
						<center><h2 class="brn"><i><b>TDM MATCHES<GOLD></b></i></h2></center>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" class="tdm" style="background-image: url(img/dice.jpg);background-size: covr;">

					  <?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');
// 			$php= "SELECT * FROM `tdm`";
// $query= mysqli_query($connect,$php);
// $count= mysqli_num_rows($query);

// if ($count>0) {
// 	$row= mysqli_fetch_assoc($query);
// }

            $php= "SELECT * FROM `tdm`";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?>

            	<div class="match1">
            		<center><h5>MATCH1</h5></center>
            	 <a href="">
            	 	<label style="float: left;"><i>team A<i></label>
            	 	<label style="float: right;"><i>team B<i></label><br>
			    		<img src="tdm_image/<?php echo $row['slot1']?>" style="position: relative;width: 14vw;margin-left: 20px;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;" class="clanslide1">

				<img src="tdm_image/<?php echo $row['slot2']?>" style="position: relative;width: 14vw;float: right;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;margin-right: ;" class="clanslide2"><br>
			    </a>
			</div><br>


            	<div class="match1">
            		<center><h5>MATCH2</h5></center>
				<a href="">
					            	 	<label style="float: left;"><i>team A<i></label>
            	 	<label style="float: right;"><i>team B<i></label><br>
					<img src="tdm_image/<?php echo $row['slot3']?>" style="position: relative;width: 14vw;margin-left: 20px;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;" class="clanslide3">
				<img src="tdm_image/<?php echo $row['slot4']?>" style="position: relative;width: 14vw;float: right;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;" class="clanslide4"><br>

				</a>
			</div><br>

			            	<div class="match1">
            		<center><h5>MATCH3</h5></center>
				<a href="">

					            	 	<label style="float: left;"><i>team A<i></label>
            	 	<label style="float: right;"><i>team B<i></label><br>
					<img src="tdm_image/<?php echo $row['slot5']?>" style="position: relative;width: 14vw;margin-left: 20px;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;" class="clanslide5">
				<img src="tdm_image/<?php echo $row['slot6']?>" style="position: relative;width: 14vw;float: right;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;" class="clanslide6"><br>

				</a>
				
			</div>
 	<center><button class="bet">BET ON TDM MATCHES</button></center>

			<center><div class="betd">
					<form method="post">
						<div class="form-group">
							<label><i>Which match are you betting on?</i></label>
							<select class="form-control">
								<option> </option>
								<option>MATCH 1</option>
								<option>MATCH 2</option>
								<option>MATCH 3</option>
							</select>
						</div>
						<div class="form-group">
							<label><i><h5>It is advised you predict for only one of the odds and place ur bet on it, if you predict on all 3 and one fails you,you lose your entire bet!!</h5></i></label>
							<label><i>1.2 odds..</i></label>
							<input type="text" name="winner" placeholder="which team will win?" class="form-control">
						</div>
						<div class="form-group">
							<label><i>1.25 odds..</i></label>
							<input type="text" name="mvp" placeholder="Who is the MVP" class="form-control">
						</div>
						<div class="form-group">
							<label><i>1.3 odds..</i></label>
							<input type="text" name="score" placeholder="predict the exact score" class="form-control">
						</div>
						<hr>
						<div class="form-group">
							<input type="text" name="bank" placeholder="YOUR BANK NAME" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" name="acct_num" placeholder="YOUR ACCT NUMBER" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" name="acct_name" placeholder="YOUR ACCT NAME" class="form-control">
						</div>
						<div class="form-group">
							<input type="email" name="email" placeholder="EMAIL" class="form-control">
						</div>
						<center><button class="tdmb" type="submit" name="tdmbet">PLACE BET</button></center>
					</form>
				</center></div>


            	
            	<?php

}

			?>
			
				</div>
			</div>
		</div>








































































































	  <script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
		
		$(function(){

			$(".brodd").click(function(){
				$(".br2o").show(300)
				$(".br3o").show(300)

			})
			$(".br2o").click(function(){
					
					$(".cbr2o").show(200);
					
					$(".b12oa").show(200);
					$(".b12ob").show(200);
					$(".b12oc").show(200);
					$(".b12od").show(200);
					$(".br2o").hide(200);


				})
			$(".b12oa").click(function(){
					
					$(".form1br").show(200);
					$(".bo2a").show(200);
					// $(".b12oa").hide(200);


				})
				// $(".bo2a").click(function(){
					
				// 	$(".form1br").hide(200);
				// 	$(".bo2a").hide(200);
				// 	// $(".b12oa").show(200);


				// })
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX	


			$(".brodd").click(function(){
				$(".br2o").show(300)
			})
			$(".br2o").click(function(){
					
					$(".cbr2o").show(200);
					
					$(".b12oa").show(200);
					$(".b12ob").show(200);
					$(".b12oc").show(200);
					$(".b12od").show(200);
					$(".br2o").hide(200);


				})

			$(".cbr2o").click(function(){
					
					$(".cbr2o").hide(200);
					
					$(".b12oa").hide(200);
					$(".b12ob").hide(200);
					$(".b12oc").hide(200);
					$(".b12od").hide(200);
					$(".br2o").show(200);


				})
			
			$(".b12ob").click(function(){
					
					$(".form2br").show(200);
					$(".bo2b").show(200);
					// $(".b12oa").hide(200);


				})
				$(".bo2b").click(function(){
					
					$(".form2br").hide(200);
					$(".bo2b").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX


$(".b12oc").click(function(){
					
					$(".form3br").show(200);
					$(".bo2c").show(200);
					// $(".b12oa").hide(200);


				})
				$(".bo2c").click(function(){
					
					$(".form3br").hide(200);
					$(".bo2c").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX			


$(".Ab12od").click(function(){
					
					$(".form4br").show(200);
					$(".bo2d").show(200);
					// $(".b12oa").hide(200);


				})
				$(".Abo2d").click(function(){
					
					$(".form4br").hide(200);
					$(".bo2d").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX		
// VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV


$(".bet").click(function(){
					
					$(".betd").show(200);
					$(".tdmb").show(200);
					$(".bet").hide(200);


				})
				$(".tdmb").click(function(){
					
					$(".betd").hide(200);
					$(".tdmb").hide(200);
					$(".bet").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX		
// VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV

			























			$(".Abr2o").click(function(){
					
					$(".Acbr2o").show(200);
					
					$(".Ab12oa").show(200);
					$(".Ab12ob").show(200);
					$(".Ab12oc").show(200);
					$(".Ab12od").show(200);
					$(".Abr2o").hide(200);


				})
			$(".Ab12oa").click(function(){
					
					$(".Aform1br").show(200);
					$(".Abo2a").show(200);
					// $(".b12oa").hide(200);


				})
				$(".Abo2a").click(function(){
					
					$(".Aform1br").hide(200);
					$(".Abo2a").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX	


			$(".brodd").click(function(){
				$(".Abr2o").show(300)
			})
			$(".Abr2o").click(function(){
					
					$(".Acbr2o").show(200);
					
					$(".Ab12oa").show(200);
					$(".Ab12ob").show(200);
					$(".Ab12oc").show(200);
					$(".Ab12od").show(200);
					$(".Abr2o").hide(200);


				})

			$(".Acbr2o").click(function(){
					
					$(".Acbr2o").hide(200);
					
					$(".Ab12oa").hide(200);
					$(".Ab12ob").hide(200);
					$(".Ab12oc").hide(200);
					$(".Ab12od").hide(200);
					$(".Abr2o").show(200);


				})
			
			$(".Ab12ob").click(function(){
					
					$(".Aform2br").show(200);
					$(".Abo2b").show(200);
					// $(".b12oa").hide(200);


				})
				$(".Abo2b").click(function(){
					
					$(".Aform2br").hide(200);
					$(".Abo2b").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX


$(".Ab12oc").click(function(){
					
					$(".Aform3br").show(200);
					$(".Abo2c").show(200);
					// $(".b12oa").hide(200);


				})
				$(".Abo2c").click(function(){
					
					$(".Aform3br").hide(200);
					$(".Abo2c").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX			


$(".b12od").click(function(){
					
					$(".Aform4br").show(200);
					$(".Abo2d").show(200);
					// $(".b12oa").hide(200);


				})
				$(".bo2d").click(function(){
					
					$(".form4br").hide(200);
					$(".bo2d").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX		
// VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV























$(".BAbr2o").click(function(){
					
					$(".BAcbr2o").show(200);
					
					$(".BAb12oa").show(200);
					$(".BAb12ob").show(200);
					$(".BAb12oc").show(200);
					$(".BAb12od").show(200);
					$(".BAbr2o").hide(200);


				})
			$(".BAb12oa").click(function(){
					
					$(".BAform1br").show(200);
					$(".BAbo2a").show(200);
					// $(".b12oa").hide(200);


				})
				$(".BAbo2a").click(function(){
					
					$(".BAform1br").hide(200);
					$(".BAbo2a").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX	


			$(".brodd").click(function(){
				$(".BAbr2o").show(300)
			})
			$(".BAbr2o").click(function(){
					
					$(".BAcbr2o").show(200);
					
					$(".BAb12oa").show(200);
					$(".BAb12ob").show(200);
					$(".BAb12oc").show(200);
					$(".BAb12od").show(200);
					$(".BAbr2o").hide(200);


				})

			$(".BAcbr2o").click(function(){
					
					$(".BAcbr2o").hide(200);
					
					$(".BAb12oa").hide(200);
					$(".BAb12ob").hide(200);
					$(".BAb12oc").hide(200);
					$(".BAb12od").hide(200);
					$(".BAbr2o").show(200);


				})
			
			$(".BAb12ob").click(function(){
					
					$(".BAform2br").show(200);
					$(".BAbo2b").show(200);
					// $(".b12oa").hide(200);


				})
				$(".BAbo2b").click(function(){
					
					$(".BAform2br").hide(200);
					$(".BAbo2b").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX


$(".BAb12oc").click(function(){
					
					$(".BAform3br").show(200);
					$(".BAbo2c").show(200);
					// $(".b12oa").hide(200);


				})
				$(".BAbo2c").click(function(){
					
					$(".BAform3br").hide(200);
					$(".BAbo2c").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX			


$(".Bb12od").click(function(){
					
					$(".BAform4br").show(200);
					$(".BAbo2d").show(200);
					// $(".b12oa").hide(200);


				})
				$(".Bbo2d").click(function(){
					
					$(".Bform4br").hide(200);
					$(".Bbo2d").hide(200);
					// $(".b12oa").show(200);


				})
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX		
// VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV


		});

	</script>
</body>
</html>