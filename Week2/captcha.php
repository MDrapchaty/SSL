<?php 

	session_start();

	session_regenerate_id();


	$file = file('dictionary.txt', FILE_IGNORE_NEW_LINES);

	$length = count($file)-1;
	$random = rand(0, $length);

	$_SESSION['captcha'] = $file[$random];
	session_write_close();


	function msg($msg){
		$container = imagecreatefrompng("test.png");
		$black = imagecolorallocate($container, 0, 0, 0);
		$white = imagecolorallocate($container, 255, 255, 255);
		$font = '/Library/Fonts/Arial.ttf';
		imagefilledrectangle($container, 0, 0, 250, 250, $black);
	
		$px = (imagesx($container) / (strlen($msg)/1.15));
		$py = (imagesx($container) / 3.5);

		imagefttext($container, 28, -27, $px, $py, $white, $font, $msg);
		header("Content-type: image/png");
		imagepng($container, null);
		imagedestroy($container);
	}

msg($file[$random]);

?>
