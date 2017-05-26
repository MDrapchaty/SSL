<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Sign Up Now!</h2>


	<form enctype= "multipart/form-data" action="signup.php" method="post">
		<fieldset>
		<legend>Sign Up Now?</legend>
		Username: <input type="text" name="user" value="" /> <br>
		Password: <input type="password" name="password" value="" /><br>
		<br>Select Avatar Photo To Upload:
		<input type="file" name="avatarfile" value="" /><br>
		<br>
		<input type="submit" name="submit" value="Sign Up!">
		</fieldset>
	</form>

	<form action="login.php" method="post">
		<fieldset>
			<legend>Already A Member? Login..</legend>
			<p>
				<label for="username_li">Username:</label><input id="username_li" type="text" name="username_li">
			</p>
			<p>
				<label for="password_li">Password:</label><input id="password_li" type="password" name="password_li">
			<p class="rel">
				<button type="submit" class="right">Submit</button>
			</p>
		</fieldset>
	</form>
</body>
</html>