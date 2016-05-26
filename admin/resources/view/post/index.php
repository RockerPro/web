<?php session_start();
include '../../../app/app2.php'; 
if ($_SESSION["rol"] == 'A' || $_SESSION["rol"] == 'U') {
 
}else{
header('Location: inicio');
}
?>
<!DOCTYPE html>
<html>
<?php include '../../layouts/head.php'; ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo $baseurl.'public/bower_components/datatables/media/css/dataTables.bootstrap.css';?>">
<link rel="stylesheet" href="<?php echo $baseurl.'public/bower_components/datatables/media/css/jquery.dataTables.css';?>">
</head>
<body class="hold-transition skin-blue sidebar-mini" ng-app="app">
<div class="wrapper">

  <?php include '../../layouts/menu_header.php'; ?>
  
  <div class="content-wrapper" ng-controller="postController">
    <section class="content-header">
      <h1>
        Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li><i class="fa fa-hsahtag"></i> Posts</li>
      </ol>
    </section>

    <!-- contenedor principal -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Listado de Post</h3>
              <a href="<?php echo $baseurl ?>create/post" class="btn btn-info  pull-right">
                Nuevo <i class="fa fa-plus"></i>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <table datatable="ng" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>Título</th>
                              <th>Autor</th>
                              <th>Fecha de Creación</th>
                              <th>Estado</th>
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr ng-repeat="item in items" >
                              <td>{{item.title}}</td>
                              <td>{{item.author}}</td>
                              <td>{{item.fech_create}}</td>
                              <td>
                                <t ng-if="item.state == 'A'">
                                  Activado
                                </t>
                                <t ng-if="item.state == 'D'">
                                  Desactivado
                                </t>
                              </td>
                              <td>
                                <a href="<?php echo $baseurl ?>edit/post/{{item.codpost}}" class="opt" data-toggle="tooltip" title="Editar">
                                  <i class="fa fa-pencil"></i>
                                </a>
                                <a  ng-click="change_state(item.codpost,$index,item.state)"
                                  ng-if="item.state == 'A'"
                                  class="opt" data-toggle="tooltip" title="Desactivar">
                                  <i class="fa fa-pause"></i>
                                </a>
                                <a  ng-click="change_state(item.codpost,$index,item.state)"
                                  ng-if="item.state == 'D'"
                                  class="opt" data-toggle="tooltip" title="Activar">
                                  <i class="fa fa-play"></i>
                                </a>
                                <a class="opt" data-toggle="tooltip" title="Eliminar">
                                  <i ng-click="delete_post(item.codpost,$index)" class="fa fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                      </tbody>
                  </table>
                </div>  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
  </div>

  <?php include '../../layouts/footer.php'; ?>

</div>

<!-- REQUIRED JS SCRIPTS -->
<?php include '../../layouts/scripts.php'; ?>
<script type="text/javascript" src="<?php echo $baseurl.'public/bower_components/tinymce-dist/tinymce.js';?>"></script>
  <script type="text/javascript" src="<?php echo $baseurl.'public/bower_components/angular-ui-tinymce/src/tinymce.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/datatables/media/js/jquery.dataTables.min.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/angular-datatables/dist/angular-datatables.min.js';?>"></script> 
<!-- Controlador -->
<script src="<?php echo $baseurl.'public/dist/js/post_controller.js';?>"></script>
<!-- subir archivos -->
<script src="<?php echo $baseurl.'public/bower_components/ng-file-upload-shim/ng-file-upload-shim.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/ng-file-upload/ng-file-upload.js';?>"></script>

</body>

</html>
