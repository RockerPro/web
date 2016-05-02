<?php
header('Access-Control-Allow-Origin: *');
session_start();
require_once '../model/post.model.php';
$model = new PostsModel();
$action = isset($_GET['a']) ? $_GET['a'] : null;

switch($action) {
    case 'listar':
        $data = $model->Listar();
        echo json_encode($data);
        break;
    case 'obtener':
        $data = $model->Obtener($_REQUEST['id']);
        echo json_encode($data);
        break;
    case 'registrar':
    		$ruta="../public/dist/img/posts";
        	$archivo=@$_FILES['img']['tmp_name'];      	
		    $array = array();
            $array[] = $_POST['title'];
            $array[] = $_POST['content'];
            $array[] = $_POST['summary'];
            $array[] = $_POST['category'];
            $array[] = $_SESSION["nombre"];
 		    $id =  $model->Nuevo($array);
		    move_uploaded_file($archivo, $ruta . "/" . $id[0]->img);
		    echo json_encode($array);
        break;
    case 'editar':
        	$ruta="../public/dist/img/posts";
        	$archivo=@$_FILES['img']['tmp_name'];      	
		    $array = array();
		    $array[] = $_GET['id'];
            $array[] = $_POST['title'];
            $array[] = $_POST['content'];
            $array[] = $_POST['summary'];
            $array[] = $_POST['category'];
 		    $id =  $model->Editar($array);
		    move_uploaded_file($archivo, $ruta . "/" . $_GET['id'].'.jpg');
		    echo json_encode('ok');
        break;
    case 'eliminar':
    		$ruta="../public/dist/img/posts/";
        	$data = $model->Eliminar($_REQUEST['id']);
        	unlink($ruta . $_REQUEST['id'].'.jpg');
        	echo json_encode('ok');
        break;
}


?>
