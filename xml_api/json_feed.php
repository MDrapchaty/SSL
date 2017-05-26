<?php
//name: Matt Drapchaty
header("Content-type:application/json");


$jsonfile = array("text_book"=>array(array("chapter"=>"a new story", "pages"=>"25"),
									array("chapter"=>"the second time","pages"=>"31")));

$myjson = json_encode($jsonfile);

file_put_contents('myjson.json', $myjson);

echo $myjson;
?>