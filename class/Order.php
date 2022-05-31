<?php
include_once('class/Product.php');
class Order extends Product{

	public $product_id = null;
	function __construct($product_id = null){
		if($product_id === null){
			return;
		}
		else{
			$this->product_id = $product_id;
		}
		// print_r($this->getProducts());
		// die();

		if(isset($_SESSION['orders']) && is_array($_SESSION['orders']) && count($_SESSION['orders']) > 0){
			if($this->searchProductOrder()){
				$this->editProductCount();
			}
			else{
				$this->addProduct();
			}
		}
		else{
			$this->addProduct();
		}
		
		

	}
	public function addProduct(){
		$_SESSION['orders'][] = ['id'=>$this->product_id, 'count'=>1];
	}

	public function editProductCount(){
		$newDataSession = [];
		foreach ($_SESSION['orders'] as $order) {
			if($order['id'] == $this->product_id){
				$order['count']++;
			}
			$newDataSession[] = $order;
		}
		$_SESSION['orders'] = $newDataSession;
	}

	public function deleteOrder(){
		unset($_SESSION['orders']);
	}
	public function searchProductOrder(){
		foreach ($_SESSION['orders'] as $order) {
			if($order['id'] == $this->product_id){
				return true;
			}
		}
		return false;
	}
	static public function countAllProducts(){
		//echo 1;
		if(isset($_SESSION['orders'])){
					//print_r($_SESSION['orders']);
					$allCount = 0;
					foreach ($_SESSION['orders'] as $order) {
						$allCount += $order['count'];
					}
					return $allCount;
				}
				else{
					return 0;
				}
	}
	static public function writeOrderProduct(){
		if(isset($_SESSION['orders']) && 
			is_array($_SESSION['orders']) &&
			 count($_SESSION['orders']) > 0){
			return $_SESSION['orders'];
		}
		else{
			return [];
		}
	}
}