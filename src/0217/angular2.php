<!DOCTYPE html>
<html ng-app="serApp">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<div ng-controller="indexCtrl">
			<p>{{name}}</p>
		</div>
	</body>
	<script src="js/angular.js"></script>
	<script>
		var app = angular.module('serApp', []);
		app.controller('indexCtrl', function($scope, $http) {
			$http.get('test.php').success(function(data) {
				console.log(data);
				$scope.name = data;
			})
			$scope.name = '<?php echo 'yao2222';?>';
		})
	</script>
</html>