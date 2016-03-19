<?php 
include_once 'Model.php';

define('TABLE_NAME','usuarios');
class Usuario extends Model{

	private $id;
	private $nome;
	private $email;
	private $fone;
	private $cpf;

	/**
	* Constrói objeto apartir de um array
	*/
	public function __construct($array){
		parent::__construct();

		if(!is_array($array))
			return;

		//magica do php 
		foreach($array as $key => $value){
			$this->$key = $value;
		}
	}

	/**
	* Salva no bd
	*/
	public function salvar(){
		$sql = 'insert into '.TABLE_NAME.' (nome,email,fone,cpf) values ( :nome, :email, :fone, :cpf)';

		$params = array(
			':nome'	=>$this->nome,
			':email'=>$this->email,
			':fone'	=>$this->fone,
			':cpf'	=>$this->cpf
			);


		try{
			$stmt = $this->conn->prepare($sql);

			if($stmt->execute($params)){
				$this->id = $this->conn->lastInsertId();
				return self::sucesso();
			}
			else
				return self::falha('Não foi possível efetuar cadastro');
		}catch(PDOException $e){
			return self::falha($e);
		}


	}

	public function __set($atrib, $value){
		$this->$atrib = $value;
	}
	
	public function __get($atrib){
		return $this->$atrib;
	}
	
}