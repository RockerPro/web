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
    case 'ultimos':
        $data = $model->ultimos();
        echo json_encode($data);
        break;
    case 'related':
        $data = $model->related($_REQUEST['cat']);
        echo json_encode($data);
        break;
    case 'category':
        $data = $model->category($_REQUEST['cat']);
        echo json_encode($data);
        break;
    case 'obtener':
        $data = $model->Obtener($_REQUEST['id']);
        echo json_encode($data);
        break;
    case 'state':
        $data = $model->State($_REQUEST['id']);
        echo json_encode($data);
        break;
    case 'registrar':
    		$ruta="../public/dist/img/posts";
        	$archivo=@$_FILES['img']['tmp_name'];
            $url = cambiar($_POST['title']);
		    $array = array();
            $array[] = $_POST['title'];
            $array[] = $_POST['content'];
            $array[] = $_POST['summary'];
            $array[] = $_POST['category'];
            $array[] = $_SESSION["nombre"];
            $array[] = str_replace('"', '',strtolower($url));
 		    $id =  $model->Nuevo($array);
		    move_uploaded_file($archivo, $ruta . "/" . $id[0]->img);
		    echo json_encode($array);
        break;
    case 'editar':
        	$ruta="../public/dist/img/posts";
        	$archivo=@$_FILES['img']['tmp_name'];
            $url = cambiar($_POST['url_web']);      	
		    $array = array();
		    $array[] = $_GET['id'];
            $array[] = $_POST['title'];
            $array[] = $_POST['content'];
            $array[] = $_POST['summary'];
            $array[] = $_POST['category'];
            $array[] = str_replace('"', '',strtolower($url));
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

function cambiar($cadena) {
$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹","?","¿",":",";","'","@",",","!","¡");
$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E","","","","","","","","","");
$texto = str_replace($no_permitidas, $permitidas ,$cadena);
return $texto;
}

?>
