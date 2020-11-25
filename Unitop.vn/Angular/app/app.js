var myApp = angular.module("myApp", []);
myApp.controller("showMessage", function($scope){
	$scope.message = "Xin chao";
	$scope.data = {}; //khai bao data la mot object
	$scope.data.message = "noi dung";
});

myApp.controller("Controller1", function($scope, $rootScope){
	$scope.message = "Noi dung 1";
	$rootScope.message = "Nội dung chung"; //ảnh hưởng đến mọi message không có $scope
});

myApp.controller("Controller2", function($scope){
	// $scope.message = "Noi dung 2";
});