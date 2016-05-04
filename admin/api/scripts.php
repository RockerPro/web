<?php
header('Access-Control-Allow-Origin: *');
session_start();
require_once '../model/scripts.model.php';
$model = new PostsModel();
$action = isset($_GET['a']) ? $_GET['a'] : null;

switch($action) {
    case 'listar':
        $data = $model->Listar();
        echo json_encode($data);
        break;
    case 'editar':    	
		    if ($_GET['cont'] <> '') {
		    	$array = array();
		    	$array[] = $_GET['cont'];
 		    	$id =  $model->Editar($array);
 		    	$res = true;
		    	echo json_encode($res);
		    }else{
		    	$res = false;
		    	echo json_encode($res);
		    }
        break;
}


?>
