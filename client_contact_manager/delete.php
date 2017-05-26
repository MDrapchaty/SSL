<?php
//Matt Drapchaty


session_start();  // start session

$_SESSION["message"] = "<div class='message'>Your Client Deletion Was Successful!</div>";

$user="root"; //connect to db
$pass="root";
$mysql="mysql:host=localhost;dbname=ssl;port=8889";
$dbh = new PDO($mysql, $user, $pass);

$clientid = $_GET['id']; //store id in url to var

$stmt=$dbh->prepare('DELETE FROM clientsonline WHERE id = :id'); //remove from db
$stmt->bindParam(':id', $clientid);
$stmt->execute();

header('Location: clients.php');
die();

?>