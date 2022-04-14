<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");

if (isset($_POST['stream1'])) {
	$live1= $_POST['live1'];
	if ($live1=="") {
		echo "<script>alert('insert embedd code')</script>";
	}
	else{
		$php= "UPDATE `stream` SET `live1`='$live1'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('stream has started')</script>";
		}
		else{
			echo "<script>alert('Failed to start stream')</script>";
		}
	}
};
?>
<?php
$connect= mysqli_connect("localhost", "root", "", "nefdb");

if (isset($_POST['stream2'])) {
	$live2= $_POST['live2'];
	if ($live2=="") {
		echo "<script>alert('insert embedd code')</script>";
	}
	else{
		$php= "UPDATE `stream` SET `live2`='$live2'";
		$query= mysqli_query($connect,$php);
		if ($query) {
			echo "<script>alert('stream has started')</script>";
		}
		else{
			echo "<script>alert('Failed to start stream')</script>";
		}
	}
};
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>streamers</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
		body{
			background-color: black;
		}
		h1{
			color: white;
			background-color: #171717;
			border-bottom: 5px solid gold;
			padding: 10px;
			font-size: 7vw;
			text-shadow: 0px 10px black;
			font-family: serif;
			font-weight: bolder;
		}
		h2{
			color: black;
			font-family: cursive;
			background-color: #171717;
			width: 90%;
			padding: 2vw;
			text-shadow: 0px 2px gold;
			border-radius: 10px;
			/*border-bottom: 2px solid white;*/
			font-size: 3vw;

		}
		.form-control{
			width: 80%;
			background-color: black;
			color: gold;
			font-family: cursive;

		}
		.input{
			background-color: #171717;
			padding: 2vw;
			border-radius: 20px;
			height: 320px;

		}
		button{
			background-color:darkgoldenrod ;
			color:black;
			/*text-shadow: 2px 2px black;*/
			font-weight: bold;
			padding: 0.5vw;
			margin: 2vw;
			border-radius: 10px;
			float: left;
			border: 2px solid green;

		}
		.end{
			background-color:darkgoldenrod ;
			color:black;
			/*text-shadow: 2px 2px black;*/
			font-weight: bold;
			padding: 0.5vw;
			/*margin: 2vw;*/
			/*margin-top: -3vw;*/
			border-radius: 10px;
			border: 2px solid red;
			float: right;
		}
		
		del{
			color: white;
		}
		p{
			color: white;
		}
	</style>
</head>
<body>






<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<center><i><h1>STREAMERS</h1></i></center>
			<!-- <center><i><h2>the NEF's YOUTUBERS/STREAMS dashboard...</h2></i></center> -->
		</div>
	</div>
</div>




							

							<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="input ">
				<form method="post">
					<div class="form-group">
						<center><input type="text" name="live1" placeholder="input embedd code(live1)" class="form-control"></center>
						<center><button name="stream1" type="submit"><i>START STREAMING</i></button></center>
						<a href="streamers.php? delete=<?php echo $row['id'] ?>">
						<!-- <center><button class="end" type="submit" name="delete"href="streamers.php? delete=<?php echo $row['id'] ?>"><i>END STREAM</i></button></center> -->
						</a>
						<del>............................................................................................................................................</del>
					</div>
				</form>
				<form method="post">
					<div class="form-group">
						<center><input type="text" name="live2" placeholder="input embedd code(live2)" class="form-control"></center>
						<center><button type="submit" name="stream2"><i>START STREAMING</i></button></center>
						<!-- <center><button class="end"><i>END STREAM</i></button></center> -->
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<p>
				IF YOU'VE MULTI STREAMED BEFORE,UR GOOD TO GO<br>So the deal is to live stream your mobile screen using any suitable live streaming platform that allows multi stream using embedd code.
				copy that code and input it in the appropiate place.
				Then proceed to spectate the match, and commemtate on it.Try to make it as lively as possible,
				as it would determine the amount of subscribers that follow you on youtube..
				people like what the see and hear,so make yourself the best streamer.THANKS  C.E.O<br><br>

				more features will be added here with time though,bear with us

				<a href="streams.php">
				<center><button>WATCH STREAM</button></center>
				</a>
				
			</p>
		</div>
	</div>
</div>


































</body>
</html>

