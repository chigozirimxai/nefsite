<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pubg page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<!-- <link rel="stylesheet" type="text/css" href="pubg.css"> -->
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<style type="text/css">
body{
	background-color: black;
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
		<div class="col-md-12" class="top">
				<img src="img/pubgheader.jpg" class="bimg">
				<div class="contain">
					 <img src="img/t2.png" style="position:absolute;width:45vw;height:;margn-top:-59vw;px;z-index:;margin-left:47vw;float: right;height: 100%;opacity: 100%;" class="t">
					<!-- <center><h1 class="bimg2"><b>PUBG MOBILE</b></h1></center> -->
					  <img src="img/pubgH.png" class="bimg2">

					  	<h3 style="font-size: 3vw;color: white;"><i>E-sports, live gaming, large communities, Tournaments all  under the NEF</i></h3>	
								<img src="img/clant5.jpg" style="width:5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-bottom: 10vw;">
								<img src="img/clant1.jpg" style="width: 5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-top: 1vw;">
								<img src="img/clant5.jpg" style="width:5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-bottom: 10vw;">
								<img src="img/clant1.jpg" style="width: 5vw;height: 5vw;border-radius: 50%;font-size: 1vw;border: 2px solid gold;margin: 1vw;margin-top: 1vw;">

				
				</div>
		</div>
	</div>
</div><br><br>
<style type="text/css">
	.top{
		background-image: url(img/pubgheader.jpg);
		position: absolute;
	}
	.bimg{
		width: 100%;
		position: absolte;
	}
	.contain{
		width: 100%;
		background-color:black ;
		opacity: 80%;
		position:relative;
		margin-top: -53vw;

	}
	.bimg2{
		position: relatie;
		width: 80%;
	}
	.t{
		opacity: ;
	}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" class="contain2">
		<cener><h1 class="tc"><br>TOP CLANS</h1></center>
			<img src="img/neplus.jpg" class="smile">
			<ceter><div class="neplus1">
				<img src="img/squadwipe test.png" class="clan1">
				<div class="stats">
					<table>
						<tr>
							<th>MATCHES PLAYED</th>
							<th>MATCHES WON</th>
							<th>NET WORTH</th>
							<th>RANK</th>
						</tr>
						<tr>
							<td>5</td>
							<td>5</td>
							<td>#120,000</td>
							<td>NO.1</td>
						</tr>
					</table>
				</div><br><br>

				<img src="img/squadwipe test.png" class="clan1" style="margin-left: 35vw;">
				<div class="stats" style="margin-left: 35vw;">
					<table>
						<tr>
							<th>MATCHES PLAYED</th>
							<th>MATCHES WON</th>
							<th>NET WORTH</th>
							<th>RANK</th>
						</tr>
						<tr>
							<td>5</td>
							<td>5</td>
							<td>#120,000</td>
							<td>NO.1</td>
						</tr>
					</table>
				</div><br><br>

				<img src="img/squadwipe test.png" class="clan1">
				<div class="stats">
					<table>
						<tr>
							<th>MATCHES PLAYED</th>
							<th>MATCHES WON</th>
							<th>NET WORTH</th>
							<th>RANK</th>
						</tr>
						<tr>
							<td>5</td>
							<td>5</td>
							<td>#120,000</td>
							<td>NO.1</td>
						</tr>
					</table>
				</div>


			</div></center>

		</div>
	</div>
</div><br><br>
<style type="text/css">
.tc{
	background-color: black;
	color: darkgoldenrod;
	text-align: center;
	font-weight: bolder;
	border-top: 2px solid darkgoldenrod;
}
.contain2{
	height: ;
	/*text-align: center;*/
}
	.smile{
		width: 100%;
		cursor: pointer;
	}
	.neplus1{
		background-color: red;
		width:50%;
		margin-top: -120vw;
		padding: ;
		border-radius: 20px;
		margin-left: 5vw;

	}
	.clan1{
		width: 100%;
		float: ;
		border-radius: 20px;
		border: 2px solid darkgoldenrod;
	}
	.stats{
		background-color:;
		display: none;
	}
	table{
			border-collapse: collapse;
			border:  ;
			background-color: black;
			width: 1vw;
			padding: px;
			text-align: center;
			display: ;
			height: px;
			position: relative;
			margin-left: 3vw;
			border-radius: 10px;

		}
		th{
			border: 2px solid black;
			padding: 8px;
			color: gold;
			background-color: #171717;
			border-radius: 5px;
			font-size: 1.5vw;
			font-family: cursive;
		}
		td{
			border: 2px solid #1C1C1C;
			padding: px;
			color: white;
			font-size: 1.4vw;
		}
		td a{
			text-decoration: none;
		}
		td a .fa-trash{
			font-size: 35px;
			color: red;
			padding-left: 10px;
		}
		td a .fa-trash:hover{
			color: darkred;
	
		}
		td a .fa-envelope{
			font-size: 35px;
			padding-left: 6px;
		}
		td a .fa-envelope:hover{
			color: skyblue;
		}
		tr{
			width: 800px;
		}
</style>

<div class="container-fluid">
	<!-- <img src="img/spidey.jpg" style="width: 100%;position: absolute;"> -->
		<div class="row">
			<div class="col-md-12" style="margin-left: vw;width: 100%;">
				<h1 class="clans">THE CLANS</h1>
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
</div><br><br>

<style type="text/css">
.clans{
	color: darkgoldenrod;
	font-weight: bolder;
	font-family:cursive;
	border-radius: 10px;
	background-color: black;
	border-top: 2px solid gold;
	text-align: center;
	font-size: 5vw;
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
	background-color: black;

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
	background-color: black;


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
.seemore1{
	background-color:black;
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
	background-color:black;
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
	background-color:black;
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
	background-color:black;
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



</style>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="regform.php"><button class="reg"><i><b>REGISTER YOUR CLAN</b></i></button></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<center><i><b><h1 class="tdmh">VIEW MATCHES (TDM) <i class="fa fa-bars"></i></h1></u></b></i></center>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			 <!--  <?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');
            $php= "SELECT * FROM `tdm`";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?> -->

			<div class="tdm">
				<center><b><i><h2 class="match">MATCH 1</h2></i></b></center>
				<a href="streams.php"><i class="fa fa-tv vid"></i></a>
				<a href="betting.php">	<i class="fa fa-money-bill-alt bett"></i></a>			
				<div class="c1">
					<img src="tdm_image/<?php echo $row['slot1']?>" class="c1i">
				</div>
				<div class="c2">
					<img src="tdm_image/<?php echo $row['slot2']?>" class="c1i2">
				</div>
			</div>
			<div class="score1">5</div>
			<h3 class="vs"><i><b>VS</b></i></h3>
			<div class="score2">4</div>
			<div class="blink1"></div>
			<div class="blink2"></div>
<!-- 			<div class="blink3"></div>
			<div class="blink4"></div> -->
		</div>

            	
            	<?php

}

			?>
	</div><br>
	<div class="row">
					 <!--  <?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');
            $php= "SELECT * FROM `tdm`";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?> -->
		<div class="col-md-12">
			<div class="tdm">
				<center><b><i><h2 class="match">MATCH 2</h2></i></b></center>
				<a href="streams.php"><i class="fa fa-tv vid"></i></a>
				<a href="betting.php">	<i class="fa fa-money-bill-alt bett"></i></a>			
				<div class="c1">
					<img src="tdm_image/<?php echo $row['slot3']?>" class="c1i">
				</div>
				<div class="c2">
					<img src="tdm_image/<?php echo $row['slot4']?>" class="c1i2">
				</div>
			</div>
			<div class="score1">5</div>
			<h3 class="vs"><i><b>VS</b></i></h3>
			<div class="score2">4</div>
			<div class="blink1"></div>
			<div class="blink2"></div>
<!-- 			<div class="blink3"></div>
			<div class="blink4"></div> -->
		</div>

            	
            	<?php

}

			?>
	</div><br>	
	<div class="row">
					 <!--  <?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');
            $php= "SELECT * FROM `tdm`";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?> -->
		<div class="col-md-12">
			<div class="tdm">
				<center><b><i><h2 class="match">MATCH 3</h2></i></b></center>
				<a href="streams.php"><i class="fa fa-tv vid"></i></a>
				<a href="betting.php">	<i class="fa fa-money-bill-alt bett"></i></a>			
				<div class="c1">
					<img src="tdm_image/<?php echo $row['slot5']?>" class="c1i">
				</div>
				<div class="c2">
					<img src="tdm_image/<?php echo $row['slot6']?>" class="c1i2">
				</div>
			</div>
			<div class="score1">5</div>
			<h3 class="vs"><i><b>VS</b></i></h3>
			<div class="score2">4</div>
			<div class="blink1"></div>
			<div class="blink2"></div>
<!-- 			<div class="blink3"></div>
			<div class="blink4"></div> -->
		</div>

            	
            	<?php

}

			?>
		</div>
	</div>
