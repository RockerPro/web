<?php
require_once 'util.php';

class PostsModel
{
	private $pdo;

	public function __CONSTRUCT(){
		$db_cone = new DB_PHP();
		$this->pdo = $db_cone->getConexion();
	}

	public function Listar(){
		$stm = $this->pdo->prepare("call sp_listar_script()");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}
}