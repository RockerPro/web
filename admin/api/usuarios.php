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
            $array[] = $_GET['nom'];
            $array[] = $_GET['email'];
            $array[] = sha1($_GET['pass']);
 		    $id =  $model->Nuevo($array);
		    echo json_encode($id);
        break;
    case 'editar':  	
		    $array = array();
		    $array[] = $_SESSION["id"];
            $array[] = $_GET['nom'];
            $array[] = $_GET['email'];
 		    $id =  $model->Editar($array);
             $_SESSION["nombre"] = $_GET['nom'];
		    echo json_encode('ok');
        break;
    case 'passw':  	
            if ($_GET['pass1'] <> $_GET['pass2']) {
              $res = false;
              echo json_encode($res);  
            }else{
              $array = array();
              $array[] = $_SESSION["id"];
              $array[] = sha1($_GET['pass1']);
              $id =  $model->Editarpw($array);
              $res = true;
              echo json_encode($res);
            }		    
        break;
    case 'eliminar':
        	$data = $model->Eliminar($_REQUEST['id']);
        	echo json_encode('ok');
        break;
    /*other users*/
    case 'traer':
        $data = $model->Obtener($_GET['id']);
        echo json_encode($data);
        break;
    case 'actualizar':    
        $array = array();
        $array[] = $_GET["id"];
            $array[] = $_GET['nom'];
            $array[] = $_GET['email'];
        $id =  $model->Editar($array);
        echo json_encode('ok');
        break;
    case 'userpass':   
            if ($_GET['pass1'] <> $_GET['pass2']) {
              $res = false;
              echo json_encode($res);  
            }else{
              $array = array();
              $array[] = $_GET["id"];
              $array[] = sha1($_GET['pass1']);
              $id =  $model->Editarpw($array);
              $res = true;
              echo json_encode($res);
            } 
}


?>
