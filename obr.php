<?php
include('class/Basket.php');
if(isset($_GET['name'])){
	$goodValue = $_GET['name'];
	$basket = new Basket();
	$basket->addBasket($goodValue);
	header("location: index.php")
}



?>