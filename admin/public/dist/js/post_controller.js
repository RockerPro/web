'use strict';

var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
var app = angular.module('AngularWayApp', ['datatables','hSweetAlert', 'ngFileUpload']);
              
                app.controller('AngularWayCtrl', function($scope, $http)
                {
                  $scope.items = [];
                    $http.get(base_url+"/web/admin/api/post.php?a=listar").success(function (response)
                    {
                        $scope.items = response;
                        console.log($scope.items);
                    });

                    $scope.testingClick = function(item)
                    {
                        console.log(item);
                    };

                });