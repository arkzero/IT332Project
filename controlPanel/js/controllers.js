'use strict';

/* Controllers */

function UserList($scope, $http, User){
	/*$http.get("http://web.njit.edu/~bcn3/IT332Project/controlPanel/php/retrieveData.php").success(function(data){
		$scope.users = data;
	});*/
	$scope.users = User.query();

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
}

function UserDetails($scope, $routeParams, User){

}