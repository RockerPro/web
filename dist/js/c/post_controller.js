'use strict';
var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '/web/');
var app = angular.module('app', []);
    app.controller('listPostController', function($scope, $http)
    {
        $scope.items = [];
        $scope.load_items = function()
        {
            $http.get(base_url+"/admin/api/post.php?a=ultimos")
            .success(function (res)
            {
             $scope.items = res;
            });
        }
        $scope.load_items();
    });
    app.controller('postController', function($scope, $http)
    {
        var get = window.location.pathname.split('/novedades/')[1];
        var cod = get.substr(get.length - 6);
              console.log(cod);
            $http.get(base_url+"/admin/api/post.php?a=obtener&id="+cod)
            .success(function (res)
            {
             if (res == '') {
                $scope.view = 'display:none;';
                $scope.error = 'display:block;';
             }else{
                $scope.item = res[0];
                $scope.view = 'display:block;';
                $scope.error = 'display:none;';
                $scope.load_related($scope.item.category);
             };
            });
         $scope.load_related = function(cate) {
         	 $http.get(base_url+"/admin/api/post.php?a=related&cat="+cate)
            .success(function (res)
            {
            $scope.relateds = res;
            console.log(res);
            });
         }
    });
    app.controller('postAreaController', function($scope, $http)
    {
          var get = window.location.pathname.split('/areas_negocio/')[1];
          if (get == 'infraestructura') {
          	$scope.cate = 'Infraestructura';
          }else if (get == 'soluciones_moviles') {
          	$scope.cate = 'Soluciones Móviles';
          }else if (get == 'consultoria_emprendimiento') {
          	$scope.cate = 'Consuloría y Emprendimiento';
          };
         	 $http.get(base_url+"/admin/api/post.php?a=related&cat="+$scope.cate)
            .success(function (res)
            {
            $scope.relateds = res;
            console.log(res);
            });
    });
    app.controller('postsAreaController', function($scope, $http)
    {
          var get = window.location.pathname.split('/news/category/')[1];
          if (get == 'infraestructura') {
          	$scope.cate = 'Infraestructura';
          }else if (get == 'soluciones_moviles') {
          	$scope.cate = 'Soluciones Móviles';
          }else if (get == 'consultoria_emprendimiento') {
          	$scope.cate = 'Consuloría y Emprendimiento';
          };
         	 $http.get(base_url+"/admin/api/post.php?a=category&cat="+$scope.cate)
            .success(function (res)
            {
            $scope.relateds = res;
            console.log(res);
            });
    });
jQuery(document).ready(function() {
  /*suscribe foorm */
  $('.success-message2').hide();
	$('.error-message').hide();
     $('#form_sus').submit(function(e) {
		e.preventDefault();
		var form = $(this);
	    var postdata = form.serialize();
	    $.ajax({
	        type: 'POST',
	        url: base_url+'/layouts/subscribe.php',
	        data: postdata,
	        dataType: 'json',
	        success: function(json) {
	            if(json.valid == 0) {
	                $('.success-message2').hide();
	                $('.error-message').hide();
	                $('.error-message').html(json.message);
	                $('.error-message').fadeIn();
	            }else {
	                $('.error-message').hide();
	                $('.success-message2').hide();
	                form.hide();
	                $('.success-message2').html(json.message);
	                $('.success-message2').fadeIn();
	            }
	        }
	    });});});