<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: neflogin.php");
}


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
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	
	<title>NEF BLOG</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
	body{
		background-color: white;

	}



	.top_nav{
	background-color:black;
	text-align: right;
	padding: 7px;
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







	.card{
		padding: 6px;
		background-color: black;
		/*margin: 5px;*/

	}
	.card p{
		font-size: 18px;
		font-family: sans-serif;
		/*border-radius: 20px;*/


	}
	.card img{
		width: 100%;
		/*height: 300px;*/
		border-radius: 20px;
		/*border: 2px solid gold;*/
		float: right;
		/*margin-left: 2vw;*/
	}
	.headline{
		/*display: none;*/
		text-align: center;
		color:black;
		font-weight: bolder;
		font-family: cursive;
		font-stretch: expanded;
		font-size: 3vw;
		background-color: darkgoldenrod;
		border-radius: 10px;
		/*margin-left: 3vw;*/


	}
	button{
		width: 100%;
		background-color: transparent;
		color: gold;
		font-weight: bold;
		margin-left: vw;

	}
	.news{
		display: none;
		color: white;
		font-size: 1px;
		border-left: 1px solid gold;
		border-right: 1px solid gold;
		/*border-radius: 20px ;*/
		padding: 10px;
		/*margin-left: 3vw;*/
		/*background-color: darkred;*/


	}
	.sticky{
		position: fixed;
		top: 0;
		width: 100%;
	}
	.seemore{
		border-radius: 10px;
		border-top: 2px solid gold;
		border-bottom: none;
		outline: none;
		border-left: 2px solid gold;
		border-right: 2px solid gold;

	}
	.seeless{
		border-radius: 10px;
		border-bottom: 2px solid gold;
		border-top: none;
		outline: none;
		border-left: 2px solid gold;
		border-right: 2px solid gold;
		display: none;

	}
	marquee{
		color: gold;
		background-color: black;
		text-shadow: 0px 2px white;
		width: 50vw;
		border-radius: 10px;

	}
	.cube{
		animation-name: cube;
		animation-duration: 1s;
		animation-iteration-count: infinite;
		animation-timing-function: ease-in-out;
	}
	@keyframes cube{
		50%{
			opacity: 1;
		}
		50%{
			opacity: 0;
		}

	}


	/*FOOTER////////////////////////////////////////////////////////////////*/


	*{
	box-sizing: border-box;

}
body{
	display: flex;
	flex-direction: column;
	min-height: 100vh;
}
main{
	flex: 1 0 auto;

}

footer{
	color:gold;
	/*background:#2E2E2E;*/
	background-image: url(img/bck7.jpg);
	background-size: cover;
	position: relative;
	font-size: 80%;
	font-size: 3vw;
	border-radius: 20px;
	border-top: 2px solid gold;
}
.footercopyright{
	width: 100%;
	height: 40px;
	background: silver;
	/*position copyright at d bottom*/

	padding: 2vw;
	position: absolute;
	bottom: 0px;
	left: 0px;


}
.footerbody{
	margin-bottom: 2vw;
	padding: 2vw;

}
.footerbody > div:first-child{
	font-size: 4vw;

}
.footerbody ul{
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	text-align: center;
	font-size: 2vw;

}
.footerbody li > a{
	color: white;
	text-decoration: none;
	margin-bottom: 2vw;
}
.pn:hover{
	text-decoration: none;
	background-color: grey;
}
.copyright{
	font-size: 2vw;
}


/*END OF FOOTER////////////////////////////////////////////////////*/

	.msgh{
	background-color:black\;
	/*text-align: right;*/
	padding: 7px;
	/*overflow: hidden;*/
	position: ;
	top: ;
	width: 50%;
	z-index: ;
	margin-bottom: 10px;
	border-bottom: 2px solid gold;
	padding-left: 15px;
	border-radius: 20px;
	color: white;
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
		border-color:none;
		background-color:darkgoldenrod;
		margin-bottom: 120px;
		height: 10vh;
		float: left;
		color: black;
		position: absolute;
		padding:;
		display: none;
		width:50vw ;


	}
	.container::after{
		content: "";
		clear: both;
		display: table;
	}
	.container img{
		/*float: left;*/
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


	.msg{
		background-color:black;
		padding: 15px 15px;
		position: ;
		/*position: relative;*/
		width: 50%;
		z-index: ;
		/*margin-bottom: 10px;*/
		margin-bottom: -10vh;
	/*	border-top: 2px solid gold;*/
		border-radius: 20px;
		bottom: 0;
		display: none;
	}


	.lev1{
		width: 30vw;
		height: 45px;
		margin-bottom: -5vw;
		border: 2px solid gold;
		border-radius: 10px;
	}
	.fa-paper-plane{
		color: gold;
		cursor: pointer;
		font-size: 25px;
		width: 5vw;
		height: 35px;
		border-radius: 50%;
		/*padding: 10px;*/
	}
	.button{
		width: 10vw;
		background-color: black;
		border: 2px solid gold;
	}
	.chat{
		background-color: black;
		border-radius: 10px;
		color: gold;
		font-family: cursive;
		border: 2px solid gold;
		animation-name: chat;
		animation-duration: 4s;
		animation-iteration-count: infinite;
		animation-timing-function: ease-in-out;
	}
	@keyframes chat{
		50%{
			background-color: black;
			color: gold;
		}
		100%{
			background-color: gold;
			color: black;
			border: 2px solid white;
		}
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
    		/*margin-top: 14.5vw;*/
    		position: absolute;
    		margin-left: -2vw;
    	}
    /*	.main{
    		/*background-color: white;*/
    		width: 98vw;
    		margin-left: -12vw;
    		text-align: center;

    	}*/
    		@media screen and(max-width: 700px){
    		.main{
    			margin-top: -800px;
    		}
    	}

    

	

	</style>
</head>
<body style="background-color: black;padding: none;margin: 0px;">

	

	<body style="background-color: #121212;border-bottom: 2px solid gold;">
	<nav class="top_nav" id="top_nav">
		<a href="landingpage.php" class="home"><div style="width:50px ;height: 50px;background-color: gold;margin: 0px;padding: none;">
			<img src="img/neflogo.jpeg" style="width: 100%;opacity: 100%;height: 100%;">
		</div></a>
		<a href="blog.php">BLOG<br><h6><i>trending!!</i></h6></a>
		<a href="mobile.php">mobile<br><h6><i>trending now!</i></h6></a>
		<a href="">CONSOLE<br><h6><i>coming soon</i></h6></a>
		<a href="streams.php">STREAMS<br><h6><i>coming soon</i></h6></a>
		<a href="shop.php">SHOP<br><h6><i>coming soon</i></h6></a>
		<a href="about.php">ABOUT US<br><h6><i>know us!</i></h6></a>
		<a href="" class="icon" onclick="return toggle_navbar()">
			<i class="fa fa-bars"></i>
		</a>
	</nav><br><br><br><br><br>






	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="height: 600px;">
				<video controls autoplay muted loop>
				 <source src="mp4/intro2.mp4" type="video/mp4"> 
				</video>
				<!-- <img src="img/pubgheader.jpg" style="width: 100%;position: absolute;margin-left:-15px ;"> -->
			<!-- 	<div class="container-fluid">
					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-10" style="background-color: transparent;width: 100%;position: relative;opacity: %;/*margin-bottom: 400px;margin-left: 20px;opacity: 70%;"> -->
							






	<div class="carousel slide" id="carouselexample3" data-ride="carousel" style="width: 100%;margin-left: px;">
		<ol class="carousel-indicators">
			<li data-target=#carouselexample3 data-slide-to="0" class="active"></li>
			<li data-target=#carouselexample3 data-slide-to="1"></li>
			<li data-target=#carouselexample3 data-slide-to="2"></li>
			<li data-target=#carouselexample3 data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner" style="">
			<div class="carousel-item active">
				<img src="img/comrades.jpg" style="width: 100%;border-radius: 20px;opacity: 0%;">
				<div class="carousel-caption">
					<h3 style="color: white;margin-bottom: 25vw;font-size: 4vw;font-family: cursive;color: gold;text-shadow: 0px 2px black;font-weight: bolder;font-display: fallback;border-radius: ;">THE NO.1 NIGERIAN E-SPORTS BLOG</h3>
				</div>
			</div>
			<div class="carousel-item" style="">
				<img src="img/new state.jpg" style="width: 100%;border-radius: 20px;opacity: 0%;">
				<div class="carousel-caption">
					<h3 style="color: white;margin-bottom: 25vw;font-size: 4vw;font-family: cursive;color: gold;text-shadow: 0px 2px black;font-weight: bolder;">REGISTER, PLAY, EARN, BET, HAVE FUN.</h3>
					
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/fifa1.jpg" style="width: 100%;border-radius: 20px;opacity: 0%;">
				<div class="carousel-caption">
					<h3 style="color: white;margin-bottom: 25vw;font-size: 4vw;font-family: cursive;color: gold;text-shadow: 0px 2px black;font-weight: bolder;">JOIN A CLAN NOW TO START EARNING</h3>
					
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/pubg.jpg" style="width: 100%;border-radius: 20px;opacity: 0%;">
				<div class="carousel-caption">
					<h3 style="color: white;margin-bottom: 25vw;font-size: 4vw;font-family: cursive;color: gold;text-shadow: 0px 2px black;font-weight: bolder;"> THE N0.1 INVESTMENT BY <a href="">CODEALIVE</a></h3>
					
				</div>
			</div>
		</div>
	</div>
	<div>




<!-- 						</div>
						<div class="col-sm-1"></div>
					</div>
				</div>
		</div>
	</div>
</div>
 -->






		<!-- NEXT AND PREVIEW ICONS -->
	



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



	<br><center><marquee behavior="" scrollamount="20" scrolldelay="50" direction="left" height=""><u><b><h1>  GAMING, VAWULENCE, E-SPORTS  </h1></b></u></marquee></center><br>

	
		<!-- <div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="white-space: nowrap;overflow: auto;">
						

        <div style="white-space: nowrap;overflow: auto;" class="mdiv"> -->
        	
 <div class="container-fluid" style="overflow: auto;white-space: nowrap;height: 25vw;background-color:;" >
    <div class="row" >
			<div class="col-md-12 connt" >	

			<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `nefregister`";
            $query=mysqli_query($connect,$php);

            while ($row= mysqli_fetch_assoc($query)) {
            	?>
		<div class="card" style="background-color:;height:;">	
					<div class="meta1">
					<i class="fab fa-facebook-square "></i><br>
					<span class="name"><i>
						<?php echo $row['username']?>
					</i></span>
					<center><div class="metapic">
						<p class="pic">
						<?php echo $row['game']?>
						</p>
					</div></center>
					<center><div class="metapic2 card">
						<p class="pic2">
						<?php echo $row['state']?>
						</p>
					</div></center>
				</div>
	</div>

								<?php


            }

			?>
		</div>
		</div>
	</div>


        


	

					
			 <style type="text/css">
		.meta1{
			text-decoration: none;
			background-color: #121212;
			/*height:20vw;*/
			width:100%;
			text-align: center;
			margin: 2vw;
			border-radius: 20px;
			box-shadow: 0.2vw 0.2vw 0.4vw 0.4vw black;
			margin-left: -1vw;
			border: 2px solid darkgoldenrod;

		}
		.connt{
			text-align: center;
		}
		.card{
			/*margin: 2vw;*/
			/*position: absolute;*/
			/*text-align: center;*/
		}

		.fa-facebook-square{
			color: darkgoldenrod;
			margin-top: 2vw;
			font-size: 3vw;
			background-color:black;
			width: 90%;
			border-radius: 10px;
			padding: 1vw;
		}
		.name{
			color:darkgoldenrod ;
			font-size: 2vw;
			margin-top: 2vw;
			font-family: cursive;
			font-weight: bolder;
		}
		.metapic{
			width: 95%;
			/*bottom: 0;*/
			background-color:black;
			height: 8vw;
			border-radius: 20px;
			padding: 0.5vw;
			/*margin-top: -0.vw;*/
			margin-bottom: -2vw;
		}
		.metapic2{
			width: 95%;
			bottom: 0;
			background-color:black;
			height: 8vw;
			border-radius: 10px;
			padding: 0.5vw;
			/*margin-top: -0.vw;*/
			margin-bottom: 2vw;
			/*margin: 1vw;*/
		}
		.pic{
			width: 100%;
			height: 100%;
			border-radius: 20px;
			text-decoration: none;
			font-weight: bolder;
			color: darkgoldenrod;
			font-size: 1vw;
		}
		.pic2{
			width: 100%;
			height: 100%;
			border-radius: 20px;
			text-decoration: none;
			font-weight: bolder;
			color:purple;
			font-size: 1vw;
			padding: 1vw;
		}
		.meta2{
			text-decoration: none;
			background-color: #121212;
			height:20vw;
			width:20vw;
			text-align: center;
			margin: 2vw;
			border-radius: 20px;
			box-shadow: 0.2vw 0.2vw 0.4vw 0.4vw black;
			margin-left: 25vw;
			margin-top: -22vw;

		}
		.meta3{
			text-decoration: none;
			background-color: #121212;
			height:20vw;
			width:20vw;
			text-align: center;
			margin: 2vw;
			border-radius: 20px;
			box-shadow: 0.2vw 0.2vw 0.4vw 0.4vw black;
			margin-left: 50vw;
			margin-top: -22vw;

		}
		.meta4{
			text-decoration: none;
			background-color: #121212;
			height:20vw;
			width:20vw;
			text-align: center;
			margin: 2vw;
			border-radius: 20px;
			box-shadow: 0.2vw 0.2vw 0.4vw 0.4vw black;
			margin-left: 75vw;
			margin-top: -22vw;

		}
		
	</style>
			
		
  
	<div class="container-fluid mt-5 main" style="z-index:;">
		<div class="row">


			<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `nefblog` ORDER BY `id` DESC";
            $query=mysqli_query($connect,$php);

            while ($row= mysqli_fetch_array($query)) {
            	?>

            	<div class="col-md-6">
            		<div class="card">
            			<p style="font-family: cursive;font-stretch: expanded;" class="headline"> <?php  echo $row['headline'] ?></p>
            				<img src=" news_image/<?php echo $row['image']?>">
            				<button class="seemore">see all news</button>
            			<p class="news" style="font-size: 12px;background-color:#171717;"> <?php  echo $row['news'] ?><i><div style="color: gold;"><?php
            				$t = time();
            				echo(date("y-m-d",$t));
            			      ?></div></i> <br>

            			</p>

            				<button class="seeless">close all news</button>

            		</div>
            	</div>
            	<?php


            }

			?>
		</div><br><br>
		<div class="row">
			<div class="col-md-6">
				<a href="forum.php">
				<button class="chat">GAMERS CONNECT</button>

				</a>
			</div>
		</div>
	</div><br><br>



