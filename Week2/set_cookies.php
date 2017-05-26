<?php		




	echo " My ssl broswer cookie is set";

	$name = "SSLCookie";
	$value = "1508- day 3";
	$expire = time() + (60*60*24*7);

	setcookie($name, $value, $expire);
	echo "<br /><a href =unset_cookies.php>" . "Wanna UNSET your Cookie?" . "</a>";

?>

<pre> 
	<?php print_r($_COOKIE); ?> 
</pre>