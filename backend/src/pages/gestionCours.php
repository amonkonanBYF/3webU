


<?php session_start();?>

<!DOCTYPE  html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<title> 3WebUniversity</title></head>
	<!-- boostrap -->
	<link rel="stylesheet" type="text/css" href="../../../frontend/css/style.css" >
	<link rel="stylesheet" type="text/css" href="../../../frontend/composant/bootstrap/css/bootstrap.css" >	
	<!--<link rel="stylesheet" type="text/css" href="composant/bootstrap/css/bootstrap.min.css">   en prod-->
	
</head>


<body >
	
		<?php require_once('../includes/header.php'); ?>


	<div class="container abonnez-vous">
		<div class="row">
			<div class="col-xs-4">
				
				<h2>Dernier cours supprimé</h2>

				<div class="list-group">
					<input type='submit' value='Supprimer' class='btn btn-success'>
				  <button type="button" class="list-group-item"><span class="badge">4</span>Droit</button>
				  <button type="button" class="list-group-item"><span class="badge">14</span>langue étrangère</button>
				  <button type="button" class="list-group-item"><span class="badge">10</span>medecine</button>
				  <button type="button" class="list-group-item"><span class="badge">16</span>Science politique </button>
				  <button type="button" class="list-group-item"><span class="badge">24</span>economique</button>
				</div>
			</div>
			<div class="col-xs-4">
				<h2>Dernier cours ajouté</h2>


				<div class="list-group">
					<a href="addCours.php"><input type='submit' value='Ajouter' class='btn btn-success'></a>
				  <button type="button" class="list-group-item"><span class="badge">4</span>Droit</button>
				  <button type="button" class="list-group-item"><span class="badge">14</span>langue étrangère</button>
				  <button type="button" class="list-group-item"><span class="badge">10</span>medecine</button>
				  <button type="button" class="list-group-item"><span class="badge">16</span>Science politique </button>
				  <button type="button" class="list-group-item"><span class="badge">24</span>economique</button>
				</div>
			</div>
			<div class="col-xs-4">
				<h2>Dernier cours modifié</h2>

				<div class="list-group">
					<input type='submit' value='Modifier' class='btn btn-success'>
				  <button type="button" class="list-group-item"><span class="badge">4</span>Droit</button>
				  <button type="button" class="list-group-item"><span class="badge">14</span>langue étrangère</button>
				  <button type="button" class="list-group-item"><span class="badge">10</span>medecine</button>
				  <button type="button" class="list-group-item"><span class="badge">16</span>Science politique </button>
				  <button type="button" class="list-group-item"><span class="badge">24</span>economique</button>
				</div>
			</div>
		</div>
		<div class="row"></div>


	</div>
	

	<div class="container accueil">
		<div class='row'>
			<div class="panel panel-default text-center">
			  
			  <div class="panel-heading"><strong>Cours Modifié en attentent de validation</strong></div>

			  <table class="table">
			    <tr>
			    	<td>Faculté</td>
			    	<td>Niveau</td>
			    	<td>Cours</td>
			    	<td>Sexion</td>
			    	<td>Auteur</td>
			    	<td>Date</td>
			    	<td>Status</td>
			    	<td>validé</td>
			    	<td>réjété</td>
			    </tr>
			    <tr>
			    	<td>Droit</td>
			    	<td>Master 1</td>
			    	<td>Droit internationnal</td>
			    	<td>1</td>
			    	<td>Rita Kouamé</td>
			    	<td>11/02/2017</td>
			    	<td>en cours...</td>
			    	<td><a href=""><input type="submit" value='validé' class="btn btn-success"></a></td>
			    	<td><a href=""><input type="submit" value='réjéter' class="btn btn-warning"></a></td>
			    </tr>
			  </table>
			</div>

	</div>

	

	<div class="container accueil">
		<div class='row'>
			<div class='jumbotron'>
				<h1>Pour la page d'accueil</h1>
				<p>
				In ante sem, porta a nulla eget, mattis suscipit ipsum. Vestibulum feugiat felis ut ante tempus commodo. Sed ante ipsum, rutrum ut diam at, vulputate ultricies quam. Fusce erat sapien, imperdiet eu mollis eget, sollicitudin non turpis. Pellentesque malesuada odio a lorem fringilla gravida. 3webivore Sed commodo dolor con et netus et malesuada fames ac turpis egestasIn ante sem, porta a nulla eget, mattis suscipit ipsum. Vestibulum feugiat felis ut ante tempus commodo. Sed ante ipsum, rutrum ut diam at, vulputate ultricies quam. Fusce erat sapien, imperdiet eu mollis eget, sollicitudin non turpis. Pellentesque malesuada odio a lorem fringilla gravida. 3webivore Sed commodo dolor congue, maximus leo sed, vulputate massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestasIn ante sem, porta a nulla eget, mattis suscipit ipsum. Vestibulum feugiat felis ut ante temp netus et malesuada fames ac turpis egestasIntas</p>

				<button class='btn btn-success'>passer une commande</button>
			</div>
		</div>

	</div>


		
		
		
		


			
			

				
		<div row></div>
		

		

	</div>
<script type="text/javascript" src="../../../frontend/js/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="../../../frontend/composant/bootstrap/js/bootstrap.js" ></script>
<script type="text/javascript" src="../../../frontend/js/script.js" ></script>
</body>


</html>