<?php
include('class/Product.php');
class Basket extends Product{
	public $addedProducts = [];
	public function __construct($car){
		$prod = new Product();
		print_r($prod->addItem($car));
		$this->addedProducts[] = $prod->addItem($car);
		print_r($this->addedProducts);

	}
}