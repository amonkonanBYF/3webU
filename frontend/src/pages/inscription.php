<?php session_start();?>

<!DOCTYPE  html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
	<title> 3WebUniversity</title></head>
	<!-- boostrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../composant/bootstrap/css/bootstrap.css">	
	<!--<link rel="stylesheet" type="text/css" href="composant/bootstrap/css/bootstrap.min.css">   en prod-->
	
	


<body >
	<div class='container navigation'>
		
		<?php include("../includes/header.php");?>	
				
	</div>
	<div class="container accueil">

	</div>

	<div class="container a-propos">
		
	<div class="alert alert-warning text-center" role="alert" > les champs avec un (*) sont obligatoires merci de les respecter !</div>

		<div class="row text-center">
			<form class="form-horizontal col-md-12"method="POST" action="../systeme/controller/connexionController.php" target="_blank">
				<h1>Inscrivez vous</h1>
				<div class="form-group">
					<input type="text" name="nom" placeholder="Nom*" autofocus required>
				</div>
				<div class="form-group">
					<input type="text" name="prenom" placeholder="Prénoms*" required>
				</div>
				<div class="form-group">
					<input type="email" name="email" placeholder="Email*" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Mot de passe*" required>
				</div>
				<div class="form-group">
					<input type="password" placeholder="Confirmer*" required>
				</div>

					<input type="submit" name="inscription" value="S'inscrit" class="btn btn-primary" >

					
				</form>
				

				
		</div>

	</div>

		
		
		
		


			
			

				
		<div row></div>
		<?php include("../includes/footer.php"); ?>

		

	</div>
<script type="text/javascript" src="../../js/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="../../composant/bootstrap/js/bootstrap.js" ></script>
<script type="text/javascript" src="../../js/script.js" ></script>
</body>


</html>