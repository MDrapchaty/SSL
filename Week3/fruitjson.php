<?php
//Name: Matt Drapchaty
$user = 'root';  //create var for stored user 
$pass = 'root';  //create var for stored pass
$db = new PDO('mysql:host=localhost; dbname=ssl; port:8889', $user, $pass); 

$stmt = $db->prepare('SELECT * FROM fruits order by fruitid ASC;'); //prepare select

$stmt->execute();   //run statement

$result = $stmt->fetchall();

echo json_encode($result);

?>