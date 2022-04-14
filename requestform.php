<?php

// CONNECT PHP FILE TO DATABASE
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');
 // DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: neflogin.php");
}




// SIGN IN FORM

if (isset($_POST['order'])) {


	$name = $_POST['name'];
	$category = $_POST['category'];
	$title = $_POST['title'];
	$quantity = $_POST['quantity'];
	$uc_price = $_POST['uc_price'];
	$game_name = $_POST['game_name'];
	$address = $_POST['address'];
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "payment_image/".$image;
	$acct_name = $_POST['acct_name'];
	$acct_num = $_POST['acct_num'];
	$amt_paid = $_POST['amt_paid'];
	$bank = $_POST['bank'];
	$email = $_POST['email'];
	$phone_num = $_POST['phone_num'];
	$message = $_POST['message'];
	

	// INSERT DATA INTO DATABASE TABLE

	$php = "INSERT INTO `orders` (`name`,`category`,`title`,`quantity`,`uc_price`,`game_name`,`address`,`image`,`acct_name`,`acct_num`,`amt_paid`,`bank`,`email`,`phone_num`,`message`)VALUES('$name','$category','$title','$quantity','$uc_price','$game_name','$address','$image','$acct_name','$acct_num','$amt_paid','$bank','$email','$phone_num','$message')";
	$query=mysqli_query($connect,$php);
	// $count= mysqli_num_rows($query);
	if ($query){
		echo "<script>alert('ORDER SUCCESSFUL')</script>";
	}
	else{
		echo "<script>alert('failed')</script>";
	}


	 

};


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>request form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<style type="text/css">
		
		
	
	body{
		/*background-color: black;*/
		margin: 20px;
		background-image: url(img/dice.jpg);
		/*background-size: 30vw;*/
	}
	form{
		background-color:black ;
		padding: 2vw;
		border-radius: 20px;
		border: 2px solid gold;
		opacity: 88%;
	}
	form input{
		background-color: black;
		color: white;
		border: 1px solid darkgoldenrod;
	}
	.st{
		font-size: 20px;
		color: white;
		font-family: cursive;
		font-weight: bolder;
	}
	.mt{
		color: black;
		background-color: darkgoldenrod;
		font-family: cursive;
		font-weight: bolder;
	}
	.header{
		color: gold;
		background-color: black;
		padding: none;
		border-radius: 0px;

	}
	.note{
		color: white;
		background-color: darkgoldenrod;
		border-radius: 20px;
		padding: 1vw;
	}
	.warning{
		color: red;
	}
	.return{
		background-color: red;
		color: white;
		padding: 0.5vw;
		border-radius: 10px;
	}


	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row form" style="margin-top:vw;">
		<div class="col-md-4">
			<center style="color: white;" class="note">
				<p class="note" style="color: white;font-weight: bolder;font-family: cursive;">
					<h5>WHY THE FORM?</h5>
				The NEF has resulted to using a request form to send the users orders
				to the appropiate vendors,and is fully controled by an AI and is automized
				therefore, to give maximum info to the vendors and to make data assesment easier for 
				machine, vendors and users,a request form had to be used for placing orders.
				And also due to the fact that the purchase of in-game currency, can be different for
				different users as they can buy currencies of different values, so a detailed form 
				to enable the vendor know your request is needed, thanks for your understanding.
				Keep earning!,<br>ALL PAYMENTS ARE TO BE MADE TO THE NEF CEO'S ACCT, TO ENSURE SAFETY <br>
				<i><u><b>Anuriam Chigozirim FIRST BANK <br>6040271560</b></u></i>
				<u><i><b>THE CEO</b></i></u>
				</p>
			<a href="shop.php"><button class="return">RETURN TO SHOP</button></a>

			</center>
		</div>
		<div class="col-md-4">
					<!-- <img src="img/coolguy.jpg" style="position: absolute;width: 100%;"> -->

					
			<br><br><form id="form" method="post" enctype="multipart/form-data" style="position: ;">
				<center><h2 class="header">REQUEST FORM</h2></center>
				<center><p class="warning">NOTE: the NEF is not responsible for any mistake incured due to the customer's wrong
				data,endeavour to FILL THE FORM WITH CARE</p></center>
				<title>NAME</title>
				<div class="form-group">
					<input type="" name="name" class="form-control" placeholder="FULL NAME">
				</div>
				<div class="form-group">
					<input type="text" name="category" class="form-control" placeholder="product category">
				</div><div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="product title">
				</div><div class="form-group">
					<input type="text" name="quantity" class="form-control" placeholder="quantity">
				</div><div class="form-group">
					<input type="text" name="uc_price" class="form-control" placeholder="Price (for UC, BC, WP..)">
				</div><div class="form-group">
					<input type="text" name="game_name" class="form-control" placeholder="game name(for BC, UC, WP..)">
				</div>
				<div class="form-group">
					<input type="text" name="address" class="form-control" placeholder="collection point(for deliveries)">
				</div>

				<center><h3 class="mt">PAYMENT VALIDATION</h3></center><br>
				<centr><h4 class="st">evidence of payment (image)</h4></center>
				<div class="form-group">
					<input type="file" name="image" required placeholder="input news image, LANDSCAPE IMAGES ONLY!" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="acct_name" class="form-control" placeholder="account name">
				</div>
				<div class="form-group">
					<input type="" name="acct_num" class="form-control" placeholder="account number">
				</div>
				<div class="form-group">
					<input type="" name="amt_paid" class="form-control" placeholder="amount paid">
				</div>
				<div class="form-group">
					<input type="" name="bank" class="form-control" placeholder="bank name">
				</div>
				<center><h3 class="mt">HOW DO WE CONTACT YOU?</h3></center>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="email">
				</div>
				<div class="form-group">
					<input type="text" name="phone_num" class="form-control" placeholder="phone number">
				</div><br>
				<center><h6 class="st" >message your vendor?</h6></center>
				<textarea style="width: 100%;" name="message"></textarea><br>
				<button class="btn btn-success btn-block" type="submit" name="order">PLACE ORDER</button>

			</form>

		</div>
		<div class="col-md-4">
		</div>

	</div>
</div>	

</body>
</html>

