'use strict';

var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '/web/');
var app = angular.module('app', ['datatables','hSweetAlert', 'ngFileUpload', 'ui.tinymce']);
              
    app.controller('postController', function($scope, $http,sweet, $location, Upload, $timeout)
    {

      /* textarea edito options*/
      $scope.tinymceOptions = {
      relative_urls : 0,
remove_script_host : 0,
    automatic_uploads: true,
    file_browser_callback: function(field_name, url, type, win) {
    win.document.getElementById(field_name).value = 'my browser value';
    },
    file_browser_callback_types: 'file image media',
    images_upload_credentials: true,
   file_picker_callback: function(callback, value, meta) {
      // Provide file and text for the link dialog
      if (meta.filetype == 'file') {
        callback('mypage.html', {text: 'My text'});
      }

      // Provide image and alt text for the image dialog
      if (meta.filetype == 'image') {
        callback('public/dist/img/posts/pt0001.jpg', {alt: 'My alt text'});
      }

      // Provide alternative source and posted for the media dialog
      if (meta.filetype == 'media') {
        callback('movie.mp4', {source2: 'alt.ogg', poster: 'image.jpg'});
      }
   },
   file_picker_types: 'file image media',
    images_upload_base_path: 'public/dist/img/posts/',
    images_upload_credentials: true,
    plugins: [
    'visualblocks fullscreen charmap code advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'visualblocks | fullscreen | charmap | code | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
    toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code'
  };
      /* fin options*/

        $scope.items = [];
        $scope.load_items = function()
        {
            $http.get(base_url+"/admin/api/post.php?a=listar")
            .success(function (res)
            {
             $scope.items = res;
            });
        }
        $scope.load_items();

        $scope.change_state = function(item,index,state)
        {
            $http.get(base_url+"/admin/api/post.php?a=state&id="+item)
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
                $http.delete(base_url +'/admin/api/post.php?a=eliminar&id=' + id)
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
       var get = window.location.pathname.split('/admin/edit/post/')[1];

            $http.get(base_url+"/admin/api/post.php?a=obtener&id="+get)
            .success(function (res)
            {
             if (res == '') {
                $scope.view = false;  
                console.log($scope.view);               
             }else{
                $scope.item = res[0];
                $scope.view = true;   
                console.log($scope.view);            
             };
             
             
            });

        $scope.editPost = function(file) {
              if (file == null) {
              // sweet.show('', 'Item guardado exitosamente', 'success');
              $timeout ($scope.redirect, 500);  
            }
            $scope.item.img = file;
              file.upload = Upload.upload({
                method: 'POST',
                url: base_url+"/admin/api/post.php?a=editar&id=" + get,
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
                // sweet.show('', 'Item actualizado exitosamente', 'success');
                $timeout ($scope.redirect, 500);  
              });
          }
          $scope.item = [];
          $scope.$watch('select_cat', function() {
            $scope.item.category = $scope.select_cat;
           })

          $scope.addPost = function(file) {
            $scope.item.img = file;
            file.upload = Upload.upload({
              method: 'POST',
              url: base_url+"/admin/api/post.php?a=registrar",
              data: $scope.item,
            });

            file.upload.then(function (response) {
              $timeout(function () {
                file.result = response.data;
              });
              // sweet.show('', 'Item guardado exitosamente', 'success');
              $timeout ($scope.redirect, 500);  

            }, function (response) {
              if (response.status > 0)
                $scope.errorMsg = response.status + ': ' + response.data;
                sweet.show('', 'Error Inesperado', 'error');
            }, function (evt) {
              file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
            });
          }

          $scope.redirect = function() {
            window.location = base_url + "admin/post";  
          }  

    });          