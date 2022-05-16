<?php 
	// print_r($_POST);
	//print_r($_FILES);

	/**
	 * 
	 */
	class UserData{
		private $name;
		private $mail;
		private $pass;
		private $confirm_pass;
		private $avatar;
		
		// public function __set($property, $value){
		// 	switch ($property){
		// 		case 'name': $this->name = $value; break;
		// 		case 'mail': $this->mail = $value; break;
		// 		case 'pass': $this->pass = $value; break;
		// 		case 'confirm_pass': $this->confirm_pass = $value; break;
		// 		case 'avatar': $this->avatar = $value; break;
		// 	}
		// }
		public function send($name, $mail, $pass,$avatar){
			$user = [];
		}
		function __construct($userData, $userAvatar){
			//print_r($userData);
			if(isset($userData)){
				if(isset($userData['name']) && strlen($userData['name']) > 3){
					$this->name = $userData['name'];
					echo $this->name;
				}
				else{
					echo "Имя должно содержать больше 3х символов";
				}
				if(isset($userData['mail']) && filter_var($userData['mail'], FILTER_VALIDATE_EMAIL)){
					$this->mail = $userData['mail'];
					echo $this->mail;
				}
				else{
					echo "Некорректный email";
				}
				if(isset($userData['pass']) && strlen($userData['pass']) > 3){
					if(isset($userData['confirm']) && $userData['confirm'] == $userData['pass']){
						$this->pass = $userData['pass'];
						echo $this->pass;
					}
					else{
						echo "Проверочный пароль несовпадает";
					}
					print_r($userAvatar);
					if (isset($userAvatar) && $userAvatar['type'] == 'image/jpeg') {
						$this->avatar = md5($userAvatar['name']).".jpeg";
						echo $this->avatar;
						$directory = './';
						$uploadfile = $directory.$this->avatar;
						echo '<pre>';
						if(move_uploaded_file($userAvatar['tmp_name'], $uploadfile)){
							echo 'Файл загружен';
						}
						else{
							echo 'Ошибка загрузки';
						}
						echo '</pre>';
					}
				}
				else{
					echo "Пароль должен содержать больше 3х символов";
				}
				
			}
			else{
				echo "Заполните все поля формы";
			}

		}
		
	}



?>