


<?php
// Matt Drapchaty
session_start();


//$_SESSION["color"] = $_GET['color'];   This seems to break my code cant get the "GET" to work the way the instructions ask, This code runs everytime and therefore trys to GET info from a url bar when it is not there and causes erros. The sessions are being set in "setsession.php" so i was confused by this requirement to set them here.
//$_SESSION["fruit"] = $_GET['fruit'];
//$_SESSION["desert"] = $_GET['desert'];


echo $_SESSION["color"] ."<br>" . $_SESSION["fruit"] . "<br>". $_SESSION["desert"];


?>