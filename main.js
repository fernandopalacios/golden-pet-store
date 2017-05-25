var n = 1;
var mainApp = angular.module("mainApp",[]);
mainApp.controller("mainCtrl",function ($scope, $http){
	$scope.mostrarMenu = function(){
		n = n + 1;
		if(n % 2 == 0){								
			$scope.menuBtn = {					
				"color":"blue",
				"margin-left":"200px"
			};	
		}else{
			$scope.menuBtn = {
				"margin-left":"0px"
			};
		}				
	};
	$scope.onSubmit = function(){
		
		console.log($scope.modelMascota);
		$http.post("register.php", $scope.modelMascota).
				success(function (data) {
					console.log(":)")
				}).error(function (data) {
					console.log(":(")
				});
	};


});