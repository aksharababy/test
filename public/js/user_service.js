'use strict';
App.factory('User', ['$resource', function ($resource) {
 return $resource('/entries/:id', 
    		{id: '@id'},
    		{
    			update: {
    			      method: 'PUT' 
    			}
    			
    		}
    );
}]);




