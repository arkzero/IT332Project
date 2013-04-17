'use strict';

angular.module('controlPanel', ['controlPanel.filters', 'controlPanel.services', 'controlPanel.directives']).
	config(['$routeProvider', function($routeProvider){
		$routeProvider.when('/users', {
			templateUrl: 'partials/user-list.html',
			controller: UserList
		});
		$routeProvider.when('/users/:uid', {
			templateUrl: 'partials/user-details.html',
			controller: UserDetails
		});
		$routeProvider.otherwise({redirectTo: '/users'});
}]);
