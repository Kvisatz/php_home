<?php
include_once('class/DB.php');
class Product extends DB{

	public function render(){
		return $this->getProducts();
	}
	public function getProducts(){
		return $this->select();
	}
	public function getProduct($productId){
		foreach($this->select() as $product){
			if($product['id'] == $productId){
				return $product;
			}
		}
		die('Error id product'); 
	}
}