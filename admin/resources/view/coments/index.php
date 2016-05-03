<?php session_start();
include '../../../app/app2.php'; ?>
<!DOCTYPE html>
<html>
<?php include '../../layouts/head.php'; ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo $baseurl.'public/plugins/datatables/dataTables.bootstrap.css';?>">
</head>
<body class="hold-transition skin-blue sidebar-mini" ng-app="app">
<div class="wrapper">

  <?php include '../../layouts/menu_header.php'; ?>
  
  <div class="content-wrapper" ng-controller="postController">
    <section class="content-header">
      <h1>
        Comentarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li><i class="fa fa-hsahtag"></i> Comentarios</li>
      </ol>
    </section>

    <!-- contenedor principal -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Listado de Comentarios</h3>
              <a class="btn btn-info  pull-right">
                Nuevo <i class="fa fa-plus"></i>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
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

  <?php include '../../layouts/footer.php'; ?>

</div>

<!-- REQUIRED JS SCRIPTS -->
<?php include '../../layouts/scripts.php'; ?>
<!-- Controlador -->
<script src="<?php echo $baseurl.'public/dist/js/post_controller.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/ng-file-upload-shim/ng-file-upload-shim.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/ng-file-upload/ng-file-upload.js';?>"></script>
<!-- DataTables -->
<script src="<?php echo $baseurl.'public/plugins/datatables/jquery.dataTables.min.js';?>"></script>
<script src="<?php echo $baseurl.'public/plugins/datatables/dataTables.bootstrap.min.js';?>"></script>
<!-- page script -->
<script>
  $(document).ready(function() {
    $('#example1').DataTable( {
        "ajax": {
         "url": "resources/view/data.php",
         "dataSrc": "persons"
     },
     "columns": [
         { "data": "preferred_name" },
         { "data": "last_name" },
         { "data": "phone_numbers" },
         { "data": "department" },
         { "data": "branch" },
         {
                data: null,
                className: "center",
                defaultContent: '<a href="" class="editor_edit"><i class="fa fa-pencil"></i></a>  <a href="" class="editor_remove"><i class="fa fa-trash"></i></a>  '
            }
     ]
    });
} );
</script>

</body>

</html>
