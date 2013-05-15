<?php 
//Fonction de suppression d'un locataire
function DelLoc(){
	include("connect.php");
	if(isset($_POST['locId'])){
		$supLoc = $connect->prepare("DELETE FROM locataire WHERE loc_id=:locId");
		$supLoc->bindParam(':locId',$_POST['locId']);
		$supLoc->execute();
		$supLoc->closeCursor();
	}
}
DelLoc();