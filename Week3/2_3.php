<?php


$jsonData = json_decode(file_get_contents('http://www.omdbapi.com/?t=goodfellas'));
echo json_encode($jsonData);


echo "<br /><br />";

$string = file_get_contents("test.txt");

$arr = explode(',', $string);

foreach ($arr as $key) {
	echo $key;
}

?>