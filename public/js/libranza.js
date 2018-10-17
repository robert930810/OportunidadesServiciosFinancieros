angular.module('appLibranzaLiquidador', [])
.controller("libranzaLiquidadorCtrl", function($scope, $http) {
	$scope.test = function(){
		$http({
		  method: 'GET',
		  url: 'api/libranza/test/'+10000
		}).then(function successCallback(response) {
		    console.log(response);
		}, function errorCallback(response) {
		    console.log(response);
		});
	}
});