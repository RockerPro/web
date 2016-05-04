
			<div class="col-md-3 novedades" ng-controller="postController">
				<p class="titsec">Novedades</p>
				<div class="col-md-12 contnove" ng-repeat="item in items">
					<img class="img-responsive imgnove" 
					style="background: url(<?php echo $baseurl;?>admin/public/dist/img/posts/{{item.path_url}});
					    background-size: cover;
					    background-repeat: NO-REPEAT;
					    background-position: center;">
					<p>{{item.title}}</p>
					<a href="" class="pull-right">Ver más</a>
				</div>
			</div>