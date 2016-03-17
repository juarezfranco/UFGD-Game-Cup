<?php
include_once 'config/Connect.php';

abstract class Model{

	protected $conn;

	public function __construct(){
		$this->conn = Connect::getConnection();
	}
}