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
		<div class='row'>
			<div class='jumbotron r'>
				<h1>connexion</h1>
				<form class="form-horizontal col-md-8 offset-2 " method="POST" action="../systeme/controller/connexionController.php" target="_blank">
					<div class="row">
						<div class="form-group col-md-4">
							<input type="email" name="email" placeholder="Email*" required >
						</div>
						<div class="form-group col-md-4" >
							<input type="password" name="password" placeholder="Mot de passe*" required>
						</div>
							<input type="submit" name="connecte" value="se connecté" class="btn btn-primary col-md-4" required>
					</div>


				</form>

			</div>
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