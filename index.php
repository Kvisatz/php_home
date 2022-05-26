<?php
	session_start();
	include_once('class/Basket.php');
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
		include('class/Product.php');
		$prod = new Product();
		$prod->renderItems();
		// print_r($_SESSION['cars']);
		if(isset($_SESSION['cars'])){
			$basket = new Basket($_SESSION['cars']);
			$basket->renderBakket();
		}
	?>
</body>
</html>