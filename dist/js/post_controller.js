'use strict';

var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
var app = angular.module('app', []);
              
    app.controller('listPostController', function($scope, $http)
    {
        $scope.items = [];
        $scope.load_items = function()
        {
            $http.get(base_url+"/web/admin/api/post.php?a=ultimos")
            .success(function (res)
            {
             $scope.items = res;
            });
        }
        $scope.load_items();
        


       

    });          

    app.controller('postController', function($scope, $http)
    {
        var get = window.location.pathname.split('/web/novelty/')[1];
            $http.get(base_url+"/web/admin/api/post.php?a=obtener&id="+get)
            .success(function (res)
            {
             if (res == '') {
                $scope.view = false;             
             }else{
                $scope.item = res[0];
                $scope.view = true;
                $scope.load_related($scope.item.category);     
             };
            });
          

         $scope.load_related = function(cate) {
         	 $http.get(base_url+"/web/admin/api/post.php?a=related&cat="+cate)
            .success(function (res)
            {
            $scope.relateds = res;
            }); 
         }

    });     

    app.controller('postAreaController', function($scope, $http)
    {
       
          var get = window.location.pathname.split('/web/areas_negocio/')[1];
          if (get == 'infraestructura') {
          	$scope.cate = 'Infraestructura';
          }else if (get == 'soluciones_moviles') {
          	$scope.cate = 'Soluciones Móviles';
          }else if (get == 'consultoria_emprendimiento') {
          	$scope.cate = 'Consuloría y Emprendimiento';
          };

         	 $http.get(base_url+"/web/admin/api/post.php?a=related&cat="+$scope.cate)
            .success(function (res)
            {
            $scope.relateds = res;
            }); 

         

    });    

    app.controller('postsAreaController', function($scope, $http)
    {
       
          var get = window.location.pathname.split('/web/news/category/')[1];
          if (get == 'infraestructura') {
          	$scope.cate = 'Infraestructura';
          }else if (get == 'soluciones_moviles') {
          	$scope.cate = 'Soluciones Móviles';
          }else if (get == 'consultoria_emprendimiento') {
          	$scope.cate = 'Consuloría y Emprendimiento';
          };

         	 $http.get(base_url+"/web/admin/api/post.php?a=category&cat="+$scope.cate)
            .success(function (res)
            {
            $scope.relateds = res;
            console.log(res);
            }); 

         

    });    