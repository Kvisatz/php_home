<?php
	session_start();
	if(isset($_GET['product_id'])){
		$product_id = (int)$_GET['product_id'];
		include_once('class/Order.php');
		$objOrder = new Order($product_id);
	}
	if (isset($_GET['delete']) && $_GET['delete'] == 1) {

		include_once('class/Order.php');
		$objOrder = new Order();
		$objOrder->deleteOrder();
	}
	if (isset($_GET['show_order']) && $_GET['show_order'] == 1){
		header("location: order.php?");
		die();
	} 
	if(isset($_POST)){
		if(isset($_GET['productadd_id'])){
			$id = $_GET['productadd_id'];
			$amount = $_POST[$id];
			include_once('class/Order.php');
			$objOrder = new Order();
			$objOrder->orderProductChange($id, $amount);
			// print_r($_SESSION['orders']);
			header("location: order.php?");
			die();
		}
		if(isset($_GET['delete_order'])){
			$delete_order = $_GET['delete_order'];
			include_once('class/Order.php');
			$objOrder = new Order();
			$objOrder->orderProductDelete($delete_order);
			print_r($_SESSION['orders']);
			header("location: order.php?");
			die();
		}
	} 
		

	header("location: index.php?");
?>