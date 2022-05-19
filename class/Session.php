<?php

class Session{

	function __construct(){
		echo 'session class';
	}
	function saveSession($login){
		
		$_SESSION['auth'] = md5($login);
	}
	function deleteSession(){

	}

}