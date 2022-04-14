<?php
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');

// DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: shopadminlogin.php");
}

// UPLOAD IMAGES AND CAPTION

if (isset($_POST['upload'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "shop_image/".$image;
	$product= $_POST['product'];
	$description= $_POST['description'];


	if ($image=="") {
		echo "<script>alert('The image, headline or news content is missing')</script>";
	}
	else{
		$php= "INSERT INTO `shop1` (`image`,`product`,`description`)VALUES('$image','$product','$description')";
		$query= mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
			echo "<script>alert('AD UPLOADED!')</script>";
		}
		else{
			echo "<script>alert('failed to upload AD!')</script>";

		}
	}
};


if (isset($_POST['upload2'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "shop_image/".$image;
	$product= $_POST['product'];
	$description= $_POST['description'];


	if ($image=="") {
		echo "<script>alert('The image, headline or news content is missing')</script>";
	}
	else{
		$php= "INSERT INTO `shop3` (`image2`,`product2`,`description2`)VALUES('$image','$product','$description')";
		$query= mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
			echo "<script>alert('AD UPLOADED!')</script>";
		}
		else{
			echo "<script>alert('failed to upload AD!')</script>";

		}
	}
};


if (isset($_POST['upload3'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "shop_image/".$image;
	$product= $_POST['product'];
	$description= $_POST['description'];


	if ($image=="") {
		echo "<script>alert('The image, headline or news content is missing')</script>";
	}
	else{
		$php= "INSERT INTO `shop4` (`image3`,`product3`,`description3`)VALUES('$image','$product','$description')";
		$query= mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
			echo "<script>alert('AD UPLOADED!')</script>";
		}
		else{
			echo "<script>alert('failed to upload AD!')</script>";

		}
	}
};
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UPDATE SHOP</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">
	<link rel="stylesheet" type="text/css" href="update.css">

	<style type="text/css">
		
	.update_body{
	margin: 0px;
	padding: none;
	/*background: linear-gradient(to top right, black 30%,silver );*/
	background-image: url(img/dice.jpg);
	background-size: cove;
	background-color: black;
}
center p{
	color: red;
	background-color: white;
	padding: 10px;
	width: 15vw;
	border-radius: 10px;
	font-weight: bolder;
}
h1{
	color: gold;
	margin-top: 20px;
	font-family: cursive;
	text-shadow: 0px 2px black;
}
.update_form{
	margin-top: 50px;
	width: 100%;
	border-radius: 30px;
	padding: 15px;
	background-color: black;
	box-shadow: 0px 2px 2px grey;
	opacity: 80%;
	border: 2px solid gold;

	
}
.update_form input{
	/*height: 400px;*/
	width: 100%;
	border-radius: 25px;
	background-color: white;
}
.update_form input[type="file"]{
	color: transparent;
}
.update_form button{
	border: none;
	outline: none;
	background-color: transparent;
}
.update_form button i{
	font-size: 30px;
	padding: 13px;
	borderle;
	border-radius: 50px;
	background-color:green;
	border: 2px solid green;
	margin-left: 120px;
	margin-top: 20px;ar

}
.col-md-4 .back{
	float: left;
	text-decoration: none;
	font-size: 27px;
	color: green;


}
.col-md-4 .album{
	text-decoration: none;
	color: darkgreen;
	background-color: grey;
	padding: 6px 10px;
	text-transform: capitalize;
	font-size: 18px;
	float: right;
	border-radius: 20px;
	font-weight: bold;
	margin: 10px;
}
.carousel{
	margin-left: 60px;
	margin-top: 100px;
	width: 500px;
}
.carousel-item{
	background-color: black;
}
.carousel-item img{
	opacity: 50%;
}
.carousel-caption h3{
	margin-top: -200px;
	color: orange;
	
}
.update_form .screen{
	/*height: 500px;*/
	width: 100%;
	border-radius: 10px;
	background-color: black;
}
.update_form .image{
	width: 100%;
	/*height: 300px;*/
	background-color: white;
	opacity: 80%;
}
.update_form .caption{
	width: 90%;
	/*height: 40px;*/
	border-radius: 2px solid black;
	outline: none;
	border-radius: 10px;
}
.album{
	background-color: gold;
	padding: 5px;
	outline: none;
	border-radius: 20px;
}

table{
		border-collapse: collapse;
		border: 2px solid black;
		background-color: black;
		color: white;
		width: 100%;
		height: 40%;
		/*padding: 50px;*/
		border-radius: 20px;
	}
	td{
		border: 2px solid grey;
		/*padding: 7px;*/
		width: 100%;
	}
	td img{
		width: 100%vw;
		height: 10vw;
	}
	td a i{
		font size: 2vw;
		padding-left: 10px;
		color: red;
	}
	td a i:hover{
	
		color: darkred;
	}

		table{
			border-collapse: collapse;
			border:  ;
			background-color: black;
			width: 1vw;
			/*padding: 5px;*/
			text-align: center;
			border: 2px solid white;

		}
		@media screen and(max-width: 700px){
			table{
				padding:0px;
			}
		}
		th{
			border: 2px solid black;
			padding: 8px;
			color: gold;
			background-color: #353535;
		}
		td{
			border: 2px solid #353535;
			padding: 8px;
			color: white;
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
		.con1{
			height: 300px;
			width: 100%;
			background-color: #2A2A2A;
			border-radius: 10px;
			padding: 10px;
			margin-top: 10px;
			display: none;
			border: 2px solid white;
				overflow: auto;
			white-space: nowrap;

		}
		.con2{
			height: 300px;
			width: 100%;
			background-color: #2A2A2A;
			border-radius: 10px;
			padding: 10px;
			margin-top: 10px;
			display: none;
			border: 2px solid white;
				overflow: auto;
			white-space: nowrap;
		}
		.con3{
			height: 300px;
			width: 100%;
			background-color: #2A2A2A;
			border-radius: 10px;
			padding: 10px;
			margin-top: 10px;
			display: none;
			overflow: auto;
			white-space: nowrap;
			border: 2px solid white;



		}
		.con4{
			width: 100%;
			background-color: #2A2A2A;
			padding: 20px;
			overflow: auto;
			white-space: nowrap;
			height: 300px;
			border-radius: 10px;
			margin-top: 3vw;
			border: 2px solid white;
			margin-bottom: 2vw;
		}
		center button{
			background-color: darkgoldenrod;
			color: black;
			font-weight: bold;
			border-radius: 5px;
			width: 100%;
			padding: 0.5vw;
			margin-top: 10px;
		}
		.close1{
			display: none;
		}
		.close2{
			display: none;
		}
		.close3{
			display: none;
		}
		.container img{
		float: left;
		max-width: 60px;
		width: 100%;
		margin-right: 20px;
		border-radius: 50%;
	}
	.ceo{
		background-color: #171717;
		padding: vw;
		border-radius: 10px;
		border: 2px solid #4E4E4E;
		z-index: 10;
		position: ;
		height: 200px;
		overflow: auto;
		white-space: nowrap;
		width: 100%;
		margin-bottom: 100px;
		margin-top: -30vw;
	}
		.admin{
		border-color:black;
		/*background-color: #ddd;*/
		margin-bottom: 120px;
		margin-top: -200px;
		background-color: gold;
		border-bottom: 2px solid gold;
		border-radius: 20px;
		width: 500px;
		border: 2px solid white;
		padding: 0.5vw;
		/*position: absolute;*/
		/*display:inherit;*/
		box-sizing: content-box;
	}
	img{
		
	}

	</style>
</head>
<body class="update_body">
	<!-- <center><h1><u><b>GAME SOFTWARE (SHOP 1)</b></u></h1></center> -->
	<div class="container">
		<div class="row">
			<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
			<div class="col-md-4">
				<form class="update_form" method="post" enctype="multipart/form-data">
				<div class="screen">
					<input type="file" name="image" class="image" required placeholder="input news image, LANDSCAPE IMAGES ONLY!">

					<center>
					<input type="" name="product" class="caption" placeholder="product name (SHOP 1)" required><br><br>


				<!-- <input type="textarea" name="news" class="caption" placeholder="news content" style="height: 20vh;" required> -->
					<textarea ype="textarea" name="description" class="caption" placeholder="product description and details of sale" style="height: 20vh;" required></textarea>
				


				</center><br><br>

				</div><br>

				
					<button name="upload" type="submit">
						<i class="fa fa-upload"></i>
					</button>
				</form><br>
				<a href="blog.php" class="back">
					<i class="fa fa-arrow-left"></i>
				</a>
				<a href="shop.php" class="album">
					VIEW SHOP
				</a>
			</div>
			
			<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
		    <div class="col-md-4">
				<form class="update_form" method="post" enctype="multipart/form-data">
				<div class="screen">
					<input type="file" name="image" class="image" required placeholder="input product image, LANDSCAPE IMAGES ONLY!">

					<center>
					<input type="" name="product" class="caption" placeholder="product name ( SHOP2)" required><br><br>


				<!-- <input type="textarea" name="news" class="caption" placeholder="news content" style="height: 20vh;" required> -->
					<textarea ype="textarea" name="description" class="caption" placeholder="product description and details of sale" style="height: 20vh;" required></textarea>
				


				</center><br><br>

				</div><br>

				
					<button name="upload2" type="submit">
						<i class="fa fa-upload"></i>
					</button>
				</form><br>
				<a href="blog.php" class="back">
					<i class="fa fa-arrow-left"></i>
				</a>
				<a href="shop.php" class="album">
					VIEW SHOP
				</a>
			</div>


			<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

		
			<div class="col-md-4">
					<form class="update_form" method="post" enctype="multipart/form-data">
				<div class="screen">
					<input type="file" name="image" class="image" required placeholder="input news image, LANDSCAPE IMAGES ONLY!">

					<center>
					<input type="" name="product" class="caption" placeholder="product name ( SHOP 3)" required><br><br>


				<!-- <input type="textarea" name="news" class="caption" placeholder="news content" style="height: 20vh;" required> -->
					<textarea ype="textarea" name="description" class="caption" placeholder="product description and details of sale" style="height: 20vh;" required></textarea>
				


				</center><br><br>

				</div><br>

				
					<button name="upload3" type="submit">
						<i class="fa fa-upload"></i>
					</button>
				</form><br>
				<a href="blog.php" class="back">
					<i class="fa fa-arrow-left"></i>
				</a>
				<a href="shop.php" class="album">
					VIEW SHOP
				</a>
			</div>

			</div>
			<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

			<div class="container">
				<div class="row">
					<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
					
					<div class="col-md-4">
						<center><button class="show1"><i>shop1 ads</i></button></center>
						<center><button class="close1"><i>close</i></button></center>


						<div class="con1"> 
						

				<center>
				<table style="display: none;" class="table1">
					<tr>
						<th>HEADLINE</th>
						<th>photos </th>
						<th>delete</th>

					</tr>
					<?php
					$connect= mysqli_connect("localhost","root","","nefdb");
						
					// DELETE PHOTOS FROM DATABASE

					if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `shop1` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
					// RETRIEVE PHOTOS FROM ALBUM AND DELETE BUTTON
					$php = "SELECT * FROM `shop1`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php  echo $row['product']  ?></td>
								<td><img src="img/<?php echo $row['image']?>"></td>
								<td>
									<a href="sellers.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							<?php
						}
					}

					?>
				</table>
			</center>
			
					</div>
				</div>
					<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
					<div class="col-md-4">
						<center><button class="show2"><i>shop2 ads</i></button></center>
						<center><button class="close2"><i>close</i></button></center>

					<div class="con2">

				<center>
				<table style=" display: none;" class="table2">
					<tr>
						<th>HEADLINE</th>
						<th>photos </th>
						<th>delete</th>

					</tr>
					<?php
					$connect= mysqli_connect("localhost","root","","nefdb");
						
					// DELETE PHOTOS FROM DATABASE

					if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `shop3` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
					// RETRIEVE PHOTOS FROM ALBUM AND DELETE BUTTON
					$php = "SELECT * FROM `shop3`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php  echo $row['product2']  ?></td>
								<td><img src="img/<?php echo $row['image2']?>"></td>
								<td>
									<a href="sellers.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							<?php
						}
					}

					?>
				</table>
			</center>
			</div>
					</div>
					<!-- VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV -->
					<div class="col-md-4">
						<center><button class="show3"><i>shop3 ads</i></button></center>
						<center><button class="close3"><i>close</button></center>
						<div class="con3">

				<center>
				<table style="display: none;" class="table3">
					<tr>
						<th>HEADLINE</th>
						<th>photos </th>
						<th>delete</th>

					</tr>
					<?php
					$connect= mysqli_connect("localhost","root","","nefdb");
						
					// DELETE PHOTOS FROM DATABASE

					if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `shop4` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
					// RETRIEVE PHOTOS FROM ALBUM AND DELETE BUTTON
					$php = "SELECT * FROM `shop4`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php  echo $row['product3']  ?></td>
								<td><img src="img/<?php echo $row['image3']?>"></td>
								<td>
									<a href="sellers.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							<?php
						}
					}

					?>
				</table>
			</center>
		</div>
					</div>
				</div>
			</div>
		
	<div  class="container">
		<div class="row">
			<div class="col-md-"></div>
			<div class="col-md-12 co">
				<center><h1>CUSTOMER REQUESTS</h1></center>
				<table class="table-responsive">
					<tr>
						<th>ID</th>
						<th>product name</th><
						<th>category</th>
						<th>title</th>
						<th>quantity</th>
						<th>GAME CURRENCY VALUE</th>
						<th>game name</th>
						<th>address</th>
						<th>acct name</th>
						<th>acct num </th>
						<th>amt paid</th>
						<th>bank name</th>
						<th>email</th>
						<th>phone number</th>
						<th>message</th>
						<!-- <th>delete</th> -->
						<th>reply</th>
						<th>evidence</th>

						<!-- <th>whatsapp</th>
						<th>email</th>
						<th>phone number</th>
						<th>qualified</th>
						<th>loyalty</th> -->


						

					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");
                         // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: clanlogin.php");
