'use strict';

var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
var app = angular.module('app', ['datatables','hSweetAlert']);
              
    app.controller('userController', function($scope, $http,sweet, $location, $timeout)
    {	


        $scope.item = [];
        $scope.load_item = function()
        {
            $http.get(base_url+"/admin/api/scripts.php?a=listar")
            .success(function (res)
            {
             $scope.item = res[0];
            });
        }
        $scope.load_item();

        $scope.editScript = function() { 
          var params = {};

              params.a = 'editar';
              params.cont = $scope.item.content;
                $http({
                  url: base_url +'/admin/api/scripts.php',
                  method: "get",
                  params: params
              })   
                      .success(function(res){
                          if (res == 'true') {
                          	sweet.show('', 'Script Actualizado', 'success');    
                          }else{
                          	sweet.show('', 'Complete el campo', 'error');    
                          };                                    
                      })
                      .error(function(res){
                        sweet.show('', 'Error inesperado', 'error');
                        });         
        }


  });  