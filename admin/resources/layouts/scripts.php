<!-- jQuery 2.2.0 -->
<script src="<?php echo $baseurl.'public/plugins/jQuery/jQuery-2.2.0.min.js';?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $baseurl.'public/bootstrap/js/bootstrap.min.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo $baseurl.'public/dist/js/app.min.js';?>"></script>
<!-- Angular -->
<script src="<?php echo $baseurl.'public/bower_components/angular/angular.min.js';?>"></script>
<!-- sweet alert  -->
<script src="<?php echo $baseurl.'public/bower_components/sweetalert/dist/sweetalert.min.js';?>"></script>
<script src="<?php echo $baseurl.'public/bower_components/angular-sweetalert/dist/ngSweetAlert.js';?>"></script>
<script>
	jQuery(document).ready(function() {
		var path = window.location.pathname.split('/web/admin/')[1];

            if (path == 'inicio') {
                 $("#ac1").addClass("active");
                 console.log(path);
            }
            if (path == 'post') {
                 $("#ac2").addClass("active");
                 console.log(path);
            }
            if (path == 'users') {
                 $("#ac4").addClass("active");
                 console.log(path);
            }
            if (path == 'analytics') {
                 $("#ac5").addClass("active");
                 console.log(path);
            }
            if (path == 'coments') {
                 $("#ac3").addClass("active");
                 console.log(path);
            }

	});
</script>