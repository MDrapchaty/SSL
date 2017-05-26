<?php	

$name = "SSLCookie";
setcookie($name, null, time() - 3600);
echo "<br /> Your cookie is now unset!cplease refresh.. <br/>";
echo " <a href=set_cookies.php>" . "Set it again?" . "</a>";

?>

<pre>
<?php 

print_r($_COOKIE);
?>
</pre>