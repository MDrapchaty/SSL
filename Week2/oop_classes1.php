<?php

class Person{

}

//$classes = get_declared_classes();
//foreach ($classes as $class) {
//	echo $class . "<br />";
//}

if (class_exists("Person")) {
	echo "Class exists";
}else{
	echo "Class does not exist.";
}

?>