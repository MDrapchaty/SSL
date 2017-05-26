<?php 

//Name: Matt Drapchaty

header("Content-type:text/xml");


$xmlfile = "<?xml version='1.0' encoding='UTF-8' ?>";
$xmlfile .= "<feeds>";

$xmlfile .= "<feed>";
$xmlfile .= "<from>Matt</from>";
$xmlfile .= "<message>Yo</message>";
$xmlfile .= "</feed>";


$xmlfile .= "<feed>";
$xmlfile .= "<from>Sessa</from>";
$xmlfile .= "<message>whats going on?</message>";
$xmlfile .= "</feed>";

$xmlfile .= "</feeds>";

echo $xmlfile; 


$dom = new DOMDocument("1.0");
$dom->loadXML($xmlfile);
$dom->save("myxml.xml");


?>