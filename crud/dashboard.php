
	
<?php
// Matt Drapchaty

session_start();

if(!empty($SESSION["user_name"])){
?>

	Welcome <b><?php  echo $_SESSION["user_name"];  ?></b> ~
	Click Here to <a href="logout.php">Logout</a>

<?php

$user_id = $_SESSION['user_id'];
$usernameInput = $_SESSION['user_name'];
$passwordInput = $_SESSION['pass_word'];
$avatarfile = $_SESSION['avatar_file'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySQL & PHP - by Matt</title>
	<meta name="description" content="">
	<meta name="author" content="">
</head>
<body>

	<?php
		//if (!isset($_SESSION['user_id'])) {       commented out code for this assignment
		//	echo "<h2>Users101 Dashboard</h2>";
		//	echo "Sorry - You must be logged in to access this area!<br>";
		//	echo "<a href='database_form.php'>Try Logging In</a>..  ";
		//}else{
			echo "<a href='profile.php'>My Profile</a>";
			echo "<h2>Users101 Dashboard</h2>";
			echo "<table width=80% align=center>";
			echo "<tr>";
			echo "<th>User ID</th>";
			echo "<th>User Name</th>";
			echo "<th>Password</th>";
			echo "<th>Profile Photo</th>";
			echo "<th>Action</th></tr>";
		



			$user = 'root';
			$pass = 'root';
			$salt = 'Supersaltytimes';

			$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

			$stmt = $dbh->prepare('SELECT * FROM users101 order by userid ASC;');
			$stmt->execute();
			$result = $stmt->fetchall(PDO::FETCH_ASSOC);

			foreach($result as $row){
				echo '<tr><td>' . $row['userid'] . '</td><td>' . $row['username'] . '</td><td>' .
				$row['password'] . '</td><td>' . $row['avatar'] . '</td><td><a href = "deleteuser.php?id=" ' . 
				$row['userid'] . '">Delete</a></td><td><a href = "updateuser.php?id=" ' . 
				$row['userid'] . '">Update</a></td>';
			}

		//}  commented out code for this assignment

		echo "</tr><table>";

	?>

</body>
</html>