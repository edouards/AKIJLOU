<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet"/>

		<title>AKIJLOU</title>
	</head>
	<body>
		<div class="container" style="height:100%;">
			<div class="navbar-inner">
				<a class="brand" href="index.php">
					<h1>AKIJLOU<i class="icon-home"></i></h1>
					<h3>Gestion de location de biens immobilier</h3>
				</a>
				<form method="POST">
					<input type="submit" class="btn btn-danger pull-right" id="deco" name="deco" value="Déconnexion" style="margin-bottom:1%;"/>
				</form>
			</div>
			<?php 
			//Variable de test de l'existance du login
			//Fonctions de vérifications
			include("Verifs&Tests/Deconnexion.php");
			include("Verifs&Tests/ajouteBailleur.php");
			include("Verifs&Tests/verifAuth.php");
			include("Verifs&Tests/verifAppartAdd.php");
			include("Verifs&Tests/verifComAdd.php");
			include("Verifs&Tests/verifDelAppart.php");
			include("Verifs&Tests/verifDelCom.php");
			include("Verifs&Tests/verifDelLoc.php");
			include("Verifs&Tests/verifTravauxAdd.php");
			include("Verifs&Tests/verifDelTravaux.php");
			include("Verifs&Tests/verifPhotoAdd.php");
			include("Verifs&Tests/verifDelPhoto.php");
			include("Verifs&Tests/verifUpdateAppart.php");
			//On regarde si il s'agit d'une redirection après l'ajout d'un appartement
			if(isset($_POST['ad1'])){
				AddAppart($_SESSION['idBailleur']);
			}else{
				//On récupère l'id dans une variable pour les futurs tests
				if(AddUser()!=0){
					$_SESSION['idBailleur'] = AddUser();
				}else if(VerifUser()!=0){
					$_SESSION['idBailleur'] = VerifUser();
				}
			}
		
			?>
			<div class="espaceUser">
			<?php
			if(isset($_SESSION['idBailleur'])){
				//On récupère les données relatives à l'utilisateur
				include('connect.php');
				$query = $connect->prepare("SELECT * FROM appartement WHERE app_idBailleur=:idBailleur ORDER BY app_id;");
				$query->bindParam(':idBailleur',$_SESSION['idBailleur']);
				$query->execute();
				$appartement = $query->fetchAll(PDO::FETCH_OBJ);
				//On regarde si la requête retourne une valeur
				//Si oui on affiche le resultat
				//Sinon on propose d'ajouter un appartement
				if(isset($appartement[0]->app_id)){
					include("Verifs&Tests/verifLocataireAdd.php");
					include("viewAppart.php");
				}else{
				?>
					<div class="accordion" id="accordion">
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse">
					        Vous n'avez pas de biens enregistrés.
					        <button class="btn btn-link"><i class="icon-plus"></i></button>
					      </a>
					    </div>
					    <div id="collapse" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <?php include("Verifs&Tests/ajouteAppartement.php");?>
					      </div>
					    </div>
					  </div>
					</div>
				<?php
				$query->closeCursor();
				}
			}else{
				echo "<p class='alert alert-error'>erreur</p>";
				?> <script src="Javascript/BtnDeco.js"></script><?php
			}
			?>
			</div>
		</div>
		<script src="jquery/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="Javascript/Deconnexion.js"></script>
	</body>
	<footer>
		<ul class="breadcrumb">
		  <li><a href="#">Projet scolaire à but non lucratif, libre de droit</a> <span class="divider">/</span></li>
		  <li><a href="Documents/DocUtilisateurAkijlou.pdf" target="_blank">Documentation Utilisateur</a><span class="divider">/</span></li>
		  <li><a href="Documents/DocTechniqueAkijlou.pdf" target="_blank">Documentation Technique</a></li>
		</ul>
	</footer>
</html>