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
		include("Verifs&Tests/verifAppartAdd.php");
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
		<div class="container" style="height:100%;">
			<div class="navbar-inner">
				<a class="brand" href="index.php"><h1>AKIJLOU<i class="icon-home"></i></h1></a>
				<button class="btn btn-danger pull-right" id="deco">Déconnexion</button>
			</div>
			
			<div class="espaceUser span9">
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
					include("viewAppart.php");
				}else{
				?>
					<div class="accordion" id="accordion">
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse">
					        Vous n'avez pas d'appartement enregistré.
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
				}
			}else{
				echo "erreur";
			}
			?>
			</div>
		</div>
		<script src="jquery/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
	<footer>
		Projet scolaire à but non lucratif, libre de droit.
	</footer>
</html>