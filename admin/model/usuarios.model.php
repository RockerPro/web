<?php
require_once '../util/util.php';

class UsuariosModel
{
	private $pdo;

	public function __CONSTRUCT(){
		$db_cone = new DB_PHP();
		$this->pdo = $db_cone->getConexion();
	}

	public function Listar(){
		$stm = $this->pdo->prepare("call sp_listar_usu()");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function Obtener($id){
		$stm = $this->pdo->prepare(" call sp_obtener_usu(?)");
		$stm->execute(array($id));
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function Eliminar($id){
		$stm = $this->pdo->prepare("call sp_elim_usu(?)");			          
		$stm->execute(array($id));
	}

	public function Nuevo($data){
		$stm = $this->pdo->prepare("call sp_nuevo_usu(?,?,?,?)");	
		$stm->execute($data);
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}
	public function Editar($data){
		$stm = $this->pdo->prepare("call sp_editar_usu(?,?,?)");	
		$stm->execute($data);
	}
	public function Editarpw($data){
		$stm = $this->pdo->prepare("call sp_change_pass(?,?)");	
		$stm->execute($data);
	}
}