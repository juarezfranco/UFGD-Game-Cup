<?php 
include_once 'Model.php';


class Usuario extends Model{
	const TABLE_NAME = 'usuarios';
	private $id;
	private $nome;
	private $email;
	private $fone;
	private $cpf;

	private $equipe;
	private $lider;
	private $data_cadastro;


	
	public function __construct($array = array()){
		parent::__construct();

		if(!is_array($array))
			return;
		if(count($array)>0)
			$this->arrayToUsuario($array);
	}

	/**
	* Constrói objeto apartir de um array
	*/
	public function arrayToUsuario($array = array()){
		//magica do php 
		foreach($array as $key => $value){
			$this->$key = $value;
		}
	}

	/**
	* Salva no bd
	*/
	public function salvar(){
		$sql = 'insert into '.self::TABLE_NAME.' (nome,email,fone,cpf,equipe,lider) values ( :nome, :email, :fone, :cpf,:equipe,:lider)';

		$params = array(
			':nome'		=>$this->nome,
			':email'	=>$this->email,
			':fone'		=>$this->fone,
			':cpf'		=>$this->cpf,
			':equipe'	=>$this->equipe->id,
			':lider'	=>$this->lider
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

	public function read(){
		$sql = 'SELECT * FROM '.self::TABLE_NAME.' WHERE id=:id';

		$query=$this->conn->prepare($sql);
		if($query->execute(array(':id'=>$this->id))){
			$row = $query->fetch(PDO::FETCH_ASSOC);
			//convert array para Usuario
			$this->arrayToUsuario($row);
		}
	}
	public function __set($atrib, $value){
		$this->$atrib = $value;
	}
	
	public function __get($atrib){
		return $this->$atrib;
	}
	
}