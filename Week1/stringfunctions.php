<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>	
</head>
<body>

	<?php


	$first = "The quick brown fox";
	$second = " jumped over the lazy dog.";

	$third = $first;
	$third .= $second;
	echo $third;


	?>

	Lowercase: <?php echo strtolower($third); ?><br />
	Uppercase: <?php echo strtoupper($third); ?><br />
	Uppercase first: <?php echo ucfirst($third); ?><br />
	Uppercase words: <?php echo ucwords($third); ?><br />



</body>
</html>