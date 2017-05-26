<! -- Matt Drapchaty  -->

<?php
$user = 'root';  //create var for stored user 
$pass = 'root';  //create var for stored pass
$db = new PDO('mysql:host=localhost; dbname=ssl; port:8889', $user, $pass);  //setup pdo connection as var


if (isset($_POST['submit'])) {   //check to see if submit has been posted, if so run block of code
	$fruitname = $_POST['fruitname'];  // gather user input from post
	$fruitcolor = $_POST['fruitcolor'];

	$stmt = $db->prepare("INSERT INTO fruits (fruitname, fruitcolor) VALUES (:fruitname, :fruitcolor);");  // preparing insert

	$stmt->bindParam(':fruitname', $fruitname);  //bind params
	$stmt->bindParam(':fruitcolor', $fruitcolor);
	$stmt->execute();  //run statment
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fruits</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<h1>Drap's Fruit Table</h1>
	<section class="form-section" >
		<form action="fruits.php" method="post">
			<label><b>Fruit Name:</b> <input type="text" name="fruitname" value="" required></label>
			<label><b>Fruit Color:</b> <input type="text" name="fruitcolor" value="" placeholder="" required></label>
			<input id="btn" type="submit" name="submit" value="Submit">
		</form>
	</section>

	<section class="table-section">
		<table>
			<tr>
				<th>Fruit Id</th>
				<th>Fruit Name</th>
				<th>Fruit Color</th>
				<th>Action</th>
			</tr>


<?php

$stmt = $db->prepare('SELECT * FROM fruits order by fruitid ASC;'); //prepare select

$stmt->execute();   //run statement

$result = $stmt->fetchall();  //result var set to fetchall

foreach ($result as $row) {  //for loop to echo each row
	echo '<tr><td>' . $row['fruitid'] . '</td><td>' . $row['fruitname'] . '</td><td>' . $row['fruitcolor'] . '</td><td><a href="deletefruit.php?id=' . $row['fruitid'] . ' ">Delete</a></td>';
}

?>


		</table>
	</section>	
</body>
</html>