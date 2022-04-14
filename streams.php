<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

//   // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: ceologin.php");
// }


 if (isset($_POST['comment11'])) {
	$comment1 = $_POST['comment1'];

	if ($comment1 == "") {
		echo "<script>alert('pls write something na!')</script>";
	}
	else{
		$php = "INSERT INTO `comments`(`comment1`)VALUES('$comment1')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('your comment has been submited')</script>";

		
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


 if (isset($_POST['comment22'])) {
	$comment2 = $_POST['comment2'];

	if ($comment2 == "") {
		echo "<script>alert('pls write something na!')</script>";
	}
	else{
		$php = "INSERT INTO `comments`(`comment2`)VALUES('$comment2')";
		$query = mysqli_query($connect, $php);
		echo "<script>alert('your comment has been submited')</script>";

		
	}
};


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>streams page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
		.top_nav{
	background-color:black;
	text-align: right;
	padding: 1px;
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
				/*height: 3vw;*/
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






    	body{
    		background-color: black;
    	}


		.yt{
			width: 12vw;
			height: 12vw;
			margin-top: 2vw;

		}
		.yt1{
			width: 12vw;
			height: 12vw;
			background-color: red;
			border-radius: 50%;
			position: relative;
			background-color: black;
			/*border: 0.5vw solid gold;*/
			border-bottom: 2px solid gold;
		}

		.yti{
			width: 100%;
			border-radius: 50%;
			height: 100%;
		}
		.ytb{
			width: 100%;
			font-size: 2vw;
			background-color: darkgoldenrod;
			border-radius: 0.5vw;
			color: black;
			font-weight: bolder;
			/*border: 2px solid gold;*/
			/*position: relative;*/
			margin-top: -1vw;
		}




		/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/

		.yt22{
			width: 12vw;
			height: 12vw;
			margin-top: 2vw;
			margin-left: 14vw;
			margin-top: -12vw;


		}
		.yt2{
			width: 12vw;
			height: 12vw;
			background-color: red;
			border-radius: 50%;
			position: relative;
			background-color: black;
			/*border: 0.5vw solid gold;*/
			border-bottom: 2px solid gold;
			margin-left: 14vw;
			margin-top: -12vw;

		}

		.yti{
			width: 100%;
			border-radius: 50%;
			height: 100%;
		}
		.ytb2{
			width: 100%;
			font-size: 2vw;
			background-color: darkgoldenrod;
			border-radius: 0.5vw;
			color: black;
			font-weight: bolder;
			/*border: 2px solid gold;*/
			/*position: relative;*/
			margin-top: -1vw;
			margin-left: 14vw;


		}

/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/


		.yt33{
			width: 12vw;
			height: 12vw;
			margin-top: 2vw;
			margin-left: 24vw;
			margin-top: -12vw;


		}
		.yt3{
			width: 12vw;
			height: 12vw;
			background-color: red;
			border-radius: 50%;
			position: relative;
			background-color: black;
			/*border: 0.5vw solid gold;*/
			border-bottom: 2px solid gold;
			margin-left: 30vw;
			margin-top: -12vw;

		}

		.yti{
			width: 100%;
			border-radius: 50%;
			height: 100%;
		}
		.ytb3{
			width: 100%;
			font-size: 2vw;
			background-color: darkgoldenrod;
			border-radius: 0.5vw;
			color: black;
			font-weight: bolder;
			/*border: 2px solid gold;*/
			/*position: relative;*/
			margin-top: -1vw;
			margin-left: 30vw;


		}

/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/


		.yt44{
			width: 12vw;
			height: 12vw;
			margin-top: 2vw;
			/*margin-left: 12vw;*/
			float: right;
			margin-top: -5vw;


		}
		.yt4{
			width: 12vw;
			height: 12vw;
			background-color: red;
			border-radius: 50%;
			position: relative;
			background-color: black;
			/*border: 0.5vw solid gold;*/
			border-bottom: 2px solid gold;
			/*margin-left: 36vw;*/
			margin-top: -5vw;
			float: right;


		}

		.yti{
			width: 100%;
			border-radius: 50%;
			height: 100%;
		}
		.ytb4{
			width: 100%;
			font-size: 2vw;
			background-color: darkgoldenrod;
			border-radius: 0.5vw;
			color: black;
			font-weight: bolder;
			/*border: 2px solid gold;*/
			/*position: relative;*/
			margin-top: -1vw;
			/*margin-left: 36vw;*/
			float: right;


		}

/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/
.live1{
	width: 100%;
	height: 50vw;
	background-color: black;
	/*padding: 3vw;*/
	border-radius: 20px;
	border-top: 2px solid darkgoldenrod;
	border-left: 2px solid darkgoldenrod;
	border-right: 2px solid darkgoldenrod;


}
video{
	width: 100%;
	/*padding: 3vw;*/
	/*border: 2px solid white;*/
	height: 88%;
	/*margin-top: -3vw;*/
	/*opacity: 20%;*/
	animation-name: vid;
	animation-duration:5s ;
	animation-timing-function: ease-in-out;
	position: relative;
}
.header{
	font-size: 3vw;
	color: black;
	background-color: darkgoldenrod;
	font-weight: bolder;
	border-radius: 5px;

}
.blink{
	width: 2vw;
	height: 2vw;
	border-radius: 50%;
	background-color: green;
	float: left;
	border: 0.2vw solid black;
	margin-top: -4vw;
	margin-left: 2vw;
	animation-name: blink;
	animation-duration: 1s;
	animation-iteration-count: infinite;
	animation-timing-function: ease-in-out;
}
.bck{
	position: absolute;
	color: gold;
	margin-top: 7vw;
	font-family: serif;
	font-weight: bolder;
	font-size: 5vw;
		animation-name: header;
	animation-duration:5s ;
	animation-timing-function: ease-in-out;
	width: 50%;
	margin-left: 20vw;
	text-align: center;
}
@keyframes vid{
	0%{
		opacity: 20%;
	}
	100%{
		opacity: 100%;
		/*display: none;*/
	}
}
@keyframes header{
	0%{
		opacity: 100%;
		display: block;
	}
	100%{
		opacity: 0%;
		display: none;
	}
}
@keyframes blink{
	0%{
		background-color: green;
	}
	100%{
		background-color: transparent;
	}
}
.form-control{
	width: 50%;
	padding: 0.3vw;
	background-color: black;
	border: 2px solid darkgoldenrod;
	color: white;
	font-family: cursive;
}
.commentbox{
	width: 100%;
	height: 69px;
	background-color:black;
	padding: 0.5vw;
	border-left: 2px solid black;
	z-index: 10;
	position: relative;
	overflow: auto;
    white-space: nowrap;

}
.commentshell{
	width: 80%;
	height: 30px;
	background-color: darkgrey;
	border-radius: 10px;
	border: 2px solid black;
	color: black ;
	padding:5px;
	

}
@media screen and(max-width: 700px){
	.comments{
	float: right;
	background-color: darkgoldenrod;
	color: black;
	padding: 0.2vw;
	font-weight: bolder;
	font-size: 2vw;
	font-family: cursive;
	border-radius: 10px;
	margin-bottom: 3vw;
	position: relative;
	margin-top: -4vw;
	display: block;
}

}
.comment{
	/*position: absolute;*/
	margin: 2vw;
	color: white;
	/*background-color: darkgrey;*/
	padding: 1vw;
	border-radius: 10px;
	background-size: 100%;
	font-weight: bolder;
}
.votes{
	width: 100%;
	height: 250px;
	background-color: black;
	/*padding: 3vw;*/
	border-radius: 20px;
	border-top: 2px solid darkgoldenrod;
	border-left: 2px solid darkgoldenrod;
	border-right: 2px solid darkgoldenrod;



}
.open{
	width: 80%;
	background-color: darkgoldenrod;
	color: black;
	font-weight: bolder;
	font-family: cursive;
	border-radius: 20px;
	border: 2px solid gold;
	margin-top: 10vw;
	margin-bottom: 5vw;
}
.close{
	width: 80%;
	background-color: darkgoldenrod;
	color: black;
	font-weight: bolder;
	font-family: cursive;
	border-radius: 20px;
	border: 2px solid gold;
	margin-top: 10vw;
	margin-bottom: 5vw;
	display: none;
}
.lib{
	display: none;
	margin-top: 5vw;
}
button{
	background-color: darkgoldenrod;
	color: black;
	border-radius: 10px;
	font-weight: bold;
	font-size: 1.5vw;
}



		

	</style>
</head>
<body>
	<body>
	<nav class="top_nav" id="top_nav">
		<a href="landingpage.php" class="home"><div style="width:50px ;height: 50px;background-color: gold;margin: 0px;padding: none;">
			<img src="img/neflogo.jpeg" style="width: 100%;opacity: 100%;height: 100%;">
		</div></a>
		<a href="blog.php">BLOG<br><h6><i>trending!!</i></h6></a>
		<a href="mobile.php">mobile<br><h6><i>trending now!</i></h6></a>
		<a href="">CONSOLE<br><h6><i>coming soon</i></h6></a>
		<a href="">STREAMS<br><h6><i>coming soon</i></h6></a>
		<a href="">SHOP<br><h6><i>coming soon</i></h6></a>
		<a href="">ABOUT US<br><h6><i>know us!</i></h6></a>
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
			<div class="yt">
				<div class="yt1">
					<img src="img/coolguy.jpg" class="yti">
				</div>
				<center><button class="ytb"><i>follow</i></button></center>
			</div>

			<div class="yt22">
				<div class="yt2">
					<img src="img/coolguy.jpg" class="yti">
				</div>
				<center><button class="ytb2"><i>follow</i></button></center>
			</div>

			<div class="yt33">
				<div class="yt3">
					<img src="img/coolguy.jpg" class="yti">
				</div>
				<center><button class="ytb3"><i>follow</i></button></center>
			</div>

			<div class="yt44">
				<div class="yt4">
					<img src="img/coolguy.jpg" class="yti">
				</div>
				<center><button class="ytb4"><i>follow</i></button></center>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12 live1">
			<center><h1 class="bck">NIGERIAN'S E SPORTS FEDERATION<br>PRESENTS</h1></center>
			<center><h4 class="header"><i>GAMING LIVE STREAM</i></h4></center><div class="blink"></div>
			<video controls atoplay muted>
				<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `stream` ORDER BY `id` DESC";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?>
				 <source src="<?php echo $row['live1']?>" type="video/mp4" alt="LIVE STREAM HAS ENDED< COMRADE"> 
				
							<?php


            }

			?>
				</video>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8" style="background-color:black;border-bottom: 2px solid black;">
			<div class="form-group">
				<form method="post">
					<input type="text" name="comment1" class="form-control" placeholder="comments">
					<button type="submit" name="comment11">comment</button>
				</form>
			</div>
		</div>
		<div class="col-md-4 commentbox">
								<?php

    $connect = mysqli_connect("localhost","root","","nefdb");

     	$php = "SELECT * FROM `comments`ORDER BY `id` DESC";
		$query = mysqli_query($connect,$php);
		$count = mysqli_num_rows($query);
		if ($count>0) {
		while ($row = mysqli_fetch_assoc($query)) {

	?>

			<div class="card"><i><?php  echo $row['comment1'] ?></i></div>

	

	<?php



			}
		}


					
	?>


		</div>
	</div>
	<style type="text/css">
		.card{
			background-color: #171717;
			color: whitesmoke;
			margin-top: 1vw;
			font-weight: bolder;
			text-align: center;
			padding: 1vw;
			width: 100%;
		}
	</style>
	<div class="row mt-5">
		<div class="col-md-12 live1">
			<center><h1 class="bck">NIGERIAN'S E SPORTS FEDERATION<br>PRESENTS</h1></center>
			<center><h4 class="header"><i>GAMING LIVE STREAM 2</i></h4></center><div class="blink"></div>
			<video controls autplay muted>
				 <?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `stream` ORDER BY `id` DESC";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?>
				 <source src="<?php echo $row['live2']?>" type="video/mp4" alt="LIVE STREAM HAS ENDED< COMRADE"> 
				
							<?php


            }

			?>
				</video>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8" style="background-color:black;border-bottom: 2px solid black;">
			<div class="form-group">
				<form method="post">
					<input type="text" name="comment2" class="form-control" placeholder="comments">
					<button type="submit" name="comment22">comment</button>
				</form>
			</div>
		</div>
		<div class="col-md-4 commentbox">
											<?php

    $connect = mysqli_connect("localhost","root","","nefdb");

     	$php = "SELECT * FROM `comments`ORDER BY `id` DESC";
		$query = mysqli_query($connect,$php);
		$count = mysqli_num_rows($query);
		if ($count>0) {
		while ($row = mysqli_fetch_assoc($query)) {

	?>

			<div class="card"><i><?php  echo $row['comment2'] ?></i></div>
									

	

	<?php



			}
		}


					
	?>
		</div>
	</div>
</div>
<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-4 votes mt-5">
			<center><h4 class="header" style="font-size: 2vw;"><i>AMAZING COMRADES</i></h4></center>
			<video controls auoplay muted style="width: 100%;padding: none;">
				 <source src="mp4/pubg.mp4" type="video/mp4" alt="LIVE STREAM HAS ENDED< COMRADE"> 
				</video>
					<form>
					<label style="color: white;font-weight: bolder;"><i>vote</i></label>
					<input type="checkbox" name="" class="form-control" placeholder="comments" style="width: 20px;height: 20px;float: left;">
				</form>
				<p style="float: right;margin-top: -2vw;color: white;font-weight: bolder;">5</p>
		</div>
		<div class="col-md-4 votes mt-5">
			<center><h4 class="header" style="font-size: 2vw;"><i>AMAZING COMRADES</i></h4></center>
			<video controls autolay muted style="width: 100%;padding: none;">
				 <source src="mp4/pubg.mp4" type="video/mp4" alt="LIVE STREAM HAS ENDED< COMRADE"> 
				</video>
					<form>
					<label style="color: white;font-weight: bolder;"><i>vote</i></label>
					<input type="checkbox" name="" class="form-control" placeholder="comments" style="width: 20px;height: 20px;float: left;">
				</form>
				<p style="float: right;margin-top: -2vw;color: white;font-weight: bolder;">5</p>
		</div>
		<div class="col-md-4 votes mt-5">
			<center><h4 class="header" style="font-size: 2vw;"><i>AMAZING COMRADES</i></h4></center>
			<video controls autolay muted style="width: 100%;padding: none;">
				 <source src="mp4/pubg.mp4" type="video/mp4" alt="LIVE STREAM HAS ENDED< COMRADE"> 
				</video>
					<form>
					<label style="color: white;font-weight: bolder;"><i>vote</i></label>
					<input type="checkbox" name="" class="form-control" placeholder="comments" style="width: 20px;height: 20px;float: left;">
				</form>
				<p style="float: right;margin-top: -2vw;color: white;font-weight: bolder;">5</p>
		</div>
	</div>
</div>









<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<center><button class="open"><i>VIEW GAMEPLAY LIBRARY</i></button></center>
		</div>
	</div>
</div>

<div class="container-fluid mt-10">
	<div class="row">
		<div class="col-md-4 votes mt-5 lib">
			<center><h4 class="header" style="font-size: 2vw;background-color:gold;"><i>gameplay library</i></h4></center>
			<video controls autopay muted style="width: 100%;padding: none;">
				 <source src="mp4/pubg.mp4" type="video/mp4" alt="LIVE STREAM HAS ENDED< COMRADE"> 
		</div>
		<div class="col-md-4 votes mt-5 lib">
			<center><h4 class="header" style="font-size: 2vw;background-color: gold;"><i>gameplay library</i></h4></center>
			<video controls autplay muted style="width: 100%;padding: none;">
				 <source src="mp4/pubg.mp4" type="video/mp4" alt="LIVE STREAM HAS ENDED< COMRADE"> 
				</video>
				
		</div>
		<div class="col-md-4 votes mt-5 lib">
			<center><h4 class="header" style="font-size: 2vw;background-color: gold;"><i>gameplay library</i></h4></center>
			<video controls autolay muted style="width: 100%;padding: none;">
				 <source src="mp4/pubg.mp4" type="video/mp4" alt="LIVE STREAM HAS ENDED< COMRADE"> 
				</video>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<center><button class="close"><i>CLOSE GAMEPLAY LIBRARY</i></button></center>
		</div>
	</div>
</div>










  <script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(function(){
				$(".open").click(function(){
					
					$(".lib").show(200);
					
					$(".close").show(200);
					$(".open").hide(200);


				})
				$(".close").click(function(){
					
					$(".open").show(200);
					
					$(".lib").hide(200);
					$(".close").hide(200);


				})
			})
	</script>


</body>
</html>