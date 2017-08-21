<?php
 	session_start(); 

 	try{ 
 		 $bdd = new PDO('mysql:host=localhost; dbname=webuniversite','root','' );
 		 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// activation des error PDO

 	}catch( Execption $e){

 		 die( 'une erreur a la connexion:' . $e->getMessage() );
 	}

 	var_dump($_POST);
 	var_dump($_FILES);
 	

 	       $type = $_POST["type"];
 	       $auteur = htmlspecialchars( $_POST["auteur"]);
 	       $matiere =htmlspecialchars( $_POST["matiere"]);
 	       $faculte =$_POST["faculte"];
 	       
 	       $titre =htmlspecialchars( $_POST["titre"]);
  	       $annee =htmlspecialchars($_POST["annee"]);
 	       $universite =$_POST["universite"];
 	       $niveau =$_POST["niveau"];
 	       $sexion =$_POST['sexion'];

 	       // ---------------------------------GESTION DES FICHIERS-------------------------------------------// 
 	       

 	      //$image =$_FILES["image"];
 	      //$imageNom =$image["name"];
  	      //var_dump($image);
 	      $destination = '../../document';
 	      $repertoire_upload_sujet = $_FILES["sujet"]["tmp_name"];
 	      $repertoire_upload_correction = $_FILES["correction"]["tmp_name"];
 	      $sujetNom =$_FILES["sujet"]["name"];
 	      $correctionNom =$_FILES["correction"]["name"];

 	      $repertoire_document = "../document/";


 	      $deplacement_sujet = move_uploaded_file($repertoire_upload_sujet ,"$destination/$sujetNom"); // deplace l'image dans le repertoire 	      
 	      $deplacement_correction = move_uploaded_file($repertoire_upload_correction ,"$destination/$correctionNom");       
			
		
		 

		if ($_FILES["sujet"]["error"] > 0 || $_FILES["correction"]["error"] > 0){

			 $erreur = "Erreur lors du transfert";
			 echo $erreur;
			 // gestion de l'erreur}
			}//else if($_FILES["image"]['size'] > 1048576){// 1048576 est la taille maxi
				 //$erreur = "Le fichier est trop gros"; 
				 //echo $erreur;
				//}
				
					$extensions_valides = array( 'docx' , 'pdf');
					//1. strrchr renvoie l'extension avec le point (« . »).
					//2. substr(chaine,1) ignore le premier caractère de chaine.
					//3. strtolower met l'extension en minuscules.
					$extension_upload_sujet = strtolower(  substr(  strrchr($sujetNom, '.')  ,1)  );
					$extension_upload_correction = strtolower(  substr(  strrchr($correctionNom, '.')  ,1)  );

					//&& in_array($extension_upload,$extensions_valides) Gestion des extention

			if(isset($_FILES["sujet"]) && isset($_FILES["correction"]) && in_array($extension_upload_sujet,$extensions_valides) ) {
					$bdd->query("INSERT INTO td_examen VALUES('','','$faculte','$type','$niveau','$matiere','$année', '$sexion','$repertoire_document$sujetNom','$repertoire_document$correctionNom', '$auteur','','$universite')");			
					}
				 


		

		die();

header('location: ../../pages/gestionCours.php' );
 	