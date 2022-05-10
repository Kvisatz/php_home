<?php
	
	// $_COOKIE['my_cookie'] = 'Andrey';
	// print_r($_COOKIE);
	if(isset($_GET['data'])){
		setcookie("user", $_GET['data'], time()+3600);
		print_r($_COOKIE);
		$userinfo = $_GET['data'];
		print_r($userinfo);
		header("location: cookie.php?cookie=$userinfo");
	}
	

?>