<?php
//Suppression d'un photo
if(isset($_POST['idPh']) && isset($_POST['pathPh'])){
	if(unlink($_POST['pathPh'])){
		include("connect.php");
		$delPh = $connect->prepare("DELETE FROM photo WHERE ph_id=:idPh");
		$delPh->bindParam(':idPh',$_POST['idPh']);
		$delPh->execute();
		$delPh->closeCursor();
	}else{
		echo "Erreur lors de la suppression de la photo.";
	}
}