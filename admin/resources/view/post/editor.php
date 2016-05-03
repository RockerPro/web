<?php session_start();
include '../../../app/app2.php'; ?>
<!DOCTYPE html>
<html>

<body class="hold-transition skin-blue sidebar-mini" ng-app="app">

<textarea ng-model="item.content" id="editor1" name="editor1" class="ckeditor" cols="30" rows="3"></textarea>

<script src="http://cdn.ckeditor.com/4.5.8/standard-all/ckeditor.js"></script>

<script>

			
				CKEDITOR.replace( 'editor1', {
					fullPage: true,
					extraPlugins: 'docprops',
					// Disable content filtering because if you use full page mode, you probably
					// want to  freely enter any HTML content in source mode without any limitations.
					allowedContent: true,
					height: 320
				} );
			

		</script>
</body>

</html>
