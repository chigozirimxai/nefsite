<?php
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');
// UPLOAD IMAGES AND CAPTION

// DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: bloglogin.php");
}

if (isset($_POST['upload'])) {
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "news_image/".$image;
	$headline= $_POST['headline'];
	$news= $_POST['news'];


	if ($image=="") {
		echo "<script>alert('The image, headline or news content is missing')</script>";
	}
	else{
		$php= "INSERT INTO `nefblog` (`image`,`headline`,`news`)VALUES('$image','$headline','$news')";
		$query= mysqli_query($connect,$php);
		if (move_uploaded_file($tempname, $folder)) {
			echo "<script>alert('NEWS UPLOADED!')</script>";
		}
		else{
			echo "<script>alert('failed to upload news!')</script>";

		}
	}
};
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UPDATE BLOG</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">
	<link rel="stylesheet" type="text/css" href="update.css">

	<style type="text/css">
		
	.update_body{
	margin: 0px;
	padding: none;
	/*background: linear-gradient(to right, black 40%,silver );*/
	background-image: url(img/dice.jpg);
	background-size: cove;
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
	text-shadow: 0px 2px red;
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
	height: 400px;
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
	height: 500px;
	width: 100%;
	border-radius: 25px;
	background-color: transparent;
}
.update_form .image{
	width: 100%;
	height: 300px;
	background-color: white;
	opacity: 80%;
}
.update_form .caption{
	width: 90%;
	height: 40px;
	border-radius: 2px solid black;
	outline: none;
	border-radius: 20px;
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
		width: 50%;
		height: 200px;
		padding: 50px;
		border-radius: 10px;
	}
	td{
		border: 2px solid grey;
		padding: 7px;
	}
	td img{
		width: 20vw;
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
	.table{
		overflow: auto;
		white-space: nowrap;
	}

	</style>
</head>
<body class="update_body">
	<center><h1><u><b>BLOGGERS</b></u></h1></center>
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				<form class="update_form" method="post" enctype="multipart/form-data">
				<div class="screen">
					<input type="file" name="image" class="image" required placeholder="input news image, LANDSCAPE IMAGES ONLY!">

					<center>
					<input type="" name="headline" class="caption" placeholder="headline" required><br><br>


				<!-- <input type="textarea" name="news" class="caption" placeholder="news content" style="height: 20vh;" required> -->
					<textarea ype="textarea" name="news" class="caption" placeholder="news content" style="height: 20vh;" required></textarea>
				


				</center><br><br>

				</div><br>

				
					<button name="upload" type="submit">
						<i class="fa fa-upload"></i>
					</button>
				</form><br>
				<a href="blog.php" class="back">
					<i class="fa fa-arrow-left"></i>
				</a>
				<a href="blog.php" class="album">
					view blog
				</a>
			</div>
		</div><br>

		<div class="row">
			
			<div class="col-md-">
				
				<div class="col-md-12 ">
					<div class="table">
				<table class="table-responsive">
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
						$php = "DELETE FROM `nefblog` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}
					// RETRIEVE PHOTOS FROM ALBUM AND DELETE BUTTON
					$php = "SELECT * FROM `nefblog`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php  echo $row['headline']  ?></td>
								<td><img src="img/<?php echo $row['image']?>"></td>
								<td>
									<a href="updateblog.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							<?php
						}
					}

					?>
				</table>
			</div>
			</div>

			<!-- <div class="col-md-6"></div> -->
		</div>
	</div>


<script type="text/javascript" src="bootstrap/js/jqueryjs.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>