</div>
<style type="text/css">
.reg{
	background-color: black;
	color: darkgoldenrod;
	margin-bottom: 3vw;
	outline: none;
	float: right;
	padding: 1vw;
	border-radius: 1vw;
	font-weight: bolder;
	animation-name: reg;
	animation-duration: 2s;
	animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
}
@keyframes reg{
	50%{
		margin-right: 5vw;
	}
	100%{
		margin-right: vw;
	}
}
.reg:hover{
	background-color:darkgoldenrod;
	color: black;
	font-weight: bolder;
	margin-bottom: 3vw;
	outline: none;
	float: right;
	padding: 1vw;
	border-radius: 1vw;
}
.tdmh{
	background-color: #171717;
	color: #171717;
	text-shadow: 0px 0.3vw black;
	font-family: cursive;
	border-top: 2px solid gold;
	font-weight: bolder;
	font-size: 5vw;
	border-radius: 10px;
	padding: 1vw;
	cursor: pointer;
	animation-name: tdmh;
	animation-duration: 2s;
	animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
}
@keyframes tdmh{
	50%{

		color: darkgoldenrod;
	}
	100%{
		color: #171717;
	}
}
.match{
	color: darkgoldenrod;
	background-color: black;
	padding: 1vw;
	font-weight: bolder;
	border-radius: 15px;
	margin-top: -3vw;
	text-shadow: 0px 5px #171717;
	font-size: 2.4vw;
}
.vid{
	color: darkgoldenrod;
	background-color: black;
	padding: 1.5vw;
	border-radius: 50%;
	margin-left: 25vw;
	font-weight: bolder;
	font-size: 2vw;
}
.bett{
	color: darkgoldenrod;
	background-color: black;
	padding: 1.5vw;
	border-radius: 50%;
	margin-left: 32vw;
	font-weight: bolder;
	font-size: 2vw;

}
	.tdm{
		background-color:#171717;
		padding: 2vw;
		border-radius: 20px;
		margin-top: 2vw;
		display: none;
	}
	.c1{
		height: 15vw;
		width: 15vw;
		border-radius: 50%;
		padding: 1vw;
		background-color: black;
	}
	.c1i{
		width: 100%;
		border-radius: 50%;
		height: 100%;
	}
	.c2{
		height: 15vw;
		width: 15vw;
		border-radius: 50%;
		padding: 1vw;
		background-color: black;
		float:right;
		margin-top: -15vw;
	}
	.c1i2{
		width: 100%;
		border-radius: 50%;
		height: 100%;
	}
	.score1{
		background-color: purple;
		width: 5vw;
		height: 5vw;
		text-align: center;
		color: darkslateblue;
		font-family: cursive;
		font-weight: bolder;
		font-size: 4vw;
		margin-left: 35vw;
		margin-top: -10vw;
		/*text-shadow: 0px 3px red;*/
		/*transform: rotate(45deg);*/
		/*background: linear-gradient(to bottom left, black 10% 20%,  black 20% 30%, #171717 40% 60%, black 70% 80%, black 80% 90%,black 0 );*/
		background: linear-gradient(to top left, black 10% 50%, #171717 0 );
		border-radius: 20px;
		display: none;

	}
	.vs{
		color: whitesmoke;
		font-size: 3vw;
		font-family: serif;
		font-weight: bolder;
		margin-left: 45vw;
		margin-top: -5vw;
		position: ;
		/*background-color: black;*/
		padding: vw;
		display: none;

	}
	.score2{
		background-color: purple;
		width: 5vw;
		height: 5vw;
		text-align: center;
		color: ghostwhite;
		font-family: cursive;
		font-weight: bolder;
		font-size: 4vw;
		margin-left: 55vw;
		margin-top: -4vw;
		text-shadow: 0px 3px red;
		border-radius: 20px;
		/*transform: rotate(45deg);*/
		/*background: linear-gradient(to bottom left, black 10% 20%,  black 20% 30%, #171717 40% 60%, black 70% 80%, black 80% 90%,black 0 );*/
		background: linear-gradient(to bottom left, #171717 10% 50%,black 0 );
		display: none;
	}
	.blink1{
		width: 1.2vw;
		height: 1.2vw;
		border-radius: 50%;
		background-color: red;
		margin-left: 20vw;
		margin-top: 2vw;
		border: 2px solid black;
		animation-name: blink2;
		animation-duration: 2s;
		animation-iteration-count: infinite;
		animation-timing-function: ease-in-out;
		display: none;


	}
	@keyframes blink2{
		50%{
			background-color: black;
		}
		100%{
			background-color: red;
		}
	}
	.blink2{
		width: 1.2vw;
		height: 1.2vw;
		border-radius: 50%;
		background-color: green;
		margin-left: 20vw;
		margin-top: -18vw;
		border: 2px solid black;
		animation-name: blink1;
		animation-duration: 2s;
		animation-iteration-count: infinite;
		animation-timing-function: ease-in-out;
		display: none;

	}
	@keyframes blink1{
		50%{
			background-color: black;
		}
		100%{
			background-color: green;
		}
	}
	.blink3{
		width: 1.2vw;
		height: 1.2vw;
		border-radius: 50%;
		background-color: red;
		margin-left: 76vw;
		margin-top: 16vw;
		border: 2px solid black;
		display: none;

		

	}
	
	.blink4{
		width: 1.2vw;
		height: 1.2vw;
		border-radius: 50%;
		background-color: green;
		margin-left: 76vw;
		margin-top: -17vw;
		border: 2px solid black;
		display: none;

	}

</style>


<br><br><div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `br` ORDER BY `id` DESC";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?>
				
						<center><h2 class="brn"><i><b><?php echo $row['br']?><GOLD></b></i></h2></center>
		</div>
	</div>
	<div class="row">

		<div class="col-md-12" style="overflow: auto;white-space: nowrap;height: 600px;background-color:;border-top: 4px solid darkgoldenrd; border-bottom: 4px solid darkgoldenrd;border-radius: px;">
			
							<!-- <center><button class="lineup">TOGGLE MATCH LINE-UP</button></center> -->

							<?php


            }

			?>
			
				
			<!-- <cener>	<img src="img/t1.png" style="width: 90%;position: absolute;height:100%;margin-left: 2vw;"></center> -->

			
			<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `battleroyale` ORDER BY `id` DESC";
            $query=mysqli_query($connect,$php);

            while ($row= mysqli_fetch_array($query)) {
            	?>
            	<div class="card">
            		<img src=" br_image/<?php echo $row['image']?>" style="width: 12vw;position: relative;height: 12vw;border-radius: 50%;border: 2px solid black;opacity: 100%;margin: 5px;margin-top: 3vw;background-color: #171717;" class="image">


            		<a href="streams.php">
            		<i class="fa fa-tv stream"></i>
            		</a>
            		<a href="betting.php">
            		<i class="fa fa-money-bill-alt bet"></i>
            		</a>
			<div class="blink1" style="position:relative;display: block;"></div>
			<!-- <div class="blink2" style="position:relative;display: block;"></div> -->

            		<div class="datas">
            		<span class="tag">STATUS:<i class="data"><?php echo $row['status']?></i></span>
            		<span class="tag">MATCH TIME:<i class="data"><?php echo $row['time']?></i></span>
            		<span class="tag">MATCH STATUS:<i class="data"><?php echo $row['mstatus']?></i></span>
            		<span class="tag">MAP:<i class="data"><?php echo $row['map']?></i></span>
            		<span class="tag">PPC:<i class="data"><?php echo $row['ppc']?></i></span>
            		</div>

            	</div><br>

<!--             		<img src=" br_image/<?php echo $row['image']?>" style="width: 12vw;position: relative;height: 12vw;border-radius: 50%;border: 2px solid gold;opacity: 100%;margin: 5px;margin-top: 3vw;background-color: #171717;"> -->
            	
            				
            	<?php


            }

			?>
							<!-- <center><button class="closeup">TOGGLE MATCH LINE-UP</button></center> -->

		</div>
	</div>
</div>
<style type="text/css">
.lineup{
	width: 80%;
	background-color: black;
	color: darkgoldenrod;
	padding: 1vw;
	border-radius:1vw;
	font-weight: bolder;
	font-family: cursive;
}
.closeup{
	width: 80%;
	background-color: black;
	color: darkgoldenrod;
	padding: 1vw;
	border-radius:1vw;
	font-weight: bolder;
	font-family: cursive;
	display: nne;

}
.card{
	background-color: #171717;
	margin-top: 2vw;
	border-radius: 20px;
	display: noe;
	/*opacity: 0%;*/
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
		.image{
			margin-top: 7vw;
			position: relative;
		}
		.stream{
			float: left;
			background-color: ;
			color: darkgoldenrod;
			margin-left: 15vw;
			position: absolute;
			margin-top: -12vw;
			background-color: black;
			padding: 1.2vw;
			border-radius: 10px;
			font-size: 2vw;

		}
		.bet{
			/*float: left;*/
			background-color: ;
			color: darkgoldenrod;
			margin-left: 15vw;
			margin-top: -3vw;
			position: absolute;
			background-color: black;
			padding: 1.2vw;
			border-radius: 10px;
			font-size: 2vw;
			
		}
		.datas{
			margin-top: -5vw;
		}
		.tag{
			float: right;
			margin-left: 40vw;
			position: relative;
			margin-top: -8vw;
			margin-bottom: 7vw;
			color: darkgoldenrod;
			background-color: black;
			padding: 1vw;
			border-radius: 10px;
			font-weight: bolder;
		}
		.tag i{
			color: whitesmoke;
			margin-top: -3vw;
			font-weight: bold;
			font-family: cursive;

		}
</style>

<div class="container-fluid">
	<div class="row">
			<div class="col-md-12" style="margin-top: 2vw;margin-left: ;margin-right: vw;">
				<a href="">
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
	<style type="text/css">
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

	</style>
	    


































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
				$(".clan1").click(function(){
					$(".stats").show(700);
					
				
				})
				$(".clan1").dblclick(function(){
					$(".stats").hide(700);
					
				
				})

				$(".tdmh").click(function(){
					
					$(".tdm").show(500);
					
					$(".vs").show();
					$(".score1").show(500);
					$(".score2").show(500);
					$(".blink1").show(500);
					$(".blink2").show(500);
					$(".fa-bars").hide(500);
					$(".tdmh").hide(500);

				})
				$(".lineup").click(function(){
					// $(".lineup").hide(500);
					$(".card").toggle();
					// $(".card").show(500);
					// $(".seeless2").hide();
				
				})
					$(".closeup").click(function(){
					// $(".closeup").hide(500);
					// $(".lineup").show(500);
					$(".card").toggle(500);
					// $(".seeless2").hide();
				
				})

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
</body>
</html>