
			<div class="col-md-3 novedades" ng-controller="postController" style="margin-top: 110px;margin-bottom:25px;overflow: hidden;">				
				<p class="titsec">Post Relacionados</p>
				<a href="<?php echo $baseurl?>novelty/{{related.codpost}}"
				 ng-repeat="related in relateds" class="post_related" >
					<div class="col-md-12 contnove">
						<img class="img-responsive imgnove" 
						ng-src="<?php echo $baseurl;?>admin/public/dist/img/posts/{{related.path_url}}">
						<p>{{related.title}}</p>
					</div>
				</a>
			</div>