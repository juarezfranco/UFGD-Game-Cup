<?php

class Connect{

	private static $conn;

	/**
	*	Padrão singleton
	*/
	public static function getConnection(){
		if(self::$conn==null){
			//le arquivo de configuração do banco de dados
			$databasejson = file_get_contents('config/database.json');
			//decodifica conteudo do arquivo
			if($databasejson)
				$database = json_decode($databasejson);
			else
				$database = json_decode(self::default_config());

			
			self::$conn = new PDO( 
				'mysql:host='.$database->address.
				';port='.$database->port.
				';dbname='.$database->db.
				';charset=utf8',
				$database->user,
				$database->passwd
				);
		}		
		return self::$conn;
	}

	/**
	* Não inclua dados do banco de dados nesta função,
	* os dados do banco de dados devem ser colocados no arquivo config/database.json
	* e devem ter o mesmo corpo especificado abaixo.
	*/
	private static function default_config(){
		return '{
			"address"	:"localhost",
			"port"		:"3306",
			"db"		:"ufgdgamecup",
			"user"		:"root",
			"passwd"	:"123"

		}';
	}
}
?>