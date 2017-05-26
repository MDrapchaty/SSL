<?php

session_start();

?>




<?php


	if(array_key_exists('captcha', $_SESSION)) {
		echo "Yes, captcha exists!<br />";
	}





	$captchaInput = $_POST['captcha'];
	$captchaVerify = $_SESSION['captcha'];

	if ($captchaInput == $captchaVerify) {
		echo "Congratulations!!! captcha works.<br><br>";
		echo "<a href='form_captcha.php'>Try again?</a><br><br>";
	}else{
		echo "OOPs.. something is wrong.";
		echo "<a href='form_captcha.php'>Try again?</a><br><br>";
	}

?>

<pre>
<?php
print_r(get_defined_vars());
?>
</pre>