<?php
include('class/DB.php');
class Product{
	public $goods = [];
	public $number;
	public function __construct(){
		$prods = new DB();
		foreach($prods->data() as $good){
			$item = $good['car'];
			$this->goods[$item] = $item;
			
			 echo "<a href='obr.php?name=$item'>$item</a><br>";
		}
		print_r($this->goods);
	}
	// public function __set($property, $value){
 //        switch ($property){
 //            case 'good': $this->good = $value; break; 
 //        }
 //    }
 //     public function __get($property){
 //        switch ($property){
 //            case 'good': return $this->good;
 //        }
 //    }
}


?>