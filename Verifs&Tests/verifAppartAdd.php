<?php
//On ajoute l'appartement et on retourne l'id d'utilisateur
//après vérifications
//Si les vérifications ne sont pas bonnes alors on retourne 0
function AddAppart($idbailleur){
	include('connect.php');

	if(isset($_POST['ad1']) && isset($_POST['cpAppart']) && isset($_POST['villeAppart']) && isset($_POST['loyer']) && isset($_POST['superficie']) && isset($_POST['nbPiece']) && isset($idbailleur)){
		if(strlen($_POST['ad1'])>=5 && strlen($_POST['cpAppart'])==5 && strlen($_POST['villeAppart'])>=2 && $_POST['superficie']>=9 && $_POST['nbPiece']>=1){
			$query = $connect->prepare("INSERT INTO appartement (app_ad1,app_ad2,app_cp,app_ville,app_loye,app_superficie,app_nbPiece,app_idBailleur)
										VALUES(:ad1,:ad2,:cp,:ville,:loyer,:superficie,:nbPiece,:idBailleur)");
			$query->bindParam(':ad1',$_POST['ad1']);
			if(isset($_POST['cplt'])){
				$query->bindParam(':ad2',$_POST['cplt']);
			}else{
				$query->bindParam(':ad2',null);
			}
			$query->bindParam(':cp',$_POST['cpAppart']);
			$query->bindParam(':ville',strtoupper($_POST['villeAppart']));
			$query->bindParam(':loyer',$_POST['loyer']);
			$query->bindParam(':superficie',$_POST['superficie']);
			$query->bindParam(':nbPiece',$_POST['nbPiece']);
			$query->bindParam(':idBailleur',$idbailleur);
			$query->execute();

			return $idbailleur;
		}else{
			return 0;
		}
	}
	return 0;
}