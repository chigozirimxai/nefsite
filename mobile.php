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
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>MOBILE</title>
	<link rel="stylesheet" type="text/css" href="mobile.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">

	<style type="text/css">
		


body{
	padding: none;
	margin: 0px;
	/*background-image: url(img/xoxo.jpg);*/
	/*background: url(img/xoxo.jpg);*/
	/*background-size: cover;*/
	/*background-color: black;*/
	background-image: url(img/scorpn2.jpg);
}
/*add a black background color to top nav*/
.top_nav{
	background-color: black;
	text-align: right;
	padding: 7px;
	overflow: hidden;
	position: fixed;
		top: 0;
		width: 100%;
		z-index: 10;
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

.container2{
	background-color: black;
}
.container3{
	background-color: black;
	color: gold;
}
/*.fb{
	color: blue;
	background-color: white;
	width: 40px;
	height: 20px;
	font-size: 50px;
	text-align: center;
	margin-bottom: 10px;
	padding: 10px;
}*/


.background1{
	animation-fill-mode:backwards;
	animation-name: bck1;
	animation-duration: 5s;
	animation-iteration-count: infinite;
	animation-delay: s;
	animation-timing-function:linear;
	
}
@keyframes bck1{
	0%{
	   opacity: 0.0;
	}
	50%{
	  opacity: 0.5;
	}
	100%{
		 opacity: 1.0;
	}
}

.background2{
	animation-name: bck;
	animation-duration: 10s;
	animation-iteration-count:;
	animation-delay: 4s;
	animation-timing-function: linear;
	animation-fill-mode: forwards;
}
@keyframes bck{
	0%{
		opacity: 1;
		
	}
	100%{
		opacity: 0;
	}
}

.background3{
	animation-name: bck;
	animation-duration: 30s;
	animation-iteration-count: infinite;
	animation-delay: 6s;
	animation-timing-function: linear;
	animation-fill-mode: forwards;
}
@keyframes bck{
	0%{
		opacity: 1;
		
	}
	100%{
		opacity: 0;
	}
}

.background4{
	animation-name: bck;
	animation-duration: 60s;
	animation-iteration-count: infinite;
	animation-delay: 8s;
	animation-timing-function: linear;
	animation-fill-mode: forwards;
}
@keyframes bck{
	0%{
		opacity: 1;
		
	}
	100%{
		opacity: 0;
	}
}

.background5{
	animation-name: bck;
	animation-duration: 25s;
	animation-iteration-count: infinite;
	animation-delay: 10s;
	animation-timing-function: linear;
	animation-fill-mode: forwards;
	animation-delay: 10s;
}
@keyframes bck{
	0%{
		opacity: 1;
		
	}
	100%{
		opacity: 0;
	}
}

.background6{
	animation-name: bck;
	animation-duration: 30s;
	animation-iteration-count: infinite;
	animation-timing-function: linear;
	animation-fill-mode: forwards;
	animation-delay: 12s;
}
@keyframes bck{
	0%{
		opacity: 1;
		
	}
	100%{
		opacity: 0;
	}
}

er{
	animation-name: header;
	animation-duration: 5s;
	animation-iteration-count: infinite;
}
@keyframes header{
	100%{
		font-family: serif;
		font-size: 10px;
		color: pink;
		text-shadow: 0px 2px gold;
	}
}

.hiw{
	color: gold;
	text-align: center;
	margin-top: 10px;
	font-weight: bold;
	text-shadow: 0px 0.3vw red;
	padding: 1vw;
	font-size: 3vw;
}
.content{
	color: darkgoldenrod;
	background-color: black;
	opacity: 88%;
	font-size: 20px;
	margin-bottom: 2vw;
	font-family: cursive;
	font-weight: bolder;
	text-align: left;

}

#sec1{
	width: 100%;
	height: 500px;
}
@media screen and (max-width: 700px){
	.content{
		font-size: 10px;
		/*padding: 20px;*/
		/*margin-bottom: 10px;*/
		}

	}

button{
	width: 100px;
    height: 25px;
    position: absolute;
    transform: translate(-50%,-50%);


       
}
@media screen and (max-width: 1300px){
	.content{
		font-size: 25px;
		/*padding: 20px;*/
		/*margin-bottom: 10px;*/
		}

	}

button{
	width: 100px;
    height: 25px;
    position: absolute;
    transform: translate(-50%,-50%);


       
}


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
	background:;
	background-image: url(img/bck7.jpg);
	background-size: cover;
	position: relative;
	font-size: 80%;
	font-size: 3vw;
	border-radius: px;
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
.t{
	float: right;
	margin-right: -10vw;
}






	</style>
