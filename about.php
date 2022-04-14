<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>about us</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<style type="text/css">
	.top_nav{
	background-color: black;
	text-align: right;
	padding: 1px;
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









body{
	background-color: black;
}
			.head{
			color: white;
			background-color: #171717;
			border-bottom: 5px solid gold;
			padding: 10px;
			font-size: 7vw;
			text-shadow: 0px 10px black;
			font-family: serif;
			font-weight: bolder;
		}
		.origin{
			width: 20vw;
			float: left;
			height: 20vw;
			border-radius: 50%;
			background-color: ;
			padding: ;
		}
		.opic{
			width: 20vw;
			height: 20vw;
			border-radius: 50%;
			/*padding: 10px;*/
			margin-right: px;
			border-radius: 20px;
			border-right: 2px solid white;
			margin-right:3 vw;

		}
		p{
			color: whitesmoke;
			font-family: cursive;
			font-weight: bold;
			margin: 10px;
		}
		h2{
			background-color: #171717;
			color: darkgoldenrod;
			font-weight: bolder;
			font-family: serif;
			text-shadow: 0px 2px black;

		}
		h3{
			background-color: #171717;
			color: darkgoldenrod;
			font-family: cursive;
			font-weight: bolder;
			font-size:5vw;
			text-shadow: 0px 5px black;
		}
		span{
			text-decoration: none;
			font-size: 20px;
			font-family: cursive;
			font-weight: bolder;
			color: white;
		}
		i{
			color:gold;
			font-size: 20px;
		}

	</style>
</head>
<body>
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
	
		<center><h2 class="head"><b>ABOUT THE SYSTEM</b></h2></center>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<center><h2>ORIGIN <i class="fa fa-scroll"></i></h2></center>
					<div class="origin">
						<img src="img/me.jpg" class="opic">
						</div>
						<p>
								It is with great joy that the CODEALIVE launches the fruit of its first project, the NEF.The NEF as u can see is an E-sports federation,that offers multiple content and is versatile enough,to make provide a gamer with all the perfect opportunities he/her needs to earn.This project was initiated by the CODEALIVE team, in the year 2021,and has finally reached its launch stage,We however cannot say that it is fully finished as it is always prone to updates, so that the NEF will always meet up to the standards and demands of its evergrowing gamers ppulation.The startup wasn't an easy one, without enough sponsors and a team,you can guess that it was an uphill task for a person to undertake.Regardless i had the best partners,that helped me debug the code,Cyber security Analyst that helped chack for vunerabilities.And best of all i had goos friends who were willing to help but due to their lack of skill at that time couldn't.Now the NEF is in its growing stage and looks up to GOD as always to expand it and make it a name to reckon with in the E-sports feild. Our team is growing, support has never been less,and up til this point, i can at least say a very big thank you to all the gamers here, and most of all to GOD<br> The CEO: Anuriam Isaac...
							</p>
				</div>
				<div class="row">
					<div class="col-md-12">
					<center><h2>GOAL<i class="fab fa-bullseye"></i></h2></center>
					<div class="origin">
						<!-- <img src="img/me.jpg" class="opic"> -->
						</div>
						<p>
							The goal is to introduce the NEF into the web3 world and back the entire system up with blockchain technology, this way the players can earn crypto, pay, store, invest with the crypto.The world is moving fast.We would not be left behind
							</p>
				</div>
				</div>

			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
					<div class="col-md-12 text-center">
						<center><h3>CONTACT ME <i class="fa fa-message"></i></h3></center>
						<a href="">  
						<center><span>FACEBOOK <i class="fab fa-facebook-square"></i></span></center>
						<center><span>MOBILE:07042820926 <i class="fab fa-telephone"></i></span></center>
						<center><span>TWITTER <i class="fab fa-twitter"></i></span></center>
						<center><span>WHATSAPP <i class="fab fa-whatsapp"></i></span></center>
						<!-- <center><span><i class="fa fa-facebook-square"></i></span></center>
						<center><span>FACEBOOK<i class="fa fa-facebook-square"></i></span></center> -->


						 </a>
					</div>
				</div>
		</div>


</body>
</html>