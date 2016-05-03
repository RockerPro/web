'use strict';

var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
var app = angular.module('app', ['datatables','hSweetAlert', 'ngFileUpload']);
              
    app.controller('postController', function($scope, $http,sweet, $location, Upload, $timeout)
    {
        $scope.items = [];
        $scope.load_items = function()
        {
            $http.get(base_url+"/web/admin/api/post.php?a=listar")
            .success(function (res)
            {
             $scope.items = res;
            });
        }
        $scope.load_items();

        $scope.change_state = function(item,index,state)
        {
            $http.get(base_url+"/web/admin/api/post.php?a=state&id="+item)
            .success(function (res)
            {
             $scope.load_items();
             
            });
        }

        $scope.delete_post = function(id, index){
        sweet.show({
             title: "",
             text: "¿Seguro que desea eliminar este post?",
             type: "warning",
             showCancelButton: true,
             confirmButtonColor: "#DD6B55",
             confirmButtonText: "Si, eliminar post!",
             cancelButtonText: "No, cancelar!",
             closeOnConfirm: true,
             closeOnCancel: true }, 
          function(isConfirm){ 
             if (isConfirm) {
                $http.delete(base_url +'/web/admin/api/post.php?a=eliminar&id' + id)
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
       var get = window.location.pathname.split('/web/admin/edit/post/')[1];

            $http.get(base_url+"/web/admin/api/post.php?a=obtener&id="+get)
            .success(function (res)
            {
             if (res == '') {
                $scope.view = false;             
             }else{
                $scope.item = res[0];
                $scope.view = true; 
                console.log($scope.item);            
             };
             
             
            });

        $scope.editPost = function(file) { 
              if (file == null) {
              sweet.show('', 'Item guardado exitosamente', 'success');
            }
              file.upload = Upload.upload({
                method: 'post',
                url: 'web/admin/api/post.php?a=editar&id=' + get,
                data: $scope.item,
              });

              file.upload.then(function (response) {
                $timeout(function () {
                  file.result = response.data;
                });
              }, function (response) {
                if (response.status > 0)
                  $scope.errorMsg = response.status + ': ' + response.data;
                  sweet.show('', 'Error Inesperado', 'error');
              }, function (evt) {
                file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
                sweet.show('', 'Item actualizado exitosamente', 'success');
              });
          }
          $scope.item = [];
          $scope.$watch('select_cat', function() {
            $scope.item.category = $scope.select_cat;
            console.log($scope.item);
           })

          $scope.addPost = function(file) {
            
            $scope.item.img = file;
            console.log($scope.item);
            
            file.upload = Upload.upload({
              method: 'POST',
              url: '../../../web/admin/api/post.php?a=registrar',
              data: $scope.item,
            });

            file.upload.then(function (response) {
              $timeout(function () {
                file.result = response.data;
              });
              console.log(response);
              sweet.show('', 'Item guardado exitosamente', 'success');

            }, function (response) {
              if (response.status > 0)
                $scope.errorMsg = response.status + ': ' + response.data;
                sweet.show('', 'Error Inesperado', 'error');
            }, function (evt) {
              file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
            });
          }

    });          