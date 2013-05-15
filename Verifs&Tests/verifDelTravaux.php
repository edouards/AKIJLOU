<?php
//fonction de suppression de travaux
function DelTravaux(){
	if(isset($_POST['traId'])){
		include("connect.php");
		$supTra = $connect->prepare("DELETE FROM travaux WHERE tra_id=:traId");
		$supTra->bindParam(':traId',$_POST['traId']);
		$supTra->execute();
		$supTra->closeCursor();
	}
}

DelTravaux();