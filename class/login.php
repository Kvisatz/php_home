<?php
	include("Session.php");
	include("Validator.php");

	class Login{
		private $valid = true;
		private $login = null;
		private $password = null;
		public $errors = [];
		public $symbols = ["%","$","*"];
		function __construct($user){
			$validData = Validator::maxLengthValidator($user['login'], 5);

			if(!$validData['status']){
				$this->valid = false;
				// $this->login = $user['login'];
				$this->errors[] = $validData['msg'];
			}
			$validData = Validator::minLengthValidator($user['login'], 2);


			if(!$validData['status']){
				$this->valid = false;
				// $this->login = $user['login'];
				$this->errors[] = $validData['msg'];
			}
			$validData = Validator::wrongSymbolValidator($user['login'], $this->symbols);
			if(!$validData['status']){
				$this->valid = false;
				// $this->login = $user['login'];
				$this->errors[] = $validData['msg'];
			}

			if($this->valid){
				$this->login = $user['login'];
				$this->password = $user['password'];
			}
		}


	}

			