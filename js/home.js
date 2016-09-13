// JavaScript Document
var app = angular.module('myApp', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider){
          $routeProvider
              .when("/", {
                     templateUrl: "partials/main.php",
					 controller:"homeCtrl"
              })
			   .when("#/login", {
                     templateUrl: "partials/login.php",
					 controller:"partials/loginCtrl"
              })
			   .when("#/signup", {
                     templateUrl: "signUp.php",
					 controller:"signUpCtrl"
              });

      }]);
app.controller('homeCtrl',['$scope','$http',function($scope, $http)
{
        console.log("homeCtrl reporting for duty.");
       // read products
       $scope.products = [];
       $scope.rtvAll = function(){
                     $http.get("read_products.php").success(function(response){
                                $scope.products = response.records;
                             return $scope.products;


         });
           console.log($scope.products);
        }
}]);