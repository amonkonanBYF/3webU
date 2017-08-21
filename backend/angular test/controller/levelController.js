'use strict';

/*  un controller egale a une action*/

module_back
	
	.controller('levelList', function($scope, niveauProvider){

			$scope.niveau = niveauProvider.getNiveau();
	})

	.controller('levelCreate', function($scope){

	})

	.controller('levelRemove', function($scope){
		
	})
	.controller('levelAdd',function($scope){

	})
	;
