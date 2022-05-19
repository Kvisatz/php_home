<?php
	session_start();
// print_r($_POST);
	include('class/Login.php');
	if (isset($_POST['name']) && isset($_POST['password'])) {
		$user = [
				'login' => $_POST['name'],
				'password' => $_POST['password']
				];
		// print_r($user);
		$authObj = new Login($user);
		// print_r($authObj);
		if(is_array($authObj->errors) && count($authObj->errors) > 0){
			$jsonError = json_encode($authObj->errors);
			header("location: index.php?error=".$jsonError);
		}
		
	}

?>

