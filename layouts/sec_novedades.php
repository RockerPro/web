
			<div class="col-md-3 novedades" ng-controller="listPostController">				
				<p class="titsec">Novedades</p>
				<a href="<?php echo $baseurl?>novelty/{{item.codpost}}"
				 ng-repeat="item in items" class="post_item" >
					<div class="col-md-12 contnove">
						<img class="img-responsive imgnove" 
						ng-src="<?php echo $baseurl;?>admin/public/dist/img/posts/{{item.path_url}}">
						<p>{{item.title}}</p>
					</div>
				</a>
			</div>