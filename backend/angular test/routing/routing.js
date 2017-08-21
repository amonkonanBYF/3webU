'use strict';

module_back.config(

		function($routeProvider){
			$routeProvider
							.when('/level/',{

								controller:'levelList',
								templateUrl:'view/listNiveau.html'
							})

							when('/level/',{

								controller:'admin',
								templateUrl:'view/connexion.html'
							})
		

	});