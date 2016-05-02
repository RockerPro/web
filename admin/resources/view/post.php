<?php session_start();
include '../../app/app2.php'; ?>
<!DOCTYPE html>
<html>
<?php include '../layouts/head.php'; ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo $baseurl.'public/bower_components/datatables/media/css/dataTables.bootstrap.css';?>">
<link rel="stylesheet" href="<?php echo $baseurl.'public/bower_components/datatables/media/css/jquery.dataTables.css';?>">
</head>
<body class="hold-transition skin-blue sidebar-mini" ng-app="AngularWayApp">
<div class="wrapper">

  <?php include '../layouts/menu_header.php'; ?>
  
  <div class="content-wrapper" ng-controller="AngularWayCtrl">
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
              <a class="btn btn-info  pull-right">
                Nuevo <i class="fa fa-plus"></i>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <table datatable="ng" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>Título</th>
                              <th>Estado</th>
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr ng-repeat="item in items" >
                              <td>{{item.title}}</td>
                              <td>{{item.state}}</td>
                              <td>
                                <i ng-click="testingClick(item.codpost)" class="fa fa-pencil"></i>
                              </td>
                            </tr>
                      </tbody>
                  </table>
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

  <?php include '../layouts/footer.php'; ?>

</div>

<!-- REQUIRED JS SCRIPTS -->
<?php include '../layouts/scripts.php'; ?>
<script src="<?php echo $baseurl.'public/bower_components/datatables/media/js/jquery.dataTables.min.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/angular-datatables/dist/angular-datatables.min.js';?>"></script> 
<!-- Controlador -->
<script src="<?php echo $baseurl.'public/dist/js/post_controller.js';?>"></script>
<!-- subir archivos -->
<script src="<?php echo $baseurl.'public/bower_components/ng-file-upload-shim/ng-file-upload-shim.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/ng-file-upload/ng-file-upload.js';?>"></script>


</body>

</html>
