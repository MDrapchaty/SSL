<!DOCTYPE HTML>
<html>
<head>
<title>Title of the document</title>
</head>

<br /> I am reading my cookies...<br />


<?php

if (isset($_COOKIE["SSLCookie"])) {
	$test = $_COOKIE["SSLCookie"];
}else {
	$test = "Cookie NOT Set!";
}

echo "<br /><br />The value of Cookie is...." . $test;
echo "<br /><a href=unset_cookies.php>" . "Wanna UNSET Your Cookie?" . "</a>";


?>
</html>