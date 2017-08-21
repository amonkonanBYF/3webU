<?php session_start();?>

<!DOCTYPE  html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<title> 3WebUniversity</title></head>
	<!-- boostrap -->
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<link rel="stylesheet" type="text/css" href="composant/bootstrap/css/bootstrap.css" >	
	<!--<link rel="stylesheet" type="text/css" href="composant/bootstrap/css/bootstrap.min.css">   en prod-->
	
</head>


<body >
	<!--<div>
			<video autoplay loop class="fillWidth">
				<source src="src/images/video.mp4" type="video/mp4"/>
			</video>
	</div>-->	

	<div class='container navigation'>
		<div class="row navigation">

				<nav class="navbar navbar-default" role="navigation"> 
				    
				   <div class="navbar-header">
				    	<a class="navbar-brand">3WebUniversity</a>
					    <ol class="breadcrumb">
							<li><a href="">Accueil</a></li>
							<li><a href="src/pages/equipe.php">L'Equipe </a></li>
							<li><a href="src/pages/info.php">A Propos</a></li>
							<li><a href="src/pages/contact.php">Contact</a></li>
						</ol>
					</div>
				    <div class='navbar-collapse collapse navbar-right'>
				    		 <ul class="nav navbar-nav">
				    		 	<li>
				    		 		<?php if(isset($_SESSION['nom'])) {
				    		 		echo "<li><a href='src/systeme/controller/deconnexionController.php'>déconnexion</a></li>";
				    		 		echo "<li><a href='src/membres/monCompte.php'>Mon Compte</a></li>";

				    		 		}else{
				    		 		echo "<a href='src/pages/connexion.php'>connexion</a></li><li><a href='src/pages/inscription.php'>s'inscrire</a></li>";

				    		 							    		 	}
				    		 		 ?>

				    		 </ul>
				    </div>  	
		 	
				</nav>
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

	<div class="container abonnez-vous">
		<div class="row">
			<div class="col-xs-6">
				<h2>Tarifs D'abonnement</h2>
				<ul class="nav nav-tabs">
					<li class='active'><a href="#0" data-toggle="tab">Mois</a></li>
					<li><a href="#1"  data-toggle="tab">6 mois</a></li>
					<li><a href="#2"  data-toggle="tab">à L'Année</a></li>
					<li><a href="#3"  data-toggle="tab">Catégories</a></li>
					<li><a href="#4"  data-toggle="tab">universite</a></li>
				</ul>
				<div class="tab-content">
					<div id="0" class="tab-pane active">
						<p>In ante sem, porta a nulla eget, mattis suscipit ipsum. Vestibulum feugiat felis ut ante tempus commodo. Sed ante ipsum, rutrum ut diam at, vulputate ultricies quam. Fusce erat sapien, imperdiet eu mollis eget, sollicitudin non turpis. Pellentesque malesuada odio a lorem fringilla gravida. 3webivore Sed commodo dolor con et netus et malesuada fames ac turpis egestasIn ante sem, porta a nulla eget, mattis suscipit ipsum. Vestibulu</p>
					</div>
					<div id="1" class="tab-pane ">
						<p>In ante sem, porta a nulla eget, mattis suscipit ipsum. Vestibulum feugiat felis ut ante tempus commodo. Sed ante ipsum, rutrum ut diam at, vulputate ultricies quam. Fusce erat sapien, imperdiet eu mollis eget, sollicitudin non turpis. Pellentesque malesuada odio a lorem fringilla gravida. 3webivore Sed commodo dolor con et netus et malesuada fames ac turpis egestasIn ante sem, porta a nulla eget, mattis suscipit ipsum. Vestibulu</p>
					</div>
					<div id="2" class="tab-pane ">tache runer</div>
					<div id="3" class="tab-pane ">role</div>
					<div id="4" class="tab-pane ">insponible</div>
					
				</div>
			</div>
			<div class="col-xs-6">
				<h2>Menu</h2>
			</div>
		</div>
		<div class="row"></div>


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
		<?php include("src/includes/footer.php"); ?>

		

	</div>
<script type="text/javascript" src="js/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="composant/bootstrap/js/bootstrap.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
</body>


</html>