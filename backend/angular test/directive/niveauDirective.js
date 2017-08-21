'use strict'

module_back
			.directive('niveauTemplate', function(){


				return{

					template: "Niveau: {{list.nom}}"    //ici je fais mon template c'est a dire 

				}
			})

			.directive('directiveCategory', function(){

				return{
					template: "Nom faculté: {{n.nom}} directeur: Mr {{n.directeur}}"
				}
			})
;