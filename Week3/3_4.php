<?php 
//name: Matt Drapchaty
$jsonData = json_decode(file_get_contents('http://localhost:8888/SSL/Week3/fruitjson.php'));

foreach ($jsonData as $item) {
	echo "Fruitname:" . (string)$item->fruitname . "<br/>";
    echo "Fruitcolor:" . (string)$item->fruitcolor . "<br/>";
}

?>