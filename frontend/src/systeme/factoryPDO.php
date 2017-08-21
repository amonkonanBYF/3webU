<?php



class Connexion{


	public function getConnexion($host)
	{

		if ($host = $localhost) {
		

		try{ 
 		 $bdd = new PDO('mysql:host=localhost; dbname=webuniversite','root','' );
 		 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// activation des error PDO

 			}catch( Execption $e){

 		 die( 'une erreur a la connexion:' . $e->getMessage() );


 	
 			
			}
		}
	}
}

 	?>