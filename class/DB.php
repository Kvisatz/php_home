<?php
class DB{
	protected function select($selectUser){
		$users =[
					[
						'login' => 'Egor',
						'password' => '1234'
					],
					[
						'login' => 'Oleg',
						'password' => '1234'
					],
					[
						'login' => 'Anna',
						'password' => '1234'
					],
					[
						'login' => 'Nik',
						'password' => '321'
					]
				];
				foreach ($users as $value) {
					if ($value['login'] == $selectUser['login'] && $value['password'] == $selectUser['password']) {
						return "есть";
					}
				}
				return "no";
	}

}

?>