<?php
		//Matt Drapchaty

		function createImg($msg){
		$container = imagecreatefrompng("test.png");
		$black = imagecolorallocate($container, 0, 0, 0);
		$white = imagecolorallocate($container, 255, 255, 255);
		$font = '/Library/Fonts/Arial.ttf';
		
	
		$px = (imagesx($container) / (strlen($msg)/1.15));
		$py = (imagesx($container) / 3.5);

		imagefttext($container, 48, -50, $px, $py, $white, $font, $msg);
		header("Content-type: image/png");
		imagepng($container, null);
		imagedestroy($container);
		}

createImg('Testing!');



?>
