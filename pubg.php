<?php

 $connect = mysqli_connect("localhost","root","","nefdb");

 // DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: neflogin.php");
}


?>
<html>
<head>
	<meta charset="utf-8">
	<title>PUBG PAGE</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="pubg.css">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<style type="text/css">
		.top_nav{
	background-color: black;
	text-align: right;
	padding:none;
	overflow: hidden;
}
body{
	padding-right: -2vw;
	/*padding: 10vw;*/
	/*margin: 2vw;*/
	/*background-image: url(img/pores.jpg);*/
}

.seemore1{
	background-color:transparent;
	border-bottom: 2px solid red;
	border-top: 0px;
	font-family: cursive;
	font-weight: bold;
	padding: 0.1vw;
	border-radius: 10px;
	width: 100%;
	float: left;
	display: non;
	opacity: 80%;
	color: gold;

}
.seeless1{
	background-color:transparent;
	border-bottom: 2px solid red;
	border-top: 0px;
	font-family: cursive;
	font-weight: bold;
	padding: 0.1vw;
	border-radius: 10px;
	width: 100%;
	float: left;
	display: none;
	opacity: 80%;
	color: gold;

}

.seemore2{
	background-color:transparent;
	border-bottom: 2px solid red;
	border-top: 0px;
	font-family: cursive;
	font-weight: bold;
	padding: 0.1vw;
	border-radius: 10px;
	width: 100%;
	float: left;
	display: non;
	opacity: 80%;
	color: gold;

}
.seeless2{
	background-color:transparent;
	border-bottom: 2px solid red;
	border-top: 0px;
	font-family: cursive;
	font-weight: bold;
	padding: 0.1vw;
	border-radius: 10px;
	width: 100%;
	float: left;
	display: non;
	opacity: 80%;
	color: gold;

}


body{
	background-color: black;
	

}
.carousel-inner{
	height: 500px;
}
/*.nav{
	text-decoration: none;
	padding: 10px;
	background-color:black;
	color: gold;
	font-family: monospace;
	font-size: 20px;
	opacity: 50%;
	
}
.nav a{
	opacity: 100%;
}*/

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

.body{
	
	background-color:black;
	
}
.neplus:hover{
	background-color: white;
	box-shadow: 0px 2px gold;
	box-sizing: content-box;
	
}
.clanlogo{
	width: 100%;
	border-top: 2px solid gold;
	border-radius: 20px;
}





.clanh{
	text-align: center;
	color: gold;
	font-family: cursive;
	font-size: 3.5vw;
	background-color: black;
	border-bottom: 2px solid gold;
	display: none;
	width: 100%;
}
.clanb{
	color: white;
	text-align: center;
	font-size: 16px;
	display: none;

}
.cbutton{

	background-color: gold;
	border: 2px solid red;
	padding: 10px;
	border-radius: 20px;
	color: black;
	box-shadow: 0px 2px white;
	margin-bottom: -20px;
	font-size: 2.4vw;
	box-sizing: content-box;
}
.cbutton:hover{
	background-color:white;
	color: gold;
	border: 2px solid gold;

}


.clanlogorf{
	width: 100%;
	border-top: 2px solid red;
	border-radius: 20px;
}

.clanhrf{
	text-align: center;
	color: red;
	font-family: cursive;
	font-size: 3.5vw;
	background-color: black;
	border-bottom: 2px solid white;
	display: none;
	width: 100%;
}
.clanbrf{
	color: white;
	text-align: center;
	font-size: 16px;
	display: none;


}
.cbuttonrf{

	background-color: red;
	border: 2px solid white;
	padding: 10px;
	border-radius: 20px;
	color: white;
	box-shadow: 0px 2px fold;
	margin-bottom: -20px;
	font-size: 2.4vw;
}

.cbuttonrf:hover{
	background-color:white;
	color: red;
	border: 2px solid red;

}

