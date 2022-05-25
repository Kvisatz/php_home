<?php
include('class/DB.php');
class Product extends DB{
	private $products = [];
	public function __construct(){
		if(DB::data() != null){
			// print_r(DB::data());
			foreach (DB::data() as $value) {
				$this->products[$value['car']] = $value['car'];
			}
			// print_r($this->products);
		}
	}
	public function renderItems(){
		foreach ($this->products as $key => $product) {
			echo "<a href='obr.php?add=$product'>Добавить $product   </a><br><a href='obr.php?delete=$product'>Удалить?$product</a><br>";
		}
	}
	public function addItem($car){
		return [
					'name'=> $car,
					'amount'=> 1
				];
	}
}