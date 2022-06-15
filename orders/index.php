<?php 

	include_once 'DB.php';

	$db = new DB();

	//print_r($db->select('users'));
	//print_r($db->select('orders'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<style>
		.order_wrap{
			display: flex;
			flex-direction: column;
			border: 1px solid #ccc;
			width: 50%;			
		}
		.order_head,
		.order_body{
			display: flex;
			flex-direction: row;
			border: 1px solid #ccc;
			width: 100%;
			flex-wrap: wrap;
		}
		.order_head h5,
		.order_body p{
			padding: 10px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			margin: 0;
			width: 25%;
			display: flex;
			flex-wrap: wrap;
		}
		

	</style>
	
	<div class="order_wrap">
		<?php if(isset($db->users)):?>
			<?php foreach($db->users as $user):?>
				<h4>Заказ <?php echo $user['name']; ?></h4>
				<div class="order_head">
					<h5>№</h5>
					<h5>Продукт</h5>
					<h5>Дата заказа</h5>
					<h5>Цена</h5>
				</div>
				<div class="order_body">
					<p>1</p>
					<p>Молоко</p>
					<p>28.01.2022</p>
					<p>10000000</p>
				</div>
			<?php endforeach;?>
		<?php endif;?>


		
		
	</div>
</body>
</html>