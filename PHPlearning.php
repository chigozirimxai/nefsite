<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>php learning</title>
</head>
<body>


	FIRST WE LEARN HOW STUFF IS SENT TO THE DTABASE AND THE INFO SENT IS USED TO VALIDATE STUFF, EG LOGIN IN STEPS, THEREFORE WE REFERENCE TO LOGIN FORMS AND SIGN IN FORMS 


	<?php

// CONNECT PHP FILE TO DATABASE

	<<<<<<<<STEP 1. WE CONNEXT USING THE SYNTAX BELOW AFTER OPENING PHP ENVO>>>>>>>>>>>>>>>>>>>>>>
$connect=mysqli_connect('localhost', 'root', '', 'photobookdb');

// Testing database conection

// if ($connect) {
// 	alert "connected";

// }
// else{
// 	alert "not connected";
// }

// SUBMIT INPUTS

// LOGIN FORM



// STEP 2. HOW TO SEND STUFF TO DATABASE

// SIGN IN FORM

if (isset($_POST['name of the button goes here'])) {>>>>>>>>>>>>>>>>>>>>> we write this code and open it, this shows the name of our button to be clicked b4 the content of the form is submitted>>>>>>>>>>>>>>>


	$firstname= $_POST['firstname'];  >>>> here we call out the names of the form to be posted>>>>>>>>>
	$lastname=$_POST['lastname'];>>>> here we call out the names of the form to be posted>>>>>>>>>the one with the dollar sign is d name in d form and the green one is its name in the database>>>>>>>>
	

	// INSERT DATA INTO DATABASE TABLE

	>>>>>>>. look at how the proces is and master it, anything that closes with bracket must be closed with semicolon and the names of a colunm in the db has slanted quotes and the name on html side comes with dollar>>>>...

	$php= "INSERT INTO `name of the table goes here` (`firstname`,`lastname`)VALUES('$firstname','$lastname')";>>it is arranged accordingly ..first name came first  in db bracket it also came first in html bracket<<

	$query=mysqli_query($connect,$php);>>>next step, write this code, it tells the page to connect>>>>
	// $count= mysqli_num_rows($query);

	<<<<<,<<<<<<< next step is the conditional statements>>>>>>>>>>>>
	if ($query){
		echo ('sign in succesful');>>>>>>>>>this code means if the query i told to connect happens say the echo message>>>>>>>  
	}
	else{
		echo ('failed to sign in');  <<<<<<<< this simply says that else , if it didnt connect ,,say this echo>>>>.>>>
	}

};







if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	// CHECK FOR EMPTY INPUTS
	
	if ($email=="" || $password==""){
		echo "enter email and password";
	}
	// IF INPUT NOT EMPTY
	else{
		$php= "SELECT * FROM `adminlogin` WHERE(`email`='$email' and `password`='$password')";
		$query= mysqli_query($connect,$php);
		$count= mysqli_num_rows($query);

		// EXECUTE CODE IF EMAIL AND PASSWORD IS THE SAME WITH DATABASE

		if ($count>0) {
			$row= mysqli_fetch_assoc($query);
			session_start();
			header("location: profile.php");
		}

		// EXECUTE ELSE STATEMENTS FOR WRONG INPUT
		else{
			echo "incorrect email or password";
		}
	}
};

?>

</body>
</html>