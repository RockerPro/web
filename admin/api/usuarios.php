<?php
header('Access-Control-Allow-Origin: *');
session_start();
require_once '../model/usuarios.model.php';
$model = new UsuariosModel();
$action = isset($_GET['a']) ? $_GET['a'] : null;

switch($action) {
    case 'listar':
        $data = $model->Listar();
        echo json_encode($data);
        break;
    case 'obtener':
        $data = $model->Obtener($_SESSION['id']);
        echo json_encode($data);
        break;
    case 'registrar': 	
		    $array = array();
            $array[] = $_POST['nom'];
            $array[] = $_POST['email'];
            $array[] = $_POST['pass'];
 		    $id =  $model->Nuevo($array);
		    echo json_encode($id);
        break;
    case 'editar':  	
		    $array = array();
		    $array[] = $_SESSION["id"];
            $array[] = $_POST['nom'];
            $array[] = $_POST['email'];
 		    $id =  $model->Editar($array);
		    echo json_encode('ok');
        break;
    case 'passw':  	
		    $array = array();
		    $array[] = $_SESSION["id"];
            $array[] = $_POST['pass'];
 		    $id =  $model->Editarpw($array);
		    echo json_encode('ok');
        break;
    case 'eliminar':
        	$data = $model->Eliminar($_REQUEST['id']);
        	echo json_encode('ok');
        break;
}


?>
