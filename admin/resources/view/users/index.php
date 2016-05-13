<?php session_start();
include '../../../app/app2.php'; ?>
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
  
  <div class="content-wrapper" ng-controller="userController">
    <section class="content-header">
      <h1>
        Usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li><i class="fa fa-hsahtag"></i> Usuarios</li>
      </ol>
    </section>

    <!-- contenedor principal -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Listado de Usuarios</h3>
              <a href="<?php echo $baseurl ?>create/users" class="btn btn-info  pull-right">
                Nuevo <i class="fa fa-plus"></i>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <table datatable="ng" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>Nombres</th>
                              <th>Rol</th>
                              <th>Email</th>
                              <th>Fecha de Creación</th>
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr ng-repeat="item in items" >
                              <td>{{item.nomusu}}</td>
                              <td>
                                <t ng-if="item.rol == 'A'">
                                  Administrador
                                </t>
                                <t ng-if="item.rol == 'U'">
                                  Creador de Contenidos
                                </t>
                              </td>
                              <td>{{item.email}}</td> 
                              <td>{{item.fech_create}}</td>                              
                              <td>
                                <a class="opt" data-toggle="tooltip" title="Eliminar">
                                  <i ng-click="delete_user(item.codusu,$index)" class="fa fa-trash"></i>
                                </a>
                                <a href="<?php echo $baseurl ?>edit/users/{{item.codusu}}" class="opt" data-toggle="tooltip" title="Editar">
                                  <i class="fa fa-pencil"></i>
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
<script src="<?php echo $baseurl.'public/bower_components/datatables/media/js/jquery.dataTables.min.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/angular-datatables/dist/angular-datatables.min.js';?>"></script> 
<!-- Controlador -->
<script src="<?php echo $baseurl.'public/dist/js/user_controller.js';?>"></script>
<!-- subir archivos -->
<script src="<?php echo $baseurl.'public/bower_components/ng-file-upload-shim/ng-file-upload-shim.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/ng-file-upload/ng-file-upload.js';?>"></script>

</body>

</html>
