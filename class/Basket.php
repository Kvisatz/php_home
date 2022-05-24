<?php
include('class/Product.php');
include('class/Session.php');
class Basket extends Product{
	protected $goodList = [];
	protected $good;
	public function addBasket($name){
 		$prod = new Product();
        print_r($prod->goods);
        // print_r($_GET['name']);
        if(isset($name)){
        	foreach($prod->goods as $item){
        		if($item == $name){
        			print_r($item);
				}
        	}
        	
        }
	}
}

