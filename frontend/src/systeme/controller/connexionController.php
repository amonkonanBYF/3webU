<?php
 	session_start(); 


 	
 

 	try{ 
 		 $bdd = new PDO('mysql:host=localhost; dbname=webuniversite','root','' );
 		 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// activation des error PDO

 	}catch( Execption $e){

 		 die( 'une erreur a la connexion:' . $e->getMessage() );
 	}
 	//connexion
 	if (isset($_POST['connecte']) && isset($_POST['email']) && isset($_POST['password'])){
 		
 		//verifié si c'est un email avant de l'envoyer en bdd
 		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
 			//événement à traiter 
 			echo "l'email n'est pas en conformité";
 		}else{
 		$login = $_POST['email'];
 		$password = htmlspecialchars($_POST['password']);
 		$password= sha1($_POST['password']);
 		
 		// je prépare ma requete
 		//$requete = $bdd->prepare("SELECT id_user FROM users WHERE email = :email AND password = :password");
 		$requete = $bdd->query("SELECT * FROM user WHERE email = '$login' AND password = '$password'");
 		//je rattache mes de ma requete avec cette du formulaire  avec un bindparam 
		// $requete->bindParam(':email', $login);
		 //$requete->bindParam(':password', $password);
 		 // j'execute ma requete
 		 //$requete->execute();
 		 //$requete->execute(array('email'=>$login, 'password'=>$password));
 		 
 		 $resultat = $requete->fetch(PDO::FETCH_ASSOC);//fetch_assoc: Retourne un tableau, indexé par nom de colonne, représentant une ligne du jeu de résultats

 		 	if(!$resultat){

 		 		echo "votre mot de passe ou votre email est incorrect";

 		 	}else{
 		 
 		 	$_SESSION['id_user'] = $resultat['id_user'];
    		$_SESSION['prenom'] = $resultat['prenom'];
    		$_SESSION['nom'] = $resultat['nom'];
    		$_SESSION['email'] = $resultat['email'];
    		$_SESSION['image'] = $resultat['image'];
    		$_SESSION['niveau'] = $resultat['niveau'];
    		$_SESSION['faculte'] = $resultat['faculte'];
    		$_SESSION['pays'] = $resultat['pays'];
    		$_SESSION['adresse'] = $resultat['adresse'];
    		$_SESSION['telephone'] = $resultat['telephone'];
            $_SESSION['universite'] = $resultat['universite'];
    		$_SESSION['sexe'] = $resultat['sexe'];
    		echo 'Vous êtes connecté !';
    		echo "bienvenue ".$resultat['prenom'];

 			header('location: ../../membres/monCompte.php' );
 		 
 		 

 		 	}

 		 }
 		}
 		 
 	

 	//inscription
 	if (isset($_POST['inscription']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) ){
 			  $nom = $_POST['nom'];
 			  $prenom = $_POST['prenom'];
 			  $email = $_POST['email'];
 			  $password = sha1($_POST['password']);

 		
 			  	
 		//vérification des donnés
 			htmlspecialchars($nom);
 			htmlspecialchars($prenom);
 			htmlspecialchars($email);
 			htmlspecialchars($password);

 			 

 		//requete préparé
 		$req = $bdd->prepare('INSERT INTO user(id_user, nom, prenom, email, password)
 								VALUES(:id_user ,:nom, :prenom, :email, :password)'

 								);
 		//execution de la requete prparer
 		$req->execute(array(

 			'id_user' =>'',
 			'nom' =>$nom,
 			'prenom' =>$prenom,
 			'email' =>$email,
 			'password' =>$password,


 			));

 		//echo "merci vous etes inscrit";
 		header('location: ../../pages/mailConfirme.php' );

 	}







?>