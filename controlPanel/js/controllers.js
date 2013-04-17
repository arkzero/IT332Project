'use strict';

/* Controllers */

function UserList($scope, $http, User){
	/*$http.get("http://web.njit.edu/~bcn3/IT332Project/controlPanel/php/retrieveData.php").success(function(data){
		$scope.users = data;
	});*/
	$scope.users = User.query(function(user){
		$scope.selected = user[0];
	});

	$scope.orderProp = 'uid';
	$scope.reverse = true;

	function changeOrder(){
		if($scope.orderProp === 'uid'){
			$scope.reverse = true;
		}else if ($scope.orderProp === 'username'){
			$scope.reverse = false;
		}else if ($scope.orderProp === 'credit_card'){
			$scope.reverse = true;
		}
	}

	$scope.selectUser = function(user) {
		$('#' + $scope.selected.uid).removeClass('selected');
	    $scope.selected = user;
	    $('#' + $scope.selected.uid).addClass('selected');
	}
}

function UserDetails($scope, $routeParams, User){
	$scope.users = User.query(function(user) {
	    $scope.selected = user[$routeParams.uid - 1];
	});
}