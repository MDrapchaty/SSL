<?php 
// Matt Drapchaty
session_start();

$color='green';
$fruit='apple';
$desert='pie';

$_SESSION["color"] = $color;
$_SESSION["fruit"] = $fruit;
$_SESSION["desert"] = $desert;

session_write_close();
?> 


<a href='getsession.php?color=<?php echo $color; ?>&fruit=<?php echo $fruit; ?>&desert=<?php echo $desert; ?>' >Click Me</a>



