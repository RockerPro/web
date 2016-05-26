
			<div class="col-md-3 novedades" style="margin-top: 55px;margin-bottom:25px;overflow: hidden;{{view}}">				
				<p class="titsec news"><i class="fa fa-exclamation-circle"></i> Post Relacionados</p>
				<a class="col-md-12 col-sm-4 col-ms-6 col-xs-12 wow bounceIn" href="<?php echo $baseurl?>novedades/{{related.url_web}}-{{related.codpost}}"
				 ng-repeat="related in relateds" class="post_item" >
					<div class="contnove" title="{{related.title}}">
						<img class="img-responsive imgnove" 
						ng-src="<?php echo $baseurl;?>admin/public/dist/img/posts/{{related.path_url}}">
						<p>{{related.title}}</p>
					</div>
				</a>
			</div>