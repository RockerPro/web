
			<div class="col-md-3 novedades" ng-controller="listPostController">				
				<p class="titsec news"><i class="fa fa-exclamation-circle"></i> Novedades</p>
				<a class="col-md-12 col-sm-4 col-ms-6 col-xs-12 wow bounceIn"  href="<?php echo $baseurl?>novedades/{{item.url_web}}-{{item.codpost}}"
				 ng-repeat="item in items" class="post_item" >
					<div class="contnove" title="{{item.title}}">
						<img class="img-responsive imgnove" 
						ng-src="<?php echo $baseurl;?>admin/public/dist/img/posts/{{item.path_url}}">
						<p>{{item.title}}</p>
					</div>
				</a>
				<div class="col-md-12 descarga">
 					<a href="<?php echo $baseurl;?>document/brochure.pdf" download>
 					<h2>DESCARGAR BROCHURE</h2>
 					<img class="img-responsive icondwl" src="<?php echo $baseurl;?>dist/img2/icons/download.svg" alt="descargar brochure">
 					</a>
 				</div>
			</div>