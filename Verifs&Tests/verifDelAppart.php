<?php
//fonction de suppression d'un appartement
function DelAppt(){
	if(isset($_POST['appIdDel'])){
		include("connect.php");
		//Suppression des locataires associés à l'appartement 
		$delLoc = $connect->prepare("DELETE FROM locataire WHERE loc_idApp=:appId");
		$delLoc->bindParam(':appId',$_POST['appIdDel']);
		$delLoc->execute();
		$delLoc->closeCursor();

		//Suppression des commentaires associés
		$delCom = $connect->prepare("DELETE FROM commentaire WHERE com_idApp=:appId");
		$delCom->bindParam(':appId',$_POST['appIdDel']);
		$delCom->execute();
		$delCom->closeCursor();

		//Suppression des travaux associés
		$delTra = $connect->prepare("DELETE FROM travaux WHERE tra_idApp=:appId");
		$delTra->bindParam(':appId',$_POST['appIdDel']);
		$delTra->execute();
		$delTra->closeCursor();

		//Suppression des photos associées
		$delPhoto = $connect->prepare("DELETE FROM photo WHERE ph_idApp=:appId");
		$delPhoto->bindParam(':appId',$_POST['appIdDel']);
		$delPhoto->execute();
		$delPhoto->closeCursor();

		//Suppresison de l'appartement
		$delAppt = $connect->prepare("DELETE FROM appartement WHERE app_id=:appId");
		$delAppt->bindParam(':appId',$_POST['appIdDel']);
		$delAppt->execute();
		$delAppt->closeCursor();
	}
}

DelAppt();