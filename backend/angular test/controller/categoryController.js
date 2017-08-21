'use strict';

/*  un controller egale a une action*/


module_back
	.controller('categoryIndex', function($scope){

	})

	.controller('categoryList', function($scope, categoryProvider){

				$scope.listDesFacultes = categoryProvider.getCategory();

	})

	.controller('categoryCreate', function($scope){


	})

	.controller('categoryRemove', function($scope){

	})

	.controller('categoryAdd', function($scope){

	})
	;
