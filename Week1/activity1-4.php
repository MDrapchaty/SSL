<?php
	// Name: Matt Drapchaty

if(isset($_POST['submit'])){


	$tmp_file = $_FILES['file_upload']['tmp_name'];

	$target_file = basename($_FILES['file_upload']['tmp_name']);
	$upload_dir = "./uploads";

	if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
		$message = "file is valid and was uploaded. ";
	}else{
		$message = " file was not valid";
	}
}

?>


<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>	
</head>
<body>

<?php
	// Name: Matt Drapchaty
	if(!empty($message)){
		echo "<p>{$message}</p>";
		echo "<div class ='image'><img src='" . $upload_dir . "/" . $target_file . "'width='300'/></div>";
		//echo "<div class ='image'><img src='./uploads/phpyna5pW' width='300'/></div>";
	}

	?>


<form action="activity1-4.php" enctype="multipart/form-data" method="post" > 
 <input type="file" name="file_upload" />
 <br>
 <input type="submit" name="submit" value="Upload" />
</form>

<?php 
print_r(get_defined_vars());
?>



</body>
</html>