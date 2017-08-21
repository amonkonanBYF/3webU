'use strict';

var niveau = [
	{'id': 1,'nom':'licence 1',  },
	{'id': 2,'nom':'licence 2',  },
	{'id': 3,'nom':'licence 3',  },
	{'id': 4,'nom':'Master 1',  },
	{'id': 5,'nom':'Master 2',  },
	{'id': 6,'nom':'Doctora',  }


];

var category = [
	{'id': 1,'nom':'science éco', 'directeur':'amonkonan' },
	{'id': 1,'nom':'lettre moderne', 'directeur':'amonkonan' },
	{'id': 1,'nom':'langue etrangère ', 'directeur':'amonkonan' }
	


];


module_back
		.service('niveauProvider', function(){

			this.getNiveau = function(){

				return niveau;
			}
		})

		.service('categoryProvider', function(){

			this.getCategory = function(){

				return category;
			}


		})

		;