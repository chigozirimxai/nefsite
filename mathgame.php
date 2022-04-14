<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: neflogin.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">
	<link rel="stylesheet" type="text/css" href="">
	<title>SUB ROBOT</title>
	<style type="text/css">
		body{
			background-color:black;
			font-family: cursive;
			font-style: comic sans;
			background-image: url(img/harley.jpg);
			/*background-size: 20vw;*/
		}

		form{
			background-color: #5DFFDA;
			padding: 10px;
			border-radius: 10px;
			width: 400px;
			height: 300px;
			background-image: url(img/dice.jpg);
			background-size: cover;
			border: 2px solid red;
			box-shadow: 2px 2px grey;
			opacity: 90%;
		}

		#hiddenNumber{
			border-radius: 20px;
			text-align: center;
			border: none;
			width: 70px;
			height: 50px;
			background-color: black;
			color:black;
			border: 2px solid gold;
			opacity: 80%;
		}
		#number1{
			border-radius: 50%;
			text-align: center;
			border: none;
			width: 50px;
			height: 50px;
			background-color: black;
			color:white;
			border: 2px solid red;
		}

		#number2{
			border-radius: 50%;
			text-align: center;
			border: none;
			width: 50px;
			height: 50px;
			background-color: black;
			color:white;
			border: 2px solid red;
		}

		b{
			font-size: 30px;
			padding: 20px;
		}

		.play{
			padding: 10px;
			background-color: green;
			color: #fff;
			border-radius: 10px;
			height: 40px;j
		}
		h1{
			font-size: 40px;
			color: red;
			text-shadow: 0px 2px gold;
		}
		h2{
			color:darkgoldenrod;
			background-color: #171717;
			font-weight: bolder;
		}
		ol li{
			color: gold;
			background-color: transparent;
			/*border: 2px solid #171717;*/
			text-shadow: 0px 2px solid black;
			font-weight: bolder;
			text-shadow: 2px 2px  black;

		}
		#price{
			display: none;
			color: gold;
		}
		ol{
			background-color: transparent;
			width: 100%;
			padding: 10px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
		<u><h1>SUB-U</h1></u>
		<h2>Rules;</h2>

		<ol  style="width: 350px;">
			<li>Pick a number between 1-20</li>
			<li>Add two numbers to give you that number</li>
			<li>If sum is equal to hidden number, you win</li>
			<li>If sum is not equal to hidden number, you lose</li>
			<li>Reload page if you lose, to play again</li>
		</ol><br><br>

		<form>
			<p id="message">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
							<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `sub` ";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?>
				
						<center><h5 class="h2" id="price"><i><b> <?php echo $row['airtime']?><GOLD></b></i></h5></center>

							<?php


            }

			?>
			</p>
			<!-- <input type="text" name="" id="hiddenNumber"><br><br> -->
			<input type="text" name="" id="number1">
			<b> + </b>
			<input type="text" name="" id="number2"><br><br>
			<a href="mathgame.php"><button onclick="return guessingGame()" class="play">Play</button><br><br></a>

			
		</form>
		<div>
			    <a href="dashbord.php">
				<button class="btn btn-danger ">end game</button>
			    </a>
			</div><br><br><br><br><br>
	</center>



			</div>
		</div>
	</div>
<script type="text/javascript">
      // GENERATING RANDOM NUMBER
	var randomNumber=Math.ceil(Math.random()*20);

	//DISPLAYING RANDOM NUMBER INSIDE HIDDEN NUMBER INPUT
	document.getElementById("hiddenNumber").value=randomNumber;
    
	
	//CONDITIONAL STATEMENTS TO EXECUTE DESIRED PROGRAM
	function guessingGame(){
		var number1=document.getElementById("number1").value;
	    var number2=document.getElementById("number2").value;
	    var answer= parseInt(number1) + parseInt(number2);

		if (number1=="" || number2=="") {
			document.getElementById("message").innerHTML="Must enter both numbers.";
			document.getElementById("message").style.color="red";
			return false;
		}

		else if (isNaN(number1) || isNaN(number2)) {
			document.getElementById("message").innerHTML="Answer must be number only.";
			document.getElementById("message").style.color="red";
			return false;
		}

		else if (answer>20) {
			document.getElementById("message").innerHTML="Answer must not be above 20.";
			document.getElementById("message").style.color="red";
			return false;
		}

		else if (answer!=randomNumber) {
			document.getElementById("message").innerHTML="Hidden number is "+randomNumber+" . You are wrong!";
			document.getElementById("message").style.color="red";
			return false;
		}

		else{
			document.getElementById("message").innerHTML="Hidden number is "+randomNumber+" . You are right! here is your prize";
			document.getElementById("price").style.display="block";

			document.getElementById("message").style.color="gold";
			return false;
		}
	}
	

	
	








</script>
</body>
</html>