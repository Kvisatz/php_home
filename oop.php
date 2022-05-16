<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<style>
		form{
			display: flex;
			flex-direction: column;
			width: 30%;
		}
	</style>
	<form action="help.php" method="POST" enctype="multipart/form-data">
		<label for="name">Enter Your Name</label>
		<input type="text" name="name" id="name">
		<label for="mail">Enter Your Mail</label>
		<input type="e-mail" id="mail" name="mail">
		<label for="pass">Enter Password</label>
		<input type="password" id="pass" name="pass">
		<label for="confirm">Confirm Password</label>
		<input type="password" id="confirm" name="confirm">
		<label for="avatar">Set Avatar</label>
		<input type="file" id="avatar" name="avatar">
		<input type="submit">
	</form>
</body>
</html>
<?php
	echo 1;
?>