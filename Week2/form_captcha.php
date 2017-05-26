<?php

session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Title of the document</title>
</head>
<body>
	




	<h2>Matt's Captcha Validation</h2>

	Please verify you are a human. Enter the phrase below.

	<form action="captcha_validate.php" method="post">
		<input type="text" name="captcha" /><br /><br /><img src="captcha.php" />
		<input type="submit" name="submit" value="Submit" />
	</form>

</body>

</html>