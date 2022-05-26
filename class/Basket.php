<?php
// include_once('class/Product.php');
class Basket{
	public $cars = [];
	public $addedProducts = [];
	public function __construct($cars){
		if(isset($cars)){
			foreach($cars as $value){
				$this->cars[] = $value['name'];
				
				//$val = array_count_values($value['name']);
				// print_r($val);
			}
			// print_r(gettype($this->cars));
			$this->cars= array_count_values($this->cars);
			// print_r($this->cars);

		}
		// $prod = new Product();
		// print_r($prod->addItem($car));
		// $this->addedProducts[] = $prod->addItem($car);
		// print_r($this->addedProducts);

	}
	public function renderBakket(){
		echo "<p>В Вашей корзине</p>";
		foreach($this->cars as $key=>$value){
			echo "$key "." $value штук<br>";
		}
	}
	
}