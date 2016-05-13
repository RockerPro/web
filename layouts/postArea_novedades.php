
			<div class="col-md-3 novedades" ng-controller="postAreaController" style="margin-top: 55px;margin-bottom:25px;overflow: hidden;">				
				<p class="titsec">Post Relacionados</p>
				<a class="col-md-12 col-sm-4 col-ms-6 col-xs-12 wow bounceIn" href="<?php echo $baseurl?>novedades/{{related.url_web}}-{{related.codpost}}"
				 ng-repeat="related in relateds" class="post_item" >
					<div class="contnove">
						<img class="img-responsive imgnove" 
						ng-src="<?php echo $baseurl;?>admin/public/dist/img/posts/{{related.path_url}}">
						<p>{{related.title}}</p>
					</div>
				</a>
				<div class="col-md-12 descarga">
 					<a href="<?php echo $baseurl;?>document/brochure.pdf" download>
 					<h2>DESCARGAR BROCHURE</h2>
 					<img class="img-responsive icondwl" src="<?php echo $baseurl;?>dist/img2/icons/download.svg" alt="descargar brochure">
 					</a>
 				</div>
			</div>