// }

                         // DELETING MESSAGES
                         
                         if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `orders` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}



					
					$php = "SELECT * FROM `orders`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name']?></td>
								<td><?php echo $row['category']?></td>
								<td><?php echo $row['title']?></td>
								<td><?php echo $row['quantity']?></td>
								<td><?php echo $row['uc_price']?></td>
								<td><?php echo $row['game_name']?></td>
								<td><?php echo $row['address']?></td>
								<td><?php echo $row['acct_name']?></td>
								<td><?php echo $row['acct_num']?></td>
								<td><?php echo $row['amt_paid']?></td>
								<td><?php echo $row['bank']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['phone_num']?></td>
								<td><?php echo $row['message']?></td>
								

<!-- 
								<td>

									<a href="sellers.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td> -->
								<td>
									<a href="mailto:<?php echo $row['email'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>
								<!-- <td><i class="fa fa-check" style="color: red;"></i></td> -->

								<td style=""><img src="shop_image/<?php echo $row['image']?>"></td>

							</tr>

							<?php
						}
					}


					
					?>
				</table>
			</div><br><br><br><br>
			<br><br><br><div class="container">
			<!-- <center><i><h5 style="float: left;color: white;background-color:#2A2A2A ;padding: 0.5vw;border-radius: 5px;margin-top: -30vw;">message from the CEO!</h5></i></center><br><br> -->

	<div class="row">

		<div class="col-md-6 ceo ">
		<frae>
				<?php

    $connect = mysqli_connect("localhost","root","","nefdb");

     	$php = "SELECT * FROM `sellerchatadmin` ORDER BY `id` DESC";
		$query = mysqli_query($connect,$php);
		$count = mysqli_num_rows($query);
		if ($count>0) {
		while ($row = mysqli_fetch_assoc($query)) {

	?>



	<!-- <br><br><br><br><br><br> --><div class="container admin card mt-5">
		<img src="img/neflogo.jpeg" alt="Avatar" class="right" style="width: 100%;padding: 0.5vw;margin-top: -7px;">
		<i><p focus><?php echo $row['message2'] ?></p></i>
		<!-- <span class="time-left">11:05</span> -->
	</div>

	<?php



			}
		}


					
	?>
