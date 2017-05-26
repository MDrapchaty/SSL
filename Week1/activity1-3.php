<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>	
</head>
<body>

	<?php
	// Name: Matt Drapchaty

	$colors = array("Blue", "Cyan", "Purple", "Violent", "Yellow", "Orange",  "Green", "Olive", "Red", "Coral");
	
	for($count = 0; $count < 10; $count++){
		echo "Color " . $count . " is " . $colors[$count] . " <br />" ;
	}

	for($count = 9; $count > -1; $count--){
		echo "Color " . $count . " is " . $colors[$count] . " <br />" ;
	}
	for($count = 0; $count < 10; $count++){
		echo "Color " . $count . " is " . $colors[$count] . " <br />" ;
		$count++;
	}	

	?>
</body>
</html>