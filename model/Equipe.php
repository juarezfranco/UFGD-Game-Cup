<?php
include_once 'Model.php';
include_once 'Usuario.php';


class Equipe extends Model{
	const TABLE_NAME = 'equipes';

	private $id;
	private $nome;
	private $jogadores=array();
	private $data_cadastro;

	public function __construct($n=''){
		parent::__construct();
		$this->nome = $n;
	}

	/**
	* ADICIONA UM JOGADOR NA EQUIPE
	*/
	public function add(Usuario $jogador){
		if( !($jogador instanceof Usuario) ){
			throw new Exception('Parâmetro de tipo incompatível');
		}
		$this->jogadores[] = $jogador;
	}

	public function vagasCampeonato(){
		$sql = 'select count(id) as qtd from equipes';

		$query=$this->conn->prepare($sql);
		if($query->execute()){
			$row = $query->fetch(PDO::FETCH_ASSOC);
			return $row['qtd'];
		}
	}

	public function read(){
		$sql = 'SELECT * FROM '.self::TABLE_NAME.' WHERE id=:id ';

		$query=$this->conn->prepare($sql);
		if($query->execute(array(':id'=>$this->id))){
			$row = $query->fetch(PDO::FETCH_ASSOC);
			//convert array para Usuario
			$this->arrayToEquipe($row);
			$this->readJogadores();
		}
	}
	/**
	* Recupera do bd jogadores da equipe
	*/
	private function readJogadores(){
		$sql = 'SELECT * FROM '.Usuario::TABLE_NAME.' where equipe= :idequipe';

		$query=$this->conn->prepare($sql);
		$jogadores=array();
		if($query->execute(array(':idequipe'=>$this->id))){
			while($row = $query->fetch(PDO::FETCH_ASSOC)){
				//convert array para Usuario
				$usuario = new Usuario();
				$usuario->arrayToUsuario($row);
				$this->jogadores[]=$usuario;
			}
		}

	}

	/**
	* Constrói objeto apartir de um array
	*/
	private function arrayToEquipe($array = array()){
		//magica do php 
		foreach($array as $key => $value){
			$this->$key = $value;
		}
	}

	/**
	* SALVA EQUIPE NO BANCO DE DADOS
	* 1º VALIDA NOME DA EQUIPE
	* 2º SALVA EQUIPE NO BD
	* 3º SALVA JOGADORES DA EQUIPE NO BD
	* OBS.: EM CASO DE FALHA DURANTE A INSERÇÃO, É FEITO UM ROLLBACK
	*  TODOS OS DADOS QUE FORAM INSERIDOS DURANTE OPERAÇÃO  SERÃO EXCLUÍDOS DO BANCO
	*/
	public function salvar(){
		//valida nome da equipe
		if($this->existeNome()){
			$erros['message']= 'Nome da equipe já existe';
			$retorno = array(
				'success'=> false,
				'erros'=> $erros
			);
			return $retorno;
		}
		//salva equipe
		$sql = 'insert into '.self::TABLE_NAME.' (nome) values (:nome)';
		$params=array(':nome'=>$this->nome);
		$stmt = $this->conn->prepare($sql);
		
		try{
			if(!($stmt->execute($params))){
				return self::falha('Não foi possível efetuar cadastro da equipe');
			}
			//recupera id da equipe
			$this->id = $this->conn->lastInsertId();
			
			$lider= true;
			//salva todos os jogadores do time
			foreach($this->jogadores as $jogador){
				$jogador->equipe = $this;
				$jogador->lider= $lider;//o primeiro jogador é considerado o lider
				$lider=false;//o resto dos jogadores nao serao lideres
				//salva jogador
				$flag = $jogador->salvar();
				//verifica se foi salvo com sucesso
				if(!($flag['success'])){
					//faz o rollback
					$retorno = $this->rollbackInsert();
					return $retorno;
				}
			}
			return self::sucesso();
		}catch(PDOException $e){
			$this->rollbackInsert();
			return self::falha($e);
		}

	}

	/**
	* Rollback da inserção da equipe no banco de dados, remove todos os dados que foram inseridos.
	*/
	private function rollbackInsert(){
		//deleta todos os usuarios desta equipe no bd
		//...
		//deleta a equipe do bd
		//...

		return self::falha('Não foi possível efetuar cadastro da equipe [ROLLBACK]');
	}

	/**
	* Verifica se nome da equipe ja existe, se existe retorna true, se nao existe retorna false
	*/
	private function existeNome(){
		$sql = 'SELECT count(id) AS total FROM '.self::TABLE_NAME.' WHERE nome LIKE :nome';

		$query=$this->conn->prepare($sql);
		$query->execute(array(':nome'=>$this->nome));

		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['total'] > 0 ;
	}

	public function __set($atrib, $value){
		$this->$atrib = $value;
	}
	
	public function __get($atrib){
		return $this->$atrib;
	}
}