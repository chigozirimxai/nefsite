<?php

 $connect = mysqli_connect("localhost","root","","nefdb");


 if (isset($_POST['send'])) {
	$message = $_POST['message'];

	if ($message == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `chats`(`message`)VALUES('$message')";
		$query = mysqli_query($connect, $php);
		if ($query) {
		echo "<script>alert('Message send')</script>";
		}
		else{
		echo "<script>alert('failed to send Message')</script>";

		}
	}
};


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<title>MESSAGE CHAT</title>

	<style type="text/css">
		

	body{
		background-color: white;
	}



	.top_nav{
	background-color: white;
	/*text-align: right;*/
	padding: 7px;
	/*overflow: hidden;*/
	position: fixed;
	top: 0;
	width: 100%;
	z-index: 10;
	margin-bottom: 10px;
	border-bottom: 2px solid gold;
	padding-left: 15px;
	border-radius: 20px;
	}



	.container{
		border: 2px solid #dedede;
		background-color: #f1f1f1;
		border-radius: 5px;
		padding: 10px;
		margin: 10px 0;
		margin: 0 auto;
		max-width: 800px;
		padding: 0 20px;
		margin-top: 100px;
	}
	.darker{
		border-color: #ccc;
		background-color: #ddd;
		margin-bottom: 120px;
	}
	.container::after{
		content: "";
		clear: both;
		display: table;
	}
	.container img{
		float: left;
		max-width: 60px;
		width: 100%;
		margin-right: 20px;
		border-radius: 50%;
	}
	.container img.right{
		float: right;
		margin-left: 20px;
		margin-right: 0;
		
	}
	.time-right{
		float: right;
		color: #aaa;
	}
	.time-left{
		float: left;
		color: #999;
	}


	.nav{
		background-color: white;
		padding: 15px 15px;
		position: fixed;
		/*position: relative;*/
		width: 100%;
		z-index: 10;
		/*margin-bottom: 10px;*/
		margin-top: 20px;
		border-top: 2px solid gold;
		border-radius: 20px;
		bottom: 0;
	}


	.lev1{
		width: 850px;
		height: 45px;
	}
	.fa-paper-plane{
		color: blue;
		cursor: pointer;
		font-size: 25px;
		width: 35px;
		height: 35px;
		border-radius: 50%;
		/*padding: 10px;*/
	}

	

	</style>
</head>
<body>

	<nav class="top_nav" id="top_nav">
	<h2>Live Chat</h2>
	</nav>


	<?php

    $connect = mysqli_connect("localhost","root","","fundb");

     	$php = "SELECT * FROM `chat1`";
		$query = mysqli_query($connect,$php);
		$count = mysqli_num_rows($query);
		if ($count>0) {
		while ($row = mysqli_fetch_assoc($query)) {

	?>



	<div class="container darker">
		<img src="img/img2.jpg" alt="Avatar" class="right" style="width: 100%;">
		<p><?php echo $row['message'] ?></p>
		<span class="time-left">11:05</span>
	</div>

	<?php



			}
		}


					
	?>




	<footer class="nav">
		<form method="post">
				<input type="text" name="message" placeholder="Message" class="lev1">
				<button type="submit" name="send">
				    <i class="fa fa-paper-plane"></i>
				</button>
		</form>
	</footer>


</body>
</html>