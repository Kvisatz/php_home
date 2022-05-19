<?php
	// include("class/Session.php");
	include("class/Validator.php");
	include ("class/DB.php");
	class Login extends DB{
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
			// $validData = Validator::wrongSymbolValidator($user['login'], $this->symbols);
			// if(!$validData['status']){
			// 	$this->valid = false;
			// 	// $this->login = $user['login'];
			// 	$this->errors[] = $validData['msg'];
			// }

			if($this->valid){
				$this->login = $user['login'];
				$this->password = $user['password'];
			}

			$this->select(['login' => $this->login, 'password' => $this->password]);
			// echo $this->login;

			// $auth = new Session();

			// $auth.saveSession($this->login);
			// header("location: index.php?");
		}


	}

			