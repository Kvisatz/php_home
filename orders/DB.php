<?php 
	include_once 'config.php';

	class DB{
		private $connect = null;
		public $users = [];
		public $orders = [];

		public function __construct(){
			$this->connect();
			if(is_array($this->select('users'))){
				$this->users = $this->select('users');
				print_r($this->users);
			}
			if(is_array($this->select('orders'))){
				$this->orders = $this->select('orders');
				print_r($this->orders);
			}
			
		}

		private function connect(){
			$connect = new mysqli(HOST, USER, PASS, DATABASE);
			if($mysqli->connect_errno){
				die("ошибка подключения");
			}
			$this->connect = $connect;
		}

		private function select($tableName){
			$sql = 'SELECT * FROM `'.$tableName.'`';
			$objQuery = $this->connect->query($sql);
			return $this->convertData($objQuery);
		}

		private function convertData($objQuery){
			$data = [];
			if($objQuery != null){
				
				while ($row = $objQuery->fetch_array(MYSQLI_ASSOC)) {
					$data[] = $row;
				}
			}
			return $data;
		}
		
	}
?>