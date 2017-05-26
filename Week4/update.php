




<?php
//Matt Drapchaty


session_start(); //start session

$_SESSION["message"] = "<div class='message'>Your Client Update Was Successful!</div>";

$user="root";
$pass="root"; //connect to db
$mysql="mysql:host=localhost;dbname=ssl;port=8889";
$dbh = new PDO($mysql, $user, $pass);

$clientid = $_GET['id'];

$stmt=$dbh->prepare("SELECT * FROM clientsonline WHERE id = :id"); // select stmt
$stmt->bindParam(':id', $clientid);
$stmt->execute();
$result=$stmt->fetchAll();


if(isset($_POST['submit'])){  //if submit has been post run code

 		unset($_SESSION['error']);
 		$fname = $_POST['fname'];
 		$lname = $_POST['lname'];
 		if(!filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
 			echo "<div class='message'>Invalid Website URL... please try again!</div>";
 			$_SESSION["error"] = 1;
 		}else{
 			$website = $_POST['website'];	
 		}
 		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
 			echo "<div class='message'>Invalid EMAIL... please try again!</div>";
 			$_SESSION["error"] = 1;
 		}else{
 		$email = $_POST['email'];
 		}
 		if (!is_numeric($_POST['phone'])) {
 			echo "<div class='message'>Invalid PHONE #... please try again!</div>";
 			$_SESSION["error"] = 1;
 		}else{
 		$phone = $_POST['phone'];
 		}


 	if (isset($_SESSION['error'])) { //if session error is set run code
 			echo "Your contact was not created. Please try again!";
 		}else{	// else update
	$stmt = $dbh->prepare("UPDATE clientsonline SET fname='".$fname."', lname='".$lname."', phone='".$phone."', email='".$email."', website='".$website."' WHERE id = :id");
	$stmt->bindParam(':id', $clientid);
	$stmt->execute();

	header('Location: clients.php');
	die();
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Drap's Contact List</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

	<h1 id="header">Update Client Contact</h1>
	<h4>by Matt Drapchaty</h4>

	<form id="add" action="" method="POST">
		<h2>First Name</h2><input type="text" name="fname" value=<?php echo '"'.$result[0]['fname'].'"'; ?> required/></br>
		<h2>Last Name</h2><input type="text" name="lname" value=<?php echo '"'.$result[0]['lname'].'"';?> required/></br>
		<h2>Phone</h2><input type="text" name="phone" value=<?php echo '"'.$result[0]['phone'].'"';?> required/></br>
		<h2>Email</h2><input type="text" name="email" value=<?php echo '"'.$result[0]['email'].'"';?> required/></br>
		<h2>Website</h2><input type="text" name="website" value=<?php echo '"'.$result[0]['website'].'"';?> required/></br>
		<input type="submit" name="submit" value="Save" />
	</form>

</body>
</html>
