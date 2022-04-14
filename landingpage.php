<?php

 $connect = mysqli_connect("localhost","root","","nefdb");
//  // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: neflogin.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>landing page</title>
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">
	<style type="text/css">
		body{
			background-color: black;
			/*background-image: url(img/pubgl.jpg);*/
			background-size: cover;
			z-index: ;
			
		}
		
		.a{
			width: 2.5vw;
			height: 2.5vw;
			margin: 2vw;
			/*padding: 1vw;*/
			position: relative;
			


		}
		.o{
			width: 2.5vw;
			height: 2.5vw;
			margin: 2vw;
			padding: 1;
			position: relative;

		}
		.x{
			width: 2.5vw;
			height: 2.5vw;
			margin: 2vw;
			padding: 10;
			position: relative;
		}
		.b{
			width: 2.5vw;
			height: 2.5vw;
			margin: 2vw;
			padding: 1;
			position: relative;
		}
		.x{
			animation-name: r1;
			animation-duration: 5s;
			animation-iteration-count: infinite;
			animation-timing-function: ease-in-out;
		}
		@keyframes r1{
			30%{
				opacity: 1;
				transform: rotate(360deg);

			}
			60%{
				opacity: 0;
				transform: rotate(360deg);
			}
			100%{
				opacity: 1;
				transform: rotate(360deg);
			}
		}
		


			.a{
			animation-name: r1;
			animation-duration: 5s;
			animation-iteration-count: infinite;
			animation-timing-function: ease-in-out;
			animation-delay: 1s;
		}
		@keyframes r1{
			30%{
				opacity: 1;
				
				transform: rotate(360deg);

			}
			60%{
				opacity: 0;
				transform: rotate(360deg);
			}
			100%{
				opacity: 1;
				transform: rotate(360deg);
			}
		}
		


	.b{
			animation-name: r1;
			animation-duration: 5s;
			animation-iteration-count: infinite;
			animation-timing-function: ease-in-out;
			animation-delay: 2s;
		}
		@keyframes r1{
			30%{
				opacity: 1;
				
				transform: rotate(360deg);

			}
			60%{
				opacity: 0;
				transform: rotate(360deg);
			}
			100%{
				opacity: 1;
				transform: rotate(360deg);
			}
		}
		


	.o{
			animation-name: r1;
			animation-duration: 5s;
			animation-iteration-count: infinite;
			animation-timing-function: ease-in-out;
			animation-delay: 3s;
		}
		@keyframes r1{

			30%{
				opacity: 1;
				
				transform: rotate(360deg);

			}
			60%{
				opacity: 0;
				transform: rotate(360deg);
			}
			100%{
				opacity: 1;
				transform: rotate(360deg);
			}
		}

		 .abutton:hover{
		 	opacity: 100%;
		 	border: 0.5vw solid gold;

		 	
		 	
		 }
		 .abutton{
		 	opacity: 80%;

		 }
		  .bbutton:hover{
		 	opacity: 100%;
		 	border: 0.5vw solid gold;
		 	
		 	
		 }
		 .bbutton{
		 	opacity: 80%;

		 }
		  .cbutton:hover{
		 	opacity: 100%;
		 	border: 0.5vw solid gold;
		 	
		 	
		 }
		 .cbutton{
		 	opacity: 80%;

		 }
		  .xbutton:hover{
		 	opacity: 100%;
		 	border: 0.5vw solid gold;
		 	
		 	
		 }
		 .xbutton{
		 	opacity: 80%;

		 }
		 .@import url(chrome://op-resources/toolkit/../styleguide/common.css);
@import url(chrome://op-resources/toolkit/../styleguide/scrollbars.css);
@import url(chrome://op-resources/modules/styleguide/icon.css);
	
	@media screen and (max-width: 700px){
		/*	.cbuttonp{
				transform: rotate(90deg);
			}
			.cbutton{
				transform: rotate(90deg);
				opacity: 2%;
				margin-left: 30vw;
			}*/
			body{
				background-color: yellow;
			}
		}
		


		
	</style>
</head>

<body>

	<!-- <img src="img/pubgb.jpg"> -->
	<div class="container-fluid" style="background-color: black;">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-0" style="background-color: black;">
				<frame style="height: 30px;">
					<span class="r1" style="padding: 20px;height: 100%;width: 100%; ">

				
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b"><br>



					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b"><br>



					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b"><br>




					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b"><br>




					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b"><br>



					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b"><br>



					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b"><br>


					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b"><br>



					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b">
					<img src="img/block.jpg" class="b">
					<img src="img/angle.jpg" class="a">
					<img src="img/circle.jpg" class="o">
					<img src="img/x1.jpg" class="x">
					<img src="img/block.jpg" class="b"><br>
				</span>
				</frame>
				
			</marquee><br>
			<!-- <h1 style="position: relative;margin-top: -115vw;color: pink;z-index: 100;font-size: 6vw;font-family:cursive;margin-left: 30vw;color: white;text-shadow: 2px 2px gold;font-weight: bolder;opacity: 80%;">NIGERIAN'S</h1><br>
			<h1 style="position: relative;margin-top: -5vw;color: pink;z-index: 100;font-size: 5vw;margin-left: 40vw;">E-sports </h1><br>
			<h1 style="position: relative;margin-top: -4vw;color: pink;z-index: 100;font-size: 5vw;margin-left: 37vw;">Federation</h1><br> -->

			<div style="width: 20vw;height: 10vw;background-color: green;position: relative;margin-top:-115vw;z-index: 10;margin-left: 38vw;border-radius: 20px;border: 0.3vw solid gold;box-shadow:; " class="div1">

				<span style="position: absolute;z-index: 10;color: white;margin-top: 3vw;margin-left: 5vw;font-size: 1.7vw;font-weight: bold;font-family: cursive;opacity: 100%;" focus>WEBSITE</span>

				<img src="img/mid.png" style="width: 100%;border-radius: 20px;height: 100%;padding: 0.3vw;opacity: 90%;">
			</div>

			<div style="width: 20vw;height: 10vw;background-color: #FF00FF;position: relative;margin-top:-0.1vw;z-index: 10;margin-left: 20vw;border-radius: 20px;border: 0.3vw solid gold;box-shadow:;" class="div2">
				<span style="position: absolute;z-index: 10;color: gold;margin-top: 3vw;margin-left: 3vw;font-size: 1.7vw;font-weight: bold;font-family: cursive;opacity: 80%;">BETTING</span>
				<img src="img/ppubg.jpg" style="width: 100%;border-radius: 20px;height: 100%;padding: 0.3vw;opacity: 90%;">
			</div>

			<div style="width: 20vw;height: 10vw;background-color: red;position: relative;margin-top:-10vw;z-index: 10;margin-left: 56vw;border-radius: 20px;border: 0.3vw solid gold;box-shadow:;" class="div3">
				<span style="position: absolute;z-index: 10;color: gold;margin-top: 3vw;margin-left: 3vw;font-size: 1.7vw;font-weight: bold;font-family: cursive;opacity: 80%;">DASHBOARD</span>
				<img src="img/fifa1.jpg" style="width: 100%;border-radius: 20px;height: 100%;padding: 0.3vw;opacity: 90%;">
			</div>

			<div style="width: 20vw;height: 10vw;background-color: blue;position: relative;margin-top:-0.1vw;z-index: 10;margin-left: 38vw;border-radius: 20px;border: 0.3vw solid gold;box-shadow:;" class="div4">
				<span style="position: absolute;z-index: 10;color: gold;margin-top: 3vw;margin-left: 3vw;font-size: 1.7vw;font-weight: bold;font-family: cursive;opacity: 80%;">ALL LOGINS</span>
				<img src="img/car1.jpg" style="width: 100%;border-radius: 20px;height: 100%;padding: 0.3vw;opacity: 100%;position: relative;z-index: -10;">
			</div>

			
				<div style="width:6vw;height: 6vw;background-color:green;position: relative;margin-left:45vw;margin-top: -23vw;text-align: center;border-radius: 50%;z-index: 10;">
				<a href="blog.php">
					<img src="img/angle.jpg" style="width:100%;height:100%;border: 0.5vw solid white;border-radius: 50%;opacity: ;" class="abutton" focus>
				</a>
			</div>
			

			<div style="width:6vw;height: 6vw;background-color: red;position: relative;margin-left:51vw;margin-top: -1vw;border-radius: 50%;position: relative;z-index: 10;">
				
				<a href="dashboard.php">
					<img src="img/circle.jpg" style="width:100%;height:100%;float:;
				border: 0.5vw solid white;border-radius: 50%;opacity: ;position: relative;z-index: 10;" class="cbutton">
				</a>
			</div>

			<div style="width:6vw;height: 6vw;background-color: purple;position: relative;margin-left:39vw;margin-top:-6vw;border-radius: 50%;position: relative;z-index: 10;">
				
				<a href="betting.php">
					<img src="img/block.jpg" style="width: 100%;height:100%;float: left;border: 0.5vw solid white;border-radius: 50%;opacity: ;z-index: 10;position: relative;z-index: 10;" class="bbutton">
				</a>
			</div>

			<div style="width:6vw;height: 6vw;background-color: blue;position: relative;margin-left:45vw;margin-top: -1vw;text-align: center;border-radius: 50%;position: relative;z-index: 10;">
				
				<a href="alladmins.php">
					<img src="img/x1.jpg" style="width: 100%;height:100%;border: 0.5vw solid white;border-radius: 50%;opacity: ;position: relative;z-index: 10;" class="xbutton">
				</a>
			</div><br>
			<div>
				<h6 style="color: white;position: relative;margin-left: 5vw;font-size: 2vw;">GBEDU</h6>
				<audio controls autoplay  style="display: none;">
				<source src="mp3/stalling.mp3" type="">
			</audio>
			</div>

			<style type="text/css">
				@media screen and(max-width: 700px){

					.div1{
						transform: rotate(90deg);
						display: none;
					}

					
				}
			</style>
			




				



				
			</div>
			<div class="col-md-1"></div>

		</div>
	</div>
	<script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
	<script type="text/javascript">
		
			alert("Pls operate this page on landscape, for best experience");
			// alert("I am Arrodes the AI in charge of the system..");
			// alert("If mobile pls tilt your device for best experience!");


			// $(function(){
			// 	$(".abutton").mouseenter(function(){
			// 		alert("Click to proceed to the website.")
			// 	});
			// 	$(".bbutton").mouseenter(function(){
			// 		alert("Click to proceed to the website.")
			// 	});
			// 	$(".cbutton").mouseenter(function(){
			// 		alert("Click to proceed to your clan's page")
			// 	});
			// 	$(".xbutton").mouseenter(function(){
			// 		alert("Click to proceed to the website.")
			// 	});
			// 	alert("Gbedu is essential,click the gbedu button to vibe")
			// })

		

	</script>



</body>
</html>