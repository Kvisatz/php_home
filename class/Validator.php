<?php

class Validator{
	static function typeDataValidator($data, $type){
		if(gettype($data) != 'string'){
			return[
				'status' => false,
				'msg' => "Поле должно быть строкой"
			];
		}
	}

	static function maxLengthValidator($str, $maxLength){

		// Validator::typeDataValidator($str, 'string');

		return (strlen($str) <= $maxLength)?
		[
			'status' => true
		]
		:
		[
			'status' => false,
			'msg' => "Максимальная длина поля" . $maxLength
		];
	}
	static function minLengthValidator($str, $minLength){
		// Validator::typeDataValidator($str, 'string');

		return (strlen($str) >= $minLength)?
		['status'=> true]
		:
		[
			'status'=> false,
			'msg' => "Минимальная длина поля больше ". $minLength
		];
	}
	static function wrongSymbolValidator($str, $symbol){
		$flag = true;
		foreach($symbol as $value){
			if(str_contains($str, $value)){
				$flag=false;
			}
		}
		return ($flag)?
		['status'=> true]
		:
		[
			'status'=> false,
			'msg' => "Строка содержит недопустимый символ ". implode($symbol)
		];
	}

}
	


