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
		
	<div class="alert alert-warning" role="alert" > les champs avec un (*) sont obligatoires merci de les respecter !</div>

		<div class="row">
			<form class="form-horizontale  col-md-12"method="POST" action="../systeme/controller/modifierProfilController.php" enctype="multipart/form-data">
				<h1>Modifier votre profile</h1>


				<div class="form-group hidden">

					 <input type="text" name="id_user" value='<?php  var_dump($_SESSION["id_user"]) ?>' >id<br>
				</div>

				<div class="form-group">

					 <input type="radio" name="sexe" value="homme" checked> Homme<br>
				</div>

				<div class="form-group">

  					<input type="radio" name="sexe" value="femme"> Femme<br>
				</div>

				<div class="form-group">
				    <label>Photo</label>
				    <input type="file" id="photo_pp" name="image" value="1048576">
				    <p class="help-block">Choisir une photo de profile taime max 1 MO</p>
				 </div>

				<div class="form-group">
					<label >Nom </label>
					<input type="text" name="nom" value="<?php echo $_SESSION['nom'];  ?>" autofocus >
				</div>
				<div class="form-group">
					<label >Prénoms </label>
					<input type="text" name="prenom" value="<?php  echo $_SESSION['prenom'];  ?>" >
				</div>
				<div class="form-group">
					<label >Email </label>
					<input type="email" name="email" value="<?php  echo $_SESSION['email'];  ?>" disabled>
				</div>
				<!--<div class="form-group">
					<label >Mot De Passe </label>
					<input type="password" name="password" placeholder="Mot de passe*" disabled>
				</div>-->
				<div class="form-group">
					<label >Date De Naissance</label>
					<input type="date"  name="date-naissance" >
				</div>
				<!--<div class="form-group" hidden>
					<label >Pays</label>
					<input type="text" name="pays" placeholder="Pays" >
				</div>-->
				<div class="form-group">
					<label >Adresse </label>
					<input type="text" name="adresse" placeholder="Adresse" value="<?php  echo $_SESSION['adresse'];  ?>" >
				</div>
				<div class="form-group">
					<label>Choisir a faculté</label>
					<select class="form-control" name="faculte">
					  <option>Littérature et civilisation </option>
					  <option>Sciences humaine </option>
					  <option>Mathématique et informatique</option>
					  <option>Sciences de la terre et des ressources minières </option>
					  <option>Faculté de droit </option>
					  <option>Sciences des structures de la matière et de la technologie</option>
					  <option>Science économie et gestion </option>
					  <option>Information communication et arts (ICA)  </option>
					</select>
				</div>
				<div class="form-group">
					<label >Téléphone </label>
					<input type="tel" placeholder="(+225)" name="telephone" value="<?php  echo $_SESSION['telephone'];  ?>">
				</div>

				<div class="form-group">
					<label>Choisir ton niveau</label>
					<select class="form-control" name="niveau">

					  <option>Licence 1</option>
					  <option>Licence 2</option>
					  <option>Licence 3</option>
					  <option>Master 1</option>
					  <option>Master 2</option>
					</select>
				</div>
				<div class="form-group">
					<label>Choisir ton université</label>
					<select class="form-control" name="universite">
					  <option>Université de Cocody</option>
					  <option>Université Abobo-Adjamé</option>
					  <option>Université de Bouaké</option>
					  <option>Autre Université</option>
					  
					</select>
				</div>

					<input type="submit" name="modifier" value="Modifier" class="btn btn-primary" >
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