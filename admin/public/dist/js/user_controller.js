'use strict';

var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
var app = angular.module('app', ['datatables','hSweetAlert']);
              
    app.controller('userController', function($scope, $http,sweet, $location, $timeout)
    {	
    	$scope.item = {};
    	$scope.addUser = function() { 
          var params = {};

              params.a = 'registrar';
              params.nom = $scope.item.nom;
              params.email = $scope.item.email;  
              params.pass = $scope.item.pass;
                $http({
                  url: base_url +'/admin/api/usuarios.php',
                  method: "get",
                  params: params
              })   
                      .success(function(res){
                          if (res[0].res == 'fail') {
                          	sweet.show('', 'Ya hay un usuario registrado con ese email', 'error');
                          }else if (res[0].res == 'success') {
                          	sweet.show('', 'Item registrado', 'success');
                          };   
                          $scope.limpiar();                                           
                      })
                      .error(function(res){
                        sweet.show('', 'Error inesperado', 'error');
                        });         
        }

        $scope.items = [];
        $scope.load_items = function()
        {
            $http.get(base_url+"/admin/api/usuarios.php?a=listar")
            .success(function (res)
            {
             $scope.items = res;
            });
        }
        $scope.load_items();

        

        $scope.delete_user = function(id, index){
        sweet.show({
             title: "",
             text: "¿Seguro que desea eliminar este usuario?",
             type: "warning",
             showCancelButton: true,
             confirmButtonColor: "#DD6B55",
             confirmButtonText: "Si, eliminar usuario!",
             cancelButtonText: "No, cancelar!",
             closeOnConfirm: true,
             closeOnCancel: true }, 
          function(isConfirm){ 
             if (isConfirm) {
                $http.delete(base_url +'/admin/api/usuarios.php?a=eliminar&id=' + id)
                .success(function(res) {
                  $scope.items.splice(index, 1);
                })
                .error(function(res) {
                    sweet.show('', 'Error inesperado', 'error');
                });
          } else {
                 
             }
          });          
       }

			  $scope.limpiar = function(){
			    $scope.item = {};
			  }

		$http.get(base_url+"/admin/api/usuarios.php?a=obtener")
            .success(function (res)
            {
                $scope.datos = res[0];
            });

        $scope.editUser = function() { 
          var params = {};

              params.a = 'editar';
              params.nom = $scope.datos.nomusu;
              params.email = $scope.datos.email;
                $http({
                  url: base_url +'/admin/api/usuarios.php',
                  method: "get",
                  params: params
              })   
                      .success(function(res){
                          sweet.show('', 'Datos Actualizados', 'success');                                      
                      })
                      .error(function(res){
                        sweet.show('', 'Error inesperado', 'error');
                        });         
        }

        $scope.chkpass = function() { 
          var params = {};

              params.a = 'passw';
              params.pass1 = $scope.pwd.pass1;
              params.pass2 = $scope.pwd.pass2;
                $http({
                  url: base_url +'/admin/api/usuarios.php',
                  method: "get",
                  params: params
              })   
                      .success(function(res){
                          if (res == 'true') {
                          	sweet.show('', 'Contraseña Actualizada', 'success');    
                          }else{
                          	sweet.show('', 'Las Contraseñas no coinciden', 'error');    
                          };                              
                      })
                      .error(function(res){
                        sweet.show('', 'Error inesperado', 'error');
                        });         
        }

  });  