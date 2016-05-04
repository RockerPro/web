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
        Crear Usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseurl; ?>inicio"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li><a href="<?php echo $baseurl; ?>users"><i class="fa fa-users"></i> Usuarios</a></li>
        <li><i class="fa fa-hsahtag"></i> Crear Usuarios</li>
      </ol>
    </section>

    <!-- contenedor principal -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <!-- /.box-header -->
            <form role="form">
            <div class="box-body">
							<div class="col-sm-12">
								     <div class="form-group">
									    <label class="control-label">Nombre</label>
									    <input type="text" class="form-control" ng-model="item.nom" required>
									 </div>
								     <div class="form-group">
									    <label class="control-label">Email</label>
									    <input type="email" class="form-control" ng-model="item.email" required>
									 </div>
									 <div class="form-group">
									    <label class="control-label">Contraseña</label>
									    <input type="password" class="form-control" ng-model="item.pass" required>
									 </div>
                            </div>
            </div>
            <div class="box-footer">
						<a href="<?php echo $baseurl; ?>users"
						class="btn btn-danger pull-left">Cancelar</a>
						<a class="btn btn-success pull-right"
						ng-click="addUser()">Crear
						</a>
			</div>
			</form>
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
