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
	<meta charset="utf-8">
	<title>contests</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="pubg.css">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<style type="text/css">
body{
	/*padding-top: 0.3vw;*/
}
	.top_nav{
	background-color: black;
	text-align: right;
	padding: px;
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
    	.head{
    		background-color: transparent;
    		opacity: 70%;
    		height: 500px;
    	}
    	.h1{
    		color: gold;
    		font-size: 8vw;
    		font-weight: bolder;

    	}
    	.pm{
    		float: left;
    		text-shadow: 0px 3px black;
    	}
    	.h2{
    		color: white;
    		font-size: 5vw;
    		/*font-weight: bold;*/
    		position: relative;
    		font-family: cursive;
    		text-shadow: 0px 2px red;
    	}
    	.con{
    		color: red;
    		text-shadow: 0px 2px black;
    		font-family: ;
    	}
    	video{
    		width: 95%;
    		position: absolute;
    		/*height: 50vh;*/
    	}
    	audio{
    		display: none;
    	}
    	.bck1{
    		width: 100%;
    		/*display: none;*/
    		margin-top: 14.5vw;
    		position: absolute;
    		margin-left: -2vw;
    	}
    	.b1{
		background-color: red;
		/*margin-left: 2vw;*/
		padding: 1vw;
		width: 100%;
		/*position: relative;*/
		border-radius: 1vw;
		border: 0.2vw solid darkgoldenrod;
		color: darkgoldenrod;
		font-family: cursive;
		font-weight: bolder;
		font-size: 2vw;
		display: none;

	}
	.b2{
		background-color: red;
		/*margin-left: 2vw;*/
		padding: 1vw;
		width: 100%;
		/*position: absolute;*/
		/*margin-top: 35vw;*/
		border-radius: 1vw;
		border: 0.2vw solid silver;
		color: silver;
		font-family: cursive;
		font-weight: bolder;
		font-size: 2vw;
		display: none;

	}
	.b3{
		background-color: red;
		/*margin-left: 50vw;*/
		padding: 1vw;
		width: 100%;
		/*position: absolute;*/
		/*margin-top: 23vw;*/
		border-radius: 1vw;
		border: 0.2vw solid silver;
		color: silver;
		font-family: cursive;
		font-weight: bolder;
		font-size: 2vw;
		display: none;

		
	}
	.b4{
		background-color: red;
		/*margin-left: 35vw;*/
		padding: 1vw;
		width: 100%;
		/*position: absolute;*/
		/*margin-top: 35vw;*/
		border-radius:1vw;
		border: 0.2vw solid silver;
		color: silver;
		font-family: cursive;
		font-weight: bolder;
		font-size: 2vw;
		display: none;

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
		<div class="col-md-12" style="height: 600px;">
				<video controls autoplay muted>
				 <source src="mp4/pubg.mp4" type="video/mp4"> 
				</video>
				<!-- <img src="img/pubgheader.jpg" style="width: 100%;position: absolute;margin-left:-15px ;"> -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-10" style="background-color: transparent;width: 100%;position: relative;opacity: %;/*margin-bottom: 400px;margin-left: 20px;opacity: 70%;">
							<img src="img/pubgH.png" style="width: 100%;">
								<h3 style="font-size: 3vw;color: darkred;text-shadow: 0px 2px white;"><i>WELCOME!! To the realm of the strong, Contests and conquests, CHOKE THE WEAK!!!</i></h3>	
								<img src="img/clant5.jpg" style="width:5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-bottom: 10vw;">
								<img src="img/clant1.jpg" style="width: 5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-top: 1vw;">
								<img src="img/clant5.jpg" style="width:5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-bottom: 10vw;">
								<img src="img/clant1.jpg" style="width: 5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-top: 1vw;">f
						</div>
						<div class="col-sm-1"></div>
					</div>
				</div>
		</div>
	</div>
</div><br><br><br>

<style type="text/css">
@media screen and (max-width: 700px){
.c2{
	margin-top: -80vw;
}
	
	    	
    		
}
    	

	@media screen and(max-width: 1300px){
		.c2{
	margin-top: -990vw;
	position: relative;
}

	}
		

</style>
	
<div class="container-fluid c2">	
	<div class="row" style="margin-top:2vw;">
		<div class="col-md-3 mt-3 ">
		<button class="seemore" style="width: 100%;background-color: black;border-bottom:none;color: red;font-family: cursive;font-size: 2vw;border-radius: 1vw;outline: none;border-top: 2px solid gold">BOOK MATCH</button>
		<button class="btn btn-primary btn-block b1 ">BRONZE</button>
		</div>
		<div class="col-md-3 mt-3">
		<button class="btn btn-primary btn-block b2">BRONZE</button>
		</div>
		<div class="col-md-3 mt-3">
		<button class="btn btn-primary btn-block b3">BRONZE</button>
		</div>
		<div class="col-md-3 mt-3">
		<button class="btn btn-primary btn-block b4">BRONZE</button>
		<button class="seeless" style="width: 100%;background-color: black;border-bottom: 2px solid gold;color: red;font-family: cursive;font-size: 2vw;border-radius: 1vw;outline: none;border-top: none;display: none;"> CLOSE</button>

		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div>
				<form style=" position: relative;">
					<center><h1>BRONZE</h1></center>
					<center><h6>Comrade you are WEAK!!</h></center>

					<div>
						<input type="text" name="" placeholder="username" class="form-control">
					</div><br>
					<div>
						<input type="text" name="" placeholder="username" class="form-control">
					</div><br>
					<div>
						<input type="text" name="" placeholder="username" class="form-control">
					</div><br>
				</form>

				<!-- <form style=" position: relative;margin-top: -19vw;">
					<center><h1>BRONZE</h1></center>
					<center><h6>Comrade you are WEAK!!</h></center>

					<div>
						<input type="text" name="" placeholder="username" class="form-control">
					</div><br>
					<div>
						<input type="text" name="" placeholder="username" class="form-control">
					</div><br>
					<div>
						<input type="text" name="" placeholder="username" class="form-control">
					</div><br>
				</form> -->
			</div>
		</div>
		<div class="col-md-4"> </div>
	</div>
</div>














<div class="container">
	<div class="row">
		<div class="col-md-12">
			<audio controls autoplay >
				<source src="mp3/stalling.mp3" type="">
			</audio>
			
		</div>
	</div>
</div>






    <script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
<script type="text/javascript">
	    		$(function(){
				$(".seemore").click(function(){
					
					$(".b1").show(500);
					
					$(".b2").show();
					$(".b3").show(500);
					$(".b4").show(500);
					$(".seemore").hide();
					$(".seeless").show();




				})
				// SHOW LOGIN FORM AND SIGN IN BUTTON
				$(".seeless").click(function(){
					$(".b1").hide(500);
					$(".b2").hide(500);
					$(".b3").hide();
					$(".b4").hide();
					$(".seeless").hide();
					$(".seemore").show();



				
				})



				$(".seemore2").click(function(){
					
					$(".clanhrf").show(500);
					
					$(".clanbrf").show();
					$(".seeless2").show(500);
					$(".seemore2").hide(500);


				})
			
			})

	    	</script>
</body>
</html>