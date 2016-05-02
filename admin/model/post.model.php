<?php
require_once '../util/util.php';

class PostsModel
{
	private $pdo;

	public function __CONSTRUCT(){
		$db_cone = new DB_PHP();
		$this->pdo = $db_cone->getConexion();
	}

	public function Listar(){
		$stm = $this->pdo->prepare("call sp_lista_posts()");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function Obtener($id){
		$stm = $this->pdo->prepare(" call sp_obtener_posts(?)");
		$stm->execute(array($id));
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function Eliminar($id){
		$stm = $this->pdo->prepare("call sp_elim_post(?)");			          
		$stm->execute(array($id));
	}

	public function Nuevo($data){
		$stm = $this->pdo->prepare("call nuevopost(?,?,?,?,?)");	
		$stm->execute($data);
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}
	public function Editar($data){
		$stm = $this->pdo->prepare("call sp_editar_post(?,?,?,?,?)");	
		$stm->execute($data);
	}
}