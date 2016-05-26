'use strict';

var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '/web/');
var app = angular.module('app', []);
              
    app.controller('dashController', function($scope)
    {	
$scope.redirect = function(x) {
          switch (x) {
            case "1":
              window.open("https://developers.facebook.com/tools/comments/1774999642714124","_blank");
              break;
            case "2":
              window.open("https://dashboard.tawk.to/login","_blank");
              break;
            case "3":
              window.open("https://www.facebook.com/SGTEL-548123528682318/?ref=aymt_homepage_panel","_blank");
              break;
            case "4":
              window.open("https://twitter.com/sgtelatam","_blank");
              break;
            case "5":
              window.open("https://analytics.google.com/analytics/","_blank");
              break;
            case "6":
              window.open("http://sgtel.pe/cpanel","_blank");
              break;
            case "7":
              window.location=base_url+"admin/users";  
              break;
            case "8":
              window.location=base_url+"admin/post";  
              break;
            default:
              window.location="/admin";  
          }          
        }

         });  