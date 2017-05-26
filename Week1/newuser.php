<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>	
</head>
<body>


<?php
// name: Matt Drapchaty
function userArray() {
	
	
	if(!empty($_POST['uname']) && (!empty($_POST['password']))){
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$uname = $_POST["uname"];
		$salt = "Supersaltyness";
		$password = md5($_POST["password"].$salt);

		$arr = array($fname, $lname, $uname, $password);
		return $arr;
		
		
	}else{
		echo "Error, Input Missing. Please Try Again.." . "<a href = 'index.html'" . "Go Back" . "<a/>";
	}
}


function avatar(){
	if(isset($_POST['submit'])){


	$tmp_file = $_FILES['file_upload']['tmp_name'];

	$target_file = basename($_FILES['file_upload']['tmp_name']);
	$upload_dir = "./images";

	if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
		$message = "file is valid and was uploaded. ";
	}else{
		$message = " avatar file was not valid";
	}
	}

	if(!empty($message)){
		$image = "<p>{$message}</p>" .
		"<div class ='image'><img src='" . $upload_dir . "/" . $target_file . "'width='300'/></div>";
		return $image;
	}

}
$arr = userArray();
echo "<h2>User Info</h2>";
foreach($arr as $item) {
    echo $item . "<br />";

    
}

$image = avatar();
echo $image;

?>

 
</body>
</html>