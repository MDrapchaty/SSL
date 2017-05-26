<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>	
</head>
<body>



	<?php
	// Name: Matt Drapchaty
		$school = $_POST["school"];
		$personal = $_POST["personal"];

		echo "<br />" . "School email: {$school}" . "<br />";
		echo "Personal email: {$personal}" . "<br />";

		if(filter_var($personal, FILTER_VALIDATE_EMAIL)) {
			echo "This ($personal) email address is valid." . "<br />";
		}

		$fs_check = '/fullsail.edu/';
		$result = preg_match($fs_check, $school);
		
		if($result = 1){
			echo "This ($school) email address is a valid fullsail email.";
		}

	?>

</body>
</html>