<?php
		//vérifie si il y a des données postées
		//if($_SERVER['REQUEST_METHOD'] == 'POST'){

			if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])){
				// on evite les filles XSS
				$nom     = 	htmlspecialchars($_POST['nom']);
				$prenom  = 	htmlspecialchars($_POST['prenom']);
				$email   = 	htmlspecialchars($_POST['email']);
				$sujet 	 = 	htmlspecialchars($_POST['sujet']);
				$message = 	htmlspecialchars($_POST['message']);
				//on verifié coté serveur si le mail est bien conforme
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					//évenement d'erreur a traiter
					echo "l'email récu ne correspond pas a un email";
					
					}else{

						//pour pouvoir evoyer un email HTML l'entete doit etre definie 
						$header = 'content_type:text/html charset=UTF8';
						
						$destination ='amonkemet@gmail.com';
						//$contenu ='<html><head><titre>Titre du message</titre></head><body>';
						$contenu ='Vous venez de récevoire un email de votre site 3webivoire';
						$contenu .='Nom:'.$nom;
						$contenu .='Prenom:'.$prenom;
						$contenu .='Email:'.$email;
						$contenu .='Sujet:'.$sujet;
						$contenu .='Message:'.$message;
						//$contenu .='</body></html>';

						mail($destination, $sujet, $contenu, $header);
						echo "message envoyé";

						//------------------ IMPORTANT-----------------//
						/* 
							pour pourvoir envoyer de mail, il faut configuré php.ini la partie mail function

							[mail function]
							; For Win32 only.
							; http://php.net/smtp
							SMTP = smtp.sfr.fr  // remplacer le localhost par l'adresse SMTP de sont fournisseur d'acces internet
							; http://php.net/smtp-port
							smtp_port = 25
							et remplacer  you@yourdomain par son mail
							
							si non on a une erreur*/
					}
			}
			else{
				//gestion des erreurs a la saisie du formulaire

				echo "vous n'avez pas remplir tous les champs obligatoires";

			}

		//}
		

?>