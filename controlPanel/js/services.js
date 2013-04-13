'use strict';

/* Services */

angular.module('controlPanel.services', ['ngResource'])
	.factory('User', function($resource){
		return $resource('http://web.njit.edu/~bcn3/IT332Project/controlPanel/php/retrieveData.php',{},{
			query: {method: 'POST', params: {}, isArray: true}
		});
});