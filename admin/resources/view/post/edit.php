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
  
  <div class="content-wrapper" ng-controller="postController">
    <section class="content-header">
      <h1>
        Post: {{item.title}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseurl; ?>inicio"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li><a href="<?php echo $baseurl; ?>post"><i class="fa fa-hashtag"></i> Posts</a></li>
        <li><i class="fa fa-hsahtag"></i> {{item.title}}</li>
      </ol>
    </section>

    <!-- contenedor principal -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Post: {{item.title}}</h3>
            </div>
            <!-- /.box-header -->
            <form name="myForm" autocomplete="off">   
			<div class="col-sm-12">
					<div class="inputfile">
						<input type="file" ngf-select ng-model="picFile" name="file"    
							accept="image/*" ngf-max-size="2MB" 
							ngf-model-invalid="errorFile">
							<p class="help-block">Dimenciones: px de alto x px de ancho</p>
							<i ng-show="myForm.file.$error.required" style="color:red">* Requerido</i><br>
							<i ng-show="myForm.file.$error.maxSize"  style="color:red">Archivo demasiado grande 
							(@{{errorFile.size / 1000000|number:1}}MB): máximo  2MB</i>
					</div>
			        <img ng-show="myForm.file.$valid" ngf-thumbnail="picFile" 
					class="img-responsive imgblog" ng-src="<?php echo $baseurl ?>public/dist/img/posts/{{item.path_url}}"
					style="display: block !important;">
					<span class="progress" ng-show="picFile.progress >= 0">
								            <div style="width:@{{picFile.progress}}%"
								            ng-bind="picFile.progress + '%'"></div>
									      </span>
									      <span ng-show="picFile.result">	</span>
									      <span class="err" ng-show="errorMsg">@{{errorMsg}}</span>
			</div>
            <div class="box-body">
							<div class="col-sm-12">
								     <div class="form-group">
									    <label class="control-label">Título</label>
									    <input type="text" class="form-control" name="title" ng-model="item.title" required>
								        <i ng-show="myForm.title.$error.required" style="color:red">* Requerido</i>
									 </div>
								     <div class="form-group">
									    <label class="control-label">Resumen</label>
									    <textarea ng-model="item.summary" name="summary" class="form-control nores"cols="30" rows="3" required></textarea>
								        <i ng-show="myForm.summary.$error.required" style="color:red">* Requerido</i>
									 </div>
									 <div class="form-group">
									    <label class="control-label">Contenido</label>
									    <textarea ng-model="item.content" name="content" class="form-control nores" cols="30" rows="7" required></textarea>
								        <i ng-show="myForm.content.$error.required" style="color:red">* Requerido</i>
									 </div>
								     <div class="form-group">
									    <label class="control-label">Categoría: {{item.category}}</label>
									    <select name="category" class="form-control"  ng-model="select_cat">
									    	<option value="Infraestructura">Infraestructura</option>
									    	<option value="Soluciones Móviles">Soluciones Móviles</option>
									    	<option value="Consuloría y Emprendimiento">Consuloría y Emprendimiento</option>
									    </select>
									 </div>
                            </div>
            </div>
            <div class="box-footer">
						<a href="<?php echo $baseurl; ?>post"
						class="btn btn-danger pull-left">Cancelar</a>
						<button class="btn btn-success pull-right" ng-disabled="!myForm.$valid"
						ng-click="editPost(picFile)">Actualizar
						</button>
			</div>
			</form>
            <div class="box-body" ng-if="view == false" >
                	<h3 align="center">No se encontro el recurso solicitado</h3> 
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
<script src="<?php echo $baseurl.'public/dist/js/post_controller.js';?>"></script>
<!-- subir archivos -->
<script src="<?php echo $baseurl.'public/bower_components/ng-file-upload-shim/ng-file-upload-shim.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/ng-file-upload/ng-file-upload.js';?>"></script>

</body>

</html>
