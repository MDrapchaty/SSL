<?php

// name: Matt Drapchaty
$xml=simplexml_load_file("http://localhost:8888/SSL/Week3/fruitxml.php") or die("Error: Cannot create object");


foreach($xml->fruit as $item)
{
    echo "Fruitname:" . (string)$item->fruitname . "<br/>";
    echo "Fruitcolor:" . (string)$item->fruitcolor . "<br/>";
}

?>