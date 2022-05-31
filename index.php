<?php
	session_start();
include_once('class/Product.php');
include_once('class/Order.php');
$prod = new Product();
$products = $prod->render();
?>
<!DOCTYPE html>
<html lang="rus">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Магаз</title>
</head>
<body>
	<style>
		.wrap{
			display: flex;
			flex-wrap: wrap;
		}
		.wrap > div{
			width:  20%;
		}
		.wrap > div img{
			display: block;
			width: 100px;
			height: 100px;
		}
	</style>
	<div class="order">
		<p>
			<a href="obr.php?show_order=1">
				В корзине
					<?php 
						
						echo Order::countAllProducts();
						
					?>
				товаров
			</a>
			
		</p>
		
		<a href="obr.php?delete=1">Очистить корзину</a>
	</div>
	<div class="wrap">
		<?php foreach ($products as $product):?>
			<div>
				<h5><?php echo $product['name']?></h5>
				<img src="images/<?php echo $product['image']?>" alt="">
				<a href="obr.php?product_id=<?php echo $product['id']?>">В корзину</a>
			</div>
		<?php endforeach;?>
		
	</div>
		
</body>
</html>