<!-- <nav class="msgh" id="top_nav">
	<h2>COMMENTS</h2>
	</nav>
<div class="comments">

	<?php

    $connect = mysqli_connect("localhost","root","","nefdb");

     	$php = "SELECT * FROM `chats`";
		$query = mysqli_query($connect,$php);
		$count = mysqli_num_rows($query);
		if ($count>0) {
		while ($row = mysqli_fetch_assoc($query)) {

	?>



	<div class="container darker">
		<img src="img/img2.jpg" alt="Avatar" class="right" style="width: 100%;">
		<p><?php echo $row['message'] ?></p>
		<span class="time-left">11:05</span>
	</div><br><br><br><br>

	<?php



			}
		}


					
	?>




	<br><br><br><span class="msg">
		<form method="post">
				<input type="text" name="message" placeholder="Message" class="lev1">
				<button type="submit" name="send" class="button">
				    <i class="fa fa-paper-plane"></i>
				</button>
		</form>
	</span><br>


</div>


 -->








	  <script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
		

		$(function(){
				$(".seemore").click(function(){
					
					$(".nd").show(200);
					
					$(".news").show();
					$(".seeless").show(200);
					$(".seemore").hide(200);


				})


				$(".msgh").click(function(){
					
					$(".darker").show(200);
					
					$(".msg").show();
					// $(".darker").hide(200);
					// $(".msg").hide(200);


				})
				// SHOW LOGIN FORM AND SIGN IN BUTTON
				$(".seeless").click(function(){
					$(".nd").hide(200);
					$(".news").hide(200);
					$(".seemore").show();
					$(".seeless").hide();
				
				})
			})

		// $(function(){
				
					
		// 			$(".cube").show(200);
					
		// 			$(".cube1").show(400);
		// 			$(".cube").hide(600);
		// 			$(".cube1").hide(800);


		// 		})
	</script>
	




