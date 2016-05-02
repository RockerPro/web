<?php
session_start();
require_once '../model/post.model.php';
$model = new ProductoModel();

    if(isset($_REQUEST['op'])){
        $op = $_REQUEST['op'];  
    } else {
        header('Location: ../view/index.php');
    }

switch ($op) {
    case 'Listar':
            $lis_prod = $model->Listar($_REQUEST['id']);

            $variable = array();
            $i=0;
            if($lis_prod){
                foreach ($lis_prod as $row){
                    $img = '<img class="table-image" src="../../view/img/productos/'. $row->img. '">';   
                    $accion = '<button class="btn btn-block btn-danger fa fa-minus-square btn-n-e-e" id="Elimina" value="'. $row->id .'" onclick="btnElimina(this)">   Eliminar</button>';

                    $variable[$i][0]=$row->nombre;
                    $variable[$i][1]=$row->des;
                    $variable[$i][2]= $img;
                    $variable[$i][3]= $accion;
                    $i++;
                }
            }
            echo json_encode($variable);
        break;
    case 'Eliminar':
            $img = $model->Eliminar($_REQUEST['id']);
            // unlink("../../view/img/productos/".$img[0]->img);
            echo json_encode('OK');
        break;
    case 'Nuevo':
            $name=@$_FILES['iFile']['name'];
            $ext= pathinfo($name);

            $data = array();
            $data[] = $_REQUEST['idCat'];
            $data[] = $_REQUEST['iNombre'];
            $data[] = $_REQUEST['iDesc'];
            $data[] = @$ext['extension'];

            $id =  $model->Nuevo($data);

            $ruta="../../view/img/productos/";
            $img=@$_FILES['iFile']['tmp_name'];
            move_uploaded_file($img, $ruta . "/" .$id[0]->img.".");

            echo json_encode('OK');
        break;
    default:
            header('Location: ../view/index.php');
        break;
}
