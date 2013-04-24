<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<link href="style.css" rel="stylesheet"/>

		<title>AKIJLOU</title>
	</head>
	<body>
		<?php 
		//Variable de test de l'existance du login
		//Fonctions de vérifications
		include("Verifs&Tests/ajouteBailleur.php");
		include("Verifs&Tests/verifAuth.php");
		//On récupère l'id dans une variable pour les futurs tests
		if(AddUser()!=0){
			$idBailleur=AddUser();
		}else if(VerifUser()!=0){
			$idBailleur=VerifUser();
		}else{
			$idBailleur=0;
		}
		?>
		<div class="container" style="height:100%;">
			<div class="navbar-inner">
				<a class="brand" href="index.php"><h1>AKIJLOU</h1></a>
			</div>
			<nav>
			
			</nav>
			<article id="espaceUser">
			<?php

			if($idBailleur!=0){
				//On récupère les données relatives à l'utilisateur
				include('connect.php');
				$query = $connect->prepare("SELECT * FROM appartement WHERE app_idBailleur=:idBailleur ORDER BY app_id;");
				$query->bindParam(':idBailleur',$idBailleur);
				$query->execute();
				$appartement = $query->fetchObject();
				
				//On regarde si la requête retourne une valeur
				//Si oui on affiche le resultat
				//Sinon on propose d'ajouter un appartement
				if(isset($appartement->app_id)){
					print_r($appartement);
				}else{
					//include("Verifs&Tests/ajouteAppartement.php");
					echo "formulaire d'ajout d'un appartement en développement";
				}
			}else{
				echo "erreur";
			}
			?>
			</article>
			<footer style="text-align:center;color:white;">
				Projet scolaire à but non lucratif, libre de droit.
			</footer>
		</div>
	</body>
</html>