<?php
include_once 'config/Connect.php';

abstract class Model{

	protected $conn;

	public function __construct(){
		$this->conn = Connect::getConnection();
	}

	/**
	* resposta de sucesso
	*/
	protected static function sucesso(){
		$response['success']=true;
		$response['message']="ok";
		return $response;
	}

	/**
	* resposta de falha
	*/
	protected static function falha($exception){
		$response['success']= false;
		if($exception instanceof PDOExecption){
			$erros['code']	= $exception->getCode();
			$erros['message']= $exception->getMessage();
			$response['erros']=$erros;
		}else{
			$erros['message']='Falha';
			$response['erros']=$exception;
		}
		return $response;
	}

	
}