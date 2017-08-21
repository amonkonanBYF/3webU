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
		
		<?php include("../includes/headerProfile.php");
		?>	
				
	</div>
	<div class="container profil">
		<div class="row profil">
			<div class="col-xs-2">
						<?php  
						
						
						if($_SESSION['image'] == NULL || $_SESSION['image']== "../images/pp/" && $_SESSION['sexe'] == 'homme' ){ 

								echo "<img class='mini img-circle'  src='../images/avatar.png' />";
							}elseif ($_SESSION['sexe'] =='femme' && $_SESSION['image'] == NULL || $_SESSION['image']== "../images/pp/") {
							 	
							 						echo "<img class='mini img-circle'  src='../images/avatarfemme.png' />";

						 }else{  
						 $pp=$_SESSION['image'];
						echo "<img class='mini img-circle' src= $pp />";



						}

						?>




					
			</div>
				
				
				
					<div class="col-xs-5">
						<h2> Profil </h2>
						<ul class="nav nav-stacked">
							<li>Nom :<strong><?php echo $_SESSION['nom']; ?></strong></li>
							<li>Prénoms:<?php echo $_SESSION['prenom']; ?></li>
							<li>Faculté :<?php echo $_SESSION['faculte']; ?></li>
							<li>Niveau :<?php echo $_SESSION['niveau']; ?></li>

						</ul>
					</div>
			
					<div class="col-xs-5">
						
							<h2>Info Abonnement</h2>
							<ul class="nav nav-stacked">
								<li>Abonnez : non</li>
								<li>Statut : connecté</li>
								<li>Adresse : <?php echo $_SESSION['adresse']; ?></li>
								<li>@mail: <?php echo $_SESSION['email']; ?></li>
								<li>Téléphone: <?php echo $_SESSION['telephone']; ?> </li>
							</ul>
						
					</div>
			</div>
		</div>
	
		<div class="row">

		</div>


	</div>

	<div class="container cours">
		<div class='row cours'>
			<div class="col-xs-9">
				<div class="jumbotron">
					<h2>Titre du cours</h2>
					<p>
						In ante sem, porta a nulla eget, mattis suscipit ipsum. Vestibulum feugiat felis ut ante tempus commodo. Sed ante ipsum, rutrum ut diam at, vulputate ultricies quam. Fusce erat sapien, imperdiet eu mollis eget, sollicitudin non turpis. Pellentesque malesuada odio a lorem fringilla gravida. 3webivore Sed commodo dolor 
						<small>le prof</small>


					</p>

					<ul class="list-inline text-right">
						<li><a href="#">commenter</a></li>
						<li><a href="#">noter</a></li>
						<li><a href="#">télécharger</a></li>
						<li><a href="#">contacter le prof</a></li>
					</ul>

				</div>	
				<div class="jumbotron">
					<h2>Titre du cours</h2>
					<p>
						In ante sem, porta a nulla eget, mattis suscipit ipsum. Vestibulum feugiat felis ut ante tempus commodo. Sed ante ipsum, rutrum ut diam at, vulputate ultricies quam. Fusce erat sapien, imperdiet eu mollis eget, sollicitudin non turpis. Pellentesque malesuada odio a lorem fringilla gravida. 3webivore Sed commodo dolor 
						<small>le prof</small>


					</p>

					<ul class="list-inline text-right">
						<li><a href="#">commenter</a></li>
						<li><a href="#">noter</a></li>
						<li><a href="#">télécharger</a></li>
						<li><a href="#">contacter le prof</a></li>
					</ul>

				</div>	<div class="jumbotron">
					<h2>Titre du cours</h2>
					<p>
						In ante sem, porta a nulla eget, mattis suscipit ipsum. Vestibulum feugiat felis ut ante tempus commodo. Sed ante ipsum, rutrum ut diam at, vulputate ultricies quam. Fusce erat sapien, imperdiet eu mollis eget, sollicitudin non turpis. Pellentesque malesuada odio a lorem fringilla gravida. 3webivore Sed commodo dolor 
						<small>le prof</small>


					</p>

					<ul class="list-inline text-right">
						<li><a href="#">commenter</a></li>
						<li><a href="#">noter</a></li>
						<li><a href="#">télécharger</a></li>
						<li><a href="#">contacter le prof</a></li>
					</ul>

				</div>	

			</div>
			<div class="col-xs-3">
				<form id='search'><!-- bouton de recherce -->
					<div class ="input-group">
						<span class='input-group-addon'>@</span>
						<input type="search" class = "form-control" placeholder="Recherche..." />
						<span class="input-group-btn">
							<button type="submit"  class='btn btn-success'>GO</button>
						</span>
					</div>

				</form>

				<div class="panel panel-info">
					<div class="panel-heading"> 
						Cours
					 </div>
						<div class="panel-body">
			
						<ul class='nav nav-stacked'>	
							<li><a href="">Anglais<span class="badge pull-right">3</span></a></li>
							<li><a href="">Math <span class="badge pull-right">2</span></a></li>
							<li><a href="">cours 3<span class="badge pull-right">1</span></a></li>
							<li><a href="">cours 4<span class="badge pull-right"></span></a></li>

						</ul>	
					
						</div>

				</div>
				<div class="panel panel-success">
					<div class="panel-heading"> 
						Inscription récente 
					 </div>
					
						<div class="panel-body">
			
						<ul class='nav nav-stacked'>	
							<li><a href="">Anglais</a></li>
							<li><a href="">Math</a></li>
							<li><a href="">cours 3</a></li>
							<li><a href="">cours 4</a></li>

						</ul>
						</div>	
					

				</div>
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