<?php
/*
Fonction permettant de vérifier si un utilisateur existe dans la BDD ou non
retourne 0 si faux
retourne l'id de l'utilisateur si vrai
*/
function VerifUser(){
	//Instance de connexion
	include("connect.php");
	//On récupère l'id de l'utilisateur
	//dans le tableau $bailId[0] sous forme d'objet
	//Variable ou on stock le résultat
	$resultatQuery="";
	if(isset($_POST['logAuth']) && isset($_POST['passAuth'])){
		$verif = $connect->prepare("SELECT bail_id FROM bailleur WHERE bail_login=:log AND bail_pwd=:pwd");
		$verif->bindParam(':log',$_POST['logAuth']);
		$verif->bindParam(':pwd',crypt($_POST['passAuth'],$_POST['logAuth']));
		$verif->execute();
		$bailId = $verif->fetchAll(PDO::FETCH_OBJ);
		
		//On vérifie qu'il y ai un résultat
		if(isset($bailId[0]->bail_id)){
			$resultatQuery = $bailId[0]->bail_id;
			$verif->closeCursor();
		}else{
			$resultatQuery = 0;
		}
		return $resultatQuery;
	}
}
?>