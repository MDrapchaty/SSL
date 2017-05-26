<?php
 //Drapchaty, Matt
 // Start session

 	session_start();

//if session message is set, run code
 	if(isset($_SESSION['message']))
 	{
 		echo $_SESSION['message'];
 		unset($_SESSION['message']);
 	}

 	//create mysql connection
 	$user="root";
 	$pass="root";
 	$mysql = 'mysql:host=localhost;dbname=ssl;port=8889';
 	$dbh= new PDO($mysql, $user, $pass);

 	//if submit has been POSTed run code
 	if(isset($_POST['submit'])){

 		unset($_SESSION['error']); // start by clearing error session
 		$fname = $_POST['fname']; //create var for posted fname 
 		$lname = $_POST['lname']; //create var for posted lname
 		if(!filter_var($_POST['website'], FILTER_VALIDATE_URL)) { //validate website url
 			echo "<div class='message'>Invalid Website URL... please try again!</div>";
 			$_SESSION["error"] = 1; // set 
 		}else{  
 			$website = $_POST['website'];	 //if validate passes create var for website
 		}
 		
 		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { //validate email
 			echo "<div class='message'>Invalid EMAIL... please try again!</div>";
 			$_SESSION["error"] = 1;
 		}else{
 		$email = $_POST['email']; //var for email
 		}
 		if (!is_numeric($_POST['phone'])) { //validate phone
 			echo "<div class='message'>Invalid PHONE #... please try again!</div>";
 			$_SESSION["error"] = 1;
 		}else{
 		$phone = $_POST['phone'];
 		}

 		if (isset($_SESSION['error'])) {  //check to see if error
 			echo "Your contact was not created. Please try again!";
 		}else{ // otherwise run code
 		$dbh = new PDO($mysql, $user, $pass);
 		$stmt = $dbh->prepare("INSERT INTO clientsonline (fname,lname,phone,email,website ) VALUES(:fname,:lname,:phone,:email,:website);");
 		$stmt->bindParam(':fname', $fname);
 		$stmt->bindParam(':lname', $lname);
 		$stmt->bindParam(':phone', $phone);
 		$stmt->bindParam(':email', $email);
 		$stmt->bindParam(':website', $website);
 		$stmt->execute();

 		echo "<div class='message'>Your Client Was Successfully Added</div>"; //echo success msg 
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

	<h1 id="header">Client Contact Manager</h1>
	<h4>by Matt Drapchaty</h4>

	<form id="add" action="clients.php" method="POST">
		<h2>First Name</h2><input type="text" name="fname" value="" required></br>
		<h2>Last Name</h2><input type="text" name="lname" value="" required></br>
		<h2>Phone</h2><input type="text" name="phone" value="" required></br>
		<h2>Email</h2><input type="text" name="email" value="" required></br>
		<h2>Website</h2><input type="text" name="website" value="" required></br>
		<input type="submit" id="sub" name="submit" value="Save" />
	</form>
	
	<?php 

		$dbh = new PDO($mysql, $user, $pass); //connect
		$stmt=$dbh->prepare("SELECT * FROM clientsonline ORDER BY id"); // select from mysql
		$stmt->execute(); //execute stmt
		$result = $stmt->fetchAll(); // return assoc array

		foreach ($result as $row) {  // loop through array and display
		 	echo "<div align=center>";
		 	echo "<div class='client'>";
		 	echo "<h2>First: " . $row['fname'] . "</h2>" ;
		 	echo "<h2>Last: " . $row['lname'] . "</h2>" ;
		 	echo "<h2>Phone: " . $row['phone'] . "</h2>" ;
		 	echo "<h2>Email: " . $row['email'] . "</h2>" ;
		 	echo "<h2>WEB: " . $row['website'] . "</h2><br />" ;
		 	echo ' <a href="delete.php?id='.$row['id'].'"><button id="delete" class="buttonl">X</button></a>';
		 	echo ' <a href="update.php?id='.$row['id'].'"><button class="buttonr">Edit</button></a><br /> ';
		 	echo "</div></div>";
		 } 

	?>


</body>
</html>
