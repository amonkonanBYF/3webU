<?php
 	session_start(); 

 	try{ 
 		 $bdd = new PDO('mysql:host=localhost; dbname=webuniversite','root','' );
 		 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// activation des error PDO

 	}catch( Execption $e){

 		 die( 'une erreur a la connexion:' . $e->getMessage() );
 	}

 	       $id =$_SESSION["id_user"];
 	       $sexe =$_POST["sexe"];
 	       $nom = htmlspecialchars( $_POST["nom"]);
 	       $prenom =htmlspecialchars( $_POST["prenom"]);
 	       $faculte =$_POST["faculte"];
 	       //$email =htmlspecialchars( $_POST["email"]);
 	       //$password =sha1($_POST["password"]);
 	       $adresse =htmlspecialchars( $_POST["adresse"]);
 	       //$pays =htmlspecialchars($_POST["pays"]);
 	       $telephone =htmlspecialchars($_POST["telephone"]);
 	       $universite =$_POST["universite"];
 	       $niveau =$_POST["niveau"];
 	       $niveau =$_POST["niveau"];
 	       $date_naissance =$_POST['date-naissance'];

 	       // ---------------------------------GESTION DE L'IMAGE-------------------------------------------// 
 	       

 	      //$image =$_FILES["image"];
 	      //$imageNom =$image["name"];
  	      //var_dump($image);
 	      $destination = '../../images/pp';
 	      $repertoire_upload = $_FILES["image"]["tmp_name"];
 	      $imageNom =$_FILES["image"]["name"];

 	      $repertoire_image = "../images/pp/";


 	      $deplacement_image = move_uploaded_file($repertoire_upload ,"$destination/$imageNom"); // deplace l'image dans le repertoire pp	      
			
		
		 

		if ($_FILES["image"]["error"] > 0){

			 $erreur = "Erreur lors du transfert";
			 echo $erreur;
			 // gestion de l'erreur}
			}else if($_FILES["image"]['size'] > 1048576){// 1048576 est la taille maxi
				 $erreur = "Le fichier est trop gros"; 
				 echo $erreur;
				}
				
					$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
					//1. strrchr renvoie l'extension avec le point (« . »).
					//2. substr(chaine,1) ignore le premier caractère de chaine.
					//3. strtolower met l'extension en minuscules.
					$extension_upload = strtolower(  substr(  strrchr($imageNom, '.')  ,1)  );

					//&& in_array($extension_upload,$extensions_valides) Gestion des extention

			/*if ( isset($_FILES["image"]) && in_array($extension_upload,$extensions_valides)  ) {
					$bdd->query("UPDATE user SET image='$repertoire_image$imageNom' where id_user= '$id'");
					$_SESSION['image'] = $repertoire_image.$imageNom;

					
					}*/
				 		


		switch(isset($_POST['modifier'])){
			case 'isset($sexe)':
				$bdd->query("UPDATE user SET sexe='$sexe' where id_user= '$id' ");
				$_SESSION['sexe'] = $sexe;
				
			case 'isset($faculte)':
				$bdd->query("UPDATE user SET faculte='$faculte' where id_user= '$id' ");
				$_SESSION['faculte'] = $faculte;
				
			case 'isset($nom) ':
				$bdd->query("UPDATE user SET nom='$nom' where id_user= '$id' ");
				$_SESSION['nom'] = $nom;
				
			case 'isset($prenom)':
				$bdd->query("UPDATE user SET prenom='$prenom' where id_user= '$id'");
				$_SESSION['prenom'] = $prenom;
				
			case 'isset($date_naissance)':
				$bdd->query("UPDATE user SET Date_naissance='$date_naissance'where id_user= '$id'");
				$_SESSION['Date_naissance'] = $date_naissance;
				
			/*case 'isset($password)':
				$bdd->query("UPDATE user SET password='$password' where id_user= '$id'");
				$_SESSION['password'] = $password;
				
			case 'isset($email)':
				$bdd->query("UPDATE user SET email='$email' where id_user= '$id'");
				$_SESSION['email'] = $email;
				break;*/
			case 'isset($adresse)':
				$bdd->query("UPDATE user SET adresse='$adresse' where id_user= '$id'");
				$_SESSION['adresse'] = $adresse;
				
			case 'isset($niveau)':
				$bdd->query("UPDATE user SET niveau='$niveau' where id_user= '$id'");
				$_SESSION['niveau'] = $niveau;
				
			case 'isset($universite)':
				$bdd->query("UPDATE user SET universite='$universite' where id_user= '$id'");
				$_SESSION['universite'] = $universite;
			case 'isset($telephone)':
				$bdd->query("UPDATE user SET telephone='$telephone' where id_user= '$id'");
				$_SESSION['telephone'] = $telephone;
			//case 'isset($pays)':
				//$bdd->query("UPDATE user SET pays='$pays' where id_user= '$id'");
				case 'isset($_FILES["image"] && in_array($extension_upload,$extensions_valides))':
				$bdd->query("UPDATE user SET image='$repertoire_image$imageNom' where id_user= '$id'");
					$_SESSION['image'] = $repertoire_image.$imageNom;

				break;

			default:

					break;

					
			
		}

header('location: ../../membres/monCompte.php' );
 	