.vs{
	animation-name: vs;
	animation-duration: 3s;
	animation-delay:;
	animation-iteration-count: infinite;
	animation-timing-function: ease-in-out;
	height: 100%;
}
@keyframes vs{
	10%{

		opacity: 20%;
	}
	100%{
		opacity: 60%;
	}
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
	/*background:#2E2E2E;*/
	background-image: url(img/bck7.jpg);
	background-size: cover;
	position: relative;
	font-size: 80%;
	font-size: 3vw;
	width: 100%;
	/*border-radius: 50px;*/
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
.vs{
	animation-name:vs1;
	/*animation-duration: 1s;
	animation-iteration-count: infinite;
	animation-timing-function: linear;
}*/
@keyframes vs1{
	100%{
		transform: rotate(-360deg);
	}
}
@media screen and (max-width: 1000px){
    		.footerbody{background-color: gold;}
    		.top_nav a.icon{display: block; position: relative; float: right;}

    	}
.register{
	background-color: black;
	color: gold;
	border-radius: 10px;
	border: 2px solid gold;
	width: 100%;
	animation-name: register;
	animation-duration: 3s;
	animation-iteration-count: infinite;
	animation-timing-function: ease-in-out;
}    
@keyframes register{
	50%{
		background-color: gold;
	}
}
.bck{
	width: 10vw;
}	
.cimg{
	width: 100%;
}
.text{
	display: none;
}
@keyframes red{
	50%{
		opacity: 1;
	}
	100%{
		opacity: 0;
	}
}
	.brn{
			color: white;
			background-color: #171717;
			border-bottom: 5px solid gold;
			padding: 10px;
			font-size: 7vw;
			text-shadow: 0px 10px black;
			font-family: serif;
			font-weight: bolder;
		}




	</style>
</head>
<body style="margin-right: -2vw;">

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

	<div class="container">
		<div class="row">
			<div class="col-sm-12"  style="background-color: black;">
				<img src="img/pubgheader.jpg" style="width: 100%;position: absolute;margin-left:px ;">
				
				<!-- <div class="container-fluid"> -->
					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-10" style="background-color: transparent;width: 100%;position: relative;/*margin-bottom: 400px;margin-left: 20px;*/margin-top: 3vw;opacity: ;">
							<img src="img/t2.png" style="position:absolute;width:45vw;height:;margn-top:-30vw;px;z-index:;margin-left:40vw;float: right;height: 100%;" class="t">
							<img src="img/pubgH.png" style="width: 100%;opacity: ;">

								<h3 style="font-size: 3vw;color: white;"><i>E-sports, live gaming, large communities, Tournaments all  under the NEF</i></h3>	
								<img src="img/clant5.jpg" style="width:5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-bottom: 10vw;">
								<img src="img/clant1.jpg" style="width: 5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-top: 1vw;">
								<img src="img/clant5.jpg" style="width:5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-bottom: 10vw;">
								<img src="img/clant1.jpg" style="width: 5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-top: 1vw;">
									
						</div>
						<div class="col-sm-1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" class="part1" style="margin-top: h;">
		<div class="row">
			<div class="col-sm-" style="background-color:;"><!-- <img src="img/pn2.jpg" style="width: 100%;"> --></div>
			<div class="col-sm-12" style="background-color:black;opacity: 80%;margin-left: ;width: 100%;">
				<img src="img/neplus.jpg" style="position: absolute;width: 100%;">
			<span style="position: relative;opacity: 85%;font-size: 5vw;">

				<span style="position: relative;padding: 30px;">
				<h1 style="color: gold;text-align: center;font-size: 10vw;font-family:cursive;text-shadow: 0px 2px black;background-color: black;opacity: 60%;font-weight: bolder;">NEPLUS ULTRA</h1><br>
				<a href="#t">
					<img src="img/squadwipe test.png" style="border: 2px solid gold;border-radius: 20px;padding: 5px;width: 50vw;margin-left: 100px;" class="neplus" href="#t"><br><br>
				</a>
				<img src="img/rfheaderm.jpg" style="border: 2px solid gold;border-radius: 20px;padding: 5px;width: 50vw;margin-left: 100px;" class="neplus"><br><br>
				<img src="img/squadwipe test.png" style="border: 2px solid gold;border-radius: 20px;padding: 5px;width: 50vw;margin-left: 100px;" class="neplus"><br><br>
				
				</span>
			</span>


			</div>
			<div class="col-sm-" style="width: 0px;height: 0px;"></div>
		</div>

<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="margin-left: vw;width: 100%;">
				<h1 style="color: white;font-size:6vw ;color: gold;font-weight: bolder;margin-left: 30vw;">THE CLANS</h1>
				<img src="img/squadwipe test.png" class="clanlogo">
				<button class="seemore1" onclick="sm1()">SEE MORE</button>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<h2 class="clanh"><u>RULES</u></h2>
				<ul class="clanb">
					<li>You must respect your Teammates</li>
					<li>As a comrade you must be stick to your teamates in battle</li>
					<li>You must be very active </li>
					<li>You must be able to use mic to game especially during tournaments</li>
					<li>You must be able to train in cheer park with the clan</li>
				</ul>
			</div>

			<div class="col-sm-4">
				<h2 class="clanh"><u>REQUIREMENTS</u></h2>
				<ul class="clanb">
					<li>You must respect your Teammates</li>
					<li>As a comrade you must be stick to your teamates in battle</li>
					<li>You must be very active </li>
					<li>You must be able to use mic to game especially during tournaments</li>
					<li>You must be able to train in cheer park with the clan</li>
				</ul>
			</div>

			<div class="col-sm-4">
				<h2 class="clanh"><u>CLAN PROFILE</u></h2>
				<ul class="clanb">
					<li>You must respect your Teammates</li>
					<li>As a comrade you must be stick to your teamates in battle</li>
					<li>You must be very active </li>
					<li>You must be able to use mic to game especially during tournaments</li>
					<li>You must be able to train in cheer park with the clan</li><br>
					<center><a href="pubgclanform.php"><b class="cbutton">JOIN US!</b></a></center>
				</ul>
			</div>

			<div class="col-md-12">
				<button class="seeless1" onclick="sl1()">SEE LESS</button>
			</div>
			
		</div>


		<div class="row" style="">
			<div class="col-md-12">
				<img src="img/rfheaderm.jpg" class="clanlogorf" >
				<button class="seemore2" onclick="sm1()">SEE MORE</button>
			</div>

		</div>


		<div class="row">
			<div class="col-sm-4">
				<h2 class="clanhrf"><u>RULES</u></h2>
				<ul class="clanbrf">
					<li>You must respect your Teammates</li>
					<li>As a comrade you must be stick to your teamates in battle</li>
					<li>You must be very active </li>
					<li>You must be able to use mic to game especially during tournaments</li>
					<li>You must be able to train in cheer park with the clan</li>
				</ul>
			</div>

			<div class="col-sm-4">
				<h2 class="clanhrf"><u>REQUIREMENTS</u></h2>
				<ul class="clanbrf">
					<li>You must respect your Teammates</li>
					<li>As a comrade you must be stick to your teamates in battle</li>
					<li>You must be very active </li>
					<li>You must be able to use mic to game especially during tournaments</li>
					<li>You must be able to train in cheer park with the clan</li>
				</ul>
			</div>

			<div class="col-sm-4">
				<h2 class="clanhrf"><u>CLAN PROFILE</u></h2>
				<ul class="clanbrf">
					<li>You must respect your Teammates</li>
					<li>As a comrade you must be stick to your teamates in battle</li>
					<li>You must be very active </li>
					<li>You must be able to use mic to game especially during tournaments</li>
					<li>You must be able to train in cheer park with the clan</li><br>
					<center><a href="pubgclanform.php"><b class="cbuttonrf">JOIN US!</b></a></center>
				</ul>
			</div>

			<div class="col-md-12">
				<button class="seeless2" onclick="sl1()">SEE LESS</button>
			</div>
		</div>			
</div><br>

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="regform.php"><button class="register" style="background-color: green;width: 100%;color: gold;border-radius: 10px;border: 2px solid gold;font-family: cursive;">REGISTER YOUR CLAN NOW!! (clan leaders only!)</button></a>
			</div>
		</div><br>

		<div class="row">
			<div class="col-sm-"></div>
			<div class="col-sm-12">

				<h1 style="text-align: center;color: gold;font-size: 5vw;font-family: serif;font-weight: bolder;background-color: #171717;padding: 1vw;border-radius: 1vw;text-shadow: 0px 5px black;"> TEAM DEATH MATCHES</h1><br>
				<a href="betting.php">
					<button style="background-color: green;color:white;border-radius:20px;padding: 5px;border: 2px solid gold;margin: 9px;font-size: 2vw;">BET</button>  

				</a>
					<a href="streams.php">
						
				<button style="background-color: green;color:white;border-radius:20px;padding: 5px;border: 2px solid gold;float: right;margin: 9px;font-size: 2vw;">WATCH STREAM</button><br>
					</a>

				<img src="img/pubgl.jpg" style="position: absolute;width: 100%;">
				<img src="img/vs2.jpg" style="width: 100%;height: 70vw;position: absolute;opacity: %; border-radius: 50%;" class="vss">
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


            	 <a href="">
			    		<img src="tdm_image/<?php echo $row['slot1']?>" style="position: relative;width: 14vw;margin-left: 20px;height: 14vw;border-radius: 50%;border: 2px solid gld;margin-top: 2vw;" class="clanslide1">

				<img src="tdm_image/<?php echo $row['slot2']?>" style="position: relative;width: 14vw;float: right;height: 14vw;border-radius: 50%;border: 2px solid gld;margin-top: 2vw;margin-right: ;" class="clanslide2">

				<br>
			    </a>

				<a href="">
					<img src="tdm_image/<?php echo $row['slot3']?>" style="position: relative;width: 14vw;margin-left: 20px;height: 14vw;border-radius: 50%;border: 2px solid god;margin-top: 2vw;" class="clanslide3">
				<img src="tdm_image/<?php echo $row['slot4']?>" style="position: relative;width: 14vw;float: right;height: 14vw;border-radius: 50%;border: 2px solid gld;margin-top: 2vw;" class="clanslide4"><br>

				</a>


				<a href="">
					<img src="tdm_image/<?php echo $row['slot5']?>" style="position: relative;width: 14vw;margin-left: 20px;height: 14vw;border-radius: 50%;border: 2px solid gld;margin-top: 2vw;" class="clanslide5">
				<img src="tdm_image/<?php echo $row['slot6']?>" style="position: relative;width: 14vw;float: right;height: 14vw;border-radius: 50%;border: 2px solid god;margin-top: 2vw;" class="clanslide6"><br>

				</a>


            	
            	<?php

}

			?>
			<!--  <a href="">
			    		<img src="img/rf.jpg" style="position: relative;width: 14vw;margin-left: 20px;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;" class="clanslide1">
				<img src="img/clant4.jpg" style="position: relative;width: 14vw;float: right;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;margin-right: ;" class="clanslide2"><br>
			    </a>

				<a href="">
					<img src="img/clant1.jpg" style="position: relative;width: 14vw;margin-left: 20px;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;" class="clanslide3">
				<img src="img/clant2.jpg" style="position: relative;width: 14vw;float: right;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;" class="clanslide4"><br>

				</a>


				<a href="">
					<img src="img/clant3.jpg" style="position: relative;width: 14vw;margin-left: 20px;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;" class="clanslide5">
				<img src="img/clant5.jpg" style="position: relative;width: 14vw;float: right;height: 14vw;border-radius: 50%;border: 2px solid gold;margin-top: 3px;" class="clanslide6"><br>

				</a>


 -->
			</div>
</div>			
			<div class="container-fluid">
<!-- 	<div class="row">
		<div class="col-md-12">
			<center><i><h1>STREAMERS</h1></i></center>
			<center><i><h2>the NEF's YOUTUBERS/STREAMS dashboard...</h2></i></center>
		</div>
	</div>
</div> -->
<style type="text/css">
	.brn{
			color: white;
			background-color: #171717;
			border-bottom: 5px solid gold;
			padding: 10px;
			font-size: 7vw;
			text-shadow: 0px 10px black;
			font-family: serif;
			font-weight: bolder;
		}
		.vss{
							animation-name: bck;
							animation-duration: 5s;
							animation-iteration-count: infinite;
							animation-timing-function: ease-in-out;
						}
						@keyframes bck{
							50%{
								opacity: 0.7;
							}
							100%{
								opacity:1;
							}
						}
</style>

	<div class="row">
			<div class="col-sm-12" style="margin-top: 15vw;width: 100%;margin-left: vw;">
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
			
				
				<img src="img/dice.jpg" style="width: 100%;position: absolute;height:">

			
			<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `battleroyale` ORDER BY `id` DESC";
            $query=mysqli_query($connect,$php);

            while ($row= mysqli_fetch_array($query)) {
            	?>

            		<img src=" br_image/<?php echo $row['image']?>" style="width: 12vw;position: relative;height: 12vw;border-radius: 50%;border: 2px solid gold;opacity: 100%;margin: 5px;margin-top: 3vw;">
            	
            				
            	<?php


            }

			?>

			</div>
		</div><br>

		<div class="row">
			<div class="col-md-12" style="margin-top: vw;margin-left: ;margin-right: vw;">
				<a href=".php">
					<div class="bck text-center" style="width: 100%;text-align: center;background-color: red;">
					<img src="img/contest.jpg" class="cimg" style="width: 100%;position: relative;border: old;">
					<style type="text/css">
						.cimg{
							animation-name: bck;
							animation-duration: 2s;
							animation-iteration-count: infinite;
							animation-timing-function: linear;
						}
						@keyframes bck{
							50%{
								opacity: 0.7;
							}
							100%{
								opacity:1;
							}
						}
						</style>
			
					<center><div class="text text-center" style="background-color:white;width: 90%;position: relative;height: 50vw;margin-top:-53vw ;display: none;color: black;opacity: 70%;border-radius: 20px; ">
						
						<center><h1 style="position: relative;color: black;font-size: 10vw;padding-top:20vw;font-family: serif;">CONTESTS<br><i>coming soon</i></h1></center>
						
					</div></center>
					
				</div>
				</a>
			</div>
		</div>


		
		



	<div class="container-fluid" style="margin-top: 30vw;margin-right: vw;">
		<div class="row">
			<div class="col-md-12" >
				<!-- 000000000000000000000000000000 FOOTER STARTS HERE 00000000000000000000000000 -->
	    <header></header>

	    	<main></main>
	    	<footer>
	    		<div class="footerbody">
			<!-- <img src="img/t1.png" style="width: 50%;position: absolute;height:40vw;"> -->
	    			

	    			<div>
	    				<a href="landingpage.php" class="home"><div style="width:7vw ;height: 7vw;background-color: gold;margin: 0px;padding: none;border-radius: 50%;border: 2px solid red;">
			<img src="img/neflogo.jpeg" style="width: 100%;opacity: 100%;height: 100%;border-radius: 50%;">
			<!-- <img src="img/t1.png" style="width: 100%;"> -->

		</div></a>
	    			</div>
	    			<div>
			<!-- <img src="img/t1.png" style="width: 50%;position: absolute;height:40vw;"> -->

	    				<p>lorem ipsum dolor sit amet</p>
	    				<ul>
	    					<li><a href="about.php">about</a></li>
	    					<li><a href="about.php">contact</a></li>
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
	    




	
	<!-- adding indicators -->
	<!-- <div class="carousel slide" id="carouselexample3" data-ride="carousel" style="width: 50%;">
		<ol class="carousel-indicators">
			<li data-target=#carouselexample3 data-slide-to="0" class="active"></li>
			<li data-target=#carouselexample3 data-slide-to="1"></li>
			<li data-target=#carouselexample3 data-slide-to="2"></li>
			<li data-target=#carouselexample3 data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/puubg.jpg" style="width: 100%;height: 100%;">
			</div>
			<div class="carousel-item">
				<img src="img/pubh.jpg" style="width: 100%;height: 100%;">
			</div>
			<div class="carousel-item">
				<img src="img/pubbg.jpg" style="width: 100%;height: 100%;">
			</div>
			<div class="carousel-item">
				<img src="img/ppubg.jpg" style="width: 100%;height: 100%;">
			</div>
		</div>
	</div>
	<div> -->

		<!-- NEXT AND PREVIEW ICONS -->
		<!-- <a href="#carouselexample3" class="carousel-control-prev" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a href="#carouselexample3" class="carousel-control-next" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
    </div> -->
    


















    <script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
<script type="text/javascript">
	    		$(function(){
				$(".seemore1").click(function(){
					
					$(".clanh").show(500);
					
					$(".clanb").show();
					$(".seeless1").show(500);
					$(".seemore1").hide(500);


				})
				// SHOW LOGIN FORM AND SIGN IN BUTTON
				$(".seeless1").click(function(){
					$(".clanh").hide(500);
					$(".clanb").hide(500);
					$(".seemore1").show();
					$(".seeless1").hide();
				
				})



				$(".seemore2").click(function(){
					
					$(".clanhrf").show(500);
					
					$(".clanbrf").show();
					$(".seeless2").show(500);
					$(".seemore2").hide(500);


				})
				// SHOW LOGIN FORM AND SIGN IN BUTTON
				$(".seeless2").click(function(){
					$(".clanhrf").hide(500);
					$(".clanbrf").hide(500);
					$(".seemore2").show();
					$(".seeless2").hide();
				
				})
				$(".cimg").mouseenter(function(){
					$(".text").show(500);
				})
				$(".bck").mouseleave(function(){
					$(".text").hide(500);
				})
			})

	    	</script>
	<script type="text/javascript" src="bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

</body>
</html>