</head>
<body style="background-color: black;">
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

			<div class="col-sm-" style="width: 0px;height: 0px;"></div>
			<div class="col-md-12" style="background-color:transparent;width: 100%;height: 100%;margin-top: 0vw;float: left;margin-left: -15px;">
				<img src="img/asphalt1.jpg" style="position:absolute;width: 100%;height: 100%;margn-top: 10px;" class="background6">
				<img src="img/gametable.jpg" style="position:absolute;width: 100%;height: 100%;marin-top: 10px;" class="background5">
				<img src="img/sideline1.jpg" style="position:absolute;width: 100%;height: 100%;magin-top: 10px;" class="background4">
				<img src="img/puubg.jpg" style="position:absolute;width: 100%;height: 100%;margi-top: 10px;" class="background3">
				<img src="img/fifa1.jpg" style="position:absolute;width: 100%;height: 100%;margn-top: 10px;" class="background2">
				<img src="img/bck2.jpg" style="position:absolute;width: 100%;height: 100%;margn-top: 10px;" class="background1">
              <!-- 	<img src="img/t2.png" style="position:absolute;width:50%;height:;margn-top: -10px;z-index:10;margin-left: 48vw;float: right;" class="t"> -->


             <span style="width:%;border-radius: 20px;box-shadow: 2px 5px orange;position:relative;width: 100%;height: 100%;z-index: -10;height: 40vw;" class="header"z> 
              	<!-- <img src="img/t1.png" style="position:absolute;width:50%;height:;margn-top: -10px;z-index: 10;" class=""> -->

			   <h1 style="font-size: 10vw;color: gold;text-shadow: 0px 5px grey;text-align: center;font-family: cursive;font-style: jokerman;z-index: -10;"><i>NIGERIAN</i></h1>
			   <h2 style="font-size: 8vw;color: gold;text-shadow: 0px 5px dimgrey;text-align: center;font-family: cursive;"><i>E-SPORTS</i></h2>
			   <h2 style="font-size: 8vw;color: gold;text-shadow: 0px 5px dimgrey;text-align: center;font-family: cursive;"><i>FEDERATION</i></h2>
			   <h2 style="text-align: center; color:goldenrod;font-size: 4vw;"><u>PROUDLY PRESENTS</u></h2>
			   <h3 style="text-align: center;color: white;font-size: 2vw;">An E-sports gaming platform for all mobile gamers</h3><br><br><br><br><br>
              </span>

              	<!-- <img src="img/t1.png" style="position:relative;width:50%;height:;margn-top: -10px;z-index: 10;" class=""> -->

			   </span>
			</div>
			<div class="col-sm-" style="width: 0px;height: 0px;"></div>
			
		</div>
	</div>

	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="overflow: auto;white-space: nowrap;background-color: #171717">
			<marque>	
				<a href="">
					<div class="meta1">
					<i class="fab fa-facebook-square "></i><br>
					<span class="name"><i>
						PUBG NIGERIA
					</i></span>
					<center><div class="metapic">
						<img src="img/puubg.jpg" class="pic">
					</div></center>
				</div>
				</a>

				<a href="">
					<div class="meta2">
					<i class="fab fa-facebook-square "></i><br>
					<span class="name"><i>
						PUBG NIGERIA
					</i></span>
					<center><div class="metapic">
						<img src="img/fifa1.jpg" class="pic">
					</div></center>
				</div>
				</a>

				<a href="">
					<div class="meta3">
					<i class="fab fa-facebook-square "></i><br>
					<span class="name"><i>
						PUBG NIGERIA
					</i></span>
					<center><div class="metapic">
						<img src="img/fifa1.jpg" class="pic">
					</div></center>
				</div>
				</a>

				<a href="">
					<div class="meta4">
					<i class="fab fa-facebook-square "></i><br>
					<span class="name"><i>
						PUBG NIGERIA
					</i></span>
					<center><div class="metapic">
						<img src="img/fifa1.jpg" class="pic">
					</div></center>
				</div>
				</a>


			</marquee>
			</div>
		</div>
	</div>
	<style type="text/css">
		.meta1{
			text-decoration: none;
			background-color: #121212;
			height:20vw;
			width:20vw;
			text-align: center;
			margin: 2vw;
			border-radius: 20px;
			box-shadow: 0.2vw 0.2vw 0.4vw 0.4vw black;
			margin-left: -1vw;

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
			bottom: 0;
			background-color:black;
			height: 8vw;
			border-radius: 20px;
			padding: 0.5vw;
			/*margin-top: -0.vw;*/
			margin-bottom: -2vw;
		}
		.pic{
			width: 100%;
			height: 100%;
			border-radius: 20px;
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
			
		
  

	<div class="container-fluid">
		<div class="row">

			<div class="col-md-">
			<!-- 	<img src="img/sideline2.jpg" style="width:110px;height: 100%;margin-left: -15px;"> -->
			</div>


			<div class="col-md-6" style="background-color:transparent;">
				<img src="img/dice.jpg" style="position:absolute;width: 95%;height: 95%;margin-top: 10px;border-radius: 20px;border: 2px solid  gold;">

			    <span style="position: relative;">

			    	<div style="background-color: black;width: 90%;margin-top: 10px;margin-left: 25px;border-radius: 10px;opacity: 80%;border: 2px solid gold;box-shadow: 0px 3px black;border-top: none;"><h1 class="hiw"><u>HOW IT WORKS</u></h1></div><br>
			    	<h3 style="text-align: center;color: gold;margin-top: -10px;">PHASE 1</h3><br>
			    	<ul class="content">
			    		<li>Pick the games u play</li>
			    		<li>Check out your games page</li>
			    		<li>Pick a clan or guild whose requirements you fit</li>
			    		<li>Fill the clan's form</li>
			    		<li>Wait a max of 48 working hours for a confirmation</li>
			    	</ul>
			    	
			    </span>
			</div>


			<div class="col-md-6" style="background-color:transparent;">
				<img src="img/dice.jpg" style="position:absolute;width: 95%;height: 95%;margin-top: 10px;border-radius: 20px;border: 2px solid  gold;">

			    <span style="position: relative;">

			    	<div style="background-color: black;width: 90%;margin-top: 10px;margin-left: 25px;border-radius: 10px;opacity: 80%;border: 2px solid gold;box-shadow: 0px 3px black;border-top: none;"><h1 class="hiw"><u>HOW IT WORKS</u></h1></div><br>
			    	<h3 style="text-align: center;color: gold;margin-top: -10px;">PHASE 2</h3><br>
			    	<ul class="content">
			    	    <li>If you are accepted you will be contacted</li>
			    		<li>You will be added to your clan's group chat</li>
			    		<li>Train with your clan members, and invite more peeps to sign up for your clan here on this site.</li>
			    		<li>Remember the more peeps in your clan the lesser each of you have too contribute for a tournament.</li>
			    		<li>Strive to rank your clan in the top three, and win lots of amazing prizes</li>


			    		
			    	</ul>
			    	
			    </span>
			</div>

			<div class="col-md-">
				
			</div>

		</div>

		<div class="con">
		<div class="row">

			<div class="col-md-">
				
			</div>


			<div class="col-md-6" style="background-color:transparent;">
				<img src="img/dice.jpg" style="position:absolute;width: 95%;height: 95%;margin-top: 10px;border-radius: 20px;border: 2px solid  gold;">

			    <span style="position: relative;">

			    	<div style="background-color: black;width: 90%;margin-top: 10px;margin-left: 25px;border-radius: 10px;opacity: 80%;border: 2px solid gold;box-shadow: 0px 3px black;border-top: none;"><h1 class="hiw"><u>HOW IT WORKS</u></h1></div><br>
			    	<h3 style="text-align: center;color: gold;margin-top: -10px;">PHASE 3</h3><br>
			    	<ul class="content">
			    		<li>when a tournament is anounced,inform ur comrades</li>
			    		<li>y'all should contribute to the clan leader sign up your clan</li>
			    		<li>elect the best and available 4 members to represent your clan in every match your clan qualifies for</li>
			    		<li>if your clan wins,the cash prize will be given to your clan leader to share amongst the members, according to how you contributed</li>
			    	</ul>
			    	
			    </span>
			</div>
			

			<div class="col-md-6" style="background-color:transparent;">
				<img src="img/dice.jpg" style="position:absolute;width: 95%;height: 95%;margin-top: 10px;border-radius: 20px;border: 2px solid  gold;">

			    <span style="position: relative;">

			    	<div style="background-color: black;width: 90%;margin-top: 10px;margin-left: 25px;border-radius: 10px;opacity: 80%;border: 2px solid gold;box-shadow: 0px 3px black;border-top: none;"><h1 class="hiw"><u>HOW IT WORKS</u></h1></div><br>
			    	<h3 style="text-align: center;color: gold;margin-top: -10px;">PHASE 4</h3><br>
			    	<ul class="content" style="background-color: black;opacity: 88%;border-radius: 10px;color: darkgoldenrod;">
			    		<li>once a match is ongoing you can place your bets in the betting platform</li>
			    		<li>and watch the live stream of the matches in our streams sections</li>
			    		<li><i style="color: red;">ALL PAYMENTS YOU MAKE ON THIS PLATFORM SHOULD BE TO THE CEO ONLY!!
			    		  ...6040271560<br>FIDELITY BANK,The NEF is no longer responsible for your money if you pay to any other source</i></li>

			    		
			    	</ul>
			    	
			    </span>
			</div>
			<style type="text/css">
				@media screen and (max-width: 700px){
	.content{
		font-size: 16px;
		/*padding: 20px;*/
		/*margin-bottom: 10px;*/
		}

	}
			</style>

			<div class="col-md-">
				
			</div>

		</div><br>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 style="font-size: 6vw;color:white;font-family:serif;font-weight: bolder;background-color: #171717 ;border-radius:;padding: 1vw;margin-top: 1vw;opacity: 100%;width: 100%;border-top: 2px solid gold;text-shadow: 4px 5px black;text-align: center;">SELECT YOUR GAME</h1>
			</div>
		</div>
	</div>

	
	<div class="container-fluid">
		<div class="row">

			

			<div class="col-md-6 mt-4" style="background-color:transparent;border: 0.2vw solid gold;border-radius: 20px;border-top: none;border-right: 0.1vw solid gold;background-image: url(img/bck7.jpg);background-size: cover;">
				

			    <a href=""><img src="img/codm.jpg" style="width:100%;border-radius: 20px;box-shadow: 2px 5px ornge;height: 75%;position:relative;margin-top: 7vw;opacity: 60%;">
				</a>
			</div><br>

			<div class="col-md-6 mt-4" style="background-color: transparent;
			border: 0.2vw solid gold;border-radius: 20px;border-top: none;border-left: 0.1vw solid gold;background-image: url(img/bck7r.jpg);background-size: cover;margin-bottom: vw;">
			<!-- <img src="img/bck3.jpg" style="position: absolute;width: 100%;height: 100%;border-radius: 20px;"> -->
				

			    <a href="pubgm.php"><img src="img/pubgm.jpg" style="width:100%;border-radius: 20px;box-shadow: 2px 5px orage;height: 75%;position:relative;margin-top: 7vw;opacity: 99%;">
				</a>
			</div><br><br>

			

		</div>

		<div class="row">

		


			<div class="col-md-6 mt-4" style="background-color:transparent;border: 0.2vw solid gold;border-radius: 20px;border-top: none;border-right: 0.1vw solid gold;background-image: url(img/bck7.jpg);background-size: cover;">
				

			    <a href=""><img src="img/fifa.jpg" style="width:100%;border-radius: 20px;box-shadow: 2px 5px orane;position:relative;margin-top: 10vw;height: 75%;opacity: 60%;">
				</a>
			</div><br>

			<div class="col-md-6 mt-4" style="background-color:transparent;border: 0.2vw solid gold;border-radius: 20px;border-top: none;border-left: 0.1vw solid gold;background-image: url(img/bck7r.jpg);background-size: cover;margin-top: -1vw;">
				
			    <a href=""><img src="img/freef.jpg" style="width:100%;border-radius: 20px;box-shadow: 2px 5px orane;height: 75%;position:relative;margin-top: 10vw;opacity: 60%;">
				</a>
				
			</div>

			

		</div>
		<div class="row">
				

			<div class="col-md-6 mt-4" style="background-color:transparent;border: 0.2vw solid gold;border-radius: 20px;border-top: none;border-right:0.1vw solid gold;background: linear-gradient(to right,black 50%,150% gold,transparent);background-image: url(img/bck7.jpg);background-size: cover;">
				

			    <a href=""><img src="img/asphalt9.png" style="width:100%;border-radius: 20px;box-shadow: 2px 5px ornge;position:relative;margin-top: 7vw;height: 75%;opacity: 60%;">
				</a>
			</div>

			<div class="col-md-6 mt-4" style="background-color:transparent;border: 0.2vw solid gold;border-radius: 20px;border-top: none;padding: 1vw;border-left:0.1vw solid gold;background-image: url(img/bck7r.jpg);background-size: cover;margin-top: -1vw;">
				
			    <a href=""><img src="img/MK.jpg" style="width:100%;border-radius: 20px;box-shadow: 2px 5px orage;position:relative;margin-top:7vw;height: 75%;opacity: 60%;">
				</a>
				
			</div>
		</div>



		

		
		</div><br><br><br><br><br>

		<!-- 000000000000000000000000000000 FOOTER STARTS HERE 00000000000000000000000000 -->
	    <header></header>
	    	<main></main>
	    	<footer>
	    		<div class="footerbody">
	    			<div>N.E.F</div>
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
	    
	
	
		<button onclick="change()">CLICK HERE</button>
		
	<script type="text/javascript">
		
		function change(){
			document.getElementByid("bd").style("backgroundImage","url(cod1.jpg)");
		}

	</script>


	

	<script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
	<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
	<script type="text/javascript">
	 
	 
      
	</script>
</body>
</html>
