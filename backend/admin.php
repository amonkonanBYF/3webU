<?php session_start();?>

<!DOCTYPE  html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
	<title> Contact</title></head>
	<link rel="stylesheet" type="text/css" href="../frontend/composant/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../frontend/css/style.css">
	<script type="text/javascript" ></script>


<body id="conteneur">

<div id="superDiv">


<div class="container">

	<h1>PAGE RESERVER AUX ADMINISTRATEURS</h1>


				<form class="form-horizontal col-md-8 offset-2" method="POST" action="src/autentification.php">
					<div class="row">
						<div class="form-group col-md-4">
							<input type="email" name="email" placeholder="Email*" required >
						</div>
						<div class="form-group col-md-4" >
							<input type="text" name="password" placeholder="Mot de passe*" required>
						</div>
							<input type="submit" name="connecte" value="se connecté" class="btn btn-primary col-md-4" required>
					</div>


				</form>
		</div><!-- fin row1 -->

</div>
</div>


</body>


</html>

