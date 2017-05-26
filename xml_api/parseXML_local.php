<?php

$contents = simplexml_load_file("myxml.xml");

foreach ($contents->feed as $feeds) {
	echo $feeds->from."<br />";
}


?>