<?php
$connect=mysqli_connect('localhost', 'root', '', 'nefdb');
	

 // DENY SESSION WITHOUT LOGIN
session_start();
if ($_SESSION['status'] != True) {
	header("location: clanlogin.php");
}

// SIGN IN FORM

if (isset($_POST['register'])) {
	
	$clan= $_POST['clan'];
	
	$tournament=$_POST['tournament'];
	$team_consent=$_POST['team_consent'];
	$acct_name=$_POST['acct_name'];
	$acct_num=$_POST['acct_num'];
	$amt_paid=$_POST['amt_paid'];
	$bank=$_POST['bank'];
	$email=$_POST['email'];
	$image= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder= "tournament_image/".$image;




	// INSERT DATA INTO DATABASE TABLE

	$php= "INSERT INTO `tournaments` (`clan`,`tournament`,`team_consent`,`acct_name`,`acct_num`,`amt_paid`,`bank`,`email`,`image`)VALUES('$clan','$tournament','$team_consent','$acct_name','$acct_num','$amt_paid','$bank','$email','$image')";
	$query=mysqli_query($connect,$php);
	// $count= mysqli_num_rows($query);
	if ($query){
		echo ('sign in succesful');
	}
	else{
		echo ('failed to sign in');
	}

};


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">

	<title>clan leaders</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="photobook.css">
	<link rel="stylesheet" type="text/css" href="jquery/css/jquerycss.css">

	<style type="text/css">

	     body{
	     	background-image: url(img/arrodes.jpg);
	     	/*background-size: cover;*/
	     	background-color: black;
	     }
		
		table{
			border-collapse: collapse;
			border: 2px solid black;
			background-color: black;
			width: 1vw;
			padding: 5px;
			text-align: center;

		}
		th{
			border: none;
			padding: 8px;
			color: gold;
			background-color: black;
			/*border-radius: 20px;*/
			border-left: 2px solid #171717;
		}
		td{
			border:;
			padding: 8px;
			color: white;
			background-color: #171717;
			border-left: 2px solid black;
			border-bottom: 2px solid black;


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
		h1{
			color: black;
			text-shadow: 0px 2px gold;
			font-family: serif;
		}
		h5{
			color: white;
			/*position: fixed;
			z-index: 10;
			position: relative;*/
		}
		h6{
			color: gold;
		}
		h2{
			font-size: 3vw;
			color: white;
			text-shadow: 0px 0.2vw gold;
		}
		.con2{
			background-color:#191919 ;
		}
		.b1{
			width: 70%;
			padding: 1vw;
			background-color: #171717;
			border: 2px solid #171717;
			color: gold;
			font-family: cursive;
			font-size: 2vw;
			font-weight: bolder;
			border-radius: 20px;
			animation-name: bt;
			animation-duration: 5s;
			animation-iteration-count: infinite;
			animation-timing-function: ease-in-out;

		}
		.b2{
			width: 70%;
			padding: 1vw;
			background-color: #171717;
			border: 2px solid #171717;
			color: gold;
			font-family: cursive;
			font-size: 2vw;
			font-weight: bolder;
			border-radius: 20px;
			animation-name: bt;
			animation-duration: 5s;
			animation-iteration-count: infinite;
			animation-timing-function: ease-in-out;
			display: none;

		}
		@keyframes bt{
			50%{
				background-color:gold;
			color: #171717;
			border: 2px solid #171717;
			}
			100%{
				background-color: #171717;
			color: gold;
			}
		}
		.form-control{
			background-color: black;
			color: gold;
			border: 2px solid white;
		}
		.admin{
		border-color:black;
		/*background-color: #ddd;*/
		margin-bottom: 120px;
		margin-top: -100px;
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
		height: 300px;
		overflow: auto;
		white-space: nowrap;
		width: 100%;
	}
	p{
		font-weight: bolder;
		font-family: cursive;
		/*display: inline-block;*/
		padding: 14px;
		width: 50px;
		font-size: 15px;
		text-align: center;
		text-overflow: ellipsis;

	}
	.admin{

	}
	form{
		display: none;
	}
	.cf{
		background-color: #171717;
		height: 300px;
		width: 100%;
		overflow: auto;
		white-space: nowrap;
		padding: 20px;
		border: 2px solid white;
		border-radius: 10px;
	}
	</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h1>CLAN LEADERS</h1></center>
				<center><h5><i>Noob leaders, munna no too smoke vawulence loud..</i></h5></center><br>

				<centr><h6><i>No dull moment, start to dey pick ur new members..</i></h6></center>


			</div>
		</div>
	</div><br>

	<div  class="container">
		<div class="row">
			<div class="col-md-"></div>
			<div class="col-md-12 cf">
				<table class="table-responsive">
					<tr>
						<th>ID</th>
						<th>chosen clan</th>
						<th>first name</th>
						<th>last name</th>
						<th>pubg type</th>
						<th>game name</th>
						<th>game ID</th>
						<th>current rank</th>
						<th>Highest rank</th>
						<th>gaming hour </th>
						<th>play time</th>
						<th>bank transfer ability</th>
						<th>skills</th>
						<th>facebook contact</th>
						<th>whatsapp</th>
						<th>email</th>
						<th>phone number</th>
						<th>qualified</th>
						<th>loyalty</th>
						<!-- <th>delete</th> -->
						<th>message</th>



						

					</tr>
					<?php

                         $connect = mysqli_connect("localhost","root","","nefdb");
//                          // DENY SESSION WITHOUT LOGIN
// session_start();
// if ($_SESSION['status'] != True) {
// 	header("location: clanlogin.php");
// }

                         // DELETING MESSAGES
                         
                         if (isset($_GET['delete'])) {
						$id = $_GET['delete'];
						$php = "DELETE FROM `pubgclanform` WHERE `id`='$id'";
						$query = mysqli_query($connect,$php);
					}



					
					$php = "SELECT * FROM `pubgclanform`";
					$query = mysqli_query($connect,$php);
					$count = mysqli_num_rows($query);
					if ($count>0) {
						while ($row = mysqli_fetch_assoc($query)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['clan']?></td>
								<td><?php echo $row['firstname']?></td>
								<td><?php echo $row['lastname']?></td>
								<td><?php echo $row['pubgtype']?></td>
								<td><?php echo $row['game_name']?></td>
								<td><?php echo $row['game_id']?></td>
								<td><?php echo $row['current_rank']?></td>
								<td><?php echo $row['highest_rank']?></td>
								<td><?php echo $row['gaming_hour']?></td>
								<td><?php echo $row['play_time']?></td>
								<td><?php echo $row['bank_transfer']?></td>
								<td><?php echo $row['skill']?></td>
								<td><?php echo $row['facebook']?></td>
								<td><?php echo $row['whatsapp']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['phone_number']?></td>
								<td><?php echo $row['qualified']?></td>
								<td><?php echo $row['loyalty']?></td>


								<!-- <td>

									<a href="clanleaders.php? delete=<?php echo $row['id'] ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td> -->
								<td>
									<a href="mailto:<?php echo $row['email'] ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</td>

							</tr>
							<?php
						}
					}


					
					?>
				</table>
			</div>
			<div class="col-md-"></div>

		</div>
	</div><br><br>

	<div class="container">
		<div class="row">
			<div class="col-md-12" class="con2">
				<center><i><h2>COMRADE ABI U NO WEAK!, OYA REGISTER UR CLAN FOR TOURNAMENT<br><div style="width: 8vw;height: 8vw;border-radius: 50%;"><img src="img/laugh.jpg" style="width: 100%;"></div></h2></i></center>

				<center><button class="b1">RESISTER FOR TOURNAMENTS</button></center><br>
				<center><button class="b2">CLOSE</button></center><br>

			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<form method="post" class="form" enctype="multipart/form-data">
					<center><h6>PLEASE MAKE SURE TO PAY THE COMPLETE AMOUNT FOR THE TOURNAMENT YOU ARE REGISTERING FOR!
					INPUT YOUR CORRECT BANK DETAILS, YOUR MEMBERS TRUST YOU,<br><i>no fuck up abeg....</i></h6></center>
					<div class="form-group">
						<input type="text" name="clan" placeholder="what clan do you lead?" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="tournament" placeholder="which of the tournaments are you interested in?" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="team_consent" placeholder="Do your members consent to playing this match?" class="form-control">
					</div>
				
			</div>
			<div class="col-md-6 form" style="display: none;">
					
						<center><h6><i>PAYMENT DETAILS<br>the clan members are to contribute via transfer to d clan leader, and if their clan wins a BR match they all get a gain.</i></h6></center>
					<div class="form-group">
						<input type="text" name="acct_name" placeholder="acct name" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="acct_num" placeholder="acct_number" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="amt_paid" placeholder="how much did u pay?" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="bank" placeholder="bank name" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="email" placeholder="email" class="form-control" reuired>
					</div>
					<div class="form-group">
						<input type="file" name="image" placeholder="evidence of payment (image)" class="form-control" requird>
					</div>
					<button class="btn btn-success btn-block" type="submit" name="register">REGISTER</button><br>
					</form>
			</div>
		</div>
	</div>
<div class="container mt-5">
			<center><i><h5 style="float: left;">message from the CEO!</h5></i></center><br><br>

	<div class="row">

		<div class="col-md-6 ceo mt-4">
		<frae>
				<?php

    $connect = mysqli_connect("localhost","root","","nefdb");

     	$php = "SELECT * FROM `clanchatadmin`";
		$query = mysqli_query($connect,$php);
		$count = mysqli_num_rows($query);
		if ($count>0) {
		while ($row = mysqli_fetch_assoc($query)) {

	?>



	<br><br><br><br><br><div class="container admin card">
		<img src="img/neflogo.jpeg" alt="Avatar" class="right" style="width: 100%;padding: 0.5vw;margin-top: -7px;">
		<i><p focus><?php echo $row['message'] ?></p></i>
		<!-- <span class="time-left">11:05</span> -->
	</div>

	<?php



			}
		}


					
	?>
</div>
	<div class="col-md-6 mt-4">
		<a href="clanleaderschat.php"><center><button class="btn btn-primary btn-block"><i>CLAN LEADERS CHAT</i></button></center></a>
	</div>
	<!-- <div class="col-md-4"></div> -->
		</div>
	</div>
</div>















	  <script type="text/javascript" src="jquery/js/jqueryjs.js"></script>
<script type="text/javascript" src="jquery/js/jqueryui.js"></script>
<script type="text/javascript">
	$(function(){
		$(".b1").click(function(){
					
					$(".form").show(200);
					
					$(".b2").show(200);
					$(".b1").hide(200);


				})
				$(".b2").click(function(){
					
					$(".b1").show(200);
					
					$(".form").hide(200);
					$(".b2").hide(200);


				})
		
	})
</script>
</body>
</html>