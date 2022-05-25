<?php
session_start();
include('class/Basket.php');
if(isset($_GET)){
	if(isset($_GET['add'])){
		$car = $_GET['add'];
		new Basket($car);
	}
}