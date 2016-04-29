'use strict';

var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
var app = angular.module("app", ['hSweetAlert', 'ngFileUpload']);


app.controller('MyCtrl', ['$scope', 'Upload', '$timeout', 'sweet', '$window',function ($scope, Upload, $timeout,sweet, $window) {
    $scope.uploadPic = function(file) {
    file.upload = Upload.upload({
      url: '/api/posts',
      data: {title: $scope.title, image_file: file},
    });

    file.upload.then(function (response) {
      sweet.show('', 'Item creado exitosamente', 'success');
      file.result = response.data;
      $scope.title = '';

      $timeout(function () {
        $window.location.href = base_url + '/admin/posts/index.html';
      }, 2000);

    }, function (response) {
      if (response.status > 0)
        $scope.errorMsg = response.status + ': ' + response.data;
        sweet.show('', 'Error Inesperado', 'error');
    }, function (evt) {
      // Math.min is to fix IE which reports 200% sometimes
      file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
    });
    }


}]);

app.controller("postController", function($scope, $http, sweet) {
	// $scope.end_date = '';
	// var f = new Date();
 //          $scope.end_date = f.getFullYear() + "-"  + (f.getMonth() +1) + "-" + f.getDate();
 //      $scope.posts = [];
 //      $scope.pages = [];
 //      $scope.current_page = 1;    
 //      $scope.$watch('current_page', function(value) {
 //         if (value >= 1) {
 //            $scope.load_items();
 //         };
 //      })

 //      $scope.page_anterior = function() {
 //        $scope.current_page = $scope.current_page - 1;
 //      };

 //      $scope.page_siguiente = function() {
 //        $scope.current_page = $scope.current_page + 1;
 //      };

 //      $scope.load_items = function() {
 //         $http.get(base_url +'/api/posts?page=' + $scope.current_page).success(function(data) {
 //            $scope.posts = data.data;
 //            $scope.current_page = data.current_page;
 //          });   
 //      }

     

 //      $scope.delete_post = function(id, index){
 //        sweet.show({
 //             title: "",
 //             text: "¿Seguro que desea eliminar este consejo?",
 //             type: "warning",
 //             showCancelButton: true,
 //             confirmButtonColor: "#DD6B55",
 //             confirmButtonText: "Si, eliminar!",
 //             cancelButtonText: "No, cancelar!",
 //             closeOnConfirm: true,
 //             closeOnCancel: true }, 
 //          function(isConfirm){ 
 //             if (isConfirm) {
 //                $http.delete(base_url +'/api/posts/' + id)
 //                .success(function(res) {
 //                  $scope.posts.splice(index, 1);
                       
 //                })
 //                .error(function(res) {
 //                    sweet.show('', 'Error inesperado', 'error');
 //                });
 //          } else {
                 
 //             }
 //          });          
 //       }

      
});
  


app.controller("showController", ['$scope', '$http', '$location', 'Upload', '$timeout', 'sweet', '$window',
  function($scope, $http, $location, Upload, $timeout, sweet, $window) {

      var path = window.location.pathname.split('/admin/posts/')[1];
      var id = path.split('/edit.html');
      $scope.dummy = [];
      $scope.detapost = [];
          $http.get(base_url +'/api/posts/' + id).success(function(data) {
            $scope.detapost = data.data.item;
            $scope.prov = [];
            $scope.prov.images = [$scope.detapost.image_url];
          });  


        $scope.uploadPic = function(file) {
          if (file == null) {
            sweet.show('', 'Item creado exitosamente', 'success');
          }
          file.upload = Upload.upload({
            method: 'post',
            url: '/api/posts/' + id,
            data: {title: $scope.detapost.title, image_file: file, _method: 'put'},
          });
          console.log(file);
          file.upload.then(function (response) {
            $scope.title = '';
            sweet.show('', 'Item creado exitosamente', 'success');
            file.result = response.data;

            $timeout(function () {
              $window.location.href = base_url + '/admin/posts/index.html';
            }, 2000);
          }, function (response) {
            if (response.status > 0)
              $scope.errorMsg = response.status + ': ' + response.data;
              sweet.show('', 'Error Inesperado', 'error');
          }, function (evt) {
            file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
            
          });
          }


}]);
