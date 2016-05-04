'use strict';

var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
var app = angular.module('app', []);
              
    app.controller('postController', function($scope, $http)
    {
        $scope.items = [];
        $scope.load_items = function()
        {
            $http.get(base_url+"/web/admin/api/post.php?a=listar")
            .success(function (res)
            {
             $scope.items = res;
                console.log($scope.tit)
            });
        }
        $scope.load_items();
        


       // var get = window.location.pathname.split('/web/admin/edit/post/')[1];

       //      $http.get(base_url+"/web/admin/api/post.php?a=obtener&id="+get)
       //      .success(function (res)
       //      {
       //       if (res == '') {
       //          $scope.view = false;             
       //       }else{
       //          $scope.item = res[0];
       //          $scope.view = true; 
       //          console.log($scope.item);            
       //       };
             
             
       //      });


          

    });          

