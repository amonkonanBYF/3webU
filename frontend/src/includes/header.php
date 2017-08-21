

<div class="row navigation">
				<!--<?php //include("src/includes/header.php");?>-->	
				<nav class="navbar navbar-default" role="navigation"> 
				   <div class="navbar-header">
				    	<a class="navbar-brand">3WebUniversity</a>
					    <ol class="breadcrumb">
							<li><a href="../../accueil.php">Accueil</a></li>
							<li><a href="../pages/equipe.php">L'Equipe </a></li>
							<li><a href="../pages/info.php">A Propos</a></li>
							<li><a href="../pages/contact.php">Contact</a></li>
						</ol>
					</div>
				    <div class='navbar-collapse collapse navbar-right'>
				    		 <ul class="nav navbar-nav">
				    		 	<li>
				    		 		<?php if(isset($_SESSION['nom'])) {
				    		 		echo "<li><a href='../systeme/controller/deconnexionController.php'>déconnexion</a></li>";
				    		 		echo "<li><a href='../membres/monCompte.php'>Mon Compte</a></li>";

				    		 		}else{
				    		 							    		 		echo "<a href='../pages/connexion.php'>connexion</a></li><li><a href='../pages/inscription.php'>s'inscrire</a></li>";

				    		 							    		 	}
				    		 		 ?>

				    		 		<!--<a href="../pages/connexion.php">connexion</a></li><li><a href="../pages/inscription.php">s'inscrire</a></li>-->

				    		 </ul>
				    </div>  	
				</nav>
			</div>


