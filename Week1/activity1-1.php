<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>	
</head>
<body>

	<?php
	// Name: Matt Drapchaty


	$name = "Matt";
	$age = 26;

	$person = array($name, $age, array($name => "Matt" , $age => 26));

	echo "My name is " . $name . " " . "and my age is " . $age;
	?>
	<br />
	<?php 
	echo 'My name is ' . $name . ' '  . 'and my age is ' . $age;
	?>
	<br />
	<?php 
	echo 'My name is ' . $person[0] . ' '  . 'and my age is ' . $person[1];
	?>
	<br />
	<?php 
	echo 'My name is ' . $person[2][$name] . ' '  . 'and my age is ' . $person[2][$age];

	$age = NULL;
	echo $age;

	unset($name);
	echo $name;
	?>
</body>
</html>