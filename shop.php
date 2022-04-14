	<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

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
	<title>shop</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="pubg.css">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">


	<style type="text/css">
	
	body{
		margin: 0px;
		padding: none;
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

    	.body{
    		background-color: black;
    	}
    	h1{
    		color: gold;
    		font-size: 50px;
    		font-family: cursive;
    		text-shadow: 0px 2px red;
    		width: 100%;
    		background-color: #171717;

    	}
    	h4{
    		color: gold;
    		font-family: cursive;
    		text-shadow: 0px 2px white;
    		font-size: 3vw;
    		background-color: #171717;
    	}
    
    	h2{
    		/*margin-top: 50vw;*/
    		font-size: 4vw;
    	}
    	.category{
    		margin-top: 64vw;
    		color: gold;
    	}
    	.subc{
    		color: white;
    		font-size: 2vw;
    	}
    	.seemore{
		border-radius: 10px;
		border-top: 2px solid gold;
		border-bottom: none;
		outline: none;
		border-left: 2px solid gold;
		border-right: 2px solid gold;
		width: 20vw;
		height: 5vh;

	}
	.seeless{
		border-radius: 10px;
		border-bottom: 2px solid gold;
		border-top: none;
		outline: none;
		border-left: 2px solid gold;
		border-right: 2px solid gold;
		display: none;
		width: 20vw;
		height: 5vh;

	}
	.description{
		display: none;
		color: white;
		font-size: 1px;
		border-left: 1px solid gold;
		border-right: 1px solid gold;
		/*border-radius: 20px ;*/
		padding: 10px;

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
	p{
		color: black;
		background-color: gold;
		text-align: center;
		border-radius: 10px;
		border: 2px solid white;
		font-weight: bolder;

	}
	.card img{
		width:20vw;
		/*height: 300px;*/
		border-radius: 20px;
		/*border: 2px solid gold;*/
		text-align: center;
		height: 20vw;
	}

	.project{
		/*display: none;*/
		text-align: center;
		color:black;
		font-weight: bolder;
		font-family: cursive;
		font-stretch: expanded;
		font-size: 3vw;
		background-color: darkgoldenrod;
		border-radius: 10px;

	}
	button{
		width:100%;
		/*background-color: transparent;*/
		color: gold;
		font-weight: bold;
		background-color: black;
		padding: 1vw;
		border-radius: 10px;
		border: 2px solid white;
	}
	.seemore{
		width: 100%;
		cursor: pointer;
		padding: 10px;
	}
	.seeless{
		width: 100%;
		cursor: pointer;
		ma: -20px;
	}
	.desc{
		display: none;
		float: right;
		width: 100%;
		color: gold;
		padding: 1vw;
	}
	.request::hover{
		background-color: red;
	}
	/*.category{
		margin-top: 35vh;
	}*/
	.shop2{
		margin-top: -60vw;
	}
		@media screen and (max-width: 700px){

			.card img{
		width: 100%;
		height: 500px;
		max-height: 300px;
		max-width: 500px;
	}
		
}

			@media screen and (max-width: 1300px){

			.card img{
				text-align: center;
				/*margin-left: 40px;*/
		width: 100%;
		height: 500px;
		/*max-height: 300px;
		max-width: 500px;*/
	}
		
}
/*.div{
	white-space: nowrap;
	overflow: auto;
}*/
.t3{
	width: 50%;
	position: relative;
	height: 60vw;
	/*margin-left: 10vw;*/
	float: right;
	margin-right: -15vw;
	margin-top: -10vw;
	/*opacity: 77%;*/
}
		

	


	</style>
</head>
<body>

	<body>
	<nav class="top_nav" id="top_nav">
		<a href="landingpage.php" class="home"><div style="width:50px ;height: 50px;background-color: gold;margin: 0px;padding: none;">
			<img src="img/neflogo.jpeg" style="width: 100%;opacity: 100%;height: 100%;position: relative;">
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


<center><h1>SHOP_G</h1></center>
<center><h4>Your No1 plug for all yor gaming needs</h4></center>

<div class="container-fluid ">
	<div class="row body ">
		<div class="col-md-12">
		   <div style="height: ;padding-top: 20px; margin-left: -15px;">
		   		<img src="img/games.jpg" style="width: 100%;position: absolute;height:;border-radius: ;border: px solid ;">

		   		<!-- TOP NAV1 -->
		   		<a href="pubg.php">
		   			<div style="width: 25vw; height: 6vw;background-color: black;position: absolute;z-index: ;margin-top:5vw ;border-radius: 1vw;color: gold;border: 2px solid gold;margin-left: 5vw;box-shadow: 0px 2px white;box-sizing: ;">
				   	<center><p style="margin: 2vw;font-size: 2vw;margin-top: 4vw;">GAME SOFTWARE </p></center>
				</div>
		   		</a>

				 <!-- TOP NAV2 -->
				 <a href="#gamematerials">
				 	
				<div style="width: 25vw; height: 6vw;background-color: black;position: absolute;z-index: ;margin-top:5vw ;border-radius: 1vw;color: gold;border: 2px solid gold;margin-left: 37vw;box-shadow: 0px 2px white;">
				   	<center><p style="margin: 2vw;font-size: 2vw;">GAMING ACCESSORIES</p></center>
				</div>

				 </a>


				  <!-- TOP NAV3 -->
				 <a href="#gamematerials">
				 	
				<div style="width: 25vw; height: 6vw;background-color: black;position: absolute;z-index: ;margin-top:5vw ;border-radius: 1vw;color: gold;border: 2px solid gold;margin-left: 68vw;box-shadow: 0px 2px white;" onclick=" location: mobile.php;">
				   	<center><p style="margin: 2vw;font-size: 2vw;margin-top: 4vw;">IN-GAME MATERIALS</p></center>
				</div>

				 </a><br><br>

				 <img src="img/t5.png" class="t3">




				 <!-- SELLERS BIO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
				 	

		    </div>
		</div>
	</div>


</div>

<div class="container-fluid body" style="margin-top: -5vh;">
	<div class="row" style="margin-top: -55vw;">
	  <div class="col-md-12">
		<h2 name="gamec" class="category"><u><i>IN-GAME MATERIALS</i></u></h2>
		<h3 name="gamec" class="subc"><u><i>your no.1 plug for all gaming softwares and CD's.....</i></u></h3>
	  </div>

	  <div class="container-fluid mt-4" style="z-index:;">
		<div class="row">


			<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `shop1` ORDER BY `id` DESC";
            $query=mysqli_query($connect,$php);

            while ($row= mysqli_fetch_array($query)) {
            	?>

            	<div class="col-md-3">
            		<div class="card">
            			<p style="font-family: cursive;font-stretch: expanded;" class="product"> <?php  echo $row['product'] ?></p>
            				<img src=" shop_image/<?php echo $row['image']?>"><br>
            				<button class="seemore">see details</button>
            			<p class=" desc" style="font-size: 12px;background-color:transparent;"> <?php  echo $row['description'] ?><br><br>
            				<a href="requestform.php"><button style="background-color:darkgoldenrod;padding: 1vw;width: 100%;color: black;" class="request" name="form" onclick="request()" class="request">PLACE REQUEST</button></a>
            			</p><br>

            				<button class="seeless">hide details</button>

            		</div>
            	</div>
            	<?php


            }

			?>
		</div><br>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
		<div class="row" style="margin-top: -55vw;">
	  <div class="col-md-12">
		<h2 name="gamec" class="category"><u><i>GAME SOFTWARE/SOCIAL MEDIA</i></u></h2>
		<h3 name="gamec" class="subc"><u><i>your no.1 plug for all gaming softwares and CD's.....</i></u></h3>
	  </div>

	  <div class="container-fluid mt-4" style="z-index:;">
		<div class="row">


			<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');




            $php= "SELECT * FROM `shop3` ORDER BY `id` DESC";
            $query=mysqli_query($connect,$php);

            while ($row= mysqli_fetch_array($query)) {
            	?>

            	<div class="col-md-3">
            		<div class="div">
            		<div class="card">
            			<p style="font-family: cursive;font-stretch: expanded;" class="product"> <?php  echo $row['product2'] ?></p>
            				<img src=" shop_image/<?php echo $row['image2']?>"><br>

            				<button class="seemore">see details</button>

            			<p class="desc" style="font-size: 12px;background-color:transparent;"> <?php  echo $row['description2'] ?><br><br>
            				<a href="requestform.php"><button style="background-color:darkgoldenrod;padding: 1vw;width: 100%;color: black;" class="request" name="form" onclick="request()" class="request">PLACE REQUEST</button></a>
            			</p><br>

            				<button class="seeless">hide details</button>
            		</div>
            	</div>
            	</div>
            	<?php


            }

			?>
		</div><br>
	</div>




	<div class="container-fluid">
		<div class="row" style="margin-top: -55vw;">
			  <div class="col-md-12">
		<h2 name="gamec" class="category"><u><i>GAME HARDWARE AND ACCESSORIES</i></u></h2>
		<h3 name="gamec" class="subc"><u><i>your no.1 plug for all gaming softwares and CD's.....</i></u></h3>
	  </div>

		</div>
	</div>




			<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

// 			// DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: login.php");
// }	


            $php= "SELECT * FROM `shop4` ORDER BY `id` DESC";
            $query=mysqli_query($connect,$php);

            while ($row= mysqli_fetch_array($query)) {
            	?>

            	<div class="col-md-3 div">
            		
            		<div class="card">
            			<p style="font-family: cursive;font-stretch: expanded;" class="product"> <?php  echo $row['product3'] ?></p>
            				<img src=" shop_image/<?php echo $row['image3']?>"><br>
            				<button class="seemore">see details</button>
            			<p class="desc" style="font-size: 12px;background-color:transparent;"> <?php  echo $row['description3'] ?><br><br>
            				<a href="requestform.php"><button style="background-color:darkgoldenrod;padding: 1vw;width: 100%;color: black;" class="request" name="form" onclick="request()" class="request">PLACE REQUEST</button></a>
            			</p><br>

            				<button class="seeless">hide details</button>

            		</div>
            	</div>
            	<?php


            }

			?>
		</div>
	</div>


	</div>

	</div>
</div>
 -->




<!-- SHOP2?????????????????????????????????????????????????????????????????????????????????/ -->

<div class="container-fluid body" style="margin-top: -10vh;">
	
</div>



















<script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
		

		$(function(){
				$(".seemore").click(function(){
					
					$(".nd").show(200);
					
					$(".desc").show();
					$(".seeless").show(200);
					$(".seemore").hide(200);


				})
				// SHOW LOGIN FORM AND SIGN IN BUTTON
				$(".seeless").click(function(){
					$(".nd").hide(200);
					$(".desc").hide(200);
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
	





















</body>
</html>