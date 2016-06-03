
			<div class="col-md-3 novedades" ng-controller="postAreaController" style="margin-top: 55px;margin-bottom:25px;overflow: hidden;">				
				<p class="tit_suscrip"><c style="color:#ff761a">SUSCRIBETE</c> POR EMAIL A NUESTROS ARTÍCULOS</p>
				<div class="form" style="overflow: hidden;">
					<form role="form" id="form_sus">
						<div class="form-group">
							<label class="form-label">Email</label>
							<input type="text" class="form-control" name="email" placeholder="Email..." >						
						</div>
						<div class="form-group">
							<input type="submit" value="Suscribirse" class="btn btn-orange pull-right">
						</div>
					</form>
					<p class="success-message2"></p>
		            <p class="error-message"></p>
				</div>				
				<hr class="hr_post"><br>
				<p class="titsec news"><i class="fa fa-exclamation-circle"></i> Post Relacionados</p>
				<div class="col-md-12" style="overflow:hidden;">
					<a class="col-md-12 col-sm-4 col-ms-6 col-xs-12 wow bounceIn" href="<?php echo $baseurl?>novedades/{{related.url_web}}-{{related.codpost}}"
					 ng-repeat="related in relateds" class="post_item" >
						<div class="contnove" title="{{related.title}}">
							<img class="img-responsive imgnove" 
							ng-src="<?php echo $baseurl;?>admin/public/dist/img/posts/{{related.path_url}}">
							<p>{{related.title}}</p>
						</div>
					</a>
				</div>
				<!-- <div class="col-md-12 descarga">
 					<a href="<?php echo $baseurl;?>document/<?php echo str_replace("/web/areas-negocio/", "", $_SERVER['REQUEST_URI'])?>.pdf" download>
 					<h2>DESCARGAR BROCHURE</h2>
 					<img class="img-responsive icondwl" src="<?php echo $baseurl;?>dist/img2/icons/download.svg" alt="descargar brochure">
 					</a>
 				</div> -->
			</div>