
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
	<title>player dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrapcss.css">
	<link rel="stylesheet" type="text/css" href="pubg.css">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<!-- <link rel="stylesheet" type="text/css" href="arrodes/assistant.vbs"> -->
	<style type="text/css">
	body{
		background-image: url(img/dice.jpg);
		/*background-size: cover;*/
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
		.col-md-2{
			background-color: #171717;
			padding: 20px;
			border-bottom: 2px solid black;
			border: 2px solid black;
			border-radius: 10px;
		}
		.col-md-2 i{
			color: darkgoldenrod;
			font-size: 4vw;
			background-color: black;
			width: 100%;
			text-align: center;
			padding: 1vw;
			border-radius: 10px;
		}
		.h2{
			font-size: 2.5vw;
			color: darkgoldenrod;

		}
		.h3{
			text-align: center;
			color: darkgoldenrod;
			text-shadow: 0px 2px solid black;
			font-family: cursive;
			font-size: 20px;
			font-weight: bolder;
		}
		.content{
			text-align: center;
			color: floralwhite;
			font-family: cursive;
		}
		button{
			font-size: 20px;
			background-color: darkgoldenrod;
			padding: none;
			font-weight: bolder;
			color: black;
			border-radius: 10px;
			font-family: cursive;
			bottom: 0;

		}

	</style>
</head>
<body>

		<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `nefregister` ";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?>
				
						<center><h2 class="head"><i><b>welcome,<?php echo $row['username']?><GOLD></b></i></h2></center>

							<?php


            }

			?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
							<?php 

			$connect=mysqli_connect('localhost', 'root', '', 'nefdb');


            $php= "SELECT * FROM `nefregister` ";
            $query=mysqli_query($connect,$php);

            if ($row= mysqli_fetch_array($query)) {
            	?>
				
						<center><h5 class="h2"><i><b>what would you like to do today <?php echo $row['username']?>?<GOLD></b></i></h5></center>

							<?php


            }

			?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 card">
						<i class="fa fa-newspaper"></i><p class="h3">BLOG NEWS?</p>
						<div>
							<p class="content">
								The NO.1 news blog for nigerian gamers.You can get updates on the latest tournaments and giveaways here.All quality and amazing gaming news for you.
							<a href="blog.php">	<center><button>we move!</button></center></a>

							</p>
						</div>
					</div>
					<div class="col-md-2 card">
						<i class="fa fa-money-bill-alt"></i><p class="h3">BETTING?</p>
						<div>
							<p class="content">
								Bet on the predictions of your fav matches, its a simple system, the more the odds, the harder the prediction, make all ur payments to the CEO account only!!
							<a href="betting.php">	<center><button>we move!</button></center></a>
							</p>
						</div>
					</div>
					<div class="col-md-2 card">
						<i class="fa fa-robot"></i><p class="h3">AIRTIME AI?</p>
						<div>
							<p class="content">
								NEF presents to you,ARRODES, the AI that gives you airtime instantly,
								If you can win its guessing game,Beware though!, ARRODES no b ur mate
							<a href="mathgame.php">	<center><button>we move!</button></center></a>
							</p>
						</div>
					</div>
					<div class="col-md-2 card">
						<i class="fa fa-tv"></i><p class="h3">WATCH STREAMS?</p>
						<div>
							<p class="content">
								Quality stuff streamed by our best youtubers, enjoy the live stream of our matches here,make sure to follow your fav streamer on yt.
							<a href="streams.php">	<center><button>we move!</button></center></a>

							</p>
						</div>
					</div>
					<div class="col-md-2 card">
						<i class="fa fa-gamepad"></i><p class="h3">JOIN CLAN?</p>
						<div>
							<p class="content">
								to start earning, check out the clans, and join a clan u fit into,wait for your letter of acceptance.Then contribute,play,and earn,under the NEF
							<a href="mobile.php">	<center><button>we move!</button></center></a>
							</p>
						</div>
					</div>
					<div class="col-md-2 card">
						<i class="fa fa-cart-plus"></i><p class="h3">GO SHOPPING?</p>
						<div>
							<p class="content">
								Game software?,Hardware?,Youtube?,BC,UC,Diamonds?.We sell it all here,no more scams or stress,just click below.Remember, pay only to the CEO acct!!!
							<a href="shop.php">	<center><button>we move!</button></center></a>
							</p>
						</div>
					</div>
				</div>
			</div>


</body>
</html>
