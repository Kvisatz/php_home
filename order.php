<?php
	session_start();
	include_once('class/Order.php');
	include_once('class/Product.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Корзина</title>
</head>
<body>
	<style>
		table{
			border: 1px solid #ccc;
			margin: 0 auto;
		}
		table td,
		table th{
			border: 1px solid #ccc;
			padding: 10px;
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
	<table>
		<thead>
			<tr>
				<th scope="col">№</th>
				<th scope="col">имя товара</th>
				<th scope="col">Изображение</th>
				<th scope="col">Количество</th>
				<th scope="col">Цена за ед.</th>
				<th scope="col">Общая</th>
			</tr>
		</thead>
		<tbody>
			<?php if(Order::countAllProducts() === 0):?>
				<tr>
					<td colspan="6">
						Товаров в корзине нет
					</td>
				</tr>
			<?php else: ?>
				<?php
				$sum = 0;
				foreach(Order::writeOrderProduct() as $key=>$productOrder): 
					$prodObj = new Product();
					$product = $prodObj->getProduct($productOrder['id']);
					$sum+=$product['count']*$product['price'];	
				 ?>
					<tr>
						<td><?php echo $key+1?></td>
						<td><?php echo $product['name']?></td>
						<td><img src="images/<?php echo $product['image']?>" alt=""></td>
						<td><?php echo $product['count']  ?> шт.</td>
						<td><?php echo $product['price']  ?> руб.</td>
						<td><?php echo $product['count']*$product['price'] ?> руб.</td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<td colspan="5"></td>
					<td>Итого: <?php echo $sum?> руб.</td>
				</tr>
				
			<?php endif;?>
			
		</tbody>
	</table>
</body>
</html>