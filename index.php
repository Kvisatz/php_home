<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if(!isset($_SESSION['auth'])):
	?>
	<form action="formobr.php" method="POST">
		<label for="name">Введите имя</label>
		<input type="text" id="name" name="name" placeholder="Login"></br>
		<label for="pass">Введите пароль</label>
		<input type="password" id="pass" name="password" placeholder="Password">
		<input type="submit">
	</form>
	<?php
		else:
	?>
		<p>Приветствую тебя <a href="#">Выйти?</a>
		</p>
	<?php endif;?>
	
	<?php
		if(isset($_GET['error']) && !empty($_GET['error'])){
			$errors = json_decode($_GET['error']);
			if (is_array($errors)) {
				echo "<ul>";
				foreach ($errors as $value) {
					echo "<li>$value</li>";
				}
				echo "</ul>";
			}
			
		}

	?>
</body>
</html>
