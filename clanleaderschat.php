<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: clanlogin.php");
}



 if (isset($_POST['send'])) {
	$message = $_POST['message'];

	if ($message == "") {
		echo "<script>alert('Fill fields!')</script>";
	}
	else{
		$php = "INSERT INTO `clanchat`(`message`)VALUES('$message')";
		$query = mysqli_query($connect, $php);
		
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
	<title>clan chat</title>

	<style type="text/css">
		

	body{
		background-color: black;
		background-image: url(img/wall11.jpg);
		background-size: 300px;
	}



	.top_nav{
	background-color: black;
	color: gold;
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
	border-radius: 10px;
	}


	.top_nav2{
	padding: 7px;
	position: fixed;
	top: 0;
	width: 100%;
	z-index: 10;
	margin-top: 33px;
	padding-left: 10px;
	}



	.container{
		border: 2px solid #dedede;
		background-color: #f1f1f1;
		border-radius: 5px;
		padding: 10px;
		margin: 10px 0;
		margin: 0 auto;
		max-width: 800px;
		padding: 5px 20px;
		margin-top: 100px;
	}
	.darker{
		border-color:gold;
		/*background-color: #ddd;*/
		margin-bottom: 120px;
		margin-top: -100px;
		background-color: dimgray;
		border-bottom: 2px solid gold;
		border-radius: 20px;
		width: 80%;
	}
	.admin{
		border-color:black;
		/*background-color: #ddd;*/
		margin-bottom: 120px;
		margin-top: -100px;
		background-color: gold;
		border-bottom: 2px solid gold;
		border-radius: 20px;
		width: 80%;
		border: 2px solid white;
	}
	p{
		color: black;
		font-family: cursive;
	}
	.container::after{
		content: "";
		clear: both;
		display: table;
		padding-bottom: 0px;
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
		background-color: black;
		padding: 15px 15px;
		position: fixed;
		/*position: relative;*/
		width: 100%;
		z-index: 10;
		/*margin-bottom: 10px;*/
		margin-top: 20px;
		border-top: 2px solid gold;
		border-radius: 10px;
		bottom: 0;
	}


	.lev1{
		width: 50vw;
		height: 45px;
		border-radius: 20px;
		background-color: black;
		border: 2px solid gold;
		color: gold;
	}
	button{
		background-color: black;
		margin-left: 28vw;
		border-radius: 10px;
		border: 2px solid gold;
	}
	.fa-paper-plane{
		color: gold;
		cursor: pointer;
		font-size: 25px;
		width: 35px;
		height: 35px;
		border-radius: 50%;
		padding-top: 5px;

	}
	.live{
		margin-top: 10px;
	}
	div .shape{
		width: 10px;
		height: 10px;
		/*background-color: green;*/
		border-radius: 50%;
		/*position: fixed;*/
		margin-left: 320px;
		animation-name: circle;
		animation-duration: 4s;
		animation-iteration-count: infinite;

	}
	@keyframes circle{
	50%{
		background-color: green;
	}
	100%{
		background-color: red;
	}
}
.return{
	float: right;
	width: ;
	\background-color: black;
	color: gold;
	border: 2px solid red;
	margin-top: -6vw;
}
.card{
	margin-bottom: 20vw;
}

	

	</style>
</head>
<body>

	<div class="top_nav">
	<h2 class="live">CLAN LEADERS</h2><h6><i><u>only on commentX</u></i></h6>
	<a href="clanleaders.php"><button class="return">return</button></a>
	</div>


	<div class="top_nav2">
		<p class="shape"></p>
	</div>

	

	<?php

    $connect = mysqli_connect("localhost","root","","nefdb");

     	$php = "SELECT * FROM `clanchat` ORDER BY `id` DESC";
		$query = mysqli_query($connect,$php);
		$count = mysqli_num_rows($query);
		if ($count>0) {
		while ($row = mysqli_fetch_assoc($query)) {

	?>




	<br><br><br><br><br><br><br><br><br><br><div class="container darker card">
		<img src="img/neflogo.jpeg" alt="Avatar" class="right" style="width: 100%;">
		<p focus><?php echo $row['message'] ?></p>
		<!-- <span class="time-left">11:05</span> -->
	</div>




	<?php




			}
		}


					
	?>






	



	<footer class="nav">
	<!-- <a href=""><button class="show" style="color: green;border: 2px solid white;background-color: black;font-weight: bold;">show admin message</button></a><br> -->

		<form method="post">
				<input type="text" name="message" placeholder="Message" class="lev1">
				<button type="submit" name="send">
				    <i class="fa fa-paper-plane"></i>
				</button>
		</form>
	</footer>









	  <script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
<script type="text/javascript">
	$(function(){
				$(".hide").click(function(){
					
					$(".admin").hide(200);
					
					

				})
				$(".show").click(function(){
					
					$(".admin").show(200);
					
				


				})
			})


</script>
</body>
</html>
