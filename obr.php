<?php
session_start();
include_once('class/Basket.php');
include_once('class/Product.php');
include_once('class/Session.php');
if(isset($_GET)){
	if(isset($_GET['add'])){
		$car = $_GET['add'];
		// new Basket($car);
		$prod = new Product();
		print_r($prod->addItem($car)['name']);
		$prod->addItem($car);
		if($prod->addItem($car) != 'undefined'){
			$session = new Session();
			$session->createSession($prod->addItem($car));
			// if(isset($_SESSION['cars'])){

			// }
			header("location: index.php?add=$car");
		}
	}
}