<div class="container-fluid" style="margin-top: 10vw;">
		<div class="row">
			<div class="col-md-12" >
				<!-- 000000000000000000000000000000 FOOTER STARTS HERE 00000000000000000000000000 -->
	    <header></header>
	    	<main></main>
	    	<footer>
	    		<div class="footerbody">
	    			<div>
	    				<a href="landingpage.php" class="home"><div style="width:7vw ;height: 7vw;background-color: gold;margin: 0px;padding: none;border-radius: 50%;border: 2px solid red;">
			<img src="img/neflogo.jpeg" style="width: 100%;opacity: 100%;height: 100%;border-radius: 50%;">
		</div></a>
	    			</div>
	    			<div>
	    				<p>lorem ipsum dolor sit amet</p>
	    				<ul>
	    					<li><a href="">about</a></li>
	    					<li><a href="">contact</a></li>
	    					<li><a href="">Terms & Conditions</a></li>
	    					<li><a href="">Privacy Policy</a></li>
	    					<li><a href="">lalal</a></li>
	    				</ul>
	    			</div>
                     <div class="copyright">
                        <i>This federation is a registered trademark of all our META partner groups<br>
                        	and Isaac.A  Investments, and in no way should the system, and format of the federation be pirated or copied without permission from <a href="">THE CEO</a></i>
                     	
                     </div>
	    		</div>
	    	</footer>

	    	<!-- 00000000000000000000000000000 FOOTER ENDS HERE 000000000000000000000000000000000 -->
	    
			</div>
		</div>
	</div>
</body>
</html>