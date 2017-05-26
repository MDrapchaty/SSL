<?php
//name: Drapchaty, Matt

$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost; dbname=ssl; port:8889', $user, $pass);

$sqlquery = $dbh->prepare("SELECT fruitid, fruitname, fruitcolor, fruitimage FROM fruits ORDER BY RAND() LIMIT 1");

$sqlquery->execute();

$result = $sqlquery->fetchALL();

$result = array("fruits"=>$result);

header("Content-type:application/json");
$jsonfile = json_encode($result);
echo $jsonfile;

?>