</div><br><br>
		



<!--  -->
<script type="text/javascript" src="bootstrap/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>

<script type="text/javascript" src="bootstrap/js/popper.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
	$(function(){
				$(".show1").click(function(){
					
					$(".con1").show(200);
					
					$(".table1").show();
					$(".close1").show(200);
					$(".show1").hide(200);


				})
				// SHOW LOGIN FORM AND SIGN IN BUTTON
				$(".close1").click(function(){
					$(".con1").hide(200);
					$(".table1").hide(200);
					$(".show1").show();
					$(".close1").hide();
				
				})
				// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX?

				$(".show2").click(function(){
					
					$(".con2").show(200);
					
					$(".table2").show();
					$(".close2").show(200);
					$(".show2").hide(200);


				})
				// SHOW LOGIN FORM AND SIGN IN BUTTON
				$(".close2").click(function(){
					$(".con2").hide(200);
					$(".table2").hide(200);
					$(".show2").show();
					$(".close2").hide();
				
				})

			// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

			$(".show3").click(function(){
					
					$(".con3").show(200);
					
					$(".table3").show();
					$(".close3").show(200);
					$(".show3").hide(200);


				})
				// SHOW LOGIN FORM AND SIGN IN BUTTON
				$(".close3").click(function(){
					$(".con3").hide(200);
					$(".table3").hide(200);
					$(".show3").show();
					$(".close3").hide();
				
				})


			})
</script>
</body>
</html>

