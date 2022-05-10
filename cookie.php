<?php
	session_start();

	if (isset($_GET['exit']) && $_GET['exit'] == true ) {
		unset($_SESSION['user']);
		setcookie("user", "", time() - 3600);
		unset($_COOKIE['user']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   
</body>
</html>
<?php
	if(isset($_GET['data']) && $_GET['data'] == 'error'){
		echo 'не верные данные';
	}


?>
<?php
	
	if(isset($_SESSION['user'])):?>
		<p>Вы вошли как ...
			<?php
				$user = json_decode($_SESSION['user']);
				echo $user->login;
				//print_r($_GET['cookie']);

			?>
			<a href="cookie.php?exit=true">Quit</a>

		</p>
	<?php elseif (isset($_GET['cookie'])):?>
			
			<p>Вы вошли как ...
			<?php
				//print_r($_GET['cookie']);
				$cookie = json_decode($_GET['cookie']);
				echo $cookie->login;
			?>
			<a href="cookie.php?exit=true">Quit</a>

		</p>
		<?php else:?>
		 <form action="page.php" method="POST">
	        <input type="text" name="login">
	        <input type="password" name="password">
	        <input type="checkbox" id="remember" name="rememeber" value="checked" checked>
	        <label for="remember">Запомни меня</label>
	        <input type="submit" value="Send">

	    </form>
	<?php endif;
	
		
?>
