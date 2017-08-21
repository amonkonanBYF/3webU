<?php session_start();?>


<!DOCTYPE  html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<title> Add cours</title></head>
	<!-- boostrap -->
	<link rel="stylesheet" type="text/css" href="../../../frontend/css/style.css" >
	<link rel="stylesheet" type="text/css" href="../../../frontend/composant/bootstrap/css/bootstrap.css" >	
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
			<form class="form-horizontale  col-md-12" method="POST" action="../systeme/controllers/addCoursController.php">
				<h1>Ajouter un Contenu</h1>


				

			<div class="form-group">

				<div class="form-group">
					<label>TD ou EXAMEN</label>
					<select class="form-control" name="type">
					  <option>TD</option>
					  <option>Examen</option>
					</select>
				</div>

				<div class="form-group">
				    <label>Faculté</label>
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
					<label>Niveau</label>
					<select class="form-control" name="niveau">

					  <option>Licence 1</option>
					  <option>Licence 2</option>
					  <option>Licence 3</option>
					  <option>Master 1</option>
					  <option>Master 2</option>
					</select>
				</div>
				<div class="form-group">
					<label >Matière </label>
					<input type="text"  name="matiere" >
				</div>
				<div class="form-group">
					<label >Titre</label>
					<input type="text"  name="titre" >
				
				<div class="form-group">
					<label >Année</label>
					<input type="int"  name="annee" >
				</div>
				
				<div class="form-group">
					<label>Sexion</label>
					<select class="form-control" name="sexion">
					  <option>1</option>
					  <option>2</option> 
					</select>
				</div>
				<div class="form-group">
					<label>université</label>
					<select class="form-control" name="universite">
					  <option>Université de Cocody</option>
					  <option>Université Abobo-Adjamé</option>
					  <option>Université de Bouaké</option>
					  <option>Autre Université</option>
					  
					</select>
				</div>

				</div>
				<div class="form-group">
					<label > Sujet  </label>
					<input type="file"  name="sujet" >
				</div>
				<div class="form-group">
					<label >Correction </label>
					<input type="file"  name="correction" >
				</div>

				<div class="form-group">
					<label >auteur</label>
					<input type="text" name="auteur"  autofocus >
				</div>
				

					<input type="submit" name="ajouter" value="Ajouter" class="btn btn-primary" >
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