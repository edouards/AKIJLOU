<?php
//fonction de d'ajout de travaux
function AddTravaux(){
	if(isset($_POST['appId']) && isset($_POST['cout'])){
		include("connect.php");
		//convertion en nombre relatif 
		$_POST['cout'] = (float)$_POST['cout'];

		if(strlen($_POST['motif'])>0 && strlen($_POST['dateDebTra'])==10 && strlen($_POST['dateFinTra'])==10 && gettype($_POST['cout'])=="double" && strlen($_POST['cout'])>0){
			$ajouteTrav = $connect->prepare("INSERT INTO travaux (tra_motif,tra_dateDeb,tra_dateFin,tra_cout,tra_idApp)
												VALUES(:motif,:dateDeb,:dateFin,:cout,:idApp)");
			$ajouteTrav->bindParam(':motif',strtoupper($_POST['motif']));
			$ajouteTrav->bindParam(':dateDeb',$_POST['dateDebTra']);
			$ajouteTrav->bindParam(':dateFin',$_POST['dateFinTra']);
			$ajouteTrav->bindParam(':cout',$_POST['cout']);
			$ajouteTrav->bindParam(':idApp',$_POST['appId']);
			$ajouteTrav->execute();
			$ajouteTrav->closeCursor();
		}
	}
}

Addtravaux();