<?php
//Fonction d'update des données de l'appartement
function UpdateAppt(){
	if(isset($_POST['apptUpdate'])){
		include("connect.php");
		if(isset($_POST['updateLoyer']) && $_POST['updateLoyer']!=""){
			$updateLoyer = $connect->prepare("UPDATE appartement SET app_loye=:loyer WHERE app_id=:appId");
			$updateLoyer->bindParam(':loyer',$_POST['updateLoyer']);
			$updateLoyer->bindParam(':appId',$_POST['apptUpdate']);
			$updateLoyer->execute();
			$updateLoyer->closeCursor();
		}
		if(isset($_POST['updateSuperficie']) && $_POST['updateSuperficie']>=9){
			$updateSuperficie = $connect->prepare("UPDATE appartement SET app_superficie=:superficie WHERE app_id=:appId");
			$updateSuperficie->bindParam(':superficie',$_POST['updateSuperficie']);
			$updateSuperficie->bindParam(':appId',$_POST['apptUpdate']);
			$updateSuperficie->execute();
			$updateSuperficie->closeCursor();
		}
		if(isset($_POST['updateNbPiece']) && $_POST['updateNbPiece']>=1){
			$updateNbPiece = $connect->prepare("UPDATE appartement SET app_nbPiece=:nbPiece WHERE app_id=:appId");
			$updateNbPiece->bindParam(':nbPiece',$_POST['updateNbPiece']);
			$updateNbPiece->bindParam(':appId',$_POST['apptUpdate']);
			$updateNbPiece->execute();
			$updateNbPiece->closeCursor();
		}
	}
}

UpdateAppt();
?>