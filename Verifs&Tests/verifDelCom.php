<?php
//fonction de suppression d'un commentaire
function DelCom(){
	include("connect.php");
	if(isset($_POST['comId'])){
		$supCom = $connect->prepare("DELETE FROM commentaire WHERE com_id=:comId");
		$supCom->bindParam(':comId',$_POST['comId']);
		$supCom->execute();
		$supCom->closeCursor();
	}
}
DelCom();