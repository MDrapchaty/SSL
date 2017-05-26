<?php
//name: Matt Drapchaty
$user = 'root';  //create var for stored user 
$pass = 'root';  //create var for stored pass
$db = new PDO('mysql:host=localhost; dbname=ssl; port:8889', $user, $pass);  

$xml          = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
$root_element = 'fruits'; //fruits
$xml         .= "<$root_element>";


$stmt = $db->prepare('SELECT * FROM fruits order by fruitid ASC;'); //prepare select

$stmt->execute();

$result = $stmt->fetchall();
 

foreach ($result as $key) {
 	$xml .= "<fruit><id>" . $key['fruitid'] . "</id>" . "<fruitname>" . $key['fruitname'] . "</fruitname>" . "<fruitcolor>" . $key['fruitcolor'] . "</fruitcolor></fruit>";
 } 

$xml .= "</$root_element>";
//send the xml header to the browser
header ("Content-Type: text/xml");
//output the XML data
echo $xml;

?>