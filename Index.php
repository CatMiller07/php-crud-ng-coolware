<?php //some code ?>

<!DOCTYPE html>
<html lang="en">
	<head>
       <title>Coolwares.com</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <!--Import Materialize Stylesheet-->
       <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
       <link rel="sytlesheet" type"text/css" href="css/style.css">
	</head>
<body ng-app="myApp" ng-controller="homeCtrl" style="body{max-width: 860px;>

  <!----------Page Header ------------>
  <div id="maincontent" ">
      <div ng-include='"templates/header.php"'></div>
      <div ng-view></div>
       <div ng-include='"templates/footer.php"'></div>
  </div>
  <!------ jQuery ------>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
  <!------ jQuery: Materialize ------>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!-- angular js codes -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-route.min.js"></script>
  <!------- my js --------------->
  <script link src="js/home.js"></script>
     

</body>
</html>