// JavaScript Document
var app = angular.module('myApp', ['ngRoute',
                                    'angularUtils.directives.dirPagination'
                        ]);

app.config(['$routeProvider', function($routeProvider){
          $routeProvider
              .when("/", {
                     templateUrl: "partials/main.php",
					 controller:"mainCtrl"
              })
              $routeProvider
                  .when("/edit", {
                         templateUrl: "partials/edit.php",
    					 controller:"productsCtrl"
                  })
			   .when("/login", {
                     templateUrl: "partials/login.php",
					 controller:"partials/loginCtrl"
              })
			   .when("/signup", {
                     templateUrl: "partials/signUp.php",
					 controller:"signUpCtrl"
              });

      }]);
app.controller('mainCtrl',['$scope','$http',function($scope, $http)
{
        console.log("mainCtrl reporting for duty.");
       // read products
       $scope.categories = [];
       $scope.getAllCategories = function(){
           $http.get("read_categories.php").success(function(response){
                          $scope.categories = response.records;
                      //  $scope.categories;
                 });
           console.log($scope.categories);
        }
}]);

app.controller('productsCtrl', function($scope, $http) {
      console.log("productsCtrl reporting for duty.");
      // jquery script
      $(document).ready(function(){
      	// initialize modal
      	$('.modal-trigger').leanModal();
      });

	// read products
	$scope.getAll = function(){
		$http.get("read_products.php").success(function(response){
			$scope.names = response.records;
		});
	}
  $scope.categories = [];
       $http.get("read_categories.php").success(function(response){
                      $scope.categories = response.records;
                  //  $scope.categories;
             });
	// create new product
	$scope.createProduct = function(){

		// fields in key-value pairs
		$http.post('create_product.php', {
				'name' : $scope.name,
				'description' : $scope.description,
        'category_id': $scope.selectedCategory,
				'price' : $scope.price
			}
		).success(function (data, status, headers, config) {
			console.log(data);
			// tell the user new product was created
			Materialize.toast(data, 4000);

			// close modal
			$('#modal-product-form').closeModal();

			// clear modal content
			$scope.clearForm();

			// refresh the list
			$scope.getAll();
		});
	}

	// delete product
	$scope.deleteProduct = function(id){

		// ask the user if he is sure to delete the record
		if(confirm("Are you sure?")){
			// post the id of product to be deleted
			$http.post('delete_product.php', {
				'id' : id
			}).success(function (data, status, headers, config){

				// tell the user product was deleted
				Materialize.toast(data, 4000);

				// refresh the list
				$scope.getAll();
			});
		}
	}

	// retrieve record to fill out the form
	$scope.readOne = function(id){

		// change modal title
		$('#modal-product-title').text("Edit Product");

		// show udpate product button
		$('#btn-update-product').show();

		// show create product button
		$('#btn-create-product').hide();

		// post id of product to be edited
		$http.post('read_one.php', {
			'id' : id
		})
		.success(function(data, status, headers, config){

			// put the values in form
			$scope.id = data[0]["id"];
			$scope.name = data[0]["name"];
			$scope.description = data[0]["description"];
			$scope.price = data[0]["price"];

			console.log("Here is the product: " + $scope.name);
			// show modal
			$('#modal-product-form').openModal();
		})
		.error(function(data, status, headers, config){
			Materialize.toast('Unable to retrieve record.', 4000);
		});
	}

	// update product record / save changes
	$scope.updateProduct = function(){
		$http.post('update_product.php', {
			'id' : $scope.id,
			'name' : $scope.name,
			'description' : $scope.description,
			'price' : $scope.price
		})
		.success(function (data, status, headers, config){
			// tell the user product record was updated
			Materialize.toast(data, 4000);

			// close modal
			$('#modal-product-form').closeModal();

			// clear modal content
			$scope.clearForm();

			// refresh the product list
			$scope.getAll();
		});
	}

	$scope.showCreateForm = function(){
		// clear form
		$scope.clearForm();

		// change modal title
		$('#modal-product-title').text("Create New Product");

		// hide update product button
		$('#btn-update-product').hide();

		// show create product button
		$('#btn-create-product').show();

	}

	// clear variable / form values
	$scope.clearForm = function(){
		$scope.id = "";
		$scope.name = "";
		$scope.description = "";
		$scope.price = "";
	}
// jquery script
});
