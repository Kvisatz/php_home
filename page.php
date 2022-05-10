<?php
	
	session_start();
	
	print_r($_POST);
	if(isset($_POST['login']) && isset($_POST['password'])){
		$user = [
					"login" => $_POST['login'],
					"password" => $_POST['password']
				];
				if(searchUser($user)){
					$user['password'] = md5($user['password']);
					$_SESSION['user'] = json_encode($user);
					print_r($_SESSION['user']);
					if (isset($_POST['rememeber'])) {
						header("location: cookie2.php?data=".$_SESSION['user']);
					}
					//header("location: cookie.php");
				}
				else{
					header("location: cookie.php?data=error");
				}
	}


	// $user = ["login" => '', "password" => '']
	// return [true/false]

	function searchUser($user){
		$users = [
			[
				"login" => 'Andrey',
				"password" => '123'
			],
			[
				"login" => 'Roman',
				"password" => '321'
			]

		];
		foreach ($users as $value) {
			if($value["login"] == $user["login"] && $value["password"] == $user["password"]){
				return true;
				break;
			}
			return false;
		}
	}
		
?>