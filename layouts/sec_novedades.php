
			<div class="col-md-3 novedades" ng-controller="listPostController">				
				<p class="titsec news">Novedades</p>
				<a class="col-md-12 col-sm-4 col-ms-6 col-xs-12 wow bounceIn"  href="<?php echo $baseurl?>novedades/{{item.url_web}}-{{item.codpost}}"
				 ng-repeat="item in items" class="post_item" >
					<div class="contnove">
						<img class="img-responsive imgnove" 
						ng-src="<?php echo $baseurl;?>admin/public/dist/img/posts/{{item.path_url}}">
						<p>{{item.title}}</p>
					</div>
				</a>
			</div>