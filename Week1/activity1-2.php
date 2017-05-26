<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>	
</head>
<body>

	<?php
	// Name: Matt Drapchaty


	function calc_grade($grade){
		if($grade < 60){
			echo "Grade: F";
		}elseif ($grade < 70) {
			echo "Grade: D";
		}elseif ($grade < 80) {
			echo "Grade: C";
		}elseif ($grade < 90) {
			echo "Grade: B";
		}elseif($grade < 101){
			echo "Grade: A";
		}else{
			echo " You got an A++!";
		}
	}

		  calc_grade(94); ?> <br />
	<?php calc_grade(54); ?> <br />
	<?php calc_grade(89.9); ?> <br />
	<?php calc_grade(60.01);	?> <br />
	<?php calc_grade(102.1);

	?>
</body>
</html>